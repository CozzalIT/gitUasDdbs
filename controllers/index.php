<?php

/**
 *
 */
class Index extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function index()
  {
    Session::set('page', 'index');
    $this->view->render('index/index');
  }

  function details()
  {
    $this->view->render('index/details');
  }
}

?>
