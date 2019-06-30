<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\KeywordGroup[]|\Cake\Collection\CollectionInterface $keywordGroup
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Keyword Group'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="keywordGroup index large-9 medium-8 columns content">
    <h3><?= __('Keyword Group') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('kgid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lang') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wcid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort') ?></th>
                <th scope="col"><?= $this->Paginator->sort('createdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updatedate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keywordGroup as $keywordGroup): ?>
            <tr>
                <td><?= $this->Number->format($keywordGroup->kgid) ?></td>
                <td><?= $this->Number->format($keywordGroup->kid) ?></td>
                <td><?= h($keywordGroup->lang) ?></td>
                <td><?= h($keywordGroup->wcid) ?></td>
                <td><?= $this->Number->format($keywordGroup->sort) ?></td>
                <td><?= h($keywordGroup->createdate) ?></td>
                <td><?= h($keywordGroup->updatedate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $keywordGroup->kgid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $keywordGroup->kgid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $keywordGroup->kgid], ['confirm' => __('Are you sure you want to delete # {0}?', $keywordGroup->kgid)]) ?>
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
