<?php

/**
 *
 */
class Member extends Controller
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
    Session::set('page', 'member');
  }

  function index()
  {
    $this->view->render('member/index');
  }

  function edit()
  {
    $this->view->render('member/edit');
  }
}

?>
