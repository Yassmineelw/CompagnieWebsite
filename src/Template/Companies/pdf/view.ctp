<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Companie $companie
 */
?>
<div class="companies view large-9 medium-8 columns content">
    <h3><?= h($companie->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $companie->has('user') ? $this->Html->link($companie->user->email, ['controller' => 'Users', 'action' => 'view', $companie->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($companie->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($companie->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ressource') ?></th>
            <td><?= h($companie->ressource['name']) ?></td>
        </tr>
       <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($companie->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($companie->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $companie->published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($companie->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($companie->tags)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Title') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($companie->tags as $tags): ?>
                    <tr>
                        <td><?= h($tags->id) ?></td>
                        <td><?= h($tags->title) ?></td>
                        <td><?= h($tags->created) ?></td>
                        <td><?= h($tags->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($companie->files)): ?>
            <table cellpadding="0" cellspacing="0">
                <?php foreach ($companie->files as $files): ?>
                    <tr>
                        <td>    <?php
                            echo $this->Html->image($files->path . $files->name, [
                                "alt" => $files->name,
                            ]);
                            ?></td>
                    </tr>
            <?php endforeach; ?>
            </table>
<?php endif; ?>
    </div>

    <div class="related">
        <h4><?= __('Related Orders') ?></h4>
<?php if (!empty($companie->orders)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Companie Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Order') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                
    <?php foreach ($companie->orders as $orders): ?>
                    <tr>
                        <td><?= h($orders->id) ?></td>
                        <td><?= h($orders->companie_id) ?></td>
                        <td><?= h($orders->name) ?></td>
                        <td><?= h($orders->order) ?></td>
                        <td><?= h($orders->created) ?></td>
                        <td><?= h($orders->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Orders', 'action' => 'view', $orders->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Orders', 'action' => 'edit', $orders->id]) ?>
        <?= $this->Form->postLink(__('Delete'), ['controller' => 'Orders', 'action' => 'delete', $orders->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orders->id)]) ?>
                        </td>
                    </tr>
            <?php endforeach; ?>
            </table>
<?php endif; ?>
    </div>
</div>
