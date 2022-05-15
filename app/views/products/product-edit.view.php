<?php require views_path('partials/header'); ?>

<div class="container-fluid border rounded p-4 m-2 col-lg-4 mx-auto">

   <?php if(!empty($row)): ?>

   <form method="POST" enctype="multipart/form-data">

        <h4><i class="fa fa-hamburger"></i> Edit Product</h4>

        <?php if(!empty($errors['description'])) : ?>
            <small class="text-danger"><?=$errors['description'];?></small>
          <?php endif; ?>

        <div class="mb-3">
            <label for="productControlInput1" class="form-label">Product Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="product description" value="<?=set_value('description',$row['description'])?>">
        </div>

        <?php if(!empty($errors['barcode'])) : ?>
            <small class="text-danger"><?=$errors['barcode'];?></small>
          <?php endif; ?>

        <div class="mb-3">
            <label for="barcodeControlInput1" class="form-label">Product Barcode</label>
            <input type="text" class="form-control" name="barcode" id="barcode" placeholder="product barcode" value="<?=set_value('barcode',$row['barcode'])?>">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text">Qty:</span>
            <input type="number" name="qty" id="qty" value="1" class="form-control" placeholder="quantity" value="<?=set_value('qty',$row['qty'])?>">

            <span class="input-group-text">Amount:</span>
            <input type="number" name="amount" id="amount" step="0.05" class="form-control" placeholder="amount" value="<?=set_value('amount',$row['amount'])?>">
        </div>

        <?php if(!empty($errors['qty'])) : ?>
            <small class="text-danger"><?=$errors['qty'];?></small><br>
        <?php endif; ?>
            
        <?php if(!empty($errors['amount'])) : ?>
            <small class="text-danger"><?=$errors['amount'];?></small>
        <?php endif; ?>

        <?php if(!empty($errors['image'])) : ?>
            <small class="text-danger"><?=$errors['image'];?></small>
        <?php endif; ?>

        <div class="mb-3">
            <label for="formFile" class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control" id="formFile">
        </div>

        <br>
        <img src="<?=$row['image']?>" class="mx-auto d-block">

        <br>
        <button class="btn btn-danger float-end">Save</button>
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