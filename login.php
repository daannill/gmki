<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
  body {
    margin: 0;
    background: #f0f2f5;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .login-box {
    width: 320px;
    background: white;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }

  h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .input-group {
    margin-bottom: 12px;
  }

  .input-group label {
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
  }

  .input-group input {
    width: 93%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
  }

  button {
    width: 100%;
    padding: 10px;
    border: none;
    background: #2c3e50;
    color: white;
    border-radius: 5px;
    cursor: pointer;
    font-size: 15px;
  }

  button:hover {
    background: #34495e;
  }
</style>
</head>
<body>

<div class="login-box">
  <h2>Login</h2>

  <form>
    <div class="input-group">
      <label>Username</label>
      <input type="text" required>
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" required>
    </div>

    <button>Login</button>
  </form>
</div>

</body>
</html>