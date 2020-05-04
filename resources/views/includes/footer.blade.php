<section class="footer-section border-radius">
    <div class="footer">

        <a href="/create">
            <img class="footer-item" src="https://image.flaticon.com/icons/svg/77/77196.svg">
            <a href="#">
                <img class="footer-item" src="https://image.flaticon.com/icons/svg/77/77173.svg">
                <a href="#index">
                    <img class="footer-item" src="https://image.flaticon.com/icons/svg/77/77139.svg">
                    <a href="#index">
                        <img class="footer-item" src="https://image.flaticon.com/icons/svg/77/77143.svg">
                        <a href="#index">
                            <img class="footer-item" src="https://image.flaticon.com/icons/svg/77/77196.svg">
</section>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    var accordion = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < accordion.length; i++) {

        accordion[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;

            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>