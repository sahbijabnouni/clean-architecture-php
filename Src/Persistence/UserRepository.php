<?php


namespace Persistence;
use Core\Application\Repository\UserRepositoryInterface;
use Core\Entities\User;

class UserRepository implements UserRepositoryInterface
{
    private  $database;
    public function __construct(DatabaseInterface $database)
    {
        $this->database=$database->getInstance();
    }

    public function add(User $user): void
    {

        $this->database->insert('USER_TABLE', [
            'id' => $user->getId(),
            'firstName' => $user->getFirstName(),
            'lastName' => $user->getLastName(),
            'email' => $user->getEmail()
        ]);
    }

    public function find(string $id): ?User
    {

        $result=$this->database->select("PROJECT_TABLE", "*", [
            "id" => $id
        ]);
        if($result==false) return null;
        foreach($result as $item)
        {
            return new User($item['id'],$item['firstName'],$item['lastName'],$item['email']);
        }
    }
}