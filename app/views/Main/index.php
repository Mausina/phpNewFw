<div class="container">
    <?php if (!empty($posts)) : ?>
        <?php foreach ($posts as $post) :?>
            <div class="panel panel-default">
                <div class="panel-heading"><?= $post['title']?></div>
                <div class="panel-body">
                    <?php echo html_entity_decode($post['description'])?>
                </div>
            </div>

        <?php endforeach;?>
    <?php endif;?>
</div>


