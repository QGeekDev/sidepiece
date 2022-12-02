<?php
$dbh = new PDO('mysql:host=localhost;dbname=usersAlphaDating;charset=utf8;', 'usersAlphaDating', '*6iu3+[HT!7?');
if (count($_POST) > 0) {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));
    $report_message = htmlspecialchars(trim($_POST['report_message']));
    $report_second = htmlspecialchars(trim($_POST['report_second']));

    if (!empty($report_second)) {
        $sql = "INSERT INTO `sidepiece-reports` (`report_message`) VALUES ( :report_message)";
        $sth = $dbh->prepare($sql);
        $res = $sth->execute(array(':report_message' => $report_second));
        $result = $sth->fetchAll();
    }
    if (!empty($report_message)) {
        $sql = "INSERT INTO `sidepiece-reports` (`report_message`) VALUES (:report_message)";
        $sth = $dbh->prepare($sql);
        $res = $sth->execute(array(':report_message' => $report_message));
        $result = $sth->fetchAll();
    }
    if (!empty($name) && !empty($email)) {
        $sql = "INSERT INTO `sidepiece-users` (`name`, `email`, `message`) VALUES (:name, :email, :message)";
        $sth = $dbh->prepare($sql);
        $res = $sth->execute(array(':name' => $name, ':email' => $email, ':message' => $message));
        $result = $sth->fetchAll();
    }
} ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--  Style-->
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/fonts.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">

    <!--Icon-->
    <link rel="icon" href="https://sidepieceapp.com/favicon48.svg" type="image/svg+xml">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#fff">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- HTML Meta Tags-->
    <title>Sidepiece</title>
    <meta name="description" content="Find what you’re looking for on SIDEPIECE. We cater to your desires. Chat with other side piece members from your neighborhood to all across the globe.">
    <meta name="keywords" content="1">
    <meta name="rating" content="general">
    <meta name="copyright" content="Copyright ©2022 -">
    <meta name="distribution" content="global">
    <meta name="robots" content="index,follow">
    <!-- Facebook Meta Tags-->
    <meta property="og:url" content="https://sidepieceapp.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Sidepiece">
    <meta property="og:description" content="Find what you’re looking for on SIDEPIECE. We cater to your desires. Chat with other side piece members from your neighborhood to all across the globe.">
    <meta property="og:image" content="https://sidepieceapp.comundefined">
    <!-- Twitter Meta Tags-->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="sidepieceapp.com">
    <meta property="twitter:url" content="https://sidepieceapp.com/">
    <meta name="twitter:title" content="Sidepiece">
    <meta name="twitter:description" content="Find what you’re looking for on SIDEPIECE. We cater to your desires. Chat with other side piece members from your neighborhood to all across the globe.">
    <meta name="twitter:image" content="https://sidepieceapp.comundefined">
</head>

