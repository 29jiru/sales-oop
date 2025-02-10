<?php
require_once "database.php";

class User extends Database
{
    public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name  = $request['last_name'];
        $username   = $request['username'];
        $password   = $request['password'];
        // Password hashing
        $password   = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (`first_name`, `last_name`, `username`, `password`) VALUES ('$first_name', '$last_name', '$username', '$password')";

        if ($this->conn->query($sql)) {
            header('location: ../views/index.php');   // go to index.php
            exit;                           // same as die
        } else {
            die('error creating the user: ' . $this->conn->error);
        }
    }

    // ログイン機能
    public function login($request)
    {
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            // Check if the password is correct
            $user = $result->fetch_assoc();
            // $user = [`id` => 1, `username` => 'john', `password` => '$2y$10$c9'....];

            if (password_verify($password, $user['password'])) {
                # create session variables for future use
                session_start();
                $_SESSION['id']        = $user['id'];
                $_SESSION['username']  = $user['username'];
                $_SESSION['full_name'] = $user['first_name'] . " " . $user['last_name'];

                header(('location: ../views/dashboard.php'));
                exit;
            } else {
                die('Password is incorrect');
            }
        } else {
            die('Username not found.');
        }
    }

    // ログアウト機能
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('location: ../views');
        exit;
    }


    // 全アイテムの取得
    public function getAllProducts()
    {
        // $sql = "SELECT id, product_name, price, quantity From products";
        $sql = "SELECT * From products";

        if ($result = $this->conn->query($sql)) {
            return $result;
        } else {
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }

    // idでProductの取得
    public function getProduct()
    {
        $id = $_GET['product_id'];

        $sql = "SELECT * FROM products WHERE id = $id";

        if ($result = $this->conn->query($sql)) {
            return $result->fetch_assoc();
        } else {
            die('Error retrieving the user: ' . $this->conn->error);
        }
        // id の値を次に渡す　次でDELETEするのに使う
        return $id;
    }

    // update product
    public function update($request)
    {
        session_start();
        // $id           = $_SESSION['id'];
        $id           = $request['product_id'];
        $product_name = $request['product_name'];
        $price        = $request['price'];
        $quantity     = $request['quantity'];

        $sql = "UPDATE `products` 
                SET product_name ='$product_name',
                price    ='$price',
                quantity ='$quantity'
                WHERE id = $id";

        if ($this->conn->query($sql)) {
            $_SESSION['product_name']  = $product_name;
            $_SESSION['price']         = $price;
            $_SESSION['quantity']      = $quantity;
            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('error updating your account: ' . $this->conn->error);
        }
    }

    // add product
    public function addProduct($request)
    {
        // session_start();
        $product_name = $request['product_name'];
        $price        = $request['price'];
        $quantity     = $request['quantity'];

        $sql = "INSERT INTO `Products`(`product_name`, `price`, `quantity`) VALUES ('$product_name', $price, $quantity)";

        if ($this->conn->query($sql)) {

            header('location: ../views/dashboard.php');
            exit;
        } else {
            die('error updating your account: ' . $this->conn->error);
        }
    }


    // delete product
    public function delete()
    {
        session_start();
        $id = $_GET['product_id'];


        $sql = "DELETE FROM `Products` WHERE id = $id";

        if ($this->conn->query($sql)) {
            // $this->logout();
            header('location: ../views/dashboard.php');
        } else {
            die('error deleting product: ' . $this->conn->error);
        }
    }


    // buy product
    public function buyProduct($request)
    {
        session_start();
        // $_SESSION['stock']       = $request['quantity'];
        $_SESSION['buy_quantity'] = $request['buy_quantity'];
        
        // return $_SESSION['buy_quantity'];
        header('location: ../views/payment.php');
        exit;
    }


    // 支払い
    public function payment($request)
    {
        session_start();
        $id    = $_SESSION['product_id'];               // 製品ID
        $stock = $_SESSION['stock'];                    // 在庫数
        $stock = $stock - $_SESSION['buy_quantity'];    // 最新在庫数 ＝ 在庫数 ー 購入数
        $pay   = $_POST['payment'];                         // 支払い金額
        $total_price  = $_SESSION['total_price'];       // 購入金額

        $sql = "UPDATE `products` 
        SET     quantity ='$stock'
        WHERE   id       = $id";

        //支払い価格が足りているか？
        if ($total_price > $pay) {  // 支払いが足りない
            echo "Don't haggle. Please get out here. The day before yesterday!";
            exit;
        } elseif($total_price = $pay) {  // 支払いがちょうど
            if ($this->conn->query($sql)) {
                echo "What's a stingy customer, come again";
                header('location: ../views/dashboard.php');
                exit;
            } else {
                die('error payment : ' . $this->conn->error);
            }
        } else {  // 支払いが多い
            if ($this->conn->query($sql)) {
                echo "Thank you very much, Minister! See you again soon!";
                header('location: ../views/dashboard.php');
                exit;
            } else {
                die('error payment : ' . $this->conn->error);
            }
        }

    }
}
