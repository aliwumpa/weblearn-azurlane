<!DOCTYPE html>
<html>
<head>
	<title>Discussion</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css font.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	 <script> 
      $(function(){
      $("#IncludeMaintenance").load("maintenance.html");
      $("#IncludeHeader").load("header.html");
      $("#IncludeSidebar").load("sidebar.html");
      $("#IncludeFooter").load("footer.html");
    });
    </script> 
</head>
<body>
    <div id="headpage">
        <div id="header">
    <div id="IncludeHeader"></div>
    </div>
    </div>
    <div id="sidebarlist">
    <div class ="logo">
    </div>
    <div id="IncludeSidebar"></div>
    </div>
<div class=bodydiscussion>
<!--<div id="IncludeMaintenance"></div>
<button onclick ="goBack()" id="buttonBack" title="Back to Page">Back to Page</button>-->
<h2>Comment Section</h2>
<div class="commentdatabox">
You gonna see comment here
</div>
<div class="commentbox">
</div>
</div>
</body>
<script>
  function goBack(){
    window.history.back()
  }
</script>
</html>