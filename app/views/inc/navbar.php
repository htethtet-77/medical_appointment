
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bar.css">

</head>
<body>
<?php 
$user = $_SESSION['current_user'];
?> 
<header class="navbar">
    <a href="#" class="logo">Mediplus</a>
    <nav class="navbar-nav">
        <li><a href="<?php echo URLROOT; ?>/pages/home">HOME</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/doctors">DOCTORS</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/appointment">APPOINTMENT</a></li>
        <li><a href="<?php echo URLROOT; ?>/pages/contactus">CONTACT</a></li>
        <li>
        <a href="<?php echo URLROOT; ?>/pages/userprofile">
            <i class="fas fa-user"></i>
            <span><?php echo htmlspecialchars($user['name']); ?></span>
        </a>
        </li>

    </nav>
</header>

</body>
</html>