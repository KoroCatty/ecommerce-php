<!-- header section-----------------------  -->
<title>CheckOut</title>
<?php
include("Parts/header.php");
?>



<!-- Checkout  -->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Check Out</h2>
    <hr class="mx-auto">
  </div>

  <div class="mx-auto container">
    <form action="" id="checkout-form">
      <div class="form-group checkout-small-element">
        <label for="">Name</label>
        <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required>
      </div>

      <div class="form-group checkout-small-element">
        <label for="">Email</label>
        <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group checkout-small-element">
        <label for="">Phone</label>
        <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone" required>
      </div>

      <div class="form-group checkout-small-element">
        <label for=""> City</label>
        <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>
      </div>

      <div class="form-group checkout-large-element">
        <label for="">Address</label>
        <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
      </div>


      <div class="form-group checkout-btn-container">
        <input type="submit" class="btn" id="checkout-btn" value="CheckOut" />
      </div>


      
    </form>
  </div>
</section>



















<!-- footer section-----------------------  -->
<?php
include("Parts/footer.php");
?>