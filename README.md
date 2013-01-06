Magento Enterprise FPC Fix
========

This extension provides a fix for Magento Enterprise's full page cache when switching themes. The problem is the theme
is not used as part of the full page cache uri and therefore using the theme switcher for mobile and desktop causes issues.

Please report all issues in the tracker.

### Features:
 * Allows you to have different caches for each theme in a package.

### Compatability
 * Magento Enterprise 1.11+
 * May work with earlier versions but they've not been tested.
