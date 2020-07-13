
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
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp; Soil Testing</li>
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp; Rented machinery</li>
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp; Import/Export of Agriculture Products</li>
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp;  24/7 Consultancy</li>
                            <li><i class="fa fa-check-circle" style="color:#5cb85c"></i>&nbsp;  Artificial Insemination</li>
                        </ul>
                        <span><a class="btn" href="about-us">Know more</a></span>
                    </div>
                </div>
        </div>
    </section>
    <section class="services1">
        <div class="wrapper">
            <div class="service wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 512 512">
                    <circle cx="184" cy="176" r="8"/><circle cx="104" cy="176" r="8"/><path d="M136,200h16a8,8,0,0,0,0-16h-8v-8a8,8,0,0,0-16,0v16A8,8,0,0,0,136,200Z"/><path d="M36.566,215.75a111.628,111.628,0,0,0,18.306,36.111A40.046,40.046,0,0,0,32,288V456a24.028,24.028,0,0,0,24,24H248a24.027,24.027,0,0,0,24-24V440a23.889,23.889,0,0,0-1.376-8h43.86l-2.468,39.5A8,8,0,0,0,320,480h96a8,8,0,0,0,7.984-8.5L421.516,432H470a26.029,26.029,0,0,0,26-26V266a26.029,26.029,0,0,0-26-26H250a25.97,25.97,0,0,0-20.7,10.286A40.068,40.068,0,0,0,216,248H191.55a82.333,82.333,0,0,0,25.437-32H248a24.028,24.028,0,0,0,24-24V160a24.039,24.039,0,0,0-16.206-22.694,111.994,111.994,0,0,0-223.588,0A24.039,24.039,0,0,0,16,160v32A24.034,24.034,0,0,0,36.566,215.75ZM194.432,104.668a63.673,63.673,0,0,1,13,30.906c-17.88-1.781-29.162-8.889-35.224-14.152A180.9,180.9,0,0,0,194.432,104.668ZM80.549,135.755a63.932,63.932,0,0,1,102.5-42.409C171.967,103,133.691,132.787,80.549,135.755Zm6.829,104.26A82.308,82.308,0,0,0,96.45,248H72.422a95.731,95.731,0,0,1-18.964-32H71.013A81.833,81.833,0,0,0,87.378,240.015ZM155.056,264,144,286.111,132.944,264ZM256,456a8.009,8.009,0,0,1-8,8H224V432h24a8.009,8.009,0,0,1,8,8Zm-6-40a10.011,10.011,0,0,1-10-10v-6h76.484l-1,16Zm78.516,48,7-112h64.968l7,112ZM470,416H420.516l-1-16H480v6A10.011,10.011,0,0,1,470,416ZM250,256H470a10.011,10.011,0,0,1,10,10V384H418.516l-2.532-40.5A8,8,0,0,0,408,336H328a8,8,0,0,0-7.984,7.5L317.484,384H240V266A10.011,10.011,0,0,1,250,256Zm-25.984,9.381c0,.207-.016.411-.016.619V406a25.843,25.843,0,0,0,2,10H96V360a8,8,0,0,0-16,0v64a8,8,0,0,0,8,8H208v32H56a8.009,8.009,0,0,1-8-8V288a24.04,24.04,0,0,1,18.305-23.312,112.423,112.423,0,0,0,26,18.691A8,8,0,1,0,99.7,269.19,96.56,96.56,0,0,1,90.908,264h24.148l21.789,43.578a8,8,0,0,0,14.31,0L172.944,264H216A24.086,24.086,0,0,1,224.016,265.381ZM189.2,228.809a62.827,62.827,0,0,1-90.4,0A65.078,65.078,0,0,1,80,183V151.807c31.457-1.465,58.014-11.346,77.9-21.966,7.143,7.344,23.015,19.758,50.1,21.853V183A65.078,65.078,0,0,1,189.2,228.809ZM256,192a8.009,8.009,0,0,1-8,8H222.2A81.483,81.483,0,0,0,224,183V152h24a8.009,8.009,0,0,1,8,8ZM144,48a96.127,96.127,0,0,1,95.664,88H223.6a80,80,0,0,0-159.2,0H48.336A96.127,96.127,0,0,1,144,48ZM32,160a8.009,8.009,0,0,1,8-8H64v31a81.483,81.483,0,0,0,1.805,17H40a8.009,8.009,0,0,1-8-8Z"/><path d="M176,200a7.992,7.992,0,0,0-7.149,4.425l-.006,0,.053-.1c-.257.476-6.51,11.682-24.9,11.682s-24.641-11.206-24.9-11.682l.053.1-.006,0a7.993,7.993,0,1,0-14.3,7.15l-.006,0c.016.032.052.1.1.187l.047.088C106.333,214.344,116.823,232,144,232s37.667-17.656,39.011-20.147l.047-.088c.045-.086.081-.155.1-.187l-.006,0A7.987,7.987,0,0,0,176,200Z"/>
                </svg>
                <h3>Phygital (Physical + Digital) <br> Support</h3>
            </div>
            <div class="service wow fadeInUp" data-wow-offset="50" data-wow-delay="0.2s">
                <svg viewBox="0 0 496 496" xmlns="http://www.w3.org/2000/svg">
                    <path d="m248 129.078125 58.894531-49.078125h77.105469v-80h-192v80h56zm-40-65.078125v-48h160v48h-66.894531l-37.105469 30.921875v-30.921875zm0 0"/><path d="m224 32h16v16h-16zm0 0"/><path d="m256 32h64v16h-64zm0 0"/><path d="m336 32h16v16h-16zm0 0"/><path d="m407.238281 480-6.46875-64.761719c26.710938-4.222656 47.230469-27.351562 47.230469-55.238281v-104h-32v-11.054688c0-10.875-5.976562-20.640624-15.585938-25.648437 9.554688-8.777344 15.585938-21.328125 15.585938-35.296875v-16c0-26.472656-21.527344-48-48-48s-48 21.527344-48 48v16c0 20.710938 13.207031 38.34375 31.625 45.0625l-42.9375 42.9375h-44.863281c-.894531-13.335938-10.054688-24.960938-23.03125-28.671875l-32.792969-9.359375v-14.289062c9.792969-8.792969 16-21.503907 16-35.679688v-16c0-26.472656-21.527344-48-48-48s-48 21.527344-48 48v16c0 14.167969 6.207031 26.878906 16 35.679688v14.296874l-32.792969 9.359376c-13.664062 3.894531-23.207031 16.550781-23.207031 30.769531v29.894531h-32v48h16v128h-72v16h496v-16zm-71.238281-128v-36.6875l56.6875-56.6875c4.097656-4.097656 6.535156-9.601562 7.082031-15.34375.070313.558594.230469 1.085938.230469 1.664062v99.054688c0 13.230469-10.769531 24-24 24h-64v-16zm-24 64h40.761719l6.398437 64h-47.160156zm56.839844 0h15.921875l6.398437 64h-15.921875zm47.160156-72v-72h16v88c0 22.054688-17.945312 40-40 40h-80v-16h64c22.054688 0 40-17.945312 40-40zm-80-160v-16c0-17.648438 14.351562-32 32-32s32 14.351562 32 32v16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm-20.6875 104 53.375-53.375c1.671875-1.671875 3.984375-2.625 6.34375-2.625 4.945312 0 8.96875 4.023438 8.96875 8.96875 0 2.359375-.953125 4.671875-2.625 6.34375l-56.6875 56.6875h-84.6875c-4.414062 0-8-3.585938-8-8s3.585938-8 8-8zm-171.3125-120c0-17.648438 14.351562-32 32-32s32 14.351562 32 32v16c0 17.648438-14.351562 32-32 32s-32-14.351562-32-32zm32 64c5.617188 0 10.984375-1.023438 16-2.800781v8.59375c-1.984375 3.0625-7.496094 10.207031-16 10.207031s-14.015625-7.144531-16-10.207031v-8.59375c5.015625 1.777343 10.382812 2.800781 16 2.800781zm-72 42.105469c0-7.113281 4.777344-13.433594 11.601562-15.386719l32.957032-9.414062c4.640625 6.046874 13.671875 14.695312 27.441406 14.695312s22.800781-8.648438 27.441406-14.703125l32.957032 9.414063c6.128906 1.753906 10.402343 7.082031 11.257812 13.28125h-7.65625c-13.230469 0-24 10.769531-24 24 0 2.816406.574219 5.488281 1.472656 8h-113.472656zm-32 45.894531h248v16h-248zm16 64h24v-16h-24v-16h208v16h-168v16h168v96h-19.054688l-16-32h-137.890624l-16 32h-19.054688zm171.054688 96h-134.109376l8-16h118.109376zm0 0"/>
                </svg>
                <h3>Farming/Dairy <br>Consultation</h3>
            </div>
            <div class="service wow fadeInUp" data-wow-offset="50" data-wow-delay="0.4s">
                <svg id="Layer_5" enable-background="new 0 0 64 64" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg">
                    <g><path d="m60 39h-4.014c.66-2.267 1.014-4.612 1.014-7 0-13.785-11.215-25-25-25-3.403 0-6.698.676-9.801 2h-5.57l2.262-4.456-1.783-.905-2.722 5.361h-.693l-2.757-7.351-1.873.702 2.494 6.649h-7.557c-1.654 0-3 1.346-3 3v14c0 1.654 1.346 3 3 3h2v1c0 .886.393 1.675 1.006 2.224.121 13.682 11.284 24.776 24.994 24.776 1.701 0 3.393-.18 5.049-.519.232 1.425 1.461 2.519 2.951 2.519h2v1c0 1.654 1.346 3 3 3h10c1.654 0 3-1.346 3-3v-1h2c1.654 0 3-1.346 3-3v-14c0-1.654-1.346-3-3-3zm-7.378 0 2.215-4.407c-.168 1.499-.483 2.971-.942 4.407zm-15.622 3v1h-13.737c-.734-3.011-1.181-6.414-1.252-10h19.969c-.039 2.048-.198 4.057-.476 6h-1.504c-1.654 0-3 1.346-3 3zm-27.975-9h9.975 1.012c.065 3.596.476 6.976 1.171 10h-9.377c-1.637-2.994-2.625-6.391-2.781-10zm12.975-4h2c1.654 0 3-1.346 3-3v-5h13.737c.734 3.011 1.181 6.414 1.252 10h-20.173c.112-.314.184-.648.184-1zm32.975 2h-10.987c-.065-3.596-.476-6.976-1.171-10h9.376c1.638 2.994 2.626 6.391 2.782 10zm-10.994 2h1.337l2.241 6h-4.035c.266-1.948.419-3.956.457-6zm5.713 6-2.241-6h7.505c-.021.489-.052.977-.104 1.462l-1.748-.879-2.723 5.417zm1.266-20h-8.658c-1.148-4.001-2.821-7.237-4.834-9.338 5.563 1.362 10.337 4.75 13.492 9.338zm-10.771 0h-13.189v-7c0-.878-.386-1.662-.989-2.211 1.939-.522 3.943-.789 5.989-.789 3.342 0 6.363 4.007 8.189 10zm-37.189 7v-14c0-.551.448-1 1-1h20c.552 0 1 .449 1 1v14c0 .551-.448 1-1 1h-20c-.552 0-1-.449-1-1zm17 3v1c0 .551-.448 1-1 1h-10c-.552 0-1-.449-1-1v-1zm-6.961 16h8.659c1.148 4.001 2.821 7.237 4.834 9.338-5.563-1.362-10.337-4.75-13.493-9.338zm10.772 0h13.189v9.443c-1.635.362-3.311.557-5 .557-3.342 0-6.363-4.007-8.189-10zm32.189 15c0 .552-.448 1-1 1h-10c-.552 0-1-.448-1-1v-1h12zm5-4c0 .552-.448 1-1 1h-20c-.552 0-1-.448-1-1v-14c0-.552.448-1 1-1h20c.552 0 1 .448 1 1z"/><path d="m41 55h18v-12h-18zm2-10h14v8h-14z"/><path d="m5 25h18v-12h-18zm2-10h14v8h-14z"/><path d="m51.293 11.293 1.414 1.414 6.293-6.293v2.586h2v-6h-6v2h2.586z"/><path d="m57 11v2h2.586l-4.293 4.293 1.414 1.414 4.293-4.293v2.586h2v-6z"/><path d="m46.707 8.707 4.293-4.293v2.586h2v-6h-6v2h2.586l-4.293 4.293z"/><path d="m12.707 52.707-1.414-1.414-6.293 6.293v-2.586h-2v6h6v-2h-2.586z"/><path d="m7 51h-2.586l4.293-4.293-1.414-1.414-4.293 4.293v-2.586h-2v6h6z"/><path d="m17.293 55.293-4.293 4.293v-2.586h-2v6h6v-2h-2.586l4.293-4.293z"/><path d="m24 35h2v2h-2z"/><path d="m32 35h2v2h-2z"/><path d="m28 35h2v2h-2z"/><path d="m46 27h2v2h-2z"/><path d="m50 27h2v2h-2z"/><path d="m31 15h2v2h-2z"/><path d="m35 15h2v2h-2z"/></g>
                </svg>
                <h3>Market Assistant / Exposure / Reach / Sell Products</h3>
            </div>
        </div>
    </section>

    <section class="products">
        <div class="wrapper">
            <h2>Range of products</h2>
        </div>
        <div class="wrapper">
            <div class="product wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                <img src="<?=base_url('assets/images/coffee.svg')?>" alt="" height="50" style="object-fit:cover !important">
                <h3>Seeds</h3>
                <a href="" class="btn">Buy/Sell Now</a>
            </div>
            <div class="product wow fadeInUp" data-wow-offset="50" data-wow-delay="0.2s">
                <img src="<?=base_url('assets/images/fertilizer.svg')?>" alt="" height="50" style="object-fit:cover !important">
                <h3>Fertilizers</h3>
                <a href="" class="btn">Buy/Sell Now</a>
            </div>
            <div class="product wow fadeInUp" data-wow-offset="50" data-wow-delay="0.4s">
                <img src="<?=base_url('assets/images/pesticide.svg')?>" alt="" height="50" style="object-fit:cover !important">
                <h3>Agro chemicals</h3>
                <a href="" class="btn">Buy/Sell Now</a>
            </div>
            <div class="product wow fadeInUp" data-wow-offset="50" data-wow-delay="0.6s">
                <img src="<?=base_url('assets/images/gloves.svg')?>" alt="" height="50" style="object-fit:cover !important">
                <h3>Agro equipments</h3>
                <a href="" class="btn">Buy/Sell Now</a>
            </div>
        </div>
        <a href="<?=base_url('services')?>" class="btn allBtn">See all</a>
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
                    <button class="tablinks serif" onclick="redirectTo('projects')">See all</button>
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
