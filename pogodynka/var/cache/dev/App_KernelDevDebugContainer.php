<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container20vxUvI\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container20vxUvI/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container20vxUvI.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container20vxUvI\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container20vxUvI\App_KernelDevDebugContainer([
    'container.build_hash' => '20vxUvI',
    'container.build_id' => 'e0f337fc',
    'container.build_time' => 1696837213,
], __DIR__.\DIRECTORY_SEPARATOR.'Container20vxUvI');