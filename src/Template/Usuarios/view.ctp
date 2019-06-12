<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idUsuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idUsuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idUsuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->idUsuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($usuario->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contraseña') ?></th>
            <td><?= h($usuario->contraseña) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= h($usuario->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdUsuario') ?></th>
            <td><?= $this->Number->format($usuario->idUsuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdGenero') ?></th>
            <td><?= $this->Number->format($usuario->idGenero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IdEstadoCivil') ?></th>
            <td><?= $this->Number->format($usuario->idEstadoCivil) ?></td>
        </tr>
    </table>
</div>
