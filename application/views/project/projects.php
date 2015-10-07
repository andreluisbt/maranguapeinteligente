<div class="container">
    <?php
    global $USER;
    $USER = $this->session->userdata('user');

    $printClearfix = false;
    foreach($projects as $project) {
    ?>
    <div class="project-item col-md-6">
        <div class="clearfix"></div>
        <div class="item-header">
            <img class="owner-img" src="<?php echo base_url('datafiles/users/'.$project->owner->image); ?>" />
            <div class="pull-left">
                <?php if ($project->owner->represents_group) {
                    echo '<div class="owner-name represents">'.$project->owner->name.'</div>
                          <span class="group-name">'.$project->owner->group_name.'</span>';
                }else{
                    echo '<div class="owner-name">'.$project->owner->name.'</div>';
                }?>
            </div>

         </div>
         
         <div id="project<?php echo $project->id;?>Images" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php 
                $active = 'active';
				$slideCount = 0;
                foreach($project->images as $image){
                    echo '<li data-target="#project'.$project->id.'Images" data-slide-to="'.$slideCount.'" class="'.$active.'"></li>';
                    $active = '';
					$slideCount++;
                }
                ?>
            </ol>
            <a href="<?php echo site_url('projects/viewProject/'.$project->id)?>">
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
                <?php echo $project->rate_up;?><i class="fa fa-plus-circle"></i>
            </li>
            <li>
                <i class="fa fa-minus-circle"></i><?php echo $project->rate_down;?>
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
                <a href="<?php echo site_url('rates/rateDown/'.$project->id)?>"  class="rate-down <?php echo $rateDownClass;?>">
                    <i class="fa fa-minus"></i> 1
                </a>
            </li>
        </ul>
        <?php } ?>
        
        <div class="title">
            <a href="#">
               <?php echo $project->title; ?>
            </a>
        </div>
        
        <div class="clearfix"></div>
    </div>
    
    <?php 

        if($printClearfix){
            echo '<div class="clearfix"></div>';
            $printClearfix = false;
        }else{
            $printClearfix = true;
        }
    }
    ?>
    
</div>

<?php if($haveMore){?>
<div class="text-center">
    <a href="#" data-project-page="<?php echo $projectPage;?>" class="show-more btn btn-primary">Mostrar mais</a>
</div>
<?php }?>  