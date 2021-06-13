# beyhagh
## A website for a wire and cable manufacturer

* For this website I'll focus on SEO.

* Did google index your site? Do a `site:` search for your site's home URL like: `site:nedasedighi.ir`.

* Create a `site-map` for your website so that every page of post of your website is discoverable by crawlers.

* If `yoast` plugin cannot create a sitemap for your wordpress site, it might because of a `white space` in the start or at the end of the `functions.php` file. Remove empty lines from start and end of the file.

* Register your site in google search console. Verification takes some time.

* Create a `robots.txt` file in the root of your website. You can also register this file in google search console. Using this file you can limit robots access to specific files or folder hence increasing your website security. Typical content of such a file is as follows:

``` 
User-Agent: *
Disallow: /wp-content/plugins/
Disallow: /readme.html
Sitemap: http://mizbanfa.net/post-sitemap.xml
Sitemap: http://mizbanfa.net/page-sitemap.xml

```

* Ensure that your <title> elements and alt attributes are descriptive, specific, and accurate.

* Always specify your character encoding.
