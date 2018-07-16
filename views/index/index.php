
  Source : index/index.php
  <br />
  <?php
    Session::init();
    $logged = Session::get('loggedIn');
    if ($logged == true){
      echo "berhasil login";
    }
  ?>
  <br />
  <br />
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title">Login Admin</h4>
          <p class="card-category">Please login before manage system</p>
        </div>
        <div class="card-body">
          <form action="login/run" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Username / Email</label>
                  <input name="username" type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="bmd-label-floating">Password</label>
                  <input name="password" type="password" class="form-control">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Login</button>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-2">
    </div>
  </div>

<!-- your content here -->
