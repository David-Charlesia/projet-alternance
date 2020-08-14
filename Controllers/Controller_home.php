<?php
/**
 *
 */
class Controller_home extends Controller
{

  public function action_home(){
    $this->render('home',["essai"=>"passer des var de php a js"]);
  }

  public function action_default(){
    $this->action_home();
  }


}

 ?>
