My Diggs...
===========

...are Jekyllicious
-------------------

##Basic Stuff
1. [Learn](https://github.com/mojombo/jekyll/)
2. [Install](https://github.com/mojombo/jekyll/wiki/install)
3. [Clone](https://github.com/nickcottrell/Simple-Jekyll)
4. [Run](https://github.com/mojombo/jekyll/wiki/usage)
5. [Navigate](http://localhost:3000/) to http://localhost:3000/
6. [Enjoy](http://pages.github.com/)(especially with github pages)


##Non-Basic Stuff

###Not the same ol' loop

Since everyone has a different Jekyll implementation, I thought I could just focus on what makes this implementation special. This one takes special advantage of the "permalink" feature so there is no need to have the "static" non-post pages in the root directory... which can get kind of messy when you have a lot of pages.  

Jekyll allows you to loop through posts, because a) it's awesome to be able to loop through things, and b) because that's how you set up a home page to a blog--you loop through each entry with some kind of number limit so the most recent posts are always on your home page. OK cool. So in many of the standard tutorials, they just teach you the regular generic loop through all posts.

	{% for post in site.posts %}
   		<article>...</article>
	{% endfor %}

Instead, I use two loops. First, I loop through the categories, then for each category I loop through the post in a particular defined category. Voila! This way, looping through categories means that I'm now able to create other "posts" that are not articles that I want to display as a blog entry.

	{% for category in site.categories %} 
		{% for post in site.categories['articles'] %}
   		<article>...</article>
		{% endfor %}
	{% endfor %}


###No pages, only posts
Now that we can loop through whichever category we want, we can put all pages in the `_posts` directory...and even put them in subdirectories so they can be neat and tidy. I have it set up like so:

	_includes
	_layouts
	_posts	
  		articles
    		2013-01-07-article-name.html
  		pages
    		3000-01-01-redirect-sample.html
  		redirects
			3000-01-01-redirect-sample.html
	_site
	css
	js
	img


This way, every item is set up as a post, the directory structure is cleaner and nicer to deal with. There is no particular reason that I named the pages and redirects `3000-01-01-redirect-sample.html` other than to give the non-blog posts a date that falls well outside of the range. For each non-blog page, I configure the permalink so it will map to whatever I tell it when jekyll builds the static site. For "code samples", it looks like below and will take the user to `/code-samples/`.

	---
  	layout: default
  	title: Code Samples
  	permalink: code-samples/	
	---

So that's the gist of my Jekyll implementation. Basically, I've done a couple of things differently in order to end up with a much cleaner site organization.
   


