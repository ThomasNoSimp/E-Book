<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/styles/index.css">
    <link rel="stylesheet" href="src/styles/nav.css">
    <link rel="icon" href="src/images/book.png">
    <title>E-Book</title>

    <!-- Include jQuery from a CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body style="background:url('src/images/bg.jpg');">
    <NavBar>
      	<input type="checkbox" name="" id="chk1">
      	<div class="logo"><h1>E-Book</h1></div>
      	<div class="search-box">
           <form action="">
               <input type="text" name="search" id="srch" placeholder="Search">
               <button type="submit"><i class="fa-duotone fa-magnifying-glass"></i></button>
           </form>
      	</div>
      	<ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="authors.php">Authors</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li>
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-telegram"></i></a>
            </li>
      	</ul>
      	<div class="menu">
      		<label for="chk1">
              <i class="fa fa-bars"></i>
      		</label>
      	</div>
    </NavBar>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">E-Book</h1>
                <p Align="center" id="description">
                    E-Book website is a website which allows you to directly read or download your favorite books in one place.
                </p>
            </div>
        </div>
        <!-- Carousel -->
        <div class="carousel-container d-flex justify-content-center">
            <div id="carouselIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" slide="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://www.mm-lib.com/assets/img/slider-image-1.jpg" class="d-block w-100" alt="Slide 1" slide-image-index="1"> <!-- Carousel Images Credit to: https://mm-lib.com -->
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.mm-lib.com/assets/img/IMG_4533.jpg" class="d-block w-100" alt="Slide 2" slide-image-index="2"> <!-- Carousel Images Credit to: https://mm-lib.com -->
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.mm-lib.com/assets/img/slider-image-3.jpg" class="d-block w-100" alt="Slide 3" slide-image-index="3"> <!-- Carousel Images Credit to: https://mm-lib.com -->
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-6">
                <div class="search-box">
                    <form method="GET" action="#">
                        <div class="input-group">
                            <input class="form-control form-floating" type="text" name="search" placeholder="Search books or authors...">
                            <button class="btn btn-secondary" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398l3.86 3.86a1 1 0 1 0 1.415-1.413l-3.858-3.845zm-4.242 0a4.5 4.5 0 1 1 1.397-1.398 4.5 4.5 0 0 1-1.397 1.398z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        -->
        <div class="row mt-5">
            <?php
            // Define an array of PDF file paths
            $pdf_files = array(
                'src/Books/SharTu_CatWorld.pdf',
                'src/Books/ChitSanWin_StayTop.pdf',
                'src/Books/NayNor_Butterfly.pdf',
                'src/Books/MoeSatLinnHtet_Kywe.pdf'
            );

            // Define an array of image paths corresponding to each PDF file
            $image_files = array(
                'src/Books/Book-Images/SharTu_CatWorld.jpeg',
                'src/Books/Book-Images/ChitSanWin_StayTop.jpeg',
                'src/Books/Book-Images/NayNor_Butterfly.jpeg',
                'src/Books/Book-Images/MoeSatLinnHtet_Kywe.jpeg'
            );

            // Check if search query is set
            if(isset($_GET['search'])) {
                echo '<style>[slide="carousel"] { display: none; } [name="view-more-books-link"] { display:none; } #description { display: none; }</style>';
                $search = $_GET['search'];
                // Initialize a variable to track if any books are found
                $booksFound = false;
                // Initialize a variable to count the number of books found
                $numResults = 0;
                // Loop through each PDF file again, but filter based on search keyword
                foreach ($pdf_files as $key => $pdf_file ) {
                    // Check if the title contains the search keyword
                    if (stripos(basename($pdf_file, ".pdf"), $search) !== false) {
                        $booksFound = true; // Set flag to true if any book is found
                        $numResults++; // Increment the number of results found
                        ?>
                        <div class="col-lg-3 book-card">
                            <div class="card card_<?php echo $key + 1; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="<?php echo $image_files[$key]; ?>" alt="Book"></h5>
                                    <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-secondary read-btn">Read</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                // Display message with number of results found if books are found
                if ($booksFound) {
                    echo '<div class="col-lg-12 result_found_msg text-center">' . $numResults . ' Results Found:</div>';
                } else {
                    // Display message if no books are found
                    echo '<div class="col-lg-12 error_msg_if_no_books_found text-center">Sorry, couldn\'t find "' . htmlentities($search) . '".</div>';
                }
            } else {
                // If no search query, display all books
                foreach ($pdf_files as $key => $pdf_file ) {
                    ?>
                    <div class="col-lg-3 book-card">
                        <div class="card card_<?php echo $key + 1; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><img src="<?php echo $image_files[$key]; ?>" alt="Book"></h5>
                                <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-secondary read-btn">Read</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>


            <!-- Add more as needed -->
        </div>

        <div class="row mt-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <h3 class="text-center" name="view-more-books-link">View more...</h3>
            </div>
        </div>

        <!-- <div class="row mt-5">
            <div class="col-lg-3">
                <div class="categories">
                    <h3 class="text-center" name="category-text">Categories</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="books">
                    <h3 class="text-center" name="book-text">Books</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="authors">
                    <h3 class="text-center" name="author-text">Authors</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="contact-us">
                    <h3 class="text-center" name="contact-us-text">Contact Us!</h3>
                </div>
            </div>
        </div> -->
    </div>

    <!-- Script -->
    <script src="src/scripts/index.js" defer></script>

    <!-- Libaries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
</body>
</html>
