	
<div class="well well-lg">
	<h2>Usuarios</h2>
	<table class="table">
		<tr>
			<th>#</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Idade</th>
			<th colspan="2"></th>
		</tr>
		<?php foreach ($usuarios as $object) { ?>
		<tr>
			<td><?=$object->id ?></td>
			<td><?= $object->nome ?></td>
			<td><?= $object->email ?></td>
			<td><?= $object->idade ?></td>
			<td width="80"><?= anchor('/usuarios/edit/'.$object->id, 'Editar','class="btn btn-warning"'); ?></td>
			<td width="80"><?= anchor('/usuarios/destroy/'.$object->id, 'Excluir','class="btn btn-danger"'); ?></td>
		</tr><?php } ?>
	</table>
</div>

<?= anchor('/usuarios/create','Cadastrar novos usuários','class="btn btn-primary"'); ?>
