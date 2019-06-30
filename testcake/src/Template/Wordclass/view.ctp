<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wordclas $wordclas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Wordclas'), ['action' => 'edit', $wordclas->wcid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Wordclas'), ['action' => 'delete', $wordclas->wcid], ['confirm' => __('Are you sure you want to delete # {0}?', $wordclas->wcid)]) ?> </li>
        <li><?= $this->Html->link(__('List Wordclass'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Wordclas'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wordclass view large-9 medium-8 columns content">
    <h3><?= h($wordclas->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Wcid') ?></th>
            <td><?= h($wordclas->wcid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lang') ?></th>
            <td><?= h($wordclas->lang) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($wordclas->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createdate') ?></th>
            <td><?= h($wordclas->createdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updatedate') ?></th>
            <td><?= h($wordclas->updatedate) ?></td>
        </tr>
    </table>
</div>
