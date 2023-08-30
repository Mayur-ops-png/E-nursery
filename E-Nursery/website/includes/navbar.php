
 <nav class="navbar navbar-expand-md navbar-light main-nav">
  <!-- Brand -->
  

  <!-- Navbar links -->
  



<?php 

if(!isset($_SESSION['email'])) {
  ?>
  <div class="container">
  <a class="navbar-brand" href="index.php">E Nursery 🌱</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="signup.php">Sign up</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    </ul>
  </div>
</div>
<?php 
}else{

  if($_SESSION['status']==="1"){
    ?>
    <div class="container">
  <a class="navbar-brand" href="admin.php">E nursery 🌱</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">

      <li class="nav-item ml-auto">
        <a class="nav-link" href="rplyque.php">User Queries</a>
      </li>


       <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="view-product.php">View Products</a>
        <a class="dropdown-item" href="add-product.php">Add Product</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Category
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="view-category.php">Categories</a>
        <a class="dropdown-item" href="add-category.php">Add Category</a>
      </div>
    </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="view-users.php">Users</a>
      </li>
      
            <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Settings
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="change-password.php">Change Password</a>
        <a class="dropdown-item" href="./scripts/logout-script.php">Logout</a>
      </div>
    </li>
    
    </ul>
  </div>

</div>

    <?php
  }else{
    ?>

<div class="container">
  <a class="navbar-brand" href="index.php">E nursery 🌱</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="queries.php">Queries</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="myinfo.php"> My Info</a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="wishlist.php"><i class="fa fa-heart"></i></a>
      </li>
      <li class="nav-item ml-auto">
        <a class="nav-link" href="cart.php"><i class="fa fa-shopping-cart"></i></a>
      </li>
  

    </ul>
  </div>
</div>
<?php
  }

}
 


?>

</nav>

