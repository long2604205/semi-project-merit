<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMtlyTPG\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMtlyTPG/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMtlyTPG.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMtlyTPG\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMtlyTPG\App_KernelDevDebugContainer([
    'container.build_hash' => 'MtlyTPG',
    'container.build_id' => '08558723',
    'container.build_time' => 1680807416,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMtlyTPG');