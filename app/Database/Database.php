<?php namespace Config;

use CodeIgniter\Database\Config;

class Database extends Config
{
    public $default = [
        'DSN'      => '',
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'db_ci4',
        'DBDriver' => 'MySQLi',
        'port'     => 8111,
    ];
}