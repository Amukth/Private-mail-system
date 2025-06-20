<html>
<body>
<form action="logincon2.php" method="post">
<h1>Login to your account</h1>
<div>
  <label for="username1">Username:</label>
  <input id="username1" name="username1" type="text" required />
</div>
<div>
  <label for="password">Password</label>
  <input id="password"name="password" type="password" required />
</div>
<br><button type="submit" name="login">Login</button>
<p>Don't have an account? <a href="register2.php">Register</a></p>
</body>
<!------------------CSS--------------------->

<style>
  body
  {
    width: 500px;
  margin: 0 auto;
  padding: 50px;
  background-color: #d0f0c0;
  }
  form {
    border: 1px solid #ccc;
    width: 400px;
    padding: 20px;
    border-radius: 4px;
    margin: 0 auto;
  }

  h1 {
    text-align: center;
  }

  label {
    display: block;
    font-size: 80%;
    color: #444;
    margin-bottom: 4px;
  }

  input {
    width: 100%;
    padding: 4px;
    font-size: 125%;
  }

  div + div {
    margin-top: 20px;
  }


  button {
    background-color: #4cbb17;
    color: #fff;
    padding: 16px 16px;
    font-size: 125%;
    border: none;
    border-radius: 4px;
    width: 100%;
  }

    textarea {
    width: 100%;
    height: 15%;
  }
</style>
</form>
            