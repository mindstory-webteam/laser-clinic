<?php

$blogs = [
  [
    "slug" => "acne-scar-treatment-options",
    "title" => "Acne Scar Treatment Options: What Really Helps?",
    "category" => "Acne Care",
    "date" => "2026-05-18",
    "image" => "assets/images/hero.jpg",
    "excerpt" => "A dermatologist-led guide to acne scar treatments such as peels, MNRF, lasers and combination care.",
    "content" => "
      <p>Acne scars can affect skin texture, confidence and overall skin appearance. The right treatment depends on the type of scar, scar depth, active acne status and skin type.</p>
      <h2>Why acne scars need personalised treatment</h2>
      <p>Not every acne scar responds to the same procedure. Some scars are shallow, some are deep, and some are mixed with pigmentation. A dermatologist consultation helps identify the correct treatment combination.</p>
      <h2>Common acne scar treatments</h2>
      <p>Treatment may include chemical peels, MNRF, lasers, threads or medical management. In many cases, a combination plan gives better improvement than a single procedure.</p>
    "
  ],
  [
    "slug" => "laser-treatment-for-pigmentation",
    "title" => "Laser Treatment for Pigmentation: What to Know",
    "category" => "Laser Treatments",
    "date" => "2026-05-18",
    "image" => "assets/images/treatments-banner.png",
    "excerpt" => "Understand how laser treatments can help pigmentation, marks, scars and selected cosmetic concerns.",
    "content" => "
      <p>Laser treatments use focused light energy to target selected skin concerns such as pigmentation, acne scars, tattoo marks, birth marks and other visible skin marks.</p>
      <h2>How laser treatment works</h2>
      <p>The laser type and settings are selected based on the skin concern, skin tone, depth of pigmentation and treatment area.</p>
      <h2>Aftercare matters</h2>
      <p>Sun protection, gentle skincare and following the dermatologist’s instructions are important after laser procedures.</p>
    "
  ],
  [
    "slug" => "hair-fall-causes-and-treatment",
    "title" => "Hair Fall: Common Causes and Treatment Options",
    "category" => "Hair Care",
    "date" => "2026-05-18",
    "image" => "assets/images/clinic.jpg",
    "excerpt" => "Learn why hair fall happens and when treatments such as PRP, GFC and mesotherapy may be considered.",
    "content" => "
      <p>Hair fall can happen due to stress, nutritional deficiencies, hormonal imbalance, genetics, scalp conditions or medical causes. Proper diagnosis helps create the right treatment plan.</p>
      <h2>Available treatment options</h2>
      <p>Treatment may include medical management, PRP, GFC, mesotherapy, lasers and scalp care depending on the cause and severity.</p>
      <h2>When to seek help</h2>
      <p>If hair fall is sudden, severe, patchy or continuing for many weeks, a dermatologist consultation is recommended.</p>
    "
  ]
];

function find_blog_by_slug($blogs, $slug) {
  foreach ($blogs as $blog) {
    if ($blog["slug"] === $slug) {
      return $blog;
    }
  }
  return null;
}

function blog_url($slug) {
  return "/blog/" . urlencode($slug);
}
