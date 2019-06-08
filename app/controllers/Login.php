<?php
session_start();
class Login
{

    public $conn;


    function  __construct()
    {
        $this->conn = new mysqli(
            'localhost', // locatia serverului (aici, masina locala)
            'root',       // numele de cont
            '',    // parola (atentie, in clar!)
            'logincric'   // baza de date
        );
        if (mysqli_connect_errno()) {
            die('conection failed');
        }
    }


    function checkUser($username, $pass)
    {
        $conn = $this->conn;

        $sql = $conn->prepare('select * from admini where username=(?)');
        $sql->bind_param('s', $username);
        $sql->execute();
        $result = $sql->get_result();
        $sql->close();
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            $_SESSION['err'] = "Nume sau parola gresita";

            header('Location: http://localhost/twmap/crisismap.php');
        } else {
            $row = mysqli_fetch_assoc($result);
            if ($pass == $row['pass']) {
                $_SESSION['is_logged'] = 1;
                header('Location:  http://localhost/twmap/Autoritati.php');
                $conn->close();
                exit();
            } else
                $_SESSION['err'] = "Nume sau parola gresita";
            header('Location: http://localhost/twmap/crisismap.php');
            exit();
        }
    }
}
