<?php
global $USER;
$USER = $this->session->userdata('user');

if(count($comments) > 0){ 
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
    echo '<div class="alert alert-info text-center" role="alert">Seja o primeiro a contribuir!</div>';
}else{
    echo '<div class="alert alert-info text-center" role="alert">Nenhuma contibuição</div>';
}

if($haveMore){
    echo '<div id="wrapShowMore" class="text-center">
            <button data-comment-page="'.$commmentPage.'" class="show-more btn btn-default">Mais comentarios</button>
        </div>';
}
?>