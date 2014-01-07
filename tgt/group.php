<?php 
// include('phpFunction/checklogin.php');
include('config/config.php');
include('views/private/header.php');
$groupname=$_GET["gn"];
http_redirect()
?> 

<!--
<style>
body{
	background-color:#98c5ae;
	}
</style>
-->
 <?php

// Connects to  Database
include('config/config.php');
// Connects to  Database
mysql_connect("usttogether.com","usttrcom","ust71523") or die(mysql_error()) ;
mysql_select_db("usttrcom") or die(mysql_error()) ;

//Retrieves data from MySQL
$data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error());
//Puts it into an array
while($info = mysql_fetch_array( $data ))
{

	//Outputs the image and other data



	echo "<div class='col-lg-3 col-sm-3'>
   ";
	echo "
   <div class='thumbnail'>
   ";

	echo "
   <img class='img-responsive'  src=http://placehold.it/225x250 >
   ";

	echo "<br> ";

	echo "<a "."href='group.php?gn=".$info[group_name]."'>".$info[group_name]."</a>";
	echo "<br>";
	echo $info[group_admin];
	echo "<span></span>";
	echo "<br>";
	echo "Groupmem   ";
	echo $info[group_member];
	echo"</div>";

	echo "</div>";
}

?>




<div class="container">
	
		<img width=100% src='http://www.usttogether.com/tgt/images/group/ayp/aypbanner.gif'><hr>
		<h1 style="text-align:center; display:inline;" >HKAYP</h1>
		<a style=" float:right; vertical-align: top;font-size:20px; width:150px; height:40px;" class="btn btn-success">Follow</a>
		<hr>
		
		
		<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#Home" data-toggle="tab"class="glyphicon glyphicon-Home"style="color:green;">&nbsp;&nbsp;Home</a></li>
    <li><a href="#Description" data-toggle="tab"class="glyphicon glyphicon-book"style="color:green;">&nbsp;&nbsp;Description</a></li>
    <li><a href="#Event" data-toggle="tab"class="glyphicon glyphicon-bullhorn"style="color:green;">&nbsp;&nbsp;Event</a></li>
    <li><a href="#Discussion" data-toggle="tab"class="glyphicon glyphicon-inbox"style="color:green;">&nbsp;&nbsp;Discussion</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="Home"><br>
      <p>Welcome to ;</a>";
 Society</p>
      <p>香港青年獎勵計劃(The Hong Kong Award for Young People，簡稱AYP)，前身為「香港愛丁堡公爵獎勵計劃」(Duke of Edlnburghs Award，簡稱DEA)，為國際獎勵計劃協會成員。於一九九七年四月一日易名為「香港青年獎勵計劃」，並以地球和平鴿為新標誌。現時，全球共有四十多萬名參加者，分佈於超過六十個國家。</p>
      <img width=100% src="http://www.usttogether.com/tgt/images/group/ayp/ayp.jpg" alt="" />
    </div>
    <div class="tab-pane" id="Description">
     
			<table cellspacing="0" cellpadding="5">
             <tr bgcolor="#B0CBF9">
               <td colspan="2" class="midBoldWhite"><strong>服務科 </strong></td>
             </tr>
             <tr>
               <td colspan="2" bgcolor="#CCFFFF">服務科的精神就是學習服務他人，培養服務社會、互相幫助的精神。
                 <p>服務科給人的感覺都是做義工，因為做義工的確是最直接的服務方法。義工服務可以為個別有需要人士服務，或是為社會大眾提供服務，例如義工運動、改善市容、保護環境、協助社團工作、協助特殊居住環境之人士等。</p>
                 <p>想以義工形式考取服務章，就得完成以下的服務時數：<br>
                   銅章級：最少十五小時，分三個月進行<br>
                   銀章級：最少三十小時，分六個月進行<br>
                   金章級：最少一百小時，分十二個月進行</p>
                 <p>除了做義工這種實際活動，參加一些專門的訓練課程，或者考取一些認可機構所設的特定資格，亦可考取服務章。認可的活動包活：獨木舟救生、單車技術指導、拯溺等等。<br>
                 </p>                </td>
              </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">目的 </td>
               <td bgcolor="#FFFFFF">鼓勵參加者為他人服務 </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">活動例子 </td>
               <td bgcolor="#FFFFFF">社區服務、急救、兒童護理、拯溺、防火服務、動物護理、保護自然計劃等。 </td>
             </tr>
           </table>
           <p><a href="http://www.ayp.org.hk/doc/ser-hb.doc">服務科詳細規條及內容 &gt;&gt; </a></p>
           <table cellspacing="0" cellpadding="5">
             <tr bgcolor="#B0CBF9">
               <td colspan="2" class="midBoldWhite"><strong>野外鍛鍊科 </strong></td>
             </tr>
             <tr bgcolor="#CCFFFF">
               <td class="midBoldWhite" colspan="2">本科參加者必須在郊野、水道或海上進行一個自給自足、有明確目的並在最少的協助之下，完成一個富挑戰性的野外鍛鍊活動，以鍛鍊參加者體能和意志，從而培養他們的探索和發掘精神。
                 <p>參加者可選擇徒步、騎腳踏車、划獨木舟、駕駛風帆等作為本科的評估活動，以小組形式一同負責整個旅程的策劃及統籌工作策劃，經過適當的訓練及充足的準備後完成一次旅程，並在活動進行之後，完成活動報告。在進行評核前，參加者必須接受各樣基本野外訓練，如指南針的運用、營藝、急救等，加上一次或多次陸上或海上試行（包括一晚或多晚的露營，視乎章級而定）。</p>
                 <p>本科所要求的旅程時間則因應章級而有所不同：<br>
                   銅章級：兩日一夜，當中最少１２小時進行計劃的活動<br>
                   銀章級：三日兩夜，當中最少２１小時進行計劃的活動<br>
                金章級：四日三夜，當中最少３２小時進行計劃的活動</p></td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">目的 </td>
               <td bgcolor="#FFFFFF">鍛鍊參加者體能和意志，培養他們的探索和發掘精神 </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">活動例子 </td>
               <td bgcolor="#FFFFFF">可選擇徒步、騎腳踏車、划獨木舟、駕駛風帆等，以小組形式策劃及完成一次有明確目的之旅程。 </td>
             </tr>
           </table>
           <p><a href="http://www.ayp.org.hk/doc/exp-hb.doc">野外鍛鍊科詳細規條及內容 &gt;&gt; </a></p>
           <table cellspacing="0" cellpadding="5">
             <tr bgcolor="#B0CBF9">
               <td colspan="2" class="midBoldWhite"><strong>技能科 </strong></td>
             </tr>
             <tr bgcolor="#CCFFFF">
               <td class="midBoldWhite" colspan="2">技能科的目的在鼓勵年青人從各式各樣的文化、社交和實用技能的活動中選擇既能為自己帶來滿足感，又有意義的活動，從努力不懈中學習。
                 <p>參加者可選擇的活動甚多，如生活藝術、音樂、美術、工藝、駕駛交通工具的技巧、康槳活動的技巧、蒐集、研究及考察等。透過不斷參與及研究一項新而有挑戰性的活動使參加者發掘自己的潛能及建立自信心，充實地利用每一分一秒。</p>
                 <p>參加者必須在限定時間內，持續學習該技能並在學習該技能上表現有所進步，達玫更深入的認識及掌握適度的技巧：<br>
                   銅章級：六個月<br>
                   銀章級：十二個月（已完成銅章級技能科，可將時間減至六個月）<br>
                金章級：十八個月（已完成銀章級技能科，可將時間減至十二個月）</p></td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">目的 </td>
               <td bgcolor="#FFFFFF">鼓勵參加者發掘和培養個人興趣、社交及實際技能。 </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">活動例子 </td>
               <td bgcolor="#FFFFFF">藝術及工藝、電腦、語言、蒐集、音樂、康樂及生活藝術等。 </td>
             </tr>
           </table>
           <p><a href="http://www.ayp.org.hk/doc/skill-hb.doc">技能科詳細規條及內容 &gt;&gt; </a></p>
           <table cellspacing="0" cellpadding="5">
             <tr bgcolor="#B0CBF9">
               <td colspan="2" class="midBoldWhite"><strong>康樂體育科 </strong></td>
             </tr>
             <tr bgcolor="#CCFFFF">
               <td class="midBoldWhite" colspan="2">under construction... </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">目的 </td>
               <td bgcolor="#FFFFFF">鼓勵參加者參與康樂體育活動並爭取更佳表現。 </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">活動例子 </td>
               <td bgcolor="#FFFFFF">田徑、舞蹈、瑜珈、游泳及野外定向等等。 </td>
             </tr>
           </table>
           <p><a href="http://www.ayp.org.hk/doc/pr-hb.doc">康樂體育科詳細規條及內容 &gt;&gt; </a></p>
           <table cellspacing="0" cellpadding="5">
             <tr bgcolor="#B0CBF9">
               <td colspan="2" class="midBoldWhite"><strong>團體生活科 </strong></td>
             </tr>
             <tr bgcolor="#CCFFFF">
               <td class="midBoldWhite" colspan="2">under construction... </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">目的 </td>
               <td bgcolor="#FFFFFF">鼓勵青年人參加有意義的團體活動並與不相熟的朋友共同生活，藉此擴闊個人經，改進社交技巧。 </td>
             </tr>
             <tr>
               <td width="150" bgcolor="#FFFFCC">活動例子 </td>
               <td bgcolor="#FFFFFF">工作營、導師訓練班、外展訓練課程、服務計劃、領袖訓練、航海旅程訓練等。 </td>
             </tr>
           </table>

    </div>
    
     <div class="tab-pane " id="Event">
     <br />
     <span class="label label-important">Meeting</span>
    <span class="label label-warning">Hiking</span>
     <span class="label label-info">Dinner</span>
     <span class="label label-success">Sharing</span>
     <br />
     <br />
     <table class="table table-striped">
    <tr class="danger">
    <td>  <span class="label label-danger">Hiking</span></td>
    <td>TB - Monthly</td>
    <td>01/04/2014</td>
    <td>Sai kong</td>
 <td><a href='event.php?sgn=hiking'</a>Detail</td>
  </tr>
     <tr class="success">
    <td>  <span class="label label-success">Sharing</span></td>
    <td>TB - Monthly</td>
    <td>01/012/2014</td>
    <td>ROOM4210D</td>
      <td><a href='event.php?sgn=hiking'</a>Detail</td>
  </tr>
     <tr class="warning">
    <td> <span class="label label-warning">Dinner</span></td>
    <td>TB - Monthly</td>
    <td>01/09/2014</td>
    <td>LG7</td>
   <td><a href='event.php?sgn=hiking'</a>Detail</td>

  </tr>
  
