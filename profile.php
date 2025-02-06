<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
<body>
   
<!-- header section starts  -->

<section class="header"><img src="images/immm.png" width="120" height="60" alt="JobMate Logo">

   <a href="home.php" class="logo">RetinaAI.</a>
  
   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>Profiles</h1>
</div>


<!-- packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title">  </h1>

   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/pic-1.png" alt="">
         </div>
         <div class="content">
            <h3>John Doe</h3>
  <div class="rating" onclick="
    let stars = this.querySelectorAll('span');
    stars.forEach((star, index) => {
        star.onclick = () => {
            stars.forEach((s, i) => s.textContent = i <= index ? '★' : '☆');
        };
    });
">
    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
</div>
            <p>Having 10 years of experience and highly rated personality .</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      

      <div class="box">
         <div class="image">
            <img src="images/pic-2.png" alt="">
         </div>
         <div class="content">
            <h3>Gayatri</h3>
  <div class="rating" onclick="
    let stars = this.querySelectorAll('span');
    stars.forEach((star, index) => {
        star.onclick = () => {
            stars.forEach((s, i) => s.textContent = i <= index ? '★' : '☆');
        };
    });
">
    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
</div>
            <p>Having 5 years of experience and highly rated personality.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/pic-3.png" alt="">
         </div>
         <div class="content">
            <h3>Abhishek</h3>
  <div class="rating" onclick="
    let stars = this.querySelectorAll('span');
    stars.forEach((star, index) => {
        star.onclick = () => {
            stars.forEach((s, i) => s.textContent = i <= index ? '★' : '☆');
        };
    });
">
    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
</div>
            <p>Having 10 years of experience and highly rated personality.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

     

   </div><br><br>
   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/pic-4.png" alt="">
         </div>
         <div class="content">
            <h3>Vaibhavi</h3>
  <div class="rating" onclick="
    let stars = this.querySelectorAll('span');
    stars.forEach((star, index) => {
        star.onclick = () => {
            stars.forEach((s, i) => s.textContent = i <= index ? '★' : '☆');
        };
    });
">
    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
</div>
            <p>aving 3 years of experience and highly rated personality.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/pic-5.png" alt="">
         </div>
         <div class="content">
            <h3>Varun</h3>
  <div class="rating" onclick="
    let stars = this.querySelectorAll('span');
    stars.forEach((star, index) => {
        star.onclick = () => {
            stars.forEach((s, i) => s.textContent = i <= index ? '★' : '☆');
        };
    });
">
    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
</div>
            <p>aving 1 years of experience and less rated personality</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/pic-6.png" alt="">
         </div>
         <div class="content">
            <h3>Tarini</h3>
	    <div class="rating" onclick="
    let stars = this.querySelectorAll('span');
    stars.forEach((star, index) => {
        star.onclick = () => {
            stars.forEach((s, i) => s.textContent = i <= index ? '★' : '☆');
        };
    });
">
    <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
</div>

            <p>aving 6 years of experience and highly rated personality.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div><br><br>
   

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> sector</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-9380856059 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-678967899 </a>
         <a href="#"> <i class="fas fa-envelope"></i> jobmatehelp@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Hassan, India - 573201 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>jobmate</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>