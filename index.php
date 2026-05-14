<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Bibliothèque de Gueugnon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"/>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>

<header class="main-header">
    <div class="container">
        <div class="header-top d-flex align-items-center justify-content-between py-3">
            <div class="logo-area">
                <a href="#"><img src="https://bm.gueugnon.net/data/bm.gueugnon.net/application/layout/logo.png" alt="Logo Bibliothèque" class="img-fluid"/></a>
            </div>
            
            <div class="search-area d-none d-lg-block">
                <form class="d-flex flex-column gap-1">
                    <div class="input-group">
                        <input type="text" class="form-control rounded-start-pill ps-4" placeholder="Rechercher dans le catalogue...">
                        <button class="btn btn-search rounded-end-pill px-4" type="button"><i class="bi bi-search"></i></button>
                    </div>
                    <div class="d-flex gap-2 ps-3">
                        <select class="form-select form-select-sm border-0 bg-light"><option>Tous critères</option></select>
                        <select class="form-select form-select-sm border-0 bg-light"><option>Sur tous les sites</option></select>
                    </div>
                </form>
            </div>

            <div class="header-actions d-flex align-items-center gap-3">
                <div class="icons-group d-flex gap-2">
                    <button class="btn-icon"><i class="bi bi-question-circle"></i></button>
                    <button class="btn-icon"><i class="bi bi-eye-slash"></i></button>
                </div>
                <div class="lang-switch fw-bold">
                    <a href="#" class="active">FR</a> | <a href="#">EN</a>
                </div>
                <a href="#" class="btn-biblio-filled">Mon compte</a>
            </div>
        </div>
    </div>

    <nav class="main-nav">
        <div class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="#">INFOS PRATIQUES <i class="bi bi-chevron-down"></i></a></li>
                <li class="nav-item"><a class="nav-link" href="#">AU PROGRAMME</a></li>
                <li class="nav-item"><a class="nav-link" href="#">NOUVEAUTÉS & CONSEIL</a></li>
                <li class="nav-item"><a class="nav-link" href="#">RESSOURCES NUM.</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PRÉ-INSCRIPTION</a></li>
            </ul>
        </div>
    </nav>
</header>

<main>
    <section class="hero-section position-relative">
        <div class="container h-100 d-flex align-items-center justify-content-end">
            <div class="hero-controls">
                <button class="carousel-arrow prev"><i class="bi bi-chevron-left"></i></button>
                <button class="carousel-arrow next"><i class="bi bi-chevron-right"></i></button>
            </div>
            
            <div class="coup-de-coeur-card p-4">
                <div class="cdc-header mb-3">COUP DE COEUR DU MOIS :</div>
                <div class="d-flex gap-3">
                    <div class="book-cover">
                        <img src="https://static.actugaming.net/media/2024/07/marvel-rivals.webp" alt="Livre du mois"/>
                    </div>
                    <div class="book-info">
                        <h4 class="book-title">TITRE DU LIVRE</h4>
                        <p class="book-author">par Auteur, Prénom<br>Année de sortie</p>
                        <a href="#" class="btn-biblio btn-biblio-full mt-3">Accéder au document =></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-dots w-100 text-center">
            <span class="dot active"></span>
            <span class="dot"></span>
            <span class="dot"></span>
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
                    <a href="#">
                        <div class="news-card">
                            <img src="https://picsum.photos/id/24/600/400" alt="Actualité" class="news-card-img"/>
                            <div class="news-card-body">
                                <h3 class="news-card-title">Titre</h3>
                                <p class="news-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <a href="#">
                        <div class="news-card">
                            <img src="https://picsum.photos/id/37/600/400" alt="Actualité" class="news-card-img"/>
                            <div class="news-card-body">
                                <h3 class="news-card-title">Titre</h3>
                                <p class="news-card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt.</p>
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
                                    <span class="prog-title">Titre événement</span>
                                    <span class="prog-meta">Horaire – Lieu</span>
                                </div>
                            </div>
                            <div class="programme-item">
                                <div class="programme-date">
                                    <span class="date-day">09</span>
                                    <span class="date-month">mai</span>
                                </div>
                                <div class="programme-info">
                                    <span class="prog-title">Titre événement</span>
                                    <span class="prog-meta">Horaire – Lieu</span>
                                </div>
                            </div>
                            <div class="programme-item">
                                <div class="programme-date">
                                    <span class="date-day">27</span>
                                    <span class="date-month">mai</span>
                                </div>
                                <div class="programme-info">
                                    <span class="prog-title">Titre événement</span>
                                    <span class="prog-meta">Horaire – Lieu</span>
                                </div>
                            </div>
                            <a href="#" class="btn-biblio btn-biblio-full mt-3">Voir tout le programme</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ville-banner py-5 border-top border-bottom">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-4">
                <img src="https://www.gueugnon.fr/static/cdb6583aec149937a82e5a23e31c6139/logo-gueugnon-cmjn-ok.jpg" width="110px" height="150px" alt="Logo Ville"/>
                <div>
                    <h4 class="mb-1 fw-bold">La Bibliothèque fait partie de la Ville de Gueugnon</h4>
                    <p class="mb-0 text-muted">Retrouvez toutes les actualités et services de la commune sur le site officiel.</p>
                </div>
            </div>
            <a href="#" class="btn-biblio btn-biblio-full w-auto">Visiter gueugnon.fr =></a>
        </div>
    </section>
</main>

<footer class="main-footer section-padding bg-light">
    <div class="container">
        <div class="row g-4 pb-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Infos pratiques</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Adresse</a></li>
                    <li><a href="#">Horaires d'ouverture</a></li>
                    <li><a href="#">Téléphone</a></li>
                    <li><a href="#">Email de contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Navigation rapide</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Au programme</a></li>
                    <li><a href="#">Nouveautés & Conseils</a></li>
                    <li><a href="#">Ressources numériques</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Mon compte</h4>
                <ul class="list-unstyled">
                    <li><a href="#">Se connecter</a></li>
                    <li><a href="#">Pré-inscription en ligne</a></li>
                    <li><a href="#">Mes emprunts en cours</a></li>
                    <li><a href="#">Renouveler un emprunt</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="footer-title">Accessibilité & langue</h4>
                <div class="lang-switch mb-3">
                    <a href="#" class="active">FR</a> | <a href="#">EN</a>
                </div>
                <ul class="list-unstyled">
                    <li><a href="#">Accessibilité (RGAA)</a></li>
                    <li><a href="#">Plan du site</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom border-top pt-4 d-flex justify-content-between flex-wrap gap-3">
            <p class="mb-0">© Bibliothèque municipale de Gueugnon</p>
            <div class="footer-links d-flex gap-4">
                <a href="#">Mentions légales</a>
                <a href="#">Politique de confidentialité</a>
                <a href="#">Gestion des cookies</a>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>