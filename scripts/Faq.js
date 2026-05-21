var faq = document.getElementsByClassName("faq__page");
var i;

for (i = 0; i< faq.length; i++) {
    faq[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var body = this.querySelector('.faq-body');

        if (window.getComputedStyle(body).display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    })
}