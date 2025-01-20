<section class="hero">
    <div class="hero-content">
        <h1>Chi Sono</h1>
        <p>
            Sono un professionista nella progettazione e sviluppo di soluzioni digitali.
            La mia missione è trasformare idee in realtà, creando progetti unici e funzionali.
        </p>
    </div>
</section>

<?php
$skills = [
    [
        'icon' => 'fab fa-html5',
        'title' => 'HTML5',
        'description' => 'Creazione di strutture semantiche e ottimizzate per il web moderno.',
    ],
    [
        'icon' => 'fab fa-css3-alt',
        'title' => 'CSS3',
        'description' => 'Design accattivanti e responsivi per garantire un\'ottima esperienza utente.',
    ],
    [
        'icon' => 'fab fa-js-square',
        'title' => 'JavaScript',
        'description' => 'Interattività avanzata per applicazioni dinamiche e intuitive.',
    ],
    [
        'icon' => 'fab fa-react',
        'title' => 'React',
        'description' => 'Sviluppo di interfacce moderne e performanti con React.',
    ],
    [
        'icon' => 'fab fa-node',
        'title' => 'Node.js',
        'description' => 'Backend scalabile e sicuro per applicazioni web e API.',
    ],
    [
        'icon' => 'fas fa-database',
        'title' => 'Database',
        'description' => 'Gestione di database relazionali e non relazionali per archiviazione efficiente.',
    ],
];
?>
<section class="about-skills">
    <h2>Le Mie Competenze</h2>
    <p>
        Sono specializzato in una vasta gamma di tecnologie e strumenti che mi permettono di creare soluzioni digitali innovative e su misura per ogni progetto.
    </p>
    <div class="skills-grid">
        <?php foreach ($skills as $skill): ?>
            <div class="skill">
                <i class="<?php echo $skill['icon']; ?>"></i>
                <h3><?php echo $skill['title']; ?></h3>
                <p><?php echo $skill['description']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
// Carica i dati dalla pagina JSON
$contactData = json_decode(file_get_contents('contact_data.json'), true);

$errors = [];
$successMessage = "";

$name = "";
$email = "";
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera i valori compilati
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Validazione
    if (empty($name)) {
        $errors['name'] = "Il campo 'Nome' è obbligatorio.";
    } elseif (!preg_match("/^[a-zA-Z\s]+$/u", $name)) {
        $errors['name'] = "Il campo 'Nome' può contenere solo lettere e spazi.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Inserisci un'email valida.";
    }
    if (empty($message)) {
        $errors['message'] = "Il campo 'Messaggio' è obbligatorio.";
    }

    if (empty($errors)) {
        // Salva i dati se non ci sono errori
        $userData = [
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'timestamp' => date('Y-m-d H:i:s')
        ];
        $log = "Nome: " . $userData['name'] . "\nEmail: " . $userData['email'] . "\nMessaggio: " . $userData['message'] . "\nData: " . $userData['timestamp'] . "\n\n";
        file_put_contents('contact_logs.txt', $log, FILE_APPEND);
        $successMessage = "Grazie per averci contattato! Ti risponderemo al più presto.";

       

        // Resetta i campi
        $name = $email = $message = "";
    }
}
?>

<section class="contact" id="form">
    <h2><?php echo $contactData['title']; ?></h2>
    <p><?php echo $contactData['description']; ?></p>
    <div class="contact-details">
        <p><strong>Telefono:</strong> <?php echo $contactData['phone']; ?></p>
        <p><strong>Email:</strong> <a href="mailto:<?php echo $contactData['email']; ?>" title="email"><?php echo $contactData['email']; ?></a></p>
        <p><strong>Indirizzo:</strong> <?php echo $contactData['address']; ?></p>
    </div>

    <?php if (!empty($successMessage)): ?>
        <p class="success-message"><?php echo $successMessage; ?></p>
    <?php endif; ?>

    <form action="#form" method="POST" class="contact-form" novalidate>
        <div>
            <label for="name">Nome</label>
            <input
                type="text"
                id="name"
                name="name"
                value="<?php echo htmlspecialchars($name, ENT_QUOTES); ?>"
                class="<?php echo isset($errors['name']) ? 'error' : ''; ?>"
                required>
            <?php if (isset($errors['name'])): ?>
                <p class="error-message"><?php echo $errors['name']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="<?php echo htmlspecialchars($email, ENT_QUOTES); ?>"
                class="<?php echo isset($errors['email']) ? 'error' : ''; ?>"
                required>
            <?php if (isset($errors['email'])): ?>
                <p class="error-message"><?php echo $errors['email']; ?></p>
            <?php endif; ?>
        </div>
        <div>
            <label for="message">Messaggio</label>
            <textarea
                id="message"
                name="message"
                rows="5"
                class="<?php echo isset($errors['message']) ? 'error' : ''; ?>"
                required><?php echo htmlspecialchars($message, ENT_QUOTES); ?></textarea>
            <?php if (isset($errors['message'])): ?>
                <p class="error-message"><?php echo $errors['message']; ?></p>
            <?php endif; ?>
        </div>
        <button type="submit">Invia</button>
    </form>
</section>


<section class="stats">
    <h2>Statistiche</h2>
    <ul>
        <li>Progetti Completati: <?php echo 10; ?></li>
        <li>Anni di Esperienza: <?php echo 2; ?></li>
        <li>Clienti Soddisfatti: <?php echo 10; ?></li>
    </ul>
</section>