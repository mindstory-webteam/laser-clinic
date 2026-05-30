<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Page Not Found — Laser Skin Hair & Cosmetic Clinic</title>
  <meta name="robots" content="noindex, nofollow" />
  <link rel="icon" type="image/webp" href="/assets/images/fav-icon.webp" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="/styles.css" />
  <style>
    /* ── 404-specific styles ── */
    .error-page {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    .error-main {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 6rem 1rem 4rem;
      background: var(--gradient-soft);
    }
    .error-inner {
      max-width: 560px;
      width: 100%;
      text-align: center;
    }

    /* Big 404 number */
    .error-code {
      font-size: clamp(5rem, 20vw, 9rem);
      font-weight: 700;
      line-height: 1;
      letter-spacing: -0.04em;
      background: var(--gradient-cta);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
      user-select: none;
    }

    /* Decorative divider */
    .error-divider {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin: 1.25rem auto;
      max-width: 260px;
    }
    .error-divider::before,
    .error-divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: var(--border);
    }
    .error-divider-icon {
      display: grid;
      place-items: center;
      width: 2.5rem;
      height: 2.5rem;
      border-radius: 9999px;
      background: var(--lavender);
      border: 1px solid var(--border);
      flex-shrink: 0;
    }
    .error-divider-icon svg {
      width: 1.1rem;
      height: 1.1rem;
      color: var(--mauve);
    }

    .error-heading {
      font-size: clamp(1.3rem, 4vw, 1.75rem);
      font-weight: 600;
      color: var(--deep);
      margin-bottom: 0.75rem;
    }
    .error-desc {
      font-size: 1rem;
      color: var(--muted);
      line-height: 1.7;
      margin-bottom: 2rem;
    }

    /* Action buttons */
    .error-actions {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.75rem;
      margin-bottom: 2.5rem;
    }
    .error-actions .btn {
      min-width: 160px;
    }

    /* Quick links */
    .error-links {
      background: #fff;
      border: 1px solid var(--border);
      border-radius: 1rem;
      padding: 1.25rem 1.5rem;
      box-shadow: var(--shadow-card);
    }
    .error-links-title {
      font-size: 0.75rem;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      color: var(--muted);
      margin-bottom: 0.875rem;
    }
    .error-links-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 0.5rem;
      list-style: none;
    }
    @media (min-width: 400px) {
      .error-links-grid { grid-template-columns: repeat(3, 1fr); }
    }
    .error-links-grid a {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      padding: 0.5rem 0.625rem;
      border-radius: 0.5rem;
      font-size: 0.875rem;
      color: var(--deep);
      font-weight: 500;
      text-decoration: none;
      transition: background 0.2s, color 0.2s;
    }
    .error-links-grid a:hover {
      background: var(--lavender);
      color: var(--mauve);
    }
    .error-links-grid a svg {
      width: 0.875rem;
      height: 0.875rem;
      flex-shrink: 0;
      color: var(--lilac);
    }
  </style>
</head>
<body class="error-page">

  <?php include __DIR__ . '/header.php'; ?>

  <main class="error-main">
    <div class="error-inner">

      <div class="error-code">404</div>

      <div class="error-divider">
        <span class="error-divider-icon">
          <!-- Stethoscope / search icon -->
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/>
          </svg>
        </span>
      </div>

      <h1 class="error-heading">Oops — Page Not Found</h1>
      <p class="error-desc">
        The page you're looking for may have been moved, renamed, or no longer exists.<br>
        Let's get you back on track.
      </p>

      <div class="error-actions">
        <a href="/" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
          </svg>
          Go to Homepage
        </a>
        <a href="/treatments" class="btn btn-light">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
               stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2a10 10 0 1 0 10 10"/>
            <path d="M12 6v6l4 2"/>
            <path d="M18 2v4h4"/>
          </svg>
          View Treatments
        </a>
      </div>

      <div class="error-links">
        <p class="error-links-title">Quick links</p>
        <ul class="error-links-grid">
          <li>
            <a href="/">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
              </svg>
              Home
            </a>
          </li>
          <li>
            <a href="/treatments">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2v-4M9 21H5a2 2 0 0 1-2-2v-4m0 0h18"/>
              </svg>
              Treatments
            </a>
          </li>
          <li>
            <a href="/blogs">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                <polyline points="14 2 14 8 20 8"/>
              </svg>
              Blog
            </a>
          </li>
          <li>
            <a href="/?scroll=about">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="4"/>
                <path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/>
              </svg>
              About
            </a>
          </li>
          <li>
            <a href="/?scroll=doctor">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M8 2v4"/><path d="M16 2v4"/>
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <path d="M3 10h18"/>
                <path d="M12 14v4"/><path d="M10 16h4"/>
              </svg>
              Doctor
            </a>
          </li>
          <li>
            <a href="/?scroll=contact">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                   stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 13.1 19.79 19.79 0 0 1 1.62 4.47 2 2 0 0 1 3.6 2.27h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/>
              </svg>
              Contact
            </a>
          </li>
        </ul>
      </div>

    </div>
  </main>

  <?php include __DIR__ . '/footer.php'; ?>

  <script>
    // Footer year (matches site's existing script pattern)
    const y = document.getElementById('year');
    if (y) y.textContent = new Date().getFullYear();

    // Mobile menu toggle (matches site's existing pattern)
    const toggle = document.querySelector('.menu-toggle');
    const mobileNav = document.querySelector('.mobile-nav');
    if (toggle && mobileNav) {
      toggle.addEventListener('click', () => {
        const open = mobileNav.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(open));
      });
    }
  </script>

</body>
</html>
