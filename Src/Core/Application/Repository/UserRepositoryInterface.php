<?php
namespace Core\Application\Repository;

use Core\Entities\User;

interface UserRepositoryInterface
{
    public function add(User $user): void;
    public function find(string $id):?User;
}