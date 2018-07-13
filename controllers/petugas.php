<?php

/**
 *
 */
class Petugas extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::set('page', 'petugas');
  }

  function index()
  {
    $this->view->render('petugas/index');
  }
}

?>
