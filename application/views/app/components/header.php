<div class="row">
    <div id="logo" class="col-md-2">
        <a href="<?php echo site_url()?>">
            <img src="<?php echo base_url('img/logo.png'); ?>" />
        </a>
    </div>
    <div class="col-xs-10 col-sm-8 col-md-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-4">
        <?php 
        global $USER;
        if($USER){?>
        <div id="userBar" class="pull-right">
            <ul>
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <img class="user-pic" src="<?php echo base_url('datafiles/users/'.$USER->id.'.jpg'); ?>" />
                    </a>
                    <ul class="user-dropdown dropdown-menu">
                        <li>
                            <a href="#" class="btn">Minha página</a>
                        </li>
                        <li>
                            <a href="<?php echo site_url('app/actionLogout'); ?>" class="btn exit"><i class="fa fa-sign-out"></i> Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <?php }else{?>
        <div id="login" class="">
           	<form class="form-inline" method="post" data-before-submit="loginBeforeSubmit" data-success="loginSuccess" action="<?php echo site_url('app/actionLogin'); ?>"> 
    			<div class="msg text-center"></div>
    			<div class="form-group">
    				<input type="text" id="loginUser" name="loginUser" class="form-control"  placeholder="E-mail">
    			</div>
    			<div class="form-group">
                    <input type="password" id="loginPassword" name="loginPassword" class="form-control"  placeholder="Senha">
                </div>
    			<button type="submit" class="btn btn-success">
    				<span class="spin">
    					<i class="fa fa-arrow-right"></i>
    				</span>
    			</button>
    		</form>
    		<a href="<?php echo site_url('app/signup'); ?>" data-toggle="modal" data-target="#generalModal">
    		   <i class="fa fa-user"></i>Cadastre-se
    		</a>
    		<a href="<?php echo site_url('app/forgotpassword'); ?>" data-toggle="modal" data-target="#generalModal">
    		   <i class="fa fa-unlock-alt"></i>Esqueci a senha
            </a>
        </div>
        <?php }?>
    </div>

</div>



