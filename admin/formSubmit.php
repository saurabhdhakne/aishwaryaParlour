<?php 
    include 'check_con.php';

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $msg = $_POST['msg'];
 
                                
        $sql = "INSERT INTO msgs(`fname`,`email`,`mobile`,`msg`) VALUES ('$fname','$email','$mobile','$msg')";

        if (mysqli_query($conn,$sql))
        {    
            ?>
            <html> <script> alert('Details Submitted Successfully, We will contact you soon.'); window.location="../" </script></html>
            <?php
        }
        else 
        {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
     
?>