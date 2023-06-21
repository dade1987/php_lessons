<?php require_once(BASE_VIEWS . '/layouts/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <h1>Tabella di Test Show</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <?php
        /**
         * @var array<string,array<string,string>> $view_params
         * @var array<string,array<string,string>> $params
         */
        $params = $view_params;

        foreach ($params as $index => $value) { ?>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo  $value['stringa']; ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

        <?php } ?>


        </table>
    </div>
</div>
</div>
<?php require_once(BASE_VIEWS . '/layouts/footer.php'); ?>