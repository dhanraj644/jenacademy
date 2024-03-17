<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .f_div1 {

            width: 100%;
            height: 100vh;
            border-radius: 10px;
            box-shadow: 10px 10px 30px rgba(142, 141, 141, 0.919);
        }

        #f_t {
            margin-top: 50px;
            font-size: 15px;
            padding: 20px;
            margin-left: 64px;
        }

        #name {
            height: 50px;
            padding: 5px;
            margin-left: 65px;
            border: 3px solid #ccc;
            text-align: center;
            border-radius: 10px;
        }
        

        #email {
            height: 50px;
            padding: 5px;
            border: 3px solid #ccc;
            margin-left: 20px;
            text-align: center;
            border-radius: 10px;

        }

        #sub {
            height: 50px;
            width: 390px;
            padding: 5px;
            border: 3px solid #ccc;
            margin-top: 20px;
            margin-left: 65px;
            border-radius: 10px;
           
        }

        #msg {
            height: 120px;
            padding: 5px;
            width: 390px;
            margin-left: 65px;
            border: 3px solid #ccc;
            margin-top: 20px;
            border-radius: 10px;
        }

        #btn {
            height: 50px;
            padding: 5px;
            margin-top: 20px;
            width: 390px;
            margin-left: 65px;
            border-radius: 10px;
            color: black;
        }
        .social{
            margin-top: 5px;
            width:100% ;
            margin-left: 50px;
            height: 80px;
            padding: 5px;
           
           
        }
        .s_text{
            width: 250px;
        }
        .top-icon{
            width: 250px;
            float: right;
            margin-top: -40px;
            padding: 10px;
        }
        .top-icon>ul>li{
            margin-left: 30px;
            display: inline;
        }
    </style>
</head>

<body>
    <?php include('header.php') ?>

    <!-- about section  -->



    <section>
        <div class="hero" style="
            
            background-image: url('assets/img/cont.jpg');

            height:50vh;
            ">
            <center>


                <h1 style="font-weight: 900; font-size:60px; color: black;     margin-top: auto;
    padding: 64px; ">Contact </h1>


            </center>

        </div>
    </section>



    <section>

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="f_div1">
                        <div>
                            <div id="f_t">
                            <i style="font-size: 50px; margin-left:150px;" class="fas fa-envelope"> </i>
                           
                                <h2>Leave A Message</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius tempor incididunt ut labore etdolore.</p>
                            </div>
                            <form>
                                <input type="text" placeholder="Your Name" id="name">
                                <input type="email" placeholder="Your Email" id="email"> <br>

                                <input type="text" id="sub" placeholder="Subject"><br>

                                <textarea name="" placeholder="Message" id="msg" cols="80" rows="5"></textarea><br>
                                <button id="btn" style="background-color:#8512ff; color:aliceblue">Send Massage</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div style="margin:80px 50px;">
                        <div>
                            <h4 style="font-weight:bold; font-size:20px"><span style="color: #8512ff">/</span>Contact Us</h4>
                        </div>
                        <div>
                            <h1 style="font-weight:bold; font-size:50px">Get In <span style="color: #8512ff"> Touch</span></h1>
                            <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula
                                eget dolor. dolor sit amet consectetuer adipiscing elit.</p>
                        </div>
<br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div></div>
                                    <div style="margin-left:30px">
                                        <i style="    font-size: 50px;
    margin-left: 40px;
    color: #8512ff" class="fa-sharp fa-solid fa-location-dot"></i>
                                        <h1>Location</h1>
                                        <p>Main Tonk,Phatak,jaipur, Rajasthan 302015</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div></div>
                                    <div style="margin-left:50px">
                                        <i style="    font-size: 50px;
    margin-left: 30px;
    color: #8512ff" class="fa-solid fa-phone"></i>

                                        <h1>Phone</h1>
                                        <p>+91 8233888827</p>
                                    </div>
                                </div>
                            </div> <br>
                            <div class="row">
                                <div class="col-md-3">
                                    <div></div>
                                    <div style="margin-left:30px;">
                                        <i style="    font-size: 50px;
    margin-left: 35px;
    color: #8512ff" class="fa-sharp fa-solid fa-envelope"></i>
                                        <h1 style="margin-left:20px">Email</h1>
                                        <p>enacademyjaipur@gmail.com</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div></div>
                                    <div>
                                        <i style="    font-size: 50px;
    margin-left: 80px;
    color: #8512ff" class="fa-sharp fa-solid fa-clock"></i>
                                        <h1>Opening Hours</h1>
                                        <p>Everyday 09:00 - 18:00</p>
                                    </div>
                                </div>
                              
                            </div>
                            
                        </div>
                        <center>
                    <div style="width:400px; margin-top:20px; background-color: black; height: 1px; ">
                    
                    </div>
                    </center>
                    <div>
                  
                    <div class="social">
                        <div class="s_text">
                    <h1>Social Media :</h1>
                    </div>
                    <div class="top-icon">
                        <ul  >
                            <li ><i  class="fa fa-facebook-f" style="color: #8512ff;; font-size: 20px;"></i></li>
                            <li><i class="fa fa-twitter" style="color: #8512ff;; font-size: 20px;"></i></li>
                            <li><i class="fa fa-youtube" style="color: #8512ff;; font-size: 20px;"></i></li>
                            <li><i class="fa fa-instagram" style="color: #8512ff;; font-size: 20px;"></i></li>


                        </ul>
                        </div>
                    </div>
                    </div>
                    </div>
                <div>

                
                </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div style="margin-top:50px" ;>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.810137143812!2d75.79520971432359!3d26.877772668065383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db42c2cbd3501%3A0x8861860a17814024!2sJEN%20Academy%20-%20Railway%20Loco%20Pilot%20%26%20Technician%20Coaching%20in%20Jaipur%20%7C%20SSC%20JE%20%7C%20DMRC%20%7C%20DRDO%7C%20RRVUNL%20JEN%20AEn%20%7C%20DDA%20JE!5e0!3m2!1sen!2sin!4v1679734196652!5m2!1sen!2sin" width="1150" height="450" style="border-redius:5px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <?php include('footer.php') ?>
</body>

</html>