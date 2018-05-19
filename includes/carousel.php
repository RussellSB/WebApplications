<link rel="stylesheet" href="../stylesheets/carousel.css" />

<!-- Using Bootstrap's Carousel code to create a carousel under the navigation bar. -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

        <div class="item active">
            <img class="first-slide" src="../images/BANNERGuitar1.jpeg" alt="nogalaxy :(">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The New Yamaha SA2200</h1>
                    <p>Early 60% Off Deal</p>
                    <form action="singleproduct.php" method="post">
                        <button value=2 name="prod" class="btn btn-lg btn-primary">Check it out!</button>
                    </form>
                    </div>
            </div>
        </div>

        <div class="item">
            <img class="second-slide" src="../images/BANNERUkulele1.jpeg" alt="not here :c">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The Cordoba 15TM</h1>
                    <p>Now on sale!</p>
                    <form action="singleproduct.php" method="post" >
                        <button value=4 name="prod" class="btn btn-lg btn-primary" >Check it out!</button>
                    </form>
                    </div>
            </div>
        </div>

        <div class="item">
            <img class="third-slide" src="../images/BANNERUkulele2.jpg" alt="whoa">
            <div class="container">
                <div class="carousel-caption">
                    <h1>The Kala Makala Waterman</h1>
                    <p>Water-proof ukulele!</p>
                    <form action="singleproduct.php" method="post">
                        <button value=12 name="prod" class="btn btn-lg btn-primary">Check it out!</button>
                    </form>
                </div>
            </div>
        </div>

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</div>
