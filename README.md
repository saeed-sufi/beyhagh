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
