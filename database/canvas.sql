SQLite format 3   @     L   5         '                                                 L .�   �    �����                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
   
       < ��n:��Q��e4 � � � <                  Q �%	2017_02_18_101232_update_canvas_posts_rename_is_draft_column_to_is_published6 q	2016_12_17_203122_update_canvas_setting_value_type- _	2016_11_14_070030_drop_canvas_roles_table< }	2016_11_08_080456_add_roles_column_to_canvas_users_table/ c	2016_11_08_072246_create_canvas_roles_tableE �	2016_11_07_144904_update_canvas_posts_table_to_include_author_id4 m	2016_09_22_165717_update_canvas_page_image_paths2
 i	2016_09_07_091203_create_canvas_settings_table9	 w	2016_09_02_231259_create_canvas_password_resets_table9 w	2016_08_29_082858_add_cv_column_to_canvas_users_table@ �	2016_08_28_195321_add_linkedin_column_to_canvas_users_table6 q	2016_08_08_234447_drop_canvas_post_tag_pivot_table2 i	2016_08_08_231059_create_canvas_post_tag_table2 i	2015_06_27_074433_create_canvas_post_tag_pivot. a	2015_06_27_074414_create_canvas_tags_table/ c	2015_06_21_174427_create_canvas_posts_table/ c	2014_10_12_000000_create_canvas_users_table   � ���                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 %	canvas_users#	canvas_tags!migrations                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 �f %             7��33  	DanielCostaDaniel Costadcresnitzky@gmail.com$2y$10$qcLoL1T7ass9UZA5NXil3O6ngqZQmR2AjgDbXZfGPel/T1xk0M6R6nlz2TafJg3op4ulxpgp7lVnwnMlDCygu8zGrvY4v5nmL2105ls90MjKeXkeY2018-04-29 21:46:192018-04-29 22:16:12
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  		    = Y =                                              �G%%�Qtablecanvas_userscanvas_usersCREATE TABLE "canvas_users" ("id" integer not null primary key autoincrement, "first_name" varchar null, "last_name" varchar null, "display_name" varchar not null, "url" varchar null, "twitter" varchar null, "facebook" varchar null, "github" varchar null, "address" varchar null, "city" varchar null, "country" varchar null, "bio" text null, "job" varchar null, "phone" varchar null, "gender" varchar null, "relationship" varchar null, "birthday" varchar null, "email" varchar not null, "password" varchar not null, "remember_token" varchar null, "created_at" datetime null, "updated_at" datetime null, "linkedin" varchar null, "resume_cv" varchar null, "role" integer null)P++Ytablesqlite_sequencesqlite_sequenceCREATE TABLE sqlite_sequence(name,seq)�$!!�tablemigrationsmigrationsCREATE TABLE "migrations" ("id" integer not null primary key autoincrement, "migration" varchar not null, "batch" integer not null)
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             7	dcresnitzky@gmail.com    ��                                                                                                                                                                                                                                                                       s
9#�indexcanvas_tags_tag_uniquecanvas_tagsCREATE UNIQUE INDEX "canvas_tags_tag_unique" on "canvas_tags" ("tag")�	##�Qtablecanvas_tagscanvas_tagsCREATE TABLE "canvas_tags" ("id" integer not null primary key autoincrement, "tag" varchar not null, "title" varchar not null, "subtitle" varchar not null, "meta_description" varchar not null, "layout" varchar not null default 'canvas::frontend.blog.index', "reverse_direction" tinyint(1) not null, "created_at" datetime null, "updated_at" datetime null)}?%�#indexcanvas_users_email_uniquecanvas_usersCREATE UNIQUE INDEX "canvas_users_email_unique" on "canvas_users" ("email")k7%�indexcanvas_users_id_indexcanvas_usersCREATE INDEX "canvas_users_id_index" on "canvas_users" ("id")   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           �| ##�s�O�IY_A333		h�f ##�s�O�IY_333		hello-worldHello WorldCanvas is a simple, powerful blog publishing platform that lets you to share your stories with the world. Its beautifully designed interface allows you to create and publish your own blog, giving you tools that make it easy and even fun to do.Wel   (�  �c � [                                                                                                                                                                                                                                                                          �++�[tablecanvas_post_tagcanvas_post_tagCREATE TABLE "canvas_post_tag" ("post_id" integer not null, "tag_id" integer not null, "created_at" datetime null, "updated_at" datetime null, foreign key("post_id") references "canvas_posts"("id") on delete cascade on update cascade, foreign key("tag_id") references "canvas_tags"("id") on delete cascade on update cascade, primary key ("post_id", "tag_id"))=Q+ indexsqlite_autoindex_canvas_post_tag_1canvas_post_tag   q                                                                                                             �++�ktablepassword_resetspassword_resetsCREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime null)
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  		   _ _                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     �
 ++CAC33Getting StartedGetting StartedGetting started with CanvasMeta content for this tag.canvas::frontend.blog.index2018-04-29 21:45:572018-04-29 21:45:57
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               3	2018-04-29 21:45:55
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   +	Getting Started                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         +		332018-04-29 21:45:592018-04-29 21:45:59
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 			)  � }�& � B B                                                                                                                                 �Q+�/indexcanvas_settings_setting_name_indexcanvas_settingsCREATE INDEX canvas_settings_setting_name_index ON canvas_settings (setting_name)   �                                                                                                                           �                                                                                                                             �Q++�Ytablecanvas_settingscanvas_settingsCREATE TABLE canvas_settings (id INTEGER NOT NULL, setting_name VARCHAR(255) NOT NULL COLLATE BINARY, setting_value CLOB DEFAULT NULL COLLATE BINARY, PRIMARY KEY(id))� C+�indexpassword_resets_token_indexpassword_resetsCREATE INDEX "password_resets_token_index" on "password_resets" ("token")� C+�indexpassword_resets_email_indexpassword_resetsCREATE INDEX "password_resets_email_index" on "password_resets" ("email")   ^ ���a+�����x^                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           )latest_releasev3.4.3  Csocial_header_icons_user_id1 !installed1525056444 )canvas_versionv3.4.2
 /twitter_card_typenone		  ga_id ' changyan_conf ) changyan_appid # disqus_name4 ]blog_seosimple,powerful,blog,publishing,platform, -=blog_descriptionNot just another blog...8 '[blog_subtitleInovação e Inteligência em Embalagem !!blog_titleMHS Global #%blog_authorDaniel Costa   D D � H                                                                                                                                                                                                                                                                                                                      �9%%�5tablecanvas_postscanvas_posts	CREATE TABLE canvas_posts (id INTEGER NOT NULL, slug VARCHAR(255) NOT NULL COLLATE BINARY, title VARCHAR(255) NOT NULL COLLATE BINARY, subtitle VARCHAR(255) NOT NULL COLLATE BINARY, content_raw CLOB NOT NULL COLLATE BINARY, content_html CLOB NOT NULL COLLATE BINARY, page_image VARCHAR(255) DEFAULT NULL COLLATE BINARY, meta_description VARCHAR(255) DEFAULT NULL COLLATE BINARY, layout VARCHAR(255) DEFAULT 'canvas::frontend.blog.post' NOT NULL COLLATE BINARY, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, published_at DATETIME DEFAULT NULL, user_id INTEGER DEFAULT 1 NOT NULL, is_published BOOLEAN DEFAULT '0' NOT NULL, PRIMARY KEY(id))
    �����F�y�o8Y                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 )latest_releaseCsocial_header_icons_user_idinstalled)canvas_version/twitter_card_type
	ga_id	'changyan_conf)changyan_appid#disqus_nameblog_seo-blog_description'blog_subtitle!blog_title#	blog_author
   � �                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       #	hello-world   � ��                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                t=%�indexcanvas_posts_slug_uniquecanvas_postsCREATE UNIQUE INDEX canvas_posts_slug_unique ON canvas_posts (slug)�K%�#indexcanvas_posts_published_at_indexcanvas_postsCREATE INDEX canvas_posts_published_at_index ON canvas_posts (published_at)tA%�indexcanvas_posts_user_id_indexcanvas_postsCREATE INDEX canvas_posts_user_id_index ON canvas_posts (user_id)                             !   "   #   $   %   &   'delete me, I'm very helpful! If you do delete me though, I can be recovered. Just grab me from:

