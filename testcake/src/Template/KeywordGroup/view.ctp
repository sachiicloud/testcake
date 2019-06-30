<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KeywordGroup $keywordGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Keyword Group'), ['action' => 'edit', $keywordGroup->kgid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Keyword Group'), ['action' => 'delete', $keywordGroup->kgid], ['confirm' => __('Are you sure you want to delete # {0}?', $keywordGroup->kgid)]) ?> </li>
        <li><?= $this->Html->link(__('List Keyword Group'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Keyword Group'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="keywordGroup view large-9 medium-8 columns content">
    <h3><?= h($keywordGroup->kgid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lang') ?></th>
            <td><?= h($keywordGroup->lang) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wcid') ?></th>
            <td><?= h($keywordGroup->wcid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kgid') ?></th>
            <td><?= $this->Number->format($keywordGroup->kgid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kid') ?></th>
            <td><?= $this->Number->format($keywordGroup->kid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort') ?></th>
            <td><?= $this->Number->format($keywordGroup->sort) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createdate') ?></th>
            <td><?= h($keywordGroup->createdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updatedate') ?></th>
            <td><?= h($keywordGroup->updatedate) ?></td>
        </tr>
    </table>
</div>
