<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Deliverie $deliverie
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deliverie'), ['action' => 'edit', $deliverie->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deliverie'), ['action' => 'delete', $deliverie->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deliverie->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Deliveries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deliverie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Companie'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deliveries view large-9 medium-8 columns content">
    <h3><?= h($deliverie->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Companie') ?></th>
            <td><?= $deliverie->has('companie') ? $this->Html->link($deliverie->companie->title, ['controller' => 'Companies', 'action' => 'view', $deliverie->companie->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($deliverie->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($deliverie->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($deliverie->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($deliverie->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Deliverie') ?></h4>
        <?= $this->Text->autoParagraph(h($deliverie->deliverie)); ?>
    </div>
</div>
