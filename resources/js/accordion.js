let acc = document.getElementsByClassName("acc");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        let panel = this.nextElementSibling;

        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

$(document).ready(function() {
    $(".main-accordion").accordion({
        active: false,
        collapsible: true,
        heightStyle: "content",
        active: 0
    });
});
