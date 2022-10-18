<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Contact</title>
    <meta charset="UTC+1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photos 4Fun By Carol Bogner</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="gallery.php">Gallery <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
        
      </li>
      
    </ul>
    
  </div>
</nav>
     
</head>
<body>

<section class="my-4">
    <div class="py-4">
    <h3 class="text-center"><b> Get in Touch <b></h3>

</div>

    
    
<div class="w-50 m-auto">
    <form action="formsub.php" method="post">
        <div class="form-group">
            <label>Name: </label>
            <input type="text" name="name" class="form-control">
</div>
<div class="form-group">
    <label>Phone: </label>
    <input type="text" name="number" class="form-control">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email:</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="Message" class="form-label">Message:</label>
  <textarea class="form-control" id="Message" rows="3"></textarea>
</div>

<button type="submit" class="btn btn-success">Submit</button>
</form>
        
</div>
</section>

   

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/und/popper,min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<br>

<footer>&copy; Copyright 2022 Photos4Fun By Carol Bogner all rights reserved</footer>

</body>
</html>