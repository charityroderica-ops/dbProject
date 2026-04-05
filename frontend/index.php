<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emblaze | Effortless confidence</title>
  <link rel="stylesheet" href="style.css" />
</head>

<div class="cart-overlay" id="cartOverlay"></div>

<div class="cart-drawer" id="cartDrawer">
  <div class="cart-drawer-header">
    <h3>Your Cart</h3>
    <button class="cart-close-btn" id="cartClose">×</button>
  </div>
 <a href="cart.html" class="login-icon" title="Cart">
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
    <line x1="3" y1="6" x2="21" y2="6"/>
    <path d="M16 10a4 4 0 0 1-8 0"/>
  </svg>
</a>
  <div class="cart-drawer-footer" id="cartFooter">
    <div class="cart-subtotal-row">
      <span>Subtotal</span>
      <span id="cartSubtotal">Rp0</span>
    </div>
    <button class="btn btn-primary" style="width:100%">Checkout</button>
  </div>
</div>

<body>
  <div class="bg-orb"></div>

  <header>
    <div class="container navbar">
      <div>
        <div class="brand-logo">Emblaze</div>
        <div class="brand-sub">Effortless Confidence</div>
      </div>

      <nav class="nav-links" id="mobileMenu">
        <a href="#home">Home</a>
        <a href="#collection">Collection</a>
        <a href="#about">About</a>
        <a href="#product">Product</a>
        <a href="#contact">Contact</a>
      </nav>

    <div style="display:flex; align-items:center; gap:12px;">
  <a href="#collection" class="btn btn-secondary desktop-only">Shop Now</a>
  <a href="cart.html" class="login-icon cart-icon-btn" id="cartToggle" title="Cart">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/>
      <line x1="3" y1="6" x2="21" y2="6"/>
      <path d="M16 10a4 4 0 01-8 0"/>
    </svg>
    <span class="cart-count hidden" id="cartCount">0</span>
  </a>
  <a href="login.php" class="login-icon" title="Login">
    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
      <circle cx="12" cy="8" r="4"/>
      <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
    </svg>
  </a>
  <button class="menu-toggle" id="menuToggle">☰</button>
