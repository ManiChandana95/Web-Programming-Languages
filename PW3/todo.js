 	$(document).ready(function(){
		$("#new").keypress(function(event){
		if(event.which==13)
 			{
			    $("ul").append("<li><span><i class='fa fa-trash'></i></span>" + $("#new").val() + "</li>");
				$("#new").val("");
				$("#new").hide();
			}
 		});
		
		
		$("#plus").click(function(){
			$("#new").show();
		});
		
		$("ul").on("mouseenter", "li", function(){
			$(this.children).show();
		});
		
		$("ul").on("mouseleave", "li", function(){
			$(this.children).hide();
		});

		$("#new").mouseenter(function(){
			$(this).css("background-color", "lightgray");
		});
  
		$("#new").mouseleave(function(){
			$(this).css("background-color", "lightblue");
		});
		
		$("ul").on("click","span",function(){
			$(this).parent().remove();
		
		});
		
		$("ul").on("click", "li", function(){
			$(this).toggleClass("done");

 		});
		
		
		
	});