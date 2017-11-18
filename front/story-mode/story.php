<!DOCTYPE html>
<html>
    <head>
        <?php
        // /story.php?laureate=surname
            if (isset($_GET['laureate'])) {
                echo $_GET['laureate'];
            }else{
                // Fallback behaviour
            }

            // get full name
            // get surname
            // related laureates surnames
        ?>
        <title>Nobel Laureate Story</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="story.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="fullPage.js-master/jquery.fullPage.css" />
    </head>
    <body>
        <div id="fullpage">
            <div class="section" id="intro-section">
                <div class="slide">
                        <div class="laureate-info">
                            <img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king_postcard.jpg" width="140" height="140">
                            <h3>Laureate Name</h3>
                        </div>

                        <div class="motivation">
                            A very cool thing done by this laureate.
                        </div>
                </div>

            	<div class="slide">
                    <div class="container marketing">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading">
                                    Something about the laureate.
                                    <span class="text-muted">Something else.</span>
                                </h2>
                            </div>

                            <div class="col-md-5 order-md-1">
                                <img class="featurette-image img-fluid mx-auto" src="https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king_postcard.jpg" width="500" height="500">
                            </div>
                        </div>
                    </div>
                </div>

            	<div class="slide">
                    <div class="laureate-info">
                        Yet more information maybe links
                    </div>

                    <div class="related-laureates">
                        <h4><span class="text-muted">Related laureates:</span></h4>
                        <ul>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king_postcard.jpg" width="100" height="100"></li>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king_postcard.jpg" width="100" height="100"></li>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king_postcard.jpg" width="100" height="100"></li>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/peace/laureates/1964/king_postcard.jpg" width="100" height="100"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script type="text/javascript" src="fullPage.js-master/vendors/scrolloverflow.min.js"></script>
        <script type="text/javascript" src="fullPage.js-master/jquery.fullPage.js"></script>
        <script type="text/javascript" src="fullPage.js-master/vendors/jquery.easings.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#fullpage').fullpage({
                    easing: 'swing',
                    navigation: true,
                    scrollBar: false,
                    autoScrolling: true,
                    scrollOverflow: true,
                    sectionsColor: ['#d5ff80', '#80dfff', '#ffff66', '#ffb3b3', '#ff99ff'],

                });
            });
        </script>
    </body>
</html>
