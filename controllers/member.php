<?php

/**
 *
 */
class Member extends Controller
{

  function __construct()
  {
    parent::__construct();
    Session::set('page', 'member');
  }

  function index()
  {
    $this->view->render('member/index');
  }
}

?>
