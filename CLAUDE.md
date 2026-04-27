# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this project is

A static personal CV/portfolio website hosted on GitHub Pages at florrueda.github.io. No build system, no framework, no backend — pure HTML5, CSS3, and vanilla JavaScript.

## Running locally

Open `index.html` directly in a browser, or use any static file server:

```bash
python -m http.server 8080
```

There are no build steps, no npm install, and no compilation required.

## Architecture

**Single-page structure** — the entire site lives in one file:

- [index.html](index.html) — all page content (sections: hero, about, skills, resume, portfolio, contact)
- [assets/css/style.css](assets/css/style.css) — all custom styles
- [assets/js/main.js](assets/js/main.js) — all custom JavaScript
- [assets/vendor/](assets/vendor/) — third-party libraries (not CDN, bundled locally)

**All CV content is hardcoded in `index.html`.** To update skills, experience, portfolio items, or contact info, edit the HTML directly.

## Key libraries (all served from `assets/vendor/`)

| Library | Purpose |
|---|---|
| Bootstrap 5.2.3 | Grid, layout, responsive breakpoints |
| AOS | Scroll-triggered animations (`data-aos` attributes on elements) |
| GLightbox | Lightbox for portfolio images |
| Isotope | Portfolio grid filtering by category |
| Typed.js | Hero section typing animation |
| Swiper | Carousel/slider (testimonials section) |
| PureCounter | Animated stat counters |

## Layout

- Desktop (>991px): fixed left sidebar + scrollable main content
- Mobile (<991px): hamburger nav that slides in from the left

Navigation uses anchor links (`#hero`, `#about`, `#resume`, `#portfolio`, `#contact`). Active link highlighting is driven by scroll position in `main.js`.

## Portfolio filtering

Portfolio items use `data-filter` attributes that map to Isotope filter buttons. To add a new category, add the filter button in the `.portfolio-filters` list and set the matching `filter-*` class on the portfolio item `<div>`.

## Deployment

Pushing to `main` deploys automatically to GitHub Pages. No CI/CD pipeline is configured.
