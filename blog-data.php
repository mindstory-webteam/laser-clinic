<?php

$blogs = [
 [
  "slug" => "benefits-of-laser-hair-removal",
  "title" => "Benefits of Laser Hair Removal Compared to Waxing and Shaving",
  "category" => "Laser Treatments",
  "date" => "2026-05-18",
  "image" => "assets\images\blogs\Benefits of Laser Hair Removal Compared to Waxing and Shaving.webp",
  "excerpt" => "Discover why laser hair removal offers longer-lasting results, smoother skin and freedom from shaving or waxing routines.",
  "content" => "
    <p>Are you tired of shaving every few days or scheduling regular waxing appointments? Laser hair removal is a smarter, longer-lasting solution for unwanted body hair.</p>
    <h2>Long-lasting hair reduction</h2>
    <p>Unlike shaving, which only cuts hair at the surface, or waxing, which gives temporary smoothness, laser hair removal targets the hair follicle at the root. After completing a full course of sessions, many people experience significant long-term hair reduction.</p>
    <h2>Less irritation and fewer ingrown hairs</h2>
    <p>Shaving and waxing can often cause razor burn, redness, bumps and ingrown hairs. Laser treatment helps reduce these concerns by disabling the follicle and preventing repeated regrowth from the same area.</p>
    <h2>A better long-term investment</h2>
    <p>Although laser hair removal may have a higher initial cost, it can save time and money in the long run by reducing the need for razors, waxing appointments and daily maintenance.</p>
  "
],
[
  "slug" => "dermatologist-skin-care-tips",
  "title" => "10 Skin Care Tips Dermatologists Recommend for Healthy, Glowing Skin",
  "category" => "Skin Care",
  "date" => "2026-05-18",
  "image" => "assets\images\blogs\Skin Care Tips Dermatologists Recommend for Healthy, Glowing Skin.webp",
  "excerpt" => "Simple dermatologist-recommended skin care habits for healthier, brighter and more balanced skin.",
  "content" => "
    <p>Healthy, glowing skin does not always need a complicated routine. The key is consistency, the right products and dermatologist-backed habits that support your skin every day.</p>
    <h2>Protect your skin daily</h2>
    <p>Sunscreen is one of the most important steps in any skin care routine. A broad-spectrum SPF helps protect against UV damage, pigmentation, premature ageing and dullness.</p>
    <h2>Cleanse and moisturise correctly</h2>
    <p>Use a gentle cleanser suited to your skin type and avoid harsh scrubbing. Moisturising daily helps maintain the skin barrier, even if your skin is oily or acne-prone.</p>
    <h2>Build smart habits</h2>
    <p>Remove makeup before sleeping, avoid touching your face, stay hydrated, eat a balanced diet and get enough sleep. For persistent concerns such as acne, pigmentation or ageing signs, a dermatologist consultation can help create a personalised plan.</p>
  "
],
[
  "slug" => "foods-for-skin-and-hair-health",
  "title" => "Foods That Improve Skin and Hair Health",
  "category" => "Skin & Hair Care",
  "date" => "2026-05-18",
  "image" => "assets\images\blogs\Foods That Improve Skin and Hair Health, Eat Your Way to a Radiant You.webp",
  "excerpt" => "Learn how nutrient-rich foods can support glowing skin, stronger hair and better overall beauty from within.",
  "content" => "
    <p>Beautiful skin and strong hair start from within. While treatments and products help, your diet plays a major role in supporting skin glow, scalp health and hair strength.</p>
    <h2>Best foods for skin and hair</h2>
    <p>Fatty fish, avocados, eggs, berries, leafy greens, nuts, seeds, sweet potatoes, Greek yoghurt and green tea provide important nutrients such as omega-3 fatty acids, protein, biotin, Vitamin C, Vitamin E, zinc and antioxidants.</p>
    <h2>Hydration is essential</h2>
    <p>Water supports hydrated skin, a healthy scalp and better overall cell function. Dehydration can contribute to dull skin, dryness and scalp discomfort.</p>
    <h2>Diet and professional care work together</h2>
    <p>A healthy diet builds the foundation for skin and hair wellness, but concerns such as pigmentation, hair loss, acne scars or unwanted hair may need professional treatment and personalised care.</p>
  "
],
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
