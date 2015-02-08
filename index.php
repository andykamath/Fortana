<html>
    <head>
        <script src="js/jQuery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/WOW.js"></script>
        <script src="js/ripple.js"></script>
        <script type="text/javascript">new WOW().init();</script>
        <script type="text/javascript">
            $(function() {
                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                    this.toggleClass("active");
                });
            });
        </script>
        <title>Fortana</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/Fortana.png">
    </head>
    <body>
        <div class="jumbotron" id="show">
            <div class="container" align="center">
                <img src="img/Fortana.png" width="300em" class="wow pulse">
                <h1 class="wow fadeIn" data-wow-delay="1s">Introducing Fortana</h1>
                <hr class="wow zoomIn" data-wow-delay="2s">
                <h2 class="wow zoomIn" data-wow-delay="3s">Data you need without a Data plan</h2>
                <button id="continue">Continue</button>
            </div>
        </div>
        <div class="jumbotron" id="hide">
            <div class="container">
                <h1 class="animated fadeIn">Try it out!</h1>
                <form action="post" >
            </div>
        </div>
        <script type="text/javascript">
            $("#hide").hide();
            $("#continue").click(function(){
                    $( "#show" ).animate({
                            opacity: 0,
                            height: "toggle"
                        }, 2000, function() {
                        // Animation complete.
                        $("#hide").show();
                    });
            });
        </script>
    </body>
</html>