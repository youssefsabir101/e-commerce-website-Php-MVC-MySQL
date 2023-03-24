                                                        
<?php
    $data = new ProductsController();
    $product = $data->getProduct();
?>


<section class="py-5 mt-0" >
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6">
              <!-- PRODUCT SLIDER-->
              <div class="row m-sm-0 wow fadeInDown">
                <div class="col-sm-10 order-1 order-sm-2">
                  <div class="swiper product-slider">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide h-auto"><img class="img-fluid" src="./public/uploads/<?php echo $product->product_image;?>" alt="..."/></div>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- PRODUCT DETAILS-->
            <div class="col-lg-6 wow bounceInUp" >

            <i class="bi bi-star-fill" style="color: #ffcc00;"></i><i class="bi bi-star-fill" style="color: #ffcc00;"></i><i class="bi bi-star-fill" style="color: #ffcc00;"></i><i class="bi bi-star-fill" style="color: #ffcc00;"></i><i class="bi bi-star-half" style="color: #ffcc00;"></i>

              <h2 class="wow bounceInUp"><?php echo $product->product_title;?></h2>
              
              <p class=" text-mutedlead wow bounceInUp">
                <span class="mr-1">
                    <del><?php echo $product->old_price;?>dh</del>
                    &nbsp;&nbsp;
                </span>
                <span class="text-muted lead wow bounceInUp"><b><?php echo $product->product_price;?>dh</b></span>
              </p>

              <p class="lead font-weight-bold wow fadeInRight">Description</p>

              <p class="text-sm mb-4"><?php echo $product->short_desc;?></p>
              <div class="row align-items-stretch mb-4">
                <div class="col-sm-5 pr-sm-0">
                  <div class=""><span class="small text-uppercase text-gray wow bounceInUp">Quantity</span>

                        <form class="d-flex justify-content-left wow bounceInUp" method="post" action="<?php echo BASE_URL;?>checkout">
                            <div class="form-group float-left">
                                <input type="number" name="product_qte" id="product_qte" aria-label="Search" class="form-control" style="width: 100px;border-radius:0px;" value="1" min="1" max="100" >
                                <input type="hidden" name="product_title" value="<?php echo $product->product_title;?>">
                                <input type="hidden" name="product_id" value="<?php echo $product->product_id;?>">&nbsp;
                            </div>
                            <div class="form-group float-right wow fadeInRight">
                                <input type="submit" class="btn btn-primary btn-md my-0 p" value="Ajouter au panier" style="border-radius:0px;">
                            </div>
                        </form><br><br>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>



<div class="container">
    <div class="row my-5">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card h-100 bg-white rounded p-2">
                        <div class="card-header bg-light">
                            <h3 class="card-title">
                            <?php
                                    echo $product->product_title;
                                ?>  
                            </h3>  
                        </div>
                        <div class="card-img-top">
                            <img width="100%" 
                            src="./public/uploads/<?php echo $product->product_image;?>" alt="" class="img-fluid rounded">
                        </div>
                        <div class="card-body">
                            <p class="card-text">
                                <?php
                                    echo $product->short_desc;
                                ?>
                            </p>
                        </div>
                        <div class="card-footer">
                            <span class="badge badge-danger p-2">
                                <?php
                                    echo $product->product_price;
                                ?>dh
                            </span>
                             <span class="badge badge-dark p-2">
                                <strike>
                                    <?php
                                        echo $product->old_price;
                                    ?>dh
                                </strike>
                            </span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3 class="text-secondary m-3 text-center">
                Qté : 
            </h3>
            <form method="post" action="<?php echo BASE_URL;?>checkout">
                <div class="form-group">
                    <input type="number" name="product_qte" id="product_qte" class="form-control" value="1">
                    <input type="hidden" name="product_title" value="<?php echo $product->product_title;?>">
                    <input type="hidden" name="product_id" value="<?php echo $product->product_id;?>">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Ajouter au panier">
                </div>
            </form>
        </div>
    </div>
</div> 
                
