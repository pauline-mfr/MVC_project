<?php  include('../controler.php'); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Back office</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="main.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <section class="container-fluid">
      <div class="row">
        <!-- SIDEBAR -->
        <div class="col-2 sidebar">
          <div class="row">
            <img src="img/admin1.png" alt="admin icon" class="admin-icon my-4 pb-4">
          </div>
          <div class="row pb-4 pt-5 mt-5">
            <div>
            <i class="fas fa-utensils text-light pl-2"></i>
            <button class="btn"><h2>My sections</h2></button>
          </div>
          </div>
          <div class="row">
                  <!-- ADDING FORM -->
            <form method="POST" action="add.php">
              <i class="far fa-plus-square text-light pl-2 pb-5"></i>
            <button class="btn" type="submit" name="add"><h2>Add a section</h2></button>
            </form>
          </div>
          <div class="row">
            <div>
            <i class="fas fa-globe text-light pl-2"></i>
            <button class="btn"><h2>Check website</h2></button>
          </div>
          </div>
        </div>
        <div class="col-10">
    <div class="row header mb-5">
      <div class="col-10">
      <h1 class="my-4 py-4 pl-5">Dashboard</h1>
    </div>
    <div class="col-2 my-4 py-4 header-icons">
<i class="far fa-bell pr-4"></i>
<i class="fas fa-envelope-open-text"></i>
</div>

    </div>
<!-- SECTIONS -->
<div class="row row-cols-1 row-cols-md-3 g-4 sections">
  <?php $ids = showAll(); foreach ($ids as $id): ?>
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $id['title'] ?>
         <form method="POST" action="../controler.php" id="edit-options">
       <button class="btn" type="submit" name="edit" value="<?= $id['id'] ?>"><i class="fas fa-edit"></i></button>
       <button class="btn" type="submit" name="delete" value="<?= $id['id'] ?>"><i class="far fa-trash-alt"></i></button>
     </form></h5>
     <img src="img/<?= $id['image'] ?>" class="card-img-top" alt="<?= $id['image'] ?>">
        <p class="card-text"><?= $id['description'] ?></p>
        <ul class="list-group list-group-flush">
        <li class="list-group-item"><strong>Price :</strong> <?= $id['price'] ?>€</li>
        <li class="list-group-item"><strong>Category : </strong><?= $id['category'] ?></li>
      </ul>
      </div>
    </div>
  </div>
   <?php $_SESSION = $id;
  endforeach; ?>
</div>
</div>
</div>
</section>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

  </body>
</html>
