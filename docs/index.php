<!DOCTYPE html>
<html lang="en">

<head>
   <title>Home | GWS</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Allura&family=Comfortaa&family=Montserrat:ital,wght@0,300;0,400;1,200;1,300&display=swap"
      rel="stylesheet">
   <link rel="icon" href="images/favicon.ico" type="image/x-icon">
   <link rel="stylesheet" href="./css/carousel1.css">
   <link rel="stylesheet" href="./css/carousel2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
   <!-- Owl Carousel -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

   <!-- Custom Style Sheet -->
   <link rel="stylesheet" href="./style.css">
</head>

<body>

   </head>
   <?php include 'header.php';?>


   <div class="owl-carousel owl-theme">
      <div class="slide-p slide-1">
         <div class="slide-content">
            <p>STEP INTO A WORLD OF </p>
            <h1> Tranquility</h1>
            <p> LEAVING THE NOISE OF THE WORLD BEHIND...</p>

            <!-- <button>Subscribe</button> -->
         </div>
      </div>
      <div class="slide-p slide-2">
         <div class="slide-content">

            <p>RELAX AND CONNECT BACK TO THE</p>
            <h1>Purity,</h1>
            <p>OF YOUR SOUL</p>

            <!-- <button>Comment</button> -->
         </div>
      </div>
      <div class="slide-p slide-3">
         <div class="slide-content">
            <p>REDISCOVER THE </p>
            <h1>Elegance </h1>
            <p>AND BEAUTY INSIDE AND OUTSIDE OF YOU</p>
            <!-- <button>Like & Share</button> -->
         </div>
      </div>
      <div class="slide-p slide-4">
         <div class="slide-content">
            <p>SET FREE/UNLOCK THE REAL YOU AND EXPERIENCE</p>
            <h1>Bliss </h1>
            <p>AND BEAUTY INSIDE AND OUTSIDE OF YOU</p>
            <!-- <button>Like & Share</button> -->
         </div>
      </div>

   </div>

   <!-- Jquery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <!-- Owl Carousel -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
   <!-- Custom Javascript -->
   <script>
      $(document).ready(function () {
         $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplaySpeed: 1000,
            smartSpeed: 1500,
            autoplayHoverPause: true
         });
      });
   </script>



   <!-- p-slider -->
   <!--  -->

   <!-- <section class="test-slider"> -->
   <!-- <div class="container-fluid"> -->
   <!-- slider  start -->
   <!-- <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/"> -->
   <!-- <div id="captioned-gallery">
         <div class="slider">
            <div class="slide-container">
               <img src="./img/Girl.jpg" alt>
               <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                  pariatur sequi aut
                  ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                  mollitia enim libero! Quia!</p>
            </div>
            <div class="slide-container">
               <img src="img/Lotus.jpg" alt>
               <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                  pariatur sequi aut
                  ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                  mollitia enim libero! Quia!</p>
            </div>
            <div class="slide-container">
               <img src="img/Ripple.jpg" alt>
               <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                  pariatur sequi aut
                  ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                  mollitia enim libero! Quia!</p>
            </div>
            <div class="slide-container">
               <img src="img/Swan.jpg" alt>
               <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                  pariatur sequi aut
                  ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                  mollitia enim libero! Quia!</p>
            </div>
            <div class="slide-container">
               <img src="img/slider-1.jpg" alt>
               <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                  pariatur sequi aut
                  ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                  mollitia enim libero! Quia!</p>
               <p class="slider-text">

               </p>
            </div>
         </div>
      </div> -->
   <!--  slider end-->
   <!-- </div> -->
   <!-- </section> -->

   <section>
      <div class="container-fluid" id="what-set-us">
         <div class="row light-pink-bg">
            <div class=" col-7">
               <div class="text">
                  <h3 class="service-heading">
                     What Sets Us Apart?
                  </h3>
                  <p>
                     Gandharva Studio is proud to be a name synonymous with highly sought after and exclusive, one of
                     kind
                     wellness offerings. Gandharva extends a variety of services to suit all of your essential beauty
                     needs. Soak in the relaxing ambience complemented by our up to date modern facilities and well
                     trained
                     and experienced beauty team and wellness consultants.
                  </p>
               </div>
            </div>
            <div class="col-5 image-70">
               <img src="./img/What Sets Us Apart.png" alt="" class="image-70">
            </div>
         </div>
      </div>
   </section>
   <!-- <div class="section-divider"> -->
   <!-- <div class="or or--y" aria-role="presentation">Or</div> -->
   <!-- <div class="or or--x" aria-role="presentation">Our Splendid Six Services</div> -->
   <!-- </div> -->
   <section>
      <div class="container-fluid not-light-pink-bg">
         <div class="row">
            <!-- <div class="col-5 image-70">
            <img src="./img/placeholder-9.jpg" alt="">
         </div> -->
            <div class=" col-12">
               <div class="text">
                  <h3 class="service-heading">
                     Our Splendid Six Services </h3>
                  <p>

                  </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-4 class01 ">
               <img src="./img/icons/saloon.svg" alt="" class="service-icon">
               <h5>
                  Salon Offerings
               </h5>
               <p>
                  A visit to the salon is a must for all of us. We at Gandharva Studio make this necessity a memorable
                  experience. We are proud to extend a variety of services to suit all of your essential pampering
                  needs. Walk in for a simple threading session or opt for a luxurious Rose Quartz Facial. Get your
                  makeup done for a night out with friends or look like a queen on your wedding day.
               </p>
            </div>
            <div class="col-4 class01 left-right-border" id="left-right-border">
               <img src="./img/icons/laser-reduction.svg" alt="" class="service-icon">
               <h5>
                  Laser Reductions
               </h5>
               <p>
                  A gift of time from us to you, to spend your precious time on things that truly matter to you. We at
                  Gandharva, offer the best technology for laser hair reduction for both men and women to help you deal
                  with and reduce your excess or unwanted hair. Popular areas treated every day at our clinics include:
                  face | underarms arms | beard shaping | back | shoulders | chest | bikini / brazilian | legs |full
                  body
               </p>
            </div>
            <div class="col-4 class01 ">
               <img src="./img/icons/hemp.svg" alt="" class="service-icon">
               <h5>
                  Hemp Healing
               </h5>
               <p>
                  Gandharva Studio is a pioneer to bring to you this very unique way of healing. Hemp is not only a
                  super food but also a great source of anti-inflammatory compounds, such as antioxidants, fatty acids
                  that help reduce symptom
               </p>
            </div>
            <div class="col-4 class01 top-border">
               <img src="./img/icons/skin-care.svg" alt="" class="service-icon">
               <h5>
                  The Holistic Skin Care Specials
               </h5>
               <p>
                  Gandharva looks at beauty and skin care from all aspects/ angles. We go back to mother nature’s
                  treasure trove of beauty ingredients, to bring to you these natural and holistic gems of treatments.
               </p>
               <ol>
                  <li> Rose Quartz Facial Therapy</li>
                  <li> Buccal Massage Facial</li>
                  <li> HydraSPA +Facial (PRO HYDRA)</li>
                  <li> Gua- Sha Facial</li>
               </ol>
            </div>
            <div class="col-4 class01 top-border left-right-border">
               <img src="./img/icons/ayurveda.svg" alt="" class="service-icon">
               <h5>
                  The Heritage Offerings from Ayurveda
               </h5>
               <p>
                  Ayurveda is not only one of the most ancient sciences but, it’s relevant even today. Being Nature at
                  its foundation Ayurveda makes us realize that all the solutions to our mind and body problems rest
                  with nature. We welcome you to explore this very ancient path to beauty and vitality. Find the key to
                  balance, reset and refresh your mind body and soul.
               </p>
            </div>
            <div class="col-4 class01 top-border ">
               <img src="./img/icons/gossip.svg" alt="" class="service-icon">
               <h5>
                  Beyond The Boundaries <br>
                  (Sound Healing)
               </h5>
               <a href="./sound-healing.php">
                  <p>
                     For hundreds of years, people from different cultures have utilised sound therapy to improve their
                     physical, mental, and spiritual health. The parasympathetic nervous system is rejuvenated by the
                     complex, profoundly penetrating sound waves produced by the antique gong and Tibetan bowls. Deep
                     relaxation and healing occur as a result of the listener being coaxed into an instantaneous theta
                     stage of meditative REM.
                  </p>
               </a>
            </div>
         </div>
      </div>
   </section>
   <!-- <section>
      <div class="container">
         <h3 class="service-heading" id="left-aligned">
            Speak Easy </h3>
      </div>
   </section> -->
   <!-- <section class="test-slider">

      <div class="container">
         <div id="captioned-gallery-review">
            <div class="slider">
               <div class="slide-container">
                  <img src="./img/reviews/review1.jpeg" alt>
                  <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                     pariatur sequi aut
                     ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                     mollitia enim libero! Quia!</p>
               </div>
               <div class="slide-container">
                  <img src="./img/reviews/review2.jpeg" alt>
                  <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                     pariatur sequi aut
                     ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                     mollitia enim libero! Quia!</p>
               </div>
               <div class="slide-container">
                  <img src="./img/reviews/review3.jpeg" alt>
                  <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                     pariatur sequi aut
                     ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                     mollitia enim libero! Quia!</p>
               </div>
               <div class="slide-container">
                  <img src="./img/reviews/review4.jpeg" alt>
                  <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                     pariatur sequi aut
                     ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                     mollitia enim libero! Quia!</p>
               </div>
               <div class="slide-container">
                  <img src="./img/reviews/review5.jpeg" alt>
                  <p class="top-left">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur quam
                     pariatur sequi aut
                     ullam libero ab perferendis, molestias magni delectus quaerat. Maiores beatae quos accusamus culpa,
                     mollitia enim libero! Quia!</p>
                  <p class="slider-text">

                  </p>
               </div>
            </div>
         </div>
      </div>
   </section> -->

   <!-- home section end -->

   <?php include 'footer.php';?>

   <script src="./js/myscript.js"></script>
   <script src="./js/carousel.js"></script>
</body>

</html>