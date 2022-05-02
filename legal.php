<?php include "app/app.php"; $page = 1; head($page);?>
<body>

<main>

    <section id="legal-title" class="container" style="padding-bottom: 20px;">
        <h1>
            Mention legals
        </h1>

        <hr>

    </section>

    <?php

    require "db/function.php";

    $AllEnv = getAllEnv();

    foreach ($AllEnv as $EnvSection){
        if ($EnvSection['name'] == "adresse"){ $SectionAdresse = $EnvSection; }
        if ($EnvSection['name'] == "mail"){ $SectionMail = $EnvSection; }
        if ($EnvSection['name'] == "numero"){ $SectionNum = $EnvSection; }
    }

    ?>

    <section id="info">
        <div id="info" class="container" style="text-align: center;">
            <div>
                <h2 style="text-align: center; margin-bottom: 20px; color: #32b618"><i class="fas fa-scroll"></i> Administratif de l'entreprise</h2>
                <p>Copyright © CLS-Habitat. 2022<br> © 2022 CLS-Habitat<br>All Right Reserved © CLS-Habitat</p>
                <p>Siège Social : <br> <?php echo $SectionAdresse['content'] ?></p>
                <p>Contact : <br> <?php echo $SectionMail['content'] ?> <br> <?php echo $SectionNum['content'] ?></p>
            </div>
            <h2 style="margin-top: 20px; color: #32b618"><i class="fas fa-paperclip"></i> Crédit du site web</h2>
            <div class="row">
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px; color: #32b618">Sources</h3>
                    <p class="no-p">Développement</p>
                    <small>- <a class="link" href="https://tyrolium.fr">Tyrolium</a> (© 2022 Tyrolium, Ent.)</small><br>
                    <p class="no-p">Hébergement</p>
                    <small>- <a class="link" href="https://solidserv.fr">SolidServ</a> (© 2022 SolidServ)</small><br>
                </div>
                <div class="col-6 textmore">
                    <h3 style="margin-bottom: 12px; margin-top: 20px;color: #32b618">Technologies</h3>
                    <p class="no-p">FrameWork</p>
                    <small>- TyroSiteFrameWork (<a class="link" href="https://github.com/TheMaxium69/TyroSiteFrameWork">Link</a>) </small><br>
                    <p class="no-p">Librairies</p>
                    <small>- Bootstrap-3.3.6 </small><br>
                    <small>- FontAwesome-5.15.4</small><br>
                    <small>- JQuery-2.2.4</small><br>
                    <small>- iziToast</small><br>
                    <small>- MaterialIcone</small><br>
                    <p class="no-p">Extentions</p>
                    <small>- PhpMyAdmin</small><br>
                    <small>- MySQL</small><br>
                    <p class="no-p">Languages</p>
                    <small>- HTML</small><br>
                    <small>- CSS</small><br>
                    <small>- JavaScript</small><br>
                    <small>- PHP</small><br>
                    <small>- SQL</small><br>
                </div>
            </div>

            <h2 style="margin-top: 20px;text-align: center; margin-bottom: 10px; color: #32b618"><i class="fas fa-balance-scale"></i> Droits</h2>
            <div style="text-align: center">
                <p class="no-p bold">L'intégralité du site et de ses contenus postés sur les serveurs, les contenus mis en ligne qui sont rendus publics, les images, les textes et tout les écrits, le design, le code-source, les logos, les visuels, les photos ainsi que les produits, appartiennent entièrement à CLS-Habitat.
                    <br>Cela grâce au copyright (© 2022 CLS-Habitat)
                    <br>Et à l'article L111-1 du code de la propriété intellectuelle française.</p>
            </div>
            <br>
            <div class="row">
                <div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Toutes les marques listées appartiennent à leur créateur. (Nom, produit et visuel associé.) </p>
                    <small>CLS-Habitat ®</small><br>
                    <br>
                </div>
                <!--<div class="col-6 textmore">
                    <p class="no-p" style="margin-bottom: 10px">- Tous les logos utilisés appartiennent à leur créateur.</p>
                    <small>© 2022 Meta</small><br>
                    <small>© LinkedIn Corporation 2022</small><br>
                </div>-->
            </div>
            <div style="text-align: center">
                <p class="no-p bold mobile">Informations Recoltées :</p>
                <p class="no-p">Toutes vos informations relatif à la communications entre vous et CLS-Habitat. Ne serviront jamais à une autre utilisation. Elle ne seront donc jamais revendues, ou partagées.</p>
            </div>

        </div>
    </section>


    <div style="margin-bottom: 70px"></div>
</main>

<style>
    p{
        margin-bottom: 0px;

    }

    a.link{
        color: #333;
    }
</style>


</body> </html>