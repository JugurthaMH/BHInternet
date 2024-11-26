<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css?v=<?php echo time();?>"/>
    <title>BH Internet</title>
</head>
<body>
    <header class="vendre">SITE À VENDRE</header>
    <header class="naviguer">
        <div class="container">
            <a href="#"><img src="logo_bhinternet.png" alt="Logo BHinternet"></a>
            <nav>
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Particuliers</a></li>
                    <li><a href="#">Professionnels</a></li>
                    <li><a href="#">Avis Client</a></li>
                    <li><a href="#">Nos Réalisations</a></li>
                    <li><a href="#">Contactez-Nous</a></li>
                </ul>
            </nav>
            <button class="devis">Devis en ligne</button>
        </div>
    </header>
    <!-- div pour l'image de fond -->
    <button class="telephone">01 64 57 40 43</button>
    <div class="background">
        <div class="rectangle_texte">
            <p>bh internet, à votre disposition pour l'organisation de votre soirée</p>
        </div>
        <div class="rectangle">
            <p id="Titre">Estimez gratuitement votre budget pour votre évènement</p>
            <form>
            <div class="form-container">
                <div class="form-group">
                    <label for="entreprise">Entreprise :</label>
                    <input type="text" id="entreprise" name="entreprise" placeholder="Nom de l'entreprise">
                </div>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom">
                </div>
            </div>
            <div class="form-container">
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" id="email" name="email" placeholder="Votre email">
                </div>
                <div class="form-group">
                    <label for="telephone">Téléphone :</label>
                    <input type="tel" id="telephone" name="telephone" placeholder="Votre téléphone">
                </div>
            </div>
            <div class="form-container">
                <div class="form-group">
                    <label for="produit">Type de produit :</label>
                    <select id="produit" name="produit">
                        <option value="" disabled selected>Choisissez un produit</option>
                        <option value="option1">Produit 1</option>
                        <option value="option2">Produit 2</option>
                        <option value="option3">Produit 3</option>
                    </select>
                </div>
            </div>
            <button class="devis">Envoyer</button>
            </form>
        </div>
    </div>
    <!-- Nouvelle section avec fond blanc et texte centré -->
    <div class="section-blanche">
        <div class="texte-centre">
            <h2>Bienvenue</h2>
            <p id="description">Selon une enquête, 60% des personnes intérrogées sont dèçu de leur mariage... Mauvaise organisation, stresse... 
                BH Internet est présente pour vous accompagner pour le plus
                beau jour de votre vie. Notre équipe s'occupe de tout afin que 
                vous puissiez profiter pleinement de votre journée et de vos 
                convives sans se soucier d'autre chose.
            </p>
            <p id="description">Pour vos évènements professionnels ou particuliers nous mettons à votre disposition
                une équipe expérimentée qui sera anticiper et maitriser chacune
                des situations.
            </p>
        </div>
    </div>
    <!-- Ajout des 3 images carrées -->
    <div class="section-blanche2">
        <div class="image-gallery">
            <div class="image-item">
                <img src="roses.jpg" alt="Image 1">
            </div>
            <div class="image-item">
                <img src="jardin.jpg" alt="Image 2">
            </div>
            <div class="image-item">
                <img src="roses.jpg" alt="Image 3">
            </div>
        </div>
    </div>
    <div class="section-blanche3">
        <div class="image-gallery">
            <div class="image-item">
                <img src="jardin.jpg" alt="Image 1">
            </div>
            <div class="image-item">
                <img src="roses.jpg" alt="Image 2">
            </div>
            <div class="image-item">
                <img src="jardin.jpg" alt="Image 3">
            </div>
        </div>
    </div>
</body>
</html>