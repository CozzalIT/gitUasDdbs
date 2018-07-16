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
    Session::set('page', 'cabang');
  }

  function index()
  {
    $this->view->render('cabang/index');
  }
}

?>
