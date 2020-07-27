<?php

use Core\Application\Repository\UserRepositoryInterface;
use Persistence\UserRepository;
use Persistence\DatabaseInterface;
use Persistence\SqliteDatabase;
return [
     DatabaseInterface::class => DI\create(SqliteDatabase::class),
     UserRepositoryInterface::class => DI\create(UserRepository::class)
         ->constructor(DI\get(DatabaseInterface::class))

];