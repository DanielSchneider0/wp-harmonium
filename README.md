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

Developers at Revelry will use the new Harmonium theme as the basis for future WordPress-based projects. As we work on new projects, this theme will act as the starter theme. As we work on individual projects, changes that we feel should be made part of our starter theme will be pushed upstream to this starter theme.

## Nouns & Verbs

- *WordPress*: The Content Manegement System software used to run a website
- *Harmonium*: A React based asset library for adding consistant, yet flexible elements to a website
- *Harmonium Theme*: The WordPress theme we are building to be used as the starting point for future WordPress projects.
- *Parent Theme*: A WordPress theme that can be used as a framework and should not be edited directly so that the theme can be overwritten with an updated version without losing customizations.
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
Business Analyst |  |  |
Account Manager |  |

## Important Note

This repo and the instructions to follow are related to working on the WP Harmonium starter theme. DO NOT push website project specific code to this repo.

For complete information on starting a new WordPress project, please visit the [Starting a New Project](http://wiki.revelry.co/index.php/Wordpress#Starting_a_New_Project) section on the Rev Wiki WordPress page.

## Project Setup

This repo is not a complete WordPress install. It only consists of the Harmonium theme. In order to set it up for local development, see Local Development below.

### Tech Stack

- Based on [wd_s](https://github.com/WebDevStudios/wd_s), which was based on [underscores](https://underscores.me/)
- Has the [Harmonium Asset Library](https://harmonium.revelry.co/) baked in


### Local Development

**Note: The build system has recently changed from gulp to npm. There may be some changes to this section still to come.**

To set up your local environment to work on this project:

- Start MAMP and point apache at an empty folder
- Install [WordPress](https://codex.wordpress.org/Installing_WordPress)
- From the command line, run the following commands
  - `cd wp-content/themes/`
  - `git clone git@github.com:revelrylabs/wp-harmonium.git harmonium`
- In WordPress, activate the Harmonium Theme
- From the command line, run the following commands
	- `cd harmonium`
	- `npm i`

### Install dependencies

All of the dependencies have been included as part of the Github Repo. That may change in the future, but for the time being, everything that's needed will be installed as part of the Local Development setup process above.

### While working on the project

Create a feature branch off of `master`. When ready, push the feature branch to Github and create a pull request.

Post any questions in the WP-Harmonium channel on Slack
