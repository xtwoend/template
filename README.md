# template

my template for production

Setup
---

## Add the package to your project

  composer require xtwoend/template

## Declare the service provider and the alias

Add the following line to your config/app.php file:

  'providers' => [
    // ...
    // Other Service Providers
    // ...
    Xtwoend\TemplateServiceProvider::class,
  ],

## Publish assets

  php artisan vendor:publish --provider="Xtwoend\TemplateServiceProvider" --force
  
