<?php include 'inc/header.php'; ?>
<?php include 'data/products.php'; ?>
<?php
$id=$_GET['id']??1;
$product=array_values(array_filter($products,function($p) use ($id){return $p['id']==$id;}))[0]??null;
?>
<?php if($product): ?>
<section class="product-detail fade-in" style="padding:2rem;">
  <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" style="max-width:400px;transition:transform .3s;" onmousemove="this.style.transform='scale(1.1)';" onmouseout="this.style.transform='scale(1)'">
  <h2><?php echo $product['name']; ?></h2>
  <p>Price: $<?php echo $product['price']; ?></p>
  <p>Category: <?php echo $product['category']; ?></p>
  <p>Location: <?php echo $product['location']; ?></p>
  <button onclick="alert('Quote requested!')">Request Quote</button>
</section>
<?php else: ?>
<p>Product not found</p>
<?php endif; ?>
<?php include 'inc/footer.php'; ?>
