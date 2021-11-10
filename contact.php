<title>Contato</title>
<!--------------- HEAD References TEMPLATES --------------->
<?php include('templates/head.html'); ?>
<!--------------- HEAD References TEMPLATES --------------->
<body>
    <div class="wrapper">

        <!--------------- NAVBAR/HEADER template --------------->
        <?php include('templates/header.html'); ?>
        <!--------------- NAVBAR/HEADER template --------------->

        <div class="whitespace"></div>

        <!--------------- Seção HERO Contato --------------->
        <div class="container">
            <div class="hero-content">
                <br><br>

                <div class="row">
                    <div class="col-lg-8">

                        <h3 class="wow fadeInUp" data-wow-delay="0.7s">Diga algo 👋</h3><br>
                        <p class="wow fadeInUp" data-wow-delay="0.8s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, accusantium sint quod voluptatem dolorum, quaerat, ut iusto cumque magni ab repudiandae, quasi minus unde temporibus nulla eum eaque! Placeat praesentium sunt suscipit
                            laboriosam deserunt commodi atque corporis, iure maiores dicta, fugit similique.</p>

                    </div>
                </div>
            </div>
        </div>
        <!--------------- Seção Hero termina aqui--------------->

        <!--------------- Seção preenchimento para contato --------------->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <form name="contact-form" id="contact-form" method="post" action="">

                        <ul>

                            <li class="wow fadeInUp" data-wow-delay="0.8s">
                                <label for="contact-name">Name :</label>
                                <div class="textarea">
                                    <input type="text" name="contact-name" id="contact-name" value="" required>
                                </div>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="0.9s">
                                <label for="contact-email">Email :</label>
                                <div class="textarea">
                                    <input type="email" name="contact-email" id="contact-email" value="" required>
                                </div>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="1s">
                                <label for="contact-project">Message :</label>
                                <div class="textarea">
                                    <textarea type="email" name="contact-project" id="contact-project" rows="6" value="" required></textarea>
                                </div>
                            </li>

                        </ul>

                        <button type="submit" name="contact-submit" id="contact-submit" class="send wow fadeInUp">Send Message</button>

                    </form>
                </div>
            </div>
        </div>

        <!--------------- Seção preenchimento para contato FIM --------------->

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