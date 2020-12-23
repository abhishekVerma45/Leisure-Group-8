<html>
    <head>
        <link rel="stylesheet"  href="payment.css">
    </head>
<body>
  <div >
    <p class= "heading1">Enter Payment Details</p>
  </div>    
    <div id="wrapper">
        <div id="container">
          <div id="info">
            
            <div class="card-body pack">
              <h2 class="price-text">₹49 </h2>
              <p>Unlimited movies and TV shows</p>
              <p>HD available</p>
              <p>Watch on any device</p>
              <p>Unlimited App Usage</p>
              <!-- <button type="button" class="btn btn-lg btn-block btn-dark">Sign In</button> -->
              <!--<a href="Y:\Signup\signup.html" class="btn btn-lg btn-block btn-dark " role="button" aria-pressed="true">Sign Up</a>-->
        
            </div>
      
          </div>
      
          <div id="payment">
      
            <form id="checkout">
      
              <input class="card" id="visa" type="button" name="card" value="">
              <input class="card" id="mastercard" type="button" name="card" value="">
      
              <label>Credit Card Number</label>
              <input id="cardnumber" type=text pattern="[0-9]{13,16}" name="cardnumber" requierd="true" placeholder="0123-4567-8901-2345">
      
              <label>Card Holder</label>
             <input id="cardholder" type="text" name="name" requierd="true" maxlength="50" placeholder="Cardholder">
      
              <label>Expiration Date</label>
              <label id="cvc-label">CVC/CVV</label>
              <div id="left">
                  <select name="month" id="month" onchange="" size="1">
                    <option value="00">MM</option>
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
              <p>/</p>
                  <select name="year" id="year" onchange="" size="1">
                    <option value="00">YY</option>
                    <option value="06">21</option>
                    <option value="07">22</option>
                    <option value="08">23</option>
                    <option value="09">24</option>
                    <option value="10">25</option>
                  </select>
              </div>
      
      
              <input id="cvc" type="text" placeholder="Cvc/Cvv" maxlength="3" />
      
              <a href="signintrial.php"><input class="btn" type="button" name="purchase" value="Purchase"></a>
            </form>
          </div>
      
        </div>
      </div>
</body></html>