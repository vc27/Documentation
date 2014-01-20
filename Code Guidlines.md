Code Guidelines
====================

Notes:
--------------------
These guidelines are intended for an OOP decoupled approach to adding functionality repetitive manner. The goal is speed production and create reusable code for future use.

Some projects may not have enough allotted time in the budget for clean reusable code, however this approach supplies a template and a formula that will allow for easier refactoring.

### Code as an Addon
An addon can be a single file or a folder of files that perform a specific functionality or group of tasks. The goal in building an addon is to do it in a way that it is separate from other areas of code, it can be deactivated and allow other process to continue without harm.

### Addons directory
In this documentation we assume that the cms does not have a library initiation process or auto loading. The process described blow is more manual than it needs to be, but it is in place to assure usability in all environments. This process is also used in order to keep it _simple_.

The addons directory will consist of on file. initiate-addons.php With in that file you will find all the includes wrapped within an if statement that checks for a constant. This process ensures that the code is not added twice.

### Addons follow a design pattern
Each addon should follow the same design pattern.

**Addon design pattern**
- folder name
- initiate.php
- check for initiation
- settings class (optional)
- required files

Addons as a CMS
Most addons are a part of a greater cms. In this instance they should utilize cms functionality rather than reinventing the wheel.

WP Code is inserted in production using proper hooks and filters
The WordPress cms come with a hook and filter system which should be utilized at key points. This will enable other addons to hook in and make changes when necessary. Code added to WordPress should utilize proper hooks and filters such as init, admin_init, wp_head and various others.

