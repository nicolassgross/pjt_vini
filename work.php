<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Work | Portfolio Website Template | CODEGRID</title>

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- bootstrap cdns -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <!-- for on scroll animations -->
    <link rel="stylesheet" href="css/animate.css">
    <script src="wow.min.js"></script>

</head>

<body>
    <div class="wrapper">

        <!--------------- navbar starts here --------------->
        <?php include('templates/header.html');?>
        <!--------------- navbar ends here --------------->

        <div class="whitespace"></div>

        <!--------------- hero section starts here --------------->
        <div class="container">
            <div class="hero-content">
                <br><br>

                <div class="row">
                    <div class="col-lg-8">

                        <h3 class="wow fadeInUp" data-wow-delay="1s">work.</h3><br>
                        <p class="wow fadeInUp" data-wow-delay="1.2s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, accusantium sint quod voluptatem dolorum, quaerat, ut iusto cumque magni ab repudiandae, quasi minus unde temporibus nulla eum eaque! Placeat praesentium sunt suscipit
                            laboriosam deserunt commodi atque corporis, iure maiores dicta, fugit similique.</p>

                    </div>
                </div>
            </div>
        </div>

        <!--------------- hero section ends here --------------->

        <!--------------- projects section starts here --------------->
        <div class="container-fluid">

            <div class="whitespace"></div>
            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-8"></div>

                <div class="col-lg-4 project project1 wow fadeInUp" data-wow-delay="1.4s" onclick="location.href='project.html'"></div>
            </div>

            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-6 project project2 wow fadeInUp" onclick="location.href='project.html'"></div>

                <div class="col-lg-6"></div>
            </div>

            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-7"></div>

                <div class="col-lg-4 project project3 wow fadeInUp" onclick="location.href='project.html'"></div>

                <div class="col-lg-1"></div>
            </div>

            <div class="whitespace"></div>

            <div class="row">
                <div class="col-lg-1"></div>

                <div class="col-lg-5 project project4 wow fadeInUp" onclick="location.href='project.html'"></div>

                <div class="col-lg-6"></div>
            </div>

            <div class="whitespace"></div>
        </div>

        <!--------------- projects section ends here --------------->

        <!--------------- footer starts here --------------->
        <?php include('templates/footer.html')?>
        <!--------------- footer ends here --------------->

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