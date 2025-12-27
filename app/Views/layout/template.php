<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tittle; ?></title>
    <link href="<?= base_url('css/assets/bootswatch-5/dist/morph/bootstrap.min.css') ?>" rel="stylesheet">
</head>

<body>
    <?= $this->include('/layout/navbar'); ?> <!--menambahkan file navbar dari folder layout-->
    <div class="container mt-5 mb-5">
        <?= $this->renderSection('content'); ?>
    </div>
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top border-2">
        <div class="col-md-4 d-flex align-items-center">
            <span class="text-muted">©2024 UAS Pemrograman Web, <b>M.Choirul Anwar</b></span>
        </div>
    </footer>
    <script src="<?= base_url('css/assets/bootswatch-5/docs/_vendor/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
</body>

</html>