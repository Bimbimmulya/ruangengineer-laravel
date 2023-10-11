window.addEventListener("scroll", function () {
    var header = document.querySelector("header");
    header.classList.toggle("scrolled", window.scrollY > 0);
});

document.addEventListener("DOMContentLoaded", function () {
    var navItems = document.querySelectorAll(".navbar-nav .nav-item");

    navItems.forEach(function (item) {
        item.addEventListener("click", function () {
            navItems.forEach(function (nav) {
                nav.classList.remove("active");
            });
            this.classList.add("active");
        });
    });
});

// change img in services
function changeImage(fileName) {
    let img = document.querySelector("#bannerImage");
    img.setAttribute("src", fileName);
}

// contact form
const contactForm = document.getElementById("contact-form");

contactForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const url = e.target.action;
    const formData = new FormData(contactForm);

    fetch(url, {
        method: "POST",
        body: formData,
        mode: "no-cors",
    })
        .then(() => {
            //  url success
            window.location.href = "/success";
        })
        .catch((e) => alert("Error occured"));
});
