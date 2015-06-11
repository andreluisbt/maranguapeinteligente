<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Home</title>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">
        
        <!-- Jquery e bootstrap -->
        <script src="<?php echo base_url('lib/jquery-2.1.3/jquery-2.1.3.min.js');?>"></script>
        <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('lib/bootstrap-3.3.2/less/bootstrap.less');?>" />
        <script src="<?php echo base_url('lib/bootstrap-3.3.2/dist/js/bootstrap.min.js');?>"></script>
        
        <!--
        <script src="<?php echo base_url('lib/jquery-validation-1.13.1/jquery.validate.js');?>"></script>
        <script src="<?php echo base_url('lib/jquery-validation-1.13.1/jquery.form.js');?>"></script>
        <script src="<?php echo base_url('lib/jquery-validation-1.13.1/localization/messages_pt_BR.js');?>"></script>
        
    	<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
        -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
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
                <nav>
                    <ul>
                    	<!--
                        <li>
                            <a href="#">
                                <img src="<?php echo base_url('img/logo.png'); ?>" />
                            </a>
                        </li>
                       -->
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
                <div style="height: 420px;"></div>
            </div>
        </header>
        
        <div id="titleBar" class="container">
	        <h2 class="page-title">Últimos projetos</h2>
	        <a href="#" class="add btn btn-success"><i class="fa fa-plus"></i> Enviar novo projeto</a>
        </div>
        
        <section id="sectionProjects">
            <div class="container">
                <div class="project-item col-md-6">
                    <div class="item-header">
                        <img class="owner-img" src="<?php echo base_url('img/user-img_med.png'); ?>" />
                        <div class="owner-name">Marcelo Ferreira</div>
                        <ul class="count-likes">
                            <li>
                            	31<i class="fa fa-plus-circle"></i>
                            </li>
                            <li>
                            	<i class="fa fa-minus-circle"></i>75
                            </li>
                        </ul>
                     </div>
                     
                     <div id="carousel_01" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_01" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_01" data-slide-to="1"></li>
                            <li data-target="#carousel_01" data-slide-to="2"></li>
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
                    
                    <div class="title">Substituição dos banco da praça da bandeira</div>
                    <ul class="actions">
                        <li>
                            <a href="#" class="btn btn-success">
                                <i class="fa fa-plus"></i> 1
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn btn-danger">
                                <i class="fa fa-minus"></i> 1
                            </a>
                        </li>
                    </ul>
					
                </div>
                
                
                
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
        
    </body>
</html>