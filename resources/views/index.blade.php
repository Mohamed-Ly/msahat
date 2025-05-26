<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>مساحات</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('index/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('index/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('index/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome File -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('index/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('index/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('index/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('index/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('index/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('index/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container-fluid" style="display: flex; justify-content: space-between; align-items: center;">

            <div id="logo" class="pull-left">
                <h1><a href="#intro" class="scrollto"><img
                            src="{{ asset('attachments/img/' . $sitting->company_logo) }}" alt=""><span
                            class="msahat-txt-logo">{{ $sitting->company_name }}</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a> -->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu ul-edt">
                    <!-- <li><a href="#portfolio">أعمالـــنا</a></li> -->
                    <!-- <li><a href="#team">فريق العمل</a></li> -->
                    <li><a href="#contact">تواصـــل</a></li>
                    <li><a href="#services">خدمــاتنا</a></li>
                    <li><a href="#about">عــن الشــركة</a></li>
                    <li class="menu-active"><a href="#intro">الرئـــــيسية</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro">
        <div class="intro-container">
            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <div class="carousel-background"><img src="{{ asset('index/img/intro-carousel/1.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>نحن شركة مساحات</h2>
                                <p>في مساحات، نقدم حلولاً مبتكرة في مجال التكنولوجيا، من تطوير الأنظمة المتكاملة إلى
                                    تصميم وتطوير مواقع
                                    الويب والتطبيقات الحديثة. رؤيتنا هي تقديم تجارب رقمية متميزة تلبي تطلعات عملائنا
                                    وتسهم في تحقيق
                                    نجاحهم.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">اكتشف المزيد</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('index/img/intro-carousel/2.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>حلول تقنية مبتكرة</h2>
                                <p>نؤمن في مساحات بأن التكنولوجيا هي المفتاح لتحقيق التحول الرقمي. لذلك نعمل على تقديم
                                    خدمات متكاملة
                                    تلبي احتياجات الأفراد والشركات، بدءًا من تصميم المواقع الاحترافية إلى تطوير
                                    التطبيقات الذكية.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">اكتشف المزيد</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('index/img/intro-carousel/3.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>شريكك في النجاح الرقمي</h2>
                                <p>سواء كنت تبحث عن بناء موقع إلكتروني يبرز علامتك التجارية، أو تطوير نظام يساعد على
                                    تحسين كفاءة عملك،
                                    نحن في مساحات هنا لنكون شريكك الموثوق في رحلتك الرقمية.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>


                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('index/img/intro-carousel/4.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>نبتكر حلولاً مستقبلية</h2>
                                <p>في مساحات، نعمل على تصميم وتطوير أنظمة متقدمة تلبي متطلبات العصر الرقمي. من بناء
                                    مواقع ويب مميزة إلى
                                    تطوير تطبيقات ذكية، نهدف إلى تقديم تقنيات تفتح آفاقًا جديدة لعملائنا.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">ابدأ الآن</a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="carousel-background"><img src="{{ asset('index/img/intro-carousel/5.jpg') }}"
                                alt=""></div>
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2>نحو تجربة رقمية متكاملة</h2>
                                <p>نسعى في مساحات إلى تحقيق تجربة مستخدم استثنائية من خلال توفير حلول تقنية مبتكرة تلائم
                                    احتياجات
                                    الأفراد والشركات. رؤيتنا هي تحويل الأفكار إلى واقع ملموس من خلال التكنولوجيا.</p>
                                <a href="#featured-services" class="btn-get-started scrollto">اكتشف المزيد</a>
                            </div>
                        </div>
                    </div>


                </div>

                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
    </section><!-- #intro -->

    <main id="main">

        <!--==========================
      Featured Services Section
    ============================-->
        <section id="featured-services">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 box">
                        <i class="fa fa-cogs"></i>
                        <h4 class="title"><a href="">تطوير الأنظمة</a></h4>
                        <p class="description">نقدم حلولًا مخصصة لتطوير الأنظمة التي تلبي احتياجات الشركات، مع التركيز
                            على الكفاءة
                            والأداء العالي.</p>
                    </div>

                    <div class="col-lg-4 box box-bg">
                        <i class="fa fa-globe"></i>
                        <h4 class="title"><a href="">تصميم مواقع ويب</a></h4>
                        <p class="description">نعمل على تصميم مواقع مبتكرة تجمع بين الجمالية والوظيفية لتوفير تجربة
                            مستخدم
                            استثنائية.</p>
                    </div>

                    <div class="col-lg-4 box">
                        <i class="fa fa-mobile"></i>
                        <h4 class="title"><a href="">تطوير التطبيقات الذكية</a></h4>
                        <p class="description">نصمم ونطور تطبيقات ذكية تلبي احتياجات العصر الرقمي، مع التركيز على تجربة
                            المستخدم
                            والابتكار.</p>
                    </div>

                </div>
            </div>
        </section><!-- #featured-services -->


        <!--==========================
      About Us Section
    ============================-->
        <section id="about">
            <div class="container">

                <header class="section-header">
                    <h3>من نحن</h3>
                    <p>في شركة مساحات، نقدم حلولًا تقنية مبتكرة تجمع بين الإبداع والتقنيات الحديثة لتلبية احتياجات
                        عملائنا في
                        تطوير الأنظمة، تصميم المواقع، وتطوير التطبيقات الذكية. رؤيتنا هي تمكين عملائنا من تحقيق أهدافهم
                        الرقمية
                        بفعالية.</p>
                </header>

                <div class="row about-cols" style="text-align: center;">

                    <div class="col-md-4 wow fadeInUp">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('index/img/about-mission.jpg') }}" alt="Mission"
                                    class="img-fluid">
                                <div class="icon"><i class="fa fa-bullseye"></i></div>
                            </div>
                            <h2 class="title"><a href="#">رسالتنا</a></h2>
                            <p>
                                نلتزم في مساحات بتقديم خدمات تقنية مبتكرة تسهم في تمكين عملائنا وتحقيق تطلعاتهم. نسعى
                                دائمًا للريادة من
                                خلال تقديم حلول تعتمد على الجودة والكفاءة.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('index/img/about-plan.jpg') }}" alt="Plan" class="img-fluid">
                                <div class="icon"><i class="fa fa-list-alt"></i></div>
                            </div>
                            <h2 class="title"><a href="#">خطتنا</a></h2>
                            <p>
                                نعتمد في خططنا على تحليل احتياجات العملاء وتصميم حلول مخصصة تضمن تقديم قيمة حقيقية. نهدف
                                إلى بناء شراكات
                                مستدامة من خلال الالتزام بأعلى معايير الجودة.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="about-col">
                            <div class="img">
                                <img src="{{ asset('index/img/about-vision.jpg') }}" alt="Vision"
                                    class="img-fluid">
                                <div class="icon"><i class="fa fa-eye"></i></div>
                            </div>
                            <h2 class="title"><a href="#">رؤيتنا</a></h2>
                            <p>
                                رؤيتنا هي أن نصبح الشريك التقني الأول لعملائنا، من خلال تقديم خدمات مبتكرة تساعدهم على
                                تحقيق تحول رقمي
                                يواكب تطلعاتهم المستقبلية.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- #about -->


        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container">

                <header class="section-header wow fadeInUp">
                    <h3>خدماتنا</h3>
                    <p>نقدم في شركة مساحات مجموعة من الحلول التقنية التي تجمع بين الابتكار والكفاءة. خدماتنا تشمل تطوير
                        الأنظمة
                        المخصصة، تصميم مواقع الويب الحديثة، وتطوير التطبيقات الذكية لتلبية احتياجات عملائنا.</p>
                </header>

                <div class="row">

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="fa fa-desktop"></i></div>
                        <h4 class="title"><a href="">تطوير الأنظمة</a></h4>
                        <p class="description">نصمم ونطور أنظمة مخصصة لتحسين أداء الشركات وتلبية احتياجاتها التقنية
                            بأعلى معايير
                            الجودة.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="fa fa-code"></i></div>
                        <h4 class="title"><a href="">تصميم مواقع الويب</a></h4>
                        <p class="description">نوفر خدمات تصميم وتطوير مواقع ويب مبتكرة تجمع بين الجمال الوظيفي وتجربة
                            المستخدم
                            المتميزة.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                        <div class="icon"><i class="fa fa-mobile"></i></div>
                        <h4 class="title"><a href="">تطوير التطبيقات</a></h4>
                        <p class="description">نطور تطبيقات ذكية تلبي احتياجات العصر الرقمي مع التركيز على الابتكار
                            وسهولة
                            الاستخدام.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="fa fa-cloud"></i></div>
                        <h4 class="title"><a href="">الحوسبة السحابية</a></h4>
                        <p class="description">نساعد الشركات في تبني حلول الحوسبة السحابية لتحسين الأداء وتقليل
                            التكاليف التشغيلية.
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="fa fa-shield-alt"></i></div>
                        <h4 class="title"><a href="">الأمن السيبراني</a></h4>
                        <p class="description">نقدم حلولاً متكاملة لحماية البيانات والشبكات من التهديدات السيبرانية
                            المتزايدة.</p>
                    </div>

                    <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                        <div class="icon"><i class="fa fa-lightbulb"></i></div>
                        <h4 class="title"><a href="">الابتكار التقني</a></h4>
                        <p class="description">نساعد عملاءنا على تحويل أفكارهم إلى حلول تقنية مبتكرة تعزز من تنافسيتهم
                            في السوق.</p>
                    </div>

                </div>

            </div>
        </section><!-- #services -->


        <!--==========================
      Call To Action Section
    ============================-->
        <section id="call-to-action" class="wow fadeIn">
            <div class="container text-center">
                <h3>دعوة لاتخاذ خطوة</h3>
                <p>هل تبحث عن حلول تقنية مبتكرة تساعدك في تحقيق أهدافك؟ في شركة مساحات، نحن هنا لتحويل أفكارك إلى واقع.
                    تواصل
                    معنا اليوم لبدء رحلتك نحو التحول الرقمي وتحقيق النجاح.</p>
                <a class="cta-btn" href="#contact">تواصل معنا الآن</a>
            </div>
        </section><!-- #call-to-action -->


        <!--==========================
          Skills Section
    ============================-->
        <section id="skills">
            <div class="container">

                <header class="section-header">
                    <h3>مهاراتنا</h3>
                    <p>نتميز في شركة مساحات بمجموعة واسعة من المهارات التقنية التي تمكننا من تقديم حلول مبتكرة وشاملة.
                        خبراتنا
                        تغطي تصميم وتطوير المواقع، البرمجة، وتحليل البيانات، مما يساعد عملاءنا على تحقيق أهدافهم بكفاءة.
                    </p>
                </header>

                <div class="skills-content">

                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="95" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">تطوير الأنظمة <i class="val">95%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">تصميم المواقع <i class="val">90%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">تطوير التطبيقات <i class="val">85%</i></span>
                        </div>
                    </div>

                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                            aria-valuemax="100">
                            <span class="skill">تحليل البيانات <i class="val">80%</i></span>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!--==========================
          Facts Section
    ============================-->
        <section id="facts" class="wow fadeIn">
            <div class="container">

                <header class="section-header">
                    <h3>حقائق وإنجازات</h3>
                    <p>في مساحات، نفتخر بما حققناه من إنجازات تقنية ومساهمات ملموسة في دعم عملائنا وشركائنا على مدار
                        السنوات.</p>
                </header>

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">30</span>
                        <p>عميل راضٍ</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">0</span>
                        <p>مشروع مكتمل</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">0</span>
                        <p>ساعات دعم فني</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-toggle="counter-up">3</span>
                        <p>فريق عمل متفانٍ</p>
                    </div>

                </div>

                <div class="facts-img">
                    <img src="{{ asset('index/img/facts-img.png') }}" alt="إنجازات شركة مساحات" class="img-fluid">
                </div>

            </div>
        </section><!-- #facts -->


        <!--==========================
      Portfolio Section
    ============================-->
        <!-- <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">أعمالـــنا</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">الكـــل</li>
              <li data-filter=".filter-app">تطبيقــات</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 1</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 2</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>#portfolio -->

        <!--==========================
      Clients Section
    ============================-->
        <!-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section> -->
        <!-- #clients -->

        <!--==========================
      Clients Section
    ============================-->
        <!-- <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section> -->
        <!-- #testimonials -->

        <!--==========================
      Team Section
    ============================-->
        <!-- <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Team</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 wow fadeInUp">
            <div class="member">
              <img src="img/team-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team-4.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  <div class="social">
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
        <!-- #team -->

        <!--==========================
      Contact Section
    ============================-->
        <!-- <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>تــواصـــل معــــنا</h3>
          <p>يمكنك الاستفسار عن طريق احد طرق الاتصال التالية</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>العنوان</h3>
              <address>طرابلس , ليبيا</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>رقــم الهاتف</h3>
              <p><a href="tel:+218913252970">+218 913252970</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>البريد الألكتروني</h3>
              <p><a href="mailto:info@msahat.ly">info@msahat.ly</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required"
                  data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section> -->
        <!-- #contact -->


        <!-- ======================= START MY NEW CONTACT EDIT ======================= -->
        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <div class="section-header">
                <h3>تــواصـــل معــــنا</h3>
                <p>يمكنك الاستفسار عن طريق احد طرق الاتصال التالية</p>
            </div>

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">

                            <div class="info-item d-flex" style="justify-content: end; align-items: center;" data-aos="fade-up"
                                data-aos-delay="200">
                                <div style="text-align: right;">
                                    <h3>العنوان</h3>
                                    @foreach ($Sitting_contact as $item)
                                        <address>{{ $item->address }}</address>
                                    @endforeach
                                </div>
                                <i class="fa-solid fa-location-dot"></i>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" style="justify-content: end; align-items: center;" data-aos="fade-up"
                                data-aos-delay="300">
                                <div style="text-align: right;">
                                    <h3>رقــم الهاتف</h3>
                                    @foreach ($Sitting_contact as $item)
                                        <p><a href="tel:+218913252970">{{ $item->phone }}</a></p>
                                    @endforeach
                                </div>
                                <i class="fa-solid fa-phone"></i>
                            </div><!-- End Info Item -->


                            <div class="info-item d-flex" style="justify-content: end; align-items: center;" data-aos="fade-up"
                                data-aos-delay="400">

                                <div style="text-align: right;">
                                    <h3>البريد الألكتروني</h3>
                                    @foreach ($Sitting_contact as $item)
                                        <p><a href="mailto:info@msahat.ly">{{ $item->email }}</a></p>
                                    @endforeach
                                </div>

                                <i class="fa-solid fa-envelope"></i>
                            </div><!-- End Info Item -->

                            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6702.019783551211!2d13.183284699999989!3d32.871457699999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2sly!4v1746629161559!5m2!1sar!2sly"
                                frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>

                    </div>

                    <div class="col-lg-7">
                        <form action="{{ route('contact.send') }}" method="post" class="php-email-form"
                            data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                @csrf
                                <div class="col-md-6 mb-3">
                                    <label for="email-field" class="pb-2 contact-frm-lbl">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email" id="email-field"
                                        required="">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="name-field" class="pb-2 contact-frm-lbl">الإسم الكامل</label>
                                    <input type="text" name="name" id="name-field" class="form-control"
                                        required="">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="subject-field" class="pb-2 contact-frm-lbl">الموضوع</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field"
                                        required="">
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label for="message-field" class="pb-2 contact-frm-lbl">الرسالة</label>
                                    <textarea class="form-control" name="msg" rows="10" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <!-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div> -->

                                    <button type="submit">إرسال</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->
        <!-- ======================= END MY NEW CONTACT EDIT ======================= -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-info">
                        <h3>مســـــــــاحــــات</h3>
                        <p>في مساحات، نقدم حلولاً مبتكرة في مجال التكنولوجيا، من تطوير الأنظمة المتكاملة إلى تصميم
                            وتطوير مواقع
                            الويب والتطبيقات الحديثة. رؤيتنا هي تقديم تجارب رقمية متميزة تلبي تطلعات عملائنا وتسهم في
                            تحقيق نجاحهم.
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>روابـــط مهمة</h4>
                        <ul>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">الرئـــــيسية</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">عن الشركة</a></li>
                            <li><i class="ion-ios-arrow-right"></i> <a href="#">خدمــاتنا</a></li>
                            <!-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Terms of service</a></li> -->
                            <!-- <li><i class="ion-ios-arrow-right"></i> <a href="#">Privacy policy</a></li> -->
                        </ul>
                    </div>

                    {{-- <div class="col-lg-3 col-md-6 footer-contact">
            <h4>تواصل معــــنا</h4>
            <p>
              @foreach ($Sitting_contact as $item)
              <strong>العنوان:</strong>{{$item->address}}<br>
              <strong>رقــم الهاتف:</strong>{{$item->phone}}<br>
              <strong>البريد الألكتروني:</strong>{{$item->email}}<br>
              @endforeach
            </p>

            <!-- <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div> -->

          </div> --}}

                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <h4>أخــر الأخبــار</h4>
                        <p>نعمل على تطوير نظام يسمى (مسوق) يقدم حل للمسوقين واصحاب المتاجر لتسهيل البيع بالجملة</p>
                        <!-- <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form> -->
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4>تواصل معــــنا</h4>

                        <div class="social-links">
                            <a target="_blank" href="{{ $sitting->facebook_url }}" class="twitter"><i class="fa-brands fa-square-facebook"></i></a>
                            <a target="_blank" href="{{ $sitting->instagram_url }}" class="facebook"><i class="fa-brands fa-square-instagram"></i></a>
                            <a target="_blank" href="{{ $sitting->linkedin_url }}" class="instagram"><i class="fa-brands fa-linkedin"></i></a>
                            <a target="_blank" href="{{ $sitting->tiktok_url }}" class="google-plus"><i class="fa-brands fa-tiktok"></i></a>
                            <a target="_blank" href="{{ $sitting->youtube_url }}" class="linkedin"><i class="fa-brands fa-youtube"></i></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; حقوق الطبع والنشر <strong>مســـــــــاحــــات</strong>. جميع الحقوق محفوظة
                صمم بواسطة
            </div>
            <div class="credits">
                <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
                صمم بواسطة<a href="https://msahat.ly/"> مســـــــــاحــــات </a>
            </div>
        </div>
    </footer><!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('index/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('index/lib/jquery/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('index/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('index/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('index/lib/superfish/hoverIntent.js') }}"></script>
    <script src="{{ asset('index/lib/superfish/superfish.min.js') }}"></script>
    <script src="{{ asset('index/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('index/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('index/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('index/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('index/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('index/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <script src="{{ asset('index/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>
    <!-- Contact Form JavaScript File -->
    <script src="{{ asset('index/contactform/contactform.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('index/js/main.js') }}"></script>

</body>

</html>
