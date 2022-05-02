<?php include "app/app.php"; $page = 1; head($page);

require "db/function.php";
$AllEnv = getAllEnv();

foreach ($AllEnv as $EnvSection){

    if ($EnvSection['name'] == "slog"){ $SectionSlog = $EnvSection['content']; }
    if ($EnvSection['name'] == "about"){ $SectionAbout = $EnvSection['content']; }
    if ($EnvSection['name'] == "part"){ $SectionPart = $EnvSection['content']; }
    if ($EnvSection['name'] == "col1"){ $SectionCol1 = $EnvSection['content']; }
    if ($EnvSection['name'] == "col2"){ $SectionCol2 = $EnvSection['content']; }
    if ($EnvSection['name'] == "contact"){ $SectionContact = $EnvSection['content']; }

    if ($EnvSection['name'] == "adresse"){ $SectionAdresse = $EnvSection['content']; }
    if ($EnvSection['name'] == "mail"){ $SectionMail = $EnvSection['content']; }
    if ($EnvSection['name'] == "numero"){ $SectionNum = $EnvSection['content']; }
    if ($EnvSection['name'] == "siret"){ $SectionSiret = $EnvSection['content']; }
}

?>
<body  data-spy="scroll" data-target="#scroll-spy"> <header> <?php navbar($page); ?> </header>

<section id="home">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="home-logo"><img src="./assets/test.png" ></div>
                <style>

                    .home-logo{
                        text-align: center;
                    }
                    


                    .home-logo img{
                        width: 481px;
                        background-color: white;
                        padding: 18px;
                        border-radius: 10px;
                        margin-bottom: 31px;
                        margin-top: 35px;
                        transform: translate(0, 0);
                        transform: translate3d(0, 0, 0);
                        transition: transform 0.2s ease-out;
                        will-change: transform;
                    }

                    @media (max-width: 540px) {
                        .home-logo img{
                            width: 87%;
                        }

                    }

                    .home-logo img:hover{

                        transform: translate(0, -4px);
                        transform: translate3d(0, -4px, 0);
                    }

                </style>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                <p><?= $SectionSlog ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 ">
                <a class="tutorials-link float-r" href="#part" role="button">Particulier</a>
            </div>
            <div class="col-xs-6">
                <a class="tutorials-link " href="#col" role="button">Collectivité</a>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    À propos
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">


                <?= $SectionAbout ?>
            </div>
        </div>
    </div>
</section>

<section id="part">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Particulier
                </div>
            </div>
        </div>
        <div class="row">
            <div class="video-roll--container col-xs-12">
                <ul class="video-roll">
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                </ul>
            </div>
        </div>
        <div>
            <p class="part-p"><?= $SectionPart ?></p>
        </div>
        <div class="row m-12">
            <div class="col-xs-12 text-center">
                <a class=" btn-part" href="assets/pdf/Flyer%20CLS-6.pdf" role="button">Plus d'informations</a>
            </div>
        </div>
    </div>
</section>

<section id="col">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Collectivité
                </div>
            </div>
        </div>

        <div class="row" id="collect-row-1">

            <div class="col-xs-6 col-6-colle">
                <p class="coll-p">
                    <?= $SectionCol1 ?>
                </p>
            </div>

            <div class="col-xs-6 col-6-colle">
                <div>

                    <img id="colimg1" src="assets/mairie.jpg">

                </div>
            </div>

        </div>

        <div class="row" >

            <div class="col-xs-6 col-6-colle" id="collimg2">
                <div>

                    <img id="colimg2" src="assets/ehpad.jpg">

                </div>
            </div>

            <div class="col-xs-6 col-6-colle">
                <p class="coll-p">
                    <?= $SectionCol2 ?>
                </p>
            </div>


        </div>

        <div class="row m-12">
            <div class="col-xs-12 text-center">
                <a class=" btn-part" href="assets/pdf/Plaquette%20digitale.pdf" role="button">Plus d'informations</a>
            </div>
        </div>
    </div>

</section>

<section id="projet">

    <div class="row">
        <div class="col-xs-12">
            <div class="section-header">
                Projet
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="https://cdn.discordapp.com/attachments/446049284694081546/968510748970057728/unknown.png" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.discordapp.com/attachments/446049284694081546/968510713859567626/unknown.png" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.discordapp.com/attachments/446049284694081546/968510683857715251/unknown.png" alt="...">
                <div class="carousel-caption">
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <style>

        #projet img{
            width: 50%;
            margin-left: 25%;
            margin-right: 25%;
        }
        @media (max-width: 737px) {
            #projet img{
                width: 100%;
                margin-left: unset;
                margin-right: unset;
            }

        }
    </style>


</section>




