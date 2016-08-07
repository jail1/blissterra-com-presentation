<!DOCTYPE html>
<html>
<head>
    <title>Bliss Terra</title>
    <meta charset="utf-8">
    <meta name="description" content="blissterra">
    <meta name="keywords" content="blissterra">
    <meta name="author" content="blissterra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>



    {!!  Html::style('css/bootstrap.css')  !!}


    {!!  Html::style("css/bootstrap.css")  !!}
    {!!  Html::style("css/bootstrap-responsive.css")  !!}
    {!!  Html::style("css/style.css")  !!}
    {!!  Html::style("css/mobilemenu.css")  !!}


    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <script type="text/javascript" src="js/jquery-1.8.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/message-form.js"></script>
    <script type="text/javascript" src="js/Subscribe_Form.js"></script>
    <script type="text/javascript" src="js/touchTouch.jquery.js"></script>
    <script type="text/javascript" src="js/init.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

    <script>
        $(window).load(function() {
            // Initialize the gallery
            $('.magnifier').touchTouch();
        });
    </script>
    <script>
        $('#myTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    </script>



</head>
<body>


    @include('header')
    @include('jumbo')

    <div class="container-fill">
        @include('about', $slogans )
        @include('portfolio')
        @include('why')

        @include('contact')
        @include('subscribe')

        @include('footer')

    </div>






    <script type="text/javascript">
        $(window).load(function(){
            $('#message_form').forms({
                ownerEmail:'test@test.test'
            })
        })
    </script>
    <script type="text/javascript">
        $(window).load(function(){
            $('#newsletter').sForm({
                ownerEmail:'test@test.test'
                ,sitename:'sitename.link'
            })
        })
    </script>
    <script src="js/jquery.lettering-0.6.1.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/jquery.superscrollorama.js"></script>
    <script>
        $(document).ready(function() {

            var controller = $.superscrollorama();
            controller.addTween('#fly-left', TweenMax.from( $('#fly-left'), .5, {css:{right:'1200px'}, ease:Quad.easeInOut}));
            controller.addTween('#fly-right', TweenMax.from( $('#fly-right'), .5, {css:{left:'1200px'}, ease:Quad.easeInOut}));
            controller.addTween('#fade-it', TweenMax.from( $('#fade-it'), .5, {css:{opacity: 0}}));
            controller.addTween('#scale-it', TweenMax.fromTo( $('#scale-it'), .25, {css:{opacity:0, fontSize:'10px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, fontSize:'48px'}, ease:Quad.easeInOut}));
        });

    </script>

</body>
</html>