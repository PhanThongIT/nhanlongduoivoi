<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Size $size
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $size->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $size->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Size'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tmp Size'), ['controller' => 'TmpSize', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tmp Size'), ['controller' => 'TmpSize', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="size form large-9 medium-8 columns content">
    <?= $this->Form->create($size) ?>
    <fieldset>
        <legend><?= __('Edit Size') ?></legend>
        <?php
            echo $this->Form->control('name_size');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
