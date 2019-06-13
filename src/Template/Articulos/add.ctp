<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<?= $this->Form->create($articulo) ?>
<?php $this->Form->setTemplates(['inputContainer' => '<div class="form-group row">{{content}}</div>']); ?>

<legend><?= __('Agregar articulo') ?></legend>
<?php echo $this->Form->control('slug', ['class' => 'form-control']);?>
<?php echo $this->Form->control('titulo', ['class' => 'form-control']); ?>
<?php echo $this->Form->control('subtitulo', ['class' => 'form-control']); ?>
<?php echo $this->Form->control('contenido', ['class' => 'form-control']); ?>
<?php echo $this->Form->control('fechaCreacion', ['class' => 'form-control']); ?>
<?php echo $this->Form->control('idTema', ['class' => 'form-control']); ?>
<?php echo $this->Form->control('idUsuario', ['class' => 'form-control']); ?>

<?= $this->Form->button(__('Registrar')) ?>
<?= $this->Form->end() ?>