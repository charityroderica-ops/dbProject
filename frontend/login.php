<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | Emblaze</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="login.css" />
</head>
<body>

  <header>
    <div class="container navbar">
      <a href="index.html">
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
        <a href="index.html#collection" class="btn btn-secondary desktop-only">Shop Now</a>
        <button class="menu-toggle" id="menuToggle">☰</button>
      </div>
    </div>
  </header>

  <div class="login-page">

    <div class="login-visual">
      <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=1000&q=80" alt="Emblaze editorial" />
      <div class="login-visual-overlay">
        <div class="login-visual-tag">Members Only</div>
        <h2>Dress with <em>intention,</em><br>live with elegance.</h2>
        <p>Join the Emblaze circle for early access to new collections, exclusive offers, and style notes curated just for you.</p>
      </div>
    </div>

    <div class="login-form-panel">
      <div class="login-box">

        <div class="login-brand">
          <div class="login-brand-name">Emblaze</div>
          <div class="login-brand-sub">Effortless Confidence</div>
        </div>

        <h1 class="login-heading">Welcome <em>back.</em></h1>
        <p class="login-sub">Sign in to your account to continue.</p>

        <div class="login-tabs">
          <button class="tab-btn active" id="tabLogin">Sign In</button>
          <button class="tab-btn" id="tabRegister">Create Account</button>
        </div>

        <div class="form-message" id="formMessage"></div>

        <form id="authForm" autocomplete="off">

          <div class="form-group register-fields" id="nameField">
            <label class="form-label" for="fullName">Full Name</label>
            <div class="form-input-wrap">
              <input class="form-input" type="text" id="fullName" placeholder="Your full name" />
              <span class="input-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
              </span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="email">Email Address</label>
            <div class="form-input-wrap">
              <input class="form-input" type="email" id="email" placeholder="your@email.com" required />
              <span class="input-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="3"/><path d="m2 7 10 7 10-7"/></svg>
              </span>
            </div>
          </div>

           <div class="form-group">
            <label class="form-label" for="username">Username</label>
            <div class="form-input-wrap">
              <input class="form-input" type="Username" id="Username" placeholder="user23" required />
              <span class="input-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="4" width="20" height="16" rx="3"/><path d="m2 7 10 7 10-7"/></svg>
              </span>
            </div>
          </div>

          <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <div class="form-input-wrap">
              <input class="form-input" type="password" id="password" placeholder="••••••••" required />
              <span class="input-icon" id="togglePassword">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              </span>
            </div>
          </div>

          <div class="form-group register-fields" id="confirmField">
            <label class="form-label" for="confirmPassword">Confirm Password</label>
            <div class="form-input-wrap">
              <input class="form-input" type="password" id="confirmPassword" placeholder="••••••••" />
              <span class="input-icon">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
              </span>
            </div>
          </div>

          <div class="form-options login-only-row">
            <label class="remember-wrap">
              <input type="checkbox" id="remember" />
              Remember me
            </label>
            <a href="#" class="forgot-link">Forgot password?</a>
          </div>

          <button type="submit" class="login-btn" id="submitBtn">Sign In</button>
        </form>

        <div class="or-divider">or continue with</div>

        <div class="social-btns">
          <button class="social-btn">
            <svg width="16" height="16" viewBox="0 0 24 24"><path fill="#EA4335" d="M5.27 9.77A7.04 7.04 0 0 1 12 5c1.69 0 3.22.6 4.41 1.59L19.65 3.4A12 12 0 0 0 12 1C8.16 1 4.83 3 2.92 6.05l2.35 3.72Z"/><path fill="#34A853" d="M16.04 18.01A7.04 7.04 0 0 1 12 19c-2.9 0-5.4-1.76-6.57-4.3L3.1 18.46A11.97 11.97 0 0 0 12 23c3.58 0 6.81-1.46 9.15-3.82l-5.11-1.17Z"/><path fill="#FBBC05" d="M5.43 14.7A7.03 7.03 0 0 1 5 12c0-.94.17-1.84.46-2.68L3.12 5.6A11.94 11.94 0 0 0 1 12c0 2.29.64 4.43 1.75 6.26l2.68-3.56Z"/><path fill="#4285F4" d="M23 12c0-.85-.1-1.67-.27-2.47H12v4.67h6.18a5.28 5.28 0 0 1-2.29 3.46l5.11 1.17C22.24 17.1 23 14.69 23 12Z"/></svg>
            Google
          </button>
          <button class="social-btn">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.07C24 5.41 18.63 0 12 0S0 5.41 0 12.07C0 18.1 4.39 23.1 10.13 24v-8.44H7.08v-3.49h3.04V9.41c0-3.02 1.8-4.7 4.54-4.7 1.31 0 2.68.24 2.68.24v2.97h-1.51c-1.49 0-1.95.93-1.95 1.88v2.27h3.32l-.53 3.49h-2.79V24C19.61 23.1 24 18.1 24 12.07Z"/></svg>
            Facebook
          </button>
        </div>

        <p class="switch-prompt" id="switchPrompt">
          Don't have an account? <a href="#" id="switchLink">Create one</a>
        </p>

      </div>
    </div>
  </div>

  <script src=login.js></script>
</body>
</html>