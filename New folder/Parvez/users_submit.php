 <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){

        
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
           
        

            require_once('db_config.php');

        $sql = "INSERT INTO users 
        (fullname,email,password) VALUES ('$fullname','$email','$password')";

        $db->query($sql);

        if($db->affected_rows>0){
            header("location: all_users.php");
        }


             //print_r($_POST);
        }
?>