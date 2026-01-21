import './bootstrap';
document.addEventListener('DOMContentLoaded', () => {
  const btn = document.querySelector('.burger-btn');
  const sidebar = document.querySelector('.sidebar');
  if (!btn || !sidebar) return;

  btn.addEventListener('click', () => {
    btn.classList.toggle('cross');
    sidebar.classList.toggle('is-open');
    document.body.classList.toggle('noscroll');
  });
});
