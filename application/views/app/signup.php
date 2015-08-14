<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">
		<span aria-hidden="true">&times;</span>
	</button>
	<h4 class="modal-title">Cadastro</h4>
</div>
<div class="modal-body">
	<form id="signupForm" method="post" enctype="multipart/form-data" data-before-submit="signupBeforeSubmit" data-success="signupSuccess" action="<?php echo site_url('users/actionNewUser'); ?>">
		<div class="msgs"></div>
		<div class="form-group">
			<div class="radio-inline">
				<label>
					<input type="radio" id="representsGroup" name="represents_group" value="0" checked>
					Usuário comum
				</label>
			</div>
			<div class="radio-inline">
				<label>
					<input type="radio" id="representsGroup" name="represents_group" value="1">
					Represento um grupo
				</label>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-group" style="display:none">
			<label for="groupName">Nome do grupo</label>
			<input type="text" id="groupName" name="group_name" class="form-control required" placeholder="Nome do grupo">
		</div>
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" id="name" name="name" class="form-control required" placeholder="Nome">
		</div>
		<div class="form-group">
			<label for="email">E-mail</label>
			<input type="email" id="email" name="email" class="form-control required" placeholder="E-mail">
		</div>
		<div class="form-group">
			<label for="password">Senha</label>
			<input type="password" id="password" name="password" class="form-control required" minlength="4" placeholder="Senha">
		</div>
		<div class="form-group">
			<label for="passwordConf">Confirma a senha</label>
			<input type="password" id="passwordConf" name="password_conf" class="form-control required" minlength="4" placeholder="Confirma a senha">
		</div>
		<div class="form-group">
			<label for="born">Data de nascimento</label>
			<input type="date" id="born" name="born" class="form-control required date" placeholder="Data de nascimento">
		</div>
		<div class="form-group">
			<label>Sexo</label>
			<div class="radio">
				<label>
					<input type="radio" id="gender" name="gender" value="1" checked>
					Masculino
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" id="gender" name="gender" value="0">
					Feminino
				</label>
			</div>
		</div>
		<div class="form-group">
			<label for="address">Endereço completo</label>
			<input type="text" id="address" name="address" class="form-control required" placeholder="Endereço completo">
		</div>
		<div class="form-group">
			<label for="cpf">CPF</label>
			<input type="text" id="cpf" name="cpf" class="form-control required cpf" placeholder="CPF">
		</div>
		<div class="form-group">
			<label for="cpf">Foto</label>
			<input type="file" id="image" name="image" class="form-control required" >
		</div>
	</form>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">
		Cancelar
	</button>
	<button type="submit" form="signupForm" class="btn btn-primary">
		Enviar
	</button>
</div>


<script>
	formValidationAjax($('#signupForm'));
	$('#signupForm input[name="represents_group"]').click(function(e){
		if($(this).val() == 1){
			$('#groupName').parent().show();
		}else{
			$('#groupName').parent().hide();
		}
	});


	signupBeforeSubmit = function(formData, $form, options){
		$form.find('.msgs').removeClass('success error')
							.addClass('loading')
							.html(preload);
	};

	signupSuccess = function(response, status, xhr, $form){
		$msgs = $form.find('.msgs');
		if(response.result){
			$msgs.removeClass('loading')
					.addClass('success')
					.html(response.msg);
			//$form.resetForm();
		}else{
			$msgs.removeClass('error')
					.addClass('success')
					.html(response.msg);
		}
	};


</script>