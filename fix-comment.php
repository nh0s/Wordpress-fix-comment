<?php
/**
 * Plugin Name: Fix-0day-Comment
 * Plugin URI: https://www.linkedin.com/in/michaelruss0/
 * Description: Prevents non-logged-in users from spoofing an existing username or email in comments.
 * Version: 1.0.0
 * Author: Michaël Russo
 * Author URI: https://www.linkedin.com/in/michaelruss0/
 * License: GPLv2 or later
 * Text Domain: Fix-0day-Comment
 */

defined('ABSPATH') or die('No script kiddies please!');

// Hook on the validation of comments before adding into the DB
add_filter('preprocess_comment', 'aci_prevent_impersonation_on_comment');

function aci_prevent_impersonation_on_comment($commentdata) {
    // If user is not connected
    if (!is_user_logged_in()) {
        $author_name  = isset($commentdata['comment_author']) ? trim($commentdata['comment_author']) : '';
        $author_email = isset($commentdata['comment_author_email']) ? trim($commentdata['comment_author_email']) : '';

        // Check if an user is already exist with this nickname or email
        $user_by_name  = username_exists($author_name);
        $user_by_email = email_exists($author_email);

        if ($user_by_name || $user_by_email) {
            wp_die(
                __('An account exists with this name or email address. Please log in to comment.', 'Fix-0day-Comment'),
                __('Validation error', 'Fix-0day-Comment'),
                array('response' => 403)
            );
        }
    }

    return $commentdata;
}
?>
