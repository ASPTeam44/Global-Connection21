<?php
session_start();
include 'inc/header.php';
include 'data/users.php';
$message='';
if($_SERVER['REQUEST_METHOD']==='POST'){
  $user=array_values(array_filter($users,function($u){return $u['username']===$_POST['username'] && $u['password']===$_POST['password'];}))[0]??null;
  if($user){
    $_SESSION['user']=$user;
    header('Location: '.($user['role']=='seller'?'seller_dashboard.php':'buyer_dashboard.php'));
    exit;
  }else{$message='Invalid credentials';}
}
?>
<section style="padding:2rem;" class="fade-in">
<h2>Login</h2>
<form method="post">
  <input type="text" name="username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit">Login</button>
</form>
<p style="color:red;"><?php echo $message; ?></p>
</section>
<?php include 'inc/footer.php'; ?>
