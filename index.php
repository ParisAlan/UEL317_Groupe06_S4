<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bibliothèque de Gueugnon</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <!-- CSS personnalisé -->
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<header id="site-header">

    <div class="topbar">
        <div class="container">
            <div class="topbar-inner">

                <div class="header-logo">
                    <a href="#">
                        <img src="https://bm.gueugnon.net/data/bm.gueugnon.net/application/layout/logo.png" alt="Bibliothèque de Gueugnon" class="logo-img" />
                    </a>
                </div>

                <div class="search-wrapper">
                    <div class="search-bar">
                        <input type="search" placeholder="Rechercher dans le catalogue..." aria-label="Recherche" />
                        <button type="submit" class="btn-search" aria-label="Lancer la recherche">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                    <div class="search-filters">
                        <div class="filter-dropdown">
                            <button class="filter-btn">Tous critères <i class="bi bi-chevron-down"></i></button>
                            <ul class="filter-menu">
                                <li><a href="#">Tous critères</a></li>
                                <li><a href="#">Titre, auteur, sujet</a></li>
                                <li><a href="#">Titre</a></li>
                                <li><a href="#">Auteur</a></li>
                                <li><a href="#">Sujet</a></li>
                                <li><a href="#">Editeur</a></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">Série</a></li>
                                <li><a href="#">Revues</a></li>
                            </ul>
                        </div>
                        <div class="filter-dropdown">
                            <button class="filter-btn">Sur tous les sites du réseau <i class="bi bi-chevron-down"></i></button>
                            <ul class="filter-menu">
                                <li><a href="#">Bibliothèque de Gueugnon</a></li>
                                <li><a href="#">Bibliobus</a></li>
                                <li><a href="#">Bibliothèque de Neuvy-Grandchamp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="topbar-actions">
                    <a href="#" class="icon-link" title="Aide"><i class="bi bi-question-circle"></i></a>
                    <a href="#" class="icon-link" title="Accessibilité"><i class="bi bi-universal-access"></i></a>
                    <div class="lang-switcher">
                        <a href="?lang=fr" class="lang-btn active" hreflang="fr">FR</a>
                        <span class="lang-sep">|</span>
                        <a href="?lang=en" class="lang-btn" hreflang="en">EN</a>
                    </div>
                    <a href="#" class="btn-gueugnon-primary">Mon compte</a>
                </div>

            </div>
        </div>
    </div>

    <nav class="main-nav" aria-label="Navigation principale">
        <div class="container">
            <ul class="nav-list">

                <li class="nav-item has-dropdown">
                    <a href="#" class="nav-link-btn">Infos pratiques <i class="bi bi-chevron-down nav-chevron"></i></a>
                    <ul class="dropdown-nav">
                        <li><a href="#">Bibliothèque de Gueugnon</a></li>
                        <li><a href="#">Bibliobus</a></li>
                        <li><a href="#">Bibliothèque de Neuvy-Grandchamp</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a href="#" class="nav-link-btn">Au programme</a></li>
                <li class="nav-item"><a href="#" class="nav-link-btn">Nouveautés & Conseils</a></li>
                <li class="nav-item"><a href="#" class="nav-link-btn">Ressources numériques</a></li>
                <li class="nav-item"><a href="#" class="nav-link-btn">Pré-inscription</a></li>

            </ul>
        </div>
    </nav>

</header>

