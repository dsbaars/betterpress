BetterPress
========================

This is betterpress, an attempt to rewrite Wordpress using Symfony 2 and Twig, because the Wordpress code is just plain ugly.
It is based on my own [symfony-angular-grunt](https://github.com/dsbaars/symfony-angular-grunt) project.

  - [Progress](#progress)
  - [Requirements](#requirements)
  - [How to install and run](#how-to-install-and-run)
    - [Dependencies](#dependencies)
    - [Running](#running)
  - [Components](#components)
    - [PHP](#php)
    - [JavaScript ("Server-side")](#javascript-server-side)
    - [Client-side](#client-side)
  - [Future work](#future-work)
  - [Why did  I want this?](#why-did--i-want-this)

## Progress
I started with porting the twenty-sixteen template to twig, no database backend yet.
There are still a lot of remains of the symfony-angular-grunt project.

## Requirements
- composer (and PHP of course)
- npm
- bower
- grunt-cli


## How to install and run

### Dependencies
Just run  `composer install`.
I created a Composer script-handler that runs `npm install` and `bower install`.

### Running
My usual way is open two Terminal-way tabs and running:
1. `app/console server:run`
2. `grunt watch`

You can also use XAMPP or Vagrant.
For SF2 development Vagrant does not seem to be very slow, even after optimizing like described here:
- http://www.whitewashing.de/2013/08/19/speedup_symfony2_on_vagrant_boxes.html

## Components

### PHP

Symfony 2.8 standard edition (without Acme-Demo-stuff)
with the following changes:
- AsseticBundle disabled
- added bundles like FOSJsRoutingBundle,FOSRestBundle which are useful when using AngularJS

### JavaScript ("Server-side")

- Grunt
- LESS compiler
- CoffeeScript compiler
- wiredep injector

### Client-side
- jQuery
- AngularJS
    - ui-router
    - angular-bootstrap
- Twitter Bootstrap (LESS only)
