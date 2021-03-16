<?php
    $title = 'Contact | Christophoros Prodromou';
    include_once 'includes/header.inc.php';
?>
   <!--Contact Form-->
   <h2 class= "text-center mt-3">Contact me</h2>
   <div class="container mt-5">
       <div class="row">
        
           <div class="col-lg-6">
                <h3 class="mt-2">Send me a message!</h3>
                <h4 class="mt-2">Or send me an email or message on social media!</h4>
                <p class="mt-3">Email: chrisprodromou06@gmail.com</p>
                <ul class="list-inline text-left mt-2">
                    <li class="list-inline-item"><a href="https://www.facebook.com/xristoforos.prodromou/"><i class="fab fa-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/christoforos_prod/"><i class="fab fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/christophoros-prodromou-631177196/"><i class="fab fa-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href=" https://github.com/Chrisprod06"><i class="fab fa-github"></i></a></li>

                    </ul>
           </div>
           <div class="col-lg-6">
                <form  method ="POST" action="contact.php" class="bg-light">
                    <div class="form-group">
                        <label for="firstname">Firstname:</label>
                        <input type="text" class="form-control bg-light text-white" id="firstname" name="firstname" placeholder="Enter your firstname. Ex. Chris">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" class="form-control bg-light text-white" id="lastname" name = "lastname" placeholder="Enter your lastname. Ex. Prodromou">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control bg-light text-white" id="email" name ="email" placeholder="Enter your email. Ex. Chris@gmail.com">
                    </div>
        
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" rows='5' class="form-control bg-light text-white" name ="message" placeholder="Enter your message"></textarea>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3 mb-3" value="Send Message">
                </form>
           </div>
       </div>        
   </div>
   

   <?php
    
    include_once 'includes/footer.inc.php';
?>