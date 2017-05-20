<?php

namespace Pimpmycv\Model;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Doctrine\DBAL\Connection;

class UserProvider implements UserProviderInterface
{
    private $db;

    public function __construct(Connection $db)
    {
        $this -> db = $db;
    }

    public function loadUserByEmail($email)
    {
        $stmt = $this-> db -> executeQuery('SELECT * FROM membre WHERE email = ?', array(strtolower($email)));

        if (!$user = $stmt->fetch()) {
            throw new UsernameNotFoundException(sprintf('Cet email "%s" n\'existe pas ! ', $email));
        }

        return new User($user['email'], $user['password'], explode(',', $user['roles']), true, true, true, true);
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" non supporté.', get_class($user)));
        }

        return $this->loadUserByEmail($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Symfony\Component\Security\Core\User\User';
    }
}

 ?>
