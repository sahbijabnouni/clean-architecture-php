<?php
namespace Core\Application\Manager;

use Core\Entities\User;
use Core\Application\Repository\UserRepositoryInterface;

class UserManager
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository){
        $this->userRepository=$userRepository;
    }
    public function add(User $user): void
    {
        $this->userRepository->add($user);
    }
    public function find(string $id):User
    {
        return $this->userRepository->find($id);
    }
}