<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    // view renderer
    $container['renderer'] = function ($c) {
        $settings = $c->get('settings')['renderer'];
        return new \Slim\Views\PhpRenderer($settings['template_path']);
    };

    // monolog
    $container['logger'] = function ($c) {
        $settings = $c->get('settings')['logger'];
        $logger = new \Monolog\Logger($settings['name']);
        $logger->pushProcessor(new \Monolog\Processor\UidProcessor());
        $logger->pushHandler(new \Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
        return $logger;
    };

    // Connects to 'shopping' db.
    $container['db'] = function() {
        $db = new PDO ('mysql:host=127.0.0.1;dbname=shopping', 'root', 'password');
        return $db;
    };
    // Registers the ItemsModel factory.
    $container['ItemsModel'] = new Example\Factories\ItemsModelFactory();
    $container['HomepageController'] = new Example\Factories\HomepageControllerFactory();

};

