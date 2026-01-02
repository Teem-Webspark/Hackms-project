
const searchForm = document.querySelector('.search-form');
const shoppingCart = document.querySelector('.shopping-cart');
const loginForm = document.querySelector('.login-form');
const navbar = document.querySelector('.navbar');


function closeAll() {
  searchForm?.classList.remove('active');
  shoppingCart?.classList.remove('active');
  loginForm?.classList.remove('active');
  navbar?.classList.remove('active');
}


document.querySelector('#search-btn')?.addEventListener('click', () => {
  searchForm?.classList.toggle('active');
  shoppingCart?.classList.remove('active');
  loginForm?.classList.remove('active');
  navbar?.classList.remove('active');
});

document.querySelector('#cart-btn')?.addEventListener('click', () => {
  shoppingCart?.classList.toggle('active');
  searchForm?.classList.remove('active');
  loginForm?.classList.remove('active');
  navbar?.classList.remove('active');
});

document.querySelector('#login-btn')?.addEventListener('click', () => {
  loginForm?.classList.toggle('active');
  searchForm?.classList.remove('active');
  shoppingCart?.classList.remove('active');
  navbar?.classList.remove('active');
});

document.querySelector('#menu-btn')?.addEventListener('click', () => {
  navbar?.classList.toggle('active');
  searchForm?.classList.remove('active');
  shoppingCart?.classList.remove('active');
  loginForm?.classList.remove('active');
});

// scrolling
window.addEventListener('scroll', closeAll);





