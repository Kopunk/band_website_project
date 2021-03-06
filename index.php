<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HUSK Band</title>
        <meta name="description" content="HUSK band website">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" type="text/css" href="styles.css?v=<?php echo time(); ?>">
    </head>
    <body>
        <nav>
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
            <div id="videoform">
                <video src="videos/live_jazz_break.mp4" controls>
                    Video Unavailable
                </video>
                
                <form action="contact_valid.php" method="POST" autocomplete="on">
                    <label for="email">Email</label>
                    <input type="email" placeholder="enter email" name="email" required>


                    <label for="message">Your message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="When's the new album coming out?!"></textarea>

                    <div id="formcheckbox">
                        <label for="newsletter">Join the newsletter</label>
                        <input type="checkbox" name="newsletter" checked>
                    </div>
                    

                    <button type="submit">send</button>
                </form>
            </div>
            

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