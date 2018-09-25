<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleUser $roleUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role User'), ['action' => 'edit', $roleUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role User'), ['action' => 'delete', $roleUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Role User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role'), ['controller' => 'Role', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Role', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="roleUser view large-9 medium-8 columns content">
    <h3><?= h($roleUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= $roleUser->has('role') ? $this->Html->link($roleUser->role->id, ['controller' => 'Role', 'action' => 'view', $roleUser->role->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $roleUser->has('user') ? $this->Html->link($roleUser->user->id, ['controller' => 'Users', 'action' => 'view', $roleUser->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($roleUser->id) ?></td>
        </tr>
    </table>
</div>
