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

<!-- Porject Details -->
<section class="project-detail">
    <div class="project-header">
        <h1>Nome del Progetto</h1>
        <p class="project-category">Categoria: Web Design</p>
    </div>
    <div class="project-content">
        <div class="project-image">
            <img src="img/e-commerce.jpg" alt="Immagine principale del progetto">
        </div>
        <div class="project-description">
            <h2>Descrizione del Progetto</h2>
            <p>
                Questo progetto rappresenta un esempio di design innovativo e moderno, con un focus su 
                funzionalità responsive e un’interfaccia intuitiva.
            </p>
            <h3>Caratteristiche principali:</h3>
            <ul>
                <li>Design completamente responsive</li>
                <li>Performance elevate con caricamento rapido</li>
                <li>Compatibilità con tutti i browser principali</li>
            </ul>
            <h3>Tecnologie utilizzate:</h3>
            <ul class="technologies">
                <li>HTML5</li>
                <li>CSS3</li>
                <li>JavaScript</li>
                <li>React</li>
                <li>Node.js</li>
            </ul>
            <a href="?page=services" class="back-to-projects" title="torna a progetti">Torna ai Progetti</a>
        </div>
    </div>
</section>

<?php
$slides = [
    ['image' => 'img/e-commerce.jpg', 'caption' => 'Progetti di alta qualità.'],
    ['image' => 'img/e-commerce.jpg', 'caption' => 'Design moderno e funzionale.'],
    ['image' => 'img/e-commerce.jpg', 'caption' => 'Soluzioni su misura per te.']
];
?>
<section class="carousel">
    <?php foreach ($slides as $slide): ?>
        <div class="slide">
            <img src="<?php echo $slide['image']; ?>" alt="Slide">
            <p><?php echo $slide['caption']; ?></p>
        </div>
    <?php endforeach; ?>
</section>
