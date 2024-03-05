## Requirement
- PHP 7.4 or newer
- NodeJS 18 or newer
- Composer
- Yarn Package Manager (optional)

## Deployment
Need to set web root directory to `./public`
```
$ composer install
$ ./vendor/bin/propel sql:insert
$ yarn && yarn build
```

## Development
Run following command from root directory to start PHP Built-in development server
```
$ php -S localhost:8080 -t public/
```

For TailwindCSS, run following command
```
$ yarn dev
```
