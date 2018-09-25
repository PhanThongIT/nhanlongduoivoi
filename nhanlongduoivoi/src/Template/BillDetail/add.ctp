<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BillDetail $billDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bill Detail'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bills'), ['controller' => 'Bills', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bill'), ['controller' => 'Bills', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billDetail form large-9 medium-8 columns content">
    <?= $this->Form->create($billDetail) ?>
    <fieldset>
        <legend><?= __('Add Bill Detail') ?></legend>
        <?php
            echo $this->Form->control('bill_id', ['options' => $bills]);
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('quantity');
            echo $this->Form->control('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
