<?php $this->extend('../../Layout/TwitterBootstrap/dashboard_collapsable'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Ressources'), ['controller' => 'Ressources', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Ressource'), ['controller' => 'Ressources', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', $this->fetch('tb_actions')); ?>

<table class="table table-striped">
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
                <?= $this->Html->link(__('View'), ['action' => 'view', $commande->id], ['title' => __('View'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $commande->id], ['title' => __('Edit'), 'class' => 'btn btn-secondary']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'title' => __('Delete'), 'class' => 'btn btn-danger']) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('First')) ?>
        <?= $this->Paginator->prev('< ' . __('Previous')) ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']) ?>
        <?= $this->Paginator->next(__('Next') . ' >') ?>
        <?= $this->Paginator->last(__('Last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>
