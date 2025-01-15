
<?php 
    session_start();
    include "koneksi.php";
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['level'] = $user['level'];
                header("location: admin/profile.php");
                exit();
            } else {
                echo "
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Password Salah'
                        });
                    });
                </script>
            ";
            }
        } else {
            echo "
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Username Tidak Ditemukan'
                    });
                });
            </script>
        ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>
<body>
    <div class="container-login">
        <div class="wrapper-login">
            
            <h1>
                Login to your Account
            </h1>
            <form action="" method="POST">
                <div class="input">
                    <label for="username">Username</label>
                    <input placeholder="Enter your username" type="text" name="username">
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input placeholder="Enter your password" type="password" name="password">
                </div>
                <button type="submit">Login now</button>
                <p>Don't Have An Account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>