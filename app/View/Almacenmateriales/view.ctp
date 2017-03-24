<section class="content-header">
  <h1>
    Sistema de gestión
    <small><?php echo __('Almacen materiales'); ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?= $this->Html->url('/Dashboard/')?>"><i class="fa fa-newspaper-o"></i> Inicio</a></li>
    <li class="active"><?php echo __('Almacen materiales'); ?></li>
  </ol>
</section>
<section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"><?php echo __('Almacen materiales'); ?> Detalles</h3>
                        <hr>
                    </div><!-- /.box-header -->
                    <div class="box-body">
						<dl class="dl-horizontal">
								<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($almacenmateriale['Almacenmateriale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Empresa'); ?></dt>
		<dd>
			<?php echo h($almacenmateriale['Empresa']['razon_social']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($almacenmateriale['Almacenmateriale']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($almacenmateriale['Almacenmateriale']['tipo']==1?"INSUMO":"EMBALAJE"); ?>
			&nbsp;
		</dd>
						</dl>
						<p>
						    		<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $almacenmateriale['Almacenmateriale']['id'])); ?>
                            |
                            		<?php echo $this->Html->link(__('Volver'), array('action' => 'index')); ?>
                        </p>
					</div>
			    </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
</section><!-- /.content -->
<?php /* ?><div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Almacenmateriale'), array('action' => 'edit', $almacenmateriale['Almacenmateriale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Almacenmateriale'), array('action' => 'delete', $almacenmateriale['Almacenmateriale']['id']), array(), __('Are you sure you want to delete # %s?', $almacenmateriale['Almacenmateriale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Almacenmateriales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Almacenmateriale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Empresas'), array('controller' => 'empresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Empresa'), array('controller' => 'empresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php */ ?>