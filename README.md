Travel Click Style-Guide v1.0
==============================


### Review your live site CSS
You should be able to go to `yoursite.com/style-guide/` and see how your live site's CSS affects base elements.
The last step is creating your sites custom patterns/modules.

### Create custom patterns
To create custom patterns like buttons, breadcrumbs, alert messages, etc., create a new .html file and add your HTML markup into the file.

Save the file as `pattern-name.html` into the `markup/patterns` directory inside of your `style-guide` directory.

You should now be able to see the new patterns at `yoursite.com/style-guide/`

### Create personalized documentation
You can use markdown or html to create personalized documentation for your examples. Create a new .md or .html file and name it whatever your markup snippet file is named.

Save the file as `markup-name.md` or `markup-name.html` into the `doc/base` or `doc/patterns` directory inside of your `style-guide` directory.

For example, if you want to create doc for `markup/patterns/breadcrumbs.html`, create a file called `breadcrumbs.md` or `breadcrumbs.html` and save it into `doc/patterns`.

You should now be able to see the new doc at `yoursite.com/style-guide/`

## Running the app
You can run the application with PHP's built in web server. Simply run the following command:

`php -S localhost:8000`

Now, browse to [http://localhost:8000](http://localhost:8000) to see the website.

## Generating static HTML style guide
You can generate a static index.html version of style guide boilerplate by running the following command:

`php index.php > index.html`


## Additional Resources
[Styleguides.io](http://styleguides.io)

[Front-end Style Guides](http://24ways.org/2011/front-end-style-guides/)

[Front-end Style Guide Roundup](https://gimmebar.com/collection/4ecd439c2f0aaad734000022/front-end-styleguides)

[Future-Friendly Style Guides](https://speakerdeck.com/lukebrooker/future-friendly-style-guides)

[HTML KickStart](http://www.99lime.com/elements/)

[Oli.jp Style Guide](http://oli.jp/2011/style-guide/)

[Jeremy Keith's Pattern Primer](http://adactio.com/journal/5028/)

[Paul Robert Llyod's Style Guide](http://www.paulrobertlloyd.com/about/styleguide/)

[Pears](http://pea.rs/)

[Starbucks Style Guide](http://www.starbucks.com/static/reference/styleguide/)


## Licensing
**Style Guide Boilerplate** is licensed under the [MIT License](http://en.wikipedia.org/wiki/MIT_License)

Use it, build upon it, make awesome shit with it.