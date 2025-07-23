<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>codedamn - Learn Programming</title>


    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            600: '#4f46e5',
                            700: '#4338ca',
                        },
                        dark: {
                            800: '#1e293b',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>
<body class="bg-gray-100 dark:bg-dark-900 font-sans transition-colors duration-300">


    @include('front.elements.header')

    <main class="container mx-auto py-6">
        @yield('content')
    </main>

    @include('front.elements.footer')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right", // change as needed
            "timeOut": "5000"
        };
    </script>

    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(session('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if(session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>

    <script>
        // Check for dark mode preference
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
            document.getElementById('theme-icon').classList.replace('fa-moon', 'fa-sun');
        } else {
            document.documentElement.classList.remove('dark');
            document.getElementById('theme-icon').classList.replace('fa-sun', 'fa-moon');
        }

        // Toggle dark mode
        document.getElementById('theme-toggle').addEventListener('click', function() {
            const icon = document.getElementById('theme-icon');
            
            // Toggle between light/dark
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
                icon.classList.replace('fa-sun', 'fa-moon');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
                icon.classList.replace('fa-moon', 'fa-sun');
            }
        });

        // Simulate login/logout functionality
        let loggedIn = false;
        const authButton = document.getElementById('auth-button');
        const loginText = document.getElementById('login-text');
        const profileImage = document.getElementById('profile-image');

        authButton.addEventListener('click', function() {
            if (!loggedIn) {
                // Simulate login
                loggedIn = true;
                loginText.classList.add('hidden');
                profileImage.classList.remove('hidden');
                
                // In a real app, you would redirect to login page or show a modal
                // window.location.href = '/login';
            } else {
                // Simulate logout
                loggedIn = false;
                loginText.classList.remove('hidden');
                profileImage.classList.add('hidden');
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('#userDropdownBtn').on('click', function (e) {
                e.stopPropagation(); // prevent body click from firing
                $('#userDropdownMenu').toggleClass('hidden');
            });

            $(document).on('click', function (e) {
                if (!$(e.target).closest('#userDropdownMenu').length && !$(e.target).closest('#userDropdownBtn').length) {
                    $('#userDropdownMenu').addClass('hidden');
                }
            });
        });
    </script>

</body>
</html>
