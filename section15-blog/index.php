<?php 
  include_once("templates/header.php");
?>
<main>
  <div id="title-container">
    <h1>Code Blog</h1>
    <p>Your coding blog!</p>
  </div>
  <div id="posts-container">
    <?php foreach($posts as $post): ?>
      
    <?php endforeach; ?>
  </div>
</main>

<?php 
  include_once("templates/footer.php");
?>