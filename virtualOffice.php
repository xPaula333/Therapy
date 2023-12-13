<?php
include './php/crudFunctions.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Therapy Center</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/gallery/logo-snbg.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- ? Preloader Start -->
    
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/gallery/logo-snbg.png" width="150px" height="150px"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.html">Inicio</a></li>
                                            <li><a href="about.html">Quienes Somos</a></li>
                                            <li><a href="">Contacto</a></li>
                                            <li><a href="">Tienda</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                    <a href="#" class="btn header-btn">Pedir asistencia</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                ADMINISTRADOR
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="contact-section section-padding testimonial-section" id="section_6">
            <div class="container">
                <div class="row">

                  

                    <div class="col-lg-12 col-12 mx-auto">
                        <form class="custom-form contact-form" action="#" method="post" role="form">
                            <h2>Lista Usuarios</h2>

                           <?php
                           $arr = getlist();
                           //print_r($arr);
                           foreach ($arr as $row) {
                           
                            $id = $row['id'];
                            
                           
                            $nameC = $row['nameC'];
                          
                            $email = $row['email'];

                            $pathology = $row['pathology'];
                            
                            $observations = $row['observations'];
                            
                           ?>
                            <div class="row" style="margin: 10px;">
                                <div class="col-lg-2 col-md-6 col-12">
                                    <input type="" name="ID<?=$id?>" id="ID<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?= $id?>" style="display: none;">
                                    <p id="pID<?=$id?>" style="word-wrap: break-word;"><?= $id?></p>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <input type="" name="nameC<?=$id?>" id="nameC<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$nameC?>" style="display: none;">
                                    <p id="pnameC<?=$id?>" style="word-wrap: break-word;"><?=$nameC?></p>
                                </div>
                               
                                <div class="col-lg-2 col-md-6 col-12">
                                    <input type="" name="email<?=$id?>" id="email<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$email?>" style="display: none;">
                                    <p id="pemail<?=$id?>" style="word-wrap: break-word;"><?=$email?></p>
                                </div>
                                <div class="col-lg-2 col-md-6 col-12">
                                    <input type="" name="pathology<?=$id?>" id="pathology<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$pathology?>" style="display: none;">
                                    <p id="ppathology<?=$id?>" style="word-wrap: break-word;"><?=$pathology?></p>
                                </div>
                               
                                <div class="col-lg-2 col-md-6 col-12">
                                    <input type="" name="observations<?=$id?>" id="observations<?=$id?>" class="form-control"
                                        placeholder="identificacion*" required value="<?=$observations?>" style="display: none;">
                                    <p id="pobservations<?=$id?>" style="word-wrap: break-word;"><?=$observations?></p>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <button id="editbt<?=$id?>" type="submit" class="form-control" onclick="editR(<?=$id?>)">Editar</button>
                                    <button id="act<?=$id?>" type="submit" class="form-control" onclick="updateR(<?=$id?>)" style="display: none;">Actualizar</button>
                                </div>
                                <div class="col-lg-1 col-md-6 col-12">
                                    <button type="submit" class="form-control delete-button" onclick="deleteR(<?=$id?>)">
                                      Eliminar
                                    </button>
                                </div>
                            </div>

                            <?php
                            }
                            ?>

                            

                            <div class="row" id="respInsertRegister">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-wrappr section-bg3" data-background="assets/img/gallery/footer.png">
            <div class="footer-area footer-padding ">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo mb-25">
                                    <h1 style="font-size: 50px;">Therapy Center</h1>
                                </div>
                                <d iv class="header-area">
                                    <div class="main-header main-header2">
                                        <div class="menu-main d-flex align-items-center justify-content-start">
                                            <!-- Main-menu -->
                                            <div class="main-menu main-menu2">
                                                <nav>
                                                    <ul>
                                                        <li><a href="index.html">Inicio</a></li>
                                                        <li><a href="about.html">Quienes Somos</a></li>
                                                        <li><a href="">Contacto</a></li>
                                                        <li><a href="">Tienda</a></li>

                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </d>
                                <!-- social -->
                                <div class="footer-social mt-50">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                            <img src="./assets/img/gallery/logo-snbg.png" width="300px" alt="" sizes="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-10 ">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> Todos los derechos
                                        reservados <i class="fa fa-heart" aria-hidden="true"></i> por Therapy Center
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
    <!-- JAVASCRIPT FILES -->
  <!-- JS here -->

  <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>


    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>


    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    <script>
        function deleteR(id) {
            event.preventDefault();
            
                let formData = new FormData();
                formData.append('id', id);

                let xhr = new XMLHttpRequest();

                xhr.open('POST', './php/delete.php', true);
                
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        let response = xhr.response.trim();

                        if (response === 'true') {
                            window.location.href = "virtualOffice.php";
                        } else {
                            alert("Error eliminando el registro")
                        }
                    }
                };

                xhr.send(formData);
            
        }

        function editR(id) {
            event.preventDefault();

            let act = document.getElementById('act'+id);

            act.style.display = 'block';

            let editbt = document.getElementById('editbt'+id);

            editbt.style.display = 'none';

            let idR = document.getElementById('ID'+id);
            let nameC = document.getElementById('nameC'+id);
           
            let email = document.getElementById('email'+id);
            let pathology = document.getElementById('pathology'+id);
          
            let observations = document.getElementById('observations'+id);

            idR.style.display = 'block';
            nameC.style.display = 'block';
            
            email.style.display = 'block';
            pathology.style.display = 'block';
          
            observations.style.display = 'block';

            let pidR = document.getElementById('pID'+id);
            let pnameC = document.getElementById('pnameC'+id);
            
            let pemail = document.getElementById('pemail'+id);
            let ppathology = document.getElementById('ppathology'+id);
          
            let pobservations = document.getElementById('pobservations'+id);

            pidR.style.display = 'none';
            pnameC.style.display = 'none';
            page.style.display = 'none';
          
            ppathology.style.display = 'none';
         
            pobservations.style.display = 'none';
            
        }

        function updateR(id) {
            event.preventDefault();

            let idR = document.getElementById('ID'+id).value;
            let nameC = document.getElementById('nameC'+id).value;
          
            let email = document.getElementById('email'+id).value;
            let pathology = document.getElementById('pathology'+id).value;
          
            let observations = document.getElementById('observations'+id).value;

            let formData = new FormData();
                formData.append('id', id);
                formData.append('IDU', idR);
                formData.append('nameC', nameC);
               
                formData.append('email', email);

                formData.append('pathology', pathology);
              
                formData.append('observations', observations);

                let xhr = new XMLHttpRequest();

                xhr.open('POST', './php/update.php', true);
                
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        let response = xhr.response.trim();

                        if (response === 'true') {
                            window.location.href = "virtualOffice.php";
                        } else {
                            alert("Error actualizando el registro")
                        }
                    }
                };

                xhr.send(formData);

        }
    </script>

</body>

</html>