<?php
//
//
//namespace Example\Controllers;
//
//use Slim\Http\Request;
//use Slim\Http\Response;
//use Example\Models\ItemsModel;
//class AddItemController
//{
//    private $model;
//    private $view;
//    public function __construct(ItemsModel $model, $view)
//    {
//        $this->model = $model;
//        $this->view = $view;
//    }
//
//    public function __invoke(Request $request, Response $response, array $args)
//    {
//        $items = $this->model->addItem($item);
//
//        // Respond with this html page:
//        // $items goes into index.phtml which in turn goes into $response
//        $this->view->render($response, 'index.phtml', ['items' => $items]);
//    }
//
//}