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
                    Bem vindo a plataforma de participação popular digital,  aqui você poderá propor uma ideia de projeto para sua cidade, contribuir com a ideia de outras pessoas e votar contra ou a favor de uma ideia.   
                    <br/>
                    Participe.
                </div>
                <?php 
                }
                ?>
                <div class="filters">
                    <ul>
                        <li>
                            <a id="orderLast" href="#" class="active">
                                <i class="fa fa-clock-o"></i>
                                <div>Últimos</div>
                            </a>
                        </li>
                        <li>
                            <a id="orderRank" href="#">
                                <i class="fa fa-trophy"></i>
                                <div>Ranking</div>
                            </a>
                        </li>
                        <li>
                            <a id="orderCategory" href="#">
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