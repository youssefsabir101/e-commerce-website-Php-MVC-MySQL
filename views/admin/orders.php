<?php
  if(isset($_SESSION['admin']) && $_SESSION['admin'] == true){
    $data = new OrdersController();
    $orders = $data->getAllOrders();
  }else{
      Redirect::to("home");
  }
?>
<div class="container">
  <div class="row my-5">
    <div class="col-md-10 mx-auto">
        <div class="card bg-light p-3">
            <table class="table table-hover table-inverse">
                <h3 class="font-weight-bold">Commandes</h3>
                <thead>
                    <tr>
                        <th>Nom & Prénom</th>
                        <th>Produit</th>
                        <th>Quantité</th>
                        <th>Prix</th>
                        <th>Total</th>
                        <th>Effectuée le</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $order) :?>
                    <tr>
                        <td><?php echo $order["fullname"];?></td>
                        <td><?php echo $order["product"];?></td>
                        <td><?php echo $order["qte"];?></td>
                        <td><?php echo $order["price"];?></td>
                        <td><?php echo $order["total"];?></td>
                        <td><?php echo $order["done_at"];?></td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
  </div>
</div>
                                                        
                                                    