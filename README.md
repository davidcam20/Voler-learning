# Performance Dashboard

## First Time Setup

1. Install [Docker Desktop]()
2. Install [Lando](https://docs.lando.dev/getting-started/installation.html#install-dmg-via-direct-download-recommended)
3. ACQ devs - I recommend stopping all instances of docksal containers in docker desktop before proceeding, to avoid port conflicts. The site will run correctly with docksal instances, but the port number changes when you start and stop.
4. Run `lando start`
5. Duplicate `.env.example` to `.env`, update `APP_URL` to match the one provided in the previous step if it doesn't match what's in the `.env` file.
6. Run `lando composer install`
7. Run `lando artisan key:generate`
8. Run `lando artisan migrate`

## Development

While working, you'll likely want to have two terminal windows open.

In the first, run `lando dev` to start the vite server. This rebuilds static asset files, and does hot reloading. This is required to access pages beyond the welcome page.

In the other, you'll run artisan and other Laravel commands, using the [Lando prefix](https://docs.lando.dev/laravel/tooling.html).
