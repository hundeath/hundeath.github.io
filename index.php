
<!-- Adatbázis --- cím , kép href, tartalom

for eachel bekérni
  -->

<!DOCTYPE html>

<?php

$connection = mysqli_connect('localhost', 'root', '', 'blog');
if(!$connection) {
    
    die ("Adatbázis hiba") . mysqli_error($connection);
    
}

$query = "SELECT * FROM posts";

$result = mysqli_query($connection,$query);

if(!$result) {
    
    die ("Query hiba!");
    
}

?>

<html>
    
    <head lang="hu">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Kalium Fitness - Creative Theme for Professionals</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,700,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/menu.js"></script>
        
    </head>
      
    <body>
        <header>
        
           <div class="header-container">
           <a href="#"><img src="assets/img/white-logoo.png" alt="Kalium Fitness"></a>
           
            <nav class="menu">
               <ul class="active">
                <li><a class='headerlink current' href="#">Home</a></li>
                <li><a class='headerlink' href="#">Classes</a></li>
                <li><a class='headerlink' href="#">Blog</a></li>
                <li id="dropdown-btn2" ><a class='headerlink' href="#">Shop</a>
                
                    <ul>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Repülő</a>
                        </li>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Culamander</a>
                        </li>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Tengerimalac</a>
                        </li>
                    </ul>
                </li>
                
                <li id="dropdown-btn"><a class='headerlink' href="#">Pages</a>     

                    <ul>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Membership</a>
                        </li>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Trainers</a>
                        </li>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Contact</a>
                        </li>
                        <li class="drpdwn-lista"><a class="drpdwn-gomb" href="">Coming Soon</a>
                        </li>
                    </ul>
                </li>
                    
                <li><a class='headerlink' href="#">Buy!</a></li>
            </ul>
            
            <a class="toggle-nav" href="#">&#9776;</a>  
                  
            </nav>
            </div>
        </header>
        
        <section class="hero">
            <div class="background-image" style="background-image: url(assets/img/slide1-1.jpg)"></div>
            <div class="header-container">
            <div class="hero-content-area">
            <h2>Run for fun</h2>
            <p>Yet remarkably apparance get him his projection. Diverted <br>endavour bed peculiar men the not desirous.</p>
            <a href="#" class="button">Read More</a>
            </div>
            </div>
        </section>
        
        <section class="classes">
            <div id="container1" class="container">
               <h3>Gym Classes</h3>
               <p>Be part of our awesome community, and transform your body.</p>
                   <ul id="111" class="tabla">
                      
                      <?php
                       $tomb = array();
                       while($records = mysqli_fetch_assoc($result)) {
                           
                           $tomb[] = $records;
                           
                       }
                       
                       foreach($tomb as $key => $value) {
                           
                           if($value['tipus'] == 0) {
                               
                           
                           
                           ?>
                          
                           <li class="keret">
                           <a href="#"><img src="<?php echo $value['src'] ?>" alt=""></a>
                           <div class="text">
                               <a class="keplink" href="#"><?php echo $value['title'] ?></a>
                           </div>
                           <div class="bigtext">
                               <a class="nagykeplink" href="#"><?php echo $value['content'] ?></a>
                           </div>
                       </li>
                           <?php
                           }
                       }
                       
                       ?>
                      
                       
                          
                   </ul>
               <h3 id="blog1" >Our Blog</h3>
               <p id="blog2">Read our blog for science-backed tips, smart workout plans, and the motivation you need to put both of those things into action.</p>
               <div class="blog">
                  
                  <?php
                   
                   foreach($tomb as $key => $value) {
                       
                       if($value['tipus'] ==1 ){
                   
                   ?>
                  
                   <article>
                       <a href="#"><img src="<?php echo $value['src'] ?>" alt=""></a>
                       <div class="article-post">
                           <a href="#"><h1><?php echo $value['title'] ?></h1></a>
                           <p><?php echo $value['content'] ?></p>
                       </div>
                   </article>
                   
                   <?php
                   
                       }
                   }
                           
                   ?>
                
                
               </div>
            </div>
        </section>
        
        <section class="trainers">
            <div class="container">
               <div>
                <h3>Meet our trainers</h3>
                <p>Be part of the awesome community, with the help of our professional trainers, you are one step closer to success.</p>
                </div>
                <ul class="tabla2">
                      
                      
                    <?php
                    
                    foreach($tomb as $key => $value){
                        
                        
                        if($value['tipus'] == 2){
                            
                        
                    
                    ?>
                      
                       <li class="keret2">
                           <img src=" <?php echo $value['src'] ?> " alt="">
                            <div class="text2">
                               <p><?php echo $value['content'] ?></p>
                           </div>
                           <div class="bigtext2">
                               <p><?php echo $value['title'] ?></p>
                           </div>
                       </li>
                       
                    <?php
                    
                        }
                        
                    }
                            
                    ?>
                       
                </ul>
                <div class="supporters">
                    <div class="partners1">
                        <h3>Partners</h3>
                        <p>Who we love working with, and what makes us great.</p>
                    </div>
                    <div class="partners2">
                        <img src="assets/img/partner1.png" alt="">
                        <img src="assets/img/partner2.png" alt="">
                        <img src="assets/img/partner3.png" alt="">
                        <img src="assets/img/partner4.png" alt="">
                        <img src="assets/img/partner5.png" alt="">
                        <img src="assets/img/partner6.png" alt="">
                    </div>
                </div> 
            </div>
        </section>
        
        <footer>
            <div id="container2" class="container">
            <div class="keret3">
                <div class="keret4">
                    <div class="contact">
                       <div class="keret5">
                        <img src="assets/img/white-logoo.png" alt="">
                        <div>
                        <p>Frederik Hendrikstraat 67 hs 1052 HL <br> Amsterdam, 
                        <br> The Netherlands 
                        </p>
                        <a href="">(571) 400-1255 </a>
                        <br>
                        <a href="">info@kaliumtheme.com</a>
                        </div>
                        </div>
                    </div>
                    <div class="work">
                       <div class="tablazat-nev">
                       <p>Working hours</p>
                       </div>
                       <div class="tablazat">
                        <li>
                            <p>Monday - Friday</p>
                            <span>06:00 - 23:00</span>
                        </li>
                        <li>
                            <p>Saturday</p>
                            <span>10:00 - 19:00</span>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <span id="sunday">Closed</span>
                        </li>
                        </div>
                    </div>
                    <div class="insta">
                       <p>Instagram</p>
                       <img class="instagramkep" src="assets/img/instagram.jpg" alt="">
                    </div>
                </div>
                <div class="footer-copy">
                    <p>&copy; Copyright 2018. All Rights Reserved</p>
                    <ul>
                    <li>
                        <a href="#"><i id="facebook" class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i id="twitter" class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i id="instagram" class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i id="google" class="fab fa-google-plus-g"></i></a>
                    </li>
                    <li>
                        <a href="#"><i id="youtube" class="fab fa-youtube"></i></a>
                    </li>
                    </ul>
                </div>
            </div>
            </div>
        </footer>
            
    </body>  
</html>