```language-markup
resources/views/shared/helpers/welcome.blade.php
```

<div class="section-divider"></div>

## The Basics
---

Before I tell you about all the extra syntaxes and capabilities you have available to you, I'll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!

Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found [here](http://daringfireball.net/projects/markdown/syntax).

<div class="section-divider"></div>

## Typography
---

# Heading 1
## Heading 2
### Heading 3
#### Heading 4
##### Heading 5
###### Heading 6

Just put angle brackets around an email and it becomes    clickable: <user@example.com> `<user@example.com>`

Same thing with urls: <http://example.com> `<http://example.com>`

Perhaps you want to some link text like this: [Example Website](http://example.com "Title")
`[Example Website](http://example.com "Title")` (The title is optional)

Make [a link][arbitrary_id] `[a link][arbitrary_id]` then on it's own line anywhere else in the file:
`[arbitrary_id]: http://example.com "Title"`

If the link text itself would make a good id, you can link [like this][] `[like this][]`, then on it's own line anywhere else in the file:
`[like this]: http://example.com`

[arbitrary_id]: http://example.com "Title"
[like this]: http://example.com

Option name         | Markup           | Result
--------------------|------------------|-------------------------
Intra-word emphasis | `Intra-word em\*pha\*sis`   | Intra-word em<em>pha</em>sis
Strikethrough       | `\~~Strikethrough\~~`   | <del>Strikethrough</del>
Underline  | `\_Underline\_`      | <u>Underline</u>
Quote      | `\"   Quote\"`  | <q>Quote</q>
Highlight           | `\==Highlight\==`    | <mark>Highlight</mark>
Superscript         | `Some\^(superscript)`     | Some<sup>superscript</sup>
Italics            | `**Italics**`      | <em>Italics</em>
Bold | `*Bold text*`   | <strong>Bold text</strong>
HTML Entities | ``&copy;`` ``&#402;`` ``&#8482;`` ``&reg;`` | © ƒ ™ ®

<div class="section-divider"></div>

## Tables
---

##### **Markup**:
```language-markup
Key | Value
--- | ---
SSH Host | `example.com`
SSH User | `username`
SSH Password | `secret`
Database Host | `127.0.0.1`
Database User | `username`
Database Password | `secret`
```

<div class="section-divider"></div>

##### **Result**:
Key                 | Value
------------------- | ---
SSH Host            | `example.com`
SSH User            | `username`
SSH Password        | `secret`
Database Host       | `127.0.0.1`
Database User       | `username`
Database Password   | `secret`

<div class="section-divider"></div>

## Code Blocks
---

`Inline code` is indicated    by surrounding it with backticks:
`` `Inline code` ``

If your ``code has `backticks` `` that need to be displayed, you can use double backticks:
```` ``Code with `backticks` `` ````  (mind the spaces preceding the final set of backticks)

GitHub's fenced code blocks are supported in canvas::

```php
namespace App;

class Canvas extends Blog
{

    /**
    * Dreaming of a world without WordPress?
    *
    * @with  Canvas
    */
    public function create()
    {
        // Make something awesome...
    }
}
```

You can also use waves (`~`) instead of back ticks (`` ` ``):

~~~php
print('Hello world!')
~~~

<div class="section-divider"></div>

## Lists
---

##### **Markup**:
```language-markup
* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1.`
42. It doesn't matter what number you use, it will render sequentially
```   

<div class="section-divider"></div>

##### **Result**:
* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1`
3. It doesn't matter what number you use, it will render sequentially

<div class="section-divider"></div>

## Block Quotes
---

##### **Markup**:
```language-markup
> Angle brackets `>` are used for block quotes.
Technically not every line needs to start with a `>` as long as
there are no empty lines between paragraphs.
> Looks kinda ugly though.
> > Block quotes can be nested.
> > > Multiple Levels
>
> Most markdown syntaxes work inside block quotes.
```

<div class="section-divider"></div>

##### **Result**:
> Angle brackets `>` are used for block quotes.
Technically not every line needs to start with a `>` as long as
there are no empty lines between paragraphs.
> Looks kinda ugly though.
> > Block quotes can     be nested.
> > > Multiple Levels
>
> Most markdown syntaxes work inside block quotes.

<div class="section-divider"></div>

## Horizontal Rules
---

If you type three asterisks `***`, you will get a horizontal rule. Three dashes `---` will make the same rule.

<div class="section-divider"></div>

## Task List Syntax
---

1. [x] Support for rendering checkbox list syntax
    * [x] Support for nesting
    * [x] Support for ordered *and* unordered lists
2. [ ] No support for clicking checkboxes directly in the HTML window

<div class="section-divider"></div>

## Markdown Extra
---

Canvas supports **Markdown Extra**, which extends traditional **Markdown** syntax with some nice features. If you need some help or just want a refresher, read more about [Markdown syntax](https://daringfireball.net/projects/markdown/syntax) and [Markdown Extra](https://michelf.ca/projects/php-markdown/extra/).

<div class="section-divider"></div>

## Hack On
---

That’s about it. The best way to be proficient in anything is to   ! know what tools you have available to you. You're one step ahead of the game now. Happy coding!<p>Welcome to Canvas! I'm your first post demonstrating Markdown integration. Don't delete me, I'm very helpful! If you do delete me though, I can be recovered. Just grab me from:</p>
<pre><code class="language-language-markup">resources/views/shared/helpers/welcome.blade.php</code></pre>
<div class="section-divider"></div>
<h2>The Basics</h2>
<hr />
<p>Before I tell you about all the extra syntaxes and capabilities you have available to you, I'll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!</p>
<p>Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found <a href="http://daringfireball.net/projects/markdown/syntax">here</a>.</p>
<div cla   "ss="section-divider"></div>
<h2>Typography</h2>
<hr />
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<p>Just put angle brackets around an email and it becomes clickable: <a href="mailto:user@example.com">user@example.com</a> <code>&lt;user@example.com&gt;</code></p>
<p>Same thing with urls: <a href="http://example.com">http://example.com</a> <code>&lt;http://example.com&gt;</code></p>
<p>Perhaps you want to some link text like this: <a href="http://example.com" title="Title">Example Website</a>
<code>[Example Website](http://example.com "Title")</code> (The title is optional)</p>
<p>Make <a href="http://example.com" title="Title">a link</a> <code>[a link][arbitrary_id]</code> then on it's own line anywhere else in the file:
<code>[arbitrary_id]: http://example.com "Title"</code></p>
<p>If the link text itself would make a good id, you can link <a href="http://example.com">like this</a> <code>[like this][]</code>, then on it's own line any   #where else in the file:
<code>[like this]: http://example.com</code></p>
<table>
<thead>
<tr>
<th>Option name</th>
<th>Markup</th>
<th>Result</th>
</tr>
</thead>
<tbody>
<tr>
<td>Intra-word emphasis</td>
<td><code>Intra-word em\*pha\*sis</code></td>
<td>Intra-word em<em>pha</em>sis</td>
</tr>
<tr>
<td>Strikethrough</td>
<td><code>\~~Strikethrough\~~</code></td>
<td><del>Strikethrough</del></td>
</tr>
<tr>
<td>Underline</td>
<td><code>\_Underline\_</code></td>
<td><u>Underline</u></td>
</tr>
<tr>
<td>Quote</td>
<td><code>\"Quote\"</code></td>
<td><q>Quote</q></td>
</tr>
<tr>
<td>Highlight</td>
<td><code>\==Highlight\==</code></td>
<td><mark>Highlight</mark></td>
</tr>
<tr>
<td>Superscript</td>
<td><code>Some\^(superscript)</code></td>
<td>Some<sup>superscript</sup></td>
</tr>
<tr>
<td>Italics</td>
<td><code>**Italics**</code></td>
<td><em>Italics</em></td>
</tr>
<tr>
<td>Bold</td>
<td><code>*Bold text*</code></td>
<td><strong>Bold text</strong></td>
</tr>
<tr>
<td>HTML Entities</td>
<td><code>&amp;copy;</c   $ode> <code>&amp;#402;</code> <code>&amp;#8482;</code> <code>&amp;reg;</code></td>
<td>© ƒ ™ ®</td>
</tr>
</tbody>
</table>
<div class="section-divider"></div>
<h2>Tables</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">Key | Value
--- | ---
SSH Host | `example.com`
SSH User | `username`
SSH Password | `secret`
Database Host | `127.0.0.1`
Database User | `username`
Database Password | `secret`</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<table>
<thead>
<tr>
<th>Key</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>SSH Host</td>
<td><code>example.com</code></td>
</tr>
<tr>
<td>SSH User</td>
<td><code>username</code></td>
</tr>
<tr>
<td>SSH Password</td>
<td><code>secret</code></td>
</tr>
<tr>
<td>Database Host</td>
<td><code>127.0.0.1</code></td>
</tr>
<tr>
<td>Database User</td>
<td><code>username</code></td>
</tr>
<tr>
<td>Database Password</td>
<td><code>secret</code></td>
</tr>
</tbody>
</table>
<div class="section-di   %vider"></div>
<h2>Code Blocks</h2>
<hr />
<p><code>Inline code</code> is indicated by surrounding it with backticks:
<code>`Inline code`</code></p>
<p>If your <code>code has `backticks`</code> that need to be displayed, you can use double backticks:
<code>``Code with `backticks` ``</code>  (mind the spaces preceding the final set of backticks)</p>
<p>GitHub's fenced code blocks are supported in canvas::</p>
<pre><code class="language-php">namespace App;

class Canvas extends Blog
{

    /**
    * Dreaming of a world without WordPress?
    *
    * @with  Canvas
    */
    public function create()
    {
        // Make something awesome...
    }
}</code></pre>
<p>You can also use waves (<code>~</code>) instead of back ticks (<code>`</code>):</p>
<pre><code class="language-php">print('Hello world!')</code></pre>
<div class="section-divider"></div>
<h2>Lists</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">* Lists must be preceded by a blank line (or block element)
* U   &nordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1.`
42. It doesn't matter what number you use, it will render sequentially</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<ul>
<li>Lists must be preceded by a blank line (or block element)</li>
<li>Unordered lists start each item with a <code>*</code></li>
<li><code>-</code> Works too</li>
<li>Indent a level to make a nested list
<ol>
<li>Ordered lists are supported.</li>
<li>Start each item (number-period-space) like <code>1</code></li>
<li>It doesn't matter what number you use, it will render sequentially</li>
</ol></li>
</ul>
<div class="section-divider"></div>
<h2>Block Quotes</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">&gt; Angle brackets `&gt;` are used for block quotes.
Technically not every line needs to start with a `&gt;` as long as
there are   ' no empty lines between paragraphs.
&gt; Looks kinda ugly though.
&gt; &gt; Block quotes can be nested.
&gt; &gt; &gt; Multiple Levels
&gt;
&gt; Most markdown syntaxes work inside block quotes.</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<blockquote>
<p>Angle brackets <code>&gt;</code> are used for block quotes.
Technically not every line needs to start with a <code>&gt;</code> as long as
there are no empty lines between paragraphs.
Looks kinda ugly though.</p>
<blockquote>
<p>Block quotes can be nested.</p>
<blockquote>
<p>Multiple Levels</p>
</blockquote>
</blockquote>
<p>Most markdown syntaxes work inside block quotes.</p>
</blockquote>
<div class="section-divider"></div>
<h2>Horizontal Rules</h2>
<hr />
<p>If you type three asterisks <code>***</code>, you will get a horizontal rule. Three dashes <code>---</code> will make the same rule.</p>
<div class="section-divider"></div>
<h2>Task List Syntax</h2>
<hr />
<ol>
<li>[x] Support for rendering checkbox list syntax    
<ul>
<li>[x] Support for nesting</li>
<li>[x] Support for ordered <em>and</em> unordered lists</li>
</ul></li>
<li>[ ] No support for clicking checkboxes directly in the HTML window</li>
</ol>
<div class="section-divider"></div>
<h2>Markdown Extra</h2>
<hr />
<p>Canvas supports <strong>Markdown Extra</strong>, which extends traditional <strong>Markdown</strong> syntax with some nice features. If you need some help or just want a refresher, read more about <a href="https://daringfireball.net/projects/markdown/syntax">Markdown syntax</a> and <a href="https://michelf.ca/projects/php-markdown/extra/">Markdown Extra</a>.</p>
<div class="section-divider"></div>
<h2>Hack On</h2>
<hr />
<p>That’s about it. The best way to be proficient in anything is to know what tools you have available to you. You're one step ahead of the game now. Happy coding!</p>/vendor/canvas/assets/images/mocha.jpgLet's get you up and running with Canvas!canvas::frontend.blog.post2018-04-29 21:45:552018-04-29 21:45:552018-04-29 21:45:55   )come to Canvas! I'm your first post demonstrating Markdown integration. Don't delete me, I'm very helpful! If you do delete me though, I can be recovered. Just grab me from:

```language-markup
resources/views/shared/helpers/welcome.blade.php
```

<div class="section-divider"></div>

## The Basics
---

Before I tell you about all the extra syntaxes and capabilities you have available to you, I'll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!

Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found [here](http://daringfireball.net/projects/markdown/syntax).

<div class="section-divider"></div>

## Typography
---

# Heading 1
## Heading 2
### Heading 3
#### Heading 4
##### Heading 5
###### Heading 6

Just put angle brackets around a   *n email and it becomes clickable: <user@example.com> `<user@example.com>`

Same thing with urls: <http://example.com> `<http://example.com>`

Perhaps you want to some link text like this: [Example Website](http://example.com "Title")
`[Example Website](http://example.com "Title")` (The title is optional)

Make [a link][arbitrary_id] `[a link][arbitrary_id]` then on it's own line anywhere else in the file:
`[arbitrary_id]: http://example.com "Title"`

If the link text itself would make a good id, you can link [like this][] `[like this][]`, then on it's own line anywhere else in the file:
`[like this]: http://example.com`

[arbitrary_id]: http://example.com "Title"
[like this]: http://example.com

Option name         | Markup           | Result
--------------------|------------------|-------------------------
Intra-word emphasis | `Intra-word em\*pha\*sis`   | Intra-word em<em>pha</em>sis
Strikethrough       | `\~~Strikethrough\~~`   | <del>Strikethrough</del>
Underline  | `\_Underline\_`      | <u>Underlin   +e</u>
Quote      | `\"Quote\"`  | <q>Quote</q>
Highlight           | `\==Highlight\==`    | <mark>Highlight</mark>
Superscript         | `Some\^(superscript)`     | Some<sup>superscript</sup>
Italics            | `**Italics**`      | <em>Italics</em>
Bold | `*Bold text*`   | <strong>Bold text</strong>
HTML Entities | ``&copy;`` ``&#402;`` ``&#8482;`` ``&reg;`` | © ƒ ™ ®

<div class="section-divider"></div>

## Tables
---

##### **Markup**:
```language-markup
Key | Value
--- | ---
SSH Host | `example.com`
SSH User | `username`
SSH Password | `secret`
Database Host | `127.0.0.1`
Database User | `username`
Database Password | `secret`
```

<div class="section-divider"></div>

##### **Result**:
Key                 | Value
------------------- | ---
SSH Host            | `example.com`
SSH User            | `username`
SSH Password        | `secret`
Database Host       | `127.0.0.1`
Database User       | `username`
Database Password   | `secret`

<div class="section-divider"></div>

## Code Blocks
---

`Inli   ,ne code` is indicated by surrounding it with backticks:
`` `Inline code` ``

If your ``code has `backticks` `` that need to be displayed, you can use double backticks:
```` ``Code with `backticks` `` ````  (mind the spaces preceding the final set of backticks)

GitHub's fenced code blocks are supported in canvas::

```php
namespace App;

class Canvas extends Blog
{

    /**
    * Dreaming of a world without WordPress?
    *
    * @with  Canvas
    */
    public function create()
    {
        // Make something awesome...
    }
}
```

You can also use waves (`~`) instead of back ticks (`` ` ``):

~~~php
print('Hello world!')
~~~

<div class="section-divider"></div>

## Lists
---

##### **Markup**:
```language-markup
* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1.`
42. It doesn't matter what number you use, it will r   -ender sequentially
```

<div class="section-divider"></div>

##### **Result**:
* Lists must be preceded by a blank line (or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1`
3. It doesn't matter what number you use, it will render sequentially

<div class="section-divider"></div>

## Block Quotes
---

##### **Markup**:
```language-markup
> Angle brackets `>` are used for block quotes.
Technically not every line needs to start with a `>` as long as
there are no empty lines between paragraphs.
> Looks kinda ugly though.
> > Block quotes can be nested.
> > > Multiple Levels
>
> Most markdown syntaxes work inside block quotes.
```

<div class="section-divider"></div>

##### **Result**:
> Angle brackets `>` are used for block quotes.
Technically not every line needs to start with a `>` as long as
there are no empty lines between paragraphs.
> Looks kinda ugly though   ..
> > Block quotes can be nested.
> > > Multiple Levels
>
> Most markdown syntaxes work inside block quotes.

<div class="section-divider"></div>

## Horizontal Rules
---

If you type three asterisks `***`, you will get a horizontal rule. Three dashes `---` will make the same rule.

<div class="section-divider"></div>

## Task List Syntax
---

1. [x] Support for rendering checkbox list syntax
    * [x] Support for nesting
    * [x] Support for ordered *and* unordered lists
2. [ ] No support for clicking checkboxes directly in the HTML window

<div class="section-divider"></div>

## Markdown Extra
---

Canvas supports **Markdown Extra**, which extends traditional **Markdown** syntax with some nice features. If you need some help or just want a refresher, read more about [Markdown syntax](https://daringfireball.net/projects/markdown/syntax) and [Markdown Extra](https://michelf.ca/projects/php-markdown/extra/).

<div class="section-divider"></div>

## Hack On
---

That’s about it. The best way to be profic   /ient in anything is to know what tools you have available to you. You're one step ahead of the game now. Happy coding!<p>Welcome to Canvas! I'm your first post demonstrating Markdown integration. Don't delete me, I'm very helpful! If you do delete me though, I can be recovered. Just grab me from:</p>
<pre><code class="language-language-markup">resources/views/shared/helpers/welcome.blade.php</code></pre>
<div class="section-divider"></div>
<h2>The Basics</h2>
<hr />
<p>Before I tell you about all the extra syntaxes and capabilities you have available to you, I'll introduce you to the basics of standard markdown. If you already know markdown, and want to jump straight to learning about the fancier things I can do, feel free to skip this section. Lets jump right in!</p>
<p>Markdown is a plain text formatting syntax created by John Gruber, aiming to provide a easy-to-read and feasible markup. The original Markdown syntax specification can be found <a href="http://daringfireball.net/projects/markdown/syntax">   0here</a>.</p>
<div class="section-divider"></div>
<h2>Typography</h2>
<hr />
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<p>Just put angle brackets around an email and it becomes clickable: <a href="mailto:user@example.com">user@example.com</a> <code>&lt;user@example.com&gt;</code></p>
<p>Same thing with urls: <a href="http://example.com">http://example.com</a> <code>&lt;http://example.com&gt;</code></p>
<p>Perhaps you want to some link text like this: <a href="http://example.com" title="Title">Example Website</a>
<code>[Example Website](http://example.com "Title")</code> (The title is optional)</p>
<p>Make <a href="http://example.com" title="Title">a link</a> <code>[a link][arbitrary_id]</code> then on it's own line anywhere else in the file:
<code>[arbitrary_id]: http://example.com "Title"</code></p>
<p>If the link text itself would make a good id, you can link <a href="http://example.com">like this</a> <code>[like this][]</code>, the   1n on it's own line anywhere else in the file:
<code>[like this]: http://example.com</code></p>
<table>
<thead>
<tr>
<th>Option name</th>
<th>Markup</th>
<th>Result</th>
</tr>
</thead>
<tbody>
<tr>
<td>Intra-word emphasis</td>
<td><code>Intra-word em\*pha\*sis</code></td>
<td>Intra-word em<em>pha</em>sis</td>
</tr>
<tr>
<td>Strikethrough</td>
<td><code>\~~Strikethrough\~~</code></td>
<td><del>Strikethrough</del></td>
</tr>
<tr>
<td>Underline</td>
<td><code>\_Underline\_</code></td>
<td><u>Underline</u></td>
</tr>
<tr>
<td>Quote</td>
<td><code>\"Quote\"</code></td>
<td><q>Quote</q></td>
</tr>
<tr>
<td>Highlight</td>
<td><code>\==Highlight\==</code></td>
<td><mark>Highlight</mark></td>
</tr>
<tr>
<td>Superscript</td>
<td><code>Some\^(superscript)</code></td>
<td>Some<sup>superscript</sup></td>
</tr>
<tr>
<td>Italics</td>
<td><code>**Italics**</code></td>
<td><em>Italics</em></td>
</tr>
<tr>
<td>Bold</td>
<td><code>*Bold text*</code></td>
<td><strong>Bold text</strong></td>
</tr>
<tr>
<td>HTML Entities</td>
<   2td><code>&amp;copy;</code> <code>&amp;#402;</code> <code>&amp;#8482;</code> <code>&amp;reg;</code></td>
<td>© ƒ ™ ®</td>
</tr>
</tbody>
</table>
<div class="section-divider"></div>
<h2>Tables</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">Key | Value
--- | ---
SSH Host | `example.com`
SSH User | `username`
SSH Password | `secret`
Database Host | `127.0.0.1`
Database User | `username`
Database Password | `secret`</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<table>
<thead>
<tr>
<th>Key</th>
<th>Value</th>
</tr>
</thead>
<tbody>
<tr>
<td>SSH Host</td>
<td><code>example.com</code></td>
</tr>
<tr>
<td>SSH User</td>
<td><code>username</code></td>
</tr>
<tr>
<td>SSH Password</td>
<td><code>secret</code></td>
</tr>
<tr>
<td>Database Host</td>
<td><code>127.0.0.1</code></td>
</tr>
<tr>
<td>Database User</td>
<td><code>username</code></td>
</tr>
<tr>
<td>Database Password</td>
<td><code>secret</code></td>
</tr>
</tbody>
</table>
   3<div class="section-divider"></div>
<h2>Code Blocks</h2>
<hr />
<p><code>Inline code</code> is indicated by surrounding it with backticks:
<code>`Inline code`</code></p>
<p>If your <code>code has `backticks`</code> that need to be displayed, you can use double backticks:
<code>``Code with `backticks` ``</code>  (mind the spaces preceding the final set of backticks)</p>
<p>GitHub's fenced code blocks are supported in canvas::</p>
<pre><code class="language-php">namespace App;

class Canvas extends Blog
{

    /**
    * Dreaming of a world without WordPress?
    *
    * @with  Canvas
    */
    public function create()
    {
        // Make something awesome...
    }
}</code></pre>
<p>You can also use waves (<code>~</code>) instead of back ticks (<code>`</code>):</p>
<pre><code class="language-php">print('Hello world!')</code></pre>
<div class="section-divider"></div>
<h2>Lists</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">* Lists must be preceded by a blank line    4(or block element)
* Unordered lists start each item with a `*`
- `-` Works too
* Indent a level to make a nested list
1. Ordered lists are supported.
2. Start each item (number-period-space) like `1.`
42. It doesn't matter what number you use, it will render sequentially</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<ul>
<li>Lists must be preceded by a blank line (or block element)</li>
<li>Unordered lists start each item with a <code>*</code></li>
<li><code>-</code> Works too</li>
<li>Indent a level to make a nested list
<ol>
<li>Ordered lists are supported.</li>
<li>Start each item (number-period-space) like <code>1</code></li>
<li>It doesn't matter what number you use, it will render sequentially</li>
</ol></li>
</ul>
<div class="section-divider"></div>
<h2>Block Quotes</h2>
<hr />
<h5><strong>Markup</strong>:</h5>
<pre><code class="language-language-markup">&gt; Angle brackets `&gt;` are used for block quotes.
Technically not every line needs to start with a `&gt;   5` as long as
there are no empty lines between paragraphs.
&gt; Looks kinda ugly though.
&gt; &gt; Block quotes can be nested.
&gt; &gt; &gt; Multiple Levels
&gt;
&gt; Most markdown syntaxes work inside block quotes.</code></pre>
<div class="section-divider"></div>
<h5><strong>Result</strong>:</h5>
<blockquote>
<p>Angle brackets <code>&gt;</code> are used for block quotes.
Technically not every line needs to start with a <code>&gt;</code> as long as
there are no empty lines between paragraphs.
Looks kinda ugly though.</p>
<blockquote>
<p>Block quotes can be nested.</p>
<blockquote>
<p>Multiple Levels</p>
</blockquote>
</blockquote>
<p>Most markdown syntaxes work inside block quotes.</p>
</blockquote>
<div class="section-divider"></div>
<h2>Horizontal Rules</h2>
<hr />
<p>If you type three asterisks <code>***</code>, you will get a horizontal rule. Three dashes <code>---</code> will make the same rule.</p>
<div class="section-divider"></div>
<h2>Task List Syntax</h2>
<hr />
<ol>
<li>[x] Support for renderin    g checkbox list syntax
<ul>
<li>[x] Support for nesting</li>
<li>[x] Support for ordered <em>and</em> unordered lists</li>
</ul></li>
<li>[ ] No support for clicking checkboxes directly in the HTML window</li>
</ol>
<div class="section-divider"></div>
<h2>Markdown Extra</h2>
<hr />
<p>Canvas supports <strong>Markdown Extra</strong>, which extends traditional <strong>Markdown</strong> syntax with some nice features. If you need some help or just want a refresher, read more about <a href="https://daringfireball.net/projects/markdown/syntax">Markdown syntax</a> and <a href="https://michelf.ca/projects/php-markdown/extra/">Markdown Extra</a>.</p>
<div class="section-divider"></div>
<h2>Hack On</h2>
<hr />
<p>That’s about it. The best way to be proficient in anything is to know what tools you have available to you. You're one step ahead of the game now. Happy coding!</p>/vendor/canvas/assets/images/mocha.jpgLet's get you up and running with Canvas!post2018-04-29 21:45:552018-04-29 21:45:552018-04-29 21:45:55