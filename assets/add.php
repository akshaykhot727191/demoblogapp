
<html>
<head>
  <title>Add Student</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registration Form</h2>
 <form action="server.php" method="POST">
    <div class="form-group">
      <label for="uname">Roll No:</label>
      <input type="text" class="form-control" id="txtroll" placeholder="Roll No" name="txtroll" >
    </div>
    <div class="form-group">
      <label for="pwd">Name:</label>
      <input type="text" class="form-control" id="txtname" placeholder="Name" name="txtname" required>
    </div>
    <div class="form-group">
      <label for="uname">DOB:</label>
      <input type="date" class="form-control" id="txtdate" placeholder="DOB" name="txtdate" required>
    </div>
    <div class="form-group">
      <label for="uname">Address:</label>
      <input type="text" class="form-control" id="txtadd" placeholder="Address" name="txtadd" required>
    </div>
    <div class="form-group">
      <label for="uname">Phone No:</label>
      <input type="text" class="form-control" id="txtmob" placeholder="Phone No" name="txtmob" required>
    </div>
    <div class="form-group">
      <label for="pwd">Gender:</label>
      <input type="radio"  id="male" name="male" value="Male">Male
	  <input type="radio"  id="female" name="male" value="female">Female
    </div><div class="form-group">
      <label for="pwd">Age:</label>
      <input type="text" class="form-control" id="txtage" placeholder="Age" name="txtage" required>
    </div>
    <div class="form-group">
      <label for="uname">Collage Name:</label>
      <input type="text" class="form-control" id="txtclg" placeholder="Collage Name" name="txtclg" required>
    </div>
    <div class="form-group">
      <label for="uname">Class:</label>
      <input type="text" class="form-control" id="txtclass" placeholder="Class" name="txtclass" required>
    </div>

	
    <button type="submit" class="btn btn-primary" name="insert" value="insert">Submit</button>
  </form>
</div>

</body>
</html>
