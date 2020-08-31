<!--script type="text/javascript">
    $(document).ready(function(){
       setTimeout(function() { $(".success_div").hide('slow'); }, 5000);
    });
</script-->
<?php
if(isset($_REQUEST['msg'])){
?>
<div class="success_div">
    <?php (isset($_REQUEST['msg']))?print $_REQUEST['msg']:''; ?>
</div>
<?php
} 
?>