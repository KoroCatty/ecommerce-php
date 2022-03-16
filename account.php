<!-- header section-----------------------  -->
<title>Account</title>
<?php
include("Parts/header.php");
?>

<!-- Account  -->
<section class="my-5 py-5">
  <div class="row container mx-auto">
    <div class="text-center mt-3 pt-5 col-lg col-md-12 col-sm-12">
      <h3 class="font-weight-bold">Account Info</h3>
      <hr class="mx-auto">
      <div class="account-info">
        <p>Name <span>John</span></p>
        <p>Email <span>kojima.website@gmail.com</span></p>

        <p><a href="" id="orders-btn">Your Orders</a></p>
        <p><a href="" id="logout-btn">Logout</a></p>
      </div>

    </div>


    <div class="col-lg-6 col-md-12 col-sm-12">
      <form action="" id="account-form">
        <h3>Change Password</h3>
        <hr class="mx-auto">

        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" id="account-password" name="password" placeholder="Password" required>
        </div>

        <div class="form-group">
          <label for="">Confirm Password</label>
          <input type="password" class="form-control" id="account-password-confirm" name="confirmPassword" placeholder="Confirm Password" required>
        </div>

        <div class="form-group">
          <input type="submit" value="Change Password" class="btn" id="change-pass-btn">
        </div>

      </form>
    </div>

  </div>
</section>







<!-- Orders Section  -------------------->
<section class="orders container my-5 py-3">
  <div class="container mt-2">
    <h2 class="font-weight-bold text-center">Your Orders</h2>
    <!-- orange line  -->
    <hr class="">
  </div>

  <table class="mt-5 pt-5">
    <!-- 縦並び　 -->
    <tr>
      <!-- 横並び　 -->
      <th>Product</th>
      <th>Date</th>

    </tr>

    <tr>
      <!-- 表のデータ -->
      <td>
        <div class="productInfo">
          <img src="src/images/watch.jpg" alt="">
          <div>
            <p class="mt-3">White Shoes</p>
          </div>
        </div>
      </td>

      <td>
        <span>2036-5-8</span>
      </td>


    </tr>

  </table>



</section>







<!-- footer section-----------------------  -->
<?php
include("Parts/footer.php");
?>