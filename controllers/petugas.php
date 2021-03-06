<?php

/**
 *
 */
class Petugas extends Controller
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
    Session::set('page', 'petugas');
  }

  function index()
  {
    $this->view->render('petugas/index');
  }

  function edit()
  {
    $this->view->render('petugas/edit');
  }
}

?>
