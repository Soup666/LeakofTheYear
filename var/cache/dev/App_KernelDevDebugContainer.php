<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCh2Qjg5\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCh2Qjg5/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCh2Qjg5.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCh2Qjg5\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCh2Qjg5\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ch2Qjg5',
    'container.build_id' => '096c4637',
    'container.build_time' => 1667106885,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCh2Qjg5');