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
  <p style="font-family: helvetica; color: #ffffff">Username : </p> <input type="text" name="namearea" id="name-area">
  <form class="formtextarea">
    <textarea id="text-area"></textarea>
  </form>
<button onclick ="postComment()" id="buttonPost" title="Post Comment" style="float: right; margin-top: 3px; cursor: pointer;">Comment</button>
</div>
<div class="listcomment" style="margin-top: 35px;">
<ul class="listcomment-ul">
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
  
    var _userID = 1;
    var text = $("#text-area").val();
    var username = $("#name-area").val(); 
    if (text.length>0)
  {
    $(".formtextarea").css("border","1px solid #8c1aff")

    $.ajax(
    {
      type:"Post",
      url:"commentajax.php",
      data:{
      task: "commentpost",
      userID :_userID,
      userNm: username,
      comment : text
    },
    success: function(data)
    { 
      comment_insert();
      console.log("response : " + data);
    },
    error: function()
    {
      console.log("Error : ");
    }
    });
    
    
    console.log("User id : "+ _userID +" " + "Username : "+ username + " " + "comment : " + text)

  }
  else
  {
     $("#text-area").css("border","2px solid #ff0000")
    alert("Fill in the text area !");
  }
  
}

function comment_insert(){
    var t = '';
    t += '<li class="listcomment-li" id="_1">';
    t += '<div class="commentbox">';
    t += '<div class="commentuserimg">';
    t += '<img src="discussion/imgtester.png" class="userimg" />';
    t += '</div>';
    t += '<div class="commentboxusername">';
    t += 'Anonymous';
    t += '</div>';
    t += '<div class="commenttext">';
    t += 'New Comment';
    t += '</div>';
    t += '<div class="buttonHolder">';
    t += '<ul>';
    t += '<li class="buttonDel">X</li>';
    t += '</ul>';
    t += '</div>';
    t += '</div>';
    t += '</div>';
    t += '</li>';

    $(".listcomment-ul").prepend(t);

  }

</script>

</html>