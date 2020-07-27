<?php
namespace Persistence;

use Medoo\Medoo;


class SqliteDatabase implements DatabaseInterface {
      
    public function getInstance() {
        return new Medoo([
            'database_type' => 'sqlite',
            'database_file' => __DIR__ . '/../../_database/user_db.db'
        ]);
    } 
} 

 