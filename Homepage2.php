
<?php

session_start();
echo "Welcome User" . $_SESSION["username"]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Homepage2.css">
    <link rel="stylesheet" href="CSS/assets/unsemantic-grid-responsive-tablet.css">
    <title>Document</title>
</head>


    <style>
    * {box-sizing: border-box}
    
    /* Set height of body and the document to 100% */
    body, html {
        background-color: g;
      height: 100%;
      margin: 0;
      font-family: Arial;
    }
    
    /* Style tab links */
    .tablink {
      background-color: #555;
      color: white;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      font-size: 17px;
      width: 25%;
    }
    
    .tablink:hover {
      background-color: #777;
    }
    
    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {
      color: blueviolet;
      display: none;
      padding: 100px 20px;
      height: 100%;
    }
    .map {
      background-color: #1abc9c;
    }
    
    #Home {background-color: aqua;
        background-image: url(../);
    
    }
    #Stories {background-image: url(./images/part-of-the-garden-area.jpeg);}
    #Contact {background-image: url(./images/the-saint-patrick-centre.jpeg);}
    #About {background-color: orange;}
    .Footer1{
      background-color: sienna;
      padding: 20px;
      text-align: center;
      margin: 
      
    }
     </style>
    </head>
     

<body>

    <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
    <button class="tablink" onclick="openPage('Stories', this, 'green')" id="defaultOpen">Stories</button>
    <button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
    <button class="tablink" onclick="openPage('About', this, 'orange')">About</button>
    
   
    <div id="Home" class="tabcontent">
      
       <a href="logout.php">LogOut</a>
  
      <div class="header2"> 
        <div class="search">
          <input type="text" placeholder="Search.."> 
          <input type="submit" value="Go">
        </div>
        <h1>WELCOME TO ABERDEEN GALLERY</h1>
        <p>We are part of Aberdeen City Council’s Place: City Growth team and through our collections, buildings, exhibitions and events we strive to make a positive impact on the lives of everyone who lives, works, studies and visits our city. Our collections are recognised by UNESCO and the Scottish Government as nationally and internationally important. The historical records of Aberdeenshire Council are also preserved and managed by the team.   </p>
      </div>
        
        <button class="accordion">Section 1</button>
        <div class="bg-text">
            <style>
              .search input[type=submit] {
                text-align: left;
                float: right;
                display: block;
                margin: 0;
                padding: 15px;
              }

               .search input[type=text] {
    border: 1px solid #ccc;
    text-align: right;
    float: right;
    display: block;
    width: 20%;
    margin: 5;
    padding: 14px;
    height: auto;
    
  }
              .header2 {
                
  padding: 60px;
  text-align: left;
  background: darkslategray;
  color: burlywood;
  font-size: 15px;}
                * {box-sizing: border-box}
                body {font-family: Verdana, sans-serif; margin:0}
                .mySlides {display: none}
                img {vertical-align: middle;}
                
                /* Slideshow container */
                .slideshow-container {
                  max-width: 1000px;
                  position: relative;
                  margin: auto;
                }
                
                /* Next & previous buttons */
                .prev, .next {
                  cursor: pointer;
                  position: absolute;
                  top: 50%;
                  width: auto;
                  padding: 16px;
                  margin-top: -22px;
                  color: white;
                  font-weight: bold;
                  font-size: 18px;
                  transition: 0.6s ease;
                  border-radius: 0 3px 3px 0;
                  user-select: none;
                }
                
                /* Position the "next button" to the right */
                .next {
                  right: 0;
                  border-radius: 3px 0 0 3px;
                }
                
                /* On hover, add a black background color with a little bit see-through */
                .prev:hover, .next:hover {
                  background-color: rgba(0,0,0,0.8);
                }
                
                /* Caption text */
                .text {
                  color: #f2f2f2;
                  font-size: 15px;
                  padding: 8px 12px;
                  position: absolute;
                  bottom: 8px;
                  width: 100%;
                  text-align: center;
                }
                
                /* Number text (1/3 etc) */
                .numbertext {
                  color: #f2f2f2;
                  font-size: 12px;
                  padding: 8px 12px;
                  position: absolute;
                  top: 0;
                }
                
                /* The dots/bullets/indicators */
                .dot {
                  cursor: pointer;
                  height: 15px;
                  width: 15px;
                  margin: 0 2px;
                  background-color: #bbb;
                  border-radius: 50%;
                  display: inline-block;
                  transition: background-color 0.6s ease;
                }
                
                .active, .dot:hover {
                  background-color: #717171;
                }
                
                /* Fading animation */
                .fade {
                  -webkit-animation-name: fade;
                  -webkit-animation-duration: 1.5s;
                  animation-name: fade;
                  animation-duration: 1.5s;
                }
                
                @-webkit-keyframes fade {
                  from {opacity: .4} 
                  to {opacity: 1}
                }
                
                @keyframes fade {
                  from {opacity: .4} 
                  to {opacity: 1}
                }
                
                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                  .prev, .next,.text {font-size: 11px}
                }
                </style>
                </head>
                <body>
                
                <div class="slideshow-container">
                
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="images/Gallery of OMA _ AMO Completes Flexible Permanent Exhibition Space for Stedelijk Museum in Amsterdam  - 5.jpeg" style="width:600px;height:200px">
                  <div class="text">Caption Text</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="images/art collections.jpg" style="width:900px;height:200px">
                  <div class="text">Caption Two</div>
                </div>
                
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="Assests/Images/sf_aberdeenart_gallery_006.jpeg" style="width:900px;height:200px">
                  <div class="text">Caption Three</div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                
                <script>
                var slideIndex = 1;
                showSlides(slideIndex);
                
                function plusSlides(n) {
                  showSlides(slideIndex += n);
                }
                
                function currentSlide(n) {
                  showSlides(slideIndex = n);
                }
                
                function showSlides(n) {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  if (n > slides.length) {slideIndex = 1}    
                  if (n < 1) {slideIndex = slides.length}
                  for (i = 0; i < slides.length; i++) {
                      slides[i].style.display = "none";  
                  }
                  for (i = 0; i < dots.length; i++) {
                      dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                }
                </script>
                
                </body>
          </div>
         














          <button class="accordion">Section 2</button>
          <div class="panel">
          <a target="_blank" href="http://localhost:8888/Quick%20Acesss/Log%20Code/gallery.html">
          <img src="images/100 beste Plakate e_V.jpeg" alt="Cinque Terre" width="600" height="400">
          </a>
          <div class="desc">Check out Collections</div>
          </div>
          
          <button class="accordion">Section 3</button>
          <div class="panel">
          <a target="_blank" href="file:///Applications/MAMP/htdocs/Quick%20Acesss/Log%20Code/gallery.html">
          <img src="images/Angel Wings Wall Decor Oversize Paintings Large White Set 2 _ Etsy.jpeg" alt="Forest" width="600" height="400">
          </a>
          <div class="desc">Add a description of the image here</div>
         </div>
    

         <button class="accordion">Section 4</button>
         <div class="panel">
         <a target="_blank" href="img_lights.jpg">
         <img src="images/Modern Wall Art Pictures Canvas Painting Decoration Golden Butterfly Prints Poster for Living Room Nordic Bedroom Home Decor.jpeg" alt="Northern Lights" width="600" height="400">
         </a>
         <div class="desc">Add a description of the image here</div>
         </div>

         <button class="accordion">UPLOAD YOUR FILE HERE</button>
         <div class="panel">
           <p>Click on the "Choose File" button to upload a file:</p>
 
             <form action="upload.php" method="post" enctype="multipart/form-data">
             <input type="file" id="filename" name="filename">
               <button type="submit" name="upload">upload</button>
             </form>
         </div>


         <section>      
            <div class="map">
                <h3>Locate Us</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d8657.433934067023!2d-2.1025518!3d57.148029!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x67525c35c8ec0625!2sAberdeen%20Art%20Gallery!5e0!3m2!1sen!2suk!4v1646501326155!5m2!1sen!2suk" width="300" height="300" style="border:0;" allowfullscree></iframe>  
            </div>
         </section>
         
            
              <div class="Footer1">
                <footer>
                    <h2>Follow Us</h2> 
                    <ul>                    
                    <li><a href="https://www.facebook.com/pages/Aberdeen-Art-Gallery/110292679022060"><img src="images/1024px-Facebook_Logo_(2019).webp"  width="60" height="50"></a></li> 
                    <li><a href="http://www.twitter.com"><img src="images/twitter.jpg"width="60" height="50"></a></li>
                     <li><a href="http://www.youtube.com"><img src="images/youtube.png" width="60" height="50"></a></li> 
                    </ul> 
                </footer>
              </div>


            
        
        
       
         
        <style>
            .gallery {
  margin: 5px;
  border: 1px solid lime;
  background-color: bisque;
  float: left;
  width: 180px;
}

.gallery:hover {
  border: 1px solid #777;
}

.gallery img {
  background-color: orchid;
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: left;
  background: burlywood;
}

.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  text-align: center;
}
.panel{
  background-color: #777;
}


