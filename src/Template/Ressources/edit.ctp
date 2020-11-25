<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ressource $ressource
 */
?>
<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Villes",
    "action" => "getByCommande",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Ressources/add_edit', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ressource->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ressource->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ressources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Commandes'), ['controller' => 'Commandes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Commande'), ['controller' => 'Commandes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Villes'), ['controller' => 'Villes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ville'), ['controller' => 'Villes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ressources form large-9 medium-8 columns content">
    <?= $this->Form->create($ressource) ?>
    <fieldset>
        <legend><?= __('Edit Ressource') ?></legend>
        <?php
            echo $this->Form->control('commande_id', ['options' => $commandes]);
            echo $this->Form->control('ville_id', ['options' => $villes]);
            echo $this->Form->control('code');
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
