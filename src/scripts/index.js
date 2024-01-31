document.addEventListener('DOMContentLoaded', function() {
    // Get all cards
    let cards = document.querySelectorAll('.card');

    // Iterate over each card
    cards.forEach(function(card) {
        // Add click event listener to the card
        card.addEventListener('click', function() {
            window.location.href = '../../phpinfo.php';
        });

        // Get the button inside the card
        let button = card.querySelector('.read-btn');

        // Add click event listener to the button
        button.addEventListener('click', function(event) {
            event.stopPropagation(); // Prevent the click event on the card from triggering
            window.location.href = '../../phpinfo.php';
        });
    });
});
