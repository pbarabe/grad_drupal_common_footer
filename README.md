# Grad College Common Footer Block
## For Quickstart 2 / Drupal 9+

This module provides a footer block with common links to be used by all
grad.arizona.edu Quickstart 2 / Drupal websites.

## Installation

Assuming you have a Quickstart 2 site's git repository cloned, edit your site's 
`composer.json` file.

Add the following to the `repositories` section:

```json
  {
    "type": "vcs",
    "url": "git@github.com:uazgraduatecollege/grad_drupal_common_footer.git"
  }
  ```
And add the following to the `require` section:

```json 
  {
    "uazgraduatecollege/grad_drupal_common_footer": "dev-main"
  }
```

Commit your changes and re-initialize you site.

If using a site cloned from Pantheon, delete your `composer.lock` file before
committing your changes and then `git push` back up to the pantheon remote.

## Configuration 

Enable the by navigating to your site's `Admininistration => Extend` and clicking 
the Grad Drupal Common Footer Block modules.

Alternatively, enable using terminus:

```sh
$ terminus remote:drush en grad_drupal_common_footer 
```

Then navigate to the site's Blocks configuration, and assign the Grad Common Footer 
to the `Footer` region.

## Notes

This module was created following the 
[specbee Block Module Tutorial](https://www.specbee.com/blogs/programmatically-creating-block-in-drupal-9)

