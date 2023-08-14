<?php 
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!$_SESSION['loggedin']) {
  header('location:login.php');
};
require __DIR__ . '/vendor/autoload.php';
$page = "wishlist";
?>
<?php

use App\db;

$conn = db::connect();
?>

<?php require __DIR__ . '/components/header.php'; ?>
<?php require __DIR__ . '/components/bodyheader.php'; ?>

<div style="min-height: 500px;" class="container">


  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Image</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>

      <?php
     $s_id = $_SESSION['userid'] ?? '';
      // echo $s_id;
      $q = "SELECT p.title p_title,p.images p_images,p.sprice p_price FROM `wishlist` w,`products` p where w.product_id  = p.id && w.user_id = $s_id";

      $result = $conn->query($q);
      while ($row = $result->fetch_assoc()) {

      ?>
        <tr>
          <td><?= $row['p_title'] ?></td>
          <td><img width="50px" height="100px" src="<?= settings()['homepage'] ?>/productimg/<?= $row['p_images'] ?>" alt=""></td>
          <td><?= $row['p_price'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>

</div>

<?php
require __DIR__ . '/components/footer.php';
$conn->close();
?>