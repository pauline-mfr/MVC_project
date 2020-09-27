<?php
include('../controler.php');
$toUpdate = $_SESSION['update']; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Back end</title>
  <link href="main.css" type="text/css" rel="stylesheet">
</head>

<body>
  <h1>Edit entry</h1>

  <form action="../controler.php" method="POST" enctype="multipart/form-data" name="edit-form">
    <input name="new_title" value="<?= $toUpdate[0]['title']?>"></input><br><br>
    <input name="new_desc" value="<?= $toUpdate[0]['description']?>"></input><br><br>
    <input name="new_price" value="<?= $toUpdate[0]['price']?>"></input><br><br>
    <p>The actual image</p>
    <img src="img/<?= $toUpdate[0]['image'] ?>" alt="" style="width: 5%; height: 5%;"><br><br>
    <label for="new_img">Change the picture</label>
    <input type="file" name="new_img" value="<?= $toUpdate[0]['image']?>"></input><br><br>
    <?= var_dump($toUpdate[0]['image']); ?>
    <label for="cat">Categorie</label>
    <select name="new_cat">
      <option value="<?= $toUpdate[0]['category']?>"><?= $toUpdate[0]['category'] ?> </option>
      <option value="starter">Starter</option>
      <option value="main-course">Main Course</option>
      <option value="dessert">Dessert</option>
    </select><br><br>
    <button type="submit" name="update" value= "<?= $toUpdate[0]['id'] ?>">Update</button>
  </form>

</body>
</html>
