<title>NICOLAS</title>
<?php include('templates/head.html'); ?>

<body>
    <div class="wrapper">

        <!--------------- NAVBAR/HEADER template --------------->
        <?php include('templates/header.html'); ?>
        <!--------------- NAVBAR/HEADER template --------------->

        <!--------------- HERO INDEX --------------->
        <div class="hero">
            <div class="header">
                <h1 class="line anim-typewriter">Nicolas</h1>
            </div>
        </div>

        <div class="scroll-down"></div>
        <!--------------- HERO INDEX --------------->

        <!--------------- Seção de projetos começa aqui --------------->
        <div class="container-fluid">
            <br><br><br>

            <h6>alguns projetos que tiveram destaque</h6>

            <div class="vertical"></div>

            <div class="whitespace"></div>
            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-8"></div>

                <div class="col-lg-4 project project1 wow fadeInUp" onclick="location.href='project.php'"></div>
            </div>

            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-6 project project2 wow fadeInUp" onclick="location.href='project.php'"></div>

                <div class="col-lg-6"></div>
            </div>

            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-7"></div>

                <div class="col-lg-4 project project3 wow fadeInUp" onclick="location.href='project.php'"></div>

                <div class="col-lg-1"></div>
            </div>

            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-1"></div>

                <div class="col-lg-5 project project4 wow fadeInUp" onclick="location.href='project.php'"></div>

                <div class="col-lg-6"></div>
            </div>

            <div class="whitespace"></div>
        </div>
        <!--------------- Seção de projetos termina aqui --------------->

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