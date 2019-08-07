
<!-- <html> -->
<head>
	<title>Research Shipworks</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css font.css">
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script> -->
	<script src="node_modules/jquery/dist/jquery.min.js"></script>
	<script src="node_modules/vue/dist/vue.min.js"></script>
	<script>
		$(function(){
	 		$("#IncludeMaintenance").load("maintenance.html");
			$("#IncludeHeader").load("header.html");
     		$("#IncludeSidebar").load("sidebar.html");
     		$("#IncludeFooter").load("footer.html");
      	});
    </script>

    <style>
    	.columnbatch1 {
			float: left;
			/*column-gap: 5px;*/
			margin-right: 2px;
			width: 130px;
			border : 3px solid black;

    	}

    	.columnbatch1:hover {
    		cursor: pointer;
    	}
    	
    	.batch1questbox {
    		margin-top: 10px;
    		box-sizing: border-box;
    		border : 1px solid #8c1aff;
    		width: 825px;
    		padding: 3px;

    	}

    	.imageship img{
    		/*float: left;*/
    		/*margin-bottom: 10px;*/
    		vertical-align: top;
    	}

    	.imageship p{
    		display: inline;
    	}

    	.imageship table{
    		display: inline;
/*    		border: 1px solid black;
    		border-collapse: collapse;*/
    		/*margin-top: -5px;*/

    	}
/*
    	table,td {
    		border: 1px solid black;
    		border-collapse: collapse;
    	}*/

		.rowbatch1::after {
			content: "";
			clear: both;
			display: table;
		}

		.columnbatch2 {
			float: left;
			/*column-gap: 5px;*/
			margin-right: 2px;
			width: 130px;
			border : 3px solid black;
		}    	

		.rowbatch2::after {
			content: "";
			clear: both;
			display: table;
		}


		.boxresearchlist figure {
			border : 3px solid black;
		}

		.boxresearchlist figcaption {
			font-size: 20px; 
			text-align: center;
		}

		.buttonClose {
			float: right;
			cursor: pointer;
			margin-right: 7px;
			margin-top: 5px;
			font-weight: bold;
			background-color: #9f9fdf;
/*			height: 20px;
			width: 20px;*/
			border : 2px solid;
			padding: 5px;
			
		}
/*		.boxresearchlist img {
			 display:block;
		}*/

    </style>

</head>
<body>
	<div id="headpage">
		<div id="header">
			<div id="IncludeHeader"></div>
		</div>
	</div>

	<div id="sidebarlist">
		<div class ="logo"></div>
		<div id="IncludeSidebar"></div>
	</div>
	<div>


	<div class = "bodyresearch" id="bodyresearchvue">
		<h1>RESEARCH SHIPWORKS</h1>
		<div class="boxresearchdef">
			<h2>Definition Research Shipworks</h2>
			<p>Research Shipworks is a feature where you can get exclusive ship through sequence quests.</p> 
		</div>

		<div class="boxresearchlist">
			<h2>List of Priority Ship in Research Shipwork</h2>

				<p>There are 12 Priority Ship in Research Shipwork divided in 2 batch.</p>
				<h3>Batch 1</h3>

				<div class="rowbatch1">
					<div class="columnbatch1" id="columnNeptune">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image1batch1">
							<figcaption>Neptune</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch1" id="columnMonarch">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image2batch1">
							<figcaption>Monarch</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch1" id="columnIbuki">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image3batch1">
							<figcaption>Ibuki</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch1" id="columnnIzumo">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image4batch1">
							<figcaption>Izumo</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch1" id="columnRoon">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image5batch1">
							<figcaption>Roon</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch1" id="columnSaintLouis">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image6batch1">
							<figcaption>Saint Louis</figcaption>
						<!-- </figure> -->
					</div>
				</div>

				<div class="batch1questbox">
					<span class="buttonClose" onclick="closediv()">X</span>
					<div class="imageship">
						<img width="320" height="320" v-bind:src="imagenepquest">
						<table>
							<tr>
								<!-- <td>Unlock requirement: 20 Royal Navy Frontline Ship</td> -->
								<td>{{ tr1 }}</td>
							</tr>

							<tr>
								<td>{{ tr2 }}</td>
							</tr>
							<tr>
								<td>{{ tr3 }}</td>
							</tr>
							<tr>
								<td>{{ tr4 }}</td>
							</tr>
							<tr>
								<td></td>
							</tr>
								<td></td>
							<tr>
							</tr>
								<td></td>
							<tr>

						</table>
						
					</div>
				</div>

<!-- 					<div id="neptunequestbox"></div>
					<div id="monarchquestbox"></div>
					<div id="ibukiquestbox"></div>
					<div id="izumoquestbox"></div>
					<div id="roonquestbox"></div>
					<div id="saintlouisquestbox"></div> -->


<!-- 					<div class="questship">
						<p>tes</p>
					</div> -->
				

				<h3>Batch 2</h3>

				<div class="rowbatch2">
					<div class="columnbatch2">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image1batch2">
							<figcaption>Azuma</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch2">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image2batch2">
							<figcaption>Friedrich</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch2">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image3batch2">
							<figcaption>Gascogne</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch2">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image4batch2">
							<figcaption>Georgia</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch2">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image5batch2">
							<figcaption>Kitakaze</figcaption>
						<!-- </figure> -->
					</div>
					<div class="columnbatch2">
						<!-- <figure> -->
							<img width="130" height="130" v-bind:src="image6batch2">
							<figcaption>Seattle</figcaption>
						<!-- </figure> -->
					</div>
				</div> 
		</div>

		<div class="boxresearchdone">
			<h2>Obtained Priority Ship</h2>
		</div>

		<div class="boxresearchtodo">
			<h2>Progress Priority Ship</h2>
		</div>

	</div>


	<div id="IncludeFooter"></div>


</body>

<!-- VUE JS -->
<script type="text/javascript">

	
</script>

<script type="text/javascript" src="javascript/research.js"></script>
<script type="text/javascript" src="javascript/questbox.js"></script>

<!-- </html>