<style>
    .orderMessage {
        text-align: center;
        margin-top: 60px;
        font-size: 48px;
    }

    .orderLink {
        width: 200px;
        color:rgb(50, 50, 50);
        text-align: center;
        margin: 120px auto;
        padding: 20px 40px;
        font-size: 20px;
        background-color: whitesmoke;
        border-radius: 20px;
        display: block;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.4s ease;
        box-shadow: 3px 3px 5px black;
    }
.orderLink:hover {
color:blue;
transform: translateY(-5%);
}
</style>



<h1 class="orderMessage">Congratulations!! Your order is in!<h1>

        <a href="../index.php" class="orderLink">Go back to Home
            <!-- <button class="orderLink__goingBack">/button> -->
        </a>






        <?php

        session_start();

        include('connection.php');



        //if user is not logged in
        if (!isset($_SESSION['logged_in'])) {
            header('location: ../checkout.php?message=Please login/register to place an order');
            exit;


            //if user is logged in
        } else {


            // header('location: ../index.php?message=Thank you');

            echo '<script>alert("Thank you for you purchase!!");</script>';
            exit;


            if (isset($_POST['place_order'])) {

                //1. get user info and store it in database
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $city = $_POST['city'];
                $address = $_POST['address'];
                $order_cost = $_SESSION['total'];
                $order_status = "not paid";
                $user_id = $_SESSION['user_id'];
                $order_date = date('Y-m-d H:i:s');


                $stmt = $conn->prepare("INSERT INTO orders (order_cost,order_status,user_id,user_phone,user_city,user_address,order_date)
                                    VALUES (?,?,?,?,?,?,?); ");

                $stmt->bind_param('isiisss', $order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);

                $stmt_status = $stmt->execute();

                if (!$stmt_status) {
                    header('location: index.php');
                    exit;
                }


                //2. issue new order and store order info in database
                $order_id = $stmt->insert_id;




                //3. get products from cart (from session)
                foreach ($_SESSION['cart'] as $key => $value) {

                    $product = $_SESSION['cart'][$key]; // []
                    $product_id = $product['product_id'];
                    $product_name = $product['product_name'];
                    $product_image = $product['product_image'];
                    $product_price = $product['product_price'];
                    $product_quantity = $product['product_quantity'];

                    //4. store each single item in order_items database
                    $stmt1 = $conn->prepare("INSERT INTO order_items (order_id,product_id,product_name,product_image,product_price,product_quantity,user_id,order_date)
                                        VALUES (?,?,?,?,?,?,?,?)");

                    $stmt1->bind_param('iissiiis', $order_id, $product_id, $product_name, $product_image, $product_price, $product_quantity, $user_id, $order_date);

                    $stmt1->execute();
                }




                //5. remove everything from cart --> delay until payment is done
                //unset($_SESSION['cart']);


                $_SESSION['order_id'] = $order_id;

                //6. inform user whether everything is fine or there is a problem
                header('location: ../payment.php?order_status=order placed successfully');
            }
        }


        ?>