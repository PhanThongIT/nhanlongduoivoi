<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PageUrl $pageUrl
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pageUrl->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pageUrl->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Page Url'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pageUrl form large-9 medium-8 columns content">
    <?= $this->Form->create($pageUrl) ?>
    <fieldset>
        <legend><?= __('Edit Page Url') ?></legend>
        <?php
            echo $this->Form->control('url');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
