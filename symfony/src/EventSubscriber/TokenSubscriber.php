<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class TokenSubscriber implements EventSubscriberInterface
{
    private TokenStorageInterface $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $controller = $event->getController();

        // when a controller class defines multiple action methods, the controller
        // is returned as [$controllerInstance, 'methodName']
        if (is_array($controller)) {
            $controller = $controller[0];
        }

        if (!$token = $this->tokenStorage->getToken()) {
            return;
        }

        if (!$user = $token->getUser()) {
            return;
        }

        if ($user->isSuspended() || $user->isArchived()) {
            $event->setController(static function () {
                // $this->addFlash('warning', 'Your account is no longer active. Please contact the administrator.');
                return new RedirectResponse("/logout");
            });
        }


    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}