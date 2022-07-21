<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Hobby $hobby
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Hobbys'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hobbys form large-9 medium-8 columns content">
    <?= $this->Form->create($hobby) ?>
    <fieldset>
        <legend><?= __('Add Hobby') ?></legend>
        <?php
            echo $this->Form->control('hobby');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
