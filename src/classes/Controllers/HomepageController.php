<?php


namespace Example\Controllers;

// The below gives access to the classes.
use Slim\Http\Request;
use Slim\Http\Response;
use Example\Models\ItemsModel;

class HomepageController
{
    private $model;
    private $view;
    // ?
    public function __construct(ItemsModel $model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }
// Controller must be callable. __invoke does this.
// Request $request HTTP request (incoming data)
// Response $response HTTP response (outgoing data)
// array $args would normally contain a dynamic URL (but not needed in this project)
    public function __invoke(Request $request, Response $response, array $args)
    {
        // Gets the data out of the model into the controller (here).
        $items = $this->model->getItems();

        // Respond with this html page:
        // $items goes into index.phtml which in turn goes into $response
        $this->view->render($response, 'index.phtml', ['items' => $items]);
    }

}