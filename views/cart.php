                                                    
<div class="container-fluid">
<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-normal mb-0 text-black">Panier</h3>
            <p class="fw-normal mb-0 text-black"> <span class="text-muted mb-0">Produits: </span><?php echo isset($_SESSION["count"]) ? $_SESSION["count"] : 0;?></p>
            
            <div>
                            <p class="mb-0"><span class="text-muted">Total TTC:</span> <strong id="amount" data-amount="<?php echo $_SESSION["totaux"];?>">
                                <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0;?> <span class="bb-danger">dh</span>
                            </strong></p>
            </div>
                <div class="col-1 float-right">
                        <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                            <form method="post" action="<?php echo BASE_URL;?>emptycart">
                                <button type="submit" class="btn btn-primary" style="background-color: #ffcc00; font-size:bold; border:none;">
                                    Vider
                                </button>
                            </form>
                            <form method="post" id="addOrder" action="<?php echo BASE_URL;?>addOrder"></form>
                        <?php endif;?>
                </div>
         
        </div>




<!-- afficher les preduit ======================================================================================================================== -->
        <?php foreach($_SESSION as $name => $product) :?> 
                    <?php if(substr($name,0,9) == "products_"):?> 
                   

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="./public/uploads/<?php echo $product["product_image"];?>" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2"><?php echo $product["title"];?></p>
                                <p> <span class="text-muted">Price: </span><?php echo $product["price"];?> dh</p>
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">

                                <input id="form1" min="0" name="quantity" value="<?php echo $product["qte"];?>" type="number"
                                class="form-control form-control-sm" readonly />

                            </div>
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0"><span class="text-muted">Total: </span><?php echo $product["total"];?> Dh</h6>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <form method="post" action="<?php echo BASE_URL;?>cancelcart">
                                    <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
                                    <input type="hidden" name="product_price" value="<?php echo $product["total"];?>">
                                    <button type="submit" class="btn " style="background-color: red;">
                                        <i class="bi bi-trash3-fill" style="color: white;"></i>
                                    </button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;?> 
                    <?php endforeach;?>
        

<!-- partie paypal ======================================================================================================================== -->
                    <div class="container">
                    <div class="container">
                            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0 && isset($_SESSION["logged"])):?>
                                <div id="paypal-button-container"></div>
                            <?php elseif(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                                <a href="<?php echo BASE_URL;?>login" class="btn btn-link">connecter vous pour terminer vos achats</a>
                            <?php endif;?>
                    </div>
                    </div>


      </div>
    </div>
  </div>
</section>
</div>



 





<script> ///////////////////////////////////////////////////////////////////////////// Paypal script for complete paymnent
  let amount = document.querySelector('#amount').dataset.amount;
  let finalAmount = Math.floor(amount / 9.86);
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: finalAmount.toString()
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Commande effectuée par ' + details.payer.name.given_name);
        document.querySelector('#addOrder').submit();
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>