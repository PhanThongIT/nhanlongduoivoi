<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillDetail $billDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bill Detail'), ['action' => 'edit', $billDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bill Detail'), ['action' => 'delete', $billDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bill Detail'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="billDetail view large-9 medium-8 columns content">
    <h3><?= h($billDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bill') ?></th>
            <td><?= $billDetail->has('bill') ? $this->Html->link($billDetail->bill->id, ['controller' => 'Bills', 'action' => 'view', $billDetail->bill->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $billDetail->has('product') ? $this->Html->link($billDetail->product->name, ['controller' => 'Products', 'action' => 'view', $billDetail->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($billDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($billDetail->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($billDetail->price) ?></td>
        </tr>
    </table>
</div>
