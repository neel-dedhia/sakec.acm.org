<!DOCTYPE html>
<html>
<head>
<title>SAKEC ACM Gallery</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="../assets/css/mdb.min.css" rel="stylesheet">


    <link href="../assets/css/header_footer.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}

header{
  z-index: 9999;
}
img:hover{
    box-shadow: 8px 8px 5px 0 rgba(0,0,0,.2);
}
.w3-quarter img {
    height: 180px;
    width: 100%;
    padding: 5px;
    
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 100px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
</head>
<body>
<?php include('header.php');?>
<br />
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">
  <h3 align="center">SAKEC ACM Student Chapter Formation</h3>
  <!-- First Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or1.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or2.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or3.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or4.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or5.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or6.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or7.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/or8.JPG" alt="SAKEC ACM Student Chapter Formation" style="width:100%" onclick="return myFunction(this)">
      
    </div>
   
</div>
<br /><br />
    <h3 align="center">ACM Members</h3>
 <!-- Third Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/grp1.JPG" alt="ACM Members" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/grp2.JPG" alt="ACM Members" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/grp3.JPG" alt="ACM Members" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/grp4.JPG" alt="ACM Members" style="width:100%" onclick="return myFunction(this)">
      
    </div>
   
  </div>

  <br /><br />
  <h3 align="center">Python</h3>
  <!-- Fourth Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/py1.JPG" alt="Python" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/py2.JPG" alt="Python" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/py3.JPG" alt="Python" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/py4.JPG" alt="Python" style="width:100%" onclick="return myFunction(this)">
      
    </div>
   
</div>

<br /><br />
<h3 align="center">Cyber H4ck</h3>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/cy1.JPG" alt="Cyber H4ck" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/cy2.JPG" alt="Cyber H4ck" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/cy3.JPG" alt="Cyber H4ck" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/cy4.JPG" alt="Cyber H4ck" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>
<br /><br />

<h3 align="center">Android</h3>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/an1.JPG" alt="Android" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/an2.JPG" alt="Android" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/an3.JPG" alt="Android" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/an4.JPG" alt="Android" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>

<br /><br />

<h3 align="center">PC Assembly</h3>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pc1.JPG" alt="PC Assembly" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pc2.JPG" alt="PC Assembly" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pc3.JPG" alt="PC Assembly" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pc4.JPG" alt="PC Assembly" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>

<br /><br />
<h3 align="center">Trek</h3>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk1.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk2.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk3.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk4.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk5.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk6.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk7.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/trk8.JPG" alt="Trek" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>

<br /><br />

<h3 align="center">IoT</h3>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot1.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot2.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot3.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot4.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>
<div class="w3-row-padding w3-padding-16 w3-center">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot5.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot6.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot7.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/iot8.JPG" alt="IoT" style="width:100%" onclick="return myFunction(this)">
      
    </div>
</div>
<br /><br />
    <h3 align="center">PCRA</h3>
 <!-- Third Photo Grid-->
  <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pcra1.JPG" alt="PCRA" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pcra2.JPG" aalt="PCRA" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pcra3.JPG" alt="PCRA" style="width:100%" onclick="return myFunction(this)">
      
    </div>
    <div class="w3-quarter">
      <img src="../assets/img/gallery/pcra4.JPG" alt="PCRA" style="width:100%" onclick="return myFunction(this)">
      
    </div>
   
  </div>


</div>


  <br /><br />


 
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<!-- End page content -->
</div>

<?php include('footer.php');?>

<script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>

<!-- Bootstrap dropdown -->
<script type="text/javascript" src="../assets/js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../assets/js/mdb.min.js"></script>


<script type="text/javascript" src="../assets/js/header-footer.js"></script>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
// Get the modal
var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");
// Get the image and insert it inside the modal - use its "alt" text as a caption
var captionText = document.getElementById("caption");
//entering image into modal
function myFunction(img){
    var imag=img.src;
    var alter=img.alt;
    modal.style.display = "block";
    modalImg.src =imag;
    captionText.innerHTML = alter;
}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

</body>
</html>
