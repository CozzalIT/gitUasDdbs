<?php

/**
 *
 */
class Dashboard extends Controller
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

    Session::set('page', 'dashboard');
    Session::set('akses', true);
  }

  function index()
  {
    $this->view->show = $this->model->show();
    $this->view->count = $this->model->count();
    $this->view->render('dashboard/index');
  }

  function show()
  {
    $this->model->show();
  }

  function logout()
  {
    Session::destroy();
    header('location: ../index');
    exit;
  }
}

?>
