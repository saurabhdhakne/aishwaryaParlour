<?php 

  include 'check_con.php';

  $sql = "SELECT id, title, dop ,img  FROM blog ORDER BY id DESC " ;

  $result = mysqli_query($conn,$sql);
  
  $lengths = 0;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teeara Blog</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link rel="shortcut icon" type="image/x-icon" href="teeara-T-logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
        background: #E0EAFC;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #CFDEF3, #E0EAFC);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #CFDEF3, #E0EAFC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .navbar a{
      text-decoration : none;
      color:snow;
    }
    .main1{
        min-height: 60vh;
        background: url('./bg.jpg');
        background-size: cover; 
    }
    .main1 h1{
        text-shadow: .3px 3px 5px rgba(0, 0, 0, .5);
        font-family:'Garamond';
        background:rgba(0,0,0,.6);
        width:15%;
        padding:10px 0px;
        border-radius:5px;
   
    }
    .main2{
        margin-top: -10vh;
        margin-bottom: 5vh;
    }
    .card{
        box-shadow: 0 2px 10px rgba(0, 0, 0, .5);
        margin-bottom: 3vh;
    }
    .card p{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* number of lines to show */
        -webkit-box-orient: vertical;
        text-align: justify;
    }
       .navbar-toggler{
        border:5px solid white;
    }
         .navbar-toggler:hover{
        border:5px solid black;
        box-shadow:0 2px 10px rgba(0,0,0,.6);
    }
    @media only screen and (max-width: 900px) {
      .collapse{
        background: black;
        padding:10px;
        border-radius:5px;
      }
      .main1 h1{
          width:30%;
      }
    }  
</style>

</head>
<body>
    
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark fw-bold fixed-top">
            <div class="container-fluid">
              <a class="navbar-brandf" href="../"> 
              <!-- <img src="teeara-T-logo.jpg" height="50px" style="border-radius: 5px;" alt=""> -->
               Home</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" href="../about-us.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="../contact.php">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="./../products.php">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="index.php">Blog</a>
                  </li>
                  
                </ul>
               
              </div>
            </div>
        </nav>
        <div class="row main1 d-flex text-center align-content-center justify-content-center">
              <h1 class="display-2 fw-bold text-white"  data-aos="fade-up"> Blog </h1>
        </div>
    </div>
    <div class="container">
        <div class="row main2">
        <?php 

            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $img = $row['img'];
              $title = $row['title'];
              $date = $row['dop'];
              $lengths++;
            ?>

              <div class="col-md-4">
                  <div class="card col-12" data-aos="fade-up">
                      <img src="../admin/<?php echo $img ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h3 class="card-title"><?php echo $title; ?></h3>
                        <!-- <p class="card-text">  </p> -->
                          <div class="d-flex justify-content- mb-2 mt-3 text-dark">
                                <p class="text-secondary  col-md-9 mb-4">
                                  <?php echo $date; ?>
                                </p>
                                             <a class="socialbtn h2 text-dark " href="whatsapp://send?text=<?php echo $title ?>%20https://teeara.in/blog/post.php?id=<?php echo $id  ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> 
                                <!-- &nbsp;&nbsp; <a class="socialbtn h2 text-dark " href="https://www.facebook.com/sharer/sharer.php?u=https://teeara.in/blog/post.php?id=<?php echo $id  ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>  -->
                                &nbsp;&nbsp; <a class="socialbtn h2 text-dark " onclick='myFunction("<?php echo $id; ?>");'> <i class="fa fa-copy" aria-hidden="true"></i></a>
                          </div>
                        <hr>
                        <!-- <div class="col-md-12 text-center h5 mt-3">
                            FOUND THIS USEFUL ? SHARE WITH
                        </div> -->
                        <a href="post.php?id=<?php echo $id; ?>" class="btn btn-primary col-12">Read more</a>
                      </div>
                  </div>
              </div>

            <?php }  }  ?>
           
        </div>
    </div>

    <div class="container-fluid m-0 text-center bg-dark text-light h4 pt-4 pb-4">
        Copyright © 2021 "Adyfi"
    </div>
    <script>
   function myFunction(str) {
        var copyText = 'https://teeara.in/blog/post.php?id='+str;
        navigator.clipboard.writeText(copyText);
        alert("Copied the text: " + copyText);
    }
       
</script>
<script>
  AOS.init();
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>