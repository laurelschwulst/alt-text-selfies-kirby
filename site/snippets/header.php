<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no" />

  <!-- meta -->
  <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
  <meta name="Title" content="<?= $site->site_title() ?>" />
  <meta name="Author" content="<?= $site->site_author() ?>" />
  <meta name="Description" content="<?= $site->site_description() ?>" />
  <meta name="Keywords" content="<?= $site->site_keywords() ?>" />

  <!-- favicon -->
  <link rel="icon" href="<?php if ($site->favicon()->isNotEmpty()): ?><?= $site->favicon()->toFile()->url() ?><?php endif ?>" type="image/x-icon" />

  <!-- facebook -->
  <meta property="og:title" content="<?= $site->site_title() ?>" />
  <meta property="og:type" content="website" />
  <meta name='description' content='<?= $site->site_description() ?>'>
  <meta property="og:image" content="<?php if ($site->facebook_img()->isNotEmpty()): ?><?= $site->facebook_img()->toFile()->url() ?><?php endif ?>" />
  <meta property="og:url" content="<?= $site->url() ?>" />

  <!-- twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?= $site->title() ?>" />
  <meta name='twitter:description' content='<?= $site->description() ?>'>
  <meta name="twitter:image"
        content="<?php if ($site->twitter_img()->isNotEmpty()): ?><?= $site->twitter_img()->toFile()->url() ?><?php endif ?>"
  />

  <?= css(['assets/css/tailwind.css', 'assets/css/styles.css']) ?>

</head>

<body>
