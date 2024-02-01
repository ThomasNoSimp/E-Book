<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="src/styles/index.css">
    <link rel="icon" href="src/images/book.png">
    <title>E-Book</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?php echo $BASE_URL;?>">E-Book</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo $BASE_URL;?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#books">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#authors">Authors</a>
            </li>
            </ul>
            <!-- -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-center">E-Book</h1>
                <p Align="center" id="description">
                    E-Book website is a website which allows you to directly read or download your favorite books in one place.
                </p>
            </div>
        </div>
        <div class="row mt-5">
            <?php
            // Define an array of PDF file paths
            $pdf_files = array(
                'src/Books/SharTu_CatWorld.pdf',
                'src/Books/.pdf',
                'src/Books/.pdf',
                'src/Books/.pdf'
            );

            // Define an array of image paths corresponding to each PDF file
            $image_files = array(
                'src/Books/Book-Images/SharTu_CatWorld.jpeg',
                'src/Books/Book-Images/SharTu_CatWorld.jpeg',
                'src/Books/Book-Images/SharTu_CatWorld.jpeg',
                'src/Books/Book-Images/SharTu_CatWorld.jpeg'
            );

            // Loop through each PDF file
            foreach ($pdf_files as $key => $pdf_file ) {
                ?>
                <div class="col-lg-3">
                    <div class="card card_<?php echo $key + 1; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><img src="<?php echo $image_files[$key]; ?>" alt="Book"></h5>
                            <a href="<?php echo $pdf_file; ?>" target="_blank" class="btn btn-secondary read-btn">Read</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <script defer src="src/scripts/index.js"></script>
</body>
</html>
