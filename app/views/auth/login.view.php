<?php require views_path('partials/header'); ?>

  <div class="container-fluid border col-lg-5 col-md-6 mt-5 p-2">
      <center>
        <h3><i class="fa fa-user"></i></h3>
        <h3>Login</h3>
        <div><?= esc(APP_NAME) ?></div>
      </center>
      <br>

      <form action="" method="post">

          <div class="input-group mb-3">
              <span class="input-group-text">Email</span>
              <input type="email" class="form-control" placeholder="email" name="email" id="email" autofocus>
          </div>

          <div class="input-group mb-3">
              <span class="input-group-text">Password</span>
              <input type="text" class="form-control" placeholder="password" name="password" id="password">
          </div>

          <button class="btn btn-primary">Login</button>
      </form>

  </div>

<?php require views_path('partials/footer'); ?>