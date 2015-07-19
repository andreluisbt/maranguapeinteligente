<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1, user-scalable=no">

<!-- Jquery e bootstrap -->
<script src="<?php echo base_url('lib/jquery-2.1.3/jquery-2.1.3.min.js');?>"></script>
<script src="<?php echo base_url('lib/bootstrap-3.3.2/dist/js/bootstrap.min.js');?>"></script>

<script src="<?php echo base_url('lib/jquery.form.min.js');?>"></script>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<link rel="stylesheet/less" type="text/css" href="<?php echo base_url('style/less/app.less');?>" />

<script src="<?php echo base_url('lib/less-2.3.1/less.min.js');?>"></script>

<script>
    var site_url = function(path){
        var url = "<?php echo site_url('"+path+"'); ?>";
        return url;
    }
    var base_url = function(path){
        var url = "<?php echo base_url('"+path+"'); ?>";
        return url;
    }
</script>

<script type="text/javascript" src="<?php echo base_url('js/app.js');?>"></script>