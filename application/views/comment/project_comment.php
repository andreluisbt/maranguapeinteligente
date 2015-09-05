<?php
global $USER;
$USER = $this->session->userdata('user');

if(isset($comments) > 0){ 
    foreach($comments as $comment) {
        echo '<div class="comment">
                <div>
                    <a href="#" class="name">
                        <img class="pull-left" src="'.base_url('datafiles/users/'.$comment->owner->image).'" />
                        '.$comment->owner->name.'
                    </a>
                </div>
                <div class="clearfix"></div>
                <div class="text">
                '.$comment->comment.'
                </div>
            </div>';
    }
}else if($USER){
    echo '<div>Seja o primeiro a contribuir!</div>';
}else{
    echo '<div>Nenhuma contibuição</div>';
}

if($haveMore){
    echo '<div class="text-center">
            <button class="show-more btn btn-default">Mais comentarios</button>
        </div>';
}
?>