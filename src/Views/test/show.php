<?php require_once(BASE_VIEWS.'/layouts/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <h1>Tabella di Test</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <?php foreach ($view_params as $index => $value) { ?>

                <tr>
                    <td><?php echo $index; ?></td>
                    <td><?php echo $value; ?></td>
                </tr>

            <?php } ?>
        </table>
    </div>
</div>
</div>
<?php require_once(BASE_VIEWS.'/layouts/footer.php'); ?>