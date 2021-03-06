<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Size[]|\Cake\Collection\CollectionInterface $size
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Size'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tmp Size'), ['controller' => 'TmpSize', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tmp Size'), ['controller' => 'TmpSize', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="size index large-9 medium-8 columns content">
    <h3><?= __('Size') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_size') ?></th>
                <th scope="col"><?= $this->Paginator->sort('note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($size as $size): ?>
            <tr>
                <td><?= $this->Number->format($size->id) ?></td>
                <td><?= h($size->name_size) ?></td>
                <td><?= h($size->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $size->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $size->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?>
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
