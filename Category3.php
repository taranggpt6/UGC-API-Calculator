<!DOCTYPE html>
<html>
	<head>
		<style>
            div.container {
				width: 85%;
				margin-left: 100px;
				margin-right:100px;
				align:center;
				border: 1px solid gray;
             }
			#entete{
				padding-top: 1em;
				padding-left: 1em;
				padding-right: 1em;
				padding-bottom: 0.01em;
				color: white;
				background-color: #689980;
				clear: left;
				text-align: center;
			}
​            header,footer{
				padding: 1em;
				color: white;
				background-color: black;
				clear: left;
				text-align: center;
				}
			nav {
				float: left;
				max-width: 160px;
				margin: 0;
				padding: 1em;
				}
			nav ul {
				list-style-type: none;
				padding: 0;
				}
			nav ul a {
				text-decoration: none;
				}
			article {
				width:80%;
				margin-left: 170px;
				border-left: 1px solid gray;			
				padding: 1em;
				overflow: hidden;
				}
				
			#manu {
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: #9fe1b1;
				}

			li {
				float: left;
				border-right:1px solid #fff;
				}

			li:last-child {
				border-right: none;
				}

			li a {
				display: block;
				color: black;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
				}

			li a:hover:not(.active) {
				background-color: #efdecd;
				}

			.active {
				background-color: #4CAF50;
				}
			#vertical{
				border-right: none;
				font-size: 13px;
				padding: 0px;
				margin:0px;
			}
		</style>
		
    </head>

    <body >
	<form method="get">
		<div class="container">
			<header id="entete">
				<h1>UGC CALCULATOR BY BCA6th MMICTBM</h1>
				<h1>Website : www.apiugc.com</h1>
				<ul id="manu">
					<li><a class="active" href="#home">Home</a></li>
					<li><a href="#Count Category 3">Count Category-3</a></li>
					<li><a href="#Count Category 2">Count Category-2</a></li>
					<li><a href="#Count Category 2">Count Category-1</a></li>
					<li><a href="#Count Category 2">Old API scheme 2013</a></li>
					<li><a href="#Count Category 2">Custom API</a></li>
					<li><a href="#Count Category 2">E-learning</a></li>
					<li style="float:right"><a href="#about">Contacl</a></li>
				</ul>
			</header>
			<nav style="background-color:grey;">
				 <img src="download.png" alt="download"> 
				<ul>
					<li id="vertical"><a href="#"><pan>UGC Regulations</pan></a></li>
					<li id="vertical"><a href="#">UGC Regulations 2013</a></li>
					<li id="vertical"><a href="#">UGC API 2016(old)</a></li>
					<li id="vertical"><a href="#">UGC API 2016(latest)</a></li>
					<li id="vertical"><a href="#">Blank API form 2016</a></li>
					<li id="vertical"><a href="#">Minimum API rules</a></li>
					<li id="vertical"><a href="#">Recruitement API rules</a></li>
				</ul>
			</nav>
			<article style="text-align:center;">
				<h1>API SCORE CALCULATOR:: CATEGORY-III</h1>
				<h2>Only UGC Approved Journals will be counted.</h2>
				<h2>Only Thomson reuter's Impact Factor Valid.</h2>
				<h2>UGC Approved Journals: http://www.ugc.ac.in/journallist/journal_list.aspx</h2>
				<table style="width:100%; text-align: left; border: 1px solid #dddddd;" >
					<tr Style="color:red;">
						<th rowspan="2"> CATEGORY </th>
						<th rowspan="2"> PARAMETER </th>
						<th rowspan="2"> SCORE </th>
						<th> ENTER</th>
						<th> OBTAIN</th>
					</tr>
					<tr Style="color:red;">
						<th> QUANTITY</th>
						<th> SCORE</th>
					</tr>
					<tr Style="color:blue;">
						<th> III(A)</th>
						<th style="background-color:gray"> RESEARCH PAPER IN UGC APPROVED JOURNALS</th>
						<th colspan="3"> </th>
					</tr>
					<tr Style="color:blue;">
						<th> </th>
						<th style="background-color:gray"> Papers in refered journal with impact Factor above 10</th>
						<th colspan="3"> </th>
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="menti" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['menti'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['menti']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					
					 	
					<tr>
						<td>...</td> 
						<th style="background-color:gray"> Papers in Journal with Impact Factor between 5 and 10</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">45</td> 
						<td><input type="text" id ="name" name="in1" value="<?php if(isset($_GET['submit'])) {$r1=$_GET['in1'];echo ($r1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$r1=$_GET['in1']; $author1= 45*$r1; echo ($author1);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>31.5</td> 
						<td><input type="text" id ="name" name="mento" value="<?php if(isset($_GET['submit'])){ $rs1=$_GET['mento'];echo ($rs1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $r2=$_GET['mento']; $ment1= 31.5*$r2; echo ($ment1);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>13.5</td> 
						<td><input type="text" id ="name" name="coauthq" value="<?php if(isset($_GET['submit'])) { $man2 =$_GET['coauthq'];echo ($man2);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt2=$_GET['coauthq']; $rslt2= 13.5*$rlt2; echo ($rslt2);} ?></td> 
					</tr>
					
					<tr>
						<td>...</td> 
						<th style="background-color:gray"> Papers in  Journal with Impact Factor between 1 and 2</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">35</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$r1=$_GET['name1'];echo ($r1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$r1=$_GET['name1']; $author1= 35*$r1; echo ($author1);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>24.5</td> 
						<td><input type="text" id ="name" name="motars" value="<?php if(isset($_GET['submit'])){ $rs1q=$_GET['motars'];echo ($rs1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $r2q=$_GET['motars']; $ment1q= 34.5*$r2q; echo ($ment1q);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>10.5</td> 
						<td><input type="text" id ="name" name="coauthm" value="<?php if(isset($_GET['submit'])) { $man2w =$_GET['coauthm'];echo ($man2w);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt2w=$_GET['coauthm']; $rslt2w= 10.5*$rlt2w; echo ($rslt2w);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<th style="background-color:gray"> Papers in Journal Impact Factor less than 1</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">30</td> 
						<td><input type="text" id ="name" name="name14" value="<?php if(isset($_GET['submit'])) {$res1f=$_GET['name14'];echo ($res1f);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1f=$_GET['name14']; $authorf= 30*$res1f; echo ($authorf);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>21</td> 
						<td><input type="text" id ="name" name="mentf" value="<?php if(isset($_GET['submit'])){ $rsz=$_GET['mentf'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rsz=$_GET['mentf']; $mentz= 21*$rsz; echo ($mentz);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>9</td> 
						<td><input type="text" id ="name" name="coauthk" value="<?php if(isset($_GET['submit'])) { $manjk =$_GET['coauthk'];echo ($manjk);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rltjk=$_GET['coauthk']; $rsltjk= 9*$rltjk; echo ($rsltjk);} ?></td> 
					</tr>
			<!--		<tr>
						<td>...</td> 
						<th style="background-color:gray"> Papers published in Refereed Journal (Without Impact Factor)</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">25</td> 
						<td><input type="text" id ="name" name="name1xz" value="<?php if(isset($_GET['submit'])) {$res1x=$_GET['name1'];echo ($res1x);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1x=$_GET['name1xz']; $authorx= 25*$res1x; echo ($authorx);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>17.5</td> 
						<td><input type="text" id ="name" name="menttg" value="<?php if(isset($_GET['submit'])){ $rtgs=$_GET['menttg'];echo ($rtgs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rtgs=$_GET['menttg']; $metgnt= 17.5*$rs; echo ($metgnt);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>7.5</td> 
						<td><input type="text" id ="name" name="coauthop" value="<?php if(isset($_GET['submit'])) { $manop =$_GET['coauthop'];echo ($manop);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rltop=$_GET['coauthop']; $rsltop= 7.5*$rltop; echo ($rsltop);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<th style="background-color:gray">  	Paper in Other Reputed Journal (Non-Refereed Journal)</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">10</td> 
						<td><input type="text" id ="name" name="name154" value="<?php if(isset($_GET['submit'])) {$vres1=$_GET['name154'];echo ($vres1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$vres1=$_GET['name154']; $vauthor= 10*$vres1; echo ($vauthor);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>7</td> 
						<td><input type="text" id ="name" name="mentpk" value="<?php if(isset($_GET['submit'])){ $rshg=$_GET['mentpk'];echo ($rshg);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rshg=$_GET['mentpk']; $menthg= 7*$rshg; echo ($menthg);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>3</td> 
						<td><input type="text" id ="name" name="coauthsd" value="<?php if(isset($_GET['submit'])) { $manast =$_GET['coauthsd'];echo ($manast);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rltast=$_GET['coauthsd']; $rsltast= 3*$rltast; echo ($rsltast);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<th style="background-color:gray">  	Total Score of Research Paper: III (A) </th>
						<td></td> 
						<td></td> 
						<td><?php if(isset($_GET['submit'])) {$rltop=$_GET['coauthop']; $rsltop= 7.5*$rltop; echo ($rsltop);} ?></td>  
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="ment" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['ment'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['ment']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					<tr Style="color:blue;">
						<th> III(B)</th>
						<th style="background-color:gray">  BOOKS AND CHAPTER IN BOOKS</th>
						<th colspan="3"> </th>
					</tr>
					
					<tr>
						<td>...</td> 
						<th style="background-color:gray">  Text/Reference Books published by an International Publisher with with ISBN/ISSN number</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="ment" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['ment'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['ment']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<th style="background-color:gray">  Subject Books Published by National level Publisher/State with ISBN/ISSN Number</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="ment" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['ment'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['ment']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<th style="background-color:gray"> Subject Books, published by Other local publishers, with ISBN/ISSN number</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="ment" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['ment'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['ment']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<th style="background-color:gray"> Chapters in Books, published by National and International level publishers with ISBN/ISSN</th>
						<td></td> 
						<td></td> 
						<td></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="ment" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['ment'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['ment']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>Single author </td> 
						<td name="author">50</td> 
						<td><input type="text" id ="name" name="name1" value="<?php if(isset($_GET['submit'])) {$res1=$_GET['name1'];echo ($res1);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$res1=$_GET['name1']; $author= 50*$res1; echo ($author);} ?></td> 
					</tr>
					<tr>
						<td>...</td> 
						<td>First corresponding Author/Supervisor/Mentor </td> 
						<td>35</td> 
						<td><input type="text" id ="name" name="ment" value="<?php if(isset($_GET['submit'])){ $rs=$_GET['ment'];echo ($rs);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])){ $rs=$_GET['ment']; $ment= 35*$rs; echo ($ment);} ?></td> 
					</tr>
					<tr>-->
						<td>...</td> 
						<td>Coauthor</td> 
						<td>15</td> 
						<td><input type="text" id ="name" name="coauth" value="<?php if(isset($_GET['submit'])) { $man =$_GET['coauth'];echo ($man);} ?>"/></td> 
						<td><?php if(isset($_GET['submit'])) {$rlt=$_GET['coauth']; $rslt= 15*$rlt; echo ($rslt);} ?></td> 
					</tr>
					
					</table>
				<input type="submit" id ="name" name="submit" value="Submit"/>
			</article>
			<footer>Copyright &copy; MIKHBCA6thsem.2018</footer>
		</div>
    </form>
	
	/*<?php
		
		//if(isset($_GET['submit'])) {
			//$rltop=$_GET['coauthop'];
			//$rsltopr = 7.5*$rltop;
			//echo ($rsltopr);}
	
	?>*/
	</body>
</html>