<?php 
    require 'includes/common.php';
    if(isset($_POST['submit'])){
        $user_email = mysqli_real_escape_string($_POST['email']);
        $password = md5(mysqli_real_escape_string($_POST['password']));
        $mysqli = new mysqli("localhost", "root", "", "store");
        
        /* check connection */
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }
        
        /* Select queries return a resultset */
        $result = $mysqli->query("SELECT * FROM users WHERE email = '$user_email'");
        if($result){
            // Cycle through results
            while ($row = $result->fetch_object()){
                if(!strcmp($row['password'],$password)){
                    $_SESSION['email'] = $user_email;
                    $_SESSION['id'] = $row['id'];
                    $result->close();
                    $mysqli->close();
                    header("Location: products.php");
                    break;
                }
            }
            // Free result set
            $result->close();
            $mysqli->next_result();
        }
        $mysqli->close();
    }
?>