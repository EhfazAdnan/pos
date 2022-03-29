<?php require views_path('partials/header'); ?>

<div class="container-fluid shadow-sm p-2">
  <center><h2><?=APP_NAME?></h2></center>
</div>

<div class="d-flex">
    <div style="height: 600px; overflow-y: scroll;" class="shadow-sm col p-4">

           <div class="input-group mb-3"> <h3>Items</h3>
             <input type="text" class="ms-3 form-control" name="search" id="search" placeholder="search items here" autofocus>
             <span class="input-group-text"><i class="fa fa-search"></i></span>
           </div>

    </div>

    <div class="col bg-light p-4 pt-2">
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