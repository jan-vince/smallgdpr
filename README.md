# Small GDPR
> Simple plugin to cope with GDPR


## Installation

**GitHub** clone into `/plugins` dir:

```sh
git clone https://github.com/jan-vince/smallgdpr
```

**OctoberCMS backend**

Just look for 'Small GDPR' in search field in:
> Settings > Updates & Plugins > Install plugins

### Permissions

> Settings > Administrators

You can set permissions to restrict access to *Settings > Small plugins > Small GDPR* and to messages list.


## Quick start guide

### Cookies

* Install plugin.
* Go October's settings page and click on GDPR > Cookies.
  * Go to tab Import and click button Import settings.
  * Go to tab Cookies, add your JS code to cookies group as you need.

* Go to CMS part of October.
  * Add new Layout (or use your existing)
  * Add component Small GDPR > Cookies bar (inside of your `body` tag).

* Go to CMS part of October.
  * Add new Page with URL `/gdpr`
  * Add component Small GDPR > Manage cookies (inside any of your tags)

> Do not forget to add `{% scripts %}` tag to your layout page just before closing `body` tag! More info [in October docs](https://octobercms.com/docs/markup/tag-scripts).


* Open your website - cookies bar should be visible :)


## Settings

### Cookies groups

The main idea is to create groups of cookies and scripts you want to run on your website.

One or more groups can be set as `Required`. User cannot disable these groups in Manage cookies component.

One or more groups can be set as `Active without consent`. Scripts in these groups will always run.

### Cookies bar 

You can edit title and content of cookies bar.

If you want, you can allow default CSS styles.

#### Buttons

You can add one or more buttons to your cookies bar. 

One (or more) buttons can be set to `Allow all cookies`. Clicking on these buttons will set all cookies groups to be enabled.

> *Users can change cookies settings later on CMS page with Manage cookies component (like /gdpr).*

One (or more) buttons can be set to `Open modal window` (currently supported only for Bootstrap UI style when set on Settings tab).

### Manage cookies

Just add title and content and those will be shown above cookies groups listing in Manage cookies component.


### Settings

Few general settings to be set.

#### Cookies expiration

Number of days for cookies to live in browser.

#### UI style

Change formating of output HTML code.

### Import

You can import settings presets from default files or your own.

You have to use YAML format.

Examples are in `/plugins/janvince/smallgdpr/assets/presets/` folder.


## Components

### Cookies bar

Should be used in your Layouts.


### Manage cookies

Put this component to your page with details about privacy (like /gdpr or /cookies).

Users will be able to change cookies settings.




----
> My thanks goes to:    
> [OctoberCMS](http://www.octobercms.com) team members and supporters for this great system.   
> [Brooke Cagle](https://unsplash.com/@brookecagle) for her photo.   
> [Font Awesome](http://fontawesome.io/icons/) for nice icons.
> [OFFLINE](https://github.com/OFFLINE-GmbH) for inspiration from [his GDPR plugin](https://github.com/OFFLINE-GmbH/oc-gdpr-plugin)

Created by [Jan Vince](http://www.vince.cz), freelance web designer from Czech Republic.



