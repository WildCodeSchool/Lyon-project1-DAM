<!DOCTYPE html>
<html lang="en">

<?php include "../_includes/head.php" ?>

<body>

<!-- Navigation bar -->
<?php include "../_includes/navigation.php" ?>
<!-- header -->
<?php include "../_includes/header.php" ?>

<!-- Main container -->
<div class="container">

    <div class="row">
        <div class="passion col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div>
                <h1>NOS BURGERS</h1>
            </div>
            <p>
                BUG BURGER a créé pour vous une carte courte de 4 burgers. Cela permet de vous assurer une qualité optimale
                et constante en toute saison !
            </p>
        </div>

        <div class="equipe col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="../images/burger.png" alt="JIMINY">
                        <div class="carousel-caption">
                            <h2>LE <b>JIMINY</b> BURGER </h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../images/pagnol.jpg" alt="PAGNOL">
                        <div class="carousel-caption">
                            <h2>LE <b>PAGNOL</b> BURGER </h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../images/spiderman.jpg.jpg" alt="SPIDERMAN">
                        <div class="carousel-caption">
                            <h2>LE <b>SPIDERMAN</b> BURGER </h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../images/veggie.jpg" alt="VEGGIE">
                        <div class="carousel-caption">
                            <h2>LE <b>VEGGIE</b> BURGER </h2>
                        </div>
                    </div>
                    <div class="item">
                        <img src="../images/chips.jpg" alt="CRIPS">
                        <div class="carousel-caption">
                            <h2>LE <b>CRIPS</b></h2>
                        </div>
                    </div>
                </div> <!--end of wrapper -->
            </div>  <!--end of carousel -->

            <div>
                <h4>LE <b>JIMINY</b> BURGER </h4>
                <p>
                    Steak de Criquets, raclette, oignons confits, ketchup maison, poitrine grillée, cornichons
                </p>
            </div>
            <div>
                <h4>LE <b>PAGNOL</b> BURGER </h4>
                <p>
                    Steack de Cigale, cheddar rouge affiné, bacon, sauce ribs maison, oignons frits
                </p>
            </div>
            <div>
                <h4>LE <b>SPIDERMAN</b> BURGER </h4>
                <p>
                    Steak de Mygale, pesto rouge, aubergines et courgettes grillées, Mozarella.
                </p>
            </div>
            <div>
                <h4>LES <b> VEGGIE</b> BURGER</h4>
                <p>
                    On remplace dans tous vos BUGGY  steak par une délicieuse galette de soja.
                </p>
            </div>
            <div>
                <h4>LES <b> CRIPS </b> </h4>
                <p>
                    Succombez au croquant de nos CRIPS fraîches maison !
                </p>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>



<script src="https://use.fontawesome.com/2e8d9444e4.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>



<footer>
    <?php include "../_includes/footer.php" ?>
</footer>
</body>
</html>
