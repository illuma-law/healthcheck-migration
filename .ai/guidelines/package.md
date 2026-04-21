---
description: Pending database migration health check for Spatie Laravel Health
---

# healthcheck-migration

Pending database migration health check for `spatie/laravel-health`. Reports if any migrations are outstanding.

## Namespace

`IllumaLaw\HealthCheckMigration`

## Key Check

- `MigrationBacklogCheck` — runs `migrate:status` logic; counts and lists pending migrations

## Registration

```php
use IllumaLaw\HealthCheckMigration\MigrationBacklogCheck;
use Spatie\Health\Facades\Health;

Health::checks([
    MigrationBacklogCheck::new(),
]);
```

## Notes

- Reports exact count of pending migrations.
- Lists a sample of pending filenames in the health meta data for debugging.
- Returns `failed` when there are pending migrations (not `warning`), since running with outstanding migrations is considered broken.
