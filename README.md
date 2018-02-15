# Joomla Module

This Joomla extension provides a way to embed the Florida Pro Bono Matters catalog into an article.

### Install the extension

1.  Visit Extensions > Manage > Install, and install from the downloaded zip file

1.  Visit Extensions > Modules, and set  Florida Pro Bono Matters module as "Published"

1.  Click "Florida Pro Bono Matters" to configure the module.

1.  Under the "Module" tab, input your Provider ID

1.  Under "Show Title" option, select "Hide"

1.  Under the "Menu Assignment" tab, set "On all pages" in the Module Assignment pull-down

1.  Visit the article you want to place the catalog in.

1.  Place the following in the article you want the catalog to appear in.

```HTML
{loadmodule mod_fpbm,Florida Pro Bono Matters}
```

### NOTE: The number used for the "Provider ID" will be provided by FPBM to relevant parties.