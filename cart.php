<title>Cart</title>
<!-- header section-----------------------  -->
<?php
include("Parts/header.php");
?>

<?php




// check whether the POST parameter is empty or not
if (isset($_POST['add_to_cart'])) {

  //if user has already added a product to cart
  if (isset($_SESSION['cart'])) {

    $products_array_ids = array_column($_SESSION['cart'], "product_id"); // [2,3,4,10,15]return these IDs 

    //if product has already been added to cart or not
    // in_arry() 第一引数には、検索する値を渡し、第二引数には、検索対象の配列を渡す
    // 第二引数に渡した配列の中から、第一引数の値が存在するか確認し、検索した結果存在した場合は、boolean型のtrueが返却され、存在しなかった場合は、boolean型のfalseが返却
    if (!in_array($_POST['product_id'], $products_array_ids)) {

      $product_id = $_POST['product_id']; // ここで定義してremoveのために使えるようにしておく

      $product_array = array(
        'product_id' => $_POST['product_id'],
        'product_name' =>  $_POST['product_name'],
        'product_price' => $_POST['product_price'],
        'product_image' => $_POST['product_image'],
        'product_quantity' => $_POST['product_quantity']
      );
      // add this array to session 
      $_SESSION['cart'][$product_id] = $product_array;


      //product has already been added
    } else {

      echo '<script>alert("Product was already to cart");</script>';
      // echo '<script>window.location= "index.php";</script>';

    }



    // if this is the first product (you have to create this from scratch)
  } else {

    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = $_POST['product_quantity'];

    $product_array = array(
      'product_id' => $product_id,
      'product_name' => $product_name,
      'product_price' => $product_price,
      'product_image' => $product_image,
      'product_quantity' => $product_quantity
    );
    // add this array to session 
    $_SESSION['cart'][$product_id] = $product_array;
    // [ 2=>[] , 3=>[], 5=>[]  ]


  }


  //calculate total
  calculateTotalCart();






  //remove product from cart
} else if (isset($_POST['remove_product'])) {

  // unset関数は、定義した変数の割当を削除する関数です。
  // また、配列に使うと不必要になったインデックスの要素だけを削除できる(remove $product_id)
  $product_id = $_POST['product_id'];
  unset($_SESSION['cart'][$product_id]);

  //calculate total
  calculateTotalCart();
} else if (isset($_POST['edit_quantity'])) {


  //you get id and quantity from the form
  $product_id = $_POST['product_id'];
  $product_quantity = $_POST['product_quantity'];

  //get the product array from the session
  $product_array = $_SESSION['cart'][$product_id];

  //update product quantity (left one is old and right one is new)
  $product_array['product_quantity'] = $product_quantity;


  //return array back its place
  $_SESSION['cart'][$product_id] = $product_array;


  //calculate total
  calculateTotalCart();
} else {
  // header('location: index.php');
}





function calculateTotalCart()
{

  $total_price = 0;
  $total_quantity = 0;

  foreach ($_SESSION['cart'] as $key => $value) {

    $product =  $_SESSION['cart'][$key];

    $price =  $product['product_price'];
    $quantity = $product['product_quantity'];

    // multiply the value and quantity
    $total_price =  $total_price + ($price * $quantity);
    $total_quantity = $total_quantity + $quantity;
  }

  $_SESSION['total'] = $total_price;
  $_SESSION['quantity'] = $total_quantity;
}





?>





<!-- Cart Section  -->
<section class="cart container my-5 py-5">
  <div class="container mt-5">
    <h2 class="font-weight-bolde">Your Cart</h2>
    <!-- orange line  -->
    <hr>
  </div>

  <table class="mt-5 pt-5">
    <!-- 縦並び　 -->
    <tr>
      <!-- 横並び　 -->
      <th>Product</th>
      <th>Quantity</th>
      <th>Subtotal</th>
    </tr>

    <?php if (isset($_SESSION['cart'])) { ?>

      <!-- create a loop  -->
      <!-- $key is product id,   $value is array  -->
      <?php foreach ($_SESSION['cart'] as $key => $value) { ?>

        <tr>
          <!-- 表のデータ -->
          <td>
            <div class="product-info">
              <img src="src/images/<?php echo $value['product_image']; ?>" />
              <div>
                <p><?php echo $value['product_name']; ?></p>
                <small><span>$</span><?php echo $value['product_price']; ?></small>
                <br>

                <!-- hidden form  -->
                <form method="POST" action="cart.php">
                  <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
                  <!-- get the remove button working  -->
                  <input type="submit" name="remove_product" class="remove-btn" value="remove" />
                </form>

              </div>
            </div>
          </td>

          <td>

            <form method="POST" action="cart.php">

            <!-- activate the quantity button  -->
              <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>" />
              <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>" />
              <input type="submit" class="edit-btn" value="edit" name="edit_quantity" />
            </form>

          </td>

          <td>
            <!-- quantity  -->
            <span class="product-price">$<?php echo $value['product_quantity'] * $value['product_price']; ?></span>
          </td>
        </tr>


      <?php } ?>


    <?php } ?>


  </table>

  <!-- total price table  -->
  <div class="cart-total">
    <table>
      <!-- <tr>
              <td>Subtotal</td>
              <td>$155</td>
            </tr> -->
      <tr>
        <td>Total</td>
        <?php if (isset($_SESSION['cart'])) { ?>
          <td>$<?php echo $_SESSION['total']; ?></td>
        <?php } ?>
      </tr>
    </table>
  </div>

<!-- send the data to checkout.php  -->
  <div class="checkout-container">
    <form method="POST" action="checkout.php">
      <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout">
    </form>
  </div>


</section>







<!-- footer section-----------------------  -->
<?php
include("Parts/footer.php");
?>