<!-- Hero section -->
<section class="home">
    <h1>Benvenuti su Webforge</h1>
    <p>Forgiamo il futuro del web con design unici e tecnologie avanzate.</p>
    <a href="?page=services" class="cta-btn" title="servizi">Scopri di più</a>
</section>

<!-- About me preview -->
<section class="about-preview">
    <div class="title">
        <img src="./img/main-about.jpg" alt="logo-about" title="about-img">
        <h2>Chi Sono</h2>
    </div>
    <div class="about-me">
        <div class="paragraph">
            <p>Sono un professionista nella progettazione e sviluppo di siti web moderni, funzionali e ottimizzati per garantire la migliore esperienza utente possibile. Mi dedico a trasformare le tue idee in realtà digitali, creando soluzioni personalizzate che si distinguono per design accattivante, prestazioni elevate e accessibilità su ogni dispositivo. Ogni progetto che realizzo è guidato dalla passione per l'innovazione e l'attenzione ai dettagli. Dalla pianificazione strategica alla messa online del tuo sito, lavoro a stretto contatto con te per comprendere appieno le tue esigenze e tradurle in una presenza online efficace e professionale. La tua soddisfazione e il successo della tua attività sono la mia priorità. Credo che un sito web non sia solo una vetrina, ma un vero strumento per connettere la tua azienda con il suo pubblico, favorire la crescita e creare un impatto duraturo.</p>
        </div>
        <div>
            <a href="?page=about" class="btn" title="about">Scopri di più</a>
        <div>
    </div>
</section>

<?php 
// Array di servizi
$services = [
    ['title' => 'Web Design', 'description' => 'Creazione di siti web moderni e responsive.', 'image' => 'img/web-design.jpg'],
    ['title' => 'Cybersecurity', 'description' => 'Soluzioni avanzate per la protezione dei dati e la sicurezza online.', 'image' => 'img/cybersecurity.jpg'],
    ['title' => 'App Mobile', 'description' => 'Sviluppo di applicazioni mobile per Android e iOS.', 'image' => 'img/appmobile.jpg'],
];
?>
<!-- Service preview -->
<section class="services-preview">
    <h2>Servizi Offerti</h2>
    <div class="services-grid">
        <?php foreach ($services as $service): ?>
            <div class="service-card">
                <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="service-image">
                <div class="service-content">
                    <h3><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="?page=services" class="button" title="services">Vedi tutti i servizi</a>
</section>

<!-- Sezione Contattami -->
<section class="contact-preview">
    <h2>Contattami</h2>
    <p>Hai bisogno di un sito web o di una consulenza? Scrivimi e scopri come posso aiutarti.</p>
    <a href="?page=about#form" class="button" title="contattami">Scrivimi</a>
</section>

<?php
// Arrey reviews
$testimonials = [
    ['quote' => 'Il lavoro di Webforge è stato impeccabile!', 'author' => 'Mario Rossi'],
    ['quote' => 'Ottima collaborazione, consiglio vivamente!', 'author' => 'Anna Verdi']
];
?>
<!-- Client Reviews -->
<section class="testimonials">
    <h2>Recensioni dei Clienti</h2>
    <?php foreach ($testimonials as $testimonial): ?>
        <blockquote>
            <p>“<?php echo $testimonial['quote']; ?>”</p>
            <footer>- <?php echo $testimonial['author']; ?></footer>
        </blockquote>
    <?php endforeach; ?>
</section>

<?php
$socialPosts = [
    ['platform' => 'Twitter', 'content' => 'Abbiamo lanciato un nuovo servizio di web design!', 'link' => '#'],
    ['platform' => 'Instagram', 'content' => 'Guarda il nostro ultimo progetto!', 'link' => '#']
];
?>
<section class="social-feed">
    <h2>Social Media News</h2>
    <?php foreach ($socialPosts as $post): ?>
        <div class="social-post">
            <h3><?php echo $post['platform']; ?></h3>
            <p><?php echo $post['content']; ?></p>
            <a href="<?php echo $post['link']; ?>">Leggi di più</a>
        </div>
    <?php endforeach; ?>
</section>

