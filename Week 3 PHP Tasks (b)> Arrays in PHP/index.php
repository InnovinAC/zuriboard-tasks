<!Doctype HTML>
<html>
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <meta charset="utf-8">
    <title>Task Submission</title>
  </head>
  
  <body>
    <form action="userdata.php" method="post">
      <label>Name</label>
      <input type="text" name="name" placeholder="Enter your name...">
      <br>
      
      <label>Email</label>
      <input type="email" name="email" placeholder="Enter your email...">
      <br>
      
      <label>Date Of Birth</label>
      <input type="date" name="dob">
      <br>
      
      <p>Gender</p>
      <label>Male</label>
      <input type="radio" name="gender" value="male">
      <label>Female</label>
      <input type="radio" name="gender" value="female">
      <label>Other</label>
      <input type="radio" name="gender" value="other">
      <br>
      
      <label>Country</label>
      <input type="text" name="country" placeholder="Enter your country name...">
      
    </form>
      

  </body>
</html>