</div>
    </div>
  </header>

  <main id="home">
    <section class="hero">
      <div class="container hero-grid">
        <div class="fade-up">
          <div class="eyebrow glass">New Season 2026</div>
          <h1>Soft silhouettes for a quietly bold presence.</h1>
          <p>
            Emblaze presents fashion apparel with a soft, refined, and modern feel. Clean designs, elegant color gradients, and premium details are crafted for those who want to appear simple yet still have character.
          </p>

          <div class="hero-actions">
            <a href="#collection" class="btn btn-primary">Featured Collection</a>
            <a href="#product" class="btn btn-secondary">Explore Collection</a>
          </div>

          <div class="hero-stats">
            <div class="stat-card glass">
              <h3>12K+</h3>
              <p>Community Loves</p>
            </div>
            <div class="stat-card glass">
              <h3>98%</h3>
              <p>Repeat Order</p>
            </div>
            <div class="stat-card glass">
              <h3>Soft</h3>
              <p>Premium Fabric</p>
            </div>
          </div>
        </div>

        <div class="hero-visual fade-up">
          <div class="visual-card small">
            <img src="https://plus.unsplash.com/premium_photo-1663013422122-0464b0924dc0?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1." alt="Editorial fashion 1" />
          </div>
          <div class="visual-card large">
            <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?q=80&w=735&auto=format&fit=crop&ixlib=rb-4.1." alt="Editorial fashion 2" />
          </div>
          <div class="signature-box glass">
            <div class="label">Signature Mood</div>
            <h3>Calm luxury, effortless confidence.</h3>
            <p>
              The combination of blush nude, champagne, dusty mauve, and ivory forms a visual identity that is soft, luxurious, and still feels modern.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container values-grid">
        <div class="value-card glass fade-up">
          <div class="value-icon"></div>
          <h3>Soft Premium Identity</h3>
          <p>
            A soft color palette with layers of warm hues creates an elegant, serene, and luxurious feel without coming across as stiff or cold.
          </p>
        </div>
        <div class="value-card glass fade-up">
          <div class="value-icon"></div>
          <h3>Minimal Yet Emotional</h3>
          <p>
            The layout is spacious and product-focused, featuring subtle typography and a visual rhythm that conveys a refined and modern feel.
          </p>
        </div>
        <div class="value-card glass fade-up">
          <div class="value-icon"></div>
          <h3>Built For Brand Trust</h3>
          <p>
          Each section is designed to guide visitors toward a perception of quality through featured collections, materials, testimonials, and subtle calls to action.</p>
        </div>
      </div>
    </section>

    <section id="collection">
      <div class="container">
        <div class="collection-head fade-up">
          <div>
            <div class="section-title-label">Featured Collect</div>
            <h2 class="section-title">Curated for elevated daily wear.</h2>
          </div>
        </div>

        <div class="product-grid" id="productGrid">
          <article class="product-card glass fade-up" data-category="women core">
            <div class="product-image">
              <img src="https://plus.unsplash.com/premium_photo-1675186049409-f9f8f60ebb5e?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1." alt="Maroon Satin Wrap Romper" />
            </div> 
            <div class="product-body">
              <div class="product-category">Women / Essentials</div>
              <div class="product-name">Maroon Satin Wrap Romper<div>
              <div class="product-price">Rp680.000</div>
              <button class="btn full-btn">Add to Wishlist</button>
            </div>
          </article>

          <article class="product-card glass fade-up" data-category="jewelry">
            <div class="product-image">
              <img src="https://images.unsplash.com/photo-1585960622850-ed33c41d6418?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1." alt="Aurelia Sun Medallion Set" />
            </div>
            <div class="product-body">
              <div class="product-category">Jewelry / Signature</div>
              <div class="product-name">Aurelia Sun Medallion Set</div>
              <div class="product-price">Rp450.000</div>
              <button class="btn full-btn">Add to Wishlist</button>
            </div>
          </article>

          <article class="product-card glass fade-up" data-category="limited">
            <div class="product-image">
              <img src="https://images.unsplash.com/photo-1646054224885-f978f5798312?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1." alt="High-waisted A-line Skirt" />
            </div>
            <div class="product-body">
              <div class="product-category">Skirt / Limited</div>
              <div class="product-name">High-waisted A-line Skirt</div>
              <div class="product-price">Rp659.000</div>
              <button class="btn full-btn">Add to Wishlist</button>
            </div>
          </article>

          <article class="product-card glass fade-up" data-category="Shoes">
            <div class="product-image">
              <img src="https://images.unsplash.com/photo-1610398752800-146f269dfcc8?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1." alt="Classic Heeled Ankle Boots" />
            </div>
            <div class="product-body">
              <div class="product-category">Boots / Core</div>
              <div class="product-name">Classic Heeled Ankle Boots</div>
              <div class="product-price">Rp745.000</div>
              <button class="btn full-btn">Add to Wishlist</button>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section>
      <div class="container story-grid">
        <div class="story-card fade-up">
          <div class="section-title-label">Brand Story</div>
          <h3>Emblaze is built for people who prefer presence over noise.</h3>
          <p>
            Emblaze is not just about selling clothes. The brand creates visual and emotional experiences through a calm style, comfortable materials, and details that feel mature. Each collection is designed to be relevant for everyday life as well as special moments without losing its elegant identity.
          </p>
          <div class="story-actions">
            <a href="#contact" class="btn btn-secondary">Discover Our Story</a>
            <a href="#product" class="btn btn-secondary">Product</a>
          </div>
        </div>

        <div class="testimonial-panel glass fade-up">
          <div class="section-title-label">Testimonials</div>
          <p class="quote">
            “It's rare to find a brand whose visuals are this soft yet still look luxurious. The colors, packaging, and website are very consistent.”
          </p>
          <div class="testimonial-author">Nadira A. • Loyal Customer</div>
          <div class="divider"></div>
          <p class="quote">
            “Feels premium without trying too hard. Clean, classy, and easy to style for everyday wear.”
          </p>
          <div class="testimonial-author">Raisa K. • Fashion Creator</div>
        </div>
      </div>
    </section>

    <section id="product">
      <div class="container">
        <div class="fade-up" style="margin-bottom: 24px;">
          <div class="section-title-label">Visual Direction</div>
          <h2 class="section-title">Collection of the Season</h2>
        </div>

        <div class="category-grid" id="productGrid">
  <a href="products.html?filter=women">
    <div class="category-card glass fade-up" data-category="women">
      <div class="category-image">
        <img src="https://plus.unsplash.com/premium_photo-1668485968642-30e3d15e9b9c?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1." alt="Women" />
      </div>
      <div class="category-name">Women</div>
    </div>
  </a>

  <a href="products.html?filter=men">
    <div class="category-card glass fade-up" data-category="men">
      <div class="category-image">
        <img src="https://images.unsplash.com/photo-1559582800-b7f6bf426431?q=80&w=699&auto=format&fit=crop&ixlib=rb-4.1." alt="Men" />
      </div>
      <div class="category-name">Men</div>
    </div>
  </a>

  <a href="products.html?filter=jewelry">
    <div class="category-card glass fade-up" data-category="accessories">
      <div class="category-image">
        <img src="https://images.unsplash.com/photo-1633934542430-0905ccb5f050?q=80&w=1025&auto=format&fit=crop&ixlib=rb-4.1." alt="Accessories" />
      </div>
      <div class="category-name">Accessories</div>
    </div>
  </a>

  <a href="products.html?filter=footwear">
    <div class="category-card glass fade-up" data-category="footwear">
      <div class="category-image">
        <img src="https://plus.unsplash.com/premium_photo-1664202526744-516d0dd22932?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1." alt="Footwear" />
      </div>
      <div class="category-name">Footwear</div>
    </div>
  </a>
</div>

    <section id="contact">
      <div class="container newsletter-card glass fade-up">
        <div class="newsletter-grid">
          <div>
            <div class="section-title-label">Stay Close</div>
            <h2 class="section-title">Join the Emblaze circle.</h2>
            <p>
              Sign up for early access to new collections, exclusive offers, and style notes curated just for you.
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">© 2026 Emblaze. Designed with soft minimal elegance.</div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
