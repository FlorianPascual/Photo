<?php

namespace rave\app\model;

use rave\core\DB;
use rave\core\database\ORM\Model;

class ContactModel extends Model
{

    protected static $table = 'rave_contact';

    protected static $primary = 'contact_ip';

    public static function deleteAll()
    {
        DB::get()->execute('DELETE FROM ' . self::$table);
    }

    public static function exists($hash)
    {
        return DB::get()->queryOne('SELECT COUNT(' . self::$primary . ') AS counter FROM ' . self::$table . ' WHERE ' . self::$primary . ' = :hash', [':hash' => $hash])->counter > 0;
    }

}