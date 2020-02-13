<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survey Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<main class="container">
  <fieldset>
    <legend>Submitted Information</legend>
    <div class="row">
      <div class="col">Name:</div>
      <div class="col"><?php echo $_POST['name']; ?></div>
    </div>
    <div class="row">
      <div class="col-6">Dojo Location:</div>
      <div class="col-6"><?php echo $_POST['location']; ?></div>
    </div>
    <div class="row">
      <div class="col-6">Favorite Language:</div>
      <div class="col-6"><?php echo $_POST['language']; ?></div>
    </div>
    <div class="row">
      <div class="col-6">Comment:</div>
      <div class="col-6"><?php echo $_POST['comment']; ?></div>
    </div>
    <div class="row mt-3">
      <div class="col-7">
        <a href="javascript:history.back()" class="btn btn-primary float-right")>Go Back</a>
      </div>
    </div>
</body>
</html>