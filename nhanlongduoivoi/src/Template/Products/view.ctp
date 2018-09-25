<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Page Url'), ['controller' => 'PageUrl', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Page Url'), ['controller' => 'PageUrl', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Size'), ['controller' => 'Size', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Size', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bill Detail'), ['controller' => 'BillDetail', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bill Detail'), ['controller' => 'BillDetail', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Page Url') ?></th>
            <td><?= $product->has('page_url') ? $this->Html->link($product->page_url->id, ['controller' => 'PageUrl', 'action' => 'view', $product->page_url->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Detail') ?></th>
            <td><?= h($product->detail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotion') ?></th>
            <td><?= h($product->promotion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $product->has('size') ? $this->Html->link($product->size->id, ['controller' => 'Size', 'action' => 'view', $product->size->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promotion Price') ?></th>
            <td><?= $this->Number->format($product->promotion_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Update At') ?></th>
            <td><?= h($product->update_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $product->status ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New') ?></th>
            <td><?= $product->new ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $product->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Bill Detail') ?></h4>
        <?php if (!empty($product->bill_detail)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bill Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->bill_detail as $billDetail): ?>
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
