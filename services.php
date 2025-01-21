<!-- Hero section -->
<section class="hero">
    <div class="hero-content">
        <h1>Progettiamo il tuo futuro digitale</h1>
        <p>Scopri le nostre soluzioni avanzate per il web, la sicurezza online e le applicazioni mobile.</p>
    </div>
</section>

<?php
// Leggi i dati dal file JSON
$servicesJson = file_get_contents('services.json');
$services = json_decode($servicesJson, true);

// Ottieni l'ID del progetto dalla query string
$projectId = isset($_GET['id']) ? $_GET['id'] : null;

// Cerca il progetto corrispondente
$selectedProject = null;

foreach ($services as $service) {
    foreach ($service['projects'] as $project) {
        if ($project['id'] === $projectId) {
            $selectedProject = $project;
            $selectedProject['service'] = $service['title']; // Aggiungi il nome del servizio
            break 2;
        }
    }
}
?>

<section class="services-overview">
    <h2>Esplora i Nostri Servizi</h2>
    <?php foreach ($services as $service): ?>
        <div class="service-category">
            <h3><?php echo $service['title']; ?></h3>
            <p><?php echo $service['description']; ?></p>
            <p class="details"><?php echo $service['details']; ?></p>
            <div class="project-previews">
                <?php foreach ($service['projects'] as $project): ?>
                    <div class="project-item">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <h4><?php echo $project['title']; ?></h4>
                        <a href="<?php echo $project['link']; ?>" title="scopri di più">Scopri di più</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</section>


