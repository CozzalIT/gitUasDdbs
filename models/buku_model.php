<?php
/**
 *
 */
class Buku_Model extends Model
{

  function __construct()
  {
    parent::__construct();
  }

  function show()
  {
    $sth = $this->db->prepare('SELECT * FROM buku ORDER BY judul ASC');
    $sth->execute();
    return $sth->fetchAll();
  }

  function add()
  {
    $judul        = $_POST['judul'];
    $pengarang    = $_POST['pengarang'];
    $thnTerbit    = $_POST['thnTerbit'];
    $penerbit     = $_POST['penerbit'];

    $sth = $this->db->prepare('INSERT INTO buku (judul, pengarang, thnTerbit, penerbit) VALUES (:judul, :pengarang, :thnTerbit, :penerbit)');
    $sth->execute(array(
      ':judul'      => $judul,
      ':pengarang'  => $pengarang,
      ':thnTerbit'  => $thnTerbit,
      ':penerbit'   => $penerbit
    ));

    header('Location: '.URL.'buku/index');
  }

  function count()
  {
    $sth = $this->db->prepare('SELECT COUNT(idBuku) AS jumlahBuku FROM buku');
    $sth->execute();
    return $sth->fetchAll();
  }

}
?>
