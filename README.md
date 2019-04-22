WP Harmonium


_Build Badges_

Site | Build Status
--- | ---
Staging | TBD
Production | TBD

# Harmonium Theme
Product Owner: John Hawkins
* **Project Start Date:** January 15, 2019
* **Product Launch Date:** TBD
* **Current End of Contract Date:** N/A

## Links to relevant docs, repos, etc.
Thing | Location
--- | ---
Waffle Board | [link](https://waffle.io/revelrylabs/wp-harmonium)
Google Drive | [link](https://drive.google.com/drive/folders/18la030QwqHGcRYMrc_XpOfEVWtqJeT1w)
Sprint Reports | TBD
Continuous Integration | TBD
Staging | [link](https://harmoniumtheme.wpengine.com)
Production | TBD

## Compatibility Targets
### Web App Browser Compatibility Targets

OS | Browsers
--- | ---
Windows | IE 11+, Chrome (latest), Firefox (latest), Edge (latest)
Mac | Chrome (latest), Firefox (latest), Safari (latest)
iOS | Safari (latest)
Android | Chrome (latest)

## The Project Brief

### The Idea

Create a WordPress theme that incorporates the Harmonium asset library to be used as our internal starter theme for future WordPress projects.

### Who are we building for?

Initially, this project is being built for the developers at Revelry. The theme will provide developers a consistant starting point for kicking off WordPress based projects. 

The long term plan for the project is to create a starter theme that is released as Open Source Software. This serves the double-purpose of giving back to the WordPress community while expanding the visibility of the Harmonium asset library.

### What is the main problem we are trying to solve?

Each time a new WordPress project is started at Revelry, a developer spends valuable time incorporating Harmonium into a 3rd-party theme. Without a standard process, this has resulted in no two WordPress projects being built the same way. This theme will save our developers hours of startup time on each project and will ensure our projects are built in a consistant fashion.

### What is the core loop?

Developers at Revelry will use the new Harmonium and the [companion child theme](https://github.com/revelrylabs/wp-harmonium-child) as the basis for future WordPress-based projects. As we work on new projects, this theme will act as the parent theme and will not be altered on a site-by-site basis. Instead, all site specific work will be done in the child theme. Changes needed in the parent theme will be done to the global parent theme so they can be pushed to all active projects using it.

## Nouns & Verbs

- *WordPress*: The Content Manegement System software used to run a website
- *Harmonium*: A React based asset library for adding consistant, yet flexible elements to a website
- *Harmonium Theme*: The WordPress theme we are building to be used as the starting point for future WordPress projects.
- *Parent Theme*: A WordPress theme that can be used as a framework and should not be edited directly so that the theme can be overwritten with an updated version without losing customizations.
- *Child Theme*: A WordPress theme that uses another theme as a base and allows for the parent theme to be updated without losing customizations made to the theme. 
- *Theme*: A collection of files that dictates how a website will look when viewed in a browser.
- *Page*: Static content on a website. For example, the Contact Us or About Us page on a site. These are considered static pages as they are not based on a specific date.
- *Post*: Chronological content on a website are considered posts. For example, a blog or latest news would be considered a post.
- *Header*: The top section of the website that contains a logo and site navigation. The header is typically the same across all pages of the website.
- *Footer*: The bottom section of the website. The footer typically contains copyright information and can contain information and links that remain consistant across the entire website.
- *CSS*: CSS stands for Cascading Style Sheet. This code defines how elements on the site display. Colors, font sizes, padding, margin, alignment, etc.. that's all handled with CSS.

## Team

Role | Person | Email
---- | --- | ---
Product Owner | John Hawkins | john.hawkins@revelry.co |
Product Manager | Aline Adams | aline@revelry.co |
Tech Lead | John Hawkins | john.hawkins@revelry.co |
Engineer | John Hawkins | john.hawkins@revelry.co |
Designer | Laura Hill | laura@revelry.co |
QA | |
Business Analyst | Ann Diab | ann@revelry.co |
Account Manager |  |

## Important Note

Please keep in mind that this theme is a Parent Theme and should be used in conjunction with the [WP-Harmonium Child](https://github.com/revelrylabs/wp-harmonium-child) theme. The Parent Theme (this theme) should be installed, but not activated. The Child theme should be installed and be the active theme on the website. For more information, please visit [Starting a New Project](http://wiki.revelry.co/index.php/Wordpress#Starting_a_New_Project) section on the Rev Wiki WordPress page.

## Project Setup

This repo is not a complete WordPress install. It only consists of the Harmonium theme. In order to set it up for local development, see Local Development below.

### Tech Stack

- Based on [underscores](https://underscores.me/)
- Has the [Harmonium Asset Library](https://harmonium.revelry.co/) baked in


### Local Development

To set up your local environment to work on this project:

- Start MAMP and point apache at an empty folder
- Install [WordPress](https://codex.wordpress.org/Installing_WordPress)
- From the command line, run the following commands
  - `cd wp-content/themes/`
  - `git clone git@github.com:revelrylabs/wp-harmonium.git harmonium`
- **Note:** If your local dev URL will be anything other than http://harmonium.local, you'll need to edit the URL on line 8 in `gulpfile.js`
- In WordPress, activate the Harmonium Theme
- From the command line, run the following commands
	- `cd harmonium`
	- `gulp`

### Install dependencies

All of the dependencies have been included as part of the Github Repo. That may change in the future, but for the time being, everything that's needed will be installed as part of the Local Development setup process above.

### While working on the project

Create a feature branch off of `master`. When ready, push the feature branch to Github and create a pull request.

Post any questions in the WP-Harmonium channel on Slack


///////////////////////////////////////////////
Previous info, will integrate further over time
///////////////////////////////////////////////

===

Hi. I'm a starter theme called `wd_s`, or `wdunderscores`. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead, try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for!

I feature some of the web's most proven technologies like: [Gulp](http://gulpjs.com/), [LibSass](http://sass-lang.com/), [Babel](https://babeljs.io/), [PostCSS](https://github.com/postcss/postcss), and [BrowserSync](https://www.browsersync.io/). To help you write clean code (that meets [WordPress standards](https://make.wordpress.org/core/handbook/best-practices/coding-standards/)), I'm also bundled with a [Sass Lint](https://github.com/sasstools/sass-lint), [ESLint](https://eslint.org/), and [PHPCS](https://github.com/squizlabs/PHP_CodeSniffer) linting rulesets. Did I mention that I'm also accessible? Yup. I pass both WCAG 2.0AA and Section 508 standards out of the box.


If that weren't enough, I also support [synchronized JSON](https://www.advancedcustomfields.com/resources/synchronized-json/) for [Advanced Custom Fields](https://www.advancedcustomfields.com/) and support both [Selective Refresh](https://make.wordpress.org/core/2016/03/22/implementing-selective-refresh-support-for-widgets/) and [Live Preview](https://codex.wordpress.org/Theme_Customization_API#Part_3:_Configure_Live_Preview_.28Optional.29) in the Theme Customizer.

If you have the latest version of [Advanced Custom Fields Pro](https://www.advancedcustomfields.com/pro/), then you can take advantage of our [ACF Content Blocks](https://github.com/WebDevStudios/wd_s/wiki/ACF-Content-Blocks) system. Content Blocks are great way to "visually manage blocks of content" throughout your website.

## Getting Started

### Prerequisites

Because I'm bundled with Gulp, basic knowledge of the command line and the following dependencies are required: either [Yarn](https://yarnpkg.com) or [Node](https://nodejs.org), [Gulp CLI](https://github.com/gulpjs/gulp-cli) (`npm install -g gulp-cli`), and [Bower](https://bower.io/) (`npm install -g bower`).

### Advanced

If you want to set me up manually:

1) [Download]() and extract the zip into your `wp-content/themes` directory and rename `wd_s-master` to fit your needs.

2) Find & Replace

You'll need to change all instances of the names: `_s`.

* Search for: `'harmonium'` and replace with: `'project-name'` (inside single quotations) to capture the text domain
* Search for: `_s_` and replace with: `project-name_` to capture all the function names
* Search for: `Text Domain: _s` and replace with: `Text Domain: project-name` in style.css
* Search for (and include the leading space): <code>&nbsp;_s</code> and replace with: <code>&nbsp;Project Name</code> (with a space before it) to capture DocBlocks
* Search for: `_s-` and replace with: `project-name-` to capture prefixed handles
* Search for `_s.pot` and replace with: `project-name.pot` to capture translation files
* Search for `_s.com` and replace with: `project-name.dev` to match your local development URL
* Edit the theme information in the header of style.scss to meet your needs

## Development

After you've installed and activated me. It's time to setup Gulp.

1) From the command line, change directories to your new theme directory

```bash
cd /your-project/wordpress/wp-content/themes/your-theme
```

2) Install theme dependencies (use either Yarn or NPM)

Yarn
```bash
yarn install && bower install
```
NPM
```bash
npm install && bower install
```

### Gulp Tasks

From the command line, type any of the following to perform an action:

`gulp watch` - Automatically handle changes to CSS, JS, SVGs, and image sprites. Also kicks off BrowserSync.

`gulp icons` - Minify, concatenate, and clean SVG icons.

`gulp i18n` - Scan the theme and create a POT file.

`gulp sass:lint` - Run Sass against WordPress code standards.

`gulp js:lint` - Run Javascript against WordPress code standards.

`gulp scripts` - Concatenate and minify javascript files.

`gulp sprites` - Generate an image sprite and the associated Sass (sprite.png).

`gulp styles` - Compile, prefix, combine media queries, and minify CSS files.

`gulp` - Runs the following tasks at the same time: i18n, icons, scripts, styles, sprites.
