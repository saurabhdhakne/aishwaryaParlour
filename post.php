<?php 

include 'check_con.php';

  
  $sql = "SELECT * FROM blog WHERE id =". $_GET['id'] ;

  $result = mysqli_query($conn,$sql);
  
  $lengths = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title2"></title>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="teeara-T-logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body{
      background-color: #000000;
      background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);  
  }
    .main1{
        min-height: 70vh;
        padding-top: 15vh;
        padding-bottom: 10vh;
        background: url('./bg.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .navbar{
      z-index:9999;
    }
    .navbar a{
      text-decoration : none;
      color:snow;
      margin-right:30px;
    }
    a{
      text-decoration : none;

    }
   .navbar-toggler{
        border:5px solid white;
    }
    .navbar-toggler:hover{
        border:5px solid black;
        box-shadow:0 2px 10px rgba(0,0,0,.6);
    }
    .main1 h1{
        text-shadow: .3px 3px 5px rgba(0, 0, 0, .5);
        font-family:Elephant;
        position: fixed;
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
    }
    .card p{

    }
    .card img{
        width: 50%;
        box-shadow: 0 1px 5px rgba(0, 0, 0, .8);
    }
    @media only screen and (max-width: 900px) {
      .collapse{
        background: black;
        padding:10px;
        border-radius:5px;
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
                  <li><a href="./transformation.html">Transformation</a></li>
                  <li><a href="./bridal.html">Bridal Makeup</a></li>
                  <li><a href="./sider.html">Sider Makeup</a></li>
                  <li><a href="./occasional.html">Occasional Makeup</a></li>
                  <li><a href="./services.html">Salon Services</a></li>
                  <li><a href="./academy.html">Academy</a></li>
                  <li><a href="./blog.php">Blog</a></li>
                  <li><a href="./about-us.html">About</a></li>
                  <li><a href="./contact.html">Contact</a></li>
                </ul>
               
              </div>
            </div>
        </nav>
        <div class="row main1 d-flex text-center align-content-center">
                <h1 class="display-2 fw-bold col-md-8 offset-md-2 text-light" data-aos="fade-up" id="title"> 
                    Teeara : BLOG
                </h1>
               
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
              $content = $row['content'];
              $date = $row['dop'];
              $lengths++;
            ?>

              <div class="col-md-12" data-aos="fade-up">
                  <div class="card col-md-10 offset-md-1">
                      <div class="col-12 text-center pt-5">
                         <img src="./admin/<?php echo $img ?>" class="card-img-top" alt="...">
                      </div>
                      <div class="card-body pb-5">
                        <h5 class="card-title text-center"> </h5>
                        <hr>
                        <p class="card-text">
                           <?php echo $content; ?>
                          </p>
                          <p class="text-secondary col-md-3 offset-md-9 mt-2">
                             <?php echo $date; ?>
                         </p>
                          <hr>
                        <div class="col-md-12 text-center h3 mt-5">
                          FOUND THIS USEFUL ? SHARE WITH
                        </div>
                        <div class="col-md-12 d-flex justify-content-center mb-5 text-dark">
                                             <a class="socialbtn display-3 " href="whatsapp://send?text=<?php echo $title ?>%20https://aishwaryabeautysalon.in/blog/post.php?id=<?php echo $id  ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> 
                                &nbsp;&nbsp; <a class="socialbtn display-3 " href="https://www.facebook.com/sharer/sharer.php?u=https://aishwaryabeautysalon.in/blog/post.php?id=<?php echo $id  ?>"><i class="fa fa-facebook-official" aria-hidden="true"></i></a> 
                                &nbsp;&nbsp; <a class="socialbtn display-3 " onclick='myFunction("<?php echo $id; ?>");'> <i class="fa fa-copy" aria-hidden="true"></i></a>
                          </div>
                      </div>
                  </div>
              </div>

            <?php } } ?>
           
        </div>
    </div>


    <div class="container-fluid m-0 text-center bg-dark text-light h4 pt-4 pb-4">
        Copyright © 2021 "saurabh dhakne"
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src= 
    "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
    </script> 
    
  <script> 
      document.getElementById('title').innerHTML = '<?php echo $title; ?>';
      document.getElementById('title2').innerHTML = '<?php echo $title; ?>';
  </script>

<script>
    $(function () { 
      var header = $(".navbar"); 
      $(window).scroll(function () { 
          var scroll = $(window).scrollTop(); 

          if (scroll >= 300) { 
              header.addClass("bg-dark"); 
          } else { 
              header.removeClass("bg-dark") 
          } 
      }); 
  }); 
</script>

<script>
  AOS.init();
</script>

<script>
   function myFunction(str) {
        var copyText = 'https://aishwaryabeautysalon.in/blog/post.php?id='+str;
        navigator.clipboard.writeText(copyText);
        alert("Copied the text: " + copyText);
        
    }
</script>
</body>
</html>