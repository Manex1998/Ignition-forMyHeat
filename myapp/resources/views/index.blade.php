<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IgnitionOn by MyHeat</title>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Custom CSS -->
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      list-style: none;
      text-decoration: none;
    }

    /* Smooth scroll behavior */
    :root {
      scroll-behavior: smooth;
    }

    body {
      overflow-x: hidden;
    }

    header {
      background-color: #262630;
      padding-bottom: 80px;
      padding-top: 3rem;
    }

    .navbar {

      position: fixed;
      top: 0;
      width: 100% !important;
      gap: 45rem;
      background-color: #262630;
      z-index: 1000;
      
    }

    .navbar-collapse {

      flex-basis: 0;
      flex-grow: 0;
    }

   
    nav li a {
      color: white !important;
      font-size: 15px;
      font-weight: 600 !important;
      transition: transform 0.3s ease; /* Add scaling transition */
      position: relative;
    }

    nav li a:hover {
      transform: scale(1.1); /* Scale nav links on hover */
    }

    nav li a::before {

      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0px;
      height: 2px;
      border-radius: 10px;
      background-color: #fff;
      transition: width 0.3s ease;
    }

    nav li a:hover::before {
      width: 100%;
    }

    .logo {
      position: relative;
      margin: auto;
      margin-top: 20px;
      margin-bottom: 57px;
    }

    .logo h1 {
      color: #fff;
      font-weight: 600;
      font-size: 100px;
    }

    .highlight {
      color: #d54548;
    }

    small {
      position: absolute;
      color: #fff;
      font-size: clamp(26px, 2vw, 18px);
      top: 95px;
      left: 255px;
    }

    p {
      color: #fff;
    }

    .intro {
      font-size: 28px !important;
      font-family: 'Montserrat', sans-serif;
      font-weight: 200;
      margin-bottom: 0 !important;
    }

    .promo {
      font-size: 53px;
      line-height: 0.9em;
      font-family: 'Montserrat', sans-serif;
      font-weight: 300;
    }

    .hero-text {
      margin: auto;
    }

    .yellow-glow {
      color: #f0d30b;
      font-weight: 530;
      text-shadow: 0px -2px 17px rgba(240,211,11,0.77);
    }

    .btn:active {
      transform: scale(0.97);
    }

    .btn-gold {
      background: #f0d30b;
      color: #262630;
      box-shadow: 0px 4px 27px -10px rgba(158,138,9,0.87);
      transform-origin: center; /* Center scaling */
      margin: 5px; /* Prevent overlap */
    }

    .btn-red {
      background: #d54548;
      color: #262630;
      box-shadow: 0px 4px 27px -6px rgba(78,19,20,0.87);
      transform-origin: center;
      margin: 5px;
    }

    .btn-red-order {
      background: #d54548;
      color: #262630;
      /*padding: 0.3rem 3.5rem;*/
      box-shadow: 0px 4px 27px -6px rgba(78,19,20,0.87);
      transform-origin: center;
      margin: 5px;
    }

    .btn-outline {
      background: transparent;
      color: #fff;
      border: 2px solid #fff !important;
      box-shadow: 0 0 10px #262630;
      transform-origin: center;
      margin: 5px;
    }

    .btn-charcoal {
      background: #262630;
      color: #fff;
      border: 2px solid #262630 !important;
      box-shadow: 0px 4px 27px -6px rgba(38,38,48,0.87);
      transform-origin: center;
      margin: 5px;
    }

    .btn {
      display: inline-block;
      border-radius: 30px;
      font-weight: 800;
      font-size: 1.5rem;
      width: 10rem;
      padding: 0.1rem 0.3rem
      border: none;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none !important;
      text-align: center;
    }

    .btn:hover {
      transform: scale(1.1); /* Scale buttons on hover */
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3); /* Subtle shadow on hover */
    }

    .hero-cta {
      margin-top: 75px !important;
      margin-bottom: 20px !important;
      margin: auto;
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
    }

    /*=============PRODUCTS==================*/

    .products-head-text {
      position: relative;
      margin: auto;
      margin-bottom: 65px;
    }

    .products-head-text h1 {
      color: #d54548;
      font-weight: 600;
      font-size: 100px;
    }

    .products-head-text .products-text {
      color: #262630;
      position: absolute;
      font-size: 26px;
      font-weight: 600;
      top: 95px;
      left: 2.5px;
    }

    .products-mid-content {
      position: relative;
    }

    .product-box {
      border-radius: 20px;
      overflow: hidden;
      max-width: 100%;
      margin: 10px 0; /* Add margin to prevent overlap */
    }

    .tabs {
      display: flex;
      background: #262630;
    }

    .tabs .tab {
      flex: 1;
      padding: 12px 20px;
      text-align: center;
      cursor: pointer;
      font-weight: 600;
      font-size: 18px;
      color: #fff;
      background: #262630;
      transition: transform 0.3s ease, background 0.3s, color 0.3s;
      transform-origin: center;
      white-space: nowrap;
    }

    .tabs .tab:hover {
      transform: scale(1.05); /* Scale tabs on hover */
    }

    .tabs .tab.active {
      background: #fff;
      color: #262630;
    }

    .product-card {
      background: #262630;
      color: #fff;
      padding: 25px 20px;
      font-family: 'Montserrat', sans-serif;
      font-weight: 300;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      transform-origin: center;
      margin: 10px; /* Add margin to prevent overlap */
    }

    .product-card.active {
      display: block;
      transform: scale(1.05); /* Slightly scale active card for emphasis */
      box-shadow: 0 0 20px rgba(213, 69, 72, 0.4); /* Match shadow from previous page */
    }

    .product-card .highlight {
      color: #e63946;
      font-weight: bold;
    }

    .product-card {
      display: none;
    }

    .product-image {
      display: none;
      width: 450px;
      height: auto;
      transition: transform 0.3s ease;
      transform-origin: center;
      margin: 10px 0;
    }

    .product-image.active {
      display: block;
    }
    .product-image:hover {
      transform: scale(1.05); /* Scale image on hover */
    }


      .product-social-links {
       
      display: flex;
      flex-direction: column;
      width:fit-content;
      padding: 0 !important;

    }

    .product-social-icon {
      transition: transform 0.3s ease; /* Update to use transform instead of img */
      transform-origin: center;
    }

    .product-social-icon:hover {
      transform: scale(1.2); /* Match scaling from previous page */
    }


    .products-cta {
      margin: auto;
      display: flex;
      gap: 1.5rem;
      flex-wrap: wrap;
      justify-content: start;
    }

    .products-box {
      padding-bottom: 180px;
      padding-top: 70px;
    }

    /*============PRICING============*/

    #pricing-section {
      background-color: #262630;
      padding: 40px 0;
    }

    .container-pricing {
      width: 90%;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .pricing-box {
      padding-top: 10px;
      margin: 10px 0; /* Prevent overlap */
    }

    .pricing-box h1 {
      color: #fff;
      font-weight: 600;
      font-size: 100px;
    }

    .pricing-box .price {
      font-weight: 5s00;
      line-height: 1em;
    }

    .pricing-box-gold {
      color: #fff;
      padding-top: 30px;
      padding-bottom: 10px;
      margin: 10px 0; /* Prevent overlap */
    }

    .pricing-box-gold .price {
      font-size: 100px;
      font-weight: 500;
      color: #f0d30b;
      padding: 0;
      margin: 0;
      line-height: 1em;
    }

    .p-bigger {
      font-size: 60px;
      font-weight: 300;
      padding: 0;
      margin: 0;
      line-height: 0.8em;
    }

    .p-smaller {
      font-weight: 100;
      padding: 0;
      margin: 0;
    }

    p {
      font-size: 30px;
    }

    .order-now {
      color: #fff;
    }

    .order-cta {
      display: flex;
      align-items: center;
      justify-content: end;
      padding-bottom: 100px;
    }


    /* OUR CLIENTS */
#clients-section h1 {
  font-size: 40px;
  color: #262630;
}

