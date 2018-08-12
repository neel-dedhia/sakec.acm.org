<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SAKEC ACM Student Chapter</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.min.css" rel="stylesheet">


    <link href="assets/css/header_footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style rel="stylesheet">


    html,
    body,
    .view {
        height: 100%;
    }


    .carousel,
    .carousel-item,
    .active {
        height: 100%;
    }

    .carousel-inner {
        height: 100%;
    }


    .flex-center {
        color: #fff;
    }

    @media (min-width: 776px) {
        .carousel .view ul li {
            display: inline;
        }
        .carousel .view .full-bg-img ul li .flex-item {
            margin-bottom: 1.5rem;
        }
    }
    
    .bgimg-1, .bgimg-2, .bgimg-3 {
      position: relative;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

  }
  .bgimg-1 {
      background-image: url("assets/img/parallax1.jpg");
      min-height: 100%;
  }

  .bgimg-2 {
      background-image: url("assets/img/p2.jpg");
      min-height: 300px;
  }

  .bgimg-3 {
      background-image: url("assets/img/p3.jpg");
      min-height: 400px;
  }

  .caption {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      text-align: center;
      color: #000;
  }

  .caption span.border {
      background-color: #111;
      color: #fff;
      padding: 18px;
      font-size: 25px;
      letter-spacing: 10px;
  }

  h3 {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
  }

  
  @media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

.right{
    float:right !important;
}

.section-title{
    font-size: 2rem;
    color: #9e9e9e;
    font-weight: 300;
    text-align: center;
    padding: 25px;
}

.section-content{
    text-align: justify;
    padding-bottom: 20px;
    color: #212121;
}


.center{
    text-align: center;
}

.contact-form label {
    font-size: 1.2rem;
    font-weight: 500;
}

.contact-form input[type="text"], textarea {
    width: 90%;
    border: 1px solid #4195fc;
    border-radius: 3px;
    box-shadow: 0px 0px 0px 1px #4195fc;
    color: #fff;
    font-size: 1.11rem;
    padding: 2px;
}

.contact-form .row{
    margin-top: 10px;
}

.contact-form textarea{
    height: 150px;
    font-size: 1.1rem;
}


.btn-floating{
    z-index: 1;
    overflow: hidden;
    height: 36px;
    width: 36px;
    border-radius: 50%;
    line-height: 2.5;
    font-size: 0.9rem;
    margin: 10px;
    cursor: pointer;
    vertical-align: middle;
    box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15);
}

.btn-floating i{
    text-align: center;
    color: #fff;
}

.btn-fb {
    background-color: #3B5998;
}

.btn-tw {
    background-color: #55ACEE;
}

.btn-gplus {
    background-color: #DD4B39;
}

.btn-li {
    background-color: #0082CA;
}

.btn-ins {
    background-color: #2E5E86;
}

#return-to-top{
    position: fixed;
    bottom: 20px;
    right: 20px;
    background: rgba(0, 0, 0, 0.7);
    width: 50px;
    height: 50px;
    display: block;
    border-radius: 50%;
    display: none;
    z-index: 9999;
    -webkit-transition: all 0.3s linear;
    -moz-transition: all 0.3s ease;
    -ms-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
}
#return-to-top i{
    z-index: 999;
    color: #fff;
    margin: 0;
    position: relative;
    left: 15px;
    top: 6px;
    font-size: 2rem;
    text-align: center;
    -webkit-transition: all 0.3 ease;
    -moz-transition: all 0.3 ease;
    -ms-transition: all 0.3 ease;
    -o-transition: all 0.3 ease;
    transition: all 0.3 ease;
}

#return-to-top:hover{
    box-shadow: inset 0px 0px 6px 6px #000;
    transition: all 0.6s ease;
    /*font-size: 25px;*/
}

#return-top-top i:hover{
    color: #fff;
    font-size: 5px !important;
}

.floating-menu{
    position: fixed;
    background: none;
    color: #fff;
    z-index: 999;
    top: 200px;
}

.floating-menu ul{
    list-style-type: none;
    margin-left: 77em;
}

.menu-item{
    text-align: center;
}

.menu-item i{
    font-size: 1rem;
}

.center-img-wja {
    display: inline-block;
    margin: auto;
    padding: 10px;
}

