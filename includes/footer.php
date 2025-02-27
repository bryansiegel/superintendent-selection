<!-- Footer-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Contact Us</h4>
                <p class="lead mb-0">
                    5100 W. Sahara Ave<br />
                    Las Vegas, NV 89146<br />
                    <br />
                    Phone: (702) 799-8484<br />
                    Fax: (702) 799-7946<br />
                    Office Hours: 7:00 am – 5:00 pm
                </p>
            </div>
            <!-- Footer Useful Links-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Useful Links</h4>
                <a class="nav-link" href="https://ccsd.net/district/calendar/"
                >Calendar</a
                >
                <a
                    class="nav-link"
                    href="https://ccsd.net/parents/infinite-campus-choice.php"
                >Infinite Campus</a
                >
                <a class="nav-link" href="https://ccsd.net/students/safevoice/"
                >SafeVoice</a
                >
                <a class="nav-link" href="https://ccsd.net/contactus/"
                >Contact Us</a
                >
            </div>
            <!-- Footer Legal Links-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Legal</h4>
                <a
                    class="nav-link"
                    href="https://ccsd.net/district/info/title-ix.php"
                >Title IX</a
                >
                <a
                    class="nav-link"
                    href="https://ccsd.net/district/info/non-discrimination/"
                >Notice of Nondiscrimination</a
                >
                <a
                    class="nav-link"
                    href="https://ccsd.net/district/accessibility-statement/"
                >Accessibility Statement</a
                >
                <a
                    class="nav-link"
                    href="https://www.ccsd.net/district/anti-racism/"
                >Policy 5139 Anti-Racism, Equity, and Inclusion</a
                >
            </div>
        </div>
    </div>
</footer>
<!-- Copyright Section-->
<div class="copyright py-4 text-center text-white">
    <div class="container">
        <small
        >Copyright &copy; <?php echo date("Y"); ?> Clark County School District. All Rights
            Reserved.</small
        >
    </div>
</div>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    };

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    };

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
</script>
</body>
</html>
