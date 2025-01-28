<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ancient Island</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="utilities.css">
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

<div class="container">


    <div class="faq" id="faq-div">

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

            <li class="faq-category">
                <div class = "contact-container">
                    <img src="ressources/userIcon.png" alt="outils">
                    <input type="text" name="subject-input" id="subject-input" placeholder="Entrez l'objet du mail">
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
                    <button type="submit" id = "send-button-contact">Envoyer</button>
                </div>
            </li>


        </ul>
    </div>

</body>
</html>