.logo-scroll {
  overflow: hidden;
  position: relative;
  width: 100%;
  height: 100px;
  margin: 30px 0;
}

.logo-track {
  display: flex;
  width: calc(200%); /* enough to loop */
  animation: scroll 40s linear infinite;
  gap: 60px;
}

.client-logo {
  height: 100px;
  object-fit: contain;
  flex-shrink: 0;
  filter: grayscale(100%);
  transition: filter 0.3s ease;
}

.client-logo:hover {
  filter: grayscale(0%);
}

@keyframes scroll {
  from { transform: translateX(0); }
  to { transform: translateX(-50%); }
}

/* Testimonials */
#testimonialCarousel {
  max-width: 800px;
  margin: auto;
}

#testimonialCarousel .blockquote p {
  font-size: 1.3rem;
  font-style: italic;
  color: #262630 !important;
}

#testimonialCarousel footer {
  font-size: 1rem;
  color: #555;
}



    /*==============FOOTER================*/

    .footer-logo {
      width: 100%;
      margin: 20px 0 40px;
      position: relative;
    }

    .footer-logo h1 {
      color: #fff;
      font-weight: 600;
      font-size: clamp(100px, 8vw, 80px);
    }

    .footer-logo small {
      position: absolute;
      color: #fff;
      font-size: clamp(26px, 2vw, 18px);
      top: 85px;
      left: 250px;
      display: block;
      margin-top: 10px;
    }

    .footer-content {
      display: flex;
      flex-direction: row;
      gap: 40px;
      justify-content: space-between;
      align-items: flex-start;
    }

    .form-column,
    .image-social-column {
      flex: 1;
      opacity: 0;
      animation: fadeIn 1s ease-in forwards;
    }

    .form-column {
      max-width: 680px;
    }

      /* Target only placeholders inside this form */
  .footer-form ::placeholder {
    color: white;
    opacity: 1; /* ensures it’s fully visible */
  }

   .input-with-button {
    position: relative;
  }

  .input-with-button input {
    padding-right: 100px; /* make space for button */
  }

 .send-btn {
    position: absolute;
    right: 10px; /* little spacing from edge */
    top: 50%;
    transform: translateY(-50%); /* centers vertically */
    background: #d54548;
    border: none;
    padding: 2px 20px;
    font-weight: 800;
    font-size: 25px;
    color: #262630;
    border-radius: 50px; /* pill shape */
    cursor: pointer;
  }

  .send-btn:hover {
    opacity: 0.9;
  }

    

    .vector-image {
      max-width: 100%;
      height: auto;
      max-height: 300px;
      transition: transform 0.3s ease; /* Add scaling for vector image */
      transform-origin: center;
      margin: 10px 0; /* Prevent overlap */
    }

    .vector-image:hover {
      transform: scale(1.05); /* Scale image on hover */
    }

    .social-links {
      width: 60%;
      display: flex;
      gap: 20px;
    }

    .social-icon {
      transition: transform 0.3s ease; /* Update to use transform instead of img */
      transform-origin: center;
      color: #262630;
      font-size: 1.2rem;
    }

    .social-icon:hover {
      transform: scale(1.2); /* Match scaling from previous page */
    }

    .footer-social {

      color: antiquewhite;
      font-size: 1.2rem;
    }

    .email,
    .message {
      padding: 0.9rem 1.3rem;
      border-radius: 40px;
      border: none;
      background: #313131;
      color: #fff;
      font-size: 2rem;
      width: 100%;
      box-sizing: border-box;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      transform-origin: center;
      margin: 5px 0; /* Prevent overlap */
    }

    .email:hover,
    .message:hover,
    .email:focus,
    .message:focus {
      transform: scale(1.02); /* Match form input scaling from previous page */
      box-shadow: 0 0 0 0.25rem rgba(213, 69, 72, 0.4); /* Match shadow */
    }

    .email {
      height: 60px;
      margin-bottom: 15px;
    }

    .message {
      resize: vertical;
    }

    .contact-info {
      color: #fff;
      font-size: clamp(18px, 2.5vw, 22px);
      padding-bottom: 20px;
      margin-bottom: 20px;
    }

    /* Fade-in Animation */
    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      body {
        overflow-x: hidden !important;
      }
      
      .btn {

        font-weight: 700;
        font-size: 1rem;

      }

      .fa-2x {
        font-size: 1rem;
      }

      .hero-cta {

      gap: 0.7rem !important;
      flex-wrap: nowrap !important;
    }

    .gap-5 {

      gap: 0 !important;
    }

    .product-card p {

      font-size: 20px;
    }

    .products-cta {
      justify-content: center;
    }


      header {
        width: 100%;
      }

       .navbar {

        gap: 7rem;
       
      }

      .navbar-collapse {

      flex-basis: 100%;
      flex-grow: 1;
    }

    .products-head-text h1 {

      font-size: 80px;

    }

    .products-head-text .products-text {
       
        font-size: 20px;
        top: 80px;
        left: 2.5px;
    }

    .product-image {

          width: 300px;
          height: auto;
      
      }

     .product-social-links {
       
      margin: auto;

    }

    .pricing-box-gold .price, .pricing-box .price {

      font-size: 60px;
    }

    .pricing-text .p-bigger {

      font-size: 40px;

    }

    .p-smaller {

      font-size: 20px;

    }

    .pricing-box h1 {

      font-size: 80px;

    }

      .footer-content {
        flex-direction: column;
        align-items: center;
      }

      .form-column,
      .image-social-column {
        width: 100%;
        max-width: 100%;
      }

      .footer-logo h1 {
        font-size: clamp(80px, 6vw, 50px);
      }

      .footer-logo small {
        font-size: clamp(14px, 1.8vw, 16px);
        top: 65px;
        left: 230px;
      }

      .email,
      .message {
        width: 85%;
      }

      .send-btn {

        right: 70px;

      }

      .vector-image {
        max-height: 200px;
      }
    }

    @media (max-width: 576px) {
      .tabs .tab {
        font-size: 14px;
        padding: 10px;
      }
      .product-card {
        font-size: 0.9rem;
        padding: 20px 15px;
      }
    }

    @media (max-width: 480px) {
      .contact-info {
        font-size: clamp(16px, 2vw, 18px);
      }

      .social-icon {
        font-size: 1.5rem; /* Adjust icon size for smaller screens */
      }
    }
  </style>
