<?php
// index.php - Main entry point for Webforge website

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

function renderPage($page) {
    $allowedPages = ['home', 'about', 'services', 'project'];
    if (in_array($page, $allowedPages)) {
        return "$page.php";
    } else {
        return "404.php";
    }
}

$fileToInclude = renderPage($page);

// menù in JSON //
function getMenuItems()
{
    $menuFile = 'menu.json';
    if (file_exists($menuFile)) {
        $menuData = file_get_contents($menuFile);
        return json_decode($menuData, true);
    }
    return [];
}

$menuItems = getMenuItems();
$fileToInclude = renderPage($page);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webforge - Professional Web Design</title>
    <link rel="stylesheet" href="./css/style.min.css">

    <?php
    // Percorso predefinito del CSS
    $cssFile = "css/style.min.css"; // Stile generale

    // Stile specifico per la pagina corrente
    if (file_exists("css/$page.min.css")) {
        $cssFile = "css/$page.min.css";
    }
    ?>
    <link rel="stylesheet" href="<?php echo $cssFile; ?>">
    <link rel="icon" type="image/svg+xml" sizes="32x32" href="./img/main-icon.ico">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script>
        // Menù a tendina //
        function toggleMenu() {
            const menuList = document.getElementById('menu-list');
            const hamburger = document.querySelector('.hamburger');
            if (menuList.classList.contains('active')) {
                menuList.classList.remove('active');
                hamburger.style.display = 'block';
            } else {
                menuList.classList.add('active');
                hamburger.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <?php if ($fileToInclude !== "404.php"): ?>
        <header>
            <nav>
                <div class="logo">
                    <img src="./img/main-logo.jpg" alt="Logo">
                    <h2>WebForge</h2>
                </div>
                <div class="hamburger" onclick="toggleMenu()">☰</div>
                <div id="menu-list" class="list">
                    <ul class="navbar-menu">
                        <?php foreach ($menuItems as $item): ?>
                            <li><a href="<?php echo htmlspecialchars($item['link']); ?>" title="<?php echo htmlspecialchars($item['title']); ?>">
                                    <?php echo htmlspecialchars($item['title']); ?>
                                </a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
        </header>
    <?php endif; ?>

    <main>
        <?php include $fileToInclude; ?>
    </main>

    <?php if ($fileToInclude !== "404.php"): ?>
        <footer>
            <!-- Footer -->
            <div class="footer-contact">
                <!-- Contatti -->
                <h3>Contatti:</h3>
                <ul>
                    <li>📞 Telefono: <a href="tel:+39123456789">+39 123 456 789</a></li>
                    <li>📧 Email: <a href="mailto:info@webforge.com">info@webforge.com</a></li>
                </ul>
            </div>

            <div class="footer-social">
                <!-- Socials section -->
                <h3>Seguici:</h3>
                <a href="https://facebook.com" target="_blank" title="facebook">
                    <i class="fab fa-facebook"></i> Facebook
                </a>
                <a href="https://twitter.com" target="_blank" title="twitter">
                    <i class="fab fa-twitter"></i> Twitter
                </a>
                <a href="https://instagram.com" target="_blank" title="instagram">
                    <i class="fab fa-instagram"></i> Instagram
                </a>
            </div>
            <div class="footer-copyright">
                <p>&copy; 2025 Webforge. Tutti i diritti riservati.</p>
            </div>
        </footer>
    <?php endif; ?>
</body>
</html>