<body>

    <div class="content-top">
        <div class="wrapper-content-top">
            <p class="content-top-logo">SIDEPIECE</p>
        </div>
    </div>

    <div class="page">
        <?php
        include './component/sidebar.php';
        ?>
        <div class="content">
            <div class="block">
                <div class="block-item block-home active" data-block="#home">
                    <h2 class="block-home-title">
                        Making dreams come true is risqué business...
                    </h2>
                    <div class="block-home-content">
                        <div class="wrapper-block-home-content-photo">
                            <p class="wrapper-block-home-content-photo-title">Millions of people like you are looking for a discreet, fun connection.</p>
                            <p class="wrapper-block-home-content-photo-description">Every day, people like you join Sidepiece to find fun, spontaneous and discreet relationships of
                                all kinds, looking for a hookup, married, attached, exploring, or just curious to discover what's
                                out there.<br> - Sidepiece is the leading discreet, like-minded dating application in the world.</p>
                        </div>
                        <div class="block-home-content-photo">
                            <div class="wrapper-block-home-content-photo-img">
                                <picture>
                                    <source srcset="./images/mobile-main-1.webp" type="image/webp">
                                    <source srcset="./images/mobile-main-1.jpg" type="image/jpeg">
                                    <img class="block-home-content-photo-img" src="./images/mobile-main-1.jpg" alt="About Photo">
                                </picture>
                            </div>
                            <div class="block-home-content-photo-button">
                                <picture>
                                    <source srcset="./images/mobile-main-2.webp" type="image/webp">
                                    <source srcset="./images/mobile-main-2.jpg" type="image/jpeg">
                                    <img class="block-home-content-photo-img" src="./images/mobile-main-2.jpg" alt="About Photo">
                                </picture>
                                <picture>
                                    <source srcset="./images/text-main-2.webp" type="image/webp">
                                    <source srcset="./images/text-main-2.jpg" type="image/jpeg">
                                    <img class="block-home-content-photo-img-text" src="./images/text-main-2.jpg" alt="About Text Image">
                                </picture>
                                <div class="wrapper-block-home-content-btn">
                                    <div class="block-home-content-app-btn">
                                        <a href="https://apps.apple.com/us/app/Sidepiece-gay-dating-chat/id1581642080">
                                            <picture>
                                                <source srcset="./images/app-btn.webp" type="image/webp">
                                                <source srcset="./images/app-btn.jpg" type="image/jpeg">
                                                <img class="desktop" src="./images/app-btn.jpg" alt="Play Market">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="block-home-content-google-btn">
                                        <a href="https://play.google.com/store/apps/details?id=com.Sidepiecedatingapp">
                                            <picture>
                                                <source srcset="./images/google-btn.webp" type="image/webp">
                                                <source srcset="./images/google-btn.jpg" type="image/jpg">
                                                <img class="desktop" src="./images/google-btn.jpg" alt="Play Market">
                                            </picture>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-item block-about" data-block="#about">
                    <div class="wrapper-block-about-content">
                        <div class="block-about-content-photo">
                            <div class="wrapper-block-about-content-photo">
                                <picture>
                                    <source srcset="./images/about-photo.webp" type="image/webp">
                                    <source srcset="./images/about-photo.jpg" type="image/jpg">
                                    <img src="./images/about-photo.jpg" alt="About Photo">
                                </picture>

                            </div>
                        </div>

                    </div>
                    <div class="wrapper-block-about-top-content">
                        <div class="block-about-top-content">
                            <h2 class="block-about-title">
                                About us
                            </h2>
                            <p class="block-about-description">
                                People have Sidepieces for all sorts of reasons. <br>The spark in their relationships may have dimmed. Some are addicted to “the chase” because the feeling of getting away with something stimulates their adrenaline. Monogamy isn’t for everyone, and most partners fear discussing ideas of open relationships. Here at SIDEPIECE, we provide a platform where you can leave your worries outside. Enter a new world and explore a playground with all sorts of fetishes and fantasies.</p>
                            <div class="block-about-content-photo-mobile">
                                <div class="wrapper-block-about-content-photo-mobile">
                                    <picture>
                                        <source srcset="./images/about-photo.webp" type="image/webp">
                                        <source srcset="./images/about-photo.jpg" type="image/jpg">
                                        <img src="./images/about-photo.jpg" alt="About Photo">
                                    </picture>
                                </div>
                            </div>
                            <h3 class="block-about-bottom-title">
                                WELCOME TO SIDEPIECE, THE MODERN PLAYGROUND FOR 18+
                            </h3>
                            <p class="block-about-bottom-description">
                                Whatever brings you to Sidepiece you can feel safe knowing that you’re not alone. Our members are attached and seeking a connection. Many are attached and seeking something like-minded or polyamory. They are here looking for online flirtation, for something exciting, for someone with a mutual feeling. They are students, lonely housewives and married men, singles, office workers, tradespeople, entrepreneurs, retirees, and everyone in between.</p>

                        </div>
                    </div>
                </div>

                <div class="block-item block-help" data-block="#help">
                    <div class="block-help-content">
                        <p class="block-help-content-title">How can we help you?</p>
                        <div class="block-help-content-tabs">
                            <div class="block-help-content-tab-item" data-helpchoose="guide">
                                <div class="block-help-content-tab-item-front">
                                    <p class="block-help-content-tab-item-text">The Side Piece Guide</p>
                                    <!-- <picture>
                     <source srcset="./images/help-1.webp" type="image/webp">
                       <source srcset="./images/help-1.jpg" type="image/jpg">
                     <img class="block-help-content-tab-img-desktop" src="./images/help-1.jpg" alt="Photo Help">
                </picture>
                <picture>
                   <source srcset="./images/help-1-mobile.webp" type="image/webp">
                        <source srcset="./images/help-1-mobile.jpg" type="image/jpg">
                   <img class="block-help-content-tab-img-mobile" src="./images/help-1-mobile.jpg" alt="Photo Help">
                </picture>-->
                                </div>
                                <div class="block-help-content-tab-item-content">
                                    <p class="block-help-content-tab-item-content-title">The Sidepiece Guide/p>
                                    <div class="block-help-content-tab-item-content-tab">
                                        <ul>
                                            <li>What is Sidepiece?</li>
                                            <li>Creating an account</li>
                                            <li>Sidepiece +</li>
                                            <li>Language preferences</li>
                                            <li>Building your profile</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="block-help-content-tab-item" data-helpchoose="troubleshooting">
                                <div class="block-help-content-tab-item-front">
                                    <p class="block-help-content-tab-item-text">Troubleshooting</p>
                                    <!-- <picture>
                                      <source srcset="./images/help-2.webp" type="image/webp">
                                          <source srcset="./images/help-2.jpg" type="image/jpg">
                                    <img class="block-help-content-tab-img-desktop" src="./images/help-2.jpg" alt="Photo Help">
                                  </picture>
                                    <picture>
                                       <source srcset="./images/help-2-mobile.webp" type="image/webp">
                                            <source srcset="./images/help-2-mobile.jpg" type="image/jpg">
                                         <img class="block-help-content-tab-img-mobile" src="./images/help-2-mobile.jpg" alt="Photo Help">
                                    </picture> -->
                                </div>
                            </div>
                            <div class="block-help-content-tab-item" data-helpchoose="safety">
                                <div class="block-help-content-tab-item-front">
                                    <p class="block-help-content-tab-item-text">Safety and
                                        Privacy</p>
                                    <!--   <picture>
                                          <source srcset="./images/help-3.webp" type="image/webp">
                                           <source srcset="./images/help-3.jpg" type="image/jpg">
                                          <img class="block-help-content-tab-img-desktop" src="./images/help-3.jpg" alt="Photo Help">
                                        </picture>
                                        <picture>
                                           <source srcset="./images/help-3-mobile.webp" type="image/webp">
                                             <source srcset="./images/help-3-mobile.webp" type="image/webp">
                                           <img class="block-help-content-tab-img-mobile" src="./images/help-3-mobile.webp" alt="Photo Help">
                                         </picture>-->
                                </div>
                            </div>
                            <div class="block-help-content-tab-item" data-helpchoose="support">
                                <div class="block-help-content-tab-item-front">
                                    <p class="block-help-content-tab-item-text">Support</p>
                                    <!--   <picture>
                                    <source srcset="./images/help-4.webp" type="image/webp">
                                    <source srcset="./images/help-4.jpg" type="image/jpg">
                                     <img class="block-help-content-tab-img-desktop" src="./images/help-4.jpg" alt="Photo Help">
                                </picture>
                                  <picture>
                                     <source srcset="./images/help-4-mobile.webp" type="image/webp">
                                        <source srcset="./images/help-4-mobile.jpg" type="image/jpg">
                                <img class="block-help-content-tab-img-mobile" src="./images/help-4-mobile.jpg" alt="Photo Help">
                                  </picture> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-help-content-choose-tabs">
                        <div class="block-help-content-choose-tab" data-aboutchoosetab="guide">
                            <p class="block-help-content-title-tab">The Sidepiece Guide</p>
                            <div class="block-help-content-row">
                                <ul class="block-help-content-row-list guide">
                                    <li class="block-help-content-row-list-item minus" data-helpchooseitem="whatSidepiece"><span>What is Sidepiece?</span><span class="icon-plus"></span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="whatSidepiece">
                                        <p class="block-help-content-row-container-text">What is Sidepiece?</p>
                                        <p class="block-help-content-row-container-text">Sidepiece is the leading discreet, like minded dating application in the world. You can chat via Sidepiece’s messaging system; the chats are transmitted within Sidepiece’s platform. You may send messages containing text, images, video, and voice.  Upon opening the application, you are presented with a grid, or cascade, of other members who are sorted by distance.  Sidepiece collects your location information within a 100m radius of accuracy.  You have the option to "Show Distance," which will display an approximate calculation of the distance between you and other members (i.e. relative distance between one user to another).  Even if "Show Distance" is off, your relative distance is used to arrange the cascade based on distance.</p>
                                        <p class="block-help-content-row-container-text">You can select any profile in the cascade to view that person's images, profile information, send a message. You can select certain filters to help identify people nearby that they may wish to interact with (i.e. age, body type, etc.).  You may subscribe to our premium service which provides more features, including the ability to apply multiple filters.</p>
                                        <p class="block-help-content-row-container-text">The "Explore" feature allows you to search in a different geographic area (other than where the searching user is located) to find new people to connect with within that other region. Everyone has the ability to search using Explore; however, only our premium service subscribers have the ability to interact with Sidepiece users found in Explore.  Everyone on Sidepiece has the option of opting in to and out of appearing in Explore searches by toggling "Show me on Explore searches" from the Sidepiece settings page.</p>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="creating"><span>Creating an account</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="creating">
                                        <p class="block-help-content-row-container-text">Welcome to Sidepiece! Below you'll find steps for getting
                                            your profile off the ground. That said, if you're still having trouble getting started, get in touch
                                            with us here.</p>
                                        <p class="block-help-content-row-container-text">First things first, you’ll have to download the Sidepiece
                                            app on your device:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>iOS: Download
                                                <a class="block-help-content-link" href="https://apps.apple.com/us/app/Sidepiece-gay-dating-chat/id1581642080">Sidepiece here</a>
                                            </li>
                                            <li>Android: Download
                                                <a class="block-help-content-link" href="https://play.google.com/store/apps/details?id=com.Sidepiecedatingapp">Sidepiece here</a>
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">Once you've downloaded and opened the app, you will
                                            tap "Sign Up”, you will see two pop-ups: our Terms of Service and our Privacy Policy. Should you
                                            choose to accept, you'll be able to continue with your account creation using any of the options
                                            listed below. </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Email & password</li>
                                            <li>Facebook</li>
                                            <li>Google</li>
                                            <li>Apple ID (for iOS)</li>
                                            <li>Accessing data and chats</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text-bold">Email & password </p>
                                        <p class="block-help-content-row-container-text">Creating a Sidepiece account using your email is easy!
                                            Here are the steps:</p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. we must keep it to comply with applicable law (for instance,
                                                some
                                                “traffic data” is kept for
                                                one year to comply with statutory data retention obligations);</p>
                                            <p class="terms-text">2. we must keep it to evidence our compliance with applicable law
                                                (for instance, records of
                                                consents to our Terms, Privacy Policy and other similar consents are kept for five
                                                years);</p>
                                            <p class="terms-text">3. there is an outstanding issue, claim or dispute requiring us
                                                to
                                                keep the relevant
                                                information until it is resolved; </p>
                                            <p class="terms-text">4.
                                                the information must be kept for our legitimate business interests, such as fraud
                                                prevention
                                                and enhancing users' safety and security. For example, information may need to be
                                                kept
                                                to
                                                prevent a user who was banned for unsafe behavior or security incidents from opening
                                                a
                                                new
                                                account.</p>
                                        </div>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Manually type in the email address you'd like to
                                                use.</p>
                                            <p class="terms-text">2. Create a password.</p>
                                            <p class="terms-text">3. Confirm your password.</p>
                                            <p class="terms-text">4. Scroll to select your Date of Birth.</p>
                                            <p class="terms-text">5. Select Finish.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">We'll ask you to prove you're not a robot, and then
                                            you're free to make your profile!</p>
                                        <p class="block-help-content-row-container-text-bold">Facebook </p>
                                        <p class="block-help-content-row-container-text">If you'd like to create your account through
                                            Facebook, you can follow the steps below:</p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Select the Facebook icon.</p>
                                            <p class="terms-text">2. Your device should notify you that Sidepiece wants to use Facebook.com to sign
                                                in.</p>
                                            <p class="terms-text">3. If you’ve selected Facebook from the login page and you do not already
                                                have a Sidepiece account, you'll see a pop-up of our Terms of Service and Privacy Policy. </p>
                                            <p class="terms-text">4. Should you choose to accept, you’ll be able to proceed with creating the
                                                account.</p>
                                            <p class="terms-text">5. Select Countinue.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If Facebook is not
                                            installed on your device, the app will redirect you to a mobile web browser for login authorization.
                                            Once you've logged in and authorized your Facebook account for use, Sidepiece will log you in to your
                                            profile
                                        </p>
                                        <p class="block-help-content-row-container-text-bold">Google</p>
                                        <p class="block-help-content-row-container-text">If you choose to use your Google account to create
                                            your Sidepiece account, here's what you need to do:
                                        </p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Select the Google icon.</p>
                                            <p class="terms-text">2. If you’ve selected Google from the login page and you do not already have
                                                a Sidepiece account, you'll see a pop-up of our Terms of Service and Privacy Policy</p>
                                            <p class="terms-text">3. Should you choose to accept, you’ll be able to proceed with creating the
                                                account.</p>
                                            <p class="terms-text">4. Select the Google account you'd like to use.</p>
                                            <p class="terms-text">5. Select Next.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If Google is not
                                            installed on your device, it will direct you to the browser for login authorization. When your
                                            Google account already exists in Sidepiece's account system, select the account you used to create the
                                            previous profile and it will log you in to your existing profile. If you select a new Google
                                            account, it will create a new profile.
                                        </p>
                                        <p class="block-help-content-row-container-text-bold">Apple ID (for iOS)</p>
                                        <p class="block-help-content-row-container-text">Before using your Apple ID to sign in, make sure you
                                            have the latest version of our app, and that you're logged in to your Apple ID.</p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Select Sign In with Apple.</p>
                                            <p class="terms-text">2. If you’ve selected Apple from the login page and you do not already have a
                                                Sidepiece account, you'll see a pop-up of our Terms of Service and Privacy Policy.</p>
                                            <p class="terms-text">3. Should you choose to accept, you’ll be able to proceed with creating the
                                                account.</p>
                                            <p class="terms-text">4. If you are using an Apple device that has Touch ID or Face ID, you can use
                                                both these features or enter in your details manually.</p>
                                            <p class="terms-text">5. If you choose to do it manually, then enter your Apple ID email. </p>
                                            <p class="terms-text">6. Enter your Apple ID password.</p>
                                            <p class="terms-text">7. Tap on continue.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If your Apple ID is
                                            attached to a pre-existing account, you will automatically be logged into that account. Our Support
                                            Team cannot change passwords for you if you forget them. Make sure you log in using the same Apple
                                            ID you used when creating your Sidepiece account
                                        </p>
                                        <p class="block-help-content-row-container-text-bold">Accessing data and chats</p>
                                        <p class="block-help-content-row-container-text">After creating and accessing your account on a
                                            supported device, you will retain access to your data, account, and chats. That said, we do
                                            recommend regularly making a backup of your chat history to ensure its safety from any loss.</p>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="Sidepiece"><span>Quickie membership</span></li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="Sidepiece">
                                        <p class="block-help-content-row-container-text">You're traveling to NYC for the weekend; you're bored and horny and alone in your hotel room;
                                            it's 1:00 A.M when it. It comes to pleasure, every minute counts, and you can't afford to waste
                                            time - or have your spouse or friends see you on SidePiece.</p>
                                        <p class="block-help-content-row-container-text">Introducing QUICKIE, the most convenient and discreet experience ever, offering our most
                                            exclusive features:</p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Moods</span> — See who's checking you out.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Unsend</span>— Undo sent messages and photos.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Collaborating Playfully</span>— Work hard, play hard—it's all about balance.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Incognito</span>— Browse without being seen.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Typing Status</span>— Know when someone's messaging you.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Unlimited Profiles</span>— Always find a fresh face.
                                        </p>


                                        <p class="block-help-content-row-container-text title-bold">Newest features exclusive
                                            to QUICKIE Membership</p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Expiring Photos</span> — Send pics that
                                            disappear from others’ phones after one 10-second view.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Chat Translate</span>— Detects other users' language and translates it for you.
                                        </p>
                                        <p class="block-help-content-row-container-text title-bold">
                                            And ALL these features come with QUICKIE Membership.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            Endless possibility. Infinite connection. Total discretion. With QUICKIE Membership, nothing will delay your satisfaction any longer.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            QUICKIE Membership is now available on iOS and Android.
                                        </p>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="language"><span>Language preferences</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="language">
                                        <p class="block-help-content-row-container-text">Sidepiece is a global community connector, and we aim
                                            to
                                            provide a great experience for everyone. Here in this language article, you will find the
                                            following:</p>
                                        <p class="block-help-content-row-container-text title-bold">
                                            Side Piece supported languages
                                        </p>
                                        <p class="block-help-content-row-container-text">Sidepiece supports the following languages, based on
                                            your
                                            operating system:</p>
                                        <p class="block-help-content-row-container-text subtitle">
                                            iOS
                                        </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>English</li>
                                            <li>German</li>
                                            <li>Spanish (Latin America)</li>
                                            <li>French</li>
                                            <li>Italian</li>
                                            <li>Japanese</li>
                                            <li>Portuguese (Brazil)</li>
                                            <li>Simplified Chinese</li>
                                            <li>Traditional Chinese</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text subtitle">
                                            Android
                                        </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>English</li>
                                            <li>Arabic</li>
                                            <li>Bengali (India)</li>
                                            <li>German</li>
                                            <li>Spanish (Latin America)</li>
                                            <li>Tagalog</li>
                                            <li>French</li>
                                            <li>Hindi (India)</li>
                                            <li>Italian</li>
                                            <li>Japanese</li>
                                            <li>Korean</li>
                                            <li>Malay</li>
                                            <li>Portuguese (Brazil)</li>
                                            <li>Russian</li>
                                            <li>Swahili</li>
                                            <li>Telugu (India)</li>
                                            <li>Thai</li>
                                            <li>Vietnamese</li>
                                            <li>Simplified Chinese</li>
                                            <li>Traditional Chinese</li>
                                            <li>Indonesian</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text title-bold">
                                            Changing your language preference
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            To change your Sidepiece language from English to another supported language, follow the steps below
                                            based on your device type.
                                        </p>
                                        <p class="block-help-content-row-container-text subtitle">
                                            iOS:
                                        </p>
                                        <ul class="block-help-content-row-container-list">
                                            <li>1. Open your Settings.</li>
                                            <li>2. Select General.</li>
                                            <li>3. Select Language & Region.</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> The language you set for your
                                            device will always occupy the number one spot in your list of
                                            preferred languages.
                                            Under Preferred Language Order, your preferred language will need to be the primary language in
                                            the
                                            list for Sidepiece to appear in that language.
                                        </p>
                                        <p class="block-help-content-row-container-text subtitle">
                                            Android:
                                        </p>
                                        <ul class="block-help-content-row-container-list">
                                            <li>1. Open your Settings.</li>
                                            <li>2. Select Language and Input.</li>
                                            <li>3. Select Language.</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If the language you select is
                                            not supported in your device’s preferred languages, then you
                                            will see the app in English by default.
                                        </p>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="building"><span>Building your profile</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="building">
                                        <p class="block-help-content-row-container-text">Your profile is your first impression! This article
                                            outlines the various profile fields available for you to complete -- note that each of these
                                            fields
                                            is optional, but we find that more complete profiles usually gain the most attention. Basics Stats
                                            Expectations I'm Looking For Meet At Accepting NSFW Pics Identity Sexual health Social links
                                            Related
                                            articles Basics To edit your profile information, you simply log in, tap on your profile and
                                            select
                                            "Edit Profile".
                                        </p>
                                        <p class="block-help-content-row-container-text"> The first thing you'll find in "Edit Profile" is
                                            that you get to create a "Display
                                            Name" and a brief description of who you are in "About Me". Your display name can be letters,
                                            numbers, special characters, and even emojis, but it has to be between 0 - 15 characters. You have
                                            0
                                            - 225 characters to play around with when describing yourself in "About Me". We'd never limit you
                                            to
                                            just letters and numbers; you can also use special characters & emojis. Stats The following are
                                            all
                                            the fields that you can find listed under the Stats section. </p>
                                        <p class="block-help-content-row-container-text">We'll leave it up to you to decide
                                            what
                                            you'd like to fill in -- it's all optional. Show Age: Toggle this on or off if you'd like to show
                                            your age. Age Height Weight Body Type (Toned, Average, Slim, Muscular, Large): choose Do Not Show
                                            if
                                            you want this to remain anonymous. Position [Top, Vers, Bottom, or Side (aka, no penetration)]:
                                            choose Do Not Show if you want this to remain anonymous. Ethnicity: This field indicates your
                                            racial
                                            identity e.g. Asian, Black, Mixed, Caucasian, Latino, etc. Relationship Status: This field
                                            indicates
                                            what type of relationship you're in e.g. single, committed, dating, partnered, open relationship,
                                            etc. My Tribes: Tribes are a sub-communities of folks who identify largely based on their
                                            presentation (e.g. Bear, Daddy, Discreet, Rugged, Twink, Geek, etc.)</p>
                                        <p class="block-help-content-row-container-text"> Expectations The Expectations
                                            section of your profile gives other people an idea of what you're looking for on Sidepiece. There are
                                            three fields under this section: I'm Looking For Meet At Accepts NSFW Pics I'm Looking For The
                                            "I'm
                                            Looking For" field allows you to let others know what types of connections you're open to. You can
                                            select one option or multiple options from the list below: Chat Dates Friends Networking
                                            Relationship Right Now Meet At This field allows you to specify where you prefer to meet others.
                                            Most people use this field to indicate whether or not they can host at their place. Scroll down to
                                            the Expectations heading. Select Meet At. You can choose between the following options: My Place -
                                            you prefer to host. Your Place - you prefer to be hosted.</p>
                                        <p class="block-help-content-row-container-text"> Bar Coffee Shop Restaurant Select Done
                                            and
                                            then Save your profile changes. Accepting NSFW Pics NSFW stands for Not Safe For Work, and this
                                            field allows you to set expectations for the kind of messages you're open to receiving. Scroll
                                            down
                                            to the Expectations heading. Select Accepts NSFW Pics. You can choose between the following
                                            options:
                                            Do Not Show - this field will NOT be visible on your profile. Never Not At First Yes Please Select
                                            Done and then Save your profile changes. Identity This section helps others understand how you
                                            identify. Sharing your gender identity and your pronouns aids in communication between you and
                                            others, and allows everyone to be who they are. Gender Man: Man, Cis Man, Trans Man, or Custom.
                                            Woman: Woman, Cis Woman, Tran Woman, or Custom. Non-Binary: Non-Binary, Non-Conforming, Queer,
                                            Crossdresser, or Custom.</p>
                                        <p class="block-help-content-row-container-text">Pronouns He/Him/His She/Her/Hers They/Them/Theirs
                                            Custom Pronouns Sexual
                                            health This section is all about knowing your health status and sharing that information with
                                            others
                                            if you so choose. Below are all the fields you'll find in this section: HIV Status Last Tested
                                            Date
                                            Testing Reminders Sexual Health FAQ Social links Social links allow you to personalize your
                                            profile
                                            even more, by adding other social media profiles to your Sidepiece profile. If you choose to do this,
                                            other users will be able to read your profile and tap on your social media links to check out your
                                            other pages. The options for this section are: Instagram Spotify: Add some of your favorite music.
                                            Twitter Facebook Note: Please always be careful when sharing your social media and personal
                                            information.</p>
                                    </li>
                                </ul>
                                <div class="block-help-content-row-wrapper guide">
                                    <div class="block-help-content-row-wrapper-container active" data-helpchoosecontent="whatSidepiece">
                                        <p class="block-help-content-row-container-text">What is Sidepiece?</p>
                                        <p class="block-help-content-row-container-text">Sidepiece is the leading discreet, like minded dating application in the world. You can chat via Sidepiece’s messaging system; the chats are transmitted within Sidepiece’s platform. You may send messages containing text, images, video, and voice.  Upon opening the application, you are presented with a grid, or cascade, of other members who are sorted by distance.  Sidepiece collects your location information within a 100m radius of accuracy.  You have the option to "Show Distance," which will display an approximate calculation of the distance between you and other members (i.e. relative distance between one user to another).  Even if "Show Distance" is off, your relative distance is used to arrange the cascade based on distance.</p>
                                        <p class="block-help-content-row-container-text">You can select any profile in the cascade to view that person's images, profile information, send a message. You can select certain filters to help identify people nearby that they may wish to interact with (i.e. age, body type, etc.).  You may subscribe to our premium service which provides more features, including the ability to apply multiple filters.</p>
                                        <p class="block-help-content-row-container-text">The "Explore" feature allows you to search in a different geographic area (other than where the searching user is located) to find new people to connect with within that other region. Everyone has the ability to search using Explore; however, only our premium service subscribers have the ability to interact with Sidepiece users found in Explore.  Everyone on Sidepiece has the option of opting in to and out of appearing in Explore searches by toggling "Show me on Explore searches" from the Sidepiece settings page.</p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="creating">
                                        <p class="block-help-content-row-container-text">Welcome to Sidepiece! Below you'll find steps for getting
                                            your profile off the ground. That said, if you're still having trouble getting started, get in touch
                                            with us here.</p>
                                        <p class="block-help-content-row-container-text">First things first, you’ll have to download the Sidepiece
                                            app on your device:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>iOS: Download
                                                <a class="block-help-content-link" href="https://apps.apple.com/us/app/Sidepiece-gay-dating-chat/id1581642080">Sidepiece here</a>
                                            </li>
                                            <li>Android: Download
                                                <a class="block-help-content-link" href="https://play.google.com/store/apps/details?id=com.Sidepiecedatingapp">Sidepiece here</a>
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">Once you've downloaded and opened the app, you will
                                            tap "Sign Up”, you will see two pop-ups: our Terms of Service and our Privacy Policy. Should you
                                            choose to accept, you'll be able to continue with your account creation using any of the options
                                            listed below. </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Email & password</li>
                                            <li>Facebook</li>
                                            <li>Google</li>
                                            <li>Apple ID (for iOS)</li>
                                            <li>Accessing data and chats</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text-bold">Email & password </p>
                                        <p class="block-help-content-row-container-text">Creating a Sidepiece account using your email is easy!
                                            Here are the steps:</p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. we must keep it to comply with applicable law (for instance,
                                                some
                                                “traffic data” is kept for
                                                one year to comply with statutory data retention obligations);</p>
                                            <p class="terms-text">2. we must keep it to evidence our compliance with applicable law
                                                (for instance, records of
                                                consents to our Terms, Privacy Policy and other similar consents are kept for five
                                                years);</p>
                                            <p class="terms-text">3. there is an outstanding issue, claim or dispute requiring us
                                                to
                                                keep the relevant
                                                information until it is resolved; </p>
                                            <p class="terms-text">4.
                                                the information must be kept for our legitimate business interests, such as fraud
                                                prevention
                                                and enhancing users' safety and security. For example, information may need to be
                                                kept
                                                to
                                                prevent a user who was banned for unsafe behavior or security incidents from opening
                                                a
                                                new
                                                account.</p>
                                        </div>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Manually type in the email address you'd like to
                                                use.</p>
                                            <p class="terms-text">2. Create a password.</p>
                                            <p class="terms-text">3. Confirm your password.</p>
                                            <p class="terms-text">4. Scroll to select your Date of Birth.</p>
                                            <p class="terms-text">5. Select Finish.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">We'll ask you to prove you're not a robot, and then
                                            you're free to make your profile!</p>
                                        <p class="block-help-content-row-container-text-bold">Facebook </p>
                                        <p class="block-help-content-row-container-text">If you'd like to create your account through
                                            Facebook, you can follow the steps below:</p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Select the Facebook icon.</p>
                                            <p class="terms-text">2. Your device should notify you that Sidepiece wants to use Facebook.com to sign
                                                in.</p>
                                            <p class="terms-text">3. If you’ve selected Facebook from the login page and you do not already
                                                have a Sidepiece account, you'll see a pop-up of our Terms of Service and Privacy Policy. </p>
                                            <p class="terms-text">4. Should you choose to accept, you’ll be able to proceed with creating the
                                                account.</p>
                                            <p class="terms-text">5. Select Countinue.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If Facebook is not
                                            installed on your device, the app will redirect you to a mobile web browser for login authorization.
                                            Once you've logged in and authorized your Facebook account for use, Sidepiece will log you in to your
                                            profile
                                        </p>
                                        <p class="block-help-content-row-container-text-bold">Google</p>
                                        <p class="block-help-content-row-container-text">If you choose to use your Google account to create
                                            your Sidepiece account, here's what you need to do:
                                        </p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Select the Google icon.</p>
                                            <p class="terms-text">2. If you’ve selected Google from the login page and you do not already have
                                                a Sidepiece account, you'll see a pop-up of our Terms of Service and Privacy Policy</p>
                                            <p class="terms-text">3. Should you choose to accept, you’ll be able to proceed with creating the
                                                account.</p>
                                            <p class="terms-text">4. Select the Google account you'd like to use.</p>
                                            <p class="terms-text">5. Select Next.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If Google is not
                                            installed on your device, it will direct you to the browser for login authorization. When your
                                            Google account already exists in Sidepiece's account system, select the account you used to create the
                                            previous profile and it will log you in to your existing profile. If you select a new Google
                                            account, it will create a new profile.
                                        </p>
                                        <p class="block-help-content-row-container-text-bold">Apple ID (for iOS)</p>
                                        <p class="block-help-content-row-container-text">Before using your Apple ID to sign in, make sure you
                                            have the latest version of our app, and that you're logged in to your Apple ID.</p>
                                        <div class="terms-content-list">
                                            <p class="terms-text">1. Select Sign In with Apple.</p>
                                            <p class="terms-text">2. If you’ve selected Apple from the login page and you do not already have a
                                                Sidepiece account, you'll see a pop-up of our Terms of Service and Privacy Policy.</p>
                                            <p class="terms-text">3. Should you choose to accept, you’ll be able to proceed with creating the
                                                account.</p>
                                            <p class="terms-text">4. If you are using an Apple device that has Touch ID or Face ID, you can use
                                                both these features or enter in your details manually.</p>
                                            <p class="terms-text">5. If you choose to do it manually, then enter your Apple ID email. </p>
                                            <p class="terms-text">6. Enter your Apple ID password.</p>
                                            <p class="terms-text">7. Tap on continue.</p>
                                        </div>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If your Apple ID is
                                            attached to a pre-existing account, you will automatically be logged into that account. Our Support
                                            Team cannot change passwords for you if you forget them. Make sure you log in using the same Apple
                                            ID you used when creating your Sidepiece account
                                        </p>
                                        <p class="block-help-content-row-container-text-bold">Accessing data and chats</p>
                                        <p class="block-help-content-row-container-text">After creating and accessing your account on a
                                            supported device, you will retain access to your data, account, and chats. That said, we do
                                            recommend regularly making a backup of your chat history to ensure its safety from any loss.</p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="Sidepiece">
                                        <p class="block-help-content-row-container-text">Your weekend is already booked: you’ve got a meeting
                                            with clients in an 1 hour, drinks at brunch with friends after, and a flight to Miami in the
                                            morning. When it comes to your success, every minute counts, and you can’t afford to waste time—or
                                            have your clients see you in the grid during a quick check on Sidepiece.</p>
                                        <p class="block-help-content-row-container-text">Introducing QUICKIE Membership, the most convenient and discreet experience ever, offering our most exclusive features:</p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Moods</span>— See who's checking you out.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Unsend</span>— Undo sent messages and photos.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Incognito</span>— Browse without being seen.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Typing Status</span>— Know when someone’s
                                            messaging you
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Unlimited Profiles</span>— Always find a fresh
                                            face.
                                        </p>
                                        <p class="block-help-content-row-container-text title-bold">Newest features exclusive
                                            to QUICKIE Membership</p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Expiring Photos</span> — Send pics that
                                            disappear from others’ phones after one 10-second view.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Chat Translate</span>— Detects other users’
                                            language and translates for you.
                                        </p>
                                        <p class="block-help-content-row-container-text title-bold">
                                            And ALL these features come with QUICKIE Membership.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            Endless possibility. Infinite connection. Total discretion. With QUICKIE Membership, nothing will delay your satisfaction any longer.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            QUICKIE Membership is now available on iOS and Android.
                                        </p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="language">
                                        <p class="block-help-content-row-container-text">Sidepiece is a global community connector, and we aim to
                                            provide a great experience for everyone. Here in this language article, you will find the
                                            following:</p>
                                        <p class="block-help-content-row-container-text title-bold">
                                            Side Piece supported languages
                                        </p>
                                        <p class="block-help-content-row-container-text">Sidepiece supports the following languages, based on your
                                            operating system:</p>
                                        <p class="block-help-content-row-container-text subtitle">
                                            iOS
                                        </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>English</li>
                                            <li>German</li>
                                            <li>Spanish (Latin America)</li>
                                            <li>French</li>
                                            <li>Italian</li>
                                            <li>Japanese</li>
                                            <li>Portuguese (Brazil)</li>
                                            <li>Simplified Chinese</li>
                                            <li>Traditional Chinese</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text subtitle">
                                            Android
                                        </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>English</li>
                                            <li>Arabic</li>
                                            <li>Bengali (India)</li>
                                            <li>German</li>
                                            <li>Spanish (Latin America)</li>
                                            <li>Tagalog</li>
                                            <li>French</li>
                                            <li>Hindi (India)</li>
                                            <li>Italian</li>
                                            <li>Japanese</li>
                                            <li>Korean</li>
                                            <li>Malay</li>
                                            <li>Portuguese (Brazil)</li>
                                            <li>Russian</li>
                                            <li>Swahili</li>
                                            <li>Telugu (India)</li>
                                            <li>Thai</li>
                                            <li>Vietnamese</li>
                                            <li>Simplified Chinese</li>
                                            <li>Traditional Chinese</li>
                                            <li>Indonesian</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text title-bold">
                                            Changing your language preference
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            To change your Sidepiece language from English to another supported language, follow the steps below
                                            based on your device type.
                                        </p>
                                        <p class="block-help-content-row-container-text subtitle">
                                            iOS:
                                        </p>
                                        <ul class="block-help-content-row-container-list">
                                            <li>1. Open your Settings.</li>
                                            <li>2. Select General.</li>
                                            <li>3. Select Language & Region.</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> The language you set for your
                                            device will always occupy the number one spot in your list of
                                            preferred languages.
                                            Under Preferred Language Order, your preferred language will need to be the primary language in the
                                            list for Sidepiece to appear in that language.
                                        </p>
                                        <p class="block-help-content-row-container-text subtitle">
                                            Android:
                                        </p>
                                        <ul class="block-help-content-row-container-list">
                                            <li>1. Open your Settings.</li>
                                            <li>2. Select Language and Input.</li>
                                            <li>3. Select Language.</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">
                                            <span class="block-help-content-row-container-text-bold">Note: </span> If the language you
                                            select is not supported in your device’s preferred languages, then you
                                            will see the app in English by default.
                                        </p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="building">
                                        <p class="block-help-content-row-container-text">Your profile is your first impression! This article
                                            outlines the various profile fields available for you to complete -- note that each of these
                                            fields
                                            is optional, but we find that more complete profiles usually gain the most attention.
                                        </p>
                                        <p class="block-help-content-row-container-text">Basics Stats
                                            Expectations I'm Looking For Meet At Accepting NSFW Pics Identity Sexual health Social links
                                            Related
                                            articles Basics To edit your profile information, you simply log in, tap on your profile and
                                            select
                                            "Edit Profile". </p>
                                        <p class="block-help-content-row-container-text"> The first thing you'll find in "Edit Profile" is
                                            that you get to create a "Display
                                            Name" and a brief description of who you are in "About Me". Your display name can be letters,
                                            numbers, special characters, and even emojis, but it has to be between 0 - 15 characters. You have
                                            0
                                            - 225 characters to play around with when describing yourself in "About Me". </p>
                                        <p class="block-help-content-row-container-text">We'd never limit you
                                            to
                                            just letters and numbers; you can also use special characters & emojis. Stats The following are
                                            all
                                            the fields that you can find listed under the Stats section.</p>
                                        <p class="block-help-content-row-container-text">We'll leave it up to you to decide
                                            what
                                            you'd like to fill in -- it's all optional.</p>
                                        <p class="block-help-content-row-container-text subtitle"> Show Age: </p>
                                        <p class="block-help-content-row-container-text">Toggle this on or off if you'd like to show
                                            your age.</p>
                                        <p class="block-help-content-row-container-text">Age Height Weight Body Type (Toned, Average, Slim,
                                            Muscular, Large):</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>choose Do Not Show
                                                if
                                                you want this to remain anonymous. Position [Top, Vers, Bottom, or Side (aka, no penetration)]:
                                                choose Do Not Show if you want this to remain anonymous.
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">Ethnicity:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>This field indicates your
                                                racial
                                                identity e.g. Asian, Black, Mixed, Caucasian, Latino, etc.
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">Relationship Status:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li> This field
                                                indicates
                                                what type of relationship you're in e.g. single, committed, dating, partnered, open relationship,
                                                etc.
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text"> My Tribes: </p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Tribes are a sub-communities of folks who identify largely based on their
                                                presentation (e.g. Bear, Daddy, Discreet, Rugged, Twink, Geek, etc.)
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text"> Expectations The Expectations
                                            section of your profile gives other people an idea of what you're looking for on Sidepiece. There are
                                            three fields under this section: I'm Looking For Meet At Accepts NSFW Pics I'm Looking For The
                                            "I'm
                                            Looking For" field allows you to let others know what types of connections you're open to. You can
                                            select one option or multiple options from the list below:</p>
                                        <p class="block-help-content-row-container-text">Chat Dates Friends Networking
                                            Relationship Right Now Meet At This field allows you to specify where you prefer to meet others.
                                            Most people use this field to indicate whether or not they can host at their place. Scroll down to
                                            the Expectations heading. Select Meet At. You can choose between the following options:</p>
                                        <p class="block-help-content-row-container-text">
                                            My Place -
                                            you prefer to host. Your Place - you prefer to be hosted.</p>
                                        <p class="block-help-content-row-container-text"> Bar Coffee Shop Restaurant Select Done
                                            and
                                            then Save your profile changes. Accepting NSFW Pics NSFW stands for Not Safe For Work, and this
                                            field allows you to set expectations for the kind of messages you're open to receiving. Scroll
                                            down
                                            to the Expectations heading. Select Accepts NSFW Pics. You can choose between the following
                                            options:
                                            Do Not Show - this field will NOT be visible on your profile. Never Not At First Yes Please Select
                                            Done and then Save your profile changes. Identity This section helps others understand how you
                                            identify. Sharing your gender identity and your pronouns aids in communication between you and
                                            others, and allows everyone to be who they are.
                                        </p>
                                        <p class="block-help-content-row-container-text subtitle"> Gender Man:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Man</li>
                                            <li>Cis Man</li>
                                            <li>Trans Man</li>
                                            <li> or Custom</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text subtitle">Woman:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Woman</li>
                                            <li>Cis Woman</li>
                                            <li>Tran Woman</li>
                                            <li> or Custom</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text subtitle"> Non-Binary:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Non-Binary</li>
                                            <li>Non-Conforming</li>
                                            <li>Queer</li>
                                            <li> Crossdresser</li>
                                            <li> or Custom</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text">Pronouns He/Him/His She/Her/Hers They/Them/Theirs
                                            Custom Pronouns Sexual
                                            health This section is all about knowing your health status and sharing that information with
                                            others
                                            if you so choose. Below are all the fields you'll find in this section: </p>
                                        <p class="block-help-content-row-container-text">
                                            HIV Status Last Tested
                                            Date
                                            Testing Reminders Sexual Health FAQ Social links Social links allow you to personalize your
                                            profile
                                            even more, by adding other social media profiles to your Sidepiece profile. If you choose to do this,
                                            other users will be able to read your profile and tap on your social media links to check out your
                                            other pages.</p>
                                        <p class="block-help-content-row-container-text">The options for this section are:</p>
                                        <p class="block-help-content-row-container-text subtitle"> Instagram Spotify:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li> Add some of your favorite music.</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text subtitle"> Twitter Facebook Note:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li> Please always be careful when sharing your social media and personal
                                                information.
                                            </li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-help-content-choose-tab" data-aboutchoosetab="troubleshooting">
                            <p class="block-help-content-title-tab">Troubleshooting</p>
                            <div class="block-help-content-row">
                                <ul class="block-help-content-row-list troubleshooting">
                                    <li class="block-help-content-row-list-item minus" data-helpchooseitem="report"><span>Report a bug</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="report">
                                        <p class="block-help-content-row-container-text">Oh no!</p>
                                        <p class="block-help-content-row-container-text">We’re sorry that you’re running into a potential
                                            bug
                                            on Sidepiece. If the issue is something that’s already on our radar, you’ll see a blue banner atop
                                            this
                                            page with a status update. If you aren’t seeing this banner, please report what you’re seeing
                                            here.<br>
                                            We appreciate you making a report any time you suspect that you’ve found a bug. Ringing that alarm
                                            bell alerts our team, and allows us to investigate how best to get affected members of our
                                            community
                                            back up and running ASAP.</p>
                                        <p class="block-help-label-title title-input">Send a bug report</p>
                                        <form method="POST" class="block-help-form" id="submit-report-form" autocomplete="off">
                                            <textarea class="block-help-form-input" id="report_message" name="report_message" placeholder="Write your message here" autocomplete="off" required="" oninput="auto_grow(this)"></textarea>
                                            <div class="response"></div>
                                            <div class="block-help-wrapper-btn">
                                                <button type="button" id="submit-report" class="block-help-form-btn">Send report</button>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="censored"><span>Censored countries &
                                            regions</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="censored">
                                        <p class="block-help-content-row-container-text">Restrictions applied to adult content by your
                                            Internet Service Provider administrators can sometimes cause connection issues. Unfortunately, we
                                            have very little control over this as these restrictions are controlled by the government.</p>
                                        <p class="block-help-content-row-container-text"> We recommend either contacting the network
                                            administrator for more details or attempting to connect via another Wi-Fi network or 4G to see if
                                            this is indeed the issue. Internet censorship may prevent members from accessing Sidepiece in the
                                            following countries:</p>
                                        <p class="block-help-content-row-container-text title-bold">Government restricted countries:</p>
                                        <p class="block-help-content-row-container-text">We understand VPNs have been used in these regions
                                            but cannot guarantee that their use will be effective.</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>China
                                            </li>
                                            <li>Indonesia</li>
                                            <li>Turkey</li>
                                            <li>Lebanon (Partial): You may be able to log in from private home wifi networks but not from
                                                cellular networks.
                                            </li>
                                            <li>Qatar (Partial): You may be able to log in from private home wifi networks but not from
                                                cellular
                                                networks.
                                            </li>
                                            <li>United Arab Emirates (Partial): You may be able to log in from private home wifi networks but
                                                not from cellular networks.
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text title-bold">Sanctioned countries:</p>
                                        <p class="block-help-content-row-container-text">Using a VPN here will unfortunately not work,
                                            because
                                            Sidepiece is unavailable in these territories for the time being.</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Iran</li>
                                            <li>Crimea (Occupied region of Ukraine)</li>
                                            <li>Syria</li>
                                            <li>North Korea</li>
                                            <li>Pakistan</li>
                                            <li>Cuba</li>
                                            <li>Sudan</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text title-bold">Countries where Sidepiece is delisted from
                                            the
                                            app store:</p>
                                        <p class="block-help-content-row-container-text"> Saudi Arabia
                                            Note: If you choose to use a VPN please check local laws about VPN usage.
                                        </p>
                                    </li>
                                </ul>
                                <div class="block-help-content-row-wrapper troubleshooting">
                                    <div class="block-help-content-row-wrapper-container active" data-helpchoosecontent="report">
                                        <p class="block-help-content-row-container-text">Oh no!</p>
                                        <p class="block-help-content-row-container-text">We’re sorry that you’re running into a potential bug
                                            on Sidepiece. If the issue is something that’s already on our radar, you’ll see a blue banner atop this
                                            page with a status update. If you aren’t seeing this banner, please report what you’re seeing here. <br>
                                            We appreciate you making a report any time you suspect that you’ve found a bug. Ringing that alarm
                                            bell alerts our team, and allows us to investigate how best to get affected members of our community
                                            back up and running ASAP.</p>
                                        <p class="block-help-label-title title-input">Send a bug report</p>
                                        <form method="POST" class="block-help-form" id="submit-report-form-desktop" autocomplete="off">
                                            <textarea class="block-help-form-input" id="report_second" name="report_second" placeholder="Write your message here" autocomplete="off" required="" oninput="auto_grow(this)">
                           </textarea>
                                            <div class="response"></div>
                                            <div class="block-help-wrapper-btn">
                                                <button type="button" id="submit-report-desktop" class="block-help-form-btn">
                                                    <span>Send report</span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="censored">
                                        <p class="block-help-content-row-container-text">Restrictions applied to adult content by your
                                            Internet Service Provider administrators can sometimes cause connection issues. Unfortunately, we
                                            have very little control over this as these restrictions are controlled by the government.</p>
                                        <p class="block-help-content-row-container-text"> We recommend either contacting the network
                                            administrator for more details or attempting to connect via another Wi-Fi network or 4G to see if
                                            this is indeed the issue. Internet censorship may prevent members from accessing Sidepiece in the
                                            following countries:</p>
                                        <p class="block-help-content-row-container-text title-bold">Government restricted countries:</p>
                                        <p class="block-help-content-row-container-text">We understand VPNs have been used in these regions
                                            but cannot guarantee that their use will be effective.</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>China
                                            </li>
                                            <li>Indonesia</li>
                                            <li>Turkey</li>
                                            <li>Lebanon (Partial): You may be able to log in from private home wifi networks but not from
                                                cellular networks.
                                            </li>
                                            <li>Qatar (Partial): You may be able to log in from private home wifi networks but not from cellular
                                                networks.
                                            </li>
                                            <li>United Arab Emirates (Partial): You may be able to log in from private home wifi networks but
                                                not from cellular networks.
                                            </li>
                                        </ul>
                                        <p class="block-help-content-row-container-text title-bold">Sanctioned countries:</p>
                                        <p class="block-help-content-row-container-text">Using a VPN here will unfortunately not work, because
                                            Sidepiece is unavailable in these territories for the time being.</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Iran</li>
                                            <li>Crimea (Occupied region of Ukraine)</li>
                                            <li>Syria</li>
                                            <li>North Korea</li>
                                            <li>Pakistan</li>
                                            <li>Cuba</li>
                                            <li>Sudan</li>
                                        </ul>
                                        <p class="block-help-content-row-container-text title-bold">Countries where Sidepiece is delisted from the
                                            app store:</p>
                                        <p class="block-help-content-row-container-text"> Saudi Arabia
                                            Note: If you choose to use a VPN please check local laws about VPN usage.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-help-content-choose-tab" data-aboutchoosetab="safety">
                            <p class="block-help-content-title-tab">Safety and Privacy</p>
                            <div class="block-help-content-row">
                                <ul class="block-help-content-row-list safety">
                                    <li class="block-help-content-row-list-item minus" data-helpchooseitem="protect"><span> How can I act anonymously to safeguard my privacy?</span></li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="protect">
                                        <p class="block-help-content-row-container-text">Safeguard your privacy by following a few simple steps:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Before you sign up at Sidepiece, create a separate free email account to use just for our site. Don’t use your personal or work email address if privacy is a concern.
                                            </li>
                                            <li>Gmail or Hotmail offer free email addresses and don’t require you to use your home address or phone number to sign up.</li>
                                            <li>Create a username that doesn’t identify you in any way — like Romantic_at_Heart</li>
                                            <li>Be cautious before sharing any personal details (telephone, email, social sites) with people you meet online.</li>

                                        </ul>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="secure"><span> How do I choose a strong
                                            password?</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="secure">
                                        <p class="block-help-content-row-container-text">To help safeguard your data, every Sidepiece member is asked to create a strong password. Our password meter will help you determine the strength of your selected password when you sign up. A mix of letters, numbers, and symbols offers the most security.</p>
                                        <p class="block-help-content-row-container-text">Never disclose your password to anyone. Sidepiece will never ask you for your password – either via email or telephone.
                                        </p>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="beAware"><span>Does Sidepiece offer private payment options?</span></li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="beAware">
                                        <p class="block-help-content-row-container-text">Sidepiece accepts PayPal payments, pre-paid VISA/Mastercard, and other discreet methods based on your region. We even redeem major retailer gift cards, allowing you to pay without sharing any personal information at all.
                                        </p>
                                        <p class="block-help-content-row-container-text">When you pay by credit card, the transaction details are encrypted, securely transmitted to the payment processors—and a discreet, nondescript charge will appear on your account. We store the last 4 digits of your card along with your name and address for accounting purposes (in an encrypted format).
                                        </p>
                                        <p class="block-help-content-row-container-text">We do collect and store some information shared in your member profile and account set up in an encrypted format. For more information, you can read up on our <a class="terms-link tab" href="https://sidepieceapp.com/privacy.php">Privacy Policy</a></p>
                                    </li>
                                    <li class="block-help-content-row-list-item plus" data-helpchooseitem="practice"><span>Practice safer sex</span>
                                    </li>
                                    <li class="block-help-content-row-wrapper-container-mobile" data-helpchoosecontentmobile="practice">
                                        <p class="block-help-content-row-container-text">Don’t let anyone make you feel that your sexuality is abnormal. Don’t let anyone body-shame you or tell you what you like isn’t best for you. And don’t let anyone pressure you into having sex if you do not wish to do so. Likewise, be sure to ask for consent before sex, and be respectful of boundaries. Consent can be withdrawn at any time, and sex is never owed to anyone.
                                        </p>
                                        <p class="block-help-content-row-container-text">Practice safer sex and get tested for HIV and other STIs regularly. Always have conversations with the people you meet about your safety expectations.
                                        </p>
                                    </li>
                                </ul>
                                <div class="block-help-content-row-wrapper safety">
                                    <div class="block-help-content-row-wrapper-container active" data-helpchoosecontent="protect">
                                        <p class="block-help-content-row-container-text"> Protecting your identity and personal information is
                                            a very important thing when it comes to anything online. Here are some things that we suggest you
                                            protect when enjoying our services:</p>
                                        <ul class="block-help-content-row-container-list disc">
                                            <li>Before you sign up at Sidepiece, create a separate free email account to use just for our site. Don’t use your personal or work email address if privacy is a concern.
                                            </li>
                                            <li>Gmail or Hotmail offer free email addresses and don’t require you to use your home address or phone number to sign up.</li>
                                            <li>Create a username that doesn’t identify you in any way — like Romantic_at_Heart</li>
                                            <li>Be cautious before sharing any personal details (telephone, email, social sites) with people you meet online.</li>

                                        </ul>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="secure">
                                        <p class="block-help-content-row-container-text">To help safeguard your data, every Sidepiece member is asked to create a strong password. Our password meter will help you determine the strength of your selected password when you sign up. A mix of letters, numbers, and symbols offers the most security.</p>
                                        <p class="block-help-content-row-container-text">Never disclose your password to anyone. Sidepiece will never ask you for your password – either via email or telephone.
                                        </p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="beAware">
                                        <p class="block-help-content-row-container-text">Sidepiece accepts PayPal payments, pre-paid VISA/Mastercard, and other discreet methods based on your region. We even redeem major retailer gift cards, allowing you to pay without sharing any personal information at all.
                                        </p>
                                        <p class="block-help-content-row-container-text">When you pay by credit card, the transaction details are encrypted, securely transmitted to the payment processors—and a discreet, nondescript charge will appear on your account. We store the last 4 digits of your card along with your name and address for accounting purposes (in an encrypted format).
                                        </p>
                                        <p class="block-help-content-row-container-text">We do collect and store some information shared in your member profile and account set up in an encrypted format. For more information, you can read up on our <a class="terms-link tab" href="https://sidepieceapp.com/privacy.php">Privacy Policy</a></p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="rush">
                                        <p class="block-help-content-row-container-text title-bold">Don't rush into things</p>
                                        <p class="block-help-content-row-container-text">Try chatting via phone or video chat before meeting
                                            in person. Even when chatting online, be cautious about what you share. You may want to first verify
                                            through social media or with a friend (or friend-of-a-friend) that the person you’re talking to is
                                            truly part of the LGBTQ+ community.
                                        </p>
                                        <p class="block-help-content-row-container-text">Although Sidepiece works hard to ban scammers quickly,
                                            they do exist and you should be wary. Some “sextortion” scammers may record and use intimate
                                            messages or video content against you. Scammers may try to get you to move to email or video very
                                            quickly, as they know they will be blocked from Sidepiece soon. In general, we recommend keeping
                                            communication on Sidepiece until you’re completely comfortable.
                                        </p>
                                        <p class="block-help-content-row-container-text">Sharing your location or home address can be risky,
                                            do so only when you feel comfortable, and don't feel pressured if the other person has already sent
                                            you their location (as it may not be their actual location and they may be using it to bait you into
                                            providing your true location).
                                        </p>
                                        <p class="block-help-content-row-container-text">If you do choose to meet, we recommend you do so in
                                            public first, at a safe space like an LGBTQ+ friendly cafe, and be careful about what possessions
                                            you take with you. Know your limits with alcohol, don’t accept any strange drinks or drugs, and keep
                                            an eye on your own drinks.
                                        </p>
                                        <p class="block-help-content-row-container-text">Make sure a responsible person you trust knows who
                                            you’re meeting, where you’re going, and when you’re planning on coming back. Provide emergency
                                            contact information. Finally, make sure you’re in charge of your own transportation and have a plan
                                            to get home.
                                        </p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="practice">
                                        <p class="block-help-content-row-container-text">Don’t let anyone make you feel that your sexuality is abnormal. Don’t let anyone body-shame you or tell you what you like isn’t best for you. And don’t let anyone pressure you into having sex if you do not wish to do so. Likewise, be sure to ask for consent before sex, and be respectful of boundaries. Consent can be withdrawn at any time, and sex is never owed to anyone.
                                        </p>
                                        <p class="block-help-content-row-container-text">Practice safer sex and get tested for HIV and other STIs regularly. Always have conversations with the people you meet about your safety expectations.
                                        </p>
                                    </div>
                                    <div class="block-help-content-row-wrapper-container" data-helpchoosecontent="utilize">
                                        <p class="block-help-content-row-container-text title-bold">Utilize the block & report feature</p>
                                        <p class="block-help-content-row-container-text">If someone is making you feel uncomfortable on the
                                            app, you may choose to block them by selecting the icon on the user’s profile and tapping
                                            ‘Block.’ This will remove you from their view, as well as remove them from your view, and you will
                                            not be able to contact each other unless you choose to unblock them. If you feel someone is
                                            violating our <a class="block-help-content-link" href="https://www.grindr.com/community-guidelines/?lang=en-US">Community
                                                Guidelines</a>, report them by selecting the icon on their profile and
                                            tapping ‘Report.’ Our moderation team will review the profile and your report and take appropriate
                                            action.
                                        </p>
                                        <p class="block-help-content-row-container-text">Even if you follow all of our tips, no harm reduction
                                            plan is perfect. If you would like to report an incident that happened off Sidepiece, let us know at
                                            <a class="block-help-content-link" href="mailto:help@grindr.com"></a>help@Sidepiece.com. You
                                            can also go to Human Rights or
                                            LGBTQ+ organizations for help, and if you feel
                                            comfortable, report to law enforcement.
                                        </p>
                                        <p class="block-help-content-row-container-text title-bold">
                                            We encourage you to connect and help us to build a safe and inclusive community.
                                        </p>
                                        <p class="block-help-content-row-container-text title-bold">
                                            COVID-19 awareness
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            In many areas of the world, it’s advised not to meet in person right now. We recommend you keep
                                            dates virtual to reduce the risk of spreading or contracting COVID-19.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            If you do meet someone in person: plan an outside activity, wear masks, and stay socially distanced.
                                        </p>
                                        <p class="block-help-content-row-container-text">
                                            For more tips related to COVID-19, visit the
                                            <a class="block-help-content-link" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public">WHO
                                                website</a>, or our <a class="block-help-content-link" href="https://www.grindr.com/covid/">Grindr
                                                + Covid</a> page.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-help-content-choose-tab" data-aboutchoosetab="support">
                            <p class="block-help-content-title-tab">Support</p>
                            <div class="block-help-content-row">
                                <form method="POST" class="form-support" id="submit-support-form" autocomplete="off">
                                    <div class="wrapper-support-fields">
                                        <label class="block-help-form-support-label" for="name">Name</label>
                                        <input class="block-help-form-support-input" type="text" id="name" name="name" placeholder="Enter your Name" autocomplete="off" required="">
                                        <label class="block-help-form-support-label" for="email">Email</label>
                                        <input class="block-help-form-support-input" type="text" id="email" name="email" placeholder="Enter your Email" autocomplete="off" required="">
                                        <label class="block-help-form-support-label" for="message">Message</label>
                                        <textarea class="block-help-form-support-textarea" name="message" id="message" cols="50" rows="3" placeholder="Enter your Message" oninput="auto_grow(this)">
                </textarea>
                                    </div>
                                    <div class="response-support"></div>
                                    <div class="block-help-form-support-wrapper-btn">
                                        <button type="button" id="submit-support" class="block-help-form-support-btn"><span>Submit</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-item block-alpha" data-block="#sidepiece">
                    <h3 class="block-alpha-title">QUICKIE MEMBERSHIP
                    </h3>
                    <div class="block-alpha-content">
                        <div class="block-alpha-content-description">
                            <p class="block-alpha-content-text">You're traveling to NYC, for the weekend. It’s 1:00 AM. You’re bored, aroused and alone in your hotel room. When it comes to pleasure, every minute counts, you can't afford to waste time and Sidepiece values your discretion, at all cost.</p>
                            <p class="block-alpha-content-text">Introducing QUICKIE, the most convenient and discreet experience ever, offering our most exclusive features:</p>
                            <p class="block-alpha-content-text">Endless possibilities. Infinite connections. Total discretion. With QUICKIE, nothing will delay your satisfaction, any longer</p>
                            <div class="block-alpha-content-photo-mobile">
                                <div class="wrapper-block-alpha-content-photo-img">
                                    <picture>
                                        <source srcset="./images/quickie-photo-1.webp" type="image/webp">
                                        <source srcset="./images/quickie-photo-1.jpg" type="image/jpg">
                                        <img class="block-alpha-content-photo-img" src="./images/quickie-photo-1.jpg" alt="About Photo">
                                    </picture>
                                </div>
                                <div class="block-alpha-content-photo-button">
                                    <picture>
                                        <source srcset="./images/quickie-photo-2.webp" type="image/webp">
                                        <source srcset="./images/quickie-photo-2.jpg" type="image/jpg">
                                        <img class="block-alpha-content-photo-img" src="./images/quickie-photo-2.jpg" alt="About Photo">
                                    </picture>
                                    <picture>
                                        <source srcset="./images/quickie-text-2.webp" type="image/webp">
                                        <source srcset="./images/quickie-text-2.jpg" type="image/jpg">
                                        <img class="block-alpha-content-photo-img-text" src="./images/quickie-text-2.jpg" alt="About Text Image">
                                    </picture>
                                </div>
                            </div>
                            <ul class="block-alpha-content-list">
                                <li>Open minds<span>Being open about what you want takes guts!</span></li>
                                <li>Passionate Creators<span>Our product helps people find love—what’s not to love about that?</span></li>
                                <li>Collaborating Playfully<span>Work hard, play hard—it’s all about balance.</span></li>
                                <li>Risk takers<span>Life’s too short to be boring—we’ll try anything once.</span></li>
                                <li>Authenticity<span>Do what makes you happy. We’re here to support it!</span></li>

                            </ul>
                            <p class="block-alpha-content-medium-title">AND ALL THESE FEATURES COME WITH A QUICKIE</p>
                            <p class="block-alpha-content-text">People like you join SIDEPIECE daily to find fun, spontaneous, and discreet relationships. Some look for a hookup, exploration, or curiosity to discover what's out there.</p>
                            <p class="block-alpha-content-text">- Sidepiece is the leading discreet, like-minded dating application in the world.</p>
                        </div>
                        <div class="block-alpha-content-photo">
                            <div class="wrapper-block-alpha-content-photo-img">
                                <picture>
                                    <source srcset="./images/quickie-photo-1.webp" type="image/webp">
                                    <source srcset="./images/quickie-photo-1.jpg" type="image/jpg">
                                    <img class="block-alpha-content-photo-img" src="./images/quickie-photo-1.jpg" alt="About Photo">
                                </picture>

                            </div>
                            <div class="block-alpha-content-photo-button">
                                <picture>
                                    <source srcset="./images/quickie-photo-2.webp" type="image/webp">
                                    <source srcset="./images/quickie-photo-2.jpg" type="image/jpg">
                                    <img class="block-alpha-content-photo-img" src="./images/quickie-photo-2.jpg" alt="About Photo">
                                </picture>
                                <img class="block-alpha-content-photo-img-text" src="./images/quickie-text-2.webp" alt="About Text Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-item block-blog" data-block="#blog">
                    <h3 class="block-blog-title">Blog
                    </h3>
                    <div class="wrapper-block-blog-content">
                        <div class="block-blog-content">
                            <p class="block-blog-content-title">Coming soon</p>
                            <img class="block-blog-content-img" src="./images/blog-bg-photo.webp" alt="Blog Photo">
                            <img class="block-blog-content-img-mobile" src="./images/blog-photo-mobile.webp" alt="Blog Photo">
                        </div>
                    </div>
                </div>
                <div class="block-item block-alpha-for-equality" data-block="#alphaForEquality">
                    <div class="block-alpha-for-equality-content">
                        <div class="block-alpha-for-equality-content-wrapper">
                            <div class="wrapper-block-alpha-for-equality-content-photo">
                                <img class="block-alpha-for-equality-content-img" src="./images/sidepiece-photo.webp" alt="Blog Photo">
                            </div>
                        </div>
                        <div class="block-alpha-for-equality-content-description">
                            <h4 class="block-alpha-for-equality-title">Sidepiese for Equality</h4>
                            <p class="block-alpha-for-equality-content-text">
                                Sidepiese for Equality is an ever-evolving mission to help LGBTQ people around the globe. Our wide-ranging initiatives impact communities large and small on issues that matter to them the most: safety, sexual health, advocacy, and more.
                            </p>
                            <div>
                                <div class="block-alpha-for-equality-content-wrapper-mobile">
                                    <div class="wrapper-block-alpha-for-equality-content-photo">
                                        <img class="block-alpha-for-equality-content-img" src="./images/sidepiece-photo.webp" alt="Blog Photo">
                                    </div>
                                </div>
                            </div>
                            <p class="block-alpha-for-equality-content-medium-title">Now is the
                                <span>time to</span>
                                <span>mobilize</span>
                            </p>
                            <p class="block-alpha-for-equality-content-text">
                                Now is the time to inform and empower our communities. Because when we do, our voices get heard. Explore what G4E has been up to, and find out how you can get in on it.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="block-item block-careers" data-block="#careers">
                    <div class="block-careers-content">
                        <div class="block-careers-content-wrapper">
                            <div class="block-careers-content-wrapper-photo">
                                <img class="block-careers-content-img" src="./images/careers.webp" alt="Careers Photo">
                            </div>
                        </div>
                        <div class="block-careers-content-description">
                            <div class="block-careers-content-wrapper-photo-mobile">
                                <img class="block-careers-content-img" src="./images/careers.webp" alt="Careers Photo">
                            </div>
                            <p class="block-careers-content-medium-title">WHAT <span>WE VALUE</span></p>
                            <ul class="block-careers-content-list">
                                <li>Hook up whenever! <span>Being open about what you want takes guts!</span>
                                </li>
                                <li>Creating Passionately<span>Our product helps people find love—what’s not to love about that?</span>
                                </li>
                                <li>Collaborating Playfully<span>Work hard, play hard—it’s all about balance.</span></li>
                                <li>Taking Risks<span>Life’s too short to be boring—we’ll try anything once.</span></li>
                                <li>Being Our Authentic Selves<span>Do what makes you happy, we're here to support it! </span>
                                </li>
                            </ul>
                            <div class="block-careers-form-wrapper-btn">
                                <button type="button" id="submit-careers" class="block-careers-form-btn">
                                    <span>View all opportunities</span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-item block-terms-of-service" data-block="#terms">
                    <div class="block-terms-of-service-content">
                        <h4 class="block-terms-of-service-title">Sidepiece Terms and
                            Conditions of Use
                        </h4>
                        <p class="terms-text">Welcome to SIDEPIECE ’s Terms and Conditions of Use (these “Terms”).
                            This is a contract between you and the SIDEPIECE Group (as defined
                            further below) and we want you to know yours and our rights before you
                            use the SIDEPIECE application (“SIDEPIECE ” or the “App”). Please take
                            a few moments to read these Terms before enjoying the App, because
                            once you access, view or use the App, you are going to be legally bound by
                            these Terms (so probably best to read them first!).
                        </p>
                        <p class="terms-describe-title">
                            Please be aware that if you subscribe to services for a term (the
                            “Initial Term”), then the terms of your subscription will be
                            automatically renewed for additional periods of the same duration as
                            the Initial Term at SIDEPIECE ’s then-current fee for such services,
                            unless you cancel your subscription in accordance with Section 5
                            below.
                        </p>
                        <p class="terms-text">
                            You should also note that Section 13 of these Terms contains provisions
                            governing how claims that you and SIDEPIECE Group have against each
                            other are resolved. <span class="terms-describe-title"> In particular, it contains an arbitration agreement
                                that will, with limited exceptions, require disputes between us to be
                                submitted to binding and final arbitration.</span> If you are an existing user or
                            a new user who signed up for SIDEPIECE before January 18, 2021, you
                            have a right to opt out of the arbitration agreement pursuant to Section 13
                            below. If you do not opt out of the arbitration agreement in accordance with
                            Section 13, or if you sign up for SIDEPIECE after January 18, 2021, (1)
                            you will only be permitted to pursue claims and seek relief against us on an
                            individual basis only; and (2) you are waiving your right to seek relief in a
                            court of law and to have a jury trial on your claims.
                            <br>
                            And a notice to California subscribers: You may cancel your subscription and request a
                            refund at
                            any time prior to midnight of the third business day following the date you subscribed. If
                            you
                            subscribed using your Apple ID, refunds are handled by Apple, not SIDEPIECE . If you wish to
                            request
                            a refund, please visit <a class="terms-link" href="https://getsupport.apple.com">
                                https://getsupport.apple.com</a>. If you subscribed using your Google Play
                            Store account or through Sidepiece, please contact <a class="terms-link" href="mailto:support@Sidepieceapp.com">customer
                                support.</a>

                        </p>
                        <!--  -->
                        <p class="terms-describe">1. Sidepiece Rules.</p>
                        <p class="terms-text">
                            Before you can use the App, you will need to register for an account (“Account”). In order
                            to create an Account you must:
                        </p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">
                                be at least 18 years old;
                            </li>
                            <li class="terms-content-list-item">
                                be legally permitted to use the App by the laws of your home country.
                            </li>
                        </ol>
                        <p class="terms-text"> You can create an Account via manual registration, or by using your
                            Facebook login details.
                            If you create an Account using your Facebook login details, you authorize us to access,
                            display and use certain information from your Facebook account (e.g. profile pictures,
                            relationship status, location and information about Facebook friends). For more information
                            about what information we use and how we use it, please check out our <a class="terms-link privacy" href="https://sidepieceapp.com/privacy.php">Privacy
                                Policy.</a></p>
                        <p class="terms-text"> Unfortunately, we cannot allow you to use another person’s Account or to
                            share your Account
                            with any other person without permission.</p>
                        <p class="terms-text">
                            You’ll have great fun on SIDEPIECE , but if you feel the need to leave, you can delete your
                            Account at any time by going to the ‘Settings’ page when you are logged in and clicking on
                            the ‘Delete account’ link. Your Account will be deleted immediately but it may take a little
                            while for Your Content (defined below) to be completely removed from the App. Your profile
                            information will be treated in accordance with our Privacy Policy. If you delete your
                            Account and try to create a new account within this time period using the same credentials,
                            we will re-activate your Account for you.
                        </p>
                        <p class="terms-text">
                            We use a combination of automated systems and a team of moderators to monitor and review
                            accounts and messages for content that indicates breaches of these Terms. We reserve the
                            right at our sole discretion to terminate or suspend any Account, or make use of any
                            operational, technological, legal or other means available to enforce the Terms (including
                            without limitation blocking specific IP addresses), at any time without liability and
                            without the need to give you prior notice. Without limiting the foregoing in any way, we
                            expressly reserve the right to terminate or suspend your Account without notice (1) for
                            violating these terms, (2) due to your conduct on the App, or your conduct with other users
                            of the App (including your “offline” conduct), if we, in our sole discretion, determine your
                            conduct was inappropriate or improper, (3) if we or our affiliates, in our or their sole
                            discretion, determine your conduct on other apps operated by our affiliates was
                            inappropriate or improper, or (4) for any reasons whatsoever that we deem, in our sole
                            discretion, justifies termination. If your Account is terminated or suspended, you agree you
                            will not receive a refund for any paid service or features you have already been charged
                            for.
                        </p>
                        <p class="terms-text">
                            You may not access, tamper with, or use non-public areas of the App or our systems. Certain
                            portions of the App may not be accessible if you have not registered for an Account.
                        </p>
                        <!--  -->
                        <p class="terms-describe">2. Types of content.</p>
                        <p class="terms-text"> There are three types of content that you will be able to access on the
                            App:</p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">Content that you upload and provide (“Your Content”);</li>
                            <li class="terms-content-list-item">Content that members provide (“Member Content”);</li>
                            <li class="terms-content-list-item">Content that the Sidepiece Group provides (“Our Content”).</li>
                        </ol>
                        <p class="terms-title">
                            There is certain content we can’t allow on SIDEPIECE</p>
                        <p class="terms-text" style="margin-top:10px"> We want our users to be able express themselves as much as possible and
                            post all sorts of
                            things on SIDEPIECE, but we have to impose restrictions on certain content which:</p>
                        <ul class="terms-content-list disc">
                            <li class="terms-content-list-item"> contains language or imagery which could be deemed
                                offensive or is likely to harass, upset,
                                embarrass, alarm or annoy any other person (including for example and without
                                limitation,
                                language that could be deemed discriminatory towards an individual’s race, color,
                                ethnicity,
                                national origin, religion, disability, sexual orientation, gender expression, gender
                                identity or physical appearance);
                            </li>
                            <li class="terms-content-list-item"> is obscene, pornographic, violent or otherwise may
                                offend human dignity (including for
                                example and without limitation, language that could be deemed discriminatory towards an
                                individual’s race, color, ethnicity, national origin, religion, disability, sexual
                                orientation, gender expression, gender identity or physical appearance);
                            </li>
                            <li class="terms-content-list-item">
                                is abusive, insulting or threatening, discriminatory or which promotes or encourages
                                racism,
                                sexism, hatred or bigotry (including for example and without limitation, language that
                                could
                                be deemed discriminatory towards an individual’s race, color, ethnicity, national
                                origin,
                                religion, disability, sexual orientation, gender expression, gender identity or physical
                                appearance);
                            </li>
                            <li class="terms-content-list-item"> encourages any illegal activity including, without
                                limitation, terrorism, inciting racial
                                hatred or the submission of which in itself constitutes committing a criminal offense;
                            </li>
                            <li class="terms-content-list-item"> is defamatory or libelous; </li>
                            <li class="terms-content-list-item"> relates to commercial activities (including, without
                                limitation, sales, competitions and
                                advertising, links to other websites or premium line telephone numbers);

                            </li>
                            <li class="terms-content-list-item">involves the transmission of “junk” mail or “spam”;</li>
                            <li class="terms-content-list-item"> contains any spyware, adware, viruses, corrupt files,
                                worm programs or other malicious code
                                designed to interrupt, damage or limit the functionality of or disrupt any software,
                                hardware, telecommunications, networks, servers or other equipment, Trojan horse or any
                                other material designed to damage, interfere with, wrongly intercept or expropriate any
                                data
                                or personal information whether from SIDEPIECE or otherwise;
                            </li>
                            <li class="terms-content-list-item">
                                itself, or the posting of which, infringes any third party’s rights (including, without
                                limitation, intellectual property rights and privacy rights);
                            </li>
                            <li class="terms-content-list-item"> shows another person which was created or distributed
                                without that person’s consent;
                            </li>
                            <li class="terms-content-list-item">
                                is harmful to minors;
                            </li>
                            <li class="terms-content-list-item">
                                impersonates any other person, including falsely stating your name.
                            </li>

                        </ul>
                        <p class="terms-text"> SIDEPIECE Group operates a zero-tolerance policy for this kind of content.</p>
                        <!--  -->
                        <p class="terms-describe">Your Content</p>
                        <p class="terms-text">
                            You agree that Your Content must comply with our Guidelines at <a class="terms-link" href="mailto:support@Sidepieceapp.com">
                                https://Sidepiece
                                app.com/en/guidelines</a>, as updated from time to time. As Your Content is unique, you
                            are
                            responsible and liable for Your Content and will indemnify, defend, release, and hold us
                            harmless from any claims made in connection with Your Content. Sorry that was a bit of a
                            mouthful, but you are what you post!
                        </p>
                        <p class="terms-text">
                            You may not display any personal contact or banking information on your individual profile
                            page whether in relation to you or any other person (for example, names, home addresses or
                            post codes, telephone numbers, email addresses, URLs, credit/debit card or other banking
                            details). If you do choose to reveal any personal information about yourself to other users,
                            whether via email or otherwise, it is at your own risk. We encourage you to use the same
                            caution in disclosing details about yourself to third parties online as you would under any
                            other circumstances.
                        </p>
                        <p class="terms-text">
                            As SIDEPIECE is a public community, Your Content will be visible to other users of the App all
                            around the world instantly - so make sure you are comfortable sharing Your Content before
                            you post. As such, you agree that Your Content may be viewed by other users and any person
                            visiting, participating in or who is sent a link to the App (e.g. individuals who receive a
                            link to a user’s profile or shared content from other SIDEPIECE Users). By uploading Your
                            Content on SIDEPIECE , you represent and warrant to us that you have all necessary rights and
                            license to do so, and automatically grant us a non-exclusive, royalty free, perpetual,
                            worldwide license to use Your Content in any way (including, without limitation, editing,
                            copying, modifying, adapting, translating, reformatting, creating derivative works from,
                            incorporating into other works, advertising, distributing and otherwise making available to
                            the general public such Content, whether in whole or in part and in any format or medium
                            currently known or developed in the future).
                        </p>
                        <p class="terms-text">
                            We may assign and/or sub-license the above license to our affiliates and successors without
                            any further approval by you.
                        </p>
                        <p class="terms-text">
                            We do not have any obligation to store Your Content - if it’s important, you should make a
                            copy.
                        </p>
                        <!--  -->
                        <p class="terms-describe">Member Content</p>
                        <p class="terms-text">
                            Other members of SIDEPIECE will also share content via the App. Member Content belongs to the
                            user who posted the content and is stored on our servers and displayed via the App at the
                            direction of the user providing the Member Content.
                        </p>
                        <p class="terms-text">
                            You do not have any rights in relation to other users’ Member Content, and you may only use
                            other SIDEPIECE users’ personal information to the extent that your use of it matches SIDEPIECE ’s
                            purpose of allowing people to meet one another. You may not use other users’ information for
                            commercial purposes, to spam, to harass, stalk or to make unlawful threats. We reserve the
                            right to terminate your Account if you misuse other users’ information.
                        </p>
                        <p class="terms-text">
                            Member Content is subject to the terms and conditions of Sections 512(c) and/or 512(d) of
                            the Digital Millennium Copyright Act 1998. If you have a complaint about Member Content,
                            please see the Digital Millennium Copyright Act section below for more information
                        </p>
                        <!-- -->
                        <p class="terms-describe">Our Content</p>
                        <p class="terms-text">
                            You may be wondering what happens to the rest of the Content on SIDEPIECE .
                            Well, it belongs to us! Any other text, content, graphics, user interfaces,
                            trademarks, logos, sounds, artwork, and other intellectual property
                            appearing on SIDEPIECE are owned, controlled or licensed by us and are
                            protected by copyright, trademark and other intellectual property law rights.
                            All right, title and interest in and to Our Content remains with us at all times.
                            We grant you a non-exclusive, limited, personal, non-transferable,
                            revocable, license to access and use Our Content, without the right to
                            sublicense, under the following conditions:
                        </p>
                        <!---->
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">you shall not use, sell, modify, or distribute Our Content except as
                                permitted by the functionality of the App;</li>
                            <li class="terms-content-list-item">you shall not use our name in meta tags, keywords and/or hidden
                                text;</li>
                            <li class="terms-content-list-item">you shall not create derivative works from Our Content or
                                commercially exploit Our Content, in whole or in part, in any way;</p>
                            <li class="terms-content-list-item">you shall use Our Content for lawful purposes only.</li>
                        </ol>
                        <p class="terms-text">
                            We reserve all other rights.
                        </p>
                        <!-- -->
                        <p class="terms-describe-title">
                            No Obligation to Pre-Screen Content.
                        </p>
                        <p class="terms-text">
                            Since SIDEPIECE is an online community, we generally try to avoid getting in
                            the way and therefore don’t assume any obligation to pre-screen any of
                            Your Content or any Member Content. However, there may be times where
                            we need to step in, and we reserve the right to review, pre-screen, refuse
                            and/or remove any Member Content and Your Content, including content
                            exchanged between users in direct messages.
                        </p>
                        <p class="terms-describe">3. Restrictions on the app.</p>
                        <p class="terms-text">
                            You agree to:
                        </p>
                        <ul class="terms-content-list disc">
                            <li class="terms-content-list-item">
                                comply with all applicable laws, including without limitation, privacy
                                laws, intellectual property laws, anti-spam laws, equal opportunity
                                laws and regulatory requirements;
                            </li>
                            <li class="terms-content-list-item">
                                use your real name on your profile;
                            </li>
                            <li class="terms-content-list-item">
                                use the services in a professional manner.
                            </li>
                        </ul>
                        <p class="terms-text">
                            You agree that you will not:
                        </p>
                        <ul class="terms-content-list disc">
                            <li class="terms-content-list-item">
                                act in an unlawful or unprofessional manner including being
                                dishonest, abusive or discriminatory
                            </li>
                            <li class="terms-content-list-item">
                                misrepresent your identity, your current or previous positions,
                                qualifications or affiliations with a person or entity;
                            </li>
                            <li class="terms-content-list-item">
                                disclose information that you do not have the consent to disclose;
                            </li>
                            <li class="terms-content-list-item">
                                stalk or harass any other user of the App;
                            </li>
                            <li class="terms-content-list-item">
                                create or operate a pyramid scheme, fraud or other similar practice.
                            </li>
                        </ul>
                        <p class="terms-text">
                            We don’t like users misbehaving in the SIDEPIECE community. You can report
                            any abuse or complain about Member Content by contacting us, outlining
                            the abuse and/or complaint. You can also report a user directly from a
                            profile or in chat by clicking the ‘Block &amp; Report’ link. We reserve the right
                            to investigate any possible violations of these Terms, and we may, in our
                            sole discretion, immediately terminate any user’s right to use of the App
                            without prior notice, as set out further in Section 1 above.
                            We don’t control any of the things our users say or do, so you are solely
                            responsible for your interactions with other users of the App.
                        </p>
                        <p class="terms-text">
                            You understand that SIDEPIECE group does not currently conduct criminal background checks on its users. Sidepiece
                            group also does not unquire into the background of its users or attempt to verify the statements of its
                            users. SIDEPIECE group makes to verify the statements or warranties as to the conduct or future users. SIDEPIECE
                            group reserves the right to conduct any criminal background check or other screenings (such as sex offender
                            registration searches) at any time and to use available public records for any purpose.
                        </p>
                        <p class="terms-text">
                            You agree to, and hereby do, release SIDEPIECE Group and its successors
                            from any claims, demands, losses, damages, rights, and actions of any
                            kind, including personal injuries, death and property damage, that either
                            directly or indirectly arises from your interactions with or conduct of other
                            users of the App. If you are a California resident, you hereby waive
                            California Civil Code Section 1542, which states, “A general release does
                            not extend to claims that the creditor or releasing party does not know or
                            suspect to exist in his or her favor at the time of executing the release and
                            that, if known by him or her, would have materially affected his or her
                            settlement with the debtor or released party.” The foregoing release does
                            not apply to any claims, demands, or any losses, damages, rights and
                            actions of any kind, including personal injuries, death or property damage
                            for any unconscionable commercial practice by SIDEPIECE Group or for such
                            party’s fraud, deception, false, promise, misrepresentation or concealment,
                            suppression or omission of any material fact in connection with the App.<br>
                            Scraping or replicating any part of the App without our prior consent is
                            expressly prohibited. This includes by any means (automated or otherwise)
                            other than through our currently available, published interfaces - unless you
                            have been specifically allowed to do so in a separate agreement with us.
                        </p>
                        <!-- -->
                        <p class="terms-describe">4. Privacy.</p>
                        <p class="terms-text">
                            For information about how the SIDEPIECE Group collects, uses, and shares
                            your personal data, please check out our <a class="terms-link privacy" href="https://sidepieceapp.com/privacy.php">Privacy
                                Policy</a>. By using SIDEPIECE ,
                            you acknowledge that we may use such data in accordance with our
                            <a class="terms-link privacy" href="https://sidepieceapp.com/privacy.php">Privacy Policy</a>.
                        </p>
                        <!-- -->
                        <p class="terms-describe">5. Payment terms.</p>
                        <p class="terms-describe-title">
                            Generally.
                        </p>
                        <p class="terms-text">
                            SIDEPIECE may offer products and services for purchase on the App (“In-App
                            Purchase”). If you choose to make an In-App Purchase, you acknowledge
                            and agree that additional terms, disclosed to you at the point of purchase,
                            may apply, and that such additional terms are incorporated herein by
                            reference
                        </p>
                        <p class="terms-text">
                            You may make an In-App Purchase through the following payment methods
                            (“Payment Method”): (a) making a purchase through a third-party platform
                            such as the Apple App Store and Google Play Store (“Third Party Store”),
                            or (b) paying with your credit card, debit card, or PayPal account, which will
                            be processed by a third-party processor. Once you have made an In-App
                            Purchase, you authorize us to charge your chosen Payment Method. If
                            payment is not received by us from your chosen Payment Method, you
                            agree to promptly pay all amounts due upon demand by us.
                        </p>
                        <p class="terms-text">
                            <span class="terms-describe-title">Subscriptions and Auto-Renewal:</span> SIDEPIECE may offer some services as
                            automatically-renewing subscriptions, e.g., a one-week subscription, one-month subscription, or three-month
                            subscription (“Premium Services”).<br>
                            <span class="terms-describe-title">IF YOU PURCHASE AN AUTOMATICALLY RENEWING SUBSCRIPTION,
                                YOUR SUBSCRIPTION WILL RENEW AT THE END OF THE PERIOD,
                                UNLESS YOU CANCEL, AT SIDEPIECE’S THEN-CURRENT PRICE FOR
                                SUCH SUBSCRIPTIONS.</span> To avoid charges for a new subscription period,
                            you must cancel, as described below, before the end of the then-current
                            subscription period. Deleting your account or deleting the application from
                            your device does not cancel your subscription. You will be given notice of
                            changes in the pricing of the Premium Services to which you have
                            subscribed and an opportunity to cancel. If SIDEPIECE changes these prices
                            and you do not cancel your subscription, you agree that you will be charged
                            at SIDEPIECE’S then-current pricing for subscription
                        </p>
                        <p class="terms-describe-title">Cancelling Subscriptions.</p>
                        <p class="terms-text">
                            If you purchased a subscription directly from
                            SIDEPIECE , you may cancel or change your Payment Method via the payment
                            settings option under your profile. If you purchased a subscription through a
                            Third Party Store, such as the Apple App Store or the Google Play Store,
                            you will need to access your account with that Third Party Store and follow
                            instructions to change or cancel your subscription. If you cancel your
                            subscription, you may use your subscription until the end of the period you
                            last paid for, but (i) you will not (except as set forth in the subsection
                            entitled “Refunds” below) be eligible for a prorated refund, (ii) your
                            subscription will not be renewed when that period expires and (iii) you will
                            then no longer be able to use the Premium Services or In-App Purchases
                            enabled by your subscription.
                        </p>
                        <p class="terms-describe-title">
                            Free Trials.
                        </p>
                        <p class="terms-text">
                            If you sign up for a free trial and do not cancel, your trial may
                            convert into a paid subscription and your Payment Method will be charged
                            at the then-current price for such subscription. Once your free trial converts
                            to a paid subscription, your paid subscription will continue to automatically
                            renew at the end of each period, and your Payment Method will be
                            charged, until you cancel. To avoid charges for a new subscription period,
                            you must cancel before the end of the then-current subscription period or
                            free trial period as described above. Deleting your account or deleting the
                            application from your device does not cancel your free trial.
                        </p>
                        <p class="terms-describe-title">
                            Refunds.
                            Generally, all charges for purchases are nonrefundable, and
                            there are no refunds or credits for partially used periods.
                        </p>
                        <p class="terms-text">For subscribers residing in Arizona, California, Connecticut, Illinois, Iowa,
                            Minnesota, New York, North Carolina, Ohio, Rhode Island, and Wisconsin,
                            the terms below apply:</p>
                        <p class="terms-text">
                            You may cancel your subscription, without penalty or obligation, at any time
                            prior to midnight of the third business day following the date you
                            subscribed. In the event that you die before the end of your subscription
                            period, your estate shall be entitled to a refund of that portion of any
                            payment you had made for your subscription which is allocable to the
                            period after your death. In the event that you become disabled (such that
                            you are unable to use SIDEPIECE) before the end of your subscription period,
                            you shall be entitled to a refund of that portion of any payment you had
                            made for your subscription which is allocable to the period after your
                            disability by providing the company notice in the same manner as you
                            request a refund as described below.
                        </p>
                        <p class="terms-text">
                            To request a refund:
                        </p>
                        <p class="terms-text">
                            In addition to canceling, you must request a refund to receive one. If you
                            subscribed using your Apple ID, refunds are handled by Apple, not SIDEPIECE.
                        </p>
                        <p class="terms-text">
                            To request a refund, go to iTunes, click on your Apple ID, select “Purchase
                            history,” find the transaction and hit “Report Problem”. You can also submit
                            a request at <a class="terms-link" href="https://getsupport.apple.com">https://getsupport.apple.com</a>.
                        </p>
                        <p class="terms-text">
                            For all other purchases: please contact <a class="terms-link" href="mailto:support@Sidepieceapp.com">customer
                                support </a> with your order
                            number (you can find the order number in the order confirmation email, or if
                            you purchased from the Google Play Store by logging in to Google Wallet).
                            You may also mail or deliver a signed and dated notice which states that
                            you, the buyer, are canceling this agreement, or words of similar effect.
                            Please also include the email address or mobile number associated with
                            your account along with your order number. This notice shall be sent to:
                            SIDEPIECE , Attn.: Cancellations, P.O. Box 300940, Austin, Texas, 78703 (in
                            addition, California and Ohio members may send a facsimile to
                            512-696-1545).
                        </p>
                        <p class="terms-describe-title">Taxes.</p>
                        <p class="terms-text">
                            The payments required under this Section 5 do not include any Sales Tax
                            that may be due in connection with the Premium Services provided under
                            these Terms. If SIDEPIECE determines it has a legal obligation to collect a Sales
                            Tax from you in connection with these Terms, SIDEPIECE will collect such Sales
                            Tax in addition to the payments required under this Section 5. If any
                            Premium Services, or payments for any Premium Services, under these
                            Terms are subject to any Sales Tax in any jurisdiction and you have not
                            remitted the applicable Sales Tax to SIDEPIECE , you will be responsible for the
                            payment of such Sales Tax and any related penalties or interest to the
                            relevant tax authority. As used herein, “Sales Tax” means any sales or use
                            tax and any other tax measured by sales proceeds that is the functional
                            equivalent of a sales tax where the applicable taxing jurisdiction does not
                            otherwise impose a sales or use tax.
                        </p>
                        <p class="terms-describe">6. Virtual items.</p>
                        <p class="terms-text">
                            At times, you may be able to purchase a limited, personal, non-transferable, non-sublicensable, revocable
                            license to access special
                            limited-use features from SIDEPIECE , referred to here as “Virtual Items.” You
                            can only purchase Virtual Items through SIDEPIECE or SIDEPIECE’s partners.
                            Virtual Items represent a limited license right governed by this Agreement,
                            and, except as otherwise prohibited by applicable law, no title or ownership
                            in or to Virtual Items is being transferred or assigned to you. This
                            Agreement, and your purchase of Virtual Items, does not constitute the sale
                            of any rights in Virtual Items.
                        </p>
                        <p class="terms-text">
                            Any Virtual Item balance shown in your account does not constitute a real-world balance or reflect any
                            stored value, but instead shows the extent of
                            your license to access Virtual Items. Virtual Items do not incur fees for non-use. Your license in Virtual
                            Items will terminate on the earlier of SIDEPIECE
                            ceasing provision of services or your account closing or terminating. SIDEPIECE
                            may also at times provide Virtual Items as bonuses to, or parts of, paid
                            subscriptions for its services. Your ability to use Virtual Items you have
                            access to in this manner may terminate at the end of each of your
                            subscription periods and your access to Virtual Items may not “roll over” or
                            accumulate through additional subscription periods. Your access to Virtual
                            Items gained through subscriptions may also end if you cancel your
                            subscription.
                        </p>
                        <p class="terms-text">
                            SIDEPIECE , in its sole discretion, reserves the right to charge fees for the right
                            to access or use Virtual Items and/or may distribute Virtual Items with or
                            without charge. SIDEPIECE may manage, regulate, control, modify, or eliminate
                            Virtual Items at any time, including taking actions that may impact the
                            perceived value or purchase price, if applicable, of any Virtual Items and
                            SIDEPIECE shall have no liability to you for doing so. You shall not sell, redeem,
                            or otherwise transfer Virtual Items to any person or entity. Virtual Items may
                            only be redeemed through our Services.
                        </p>
                        <p class="terms-text">
                            ALL PURCHASES AND REDEMPTIONS OF VIRTUAL ITEMS MADE
                            THROUGH OUR SERVICES ARE FINAL AND NON-REFUNDABLE. YOU
                            ACKNOWLEDGE THAT Sidepiece IS NOT REQUIRED TO PROVIDE A
                            REFUND FOR ANY REASON, AND THAT YOU WILL NOT RECEIVE
                            MONEY OR OTHER COMPENSATION FOR UNUSED VIRTUAL ITEMS
                            WHEN AN ACCOUNT IS CLOSED, WHETHER SUCH CLOSURE WAS
                            VOLUNTARY OR INVOLUNTARY.
                        </p>
                        <!-- -->
                        <p class="terms-describe">7. Push notifications.
                        </p>
                        <p class="terms-describe-inner">
                            Location-based features
                        </p>
                        <p class="terms-text">
                            We may provide you with emails, text messages, push notifications, alerts
                            and other messages related to the App and/or the SIDEPIECE services, such as
                            enhancements, offers, products, events, and other promotions. After
                            downloading the App, you will be asked to accept or deny push
                            notifications/alerts. If you deny, you will not receive any push notifications/
                            alerts. If you accept, push notifications/alerts will be automatically sent to
                            you. If you no longer wish to receive push notifications/alerts from the App,
                            you may opt out by changing your notification settings on your mobile
                            device. With respect to other types of messaging or communications, such
                            as emails, text messages, etc., you can unsubscribe or opt out by either
                            following the specific instructions included in such communications, or by
                            emailing us with your request at <a class="terms-link" href="mailto:feedback@SIDEPIECEdatingapp.com">feedback@SIDEPIECEdatingapp.com</a>
                        </p>
                        <p class="terms-text">
                            The App may allow access to or make available opportunities for you to
                            view certain content and receive other products, services and/or other
                            materials based on your location. To make these opportunities available to
                            you, the App will determine your location using one or more reference
                            points, such as GPS, Bluetooth and/or software within your mobile device.
                            If you have set your mobile device to disable GPS, Bluetooth or other
                            location determining software or do not authorise the App to access your
                            location data, you will not be able to access such location-specific content,
                            products, services and materials. For more about how the App uses and
                            retains your information, please read the
                            <a class="terms-link privacy" href="https://sidepieceapp.com/privacy.php">Privacy
                                Policy.</a>
                        </p>
                        <p class="terms-describe">8. Disclaimer.
                        </p>
                        <p class="terms-text">
                            The app, site, our content, and member content are all
                            provided to you “as is” and “as available” without
                            warranty of any kind, either express or implied,
                            including but not limited to, fitness for a particular
                            purpose, title, or non-infringement. Without limiting the
                            foregoing, we do not guarantee the compatibility of any
                            matches.
                        </p>
                        <p class="terms-text">
                            Should applicable law not permit the foregoing
                            exclusion of express or implied warranties, then we
                            grant the minimum express or implied warranty required
                            by applicable law. No advice or information, whether
                            oral or written, shall create any warranty,
                            representation or guarantee not expressly stated in
                            this section.
                        </p>
                        <p class="terms-text">
                            Additionally, we do not make any warranties that the app
                            or site will be uninterrupted, secure or error free or
                            that your use of the app or site will meet your
                            expectations, or that the app, site, our content, any
                            member content, or any portion thereof, is correct,
                            accurate, or reliable. Your use of the app or site is at
                            your own risk. You are solely responsible for your
                            interactions with other members. The SIDEPIECE group is not
                            responsible for the conduct of any user. SIDEPIECE group
                            does not conduct criminal background checks on its
                            members.
                        </p>
                        <p class="terms-describe">9. Limitation of liability.
                        </p>
                        <p class="terms-text">
                            Neither us nor any owner will be liable for any damages, direct, indirect, incidental, consequential,
                            special, or punitive, including, without limitation, loss of data, income, profit or goodwill, loss of or
                            damage to propery and claims of third parties arising out of your access to or use of the aoo, site ,our
                            content, or any member content, however caused, whether based on breach of contract, tort (including
                            negligence), proprietary rights infringement, product liability or otherwise.
                        </p>
                        <p class="terms-text">
                            The foregoing shall apply even if we were adviced of the possibility of such damages. If you become
                            dissasfied in any wat with the app or site, your sole nad exclusive remedy is to stop your use of the app
                            and site. You hereby waive any and all claims arising out of your use the app ro site. Because some states
                            do not allow the disclaimer of implied warranties or the exclusion or limitation of certain types of
                            damages, these provisions may not apply to you. If any portion of this limitation on liability is found to
                            be invalid or unenforceable for any reason, then our aggregate liability shall not exceed one hundred
                            dollars ($100).
                        </p>
                        <p class="terms-text">
                            The limitation of liability herein is a fundamental element of the basis of the bargain and reflects a fair
                            allocation of risk. The app and site would not be provided without such limitations and you afree that the
                            limitations and exclusions of liability, disclaimers and exclusive remedies specified herein will survive
                            even if found to have failed in their essential purpose. The foregoing does not apply to liability arising
                            from any fraud or fraudulent misrepresentations, or any other liability that cannot be limited by applicalbe
                            law.
                        </p>
                        <!--                        -->
                        <p class="terms-describe">10. Indemnity.
                        </p>
                        <p class="terms-text">
                            All the actions you make and information you post on SIDEPIECE remain your
                            responsibility. Therefore, you agree to indemnify, defend, release, and hold
                            us, and our partners, licensors, affiliates, contractors, officers, directors,
                            employees, representatives and agents, harmless, from and against any
                            third party claims, damages (actual and/or consequential), actions,
                            proceedings, demands, losses, liabilities, costs and expenses (including
                            reasonable legal fees) suffered or reasonably incurred by us arising as a
                            result of, or in connection with:
                        </p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">
                                any negligent acts, omissions or wilful misconduct by you;
                            </li>
                            <li class="terms-content-list-item">
                                your access to and use of the App;
                            </li>
                            <li class="terms-content-list-item">
                                the uploading or submission of Content to the App by you;
                            </li>
                            <li class="terms-content-list-item">
                                any breach of these Terms by you
                            </li>
                            <li class="terms-content-list-item">
                                your violation of any law or of any rights of any third party.
                            </li>
                        </ol>
                        <p class="terms-text">
                            We retain the exclusive right to settle, compromise and pay any and all
                            claims or causes of action which are brought against us without your prior
                            consent. If we ask, you will co-operate fully and reasonably as required by
                            us in the defence of any relevant claim.
                        </p>
                        <p class="terms-text">
                            The foregoing provision does not require you to indemnify SIDEPIECE Group for
                            any unconscionable commercial practice or any fraud, deception, false
                            promise, misrepresentation or concealment, suppression or omission of
                            any material fact in connection with the App.
                        </p>
                        <!-- -->
                        <p class="terms-describe">11. Digital millenium
                            copyright act.
                        </p>
                        <p class="terms-text">
                            The SIDEPIECE Group has adopted the following policy towards copyright
                            infringement in accordance with the Digital Millennium Copyright Act (the
                            “DMCA”). If you believe any Member Content infringes upon your
                            intellectual property rights, please submit a notification alleging such
                            infringement (“DMCA Takedown Notice”) to SIDEPIECE Group’s Copyright
                            Agent as identified below, including the following:
                        </p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">
                                A physical or electronic signature of a person authorized to act on
                                behalf of the owner of an exclusive right that is allegedly infringed;
                            </li>
                            <li class="terms-content-list-item">
                                Identification of the copyrighted work claimed to have been infringed,
                                or, if multiple copyrighted works at a single online site are covered by
                                a single notification, a representative list of such works;
                            </li>
                            <li class="terms-content-list-item">
                                Identification of the material claimed to be infringing or to be the
                                subject of infringing activity and that is to be removed or access
                                disabled and information reasonably sufficient to permit the service
                                provider to locate the material;
                            </li>
                            <li class="terms-content-list-item">
                                Information reasonably sufficient to permit the service provider to
                                contact you, such as an address, telephone number, and, if available,
                                an electronic mail;
                            </li>
                            <li class="terms-content-list-item">
                                A statement that you have a good faith belief that use of the material
                                in the manner complained of is not authorised by the copyright owner,
                                its agent, or the law

                            </li>
                            <li class="terms-content-list-item">
                                A statement that, under penalty of perjury, the information in the
                                notification is accurate and you are authorised to act on behalf of the
                                owner of the exclusive right that is allegedly infringed.
                            </li>
                        </ol>
                        <p class="terms-text">
                            Any DMCA Takedown Notices should be sent to SIDEPIECE Group’s Copyright
                            Agent at: <a class="terms-link" href="mailto:feedback@SIDEPIECEdatingapp.com">feedback@SIDEPIECEdatingapp.com</a>
                        </p>
                        <!-- -->
                        <p class="terms-describe">12. Third party app store.
                        </p>
                        <p class="terms-text">
                            The following additional terms and conditions apply to you if you download
                            the App from a Third Party Store. To the extent that the other terms and
                            conditions of these Terms are less restrictive than, or otherwise conflict
                            with, the terms and conditions of this Section, the more restrictive or
                            conflicting terms and conditions in this Section will apply, but solely with
                            respect to the App and the Third Party Store. You acknowledge and agree
                            that:
                        </p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">
                                These Terms are concluded solely between you and the SIDEPIECE
                                Group and not with the providers of the Third Party Store, and the
                                SIDEPIECE (and not the Third Party Store providers) is solely responsible
                                for the App and the content thereof. To the extent that these Terms
                                provide for usage rules for the App which are less restrictive or in
                                conflict with the applicable terms of service of the Third Party Store
                                from which you obtain the App, the more restrictive or conflicting term
                                of the Third Party Store will take precedence and will apply.
                            </li>
                            <li class="terms-content-list-item">
                                The Third Party Store provider has no obligation whatsoever to
                                provide any maintenance and support services with respect to the
                                App. The SIDEPIECE is solely responsible for any product warranties,
                                whether express or implied by law, to the extent not effectively
                                disclaimed. The Third Party Store provider will have no warranty
                                obligation whatsoever with respect to the App, and any other claims,
                                losses, liabilities, damages, costs or expenses attributable to any
                                failure to conform to any warranty will be the sole responsibility of the
                                SIDEPIECE.
                            </li>
                            <li class="terms-content-list-item">
                                The SIDEPIECE not the Third Party Store provider, is responsible for
                                addressing any claims you or any third party may have relating to the
                                App or your possession and/or use of the App, including, but not
                                limited to: (i) product liability claims; (ii) any claim that the App fails to
                                conform to any applicable legal or regulatory requirement; (iii) claims
                                arising under consumer protection or similar legislation
                                /or (iv)
                                intellectual property infringement claims.
                            </li>
                            <li class="terms-content-list-item">
                                The Third Party Store provider and its subsidiaries are third party
                                beneficiaries of these Terms, and, upon your acceptance of these
                                Terms, the Third Party Store provider from whom you obtained the
                                App will have the right (and will be deemed to have accepted the
                                right) to enforce these Terms against you as a third party beneficiary
                                thereof.
                            </li>
                        </ol>
                        <p class="terms-text">
                            In the event of a conflict between a Third Party Store’s or mobile carrier’s
                            applicable terms and conditions and these Terms, the terms and conditions
                            of the Third Party Store or mobile carrier shall govern and control. We are
                            not responsible and have no liability whatsoever for third-party goods or
                            services you obtain through a Third Party Store or mobile carrier. We
                            encourage you to make whatever investigation you feel necessary or
                            appropriate before proceeding with any online transaction with any of these
                            third parties
                        </p>
                        <!---->
                        <p class="terms-describe">13. Dispute resolution.
                        </p>
                        <p class="terms-describe-title">
                            Please read the following arbitration agreement in this Section
                            (“Arbitration Agreement”) carefully. Unless you opt out in the manner
                            described in subsection 7 below, this agreement requires you to
                            arbitrate disputes with SIDEPIECE Group and limits the manner in which
                            you seek relief from us.
                        </p>
                        <div class="terms-content-list">
                            <p class="terms-text">
                                <span class="terms-describe-title">1. When Does This Arbitration Agreement Apply?</span><br>
                                This Arbitration
                                Agreement applies to any dispute or claim relating to your use of our App or
                                any other aspect of your relationship with SIDEPIECE Group. It requires that,
                                and by entering into these Terms you agree, that such claims will be
                                resolved by binding arbitration, rather than in court, except that (i) you may
                                assert claims in small claims court if your claims qualify
                                (ii) you or
                                SIDEPIECE Group may seek equitable relief in court for infringement or misuse
                                of intellectual property rights.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">2. How Do You Start The Arbitration Process?</span><br>
                                To begin the arbitration
                                proceeding, you must send a letter requesting arbitration and describing
                                your claim to our registered agent: CT Corporation, 1209 Orange Street,
                                City of Wilmington, County of New Castle, Delaware 19801.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">3. What Are The Rules Of Arbitration?</span><br>
                                The Federal Arbitration Act
                                governs the interpretation and enforcement of this Arbitration Agreement.
                                The arbitration will be governed by JAMS, an established alternative
                                dispute resolution provider. Disputes involving claims and counterclaims
                                under $250,000, not inclusive of attorneys’ fees and interest, shall be
                                subject to JAMS’ most current version of the Streamlined Arbitration Rules
                                and procedures available at: <a class="terms-link" href="https://www.jamsadr.com/rules-streamlined-arbitration/">https://www.jamsadr.com/rules-streamlined-arbitration/</a>
                                . All other claims will be subject to JAMS’ most current version of
                                the Comprehensive Arbitration Rules and Procedures, available at: <a class="terms-link" href="https://www.jamsadr.com/rules-comprehensive-arbitration/">https://
                                    www.jamsadr.com/rules-comprehensive-arbitration/</a> . JAMS’ rules are also
                                available at www.jamsadr.com or by calling JAMS at 800-352-5267. If
                                JAMS is not available to arbitrate, the parties will select an alternative
                                arbitral forum. If the arbitrator finds that you cannot afford to pay JAMS’
                                filing, administrative, hearing and/or other fees and cannot obtain a waiver
                                from JAMS, SIDEPIECE Group will pay them for you. In addition, SIDEPIECE Group
                                will reimburse all such JAMS’ filing, administrative, hearing and/or other
                                fees for claims totaling less than $10,000 unless the arbitrator determines
                                the claims are frivolous.
                            </p>
                            <p class="terms-text">
                                You may choose to have the arbitration conducted by telephone, based on
                                written submissions, or in person in the country where you live or at
                                another mutually agreed location.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">4. What Can The Arbitrator Decide?</span><br>
                                The arbitrator has the exclusive
                                authority to (i) determine the scope and enforceability of this Arbitration
                                Agreement, and (ii) resolve any dispute related to the interpretation,
                                applicability, enforceability or formation of this Arbitration Agreement
                                including, but not limited to, any claim that all or any part of this Arbitration
                                Agreement is void or voidable. The arbitrator will have the authority to grant
                                motions dispositive of all or part of any claim. The arbitrator will have the
                                authority to award monetary damages and to grant any non-monetary
                                remedy or relief available to an individual under applicable law, the arbitral
                                forum’s rules, and the Agreement (including the Arbitration Agreement).
                                The arbitrator will issue a written award and statement of decision
                                describing the essential findings and conclusions on which the award is
                                based, including the calculation of any damages awarded. The arbitrator
                                has the same authority to award relief on an individual basis that a judge in
                                a court of law would have. The award of the arbitrator is final and binding
                                upon you and us.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">5. No Jury Trials.</span><br>
                                By agreeing to arbitration, YOU AND SIDEPIECE GROUP
                                ARE EACH AGREEING TO WAIVE OUR RIGHTS TO A JURY TRIAL.
                                Instead, you and SIDEPIECE Group are electing that all claims and disputes will
                                be resolved by arbitration under this Arbitration Agreement, except as
                                described in Section 13(1) above. An arbitrator can award on an individual
                                basis the same damages and relief as a court and must follow this
                                Agreement as a court would. However, there is no judge or jury in
                                arbitration, and court review of an arbitration award is subject to very
                                limited review.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">6. One At A Time.</span><br>
                                All claims and disputes within the scope of this
                                Arbitration Agreement MUST BE ARBITRATED ON AN INDIVIDUAL BASIS
                                AND NOT ON A CLASS OR COLLECTIVE BASIS, AND YOU GIVE UP
                                YOUR RIGHT TO PARTICIPATE IN A CLASS ACTION OR ANY OTHER
                                CLASS PROCEEDING. Only individual relief is available, and claims of
                                more than one customer or user cannot be arbitrated or consolidated with
                                those of any other customer or user. The arbitration proceeding will not be
                                consolidated with any other matters or joined with any other cases or
                                parties. If a decision is issued stating that applicable law precludes
                                enforcement of any of this subsection’s limitations as to a given claim for
                                relief, then the claim must be severed from the arbitration and brought into
                                the State or Federal Courts located in Travis County, Texas. All other claims
                                shall be arbitrated.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">7. 31-Day Right to Opt. This opt out section does not apply to new
                                    members after January 18, 2021.</span><br>
                                You have the right to opt out of the
                                provisions of this Arbitration Agreement by sending written notice of your
                                decision to opt out to: <a class="terms-link" href="mailto:optout@team.Sidepiece.com">SIDEPIECE
                                    optout@team.SIDEPIECE.com</a> , within 31 days
                                after first becoming subject to this Arbitration Agreement. Your notice must
                                include your name and address, your SIDEPIECE username (if any), the email
                                address you used to set up your SIDEPIECE account (if you have one), and an
                                unequivocal statement that you want to opt out of this Arbitration
                                Agreement. If you opt out of this Arbitration Agreement, all other parts of
                                this Agreement will continue to apply to you. Opting out of this Arbitration
                                Agreement has no effect on any other arbitration agreements that you may
                                currently have, or may enter in the future, with us.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">8. Severability.</span><br>
                                Except as provided in subsection 13(6), if any part or parts
                                of this Arbitration Agreement are found under the law to be invalid or
                                unenforceable, then such specific part or parts shall be of no force and
                                effect and shall be severed and the remainder of the Arbitration Agreement
                                shall continue in full force and effect.
                            </p>
                            <p class="terms-text">
                                <span class="terms-describe-title">9. Survival of Agreement.</span><br>
                                The terms of this Arbitration Agreement will
                                continue, even after your relationship with SIDEPIECE Group has ended.
                            </p>
                        </div>
                        <p class="terms-describe">14. Termination and remedies
                        </p>
                        <p class="terms-text">
                            These Terms commence on the date you accept them (as described in the
                            preamble) and continue until terminated in accordance with the terms
                            herein.
                        </p>
                        <p class="terms-text">
                            If you want to terminate these Terms, you may do so by (a) notifying SIDEPIECE
                            Group at any time, and (b) closing your Account. Your notice should be sent
                            to SIDEPIECE Group’s address below. Please note that if you terminate these
                            Terms, your subscription will continue until the end of the subscription
                            period for which applicable fees have been paid, and you will not be
                            entitled to a refund except as stated in Section 5.
                        </p>
                        <p class="terms-text">
                            SIDEPIECE Group may terminate or suspend these Terms, including your
                            Account, if you breach these Terms or if SIDEPIECE Group is required to do so
                            by applicable law. You agree that all terminations for cause shall be made
                            in SIDEPIECE Group’s sole discretion and that SIDEPIECE Group shall not be liable
                            to you or any third party for any termination of your Account.
                        </p>
                        <p class="terms-text">
                            In the event that SIDEPIECE Group determines, in its sole discretion, that you
                            have breached any portion of these Terms, or have otherwise
                            demonstrated conducted inappropriate for the App, SIDEPIECE Group reserves
                            the right to: (a) warn you via email (to any email addresses you have
                            provided to SIDEPIECE Group) that you have violated the Terms; (b) delete your
                            User Content; (c) discontinue your Account; (d) discontinue your
                            subscription(s); (e) notify and/or send your User Content to and/or fully
                            cooperate with the proper law enforcement authorities for further action;
                            and/or (f) pursue to any other action which SIDEPIECE Group deems to be
                            appropriate.
                        </p>
                        <p class="terms-text">
                            Termination of these Terms or your Account includes the removal of access
                            to your Account, and all related information and content associated with or
                            inside your Account
                        </p>
                        <p class="terms-text">
                            All provisions of these Terms, which by their nature should survive, shall
                            survive termination of these Terms, including, without limitation, the
                            Arbitration Agreement, ownership provisions, warranty disclaimers and
                            limitation of liability.
                        </p>
                        <p class="terms-describe">15. Miscellaneous.
                        </p>
                        <p class="terms-text">
                            There are a few more things we need to mention before you can use SIDEPIECE.
                        </p>
                        <p class="terms-text">
                            These Terms, which we may amend from time to time, constitute the entire
                            agreement between you and the SIDEPIECE Group. The Terms
                            supersede all previous agreements, representations and arrangements
                            between us (written or oral), excluding the Privacy Policy. Nothing in this
                            clause shall limit or exclude any liability for fraudulent misrepresentation.
                        </p>
                        <p class="terms-text">
                            The SIDEPIECE Group has taken reasonable steps to ensure the
                            currency, availability, correctness and completeness of the information
                            contained on SIDEPIECE and provides that information on an "as is", "as
                            available" basis. The SIDEPIECE Group does not give or make any
                            warranty or representation of any kind about the information contained on
                            SIDEPIECE , whether express or implied. Use of SIDEPIECE and the
                            materials available on it is at your sole risk. The SIDEPIECE Group is not
                            responsible for any loss arising from the transmission, use of data, or
                            inaccurate Member Content.
                        </p>
                        <p class="terms-text">
                            You are responsible for taking all necessary precautions to ensure that any
                            material you may obtain from SIDEPIECE is free of viruses or other
                            harmful components. You accept that SIDEPIECE will not be provided
                            uninterrupted or error free, that defects may not be corrected or that The
                            SIDEPIECE Group, or the server that makes it available, are free of
                            viruses or bugs, spyware, Trojan horse or any similar malicious software.
                            The SIDEPIECE Group is not responsible for any damage to your
                            computer hardware, computer software, or other equipment or technology
                            including, but without limitation damage from any security breach or from
                            any virus, bugs, tampering, fraud, error, omission, interruption, defect,
                            delay in operation or transmission, computer line or network failure or any
                            other technical or other malfunction.
                            The communications between you and SIDEPIECE Group may take place
                            via electronic means, whether you use the App or send SIDEPIECE
                            Group emails, or whether SIDEPIECE Group posts notices in the App or
                            communicates with you via email. For contractual purposes, you (a)
                            consent to receive communications from SIDEPIECE Group in electronic
                            form; and (b) agree that all terms and conditions, agreements, notices,
                            disclosures, and other communications that SIDEPIECE Group provides
                            to you electronically satisfy if it were to be in writing. The foregoing does
                            not affect your statutory rights, including but not limited to the Electronic
                            Signatures in Global and National Commerce Act at 15 U.S.C. Sec. 7001
                            et. seq.
                        </p>
                        <p class="terms-describe-title">We know our Terms are awesome, but we may
                            have to change them now and again</p>
                        <p class="terms-text">
                            As SIDEPIECE grows, we might have to make changes to these Terms so
                            we reserve the right to modify, amend or change the Terms at any time (a
                            “Change”). If we do this then the Changes will be posted on this page and
                            we will indicate the Effective Date of the updates at the bottom of the
                            Terms. In certain circumstances, we may send an email to you notifying
                            you of a Change. It’s also possible that we might ask you to agree to our
                            Changes, but we’ll let you know. You should regularly check this page for
                            notice of any Changes – we want our users to be as informed as possible.
                            Your continued use of SIDEPIECE following any Change constitutes your
                            acceptance of the Change and you will be legally bound by the new
                            updated Terms. If you do not accept any Changes to the Terms, you should
                            stop using SIDEPIECE immediately (uh oh, that’s going to be hard!).
                        </p>
                        <p class="terms-describe-title">Additional items:</p>
                        <p class="terms-text">
                            If, for any reason, any of the Terms are declared illegal, invalid or otherwise
                            unenforceable by a court of a competent jurisdiction, then to the extent that
                            term is illegal, invalid or unenforceable, it shall be severed and deleted from
                            the Terms and the remainder of the Terms shall survive, remain in full force
                            and effect and continue to be binding and enforceable.
                        </p>
                        <p class="terms-text">
                            No failure or delay in exercising any right, power or privilege under the
                            Terms shall operate as a waiver of such right or acceptance of any variation
                            of the Terms and nor shall any single or partial exercise by either party of
                            any right, power or privilege preclude any further exercise of the right or the
                            exercise of any other right, power or privilege.
                        </p>
                        <p class="terms-text">
                            You represent and warrant that:
                        </p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">
                                you are not located in a country that is subject to a U.S. Government
                                embargo, or that has been designated by the U.S. Government as a
                                “terrorist supporting” country

                            </li>
                            <li class="terms-content-list-item">
                                you are not listed on any U.S. Government list of prohibited or
                                restricted parties.
                            </li>
                        </ol>
                        <p class="terms-text">
                            By using the App, you agree and acknowledge that SIDEPIECE is a global app
                            operating through servers located in a number of countries around the
                            world, including the United States. If you live in a country with data
                            protection laws, the storage of your personal data may not provide you with
                            the same protections as you enjoy in your country of residence. By
                            submitting your personal information, or by choosing to upgrade the
                            services you use, or by making use of the applications available on SIDEPIECE,
                            you agree to the transfer of your personal information to, and storage and
                            processing of your personal information in, any such countries and
                            destinations.
                        </p>
                        <p class="terms-text">
                            The App may contain links to third-party websites or resources. In such
                            cases, you acknowledge and agree that we are not responsible or liable
                            for:
                        </p>
                        <ol class="terms-content-list">
                            <li class="terms-content-list-item">
                                the availability or accuracy of such websites or resources;
                            </li>
                            <li class="terms-content-list-item">
                                the content, products, or services on or available from such websites
                                or resources.
                            </li>
                        </ol>
                        <p class="terms-text">
                            Links to such websites or resources do not imply any endorsement. You
                            acknowledge sole responsibility for and assume all risk arising from your
                            use of any such websites or resources. Framing, in-line linking or other
                            methods of association with the App are expressly prohibited without first
                            obtaining our prior written approval
                        </p>
                        <p class="terms-text">
                            These Terms, and any rights and licenses granted hereunder, may not be
                            transferred or assigned by you, but may be assigned by us without
                            restriction.
                        </p>
                        <p class="terms-text">
                            In the event there is a discrepancy between this English language version
                            and any translated copies of the Terms, the English version shall prevail.
                            If you have any questions, complaints or claims with respect to the App,
                            please contact us at <a class="terms-link" href="mailto:feedback@SIDEPIECEdatingapp.com">feedback@SIDEPIECEdatingapp.com</a>
                        </p>
                        <p class="terms-describe">16. Governing law and
                            forum.
                        </p>
                        <p class="terms-text">
                            Subject to Section 13(3), your access to the App, Our Content, and any
                            Member Content, any claims arising from or related to your relationship
                            with the SIDEPIECE Group, and these Terms are governed and interpreted by
                            the laws of the State of Texas. All claims arising out of or relating to these
                            Terms and/or your relationship with the SIDEPIECE Group that for whatever
                            reason are not submitted to arbitration, and all claims or cases challenging
                            the enforceability or applicability of the arbitration provisions herein, will be
                            litigated exclusively in the federal or state courts of Travis County, Texas.
                            You agree that such courts shall have personal jurisdiction and venue and
                            waive any objection based on inconvenient forum. You agree that you will
                            not file or participate in a class action against us.
                        </p>
                        <p class="terms-describe">17. Privileged Trading inc</p>
                        <p class="terms-text">
                            The Terms constitute a binding legal agreement between you as user
                            (“you”) and the Privileged Trading inc(“we” or “us”). Privileged Trading inc
                            includes, but is not limited to, Privileged Trading inc (an English company),
                            Privileged Trading co (a California corporation), Privileged Trading inc
                            ( California corporation) , Social Online Payments Limited (a company
                            incorporated in Ireland) and Social Online Payments L.L.C. (a California
                            corporation).
                        </p>
                        <p class="terms-describe-title">Effective date</p>
                        <p class="terms-text">
                            The Terms were last updated on: October 12, 2022.
                        </p>
                    </div>
                </div>
                <div class="block-item block-cookie" data-block="#cookie">
                    <div class="block-cookie-content">
                        <h5 class="terms-header-title">Sidepiece
                            Cookie Policy</h5>
                        <p class="terms-describe-title">Introduction</p>
                        <p class="terms-text">SIDEPIECE is committed to protecting your
                            privacy. We aim to provide trustworthy,
                            industry-leading products and services so that
                            you can focus on building meaningful
                            relationships. Our approach to privacy is to
                            provide you with clear guidance and
                            information about our data practices. That’s
                            why we've tried to keep legal and technical
                            slang to a minimum.
                        </p>
                        <p class="terms-text">
                            This Cookie Policy explains what cookies are,
                            what types of cookies are placed on your
                            device when you visit our website and how we
                            use them.<br>
                            This Cookie Policy does not address how we
                            deal with your personal information generally.
                            To learn more about how we process your
                            personal information, please see our Privacy
                            Policy here.
                        </p>
                        <p class="terms-describe-title">
                            What are cookies?
                        </p>
                        <p class="terms-text">
                            Cookies are small text files that are sent to or
                            accessed from your web browser or your
                            device’s memory. A cookie typically contains
                            the name of the domain (internet location)
                            from which the cookie originated, the “lifetime”
                            of the cookie (i.e., when it expires) and a
                            randomly generated unique number or similar
                            identifier. A cookie also may contain
                            information about your device, such as user
                            settings, browsing history and activities
                            conducted while using our services.
                        </p>


                        <p class="terms-describe-title">
                            Are there different types of
                            cookies? First-party and third-
                            party cookies
                        </p>
                        <p class="terms-text">
                            There are first-party cookies and third-party
                            cookies. First- party cookies are placed on
                            your device directly by us. For example, we
                            use first-party cookies to adapt our website to
                            your browser’s language preferences and to
                            better understand your use of our website.
                            Third-party cookies are placed on your device
                            by our partners and service providers. For
                            example, we use third-party cookies to
                            measure user numbers on our website or to
                            enable you to share content with others
                            across social media platforms.
                        </p>
                        <!--  -->
                        <p class="terms-describe-title">
                            Session and persistent cookies
                        </p>
                        <p class="terms-text">
                            There are session cookies and persistent cookies. Session cookies only last until you close your browser. We
                            use session cookies for a variety of reasons, including to learn more about your use of our website during
                            one single browser session and to help you to use our website more efficiently. Persistent cookies have a
                            longer lifespan and aren't automatically deleted when you close your browser. These types of cookies are
                            primarily used to help you quickly sign-in to our website again and for analytical purposes.
                        </p>
                        <p class="terms-describe-title">
                            What about other tracking technologies,
                            like web beacons?
                        </p>
                        <p class="terms-text">
                            Other technologies such as web beacons (also calls pixel tags or clear gifs), tracking URLs or software
                            development kits (SDKs) are used for similar purposes. Web beacons are tiny graphics files that contain a
                            unique identifier that enable us to recognize when someone has visited our service or opened an e-mail that
                            we have sent them. Tracking URLs are custom generated links that help us understand where the traffic to our
                            webpages comes from. SDKs are small pieces of code included in apps, which function like cookies and web
                            beacons. For simplicity, we also refer to these technologies as “cookies” in this Cookie Policy.
                        </p>
                        <p class="terms-describe-title">
                            What do we use cookies for?
                        </p>
                        <p class="terms-text">Like most providers of online services, we use cookies to provide, secure and improve
                            our services, including by remembering your preferences, recognizing you when you visit our website and
                            personalizing and tailoring ads to your interests. To accomplish these purposes, we also may link
                            information from cookies with other personal information we hold about you. </p>
                        <p class="terms-text">
                            When you visit our website, some or all of the following types of cookies may be set on your device.
                        </p>

                        <div class="wrapper-table">
                            <table border="1" class="privacy-table">
                                <tbody>
                                    <tr>
                                        <th class="terms-describe-title">Cookie type
                                        </th>
                                        <th class="terms-describe-title">Description</th>
                                    </tr>
                                    <tr>
                                        <td class="terms-text">
                                            <span class="terms-describe-title">Essential website
                                                cookies</span>
                                        </td>
                                        <td class="terms-text">
                                            These cookies are
                                            strictly necessary to
                                            provide you with
                                            services available
                                            through our website
                                            and to use some of its
                                            features, such as
                                            access to secure
                                            areas.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="terms-text">
                                            <span class="terms-describe-title">Analytics cookies</span>
                                        </td>
                                        <td class="terms-text">
                                            These cookies help us
                                            understand how our
                                            website is being used,
                                            how effective
                                            marketing campaigns
                                            are, and help us
                                            customize and
                                            improve our websites
                                            for you.
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="terms-text">
                                            <span class="terms-describe-title">Advertising cookies</span>
                                        </td>
                                        <td class="terms-text">
                                            These cookies are
                                            used to make
                                            advertising messages
                                            more relevant to you.
                                            They perform
                                            functions like
                                            preventing the same
                                            ad from continuously
                                            reappearing, ensuring
                                            that ads are properly
                                            displayed for
                                            advertisers, selecting
                                            advertisements that
                                            are based on your
                                            interests and
                                            measuring the number
                                            of ads displayed and
                                            their performance,
                                            such as how many
                                            people clicked on a
                                            given ad.
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="terms-text">
                                            <span class="terms-describe-title">Social networking
                                                cookies</span>
                                        </td>
                                        <td class="terms-text">
                                            These cookies are
                                            used to enable you to
                                            share pages and
                                            content that you find
                                            interesting on our
                                            website through third-
                                            party social
                                            networking and other
                                            websites. These
                                            cookies may also be
                                            used for advertising
                                            purposes too.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>


                        <!--  -->
                        <p class="terms-describe-title">How can you control cookies? </p>
                        <p class="terms-text">There are several cookie management options available to you. Please note that changes
                            you make to your cookie preferences may make browsing our website a less satisfying experience. In some
                            cases, you may even find yourself unable to use all or part of our site.
                        </p>
                        <p class="terms-describe-title">Browser and devices controls </p>
                        <p class="terms-text">Some web browsers provide settings that allow you to control or reject cookies or to
                            alert you when a cookie is placed on your computer. The procedure for managing cookies is slightly different
                            for each internet browser. You can check the specific steps in your particular browser help menu.
                        </p>
                        <p class="terms-text">You also may be able to reset device identifiers by activating the appropriate setting
                            on your mobile device. The procedure for managing device identifiers is slightly different for each device.
                            You can check the specific steps in the help or settings menu of your particular device.
                        </p>
                        <p class="terms-describe-title">Interest-based advertising tools </p>
                        <p class="terms-text"> You can opt out of seeing online interest-based advertising from participating
                            companies through the Digital Advertising Alliance, the Interactive Digital Advertising Alliance or
                            Appchoices (apps only). Opting out does not mean you will not see advertising - it means you won’t see
                            personalized advertising from the companies that participate in the opt-out programs. Also, if you delete
                            cookies on your device after you opted out, you will need to opt-out again. </p>
                        <p class="terms-describe-title">Social Cookies </p>
                        <p class="terms-text">To allow you to share content on social media, some features of this website use social
                            media plug-ins (e.g., TwitterTM “Share to Twitter” or LinkedInTM “in” buttons). Depending on your social
                            media account settings, we automatically receive information from the social media platform when you use the
                            corresponding button on our website. </p>
                        <p class="terms-text">To learn more about social media cookies, we suggest you refer to your social media
                            platform’s cookie policy and privacy policy. </p>
                        <p class="terms-describe-title">Adobe Flash PlayerTM Flash cookies </p>
                        <p class="terms-text">Adobe Flash PlayerTM is an application for viewing and interacting with dynamic content
                            using the Flash platform. Flash (and similar applications) use a technology akin to cookies to memorize
                            parameters, preferences and uses of this content. However, Adobe Flash Player manages this information and
                            your choices via an interface separate from that supplied by your browser. </p>
                        <p class="terms-text">If your terminal is likely to display content developed using the Flash platform, we
                            suggest you access your Flash cookie management tools directly via <a class="terms-link" href="https://www.adobe.com">https://www.adobe.com</a>.
                        </p>
                        <p class="terms-describe-title">GoogleTM CookiesStuff Google Wants to Make Sure You Know about Google’s Data
                            Collection Technology </p>
                        <p class="terms-describe-title">GoogleTM Maps API Cookies </p>
                        <p class="terms-text">Some features of our website and some Sidepiece services rely on the use of GoogleTM Maps
                            API Cookies. Such cookies will be stored on your device. When browsing this website and using the services
                            relying on GoogleTM Maps API cookies, you consent to the storage, collection of such cookies on your device
                            and to the access, usage and sharing by Google of the data collected thereby. GoogleTM manages the
                            information and your choices pertaining to GoogleTM Maps API Cookies via an interface separate from that
                            supplied by your browser. For more information, please see
                            <a class="terms-link long" href="https://www.google.com/policies/technologies/cookies/">
                                https://www.google.com/policies/technologies/cookies/</a>
                        </p>
                        <p class="terms-describe-title">Google Analytics </p>
                        <p class="terms-text">We use Google Analytics, which is a Google service that uses cookies and other data
                            collection technologies to collect information about your use of the website and services in order to report
                            website trends.
                        </p>
                        <p class="terms-text">You can opt out of Google Analytics by visiting <a class="terms-link" href="https://www.google.com/settings/ads">www.google.com/settings/ads</a>
                            or by
                            downloading the Google Analytics opt-out browser add-on at
                            <a class="terms-link" href="https://tools.google.com/dlpage/gaoptout">https://tools.google.com/dlpage/gaoptout</a>.
                        <p class="terms-describe">Privileged Trading inc </p>
                        <p class="terms-text-smaller">
                            The Terms constitute a binding legal agreement between you as user (“you”) and the Privileged
                            Trading inc(“we” or “us”). Privileged Trading inc includes, but is not limited to, Privileged
                            Trading inc (an English company), Privileged Trading co (a California corporation), Privileged
                            Trading inc ( California corporation) , Social Online Payments Limited (a company incorporated
                            in Ireland) and Social Online Payments L.L.C. (a California corporation).
                        </p>
                        <p class="terms-describe-title">
                            Effective date
                        </p>
                        <p class="terms-text">
                            The Terms were last updated on: October 12th, 2022.
                        </p>
                    </div>
                </div>
                <div class="block-item block-eula" data-block="#eula">
                    <div class="block-eula-content">
                        <h5 class="terms-header-title">Sidepiece End User License Agreement</h5>
                        <p class="terms-text">
                            Sidepiece End User License Agreement ("Agreement") is a binding agreement between you ("End User" or "you") and
                            Privileged Trading Inc. ("Company"). This Agreement governs your use of the Privileged Trading Supplier
                            Self-Assessment (SSA) Sidepiece for Apple iOS or Google Android operating systems (including all related
                            documentation, the "Application").
                        </p>
                        <p class="terms-text">
                            By downloading/installing/using the application, you (a) acknowledge that you have read and understand this
                            agreement; (b) represent that you are of legal age to enter into a binding agreement
                            (c) accept this
                            agreement and agree that you are legally bound by its terms. If you do not agree to these terms, do not
                            download/ install/use the application.
                        </p>
                        <p class="terms-describe-title">
                            1. License Grant.
                        </p>
                        <p class="terms-text"> Subject to the terms of this Agreement, Company grants you a limited, non-exclusive and
                            nontransferable license to:</p>
                        <p class="terms-text">
                            (a) download, install and use the Application for your personal, non- commercial use on a single mobile
                            device owned or otherwise controlled by you ("Mobile Device") strictly in accordance with the Application's
                            documentation.
                        </p>
                        <p class="terms-describe-title">
                            2. License Restrictions.
                        </p>
                        <p class="terms-text"> Licensee shall not:</p>
                        <p class="terms-text">
                            (a) copy the Application, except as expressly permitted by this license;
                        </p>
                        <p class="terms-text">
                            (b) modify, translate, adapt or otherwise create derivative works or
                            improvements, whether or not patentable, of the Application;
                        </p>
                        <p class="terms-text">
                            (c) reverse engineer, disassemble, decompile, decode or otherwise attempt to derive or gain access to the
                            source code of the Application or any part thereof;
                        </p>
                        <p class="terms-text">
                            (d) remove, delete, alter or obscure any trademarks or any copyright, trademark, patent or other
                            intellectual property or proprietary rights notices from the Application, including any copy thereof;
                        </p>
                        <p class="terms-text">
                            (e) rent, lease, lend, sell, sublicense, assign, distribute, publish, transfer or otherwise make available
                            the Application or any features or functionality of the Application, to any third party for any reason,
                            including by making the Application
                            available on a network where it is capable of being accessed by more than one device at any time;
                        </p>
                        <p class="terms-text">(f) remove, disable, circumvent or otherwise create or implement any workaround to any
                            copy protection, rights management or security features in or protecting the Application.</p>
                        <p class="terms-describe-title"> 3. Reservation of Rights.</p>
                        <p class="terms-text">
                            You acknowledge and agree that the Application is provided under license, and not
                            sold, to you. You do not acquire any ownership interest in the Application under this Agreement, or any
                            other rights thereto other than to use the Application in accordance with the license granted, and subject
                            to all terms, conditions and restrictions, under this Agreement. Company and its licensors and service
                            providers reserve and shall retain their entire right, title and interest in and to the Application,
                            including all copyrights, trademarks and other intellectual property rights therein or relating thereto,
                            except as expressly granted to you in this Agreement.
                        </p>
                        <!--  -->
                        <p class="terms-describe-title">4. Collection and Use of Your Information. </p>
                        <p class="terms-text">You acknowledge that when you
                            download,
                            install or use the Application, Company may use automatic means (including, for example, cookies and web
                            beacons) to collect information about your Mobile Device and about your use of the Application. You also may
                            be required to provide certain information about yourself as a condition to downloading, installing or using
                            the Application or certain of its features or functionality, and the Application may provide you with
                            opportunities to share information about yourself with others. All information we collect through or in
                            connection with this Application is subject to our Privacy Policy https://www.Privileged
                            Trading.com/resources/documents/mobile-app-ssa-privacy-policy/. By downloading, installing, using and
                            providing information to or through this Application, you consent to all actions taken by us with respect to
                            your information in compliance with the Privacy Policy.
                        </p>
                        <p class="terms-describe-title">5. Updates. </p>
                        <p class="terms-text"> Company may from time to time in its sole discretion develop and
                            provide
                            Application updates, which may include upgrades, bug fixes, patches and other error corrections and/or new
                            features (collectively, including related documentation, "Updates"). Updates may also modify or delete in
                            their entirety certain features and functionality. You agree that Company has no obligation to provide any
                            Updates or to continue to provide or enable any particular features or functionality. Based on your Mobile
                            Device settings, when your Mobile Device is connected to the internet either:
                        </p>
                        <p class="terms-text">(a) the Application will automatically download and install all available Updates;
                        </p>
                        <p class="terms-text">(b) you may receive notice of or be prompted to download and install available
                            Updates.</p>
                        <p class="terms-text">You shall promptly download and install all Updates and acknowledge and agree that the
                            Application or portions thereof may not properly operate should you fail to do so. You further agree that
                            all Updates will be deemed part of the Application and be subject to all terms and conditions of this
                            Agreement.
                        </p>
                        <p class="terms-describe-title">6. Term and Termination.</p>
                        <p class="terms-text">(a) The term of Agreement commences when you download/install the Application and will
                            continue in effect until terminated by you or Company as set forth in this Section 6.
                        </p>
                        <p class="terms-text">(b) You may terminate this Agreement by deleting the Application and all copies thereof
                            from your Mobile Device.
                        </p>
                        <p class="terms-text">(c) Company may terminate this Agreement at any time without notice if it ceases to
                            support the Application, which Company may do in its sole discretion. In addition, this Agreement will
                            terminate immediately and automatically without any notice if you violate any of the terms and conditions of
                            this Agreement.
                        </p>
                        <p class="terms-text">(d) Upon termination:
                        </p>
                        <p class="terms-text">(i) all rights granted to you under this Agreement will also terminate;
                            and
                        </p>
                        <p class="terms-text">(ii) you must cease all use of the Application and delete all copies of the Application
                            from your Mobile Device and account.
                        </p>
                        <p class="terms-text">(e) Termination will not limit any of Company's rights or remedies at law or in
                            equity.
                        </p>
                        <p class="terms-describe-title">7. Disclaimer of Warranties.</p>
                        <p class="terms-text">The application is provided to licensee "as is"
                            and with all faults and defects without warranty of any kind. To the maximum extent permitted under
                            applicable law, company, on its own behalf and on behalf of its affiliates and its and their respective
                            licensors and service providers, expressly disclaims all warranties, whether express, implied, statutory or
                            otherwise, with respect to the application, including all implied warranties of merchantability, fitness for
                            a particular purpose, title and non-infringement, and warranties that may arise out of course of dealing,
                            course of performance, usage or trade practice. Without limitation to the foregoing, company provides no
                            warranty or undertaking, and makes no representation of any kind that the application will meet your
                            requirements, achieve any intended results, be compatible or work with any other software, applications,
                            systems or services, operate without interruption, meet any performance or reliability standards or be error
                            free or that any errors or defects can or will be corrected.
                        </p>
                        <p class="terms-describe-title">Some jurisdictions do not allow the exclusion of or limitations on implied
                            warranties or the limitations on the applicable statutory rights of a consumer, so some or all of the above
                            exclusions and limitations may not apply to you.
                        </p>
                        <p class="terms-describe-title">8. Limitation of Liability. </p>
                        <p class="terms-text">To the fullest extent permitted by applicable law,
                            in no event will company or its affiliates, or any of its or their respective licensors or service
                            providers, have any liability for damages arising from or related to your use of or inability to use the
                            application.
                            The foregoing limitations will apply whether such damages arise out of breach of contract, tort (including
                            negligence) or otherwise and regardless of whether such damages were foreseeable or company was advised of
                            the possibility of such damages. Some jurisdictions do not allow certain limitations of liability so some or
                            all of the above limitations of liability may not apply to you.
                        </p>
                        <p class="terms-describe-title">9. Indemnification.</p>
                        <p class="terms-text"> You agree to indemnify, defend and hold harmless Company
                            and its officers, directors, employees, agents, affiliates, successors and assigns from and against any and
                            all losses, damages, liabilities, deficiencies, claims, actions, judgments, settlements, interest, awards,
                            penalties, fines, costs, or expenses of whatever kind, including attorneys' fees, arising from or relating
                            to your use or misuse of the Application or your breach of this Agreement. Furthermore, you agree that
                            Company assumes no responsibility for the content you submit or make available through this Application.
                        </p>
                        <p class="terms-describe-title">10. Export Regulation.</p>
                        <p class="terms-text">The Application may be subject to US export control
                            laws, including the US Export Administration Act and its associated regulations. You shall not, directly or
                            indirectly, export, re-export or release the Application to, or make the Application accessible from, any
                            jurisdiction or country to which export, re-export or release is prohibited by law, rule or regulation. You
                            shall comply with all applicable federal laws, regulations and rules, and complete all required undertakings
                            (including obtaining any necessary export license or other governmental approval), prior to exporting,
                            re-exporting, releasing or otherwise making the Application available outside the US.
                        </p>
                        <p class="terms-describe-title">11. Severability. </p>
                        <p class="terms-text">If any provision of this Agreement is illegal or
                            unenforceable under applicable law, the remainder of the provision will be amended to achieve as closely as
                            possible the effect of the original term and all other provisions of this Agreement will continue in full
                            force and effect.
                        </p>
                        <p class="terms-describe-title">12. Governing Law. </p>
                        <p class="terms-text">
                            This Agreement is governed by and construed in accordance with the internal laws of the
                            State of Michigan without giving effect to any choice or conflict of law provision or rule. Any legal suit,
                            action or proceeding arising out of or related to this Agreement or the Application shall be instituted
                            exclusively in the federal courts of the United States or the courts of the State of Michigan in each case
                            located in Kent County. You waive any and all objections to the exercise of jurisdiction over you by such
                            courts and to venue in such courts.
                        </p>
                        <p class="terms-describe-title"> 13. Entire Agreement. </p>
                        <p class="terms-text">
                            This Agreement and our Privacy Policy constitute the entire agreement between you and
                            Company with respect to the Application and supersede all prior or contemporaneous understandings and
                            agreements, whether written or oral, with respect to the Application.
                        </p>
                        <p class="terms-describe-title">14. Waiver.</p>
                        <p class="terms-text"> No failure to exercise, and no delay in exercising, on the part of either
                            party, any right or any power hereunder shall operate as a waiver thereof, nor shall any single or partial
                            exercise of any right or power hereunder preclude further exercise of that or any other right hereunder. In
                            the event of a conflict between this Agreement and any applicable purchase or other terms, the terms of this
                            Agreement shall govern.
                        </p>
                        <p class="terms-describe-title">15. Sidepiece has a 0 tolerance policy for objectionable content or abusive
                            users. </p>
                        <p class="terms-text">They will
                            be reported and removed from our application as we do not tolerate such behavior.
                        </p>
                    </div>
                </div>
                <div class="block-item block-coming-soon" data-block="#coming">
                    <h3 class="block-blog-title">Blog
                    </h3>
                    <div class="wrapper-block-blog-content">
                        <div class="block-blog-content">
                            <p class="block-blog-content-title">Coming soon</p>
                            <img class="block-blog-content-img" src="./images/coming-table.webp" alt="Blog Photo">
                            <img class="block-blog-content-img-mobile" src="./images/coming-mob.webp" alt="Blog Photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery.js"></script>
    <script src="./js/jquery-3.5.1.min.js"></script>
    <!-- App Js -->
    <script src="./js/app.js"></script>
</body>

</html>