<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>About Me | Portfolio Website Template | CODEGRID</title>

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


        <!--------------- hero image starts here --------------->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 about image wow fadeInUp" data-wow-delay="1s"></div>
            </div>
        </div>
        <!--------------- hero image ends here --------------->


        <!--------------- hero section starts here --------------->
        <div class="container">
            <div class="hero-content">
                <br><br>

                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="wow fadeInUp" data-wow-delay="1.2s">about me.</h3><br>

                        <p class="wow fadeInUp">Living with passion is what I strictly adhere to. “Always do what you love” how much ever hackneyed this sounds it holds absolutely true. That's why I travel a lot. Not for the sole reason of “loving” to travel but it helps me
                            to get rid of the world and escape into a different dimension of my own. As I am a travel freak I love freezing the moments I relish. The art of capturing photos is something I am always fascinated by.</p>

                        <p class="wow fadeInUp" data-wow-delay="0.2s">I am a continuous learner. Learning for me equates to exploring new ideas and growing as an individual. I just cannot imagine my life devoid of designing. I freely express my creativity and imagination by designing. And to give
                            my passion of designing a platform I have a YouTube channel named, Codegrid.</p>

                    </div>
                </div>
            </div>
        </div>
        <!--------------- hero section ends here --------------->

        <div class="whitespace"></div>

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