<html>
<head>
	<title></title>
	<style>
		body{
			background : black;
		}
		
		.header{
			background : #2f380c;
			color: white;
			padding : 16px;
			text-align : center;
			font-style : Times New Roman;
		}
		.logout{
			background: red;
		}
		h5 a{
			color : white;
			//text-decoration : none;
			float : right;
		}
		ul
		{
			list-style-type: none;
			margin:0;
			padding:0;
			overflow: hidden;
			background-color: #ccc;
			//opacity : 0.8;
		}
	
		li a
		{
			float:left;
	
		}
		li a
		{
			display : block;
			color: #111;
			text-decoration:none;
			padding:15px 90px;
		}	
	
		li a.active
		{
			background:#4CAF50;	
		}
		
		li a:hover
		{
			background-color:#111;
			color:white;
		}
		
		.content{
			width : 1200px;
			margin : auto;
			background : white;
			border : 3px solid white;
		}
	</style>
</head>
<body>
	<div class="content">
		<div class="header">
			<h1>UGC API Calculator - 2018</h1>
				<div class="logout">
					<h5><a href="login.html">Logout</a></h5>
				</div><br>
		</div>
		<div class="menu">
			<ul>
				<li><a href="#"><b>Home<b></a></li>
				<li><a href="category1.html"><b>Category 1<b></a></li>
				<li><a href="#"><b>Category 2<b></a></li>
				<li><a href="#"><b>Category 3<b></a></li>
			</ul>
		</div><br>
		<?php
		//	include("content.html");
		?>
	</div>
</body>
</html>