.mart45{
    margin-top: 45px;
}

#about-us li{
    margin-left: -1em;
}

#about-us ul{
    margin-top: -1.5em;
}

.card {
    position: relative;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
}

.card .card-data {
    background-color: #212121;
    color: #fff;
    text-align: center;
    height: auto;
    padding: 10px;
}
.card .card-data ul li, .card .card-review ul li {
    display: inline;
}
.card .card-data ul a {
    color: #fff;
}
.card .card-data ul {
    margin-bottom: 0;
    font-size: .9rem;
}

.card .btn-action {
    margin: -28px 20px -23px auto;
    background-color: #212121;
    height: 53px;
    width: 53px;
    line-height: 2.5;
    text-align: center;
}

.card-data li{
    margin-left: -5em;
}
.card {
    margin-right: 28px;
    width: 20rem;
}

iframe{
    width: 100%;
    height: 100%;
}

.carousel .carousel-control-prev-icon, .carousel .carousel-control-next-icon{
    display:none;
}

.controls-bottom{
    position: absolute;
    width: 100%;
    top: 3em;
    margin-left: 2px;
}

.testimonial p{
    margin-top: 2em;
}

.testimonial p i{
    font-size: 1.7em;
    padding: 10px;
}

.comment{
    font-size: 1.3rem;

}
.testimonial h4, .testimonial h6{
    font-weight: 500;
}




body, html {
    height: 100%;
    line-height: 1.8;
}

.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("assets/img/original.jpg");
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}


.link:hover{
    color: #fff !important;
}

.link i{
    animation-name: arrow_animation;
    animation-duration: 3s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
}

@keyframes arrow_animation{
    0%{
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
    }

    50%{
        -webkit-transform: translateY(25px);
        transform: translateY(25px);
    }

    100%{
        transform: translateY(0px);
    }
}
</style>

</head>

