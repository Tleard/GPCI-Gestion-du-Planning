<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRwy7ffs\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRwy7ffs/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerRwy7ffs.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerRwy7ffs\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerRwy7ffs\appDevDebugProjectContainer([
    'container.build_hash' => 'Rwy7ffs',
    'container.build_id' => 'a24e1343',
    'container.build_time' => 1569592584,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRwy7ffs');