</head>

<body>
  <!-- ================= HEADER ================= -->
  <header class="text-white">
    <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center">
      
        <a class="navbar-brand fw-bold" href="#">Igniti<span class="highlight">on.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="mainNav">
          <ul class="navbar-nav gap-4">
            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="index.html#products-section">Package</a></li>
            <li class="nav-item"><a class="nav-link" href="index.html#pricing-section">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="index.html#contact">Contact</a></li>
          </ul>
        </div>
      
    </nav>

    <div class="container mt-5">
      <div class="logo">
        <h1 class="display-1 fw-bold">Igniti<span class="highlight">on.</span></h1>
        <small class="fs-4">by MyHeat</small>
      </div>

      <div class="hero-text">
        <p class="intro fs-3">Turn <span class="highlight">on</span> your online presence today, it's not 2003 anymore…</p>
        <p class="promo">Get a professional <span class="highlight">website & email</span> for your business at
          <span class="yellow-glow">R119pm.</span>
        </p>
      </div>

      <div class="hero-cta d-flex gap-3 flex-wrap mt-4">
        <a href="#products-section" class="btn btn-outline">Learn More</a>
        <a href="#pricing-section" class="btn btn-gold">Pricing</a>
        <a href="/ordering" class="btn btn-red">Start</a>
      </div>
    </div>
  </header>

  <!-- ================= PRODUCTS ================= -->
  <section id="products-section" class="py-5">
    <div class="container">
      <div class="products-head-text mb-5">
        <h1 class="fw-bold">Products</h1>
        <p class="products-text">Everything included in the <span class="highlight">Ignition.</span> package</p>
      </div>

      <div class="row products-mid-content align-items-center gap-5">
        <!-- Left -->
        <div class="col-lg-6">
          <div class="product-box">
            <div class="tabs">
              <div class="tab active" data-tab="domain">Domain</div>
              <div class="tab" data-tab="web">Web design</div>
              <div class="tab" data-tab="hosting">Hosting</div>
              <div class="tab" data-tab="email">Email</div>
            </div>

            <!-- Cards -->
            <div class="product-card active" data-content="domain">
              <p>
                Look, you need <span class="highlight">a slice</span> of the internet pie!
                We help you lock down that one-of-a-kind
                <span class="highlight">domain name</span> that says,
                “Yep, this is my corner of the web.” Make it <span class="highlight">unforgettable</span>, make it yours.
              </p>
            </div>

            <div class="product-card" data-content="web">
              <p>
                Your website is your <span class="highlight">digital shopfront</span>.
                We craft modern, mobile-friendly, and fast web designs that make your
                business stand out online.
              </p>
            </div>

            <div class="product-card" data-content="hosting">
              <p>
                Reliable <span class="highlight">hosting</span> means your site is always
                online. We keep the lights on so you don’t have to worry.
              </p>
            </div>

            <div class="product-card" data-content="email">
              <p>
                Look professional with a <span class="highlight">custom email address</span>.
                Forget @gmail, step up with <span class="highlight">you@yourbusiness.co.za</span>.
              </p>
            </div>
          </div>
        </div>

        <!-- Right -->
        <div class="product-image active col-lg-6 text-center" data-content="domain">
          <img src="images/Domain.png" alt="www graphic" class="img-fluid rounded">
        </div>

        <div class="product-image col-lg-6 text-center" data-content="web">
          <img src="images/Web Dev.png" alt="www graphic" class="img-fluid rounded">
        </div>

        <div class="product-image col-lg-6 text-center" data-content="hosting">
          <img src="images/Hosting.png" alt="www graphic" class="img-fluid rounded">
        </div>

        <div class="product-image col-lg-6 text-center" data-content="email">
          <img src="images/Email.png" alt="www graphic" class="img-fluid rounded">
        </div>

       <!-- box itself -->
            <div class="product-social-links d-flex justify-content-center gap-3">
              <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
      </div>

      <div class="products-cta d-flex gap-3 mt-4">
        <a href="ordering.html" class="btn btn-charcoal">Start Now!</a>
        <a href="#pricing-section" class="btn btn-red">Pricing</a>
      </div>
    </div>
  </section>

  <!-- ================= PRICING ================= -->
  <section id="pricing-section" class="text-white py-5">
    <div class="container">
      <div class="pricing-box mb-4">
        <h1 class="fw-bold">Pric<span class="highlight">ing.</span></h1>
        <div class="pricing-text">
          <p class="p-bigger">Once-off setup service fee</p>
          <p class="p-smaller">*This includes domain registration or transfer.</p>
        </div>
        <h1 class="price">R199</h1>
      </div>

      <div class="pricing-box-gold mb-4">
        <div class="pricing-text">
          <p class="p-bigger">Monthly service subscription</p>
          <p class="p-smaller">*Charged starting from the second month, not at setup.</p>
        </div>
        <h1 class="price yellow-glow">R119pm</h1>
      </div>

      <div class="order-cta">
        <a href="/ordering" class="btn btn-red-order order-now">Order Now!</a>
      </div>
    </div>
  </section>


  <!-- ================= OUR CLIENTS ================= -->
