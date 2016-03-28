<?php

namespace rave\app\model;

use rave\core\DB;
use rave\core\database\ORM\Model;

class CommentModel extends Model
{

    protected static $table = 'rave_comment';

    protected static $primary = 'comment_id';

    public static function posted($ip, $id)
    {
        return DB::get()->queryOne('SELECT COUNT(' . self::$primary . ') AS ip_count FROM ' . self::$table . ' WHERE comment_ip = :comment_ip AND photo_id = :photo_id', [':comment_ip' => $ip, ':photo_id' => $id])->ip_count;
    }

    public static function selectById($id, $limit)
    {
        return DB::get()->query('SELECT comment_id, comment_author, comment_message, DATE_FORMAT(comment_publication, \'%d/%m/%Y %k:%i\') AS comment_date FROM ' . self::$table . ' WHERE photo_id = :photo_id ORDER BY comment_publication DESC LIMIT ' . $limit, [':photo_id' => $id]);
    }

}