<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>E-Book | Books</title>
    <link rel="stylesheet" href="src/styles/books.css">
    <link rel="stylesheet" href="src/styles/nav.css">
    <link rel="icon" href="src/images/book.png">
    
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
        <div class="row mt-5">
            <div class="col-lg-12">
                <h1 class="text-center" name="page-title">Books</h1>
                <p Align="center" id="description">
                    In this page, you can view all the books available in our website.
                </p>
            </div>
        </div>
    </div>

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
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>


        <!-- Add more as needed -->
    </div>
    
    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Script -->
    <script>
        $(document).ready(function() {
            $('.book-card').click(function() {
                // Get the index of the clicked card
                var index = $(this).index() + 1; // Adding 1 to match with 001.php, 002.php, etc.

                // Generate the destination URL based on the index
                var destination = 'books/' + ('00' + index).slice(-3) + '.php';

                // Redirect to the generated URL
                window.location = destination;
            });
        });
    </script>

</body>
</html>