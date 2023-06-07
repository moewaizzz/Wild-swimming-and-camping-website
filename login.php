<?php
   include_once 'header.php';
   
?> 
<main id="main">
    <section id="" class=" mb-5">
      <div class="container login " >
        <div class="row">
          <div class="col-lg-12 text-center mb-5">
            <h1 class="page-title">Login</h1>
                    <div class="col-12 ">
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
        </div>

        <div class="form mt-5">
            <form action="logincontrol.php" method="post" role="form" class="login-form">
                <div class="row">
                    
                    <div class="form-group">
                        <?php if(isset($_GET['username'])) {?>
                            <input type="email" 
                            class="form-control " 
                            id="inputEmail" 
                            placeholder="Enter a valid email"  
                            name="email" 
                            value ="<?php echo $_GET['email'];?>">
                        <?php
                        }else {?>
                            <input type="email" 
                            class="form-control " 
                            id="inputEmail" 
                            placeholder="Enter a valid email"  
                            name="email" >
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
                            name="pass">
                        <?php
                        }else {?>
                            <input type="password" 
                            class="form-control" 
                            id="inputPassword" 
                            placeholder="Enter Password" 
                            name="pass">
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="text-center py-3">
                <?php if(isset($_GET['btnerror'])) {?>
                                <p class="btnerror text-center"><?php echo $_GET['btnerror'];?></p>
                            <?php
                            }
                          ?>
                     <button type="submit" class="login-btn">Login</button>
                    <div class="py-3 gy-3 text-center">
                        <a href="register.php" >Not created yet?</a>   
                    </div>  
                </div>
          </form>
        </div><!-- End Contact Form -->

      </div>
    </section>

  </main><!-- End #main -->

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