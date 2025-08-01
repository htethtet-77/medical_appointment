<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<!-- Add Font Awesome if not already included -->

<body class="antialiased">

    <section class="hero-section">
        <div class="gradient-overlay"></div>
        <div class="container hero-content">
            <h1 class="">Book Your Appointment Online</h1>
            <p class="">
                Skip the waiting room. Find your doctor and book appointments instantly.
                It's Fast, Easy, Simple.
            </p>
            <a href="<?php echo URLROOT;?>/pages/register" class="hero-button">
                Appointment Now
            </a>
        </div>
    </section>

    <section class="specialties-section">
        <div class="homecontainer">
            <h2>Categories of Specialities</h2>
            <div class="specialty-grid">
                <div class="specialty-category-card" data-specialty="General Physician">
                    <i class="fas fa-stethoscope specialty-category-icon"></i>
                    <span class="font-semibold text-gray-700">General Physician</span>
                </div>
                <div class="specialty-category-card" data-specialty="Pediatrician">
                    <i class="fas fa-baby specialty-category-icon"></i>
                    <span class="font-semibold text-gray-700">Pediatrician</span>
                </div>
                <div class="specialty-category-card" data-specialty="Dermatologist">
                    <i class="fas fa-hand-sparkles specialty-category-icon"></i>
                    <span class="font-semibold text-gray-700">Dermatologist</span>
                </div>
                <div class="specialty-category-card" data-specialty="Dentist">
                    <i class="fas fa-tooth specialty-category-icon"></i>
                    <span class="font-semibold text-gray-700">Dentist</span>
                </div>
            </div>
        </div>
    </section>

    <section class="doctors-section">
        <div class="container">
            <h2>Featured Doctors or Clinics</h2>
            <div class="doctor-grid">
                <div class="doctor-card">
                    <div class="doctor-image-container">
                        <img src="https://plus.unsplash.com/premium_photo-1661764878654-3d0fc2eefcca?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGRvY3RvcnxlbnwwfHwwfHx8MA%3D%3D" alt="Dr. Daniel Smith">
                    </div>
                    <h3>Dr. Daniel Smith</h3>
                    <p>General Physician</p>
                  
                </div>
                <div class="doctor-card">
                    <div class="doctor-image-container">
                        <img src="https://placehold.co/128x128/059669/ffffff?text=DR" alt="Dr. Sarah Johnson">
                    </div>
                    <h3>Dr. Sarah Johnson</h3>
                    <p>Cardiologist</p>
                   
                </div>
                <div class="doctor-card">
                    <div class="doctor-image-container">
                        <img src="https://placehold.co/128x128/dc2626/ffffff?text=DR" alt="Dr. Michael Chen">
                    </div>
                    <h3>Dr. Michael Chen</h3>
                    <p>Pediatrician</p>
                  
                </div>
                <div class="doctor-card">
                    <div class="doctor-image-container">
                        <img src="https://placehold.co/128x128/7c3aed/ffffff?text=DR" alt="Dr. Emily Davis">
                    </div>
                    <h3>Dr. Emily Davis</h3>
                    <p>Dermatologist</p>
                   
                </div>
                <div class="doctor-card">
                    <div class="doctor-image-container">
                        <img src="https://placehold.co/128x128/059669/ffffff?text=DR" alt="Dr. James Wilson">
                    </div>
                    <h3>Dr. James Wilson</h3>
                    <p>Family Medicine</p>
                    
                </div>
                <div class="doctor-card">
                    <div class="doctor-image-container">
                        <img src="https://placehold.co/128x128/dc2626/ffffff?text=DR" alt="Dr. Lisa Brown">
                    </div>
                    <h3>Dr. Lisa Brown</h3>
                    <p>Psychiatrist</p>
                   
                </div>
            </div>
            <div class="see-more-button-container">
                <a href="<?php echo URLROOT;?>/patient/doctors" class="see-more-button">
                    See More <span class="">&rarr;</span>
                </a>
            </div>
        </div>
    </section>



    <?php require APPROOT . '/views/inc/footer.php'; ?>

</body>


</html>