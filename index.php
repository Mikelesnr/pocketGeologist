<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php
      include('head.php');
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="z-index: 2;">
        <?php
          include('mainNav.php');
        ?>
    </nav>
    <header class="header"">
      <div class=" container-fluid text-center ">
        <?php
          include('header.php');
        ?>
        <h3>Welcome to my site.</h3>
    </div>
      </header>

      
      <div class=" album py-5 bg-light" id="gallery" style="margin-left:auto; margin-right:auto; z-index: 0;">
        <h3>Gallery.</h3>
        <div class="container" style="margin-left: auto; margin-right: auto;">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/obsidian2.jpg"
                            alt="obsidian">

                        <div class="card-body">
                            <p class="card-text">This is a type of volcanic glass. It is none crystalline due to rapid
                                cooling during its formation. It is extrusive igneous.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"> <a href="http://www.mindat.org/min-8519.html" target="_blank"
                                        rel="noopener noreferrer">obsidian</a> </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/amethyst(1).jpg"
                            alt="amethyst">

                        <div class="card-body">
                            <p class="card-text">Amethyst is a purple variety of quartz. Quartz is normally clear, but
                                it can become colored due to impurities.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"> <a href="https://www.mindat.org/min-198.htmll"
                                        target="_blank" rel="noopener noreferrer">amethyst</a> </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/quartz.jpg"
                            alt="quartz">

                        <div class="card-body">
                            <p class="card-text">Quartz is the most abundant minerals on the earth’s surface. The
                                variety in the picture is called rock crystal.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-3337.html" target="_blank"
                                        rel="noopener noreferrer">quartz</a></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/feldspar2.jpg"
                            alt="feldspar">

                        <div class="card-body">
                            <p class="card-text">Feldspars are a group of rock-forming aluminium tectosilicate minerals.
                                The variety in the image is plagioclase.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-1624.html" target="_blank"
                                        rel="noopener noreferrer">feldspar</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/biotite2.jpg"
                            alt="biotite">

                        <div class="card-body">
                            <p class="card-text">Biotite is a dark mineral from the mica group. It is commonly found in
                                igneous rocks or in metamorphic rocks.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-677.html" target="_blank"
                                        rel="noopener noreferrer">biotite</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/galena2.jpg"
                            alt="galena">

                        <div class="card-body">
                            <p class="card-text">This is a lead sulfide mineral. It is a relatively heavy mineral which
                                is the primary ore for lead around the world.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-1641.html" target="_blank"
                                        rel="noopener noreferrer">galena</a></small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/sandstone2.jpg"
                            alt="sandstone">

                        <div class="card-body">
                            <p class="card-text">Sandstone is a clastic sedimentary rock primarily composed of quartz
                                and other silicate minerals such as feldspar.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-49438.html"
                                        target="_blank" rel="noopener noreferrer">sandstone</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/marble(2).jpg"
                            alt="marble">

                        <div class="card-body">
                            <p class="card-text">Marble is a metamorphic rock formed from exposing limestone to high
                                temperature and pressure.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-9507.html" target="_blank"
                                        rel="noopener noreferrer">marble</a></small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img loading="lazy"
                            src="images/gneiss2.jpg"
                            alt="gneiss">

                        <div class="card-body">
                            <p class="card-text">Gneiss is a high-grade metamorphic rock formed from high-grade <a href="https://www.mindat.org/glossary/metamorphism"
                                    target="_blank" rel="noopener noreferrer">metamorphism</a> of
                                granite or sedimentary rock.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted"><a href="https://www.mindat.org/min-48629.html"
                                        target="_blank" rel="noopener noreferrer">gneiss</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="constainer" id="search">
            <div id="hide-search">
                <h2 id='mainH2'>Mineral Search</h2>
                <div class="operations">
                    <div class="operations__tab-conatiner">
                        <button class="btn operations__tab operations tab--1 operations__tab--active"
                            data-tab="1"><span>01</span>Handsample tests</button>
                        <button class="btn operations__tab operations tab--2" data-tab="2"><span>02</span>Microscope
                            tests</button>
                    </div>
                </div>
                <div class="operations__content operations__content--1 operations__content--active">
                    <form onSubmit="return false;" action="index.php" method="POST">
                        <table style="margin-left: auto; margin-right: auto; text-align:left;">
                            <tr>
                                <td class="form-label">Color</td>
                                <td>
                                    <select name="color" style="margin-left:20px; width:200px;">
                                        <option value="colorless">Colorless</option>
                                        <option value="grey" selected>Grey</option>
                                        <option value="pink_red">Pink-Red</option>
                                        <option value="brown">Brown</option>
                                        <option value="orange">Orange</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple_lilac">Purple-Lilac<ol /option>
                                        <option value="black">Black</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Streak</td>
                                <td>
                                    <select name="streak" style="margin-left:20px; width:200px;">
                                        <option value="colorless">Colorless</option>
                                        <option value="grey" selected>Grey</option>
                                        <option value="red">Red</option>
                                        <option value="brown">Brown</option>
                                        <option value="brown_gold">Brown Gold</option>
                                        <option value="brown_grey">Brown Grey</option>
                                        <option value="yellow_grey">Yellow Grey</option>
                                        <option value="white">White</option>
                                        <option value="green_black">Green Black</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple">Purple<ol /option>
                                        <option value="black">Black</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Lustre</td>
                                <td>
                                    <select name="luster" style="margin-left:20px; width:200px;">
                                        <option value="metalic">Metallic</option>
                                        <option value="waxy" selected>Waxy</option>
                                        <option value="pearly">Pearly</option>
                                        <option value="silky">Silky</option>
                                        <option value="vitreous">Vitreous</option>
                                        <option value="greasy">Greasy</option>
                                        <option value="resinous">Resinous</option>
                                        <option value="adamantine">Adamantine</option>
                                        <option value="dull">Dull</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Hardness</td>
                                <td>
                                    <select name="hardness" style="margin-left:20px; width:200px;">
                                        <option value="0-1">0-1</option>
                                        <option value="1-2" selected>1-2</option>
                                        <option value="2-3">2-3</option>
                                        <option value="3-4">3-4</option>
                                        <option value="4-5">4-5s</option>
                                        <option value="5-6">5-6</option>
                                        <option value="6-7">6-7</option>
                                        <option value="7-8">7-8</option>
                                        <option value="8-9">8-9</option>
                                        <option value="9-10">9-10</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Transparency</td>
                                <td>
                                    <select name="transparecy" style="margin-left:20px; width:200px;">
                                        <option value="transparent">Transparent</option>
                                        <option value="translucent" selected>translucent</option>
                                        <option value="opaque">Opaque</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">optical properties</td>
                                <td>
                                    <select name="optical-properties" style="margin-left:20px; width:200px;">
                                        <option value="yes">yes</option>
                                        <option value="no" selected>none</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Specific Gravity</td>
                                <td>
                                    <select name="SG" style="margin-left:20px; width:200px;">
                                        <option value="light">light</option>
                                        <option value="medium" selected>medium</option>
                                        <option value="heavy">heavy</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Fracture</td>
                                <td>
                                    <select name="facture" style="margin-left:20px; width:200px;">
                                        <option value="concoidal">Concoidal</option>
                                        <option value="even" selected>Even</option>
                                        <option value="uneven">Uneven</option>
                                        <option value="hackly">Hackly</option>
                                        <option value="splintery">Splintery</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">habit</td>
                                <td>
                                    <select name="habitt" style="margin-left:20px; width:200px;">
                                        <option value="blocky">Blocky</option>
                                        <option value="tabular" selected>Tabular</option>
                                        <option value="prismatic">Prismatic</option>
                                        <option value="bladed">Bladed</option>
                                        <option value="acicular">Acicular</option>
                                        <option value="filiform">Filiform</option>
                                        <option value="druzy">Druzy</option>
                                        <option value="divergent">Divergent</option>
                                        <option value="reticulated">Reticulated</option>
                                        <option value="dendritic">Dendritic</option>
                                        <option value="columnar">Columnar</option>
                                        <option value="fibrous">Fibrous</option>
                                        <option value="stellate">Stellate</option>
                                        <option value="spherical">Spherical</option>
                                        <option value="botryoidald">Botryoidal</option>
                                        <option value="mammillary">Mammillary</option>
                                        <option value="reniform">Reniform</option>
                                        <option value="foliated">Foliated</option>
                                        <option value="micaceous">Micaceous</option>
                                        <option value="lamellar">Lamellar</option>
                                        <option value="plumose">Plumose</option>
                                        <option value="massive">Massive</option>
                                        <option value="banded">Banded</option>
                                        <option value="oolitic">Oolitic</option>
                                        <option value="pisolitic">Pisolitic</option>
                                        <option value="concretionary">Concretionary</option>
                                        <option value="geode">Geode</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input class="submit" type="submit" value="submit" style="margin-top:20px;">
                    </form>
                </div>

                <div class="operations__content operations__content--2">
                    <form onSubmit="return false;" action="index.php" method="POST">
                        <table style="margin-left: auto; margin-right: auto; text-align:left;;">
                            <tr>
                                <td class="form-label">Color</td>
                                <td>
                                    <select name="color" style="margin-left:20px; width:200px;">
                                        <option value="colorless">Colorless</option>
                                        <option value="grey" selected>Grey</option>
                                        <option value="pink_red">Pink-Red</option>
                                        <option value="brown">Brown</option>
                                        <option value="orange">Orange</option>
                                        <option value="yellow">Yellow</option>
                                        <option value="green">Green</option>
                                        <option value="blue">Blue</option>
                                        <option value="purple_lilac">Purple-Lilac<ol /option>
                                        <option value="black">Black</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Optical Group</td>
                                <td>
                                    <select name="optical_Group" style="margin-left:20px; width:200px;">
                                        <option value="isotropic">Isotropic</option>
                                        <option value="uniaxial_positive" selected>Uniaxial Positive</option>
                                        <option value="uniaxial_negetive">Uniaxial Negetive</option>
                                        <option value="biaxial_positive">Biaxial Positive</option>
                                        <option value="biaxial_negetive">Biaxial negetive</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Relief</td>
                                <td>
                                    <select name="relief" style="margin-left:20px; width:200px;">
                                        <option value="H">High</option>
                                        <option value="M" selected>Medium</option>
                                        <option value="l">low</option>
                                        <option value="-H">-High</option>
                                        <option value="-M" selected>-Medium</option>
                                        <option value="-l">-low</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">interference</td>
                                <td>
                                    <select name="interference" style="margin-left:20px; width:200px;">
                                        <option value="first_order">1st order</option>
                                        <option value="second_order" selected>2nd order</option>
                                        <option value="third_order">3rd order</option>
                                        <option value="fourth_order">4th order</option>
                                        <option value="fifth_order">5th order</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Twinning</td>
                                <td>
                                    <select name="twinning" style="margin-left:20px; width:200px;">
                                        <option value="yes">Yes</option>
                                        <option value="no" selected>None</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Alteration</td>
                                <td>
                                    <select name="alteration" style="margin-left:20px; width:200px;">
                                        <option value="sepentine">Serpentine</option>
                                        <option value="muscovite" selected>Muscovite</option>
                                        <option value="mica">Mica</option>
                                        <option value="cholrite">Chlorite</option>
                                        <option value="sericite">Sericite</option>
                                        <option value="mica">Mica</option>
                                        <option value="pyrophillite">Pyrophillite</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">2V angle</td>
                                <td>
                                    <select name="2v" style="margin-left:20px; width:200px;">
                                        <option value="(+)0-10">(+)0-10</option>
                                        <option value="(+)10-20" selected>(+)10-20</option>
                                        <option value="(+)20-30">(+)20-30</option>
                                        <option value="(+)30-40">(+)30-40</option>
                                        <option value="(+)40-50">(+)40-50</option>
                                        <option value="(+)50-60">(+)50-60</option>
                                        <option value="(+)60-70">(+)60-70</option>
                                        <option value="(+)70-80">(+)70-80</option>
                                        <option value="(+)80-90">(+)80-90</option>
                                        <option value="(-)0-10">(-)0-10</option>
                                        <option value="(-)10-20">(-)10-20</option>
                                        <option value="(-)20-30">(-)20-30</option>
                                        <option value="(-)30-40">(-)30-40</option>
                                        <option value="(-)40-50">(-)40-50</option>
                                        <option value="(-)50-60">(-)50-60</option>
                                        <option value="(-)60-70">(-)60-70</option>
                                        <option value="(-)70-80">(-)70-80</option>
                                        <option value="(-)80-90">(-)80-90</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Cleavage</td>
                                <td>
                                    <select name="cleavage" style="margin-left:20px; width:200px;">
                                        <option value="one_perfect">One Perfect</option>
                                        <option value="one_good" selected>One Good</option>
                                        <option value="one_imperfect">One Imperfect</option>
                                        <option value="two_perfect">Two Perfect</option>
                                        <option value="two_good">Two Good</option>
                                        <option value="two_imperfect">Two Imperfect</option>
                                        <option value="two_90_degrees">Two 90 degreeds</option>
                                        <option value="rhombohedral">Rhombohedral</option>
                                        <option value="bamboo_parting">Bamboo Parting</option>
                                        <option value="fibrous">Fibrous</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="form-label">Orientation</td>
                                <td>
                                    <select name="orientation" style="margin-left:20px; width:200px;">
                                        <option value="length_fast">Length Fast</option>
                                        <option value="length_slow" selected>Length Slow</option>
                                        <option value="fast">Fast</option>
                                        <option value="slow">Slow</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <input class="submit" type="submit" value="submit" style="margin-top:20px;">
                    </form>
                </div>
            </div>



            <div id=results-constainer class="hidden">
                <h3>
                    Mineral Sujestions
                </h3>
                <div id="min-results">
                    <p>
                        Min results here
                    </p>
                </div>
                <button onclick="chngView()" class="btn btn-reset">reset</button>
            </div>
        </div>

        <footer class="footer">
            <?php
      include('footer.php');
    ?>
        </footer>
</body>
<script src="scripts/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

</html>