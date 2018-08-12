<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>SAKEC ACM Registration</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/timeline.css"> <!-- Resource style -->
    <link rel="stylesheet" href="../assets/css/header_footer.css"> <!-- Resource style header-footer css -->
    <script src="../assets/js/modernizr.js"></script> <!-- Modernizr -->

    <style>
    body{
        /*display: inline-block;*/
    }

    .home{
        height: 100vh;
        width: auto;
        text-align: center;
        position: relative;
    }

    .home span{
        position: relative;
        top: 30%;            
    }

    h2{
        font-size: larger !important;
    }

    .btn{
        background: #33b5e5;
        text-align: center;
        font-size: 1rem;
    }

    .btn-floating{
        border-radius: 50%;
    }

    .btn-large {
        height: 54px !important;
        line-height: 54px !important;
    }

    .btn-floating.btn-large {
        width: 56px !important;
        height: 56px !important;
    }

    .right{
        float: right;
    }

    .left{
        float: left;
    }


    .backstretch{
        left: 0;
        top: 0;
        overflow: hidden;
        margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        z-index: -9999;
        position: fixed;

        background: url('../assets/img/regbg.jpg') no-repeat;
        background-size: cover;
        filter: brightness(80%) blur(2px);
    }

    .backstretch img{
        height: 100%;
        width: 100%;
    }

    @media (max-width: 767px){
        .box{
            /*width: 100vh;*/
        }
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


    a:hover{
        color: inherit !important;
    }
</style>

</head>

<body>
    <?php include('header.php');?>

    <section class="container home white-text">
        <span class="" style="
        font-size: 2rem;
        font-weight: 400;
        -webkit-font-smoothing: antialiased;
        font-family: 'Raleway', sans-serif;
        "><br />Steps to join SAKEC ACM Student Chapter</span><br />
        <span>
             <a href="#reg-steps" class="link"><i class="fa fa-angle-down" aria-hidden="true" style="font-size: 6rem"></i></a>
        </span>

    </section>

    <div class="container box" id="reg-steps">
        <section id="registration" class="container">
            <div class="section-content">
                <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img blue">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Visit india.acm.org</h2>
                            <p>Visit the website <a href="http://india.acm.org/" target="_blank">india.acm.org</a> in order to become member of ACM SAKEC.</p>
                            <span class="cd-date">#Step 1</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img red">
                            <!-- <img src="../vt/img/cd-icon-movie.svg" alt="Movie"> -->
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Open Student Registration form:</h2>
                            <p>On homepage of the india.acm.org click on Membership tab and then scroll a bit down and click on <br /><code>Student Registration Link</code> <br />Now Relax let the form load!!!</p>
                            <span class="cd-date">#Step 2</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img yellow">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Form Filling</h2>
                            <p>Fill the form properly.<br />
                                <b style="font-weight: 500;">NOTE: </b>It is mandatory to select the student of Computer Science.<br />
                            After filling the form click on the contiue button.</p>
                            <span class="cd-date">#Step 3</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img blue">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Time to Pay</h2>
                            <p>Complete the payment procedure. You can do the payment in Debit, Credit card or even via Net Banking. Yearly Rate: <b>900 INR plus 162 INR India Service Tax.</b> The total reaches to <b>1,062 INR</b></p>
                            <span class="cd-date">#Step 4</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img green">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>WOOHHHHHH!! TRANSACTION FAILED !!! WHATS THIS NOW???????</h2>
                            <p>As soon as you'll do the payment the amount would get debited from your account but still it will be shown "Transaction Failed". Don't get panik your payment has been done you will recieve an email from ACM within 2 days containing all your memebership details.</p>
                            <span class="cd-date">#Step 5</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img red">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Chill Now!!</h2>
                            <p>Wait for the email</p>
                            <span class="cd-date">#Step 6</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img blue">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Contact</h2>
                            <p>Contact any of the committee memebers.</p>
                            <span class="cd-date">#Step 7</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block">
                        <div class="cd-timeline-img grey">
                            <i class="fa fa-clone"></i>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <h2>Start Working!</h2>
                            <p>Welcome to ACM</p>
                            <span class="cd-date">#Step 8</span>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                </section> <!-- cd-timeline -->
            </div>
        </section>
    </div>



    <div class="backstretch">
        
    </div>
    <?php include('footer.php');?>
    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
    <script src="../assets/js/timeline_init.js"></script> <!-- Resource jQuery -->


    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="../assets/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../assets/js/mdb.min.js"></script>

    <script src="../assets/js/header-footer.js"></script>

    <script>
        new WOW().init();

    </script>

     <script>
            $('.link').click(function(e){
                e.preventDefault();
                var goto = $(this).attr("href");
                console.log($(goto).offset().top);
                $('html, body').animate({
                    
                    scrollTop: (goto == '#index'? 0: $(goto).offset().top-200)
                }, 1500);
            });
        </script>

</body>
</html>