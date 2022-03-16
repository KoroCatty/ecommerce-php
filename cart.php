 <!-- header section-----------------------  -->
 <title>Cart</title>
 <?php
  include("Parts/header.php");
  ?>

 <!-- Cart Section  -->
 <section class="cart container my-5 py-5">
   <div class="container mt-5">
     <h2 class="font-weight-bold">Your Cart</h2>
     <!-- orange line  -->
     <hr class="shop__hr">
   </div>

   <table class="mt-5 pt-5">
     <!-- 縦並び　 -->
     <tr>
       <!-- 横並び　 -->
       <th>Product</th>
       <th>Quantity</th>
       <th>Subtotal</th>
     </tr>

     <tr>
       <!-- 表のデータ -->
       <td>
         <div class="productInfo">
           <img src="src/images/shoes.jpg" alt="">
           <div>
             <p>White Shoes</p>
             <small><span>$</span>155</small>
             <br>
             <a href="" class="remove-btn">Remove</a>
           </div>
         </div>
       </td>

       <td>
         <input type="number" value="1" />
         <a href="" class="edit-btn">Edit</a>
       </td>

       <td>
         <span>$</span>
         <span class="CartPrice">155</span>
       </td>
     </tr>






     <tr>
       <!-- 表のデータ -->
       <td>
         <div class="productInfo">
           <img src="src/images/shoes.jpg" alt="">
           <div>
             <p>White Shoes</p>
             <small><span>$</span>155</small>
             <br>
             <a href="" class="remove-btn">Remove</a>
           </div>
         </div>
       </td>

       <td>
         <input type="number" value="1" />
         <a href="" class="edit-btn">Edit</a>
       </td>

       <td>
         <span>$</span>
         <span class="CartPrice">155</span>
       </td>


     </tr>






     <tr>
       <!-- 表のデータ -->
       <td>
         <div class="productInfo">
           <img src="src/images/shoes.jpg" alt="">
           <div>
             <p>White Shoes</p>
             <small><span>$</span>155</small>
             <br>
             <a href="" class="remove-btn">Remove</a>
           </div>
         </div>
       </td>

       <td>
         <input type="number" value="1" />
         <a href="" class="edit-btn">Edit</a>
       </td>

       <td>
         <span>$</span>
         <span class="CartPrice">155</span>
       </td>


     </tr>

   </table>


   <!-- total price table  -->
   <div class="cartTotal">
     <table>
       <tr>
         <td>Subtotal</td>
         <td>$120</td>
       </tr>

       <tr>
         <td>Total</td>
         <td>$520</td>
       </tr>
     </table>
   </div>


<div class="checkoutContainer">
  <button class="btn checkout-btn">CheckOut</button>
</div>
 </section>






















 <!-- footer section-----------------------  -->
 <?php
  include("Parts/footer.php");
  ?>