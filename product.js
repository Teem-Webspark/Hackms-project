function searchBook() {
        let input = document.getElementById("searchInput").value.toLowerCase();
        let books = document.getElementsByClassName("book");

        for (let i = 0; i < books.length; i++) {
            let title = books[i].getElementsByTagName("h3")[0].innerText.toLowerCase();

            if (title.includes(input)) {
                books[i].style.display = "block";
            } else {
                books[i].style.display = "none";
            }
        }
    }