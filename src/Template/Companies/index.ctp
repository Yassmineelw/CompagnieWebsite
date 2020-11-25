<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Companie[]|\Cake\Collection\CollectionInterface $companies
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Companie'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Ressource') . ' (' . __('Linked lists'). ') ', ['controller' => 'Ressources', 'action' => 'add']) ?></li>

        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="companies index large-9 medium-8 columns content">
    <h3><?= __('Companies') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Companies') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('File') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $companie): ?>
                <tr>
                    <td><?= $companie->has('user') ? $this->Html->link($companie->user->email, ['controller' => 'Users', 'action' => 'view', $companie->user->id]) : '' ?></td>
                    <td><?= h($companie->title) ?></td>
                    <td><?= h($companie->modified) ?></td>
                    <td><?php
                        if (isset($companie->files[0])) {
                            echo $this->Html->image($companie->files[0]->path . $companie->files[0]->name, [
                                "alt" => $companie->files[0]->name,
                                "width" => "220px",
                                "height" => "150px",
                                'url' => ['controller' => 'Files', 'action' => 'view', $companie->files[0]->id]
                            ]);
                        }
                        ?>
                    </td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $companie->slug]) ?>
                        <?= $this->Html->link('(pdf)', ['action' => 'view', $companie->slug . '.pdf']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $companie->slug]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companie->slug], ['confirm' => __('Are you sure you want to delete # {0}?', $companie->slug)]) ?>
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
