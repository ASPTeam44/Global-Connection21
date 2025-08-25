<?php include 'inc/header.php'; ?>
<?php include 'data/products.php'; ?>
<?php
// Filtering
$filtered=$products;
if(isset($_GET['category']) && $_GET['category']!=''){
  $filtered=array_filter($filtered,function($p){return $p['category']===$_GET['category'];});
}
if(isset($_GET['sort']) && $_GET['sort']==='price'){
  usort($filtered,function($a,$b){return $a['price']<=>$b['price'];});
}
?>
<section class="products-grid">
<?php foreach($filtered as $p): ?>
  <div class="product-card fade-in">
    <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>">
    <h3><?php echo $p['name']; ?></h3>
    <p>$<?php echo $p['price']; ?></p>
    <a href="product.php?id=<?php echo $p['id']; ?>">View</a>
  </div>
<?php endforeach; ?>
</section>
<?php include 'inc/footer.php'; ?>
