<!-- header section-----------------------  -->
<title>Register</title>
 <?php
    include("Parts/header.php");
    ?>

<!-- Register  -->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Register</h2>
    <hr class="mx-auto">
  </div>

  <div class="mx-auto container">
    <form action="" id="register-form">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required>
      </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <label for=""> Confirm Password</label>
        <input type="Password" class="form-control" id="register-confirm-password" name="confirmPassword" placeholder="Confirm Password" required>
      </div>

      <div class="form-group">
        <input type="submit" class="form-btn" id="register-btn" value="register" />
      </div>


      <div class="form-group">
        <a href="" class="btn" id="login-url">Login?</a>
      </div>
      
    </form>
  </div>
</section>















   <!-- footer section-----------------------  -->
   <?php
    include("Parts/footer.php");
    ?>
 