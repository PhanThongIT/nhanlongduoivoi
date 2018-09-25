<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleUser $roleUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $roleUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $roleUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Role User'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Role'), ['controller' => 'Role', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Role', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roleUser form large-9 medium-8 columns content">
    <?= $this->Form->create($roleUser) ?>
    <fieldset>
        <legend><?= __('Edit Role User') ?></legend>
        <?php
            echo $this->Form->control('role_id', ['options' => $role]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
