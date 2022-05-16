<?php require views_path('partials/header'); ?>

<div class="container-fluid border rounded p-4 m-2 col-lg-4 mx-auto">

   <?php if(!empty($row)): ?>

   <form method="POST" enctype="multipart/form-data">

        <h4><i class="fa fa-hamburger"></i> Delete Product</h4>
        <div class="alert alert-danger text-center">Are you sure to delete this product ?? !!</div>

        <?php if(!empty($errors['description'])) : ?>
            <small class="text-danger"><?=$errors['description'];?></small>
          <?php endif; ?>

        <div class="mb-3">
            <label for="productControlInput1" class="form-label">Product Description</label>
            <input disabled type="text" class="form-control" name="description" id="description" placeholder="product description" value="<?=set_value('description',$row['description'])?>">
        </div>

        <?php if(!empty($errors['barcode'])) : ?>
            <small class="text-danger"><?=$errors['barcode'];?></small>
          <?php endif; ?>

        <div class="mb-3">
            <label for="barcodeControlInput1" class="form-label">Product Barcode</label>
            <input disabled type="text" class="form-control" name="barcode" id="barcode" placeholder="product barcode" value="<?=set_value('barcode',$row['barcode'])?>">
        </div>

        <br>
        <img src="<?=$row['image']?>" class="mx-auto d-block" style="max-width: 250px;">

        <br>
        <button class="btn btn-danger float-end">Delete</button>
        <a href="index.php?pg=admin&tab=products">
           <button type="button" class="btn btn-primary">Cancel</button>
        </a>

   </form>

    <?php else: ?>
        <h3>That product not found</h3>
        <a href="index.php?pg=admin&tab=products">
           <button type="button" class="btn btn-primary">Back to products</button>
        </a>
    <?php endif; ?>

</div>

<?php require views_path('partials/footer'); ?>