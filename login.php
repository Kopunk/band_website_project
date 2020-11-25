<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HUSK Band Login</title>
        <meta name="description" content="HUSK band website login">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <nav>
            <!-- Using unordered list with one element as img inside nav was problematic -->
            <a href="index.php">
                <img id="logo" src="images/husk__logo_white.svg" alt="Husk Logo">
            </a>
            <ul>
                <li><a href="about.php">About Us</a></li>
                <li><a href="members.php">Band Members</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>

        <main>
            <form action="login_valid.php" method="POST" autocomplete="on">
                <label for="email">Email</label>
                <input type="email" placeholder="enter email" name="email" autofocus>

                <label for="password">Password</label>
                <input type="password" placeholder="enter password" name="password">

                <button type="submit">login</button>
            </form>
            
        </main>

        <footer>
            <ul>
                <li>
                    <a href="https://www.instagram.com/">
                        <img src="images/social_media/instagram.png" alt="Instagram">
                    </a>
                </li>
                <li>
                    <a href="https://www.instagramtv.com/">
                        <img src="images/social_media/instagram_tv.png" alt="IGTV">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/">
                        <img src="images/social_media/youtube_social_icon_dark.png" alt="YouTube">
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/">
                        <img src="images/social_media/youtube_social_icon_dark.png" alt="YouTube">
                    </a>
                </li>
            </ul>
        </footer>
    </body>
</html>