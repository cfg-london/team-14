<!DOCTYPE html>
<html lang="en">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nobel Prizes</title>

    <!-- Bootstrap core CSS -->
     <link href="style.css" rel="stylesheet">   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>
 
  <body style="background-color:#333333; color:white;">
 <div class=navBar> 

  <div class="col-12" style="width:80%; margin:auto;">
    <div class="searchBar"  style="margin-top:20px;">
      
        <div class="form-row" >
          
                
            <div style="width:67% " >
                  <input type="search" class="form-control form-control-lg"  placeholder="" id="queryStr">
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


 <div id="contentbox">
   <div class="note">Note Information 1 of many</div>



    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>
          <div class="note">Note 1</div>
    <div class="note">Note 2</div>
     <div class="note">Note 3</div>
      <div class="note">Note 4</div>
       <div class="note">Note 5</div>


 </div>
 <script>
    data = <?php 
                if(isset($_GET["query"]))
                  echo $_GET["query"];
                else
                  echo -1;
            ?>;
    if(data != -1){
      $.ajax({
      url:"scripts/process.php",
      data: {query:data},
      success: function(data) {
        result = JSON.parse(data)
        for(i=0;i<result.length;i++){
          $("#contentbox").empty()
          $("#contentbox").append('<div class="note"><div class=head>'+result["head"]+'</div><div class=summary>'+result["summary"]+'</div></div>')
        }         
      }

      })
    }else{
      $("#contentbox").empty()
      $("#contentbox").append("<h1 class=boxText>No results</h1>")
    }
    










 </script>
    
 

    <!-- Bootstrap core JavaScript -->
    <script src="js/Query.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
