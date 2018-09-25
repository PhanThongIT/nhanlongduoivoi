<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Page Url'), ['controller' => 'PageUrl', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Page Url'), ['controller' => 'PageUrl', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Size'), ['controller' => 'Size', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Size', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bill Detail'), ['controller' => 'BillDetail', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bill Detail'), ['controller' => 'BillDetail', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('page_url_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('detail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('promotion_price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('promotion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('new') ?></th>
                <th scope="col"><?= $this->Paginator->sort('update_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->id) ?></td>
                <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                <td><?= $product->has('page_url') ? $this->Html->link($product->page_url->id, ['controller' => 'PageUrl', 'action' => 'view', $product->page_url->id]) : '' ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= h($product->detail) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $this->Number->format($product->promotion_price) ?></td>
                <td><?= h($product->promotion) ?></td>
                <td><?= $product->has('size') ? $this->Html->link($product->size->id, ['controller' => 'Size', 'action' => 'view', $product->size->id]) : '' ?></td>
                <td><?= h($product->status) ?></td>
                <td><?= h($product->new) ?></td>
                <td><?= h($product->update_at) ?></td>
                <td><?= h($product->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
