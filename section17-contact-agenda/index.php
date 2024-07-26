<?php
include_once("templates/header.php");
?>

<div class="container">

  <?php if (isset($printMsg) && $printMsg != '') : ?>
  <p id="msg"><?= $printMsg ?></p>
  <?php endif; ?>
  <h1 id="main-title">My Agenda</h1>

  <?php if (count($contacts) > 0) : ?>
  <table class="table" id="contacts-table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Phone</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contacts as $contact) : ?>
      <tr>
        <td scope="row" class="col-id"><?= $contact["id"] ?></td>
        <td><?= $contact["name"] ?></td>
        <td><?= $contact["phone"] ?></td>
        <td class="actions">
          <a href="<?= $BASE_URL ?>show.php?id=<?= $contact["id"] ?>">
            <i class="fa-solid fa-eye check-icon"></i>
          </a>
          <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>">
            <i class="fa-solid fa-pencil edit-icon"></i>
          </a>
          <form class="delete-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
            <input type="hidden" name="type" value="delete">
            <input type="hidden" name="id" value="<?= $contact["id"] ?>">
            <button class="delete-btn" type="submit">
              <i class="fa-solid fa-trash delete-icon"></i>
            </button>
          </form>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>

  </table>
  <?php else : ?>
  <p id="empty-list-text">Your contact list is empty. <a href="<?= $BASE_URL ?>create.php">Add now</a></p>

  <?php endif; ?>
</div>

<?php
include_once("templates/footer.php");
?>