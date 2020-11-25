<h1>
    Companies tagged with
    <?= $this->Text->toList(h($tags), 'or') ?>
</h1>

<section>
<?php foreach ($companies as $companie): ?>
    <companie>
        <!-- Use the HtmlHelper to create a link -->
        <h4><?= $this->Html->link(
            $companie->title,
            ['controller' => 'Companies', 'action' => 'view', $companie->slug]
        ) ?></h4>
        <span><?= h($companie->created) ?></span>
    </companie>
<?php endforeach; ?>
</section>
