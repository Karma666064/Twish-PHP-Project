btnRegister.addEventListener('click', () => {
    main.classList.remove('login-active');
    main.classList.add('register-active');
});

btnLogin.addEventListener('click', () => {
    main.classList.remove('register-active');
    main.classList.add('login-active');
});