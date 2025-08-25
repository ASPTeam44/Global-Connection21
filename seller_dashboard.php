<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user']['role']!='seller'){
  header('Location: login.php');
  exit;
}
include 'inc/header.php';
?>
<section style="padding:2rem;" class="fade-in">
<h2>Seller Dashboard</h2>
<div class="dashboard-section">Add/Edit Products (placeholder)</div>
<canvas id="salesChart" width="400" height="200"></canvas>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx=document.getElementById('salesChart');
new Chart(ctx,{type:'bar',data:{labels:['Jan','Feb','Mar'],datasets:[{label:'Sales',data:[5,10,8],backgroundColor:'#ff6a00'}]}});
</script>
<?php include 'inc/footer.php'; ?>
