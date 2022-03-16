<!-- header section-----------------------  -->
<title>Login</title>
 <?php
    include("Parts/header.php");
    ?>

<!-- Login  -->
<section class="my-5 py-5">
  <div class="container text-center mt-3 pt-5">
    <h2 class="form-weight-bold">Login</h2>
    <hr class="mx-auto">
  </div>

  <div class="mx-auto container">
    <form action="" id="login-form">
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required>
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required>
      </div>

      <div class="form-group">
        <input type="submit" class="form-btn" id="login-btn" value="Login" />
      </div>

      <div class="form-group">
        <a href="" class="btn" id="register-url">Create an account</a>
      </div>
      
    </form>
  </div>
</section>















   <!-- footer section-----------------------  -->
   <?php
    include("Parts/footer.php");
    ?>
 