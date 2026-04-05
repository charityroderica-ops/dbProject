    const menuToggle = document.getElementById('menuToggle');
    const mobileMenu = document.getElementById('mobileMenu');
    menuToggle.addEventListener('click', () => mobileMenu.classList.toggle('show'));

    const tabLogin = document.getElementById('tabLogin');
    const tabRegister = document.getElementById('tabRegister');
    const registerFields = document.querySelectorAll('.register-fields');
    const loginOnlyRow = document.querySelector('.login-only-row');
    const submitBtn = document.getElementById('submitBtn');
    const loginHeading = document.querySelector('.login-heading');
    const loginSub = document.querySelector('.login-sub');
    const switchPrompt = document.getElementById('switchPrompt');
    const switchLink = document.getElementById('switchLink');
    const formMessage = document.getElementById('formMessage');

    let isLogin = true;

    function switchToLogin() {
      isLogin = true;
      tabLogin.classList.add('active');
      tabRegister.classList.remove('active');
      registerFields.forEach(f => f.classList.remove('show'));
      loginOnlyRow.style.display = 'flex';
      submitBtn.textContent = 'Sign In';
      loginHeading.innerHTML = 'Welcome <em>back.</em>';
      loginSub.textContent = 'Sign in to your account to continue.';
      switchPrompt.innerHTML = 'Don\'t have an account? <a href="#" id="switchLink">Create one</a>';
      document.getElementById('switchLink').addEventListener('click', (e) => { e.preventDefault(); switchToRegister(); });
      hideMessage();
    }

    function switchToRegister() {
      isLogin = false;
      tabRegister.classList.add('active');
      tabLogin.classList.remove('active');
      registerFields.forEach(f => f.classList.add('show'));
      loginOnlyRow.style.display = 'none';
      submitBtn.textContent = 'Create Account';
      loginHeading.innerHTML = 'Join <em>Emblaze.</em>';
      loginSub.textContent = 'Create your account and join the circle.';
      switchPrompt.innerHTML = 'Already have an account? <a href="#" id="switchLink">Sign in</a>';
      document.getElementById('switchLink').addEventListener('click', (e) => { e.preventDefault(); switchToLogin(); });
      hideMessage();
    }

    tabLogin.addEventListener('click', switchToLogin);
    tabRegister.addEventListener('click', switchToRegister);
    switchLink.addEventListener('click', (e) => { e.preventDefault(); switchToRegister(); });

    document.getElementById('togglePassword').addEventListener('click', () => {
      const pwd = document.getElementById('password');
      pwd.type = pwd.type === 'password' ? 'text' : 'password';
    });

    function showMessage(text, type) {
      formMessage.textContent = text;
      formMessage.className = `form-message ${type}`;
    }

    function hideMessage() {
      formMessage.className = 'form-message';
    }

    document.getElementById('authForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const email = document.getElementById('email').value.trim();
      const password = document.getElementById('password').value;

      if (!email || !password) {
        showMessage('Please fill in all required fields.', 'error');
        return;
      }

      if (!isLogin) {
        const confirm = document.getElementById('confirmPassword').value;
        if (password !== confirm) {
          showMessage('Passwords do not match.', 'error');
          return;
        }
        showMessage('Account created! Welcome to Emblaze.', 'success');
        setTimeout(() => window.location.href = 'index.html', 1800);
      } else {
        showMessage('Signed in successfully. Redirecting…', 'success');
        setTimeout(() => window.location.href = 'index.html', 1500);
      }
    });