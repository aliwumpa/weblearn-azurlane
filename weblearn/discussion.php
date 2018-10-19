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
<h2>Comment Section</h2>
<div class="submitcomment">
  <form class="formtextarea">
    <textarea id="text-area">Comment here...</textarea>
  </form>
<button onclick ="postComment()" id="buttonPost" title="Post Comment" style="float: right; margin-top: 3px; cursor: pointer;">Comment</button>
</div>
<div class="listcomment" style="margin-top: 35px;">
<ul class="listcomment-ul">
<li class="listcomment-li" id="_1">
  <div class="commentbox">
  <div class="commentuserimg">
  <img src="#" class="userimg" />
  </div>
  <div class="commentboxusername">
  Anonymous
  </div>
  <div class="commenttext">
  The comment will be post in this area..
  </div>
  <div class="buttonHolder">
  <ul>
    <li class="buttonDel">X</li>
  </ul>
  </div>
    
  </div>
  </div>
</li>
</ul>
</div>
</div>
</div>
</body>
<script>
  function goBack(){
    window.history.back()
  }
</script>

<script>
function postComment(){
  $("#buttonPost").click(function(){
    var text = $("#text-area").val();
    if (text.length>0)
  {
    $(".formtextarea").css("border","1px solid #8c1aff")
    console.log(text);

  }
  else
  {
     $(".formtextarea").css("border","2px solid #ff0000")
    console.log("Fill in the text area.");
  }
  })
}

</script>
</html>