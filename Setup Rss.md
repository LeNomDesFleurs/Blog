# RSS

Essentialy a XML file.

Some tags are necessary in this XML file :

```xml
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0">
<channel>
<title>Le Nom Des Fleurs</title>
<link>https://lndf.fr/</link>
<description>Personal Blog of Thomas Guillory</description>
<lastBuildDate>Wed, July 4 2018</lastBuildDate> <!-- optional -->
```

then, for each item

```xml
<item>
<title>Entry Title</title>
<link>URL Link to the entry</link>
<guid>https://www.mysite.com/?p=584674</guid>
<description>This is the description of the content...</description>
<pubDate>Wed, July 4 2018</pubDate>
</item>
```

close at the end with

```xml
</channel>
</rss>
```

## reference

[SITE - Tester for RSS](https://www.rsslookup.com)
[SITE - make use of](https://www.makeuseof.com/tag/how-to-create-an-rss-feed-for-your-site-from-scratch/)
