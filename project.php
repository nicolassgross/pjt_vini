<title>Projetos</title>
<!--------------- HEAD References TEMPLATES --------------->
<?php include('templates/head.html'); ?>
<!--------------- HEAD References TEMPLATES --------------->
<body>
    <div class="wrapper">

        <!--------------- NAVBAR/HEADER TEMPLATES --------------->
        <?php include('templates/header.html'); ?>
        <!--------------- NAVBAR/HEADER TEMPLATES --------------->

        <div class="whitespace"></div>

        <!--------------- Seção HERO Projetos --------------->
        <div class="container">
            <div class="hero-content">
                <br><br>
                <div class="row">
                    <div class="col-lg-12">
                        <br>

                        <h1 class="wow fadeInUp" data-wow-delay="1s">Project Name</h1><br><br>

                        <div class="row">
                            <div class="col-lg-4">
                                <p class="wow fadeInUp" data-wow-delay="1.2s">service :</p>
                                <h6 class="wow fadeInUp" data-wow-delay="1.3s">Web Development</h6>
                            </div>

                            <div class="col-lg-4">
                                <p class="wow fadeInUp" data-wow-delay="1.4s">started :</p>
                                <h6 class="wow fadeInUp" data-wow-delay="1.5s">8 May 2019</h6>
                            </div>

                            <div class="col-lg-4">
                                <p class="wow fadeInUp" data-wow-delay="1.6s">completed :</p>
                                <h6 class="wow fadeInUp" data-wow-delay="1.7s">15 May 2019</h6>
                            </div>
                        </div>
                        <br>
                        <p class="wow fadeInUp" data-wow-delay="1.8s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum officia molestiae laboriosam, rem reprehenderit. Laboriosam quae alias, iure nesciunt dolorum. Eaque, magni, enim. Dolores, provident voluptas dicta commodi vel magni
                            nesciunt sed maiores aperiam illo officiis voluptate at quod, praesentium excepturi enim.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--------------- Seção Hero termina aqui--------------->


        <!--------------- Imagens da seção de projeto --------------->

        <div class="project-img">
            <div class="container">
                <br><br>
                <div class="row">
                    <div class="col-md-8">
                        <div class="project image wow fadeInUp" data-wow-delay="0.8s"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="project image wow fadeInUp" data-wow-delay="0.8s"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--------------- Imagens da seção de projeto --------------->

        <br><br>

        <!--------------- Navegar entre projetos --------------->

        <div class="project-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 prev">
                        <p>
                            <ion-icon name="arrow-back"></ion-icon>previous
                        </p>
                    </div>
                    <div class="col-lg-6 next">
                        <p>next
                            <ion-icon name="arrow-forward"></ion-icon>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!--------------- Navegar entre projetos --------------->

        <div class="whitespace"></div>


        <!--------------- FOOTER template --------------->
        <?php include('templates/footer.html') ?>
        <!--------------- FOOTER template --------------->

        <br><br><br><br>

    </div>

    <!-- REF - greensock cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        // navigation aqui
        $("#toggle").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
        });

        $("#resize ul li a").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
        });

        $(".close-btn").click(function() {
            $(this).toggleClass('on');
            $("#resize").toggleClass("active");
        });

        // navigation fim

        // nav animation inicio

        TweenMax.from("#brand", 1, {
            delay: 0.4,
            y: 10,
            opacity: 0,
            ease: Expo.easeInOut
        })

        TweenMax.staggerFrom("#menu li a", 1, {
            delay: 0.4,
            opacity: 0,
            ease: Expo.easeInOut
        }, 0.1);

        // nav animation fim



        new WOW().init();
    </script>
</body>

</html>