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
      header('location: ../index');
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

  function candidate()
  {
    $this->view->count = $this->model->count();
    $this->view->showCalon = $this->model->showCalon();
    $this->view->render('dashboard/candidate');
  }

  function golput()
  {
    $this->view->count = $this->model->count();
    $this->view->render('dashboard/golput');
  }

  function show()
  {
    $this->model->show();
  }

  function showCalon()
  {
    $this->model->showCalon();
  }

  function count()
  {
    $this->model->count();
  }

  function logout()
  {
    Session::destroy();
    header('location: ../index');
    exit;
  }
}

?>
