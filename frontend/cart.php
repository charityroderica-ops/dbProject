<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cart | Emblaze</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <style>
    .cart-page { padding: 48px 0 80px; }

    .breadcrumb { font-size: 12px; letter-spacing: 0.2em; text-transform: uppercase; color: var(--text-muted); margin-bottom: 32px; }
    .breadcrumb a { color: var(--text-muted); text-decoration: none; }
    .breadcrumb a:hover { color: #7c1f2d; }
    .breadcrumb span { color: #7c1f2d; }

    .cart-heading { font-family: 'Cormorant Garamond', serif; font-size: clamp(34px, 4vw, 52px); font-weight: 300; color: var(--text-dark); margin-bottom: 6px; }
    .cart-heading em { font-style: italic; color: #9f1d2e; }
    .cart-subhead { font-size: 14px; color: var(--text-muted); margin-bottom: 40px; }

    .cart-grid { display: grid; grid-template-columns: 1fr 380px; gap: 32px; align-items: start; }

    .cart-table-head {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr 50px;
      gap: 12px;
      padding: 0 20px 14px;
      border-bottom: 1px solid rgba(231,200,191,0.5);
      font-size: 11px; letter-spacing: 0.2em; text-transform: uppercase; color: #9a847d;
    }

    .cart-list { margin-bottom: 24px; }

    .cart-row {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr 50px;
      gap: 12px;
      align-items: center;
      padding: 20px;
      border-radius: 20px;
      margin-bottom: 12px;
      transition: box-shadow 0.25s;
    }
    .cart-row:hover { box-shadow: 0 12px 30px rgba(204,177,170,0.18); }

    .cart-product { display: flex; align-items: center; gap: 16px; }
    .cart-img { width: 72px; height: 90px; border-radius: 14px; overflow: hidden; flex-shrink: 0; }
    .cart-img img { width: 100%; height: 100%; object-fit: cover; }
    .cart-name { font-family: 'Cormorant Garamond', serif; font-size: 18px; color: #7a1f2f; margin-bottom: 3px; }
    .cart-cat { font-size: 11px; letter-spacing: 0.14em; text-transform: uppercase; color: var(--text-muted); margin-bottom: 5px; }
    .cart-badge { display: inline-block; background: rgba(159,29,46,0.08); color: #7c1f2d; font-size: 9px; letter-spacing: 0.15em; text-transform: uppercase; padding: 3px 10px; border-radius: 999px; }
    .cart-unit-price { font-size: 14px; color: var(--text-soft); }

    .cart-qty { display: flex; align-items: center; gap: 8px; }

    .qty-btn {
      width: 30px; height: 30px;
      border-radius: 50%;
      border: 1px solid #e7c8bf;
      background: white;
      color: #7c1f2d;
      font-size: 20px;
      font-weight: 300;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      transition: background 0.2s, color 0.2s;
      flex-shrink: 0;
      line-height: 1;
    }
    .qty-btn:hover { background: #7c1f2d; color: white; border-color: #7c1f2d; }

    .qty-num { font-size: 15px; font-weight: 500; color: var(--text-dark); min-width: 20px; text-align: center; }
    .cart-total-price { font-size: 15px; font-weight: 600; color: #7c1f2d; }

    .remove-btn {
      width: 34px; height: 34px;
      border-radius: 50%;
      border: 1px solid #e7c8bf;
      background: transparent;
      color: #c4a99a;
      cursor: pointer;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px;
      line-height: 1;
      transition: background 0.2s, color 0.2s, border-color 0.2s;
      flex-shrink: 0;
    }
    .remove-btn:hover { background: rgba(199,69,69,0.08); border-color: rgba(199,69,69,0.3); color: #b03a3a; }

    .empty-cart { display: none; text-align: center; padding: 80px 20px; }
    .empty-cart-icon { width: 80px; height: 80px; border-radius: 50%; background: linear-gradient(135deg, #f4d4ca, #fff1e9); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 32px; }
    .empty-cart h3 { font-family: 'Cormorant Garamond', serif; font-size: 30px; font-weight: 300; color: var(--text-dark); margin-bottom: 10px; }
    .empty-cart h3 em { font-style: italic; color: #9f1d2e; }
    .empty-cart p { font-size: 14px; color: var(--text-muted); margin-bottom: 28px; }

    .cart-footer { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px; padding-top: 20px; border-top: 1px solid rgba(231,200,191,0.4); }

    .continue-btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 22px; border: 1px solid #dcc9c3; border-radius: 999px; background: rgba(255,255,255,0.78); font-family: 'Jost', sans-serif; font-size: 13px; color: #5c4d48; cursor: pointer; text-decoration: none; transition: background 0.2s; }
    .continue-btn:hover { background: white; }

    .clear-btn { display: inline-flex; align-items: center; gap: 6px; padding: 12px 22px; border: 1px solid rgba(199,69,69,0.25); border-radius: 999px; background: transparent; font-family: 'Jost', sans-serif; font-size: 13px; color: #b03a3a; cursor: pointer; transition: background 0.2s; }
    .clear-btn:hover { background: rgba(199,69,69,0.06); }

    .also-like { margin-top: 52px; }
    .also-like-head { display: flex; align-items: flex-end; justify-content: space-between; margin-bottom: 20px; }
    .also-like-title { font-family: 'Cormorant Garamond', serif; font-size: 26px; font-weight: 300; color: var(--text-dark); }
    .also-like-title em { font-style: italic; color: #9f1d2e; }
    .see-all { font-size: 12px; letter-spacing: 0.15em; text-transform: uppercase; color: #9f1d2e; text-decoration: none; }

    .also-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
    .also-card { border-radius: 20px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s; }
    .also-card:hover { transform: translateY(-5px); box-shadow: 0 16px 36px rgba(179,78,94,0.15); }
    .also-img { height: 200px; overflow: hidden; }
    .also-img img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.4s; }
    .also-card:hover .also-img img { transform: scale(1.06); }
    .also-body { padding: 14px 16px; }
    .also-name { font-family: 'Cormorant Garamond', serif; font-size: 16px; color: #7a1f2f; margin-bottom: 4px; }
    .also-price { font-size: 13px; color: var(--text-muted); margin-bottom: 12px; }
    .also-add { width: 100%; padding: 9px; border-radius: 999px; border: 1px solid #e7c8bf; background: transparent; font-family: 'Jost', sans-serif; font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: #7c1f2d; cursor: pointer; transition: background 0.2s, color 0.2s; }
    .also-add:hover { background: #7c1f2d; color: white; border-color: #7c1f2d; }

    .cart-summary { position: sticky; top: 90px; border-radius: 28px; padding: 32px; }
    .summary-title { font-family: 'Cormorant Garamond', serif; font-size: 24px; font-weight: 300; color: var(--text-dark); margin-bottom: 24px; }
    .total-row { display: flex; justify-content: space-between; font-size: 14px; color: var(--text-soft); margin-bottom: 12px; }
    .total-row.grand { font-size: 19px; font-weight: 600; color: var(--text-dark); margin-top: 18px; padding-top: 18px; border-top: 1px solid rgba(231,200,191,0.5); }
    .total-row.grand span:last-child { color: #7c1f2d; }
    .divider-soft { height: 1px; background: linear-gradient(to right, transparent, #efcfc7, transparent); margin: 20px 0; }

    .promo-wrap { display: flex; gap: 10px; margin-bottom: 10px; }
    .promo-input { flex: 1; padding: 12px 16px; border: 1px solid #e7c8bf; border-radius: 999px; background: rgba(255,255,255,0.8); font-family: 'Jost', sans-serif; font-size: 13px; color: var(--text-dark); outline: none; }
    .promo-input::placeholder { color: #c4a99a; }
    .promo-input:focus { border-color: #c4455b; background: white; }
    .promo-btn { padding: 12px 18px; border: 1px solid #e7c8bf; border-radius: 999px; background: white; font-family: 'Jost', sans-serif; font-size: 13px; color: #7c1f2d; cursor: pointer; transition: background 0.2s, color 0.2s; }
    .promo-btn:hover { background: #7c1f2d; color: white; border-color: #7c1f2d; }
    .promo-message { font-size: 12px; margin-bottom: 16px; padding: 0 4px; display: none; }
    .promo-message.success { color: #3a7a5a; display: block; }
    .promo-message.error { color: #b03a3a; display: block; }

    .checkout-btn { width: 100%; padding: 17px; border: none; border-radius: 999px; background: linear-gradient(135deg, #9f1d2e 0%, #c4455b 48%, #f1d7cc 100%); color: white; font-family: 'Jost', sans-serif; font-size: 15px; font-weight: 500; letter-spacing: 0.08em; cursor: pointer; box-shadow: 0 12px 30px rgba(159,29,46,0.28); transition: transform 0.28s, box-shadow 0.28s; margin-bottom: 14px; text-decoration: none; display: block; text-align: center; }
    .checkout-btn:hover { transform: translateY(-2px); box-shadow: 0 16px 36px rgba(159,29,46,0.34); }
    .checkout-btn.disabled { opacity: 0.5; pointer-events: none; }

    .secure-note { display: flex; align-items: center; justify-content: center; gap: 6px; font-size: 12px; color: var(--text-muted); margin-bottom: 20px; }
    .payment-icons { display: flex; align-items: center; justify-content: center; gap: 8px; flex-wrap: wrap; }
    .pay-icon { padding: 5px 12px; border: 1px solid #e7c8bf; border-radius: 8px; font-size: 11px; color: var(--text-muted); background: white; }

    @media (max-width: 960px) {
      .cart-grid { grid-template-columns: 1fr; }
      .cart-summary { position: static; }
      .also-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 640px) {
      .cart-table-head { display: none; }
      .cart-row { grid-template-columns: 1fr auto; }
      .cart-unit-price { display: none; }
    }
    section, [id] { scroll-margin-top: 90px; }
  </style>
</head>
<body>
  <div class="bg-orb"></div>

  <header>
    <div class="container navbar">
      <a href="index.html" style="text-decoration:none;">
        <div class="brand-logo">Emblaze</div>
        <div class="brand-sub">Effortless Confidence</div>
      </a>
      <nav class="nav-links" id="mobileMenu">
        <a href="index.html">Home</a>
        <a href="index.html#collection">Collection</a>
        <a href="index.html#about">About</a>
        <a href="products.html">Products</a>
        <a href="index.html#contact">Contact</a>
      </nav>
      <div style="display:flex; align-items:center; gap:12px;">
        <a href="login.html" class="login-icon" title="Login">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
        </a>
        <button class="menu-toggle" id="menuToggle">☰</button>
      </div>
    </div>
  </header>

  <main class="cart-page">
    <div class="container">
      <div class="breadcrumb">
        <a href="index.html">Home</a> &rsaquo;
        <a href="products.html">Products</a> &rsaquo;
        <span>Cart</span>
      </div>

      <h1 class="cart-heading">Your <em>Cart</em></h1>
      <p class="cart-subhead" id="cartSubhead"></p>

<div class="cart-grid">
  <div>
    <div class="cart-table-head">
      <span>Product</span>
      <span>Price</span>
      <span>Quantity</span>
      <span>Total</span>
      <span></span>
    </div>

    <div class="cart-list" id="cartList"></div>

    <div class="empty-cart" id="emptyCart">
      <div class="empty-cart-icon">🛍️</div>
      <h3>Your cart is <em>empty</em></h3>
      <p>Looks like you haven't added anything yet.</p>
      <a href="products.html" class="checkout-btn" style="display:inline-block;width:auto;padding:14px 32px;">Browse Collection</a>
    </div>

    <div class="cart-footer" id="cartFooter">
      <a href="products.html" class="continue-btn">← Continue Shopping</a>
      <button class="clear-btn" id="clearBtn">🗑 Clear Cart</button>
    </div>

    <a href="order.html" class="checkout-btn" id="checkoutBtn" style="display:inline-block; margin: 20px 0 28px 0;">
      Proceed to Checkout
    </a>

    <div class="also-like">
      <div class="also-like-head">
        <div class="also-like-title">You May Also <em>Like</em></div>
        <a href="products.html" class="see-all">See All</a>
      </div>
      <div class="also-grid" id="alsoGrid"></div>
    </div>
  </div>
    <script src="cart.js"></script>
  </main>

</body>
</html>