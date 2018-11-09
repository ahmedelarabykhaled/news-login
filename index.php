<html>
    <head>
        <link rel="stylesheet" href="boot1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="boot1/css/fontawesome-all.min.css"/>
		<link rel="stylesheet" href="index_style.css" />
		<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

		<style>
			
		</style>
    </head>
    <body>
        <?php include "navbar.php" ?>
		
		
		<div class="text-center my-4">
			<button onclick="editsource(event)" class="btn btn-success">sports</button>
			<button onclick="editsource(event)" class="btn btn-success">health</button>
			<button onclick="editsource(event)" class="btn btn-success">entertainment</button>
			<button onclick="editsource(event)" class="btn btn-success">general</button>
		</div>
		
		
		<div class="container">
			<div class="row test">
		
		</div>
			</div>
		<div class="footer">
			<p class="text-center p-3">Designed By : <a href="https://github.com/ahmedelarabykhaled">Ahmed Khaled</a></p>
		</div>
		
		<script src="boot1/js/jquery-3.3.1.js"></script>
		<script src="boot1/js/popper.min.js"></script>
		<script src="boot1/js/bootstrap.min.js"></script>
		<script src="boot1/js/mine.js"></script>
		<script src="boot1/js/typed.js"></script>
		<script type="text/javascript">
	
		
			var cat = "health";
			
			function getdata()
			{
        $.getJSON("https://newsapi.org/v2/top-headlines?country=eg&category="+cat+"&apiKey=6e47e1f372904bd59b8cffa9e5bf11fb", function(result){
            $.each(result.articles, function(i,field){
				if(field.urlToImage == null)
					{
						field.urlToImage = "boot1/images/3.jpg";
					}
                $(".test").append("<div  class='col-md-4 news'><div><a href="+field.url+"> "+field.title+"</a><img class='w-100' src="+field.urlToImage+" /> </div></div>");
				
            });
    });
			}
    
			$(document).ready(getdata());
			
			
			function editsource(event)
			{
				
				cat = event.target.innerHTML;
				$(".test").html("");
				getdata();
				
			}
    

		</script>
    </body>
</html>