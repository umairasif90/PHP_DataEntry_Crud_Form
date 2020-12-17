<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<?php
include 'config.php';
$id = $_GET['id'];
$rdata = mysqli_query($Con, "select * from form_table where id = $id");
$record = mysqli_fetch_array($rdata);
?>
 <form action="update1.php" method="GET">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input value="<?php echo $record['name']?>" name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Age</label>
    <input value="<?php echo $record['age']?>" name="age" type="text" class="form-control" id="formGroupExampleInput2" placeholder="age">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input value="<?php echo $record['email']?>" name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">City</label>
    <input value="<?php echo $record['city']?>" name="city" type="text" class="form-control" id="formGroupExampleInput2" placeholder="city">
  </div>
  <input class="btn btn-primary" type="submit" value="submit" name="submit">
  <input type ="hidden" name="id" value= "<?php echo $record['id']?>">
</form>


</body>
</html>