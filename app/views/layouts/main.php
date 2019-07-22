<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= fw\core\base\View::getMeta();?>
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div class="container">
    <?php if (!empty($menu)) : ?>
        <ul class="nav nav-pills">
            <li><a href="/">Home</a></li>
            <li><a href="page/about">About</a></li>
            <li><a href="admin">About</a></li>
<!--            --><?php //foreach ($menu as $v) :?>
<!--                <li role="presentation" ><a href="#">--><?//= $v['title']?><!--</a></li>-->
<!--            --><?php //endforeach;?>
        </ul>
    <?php endif;?>

    <h1>Main, teamplate</h1>

    <?= $content ?>
</div>

<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<?php foreach ($scripts as $script) :?>
    <?=$script?>
<?php endforeach;?>
</body>
</html>