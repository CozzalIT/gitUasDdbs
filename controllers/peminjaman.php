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
    Session::set('page', 'peminjaman');
  }

  function index()
  {
    $this->view->render('peminjaman/index');
  }
}

?>
