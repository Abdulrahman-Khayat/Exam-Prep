
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Craete course</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css"><script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include "design.html";?>
    <div
        class="d-flex flex-column content" style="padding-left: 0;">
        <header style="width: 100%;margin-left: 1%;margin-right: 1%;">
            <h1 class="float-left" style="width: auto;height: auto;font-size: 2em;">Course Name</h1>
            <div class="float-right">
                <button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#modalInvite" style="margin-top: 0.5%;"><i class="icon ion-person-add"></i>
            <span>&nbsp; Invite</span></button></div>
        </header>
        <div class="d-flex justify-content-start align-items-start flex-nowrap flex-sm-row flex-md-row flex-lg-row flex-xl-row parent">
            <ul class="nav nav-tabs flex-column" style="width: auto;height: 100%;">
                <li class="nav-item"><a class="nav-link active" href="#">Homepage</a></li>
                <li class="nav-item"><a class="nav-link" href="" onclick="alert('TEST');return false;">Quizzes</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Calender</a></li>
            </ul>
            <main>
                <p>Course descreption</p>
            </main>
        </div>
        </div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- The popup window -->

<div class="modal fade" id="modalInvite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  
  

    <div class="modal-dialog" role="document">
  
  
    <form action="<?php $val = $_GET["id"]; echo "invite.php?id=$val";?>" method="post" >
    
    
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Invite a Friend</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body mx-3">
            
       
  <!-- Course Name -->
          <div class="md-form mb-3">
               <label data-error="wrong" data-success="right" for="price">Enter the invitee Email</label>
                <input type="email" id="email" name="email"class="form-control validate" >
           
          </div>
  
          <!-- SUBMIT -->
        <div class="modal-footer d-flex justify-content-center">
             <button type="button"class="btn btn-primary" style="background-color:red;" data-toggle="modal" data-target="#modalInvite">Cancel</button>
           <button type="submit" class="btn btn-primary">Send</button>
           
        </div>
      </div>
    </div>
    </form>
  </div>
  <script>

$( document ).ready(function() {

  var active = document.getElementsByClassName("active"); 
  console.log(active[0]);
  
   active[0].classList.remove("active"); 

   var target = document.getElementById("course");
   target.classList.add("active");
 
});
              </script>






        
</body>

</html>