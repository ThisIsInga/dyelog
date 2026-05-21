(function () {
    const cropElement = document.querySelectorAll(".news__truncate-text"),
        size = 23,
        endCharacter = "...";
    
    cropElement.forEach(el => {
        let text = el.innerHTML;

        if (el.innerHTML.length > size) {
            text = text.substr(0, size);
            el.innerHTML = text + endCharacter;
        }
    });

}());