<section class="carousel-section">
    <div id="carouselBiblio" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/id/10/1400/500" class="carousel-img" alt="Slide 1" />
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/20/1400/500" class="carousel-img" alt="Slide 2" />
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/30/1400/500" class="carousel-img" alt="Slide 3" />
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselBiblio" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselBiblio" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <div class="coup-de-coeur">
            <div class="coup-de-coeur-header">COUP DE CŒUR DU MOIS :</div>
            <div class="coup-de-coeur-body">
                <a href="#">
                    <img src="https://images.epagine.fr/302/9782021602302_1_75.jpg" alt="Couverture du livre" class="coup-de-coeur-cover" />
                </a>
                <div class="coup-de-coeur-info">
                    <div class="coup-de-coeur-info-livre">
                        <a href="#" class="coup-titre-link">
                            <p class="coup-titre">La colline</p>
                        </a>
                        <p class="coup-auteur">par Beaussault, Mathilde<br/>2026</p>
                    </div>
                    <a href="#" class="btn-gueugnon-secondary coup-btn">Accéder au document</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="news-biblio section-padding">
    <div class="container">

        <div class="news-biblio-title mb-4">
            <h2>Quoi de neuf à la bibliothèque ?</h2>
            <h3 class="news-subtitle">Joli mois de mai !</h3>
        </div>

        <div class="row g-3">

            <div class="col-lg-4 col-sm-12">
                <a class="#" href="#">
                    <div class="news-card">
                        <img src="https://picsum.photos/id/24/600/400" alt="Actualité" class="news-card-img"/>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Titre</h3>
                            <p class="news-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                                eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-12">
                <a class="#" href="#">
                    <div class="news-card">
                        <img src="https://picsum.photos/id/37/600/400" alt="Actualité" class="news-card-img"/>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Titre</h3>
                            <p class="news-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
                                eiusmod tempor incididunt.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-4 col-sm-12">
                <div class="programme-block">
                    <div class="programme-header">AU PROGRAMME :</div>
                    <div class="programme-list">

                        <div class="programme-item">
                            <div class="programme-date">
                                <span class="date-day">09</span>
                                <span class="date-month">mai</span>
                            </div>
                            <div class="programme-info">
                                <span class="prog-title">Sonate au Jardin</span>
                                <span class="prog-meta">13h30 / 19h – Parc du Château d'Aux</span>
                            </div>
                        </div>

                        <div class="programme-item">
                            <div class="programme-date">
                                <span class="date-day">27</span>
                                <span class="date-month">Mai</span>
                            </div>
                            <div class="programme-info">
                                <span class="prog-title">Instant Ludique de Mai</span>
                                <span class="prog-meta">10h / 17h30 – Bibliothèque de Gueugnon</span>
                            </div>
                        </div>

                        <div class="programme-item">
                            <div class="programme-date">
                                <span class="date-day">27</span>
                                <span class="date-month">Juin</span>
                            </div>
                            <div class="programme-info">
                                <span class="prog-title">Instant Ludique de Juin</span>
                                <span class="prog-meta">10h / 17h30 – Bibliothèque de Gueugnon</span>
                            </div>
                        </div>

                        <a href="#" class="btn-gueugnon-secondary mt-3">Voir tout le programme =></a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ville-banner section-padding-cta">
    <div class="container">
        <div class="ville-inner">

            <div class="ville-logo">
                <img src="logo-gueugnon.jpg" alt="Logo Ville de Gueugnon" />
            </div>

            <div class="ville-text">
                <h3 class="news-subtitle">La Bibliothèque fait partie de la Ville de Gueugnon</h3>
                <p class="ville-desc">Retrouvez toutes les actualités et services de la commune sur le site officiel.</p>
            </div>

            <div class="ville-action">
                <a href="https://www.gueugnon.fr" target="_blank" class="btn-gueugnon-primary">Visiter gueugnon.fr =></a>
            </div>

        </div>
    </div>
</section>

<footer class="site-footer">
    <div class="container">

        <div class="row footer-top">

            <div class="col-lg-3 col-sm-6 footer-col">
                <h4 class="footer-title">Infos pratiques</h4>
                <ul class="footer-links">
                    <li>Bibliothèque du Pays de Gueugnon</li>
                    <li>17 rue Jean Bouveri</li>
                    <li>71130 Gueugnon</li>
                    <li><a href="tel:0385855140">Tél : 03 85 85 51 40</a></li>
                    <li><a href="mailto:brm@gueugnon.net">brm@gueugnon.net</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-6 footer-col">
                <h4 class="footer-title">Horaires</h4>
                <ul class="footer-links">
                    <li><strong>Lundi :</strong> Fermé</li>
                    <li><strong>Mardi :</strong> 14h – 18h</li>
                    <li><strong>Mercredi :</strong> 10h – 12h / 14h – 18h</li>
                    <li><strong>Jeudi :</strong> 10h – 12h / 14h – 18h</li>
                    <li><strong>Vendredi :</strong> Fermé</li>
                    <li><strong>Samedi :</strong> 10h – 12h30 / 13h30 – 16h</li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-6 footer-col">
                <h4 class="footer-title">Navigation rapide</h4>
                <ul class="footer-links">
                    <li><a href="#">Au programme</a></li>
                    <li><a href="#">Nouveautés &amp; Conseils</a></li>
                    <li><a href="#">Ressources numériques</a></li>
                    <li><a href="#">Pré-inscription en ligne</a></li>
                    <li><a href="#">Se connecter</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-sm-6 footer-col">
                <h4 class="footer-title">Accessibilité &amp; langue</h4>
                <div class="footer-lang">
                    <a href="?lang=fr" class="footer-lang-btn active">FR</a>
                    <span>|</span>
                    <a href="?lang=en" class="footer-lang-btn">EN</a>
                </div>
                <ul class="footer-links mt-3">
                    <li><a href="#">Accessibilité (RGAA)</a></li>
                    <li><a href="#">Plan du site</a></li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <span>© Bibliothèque municipale de Gueugnon</span>
            <div class="footer-legal">
                <a href="#">Mentions légales</a>
                <a href="#">Politique de confidentialité</a>
                <a href="#">Gestion des cookies</a>
            </div>
        </div>

    </div>
</footer>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS personnalisé -->
<script src="script.js"></script>

</body>
</html>