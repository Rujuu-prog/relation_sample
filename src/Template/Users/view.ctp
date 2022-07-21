<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Hobbys'), ['controller' => 'Hobbys', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hobby'), ['controller' => 'Hobbys', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($user->age) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Hobbys') ?></h4>
        <?php if (!empty($user->hobbys)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Hobby') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->hobbys as $hobbys): ?>
            <tr>
                <td><?= h($hobbys->id) ?></td>
                <td><?= h($hobbys->hobby) ?></td>
                <td><?= h($hobbys->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Hobbys', 'action' => 'view', $hobbys->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Hobbys', 'action' => 'edit', $hobbys->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Hobbys', 'action' => 'delete', $hobbys->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobbys->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
