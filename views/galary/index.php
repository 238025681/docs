

<?php //foreach ($this->earlyPoems as $poem) :?>
<!--    <h2>--><?//= htmlentities($poem['preview'])?><!--</h2>-->
<?php //endforeach;?>

<section class="ftco-section contact-section">
    <div class="container bg-light">

        <div class="row d-flex mb-5 bg-light d-block d-sm-none">
            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <a class="nav-link active" href="/galary" role="tab" aria-selected="false">Галерия</a>
                <a class="nav-link" href="/galary/earlyPoems" aria-selected="true">Ранно творчество</a>
                <a class="nav-link" href="/galary/latePoems" aria-selected="false">Късно творчество</a>
                <a class="nav-link" href="/galary/lastPoems" aria-selected="false">Нови</a>
            </div>
        </div>

        <div class="row d-none d-sm-block mb-5 bg-light ">

            <ul class="nav nav-tabs col-md-12">
                <li class="nav-item">
                    <a class="nav-link active" href="/galary">Галерия</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galary/earlyPoems">Ранно творчество</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galary/latePoems">Късно творчество</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/galary/lastPoems" aria-selected="false">Нови</a>
                </li>
            </ul>

        </div>

<!--        <div class="row d-flex mb-5 bg-light">-->
<!--            <ul class="nav nav-tabs col-md-12">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link active" href="/galary">Галерия</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="/galary/earlyPoems">Ранно творчество</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="/galary/latePoems">Късно творчество</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->

        <div class="row col-md-12 col-lg-12">
            <?php foreach ($this->allPoems as $poem) :?>
                <div class="item col-md-4 col-lg-4">
                    <div class="blog-entry">

                        <div class="text p-4">
                            <h5 class="heading purple"><?= htmlentities($poem['title'])?></h5>
                            <p class="highth"><?= htmlentities($poem['preview'])?>...
                            </p>
                            <p class="clearfix">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#<?=$poem['id']?>" aria-pressed="true">Виж цялото</button>
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>
</section>

<!-- Modal -->
<?php foreach ($this->allPoems as $poem) :?>
<div class="modal fade" id="<?=$poem['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title white" id="exampleModalCenterTitle"><?=htmlentities($poem['title'])?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white">&times;</span>
                </button>
            </div>

            <div class="modal-body bg-light gray">
                <?= $text = str_ireplace("\r\n", "<br/>", $poem['text']); ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Затвори</button>
            </div>

        </div>
    </div>
</div>
<?php endforeach;?>
