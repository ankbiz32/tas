
<div class="wrapper back-link wow fadeInUp ev" data-wow-delay="0s"> 
    <a onclick="window.history.back();" class="sans back-top"><i class="fa fa-caret-left"></i> Go back</a>
</div>

<section class="project-main">
    <div class="wrapper">
        <main>
            <article class="wow fadeInUp" data-wow-delay="0.2s">
                <h1><?=$event->heading?></h1>
                <img class="proj-img" src="<?=base_url('assets/images/').$event->img_src?>" alt="<?=$event->heading?>">
                <p class="proj-date" style="font-style:italics;color:#222;">Date: <?=date('d-m-Y',strtotime($event->date))?></p>

                <!-- AddToAny BEGIN -->
                <div style="margin:1rem 0 1.5rem" class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?=current_url()?>" data-a2a-title="<?=$event->heading?>">
                        <a class="a2a_button_facebook"></a>
                        <a class="a2a_button_twitter"></a>
                        <a class="a2a_button_whatsapp"></a>
                        <a class="a2a_button_telegram"></a>
                        <a class="a2a_button_copy_link"></a>
                    </div>
                    <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.onclick = 1;
                        </script>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                <!-- AddToAny END -->
                
                <p class="proj-descr" style="font-size:1.8rem"><?=$event->descr?></p>
                <a onclick="window.history.back();" class="sans back"><i class="fa fa-caret-left"></i> Go back</a>
            </article>
            <aside class="wow fadeInUp" data-wow-delay="0.4s">
                <strong>Recent events:</strong>
                <?php foreach($recents as $r){?>
                <a href="<?=base_url('event/'.$r->id.'/'.$r->slug)?>" class="recent">
                    <img class="recent-img" src="<?=base_url('assets/images/').$r->img_src?>" alt="<?=$r->heading?>">   
                    <p class="recent-descr"><?=$r->heading?></p>
                </a>
                <?php }?>
            </aside>
        </main>
    </div>
</section>
