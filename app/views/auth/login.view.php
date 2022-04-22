<?php require views_path('partials/header'); ?>

  <div class="container-fluid border col-lg-5 col-md-6 mt-5 p-2">
      <center>
        <h3><i class="fa fa-user"></i></h3>
        <h3>Login</h3>
        <div><?= esc(APP_NAME) ?></div>
      </center>
      <br>

      <form action="" method="post">

          <?php if(!empty($errors['email'])) : ?>
            <small class="text-danger"><?=$errors['email'];?></small>
          <?php endif; ?>
          <div class="input-group mb-3">
              <span class="input-group-text">Email</span>
              <input type="email" class="form-control" placeholder="email" name="email" id="email" autofocus value="<?=set_value('email');?>">
          </div>

          <?php if(!empty($errors['password'])) : ?>
            <small class="text-danger"><?=$errors['password'];?></small>
          <?php endif; ?>
          <div class="input-group mb-3">
              <span class="input-group-text">Password</span>
              <input type="password" class="form-control" placeholder="password" name="password" id="password">
          </div>

          <button class="btn btn-primary">Login</button>
      </form>

  </div>

<?php require views_path('partials/footer'); ?>