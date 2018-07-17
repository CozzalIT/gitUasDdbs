<?php

/**
 *
 */
class Cabang extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::init();
    $logged = Session::get('loggedIn');
    if ($logged == false){
      Session::destroy();
      header('location: '.URL.'index');
      exit;
    }
    Session::set('page', 'cabang');
  }

  function index()
  {
    $this->view->render('cabang/index');
  }

  function edit()
  {
    $this->view->render('cabang/edit');
  }
}

?>
