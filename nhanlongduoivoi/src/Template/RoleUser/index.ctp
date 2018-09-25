<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RoleUser[]|\Cake\Collection\CollectionInterface $roleUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Role User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Role'), ['controller' => 'Role', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Role'), ['controller' => 'Role', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="roleUser index large-9 medium-8 columns content">
    <h3><?= __('Role User') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roleUser as $roleUser): ?>
            <tr>
                <td><?= $this->Number->format($roleUser->id) ?></td>
                <td><?= $roleUser->has('role') ? $this->Html->link($roleUser->role->id, ['controller' => 'Role', 'action' => 'view', $roleUser->role->id]) : '' ?></td>
                <td><?= $roleUser->has('user') ? $this->Html->link($roleUser->user->id, ['controller' => 'Users', 'action' => 'view', $roleUser->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $roleUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $roleUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $roleUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $roleUser->id)]) ?>
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
