<title>Single Product Page</title>
<!-- header section-----------------------  -->

<?php
include("Parts/header.php");
?>


<!-- Single Product  -->
<section class="container single-product my-5 pt-5">
  <div class=" row mt-5">
    <div class="col-lg-5 col-md-6 col-sm-12">
      <img src="src/images/shoes.jpg" alt="" class="img-fluid w-100 pb-1" id="mainImg">
      <div class="small-img-group">

        <div class="small-img-col">
          <img src="src/images/adidas.jpg" alt="" class="small-img" width="100%">
        </div>

        <div class="small-img-col">
          <img src="src/images/coach.png" alt="" class="small-img" width="100%">
        </div>

        <div class="small-img-col">
          <img src="src/images/shoes.jpg" alt="" class="small-img" width="100%">
        </div>

        <div class="small-img-col">
          <img src="src/images/temp.jpg" alt="" class="small-img" width="100%">
        </div>

      </div>
    </div>


    <div class="col-lg-6 col-md-12 col-12">
      <h6>Men/Shoes</h6>
      <h2>$155</h2>
      <input class="singleInput" type="number" value="1" />
      <button class="singleButton">Add To Cart</button>
      <h4 class="mt-5 mb-5">Product details</h4>
      <span>The details of this product will be displayed shortly.</span>
      <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam aperiam saepe quis animi. Reprehenderit in cumque explicabo quibusdam sit, ipsa magni facilis officia, expedita nobis dolore. Ratione quae perferendis itaque!.
      </span>
    </div>
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