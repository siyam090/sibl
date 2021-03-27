<!DOCTYPE html>
<!-- Created By MD SAYMUM ISLAM SIYAM - www.siwebbd.tk -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIBL BONPARA OUTLET</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" 
  integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
   crossorigin="anonymous" />
   <link rel="stylesheet" href="css/footer.css">
   <link rel="stylesheet" href="css/img.css">
   
</head>
<body>
    <?php include 'nav.php' ?>

  <div class="row">
    <img src="image/sibl.png" alt="" style="width: 100%;">
   
    <div class="sibl-crd">
    <p>এস আই বি এল কার্ড সেবাসমূহ </p>
</div>
    <div class="new-card">
      
    

   <?php include 'card/slide.php' ?>

   </div>
    
    <div class="img-gallery">
      <p>SIBL Bonpara Outlate </p>
    </div>

  <div class="content">
    <div class="credit">
      <div class="col">
        <div class="picture">

          <div class="img-slider">
            <div class="slide active">
              <img src="gallery/img 1.JPG" alt="" width="">
              
            </div>
            <div class="slide">
              <img src="gallery/2.JPG" alt="">
             
            </div>
            <div class="slide">
              <img src="gallery/3.JPG" alt="">
              
            </div>
            <div class="slide">
              <img src="gallery/4.JPG" alt="">
              
            </div>
            <div class="slide">
              <img src="gallery/5.JPG" alt="">
             
            </div>
            <div class="navigation">
              <div class="btn active"></div>
              <div class="btn"></div>
              <div class="btn"></div>
              
            </div>
          </div>
            
      
          <script type="text/javascript">
          var slides = document.querySelectorAll('.slide');
          var btns = document.querySelectorAll('.btn');
          let currentSlide = 1;
      
          // Javascript for image slider manual navigation
          var manualNav = function(manual){
            slides.forEach((slide) => {
              slide.classList.remove('active');
      
              btns.forEach((btn) => {
                btn.classList.remove('active');
              });
            });
      
            slides[manual].classList.add('active');
            btns[manual].classList.add('active');
          }
      
          btns.forEach((btn, i) => {
            btn.addEventListener("click", () => {
              manualNav(i);
              currentSlide = i;
            });
          });
      
          // Javascript for image slider autoplay navigation
          var repeat = function(activeClass){
            let active = document.getElementsByClassName('active');
            let i = 1;
      
            var repeater = () => {
              setTimeout(function(){
                [...active].forEach((activeSlide) => {
                  activeSlide.classList.remove('active');
                });
      
              slides[i].classList.add('active');
              btns[i].classList.add('active');
              i++;
      
              if(slides.length == i){
                i = 0;
              }
              if(i >= slides.length){
                return;
              }
              repeater();
            }, 10000);
            }
            repeater();
          }
          repeat();
          </script>
        
      </div>
      <div class="view-btn">
       <a href="gallery.php">View More</a>
     </div>
    
    </div>
   
    </div>
    </div>
    
    </div>
   
     
   
    <?php include 'footer.php' ?>

    
    

    
</body>
</html>
