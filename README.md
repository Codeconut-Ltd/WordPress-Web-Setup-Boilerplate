![WordPress Web Setup Boilerplate](teaser.png)

# Web Setup

- [About](#about)
- [Features](#features)
- [How to use](#how-to-use)
- [Todo](#todo)

<br>

---

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Codeconut-Ltd_WordPress-Web-Setup-Boilerplate&metric=alert_status)](https://sonarcloud.io/dashboard?id=Codeconut-Ltd_WordPress-Web-Setup-Boilerplate)
![Maintenance](https://img.shields.io/static/v1?label=maintained&message=unregular&color=inactive)

<br><br>

## About

Security-focused structural boilerplate for any WordPress webs. Opinionated features that might not work with any hosting. Only use if experienced with WordPress setup and feel comfortable editing server files.

**Intended for developers – Not end users**

<br><br>

## Features

### General

- Generic config suited for multiple WordPress installations in one hosting environment.
- Subfolder setup allows to deploy multiple versions and quickly switch between them to reduce outage or fallback in case of application errors.
  - Here: The folder name '/live/' is an arbitrary decision for the most-recent version to reduce edit-needs within the file. One could also work with versions or dates.
- Default `robots.txt` blocks 'wp-' path indexing and example sitemap

### Performance

- Block image hotlinking (requires manual whitelisting of domains).

### Security

Secrets

- Optional: Secure `/wp-admin/` path with password from `.htpasswd`
- `wp-config` secrets moved out of web scope
  - [StackExchange discussion](https://wordpress.stackexchange.com/questions/58391/is-moving-wp-config-outside-the-web-root-really-beneficial)

.htaccess

- Block critical file access
- Block admin path and files access
- Block author scans from frontend
- DEV-environment specific changes, e.g. disable caching (Needs manual definition of environment)
- Secure default folders with additional files (some need manual adjustment)

<br><br>

## How to use

Copy the folder content in the WordPress installation.

### Changes

Most files require manual adjustments to fit hosting and website needs. Manually check the suggested features and test with your hosting environment capabilities. Some features might not work everywhere!

#### Config

1. Check global defaults for all websites:
   - `/public_html/config/global.php`
2. Check domain-specific defaults and replace 'XXX' placeholders:
   - `/public_html/config/domains/*.php`
3. Adjust file + folder names - Suggestions
   - Match `/config/domains/*` config file with web folder name.
   - Add a random hash after it to prevent guessing other web config filenames.

### .htaccess files

1. Check the web root and `/live/` folder files:
   - Replace any 'XXX' placeholders
   - Update domains, paths and needed features

<br><br>

## Todo

- Add list of unneeded default files to be removed
