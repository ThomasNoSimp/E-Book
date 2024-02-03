let categoryText = document.querySelector('[name="category-text"]');
let bookText = document.querySelector('[name="book-text"]');
let authorText = document.querySelector('[name="author-text"]');
let contactUsText = document.querySelector('[name="contact-us-text"]');

let category = $('.categories');
let author = $('.authors');
let book = $('.books');
let contactUs = $('.contact-us');

function TakeToPageOnClick() {
    category.on("click", () => {
        window.open('../../phpinfo.php', '_blank');
    });

    author.on("click", () => {
        window.open('../../phpinfo.php', '_blank');
    });

    book.on("click", () => {
        window.open('../../phpinfo.php', '_blank');
    });

    contactUs.on("click", () => {
        window.open('../../phpinfo.php', '_blank');
    });
}

TakeToPageOnClick();