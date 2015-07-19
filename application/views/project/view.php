<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Detalhes do projeto</title>
    	
    	<?php $this->load->view('app/components/head');?>
          
    </head>
    <body id="<?php echo $page;?>">
        <header class="<?php echo ($logged?'logged':''); ?>">
            <div class="container">
                
                <?php 
                $this->load->view('app/components/header', array('logged'=>$logged, 'page'=>$page));
                ?>
                
            </div>
        </header>
        <div id="titleBar" class="container">
	        <h2 class="page-title">
                Detalhes do projeto
	        </h2>
        </div>
        
        <section id="sectionViewProject">
            <div class="container">
                
                <div class="owner">
                    <a href="#" data-toggle="dropdown">
                        <img class="user-pic" src="<?php echo base_url('img/user-img_med.png'); ?>" />
                    </a>
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