<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php
      include('head.php');
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <?php
        include('mainNav.php');
      ?>
    </nav>
    <header class="header">
        <div class="container-fluid text-center ">
            <?php
          include('header.php');
        ?>
            <h3>About Site.</h3>
        </div>
    </header>
    <main class="container" style="text-align: center; width:80%;margin:0 auto 50px auto;">
        <div class="clearfix" style="padding-top: 50px;">
            <img loading="lazy" style="width:50%;"
                class="col-md-6 float-md-end mb-3 ms-md-3 rockImg data-mdb-lazy-offset"
                src="images/about(1).jpg"
                alt="mineral and handlens">
            <h3>
                What is this site about?
            </h3>
            <p>
                This site is a mineral database for anyone who is interested in mineral properties or just to look up
                minerals. The database will be updated over time as I am working on this project alone. With me being a
                self-taught programmer with a geology degree I felt this project would be the best first project to show
                both the web development skills I have learnt as well as my background. I will be improving things as I
                go and as I learn new skills.
            </p>
            <h3>
                Who is this site for?
            </h3>
            <p>
                This site is for geology students, resent graduates who want to do a quick lookup in the field, Mineral
                lab assistants who want to do a quick mineral search rather than look though an entire physical book to
                find the mineral they are testing. For reference in the microscope slide section the database will be
                built from A Handbook of Minerals Under the Microscope by E.P. Saggerson, published by University of
                Natal Press
            </p>
            <h3>
                How does it work?
            </h3>
            <p>
                If you select the search link in the main navigation of this site it will take you to the section where
                you can input, the mineral properties. There are two buttons the hand sample button for when you are
                working with samples that you can do physical tests on. This is the button you would typically use int
                the field. The second button is the one you would typically use in a lab where you have access to a
                petrograph microscope where you can do optical tests. Please note that all the mineral properties in the
                microscope database are recorded for 0.03mm slides on a Michael levy chart.
            </p>
        </div>
    </main>

    <footer class="footer">
        <?php
      include('footer.php');
    ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>