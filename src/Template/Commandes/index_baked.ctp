<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Commande[]|\Cake\Collection\CollectionInterface $commandes
 */
?>
<?php
$urlToRestApi = $this->Url->build('/api/commandes', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Commandes/index', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Commande'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ressources'), ['controller' => 'Ressources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ressource'), ['controller' => 'Ressources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="commandes index large-9 medium-8 columns content">
    <h3><?= __('Commandes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($commandes as $commande): ?>
            <tr>
                <td><?= $this->Number->format($commande->id) ?></td>
                <td><?= h($commande->code) ?></td>
                <td><?= h($commande->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $commande->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commande->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id)]) ?>
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
