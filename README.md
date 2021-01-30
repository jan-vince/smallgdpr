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
  * Go to tab Import and click button `Import default settings`.
  * Go to tab Cookies, add your JS code to cookies group as you need.

* Go to CMS part of October.
  * Add new Layout (or use your existing)
  * Add component Small GDPR > Cookies bar (inside of your `body` tag).

* Go to CMS part of October.
  * Add new Page with URL `/gdpr`
  * Add component Small GDPR > Manage cookies (inside any of your tags)

> Do not forget to add `{% scripts %}` tag to your layout page just before closing `body` tag! More info [in October docs](https://octobercms.com/docs/markup/tag-scripts).


* Open your website - cookies bar should be visible :)

---
## Settings

### Tab: Cookies groups

The main idea is to create groups of cookies with JS scripts that you want to run on your website.

#### Required 

When turned on users cannot disable these groups in Manage cookies component and scripts will be always executed.

#### Default enabled

Scripts in these groups will run without explicit user concent but can be disabled by user (in Manage cookies component).

Be careful not to violate your local laws!

#### Scripts

You can add one or more scripts to selected group

##### Custom JS code or files

You can add your own JS code and/or files to be executed when a cookies group is allowed (or required).

You can optionally limit scripts execution to production mode.

##### Run only in production

Script wil be executed only in `production` environment.

##### Disable

This scripts will never be executed

##### Run on specific pages

You can limit scripts execution to specific pages URLs.

### Tab: Cookies bar 

You can edit title and content of cookies bar.

If you want, you can select from pre-defined CSS styles.

#### Buttons

You can add one or more buttons to your cookies bar. 

##### Allow all cookies

When turned on, click on this button will set all cookies groups enabled.

Usefull for "Allow all" button on Cookies bar.

*Note: Users can change cookies settings later on CMS page with Manage cookies component (like /gdpr) if you create one.*

##### Open modal window

When turned on, click on this button open modal window with list of cookies group.

*Currently supported only for Boostrap 3 UI style (can be set on tab Settings).*

### Tab: Manage cookies

Just add title and content and those will be shown above cookies groups listing in Manage cookies component.


### Tab: Settings

Few general settings to be set.

#### Cookies expiration

Number of days for cookies to live in browser.

#### UI style

Change formating of output HTML code.

### Tab: Import

You can import settings presets from Media your own path or default plugin preset (if you leave all empty).

You have to use YAML format.

*Note: Try Export first to get idea of an import file structure.*

### Tab: Export

You can export current settings data to configuration file and use it as a backup or template for other sites.



## Components

### Cookies bar

Should be used in your Layouts or Pages.

#### Hide Cookies bar

If you need to hide Cookies bar on specific Page or Layout, you can use [View Bag](https://octobercms.com/docs/cms/components#viewbag-component) on your Page this way:

```
[viewBag]
hideCookiesBar = 1
```

### Manage cookies

Put this component to your page with details about privacy (like /gdpr or /cookies).

> Manage cookies component can be also added as a snippet to Static Page

Users will be able to change cookies settings.

## HOWTO

With component `Cookies bar` or `Manage cookies` you can access cookies settings in your Twig code like this:

```
{% if sgCookies.necessary %}
 ...
{% endif %}
```


----
> My thanks goes to:    
> [OctoberCMS](http://www.octobercms.com) team members and supporters for this great system.   
> [Brooke Cagle](https://unsplash.com/@brookecagle) for her photo.   
> [Font Awesome](http://fontawesome.io/icons/) for nice icons.
> [OFFLINE](https://github.com/OFFLINE-GmbH) for inspiration from [his GDPR plugin](https://github.com/OFFLINE-GmbH/oc-gdpr-plugin)

Created by [Jan Vince](http://www.vince.cz), freelance web designer from Czech Republic.



