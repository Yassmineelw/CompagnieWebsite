<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ressource[]|\Cake\Collection\CollectionInterface $ressources
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ressource'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Commandes'), ['controller' => 'Commandes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commande'), ['controller' => 'Commandes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ressources index large-9 medium-8 columns content">
    <h3><?= __('Ressources') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('commande_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ville_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ressources as $ressource): ?>
            <tr>
                <td><?= $this->Number->format($ressource->id) ?></td>
                <td><?= $ressource->has('commande') ? $this->Html->link($ressource->commande->name, ['controller' => 'Commandes', 'action' => 'view', $ressource->commande->id]) : '' ?></td>
                <td><?= $ressource->has('ville') ? $this->Html->link($ressource->ville->name, ['controller' => 'Villes', 'action' => 'view', $ressource->ville->id]) : '' ?></td>
                <td><?= h($ressource->code) ?></td>
                <td><?= h($ressource->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ressource->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ressource->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ressource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ressource->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
