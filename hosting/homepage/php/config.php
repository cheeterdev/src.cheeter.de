<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$siteName = "Cheeter Hosting";
$currentYear = date('Y');
$domain = "hosting.cheeter.de";
?>

<link rel="icon" href="https://cdn-icons-png.flaticon.com/512/1827/1827970.png" type="image/png">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<!-- Styles -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="css/style.css">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap");

:root {
  --bg-color: #1a1a1a;
  --sec-bg-color: #0e0c0a;
  --text-color: #ffffff;
  --main-color: #ff4b4b;
  --main-hover: #CC3C3C;
  --box-bg: #ffffff05;
}

body {
  font-family: "Inter", sans-serif;
  background-image: linear-gradient(
    135deg,
    var(--bg-color) 0%,
    var(--sec-bg-color) 100%
  );
  color: #f1f5f9;
}

.gradient-text {
  background-image: var(--main-color);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

/* Basis Styles */
body {
  font-family: "Inter", sans-serif;
  background-color: #0f172a;
  color: #f1f5f9;
}

.nav-container {
  max-width: 1600px;
  margin: 0 auto;
  padding: 1rem 1.5rem;
}

.flex-between {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

/* Gradient Text */
.header-text {
  font-size: 1.5rem;
  font-weight: 700;
  background: var(--main-color);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

/* Desktop Menu */
.desktop-menu {
  display: none;
  gap: 2rem;
  align-items: center;
}

.nav-link {
  color: #cbd5e1;
  text-decoration: none;
  transition: color 0.3s ease;
}

.nav-link:hover {
  color: var(--main-hover);
}

/* Buttons */
.nav-button {
  padding: 0.5rem 1.5rem;
  border-radius: 0.5rem;
  text-decoration: none;
  transition: background 0.3s ease;
}

.header-btn {
  background: var(--main-color);
}

.contact-btn:hover {
  background: #1d4ed8;
}

.signup-btn {
  background: #7c3aed;
}

.signup-btn:hover {
  background: #6d28d9;
}

/* Mobile Menu */
.mobile-menu-btn {
  display: block;
  background: none;
  border: none;
  color: inherit;
  cursor: pointer;
}

.mobile-menu {
  display: none;
  margin-top: 1rem;
  background: var(--box-bg);
  border-radius: 0.5rem;
  padding: 1rem;
  transition: color 0.3s;
}

.mobile-menu[x-cloak] {
  display: none !important;
}

.mobile-link {
  display: block;
  padding: 0.5rem 0;
  text-decoration: none;
  color: inherit;
}

/* Responsive */
@media (min-width: 768px) {
  .desktop-menu {
    display: flex;
  }
  .mobile-menu-btn {
    display: none;
  }
}

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #1e293b;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .mobile-dropdown {
        position: relative;
    }

    .mobile-dropdown-content {
        display: none;
    }

    .mobile-dropdown.show .mobile-dropdown-content {
        display: block;
    }

footer {
  background-color: var(--box-bg);
  padding: 20px;
  text-align: center;
  backdrop-filter: blur(10px);
  color: #94a3b8; /* text-slate-400 */
}
</style>