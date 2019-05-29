<section class="ftco-section contact-section">



    <div class="container bg-light">

        <div class="row d-flex mb-5 bg-light d-block d-sm-none">
            <div class="nav flex-column nav-pills" aria-orientation="vertical">
                <a class="nav-link active" href="/authors" role="tab" aria-selected="true">Редактирай</a>
                <a class="nav-link" href="/authors/create" aria-selected="false">Добави</a>
                <a class="nav-link" href="/authors/delete" aria-selected="false">Изтрий</a>
            </div>
        </div>

        <div class="row d-none d-sm-block mb-5 bg-light ">

            <ul class="nav nav-tabs col-md-12">
                <li class="nav-item">
                    <a class="nav-link active" href="/authors">Редактирай</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/authors/create">Добави</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/authors/delete">Изтрий</a>

                </li>

            </ul>

        </div>

        <div class="row col-md-12 col-lg-12">
            <?php foreach ($this->allPoems as $poem) :?>
                <div class="item col-md-4 col-lg-4">
                    <div class="blog-entry">

                        <div class="text p-4">
                            <h5 class="heading purple"><?= htmlentities($poem['title'])?></h5>
                            <p class="highth"><?= htmlentities($poem['preview'])?>...
                            </p>

                            <p >
                                <a href="/authors/edit/<?=$poem['id']?>" class="btn btn-secondary">
                                    <span class="icon-pencil"></span>
                                </a>
                                <a href="/authors/deleteComf/<?=$poem['id']?>" class="btn btn-secondary">
                                    <span class="icon-trash"></span>
                                </a>
                           <!--     <button onclick="check()">iztrii</button> -->
                            </p>
                        </div>

                    </div>
                </div>
            <?php endforeach;?>
        </div>

    </div>
</section>



<!--<table>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Name</th>-->
<!--        <th>Action</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($this->authors as $author) : ?>
<!--        <tr>-->
<!--            <td>--><?//= $author['id'] ?><!--</td>-->
<!--            <td>--><?//= htmlspecialchars($author['name']) ?><!--</td>-->
<!--            <td><a href="/authors/delete/--><?//=$author['id']?><!-- ">[Delete]</a></td>-->
<!--        </tr>-->
<!--    --><?php //endforeach ?>
<!--</table>-->
<!---->
<!--<a href="/authors/create">[New]</a>-->
