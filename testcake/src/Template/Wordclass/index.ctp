<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Wordclas[]|\Cake\Collection\CollectionInterface $wordclass
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Wordclas'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wordclass index large-9 medium-8 columns content">
    <h3><?= __('Wordclass') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('wcid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lang') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('createdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updatedate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wordclass as $wordclas): ?>
            <tr>
                <td><?= h($wordclas->wcid) ?></td>
                <td><?= h($wordclas->lang) ?></td>
                <td><?= h($wordclas->name) ?></td>
                <td><?= h($wordclas->createdate) ?></td>
                <td><?= h($wordclas->updatedate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wordclas->wcid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wordclas->wcid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wordclas->wcid], ['confirm' => __('Are you sure you want to delete # {0}?', $wordclas->wcid)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
