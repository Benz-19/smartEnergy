<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SmartEnergy Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Fade-in animation */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        .msg {
            border: 2px solid gray;
            box-shadow: 2px 2px 2px gray;
            position: absolute;
            left: 25%;
        }
    </style>
</head>

<body class="bg-green-50 font-sans">

    <!-- Navigation -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-green-600">SmartEnergy</h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-600 hover:text-green-600">Home</a>
                <a href="#" class="text-green-600 font-semibold">Login</a>
            </nav>
        </div>
    </header>

    <!-- Login Form -->
    <section class="flex items-center justify-center min-h-screen px-4">
        <div class="bg-white rounded-2xl shadow-xl p-8 max-w-md w-full animate-fade-in">
            <h2 class="text-3xl font-bold text-green-700 text-center mb-6">Welcome Back</h2>
            <form action="/smartEnergy/processAuth" method="POST" class="space-y-5">
                <div class="msg">
                    <?php

                    if (isset($_SESSION['success_message'])) {
                        echo '<div class="success"> ' . $_SESSION['success_message'] . '</div>';
                        unset($_SESSION['success_message']);
                    ?>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var success = document.querySelectorAll('.success');

                                if (success.length > 0) {
                                    success.forEach(function(msg) {
                                        msg.style.color = 'green';
                                    })
                                }

                                setTimeout(() => {
                                    window.location.href = '/smartEnergy/login'; //redirect to the previous page
                                }, 9000);
                            });
                        </script>
                    <?php
                    }

                    if (isset($_SESSION['error_message'])) {
                        echo '<div class="error"> ' . $_SESSION['error_message'] . '</div>';
                        unset($_SESSION['error_message']);
                    ?>
                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                var error = document.querySelectorAll('.error');

                                if (error.length > 0) {
                                    error.forEach(function(msg) {
                                        msg.style.color = 'red';
                                    })
                                }

                                setTimeout(() => {
                                    window.location.href = '/smartEnergy/login'; //redirect to the previous page
                                }, 9000);
                            });
                        </script>
                    <?php
                    }
                    ?>
                </div>
                <div>
                    <label for="email" class="block mb-1 text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="w-full px-4 py-2 border-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" autocomplete="off" />
                </div>
                <div>
                    <label for="password" class="block mb-1 text-gray-700">Password</label>
                    <input type="password" id="password" name="password" required class="w-full px-4 py-2 border-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500" autocomplete="off" />
                </div>
                <div class="flex items-center justify-between text-sm">
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox text-green-600">
                        <span class="ml-2 text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-green-600 hover:underline">Forgot Password?</a>
                </div>
                <button type="submit" name="loginBtn" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 rounded-lg transition duration-200">
                    Log In
                </button>
            </form>
            <p class="mt-6 text-center text-sm text-gray-600">Don't have an account?
                <a href="/smartEnergy/register" class="text-green-600 hover:underline font-medium">Register</a>
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-100 text-center text-gray-900 text-sm">
        &copy; 2025 SmartEnergy Team
    </footer>

</body>

</html>
