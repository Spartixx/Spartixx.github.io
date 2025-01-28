<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit-contact"])) {

        $nom = $_POST['name-input'];
        $firstName = $_POST['firstname-input'];
        $subject = $_POST['subject-input'];
        $email = $_POST['mail-input'];
        $message = $_POST['message-input'];

        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'sandbox.smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = 'bbb4392009af9d';
            $mail->Password = '1ddd7cb795e625';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 2525;



            try {
                $mail->setFrom($email, 'Expéditeur');
                $mail->addAddress("nicolasmacrez999@gmail.com", 'Destinataire');

                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body = $message;
                $mail->AltBody = $message;
                $mail->send();?>

                <!DOCTYPE html>
                <html lang="fr">
                <head>
                    <meta charset="UTF-8">
                    <title>Accueil</title>
                    <link rel="stylesheet" href="style.css">
                </head>
                <body>

                <header>

                    <nav class="menu">
                        <ul>
                            <li >
                                <a class="item-menu" id="1" href="Accueil.html">Accueil</a>
                            </li>

                            <li id="item-title">
                                <h1 >Nicolas Macrez</h1>
                            </li>

                            <li >
                                <a href="#faq-div" id="faq-btn" class="item-menu">Contact</a>
                            </li>
                        </ul>
                    </nav>

                </header>

                <div class="propos">

                </div>

                <div class="container">
                    <div class="new-container">

                        <div class="moi">
                            <h1>A propos de moi :</h1>
                        </div>

                        <div class="description-moi">
                            <h2>Bienvenue sur mon Portfollio. Je m'appelle Nicolas Macrez et je suis etudiant en informatique au sein de l’école IT de Valenciennes en vue d’un Master en Intelligence Artificielle.</h2>
                            <a href="A_Propos.html">En savoir plus</a>
                        </div>

                        <nav class="news news-top">

                            <h2 class="actu-title">Retrouvez mes projets !</h2>
                            <h2 class="actu-title category-techno">Jeux : Python, SQL, C#</h2>

                            <ul>
                                <li class="li-news">
                                    <a href="Projet.html" class="choice-actu">
                                        <img class="item-news" src="ressources/inventoryNews.png" alt="Image Inventaire Joueur">
                                        <h2>Cliquez pour découvrir.</h2>
                                    </a>
                                    <h2 class = "li-news-title subtitle">Jeu de gestion industrielle</h2>
                                </li>

                                <li class="li-news">
                                    <a href="Projet.html" class="choice-actu">
                                        <img class="item-news" src="ressources/buildNews.png" alt="Image Système Construction">
                                        <h2>Cliquez pour découvrir.</h2>
                                    </a>
                                    <h2 class = "li-news-title subtitle">Jeu du pendu</h2>
                                </li>

                                <li class="li-news">
                                    <a href="Projet.html" class="choice-actu">
                                        <img class="item-news" src="ressources/buildNews.png" alt="Image Système Construction">
                                        <h2>Cliquez pour découvrir.</h2>
                                    </a>
                                    <h2 class = "li-news-title subtitle">Ancient Island</h2>
                                </li>
                            </ul>
                        </nav>

                        <nav class="news">

                            <h2 class="actu-title category-techno">Développement Web</h2>

                            <ul>
                                <li class="li-news">
                                    <a href="Projet.html" class="choice-actu">
                                        <img class="item-news" src="ressources/inventoryNews.png" alt="Image Inventaire Joueur">
                                        <h2>Cliquez pour découvrir.</h2>
                                    </a>
                                    <h2 class = "li-news-title subtitle">Jeu du bâtonnet</h2>
                                </li>

                                <li class="li-news">
                                    <a href="Projet.html" class="choice-actu">
                                        <img class="item-news" src="ressources/buildNews.png" alt="Image Système Construction">
                                        <h2>Cliquez pour découvrir.</h2>
                                    </a>
                                    <h2 class = "li-news-title subtitle">Calculatrice</h2>
                                </li>

                            </ul>
                        </nav>
                    </div>

                    <div class="faq" id="faq-div" style="display: none">

                        <form action="contact.php" method="post">
                            <ul>
                                <li class="faq-category">
                                    <div class = "contact-container">
                                        <img src="ressources/mail.png" alt="outils">
                                        <input type="text" name="mail-input" id="mail-input" placeholder="Entrez votre e-mail">
                                    </div>
                                </li>

                                <li class="faq-category">
                                    <div class = "contact-container">
                                        <img src="ressources/userIcon.png" alt="outils">
                                        <input type="text" name="name-input" id="name-input" placeholder="Entrez votre nom">
                                    </div>
                                </li>

                                <li class="faq-category">
                                    <div class = "contact-container">
                                        <img src="ressources/userIcon.png" alt="outils">
                                        <input type="text" name="firstname-input" id="firstname-input" placeholder="Entrez votre prénom">
                                    </div>
                                </li>

                                <li class="faq-category" id="subject-id">
                                    <div class = "contact-container" id="subject-container">
                                        <img src="ressources/messageIcon.png" alt="outils">
                                        <input type="text" name="subject-input" id="subject-input" placeholder="Entrez l'objet">
                                    </div>
                                </li>

                                <li class="faq-category" id="message-id">
                                    <div class = "contact-container" id="message-container">
                                        <img src="ressources/messageIcon.png" alt="outils">
                                        <textarea name="message-input" id="message-input" placeholder="Entrez votre message" cols="20" rows="7"></textarea>
                                    </div>
                                </li>

                                <li class="faq-category">
                                    <div class = "contact-container">
                                        <button name = "submit-contact" type="submit" id = "send-button-contact">Envoyer</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>


                <script src="main.js"></script>
                </body>
                </html><?php

            } catch (Exception $e) {
                echo $e;
            }
        }else{
            echo "Mail Invalide !";
        }

    }
}
?>