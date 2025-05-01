<?php
/**
 * Configuration file
 * 
 * @author John Doe
 */

// Error reporting (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define constants
define('SITE_TITLE', 'John Doe - Data Science Portfolio');
define('SITE_DESCRIPTION', 'Personal portfolio website of John Doe, a Data Science student showcasing skills, projects, and experience.');
define('SITE_AUTHOR', 'John Doe');

// Contact information
define('CONTACT_EMAIL', getenv('CONTACT_EMAIL') ?: 'john.doe@example.com');
define('CONTACT_PHONE', '+1 (555) 123-4567');
define('CONTACT_LOCATION', 'San Francisco, California');

// Social media links
define('SOCIAL_LINKEDIN', 'https://linkedin.com/');
define('SOCIAL_GITHUB', 'https://github.com/');
define('SOCIAL_TWITTER', 'https://twitter.com/');
define('SOCIAL_KAGGLE', 'https://kaggle.com/');

// SMTP settings
define('SMTP_HOST', getenv('SMTP_HOST') ?: 'smtp.example.com');
define('SMTP_USERNAME', getenv('SMTP_USERNAME') ?: 'your-email@example.com');
define('SMTP_PASSWORD', getenv('SMTP_PASSWORD') ?: 'your-password');
define('SMTP_PORT', getenv('SMTP_PORT') ?: 587);

// Time zone
date_default_timezone_set('America/Los_Angeles');

// Session settings
session_start();
