<?php require views_path('partials/header'); ?>

<div class="d-flex">
    <div style="min-height: 600px;" class="shadow-sm col-8 p-4">

           <div class="input-group mb-3"> <h3>Items</h3>
             <input type="text" class="ms-3 form-control" name="search" id="search" placeholder="search items here" autofocus>
             <span class="input-group-text"><i class="fa fa-search"></i></span>
           </div>

           <div class="js-products d-flex" style="height: 90%; overflow-y: scroll; flex-wrap: wrap;">

              <div class="card m-4 border-0" style="min-width: 250px; max-width: 250px;">
                  <a href="#">
                    <img src="assets/images/image.jpg" class="w-100 rounded border">
                  </a>

                  <div class="p-2" style="font-size: 20px;">
                    <div class="text-muted">CARAMEL MOOLATTE</div>
                    <div class="">$5.00</div>
                  </div>
              </div>

              <div class="card m-4 border-0" style="min-width: 250px; max-width: 250px;">
                  <a href="">
                    <img src="assets/images/caramel-moolatte.png" class="w-100 rounded border">
                  </a>

                  <div class="p-2" style="font-size: 20px;">
                    <div class="text-muted">CARAMEL MOOLATTE</div>
                    <div class="">$5.00</div>
                  </div>
              </div>

              <div class="card m-4 border-0" style="min-width: 250px; max-width: 250px;">
                  <a href="">
                    <img src="assets/images/caramel-moolatte.png" class="w-100 rounded border">
                  </a>

                  <div class="p-2" style="font-size: 20px;">
                    <div class="text-muted">CARAMEL MOOLATTE</div>
                    <div class="">$5.00</div>
                  </div>
              </div>
              

            </div>

    </div>

    <div class="col-4 bg-light p-4 pt-2">
      <div><center><h3>Cart <div class="badge bg-primary rounded-circle">3</div></h3></center></div>

      <div class="table-responsive" style="height: 400px; overflow-y: scroll;">
          <table class="table table-striped table-hover">
            <tr>
              <th>Image</th>
              <th>Description</th>
              <th>Amount</th>
            </tr>

            <tr>
              <td style="width:100px"><img src="assets/images/image.jpg" class="rounded border" style="height:80px;weight:100px;"></td>
              <td class="text-primary">
                COFFEE SOFT DRINK

                <div class="input-group my-3" style="max-width: 150px;">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-minus text-primary"></i></span>
                  <input type="text" class="form-control text-primary" placeholder="1" value="1">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-plus text-primary"></i></span>
                </div>

              </td>

              <td style="font-size: 20px"><b>$5.00</b></td>
            </tr>

            <tr>
              <td style="width:100px"><img src="assets/images/1601525.jpg" class="rounded border" style="height:80px;weight:100px;"></td>
              <td class="text-primary">
                COFFEE SOFT DRINK

                <div class="input-group my-3" style="max-width: 150px;">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-minus text-primary"></i></span>
                  <input type="text" class="form-control text-primary" placeholder="1" value="1">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-plus text-primary"></i></span>
                </div>

              </td>

              <td style="font-size: 20px"><b>$5.00</b></td>
            </tr>

            <tr>
              <td style="width:100px"><img src="assets/images/image.jpg" class="rounded border" style="height:80px;weight:100px;"></td>
              <td class="text-primary">
                COFFEE SOFT DRINK

                <div class="input-group my-3" style="max-width: 150px;">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-minus text-primary"></i></span>
                  <input type="text" class="form-control text-primary" placeholder="1" value="1">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-plus text-primary"></i></span>
                </div>

              </td>

              <td style="font-size: 20px"><b>$5.00</b></td>
            </tr>

            <tr>
              <td style="width:100px"><img src="assets/images/1601525.jpg" class="rounded border" style="height:80px;weight:100px;"></td>
              <td class="text-primary">
                COFFEE SOFT DRINK

                <div class="input-group my-3" style="max-width: 150px;">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-minus text-primary"></i></span>
                  <input type="text" class="form-control text-primary" placeholder="1" value="1">
                  <span class="input-group-text" style="cursor:pointer;"> <i class="fa fa-plus text-primary"></i></span>
                </div>

              </td>

              <td style="font-size: 20px"><b>$5.00</b></td>
            </tr>

          </table>
      </div>

      <div class="alert alert-danger mt-3" style="font-size: 24px;">
        Total: $30.00
      </div>

      <!-- checkout part start -->
      <div>
         <button class="btn btn-success my-3 w-100">Checkout</button>
         <button class="btn btn-primary my-3 w-100">Clear All</button>
      </div>
      <!-- checkout part end -->

    </div>

</div>

<script>
  function get_data(){
    var ajax = new XMLHttpRequest();
    ajax.addEventListener('readystatechange', function(e){
      console.log(ajax.responseText);
    });

    ajax.open('post','',true);
    ajax.send();
  }
</script>

<?php require views_path('partials/footer'); ?>