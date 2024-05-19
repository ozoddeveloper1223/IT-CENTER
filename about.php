<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>

         <div class="content">
            <h3>Nega bizni tanlaysiz?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque nobis distinctio, nisi consequatur ad sequi, rem odit fugiat assumenda eligendi iure aut sunt ratione, tempore porro expedita quisquam.</p>
            <a href="courses.php" class="inline-btn">Bizning kurslar</a>
         </div>

      </div>

      <div class="box-container">

         <div class="box">
            <i class="fas fa-graduation-cap"></i>
            <div>
               <h3>+1k</h3>
               <span>Onlayn kurslar</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-user-graduate"></i>
            <div>
               <h3>+25k</h3>
               <span>Talabalar</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-chalkboard-user"></i>
            <div>
               <h3>+5k</h3>
               <span>Tajribali usztozlar</span>
            </div>
         </div>

         <div class="box">
            <i class="fas fa-briefcase"></i>
            <div>
               <h3>100%</h3>
               <span>Ishga joylashish</span>
            </div>
         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- reviews section starts  -->

   <section class="reviews">

      <h1 class="heading">Talabalar sharhlari</h1>

      <div class="box-container">

         <div class="box">
            <p>Hammaga salom men frontend UI/UX dizan veb dasturchiman buyerda menga kerakli bepul kurslar joylangan uyda bazi holda yodimdan chiqibqolgan narsalarni shu sayt menga katta yordam bermoqda barchangizga raxmat</p>
            <div class="user">
               <img src="images/01.jpg" alt="">
               <div>
                  <h3>Maxliyo</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Assalamu aleykum ustozlar hammangiga raxmat darslaringizni qiziqib qunt bilan ko'rib o'rganyapman</p>
            <div class="user">
               <img src="images/07.jpg" alt="">
               <div>
                  <h3>Akmal</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Meni 22-yoshman bu sayt orqali juda ko'p foydali ma'lumotlar oldim sizlarga ham ko'rishni tavfsiya qilaman. </p>
            <div class="user">
               <img src="images/11.jpg" alt="">
               <div>
                  <h3>Abdurahim</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Hello, I'm studying English language course. The courses on the website are designed in a useful and understandable way. My name is Shoxsanam, I am 17 years old, I study at school No. 142, Uchtepa district, Tashkent city.</p>
            <div class="user">
               <img src="images/04.jpg" alt="">
               <div>
                  <h3>Shoxsanam</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Ajoyib hammaga omad, yangi kurslar kutib qolamiz</p>
            <div class="user">
               <img src="images/08.jpg" alt="">
               <div>
                  <h3>Jaxongir</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

         <div class="box">
            <p>Shu saytni o'ylab topganga raxmat joni sog'bo'lsin men o'g'imga shu sayt orqali Koreys tilini o'rgatyapman o'g'lim 11 yosh kursga yuborishga sharoitimiz to'g'ri kelmaganligi sababli shu vebsayt orqali ikkalamiz onlayn o'rganyapmiz</p>
            <div class="user">
               <img src="images/06.jpg" alt="">
               <div>
                  <h3>Umida</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
         </div>

      </div>

   </section>

   <!-- reviews section ends -->










   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>