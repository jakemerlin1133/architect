// change the color when scroll
window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 12);
})

// focus the color of the list when click
const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('ul a');

navLinks.forEach(link => {
    if (activePage === '/architect/' || activePage === '/architect/index.php') {
        if (link.href.endsWith('index.php')) {
            link.classList.add('active');
        }
    } else if (link.href.endsWith(activePage)) {
        link.classList.add('active');
    }
});

// sidebar for max-width 639px

