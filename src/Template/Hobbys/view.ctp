<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hobby $hobby
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Hobby'), ['action' => 'edit', $hobby->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Hobby'), ['action' => 'delete', $hobby->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hobby->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Hobbys'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Hobby'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hobbys view large-9 medium-8 columns content">
    <h3><?= h($hobby->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Hobby') ?></th>
            <td><?= h($hobby->hobby) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $hobby->has('user') ? $this->Html->link($hobby->user->name, ['controller' => 'Users', 'action' => 'view', $hobby->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($hobby->id) ?></td>
        </tr>
    </table>
</div>
