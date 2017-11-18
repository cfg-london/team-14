<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nobel Prizes</title>

    <!-- Bootstrap core CSS -->
     <link href="/style.css" rel="stylesheet">   
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/css/landing-page.css" rel="stylesheet">
  </head>
 
  <body style="background-color:#333333; color:white;">
 <div class=navBar> 

  <div class="col-12" style="width:80%; margin:auto;">
    <div class="searchBar"  style="margin-top:20px;">
      
        <div class="form-row" >
          
                
            <div style="width:67% " >
                  <input type="search" style="float:left;" class="form-control form-control-lg"  placeholder="" id="queryStr">
                </div>
                <div  style="width:10%; margin-left:1%" >
                  <button type="submit" class="btn btn-block btn-lg btn-primary" id="Query">Go!</button>
                </div>
                 <div  style="width:10%; word-wrap: break-word; margin-left:1%" >
                <buttontype="button" class="btn btn-block btn-lg btn-primary" id="exploreButton2" onclick="location.href='explore.html';">Explore</button></div> 
                <div  style="width:10%; margin-left:1%" >
                  <buttontype="button" class="btn btn-block btn-lg btn-primary" id="home" onclick="location.href='index.html';">Home</button></div> 
                  </div>
                </div></div>
 </div>


      <div class="contentbox"></div>



 </div>
 <script>
  array = []
    data = "<?php 
                if(isset($_GET["query"]))
                  echo strval($_GET["query"]);
                else
                  echo -1;
            ?>";
 
    if(data != -1){
        splited = data.split(/\s+/);
  
        categorySet = ["physics","chemistry","medicine","literature","peace","economics"]
        noneSet = ["who","what","when","where","how","is","in"]

        category = ""
        year = ""

        for(i=0;i<splited.length;i++){
          word = String(splited[i]).toLowerCase()
        
          if(categorySet.indexOf(word) >= 0){
       
            category = word
          }else if(noneSet.indexOf(word) >= 0)
            continue
          else if(!isNaN(word)){
            if(word > 1900 & word < (new Date()).getFullYear())
              year = word
          }
        }

      $.ajax({
      url:"http://api.nobelprize.org/v1/prize.json?category="+encodeURI(category)+"&year="+encodeURI(year),
      success: function(data) {
        result = data
        console.log(result)
        console.log(result["prizes"][0]["year"])
        $(".contentbox").empty()
        for(i=0;i<result["prizes"].length;i++){
          
          $(".contentbox").append('<div class="note" style="color:black">'+result["prizes"][i]["category"]+', '+result["prizes"][i]["year"]+'<div class=summary>text...</div></div>')
        }         
      }

      })
    }else{
      $(".contentbox").empty()
      $(".contentbox").append("<div class=boxText>No results</div>")
    }
  
 </script>
    
  <script src=/js/Query.js></script>

    <!-- Bootstrap core JavaScript -->
    

  </body>

</html>
