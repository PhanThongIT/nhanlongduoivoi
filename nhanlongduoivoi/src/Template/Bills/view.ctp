<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bill $bill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bill'), ['action' => 'edit', $bill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bill'), ['action' => 'delete', $bill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bill Detail'), ['controller' => 'BillDetail', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill Detail'), ['controller' => 'BillDetail', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bills view large-9 medium-8 columns content">
    <h3><?= h($bill->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $bill->has('customer') ? $this->Html->link($bill->customer->name, ['controller' => 'Customers', 'action' => 'view', $bill->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Method') ?></th>
            <td><?= h($bill->payment_method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($bill->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($bill->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promt Price') ?></th>
            <td><?= $this->Number->format($bill->promt_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= $this->Number->format($bill->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token Date') ?></th>
            <td><?= $this->Number->format($bill->token_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($bill->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Order') ?></th>
            <td><?= h($bill->date_order) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bill Detail') ?></h4>
        <?php if (!empty($bill->bill_detail)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bill->bill_detail as $billDetail): ?>
            <tr>
                <td><?= h($billDetail->id) ?></td>
                <td><?= h($billDetail->bill_id) ?></td>
                <td><?= h($billDetail->product_id) ?></td>
                <td><?= h($billDetail->quantity) ?></td>
                <td><?= h($billDetail->price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BillDetail', 'action' => 'view', $billDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BillDetail', 'action' => 'edit', $billDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BillDetail', 'action' => 'delete', $billDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
