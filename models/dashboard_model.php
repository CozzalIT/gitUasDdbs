<?php
/**
 *
 */
class Dashboard_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function show()
  {
    $sth = $this->db->prepare('SELECT * FROM peserta ORDER BY nama ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function showCalon()
  {
    $sth = $this->db->prepare('SELECT * FROM calonkahim ORDER BY nama ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function count()
  {
    $sth = $this->db->prepare('SELECT COUNT(idPeserta) AS jumlahPeserta FROM peserta');
    $sth->execute();
    return $sth->fetchAll();
  }
}

?>
