<?php
include_once("config/url.php");
include_once("config/connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact agenda</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?php $BASE_URL ?>css/styles.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="<?php $BASE_URL ?>index.php">
        <img src="<?php $BASE_URL ?>img/logo.svg" alt="Agenda">
      </a>

      <div>
        <div class="navbar-nav">
          <a class="nav-link" href="<?php $BASE_URL ?>index.php">Contacts</a>
          <a class="nav-link" href="<?php $BASE_URL ?>create.php">Create contact</a>
        </div>
      </div>
    </nav>
  </header>