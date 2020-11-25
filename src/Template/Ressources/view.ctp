<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ressource $ressource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ressource'), ['action' => 'edit', $ressource->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ressource'), ['action' => 'delete', $ressource->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ressource->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ressources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ressource'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Commandes'), ['controller' => 'Commandes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['controller' => 'Commandes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ressources view large-9 medium-8 columns content">
    <h3><?= h($ressource->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Commande') ?></th>
            <td><?= $ressource->has('commande') ? $this->Html->link($ressource->commande->name, ['controller' => 'Commandes', 'action' => 'view', $ressource->commande->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ville') ?></th>
            <td><?= $ressource->has('ville') ? $this->Html->link($ressource->ville->name, ['controller' => 'Villes', 'action' => 'view', $ressource->ville->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($ressource->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($ressource->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ressource->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Companies') ?></h4>
        <?php if (!empty($ressource->companies)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Ressource Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Published') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($ressource->companies as $companies): ?>
            <tr>
                <td><?= h($companies->id) ?></td>
                <td><?= h($companies->user_id) ?></td>
                <td><?= h($companies->ressource_id) ?></td>
                <td><?= h($companies->title) ?></td>
                <td><?= h($companies->slug) ?></td>
                <td><?= h($companies->body) ?></td>
                <td><?= h($companies->published) ?></td>
                <td><?= h($companies->created) ?></td>
                <td><?= h($companies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Companies', 'action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
