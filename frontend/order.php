<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Order | Emblaze</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="order.css" />
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
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="8" r="4"/>
            <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
          </svg>
        </a>
        <button class="menu-toggle" id="menuToggle">☰</button>
      </div>
    </div>
  </header>

  <main class="order-page">
    <div class="container">

      <div class="breadcrumb">
        <a href="index.html">Home</a> &rsaquo;
        <a href="products.html">Products</a> &rsaquo;
        <span>Order</span>
      </div>

      <div class="steps">
        <div class="step done">
          <div class="step-num">✓</div>
          <span>Cart</span>
        </div>
        <div class="step-line"></div>
        <div class="step active">
          <div class="step-num">2</div>
          <span>Details</span>
        </div>
        <div class="step-line"></div>
        <div class="step">
          <div class="step-num">3</div>
          <span>Payment</span>
        </div>
        <div class="step-line"></div>
        <div class="step">
          <div class="step-num">4</div>
          <span>Confirm</span>
        </div>
      </div>

      <div class="order-grid">

        <div>

          <div class="form-card glass">
            <div class="section-label">Step 01</div>
            <div class="section-heading">Shipping <em>Details</em></div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">First Name</label>
                <input class="form-input" type="text" placeholder="Nadira" />
              </div>
              <div class="form-group">
                <label class="form-label">Last Name</label>
                <input class="form-input" type="text" placeholder="Aurellia" />
              </div>
            </div>

            <div class="form-row full">
              <div class="form-group">
                <label class="form-label">Email Address</label>
                <input class="form-input" type="email" placeholder="your@email.com" />
              </div>
            </div>

            <div class="form-row full">
              <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input class="form-input" type="tel" placeholder="+62 812 0000 0000" />
              </div>
            </div>

            <div class="form-row full">
              <div class="form-group">
                <label class="form-label">Street Address</label>
                <input class="form-input" type="text" placeholder="Jl. Merdeka No. 12" />
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label class="form-label">City</label>
                <input class="form-input" type="text" placeholder="Jakarta" />
              </div>
              <div class="form-group">
                <label class="form-label">Postal Code</label>
                <input class="form-input" type="text" placeholder="12345" />
              </div>
            </div>

            <div class="form-row full">
              <div class="form-group">
                <label class="form-label">Province</label>
                <select class="form-select">
                  <option value="">Select province</option>
                  <option>DKI Jakarta</option>
                  <option>Jawa Barat</option>
                  <option>Jawa Tengah</option>
                  <option>Jawa Timur</option>
                  <option>Banten</option>
                  <option>Bali</option>
                  <option>Sumatera Utara</option>
                  <option>Sulawesi Selatan</option>
                </select>
              </div>
            </div>

            <div class="form-row full">
              <div class="form-group">
                <label class="form-label">Delivery Note (Optional)</label>
                <input class="form-input" type="text" placeholder="e.g. Leave at front door" />
              </div>
            </div>
          </div>

          <div class="form-card glass">
            <div class="section-label">Step 02</div>
            <div class="section-heading">Shipping <em>Method</em></div>

            <div class="payment-options">
              <div class="payment-option selected" data-method="regular">
                <div class="payment-radio"><div></div></div>
                <div class="payment-label">
                  <div class="payment-name">Regular Shipping</div>
                  <div class="payment-desc">Estimated 3–5 business days</div>
                </div>
                <div class="payment-icon" style="font-size:14px; color:#7c1f2d; font-weight:500;">Rp25.000</div>
              </div>
              <div class="payment-option" data-method="express">
                <div class="payment-radio"></div>
                <div class="payment-label">
                  <div class="payment-name">Express Shipping</div>
                  <div class="payment-desc">Estimated 1–2 business days</div>
                </div>
                <div class="payment-icon" style="font-size:14px; color:#7c1f2d; font-weight:500;">Rp55.000</div>
              </div>
              <div class="payment-option" data-method="same">
                <div class="payment-radio"></div>
                <div class="payment-label">
                  <div class="payment-name">Same Day Delivery</div>
                  <div class="payment-desc">Only available within Jakarta</div>
                </div>
                <div class="payment-icon" style="font-size:14px; color:#7c1f2d; font-weight:500;">Rp85.000</div>
              </div>
            </div>
          </div>

          <div class="form-card glass">
            <div class="section-label">Step 03</div>
            <div class="section-heading">Payment <em>Method</em></div>

            <div class="payment-options" id="paymentOptions">
              <div class="payment-option selected" data-pay="transfer">
                <div class="payment-radio"><div></div></div>
                <div class="payment-label">
                  <div class="payment-name">Bank Transfer</div>
                  <div class="payment-desc">BCA, Mandiri, BNI, BRI</div>
                </div>
                <div class="payment-icon">🏦</div>
              </div>
              <div class="payment-option" data-pay="ewallet">
                <div class="payment-radio"></div>
                <div class="payment-label">
                  <div class="payment-name">E-Wallet</div>
                  <div class="payment-desc">GoPay, OVO, DANA, ShopeePay</div>
                </div>
                <div class="payment-icon">📱</div>
              </div>
              <div class="payment-option" data-pay="cod">
                <div class="payment-radio"></div>
                <div class="payment-label">
                  <div class="payment-name">Cash on Delivery</div>
                  <div class="payment-desc">Pay when your order arrives</div>
                </div>
                <div class="payment-icon">💵</div>
              </div>
              <div class="payment-option" data-pay="card">
                <div class="payment-radio"></div>
                <div class="payment-label">
                  <div class="payment-name">Credit / Debit Card</div>
                  <div class="payment-desc">Visa, Mastercard, JCB</div>
                </div>
                <div class="payment-icon">💳</div>
              </div>
            </div>

            <div class="card-fields" id="cardFields">
              <div class="form-row full" style="margin-top:4px;">
                <div class="form-group">
                  <label class="form-label">Card Number</label>
                  <input class="form-input" type="text" placeholder="0000 0000 0000 0000" maxlength="19" id="cardNumber" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group">
                  <label class="form-label">Expiry Date</label>
                  <input class="form-input" type="text" placeholder="MM / YY" maxlength="7" />
                </div>
                <div class="form-group">
                  <label class="form-label">CVV</label>
                  <input class="form-input" type="text" placeholder="•••" maxlength="3" />
                </div>
              </div>
              <div class="form-row full">
                <div class="form-group">
                  <label class="form-label">Cardholder Name</label>
                  <input class="form-input" type="text" placeholder="As on card" />
                </div>
              </div>
            </div>
          </div>

        </div>

        <div>
          <div class="order-summary glass">
            <div class="summary-title">Order Summary</div>

            <div class="cart-items" id="cartItems"></div>

            <div class="promo-wrap">
              <input class="promo-input" type="text" placeholder="Promo code" id="promoInput" />
              <button class="promo-btn" onclick="applyPromo()">Apply</button>
            </div>

            <div class="summary-totals">
              <div class="total-row">
                <span>Subtotal</span>
                <span id="subtotal">Rp1.130.000</span>
              </div>
              <div class="total-row">
                <span>Shipping</span>
                <span id="shippingCost">Rp25.000</span>
              </div>
              <div class="total-row" id="discountRow" style="display:none; color:#3a7a5a;">
                <span>Discount</span>
                <span id="discountAmt">− Rp0</span>
              </div>
              <div class="total-row grand">
                <span>Total</span>
                <span id="grandTotal">Rp1.155.000</span>
              </div>
            </div>

            <button class="place-order-btn" onclick="placeOrder()">Place Order</button>
            <div class="secure-note">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
              Secured & encrypted checkout
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <div class="success-overlay" id="successOverlay">
    <div class="success-box">
      <div class="success-icon">
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <polyline points="20 6 9 17 4 12"/>
        </svg>
      </div>
      <h2>Order <em>Placed!</em></h2>
      <p>Thank you for shopping with Emblaze. Your order is being prepared with care and will be on its way soon.</p>
      <div class="success-order-id" id="orderId">Order #EMB-00000</div>
      <div class="success-actions">
        <a href="index.html" class="btn-outline">Back to Home</a>
        <a href="products.html" class="btn-filled">Continue Shopping</a>
      </div>
    </div>
  </div>

    <script src="order.js"></script>
</body>
</html>