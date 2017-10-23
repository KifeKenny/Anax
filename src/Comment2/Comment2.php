<?php

namespace Anax\Comment2;

use \Anax\Database\ActiveRecordModel;

/**
 * A database driven model.
 */
class Comment2 extends ActiveRecordModel
{
    /**
     * @var string $tableName name of the database table.
     */
    protected $tableName = "Comment2";

    /**
     * Columns in the table.
     *
     * @var integer $id primary key auto incremented.
     */
    public $id;
    public $title;
    public $content;
    public $userMail;
    public $userId;
}
