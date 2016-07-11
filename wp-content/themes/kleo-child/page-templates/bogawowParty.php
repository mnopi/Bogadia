<?php
/* Template Name: Bogawow party */
/*get_header();*/
function is_mobile() {
    $userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
    return strpos($userAgent, 'mobile');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BogaWOW Party</title>
    <meta name="description" content="Bienvenido a la fiesta de la moda" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="/wp-content/themes/kleo-child/page-templates/css/styles.css" />
</head>
<body>
<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="https://www.bogadia.com/"><img id="nuevo_logo" class="page-scroll" src="https://www.bogadia.com/wp-content/uploads/2016/07/logo_final_blanco-2.png"></a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="#one">Video</a>
                </li>
                <li>
                    <a class="page-scroll" href="#two">La fiesta</a>
                </li>
                <li>
                    <a class="page-scroll" href="#three">Más info</a>
                </li>
                <li>
                    <a class="page-scroll" href="#four" style="background-color: darkred;">Consigue tu entrada</a>
                </li>
                <li>
                    <a class="page-scroll" href="#last">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" data-toggle="modal" title="A free Bootstrap video landing theme" href="#aboutModal">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section id="test5">
<!--        <div class="container-fluid">
            <div id="front_row" class="row no-gutter" style="height: 200px">
                <div class="col-lg-12 col-sm-12">

                </div>
            </div>
        </div>-->
</section>
<!--<section id="three" class="no-padding">
        <div class="container-fluid">
            <div class="row no-gutter">
                <div class="col-lg-4 col-sm-6">
                    <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="https://www.bogadia.com/wp-content/uploads/2016/07/bogaccartelJulio-1-recortado-2.jpg">
                        <img src="https://www.bogadia.com/wp-content/uploads/2016/07/bogaccartelJulio-1-recortado-2.jpg" class="img-responsive">
                        <div class="gallery-box-caption">
                            <div class="gallery-box-content">
                                <div>
                                    <i class="icon-lg ion-ios-search"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>-->
<section class="bg-primary" id="one">
    <div class="container">
        <div class="row">
<!--            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <h2 class="margin-top-0 text-primary">BIENVENIDO A LA FIESTA DE LA MODA</h2>
                <br>-->
<!--                <p class="text-faded">
                    Bootstrap's responsive grid comes in 4 sizes or "breakpoints": tiny (xs), small(sm), medium(md) and large(lg). These 4 grid sizes enable you create responsive layouts that behave accordingly on different devices.
                </p>
                <a href="#three" class="btn btn-default btn-xl page-scroll">Learn More</a>-->
                <div align="center" class="embed-responsive embed-responsive-16by9">
<!--                    <video autoplay="" loop="false" class="fillWidth fadeIn wow collapse in embed-responsive-item" data-wow-delay="0.5s" poster="https://www.bogadia.com/wp-content/uploads/2015/11/bogaccartelJulio.jpg">
                        <source src="" type="video/mp4">Your browser does not support the video tag. I suggest you upgrade your browser.
                    </video>-->
                    <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/IB2VKV_luso" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Bienvenido a la fiesta de la moda</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-ios-location wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Dónde y cuándo</h3>
                    <p class="text-muted">Lolita Disco & Lounge Madrid</p>
                    <p class="text-muted">Viernes 15 de julio de 2016 a partir de las 22 horas</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-android-bar wow fadeInUp" data-wow-delay=".2s"></i>
                    <h3>Que incluye la entrada</h3>
                    <p class="text-muted">Una copa gratis (nacional)</p>
                    <p class="text-muted">Participar en un desfile</p>
                    <p class="text-muted">Protagonizar un videobook</p>
                    <p class="text-muted">Una sesión de fotos</p>
                    <p class="text-muted">¡Premios y más!</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <i class="icon-lg ion-android-contacts wow fadeIn" data-wow-delay=".3s"></i>
                    <h3>Actividades</h3>
                    <p class="text-muted">Grabación en directo de una fashion film</p>
                    <p class="text-muted">Sesión de fotos en nuestro Photocall</p>
                    <p class="text-muted">Concurso de talentos sobre la pasarela</p>
                    <p class="text-muted">Sorteos</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-primary" id="three">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Más Info</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="https://www.bogadia.com/wp-content/uploads/2015/11/Lolita.jpg">
                    <img src="https://www.bogadia.com/wp-content/uploads/2015/11/Lolita.jpg" class="img-responsive" alt="Image 1">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
<!--            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="https://www.bogadia.com/wp-content/uploads/2015/11/Lolita.jpg">
                    <img src="https://www.bogadia.com/wp-content/uploads/2015/11/Lolita.jpg" class="img-responsive" alt="Image 2">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>-->
            <div class="col-lg-6 col-sm-6">
<!--                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4">
                    <img src="//splashbase.s3.amazonaws.com/unsplash/regular/photo-1433959352364-9314c5b6eb0b%3Fq%3D75%26fm%3Djpg%26w%3D1080%26fit%3Dmax%26s%3D3b9bc6caa190332e91472b6828a120a4" class="img-responsive" alt="Image 3">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>-->
                <p>¿Quieres pasar una noche inolvidable entre flashes, música, moda y buen ambiente? ¿Te gustaría ser el protagonista de una fashion film, ganar un sesión de fotos valorado en 200€ o un videobook profesional y conocer a gente del mundo de la moda? ¡Esta es la fiesta que esperabas!</p>
                <p>La revista BOGADIA presenta la primera fiesta exclusiva para amantes de la moda que quieran divertirse con sus amigos a la vez que disfrutan de su gran pasión. Te abrimos las puertas de Lolita Disco&Lounge para que vivas una noche inolvidable con nosotros rodeado de gente con mucho estilo, buena música y distintas zonas de participación donde dar rienda suelta a tu lado más fashion.</p>
                <p>Esto no es una simple fiesta donde conocer gente guapa, tomarte una copa y disfrutar de la noche, aquí además sentirás la moda desde dentro. Podrás posar en nuestro photocall con las mejores marcas de ropa, aparecerás en nuestro espectacular fashion film, podrás ganar un videobook y tendrás la posibilidad de tener un post exclusivo en nuestra revista entre otras múltiples actividades y concursos.</p>
                <p>En #BOGAWOWPARTY tú eres nuestro protagonista ¿Te animas?</p>
            </div>
        </div>
    </div>
<!--            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-moto-drawing-illusion-nabeel-1440x960.jpg">
                    <img src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-moto-drawing-illusion-nabeel-1440x960.jpg" class="img-responsive" alt="Image 4">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-new-york-crosswalk-nabeel-1440x960.jpg">
                    <img src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-new-york-crosswalk-nabeel-1440x960.jpg" class="img-responsive" alt="Image 5">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#galleryModal" class="gallery-box" data-toggle="modal" data-src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-clothes-exotic-travel-nabeel-1440x960.jpg">
                    <img src="//splashbase.s3.amazonaws.com/lifeofpix/regular/Life-of-Pix-free-stock-photos-clothes-exotic-travel-nabeel-1440x960.jpg" class="img-responsive" alt="Image 6">
                    <div class="gallery-box-caption">
                        <div class="gallery-box-content">
                            <div>
                                <i class="icon-lg ion-ios-search"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>-->
        </div>
    </div>
</section>
<section class="container-fluid" id="four">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Consigue tu entrada</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="text-center" style="width:100%; text-align:left; background-color: white; border-radius: 5px;" ><iframe  src="//eventbrite.com/tickets-external?eid=19636162290&ref=etckt" frameborder="0" height="600" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe><div style="font-family:Helvetica, Arial; font-size:10px; padding:5px 0 5px; margin:2px; width:100%; text-align:left;" ><a class="powered-by-eb" style="color: #dddddd; text-decoration: none;" target="_blank" href="http://www.eventbrite.com/r/etckt">Con tecnología de Eventbrite</a></div></div>
        </div>
    </div>
</section>
<!--<section class="container-fluid" id="four">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <h2 class="text-center text-primary">Features</h2>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Simple</h3>
                <div class="media-body media-middle">
                    <p>What could be easier? Get started fast with this landing page starter theme.</p>
                </div>
                <div class="media-right">
                    <i class="icon-lg ion-ios-bolt-outline"></i>
                </div>
            </div>
            <hr>
            <div class="media wow fadeIn">
                <h3>Free</h3>
                <div class="media-left">
                    <a href="#alertModal" data-toggle="modal" data-target="#alertModal"><i class="icon-lg ion-ios-cloud-download-outline"></i></a>
                </div>
                <div class="media-body media-middle">
                    <p>Yes, please. Grab it for yourself, and make something awesome with this.</p>
                </div>
            </div>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Unique</h3>
                <div class="media-body media-middle">
                    <p>Because you don't want your Bootstrap site, to look like a Bootstrap site.</p>
                </div>
                <div class="media-right">
                    <i class="icon-lg ion-ios-snowy"></i>
                </div>
            </div>
            <hr>
            <div class="media wow fadeIn">
                <h3>Popular</h3>
                <div class="media-left">
                    <i class="icon-lg ion-ios-heart-outline"></i>
                </div>
                <div class="media-body media-middle">
                    <p>There's good reason why Bootstrap is the most used frontend framework in the world.</p>
                </div>
            </div>
            <hr>
            <div class="media wow fadeInRight">
                <h3>Tested</h3>
                <div class="media-body media-middle">
                    <p>Bootstrap is matured and well-tested. It's a stable codebase that provides consistency.</p>
                </div>
                <div class="media-right">
                    <i class="icon-lg ion-ios-flask-outline"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2 class="text-primary">Get Started</h2>
            <a href="http://www.bootstrapzero.com/bootstrap-template/landing-zero" target="ext" class="btn btn-default btn-lg wow flipInX">Free Download</a>
        </div>
        <br>
        <hr/>
        <br>
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="row">
                    <h6 class="wide-space text-center">BOOTSTRAP IS BASED ON THESE STANDARDS</h6>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-html5-outline" title="html 5"></i>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-sass" title="sass"></i>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-javascript-outline" title="javascript"></i>
                    </div>
                    <div class="col-sm-3 col-xs-6 text-center">
                        <i class="icon-lg ion-social-css3-outline" title="css 3"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
<section id="last">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="margin-top-0 wow fadeIn">Get in Touch</h2>
                <hr class="primary">
                <p>We love feedback. Fill out the form below and we'll get back to you as soon as possible.</p>
            </div>
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <form class="contact-form row">
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="col-md-4">
                        <label></label>
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="col-md-12">
                        <label></label>
                        <textarea class="form-control" rows="9" placeholder="Your message here.."></textarea>
                    </div>
                    <div class="col-md-4 col-md-offset-4">
                        <label></label>
                        <button type="button" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Send <i class="ion-android-arrow-forward"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>-->
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-4 col-sm-3 column">
                <h4>Bogadia</h4>
                <ul class="list-unstyled">
                    <li><a href="https://www.bogadia.com">Magazine</a></li>
                    <li><a href="https://www.bogadia.com/equipo">Equipo</a></li>
                    <li><a href="https://www.bogadia.com/contacto">Contacto</a></li>
                    <li><a href="">Developers</a></li>
                </ul>
            </div>
<!--            <div class="col-xs-6 col-sm-3 column">
                <h4>About</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>-->
<!--            <div class="col-xs-12 col-sm-3 column">
                <h4>Stay Posted</h4>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                    </div>
                </form>
            </div>-->
            <div class="col-xs-8 col-sm-9 text-right">
                <h4>Síguenos</h4>
                <ul class="list-inline">
                    <li><a rel="nofollow" href="https://twitter.com/Bogadiamag" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="https://www.facebook.com/bogadiamag" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="https://es.pinterest.com/bogadiamag/" title="Pinterest"><i class="icon-lg ion-social-pinterest-outline"></i></a>&nbsp;</li>
                    <li><a rel="nofollow" href="https://www.instagram.com/bogadiamag/" title="Instagram"><i class="icon-lg ion-social-instagram-outline"></i></a>&nbsp;</li>
                </ul>
            </div>
        </div>
        <br/>
        <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
    </div>
</footer>
<div id="galleryModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <img src="//placehold.it/1200x700/222?text=..." id="galleryImage" class="img-responsive" />
                <p>
                    <br/>
                    <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Close <i class="ion-android-close"></i></button>
                </p>
            </div>
        </div>
    </div>
</div>
<div id="aboutModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Landing Zero Theme</h2>
                <h5 class="text-center">
                    A free, responsive landing page theme built by BootstrapZero.
                </h5>
                <p class="text-justify">
                    This is a single-page Bootstrap template with a sleek dark/grey color scheme, accent color and smooth scrolling.
                    There are vertical content sections with subtle animations that are activated when scrolled into view using the jQuery WOW plugin. There is also a gallery with modals
                    that work nicely to showcase your work portfolio. Other features include a contact form, email subscribe form, multi-column footer. Uses Questrial Google Font and Ionicons.
                </p>
                <p class="text-center"><a href="http://www.bootstrapzero.com">Download at BootstrapZero</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true"> OK </button>
            </div>
        </div>
    </div>
</div>
<div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Nice Job!</h2>
                <p class="text-center">You clicked the button, but it doesn't actually go anywhere because this is only a demo.</p>
                <p class="text-center"><a href="http://www.bootstrapzero.com">Learn more at BootstrapZero</a></p>
                <br/>
                <button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">OK <i class="ion-android-close"></i></button>
            </div>
        </div>
    </div>
</div>
<!--scripts loaded here from cdn for performance -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="/wp-content/themes/kleo-child/page-templates/js/scripts.js"></script>
</body>
</html>

<?php /*get_footer(); */?>
