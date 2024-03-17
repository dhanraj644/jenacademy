<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      
     <!-- //main css file -->
     <link rel="stylesheet" href="css/style.css">
    <!-- //font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- //bootstrap -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- //owl carousel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <!-- //animationn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
</head>
<style>
#drop_item{
    border:2px solid black;
    background-color:aliceblue;
     width:80%;}
     #drop_item:hover{
        background-color:#8512ff;
        color: white;  
     }
</style>
<body>
      <!--top nav-bar  -->
      <div class="top-sec" style="background-color:white; height: 40px;">
        <div class="container">
            <div class="row">
                <div class="top-use-sec">
                    <ol>
                        <li><i class="fa fa-map-marker" style="color: #8512ff; font-size: 20px;"></i>Main
                            Tonk,Phatak,jaipur, Rajasthan 302015</li>

                        <li><i class="fa fa-phone" style="color: #8512ff; font-size: 20px;"></i>+91 8233888827
                        </li>

                    </ol>
                    <div class="top-social ">
                        <ul >
                            <li ><i  class="fa fa-facebook-f" style="color: #8512ff; font-size: 20px;"></i></li>
                            <li><i class="fa fa-twitter" style="color: #8512ff; font-size: 20px;"></i></li>
                            <li><i class="fa fa-youtube" style="color: #8512ff; font-size: 20px;"></i></li>
                            <li><i class="fa fa-instagram" style="color: #8512ff; font-size: 20px;"></i></li>


                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- main nav-bar -->
    <header class="header " id="navbar">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="logo">
                    <a href="index.php"><img src="assets/img/logo.png "  alt=""></a>
                </div>
                <button type="button" class="nav-toggler">
                    <span></span>
                </button>
                <nav class="nav " >
                    <ul class="">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="About.php">About </a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <ul class="dropdown">
                        <li class=""><a href="course.php" class=" " >Courses</a></li>


                        <div class="dropdown-content">
                            <ul class="drop_item" >
                           <a style="background-color:white; " href="ssc.php"> <li id="drop_item" style=""> SSC </li>  </a> <br>
                                     <ol class="one_sub">
                                       <a href="sscje.php" > <li id="sub_drop">  SSC JE     </li></a>
                                     </ol>
                                    </ul>  
                                    
                                    
                              <ul class="two_drop">      
                               <a style="background-color:white;" href="railway.php" > <li id="drop_item" style="" > Railway</li> </a> <br></a>
                                <ol id="two_sub">
                                  <a href="sscje.php" > <li  id="sub_drop"> Loco Pilot  </li></a> <br>
                                  <a href="sscje.php" >  <li id="sub_drop">   Group - D  </li> </a><br>
                                  <a href="sscje.php" > <li id="sub_drop">   NTPC </li>  <br></a>
                                  <a href="sscje.php" >  <li id="sub_drop">  JE   </li> <br></a>
                                 </ol>
                                </ul> 
                                <ul class="three_drop">
                              <a href="dmrc.php" style="background-color:white;"> <li id="drop_item" style="">DMRC </li> </a>  <br>

                                    <ol id="three_drop">
                                    <a href="sscje.php" >   <li id="sub_drop">   DMRC JE </li> </a><br>
                                    <a href="sscje.php" > <li id="sub_drop"> DMRC Technical Helper </li> </a><br>
                                
                                    <a href="sscje.php" > <li id="sub_drop">  DMRC  Maintainer</li></a>
                                
                                    </ol>

                                </ul>

                                <ul class="four_drop">
                             <a href="rajasthan.php"style="background-color:white;" > <li id="drop_item" style="">Rajasthan Govt. </li> </a>   <br>
                                
                               
                                 <ol id="four_item">
                                 <a href="sscje.php" >  <li id="sub_drop"> Technician </li></a> <br>
                                 <a href="sscje.php" >  <li id="sub_drop"> State JE </li> </a> <br>
                                </ol>
                                     
                               </ul>
                               <ul class="five_drop">
                              <a href="rvunl.php"style="background-color:white;" ><li id="drop_item" style=""> RVUNL </li> </a>   <br>
                                
                                <ol id="five_item">
                                <a href="sscje.php" > <li id="sub_drop">  RVUNL</li> </a> <br>                    
                                <a href="sscje.php" > <li id="sub_drop">  JVVNL</li> </a>     <br>      
                                <a href="sscje.php" > <li id="sub_drop">  AVVNL</li> </a>        <br>
                                <a href="sscje.php" >  <li id="sub_drop">  JDVVNL</li></a><br>
                                </ol>
                            </ul>
                                

                            <ul class="six_drop">
                              <a href="other.php"style="background-color:white;"> <li id="drop_item" style=""> Other Courses </li></a>  <br>

                                 <ol id="six_item">
                                 <a href="sscje.php" >  <li id="sub_drop"> DDA JE </li> </a> <br>
                                  <a href="sscje.php" > <li id="sub_drop"> Informative assistant </li></a> <br>

                                 </ol>
                                </ul>
                        </div>
                    </ul>

                        <li><a href="upcomingbatch.php">Upcoming Batches</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>