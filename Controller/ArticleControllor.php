<?php
 
 include_once("Model/Article.php");

 Class ArticleControllor{
  public $model;

  public function Controllor()
  {
   $this->model=new Article();
  }

  public function shows()
  { $this->model=new Article();
   $result = $this->model->insert_data();
   //include '../View/articleView.php';
  }
 }
?>
