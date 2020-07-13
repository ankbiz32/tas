
<div class="wrapper back-link wow fadeInUp ev" data-wow-delay="0s">
    <a onclick="window.history.back();" class="sans back-top"><i class="fa fa-caret-left"></i> Go back</a>
</div>

<section class="project-main">
    <div class="wrapper">
        <main>
            <article class="wow fadeInUp" data-wow-delay="0s">
                <h1><?=$project->heading?></h1>
                <img class="proj-img" src="<?=base_url('assets/images/').$project->img_src?>" alt="<?=$project->heading?>">
                <p class="proj-descr"><?=$project->descr?></p>
                <a onclick="window.history.back();" class="sans back"><i class="fa fa-caret-left"></i> Go back</a>
            </article>
            <aside class="wow fadeInUp" data-wow-delay="0.2s">
                <strong>Recent projects:</strong>
                <?php foreach($recents as $r){?>
                <a href="<?=base_url('Project/'.$r->id)?>" class="recent">
                    <img class="recent-img" src="<?=base_url('assets/images/').$r->img_src?>" alt="<?=$r->heading?>">   
                    <p class="recent-descr"><?=$r->heading?></p>
                </a>
                <?php }?>
            </aside>
        </main>
    </div>
</section>
