 <!-- header section-----------------------  -->
 <title>PHP EC Home</title>
 <?php
  include("Parts/header.php");
  ?>


 <!-- 選択中のページ（Home）のヘッダー内の色を変える。 -->
 <script type="text/javascript">
   // make the corresponding navigation tab active
   //var element = document.getElementById("index-home"); //navigation.php内にあるindex-homeを使用
   // element.classList.add("active"); //たぶんこれで色変えてる
 </script>
 <!-- end header section -->



 <!-- Home  -->
 <section id="home" class="homeSection">
   <div class="container homeSection__container">
     <h5 class="homeSection__title">NEW ARRIVALS</h5>
     <h1>
       <span class="homeSection--color">Best Prices</span> This Season
     </h1>
     <p class="homeSection__text">Eshop offers the best products for the most affordable prices</p>
     <button>Shop Now</button>
   </div>

 </section>



 <!-- Brand -->
 <section class="container brandContainer">
   <div class="row brandContainer__row">
     <img src="src/images/adidas.jpg" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
     <img src="src/images/nike.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
     <img src="src/images/coach.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
     <img src="src/images/zara.png" alt="" class="img-fluid col-lg-3 col-md-6 col-sm-12">
   </div>
 </section>


 <!-- New -->
 <section class="w-100 newSection">
   <div class="row p-0 m-0">
     <!-- 1 -->
     <div class="one col-lg-4 col-md-12 col-sm-12 p-0 newSection__block">
       <img src="src/images/adidas.jpg" alt="" class="img-fluid newSection__img">
       <div class="newSection__details">
         <h2 class="newSection__detailsTitle">Extreamely Awesome Shoes</h2>
         <button class="text-uppercase newSection__detailsButton">Show Now</button>
       </div>
     </div>

     <!-- 2 -->
     <div class="one col-lg-4 col-md-12 col-sm-12 p-0 newSection__block">
       <img src="src/images/adidas.jpg" alt="" class="img-fluid newSection__img">
       <div class="newSection__details">
         <h2 class="newSection__detailsTitle">Extreamely Awesome Shoes</h2>
         <button class="text-uppercase newSection__detailsButton">Show Now</button>
       </div>
     </div>

     <!-- 3 -->
     <div class="one col-lg-4 col-md-12 col-sm-12 p-0 newSection__block">
       <img src="src/images/adidas.jpg" alt="" class="img-fluid newSection__img">
       <div class="newSection__details">
         <h2 class="newSection__detailsTitle">Extreamely Awesome Shoes</h2>
         <button class="text-uppercase newSection__detailsButton">Show Now</button>
       </div>
     </div>

   </div>
 </section>


 <!-- Featured section -->
 <section class="featured my-5 pb-5">
   <div class="container text-center mt-5 py-5 featuredSection__block">
     <h3>Our Featured</h3>
     <hr>
     <p>Here you can check out our featured products</p>
   </div>
   <div class="row mx-auto container-fluid featuredSection__row">


     <!-- connect to this file -->
     <?php include('server/get_featured_products.php'); ?>
     <?php
      // To display all of the products from DB 
      while ($row = $featured_products->fetch_assoc()) {
      ?>
       <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
         <img src="src/images/<?php echo $row['product_image']; ?>" alt="" class="img-fluid mb-3 featuredSection__img">
         <div class="star featuredSection__star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
         </div>

         <!-- DBからデータ取得　 -->
         <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
         <h4 class="p-price">$ <?php echo $row['product_price']; ?></h4>

         
         <!-- take you to the product page you chose  (using id )-->
         <!-- <a href="single_product.php?product_id=<?php echo $row['product_id'];?> ">-->
         <!-- or  -->
         <a href="<?php echo "single_product.php?product_id=".  $row['product_id']; ?> ">
           <button class="buy-btn">Buy Now</button>
         </a>


       </div>
     <?php } ?>
     <!--ここで閉じる -->

   </div>
 </section>


 <!-- Banner -->
 <section class="my-5 pb-5 banner">
   <div class="container banner__container">
     <h4 class="banner__title">MID SEASON'S SALE</h4>
     <h1 class="banner__title--big">Autumn Collection <br>Up to 30% Off</h1>
     <button class="text-uppercase">Shop Now</button>
   </div>
 </section>




 <!-- Clothes  -->
 <section class="featured my-5 ">
   <div class="container text-center mt-5 py-5 featuredSection__block">
     <h3>Dresses & Coats</h3>
     <hr>
     <p>Here you can check out our amazing Clothes</p>
   </div>
   <div class="row mx-auto container-fluid featuredSection__row">

     <?php include('server/get_coats.php') ?>

     <!-- while(): と endwhile;で閉じる -->
     <!-- $rowは配列 -->
     <?php while ($row = $coats_products->fetch_assoc()) : ?>

       <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
         <img style="height:400px;" src="src/images/<?php echo $row['product_image']; ?>" alt="" class="img-fluid mb-3 featuredSection__img">
         <div class="star featuredSection__star">
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
           <i class="fas fa-star"></i>
         </div>
         <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
         <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
         <button class="buy-btn">Buy Now</button>
       </div>
     <?php endwhile; ?>


   </div>
 </section>


 <!-- Watches Section -->
 <!-- <section class="featured my-5" id="watch">
   <div class="container text-center mt-5 py-5 featuredSection__block">
     <h3>Best Watches</h3>
     <hr>
     <p>Here you can check out our amazing Watches</p>
   </div>
   <div class="row mx-auto container-fluid featuredSection__row">

     <div class="product text-center col-lg-3 col-md-6 col-sm-12 featuredSection">
       <img src="src/images/watch.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
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
       <img src="src/images/watch.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
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
       <img src="src/images/watch.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
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
       <img src="src/images/watch.jpg" alt="" class="img-fluid mb-3 featuredSection__img">
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
 </section> -->



 <!-- Shoes Section -->
 <!-- <section class="featured my-5 " id="shoes">
   <div class="container text-center mt-5 py-5 featuredSection__block">
     <h3>Shoes</h3>
     <hr>
     <p>Here you can check out our amazing Shoes</p>
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
 </section> -->






 <!-- footer section-----------------------  -->
 <?php
  include("Parts/footer.php");
  ?>