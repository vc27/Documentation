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

The addons directory will consist of one file: initiate-addons.php. Within that file you will find all the includes wrapped within an if statement which checks for a constant. This process ensures that the code is not added twice.

### Addons follow a design pattern
Each addon should follow the same design pattern.

**Addon design pattern**
- folder name
- initiate.php
- check for initiation
- settings class _optional_
- required files

### Addons as a CMS
Most addons are a part of a greater cms. In this instance they should utilize cms functionality rather than reinventing the wheel. Addons should also utilize any filtering system that is available as well as present it's own filters so other addons may manipulate or add

### AddonStarter
Attached to this documentation is a folder that contains a default version of the "addons" folder with the addon starter "AddonStarter" that includes the necessary files for an addon. 

**dir/addons**
- [initiate-addons.php](addons/initiate-addons.php)
- AddonStarter/

**dir/AddonStarter**
- change-log.md
- initiate.php
- ClassName.php
- ClassNameWP.php