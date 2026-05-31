document.addEventListener('DOMContentLoaded', function () {

    // ハンバーガーメニュー
    const hamburger = document.querySelector('.header__hamburger');
    const nav = document.querySelector('.header__nav');

    hamburger.addEventListener('click', function () {
        hamburger.classList.toggle('is-open');
        nav.classList.toggle('is-open');
    });

    // メニューリンクをクリックしたら閉じる
    const navLinks = document.querySelectorAll('.header__menu a');
    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            hamburger.classList.remove('is-open');
            nav.classList.remove('is-open');
        });
    });

});