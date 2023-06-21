<?php require_once(BASE_VIEWS . '/layouts/header.php'); ?>
<div class="row">
    <div class="col-md-12">
        <h1>Tabella di Test Index</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-12">
        <table class="table table-striped table-hover">
            <?php
            /**
             * @var array<string,array<string,array<string,string>>> $params
             */
            $params = $view_params;

            foreach ($params['table'] as $index => $value) { ?>
                <tr>
                    <?php foreach ($value as $i => $v) { ?>
                        <td><?php echo $v ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Get Request</h3>
    </div>
</div>
<div class="row">
    <pre class="bg-light ml-3">
        <?php echo var_export($view_params['request'], true); ?>
    </pre>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Sql Query</h3>
    </div>
</div>
<div class="row">
    <pre class="bg-light ml-3">
        <?php echo $view_params['sql'] ?>
    </pre>
</div>
<div class="row">
    <div class="col-md-12">
        <h3>Sql Params</h3>
    </div>
</div>
<div class="row">
    <pre class="bg-light ml-3">
        <?php echo  var_export($view_params['sql_params'], true); ?>
    </pre>
</div>
<?php require_once(BASE_VIEWS . '/layouts/footer.php'); ?>