<?php

/**
 *
 */
class Peminjaman extends Controller
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
    Session::set('page', 'peminjaman');
  }

  function index()
  {
    $this->view->render('peminjaman/index');
  }

  function edit()
  {
    $this->view->render('peminjaman/edit');
  }
}

?>
