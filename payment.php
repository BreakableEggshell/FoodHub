<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Payment</title>
</head>
<body>
  <div class="container">

    <div class="header-container">
      <img src="img/other_icons/arrow_back_icon.svg"
            style="width: 1.5rem; height: 1.5rem; margin-right: .5em;">
      <p>Payment</p>
    </div>

    <!----------------- Delivery Address ----------------->
    <div class="section delivery-add-container">
      <div class="body-section"><p>Delivery Address</p></div>

      <div class="body-section">

        <label class="delivery-add-selected">
          <input type="radio" name="delivery" value="home" checked hidden>
          <img src="img/unselected_icons/home_icon.svg">
          Home
        </label>

        <label class="delivery-add">
          <input type="radio" name="delivery" value="work" hidden>
          <img src="img/unselected_icons/work_icon.svg">
          Work
        </label>

        <label class="delivery-add">
          <input type="radio" name="delivery" value="other" hidden>
          <img src="img/unselected_icons/location_icon.svg">
          Other
        </label>

      </div>

      <div class="body-section">
        <input type="text" class="delivery-add-text">
      </div>

    </div>

    <!----------------- Payment Method ----------------->

    <div class="section payment-method-cont">
      <div class="body-section"><p>Payment Method</p></div>

      <label class="payment-option-selected">
        <input type="radio" name="payment" value="card" checked>
        <img src="img/unselected_icons/credit_card_icon.svg">
        <div class="payment-option-item">
          <div>Credit/Debit Card</div>
          <div class="description-payment">Pay securely with your card</div>
        </div>
      </label>

      <label class="payment-option">
        <input type="radio" name="payment" value="wallet">
          <img src="img/unselected_icons/wallet_icon.svg">
          <div class="payment-option-item">
            <div>Digital Wallet</div>
            <div class="description-payment">Apple Pay, Google Pay, Paypal</div>
          </div>
        </input>
      </label>

      <label class="payment-option">
        <input type="radio" name="payment" value="cod">
          <img src="img/unselected_icons/cod_icon.svg">
          <div class="payment-option-item">
            <div>Cash on Delivery</div>
            <div class="description-payment">Pay when you receive</div>
          </div>
        </input>
      </label>
    </div>
    
    <!----------------- Order Summary ----------------->

    <div class="section order-summary-cont">
      <div class="body-section"><p>Order Summary</p></div>
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

    <button class="section" id="place-order-btn">
      Place Order ($17.02)
    </button>
  </div>

  <script src="payment_script.js"></script>
</body>
</html>