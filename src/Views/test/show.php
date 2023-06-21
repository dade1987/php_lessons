<?php require_once(BASE_VIEWS . '/layouts/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <h1>Tabella di Test Show</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <?php
            /**
             * @var array<string,array<string,string>> $view_params
             * @var array<string,array<string,string>> $params
             */
            $params = $view_params;

            foreach ($params as $index => $value) { ?>

                <tr>
                    <?php foreach ($value as $i => $v) { ?>
                        <td><?php echo  $v; ?></td>

                    <?php } ?>
                </tr>

            <?php } ?>
        </table>
    </div>
</div>
</div>
<?php require_once(BASE_VIEWS . '/layouts/footer.php'); ?>