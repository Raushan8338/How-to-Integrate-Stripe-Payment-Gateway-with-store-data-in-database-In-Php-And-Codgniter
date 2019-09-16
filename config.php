<?php 
// Product Details 
// Minimum amount is $0.50 US 
$itemName = "Demo Product"; 
$itemNumber = "PN12345"; 
$itemPrice = 25; 
$currency = "USD"; 
 
// Stripe API configuration  
define('STRIPE_API_KEY', 'sk_test_5V2pPnkzslUYydbYVMmw6G1y00lau4eoXT'); 
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_lssROXvCMLpxRfBh6k4xgiLr00jHrnnDUH'); 
  
// Database configuration  
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 
define('DB_NAME', 'stripe');