<body id="index">
    <?php include('modules/header.php');?>

    <!-- Header with full-height image -->
    <a href="#index" id="return-to-top" class="menu-link"><i class="fa fa-angle-up"></i></a>


    <div class="carousel-inner" role="listbox">

        <!-- First slide -->
        <div class="carousel-item active view hm-black-light" style="background-image: url('assets/img/original.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Caption -->
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeInUp col-md-12">
                    <li>
                        <h1 class="h1-responsive flex-item font-bold">Welcome to SAKEC ACM</h1>
                        <li>
                            <h4>Innovation begins here</h4>
                        </li>
                        <li><br /><br />
                            <a href="#about" class="menu-link link"><i class="fa fa-angle-down" style="font-size: 5rem; color:white"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="w3-container" style="padding:128px 16px" id="about">
          <h3 class="w3-center">Our Upcoming Events</h3>
          <div class="w3-row-padding w3-center" style="margin-top:64px; text-align: justify">
                  <div class="w3-half">
                      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                      <p class="w3-large">Python</p>
                      <p>It is a three day Python workshop where we will take you from beginner to an expert in python.We will be highlighting all the OOP concepts, funcions, Graphic User Interface and Web Devlopment.<br><br />
                          <span style="font-weight: 600 !important;">Date:- to be announced soon...</span></p>
                      </div>
                      </div>
                      <br><br>
                      <center><h4><a href=<?php echo $dir . "events.php"; ?>>Click here to register for events.</a></h4></center>
                  </div>

                  <div class="bgimg-2">
                      <div class="caption">
                        <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
                    </div>
                </div>

                    <!-- <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;" id="wja">
                      <h5 style="text-align:center;" class="section-title">What people say about SAKEC ACM</h3>
                          <section class="section text-center pb-4">
                            <div class="row">
                                <div id="multi-item-example" class="carousel testimonial-carousel slide carousel-multi-item wow fadeIn" data-ride="carousel">

                                    <div class="controls-bottom">
                                        <a class="btn-floating light-blue darken-4 float-left" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                        <a class="btn-floating light-blue darken-4 float-right" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
                                    </div>
                                    <div class="carousel-inner" role="listbox" style="">
                                        <div class="carousel-item active">
                                            <div class="col-md-12">
                                                <div class="testimonial">
                                                    <p><span class="comment"><sup><i class="fa fa-quote-left"></i></sup>Serving as a professional network for individuals who are involved with the science and technology of computing.<sup><i class="fa fa-quote-right"></i></sup></span></p>
                                                    <br />
                                                    <h4>Prof. Swati Nadkarni</h4>
                                                    <h6 class="blue-text font-bold">HOD I.T DEPARTMENT</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col-md-12">
                                                <div class="testimonial">
                                                    <p><span class="comment"><sup><i class="fa fa-quote-left"></i></sup> Serving as a professional network for individuals who are involved with the science and technology of computing.<sup><i class="fa fa-quote-right"></i></sup></span></p>
                                                    <br />
                                                    <h4>Ms. Smita Bansod</h4>
                                                    <h6 class="blue-text font-bold">FACULTY</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="col-md-12">
                                                <div class="testimonial">
                                                    <p><span class="comment"><sup><i class="fa fa-quote-left"></i></sup> Serving as a professional network for individuals who are involved with the science and technology of computing.<sup><i class="fa fa-quote-right"></i></sup></span></p>
                                                    <br />
                                                    <h4>Mst. Nisarg Shah</h4>
                                                    <h6 class="blue-text font-bold">CHAIRPERSON OF ACM SAKEC</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                           <div class="col-md-12">
                                            <div class="testimonial">
                                                <p><span class="comment"><sup><i class="fa fa-quote-left"></i></sup> Serving as a professional network for individuals who are involved with the science and technology of computing.<sup><i class="fa fa-quote-right"></i></sup></span></p>
                                                <br />
                                                <h4>Mr.Vaibhav Vasani</h4>
                                                <h6 class="blue-text font-bold">FACULTY</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="bgimg-3">
                  <div class="caption">
                    <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
                </div> -->
            </div>
            <footer class="page-footer center-on-small-only" style="background: #ffffff; margin-top: 0px" id="contact"><br />
                <p class="section-title ">Contact SAKEC ACM Student Chapter</p>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-6" style="height: 15rem;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.3507087725447!2d72.90939421490079!3d19.048311987103737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c5f39a7d77d1%3A0x9ebbdeaea9ec24ae!2sShah+and+Anchor+Kutchhi+Engineering+College!5e0!3m2!1sen!2sin!4v1502346917553" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                        <hr class="hidden-md-up">
                        <div class="col-sm-12 col-md-12 col-lg-6 contact-form" style="padding-left: 140px; color: #000"> <br>
                            <div class="row">
                                <i class="fa fa-map-marker" aria-hidden="true" style="padding-top: 3px;"></i>&nbsp; <address style="width: 200px;">Shah And Anchor Kutchhi Engineering College <br>
                                    W.T.Patil Marg, Chembur<br>
                                Mumbai - 400 088.</address>
                            </div> <br>
                            <div class="row" style="margin-top: 0px;">
                                <i class="fa fa-envelope" aria-hidden="true" style="padding-top: 3px;"></i>&nbsp; acm@sakec.ac.in 
                            </div> <br>
                            <div class="row" style="margin-top: 0px;">
                                <i class="fa fa-phone" aria-hidden="true" style="padding-top: 3px;"></i>&nbsp; 022-25580854 
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <div class="row">

                    </div> 
                </div>
                <hr class="hidden-md-up">
            </div>
        </div>
        <div class="text-center mb-3" style="margin-top:3em">
            <a class="btn-floating btn-small btn-fb" href="http://www.facebook.com"><i class="fa fa-facebook"> </i></a>
            <a class="btn-floating btn-small btn-ins"><i class="fa fa-instagram"> </i></a>
        </div>
    </footer>
    <?php include('modules/footer.php');?>
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/header-footer.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){

            $('.menu-link').click(function(e){
                e.preventDefault();
                var goto = $(this).attr("href");
                console.log(goto);
                $('html, body').animate({
                    scrollTop: (goto == '#index'? 0: $(goto).offset().top-88)
                }, 1500);
            });

            $('#clear-msg').click(function(){
                $('textarea').val("");
            });                    
        });

        $(window).scroll(function(){
            var scroll_pos = $(this).scrollTop();
            var start_from = $('#about').offset().top - 300;

            (scroll_pos > start_from)? $('#return-to-top').fadeIn(200): $('#return-to-top').fadeOut(200);
        });
    </script>
</body>
</html>