<?php
if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new ProductsController();
    $data->removeProduct();
}else{
    Redirect::to("home");
}
                                                        
                                                    