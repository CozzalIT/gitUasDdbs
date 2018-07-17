<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-tabs card-header-primary">
        <div class="nav-tabs-navigation">
          <div class="nav-tabs-wrapper">
            <span class="nav-tabs-title">Menu:</span>
            <ul class="nav nav-tabs" data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#profile" data-toggle="tab">
                  <i class="material-icons">list</i> List
                  <div class="ripple-container"></div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#messages" data-toggle="tab">
                  <i class="material-icons">note_add</i> Tambah Data
                  <div class="ripple-container"> </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="profile">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Tahun Terbit</th>
                  <th>Penerbit</th>
                  <th>Stok</th>
                  <th class="text-primary">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 1;
                  foreach ($this->show as $key => $value) {
                    $judul      = $value['judul'];
                    $pengarang  = $value['pengarang'];
                    $thnTerbit  = $value['thnTerbit'];
                    $penerbit   = $value['penerbit'];

                    echo '
                      <tr>
                        <td>'.$i.'</td>
                        <td>'.$judul.'</td>
                        <td>'.$pengarang.'</td>
                        <td>'.$thnTerbit.'</td>
                        <td>'.$penerbit.'</td>
                        <td>--</td>
                        <td class="td-actions text-right">
                          <a type="button" rel="tooltip" title="Edit Buku" class="btn btn-primary btn-link btn-sm" href="buku/edit">
                            <i class="material-icons">edit</i>
                          </a>
                          <a type="button" rel="tooltip" title="Tambah Stok" class="btn btn-primary btn-link btn-sm" href="buku/stok">
                            <i class="material-icons">note_add</i>
                          </a>
                          <a type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                            <i class="material-icons">close</i>
                          </a>
                        </td>
                      </tr>
                    ';
                    $i++;
                  }
                ?>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="messages">
            <form action="buku/add" method="post">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Judul</label>
                        <input name="judul" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Pengarang</label>
                        <input name="pengarang" type="text" class="form-control" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="bmd-label-floating">Tahun</label>
                        <input name="thnTerbit" type="text" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="bmd-label-floating">Penerbit</label>
                        <input name="penerbit" type="text" class="form-control" required>
                      </div>
                    </div>
                    <?php if (Session::get('idCabang') == null): ?>
                    <div class="col-md-6">
                      <div class="form-group">
                        <select style="color:#a9afbb;" name="cabang" class="form-control">
                          <option value="">-- Pilih Cabang --</option>
                          <option value="Tes">Tes</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <?php endif; ?>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label class="bmd-label-floating">Stok</label>
                        <input name="stok" type="text" class="form-control" required>
                      </div>
                    </div>
                  </div>

              <button type="submit" class="btn btn-primary pull-right">Tambah</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
