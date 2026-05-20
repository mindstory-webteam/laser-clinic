const menuButton = document.querySelector('.menu-toggle');
const mobileNav = document.querySelector('.mobile-nav');

if (menuButton && mobileNav) {
  menuButton.addEventListener('click', () => {
    const open = mobileNav.classList.toggle('open');
    menuButton.setAttribute('aria-expanded', String(open));
    menuButton.textContent = open ? '×' : '☰';
  });

  mobileNav.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      mobileNav.classList.remove('open');
      menuButton.setAttribute('aria-expanded', 'false');
      menuButton.textContent = '☰';
    });
  });
}

/* Smooth scroll without showing # in URL */
document.querySelectorAll('[data-scroll]').forEach((link) => {
  link.addEventListener('click', (event) => {
    const sectionId = link.getAttribute('data-scroll');
    const section = document.getElementById(sectionId);

    // If section exists on current page, scroll without changing page
    if (section) {
      event.preventDefault();

      section.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });

      history.replaceState(null, '', window.location.pathname);
    }

    // If section does not exist, let href="/?scroll=about" open home page
  });
});

/* When coming from another page, scroll after home page loads */
window.addEventListener('DOMContentLoaded', () => {
  const params = new URLSearchParams(window.location.search);
  const sectionId = params.get('scroll');

  if (sectionId) {
    const section = document.getElementById(sectionId);

    if (section) {
      setTimeout(() => {
        section.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });

        // Remove ?scroll=about from URL after scrolling
        history.replaceState(null, '', window.location.pathname);
      }, 100);
    }
  }
});

const year = document.getElementById('year');
if (year) year.textContent = new Date().getFullYear();

const form = document.getElementById('appointmentForm');
const error = document.getElementById('formError');

if (form) {
  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const data = new FormData(form);
    const name = String(data.get('name') || '').trim();
    const phone = String(data.get('phone') || '').trim();
    const concern = String(data.get('concern') || '').trim();
    const clinic = String(data.get('clinic') || '').trim();
    const message = String(data.get('message') || '').trim();

    if (name.length < 2) return showError('Please enter your name.');
    if (phone.length < 7) return showError('Please enter a valid phone number.');
    if (concern.length < 2) return showError('Please enter your treatment concern.');
    if (!clinic) return showError('Please choose a clinic.');

    showError('');

    const text = [
      'Appointment Request',
      `Name: ${name}`,
      `Phone: ${phone}`,
      `Concern: ${concern}`,
      `Clinic: ${clinic}`,
      message ? `Message: ${message}` : ''
    ].filter(Boolean).join('\n');

    window.open(`https://wa.me/919947488474?text=${encodeURIComponent(text)}`, '_blank', 'noopener');
    form.reset();
  });
}

function showError(message) {
  if (error) error.textContent = message;
}


// PRELOADER
(function () {
  const loader = document.getElementById('preloader');
  if (!loader) return;
  document.body.style.overflow = 'hidden';

  function hide() {
    loader.classList.add('hide');
    document.body.style.overflow = '';
    setTimeout(() => loader.remove(), 800);
  }

  // Fire on DOMContentLoaded instead of window load
  if (document.readyState !== 'loading') {
    setTimeout(hide, 1000);
  } else {
    document.addEventListener('DOMContentLoaded', () => setTimeout(hide, 1000));
  }

  // Hard fallback — always removes after 2.5s no matter what
  setTimeout(hide, 2500);
})();