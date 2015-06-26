<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Home</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
        
        <!-- Jquery e bootstrap -->
        <script src="<?php echo base_url('lib/jquery-2.1.3/jquery-2.1.3.min.js');?>"></script>
        <script src="<?php echo base_url('lib/bootstrap-3.3.2/dist/js/bootstrap.min.js');?>"></script>
        
        <script src="<?php echo base_url('lib/jquery.form.min.js');?>"></script>
        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('style/less/app.less');?>" />
        
        <script src="<?php echo base_url('lib/less-2.3.1/less.min.js');?>"></script>
    	
        <script>
            var site_url = function(path){
                var url = "<?php echo site_url('"+path+"'); ?>";
                return url;
            }
            var base_url = function(path){
                var url = "<?php echo base_url('"+path+"'); ?>";
                return url;
            }
        </script>
    	
    	<script type="text/javascript" src="<?php echo base_url('js/app.js');?>"></script>
    	
    </head>
    <body id="home">
        <header>
            <div class="container">
                <div id="logo" class="col-md-2">
                    <a href="#">
                        <img src="<?php echo base_url('img/logo.png'); ?>" />
                    </a>
                </div>
                <div class="col-xs-10 col-sm-8 col-md-6 col-xs-offset-1 col-sm-offset-2 col-md-offset-4">
                    <?php if($logged){?>
                    <div id="userBar" class="">
                        <ul>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <img class="user-pic" src="<?php echo base_url('img/user-img_med.png'); ?>" />
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
                       	<form class="form-inline" method="post" data-success="loginSuccess" data-before-submit="loginBeforeSubmit" action="<?php echo site_url('app/actionLogin'); ?>"> 
    						<div class="msg text-center"></div>
    						<div class="form-group">
    							<input type="text" id="loginUser" name="loginUser" class="form-control"  placeholder="Usuário">
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
                <div class="clearfix"></div>
                <?php if(!$logged){?>
                <div class="text hidden-xs col-md-10 col-md-offset-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                <?php }?>
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-clock-o"></i>
                                <div>Últimas</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-trophy"></i>
                                <div>Ranking</div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-tags"></i>
                                <div>Categorias</div>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <div id="titleBar" class="container">
            <div class="col-sm-6 col-md-6">
    	        <h2 class="page-title">
                    Últimos projetos
    	        </h2>
            </div>
	        <div class="col-sm-6 col-md-6">
	           <a href="#" class="add btn btn-success pull-right"><i class="fa fa-plus"></i> Enviar novo projeto</a>
            </div>
        </div>
        
        <section id="sectionProjects">
            <div class="container">
                
                <?php
                for($i=0; $i<10; $i++){
                ?>
                <div class="project-item col-md-6">
                    <div class="clearfix"></div>
                    <div class="item-header">
                        <img class="owner-img" src="<?php echo base_url('img/user-img_med.png'); ?>" />
                        <div class="owner-name">Marcelo Ferreira</div>
                     </div>
                     
                     <div id="carousel_<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_<?php echo $i;?>" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_<?php echo $i;?>" data-slide-to="1"></li>
                            <li data-target="#carousel_<?php echo $i;?>" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="<?php echo base_url('img/img-project-sample.png'); ?>">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('img/img-project-sample.png'); ?>">
                            </div>
                            <div class="item">
                                <img src="<?php echo base_url('img/img-project-sample.png'); ?>">
                            </div>
                        </div>
                    </div>
                    
                    <ul class="count-likes">
                        <li>
                            31<i class="fa fa-plus-circle"></i>
                        </li>
                        <li>
                            <i class="fa fa-minus-circle"></i>75
                        </li>
                    </ul>
                    
                    <ul class="actions">
                        <li>
                            <a href="#" class="btn btn-success">
                                <span class="spin">
                                    <i class="fa fa-plus"></i> 1
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-danger">
                                <span class="spin">
                                    <i class="fa fa-minus"></i> 1
                                </span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="title">
                        <a href="#">
                            Substituição dos banco da praça da bandeira
                        </a>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                
                <?php }?>
                
            </div>
        </section>
        
        <footer>
            <div>
                <img src="<?php echo base_url('img/logo-rodape.png'); ?>">
            </div>
            <div>
                © 2014 SuaCidade. Todos os direiros reservados
            </div>
        </footer>
        
       	<div id="generalModal" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<div class="preload">
							<span class="bar bar-1"></span>
							<span class="bar bar-2"></span>
							<span class="bar bar-3"></span>
						</div>
					</div>
				</div>
			</div>
		</div>

        
    </body>
</html>