<?php
/**
 *
 */
class Login_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  public function run()
  {
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sth = $this->db->prepare("SELECT username, level, idCabang FROM admin WHERE
      username = :username AND password = MD5(:password)");

    $sth->execute(array(
      ':username' => $username,
      ':password' => $password
    ));

    // Cek Level login
    $data = $sth->fetchAll();
    foreach ($data as $key => $value) {
      $level   = $value['level'];
      $idCabang   = $value['idCabang'];
    }

    //$data = $sth->fetchAll();
    $count = $sth->rowCount();
    if ($count > 0){
      // login
      Session::init();
      Session::set('loggedIn', true);
      Session::set('level', $level);
      Session::set('idCabang', $idCabang);
      header('location: '.URL.'dashboard');
    }else{
        header('location: ../index');
    }
  }
}
?>
