document.addEventListener('DOMContentLoaded', function () {
  document.getElementById('menuToggle').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('show');
  });

  document.querySelectorAll('.payment-option').forEach(opt => {
    opt.addEventListener('click', function () {
      const group = this.closest('.payment-options');
      group.querySelectorAll('.payment-option').forEach(o => o.classList.remove('selected'));
      this.classList.add('selected');

      const pay = this.dataset.pay;
      const cardFields = document.getElementById('cardFields');
      if (cardFields) {
        cardFields.classList.toggle('show', pay === 'card');
      }

      const method = this.dataset.method;
      if (method) {
        const costs = { regular: 25000, express: 55000, same: 85000 };
        shippingCost = costs[method];
        updateTotals();
      }
    });
  });

  const cardNumber = document.getElementById('cardNumber');
  if (cardNumber) {
    cardNumber.addEventListener('input', function () {
      let v = this.value.replace(/\D/g, '').substring(0, 16);
      this.value = v.replace(/(.{4})/g, '$1 ').trim();
    });
  }

  document.getElementById('cartItems').addEventListener('click', function (e) {
    const btn = e.target.closest('.qty-btn');
    if (!btn) return;

    const idx = parseInt(btn.dataset.idx, 10);
    const action = btn.dataset.action;

    if (action === 'plus') {
      cart[idx].qty++;
    } else if (action === 'minus') {
      if (cart[idx].qty > 1) {
        cart[idx].qty--;
      }
    }

    saveCart(cart);
    renderOrderItems();
    updateTotals();
  });

  document.querySelector('.promo-btn').addEventListener('click', applyPromo);
  document.querySelector('.place-order-btn').addEventListener('click', placeOrder);

  renderOrderItems();
  updateTotals();
});

let shippingCost = 25000;
let discount = 0;

function getCart() {
  try {
    return JSON.parse(localStorage.getItem('emblaze_cart')) || [];
  } catch {
    return [];
  }
}

function saveCart(cart) {
  localStorage.setItem('emblaze_cart', JSON.stringify(cart));
}

let cart = getCart();

function formatRp(n) {
  return 'Rp' + n.toLocaleString('id-ID').replace(/,/g, '.');
}

function renderOrderItems() {
  const cartItems = document.getElementById('cartItems');
  cartItems.innerHTML = '';

  if (cart.length === 0) {
    cartItems.innerHTML = `
      <div class="cart-item">
        <div class="cart-item-info">
          <div class="cart-item-name">Your cart is empty</div>
          <div class="cart-item-cat">Please add products first</div>
        </div>
      </div>
    `;
    return;
  }

  cart.forEach((item, idx) => {
    const row = document.createElement('div');
    row.className = 'cart-item';
    row.innerHTML = `
      <div class="cart-item-img">
        <img src="${item.img}" alt="${item.name}" />
      </div>
      <div class="cart-item-info">
        <div class="cart-item-name">${item.name}</div>
        <div class="cart-item-cat">${item.cat}</div>
        <div class="cart-item-qty">
          <button class="qty-btn" data-action="minus" data-idx="${idx}">−</button>
          <span class="qty-num">${item.qty}</span>
          <button class="qty-btn" data-action="plus" data-idx="${idx}">+</button>
        </div>
      </div>
      <div class="cart-item-price" data-price="${item.price}">
        ${formatRp(item.price * item.qty)}
      </div>
    `;
    cartItems.appendChild(row);
  });
}

function updateTotals() {
  let subtotal = 0;

  cart.forEach(item => {
    subtotal += item.price * item.qty;
  });

  document.getElementById('subtotal').textContent = formatRp(subtotal);
  document.getElementById('shippingCost').textContent = formatRp(shippingCost);
  document.getElementById('grandTotal').textContent = formatRp(subtotal + shippingCost - discount);
}

function applyPromo() {
  const code = document.getElementById('promoInput').value.trim().toUpperCase();
  const discountRow = document.getElementById('discountRow');
  const discountAmt = document.getElementById('discountAmt');

  if (code === 'EMBLAZE10') {
    discount = 50000;
    discountRow.style.display = 'flex';
    discountAmt.textContent = '− ' + formatRp(discount);
  } else {
    discount = 0;
    discountRow.style.display = 'none';
    alert('Promo code not valid.');
  }

  updateTotals();
}

function placeOrder() {
  const orderId = 'EMB-' + Math.floor(10000 + Math.random() * 90000);
  document.getElementById('orderId').textContent = 'Order #' + orderId;
  document.getElementById('successOverlay').classList.add('show');
}