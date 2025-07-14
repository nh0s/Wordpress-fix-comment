# Fix-0day-Comment

**Author:** [Michaël Russo](https://www.linkedin.com/in/michaelruss0/)  
**Version:** 1.0.0  
**License:** [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)  
**Tags:** comments, impersonation, security, spam, moderation  
**Requires WordPress Version:** 5.0+  
**Tested up to:** 6.5  
**Requires PHP Version:** 7.2+

---

## 🛡️ Description

**Anti Comment Impersonation** is a lightweight WordPress plugin that prevents unauthenticated users from impersonating registered users in the comment section.

By default, WordPress allows anyone to leave a comment by simply entering a name and email address — which can be exploited to post under someone else's identity.

This plugin blocks unauthenticated users from submitting a comment using a username or email address that matches an existing WordPress user account. Instead, they are prompted to log in to comment under that identity.

### ✅ What it does:
- Enhances trust and identity integrity
- Prevents abuse through fake comments from impersonated users
- Secures your community interactions

---

## 🚀 Features

- 🔒 Blocks impersonation attempts using registered usernames or emails
- ⚙️ No configuration required — works out of the box
- 🧩 Lightweight and efficient
- 👥 Does not affect logged-in users

---

## 📦 Installation

1. Upload the plugin folder to `/wp-content/plugins/anti-comment-impersonation`, or install it via the WordPress admin panel.
2. Activate the plugin through the **Plugins** screen.
3. That's it! The protection is now active.

---

## ❓ FAQ

### Will this plugin block all anonymous comments?

No. Visitors can still comment anonymously, as long as they don't use the name or email address of a registered user.

### Does it affect logged-in users?

No. Logged-in users are free to comment as usual.

### Can I customize the error message?

Not yet, but this may be added in a future release.

---

## 🖼️ Screenshots

1. Error message displayed when a guest user tries to impersonate an existing account.

---

## 📝 Changelog

### 1.0.0
- Initial release.

---

## 📢 Upgrade Notice

### 1.0.0
First stable release.
