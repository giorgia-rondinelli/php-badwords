<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  
<div class="container">

  <form action="pagina-atterraggio.php" method="post">
    <div class="input-group mb-3">
      <span class="input-group-text">With textarea</span>
      <textarea name="text" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <div class=" ">
      <label for="basic-url" class="form-label">Inserisci la parola da censurare</label>
      <div><input name="word" type="text" class="form-control"  >
      </div>
      
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>  
</body>
</html>