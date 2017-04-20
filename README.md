# View-My-Posts-Alone
=== View My Posts Alone ===<br>
Contributors: Naresh Kumar .P<br>
Plugin Name: View My Posts Alone<br>       
Tags: WP,contributor, guest writers, multiple authors, custom role users<br>
Author URI: http://coolguynaresh.blogspot.in/<br>
Author: Naresh Kumar .P        <br>
Donate link: <br>
Requires at least: 3.0.1 <br>
Tested up to: 4.7.3 <br>
Stable tag: 1.0 <br>
Version: 1.0 <br>
License: GPLv2 or later <br>
License URI: http://www.gnu.org/licenses/gpl-2.0.html <br>
<br>
This Allows contributors,students,writers of a blog,article to only view and manage their own posts which they have contributed and they might not be able to view what others have contributed.

== Description ==

This is a very simple and easiest of all the plugins. The View My Posts Alone plugin is specially designed for those who have many authors(contributors) or allow guest posts, custom user roles to acces their blogs/articles. In Wordpress, a contributor can write as much blogs and articles as they can and submit it and wait for review (i.e) to be published from the administrator or the Person who is incharge of doing these things.  But at the time when the contributor or the custom user role member visits the posts section or the custom post type he/she can see all the posts that has been presented in that site. If that happens there is no privacy for the contributors to write up their article and put up in the blog.

Inorder to overcome this type of problems alone this plugin has been written and it is very successfull even for lots of users in that blog. It will restrict the posts or the CPT to view only the posts that has been published or which has been saved as draft by that user alone. It will never display other persons writeups onto the Dashboard of the Others.

The Administrator and the Blog Author can view all the posts that are being contributed to their site and confirm what are all the posts that can be published  and what not to be published.

On the whole this will be fantastic for the Users who are onto the Blogging and make things secret from the other writers.

I wrote this plugin since I am in search of this plugin desperately but very unfortunate am unable to find the plugin which satisfy my needs and requirements and that has ended up me in creating this plugin.

<strong>Plugin Features</strong><br />

* Easy to Install.
* No Settings Required.
* It can be used for both the Normal Post type as well as the Custom Post Type too.
* For Custom post type you have to add the CPT to the Plugin file.
* Ease of Use in Multi Blogging Sites.
* Very Effective.

== Upgrade Notice ==

= 1.0 =
This is the First Version of the Plugin

== Screenshots ==

1. screenshot.png


== Changelog ==

= 1.0 =

== Frequently Asked Questions ==

= Will the Author and Administrator be able to view all the Contributor’s / Custom Role Users posts?=

As in Wordpress the Administrator and the Authors have access to all the posts that are being written or published in the site, the only reason is that the contributor's or the other custom role users will never have access to the others posts/write ups.

= How to add this plugin for the Custom Post Type including Normal Post types?=

We have to make up the seperate condition in the plugin's core file. In the (view_my_posts_alone.php) . There will be a IF condition with this line if (strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false). You have to add the OR Condition and add as much as CPT that you need. 
(E.g) if (strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php' ) !== false || strpos( $_SERVER[ 'REQUEST_URI' ], '/wp-admin/edit.php?post_type=[YOUR-POST-TYPE-SLUG-GOES-HERE]' ) !== false). 

= Does this plugin conflict with any other plugins that we have installed in our blog? =

Not at all, it’s a very simple and effective plugin and there are no issues with other plugins so far as we have tested it.




