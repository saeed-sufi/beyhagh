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
  
* make sure every page on your site has a title specified in the <title> tag. Every page of the site must have a descriptive and concise title tag.
  
* Use JSON-LD to create structured data for your website. Structured data would add rich results of your website to the search result.
  
* Google differentiates between the www and non-www version. When adding your website to Search Console, we recommend adding both http:// and https:// versions, as well as the www and non-www versions.
  
* Setting the value of the rel attribute of a link to nofollow or ugc will tell Google that certain links on your site shouldn't be followed: 
  `<a href="http://www.example.com" rel="nofollow">Anchor text here</a>`

* Use `data highlighter` to help google create a structured linked data for your site and show intuitive search results for your page.

* By including `font-display: swap` in your @font-face style, you can avoid FOIT in most modern browsers.
  
* Add `rel="noopener"` or `rel="noreferrer"` to any external links to improve performance and prevent security vulnerabilities.
  
  
## Optimization

* An object cache is a way of storing data from the database in memory, to prevent unnecessary queries on the database. 
  
* For server caching use Varnish cache which is very powerful when used with a WordPress caching plugin such as W3TC.

* Use Varnish and W3TC as a caching solution.
  
* On a first request, for the first 14Kb bytes, latency is longer because it includes a DNS lookup, a TCP handshake, the secure TLS negotiation.
  
* Disk latency is the time it takes from the moment a computer, usually a server, receives a request, to the time the computer returns the response.
  
* GTmetrix assesses the front-end structure of your page to ensure that it is delivered as optimally as possible to your visitors
 
* A good indicator of your server-side performance is the time it takes to generate the HTML page (Page Generation Time). This is labeled as “Waiting” time on the first element in the waterfall graph (also known as the “Time-to-First-Byte”). Generally, this time should be kept under 600 milliseconds (or as low as possible).
  
* Add the following code to `.htaccess` to prevent headers from expiring so soon:
```## EXPIRES HEADER CACHING ##
<IfModule mod_expires.c>

    ExpiresActive on
    ExpiresDefault                                      "access plus 1 month"

  # CSS
    ExpiresByType text/css                              "access plus 1 year"

  # Data interchange
    ExpiresByType application/atom+xml                  "access plus 1 hour"
    ExpiresByType application/rdf+xml                   "access plus 1 hour"
    ExpiresByType application/rss+xml                   "access plus 1 hour"

    ExpiresByType application/json                      "access plus 0 seconds"
    ExpiresByType application/ld+json                   "access plus 0 seconds"
    ExpiresByType application/schema+json               "access plus 0 seconds"
    ExpiresByType application/vnd.geo+json              "access plus 0 seconds"
    ExpiresByType application/xml                       "access plus 0 seconds"
    ExpiresByType text/xml                              "access plus 0 seconds"

  # Favicon (cannot be renamed!) and cursor images
    ExpiresByType image/vnd.microsoft.icon              "access plus 1 week"
    ExpiresByType image/x-icon                          "access plus 1 week"

  # HTML
    ExpiresByType text/html                             "access plus 0 seconds"

  # JavaScript
    ExpiresByType application/javascript                "access plus 1 year"
    ExpiresByType application/x-javascript              "access plus 1 year"
    ExpiresByType text/javascript                       "access plus 1 year"

  # Manifest files
    ExpiresByType application/manifest+json             "access plus 1 year"

    ExpiresByType application/x-web-app-manifest+json   "access plus 0 seconds"
    ExpiresByType text/cache-manifest                   "access plus 0 seconds"

  # Media files
    ExpiresByType audio/ogg                             "access plus 1 month"
    ExpiresByType image/bmp                             "access plus 1 month"
    ExpiresByType image/gif                             "access plus 1 month"
    ExpiresByType image/jpeg                            "access plus 1 month"
    ExpiresByType image/png                             "access plus 1 month"
    ExpiresByType image/svg+xml                         "access plus 1 month"
    ExpiresByType image/webp                            "access plus 1 month"
    ExpiresByType video/mp4                             "access plus 1 month"
    ExpiresByType video/ogg                             "access plus 1 month"
    ExpiresByType video/webm                            "access plus 1 month"

  # Web fonts

    # Embedded OpenType (EOT)
    ExpiresByType application/vnd.ms-fontobject         "access plus 1 month"
    ExpiresByType font/eot                              "access plus 1 month"

    # OpenType
    ExpiresByType font/opentype                         "access plus 1 month"

    # TrueType
    ExpiresByType application/x-font-ttf                "access plus 1 month"

    # Web Open Font Format (WOFF) 1.0
    ExpiresByType application/font-woff                 "access plus 1 month"
    ExpiresByType application/x-font-woff               "access plus 1 month"
    ExpiresByType font/woff                             "access plus 1 month"

    # Web Open Font Format (WOFF) 2.0
    ExpiresByType application/font-woff2                "access plus 1 month"

  # Other
    ExpiresByType text/x-cross-domain-policy            "access plus 1 week"

</IfModule>
## EXPIRES HEADER CACHING ##
```
* Promote elements that you plan to animate using below code. This gives the browser the forewarning that changes are incoming.
```
.moving-element {
  will-change: transform;
}
.moving-element {
  transform: translateZ(0);
}
```
* Use `critters-webpack-plugin` to make critical css inline and lazyload the rest of css.

* Use `defer` or `async` kaywords in `script` tags to make js files non-render blocking. The difference between the two is that `defer` cares about the scripts order whereas `async` doesn't. Also, note that `defer` finishes loading and executing script right before the `DOMContentLoaded` event is triggered. 
  
* Use `preload` to fetch styles and scripts sooner. The `at` attribute is also helpful for the browser to load files faster. Preload value tells the browser to download the files first and then browsers' main rendering machinery kicks in.
  
 ```
  <link rel="preload" href="style.css" as="style">
  <link rel="preload" href="main.js" as="script">
  ```
* If you want to preload a script, but then defer execution until exactly when you need it, use `preload` scripts this: [link to MDN preload](https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types/preload#scripting_and_preloads)

* How browsers work: 1. DNS (files referenced in html also go through DNS, DNS cache helps with the next requests) 2. TCP handshake 3. TLS (cipher) 4. Parse (creating cssom and dom) 5. render
  
* Waiting to obtain CSS doesn't block HTML parsing or downloading, but it does block JavaScript, because JavaScript is often used to query CSS properties’ impact on elements.
  
* The total time to create the CSSOM is generally less than the time it takes for one DNS lookup!
  
* Use `preload` with css files in this way: ` <link rel="preload" href="./temp/styles.css" as="style" onload="this.rel='stylesheet'">`
