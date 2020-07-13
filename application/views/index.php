
    <div class="hero-container">
        <div class="hero owl-carousel wow slideInRight" data-wow-delay="0.5s">
            <?php foreach ($slides as $slide){?>
                <div class="hero-item owl-lazy" data-src="assets/images/<?=$slide->img_src?>">
                    <div class="hero-content">
                        <h1 class="serif"><?=$slide->heading?></h1>
                        <p>
                            <?=$slide->descr?>
                        </p>
                        <button class="cta btn serif" onclick="showModal()">
                            Register Now
                        </button>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>

    <section class="about">
        <div class="wrapper">
                <h2>A little about us</h2>
                <div class="main">
                    <div class="image-container wow fadeInLeft" data-wow-offset="50">
                        <img src="<?=base_url('assets/images/about.jpg')?>" alt="Goals of Ramraj services" class="aboutImage">
                    </div>
                    <div class="content wow fadeInRight" data-wow-offset="50">
                        <p>
                            Total Agri Solutions is committed to the production of healthy food products with a vision to be the finest health food supplier globally by utilising a comprehensive range of technology.  Some of the major solutions that we provide are:
                        </p>
                        <ul class="list">
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp; Phygital (Physical + Digital) Support</li>
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp; Farming/Dairy Consultation</li>
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp;Market Assistant / Exposure / Reach / Sell Products</li>
                        </ul>
                        <span><a class="btn" href="about-us">Know more</a></span>
                    </div>
                </div>
        </div>
    </section>
    <section class="services1">
        <div class="wrapper">
            <?php foreach($services as $ser){?>
            <div class="service wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                    <img src="<?=base_url('assets/images/').$ser->img_src?>" alt="<?=$ser->name?>" height="80" style="object-fit:cover !important">
                <h3><?=$ser->name?></h3>
                <a href="<?=$pr->link_src?>" class="btn"><?=$ser->link_text?></a>
            </div>
            <?php }?>
        </div>
    </section>

    <section class="products">
        <div class="wrapper">
            <h2>Range of products</h2>
        </div>
        <div class="wrapper">
            <?php foreach($prods as $pr){?>
                <div class="product wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                    <img src="<?=base_url('assets/images/').$pr->img_src?>" alt="<?=$pr->name?>" height="50" style="object-fit:cover !important">
                    <h3><?=$pr->name?></h3>
                    <a href="<?=$pr->link_src?>" class="btn"><?=$pr->link_text?></a>
                </div>
            <?php }?>
        </div>
        <a href="<?=base_url('products')?>" class="btn allBtn">See all</a>
    </section>

    <section class="overview" id="overview" style="background:url('assets/images/success2.png') no-repeat ;">
        <div class="wrapper">
            <div class="content wow slideInLeft" data-wow-offset="50">
                <p>
                    <strong>Total Agri Solutions</strong> is committed to the production of healthy food products with a vision to be the finest health food supplier globally. We aim to reach this by utilising a comprehensive range of technology to enhance the quality and production in the agriculture sector.  
                </p>
                <a onclick="showModal()" class="btn serif">Register Now</a>
            </div>
        </div>
    </section>
    
    <section class="schemes">
        <div class="wrapper">
            <h2>Schemes</h2>
            <p class="wow fadeInUp" data-wow-offset="50">
                Various government schemes have been introduced to support the agriculture industry. In correspondence with these schemes, we offer the farmers an opportunity to flourish their business easily & effectively. Let's take a look at some of these schemes.
            </p>
        </div>
        <div class="scheme-container owl-carousel wow slideInRight" data-wow-offset="50" data-wow-delay="0.2s">
            <div class="scheme" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/shc-farmers.jpg') no-repeat;">
                <h1 class="short serif">
                    SHC
                </h1>
                <h3 class="full serif" >
                    Soil Health Card
                </h3>
            </div>
            <div class="scheme" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/pmksy-min.jpg') no-repeat;">
                <h1 class="short serif">
                    PMKSY
                </h1>
                <h3 class="full serif">Pradhan Mantri Krishi Sinchayee Yojana</h3>
            </div>
            <div class="scheme" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/NMSAlogo.png') no-repeat;">
                <h1 class="short serif">
                    NMSA
                </h1>
                <h3 class="full serif">
                    National Mission for Sustainable Agriculture
                </h3>
            </div>
            <div class="scheme" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/farm-machinery-bank.jpg') no-repeat;">
                <h1 class="short serif">
                    FMB
                </h1>
                <h3 class="full serif">
                    Farm Machinery Bank
                </h3>
            </div>
            <div class="scheme" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/pmfby.jpg') no-repeat;">
                <h1 class="short serif">
                    PMFBY
                </h1>
                <h3 class="full serif">
                    Pradhan Mantri Fasal Bima Yojana
                </h3>
            </div>
            <div class="scheme" style="background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/e-nam.jpg') no-repeat;">
                <h1 class="short serif">
                    E-NAM
                </h1>
                <h3 class="full serif">
                    e- National Agriculture Market
                </h3>
            </div>
        </div>
    </section>

    <section class="solutions" id="solutions">
        <h2>Our Projects</h2>
        <div class="wrapper">
            <div class="tab wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                <?php $i=0; foreach($projects as $p){?>
                    <button class="tablinks serif" onclick="openSolution(event, '<?=$i?>')" id="defaultOpen"><?=$p->heading?></button>
                <?php $i++; }?>
                    <button class="tablinks serif allBtn" onclick="redirectTo('projects')">See all</button>
              </div>
              
              <div class="content-container wow fadeInUp" data-wow-offset="50" data-wow-delay="0.2s">
                <?php $i=0; foreach($projects as $p){?>
                  <div id="<?=$i?>" class="tabcontent">
                    <h3 class="serif"><?=$p->heading?></h3>
                    <p><?=$p->descr?></p>
                    <img src="assets/images/<?=$p->img_src?>" alt="<?=$p->img_src?> with Total Agrisolutions">
                  </div>
                <?php $i++; }?>
              </div>
        </div>
    </section>

    <section class="success">
        <h2 class="hidden wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">Success Stories</h2>
        <div class="img wow fadeInUp" data-wow-offset="50" data-wow-delay="0s" style="background: url('assets/images/success.png') no-repeat;"></div>
        <div class="content">
            <div class="stories">
                <h2 class="in-head">Success Stories</h2>
                <div class="story-container owl-carousel owl-theme wow slideInRight" data-wow-offset="50" data-wow-delay="0.2s">
                    <?php foreach($feedbacks as $feedback){?>
                        <div class="story">
                            <p class="feedback">
                                <?=$feedback->content?>
                            </p>
                            <p class="name">
                                - <?=$feedback->name?>
                            </p>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="target">
                <p>
                    Try our services & enjoy being a more productive farmer like them. 
                    <span> <a onclick="showModal()" class="btn serif"> Register Now </a> </span>
                </p>
            </div>
        </div>
    </section>

    <section class="events" id="events">
        <div class="wrapper">
            <h2>Latest Events</h2>
            <div class="events-container owl-carousel wow slideInRight" data-wow-offset="50" data-wow-delay="0s">
                <?php foreach($events as $event){?>
                    <a href="<?=base_url('event/'.$event->id.'/'.$event->slug)?>" class="event" style="background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('assets/images/<?=$event->img_src?>') no-repeat">
                        <div class="event-descr">
                            <h3 class="serif"> <?=$event->heading?></h3>
                            <p><?=date('d-m-Y',strtotime($event->date))?></p>
                            <p><span>See this</span>&nbsp;<i class="fa fa-caret-right"></i></p>
                        </div>
                    </a>
                <?php }?>
            </div>
            <span><a class="btn" href="events">See all</a></span>
        </div>
    </section>

    <section class="counts" style="background: linear-gradient(rgba(162,211,162,0.7),rgba(162,211,162,0.7)), url('assets/images/agriculture-clouds-corn-corn-field-539282-min.jpg') no-repeat;">
        <div class="wrapper">
            <div class="counts-container">
                <div class="count">
                    <h1 class="counter" data-target="300">0</h1>
                    <h3 class="serif">Farmers re-organised</h3>
                </div>
                <div class="count mid-count">
                    <h1 class="counter" data-target="500">0</h1>
                    <h3 class="serif">Farmers are happier</h3>
                </div>
                <div class="count">
                    <h1 class="counter" data-target="20">0</h1>
                    <h3 class="serif">Villages now trust us</h3>
                </div>
            </div>
            <a onclick="showModal()" class="btn serif">Register Now</a>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="wrapper">
            <h2>Gallery</h2>
            <div class="content wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                <?php $i=0; while($i<$lim){?>
                    <a href="assets/images/<?=$gallery[$i]->img_src?>" class="spotlight"><img class="lazyload" data-src="assets/images/<?=$gallery[$i]->img_src?>" alt="Total AgriSolutions Photo"></a>
                <?php $i++; }?>
            </div>
            <a href="media" class="btn"> See All Photos <i class='fas fa-arrow-right'> </i></a>
        </div>
    </section>

    <script src="<?=base_url('assets/')?>js/owl.carousel.min.js"></script>

    <script>
        // Hero slider
        $('.hero').owlCarousel({
            animateOut: 'fadeOutLeft',
            animateIn: 'fadeInRight',
            loop:true,
            nav:true,
            autoplay: true,
            autoplayTimeout:3000,
            // autoplayHoverPause:true,
            dots:false,
            lazyLoad: true,
            navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })

        // Testimonial slider
        $('.story-container').owlCarousel({
            // animateOut: 'fadeOut',
            loop:true,
            nav:true,
            autoplay: true,
            autoplayTimeout:3000,
            autoplayHoverPause:true,
            dots:false,
            navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
        
        // Events slider
        $('.events-container').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            // autoplay: true,
            autoplayTimeout:3000,
            lazyLoad: true,
            dots:false,
            navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })

         // Govt. schemes slider
         $('.scheme-container').owlCarousel({
            loop:true,
            margin:40,
            responsiveClass:true,
            dots : false,
            nav:true,
            navText: ["<i class='fas fa-arrow-left'></i>","<i class='fas fa-arrow-right'></i>"],
            autoplay: true,
            autoplaySpeed: 1500,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:2,
                },
                400:{
                    items:3,
                },
                600:{
                    items:5,
                },
                1000:{
                    items:6,
                },
                1920 : {
                    items: 8
                }
            }
         });

        // On-scroll target buttons visible
        $(function () {
            $(document).scroll(function () {
                var $block = $(".resp-tgt-btn");
                var $scrollHeight= 450 ;
                $block.toggleClass('show', $(this).scrollTop() > $scrollHeight);
            });
        });

        // page redirection
        function redirectTo(sUrl) {
            window.location = sUrl
        }
    </script>
