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
