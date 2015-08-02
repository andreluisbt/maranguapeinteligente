<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Novo Projeto</title>
    	
    	<?php 
    	$this->load->view('app/components/head');
    	global $USER;
    	?>
        
        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH3l0aJyPVgJlDgKSWg78FJrWrtMynNt4"></script>
        <script type="text/javascript" src="<?php echo base_url('js/projects/newProject.js');?>"></script>
        
    </head>
    <body id="<?php echo $page;?>">
        <header class="<?php echo ($USER?'logged':''); ?>">
            <div class="container">
                
                <?php 
                $this->load->view('app/components/header', array('page'=>$page));
                ?>
                
            </div>
        </header>
        <div id="titleBar" class="container">
            <div class="col-sm-6 col-md-6">
    	        <h2 class="page-title">
                    Últimos projetos
    	        </h2>
            </div>
        </div>
        
        <section id="sectionNewProject">
            <div class="container">
                
                <form id="formNewProject" method="post" data-before-submit="newProjectBeforeSubmit" data-success="newProjectSuccess" action="<?php echo site_url('projects/actionNewProject'); ?>">
                    <div class="msgs"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select id="category" name="category" class="form-control">
								<option value="">Selecione uma categoria</option>
								<option value="Reforma">Reforma</option>
								<option value="Cultura">Cultura</option>
								<option value="Lazer">Lazer</option>
								<option value="Segurança">Segurança</option>
								<option value="Educação">Educação</option>
								<option value="Saúde">Saúde</option>
							</select>
                        </div>
                        
                        <div class="form-group">
							<label for="title">Titulo</label>
							<input type="text" id="title" name="title" class="form-control" placeholder="Título">
						</div>
						
						<div class="form-group">
                            <label for="description">Descrição</label>
                            <textarea id="description" name="description" class="form-control" rows="6"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <ul class="files">
                                <li>
                                    <i class="fa fa-picture-o"></i>
                                    Imagem01.png
                                    <button type="button" class="btn pull-right"><i class="fa fa-times"></i></buttom>
                                </li>
                                <li>
                                    <i class="fa fa-picture-o"></i>
                                    Imagem02.png
                                    <button type="button" class="btn pull-right"><i class="fa fa-times"></i></buttom>
                                </li>
                                <li>
                                    <i class="fa fa-picture-o"></i>
                                    Imagem03.png
                                    <button type="button" class="btn pull-right"><i class="fa fa-times"></i></buttom>
                                </li>
                                <li>
                                    <i class="fa fa-picture-o"></i>
                                    Imagem04.png
                                    <button type="button" class="btn pull-right"><i class="fa fa-times"></i></buttom>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="form-group">
                            <button type="button" class="btn btn-primary">
                                <i class="fa fa-upload"></i>
                                Adicionar nova imagem
                            </button>
                        </div>

                    </div>
                    
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="description">Localização</label>
                            <div id="map"></div>
                            <input type="hidden" id="lat" name="lat">
                            <input type="hidden" id="lng" name="lgn">
                        </div>
                    </div>
                    
                     <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="buttom" class="btn btn-success">Salvar e publicar</button>
                     </div>
            
                </form>
            </div>
        </section>
        
        <!-- footer -->
        <?php 
        $this->load->view('app/components/footer');
        ?>

        
    </body>
</html>