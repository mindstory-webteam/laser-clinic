<?php
include "blog-data.php";

$slug = $_GET["slug"] ?? "";
$currentBlog = find_blog_by_slug($blogs, $slug);

if (!$currentBlog) {
  http_response_code(404);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <?php if ($currentBlog): ?>
    <title><?php echo htmlspecialchars($currentBlog["title"]); ?> | Laser Skin Hair & Cosmetic Clinic</title>
    <meta name="description" content="<?php echo htmlspecialchars($currentBlog["excerpt"]); ?>" />
  <?php else: ?>
    <title>Blog Not Found | Laser Skin Hair & Cosmetic Clinic</title>
    <meta name="description" content="The requested blog was not found." />
  <?php endif; ?>

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

  <?php include "header.php"; ?>

  <main>
    <?php if ($currentBlog): ?>
      <section class="blog-detail-banner">
        <div class="container">
          <span><?php echo htmlspecialchars($currentBlog["category"]); ?></span>
          <h1><?php echo htmlspecialchars($currentBlog["title"]); ?></h1>
          <p><?php echo htmlspecialchars($currentBlog["excerpt"]); ?></p>
        </div>
      </section>

      <section class="section blog-detail-page">
        <div class="container narrow">
          <img class="blog-detail-main-image" src="/<?php echo htmlspecialchars($currentBlog["image"]); ?>" alt="<?php echo htmlspecialchars($currentBlog["title"]); ?>">

          <div class="blog-content">
            <?php echo $currentBlog["content"]; ?>
          </div>

          <div class="blog-detail-actions">
            <a class="btn btn-light" href="/blogs.php">Back to Blogs</a>
            <a class="btn btn-primary" href="tel:+919947488474">Book Appointment</a>
          </div>
        </div>
      </section>
    <?php else: ?>
      <section class="blog-detail-banner">
        <div class="container">
          <span>404</span>
          <h1>Blog Not Found</h1>
          <p>The blog you are looking for does not exist or the link is incorrect.</p>
        </div>
      </section>

      <section class="section blog-detail-page">
        <div class="container narrow">
          <a class="btn btn-primary" href="/blogs.php">Back to Blogs</a>
        </div>
      </section>
    <?php endif; ?>
  </main>

  <?php include "footer.php"; ?>

  <script src="/script.js"></script>
</body>

</html>
