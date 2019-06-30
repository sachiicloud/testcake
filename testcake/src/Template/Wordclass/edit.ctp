<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wordclas $wordclas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wordclas->wcid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wordclas->wcid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Wordclass'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="wordclass form large-9 medium-8 columns content">
    <?= $this->Form->create($wordclas) ?>
    <fieldset>
        <legend><?= __('Edit Wordclas') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('createdate');
            echo $this->Form->control('updatedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
