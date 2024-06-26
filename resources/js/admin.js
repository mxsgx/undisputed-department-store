import './bootstrap.js'

document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('#menu')?.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('#menu').classList.toggle('rotate-180');
    document.querySelector('#menu').classList.toggle('rotate-0');
    document.querySelectorAll('.sidebar-menu-text').forEach(el => {
      el.classList.toggle('hidden')
    });
  });

  document.querySelector('#content').style.marginLeft = document.querySelector('#sidebar').offsetWidth + 'px';

  window.addEventListener('resize', function () {
    document.querySelector('#content').style.marginLeft = document.querySelector('#sidebar').offsetWidth + 'px';
  })
});
