<?php 
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. In excepturi ipsam officiis voluptates facere aliquam fuga molestias qui quaerat error voluptas et minima illo, minus placeat eveniet maxime esse libero?
    Doloremque eos doloribus dolor dolorum quos ea error exercitationem unde consectetur recusandae optio repellendus, amet iusto atque ullam commodi enim fuga, obcaecati dolores autem. Laborum voluptas fugit esse facilis animi!
    Asperiores omnis rerum obcaecati similique doloremque, eligendi eum ut ducimus dolor repellendus error exercitationem totam a eveniet iste facilis ex atque veritatis consectetur dignissimos modi voluptate nesciunt. Totam, incidunt nam!
    Ex sint blanditiis quibusdam, perspiciatis libero suscipit ratione similique, sit animi voluptatibus maxime quidem iusto. Atque, aliquam! Exercitationem distinctio pariatur ea dolor earum error. Quae rerum enim totam consequatur fugiat.
    Molestias autem natus dignissimos ipsa et consequatur minus assumenda explicabo expedita quibusdam harum sequi nemo voluptates, distinctio possimus aut eveniet iste magni. Nisi ducimus animi officiis culpa eligendi, illum repudiandae.
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
      <?php foreach($post['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>

    <h3 id="categories-title">Categories</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>



<?php 
  include_once("templates/footer.php");
?>