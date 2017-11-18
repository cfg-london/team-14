$(document).ready(function(){
    $("#Query").click(function(){
        string = $("#queryStr").val()
         alert(string)
        // $.ajax({
  //           url: "nlp.php"
  //           type: "GET",
  //           data: {query:string},
  //           success: function(data) {
  //               data = JSON.parse(data)
  //               $(location).attr('href', "search.html/?query="+encodeURI(data))
  //           }
  //       });
       $(location).attr('href', "search.html")
    
    });

});