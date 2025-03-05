<?php 
session_start(); 
include("database.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($email) && !empty($password)) {
        $stmt = $conn->prepare("SELECT id, password FROM agen WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['user_id'] = $row['id'];
                header("Location: ../admin/index.php");
                exit();
            } else {
                // Incorrect password
                $_SESSION['error_message'] = 'Password salah!';
                header("Location: ../login.php");
                exit();
            }
        } else {
            // Email not found
            $_SESSION['error_message'] = 'Email tidak ditemukan!';
            header("Location: ../login.php");
            exit();
        }

        $stmt->close();
    } else {
        // Email or password is empty
        $_SESSION['error_message'] = 'Silakan isi email dan password!';
        header("Location: ../login.php");
        exit();
    }
}

$conn->close();
?>
