<?php

/**
 *
 */
class Akun extends Controller
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
    Session::set('page', 'akun');
  }

  function index()
  {
    $this->view->render('akun/index');
  }

  function edit()
  {
    $this->view->render('akun/edit');
  }
}

?>
