<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliverie $deliverie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deliverie->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deliverie->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Deliveries'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Companie'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deliveries form large-9 medium-8 columns content">
    <?= $this->Form->create($deliverie) ?>
    <fieldset>
        <legend><?= __('Edit Deliverie') ?></legend>
        <?php
            echo $this->Form->control('companie_id', ['options' => $companies]);
            echo $this->Form->control('name');
            echo $this->Form->control('deliverie');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
