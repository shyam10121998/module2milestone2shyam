<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<?php
$sql = "SELECT * FROM categories";
$result = $mysqli->query($sql);

$results = $result->fetch_all(MYSQLI_ASSOC);

?>

<body>

    <div class="note content">
        <h1>Please note</h1>
        <p>We publish this list as a representation of what might be in stock at any given time throughout the year.  

            It is not an active or current availability as some items sell out within a day.
            
            Fluctuations to inventory occur frequently throughout the season.
            
            Depending on the scope of your project, we will always be able to recommend at least one suitable in-stock alternative to fit your space.
            
            We hope our list provides a good reference as you plan and prepare your planting project.
            
            PLEASE VISIT the store to check current inventory levels!
            
            THANK YOU!</p>
    </div>

                                                <!--season's special-->

   
    <div class="content-wrap content">
        <h1 class="seasonh1">Season's special</h1>
        <div class="cards">
            <div class="card">
                <img src="images/product category.png" alt="Image 1">
                <div class="card-text">
                    <h2>Clematis</h2>
                </div>
            </div>
            
            <div class="card">
                <img src="images/product category.png" alt="Image 2">
                <div class="card-text">
                    <h2>Autumn Moon</h2>
                </div>
            </div>

            <div class="card">
                <img src="images/product category.png" alt="Image 3">
                <div class="card-text">
                    <h2>Green Cascade</h2>
                </div>
            </div> 
        </div> 
    </div>

                                                    <!--product categories-->

    <div class="category-container content">
        <a href="conifers.php" class="category-link">
            <div class="category-card">
                <div class="category-text">
                    <h2>Conifers</h2>
                </div>
                <div class="category-image">
                    <img src="images/product category.png" alt="Conifers">
                </div>
            </div>
        </a>
        <a href="deciduous.php" class="category-link">
            <div class="category-card">
                <div class="category-text">
                    <h2>DECIDUOUS </h2>
                </div>
                <div class="category-image">
                    <img src="images/product category.png" alt="DECIDUOUS ">
                </div>
            </div>
        </a>
        <a href="grassesandbamboo.php" class="category-link">
            <div class="category-card">
                <div class="category-text">
                    <h2>Grasses and Bamboo-assorted</h2>
                </div>
                <div class="category-image">
                    <img src="images/product category.png" alt="GandB">
                </div>
            </div>
        </a>
        <a href="vines.php" class="category-link">
            <div class="category-card">
                <div class="category-text">
                    <h2>Vines-aasorted</h2>
                </div>
                <div class="category-image">
                    <img src="images/product category.png" alt="vines">
                </div>
            </div>
        </a> <a href="edibles.php" class="category-link">
            <div class="category-card">
                <div class="category-text">
                    <h2>Edibles</h2>
                </div>
                <div class="category-image">
                    <img src="images/product category.png" alt="edibles">
                </div>
            </div>
        </a>
        <a href="japanesemaples.php" class="category-link">
            <div class="category-card">
                <div class="category-text">
                    <h2>Japanese Maples</h2>
                </div>
                <div class="category-image">
                    <img src="images/product category.png" alt="Japanese Maples">
                </div>
            </div>
            <a href="evergreen.php" class="category-link">
                <div class="category-card">
                    <div class="category-text">
                        <h2>Evergreen</h2>
                    </div>
                    <div class="category-image">
                        <img src="images/product category.png" alt="evergreen">
                    </div>
                </div>
            </a>
            <a href="hedging.php" class="category-link">
                <div class="category-card">
                    <div class="category-text">
                        <h2>Hedging</h2>
                    </div>
                    <div class="category-image">
                        <img src="images/product category.png" alt="Hedging">
                    </div>
                </div>
                <a href="shrubs.php" class="category-link">
                    <div class="category-card">
                        <div class="category-text">
                            <h2>Shrubs</h2>
                        </div>
                        <div class="category-image">
                            <img src="images/product category.png" alt="shrubs">
                        </div>
                    </div>
                </a>      
    </div>

                                            <!--more information-->

    <div class="moreinformation content">

    <p>PEAK SEASON for fruit trees is mid March through mid April.

        PEAK SEASON for hedging is April and September - especially for the specimes we grow and dig from our TREE FARM.  
        
        We try to keep multiple sizes in stock.</p>

    <p>Blueberry shrubs -<strong>starting at $15</strong> -  Reka, Duke or Blue Crop varieties
        Raspberry canes -<strong>$15</strong></p>
        
    <p> 
        Hazelnuts - EFB (Eastern Filbert Blight) resistant - new varieties - Jefferson, Eta and Theta.  Our trees are mature and producing nuts.
    </p>
    </div>
    
</body>
</html>