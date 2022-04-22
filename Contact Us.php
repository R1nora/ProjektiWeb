<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/style2.css" />
  
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
  <?php include 'includes/header.php'; ?>
    <div id="contact-page">
      
      <div class="contactus">
        <div class="contactmain">
          <h1>Contact Us</h1>
        </div>
        <div class="contactinfo">
          <div class="col1">
            <div>
            <h3>Phone Number</h3>
            <p>(480) 571-2375</p>
            </div>
            <div>
              <h3>Fax Number</h3>
              <p>(480) 717-3721</p>
            </div>
          </div>
          <div class="col2">
          <div class="address">
            <h3>Address</h3>
          <p>5725 N. Scottsdale Road <br> Ste C-110 <br> Scottsdale, AZ 85250 </p>
          </div>
          
        </div> 
        <div class="col3">
          <div class="directions">
            <a href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x872b753a1bce615d:0x2b79a49b7da90134?source=g.page.share" target="_blank" height="410px"
            width="1360px">Get Directions</a>
          </div>

                 
        </div>
      </div>
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3326.2710689392648!2d-111.924235990305!3d33.52033729321759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b79a49b7da90134!2sDavid%20Shapiro%20Law%2C%20PLLC!5e0!3m2!1sen!2sus!4v1600505155768!5m2!1sen!2sus" width="80%" height="80%">Doc</iframe>
      </div>
    </div>

  </div>
<div class="container">
  <div class="text"><h3 id="requestfreeconsultation">Request your Free Consultation</h3></div>
  <form action="" class="" on submit="return false">
     <div class="form-row">
        <div class="input-data">
          <input type="text" placeholder="  Enter your name" id="First Name" required>
           <div class="underline"></div>
           <!-- <span class="details">First Name</span> -->
           
        </div>
        <div class="input-data">
          <input type="text" placeholder="  Enter your username" id="Last Name" required>
           <div class="underline"></div>
           <!-- <span class="details">Last Name</span> -->
           
        </div>
     </div>
     <div class="form-row">
        <div class="input-data">
          <input type="text" placeholder="  Enter your email" id="Email" required>
           <div class="underline"></div>
           <!-- <span class="details">Email Address</span> -->
           
        </div>
        <div class="input-data">
          <input type="text" placeholder="  Enter your number" id="PhoneNumber" required>
           <div class="underline"></div>
           <!-- <span class="details">Mobile</span> -->
          
        </div>
     </div>
     <div class="form-row">
        <div class="input-data textarea">
           
           <input type="text" placeholder="  Enter your message" id="Message" rows="8" cols="80" required>
           <br />
           <div class="underline"></div>
           <!-- <span class="details">Write your message</span> -->
           
           <br />
           <div class="form-row submit-btn">
              <div class="input-data">
                 <div class="inner"></div>
                 
                 <input type="submit" value="submit" onclick="Form1();"></input>
              </div>
           </div>
        </div>
     </div>
  </form>

    <script src="script.js">    </script>
    
  </body>
</html>