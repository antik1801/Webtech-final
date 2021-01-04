<!Doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<style>
			body {
				font-family: Arial, Helvetica, sans-sarif;
				margin= 0;
			}
			html 
			{
				box-sizing: border-box;
			}
			*,*:before, *:after 
			{
				box-sizing: inherit;
			}
			.column
			{
				float : left;
				width: 33.3%;
				margin-bottom: 16px;
				padding: 0 8px;
			}
			.card
			{
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				margin: 8px;
			}
			about-section 
			{
				padding: 50px;
				text-align:center;
				background-color: #474e5d;
				color: white;
			}
			.container
			{
				padding:0 16px;
			}
			.container::after, .row::after
			{
				content : "";
				clear: both;
				display: table;
			}
			.title
			{
				color:grey;
			}
			.botton
			{
				border: none;
				outline: 0;
				display: inline-black;
				padding: 8px;
				color: white;
				background-color: #000;
				text-align: center;
				cursor: pointer;
				width:100%;
			}
			.button:hover
			{
				background-color: #555;
			}
			@media screen and (max-width:650px)
			{
				.column
				{
					width: 100%;
					display: block;
				}
			}
			</style>
	</head>
	<body>
		<div class="about-section">
		<h1>ABOUT US</h1>
		<p>We are offering best suitable job for you according to your qualification <br>
		You will find yourself at a sucessful position through us</p>
		<p>Carrer Forage is an online job seeker platform by which anyone can view and post any preferable job<br>
		Here we have our best expert employee and almost 5000+ multinational and national jobs online</p>
		</div>
	</body>
</html>