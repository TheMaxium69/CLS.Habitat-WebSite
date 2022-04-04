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
                <a class="tutorials-link " href="" role="button">Collectivité</a>
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
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row">
            <div class="video-roll--container col-xs-12">
                <ul class="video-roll">
                    <li><a></a></li>
                    <li><a></a></li>
                    <li><a></a></li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div>
            <p class="part-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        </div>
        <div class="row m-12">
            <div class="col-xs-12 text-center">
                <a class=" btn-part" href="" role="button">Plus d'informations</a>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Features
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="feature-container col-xs-12">
                <div class="row">
                    <div class="feature col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-0 text-center">
                        <svg class="lnr lnr-magic-wand"><use xlink:href="#lnr-magic-wand"></use></svg>
                        <h4>Animated Scroll</h4>
                        <p>Smooth, animated scroll between navigation links</p>
                    </div><!-- /.feature -->

                    <div class="feature col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 text-center">
                        <svg class="lnr lnr-map-marker"><use xlink:href="#lnr-map-marker"></use></svg>
                        <h4>Page Location</h4>
                        <p>Track page locations when scrolling</p>
                    </div><!-- /.feature -->

                    <div class="feature col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-0 text-center">
                        <svg class="lnr lnr-bullhorn"><use xlink:href="#lnr-bullhorn"></use></svg>
                        <h4>Focus Events</h4>
                        <p>Draw user attention to navigated sections</p>
                    </div><!-- /.feature -->
                </div><!-- /.row -->
            </div><!-- /.feature-container -->

        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container-fluid">
        <div class="banner row">
            <div class="banner-child bc-left col-sm-6">
                <div class="section-sub-header">
                    Animated Scroll
                </div>

                <div class="animated-scroll">
                    <div class="scroll-header">
                        <div class="scroll-nav sn-1"></div>
                        <div class="scroll-nav sn-2"></div>
                        <div class="scroll-nav sn-3"></div>
                        <svg class="cursor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve"><path d="M7,2l12,11.2l-5.8,0.5l3.3,7.3l-2.2,1l-3.2-7.4L7,18.5V2"/></svg>
                    </div><!-- /.scroll-header -->

                    <div class="scroll-body">
                        <div class="scroll-child sc-1"></div>
                        <div class="scroll-child sc-2"></div>
                        <div class="scroll-child sc-3"></div>
                        <div class="scroll-child sc-back-to-top"></div>
                    </div><!-- /.scroll-body -->
                </div><!-- /.animated scroll -->
            </div><!-- /.banner-child -->

            <div class="banner-child bc-right col-sm-6">
                <div class="section-sub-header">
                    Focus Events | UX
                </div>

                <div class="focus-events">
                    <div class="scroll-header">
                        <div class="scroll-nav sn-1"></div>
                        <div class="scroll-nav sn-2"></div>
                        <svg class="cursor" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 24 24" id="Layer_1" version="1.0" viewBox="0 0 24 24" xml:space="preserve"><path d="M7,2l12,11.2l-5.8,0.5l3.3,7.3l-2.2,1l-3.2-7.4L7,18.5V2"/></svg>
                    </div><!-- /.scroll-header -->

                    <div class="scroll-body">
                        <div class="scroll-child sc-1">
                            <div class="header"></div>
                            <div class="sub-header"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                        </div>
                        <div class="scroll-child sc-2">
                            <div class="header"></div>
                            <div class="sub-header"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                            <div class="body"></div>
                        </div>
                    </div><!-- /.scroll-body -->
                </div><!-- /.animated scroll -->
            </div><!-- /.banner-child -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section><!-- /#features -->

<section id="howto">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-header">
                    Contact
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <div class="section-sub-header">
                    Offest a Fixed Navbar
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#navbar-example"</span> <span class="na">data-offset=</span><span class="s">"70"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/body&gt;</span></code></pre>
                </figure>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-12">
                <figure class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;body</span> <span class="na">data-spy=</span><span class="s">"scroll"</span> <span class="na">data-target=</span><span class="s">"#navbar-example"</span> <span class="na">data-offset=</span><span class="s">"70"</span><span class="nt">&gt;</span>
  ...
<span class="nt">&lt;/body&gt;</span></code></pre>
                </figure>
            </div><!-- /.col -->
        </div><!-- /.row -->





    </div><!-- /.container -->
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4>
                    This is a footer
                </h4>
            </div>
        </div>
    </div>
</footer>
<a href="#home" role="button" class="scrollTop">
    <svg class="lnr lnr-chevron-up"><use xlink:href="#lnr-chevron-up"></use></svg>
</a>



</body> </html>