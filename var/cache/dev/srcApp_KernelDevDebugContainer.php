<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNgZhdcd\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNgZhdcd/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNgZhdcd.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNgZhdcd\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerNgZhdcd\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'NgZhdcd',
    'container.build_id' => '19ea009b',
    'container.build_time' => 1551881374,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNgZhdcd');
