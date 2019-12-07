<?php


namespace Example\Factories;
// Gives access to the ItemsModel class inside the Example\Models namespace.
use Example\Models\ItemsModel;

class ItemsModelFactory
{
    public function __invoke($container): ItemsModel
    {
        // Gets the db connection out of the DIC.
        $db = $container->get('db');
        // Passes the db into the item model and returns it.
        // Instantiates the ItemsModel.
        return new ItemsModel($db);
    }
}