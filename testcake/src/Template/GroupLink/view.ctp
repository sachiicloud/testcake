<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupLink $groupLink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group Link'), ['action' => 'edit', $groupLink->kgid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group Link'), ['action' => 'delete', $groupLink->kgid], ['confirm' => __('Are you sure you want to delete # {0}?', $groupLink->kgid)]) ?> </li>
        <li><?= $this->Html->link(__('List Group Link'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group Link'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groupLink view large-9 medium-8 columns content">
    <h3><?= h($groupLink->kgid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kgid') ?></th>
            <td><?= $this->Number->format($groupLink->kgid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kgid2') ?></th>
            <td><?= $this->Number->format($groupLink->kgid2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort') ?></th>
            <td><?= $this->Number->format($groupLink->sort) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createdate') ?></th>
            <td><?= h($groupLink->createdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updatedate') ?></th>
            <td><?= h($groupLink->updatedate) ?></td>
        </tr>
    </table>
</div>
