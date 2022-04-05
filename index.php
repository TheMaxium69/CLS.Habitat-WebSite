<?php include "app/app.php"; $page = 1; head($page); ?>
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
                    }

                </style>
                <!--<h1>ScrollSpy</h1>
                <h4>by Boomer</h4>-->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
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
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

                <p><highlight>Lorem Ipsum</highlight> is simply dummy text of the printing and typesetting industry. <strong>standard dummy text ever</strong>, <strong>since the 1500s</strong> when an unknown printer took a galley .</p>

                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text</p>
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
            <p class="part-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="row m-12">
            <div class="col-xs-12 text-center">
                <a class=" btn-part" href="" role="button">Plus d'informations</a>
            </div>
        </div>
    </div>
</section>

<section id="col">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Colectivité
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-xs-6">
                <p class="coll-p">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>

            <div class="col-xs-6">
                <div>

                    <img id="colimg1" src="assets/mairie.jpg">

                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-xs-6">
                <div>

                    <img id="colimg2" src="assets/ehpad.jpg">

                </div>
            </div>

            <div class="col-xs-6">
                <p class="coll-p">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>


        </div>

        <div class="row m-12">
            <div class="col-xs-12 text-center">
                <a class="btn-part" href="" role="button">Plus d'informations</a>
            </div>
        </div>
    </div>

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

        <div class="row" id="form-contact" style="border-top: solid 1px var(--color-page1-green); border-bottom: solid 1px  var(--color-page1-green)">

            <div class="col-xs-6" style="    background-color: #f2f2f2;">
                <div class="container">
                    <h1>Formulaire de contact</h1>
                    <form action="/action_page.php">
                        <label for="fname">Nom & prénom</label>
                        <input type="text" id="fname" name="firstname" placeholder="Votre nom et prénom">


                        <label for="emailAddress">Email</label>
                        <input id="emailAddress" type="email" name="email" placeholder="Votre email">

                        <label for="sujet">Numéro de téléphone</label>
                        <input type="text" id="sujet" name="sujet" placeholder="Votre numéro">

                        <label for="subject">Message</label>
                        <textarea id="subject" name="subject" placeholder="Votre message" style="height:200px"></textarea>

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
                    width: 100%;">
                        Nous contactez autrement
                    </h1>

                    <p style="text-align: center">

                        <br><br>


                        Notre numéro <br>
                        <j style="color: var(--color-page1-green)">+65 65 44 45 45</j> <br><br>
                        Notre mail <br>
                        <j style="color: var(--color-page1-green)">azeaz</j> <br><br>

                        <br><br>

                        Plus d'informations sur CLS-Habitat : <br>
                        <br>
                        Adresse
                        ...
                        ..

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
                    background-color: #37ff54;
                }

                #form-contact .container {
                    /* Ajouter box-sizing */
                    box-sizing : border-box;
                    border-radius:5px;
                    background-color:#f2f2f2;
                    padding:20px;
                    width: 100%;
                    /* redéfinition 400 + 2*20 */
                    max-width: 440px;
                    margin:0 auto;
                }
                #form-contact h1  {
                    color: var(--color-page1-green);
                    width: 100%;
                }
            </style>
        </div><!-- /.row -->







    </div><!-- /.container -->
</section>
<footer>
    <div class="container text-white d-flex align-items-center justify-content-between">
        <a id="logo1" href="#"><img src="assets/logoT.png" alt=""></a>
        <span>2022 © <a href="">CLS-Habitat</a><br>Site Web Created by Tyrolium</span>
            <p style="text-align: start">
                mail.com<br>
                +21 65465 654654

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



</body> </html>