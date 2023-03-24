<?php

class Order{
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM orders');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt =null;
    }

    static public function createOrder($data){
        $stmt = DB::connect()->prepare('INSERT INTO orders (fullname,product,qte,price,total)
                                    VALUES (:fullname,:product,:qte,:price,:total)');
        $stmt->bindParam(':fullname',$data['fullname']);
        $stmt->bindParam(':product',$data['product']);
        $stmt->bindParam(':qte',$data['qte']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':total',$data['total']);

        if($stmt->execute()){
            return 'ok';
        }else{
            return 'no';
        }

        $stmt->close();
        $stmt =null;
    }
}




?>