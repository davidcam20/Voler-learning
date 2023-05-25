# Voler Learning

## Configuracion por primera vez

1. Instalar [Docker Desktop]()
2. Instalar [Lando](https://docs.lando.dev/getting-started/installation.html#install-dmg-via-direct-download-recommended)
3. Ejecutar en la consola `lando start`
4. Duplicar el archivo `.env.example` y cambiarle el nombre a `.env`, actualizar la variable `APP_URL` para que sea la misma que se mostro en el paso anterior al final de la consola
5. Ejecutar `lando composer install`
6. Ejecutar `lando artisan key:generate`
7. Ejecutar `lando artisan migrate`

## Desarrollo
 Puedes verificar la lista de comandos de lando en este link: [Lando prefix](https://docs.lando.dev/laravel/tooling.html).
