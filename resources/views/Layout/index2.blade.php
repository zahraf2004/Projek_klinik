<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klinik Pratama Dokter Yanti</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <!--Main Navigation-->
    @include('layout/navbar2')

    <div id="wrapper">
        
        @yield('content2')
        @include('layout/footer')


    </div>

    <script>
            // Toggle mobile menu
            const hamburger = document.getElementById('hamburger');
            const navLinks = document.querySelector('.nav-links');
            
            hamburger.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                
                // Change hamburger icon
                const icon = hamburger.querySelector('i');
                if (navLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
            
            // Close mobile menu when clicking outside
            document.addEventListener('click', (e) => {
                if (!e.target.closest('.navbar') && navLinks.classList.contains('active')) {
                    navLinks.classList.remove('active');
                    const icon = hamburger.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
            
            // Search functionality
            const searchInput = document.getElementById('choices-text-preset-values');
            const searchBtn = document.querySelector('.search-btn');
            
            searchBtn.addEventListener('click', () => {
                if (searchInput.value.trim() !== '') {
                    alert(`Mencari: ${searchInput.value}`);
                    // Implement your search logic here
                }
            });
            
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') {
                    if (searchInput.value.trim() !== '') {
                        alert(`Mencari: ${searchInput.value}`);
                        // Implement your search logic here
                    }
                }

            document.querySelector('.btn-cancel').addEventListener('click', function() {
                const confirmation = confirm('Apakah Anda yakin ingin membatalkan? Semua data yang telah diisi akan hilang.');
                if (confirmation) {
                    alert('Form telah dibatalkan');
                    document.querySelector('form').reset();
                }
            });

            const doctorCards = document.querySelectorAll('.doctor-card');
            doctorCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-7px)';
                    card.style.boxShadow = '0 12px 25px rgba(0, 0, 0, 0.15)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0)';
                    card.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.08)';
                });
            });
        
            // Fungsi pencarian dokter
            const searchInput = document.querySelector('.search-container input');
            const searchButton = document.querySelector('.search-container button');
            
            searchButton.addEventListener('click', searchDoctors);
            searchInput.addEventListener('keyup', function(event) {
                if (event.key === 'Enter') {
                    searchDoctors();
                }
            });
            
            function searchDoctors() {
                const searchTerm = searchInput.value.toLowerCase();
                const doctorCards = document.querySelectorAll('.doctor-card');
                
                doctorCards.forEach(card => {
                    const doctorName = card.querySelector('.doctor-name').textContent.toLowerCase();
                    const specialty = card.querySelector('.doctor-specialty').textContent.toLowerCase();
                    
                    if (doctorName.includes(searchTerm) || specialty.includes(searchTerm)) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            }
            
            document.addEventListener('DOMContentLoaded', function () {
                const elements = document.querySelectorAll('.about-image, .vision, .mission');

                // Set initial state
                elements.forEach(el => {
                    el.style.opacity = "0";
                    el.style.transform = "translateY(30px)";
                    el.style.transition = "opacity 0.8s ease, transform 0.8s ease";
                });

                const animateOnScroll = function () {
                    elements.forEach(element => {
                        const elementPosition = element.getBoundingClientRect().top;
                        const screenPosition = window.innerHeight / 1.3;

                        if (elementPosition < screenPosition) {
                            element.style.opacity = "1";
                            element.style.transform = "translateY(0)";
                        }
                    });
                };

                window.addEventListener('scroll', animateOnScroll);
                animateOnScroll(); // Trigger once on load
            });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>