</table>
     
    </div>
     <div class="tab-pane " id="Discussion">
     <br />
     <textarea style="width:80%; display:inline;" rows="2"placeholder="Leave some message here!" ></textarea>
     	<a style=" float:right; vertical-align:middle;font-size:16px; width:150px; height:40px;" class="btn btn-primary" >Comment</a>
      <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="http://placehold.it/64x64'">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Jackie</h4>
   hi my name is jackie ! nice to meet you guys!
 
    <!-- Nested media object -->
   


    </div>
  </div>
  <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="http://placehold.it/64x64'">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Lorraine</h4>
   Welcome!
 
    <!-- Nested media object -->
   
  </div>
</div>
</div>
   
  <div class="media">
  <a class="pull-left" href="#">
    <img class="media-object" src="http://placehold.it/64x64'">
  </a>
  <div class="media-body">
    <h4 class="media-heading">Thomas</h4>
   Welcome!!!
 
    <!-- Nested media object -->
   
  </div>
</div>

    </div>
  </div>
  

			


<?php

		$data = mysql_query("SELECT * FROM together_group_records") or die(mysql_error()); 
 
		while($info = mysql_fetch_array( $data )) 
{ 	
	
    /*
echo "<li><a href='event.php?sgn=".$info[group_name]."'>";
    echo "<img src='http://placehold.it/225x250'>";
    echo "<h2>".$info[group_name]."</h2>";
    echo "<p><strong>".$info[group_admin]."</strong></p>";
    echo "<p ><strong>Date:00:00:00 </strong></p>";
    echo "</a></li>";
    echo "<hr>";
*/
    
}    
   ?>




</div>
<!-- content -->
</div>
</div>

<?php include('views/private/footer.php');?>

