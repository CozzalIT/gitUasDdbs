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
                  <div class="ripple-container"></div>
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
                  <th>Nama Cabang</th>
                  <th>Alamat</th>
                  <th>Status</th>
                  <th class="text-primary">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Perpus Bina Taruna</td>
                  <td>Bandung</td>
                  <td>Status</td>
                  <td class="td-actions text-right">
                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                      <i class="material-icons">edit</i>
                    </button>
                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                      <i class="material-icons">close</i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane" id="messages">
            <form action="login/run" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama</label>
                    <input name="nama" type="text" class="form-control" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">Nama</label>
                    <input name="nama" type="text" class="form-control" required>
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
