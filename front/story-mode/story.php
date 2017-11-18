<!DOCTYPE html>
<html>
    <head>
        <?php
        // /story.php?laureate=id
            $id = 0;
            if (isset($_GET['laureate'])) {
                $id = $_GET['laureate'];
            }else{
                // Fallback behaviour
            }

        	$url = "http://api.nobelprize.org/v1/laureate.json?id=" . $id;

            $contents = file_get_contents($url);

            $data = json_decode($contents, true);
            //If $contents is not a boolean FALSE value.
            if($contents !== false){
                //Print out the contents.
                $fullName = $data['laureates'][0]['firstname'] . " " . $data['laureates'][0]['surname'];
                $surname = $data['laureates'][0]['surname'];
                $year = $data['laureates'][0]['prizes'][0]['year'];
            }
            $page_1 = array(
                "6" => "She proved that atoms were divisible, which led to the creation of atomic physics.",
                "167" => "His greatest achievement is considered the discovery of the atomic nucleus.",
                "944" => "Switzerland's latest Nobel laureate said he had to overcome a fear of the dark, and a poor record in school, before reaching the apex of science.",
                "217" => "He made significant scientific contributions to several different fields and is considered the father of molecular biology",
                "292" => "He is known by many as the father of femtochemistry."
            );

            $page_2 = array(
             "6" => "She received the prize in recognition of her services to the advancement of chemistry by the discovery of the elements radium and polonium, by the isolation of radium and the study of the nature and compounds of this remarkable element",
             "167" => "He received the prize for his investigations into the disintegration of the elements, and the chemistry of radioactive substances.",
             "944" => "He received the prize for developing cryo-electron microscopy for the high-resolution structure determination of biomolecules in solution",
             "217" => "He received the prize for his research into the nature of the chemical bond and its application to the elucidation of the structure of complex substances",
             "292" => "He received the prize for his studies of the transition states of chemical reactions using femtosecond spectroscopy"
            );

            $page_3 = array(
                "6" => "In December 1903, Marie Curie became the first women to be awarded the Nobel Prize, when along with her husband and Henri Becquerel, she was awarded the Nobel Prize in Physics in recognition of the extraordinary services they have rendered by their joint researches on the radiation phenomena discovered by Professor Henri Becquerel. Initially the Committee didn’t want to recognize the contribution of Marie Curie but her husband was informed of this by a committee member, who was also an advocate of women scientists. Upon a complaint by Pierre, his wife’s name was added to the nomination. The award money allowed the Curies to hire their first lab assistant.",
                "167" => "He invented a receiver to detect radio waves. Rutherford’s radio receiver became a part of the communications revolution known as wireless telegraphy.",
                "944" => "Since I was a child I wanted to become a scientist, Dubochet told Swiss public broadcaster RTS in an interview. The Swiss Nobel laureate, who shared the Nobel Prize in Chemistry 2017 with two others, said however that he struggled in school.
In fact: I was very bad in school, Dubochet told RTS. The scientist adds that a teacher diagnosed him as dyslexic when he was about to fail in high school. ",
                "217" => "After World War II he and his wife, Ann became peace activists and in 1955 he joined Albert Einstein, Bertrand Russell and eight other scientists in signing the Russell-Einstein Manifesto warning against the dangers of nuclear weapons.",
                "292" => "Chemical reactions in which molecules held together by atoms meet and reorganize into new compounds are one of nature's most fundamental processes. This transition from one constellation to another happens very quickly. The process is possible because the atoms inside a molecule vibrate. The time between these vibrations is very short - 10-100 femtoseconds. In the late 1980s Ahmed Zewail developed methods for studying chemical reactions in detail. By using laser technology to produce flashes of light just a few femtoseconds long, reactions can be mapped."
            );
            // Marie Curie - ID: 6
            // Ernest Rutherford - ID: 167
            // Jacques Dubochet - ID: 944
            // Linus Pauling - ID: 217
            // Ahmed Zewail - ID:  292
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
                            <?php
                            if ($id == 6){
                                echo '<img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/'.$year.'/marie-curie_postcard.jpg" width="140" height="140">';
                            }else {
                                  echo '<img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/'.$year.'/'. $surname .'_postcard.jpg" width="140" height="140">';
                              }
                            echo '<h3>'.$fullName.'</h3>';
                            ?>
                        </div>

                        <div class="motivation">
                            <?php
                                echo $page_1[$id];
                             ?>
                        </div>
                </div>

            	<div class="slide">
                    <div class="container marketing">
                        <div class="row featurette">
                            <div class="col-md-7 order-md-2">
                                <h2 class="featurette-heading">
                                    <?php
                                        echo $fullName;
                                        echo '<span class="text-muted">'. $year . ' </span>';
                                        echo $page_2[$id];
                                     ?>
                                </h2>
                            </div>

                            <div class="col-md-5 order-md-1">
                                <?php echo '<img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/'.$year.'/'. $surname .'_postcard.jpg" width="500" height="500">'; ?>
                            </div>
                        </div>
                    </div>
                </div>

            	<div class="slide">
                    <div class="laureate-info">
                        <?php
                            echo $page_3[$id];
                         ?>
                    </div>

                    <div class="related-laureates">
                        <h4><span class="text-muted">Related laureates:</span></h4>
                        <ul>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/2009/ramakrishnan_postcard.jpg" width="100" height="100"></li>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/1935/joliot-curie_postcard.jpg" width="100" height="100"></li>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/2015/sancar_postcard.jpg" width="100" height="100"></li>
                            <li><img class="rounded-circle" src="https://www.nobelprize.org/nobel_prizes/chemistry/laureates/2017/frank_postcard.jpg" width="100" height="100"></li>
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
                    sectionsColor: ['#333333', '#333333', '#333333', '#333333', '#333333'],

                });
            });
        </script>
    </body>
</html>
