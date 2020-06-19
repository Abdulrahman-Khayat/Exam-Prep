<?php session_start(); ?>
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
    
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/sc.js"></script>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include "design.html"; ?>

    <div class="content">
        <h1>Course<button class="btn btn-primary float-right" type="button" data-toggle="modal" data-target="#modalAddCourse">Create Course</button></h1>
        <div class="container parent">
            
          <?php
          include "connect.php";
              $ID = $_SESSION["userID"];

              $sql = "SELECT * FROM user_courses WHERE User_ID = $ID";
              $result = mysqli_query($conn, $sql);
              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                  $courseSQL = "SELECT * FROM courses WHERE Course_ID = $row[Course_ID]";
                  $result1 =  mysqli_query($conn, $courseSQL);
                  if(mysqli_num_rows($result1) > 0){
                    $row1= mysqli_fetch_array($result1);
                    echo '<a class="child elegent" href="';
                    $val = $row["Course_ID"]; 
                    echo "Course-Homepage.php?id=$val";
                    echo '" ">
                      <div>
                          <h2 id="courseName">'.$row1["Course_Code"].'</h2>
                      </div>
                  </a>';
            
                  }
                }
              }
              $conn->close();
          ?>


        </div>
        </div>



<!-- The popup window -->

<div class="modal fade" id="modalAddCourse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  
  

    <div class="modal-dialog" role="document">
  
  
    <form action="createCourse.php" method="post" >
    
    
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold">Create Course</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body mx-3">
            <!-- Department -->
          <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="dept">Department</label>
            <select class="form-control validate" id="dept" name="dept">
            <?php
               
               include "connect.php";

               $sql1 = "SELECT department_Name, department_ID FROM department";
               $result1 = mysqli_query($conn,$sql1);
              
               
               if(mysqli_num_rows($result1) > 0){
                   while($row1 = mysqli_fetch_array($result1)){
                       echo '<option value="'.$row1[department_ID].'">'.$row1[department_Name].'</option>';

                   }
               }
               $conn->close();
            ?>
            </select>
            
        </div>
        <!-- Course Code -->
        <div class="md-form mb-3">
            <label data-error="wrong" data-success="right" for="dept">Course Code</label>
            <select class="form-control validate" id="code" name="code">

             </select>
        </div>
  <!-- Course Name -->
          <div class="md-form mb-3">
               <label data-error="wrong" data-success="right" for="price">Course Name</label>
                <input type="texr" id="cName" name="cName"class="form-control validate" disabled>
           
          </div>
  
    <!-- dESC -->
          <div class="md-form">
              <label data-error="wrong" data-success="right" for="form8">Descreption</label>
            <textarea type="text" id="desc" name="desc" class="md-textarea form-control" rows="4"></textarea>
          
          </div>
  
        </div>
          <!-- SUBMIT -->
        <div class="modal-footer d-flex justify-content-center">
             <button type="button"class="btn btn-primary" style="background-color:red;" data-toggle="modal" data-target="#modalAddCourse">Cancel</button>
           <button type="submit" class="btn btn-primary">Add </button>
           
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