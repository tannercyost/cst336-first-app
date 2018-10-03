<?php
    $backgroundImage = "img/sea.jpg";
    
    //API call goes here
    // if (isset($_GET['category'])) {
    //     include 'api/pixabayAPI.php';
    //     $imageURLs = getImageURLs($_GET['category'],$_GET['layout']);
    //     $backgroundImage = $imageURLs[array_rand($imageURLs)];
    // }
    if (isset($_GET['keyword'])) {
        include 'api/pixabayAPI.php';
        $imageURLs = getImageURLs($_GET['keyword'],$_GET['layout']);
        $backgroundImage = $imageURLs[array_rand($imageURLs)];
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Image Carousel</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
            @import url("css/styles.css");
            body {
                background-image: url('<?=$backgroundImage ?>');
            }
        </style>

    </head>
    <body>
        <br /><br />
        
        <?php
            if (!isset($imageURLs)) {
                echo "<h2> Type a keyword to display a slideshow <br /> with random images from Pixabay.com</h2>";
            }
            else {
                //display carousel
        ?>
        
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- indicators -->
            <ol class="carousel-indicators">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        echo"<li data-target='#carousel-example-generic' data-slide-to='$i'";
                        echo ($i == 0) ? "class='active'" : "";
                        echo"></li>";
                    }
                ?>
            </ol>
            
            <!-- wrapper for images -->
            <div class="carousel-inner" role="listbox">
                <?php
                    for ($i = 0; $i < 5; $i++) {
                        do {
                            $randomIndex = rand(0, count($imageURLs));
                        } while (!isset($imageURLs[$randomIndex]));
                        
                        echo '<div class="item ';
                        echo ($i == 0)?"active":"";
                        echo '">';
                        echo '<img src="' . $imageURLs[$randomIndex] . '">';
                        echo '</div>';
                        unset($imageURLs[$randomIndex]);
                    }
                ?>
            </div>
            <!-- controls here --> 
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        
        <?php
            } //endElse
        ?>
        <br />
        <form>
            <input type="text" name="keyword" placeholder="Keyword" value="<?=$_GET['keyword']?>"/>
            <input type="radio" id="lhorizontal" name="layout" value="horizontal">
            <label for="Horizontal"></label><label for = "lhorizontal"> Horizontal </label>
            <input type="radio" id = "lhorizontal" name = "layout" value = "vertical">
            <label for="Vertical"></label><label for="lvertical"> Vertical </label>
            <!--<select name="category">-->
            <!--    <option value="">Select One</option>-->
            <!--    <option>Forest</option>-->
            <!--    <option>Mountain</option>-->
            <!--    <option>Snow</option>-->
            <!--</select>-->
            
            <input type = "submit" value="Search"/>
            <!--<input type="text" name="keyword" placeholder="Keyword">-->
            <!--<input type="submit" value="Submit" />-->
        </form>
        
        <br /><br />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>