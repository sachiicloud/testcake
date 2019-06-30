<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GroupLink[]|\Cake\Collection\CollectionInterface $groupLink
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Group Link'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groupLink index large-9 medium-8 columns content">
    <h3><?= __('Group Link') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('kgid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kgid2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort') ?></th>
                <th scope="col"><?= $this->Paginator->sort('createdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updatedate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groupLink as $groupLink): ?>
            <tr>
                <td><?= $this->Number->format($groupLink->kgid) ?></td>
                <td><?= $this->Number->format($groupLink->kgid2) ?></td>
                <td><?= $this->Number->format($groupLink->sort) ?></td>
                <td><?= h($groupLink->createdate) ?></td>
                <td><?= h($groupLink->updatedate) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $groupLink->kgid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $groupLink->kgid]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $groupLink->kgid], ['confirm' => __('Are you sure you want to delete # {0}?', $groupLink->kgid)]) ?>
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
