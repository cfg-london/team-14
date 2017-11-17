$(document).ready(function(){
	$("#Query").click(function(){
		string = $("#queryStr").val()
         alert(string)
		$.ajax({
            type: "GET",
            success: function(data) {
           
            for(i = 0; i < data.length; i++){
                $('ul').append('<li>'+data[i]+'</li>');
            }
        }
        });
	
	});

});