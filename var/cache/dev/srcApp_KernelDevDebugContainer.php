<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOD0miQZ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOD0miQZ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOD0miQZ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOD0miQZ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOD0miQZ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OD0miQZ',
    'container.build_id' => 'a4b77880',
    'container.build_time' => 1562656310,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOD0miQZ');