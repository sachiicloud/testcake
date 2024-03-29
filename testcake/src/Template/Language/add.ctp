<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Language'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="language form large-9 medium-8 columns content">
    <?= $this->Form->create($language) ?>
    <fieldset>
        <legend><?= __('Add Language') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('createdate');
            echo $this->Form->control('updatedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
