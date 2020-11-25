<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ville $ville
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ville'), ['action' => 'edit', $ville->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ville'), ['action' => 'delete', $ville->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ville->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Villes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ville'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commandes'), ['controller' => 'Commandes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['controller' => 'Commandes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ressources'), ['controller' => 'Ressources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ressource'), ['controller' => 'Ressources', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="villes view large-9 medium-8 columns content">
    <h3><?= h($ville->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Commande') ?></th>
            <td><?= $ville->has('commande') ? $this->Html->link($ville->commande->name, ['controller' => 'Commandes', 'action' => 'view', $ville->commande->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($ville->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ville->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ville->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ressources') ?></h4>
        <?php if (!empty($ville->ressources)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Commande Id') ?></th>
                <th scope="col"><?= __('Ville Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ville->ressources as $ressources): ?>
            <tr>
                <td><?= h($ressources->id) ?></td>
                <td><?= h($ressources->commande_id) ?></td>
                <td><?= h($ressources->ville_id) ?></td>
                <td><?= h($ressources->code) ?></td>
                <td><?= h($ressources->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ressources', 'action' => 'view', $ressources->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ressources', 'action' => 'edit', $ressources->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ressources', 'action' => 'delete', $ressources->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ressources->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