<section id="clients-section" class="py-5 bg-light">
  <div class="container">
    <h1 class="fw-bold mb-4">Our <span class="highlight">Clients</span></h1>

    <!-- Logo Scroll -->
    <div class="logo-scroll">
      <div class="logo-track">
        <img src="images/1 (2).jpeg" alt="Client 1" class="client-logo">
        <img src="images/2.jpeg" alt="Client 2" class="client-logo">
        <img src="images/1 (4).jpeg" alt="Client 3" class="client-logo">
        <img src="images/1.jpeg" alt="Client 4" class="client-logo">
        <img src="images/1 (5).jpeg" alt="Client 5" class="client-logo">
        <!-- Duplicate for seamless loop -->
         <img src="images/1 (2).jpeg" alt="Client 1" class="client-logo">
        <img src="images/2.jpeg" alt="Client 2" class="client-logo">
        <img src="images/1 (4).jpeg" alt="Client 3" class="client-logo">
        <img src="images/1.jpeg" alt="Client 4" class="client-logo">
        <img src="images/1 (5).jpeg" alt="Client 5" class="client-logo">
      </div>
    </div>

    <!-- Testimonials -->
    <div id="testimonialCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <blockquote class="blockquote">
            <p class="mb-4 quote">“Ignition helped us launch our website quickly and professionally. The service is top-notch!”</p>
            <footer class="blockquote-footer">Mishka D, <cite title="Company">Founder, NoorSA</cite></footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <p class="mb-4 quote">“The hosting is reliable and the email setup gave our business instant credibility.”</p>
            <footer class="blockquote-footer">Rodney M, <cite title="Company">CEO Gold Standard Media</cite></footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <p class="mb-4 quote" >“Affordable, smooth, and fast. Ignition is a must-have for small businesses.”</p>
            <footer class="blockquote-footer">Amanda R, <cite title="Company">Shop Manager</cite></footer>
          </blockquote>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>


  <!-- ================= FOOTER ================= -->
  <footer id="contact" class="bg-dark text-white py-5">
    <div class="container">
      <div class="footer-logo mb-4">
        <h1>Igniti<span class="highlight">on.</span></h1>
        <small>by MyHeat</small>
      </div>

      <div class="row g-4">
        <!-- Form -->
        <div class="col-lg-6">
          <form class="footer-form mx-auto" method="POST" action="">
            <div class="mb-3">
              <textarea class="form-control message" rows="5" name="message"
                placeholder="How can we help you?"></textarea>
            </div>
            <div class="mb-3 input-with-button">
              <input type="email" class="form-control email" name="email" placeholder="Your email" required>
              <button type="submit" class="send-btn">Send</button>
            </div>
          </form>

          <div class="contact-info mt-3">
            hello@ignition.myheat.co.za<br>+27 67 193 8677
          </div>
        </div>


        <!-- Image & Social -->
       <div class="col-lg-6 ms-auto me-0 text-end">
          <img src="images/Computer.png" alt="Vector Image" class="vector-image img-fluid mb-3 mr-4">

          <!-- wrapper that pushes box right -->
          <div class="d-flex justify-content-end">
            <!-- box itself -->
            <div class="social-links d-flex justify-content-center gap-5">
              <a href="#" class="social-icon footer-social"><i class="fab fa-facebook"></i></a>
              <a href="#" class="social-icon footer-social"><i class="fab fa-twitter"></i></a>
              <a href="#" class="social-icon footer-social"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <script>
  const tabs = document.querySelectorAll(".tab");
  const cards = document.querySelectorAll(".product-card");
  const images = document.querySelectorAll(".product-image");

  tabs.forEach(tab => {
    tab.addEventListener("click", () => {
      // remove active from all
      tabs.forEach(t => t.classList.remove("active"));
      cards.forEach(c => c.classList.remove("active"));
      images.forEach(i => i.classList.remove("active"));

      // add active to clicked tab
      tab.classList.add("active");

      // show corresponding card + image
      const target = tab.getAttribute("data-tab");
      document.querySelector(`.product-card[data-content="${target}"]`)
              .classList.add("active");
      document.querySelector(`.product-image[data-content="${target}"]`)
              .classList.add("active");
    });
  });
</script>
</body>
</html>