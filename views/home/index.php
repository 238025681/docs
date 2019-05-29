
<a href="/login" class="purple">
    log in
</a>
    <section class="ftco-section about-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 text-center">
                    <div class="ftco-animate">
                        <blockquote class="blockquote text-center">
                            <p class="mb-0 purple"><h2>"Всеки, който се труди в областта на прозата, е малко луд. Проблемът е тази лудост да се пресъздаде по интересен начин."</h2></p>
                            <footer class="blockquote-footer purple">Франсоа Трюфо <cite title="Source Title"></cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2><a class="purple" href="/galary">Стихове</a></h2>
                </div>
            </div>


            <div class="row ftco-animate">
                <div class="carousel1 owl-carousel">

                    <?php foreach ($this->favPoems as $poem) :?>

                        <div class="item">
                            <div class="blog-entry">

                                <div class="text p-4">
                                    <h5 class="heading purple"><?= htmlentities($poem['title'])?></h5>
                                    <p class="highth"><?= htmlentities($poem['preview'])?>
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

        </div>
    </section>

    <section class="ftco-section testimony-section bg-light" id="about">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2><a class="purple" href="/books">За авторката</a></h2>
                </div>
            </div>
            <div class="row no-gutters ftco-animate justify-content-center">
                <div class="carousel owl-carousel col-md-9">
                    <div class="item text-center">
                        <div class="testimony-wrap p-5">
                            <div class="user-img mb-4" style="background-image: url(content/bootstrap/images/person_1.png)"></div>
                            <div class="text">
                                <h1 class="">Димитрина Милева</h1>

                                <h5 class="mb-5">
                                        Родена е на 02/11/1983 в гр. Бургас. От дете обича да чете много.
                                    Прочита първата си книжка “Скалата на вечноста” когато е на 5 годинки.
                                    Като дете препрочита безброй пъти любимите си книги” Братята с лъвски сърца” и
                                    “Остров Тамбукту”. Когато е тинейджърка започва да пише разни стихчета,
                                    които грижливо събира в розово тефтерче. Завършва училище и се мести да живее в Мадрид,
                                    Испания със семейството си. За дълъг период от време загърбва това свое хоби.
                                    Завръща се към него на по-късен етап завихрената от емоционален катаклизъм.
                                    В тези моменти белият лист я спасява. Единствено с него успява да говори и до голяма степен да опознае сама себе си.
                                    Обича да пише и мечтае един ден да издаде книга, посветена на...
                                    Засега се радва на живота, учи се на смелост и увереност да сбъдва мечтите си.</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-white">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5 ftco-animate">
                <div class="col-md-7 text-center heading-section">
                    <h2><a class="purple" href="/galary/lastPoems">Най-нови</a></h2>
                </div>
            </div>

            <div class="row">

                <?php foreach ($this->lastPoems as $poem) :?>
                    <div class="col-md-4 ftco-animate" data-scrollax-parent="true" >
                        <div class="trainer" data-scrollax=" properties: { translateY: '-20%'}">

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
<?php foreach ($this->favPoems as $poem) :?>
    <div class="modal fade" id="<?=htmlentities($poem['id'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

<?php foreach ($this->lastPoems as $poem) :?>
    <div class="modal fade" id="<?=htmlentities($poem['id'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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




