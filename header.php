<!DOCTYPE html>
<html>
  <head>
    <title><?php echo _e($title); ?></title>
    <link rel="alternate" type="application/atom+xml" title="RSS"
          href="https://dev.hackerexperience.com/phame/blog/feed/1/" />
    <?php echo $skin->getCSSResources(); ?>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  </head>
  <body>
    <ul id="oblivious-header">
        <li><a href="<?php echo _e($home_uri); ?>"><?php echo _e($blog->getName()); ?></a></li>
    </ul>
    <div class="oblivious-info">
      <h1>
        <a href="<?php echo _e($home_uri); ?>"><?php
          echo _e($blog->getName());
        ?></a>
      </h1>
      <p><?php echo _e($blog->getDescription()); ?></p>
      <br/><br/>
      <p><a href="https://dev.hackerexperience.com/phame/blog/feed/1/">Atom feed</a></p>
      <?php is_file('subscribe.html') && require_once('subscribe.html'); ?>
    </div>
    <div class="oblivious-content">
