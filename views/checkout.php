                                                        
<?php
if(isset($_POST["product_id"])){
    $id = $_POST["product_id"];
    $data = new ProductsController();
    $product = $data->getProduct();

    if($_SESSION["products_".$id]["title"] == $_POST["product_title"]){
        Session::set("info","Vous avez déja ajouté ce produit au panier");
        Redirect::to("cart");
    }else{
        if($product->product_quantity < $_POST["product_qte"]){
            Session::set("info","La quantité disponible est : $product->product_quantity");
            Redirect::to("cart");
        }else{
            $_SESSION["products_".$product->product_id] = array(
                "id" => $product->product_id,
                "title" => $product->product_title,
                "price" => $product->product_price,
                "qte" => $_POST["product_qte"],
                "total" => $product->product_price * $_POST["product_qte"],
            );
            $_SESSION["totaux"] += $_SESSION["products_".$product->product_id]["total"];
            $_SESSION["count"] += 1;
            Redirect::to("cart");
        }
    }
}else{
    Redirect::to("cart");
} 
                                   
                                                    