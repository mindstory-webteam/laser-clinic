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
