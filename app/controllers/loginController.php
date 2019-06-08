<?php
session_start();
class loginController
{


    public function loginFunction()
    {
        require_once('..\app\models\Login.php');
        $conn = Login::getConection();
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = $conn->prepare('select * from admini where username=(?)');
        $sql->bind_param('s', $username);
        $sql->execute();
        $result = $sql->get_result();
        $sql->close();
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            $_SESSION['err'] = "Nume sau parola gresita";

            header('Location: crisismap');
        } else {
            $row = mysqli_fetch_assoc($result);
            if ($pass == $row['pass']) {
                $_SESSION['is_logged'] = 1;

                header('Location:  Autoritati');
                $conn->close();
                exit();
            } else
                $_SESSION['err'] = "Nume sau parola gresita";
            header('Location: crisismap');

            exit();
        }
    }
}
// require_once 'app\models\Login.php';
// $controller = new Login();
// $username = $_POST['username'];
// $pass = $_POST['pass'];

// $controller->checkUser($username, $pass);
