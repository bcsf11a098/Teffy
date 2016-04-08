
var likes;
$(document).ready(function()
{
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
		$(this).parent().siblings(".comments").slideToggle("slow");
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

});

