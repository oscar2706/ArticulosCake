<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo[]|\Cake\Collection\CollectionInterface $articulos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulos index large-9 medium-8 columns content">
    <h3><?= __('Articulos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idArticulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subtitulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contenido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fechaCreacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idTema') ?></th>
                <th scope="col"><?= $this->Paginator->sort('idUsuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articulos as $articulo): ?>
            <tr>
                <td><?= $this->Number->format($articulo->idArticulo) ?></td>
                <td><?= h($articulo->slug) ?></td>
                <td><?= h($articulo->titulo) ?></td>
                <td><?= h($articulo->subtitulo) ?></td>
                <td><?= h($articulo->contenido) ?></td>
                <td><?= h($articulo->fechaCreacion) ?></td>
                <td><?= $this->Number->format($articulo->idTema) ?></td>
                <td><?= $this->Number->format($articulo->idUsuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articulo->idArticulo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articulo->idArticulo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articulo->idArticulo], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->idArticulo)]) ?>
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
