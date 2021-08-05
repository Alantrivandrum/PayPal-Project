<?php
session_start();
include("lib/braintree.php");
include("php/braintree_init.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>BT test tool</title>
      <link rel="stylesheet" href="css/braintree.css" type="text/css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
   <body>
      <script>
        var client_token = "<?php echo($gateway->ClientToken()->generate()); ?>";
      </script>
       <!-- Button -->
    <!-- <div class="container">
        <button class="btn-1">Version 2</button>
        <button class="btn-1">BT GraphQL</button>
        </div> -->


         <!-- side nav1 -->
         <div>
         <div class = "bbbbb" >
            <nav>
            <label for="btn" class="button">Select an API 
            <span class="fas fa-caret-down"></span>
            </label>
            <input type="checkbox" id="btn">
            <ul class="menu">
               <li><a href="#">Home</a></li>
               <li><a href="#">Contact</a></li>
               <li><a href="#">Feedback</a></li>
               <li><a href="#">Contact</a></li>
               <li><a href="#">Feedback</a></li>
            </ul>
            </nav>
        </div>
        <div class = "bbbbb" >
            <nav>
            <label for="btn" class="button">Testing 
                <span class="fas fa-caret-down"></span>
                </label>
                <input type="checkbox" id="btn">
                <ul class="menu">
                   <li><a href="#">Home</a></li>
                   <li><a href="#">Contact</a></li>
                   <li><a href="#">Feedback</a></li>
                   <li><a href="#">Contact</a></li>
                   <li><a href="#">Feedback</a></li>
                </ul>
         </nav>
         </div>
        </div>  
</div>

      <!-- This code used to rotate drop icon(-180deg).. -->
      <script>
         var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
      </script>




   </body>
</html>