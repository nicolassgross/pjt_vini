<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Portfólio WEB</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap cdns -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- terminal effect -->
    <script src="t.min.js"></script>

    <!-- animações -->
    <link rel="stylesheet" href="css/animate.css">
    <script src="wow.min.js"></script>

</head>

<body>
    <div class="wrapper">

        <!--------------- NAVBAR/HEADER template --------------->
        <?php include('templates/header.html'); ?>
        <!--------------- NAVBAR/HEADER template --------------->

        <!--------------- Texto central INDEX --------------->
        <div class="hero">
            <div class="header">
                <h1 class="line anim-typewriter">VINICIUS MONDINI</h1>
            </div>
        </div>

        <div class="scroll-down"></div>
        <!--------------- hero section ends here --------------->



        <!--------------- projects section starts here --------------->
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
        <!--------------- projects section ends here --------------->

        <!--------------- FOOTER template --------------->
        <?php include('templates/footer.html') ?>
        <!--------------- FOOTER template --------------->

        <br><br><br><br>

    </div>

    <!-- greensock cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        // navigation starts here

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

        // navigation ends here

        // nav animation

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

        // nav animation ends

        new WOW().init();
    </script>
</body>

</html>