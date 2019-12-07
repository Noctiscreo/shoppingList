<?php
namespace Example\Factories;
use Example\Controllers\HomepageController;
use Psr\Container\ContainerInterface;

class HomepageControllerFactory
{
    // Allows a class to be used like a function. Because factories must be callable (used like a function).
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