<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" href="#toppage">Sabir Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-li" href="<?php echo BASE_URL;?>">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-li" href="<?php echo BASE_URL;?>#categ">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-li" href="#toppage">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-li" href="#toppage">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-li" href="<?php echo BASE_URL;?>cart"><i class="bi bi-cart-fill"></i>
          <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
            <span class="countcard"><?php echo $_SESSION["count"];?></span>   
          <?php else:?>
            <span class="countcard">0</span>
          <?php endif;?> 
        </a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-li" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <i class="bi bi-person-circle"></i>
        </a>
        <div class="bi bi-person-fill dropdown-menu wow fadeInDown divcompt" aria-labelledby="navbarDropdown">
              <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
                <a class="dropdown-ite" href="#"><?php echo $_SESSION["fullname"];?></a>
                <a class="dropdown-ite" href="<?php echo BASE_URL;?>logout">Déconnexion</a>
                <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true):?>
                <a class="dropdown-ite" href="<?php echo BASE_URL;?>dashboard">Dashboard <!-- <span class="sr-only">(current)</span> --></a>
                <?php endif;?> 
              <?php else:?>  
                <a class="dropdown-ite" href="<?php echo BASE_URL;?>register">Inscription</a>
                <a class="dropdown-ite" href="<?php echo BASE_URL;?>login">Connexion</a>
        </div>
        <?php endif;?>

      </li>
    </ul>
  </div>
</nav>
</div>
<!-- **************************************************************************************************************************** -->

    

