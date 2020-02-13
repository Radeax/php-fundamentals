<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Survey Form</title>
</head>
<body>
<main class="container mt-5">
  <form action="result.php" method="post">
    <fieldset class="form-group">
      <div class="form-group row">
        <label class="col-form-class col-md-2" for="name">Your Name</label>
        <input class="form-control col-md-10" type="text" name="name" id="name" placeholder="Your Name">
      </div>

      <div class="form-group row">
        <label class="form-control-label col-md-2" for="location">Dojo Location</label>
        <select class="form-control col-md-10" name="location" id="location">
          <option disabled selected>-- Pick a Location --</option>
          <option value="Arlington">Arlington</option>
          <option value="Seattle">Seattle</option>
          <option value="Chicago">Chicago</option>
        </select>
      </div>

      <div class="form-group row">
        <label class="form-control-label col-md-2" for="language">Favorite Language</label>
        <select class="form-control col-md-10" name="language" id="language">
          <option disabled selected>-- Pick a Language --</option>
          <option value="Javascript">PHP</option>
          <option value="PHP">C#</option>
          <option value="C#">Javascript</option>
        </select>
      </div>

      <div class="form-group row">
        <label class="form-control-label" for="comment">Comment (optional)</label>
        <textarea class="form-control" name="comment" id="comment"></textarea>
      </div>

      <div class="form-group row">
        <div class="col">
          <button class="btn btn-primary float-right" type="submit">Submit</button>
        </div>
      </div>
    </fieldset>
  </form>
  
  
</main>
</body>
</html>