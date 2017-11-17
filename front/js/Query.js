$(document).ready(function(){
	$("#Query").click(function(){
		string = $("#queryStr").val()
		$.ajax({
            type: "GET",
            success: function(data) {
            alert(string)
            for(i = 0; i < data.length; i++){
                $('ul').append('<li>'+data[i]+'</li>');
            }
        }
        });
	
	});

});