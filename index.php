

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Formulaire</title>
  </head>
  <body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichier[]" multiple="multiple"/>
        <input type="submit" name="submit" id="submit" value="Upload" />
    </form>
    
    <div class="container">
        <div class="row">
    <?php 
    $pathImg = scandir('./uploads/');
    foreach ($pathImg as $value){ 
      if ($value != '.' && $value != '..') {?>
      <div class="col-md-6 col-md-4">
      <div class="thumbnail">
      <img src="uploads/<?= $value; ?>" class="img-thumbnail" alt="image">
      <div class = "caption">
      <h3><?= $value; ?></h3>
    <form method="POST" action="delete.php">
        <input type="hidden" name="image" value="<?= $value; ?>">
        <button type="submit" name="delete" class="btn btn-outline-warning">Supprimer</button>
        </form>
            </div>
        </div>
        </div>
    <?php }
    }?>
        </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>