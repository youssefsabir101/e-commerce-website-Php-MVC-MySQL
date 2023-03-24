<?php

    $categories = new CategoriesController();
    $categories = $categories->getAllCategories();
    if(isset($_POST["cat_id"])){
        $products = new ProductsController();
        $products = $products->getProductsByCategory($_POST['cat_id']);
    }else{
        $data = new ProductsController();
        $products = $data->getAllProducts();
    }


?>


    <!-- <section class="main" id="toppage">
      <div class="container container1">
          <div class="row">
              <div class="col-sm-6 col1">
                  <h1 class="motivtitle" >Découvrez</h1>
                  <h1 class="motivtitle">les dernières offres</h1>
                  <button class="btn1" type="submit">decouvrir</button>
              </div>
              <div class="col-sm-6 col2">
                  <img src="public/uploads/leno.png" class="img-responsive vector" alt="">
              </div>
          </div>
      </div>
    </section> -->



    <div class="container-fluid" id="categ" style="padding-top: 100px;">
        <div class="row">
            <div class="col-lg-2  wow slideInLeft">
                <div class="py-2 px-4 text-white mb-3 orderBy" style="background-color:#ffc116 ;"><strong class="small text-uppercase fw-bold">Categories</strong></div>
                <ul class="list-unstyled">
                        <li class="mb"><a href="<?php echo BASE_URL;?>home" class="btn btn-link text-secondary categorie">All products</a></li>
                    <?php
                        foreach($categories as $category) :
                    ?> 
                        <li class="" style="padding-left:15px">
                            <form id="catPro" method="post" action="<?php echo BASE_URL;?>">
                                <input type="hidden" name="cat_id" id="cat_id">
                            </form>
                            <a onclick="getCatProducts(<?php echo $category['cat_id'];?>)" class="btn-link text-secondary categorie">
                                <?php
                                    echo $category['cat_title'];
                                ?> &nbsp;
                                <span class="countcategorie">
                                    <?php
                                        $productsByCat = new ProductsController();
                                        $productsByCat = $productsByCat->getProductsByCategory($category['cat_id']);
                                        echo count($productsByCat);
                                    ?>
                                </span>
                                
                            </a>
                        </li>
                    <?php
                        endforeach;
                    ?>
                </ul>
            </div>
            <div class="col-lg-9 order-1 order-lg-2 mb-5 mb-lg-0">
                <div class="row mb-3 align-items-center">
                   <div class="col-lg-6 mb-2 mb-lg-0 wow slideInRight">
                        <div class="col">

                            <div class="search">
                                <input type="text" class="form-control" placeholder="search ...">
                                <button class="">Search</button>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 wow slideInRight">
                        <ul class="list-inline d-flex align-items-center justify-content-lg-end mb-0">
                            <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="bi bi-th-large"></i></a></li>
                            <li class="list-inline-item text-muted me-3"><a class="reset-anchor p-0" href="#!"><i class="bi bi-th"></i></a></li>
                            <li class="list-inline-item">
                            <select class="orderBy" data-customclass=" ">
                            <option value="default">Par Default </option>
                            <option value="popularity">Nauevaux </option>
                            <option value="low-high">Prix: + </option>
                            <option value="high-low">Prix: -</option>
                            </select>
                            </li>
                        </ul>
                    </div>
                </div>
                    

                <div class="row">

                    <?php
                        if(count($products) > 0) :
                    ?>
                    <?php
                        foreach($products as $product) :
                    ?> 
                    <div onclick="submitForm(<?php echo $product['product_id'];?>)" class="col-lg-3 col-sm-6 p-2  wow flipInX">
                        <div class="card h-100 shadow-sm">
                            <form id="form" method="post" action="<?php echo BASE_URL;?>show">
                                    <input type="hidden" name="product_id" id="product_id">
                            </form>
                            <a onclick="submitForm(<?php echo $product['product_id'];?>)">
                            <img src="./public/uploads/<?php echo $product["product_image"];?>" class="card-img-top" alt="product.title" />
                            </a>

                            <div class="label-top shadow-sm">
                            <a class="text-white">New</a>
                            </div>

                            <div class="card-body">
                                <div class="clearfix mb-3">
                                    <span class="float-start badge rounded-pill bg-success"><?php echo $product['product_price'];?>dh</span>

                                    <span class="float-end"><del><?php echo $product['old_price']; ?>dh</del></span>
                                </div>
                                <h5 class="card-title">
                                    <a  ><?php echo $product['product_title']; ?></a>
                                </h5>
                                <p class="descriptionchort" id="deskcr">
                                <?php echo $product['short_desc']; ?>
                                </p>

                                <div class="d-grid gap-2 my-4">
                                    <a onclick="submitForm(<?php echo $product['product_id'];?>)" class="btn btn-warning bold-btn">Reviews</a>

                                </div>
                                <div class="clearfix mb-1">

                                    <span class="float-start"><a href="#"><i class="fas fa-question-circle"></i></a></span>

                                    <span class="float-end">
                                    <i class="far fa-heart" style="cursor: pointer"></i>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        endforeach;
                    ?>
                    <?php
                        else :
                    ?>
                    <div class="alert alert-info">
                        aucun produit trouvé
                    </div>
                    <?php
                        endif;
                    ?>
                        

                        
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center justify-content-lg-end">
                        <li class="page-item mx-1"><a class="page-link" href="#!" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="page-item mx-1 active"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item mx-1"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item mx-1"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item ms-1"><a class="page-link" href="#!" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                    </div>
                </div>
            </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-capslock-fill"></i></button>















    <script>
        mybutton = document.getElementById("myBtn");

        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        function topFunction() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0; 
        }
    </script>






