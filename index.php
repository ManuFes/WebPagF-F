<?php
session_start();
$loginMessage = isset($_SESSION['login_success']) ? $_SESSION['login_success'] : '';
unset($_SESSION['login_success']); // Limpiar la sesión después de usar el mensaje
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>F&F Clothing Interface</title>
    <link rel="icon" href="./img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./carrossel/carrossel.css" />
    <link rel="stylesheet" href="./sidenavbar/navbar.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>

    <!-- Header -->
    <header class="header">
      <span class="menu-icon" id="menu-icon">&#9776;</span>
      <div class="logo">F&F</div>
    </header>
    <!-- Sidebar Navigation -->
    <div class="sidebar" id="sidebar">
      <div class="sidebar-logo-content">
          <span class="close-icon" id="close-icon">&#10005;</span>
      </div>
      <div class="sidebar-icons">
          <span class="icon">&#128269;</span> <!-- Icono de lupa -->
          <a href="./carrito/index.html" class="icon">&#128722;</a> <!-- Icono de perfil de usuario -->
          <a href="./login/index.php" class="icon">&#128100;</a> <!-- Icono de perfil de usuario -->
      </div>
  </div>

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="hero-content">
        <h1 class="hero-title">Timeless Elegance</h1>
        <p class="hero-subtitle">Discover our refined collection</p>
        <button class="btn-primary">Explore Now</button>
      </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-section">
      <h2 class="section-title">Featured Collection</h2>
      <!-- First Row of Products -->
      <div class="product-grid">
        <div class="product-card">
          <img src="img/Elegant Summer Dress.png" alt="Elegant Summer Dress" />
          <h3>Elegant Summer Dress</h3>
          <br />
          <p class="price">€ 49.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
        <div class="product-card">
          <img src="img/Stylish Winter Coat.png" alt="Stylish Winter Coat" />
          <h3>Stylish Winter Coat</h3>
          <br />
          <p class="price">€ 89.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
        <div class="product-card">
          <img src="img/Casual T-Shirt.png" alt="Casual T-Shirt" />
          <h3>Casual T-Shirt</h3>
          <br />
          <p class="price">€ 19.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
        <div class="product-card">
          <img src="img/Classic Jeans.png" alt="Classic Jeans" />
          <h3>Classic Jeans</h3>
          <br />
          <p class="price">€ 39.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
      </div>
      <br />
      <!-- Second Row of Products -->
      <div class="product-grid">
        <div class="product-card">
          <img src="img/Formal Shirt.png" alt="Formal Shirt" />
          <h3>Formal Shirt</h3>
          <br />
          <p class="price">€ 29.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
        <div class="product-card">
          <img src="img/Kids Hoodie.png" alt="Kids Hoodie" />
          <h3>Kids Hoodie</h3>
          <br />
          <p class="price">€ 25.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
        <div class="product-card">
          <img src="img/Sport Shorts.png" alt="Sport Shorts" />
          <h3>Sport Shorts</h3>
          <br />
          <p class="price">€ 14.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
        <div class="product-card">
          <img src="img/Women's Blazer.png" alt="Women's Blazer" />
          <h3>Women's Blazer</h3>
          <br />
          <p class="price">€ 55.99</p>
          <br />
          <button class="btn-secondary">Add to Cart</button>
          <button class="btn-secondary">View Details</button>
        </div>
      </div>
    </section>

    <!-- Carrusel en la sección "Summer Essentials" -->
    <section class="promotions-section">
      <h2 class="section-title">Summer Essentials</h2>

      <br /><br /><br /><br /><br /><br />
      <!-- Carrusel -->
      <div class="conteudo__geral">
        <div class="container">
          <div class="container-carrossel">
            <div class="carrossel">
              <div class="carrossel-item">
                <img src="img/tshirt1.png" alt="Camiseta Básica" />
              </div>
              <div class="carrossel-item">
                <img src="img/tshirt2.png" alt="Camiseta Estampada" />
              </div>
              <div class="carrossel-item">
                <img src="img/hoodie2.png" alt="Sudadera" />
              </div>
              <div class="carrossel-item">
                <img src="img/tshirt3.png" alt="Camiseta Verano" />
              </div>
              <div class="carrossel-item">
                <img src="img/hoodie1.png" alt="Sudadera Deportiva" />
              </div>
              <div class="carrossel-item">
                <img src="img/hoodie3.png" alt="Sudadera Deportiva" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Customer Reviews -->
    <section class="reviews-section">
      <h2 class="section-title">Customer Testimonials</h2>
      <div class="review-grid">
        <div class="review-card">
          <img src="./img/fondo.png" alt="Customer 1" class="customer-photo" />
          <h3>GigaChad</h3>
          <br />
          <p>
            <br />
            "F&F's attention to quality and style is unmatched. Their summer
            collection is both elegant and comfortable."
          </p>
        </div>
        <div class="review-card">
          <img
            src="./img/customer2.png"
            alt="Customer 2"
            class="customer-photo"
          />
          <h3>Noelia GG</h3>
          <br />
          <p>
            <br />
            "I love how versatile their pieces are! I can easily transition from
            day to night with F&F's stylish selections."
          </p>
        </div>
        <div class="review-card">
          <img
            src="./img/customer3.png"
            alt="Customer 3"
            class="customer-photo"
          />
          <h3>Zarco</h3>
          <br />
          <p>
            <br />
            "The quality of F&F clothing is outstanding. Definitely worth every
            penny!"
          </p>
        </div>
      </div>
    </section>

    <!-- Store Locator -->
    <section class="locator-section">
      <h2 class="section-title">Find a Store</h2>
      <div class="locator-input">
        <input type="text" placeholder="Enter your postcode" />
        <button class="btn-secondary">&#x1F4CD;</button>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <p>&copy; 2024 F&F Clothing. All rights reserved.</p>
      </div>
    </footer>
    <script src="./carrossel/carrossel.js"></script>
    <script src="./sidenavbar/navbar.js"></script>
    <script src="./js/script.js"></script>
    <script>
    const loginMessage = <?php echo json_encode($loginMessage); ?>;
    </script>
    <script src="./js/notification.js"></script>
  </body>
</html>
