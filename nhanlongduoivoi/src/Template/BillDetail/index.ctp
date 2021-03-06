<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillDetail[]|\Cake\Collection\CollectionInterface $billDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bill Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billDetail index large-9 medium-8 columns content">
    <h3><?= __('Bill Detail') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bill_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($billDetail as $billDetail): ?>
            <tr>
                <td><?= $this->Number->format($billDetail->id) ?></td>
                <td><?= $billDetail->has('bill') ? $this->Html->link($billDetail->bill->id, ['controller' => 'Bills', 'action' => 'view', $billDetail->bill->id]) : '' ?></td>
                <td><?= $billDetail->has('product') ? $this->Html->link($billDetail->product->name, ['controller' => 'Products', 'action' => 'view', $billDetail->product->id]) : '' ?></td>
                <td><?= $this->Number->format($billDetail->quantity) ?></td>
                <td><?= $this->Number->format($billDetail->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $billDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billDetail->id)]) ?>
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
