WP Decoupled Functionality
====================

Notes:
--------------------
The following outline is based on a production environment where the developer is brought in after the preliminary site outlines and design have been completed and approved.

Outline:
--------------------
The item in this outline detail the process of building code that is usable on future projects.

### Decoupled Code as an Addon
- Added functionality is to be added with an “/addons” folder.
- An addons is created with the same concept as a plugin.
- Addons should follow a pattern for initiation and functional usage.
- Addons are to use parent theme functionality where applicable.
- Functionality that is inserted into production is to use proper hooks and filters.
- Addons are build with the ability to be hooked into and filtered by other addons
- Addons are given a change-log to document updates and version control