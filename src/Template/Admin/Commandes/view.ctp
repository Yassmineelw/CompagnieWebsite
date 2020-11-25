<?php $this->extend('../../Layout/TwitterBootstrap/dashboard_collapsable'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Html->link(__('Edit Commande'), ['action' => 'edit', $commande->id], ['class' => 'nav-link']) ?></li>
<li><?= $this->Form->postLink( __('Delete Commande'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'nav-link'] ) ?></li>
<li><?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('New Commande'), ['action' => 'add'], ['class' => 'nav-link']) ?> </li>
<li><?= $this->Html->link(__('List Ressources'), ['controller' => 'Ressources', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Ressource'), ['controller' => 'Ressources', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', $this->fetch('tb_actions')); ?>

<div class="commandes view large-9 medium-8 columns content">
    <h3><?= h($commande->name) ?></h3>
    <div class="table-responsive">
        <table class="table table-striped">
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
    </div>
    <div class="related">
        <h4><?= __('Related Ressources') ?></h4>
        <?php if (!empty($commande->ressources)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
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
                        <?= $this->Html->link(__('View'), ['controller' => 'Ressources', 'action' => 'view', $ressources->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Ressources', 'action' => 'edit', $ressources->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Ressources', 'action' => 'delete', $ressources->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ressources->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Villes') ?></h4>
        <?php if (!empty($commande->villes)): ?>
        <div class="table-responsive">
            <table class="table table-striped">
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
                        <?= $this->Html->link(__('View'), ['controller' => 'Villes', 'action' => 'view', $villes->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Html->link(__('Edit'), ['controller' => 'Villes', 'action' => 'edit', $villes->id], ['class' => 'btn btn-secondary']) ?>
                        <?= $this->Form->postLink( __('Delete'), ['controller' => 'Villes', 'action' => 'delete', $villes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $villes->id), 'class' => 'btn btn-danger']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <?php endif; ?>
    </div>
</div>
