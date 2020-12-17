<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  signup
</button>
<br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="insert.php" method="GET">
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="name">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Age</label>
    <input name="age" type="text" class="form-control" id="formGroupExampleInput2" placeholder="age">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Email</label>
    <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">City</label>
    <input name="city" type="text" class="form-control" id="formGroupExampleInput2" placeholder="city">
  </div>
  <input class="btn btn-primary" type="submit" value="Submit">
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<?php
include 'config.php';
$rawData = mysqli_query($Con,"select * from form_table");
?>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($rawData)){
      ?>
    <tr>
      <td><?php echo ++$i ?></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['age'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['city'] ?></td>
      <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-warning">Delete</a></td>
      <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-warning">Update</a></td>
    
    
    </tr>
      
    <?php
  }
  ?>
  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
