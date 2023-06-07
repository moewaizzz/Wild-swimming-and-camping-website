<?php
   include_once 'header.php';
?>



<main id="main">
    <section id="" class=" mb-5">
      <div class="container register" >
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Register</h1>
            <?php if(isset($_GET['error'])) {?>
                         <p class="error text-center"><?php echo $_GET['error'];?></p> 
                     <?php
                     }
                     ?>

                         <?php if(isset($_GET['success'])) {?>
                         <p class="success text-center"><?php echo $_GET['success'];?></p>
                     <?php
                     }
                     ?>
                
          </div>
        </div>  

        <div class="form mt-5">
          <form action="registercontrol.php" method="post" role="form"  class="register-form">
            <div class="row">
              <div class="form-group col-md-6 ">
              <?php if(isset($_GET['username'])) {?>
                            <input type="text " 
                            class="form-control" 
                            id="inputName" 
                            placeholder="Enter Full Name" 
                            name="username" 
                            value ="<?php echo $_GET['username'];?>">
                        <?php
                        }else {?>
                             <input type="text" class="form-control " id="inputName" placeholder="Enter Full Name" name="username" >
                        <?php
                        }
                        ?>
              </div>
              <div class="form-group col-md-6 ">
              <?php if(isset($_GET['username'])) {?>
                            <input type="email" 
                            class="form-control" 
                            id="inputEmail" 
                            placeholder="Enter a valid email"  
                            name="email" 
                            value ="<?php echo $_GET['email'];?>">
                        <?php
                        }else {?>
                             <input type="email" 
                             class="form-control" 
                             id="inputEmail" 
                             placeholder="Enter a valid email"  
                             name="email" >
                        <?php
                        }
                        ?>
              </div>
            </div>
            <div class="form-group ">
            <?php if(isset($_GET['pass'])) {?>
                            <input type="password" 
                            class="form-control" 
                            id="inputPassword" 
                            placeholder="Enter Password" 
                            name="pass">
                        <?php
                        }else {?>
                           <input type="password" 
                           class="form-control " 
                           id="inputPassword" 
                           placeholder="Enter Password" 
                           name="pass">
                        <?php
                        }
                        ?>
            </div>
            <div class="form-group ">
            <?php if(isset($_GET['pass'])) {?>
                            <input type="password" 
                            class="form-control " 
                            id="inputPassword" 
                            placeholder="Enter Password" 
                            name="cpass">
                        <?php
                        }else {?>
                           <input type="password" 
                           class="form-control" 
                           id="inputPassword" 
                           placeholder="Enter Password" 
                           name="cpass">
                        <?php
                        }
                        ?>
            </div>
        
            <div class="text-center"><button type="submit" name="signup-btn" class="register-btn">Register</button></div>
                    <div class="py-3 gy-3 text-center">
                        <a href="login.php" >Already have an account?</a>   
                    </div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php
 include_once 'footer.php';
 ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>