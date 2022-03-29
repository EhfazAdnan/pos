<?php require views_path('partials/header'); ?>

<div class="container-fluid shadow-sm p-2">
  <center><h2><?=APP_NAME?></h2></center>
</div>

<div class="d-flex">
    <div style="height: 600px;" class="shadow-sm col-6 p-4">

           <div class="input-group mb-3"> <h3>Items</h3>
             <input type="text" class="ms-3 form-control" name="search" id="search" placeholder="search items here" autofocus>
             <span class="input-group-text"><i class="fa fa-search"></i></span>
           </div>

           <div class="js-products d-flex" style="height: 90%; overflow-y: scroll; flex-wrap: wrap;">

              <div class="card m-4 border-0" style="min-width: 250px; max-width: 250px;">
                  <a href="#">
                    <img src="assets/images/image.jpg" class="w-100 rounded border">
                  </a>

                  <div class="p-4" style="font-size: 20px;">
                    <div class="text-muted">CARAMEL MOOLATTE</div>
                    <div class="">$5.00</div>
                  </div>
              </div>

              <div class="card m-4 border-0" style="min-width: 250px; max-width: 250px;">
                  <a href="">
                    <img src="assets/images/caramel-moolatte.png" class="w-100 rounded border">
                  </a>

                  <div class="p-4" style="font-size: 20px;">
                    <div class="text-muted">CARAMEL MOOLATTE</div>
                    <div class="">$5.00</div>
                  </div>
              </div>

              <div class="card m-4 border-0" style="min-width: 250px; max-width: 250px;">
                  <a href="">
                    <img src="assets/images/caramel-moolatte.png" class="w-100 rounded border">
                  </a>

                  <div class="p-4" style="font-size: 20px;">
                    <div class="text-muted">CARAMEL MOOLATTE</div>
                    <div class="">$5.00</div>
                  </div>
              </div>
              

            </div>

    </div>

    <div class="col-6 bg-light p-4 pt-2">
      <div><center><h3>Cart <div class="badge bg-primary rounded-circle">3</div></h3></center></div>

      <table class="table table-striped table-hover">
        <tr>
          <th>Image</th>
          <th>Description</th>
          <th>Amount</th>
        </tr>
      </table>

    </div>

</div>

<?php require views_path('partials/footer'); ?>