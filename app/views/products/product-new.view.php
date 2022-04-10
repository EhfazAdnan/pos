<?php require views_path('partials/header'); ?>

<div class="container-fluid border rounded p-4 m-2 col-lg-4 mx-auto">

   <form method="POST">

        <h4><i class="fa fa-hamburger"></i> Add Product</h4>

        <div class="mb-3">
            <label for="productControlInput1" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="product description">
        </div>

        <div class="mb-3">
            <label for="barcodeControlInput1" class="form-label">Product Barcode</label>
            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="product barcode">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Qty:</span>
            <input type="number" name="qty" id="qty" value="1" class="form-control" placeholder="quantity">
            <span class="input-group-text">Amount:</span>
            <input type="number" name="amount" id="amount" value="0.00" step="0.05" class="form-control" placeholder="amount">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control" id="formFile">
        </div>

        <br>
        <button class="btn btn-danger float-end">Save</button>
        <button type="button" class="btn btn-primary">Cancel</button>

   </form>

</div>

<?php require views_path('partials/footer'); ?>