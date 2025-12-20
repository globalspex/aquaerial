> 🚧 **Status:** This repository is currently in active development. Features, components, and styles are being added and refined.

# GX Core Base Theme

This is the core repository for GlobalSpex Components, containing the foundational CSS and reusable building blocks for our agency’s projects.

## TODO
- [ ] Finish `components.css`
- [ ] Validate `base.css`
- [ ] Optimize `style.css`
- [ ] Document how to use `components.css`

## Overview

This repository is structured to serve as the baseline for building custom themes efficiently and consistently. It includes a centralized system for managing global styles, reusable components, and theme-specific customizations.

You can view the current base theme in action here: 🔗 [gxcore live preview](https://gxtesting.com/gxcore)

You can also copy this repository for a new project, as it includes all the base CSS files and SFTP config file.

## File Breakdown

### `base.css`
**Status:** 🟢 Stable – Core structure mostly finalized.

This file is derived from our 🔗[Master Base CSS](https://www.notion.so/globalspex/Master-Base-CSS-0b6d95d7d33b4084a0755a1b5259a4be). It functions as a foundational framework, setting global styles, CSS variables, and utilities that all components and themes rely on. Think of it as the structural core of our visual system.

### `components.css`
**Status:** 🟡 In Progress – More components are being added and standardized.

This acts as a centralized database of all reusable CSS components across our projects. It includes styles for buttons, cards, forms, sections, and other elements we use consistently.

### `style.css`
**Status:** 🟣 Custom – Intended for project-specific overrides; usage varies per implementation.

This is the theme-specific CSS file. It should be used to override component styles or add unique/custom styles for a given project. All new theme rules or adjustments to existing components should be placed here.

## How the Process Works

Our design and development pipeline is documented in detail in Notion. Please refer to our Component Process documentation for guidance on creating, updating, and deploying components:

🔗 [Component Process Documentation](https://www.notion.so/globalspex/Component-Process-23a405fb67828015ab6df6a6656aa7cc)


This documentation outlines:
- How to request new components
- The review and approval workflow
- Guidelines for naming conventions and organization
- Versioning and release notes

## Development Setup

This repository includes the default SFTP configuration used for staging deployments. It serves as the starting point for syncing the theme files to our development server.

You can use this config to begin development on the staging server immediately, ensuring all base files and updates are reflected correctly.

## Contribution

When contributing to this repo:
- Follow the naming and organization conventions defined in the Notion documentation.
- Avoid direct edits to `base.css` unless updating core framework rules.
- Add all new component styles to `components.css`.
- Use `style.css` only for project-specific tweaks.

## License

Internal use only. Property of GlobalSpex.
