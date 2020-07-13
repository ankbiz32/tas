<div class="sub-header" style="background:linear-gradient(to right, rgba(0,0,0,0.6) 40%,rgba(0,0,0,0.1)), url(<?=base_url('assets/images/services_header.jpg')?>);">
    <div class="wrapper">
        <div class="content">
            <h1 class="wow fadeInUp" data-wow-delay="0s">Services</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Total Agri Solutions</strong> services.
            </p>
        </div>
    </div>
</div>

<section class="products prod-inner serv-inner">
    <div class="wrapper">
        <?php foreach($servicesAll as $pr){?>
            <div class="product wow fadeInUp" data-wow-offset="50" data-wow-delay="0s">
                <img src="<?=base_url('assets/images/').$pr->img_src?>" alt="<?=$pr->name?>" height="50" style="object-fit:cover !important">
                <h3><?=$pr->name?></h3>
                <a href="<?=$pr->link_src?>" class="btn"><?=$pr->link_text?></a>
            </div>
        <?php }?>
    </div>
</section>