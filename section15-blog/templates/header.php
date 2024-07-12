<?php 
  include_once("helpers/url.php");
  include_once("data/categories.php");
  include_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code Blog</title>
  <!-- CSS Styles -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
  <!-- Font Montserrat -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <a href="<?= $BASE_URL ?>" id="logo">
      <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Code Blog">
    </a>
    <nav>
      <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categories</a></li>
        <li><a href="#" class="nav-link">About</a></li>
        <li><a href="<?= $BASE_URL ?>/contact.php" class="nav-link">Contact</a></li>
      </ul>
    </nav>
    
  </header>