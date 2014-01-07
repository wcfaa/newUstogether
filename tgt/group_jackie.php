<?php 
    // include('phpFunction/checklogin.php');
    include('config/config.php');
    include('views/private/header.php');
    session_start();
//    $_SESSION['groupname']=$_GET["gn"];
    $groupID=$_GET["gn"];
?>

<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10"><?php include('group_banner.php')?></div>
        <div class="col-md-1"></div>
    </div>

	<div class="row">
<!--        Side Column for display details           -->
<!--        用左groupSideColumn_jackie.php，到時要換番-->
        <div class="col-md-3">
            <div class="container">
                <?php include('groupSideColumn_jackie.php')?>
            </div>
        </div>
<!-- GROUP DETAIL BAR           -->
	    <div class="col-md-6">
  	        <div class="container">
                <?php include('group_detail.php')?>
            </div>
        </div>
<!--            -->
        <div class="col-md-3">
            <div class="container">
                <?php include('sidebar_relate_group.php')?>
            </div>
        </div>
<!--            -->
    </div>
</div>
<?php include('views/private/footer.php');?>
