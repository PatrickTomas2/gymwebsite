<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Home</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Your Home</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#services">Services</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="about">
        <h2>About Us</h2>
        <p>Welcome to Your Home, where comfort meets style.</p>
    </section>

    <section id="services">
        <h2>Our Services</h2>
        <ul>
            <li>Interior Design</li>
            <li>Home Renovation</li>
            <li>Custom Furniture</li>
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <p>Reach out to us at: yourhome@example.com</p>
    </section>

    <footer>
        <p>&copy; 2023 Your Home. All rights reserved.</p>
    </footer>

    <script>
        // You can add JavaScript for interactivity here
// For example, smooth scrolling to section anchors
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

    </script>
</body>
</html>
