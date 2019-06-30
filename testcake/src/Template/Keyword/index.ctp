<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Keyword[]|\Cake\Collection\CollectionInterface $keyword
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <!--<li><?= $this->Html->link(__('New Keyword'), ['action' => 'add']) ?></li>-->
        <li><?= $this->Html->link(__('New Keyword'), '/testcake/keyword/add') ?></li>
    </ul>
</nav>
<div class="keyword index large-9 medium-8 columns content">
    <h3><?= __('Keyword') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('kid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lang') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wcid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('key_text') ?></th>
                <th scope="col"><?= $this->Paginator->sort('createdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updatedate') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($keyword as $keyword): ?>
            <tr>
                <td><?= $this->Number->format($keyword->kid) ?></td>
                <td><?= h($keyword->lang) ?></td>
                <td><?= h($keyword->wcid) ?></td>
                <td><?= h($keyword->key_text) ?></td>
                <td><?= h($keyword->createdate) ?></td>
                <td><?= h($keyword->updatedate) ?></td>
                <td class="actions">
                    <!--
                    <?= $this->Html->link(__('View'), ['action' => 'view', $keyword->kid]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $keyword->kid]) ?>
                    -->
                    <?= $this->Html->link(__('View'), '/testcake/keyword/view/' . $keyword->kid) ?>
                    <?= $this->Html->link(__('Edit'), '/testcake/keyword/edit/' . $keyword->kid) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $keyword->kid], ['confirm' => __('Are you sure you want to delete # {0}?', $keyword->kid)]) ?>
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
