<?php
include('../controler.php');
$toUpdate = $_SESSION['update']; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Back end</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link href="main.css" type="text/css" rel="stylesheet">
</head>

<body>
  <h1>Edit entry</h1><br><br>

  <form action="../controler.php" method="POST" enctype="multipart/form-data" name="edit-form" class="ml-4">
    <input name="new_title" value="<?= $toUpdate[0]['title']?>"></input><br><br>
    <input name="new_desc" value="<?= $toUpdate[0]['description']?>"></input><br><br>
    <input name="new_price" value="<?= $toUpdate[0]['price']?>"></input><br><br>
    <p>The actual image</p>
    <img src="img/<?= $toUpdate[0]['image'] ?>" alt="" style="width: 5%; height: 5%;"><br><br>
    <label for="new_img">Change the picture</label>
    <input name="same_img" type="hidden" value="<?= $toUpdate[0]['image'] ?>">
    <input type="file" name="new_img" class="btn btn-outline-primary"></input><br><br>
    <label for="cat">Categorie</label>
    <select name="new_cat">
      <option value="<?= $toUpdate[0]['category']?>"><?= $toUpdate[0]['category'] ?> </option>
      <option value="starter">Starter</option>
      <option value="main-course">Main Course</option>
      <option value="dessert">Dessert</option>
    </select><br><br>
    <button class="btn btn-outline-primary" type="submit" name="update" value= "<?= $toUpdate[0]['id'] ?>">Update</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>
