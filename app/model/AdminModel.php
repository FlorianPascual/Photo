<?php

namespace rave\app\model;

use rave\core\database\ORM\Query;
use rave\core\database\ORM\Model;

class AdminModel extends Model
{

    protected static $table = 'rave_admin';

    protected static $primary = 'admin_login';

    public static function exists($login)
    {
        $query = new Query();
        $query->select('COUNT(' . self::$primary . ') AS counter')
              ->from(self::$table)
              ->where(['conditions' => self::$primary . ' = :login', 'values' => [':login' => $login]]);
        return DB::get()->queryOne('SELECT COUNT(' . self::$primary . ') AS counter FROM ' . self::$table . ' WHERE ' . self::$primary . ' = :login', [':login' => $login])->counter > 0;
    }

}
