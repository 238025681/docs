<section class="ftco-section contact-section">

    <div class="container bg-light">

        <div class="row d-flex mb-5 bg-light d-block d-sm-none">
            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <a class="nav-link active" href="/authors" role="tab" aria-selected="false">Редактирай</a>
                <a class="nav-link" href="/authors/create" aria-selected="false">Добави</a>
                <a class="nav-link active" href="/authors/delete" aria-selected="true">Изтрий</a>
            </div>
        </div>

        <div class="row d-none d-sm-block mb-5 bg-light ">

            <ul class="nav nav-tabs col-md-12">
                <li class="nav-item">
                    <a class="nav-link" href="/authors">Редактирай</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/authors/create">Добави</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/authors/delete">Изтрий</a>

                </li>

            </ul>

        </div>

        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Сигурни ли сте, че искате да изтриете стихотворението</h2>
            </div>

            <div class="w-100"></div>

            <form method="post" action="/authors/deleteComf/" class="col-sm-8 col-md-8">
                <div class="form-group row">
                    <label for="title" class="col-sm-4 col-form-label">Заглавие</label>
                    <div class="col-sm-10">
                        <input type="hidden" name="poem_id" id="title" value="<?php echo $this->poem[0]["id"]?>">
                        <input type="text" class="form-control lightpurple" name="poem_title" id="title"  value="<?php echo $this->poem[0]["title"];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-4 col-form-label">Текст</label>
                    <div class="col-sm-10">
                        <textarea name="poem_text" type="text" class="form-control lightpurple" id="text">
                            <?php echo $this->poem[0]["text"];?>
                        </textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <button type="submit" class="btn btn-secondary btn-lg white">
                                Изтрий
                            </button>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <a href="/authors" type="submit" class="btn btn-secondary btn-lg">
                                Отмени
                            </a>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
