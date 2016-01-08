<!DOCTYPE html>
<html>
  <head>
    <title><?php echo _e($title); ?></title>
    <link rel="alternate" type="application/atom+xml" title="RSS"
          href="https://dev.hackerexperience.com/phame/blog/feed/1/" />
    <?php echo $skin->getCSSResources(); ?>

  </head>
  <body>
    <div class="oblivious-info">
      <h1>
        <a href="<?php echo _e($home_uri); ?>"><?php
          echo _e($blog->getName());
        ?></a>
      </h1>
      <p><?php echo _e($blog->getDescription()); ?></p>
      <br/>
      <p><a href="https://dev.hackerexperience.com/phame/blog/feed/1/">Atom feed</a>.</p>
    </div>
    <div class="oblivious-content">
