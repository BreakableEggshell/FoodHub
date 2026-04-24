<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="delivery_status_style.css">
  <title>Delivery Status</title>
</head>
<body>
  <div class="container">

  <!----------------- Header ----------------->

    <div class="header-container">
      <img src="img/other_icons/arrow_back_icon.svg"
            style="width: 1.5rem; height: 1.5rem; margin-right: .5em;">
      <p>Delivery Status - </p>
      <p id="order-id">Order ID: ORD17769528637</p>
    </div>

    <!----------------- Delivery Map ----------------->

    <div class="section gps-map-display">
      <img src="img/other_icons/map_gps_image.png">
    </div>

    <!----------------- Order Status ----------------->

    <div class="section order-status-cont">
      <p>Order Status</p>
      
      <div class="order-status-item order-confirm">
        <img src="img/other_icons/check_circle_icon.svg">
        <div>
          <p>Order Confirmed</p>
          <p>Your order has been confirmed</p>
        </div>
      </div>

      <div class="order-status-item order-prepare">
        <img src="img/other_icons/package_icon.svg">
        <div>
          <p>Preparing</p>
          <p>Your order is being prepared</p>
        </div>
      </div>

      <div class="order-status-item out-for-delivery">
        <img src="img/other_icons/motor_package_icon.svg">
        <div>
          <p>Out for Delivery</p>
          <p>Your order is now being brought to you</p>
        </div>
      </div>

      <div class="order-status-item order-delivered">
        <img src="img/other_icons/check_circle_icon.svg">
        <div>
          <p>Delivered</p>
          <p>Order delivered successfully</p>
        </div>
      </div>
    </div>

    <!----------------- Delivery Driver Information ----------------->

    <div class="section delivery-partner-cont">
      <p>Delivery Partner</p>

      <div class="driver-info-row">
        <img src="img/other_icons/motor_package_icon.svg">
        <div class="driver-info">
          <p class="driver-name">Michael Smith</p>
          <p>Delivery Partner</p>
          <p class="driver-vehicle">Vehicle Bike ● DL-05-AB-1234</p>
        </div>
        <img src="img/other_icons/call_icon.svg">
      </div>
    </div>

    <!----------------- Delivery Address ----------------->

    <div class="section delivery-address-cont">
      <p>Delivery Address</p>

      <div class="address-option">
        <img src="img/unselected_icons/home_icon.svg">
        <p>Home</p>
      </div>

      <div class="client-info">
        <p id="client-name">John Doe</p>
        <p id="client-number">+1234567890</p>
        <p id="client-address">123 Main Street, Appartment 48</p>
        <p id="client-city">New York, NY 10001</p>
      </div>
    </div>

    <form action="payment.php">
      <button class="section order-again-btn">
        Order Again
      </button>
    </form>

  </div>
</body>
</html>