<?php

namespace rave\app\model;

use rave\core\database\ORM\Model;

class GalleryModel extends Model
{

    protected static $table = 'rave_gallery';

    protected static $primary = 'photo_id';

    public static function selectPhoto()
    {
        return DB::get()->query('SELECT * FROM rave_photo NATURAL JOIN ' . self::$table);
    }

}