</style>









        
</div>
   



    <div id="Stories" class="tabcontent">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;
            background-image: url(./images/Gallery\ of\ OMA\ _\ AMO\ Completes\ Flexible\ Permanent\ Exhibition\ Space\ for\ Stedelijk\ Museum\ in\ Amsterdam\ \ -\ 5.jpeg);}
            * {box-sizing: border-box;}
            
            input[type=text], select, textarea {
              width: 100%;
              padding: 12px;
              border: 1px solid ;
              border-radius: 4px;
              box-sizing: border-box;
              margin-top: 6px;
              margin-bottom: 16px;
              resize: horizontal;
            }
            
            input[type=submit] {
              background-color: #04AA6D;
              color: rosybrown;
              padding: 12px 20px;
              border: none;
              border-radius: 4px;
              cursor: pointer;
            }
            
            input[type=submit]:hover {
              background-color: #45a049;
            }
            
            .container {
              border-radius: 5px;
              background-color: mediumpurple;
              padding: 20px;
            }
            .header {
  padding: 60px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}
            </style>
            </head>
            <body>
            
                <div class="header">
                    <h1>SHARE YOUR STORIES</h1>
                    <p>Feel free to share your museum experience and check other peoples comments</p>
                  </div>
            
            <div class="container">
              <form action="insert.php" method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
                <label for="country">Country</label>
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="usa">USA</option>
                </select>
            
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            
                <input type="submit" name="sendit" value="Submit">
              </form>
            </div>
            
          <div class="Footer1">
            <footer>
              <h2>Follow Us</h2> 
              <ul>                    
               <li><a href="http://www.facebook.com"><img src="images/1024px-Facebook_Logo_(2019).webp"  width="60" height="50"></a></li> 
               <li><a href="http://www.twitter.com"><img src="images/twitter.jpg"width="60" height="50"></a></li>
               <li><a href="http://www.youtube.com"><img src="images/youtube.png" width="60" height="50"></a></li> 
              </ul> 
            </footer>
          </div>
            </body>
          </div>






      
    </div>
    
    <div id="Contact" class="tabcontent">

      <div class="header">
        <h1>Share Your Stories</h1>
        <p>My supercool header</p>
      </div>
      <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
          background-position: url(/L);
        }
        
        * {
          box-sizing: border-box;
        }
        
        /* Style inputs */
        input[type=text], select, textarea {
          width: 100%;
          padding: 12px;
          border: 1px solid #ccc;
          margin-top: 6px;
          margin-bottom: 16px;
          resize: vertical;
        }
        
        input[type=submit] {
          background-color: #04AA6D;
          color: white;
          padding: 12px 20px;
          border: none;
          cursor: pointer;
        }
        
        input[type=submit]:hover {
          background-color: #45a049;
        }
        
        /* Style the container/contact section */
        .container {
          border-radius: 5px;
          background-color: darkcyan;
          padding: 10px;
        }
        
        /* Create two columns that float next to eachother */
        .column {
          float: left;
          width: 50%;
          margin-top: 6px;
          padding: 20px;
        }
        
        /* Clear floats after the columns */
        .row:after {
          content: "";
          display: table;
          clear: both;
        }
        
        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
          .column, input[type=submit] {
            width: 100%;
            margin-top: 0;
          }
        }
        </style>
        </head>
        <body>
        
        <h2>Responsive Contact Section</h2>
        <p>Resize the browser window to see the effect.</p>
        
        <div class="container">
          <div style="text-align:center">
            <h2>Contact Us</h2>
            <p>Swing by for a cup of coffee, or leave us a message:</p>
          </div>
          <div class="row">
            <div class="column">
              <img src="images/100 beste Plakate e_V.jpeg" style="width:100%">
            </div>
            <div class="column">
              <form action="contact.php" method="post">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                <label for="country">Country</label>
                <select id="country" name="country">
                  <option value="australia">Australia</option>
                  <option value="canada">Canada</option>
                  <option value="Nigeria">Nigeria</option>
                  <option value="Scotland">Scotland</option>
                  <option value="Germany">Germany</option>
              
                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                <input type="submit" name="sendto" value="Submit">
              </form>
            </div>
          </div>
        </div>
        
        
        <div class="Footer1">
          <footer>
            <h2>Follow Us</h2> 
            <ul>                    
            <li><a href="http://www.facebook.com"><img src="images/1024px-Facebook_Logo_(2019).webp"  width="60" height="50"></a></li> 
            <li><a href="http://www.twitter.com"><img src="images/twitter.jpg"width="60" height="50"></a></li>
             <li><a href="http://www.youtube.com"><img src="images/youtube.png" width="60" height="50"></a></li> 
            </ul>   
          </footer>
        </div>
    
  </div>
    
    <div id="About" class="tabcontent">
      <div class="about-section">
        <h1>About Aberdeen Art Gallery</h1>
        <p>Aberdeen Art Gallery is the main visual arts exhibition space in the city of Aberdeen, Scotland.
           It was founded in 1884, in a building designed by Alexander Marshall Mackenzie, with a sculpture court added in 1905. In 1900 it received the art collection of Alexander Macdonald, a local granite merchant. The gallery is noted for its fine collection of modern Scottish and international art, 
           including works by Ken Currie, Gilbert & George, Ivor Abrahams, Bridget Riley and Bruce McLean. .</p>
           <h2>Short History</h2>
        <p>In April 2020, the gallery made 50 artworks available digitally via the Smartify app.[3]

          In October 2020, Aberdeen Art Gallery was named one of the five winners of the 2020 ArtFund Museum of the Year Award. ArtFund increased the prize money to £200,000 and changed the format of the award to five winners in response to the challenges faced by the museum sector during the Coronavirus Pandemic. </p>
      </div>
      
      <h2 style="text-align:center">Our Team</h2>
      <div class="row">
        <div class="column">
          <div class="card">
            <img src="images/Aiden Brady & Anatol Modzelewski for BYTOM Fall_Winter 2013 Campaign.jpeg" alt="Jane" style="width:100%">
            <div class="container">
              <h2>Patrick Smith</h2>
              <p class="title">CEO & Founder</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>jane@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="images/4 Career Woman Outfits For The Week Ahead - Harper and Harley.jpeg" alt="Mike" style="width:100%">
            <div class="container">
              <h2>Emily Ross</h2>
              <p class="title">Art Director</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>mike@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <img src="images/Gert.png" alt="John" style="width:100%">
            <div class="container">
              <h2>John Packricks</h2>
              <p class="title">Designer</p>
              <p>Some text that describes me lorem ipsum ipsum lorem.</p>
              <p>john@example.com</p>
              <p><button class="button">Contact</button></p>
            </div>
          </div>
        </div>
      </div>
    
      <style>
          body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
      background-image: url(./);
    }
    
    html {
      box-sizing: border-box;
    }
    
    *, *:before, *:after {
      box-sizing: inherit;
    }
    
    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }
    
    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: papayawhip;
    }
    
    .container {
      padding: 0 16px;
    }
    
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .title {
      color: grey;
    }
    
    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: grey;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }
    
    .button:hover {
      background-color: #555;
    }
    
    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
      </style>
      <div class="Footer1">
        <footer>
          <h2>Follow Us</h2> 
          <ul>                    
           <li><a href="http://www.facebook.com"><img src="images/1024px-Facebook_Logo_(2019).webp"  width="60" height="50"></a></li> 
           <li><a href="http://www.twitter.com"><img src="images/twitter.jpg"width="60" height="50"></a></li>
           <li><a href="http://www.youtube.com"><img src="images/youtube.png" width="60" height="50"></a></li> 
          </ul> 
        </footer>
      </div>
    
    </div>
    
    <script>
    function openPage(pageName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>

 

  







    
</body>
<main>

</main>
</html>