<?php

/**
 *
 */
class Cabang extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::set('page', 'cabang');
  }

  function index()
  {
    $this->view->render('cabang/index');
  }
}

?>
