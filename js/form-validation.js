/**
 * Form validation script for contact form
 * @author John Doe
 */

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const submitButton = document.querySelector('.form-submit');
    const alertSuccess = document.querySelector('.alert-success');
    const alertError = document.querySelector('.alert-error');
    
    if (!contactForm) return;
    
    // Form submission
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validate form
        if (validateForm()) {
            // Show loading state
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            
            // Get form data
            const formData = new FormData(contactForm);
            
            // Send form data using AJAX
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'php/send_email.php', true);
            xhr.onload = function() {
                submitButton.disabled = false;
                submitButton.innerHTML = 'Send Message';
                
                if (xhr.status === 200) {
                    try {
                        const response = JSON.parse(xhr.responseText);
                        
                        if (response.success) {
                            // Show success message
                            alertSuccess.style.display = 'block';
                            alertError.style.display = 'none';
                            contactForm.reset();
                            
                            // Hide success message after 5 seconds
                            setTimeout(function() {
                                alertSuccess.style.display = 'none';
                            }, 5000);
                        } else {
                            // Show error message
                            alertError.textContent = response.message || 'Something went wrong. Please try again.';
                            alertError.style.display = 'block';
                            alertSuccess.style.display = 'none';
                        }
                    } catch (e) {
                        // Show error message for parse error
                        alertError.textContent = 'Something went wrong. Please try again.';
                        alertError.style.display = 'block';
                        alertSuccess.style.display = 'none';
                    }
                } else {
                    // Show error message for HTTP error
                    alertError.textContent = 'Server error. Please try again later.';
                    alertError.style.display = 'block';
                    alertSuccess.style.display = 'none';
                }
            };
            xhr.onerror = function() {
                submitButton.disabled = false;
                submitButton.innerHTML = 'Send Message';
                alertError.textContent = 'Connection error. Please try again later.';
                alertError.style.display = 'block';
                alertSuccess.style.display = 'none';
            };
            xhr.send(formData);
        }
    });
    
    // Real-time validation
    const inputs = contactForm.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateInput(this);
        });
        
        input.addEventListener('input', function() {
            if (this.classList.contains('is-invalid')) {
                validateInput(this);
            }
        });
    });
    
    /**
     * Validate entire form
     * @returns {boolean} True if form is valid
     */
    function validateForm() {
        let isValid = true;
        
        // Validate each input
        inputs.forEach(input => {
            if (!validateInput(input)) {
                isValid = false;
            }
        });
        
        return isValid;
    }
    
    /**
     * Validate a single input field
     * @param {HTMLElement} input The input element to validate
     * @returns {boolean} True if input is valid
     */
    function validateInput(input) {
        let isValid = true;
        const value = input.value.trim();
        const name = input.name;
        let errorMessage = '';
        
        // Remove existing validation classes
        input.classList.remove('is-invalid');
        
        // Validation rules based on input name
        switch (name) {
            case 'name':
                if (value === '') {
                    isValid = false;
                    errorMessage = 'Please enter your name';
                } else if (value.length < 2) {
                    isValid = false;
                    errorMessage = 'Name must be at least 2 characters long';
                }
                break;
                
            case 'email':
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (value === '') {
                    isValid = false;
                    errorMessage = 'Please enter your email address';
                } else if (!emailRegex.test(value)) {
                    isValid = false;
                    errorMessage = 'Please enter a valid email address';
                }
                break;
                
            case 'subject':
                if (value === '') {
                    isValid = false;
                    errorMessage = 'Please enter a subject';
                } else if (value.length < 4) {
                    isValid = false;
                    errorMessage = 'Subject must be at least 4 characters long';
                }
                break;
                
            case 'message':
                if (value === '') {
                    isValid = false;
                    errorMessage = 'Please enter your message';
                } else if (value.length < 10) {
                    isValid = false;
                    errorMessage = 'Message must be at least 10 characters long';
                }
                break;
        }
        
        // Add invalid class and show error message if invalid
        if (!isValid) {
            input.classList.add('is-invalid');
            const feedback = input.nextElementSibling;
            if (feedback && feedback.classList.contains('invalid-feedback')) {
                feedback.textContent = errorMessage;
            }
        }
        
        return isValid;
    }
});
