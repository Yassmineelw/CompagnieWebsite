<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande $commande
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Commandes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Commande'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ressources'), ['controller' => 'Ressources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ressource'), ['controller' => 'Ressources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="commandes view large-9 medium-8 columns content">
    <h3><?= h($commande->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($commande->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($commande->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($commande->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ressources') ?></h4>
        <?php if (!empty($commande->ressources)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Commande Id') ?></th>
                <th scope="col"><?= __('Ville Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($commande->ressources as $ressources): ?>
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
    <div class="related">
        <h4><?= __('Related Villes') ?></h4>
        <?php if (!empty($commande->villes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Commande Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($commande->villes as $villes): ?>
            <tr>
                <td><?= h($villes->id) ?></td>
                <td><?= h($villes->commande_id) ?></td>
                <td><?= h($villes->code) ?></td>
                <td><?= h($villes->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Villes', 'action' => 'view', $villes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Villes', 'action' => 'edit', $villes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Villes', 'action' => 'delete', $villes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $villes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
