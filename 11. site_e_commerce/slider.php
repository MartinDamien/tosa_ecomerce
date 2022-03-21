<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Page d'accueil</title>
      <link rel="stylesheet">
   </head>

   <style>
      img{
         width: 100%;
         height: auto;
         margin: auto;
      }
      h4{
         text-align: center;
         font-size: 30px;
         color: white
      }
      header{
         background-color: black;
         height: 50px;

      }
   </style>
   <header>
      <h4 class="mb-3">ACCUEIL</h4>
   </header>
   <body>
      <br>
      <div class="container-fluid">
         <div id="myCarousel" class="carousel slide border" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="d-block w-100" src="img1.jpg" alt="img1">
                  <div class="carousel-caption d-none d-sm-block">
           
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="../images/carousel-img-2.jpg" alt="Cat">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Black Cat</h5>
                     <small>
                     A black cat is a domestic cat with black fur that may be a mixed or specific breed
                     </small>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="d-block w-100" src="../images/carousel-img-3.jpg" alt="Lion">
                  <div class="carousel-caption d-none d-sm-block">
                     <h5>Lion</h5>
                     <small>
                     The lion (Panthera leo) is a species in the cat family (Felidae).
                     A muscular, deep-chested cat, it has a short, rounded head,
                     a reduced neck and round ears
                     </small>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   </body>
</html>
