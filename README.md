=== Anti Comment Impersonation ===

Contributors: Michaël Russo (https://www.linkedin.com/in/michaelruss0/)

Tags: comments, impersonation, security, spam, moderation  
Requires at least: 5.0  
Tested up to: 6.5  
Requires PHP: 7.2  
Stable tag: 1.0.0  
License: GPLv2 or later  
License URI: https://www.gnu.org/licenses/gpl-2.0.html  

== Description ==

This plugin prevents unauthenticated users from impersonating registered WordPress users in the comment section.  

By default, WordPress allows anyone to leave a comment by entering a name and email address — which can be exploited to post comments under someone else's identity.  

With this plugin activated, if an unauthenticated user tries to comment using a name or email address that matches an existing user account, the comment will be blocked and the user will be prompted to log in.  

This helps preserve trust and identity integrity on your site and protects registered users from impersonation.

= Features =

* Blocks comment impersonation using existing usernames or email addresses
* No configuration required — works out of the box
* Lightweight and secure
* Does not affect logged-in users

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory, or install it directly from the Plugins screen in WordPress.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. No further configuration is needed — the protection is active immediately.

== Frequently Asked Questions ==

= Will this plugin block all anonymous comments? =  
No. Visitors can still comment anonymously using names and emails that do not belong to registered users.

= Does it affect logged-in users? =  
No. Authenticated users are not affected by this check.

= Can I customize the error message? =  
Not yet, but this feature may be added in a future version.

== Screenshots ==

1. The error message shown when impersonation is detected.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
First stable release.
