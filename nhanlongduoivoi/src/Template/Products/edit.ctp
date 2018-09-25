<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
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
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('page_url_id', ['options' => $pageUrl, 'empty' => true]);
            echo $this->Form->control('name');
            echo $this->Form->control('detail');
            echo $this->Form->control('price');
            echo $this->Form->control('promotion_price');
            echo $this->Form->control('promotion');
            echo $this->Form->control('size_id', ['options' => $size]);
            echo $this->Form->control('status');
            echo $this->Form->control('new');
            echo $this->Form->control('update_at');
            echo $this->Form->control('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
