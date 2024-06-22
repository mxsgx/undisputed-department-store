import './bootstrap';

document.addEventListener('DOMContentLoaded', function () {
  document.querySelector('#menu').addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector('#navigation').classList.toggle('hidden');
  });
});
window.addEventListener('scroll', function () {
  const logoIcon = document.querySelector('#logo-icon');
  const logoText = document.querySelector('#logo-text');
  const content = document.querySelector('#content');
  const header = document.querySelector('#header');
  const offsetToleration = header.offsetHeight;

  if (window.scrollY >= (header.offsetTop + header.offsetHeight + offsetToleration)) {
    logoIcon.classList.add('hidden');
    logoText.classList.remove('hidden');
    header.classList.add('fixed');
    content.classList.add('mt-24');

    return;
  }

  logoText.classList.add('hidden');
  logoIcon.classList.remove('hidden');
  content.classList.remove('mt-24');
  header.classList.remove('fixed');
})
