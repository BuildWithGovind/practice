@extends('admin.layout.auth')
@section('title', 'Login Page')
@section('content')
<div class="mt-8">
    <div class="mt-6">
        <div class="text-center">
            <i class="fas fa-key text-4xl text-primary-600 dark:text-primary-400 mb-4"></i>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">Reset your password</h2>
            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                Create a new password for your account
            </p>
        </div>

        <form action="#" method="POST" class="mt-8 space-y-6">
            <!-- New Password Field -->
            <div>
                <label for="new-password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">New Password</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400"></i>
                    </div>
                    <input id="new-password" name="new-password" type="password" autocomplete="new-password" required
                           class="py-3 pl-10 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm 
                                  focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:text-white sm:text-sm"
                           placeholder="••••••••">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none toggle-password" data-target="new-password">
                            <i class="fas fa-eye-slash text-sm"></i>
                        </button>
                    </div>
                </div>
                <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">
                    Must be at least 8 characters with one number and one special character
                </p>
            </div>

            <!-- Confirm Password Field -->
            <div>
                <label for="confirm-password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Confirm Password</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400"></i>
                    </div>
                    <input id="confirm-password" name="confirm-password" type="password" autocomplete="new-password" required
                           class="py-3 pl-10 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm 
                                  focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-800 dark:text-white sm:text-sm"
                           placeholder="••••••••">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none toggle-password" data-target="confirm-password">
                            <i class="fas fa-eye-slash text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Password Strength Indicator -->
            <div class="space-y-2">
                <div class="flex items-center space-x-2">
                    <div class="h-1.5 w-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
                        <div id="password-strength" class="h-full bg-gray-300 dark:bg-gray-600 rounded-full" style="width: 0%"></div>
                    </div>
                    <span id="strength-text" class="text-xs font-medium text-gray-500 dark:text-gray-400">Weak</span>
                </div>
                <ul class="grid grid-cols-2 gap-1 text-xs text-gray-500 dark:text-gray-400">
                    <li class="flex items-center requirement" data-requirement="length">
                        <i class="fas fa-check-circle text-green-500 mr-1 hidden"></i>
                        <i class="fas fa-times-circle text-red-500 mr-1 hidden"></i>
                        <span>8+ characters</span>
                    </li>
                    <li class="flex items-center requirement" data-requirement="number">
                        <i class="fas fa-check-circle text-green-500 mr-1 hidden"></i>
                        <i class="fas fa-times-circle text-red-500 mr-1 hidden"></i>
                        <span>1 number</span>
                    </li>
                    <li class="flex items-center requirement" data-requirement="special">
                        <i class="fas fa-check-circle text-green-500 mr-1 hidden"></i>
                        <i class="fas fa-times-circle text-red-500 mr-1 hidden"></i>
                        <span>1 special character</span>
                    </li>
                    <li class="flex items-center requirement" data-requirement="match">
                        <i class="fas fa-check-circle text-green-500 mr-1 hidden"></i>
                        <i class="fas fa-times-circle text-red-500 mr-1 hidden"></i>
                        <span>Passwords match</span>
                    </li>
                </ul>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" id="submit-btn" disabled
                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm 
                               text-sm font-medium text-white bg-gray-400 dark:bg-gray-600 cursor-not-allowed
                               transition duration-150 ease-in-out">
                    Reset Password
                </button>
            </div>
        </form>

        <div class="mt-6 text-center">
            <p class="text-sm text-gray-600 dark:text-gray-400">
                Remember your password? 
                <a href="#" class="font-medium text-primary-600 dark:text-primary-400 hover:text-primary-500 dark:hover:text-primary-300">
                    Sign in
                </a>
            </p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const newPassword = document.getElementById('new-password');
    const confirmPassword = document.getElementById('confirm-password');
    const submitBtn = document.getElementById('submit-btn');
    const strengthBar = document.getElementById('password-strength');
    const strengthText = document.getElementById('strength-text');
    const toggleButtons = document.querySelectorAll('.toggle-password');
    
    // Password toggle functionality
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetId = this.getAttribute('data-target');
            const input = document.getElementById(targetId);
            const icon = this.querySelector('i');
            
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            }
        });
    });
    
    // Password validation
    function validatePassword() {
        const password = newPassword.value;
        const confirm = confirmPassword.value;
        let strength = 0;
        let requirements = {
            length: false,
            number: false,
            special: false,
            match: false
        };
        
        // Check length
        if (password.length >= 8) {
            strength += 25;
            requirements.length = true;
        }
        
        // Check for number
        if (/\d/.test(password)) {
            strength += 25;
            requirements.number = true;
        }
        
        // Check for special character
        if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) {
            strength += 25;
            requirements.special = true;
        }
        
        // Check if passwords match (only if confirm has value)
        if (confirm && password === confirm) {
            strength += 25;
            requirements.match = true;
        }
        
        // Update strength indicator
        strengthBar.style.width = `${strength}%`;
        
        // Update strength text and color
        if (strength < 50) {
            strengthBar.className = 'h-full bg-red-500 rounded-full';
            strengthText.textContent = 'Weak';
            strengthText.className = 'text-xs font-medium text-red-500 dark:text-red-400';
        } else if (strength < 75) {
            strengthBar.className = 'h-full bg-yellow-500 rounded-full';
            strengthText.textContent = 'Moderate';
            strengthText.className = 'text-xs font-medium text-yellow-500 dark:text-yellow-400';
        } else {
            strengthBar.className = 'h-full bg-green-500 rounded-full';
            strengthText.textContent = 'Strong';
            strengthText.className = 'text-xs font-medium text-green-500 dark:text-green-400';
        }
        
        // Update requirement indicators
        Object.keys(requirements).forEach(req => {
            const element = document.querySelector(`.requirement[data-requirement="${req}"]`);
            const checkIcon = element.querySelector('.fa-check-circle');
            const xIcon = element.querySelector('.fa-times-circle');
            
            if (requirements[req]) {
                checkIcon.classList.remove('hidden');
                xIcon.classList.add('hidden');
            } else {
                checkIcon.classList.add('hidden');
                xIcon.classList.remove('hidden');
            }
        });
        
        // Enable/disable submit button
        const allValid = Object.values(requirements).every(val => val);
        if (allValid) {
            submitBtn.disabled = false;
            submitBtn.className = submitBtn.className.replace('bg-gray-400 dark:bg-gray-600 cursor-not-allowed', 'bg-primary-600 hover:bg-primary-700 cursor-pointer');
        } else {
            submitBtn.disabled = true;
            submitBtn.className = submitBtn.className.replace('bg-primary-600 hover:bg-primary-700 cursor-pointer', 'bg-gray-400 dark:bg-gray-600 cursor-not-allowed');
        }
    }
    
    // Add event listeners
    newPassword.addEventListener('input', validatePassword);
    confirmPassword.addEventListener('input', validatePassword);
});
</script>
@endsection