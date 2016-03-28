<?php

namespace rave\app\model;

use rave\core\DB;
use rave\core\database\ORM\Model;

class IdentifyModel extends Model
{

    protected static $table = 'rave_identify';

    protected static $primary = 'tag_id, photo_id';

    public static function deleteTagWherePhotoId($id)
    {
        DB::get()->execute('DELETE FROM ' . self::$table . ' WHERE photo_id = :photo_id', [':photo_id' => $id]);
    }

}