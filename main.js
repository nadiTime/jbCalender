$('document').ready(function(){
	$('#addEvent').on('click',function(){
		$('#popup').show();
	});
	$('.note').on('click',function(){
		$('#popupUpdate').show();
		var text= $(this).text();
		var title=  $(this).attr('title');
		var day = $(this).closest("div").attr("id");
		var id = $(this).attr("noteId");
		setpopAttr(id,text,title,day);
	});
	function setpopAttr(id,text,title,day){
		$('#popupData').val(text);
		$('#popupTitle').val(title);
		$('#select').val(day);
		$('#noteId').attr("value",id);
	}

	var lots_of_stuff_already_done = false;

	$('#registerButton').on('click', function(e){
    	if (lots_of_stuff_already_done === true) {
        	lots_of_stuff_already_done = false; // reset flag
        	return; // let the event bubble away
    	}
    	e.preventDefault();
   		var password = $("#RegPassword").val();
   		var email = $("#RegEmail").val();
   		var age = $("#RegAge").val();
		if(password.length<5||password.length>10) {
			alert("password must be between 5 and 10");
		}
		lots_of_stuff_already_done = true; 
		$(this).trigger('click');
   		$("#RegEmail").val(email);
   		$("#RegAge").val(age);
		});
	$('#updateUser').on('click',function(){
		$('#popupUpdateUser').show();
	});
	
	$('.close').on('click',function(){
		$(this).closest("div").hide();
	});
	$('.deletenote').on('click',function(event){
		event.stopPropagation();
		var noteid = $(this).closest("span").attr("noteId");
		$.getJSON( "handleEvent.php", { id:noteid } );
		
		$(".note[noteId="+noteid+"]").remove();
		
	});

});


	 /*$("#registerButton").click(function (e) {
        e.preventDefault();
		var password = $("#password").val();
		if(password.length<5||password.length>10) {
			alert("password must be between 5 and 10");
			$(this).unbind('click').click();
			return false;
		}
		else return true;
	});*/