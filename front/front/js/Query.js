$(document).ready(function(){
	$("#Query").click(function(){
		string = $("#queryStr").val()
         alert(string)
		$.ajax({
            url: "nlp.php"
            type: "GET",
            data: {query:string},
            success: function(data) {
                data = JSON.parse(data)
                
            for(i = 0; i < data.length; i++){
                $('ul').append('<li>'+data[i]+'</li>');
            }
        }
        });
	
	});

});