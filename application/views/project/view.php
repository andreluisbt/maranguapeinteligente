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
                    <img class="pull-left" src="<?php echo base_url('datafiles/users/'.$project->owner->image); ?>" />
                    <div class="count-date">
                        <a><?php echo $project->owner->countProjects;?> projeto(s)</a>
                        <!--<span>desde 14/01/2010</span>-->
                    </div>
                    
                    <?php if ($project->owner->represents_group) {
                        echo '<div class="name represents">'.$project->owner->name.'</div>
                              <span class="group">'.$project->owner->group_name.'</span>';
                    }else{
                        echo '<a class="name">'.$project->owner->name.'</a>';
                    }?>

                </div>
                <div class="clearfix"></div>
                <div class="col-md-6">
                    <div class="project-item">
                        <div class="title">
                            <?php echo $project->title;?>
                        </div>
                         
                         <div id="projectImages" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php 
                                $active = 'active';
								$slideCount = 0;
                                foreach($project->images as $image){
                                    echo '<li data-target="#projectImages" data-slide-to="'.$slideCount.'" class="'.$active.'"></li>';
                                    $active = '';
									$slideCount++;
                                }
                                ?>
                            </ol>
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
                        </div>
                        
                        <ul class="count-likes">
                            <li>
                                31<i class="fa fa-plus-circle"></i>
                            </li>
                            <li>
                                <i class="fa fa-minus-circle"></i>75
                            </li>
                        </ul>
                        
                        <?php if($USER){ 
                            $rateUpClass = '';
                            $rateDownClass = ''; 
                            if($project->myRate === 1){
                                $rateUpClass = 'active';
                            }else if($project->myRate === 0){
                                $rateDownClass = 'active';
                            }
                        ?>
                        <ul class="actions">
                            <li>
                                <a href="<?php echo site_url('rates/rateUp/'.$project->id)?>" class="rate-up <?php echo $rateUpClass;?>">
                                    <i class="fa fa-plus"></i> 1
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('rates/rateDown/'.$project->id)?>" class="rate-down  <?php echo $rateDownClass;?>">
                                    <i class="fa fa-minus"></i> 1   
                                </a>
                            </li>
                        </ul>
                        <?php } ?>

                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="project-description">
                        <?php echo $project->description;?>                    
                    </div>
                    
                </div>
                
                <div class="col-md-6">
                    <div class="comments">
                        asdasdasdasdasdasdas
                        asdasdasdadasd
                        asdasdas
                        
                    </div> 
                    
                    <?php if($USER){?>
                    <div class="form-group">
                        <textarea id="textComment" class="form-control" placeholder="Contribuição"></textarea>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-success">Enviar contribuição</button>
                    </div>
                    <?php } ?>
                      
                </div>
                
            </div>
        </section>
        
        <!-- footer -->
        <?php 
        $this->load->view('app/components/footer');
        ?>
        
    </body>
</html>