<section id="howto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Contact
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row" id="form-contact" style="border: solid 1px var(--color-page1-green);">

            <div class="col-xs-6" style="    background-color: #f2f2f2;">
                <div class="container">
                    <h1>Formulaire de contact</h1>
                    <form action="db/add.php" method="GET">
                        <label for="fname">Nom</label>
                        <input type="text" id="fname" placeholder="Votre nom" name="lastName" required>

                        <label for="fname">Prénom</label>
                        <input type="text" id="fname" placeholder="Votre prénom" name="firstName" required>


                        <label for="emailAddress">Email</label>
                        <input id="emailAddress" type="email" placeholder="Votre email" name="email" required>

                        <label for="sujet">Numéro de téléphone</label>
                        <input type="text" id="sujet" placeholder="Votre numéro" name="phone">

                        <label for="subject">Message</label>
                        <textarea id="subject" placeholder="Votre message" style="height:200px" name="content" required></textarea>

                        <input type="submit" value="Envoyer">
                    </form>
                </div>
            </div>



            <div class="col-xs-6">


                <div style="text-align: end;
                    box-sizing : border-box;
                    border-radius:5px;
                    padding:20px;
                    width: 100%;
                    max-width: 440px;
                    margin:0 auto;">

                    <h1 style="color: var(--color-page1-green);
                    width: 100%;
                    text-align: center;">
                        Nous contactez autrement
                    </h1>

                    <p style="text-align: center">

                        <br><br>


                        Notre numéro <br>
                        <j style="color: var(--color-page1-green)"><?= $SectionNum ?></j> <br><br>
                        Notre mail <br>
                        <j style="color: var(--color-page1-green)"><a id="green" href="mailto:<?= $SectionMail ?>"><?= $SectionMail ?></a></j> <br><br>

                        Notre adresse <br>
                        <j style="color: var(--color-page1-green)"><?= $SectionAdresse ?></j> <br><br>

                        Notre siret <br>
                        <j style="color: var(--color-page1-green)"><?= $SectionSiret ?></j> <br><br>


                        <br>

                        Plus d'informations sur CLS-Habitat : <br>
                        <br>
                        <?= $SectionContact ?>
                    </p>
                </div>

            </div>

            <style>
                #form-contact input[type=text], textarea, input[type=email] {
                    width: 100%;
                    padding: 12px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                    margin-top: 6px;
                    margin-bottom: 16px;
                    margin-right: 0px;
                    margin-left: 0px;
                    resize: vertical;
                }
                #form-contact label{margin-right: 0px;
                    margin-left: 0px;
                    width: 100%;}

                #form-contact input[type=submit] {
                    background-color: var(--color-page1-green);
                    color: white;
                    padding: 12px 20px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }

                #form-contact input[type=submit]:hover {
                    background-color: #588920;
                }

                #form-contact .container {
                    box-sizing : border-box;
                    border-radius:5px;
                    background-color:#f2f2f2;
                    padding:20px;
                    width: 100%;
                    max-width: 440px;
                    margin:0 auto;
                }
                #form-contact h1  {
                    text-align: center;
                    color: var(--color-page1-green);
                    width: 100%;
                }
            </style>
        </div><!-- /.row -->







    </div><!-- /.container -->


</section>





    <div class="fixed-bottom">

        <div>

            <img src="assets/label.webp">
        </div>


    </div>


<style>

    .fixed-bottom{
        position: fixed;
        right: 0;
        bottom: 1%;
        left: 2%;
        z-index: 1030;


    }

    div.fixed-bottom div img{

        transform: translate(0, 0);
        transform: translate3d(0, 0, 0);
        transition: transform 0.2s ease-out;
        will-change: transform;
    }

    div.fixed-bottom div img:hover{

        transform: translate(0, -4px);
        transform: translate3d(0, -4px, 0);
    }


</style>








<footer>
    <div class="container text-white d-flex align-items-center justify-content-between">
        <a id="logo1" href="#"><img src="assets/logoT.png" alt=""></a>
        <span>2022 © CLS-Habitat<br><a style="color: var(--color-page1-green)" href="legal.php">Mention Legal</a><br><a style="color: var(--color-page1-green)" href="panel/">Panel Admin</a></span>

            <p style="text-align: start">
                <a href="mailto:<?= $SectionMail ?>"><?= $SectionMail ?></a><br>
                <?= $SectionNum ?>

            </p>
    </div>
</footer>

<style>

    footer {
        background-color: #e6e8f0;
        border-top: 10px solid;
        border-color: var(--color-page1-green);
        min-height: 240px;
        padding: 50px 0;
    }

    footer div{
        color: black;
        text-align: center;
        align-items: center !important;
        justify-content: space-between !important;
        display: flex !important;
        margin-top: 20px;
    }
    footer span{
        text-align: center;
    }
    footer img {
        width: 224px;
        margin-left: -102px;
        transition: transform 0.2s ease-out;
        will-change: transform;
    }

    footer img:hover {
        -webkit-transform:scale(1.25); /* Safari et Chrome */
        -moz-transform:scale(1.25); /* Firefox */
        -ms-transform:scale(1.25); /* Internet Explorer 9 */
        -o-transform:scale(1.25); /* Opera */
        transform:scale(1.25);
    }

    footer a{
        color: black;
    }

    footer a:hover{
        color: black;
    }
</style>
<a href="#home" role="button" class="scrollTop">
    <svg class="lnr lnr-chevron-up"><use xlink:href="#lnr-chevron-up"></use></svg>
</a>


<script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>
<script  src="javascriptfile/notif.js"></script>

<?php if (!empty($_GET['err'])) {?>
    <script>
        if(Text != 1){
            iziToast.error({
                title: 'Erreur',
                position: 'bottomRight',
                message: 'Une erreur est survenue | Code : <?php echo $_GET['err']; ?>'
            });
        }
    </script>
<?php } ?>

<?php if (!empty($_GET['true'])) {?>
    <script>
        if(Text != 1){
            iziToast.success({
                title: 'OK',
                position: 'bottomRight',
                message: 'Votre demande a bien été envoyé !'
            });
        }
    </script>
<?php } ?>


</body> </html>