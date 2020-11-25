<?php $this->extend('../../Layout/TwitterBootstrap/dashboard_collapsable'); ?>

<?php $this->start('tb_actions'); ?>
<li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $commande->id], ['confirm' => __('Are you sure you want to delete # {0}?', $commande->id), 'class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Commandes'), ['action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Ressources'), ['controller' => 'Ressources', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Ressource'), ['controller' => 'Ressources', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
<li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
<?php $this->end(); ?>
<?php $this->assign('tb_sidebar', $this->fetch('tb_actions')); ?>

<div class="commandes form content">
    <?= $this->Form->create($commande) ?>
    <fieldset>
        <legend><?= __('Edit Commande') ?></legend>
        <?php
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
