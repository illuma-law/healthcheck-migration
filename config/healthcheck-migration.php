<?php

declare(strict_types=1);

return [
    /*
     * Whether the migration backlog is required.
     * If true, the check will fail if there are pending migrations.
     * If false, it will only result in a warning.
     */
    'required' => env('HEALTH_MIGRATION_REQUIRED', false),
];
