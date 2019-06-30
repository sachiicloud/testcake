<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword $keyword
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Keyword'), ['action' => 'edit', $keyword->kid]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Keyword'), ['action' => 'delete', $keyword->kid], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->kid)]) ?> </li>
        <li><?= $this->Html->link(__('List Keyword'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Keyword'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="keyword view large-9 medium-8 columns content">
    <h3><?= h($keyword->kid) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lang') ?></th>
            <td><?= h($keyword->lang) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wcid') ?></th>
            <td><?= h($keyword->wcid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Key Text') ?></th>
            <td><?= h($keyword->key_text) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kid') ?></th>
            <td><?= $this->Number->format($keyword->kid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createdate') ?></th>
            <td><?= h($keyword->createdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updatedate') ?></th>
            <td><?= h($keyword->updatedate) ?></td>
        </tr>
    </table>
</div>
