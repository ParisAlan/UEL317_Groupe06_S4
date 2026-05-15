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

<section class="news-biblio section-padding">
    <div class="container">

        <!-- Titre -->
        <div class="news-biblio-title mb-4">
            <h2>Quoi de neuf à la bibliothèque ?</h2>
            <h3 class="news-subtitle">Joli mois de mai !</h3>
        </div>

        <!-- 3 colonnes -->
        <div class="row g-3">

            <!-- Carte actualité 1 -->
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

            <!-- Carte actualité 2 -->
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

            <!-- Tableau Au programme -->
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

                        <a href="#" class="btn-gueugnon-secondary mt-3">Voir tout le programme →</a>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="ville-banner section-padding">
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
                <a href="https://www.gueugnon.fr" target="_blank" class="btn-gueugnon-primary">Visiter gueugnon.fr →</a>
            </div>

        </div>
    </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- JS personnalisé -->
<script src="script.js"></script>

</body>
</html>