{
    let viewMoreBooksLink = document.querySelector('[name="view-more-books-link"]');

    function TakeToBookPageOnClick() {
        viewMoreBooksLink.addEventListener("click", () => {
            window.location.href = 'books.html';
        });
    }
    
    TakeToBookPageOnClick();
}