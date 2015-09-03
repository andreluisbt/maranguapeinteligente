
<div>Seja o primeiro a contribuir!</div>

<?php

die;


global $USER;
$USER = $this->session->userdata('user');

foreach($comments as $comment) {
?>

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

<?php }?>

<?php if($haveMore){?>
<div class="text-center">
    <button class="show-more btn btn-default">Mais comentarios</button>
</div>
<?php }?>