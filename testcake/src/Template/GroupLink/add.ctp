<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupLink $groupLink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Group Link'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="groupLink form large-9 medium-8 columns content">
    <?= $this->Form->create($groupLink) ?>
    <fieldset>
        <legend><?= __('Add Group Link') ?></legend>
        <?php
            echo $this->Form->control('sort');
            echo $this->Form->control('createdate');
            echo $this->Form->control('updatedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
