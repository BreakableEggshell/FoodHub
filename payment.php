<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <div class="container">

    <div class="header-container">
      <img src="img/arrow_back_icon.svg"
            style="width: 1.5rem; height: 1.5rem; margin-right: .5em;">
      <p>Payment</p>
    </div>

    <!----------------- Delivery Address ----------------->

    <div class="delivery-add-container">
      <p>Delivery Address</p>

      <div class="body-section">
        <div id="delivery-option-home" class="delivery-add-selected">
          <img src="img/home_icon.svg"
              style="width: 1.5rem; height: 1.5rem; margin-right: .5em;">
          Home
        </div>
        <div id="delivery-option-work" class="delivery-add">
          <img src="img/work_icon.svg"
              style="width: 1.5rem; height: 1.5rem; margin-right: .5em;">
          Work
        </div>
        <div id="delivery-option-other" class="delivery-add">
          <img src="img/location_icon_black.svg"
              style="width: 1.5rem; height: 1.5rem; margin-right: .5em;">
          Other
        </div>
      </div>
      <div class="body-section">
        <input type="text" class="delivery-add-text">
      </div>
    </div>

    <!----------------- Payment Method ----------------->

    <div class="payment-method-cont">
      <div class="body-section"><p>Payment Method</p></div>

      <label class="payment-option">
        <input type="radio" name="payment" value="card" checked>
        <img src="img/credit_card_icon.svg">
        <div class="payment-option-item">
          <div>Credit/Debit Card</div>
          <div class="description-payment">Pay securely with your card</div>
        </div>
      </label>

      <label class="payment-option">
        <input type="radio" name="payment" value="wallet">
          <img src="img/wallet_icon.svg">
          <div class="payment-option-item">
            <div>Digital Wallet</div>
            <div class="description-payment">Apple Pay, Google Pay, Paypal</div>
          </div>
        </input>
      </label>

      <label class="payment-option">
        <input type="radio" name="payment" value="cod">
          <img src="img/cod_icon.svg">
          <div class="payment-option-item">
            <div>Cash on Delivery</div>
            <div class="description-payment">Pay when you receive</div>
          </div>
        </input>
      </label>
    </div>
    
    <!----------------- Order Summary ----------------->

    <div class="order-summary-cont">
      <p>Order Summary</p>
      <div class="order-summary-item">
        <p>Item Total</p>
        <p>$12.99</p>
      </div>
      <div class="order-summary-item">
        <p>Delivery Fee</p>
        <p>$2.99</p>
      </div>
      <div class="order-summary-item">
        <p>Tax</p>
        <p>$1.04</p>
      </div>
      <hr>
      <div class="order-summary-item">
        <p>Total Amount</p>
        <p>$17.02</p>
      </div>
    </div>

    <button id="place-order-btn">
      Place Order ($17.02)
    </button>
  </div>
</body>
</html>