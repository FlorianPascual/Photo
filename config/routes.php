<?php
/**
 * Rave <https://github.com/Classicodr/rave-core>
 * Copyright (C) 2016 Rave Team
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

use rave\core\Config;
use rave\core\Error;
use rave\core\exception\RouterException;
use rave\core\router\Router;

/**
 * Instantiation of the Router object
 */
$router = new Router(isset($_GET['url']) ? $_GET['url'] : '/');

/**
 * Front office routes
 */
$router->get('/', ['Main' => 'index']);

$router->get('/photo', ['Photo' => 'index']);

$router->post('/photo-like-:id', ['Photo' => 'like'])->with('id', '([0-9]{1,6})');

$router->get('/photo-display-:id', ['Photo' => 'display'])->with('id', '([0-9]{1,6})');

$router->get('/contact', ['Contact' => 'index']);

$router->post('/contact', ['Contact' => 'index']);

$router->get('/search', ['Photo' => 'search']);

$router->post('/search', ['Photo' => 'search']);

$router->post('/comment-add-:id', ['Comment' => 'add'])->with('id', '([0-9]{1,6})');

/**
 * Back office routes
 */
$router->get('/admin', ['Admin' => 'index']);

$router->get('/admin-login', ['Admin' => 'login']);

$router->post('/admin-login', ['Admin' => 'login']);

$router->get('/admin-manage', ['Admin' => 'manage']);

$router->get('/admin-account', ['Admin' => 'account']);

$router->post('/admin-account', ['Admin' => 'account']);

$router->get('/admin-logout', ['Admin' => 'logout']);

$router->get('/admin-add-photo', ['Admin' => 'addPhoto']);

$router->post('/admin-add-photo', ['Admin' => 'addPhoto']);

$router->post('/admin-add-gallery', ['Admin' => 'addGallery']);

$router->get('/admin-manage-photo', ['Admin' => 'managePhoto']);

$router->get('/admin-manage-gallery', ['Admin' => 'manageGallery']);

$router->get('/admin-manage-comment', ['Admin' => 'manageComment']);

$router->get('/admin-delete-photo-:id', ['Admin' => 'deletePhoto'])->with('id', '([0-9]{0,6})');

$router->get('/admin-delete-comment-:id', ['Admin' => 'deleteComment'])->with('id', '([0-9]{0,6})');

$router->get('/admin-delete-gallery-:id', ['Admin' => 'deleteGallery'])->with('id', '([0-9]{0,6})');

$router->get('/admin-update-photo-:id', ['Admin' => 'updatePhoto'])->with('id', '([0-9]{0,6})');

$router->post('/admin-update-photo-:id', ['Admin' => 'updatePhoto'])->with('id', '([0-9]{0,6})');

$router->get('/admin-update-comment-:id', ['Admin' => 'updateComment'])->with('id', '([0-9]{0,6})');

$router->post('/admin-update-comment-:id', ['Admin' => 'updateComment'])->with('id', '([0-9]{0,6})');

$router->get('/admin-wrong-login', ['Admin' => 'wrongLogin']);

$router->get('/admin-wrong-password', ['Admin' => 'wrongPassword']);

$router->get('/admin-logout-success', ['Admin' => 'logoutSuccess']);

$router->get('/admin-logout-error', ['Admin' => 'logoutError']);

$router->get('/admin-modification-success', ['Admin' => 'modificationSuccess']);


/**
 * Error routes
 */
$router->get(Config::getError('404'), ['Error' => 'notFound']);

$router->get(Config::getError('403'), ['Error' => 'forbidden']);

$router->get(Config::getError('500'), ['Error' => 'internalServerError']);

/**
 * Run the router. If an exception is caught, the user
 * will be redirected to a 404 error page.
 */
try {
    $router->run();
} catch (RouterException $exception) {
    Error::create($exception->getMessage(), 404);
}
