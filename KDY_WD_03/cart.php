<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">

	<title>KIDSHERO</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/site.js"></script>
</head>
<body>

<table class="tab1" border="2" width="100%">
	<div>
	<tr>
	<th>
		<img class="Logo" src="image/logo.jpg"width="50px"height="50px" align="left">

			<p>KIDHERO</p>
			<a class="set1" href="homePage.php">Home</a>
			<a class="set2" href="games.php">Game Upload</a>
			<a class="set3" href="news.php">News</a>
			<a class="set4" href="rewards.php">Rewards</a>
			<a class="set5" href="login1.php">Profile</a>
			<a class="set6" href="fromproject1.php"><img src="image/user.jpg"width="25px"height="25px"></a>
			<a class="set7" href="#"><img src="image/cart1.jpg"width="25px"height="25px"></a>

	</th>
	</tr>
	</div>
</table>

<br><br><br>




<h1>Shopping Cart</h1>

<table class="tab" border="2" width="100%">
<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  <tr><td><div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/dingo-dog-bones.jpg">
    </div></td>
    <td><div class="product-details">
      <div class="product-title">Game name</div></td>
      <td><p class="product-description">Game description</p>
    </div></td>
    <td><div class="product-price">12.99</div></td>
    <td><div class="product-quantity">
      <input type="number" value="2" min="1">
    </div></td>
    <td><div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div></td>
    <td><div class="product-line-price">25.98</div></td>
  </div></tr>

  <tr><td><div class="product">
    <div class="product-image">
      <img src="https://s.cdpn.io/3/large-NutroNaturalChoiceAdultLambMealandRiceDryDogFood.png">
    </div></td>
    <td><div class="product-details">
      <div class="product-title">Game name 2</div></td>
      <td><p class="product-description">Game description 2</p>
    </div></td>
    <td><div class="product-price">45.99</div></td>
    <td><div class="product-quantity">
      <input type="number" value="1" min="1">
    </div></td>
    <td><div class="product-removal">
      <button class="remove-product">
        Remove
      </button>
    </div></td>
    <td><div class="product-line-price">45.99</div></td>
  </div></tr>

  <div class="totals">
    <div class="totals-item">
      <label>Subtotal</label>
      <div class="totals-value" id="cart-subtotal">71.97</div>
    </div>
    <div class="totals-item">
      <label>Tax (5%)</label>
      <div class="totals-value" id="cart-tax">3.60</div>
    </div>
    <div class="totals-item">
      <label>Shipping</label>
      <div class="totals-value" id="cart-shipping">15.00</div>
    </div>
    <div class="totals-item totals-item-total">
      <label>Grand Total</label>
      <div class="totals-value" id="cart-total">90.57</div>
    </div>
  </div>
      
      <button class="checkout"><a href="payment.php">Checkout</a></button>

</div>
</table>

<br><br>

<footer>
  <div class="footer-top">
    <div class="footer-top-body footer-flex">
      <div class="contact-body footer-body-div">
        <h3>Contant Us</h3>
        <p>+94 705523653</p>
      </div>
      <div class="email-body footer-body-div">
        <h3>Email</h3>
        <p>learning@gmail.com</p>
      </div>
      <div class="follow-us-body footer-body-div">
        <h3>Follow Us</h3>
        <div class="footer-social-media">
          <a href="#facebook" class="fa fa-facebook-official"></a>
          <a href="#twitter" class="fa fa-twitter-square"></a>
          <a href="#instagram" class="fa fa-instagram"></a>
          <a href="#google-plus" class="fa fa-google-plus-square"></a>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="footer-bottom-body footer-flex">
      <div class="privacy-policy footer-body-div"><a href="policy1.html">Privacy Policy</a></div>
      <div class="help footer-body-div"><a href="help.html">Help</a></div>
      <div class="about footer-body-div"><a href="about.html">About</a></div>
    </div>
  </div>
</footer>


</body>
</html>