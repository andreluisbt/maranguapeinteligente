<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Home</title>
    	<?php
    	global $USER; 
    	$this->load->view('app/components/head');
    	?>
    </head>
    <body id="<?php echo $page;?>">
        <header class="<?php echo ($logged?'logged':''); ?>">
            <div class="container">
                
                <?php 
                $this->load->view('app/components/header', array('page'=>$page));
                ?>
                <div class="clearfix"></div>
                <?php 
                if(!$USER){
                ?>
                <div class="text hidden-xs col-md-10 col-md-offset-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </div>
                <?php 
                }
                ?>
                <div class="filters">
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
                </div>
            </div>
        </header>
        <div id="titleBar" class="container">
            <div class="col-sm-6 col-md-6">
    	        <h2 class="page-title">
                    Últimos projetos
    	        </h2>
            </div>
            <?php if($USER){?>
	        <div class="col-sm-6 col-md-6">
	           <a href="<?php echo site_url('projects/newProject')?>" class="add btn btn-success pull-right"><i class="fa fa-plus"></i> Enviar novo projeto</a>
            </div>
            <?php }?>
        </div>
        
        <section id="sectionProjects">
            <div class="container">
                
                <?php
                for($i=0; $i<10; $i++){
                ?>
                <div class="project-item col-md-6">
                    <div class="clearfix"></div>
                    <div class="item-header">
                        <img class="owner-img" src="<?php echo base_url('img/user01-img.png'); ?>" />
                        <div class="owner-name">Marcelo Ferreira</div>
                     </div>
                     
                     <div id="carousel_<?php echo $i;?>" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel_<?php echo $i;?>" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel_<?php echo $i;?>" data-slide-to="1"></li>
                            <li data-target="#carousel_<?php echo $i;?>" data-slide-to="2"></li>
                        </ol>
                        <a href="<?php echo site_url('projects/viewProject/1')?>">
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
                        </a>
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
            <div class="text-center">
                <button class="load-more btn btn-primary">Mostrar mais</button>
            </div>
        </section>
        
        <!-- footer -->
        <?php 
        $this->load->view('app/components/footer');
        ?>
        
    </body>
</html>