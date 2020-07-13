<div class="sub-header" style="background:linear-gradient(to right, rgba(0,0,0,0.6) 40%,rgba(0,0,0,0.1)), url(<?=base_url('assets/images/projects_header.jpg')?>);">
    <div class="wrapper">
        <div class="content">
            <h1 class="wow fadeInUp" data-wow-delay="0s">Projects</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s"><strong>Total Agri Solutions</strong> projects.
            </p>
        </div>
    </div>
</div>

<section class="projects-list">
    <div class="wrapper wow fadeInUp" data-wow-delay="0.5s">
    <?php foreach($projects as $p){?>
        <a class="project" href="<?=base_url('Project/'.$p->id)?>">
            <img src="<?=base_url('assets/images/').$p->img_src?>" alt="<?=$p->heading?>">
            <div class="content">
                <h3><?=$p->heading?></h3>
                <p><?=substr($p->descr,0,105)?> . . .</p>
                <small>Read more &nbsp;<i class="fa fa-caret-right fa-sm"></i></small>
            </div>
        </a>
    <?php }?>
    </div>
</section>
