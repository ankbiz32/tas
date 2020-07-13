<div class="sub-header" style="background:linear-gradient(to right, rgba(0,0,0,0.6) 40%,rgba(0,0,0,0.1)), url(<?=base_url('assets/images/media_header.jpg')?>);">
    <div class="wrapper">
        <div class="content">
            <h1 class="wow fadeInUp" data-wow-delay="0.2s">Media gallery</h1>
            <p class="wow fadeInUp" data-wow-delay="0.4s">See some of insider pics of how we work and enjoy while making a difference in the agriculture industry.</p>
        </div>
    </div>
</div>

<section class="photo subpage">
    <div class="wrapper">
        <div class="photos wow fadeInDown" data-wow-delay="0.8s">
            <?php foreach ($gallery as $d){?>
                    <a href="<?=base_url()?>assets/images/<?=$d->img_src?>" class="spotlight"><img src="<?=base_url()?>assets/images/<?=$d->img_src?>" alt="TAS photo"></a>
            <?php }?>

        </div>
    </div>
</section>