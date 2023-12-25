<?php
include_once'../app/views/nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" ></script>
    <title>Document</title>
</head>
<body>
    

<form  method="post" action="./updateuser"  class="bg-info p-4 rounded" >
  <div class="form-group">
<h3 class="container">edit Users :</h3>    

<form method="post" action="./insert">
    <div class="container mt-4">
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <!-- <input type="text" class="form-control"value = " <?= $user['mame'] ?>" name="name" id="exampleFormControlInput1" > -->
            <input type="text" class="form-control" value="<?= isset($user['mame']) ? $user['mame'] : '' ?>" name="name" id="exampleFormControlInput1">

        </div>

        <button type="submit" class="container mt-4 btn btn-primary">Submit</button>
    </div>
</form>

</body>
</html>