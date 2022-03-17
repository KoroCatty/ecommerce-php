<title>Single Product Page</title>





<!-- get the product id  -->
<?php
// まずはサーバー接続
include('server/connection.php');

if (isset($_GET['product_id'])) {

  // create a variable here 
  $product_id =  $_GET['product_id'];

  $stmt = $conn->prepare('SELECT * FROM products WHERE product_id = ?'); // id is unique so no need LIMIT. using prepare(), therefore gotta use ? mark

  // PHPのbindParam()関数は、プリペアドステートメントで使用するSQL文の中で、プレースホルダーに値をバインドするための関数
  $stmt->bind_param("i", $product_id); // i = integer 

  $stmt->execute();

  // 取得したデータを変数に保存
  $product =  $stmt->get_result(); // Array [1]

} else {
  // no product id was given so take you to index page
  header('location: index.php');
}

?>





<!-- header section-----------------------  -->
<?php
include("Parts/header.php");
?>






<!-- Single Product  -->
<section class="container single-product my-5 pt-5">
  <div class=" row mt-5">




  
    <?php while ($row = $product->fetch_assoc()) : ?>


      <div class="col-lg-5 col-md-6 col-sm-12">
        <img src="src/images/<?php echo $row['product_image']; ?>" alt="" class="img-fluid w-100 pb-1" id="mainImg">
        <div class="small-img-group">

          <div class="small-img-col">
            <img src="src/images/<?php echo $row['product_image']; ?>" alt="" class="small-img" width="100%">
          </div>

          <div class="small-img-col">
            <img src="src/images/<?php echo $row['product_image2']; ?>" alt="" class="small-img" width="100%">
          </div>

          <div class="small-img-col">
            <img src="src/images/<?php echo $row['product_image3']; ?>" alt="" class="small-img" width="100%">
          </div>

          <div class="small-img-col">
            <img src="src/images/<?php echo $row['product_image4']; ?>" alt="" class="small-img" width="100%">
          </div>

        </div>
      </div>


      <div class="col-lg-6 col-md-12 col-12">
        <h6>Men/Shoes</h6>
        <h3 class="py-4"><?php echo $row['product_name']; ?>"</h3>
        <h2><?php echo $row['product_price']; ?>" </h2>



        <!-- hidden forms  -->
        <!-- take the data to cart.php page  -->
        <form action="cart.php" method="POST">
          
          <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
          <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
          <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
          <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">

          <!-- Quantity -->
          <input class="singleInput" type="number" name="product_quantity" value="7" />
          <button class="singleButton" type="submit" name="add_to_cart">Add To Cart</button>
        </form>

        <h4 class="mt-5 mb-5">Product details</h4>
        <span><?php echo $row['product_description']; ?>"</span>
      </div>


    <? endwhile; ?>



  </div>
</section>



<!-- related products section -->
<section class="featured my-5 pb-5" id="related-products">
  <div class="container text-center mt-5 py-5 featuredSection__block">
    <h3>Related Produxts</h3>
    <hr>
  </div>
  <div class="row mx-auto container-fluid featuredSection__row">

    <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
      <img src="src/images/shoes.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
      <div class="star featuredSection__star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Sports Shoes</h5>
      <h4 class="p-price">$198.8</h4>
      <button class="buy-btn">Buy Now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
      <img src="src/images/shoes.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
      <div class="star featuredSection__star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Sports Shoes</h5>
      <h4 class="p-price">$198.8</h4>
      <button class="buy-btn">Buy Now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
      <img src="src/images/shoes.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
      <div class="star featuredSection__star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Sports Shoes</h5>
      <h4 class="p-price">$198.8</h4>
      <button class="buy-btn">Buy Now</button>
    </div>

    <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
      <img src="src/images/shoes.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
      <div class="star featuredSection__star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </div>
      <h5 class="p-name">Sports Shoes</h5>
      <h4 class="p-price">$198.8</h4>
      <button class="buy-btn">Buy Now</button>
    </div>
  </div>
</section>












<!-- footer section-----------------------  -->
<?php
include("Parts/footer.php");
?>