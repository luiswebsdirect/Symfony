<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFgoYPEn\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFgoYPEn/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFgoYPEn.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFgoYPEn\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerFgoYPEn\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'FgoYPEn',
    'container.build_id' => 'ea830929',
    'container.build_time' => 1551441873,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFgoYPEn');
