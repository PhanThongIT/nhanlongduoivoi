<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Size $size
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Size'), ['action' => 'edit', $size->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Size'), ['action' => 'delete', $size->id], ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Size'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tmp Size'), ['controller' => 'TmpSize', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tmp Size'), ['controller' => 'TmpSize', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="size view large-9 medium-8 columns content">
    <h3><?= h($size->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name Size') ?></th>
            <td><?= h($size->name_size) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($size->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($size->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($size->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Page Url Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Promotion Price') ?></th>
                <th scope="col"><?= __('Promotion') ?></th>
                <th scope="col"><?= __('Size Id') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('New') ?></th>
                <th scope="col"><?= __('Update At') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($size->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->category_id) ?></td>
                <td><?= h($products->page_url_id) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->detail) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->promotion_price) ?></td>
                <td><?= h($products->promotion) ?></td>
                <td><?= h($products->size_id) ?></td>
                <td><?= h($products->image) ?></td>
                <td><?= h($products->status) ?></td>
                <td><?= h($products->new) ?></td>
                <td><?= h($products->update_at) ?></td>
                <td><?= h($products->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tmp Size') ?></h4>
        <?php if (!empty($size->tmp_size)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Size Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('FlagDelete') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($size->tmp_size as $tmpSize): ?>
            <tr>
                <td><?= h($tmpSize->id) ?></td>
                <td><?= h($tmpSize->size_id) ?></td>
                <td><?= h($tmpSize->description) ?></td>
                <td><?= h($tmpSize->flagDelete) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TmpSize', 'action' => 'view', $tmpSize->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TmpSize', 'action' => 'edit', $tmpSize->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TmpSize', 'action' => 'delete', $tmpSize->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tmpSize->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
