(function () {
  const yearSpan = document.getElementById('currentYear');
  if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
  }

  const nav = document.getElementById('mainNav');
  const shrinkNav = () => {
    if (!nav) return;
    if (window.scrollY > 40) {
      nav.classList.add('shadow');
    } else {
      nav.classList.remove('shadow');
    }
  };
  shrinkNav();
  document.addEventListener('scroll', shrinkNav);

  const navLinks = document.querySelectorAll('#navContent .nav-link');
  const navCollapse = document.getElementById('navContent');
  navLinks.forEach((link) => {
    link.addEventListener('click', () => {
      if (navCollapse && navCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navCollapse).hide();
      }
    });
  });
})();
