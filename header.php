<?php
// Define the active page dynamically
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Example</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #818181ff; /* yellow background */
        }
        .navbar {
            display: flex;
            align-items: center;
            background: white;
            border: 1px solid #ccc;
            padding: 10px 20px;
        }
        .logo img {
            height: 50px;   /* adjust size */
            width: auto;    /* keep aspect ratio */
            margin-right: 20px;
        }
        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
            flex: 1;
        }
        .navbar ul li {
            margin: 0 15px;
        }
        .navbar ul li a {
            text-decoration: none;
            color: black;
            font-weight: 500;
        }
        .navbar ul li a.active {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="logo">
            <a href="index.php"><img src="your-logo.png" alt="Logo"></a>
        </div>
        <ul>
            <li><a href="index.php" class="<?= ($activePage == 'index') ? 'active' : ''; ?>">Home</a></li>
            <li><a href="services.php" class="<?= ($activePage == 'services') ? 'active' : ''; ?>">Services</a></li>
            <li><a href="pricing.php" class="<?= ($activePage == 'pricing') ? 'active' : ''; ?>">Pricing</a></li>
            <li><a href="contact.php" class="<?= ($activePage == 'contact') ? 'active' : ''; ?>">Contact</a></li>
            <li><a href="about.php" class="<?= ($activePage == 'about') ? 'active' : ''; ?>">About Us</a></li>
        </ul>
    </nav>

</body>
</html>