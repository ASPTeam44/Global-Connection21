<?php
session_start();
if(!isset($_SESSION['user']) || $_SESSION['user']['role']!='buyer'){
  header('Location: login.php');
  exit;
}
include 'inc/header.php';
?>
<section style="padding:2rem;" class="fade-in">
<h2>Buyer Dashboard</h2>
<div class="dashboard-section">Requests (placeholder)</div>
<div class="dashboard-section">Saved Products (placeholder)</div>
<div class="dashboard-section">Orders (placeholder)</div>
<div class="dashboard-section">Chat with Sellers (placeholder)</div>
</section>
<?php include 'inc/footer.php'; ?>
