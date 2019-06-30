<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupLink $groupLink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $groupLink->kgid],
                ['confirm' => __('Are you sure you want to delete # {0}?', $groupLink->kgid)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Group Link'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="groupLink form large-9 medium-8 columns content">
    <?= $this->Form->create($groupLink) ?>
    <fieldset>
        <legend><?= __('Edit Group Link') ?></legend>
        <?php
            echo $this->Form->control('sort');
            echo $this->Form->control('createdate');
            echo $this->Form->control('updatedate');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
