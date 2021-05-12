<?php

class Controller
{

 private $model;
 private $view;

 public function __construct($model, $view)
 {
  $this->model = $model;
  $this->view = $view;
 }

 public function main()
 {
  $this->router();
 }

 private function router()
 {
  
  $page = $_GET['page'] ?? "";

  switch ($page) {
   case "about":
    $this->about();
    break;
   default:
    $this->getAllProducts();
  }
 }

 private function about()
 {
  //$this->getHeader("Om Oss");
  $this->view->viewAboutPage();
  //$this->getFooter();
 }

 private function getAllProducts()
 {
  //$this->getHeader("Välkommen");
  $products = $this->model->fetchAllProducts();
  $this->view->viewAllProducts($products);
  //$this->getFooter();
 }
}
