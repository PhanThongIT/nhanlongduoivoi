<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Role User'), ['controller' => 'RoleUser', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role User'), ['controller' => 'RoleUser', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('fullname');
            echo $this->Form->control('birthdate', ['empty' => true]);
            echo $this->Form->control('gender');
            echo $this->Form->control('address');
            echo $this->Form->control('email');
            echo $this->Form->control('phone');
            echo $this->Form->control('remember_token');
            echo $this->Form->control('updated_at');
            echo $this->Form->control('created_at');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
