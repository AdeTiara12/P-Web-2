<?php 
// cek apakah tombol submit sudah tekan atau belum
if( isset ($_POST["submit"])) {
    // cek username & password
    if($_POST["username"] == "admin"  && $_POST["password"] == "123") {
    // jika benarm redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    //jika salah, tampilkan pesan kesalahan
        $error = true;
    }
} ?>


<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 300px;
            margin: 0 auto;
            padding: 50px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .container li {
            display: block;
            margin-bottom: 10px;
        }
        .container li[type="text"],
        .container li[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .container li[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: greenyellow;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login Admin</h2>
<ul>
        <form action="" method="POST">
            <li>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </li>
        <li>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </li>
        <li>
            <button type="submit"  name="submit" value="Login">Log In</button>
        </li>
        </form>
        <?php if( isset($error)) : ?>
        <p style="color: red; font-style: italic;">username /password salah!</p>
        <?php endif; ?>
</ul>
    </div>
</body>
</html>