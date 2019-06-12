<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articulo'), ['action' => 'edit', $articulo->idArticulo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articulo'), ['action' => 'delete', $articulo->idArticulo], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->idArticulo)]) ?> </li>
        <li><?= $this->Html->link(__('List Articulos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articulos view large-9 medium-8 columns content">
    <h3><?= h($articulo->idArticulo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($articulo->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($articulo->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subtitulo') ?></th>
            <td><?= h($articulo->subtitulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contenido') ?></th>
            <td><?= h($articulo->contenido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdArticulo') ?></th>
            <td><?= $this->Number->format($articulo->idArticulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdTema') ?></th>
            <td><?= $this->Number->format($articulo->idTema) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario') ?></th>
            <td><?= $this->Number->format($articulo->idUsuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaCreacion') ?></th>
            <td><?= h($articulo->fechaCreacion) ?></td>
        </tr>
    </table>
</div>
