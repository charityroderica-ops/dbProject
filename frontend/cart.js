const SHIPPING = 25000;
    let discount = 0;

    function getCart() {
      try { return JSON.parse(localStorage.getItem('emblaze_cart')) || []; }
      catch { return []; }
    }

    function saveCart(cart) {
      localStorage.setItem('emblaze_cart', JSON.stringify(cart));
    }

    let cart = getCart();

    const alsoItems = [
      { name: 'Classic Heeled Ankle Boots', price: 745000, img: 'https://images.unsplash.com/photo-1610398752800-146f269dfcc8?q=80&w=687&auto=format&fit=crop' },
      { name: 'Soft Draped Midi Dress',     price: 720000, img: 'https://plus.unsplash.com/premium_photo-1668485968642-30e3d15e9b9c?q=80&w=687&auto=format&fit=crop' },
      { name: 'Pearl Layered Pendant',      price: 385000, img: 'https://images.unsplash.com/photo-1599071652104-99cc014ad576?auto=format&fit=crop&w=900&q=80' },
      { name: 'Pleated Wrap Midi Skirt',    price: 540000, img: 'https://images.unsplash.com/photo-1567480384-f7503159ef0f?auto=format&fit=crop&w=900&q=80' },
    ];

    function fmt(n) {
      return 'Rp' + n.toLocaleString('id-ID').replace(/,/g, '.');
    }

    function renderCart() {
      const list = document.getElementById('cartList');
      list.innerHTML = '';

      cart.forEach(function(item, idx) {
        const row = document.createElement('div');
        row.className = 'cart-row glass';
        row.innerHTML =
          '<div class="cart-product">' +
            '<div class="cart-img"><img src="' + item.img + '" alt="' + item.name + '" /></div>' +
            '<div>' +
              '<div class="cart-name">' + item.name + '</div>' +
              '<div class="cart-cat">' + item.cat + '</div>' +
              (item.badge ? '<span class="cart-badge">' + item.badge + '</span>' : '') +
            '</div>' +
          '</div>' +
          '<div class="cart-unit-price">' + fmt(item.price) + '</div>' +
          '<div class="cart-qty">' +
            '<button class="qty-btn" id="minus-' + idx + '">&#8722;</button>' +
            '<span class="qty-num" id="qty-' + idx + '">' + item.qty + '</span>' +
            '<button class="qty-btn" id="plus-' + idx + '">&#43;</button>' +
          '</div>' +
          '<div class="cart-total-price" id="rowtotal-' + idx + '">' + fmt(item.price * item.qty) + '</div>' +
          '<button class="remove-btn" id="remove-' + idx + '">&#215;</button>';

        list.appendChild(row);

        document.getElementById('minus-' + idx).onclick = function() {
          if (cart[idx].qty > 1) { cart[idx].qty--; saveCart(cart); renderCart(); }
        };
        document.getElementById('plus-' + idx).onclick = function() {
          cart[idx].qty++;
          saveCart(cart);
          renderCart();
        };
        document.getElementById('remove-' + idx).onclick = function() {
          cart.splice(idx, 1);
          saveCart(cart);
          renderCart();
        };
      });

      updateTotals();
    }

    function updateTotals() {
      let subtotal = 0, count = 0;
      cart.forEach(function(i) { subtotal += i.price * i.qty; count += i.qty; });

      document.getElementById('subtotal').textContent = fmt(subtotal);
      document.getElementById('grandTotal').textContent = fmt(subtotal + SHIPPING - discount);
      document.getElementById('itemCount').textContent = count;

      const empty = cart.length === 0;
      document.getElementById('emptyCart').style.display = empty ? 'block' : 'none';
      document.getElementById('cartFooter').style.display = empty ? 'none' : 'flex';
      document.getElementById('checkoutBtn').className = 'checkout-btn' + (empty ? ' disabled' : '');
      document.getElementById('cartSubhead').textContent = empty
        ? 'Your cart is empty'
        : cart.length + ' item' + (cart.length !== 1 ? 's' : '') + ' selected';
    }

    document.getElementById('clearBtn').onclick = function() {
      cart = [];
      saveCart(cart);
      renderCart();
    };

    function updateTotals() {
  let count = 0;
  cart.forEach(function(i) { count += i.qty; });

  const empty = cart.length === 0;

  document.getElementById('emptyCart').style.display = empty ? 'block' : 'none';
  document.getElementById('cartFooter').style.display = empty ? 'none' : 'flex';
  document.getElementById('checkoutBtn').style.display = empty ? 'none' : 'inline-block';
  document.getElementById('cartSubhead').textContent = empty
    ? 'Your cart is empty'
    : cart.length + ' item' + (cart.length !== 1 ? 's' : '') + ' selected';
}

    function renderAlso() {
      const grid = document.getElementById('alsoGrid');
      grid.innerHTML = '';

      const cartNames = cart.map(i => i.name);
      const suggestions = alsoItems.filter(i => !cartNames.includes(i.name));

      suggestions.forEach(function(item, idx) {
        const card = document.createElement('div');
        card.className = 'also-card glass';
        card.innerHTML =
          '<div class="also-img"><img src="' + item.img + '" alt="' + item.name + '" /></div>' +
          '<div class="also-body">' +
            '<div class="also-name">' + item.name + '</div>' +
            '<div class="also-price">' + fmt(item.price) + '</div>' +
            '<button class="also-add" id="also-' + idx + '">Add to Cart</button>' +
          '</div>';
        grid.appendChild(card);

        document.getElementById('also-' + idx).onclick = function() {
          const existing = cart.find(function(i) { return i.name === item.name; });
          if (existing) {
            existing.qty++;
          } else {
            cart.push({ id: Date.now(), name: item.name, cat: 'New Addition', price: item.price, qty: 1, badge: '', img: item.img });
          }
          saveCart(cart);
          renderCart();
          renderAlso();
        };
      });

      const section = document.querySelector('.also-like');
      if (section) section.style.display = suggestions.length === 0 ? 'none' : '';
    }

    document.getElementById('menuToggle').onclick = function() {
      document.getElementById('mobileMenu').classList.toggle('show');
    };

    renderCart();
    renderAlso();