<?php include "blog-data.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Blogs | Laser Skin Hair & Cosmetic Clinic</title>
  <meta name="description" content="Skin, hair, laser and cosmetic dermatology articles from Laser Skin Hair & Cosmetic Clinic." />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="/assets/images/fav-icon.webp" />
  <link rel="stylesheet" href="/styles.css?v=12" />
  <link rel="stylesheet" href="/blog.css?v=12" />
</head>

<body>
  <!-- PRELOADER -->
  <div id="preloader">
    <img src="assets/images/main-logo-inverse.webp" alt="Laser Skin Hair & Cosmetic Clinic" />
  </div>
  <!--  -->

  <?php include "header.php"; ?>

  <main>
    <section class="blog-banner">
      <div class="container">
        <h1>Skin, Hair & Cosmetic Care Tips</h1>
        <p>Helpful articles about acne care, pigmentation, laser treatments, hair fall, anti-aging and skin brightening.</p>
      </div>
    </section>

    <section class="section blog-list-page">
      <div class="container">
        <div class="section-head">
          <span>Latest Articles</span>
          <h2>Read Our Blogs</h2>
          <p>Explore simple, useful information before your consultation.</p>
        </div>

        <div class="blog-grid">
          <?php foreach ($blogs as $blog): ?>
            <article class="blog-card">
              <a class="blog-card-image" href="<?php echo blog_url($blog['slug']); ?>">
                <img src="/<?php echo htmlspecialchars($blog['image']); ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>">
              </a>

              <div class="blog-card-content">
                <div class="blog-meta">
                  <span><?php echo htmlspecialchars($blog['category']); ?></span>
                  <time datetime="<?php echo htmlspecialchars($blog['date']); ?>">
                    <?php echo date("M d, Y", strtotime($blog['date'])); ?>
                  </time>
                </div>

                <h3>
                  <a href="<?php echo blog_url($blog['slug']); ?>">
                    <?php echo htmlspecialchars($blog['title']); ?>
                  </a>
                </h3>

                <p><?php echo htmlspecialchars($blog['excerpt']); ?></p>

                <a class="blog-read-more" href="<?php echo blog_url($blog['slug']); ?>">Read More</a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </main>

  <?php include "footer.php"; ?>

  <script src="/script.js"></script>
</body>

</html>
