	<div align="center">
		<h1>Formulário de inscrição</h1>
	</div>
	<div class="well well-lg">
		<?= form_open('usuarios/save','role="form"'); ?><?php if(validation_errors() != NULL && validation_errors() != '') { ?>
		<div class="alert alert-danger"><?= validation_errors(); ?></div><?php } ?>
		<input type="hidden" name="id" value="<?= isset($usuarios)?$usuarios->id:''?>"/>

		<div class="form-group">
			<label for="nome">Nome:</label><br/>
			<input type="text" class="form-control" name="nome" placeholder="Nome completo" value="<?= isset($usuarios)?$usuarios->nome:''?>"/>

		</div>
		<div class="form-group">
			<label for="email">Email:</label><br/>
			<input type="text" class="form-control" name="email" placeholder="Email" value="<?= isset($usuarios)?$usuarios->email:''?>"/>

		</div>
		<div class="form-group">
			<label for="idade">Idade:</label><br/>
			<input type="text" class="form-control" name="idade" placeholder="Idade" value="<?= isset($usuarios)?$usuarios->idade:''?>"/>

		</div>
		<input type="submit" value="Salvar" class="btn btn-primary"/>
		<?= anchor('usuarios/index','Voltar','class="btn btn-link"'); ?>
	</div>
</form>

