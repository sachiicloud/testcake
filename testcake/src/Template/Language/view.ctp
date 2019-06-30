<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Language $language
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Language'), ['action' => 'edit', $language->lang]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Language'), ['action' => 'delete', $language->lang], ['confirm' => __('Are you sure you want to delete # {0}?', $language->lang)]) ?> </li>
        <li><?= $this->Html->link(__('List Language'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="language view large-9 medium-8 columns content">
    <h3><?= h($language->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lang') ?></th>
            <td><?= h($language->lang) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($language->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Createdate') ?></th>
            <td><?= h($language->createdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updatedate') ?></th>
            <td><?= h($language->updatedate) ?></td>
        </tr>
    </table>
</div>
