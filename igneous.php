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
            <h3>Igneous.</h3>
        </div>
    </header>
    <main class="container" style="text-align: center; width:80%;margin:0 auto 50px auto;">
        <section class="section section-1">
            <div class="clearfix" style="padding-top: 50px;">
                <img loading="lazy" style="width:50%;" class="col-md-6 float-md-end mb-3 ms-md-3 rockImg"
                    src="images/igneous-rocks.jfif"
                    alt="igneous rocks">

                <h3>Origin</h3>
                <p>
                    Igneous rocks form from the cooling and crystallization of liquid magma. Their name I
                    derived from the Latin word ignis which means fire. There are three classes of igneous
                    rock, these are extrusive, intrusive and plutonic.
                </p>

                <h3>Extrusive Igneous Rocks</h3>
                <p>
                    These consist of none-crystalline volcanic glass and fine grain volcanic rocks. The none-crystalline
                    volcanic glass forms due to rapid cooling. Rapid cooling does not give time for crystal growth. This
                    is
                    usually due to quenching if the lava flows into a water body. The fine grain rocks form near the top
                    and
                    at the top and at the top of the magma chamber where the temperature and pressure is relatively
                    lower.
                    In both cases crystals are not readily visible.
                </p>
            </div>
        </section>
        <section>
            <h3>
                Intrusive Igneous Rocks
            </h3>
            <p>
                These form inside the magma chamber where they cool slower, thousands of years as compared to second to
                months for Extrusive Igneous. The grains sizes vary from small but visible to medium sized crystals.
            </p>
        </section>
        <section>
            <h3>
                Plutonic Igneous Rocks
            </h3>
            <p>
                The cool over millions of years and have grain sizes as big as pebbles to even meters across.
            </p>
        </section>
        <section>
            <h3>
                Where do they form
            </h3>
            <p>
                <a href=""><span>Divergent plate boundaries</span></a> . This is where plates drift apart and the gaps
                are filled by magma. This is how mid oceanic ridges form.
            </p>
            <p>
                <a href=""><span>Subduction zones</span></a> . This is where oceanic plates sink under continental
                plates. The friction and the pressure cause melting of rock and the resultant magma intrudes into the
                continental bedrock. This results in formation of volcanoes and underground magma bodies such as dykes
                and sills.
            </p>
            <p>
                <a href=""><span>Hotspots</span></a> . An example of a hotspot is Hawaii. These occur when continental
                crust passes over an extremely hot part of the mantle. This is normally located above a plume of rising
                magma in the mantle. The magma punches a hole in the crust, and this leads to the formation of volcanoes
                and in some cases volcanic Islands.
            </p>
            <p>
                <a href=""><span>Continental collision zones</span></a> . When two continents collide, there is
                thickening of crust and melting of rocks as the pressures are extremely high.
            </p>
        </section>

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