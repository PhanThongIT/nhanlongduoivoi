<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Role'), ['action' => 'edit', $role->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Role'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Role'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Role User'), ['controller' => 'RoleUser', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Role User'), ['controller' => 'RoleUser', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="role view large-9 medium-8 columns content">
    <h3><?= h($role->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($role->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($role->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Role User') ?></h4>
        <?php if (!empty($role->role_user)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Role Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($role->role_user as $roleUser): ?>
            <tr>
                <td><?= h($roleUser->id) ?></td>
                <td><?= h($roleUser->role_id) ?></td>
                <td><?= h($roleUser->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'RoleUser', 'action' => 'view', $roleUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'RoleUser', 'action' => 'edit', $roleUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'RoleUser', 'action' => 'delete', $roleUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleUser->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
