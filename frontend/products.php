<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products | Emblaze</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="products.css"
</head>
<body>
  <div class="bg-orb"></div>

  <header>
    <div class="container navbar">
      <div>
        <div class="brand-logo">Emblaze</div>
        <div class="brand-sub">Effortless Confidence</div>
      </div>

      <nav class="nav-links" id="mobileMenu">
        <a href="index.html">Home</a>
        <a href="index.html#collection">Collection</a>
        <a href="index.html#about">About</a>
        <a href="products.html" class="active">Products</a>
        <a href="index.html#contact">Contact</a>
      </nav>

      <div style="display:flex; align-items:center; gap:12px;">
        <a href="index.html#collection" class="btn btn-secondary desktop-only">Shop Now</a>
        <a href="cart.html" class="login-icon" title="Cart">
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/>
    <line x1="3" y1="6" x2="21" y2="6"/>
    <path d="M16 10a4 4 0 0 1-8 0"/>
  </svg>
</a>

        <a href="#login" class="login-icon" title="Login">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
          </svg>
        </a>
        <button class="menu-toggle" id="menuToggle">☰</button>
      </div>
    </div>
  </header>

  <main>
    <section class="page-hero">
      <div class="container">
        <div class="page-hero-inner">
          <div>
            <div class="breadcrumb">Home &rsaquo; <span>Products</span></div>
            <h1>The Full <em>Collection</em></h1>
          </div>
          <div class="product-count" id="productCount">Showing 12 products</div>
        </div>
      </div>
    </section>

    <div class="container">
      <div class="toolbar">
        <div class="chip-list" id="filterChips">
          <button class="chip active" data-filter="all">All</button>
          <button class="chip" data-filter="women">Women</button>
          <button class="chip" data-filter="men">Men</button>
          <button class="chip" data-filter="jewelry">Jewelry</button>
          <button class="chip" data-filter="skirt">Skirt</button>
          <button class="chip" data-filter="footwear">Footwear</button>
        </div>

        <div class="sort-wrap">
          <span>Sort by</span>
          <select class="sort-select" id="sortSelect">
            <option value="default">Featured</option>
            <option value="price-asc">Price: Low to High</option>
            <option value="price-desc">Price: High to Low</option>
            <option value="name">Name A–Z</option>
          </select>
        </div>
      </div>

      <div class="product-grid" id="productGrid">

        <article class="product-card glass" data-category="women" data-price="680000" data-name="Maroon Satin Wrap Romper">
          <div class="product-image">
            <span class="product-badge">Bestseller</span>
            <img src="https://plus.unsplash.com/premium_photo-1675186049409-f9f8f60ebb5e?q=80&w=687&auto=format&fit=crop" alt="Maroon Satin Wrap Romper" />
          </div>
          <div class="product-body">
            <div class="product-category">Women / Essentials</div>
            <div class="product-name">Maroon Satin Wrap Romper</div>
            <div class="product-price">Rp680.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="jewelry" data-price="450000" data-name="Aurelia Sun Medallion Set">
        <a href="cart.html" class="product-link">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1585960622850-ed33c41d6418?q=80&w=1170&auto=format&fit=crop" alt="Aurelia Sun Medallion Set" />
          </div>
          <div class="product-body">
            <div class="product-category">Jewelry / Signature</div>
            <div class="product-name">Aurelia Sun Medallion Set</div>
            <div class="product-price">Rp450.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </a>
        </article>

        <article class="product-card glass" data-category="skirt" data-price="659000" data-name="High-waisted A-line Skirt">
          <div class="product-image">
            <span class="product-badge">Limited</span>
            <img src="https://images.unsplash.com/photo-1646054224885-f978f5798312?q=80&w=687&auto=format&fit=crop" alt="High-waisted A-line Skirt" />
          </div>
          <div class="product-body">
            <div class="product-category">Skirt / Limited</div>
            <div class="product-name">High-waisted A-line Skirt</div>
            <div class="product-price">Rp659.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="footwear" data-price="745000" data-name="Classic Heeled Ankle Boots">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1610398752800-146f269dfcc8?q=80&w=687&auto=format&fit=crop" alt="Classic Heeled Ankle Boots" />
          </div>
          <div class="product-body">
            <div class="product-category">Boots / Core</div>
            <div class="product-name">Classic Heeled Ankle Boots</div>
            <div class="product-price">Rp745.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="women" data-price="720000" data-name="Soft Draped Midi Dress">
          <div class="product-image">
            <span class="product-badge">New</span>
            <img src="https://plus.unsplash.com/premium_photo-1668485968642-30e3d15e9b9c?q=80&w=687&auto=format&fit=crop" alt="Soft Draped Midi Dress" />
          </div>
          <div class="product-body">
            <div class="product-category">Women / Core</div>
            <div class="product-name">Soft Draped Midi Dress</div>
            <div class="product-price">Rp720.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="jewelry" data-price="385000" data-name="Pearl Layered Pendant">
          <div class="product-image">
            <img src="https://plus.unsplash.com/premium_photo-1739548338201-4c337ce176d2?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1." alt="Pearl Layered Pendant" />
          </div>
          <div class="product-body">
            <div class="product-category">Jewelry / New Arrival</div>
            <div class="product-name">Pearl Layered Pendant</div>
            <div class="product-price">Rp385.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="footwear" data-price="598000" data-name="Strappy Mule Heels">
          <div class="product-image">
            <img src="https://plus.unsplash.com/premium_photo-1738862176163-e7025ab4ac31?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1." alt="Strappy Mule Heels" />
          </div>
          <div class="product-body">
            <div class="product-category">Footwear / Essentials</div>
            <div class="product-name">Strappy Mule Heels</div>
            <div class="product-price">Rp598.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="skirt" data-price="540000" data-name="Pleated Wrap Midi Skirt">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1708363390847-b4af54f45273?q=80&w=764&auto=format&fit=crop&ixlib=rb-4.1." alt="Pleated Wrap Midi Skirt" />
          </div>
          <div class="product-body">
            <div class="product-category">Skirt / Signature</div>
            <div class="product-name">Pleated Wrap Midi Skirt</div>
            <div class="product-price">Rp540.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="men" data-price="620000" data-name="Linen Relaxed Shirt">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1602810318383-e386cc2a3ccf?auto=format&fit=crop&w=900&q=80" alt="Linen Relaxed Shirt" />
          </div>
          <div class="product-body">
            <div class="product-category">Men / Essentials</div>
            <div class="product-name">Linen Relaxed Shirt</div>
            <div class="product-price">Rp620.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="men" data-price="580000" data-name="Tapered Linen Trousers">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1473966968600-fa801b869a1a?auto=format&fit=crop&w=900&q=80" alt="Tapered Linen Trousers" />
          </div>
          <div class="product-body">
            <div class="product-category">Men / Core</div>
            <div class="product-name">Tapered Linen Trousers</div>
            <div class="product-price">Rp580.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="women" data-price="495000" data-name="Ribbed Knit Cardigan">
          <div class="product-image">
            <img src="https://images.unsplash.com/photo-1771736813440-527d93a30a29?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1." alt="Ribbed Knit Cardigan" />
          </div>
          <div class="product-body">
            <div class="product-category">Women / Knitwear</div>
            <div class="product-name">Ribbed Knit Cardigan</div>
            <div class="product-price">Rp495.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <article class="product-card glass" data-category="footwear" data-price="670000" data-name="Pointed Toe Kitten Mules">
          <div class="product-image">
            <span class="product-badge">New</span>
            <img src="https://images.unsplash.com/photo-1543163521-1bf539c55dd2?auto=format&fit=crop&w=900&q=80" alt="Pointed Toe Kitten Mules" />
          </div>
          <div class="product-body">
            <div class="product-category">Footwear / Signature</div>
            <div class="product-name">Pointed Toe Kitten Mules</div>
            <div class="product-price">Rp670.000</div>
            <button class="full-btn">Add to Cart</button>
          </div>
        </article>

        <div class="empty-state" id="emptyState">
          <h3>No products found</h3>
          <p>Try selecting a different category.</p>
        </div>

      </div>
    </div>
  </main>

  <footer>
    <div class="container">© 2026 Emblaze. Designed with soft minimal elegance.</div>
  </footer>

  <script src="products.js"></script>
</body>
</html>