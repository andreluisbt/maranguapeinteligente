<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<title>Detalhes do projeto</title>
    	
    	<?php 
    	global $USER;
    	$this->load->view('app/components/head');
    	?>
          
    </head>
    <body id="<?php echo $page;?>">
        <header class="<?php echo ($USER?'logged':''); ?>">
            <div class="container">
                <?php 
                $this->load->view('app/components/header', array('page'=>$page));
                ?>
            </div>
        </header>
        
        <section id="sectionViewProject">
            <div class="container">
                <div class="owner">
                    <img class="pull-left" src="<?php echo base_url('img/user01-img.png'); ?>" />
                    <div class="count-date">
                        <a href="#">12 projetos</a>
                        <span>desde 14/01/2010</span>
                    </div>
                    <a href="#" class="name">
                        Marcelo Ferreira
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="project-item">
                        <div class="title">
                            <?php echo $project->title;?>
                        </div>
                         
                         <div id="carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel" data-slide-to="1"></li>
                                <li data-target="#carousel" data-slide-to="2"></li>
                            </ol>
                            <a href="<?php echo site_url('project/viewProject')?>">
                                <div class="carousel-inner" role="listbox">
                                    <?php 
                                    $active = 'active';
                                    foreach($project->images as $image){
                                        echo '<div class="item '.$active.'">
                                                <img src="'.base_url($image).'">
                                            </div>';
                                        $active = '';
                                    }
                                    ?>
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
                        
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="project-description">
                        <?php echo $project->description;?>                    
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="comments">
                        <div class="comment">
                            <div>
                                <a href="#" class="name">
                                    <img class="pull-left" src="<?php echo base_url('img/user03-img.png'); ?>" />
                                    Alexandre Paes
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        
                        <div class="comment">
                            <div>
                                <a href="#" class="name">
                                    <img class="pull-left" src="<?php echo base_url('img/user03-img.png'); ?>" />
                                    Alexandre Paes
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        
                        <div class="comment">
                            <div>
                                <a href="#" class="name">
                                    <img class="pull-left" src="<?php echo base_url('img/user04-img.png'); ?>" />
                                    Alexandre Paes
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        
                        <div class="comment">
                            <div>
                                <a href="#" class="name">
                                    <img class="pull-left" src="<?php echo base_url('img/user01-img.png'); ?>" />
                                    Alexandre Paes
                                </a>
                            </div>
                            <div class="clearfix"></div>
                            <div class="text">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button class="show-more btn btn-default">Mais comentarios</button>
                        </div>
                        
                    </div> 
                    
                    <div class="form-group">
                        <textarea id="textComment" class="form-control" placeholder="Contribuição"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-success">Enviar contribuição</button>
                    </div>
                      
                </div>
                
            </div>
        </section>
        
        <!-- footer -->
        <?php 
        $this->load->view('app/components/footer');
        ?>
        
    </body>
</html>