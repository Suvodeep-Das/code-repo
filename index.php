<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DrinkIT</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <section id="home">
        <h1 class="h-primary">Welcome to DrinkIT</h1>
        <h2 class="h-secondary">Have you ever been in dire need of water or drinkables on a sunny afternoon and no nearby shops?</h2>
        <p>Now you can order a bottle of water or beverage from your location and recieve your order in a matter of minutes. Our nearest retail centre has got you covered.</p>
        <a href="order.php" target="_parent"><button class="btn-home">Shop now!</button></a>
        <a href="contact.php" target="_parent"><button class="btn-home">Contact Us</button></a>
    </section>

    <section class="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="images/delivery.jpg" alt="">
                <h2 class="h-secondary center">Good Quality Delivery</h2>
                <p class="center-text">We thrive to make sure that we live upto the standards of quality expected by our customers. We take each and every measure to ensure that our customers have a great time using our services. We give instant delivery on water and beverages to ensure that no person faces the adverse effects of dehydration</p>
            </div>
            <div class="box">
                <img src="images/money.jpg" alt="">
                <h2 class="h-secondary center">Spend Less, Gain More</h2>
                <p class="center-text">We provide excellent quality but at a very affordable price. We take our work as a responsiblity towards the society and an integral part of that is to ensure that our prices are affordable by a mass of people</p>
            </div>
            <div class="box">
                <img src="images/tea-coffee.webp" alt="">
                <h2 class="h-secondary center">Quality Tea and Coffee</h2>
                <p class="center-text">We provide well known tea and coffee brands at a discounted rate. You can order these brands from your home and expect delivery within a few days</p>
            </div>
    </section>
    <section id="client-section"></section>
        <h1 id="h-primary center">Featured Brands</h1>
            <div id="clients">
                <div class="client-item">
                    <img src="images/aquafina.png" alt="">
                </div>
                <div class="client-item">
                    <img src="images/bisleri.png" alt="">
                </div>
                <div class="client-item">
                    <img src="images/earl grey.avif" alt="">
                </div>
                <div class="client-item">
                    <img src="images/twinings.jpeg" alt="">
                </div>
                <div class="client-item">
                    <img src="images/nescafe.png" alt="">
                </div>
                <div class="client-item">
                    <img src="images/bru.webp" alt="">
                </div>
                
            </div>
</body>
</html>