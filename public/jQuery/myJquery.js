
var likes;
$(document).ready(function()
{
	$('.post-btn').click(function()
	{
		$("myModal").modal("show")
	});	

	$('#new_post').click(function()
	{
		$("#new_post_panel").slideToggle("slow");
	});

	$('#editNameBtn').click(function(event)
	{
		event.preventDefault();
		$("#editName").removeAttr("readonly");
		$(this).hide(); 
	});
	$("#editName").focusout(function()
	{
	    $(this).attr('readonly', true); 
	    $('#editNameBtn').show();
	});

	$('#editEmailBtn').click(function(event)
	{
		
		event.preventDefault();
		$("#editEmail").removeAttr("readonly");
		$(this).hide(); 
	});

	$("#editEmail").focusout(function()
	{
	    $(this).attr('readonly', true); 
	    $('#editEmailBtn').show();
	});


	$("#changePwd").click(function(e){
   		e.preventDefault();//this will prevent the link trying to navigate to another page
   		var href = $(this).attr("href");//get the href so we can navigate later
    	window.location = href;
	});

	$(".comment").click(function(){
		// alert("hello");
		 $(this).parent().parent().siblings(".comments").slideToggle("slow");
	});
	$(".viewReplies").click(function(){
		// alert("hello");
		$(this).siblings(".replys").slideToggle("slow");
	});
	$(".reply").click(function(){
		// alert("hello");
		$(this).siblings(".replyPanel").slideToggle("slow");
	});

	$('.commentInput').keydown(function(e) {
		var key = e.which;
		if (key == 13) {
		// As ASCII code for ENTER key is "13"
		$(this).parents("form").submit(); // Submit form code
		}
	});

	$('.enter_a').click(function(e) {
		e.preventDefault();
		
		$(this).parent().parent().submit(); // Submit form code
		
	});

	$('.back_a').click(function(e) {
		e.preventDefault();
		var href = $(this).attr("href");//get the href so we can navigate later
    	window.location = href;	
	});

	$('#listingForm').submit(function(event)
	{	
	    event.preventDefault();
	    var fData = new FormData(this);
        $.ajaxSetup(
        {
            headers:{
		      'X-CSRF-TOKEN': $('meta[name="listing"]').attr('content')
            }
		});
        var mymodal = $("#myModal");
        $.ajax(
        {
            url: "/listing",
            type: "POST",
            data: fData,
            contentType: false,
            processData: false,
            success: function(result)
            {	$("[data-dismiss=modal]").trigger({ type: "click" });
             	
            	alert("your listing has been posted");	
            },
        	error: function(result)
        	{
        		
        		 alert("please fill all the fields");
        		 
        	}
	    });
        
	});	

	$('body').on('click', '.likes', function(event)
	{	
	    event.preventDefault();
	    var href = '/like/'+$(this).data("id");
  //       $.ajaxSetup(
  //       {
  //           headers:{
		//       'X-CSRF-TOKEN': $('meta[name="listing"]').attr('content')
  //           }
		// });
        var id = "#"+$(this).data("id");
        $.ajax(
        {
            url: href,
            type: "GET",
            contentType: false,
            processData: false,
            success: function(result)
            {
            	if(result != 0)
            	{
            		$(id).replaceWith(result);
            	}
      		},
        	error: function(result)
        	{
        		window.location.href = "/login" 
        	}
	    });
        
	});	
	$('body').on('submit', '.comment_form', function(event)
	{	
	    event.preventDefault();
	    var fData = new FormData(this);
        $.ajaxSetup(
        {
            headers:{
		      'X-CSRF-TOKEN': $('meta[class="com"]').attr('content')
            }
		});
        var id = "#"+$(this).data("id");
        $.ajax(
        {
            url: $(this).attr('action'),
            type: "POST",
            data: fData,
            contentType: false,
            processData: false,
            success: function(result)
            {	
            	if(result != 0)
            	{
            		$(id).replaceWith(result);
            	}
            },
        	error: function(result)
        	{
        		
        		window.location.href = "/login" 
        		 
        	}
	    });
        
	});	


});

