                                                        
<?php
foreach($_SESSION as $name => $product){
    if(substr($name,0,9) == "products_"){
        unset($_SESSION[$name]);
        unset($_SESSION["count"]);
        unset($_SESSION["totaux"]);
        Redirect::to("cart");
    }
}
                                                        
                                                    