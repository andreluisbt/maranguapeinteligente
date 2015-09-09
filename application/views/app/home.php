<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Home</title>
    	<?php
    	global $USER; 
    	$this->load->view('app/components/head');
    	?>

        <script type="text/javascript" src="<?php echo base_url('js/home.js');?>"></script>

    </head>
    <body id="<?php echo $page;?>">
        <header class="<?php echo ($USER?'logged':''); ?>">
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
        
        <section id="sectionProjects"></section>   
        
        <!-- footer -->
        <?php 
        $this->load->view('app/components/footer');
        ?>
        
    </body>
</html>