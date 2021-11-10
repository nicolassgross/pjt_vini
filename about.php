<title>Sobre mim</title>
<!--------------- HEAD References TEMPLATES --------------->
<?php include('templates/head.html'); ?>
<!--------------- HEAD References TEMPLATES --------------->

<body>
    <div class="wrapper">

        <!--------------- NAVBAR/HEADER template --------------->
        <?php include('templates/header.html'); ?>
        <!--------------- NAVBAR/HEADER template --------------->

<body>
    <div class="wrapper">
        <!--------------- Imagem HERO aqui --------------->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 about image wow fadeInUp" data-wow-delay="1s"></div>
            </div>
        </div>
        <!--------------- Imagem HERO aqui --------------->


        <!--------------- Texto HERO AQUI --------------->
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
        <!--------------- Texto HERO AQUI --------------->

        <div class="whitespace"></div>

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