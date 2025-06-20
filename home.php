<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Homepage</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('https://contenthub-static.grammarly.com/blog/wp-content/uploads/2017/08/BMD-2914.png'); /* Replace with the path to your background image */
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    #container {
      text-align: center;
      color: white;
    }

    #logo {
      width: 150px; /* Adjust the size as needed */
      height: auto;
      position: absolute;
      top: 10px;
      left: 10px;
    }

    #email-image {
      width: 100px; /* Adjust the size as needed */
      height: auto;
      margin-bottom: 20px; /* Adjust spacing as needed */
    }

    .button {
      display: inline-block;
      padding: 10px 20px;
      font-size: 18px;
      text-align: center;
      text-decoration: none;
      background-color: #4CAF50; /* Green color, you can change it */
      color: white;
      border-radius: 5px;
      margin: 10px;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div id="container">
    <!--<img id="logo" src="logo.png" alt="Logo"> Replace with the path to your logo -->
    <div>
      <!--<h1><b>Who are you?<b></h1>-->
      <a href="login1.php" class="button"><h1>Manager</h1></a>
      <br><a href="login2.php" class="button"><h1>Employee</h1></a>
    </div>
  </div>
</body>
</html>
