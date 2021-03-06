<?php
$urlToRessourcesAutocompletedemoJson = $this->Url->build([
    "controller" => "Ressources",
    "action" => "findRessources",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToRessourcesAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Companies/add_edit/ressourceAutocomplete', ['block' => 'scriptBottom']);
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="companies form large-9 medium-8 columns content">
    <?= $this->Form->create($companie) ?>
    <fieldset>
        <legend><?= __('Add Companie') ?></legend>
        <?php
        echo $this->Form->control('title');
        echo $this->Form->control('ressource_id', ['label' => '(ressource_id)', 'type' => 'hidden']);
        ?>
        <div class="input text">
            <label for="autocomplete"><?= __("Ressource"). ' (' .__('Autocomplete') . ')' ?></label>
            <input id="autocomplete" type="text">
        </div>
        
        <?php
        echo $this->Form->control('body');
        echo $this->Form->control('published');
        echo $this->Form->control('tags._ids', ['options' => $tags]);
        echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
