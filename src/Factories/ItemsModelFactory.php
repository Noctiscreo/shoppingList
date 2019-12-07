<?php
namespace Example\Factories;
use Example\Controllers\HomepageController;
use Psr\Container\ContainerInterface;

class itemsModelFactory
{
    // Allows class to be used like a function (factories must be callable).
    public function __invoke(ContainerInterface $container)
    {
        // Getting the 'ItemsModel' out of the $container (DIC) and putting it into $model.
        $model = $container->get('ItemsModel');
        // Getting the 'renderer' out of the $container (DIC) and putting it into $view.
        $view = $container->get('renderer');
        // Instantiates HomepageController with $model and $view as parameters,
        // and puts everything into $homepageController.
        $homepageController = new HomepageController($model, $view);
        return $homepageController;
    }

}