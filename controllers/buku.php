<?php

/**
 *
 */
class Buku extends Controller
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
    Session::set('page', 'buku');
  }

  function index()
  {
    $this->view->show = $this->model->show();
    $this->view->render('buku/index');
  }

  function show()
  {
    $this->model->show();
  }

  function add()
  {
    $this->model->add();
  }

  function edit()
  {
    $this->view->render('buku/edit');
  }
}

?>
