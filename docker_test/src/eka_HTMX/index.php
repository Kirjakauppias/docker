<?php
include 'funcs.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eka HTMX</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="main-header">
        <img src="htmx_logo.png" alt="HTMX logo">
        <h1>high power tools for HTML</h1>
    </header>
    <main>
        <p>You can build modern user interfaces with the simplicity and power of hypertext</p>
        <form hx-post="https://sakky.fi/fi">
            <label for="note">Your note</label>
            <input type="text" id="note" name="note">
            <button type="submit">Save Button</button>
        </form>
        <?php // generateList(); ?>
        <?php include 'info.php'; ?>
        <!-- <button
            hx-get="info.php"
            hx-trigger="mouseenter[ctrlKey] once, Click one"
            hx-target="main"
            hx-swap="beforeend"
            Learn More</button>
        -->
    </main>
</body>
</html>