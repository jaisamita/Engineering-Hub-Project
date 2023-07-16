


<html>
<head>
<link href="css/bootstrap.css" rel="stylesheet" text="type/css"/>
<script src="js/jquery.js" rel="stylesheet"></script>
<script src="js/bootstrap.js" rel="stylesheet" text="type/javascript"></script>
</head>
<body>
	 <br/>
	 <h2 align="center"><a href="#">Comment SYstem using php and ajax</a></h2>
	 <br/>
	 <div class="container">
		 <form method="post" id="comment_form">
			 <div class="form-group">
				 <input type="text" name="comment_name" id="comment_name" class="form-control" 
				 placeholder="Enter name">
				 </div>
				 <div class="form-group">
					  <textarea name="comment_content" id="comment_content" class="form-control" 
				 placeholder="Enter comment" rows="5"></textarea>
				 </div>
				 <div class="form-group">
					 <input type="submit"name="submit" id="submit" class="btn btn-info" value="submit"/>
		 </form>
		 <span id="comment_message"></span>
		 <br/>
		 <div id="display_comment"></div>
	 </div>
</body>
</html>
<script>
$(document).ready(function(){
	$('#comment_form').on('submit'.function(event){
		event.preventDefault();
		var form_data= $(this).serialize();
		$.ajax({
			url:"add_comment.php",
			method:"POST",
			data:form_data,
			dataType:"JSON",
			success:function(data){
				if(data.error !='')
				{
					$('#comment_form')[0].reset();
					$('#comment_message').html(data.error);
					
				}
			}
			
		
		})
	})
})
</script>