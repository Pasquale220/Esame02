<!-- Hero section -->
<section class="hero">
    <div class="hero-content">
        <h1>Progettiamo il tuo futuro digitale</h1>
        <p>Scopri le nostre soluzioni avanzate per il web, la sicurezza online e le applicazioni mobile.</p>
    </div>
</section>

<?php 
$services = [
    [
        'title' => 'Web Design',
        'description' => 'Creazione di siti web moderni e responsive.',
        'details' => 'Progettiamo siti web unici che combinano estetica e funzionalità per soddisfare le esigenze del tuo business.',
        'projects' => [
            ['title' => 'Portfolio Design', 'image' => 'img/portfolio-design.jpg', 'link' => '?page=project'],
            ['title' => 'Landing Page Startup', 'image' => 'img/startup.jpg', 'link' => '?page=project'],
            ['title' => 'E-commerce Store', 'image' => 'img/e-commerce.jpg', 'link' => '?page=project']
        ]
    ],
    [
        'title' => 'Cybersecurity',
        'description' => 'Protezione avanzata per i dati e le infrastrutture online.',
        'details' => 'Offriamo soluzioni su misura per proteggere i dati sensibili e le infrastrutture digitali.',
        'projects' => [
            ['title' => 'Firewall Integration', 'image' => 'img/firewall.jpg', 'link' => '?page=project'],
            ['title' => 'VPN Setup', 'image' => 'img/vpn.jpg', 'link' => '?page=project'],
            ['title' => 'Data Encryption System', 'image' => 'img/data-encryption.jpg', 'link' => '?page=project']
        ]
    ],
    [
        'title' => 'App Mobile',
        'description' => 'Sviluppo di applicazioni mobile per Android e iOS.',
        'details' => 'Creiamo applicazioni mobile intuitive, performanti e scalabili per migliorare la tua presenza digitale.',
        'projects' => [
            ['title' => 'Fitness Tracker App', 'image' => 'img/fitness.jpg', 'link' => '?page=project'],
            ['title' => 'Food Delivery App', 'image' => 'img/delivery.jpg', 'link' => '?page=project'],
            ['title' => 'Social Networking App', 'image' => 'img/social.jpg', 'link' => '?page=project']
        ]
    ]
];
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


