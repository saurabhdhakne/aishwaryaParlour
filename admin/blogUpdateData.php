<?php 
    include 'check_con.php';
    $id= $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $sql = "UPDATE blog SET title = '". $title."', content = ' ".$content." ' WHERE id = ".$id;

    if (mysqli_query($conn,$sql))
    {    
        ?>
        <html> <script> alert('Blog Updated Successfully!!!'); </script></html>
        <?php
        header('location:index.php');
    }
    else 
    {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }


?>