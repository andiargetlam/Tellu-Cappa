@include('navigations')

<!-- First Block: Jumbotron Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="image1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Static Header Title</h5>
                <p>Header text content</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Static Header Title</h5>
                <p>Header text content</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="image3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Static Header Title</h5>
                <p>Header text content</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Second Block: Company Description -->
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Company Profile</h2>
            <p>This is a brief description of our company and what we offer.</p>
        </div>
        <div class="col-md-4">
            <button class="btn btn-primary">Learn More</button>
        </div>
    </div>
</div>

<!-- Third Block: Cards -->
<div class="container">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="card1.jpg" class="card-img-top" alt="Card 1">
                <div class="card-body">
                    <p class="card-text">Description for Card 1</p>
                </div>
            </div>
        </div>
        <!-- Add more cards as needed -->
    </div>
</div>

<!-- Fourth Block: Simple Card -->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="card4.jpg" class="card-img-top" alt="Card 4">
                <div class="card-body">
                    <p class="card-text">Description for Card 4</p>
                </div>
            </div>
        </div>
    </div>
</div>

@include('footer')

<!-- Bootstrap CDN -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Add Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<!-- Add Bootstrap JS and Popper.js from CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
