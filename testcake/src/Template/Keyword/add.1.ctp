<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword $keyword
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Keyword'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="keyword form large-9 medium-8 columns content">
    <?= $this->Form->create('/testcake/keyword/add/') ?>
    <fieldset>
        <legend><?= __('Add Keyword') ?></legend>
        <?php
            echo $this->Form->control('lang');
            echo $this->Form->control('wcid');
            echo $this->Form->control('key_text');
            echo $this->Form->control('createdate');
            echo $this->Form->control('updatedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
