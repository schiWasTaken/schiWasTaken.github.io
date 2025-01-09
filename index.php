<?php
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en'; // Default to English
$lang_file = "lang/$lang.php";

if (file_exists($lang_file)) {
    include($lang_file);
} else {
    include("lang/en.php");
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body class="light-mode">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <svg id="BadTechLogo" data-name="BadTechLogo" xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 708.07 848.81"><title>badtech</title><path d="M766.86,512a230.6,230.6,0,0,0,91-183.72c0-126.72-102-229.58-228.46-230.88v0H166.13v91.75H627a136.6,136.6,0,0,1,14.82.81A139.14,139.14,0,0,1,627,467.43c-3.85,0-7.69-.17-11.46-.49-3-.2-5.95-.53-8.86-1,.24.32.52.64.77,1,6.88,9.39,11.45,25.67,11.45,44.17,0,19.8-5.22,37.08-13,46.07-.29.33-.57.65-.85.93l-.25.25h0l-.1.12.12-.12a8.05,8.05,0,0,1,1-.17c2.71-.44,5.42-.76,8.21-1,4.26-.4,8.59-.61,13-.61a139.15,139.15,0,0,1,14.09,277.58h0a138,138,0,0,1-30.33-.24h-317v92.71H630.54v0l2.4-.05c124.78-3.15,224.94-105.26,224.94-230.81A230.6,230.6,0,0,0,766.86,512Z" transform="translate(-166.13 -97.38)"/><polygon points="511.22 183.99 0 183.99 0 277.62 128.03 277.62 128.03 640.44 221.65 640.44 221.65 277.62 511.22 277.62 511.22 183.99"/><path d="M606.05,465.2l-.24.61.85.12a.33.33,0,0,0-.17-.16A2.79,2.79,0,0,0,606.05,465.2Z" transform="translate(-166.13 -97.38)"/></svg>
            <a class="navbar-brand fw-bold" href="#">BadTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item d-none d-lg-block">
                        <div id="navSeparator" class="vr h-100 mx-lg-2"></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#about"><?php echo $lang_strings['aboutNav']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio"><?php echo $lang_strings['portfolioNav']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact"><?php echo $lang_strings['contactNav']; ?></a></li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <button class="btn d-flex align-items-center" id="toggle-dark-mode">
                            <img id="dark-mode-icon" src="assets/moon-stars-fill.svg" alt="Dark Mode" width="16" height="16" class="me-2">
                            <span id="dark-mode-text">Dark Mode</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero bg-light text-center py-5 text-white">
        <div class="container">
            <h1 class="display-4 fw-bold fade-in"><?php echo $lang_strings['welcome']; ?></h1>
            <p class="lead fade-in"><?php echo $lang_strings['welcomeSub']; ?></p>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container py-5">
        <div class="row">
            <div class="col-md-6 fade-in">
                <h2 class="fw-bold"><?php echo $lang_strings['about']; ?></h2>
                <hr>
                <p>
                    <?php echo $lang_strings['aboutText']; ?>
                </p>
            </div>
            <div class="col-md-6 fade-in">
                <div class="rounded" style="height: 300px;">
                    <img src="assets/about-image.jpg" class="rounded-top" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!-- Portfolio Section -->
    <section id="portfolio" class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-5 fade-in"><?php echo $lang_strings['portfolio']; ?></h2>
            <div class="row">
                <!-- Portfolio Card 1 -->
                <div class="col-md-4 fade-in">
                    <div class="rounded mb-3 card portfolio-item" style="height: 600px;" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <img src="assets/project1.png" class="rounded-top" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold"><?php echo $lang_strings['project1']; ?></h5>
                    <p><?php echo $lang_strings['project1Text']; ?></p>
                </div>
                <!-- Portfolio Card 2 -->
                <div class="col-md-4 fade-in">
                    <div class="rounded mb-3 card portfolio-item" style="height: 600px;" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <img src="assets/project2.png" class="rounded-top" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold"><?php echo $lang_strings['project2']; ?></h5>
                    <p><?php echo $lang_strings['project2Text']; ?></p>
                </div>
                <!-- Portfolio Card 3 -->
                <div class="col-md-4 fade-in">
                    <div class="rounded mb-3 card portfolio-item" style="height: 600px;" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <img src="assets/project3.png" class="rounded-top" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                    <h5 class="fw-bold"><?php echo $lang_strings['project3']; ?></h5>
                    <p><?php echo $lang_strings['project3Text']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal 1 -->
    <div class="modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="assets/project1.png" class="d-block w-100" alt="Project 1">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="assets/project2.png" class="d-block w-100" alt="Project 2">
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <img src="assets/project3.png" class="d-block w-100" alt="Project 3">
                </div>
            </div>
        </div>
    </div>


    <hr>
    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-5 fade-in"><?php echo $lang_strings['contact']; ?></h2>
            <div class="row text-center justify-content-center">
                <!-- Phone -->
                <div class="col-md-3 mb-4 fade-in">
                    <div class="p-4 shadow rounded">
                        <img src="assets/telephone.svg" width="32" height="32" class="mb-3">
                        <h5 class="fw-bold">Phone</h5>
                        <p class="m-0">+1 234 567 890</p>
                    </div>
                </div>
                <!-- Email -->
                <div class="col-md-3 mb-4 fade-in">
                    <div class="p-4 shadow rounded">
                        <img src="assets/envelope.svg" width="32" height="32" class="mb-3">
                        <h5 class="fw-bold">Email</h5>
                        <p class="m-0">example@example.com</p>
                    </div>
                </div>
                <!-- Address -->
                <div class="col-md-3 mb-4 fade-in">
                    <div class="p-4 shadow rounded">
                        <img src="assets/map.svg" width="32" height="32" class="mb-3">
                        <h5 class="fw-bold">Address</h5>
                        <p class="m-0">123 Street, City, Country</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>