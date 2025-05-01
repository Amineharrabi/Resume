<?php
/**
 * Helper functions
 * 
 * @author John Doe
 */

/**
 * Clean and sanitize input data
 * 
 * @param string $data Input data to be sanitized
 * @return string Sanitized data
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Validate email address
 * 
 * @param string $email Email address to validate
 * @return boolean True if valid, false otherwise
 */
function isValidEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Check if a string contains only alphanumeric characters and spaces
 * 
 * @param string $string String to validate
 * @return boolean True if valid, false otherwise
 */
function isAlphaNumeric($string) {
    return preg_match('/^[a-zA-Z0-9\s]+$/', $string);
}

/**
 * Format date to a readable format
 * 
 * @param string $date Date string
 * @param string $format Format to use
 * @return string Formatted date
 */
function formatDate($date, $format = 'F j, Y') {
    $timestamp = strtotime($date);
    return date($format, $timestamp);
}

/**
 * Create a URL-friendly slug from a string
 * 
 * @param string $string Input string
 * @return string URL-friendly slug
 */
function createSlug($string) {
    $string = strtolower($string);
    $string = preg_replace('/[^a-z0-9\s-]/', '', $string);
    $string = preg_replace('/[\s-]+/', ' ', $string);
    $string = preg_replace('/\s/', '-', $string);
    return $string;
}

/**
 * Truncate text to a specific length
 * 
 * @param string $text Text to truncate
 * @param int $length Maximum length
 * @param string $append String to append if truncated
 * @return string Truncated text
 */
function truncateText($text, $length = 100, $append = '...') {
    if (strlen($text) <= $length) {
        return $text;
    }
    
    $text = substr($text, 0, $length);
    $text = substr($text, 0, strrpos($text, ' '));
    
    return $text . $append;
}

/**
 * Get current page URL
 * 
 * @return string Current URL
 */
function getCurrentUrl() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    return $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
}

/**
 * Check if the current URL matches a given path
 * 
 * @param string $path Path to check
 * @return boolean True if current URL matches path
 */
function isCurrentPage($path) {
    $currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    return ($currentPath == $path);
}
