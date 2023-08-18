<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) Form</h2>
  <form method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
      @error('email')
      <span style='color:red;'>{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" placeholder="Enter password">
      @error('password')
      <span style='color:red;'>{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="pwd">Img:</label>
      <input type="file" class="form-control" name="image" placeholder="Enter password">
      @error('image')
      <span style='color:red;'>{{$message}}</span>
      @enderror
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body> 
</html>
