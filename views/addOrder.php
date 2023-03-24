<?php
$order = new OrdersController();
foreach($_SESSION as $name => $product){
    if(substr($name,0,9) == "products_"){
       $data = array(
        "fullname" =>"youssefsabir",
        "product" => $product["title"],
        "qte" => $product["qte"],
        "price" => $product["price"],
        "total" => $product["total"]
       );
       $order->addOrder($data);
    }
}
                                                        
                                                    