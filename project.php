<!-- Hero section -->
<section class="hero">
    <div class="hero-content">
        <h1>Dai un occhiata ai nostri progetti</h1>
        <p>
            Scopri i nostri progetti, soluzioni creative e design innovativi che trasformano le idee in realtà.
            Esplora la galleria e lasciati ispirare!
        </p>
    </div>
</section>

<?php
// Carica i dati dal file JSON
$projectsJson = file_get_contents('project.json');
$projects = json_decode($projectsJson, true);

// Ottieni l'ID del progetto dalla query string
$projectId = isset($_GET['id']) ? $_GET['id'] : null;

// Cerca il progetto corrispondente
$selectedProject = null;
foreach ($projects as $project) {
    if ($project['id'] === $projectId) {
        $selectedProject = $project;
        break;
    }
}
?>

<!-- Porject Details -->
<?php if ($selectedProject): ?>
    <!-- Dettagli del Progetto -->
    <section class="project-detail">
        <div class="project-header">
            <h1><?php echo $selectedProject['title']; ?></h1>
            <p class="project-category">Categoria: <?php echo $selectedProject['category']; ?></p>
        </div>
        <div class="project-content">
            <div class="project-image">
                <img src="<?php echo $selectedProject['image']; ?>" alt="<?php echo $selectedProject['title']; ?>">
            </div>
            <div class="project-description">
                <h2>Descrizione del Progetto</h2>
                <p><?php echo $selectedProject['details']; ?></p>
                <h3>Caratteristiche principali:</h3>
                <ul>
                    <?php foreach ($selectedProject['features'] as $feature): ?>
                        <li><?php echo $feature; ?></li>
                    <?php endforeach; ?>
                </ul>
                <h3>Tecnologie utilizzate:</h3>
                <ul class="technologies">
                    <?php foreach ($selectedProject['technologies'] as $tech): ?>
                        <li><?php echo $tech; ?></li>
                    <?php endforeach; ?>
                </ul>
                <a href="?page=services" class="back-to-projects" title="Torna ai Servizi">Torna ai Servizi</a>
            </div>
        </div>
    </section>


<?php else: ?>
    <!-- Progetto Non Trovato -->
    <section class="project-not-found">
        <h1>Progetto Non Trovato</h1>
        <p>Il progetto richiesto non esiste o non è disponibile.</p>
        <a href="services.php" class="back-to-projects" title="Torna ai Servizi">Torna ai Servizi</a>
    </section>
<?php endif; ?>

<?php
$slides = [
    ['image' => 'img/e-commerce.jpg', 'caption' => 'Progetti di alta qualità.'],
    ['image' => 'img/e-commerce.jpg', 'caption' => 'Design moderno e funzionale.'],
    ['image' => 'img/e-commerce.jpg', 'caption' => 'Soluzioni su misura per te.']
];
?>
<section class="carousel">
    <h2 class="sr-only">Immagini</h2>
    <?php foreach ($slides as $slide): ?>
        <div class="slide">
            <img src="<?php echo $slide['image']; ?>" alt="Slide">
            <p><?php echo $slide['caption']; ?></p>
        </div>
    <?php endforeach; ?>
</section>