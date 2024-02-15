<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/nav.css">
    <link rel="stylesheet" href="../src/styles/main-css-for-books-array.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>E-Book | SharTu_CatWorld</title>

    <script type="module" src="../src/scripts/global-logo-script.js" defer></script>

    <!-- Include jQuery from a CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Favicon -->
    <link rel="icon" href="../src/images/book.png">

</head>
<body style="background:url('../src/images/bg.jpg');">
    <NavBar>
      	<input type="checkbox" name="" id="chk1">
      	<div class="logo"><h1>E-Book</h1></div>
      	<div class="search-box">
           <form action="">
               <input type="text" name="search" id="srch" placeholder="Search" disabled>
               <button type="submit"><i class="fa-duotone fa-magnifying-glass"></i></button>
           </form>
           <p class="error-message">Sorry, search box is disabled for this page.</p>
      	</div>
      	<ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../books.php">Books</a></li>
            <li><a href="../authors.php">Authors</a></li>
            <li><a href="../contactus.php">Contact Us</a></li>
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
            <div class="col-lg-12 mx-auto">
                <div class="content">
                    <h2 class="center-content book-title" name="book-title">SharTu_CatWorld</h2>
                    <img data-key="image" src="../src/Books/Book-Images/SharTu_CatWorld.jpeg" alt="Book Cover" class="img-fluid center-block">
                    <!-- Description Content -->
                    <p description="book-title" class="center-content"><strong>Book Title: </strong>SharTu_CatWorld</p>
                    <p description="book-author" class="center-content"><strong>Book Author: </strong>SharTu</p>
                    <!-- Buttons -->
                    <p Align="center" button="download-button" id="downloadBtn" class="center-content">Download</p>
                    <button id="ShareBtn" class="btn mb-3">Share on Telegram</button>
                    <div class="line-break"></div>
                    <h2 class="center-content mt-3" name="reviews-title">Reviews</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="review">
                                <div class="profile-container">
                                    <img src="../src/images/profile.png" alt="Profile Image" name="ProfileImage">
                                </div>
                                <p>This book is really good. Got me addicted into reading.</p>
                                <p><small class="text-muted">- Jonathan Mike</small></p>
                            </div>
                            <div class="review">
                                <div class="profile-container">
                                    <img src="../src/images/profile.png" alt="Profile Image" name="ProfileImage">
                                </div>
                                <p>I really enjoyed this book. This book is really fantasting. You should eventually try this out.</p>
                                <p><small class="text-muted">- Lily Chan</small></p>
                            </div>
                            <div class="review">
                                <div class="profile-container">
                                    <img src="../src/images/profile.png" alt="Profile Image" name="ProfileImage">
                                </div>
                                <p>Speechless, this book is just a fantastic one.</p>
                                <p><small class="text-muted">- U Tay Za</small></p>
                            </div>
                            <div class="review">
                                <div class="profile-container">
                                    <img src="../src/images/profile.png" alt="Profile Image" name="ProfileImage">
                                </div>
                                <p>Pyw sayar ma shi aung tw" kg tae book pr.</p>
                                <p><small class="text-muted">- Kyaw Gyi</small></p>
                            </div>
                            <div class="review">
                                <div class="profile-container">
                                    <img src="../src/images/profile.png" alt="Profile Image" name="ProfileImage">
                                </div>
                                <p>D service ko kyite tl</p>
                                <p><small class="text-muted">- Mi Chaw</small></p>
                            </div>
                        </div>
                    </div>

                    <!-- Copied to Clipboard Message -->
                    <div class="toast-container">
                        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
                            <div class="toast-body bg-success text-white">
                                Text copied to clipboard.
                            </div>
                        </div>
                    </div>

                    <!-- Error Message to display if user has no acess to internet connection -->
                    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="errorModalLabel">Error</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                You are currently offline. Please check your internet connection.
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                                                                                                                            
                    <!-- Script -->
                    <script type="text/javascript" defer>
                        $(document).ready(function(){
                            function showToastNearCursor(event) {
                                // Get the cursor position
                                const posX = event.clientX;
                                const posY = event.clientY;

                                // Set the position of the toast container near the cursor
                                $('.toast-container').css({
                                    display: 'block',
                                    top: posY + 'px',
                                    left: posX + 'px'
                                });

                                // Show toast message
                                $('.toast').toast('show');

                                // Hide the toast message after a delay with fade animation
                                setTimeout(function() {
                                    $('.toast').toast('hide');
                                }, 2000);
                            }

                            function copyBookTitle(event){
                                let bookTitleElement = $('[description="book-title"]')[0]; // Get the first element with the attribute
                                let bookTitle = bookTitleElement.textContent; // Get the text content

                                // Copy the text to clipboard
                                navigator.clipboard.writeText(bookTitle).then(function() {
                                    showToastNearCursor(event); // Pass the event object
                                }, function(err) {
                                    console.error('Could not copy text: ', err);
                                });
                            }

                            function copyBookAuthor(event){
                                let bookAuthorElement = $('[description="book-author"]')[0]; // Get the first element with the attribute
                                let bookAuthor = bookAuthorElement.textContent; // Get the text content

                                // Copy the text to clipboard
                                navigator.clipboard.writeText(bookAuthor).then(function() {
                                    showToastNearCursor(event); // Pass the event object
                                }, function(err) {
                                    console.error('Could not copy text: ', err);
                                });
                            }

                            $('[description="book-title"]').on('click', copyBookTitle);
                            $('[description="book-author"]').on('click', copyBookAuthor);

                            // Download Script
                            $('#downloadBtn').on('click', function() {
                                // URL of the PDF file on the server
                                var url = '../src/Books/SharTu_CatWorld.pdf';

                                // Fetch the file using the Fetch API
                                fetch(url)
                                .then(response => {
                                    // Check if the response is successful
                                    if (!response.ok) {
                                        throw new Error('Network response was not ok');
                                    }
                                    return response.blob(); // Return the response as a Blob
                                })
                                .then(blob => {
                                    // Create a temporary URL for the Blob
                                    var blobUrl = URL.createObjectURL(blob);

                                    // Create a link element
                                    var link = document.createElement('a');
                                    link.href = blobUrl;
                                    link.download = 'SharTu_CatWorld.pdf'; // Specify the filename for download
                                    link.click(); // Trigger the download
                                })
                                .catch(error => {
                                    console.error('There was a problem with the fetch operation:', error);
                                });
                            });

                            $('#srch').disabled = true;

                            // Function to display error message when search box is clicked
                            $('.search-box').on('click', function() {
                                $('.error-message').fadeIn(300);

                                setTimeout(function() {
                                    $('.error-message').fadeOut(300); // Hide error message with fade-out effect
                                }, 3000);
                            });

                            // Function to prevent default behavior when typing in the search box
                            $('#srch').on('keypress', function(e) {
                                e.preventDefault(); // Prevent typing
                            });

                            window.onload = function() {
                                function checkOnlineStatus() {
                                    if (!navigator.onLine) {
                                        $('#errorModal').modal('show'); // Show Bootstrap modal
                                    } else {
                                        $('#errorModal').modal('hide'); // Hide Bootstrap modal
                                    }
                                }

                                // Check online status initially
                                checkOnlineStatus();

                                // Attach event listener for online and offline events using anonymous function
                                window.addEventListener('online', () => {
                                checkOnlineStatus();
                                });
                                window.addEventListener('offline', () => {
                                checkOnlineStatus();
                                });
                            }

                            function isAdBlockerEnabled() {
                                try {
                                    // Check for common ad blocker classes
                                    const adBlockerClasses = ['ad', 'advertising', 'ad-banner', 'ad-container', 'ad-placeholder', 'ad-slot'];
                                    const adElements = document.querySelectorAll(adBlockerClasses.map(className => `.${className}`).join(', '));

                                    // Check if any ad elements are present
                                    if (adElements.length > 0) {
                                        return true; // Ad blocker likely enabled
                                    }

                                    // Check if any common ad-related JavaScript functions are overwritten
                                    const adFunctions = ['open', 'write', 'createElement', 'appendChild', 'insertBefore'];
                                    const functionOverwritten = adFunctions.some(func => {
                                        const originalFunction = Document.prototype[func];
                                        const descriptor = Object.getOwnPropertyDescriptor(HTMLElement.prototype, func);
                                        if (descriptor && descriptor.value) {
                                            return originalFunction.toString() !== descriptor.value.toString();
                                        }
                                        return false;
                                    });

                                    if (functionOverwritten) {
                                        return true; // Ad blocker likely enabled
                                    }

                                    // Check if any common ad-related variables are modified
                                    const adVariables = ['google_ad_client', 'googletag', 'AdBlockDetector'];
                                    const variableModified = adVariables.some(variable => {
                                        return window[variable] !== undefined;
                                    });

                                    if (variableModified) {
                                        return true; // Ad blocker likely enabled
                                    }

                                    return false; // Ad blocker likely not enabled
                                } catch (error) {
                                    console.error('Error detecting ad blocker:', error);
                                    return false; // Ad blocker likely not enabled (fallback)
                                }
                            }

                            // Usage
                            if (isAdBlockerEnabled()) {
                                console.log("Ad blocker is likely enabled.");
                                // Display a message or take appropriate action
                            } else {
                                console.log("Ad blocker is likely not enabled.");
                                // Continue with your application logic
                            }

                            // Function to handle sharing the e-book on Telegram
                            function shareOnTelegram() {
                                const telegramShareLink = 'https://t.me/share/url?url=http://www.localhost/books/001.php&text=Check%20out%20this%20e-book%20on%20My%20E-book%20Website';
                                window.open(telegramShareLink, '_blank');
                            }

                            // Add click event listener to the Telegram share button
                            $('#ShareBtn').on('click', shareOnTelegram);
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>