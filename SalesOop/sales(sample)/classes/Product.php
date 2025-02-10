<?php
require_once "Database.php";

class product extends Database {

    public function getProduct($id){

        $sql = "SELECT * FROM products WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving the products: ' .$this->conn->error);
        }
    }

    public function update($request){
        $id           = $request['id'];
        $product_name = $request['product_name'];
        $price        = $request['price'];
        $quantity     = $request['quantity'];

        $sql = "UPDATE products
                SET product_name = '$product_name',
                    price = $price,
                    quantity = $quantity
                WHERE id = $id";
        
        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error updating your products: ' . $this->conn->error);
        }
        
    }

    public function updateBuyProduct($request){
        $id           = $request['id'];
        $total_price  = $request['total_price'];
        $buy_quantity = $request['buy_quantity'];
        $quantity     = $request['quantity'];
        $payment      = $request['payment'];

        $after_buy_quantity = $quantity - $buy_quantity;

        if($total_price <= $payment){
            $sql = "UPDATE products SET quantity = $after_buy_quantity WHERE id = $id";

            if($this->conn->query($sql)){
                header('location: ../views/dashboard.php');
                exit;
            }else{
                die('Error updating your products: ' . $this->conn->error);
            }
        }else{
            die('Error you can not pay: ' . $this->conn->error);
        }

    }
}


?>