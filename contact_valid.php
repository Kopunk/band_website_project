<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HUSK login response</title>
        <!-- <meta name="description" content="HUSK"> -->
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

        <?php
            $msgfile = fopen("messages.txt", "a");

            // replace all newlines from $_POST["message"] with ' '
            $msgtxt = str_replace(array("\n", "\r"), " ", $_POST["message"]);
            $receivenewsletter = "NO";

            if (isset($_POST["newsletter"])) {
                $receivenewsletter = "YES";
            }

            // format all form data as string $msgtxt and write to $msgfile
            $msgtxt = mktime() . ";\t" . $_POST["email"] . ";\t'" . $msgtxt . "';\t" . $receivenewsletter . ";\n";
            fwrite($msgfile, $msgtxt);

            fclose($msgfile);
        ?>

        <main>
            <div style="font-size: x-large; padding: 0.5rem;">
                <?php
                    if ($receivenewsletter == "YES") {
                        echo "Thanks for signing up for newsletter!";
                    } else {
                        echo "Thanks for contacting us!";
                    }
                ?>
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