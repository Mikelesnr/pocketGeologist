<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <?php
      include('head.php');
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php
        include('mainNav.php');
      ?>
    </nav>
    <header class="header">
        <?php
          include('header.php');
        ?>
        <h3>Contact Me.</h3>
    </header>
    <div class="form-container">
        <form action="mailto:thefingertipinformer@gmail.com" style="margin-top: 50px;">
            <table style="margin-left:auto; margin-right:auto; margin-top:50px; margin-bottom:20px;">
                <tr>
                    <td style="text-align:left;">
                        <label class="form-label" for="fname">First Name</label>
                    </td>
                    <td>
                    <input type="text" id="fname" name="firstname" placeholder="Your name.." style="width:250px;">
                    </td>
                </tr>
                <tr >
                    <td style="text-align:left;"">
                        <label class="form-label" for="lname">Last Name</label>
                    </td>
                    <td>
                        <input type="text" id="lname" name="lastname" placeholder="Your last name.." style="width:250px;">
                    </td>
                </tr>
                <tr>
                    <td style="text-align:left;">
                    <label class="form-label" for="subject">Subject</label>
                    </td>
                    <td>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px; width:250px;"></textarea>
                    </td>
                </tr>
            </table>
            <input style="margin-left:20%;" type="submit" value="Submit" style="margin-bottom: 50px;">

        </form>
    </div>
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