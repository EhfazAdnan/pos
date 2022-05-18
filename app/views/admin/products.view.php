<div class="table-responsive">
    <table class="table table-striped table-hover">

        <tr>
            <th>Barcode</th>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Image</th>
            <th>Date</th>
            <th>
                <a href="index.php?pg=product-new">
                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Add New
                    </button>
                </a>
            </th>
        </tr>

        <?php if(!empty($products)): ?>
            <?php foreach($products as $product): ?>
               <tr>
                   <td><a href="index.php?pg=product-single&id=<?=$product['id']?>"><?=esc($product['barcode'])?></a></td>
                   <td><?=esc($product['description'])?></td>
                   <td><?=esc($product['qty'])?></td>
                   <td><?=esc($product['amount'])?></td>
                   <td>
                       <?=crop($product['image'])?>
                       <img src="<?=$product['image']?>" style="max-width: 100px;">
                    </td>
                   <td><?=date("jS M, Y",strtotime($product['date']))?></td>
                   <td>
                        <a href="index.php?pg=product-edit&id=<?=$product['id']?>">
                            <button class="btn btn-success btn-sm">Edit</button>
                        </a>
                        <a href="index.php?pg=product-delete&id=<?=$product['id']?>">
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </a>
                   </td>
               </tr>
            <?php endforeach; ?>
        <?php endif; ?>

    </table>
</div>