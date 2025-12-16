const bloqueio = document.querySelector('.bloqueio');
const linklogin = document.querySelector('.link-login');
const linkregistro = document.querySelector('.link-registro');
const btnPopup = document.querySelector('.btnLogin-popup');
const iconClose = document.querySelector('.icon-close');

linkregistro.addEventListener('click',()=> {
    bloqueio.classList.add('active');
});
linklogin.addEventListener('click',()=> {
    bloqueio.classList.remove('active');
});

btnPopup.addEventListener('click',()=> {
    bloqueio.classList.add('active-popup');
});

iconClose.addEventListener('click',()=> {
    bloqueio.classList.remove('active-popup');
});
