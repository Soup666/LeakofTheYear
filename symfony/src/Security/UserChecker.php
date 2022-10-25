<?php

namespace App\Security;

use App\Entity\User as AppUser;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }

        if ($user->isSuspended() || $user->isArchived()) {
            // The message passed to this exception is meant to be displayed to the user
            throw new AccountExpiredException('Your user account is either suspended or no longer exists.');
        }
    }

    public function checkPostAuth(UserInterface $user)
    {
        // TODO: Implement checkPostAuth() method.
    }
}