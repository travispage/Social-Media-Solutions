B��Y<?php exit; ?>a:1:{s:7:"content";O:8:"WP_Query":49:{s:5:"query";a:8:{s:5:"order";s:3:"ASC";s:14:"posts_per_page";i:10;s:9:"showposts";i:10;s:11:"post_status";s:7:"publish";s:9:"post_type";s:9:"portfolio";s:7:"orderby";s:8:"post__in";s:9:"tax_query";a:2:{i:0;a:3:{s:8:"taxonomy";s:18:"portfolio_category";s:5:"field";s:2:"id";s:5:"terms";a:8:{i:0;s:2:"84";i:1;s:2:"82";i:2;s:2:"77";i:3;s:2:"83";i:4;s:2:"76";i:5;s:2:"78";i:6;s:2:"80";i:7;s:2:"74";}}s:8:"relation";s:2:"OR";}s:16:"suppress_filters";b:0;}s:10:"query_vars";a:70:{s:5:"order";s:3:"ASC";s:14:"posts_per_page";i:10;s:9:"showposts";i:10;s:11:"post_status";s:7:"publish";s:9:"post_type";s:9:"portfolio";s:7:"orderby";s:8:"post__in";s:9:"tax_query";a:2:{i:0;a:3:{s:8:"taxonomy";s:18:"portfolio_category";s:5:"field";s:2:"id";s:5:"terms";a:8:{i:0;s:2:"84";i:1;s:2:"82";i:2;s:2:"77";i:3;s:2:"83";i:4;s:2:"76";i:5;s:2:"78";i:6;s:2:"80";i:7;s:2:"74";}}s:8:"relation";s:2:"OR";}s:16:"suppress_filters";b:0;s:5:"error";s:0:"";s:1:"m";s:0:"";s:1:"p";i:0;s:11:"post_parent";s:0:"";s:7:"subpost";s:0:"";s:10:"subpost_id";s:0:"";s:10:"attachment";s:0:"";s:13:"attachment_id";i:0;s:4:"name";s:0:"";s:6:"static";s:0:"";s:8:"pagename";s:0:"";s:7:"page_id";i:0;s:6:"second";s:0:"";s:6:"minute";s:0:"";s:4:"hour";s:0:"";s:3:"day";i:0;s:8:"monthnum";i:0;s:4:"year";i:0;s:1:"w";i:0;s:13:"category_name";s:0:"";s:3:"tag";s:0:"";s:3:"cat";s:0:"";s:6:"tag_id";s:0:"";s:6:"author";s:0:"";s:11:"author_name";s:0:"";s:4:"feed";s:0:"";s:2:"tb";s:0:"";s:5:"paged";i:0;s:8:"meta_key";s:0:"";s:10:"meta_value";s:0:"";s:7:"preview";s:0:"";s:1:"s";s:0:"";s:8:"sentence";s:0:"";s:5:"title";s:0:"";s:6:"fields";s:0:"";s:10:"menu_order";s:0:"";s:5:"embed";s:0:"";s:12:"category__in";a:0:{}s:16:"category__not_in";a:0:{}s:13:"category__and";a:0:{}s:8:"post__in";a:0:{}s:12:"post__not_in";a:0:{}s:13:"post_name__in";a:0:{}s:7:"tag__in";a:0:{}s:11:"tag__not_in";a:0:{}s:8:"tag__and";a:0:{}s:12:"tag_slug__in";a:0:{}s:13:"tag_slug__and";a:0:{}s:15:"post_parent__in";a:0:{}s:19:"post_parent__not_in";a:0:{}s:10:"author__in";a:0:{}s:14:"author__not_in";a:0:{}s:19:"ignore_sticky_posts";b:0;s:13:"cache_results";b:0;s:22:"update_post_term_cache";b:1;s:19:"lazy_load_term_meta";b:1;s:22:"update_post_meta_cache";b:1;s:8:"nopaging";b:0;s:17:"comments_per_page";s:2:"50";s:13:"no_found_rows";b:0;s:8:"taxonomy";s:18:"portfolio_category";s:7:"term_id";s:2:"84";}s:9:"tax_query";O:12:"WP_Tax_Query":6:{s:7:"queries";a:2:{i:0;a:5:{s:8:"taxonomy";s:18:"portfolio_category";s:5:"terms";a:8:{i:0;s:2:"84";i:1;s:2:"82";i:2;s:2:"77";i:3;s:2:"83";i:4;s:2:"76";i:5;s:2:"78";i:6;s:2:"80";i:7;s:2:"74";}s:5:"field";s:2:"id";s:8:"operator";s:2:"IN";s:16:"include_children";b:1;}s:8:"relation";s:2:"OR";}s:8:"relation";s:2:"OR";s:16:" * table_aliases";a:1:{i:0;s:21:"wp_term_relationships";}s:13:"queried_terms";a:1:{s:18:"portfolio_category";a:2:{s:5:"terms";a:8:{i:0;s:2:"84";i:1;s:2:"82";i:2;s:2:"77";i:3;s:2:"83";i:4;s:2:"76";i:5;s:2:"78";i:6;s:2:"80";i:7;s:2:"74";}s:5:"field";s:2:"id";}}s:13:"primary_table";s:8:"wp_posts";s:17:"primary_id_column";s:2:"ID";}s:10:"meta_query";O:13:"WP_Meta_Query":9:{s:7:"queries";a:0:{}s:8:"relation";N;s:10:"meta_table";N;s:14:"meta_id_column";N;s:13:"primary_table";N;s:17:"primary_id_column";N;s:16:" * table_aliases";a:0:{}s:10:" * clauses";a:0:{}s:18:" * has_or_relation";b:0;}s:10:"date_query";b:0;s:7:"request";s:370:"SELECT SQL_CALC_FOUND_ROWS  wp_posts.ID FROM wp_posts  LEFT JOIN wp_term_relationships ON (wp_posts.ID = wp_term_relationships.object_id) WHERE 1=1  AND ( 
  wp_term_relationships.term_taxonomy_id IN (84,82,77,83,78,80,74,76)
) AND wp_posts.post_type = 'portfolio' AND ((wp_posts.post_status = 'publish')) GROUP BY wp_posts.ID ORDER BY wp_posts.post_date ASC LIMIT 0, 10";s:5:"posts";a:5:{i:0;O:7:"WP_Post":24:{s:2:"ID";i:10430;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-07-07 07:44:04";s:13:"post_date_gmt";s:19:"2016-07-07 07:44:04";s:12:"post_content";s:4014:"[vc_row row_type="2" blox_cover="false" align_center="aligncenter" page_title="page-title-x"][vc_column][distance type="5"][vc_column_text]
<h1 style="text-align: center;"><strong>Corazon Latino</strong></h1>
<h5 style="text-align: center;">Content Marketing, Social Media Management, Video Production</h5>
[/vc_column_text][distance][button shape="rounded" btn_content="LAUNCH WEBSITE" url="http://www.corazonlatino.com" size="medium"][distance type="5"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/3"][distance type="2"][vc_column_text]
<h2><strong>Milestones</strong></h2>
<ul>
 	<li>Creation of YouTube video promotion</li>
 	<li>Increase in brand awareness through social media</li>
 	<li>Increase of organic traffic to website</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][distance type="2"][vc_column_text]
<h2><strong>About Corazon Latino</strong></h2>
Corazon Latino was established in 2005, and specializes in handmade silver jewelry. From cuff links to bracelets, each piece of jewelry is crafted by talented artisans and small workshops all the way from Thailand to Tuscany. The business sells uniquely designed jewelry for both men and women.

Their aim was to expand the business and increase their market reach. They wanted to have content produced on a regular basis for their blog to help drive organic traffic, they needed help in publishing engaging content on social media, and they wanted to have a video produced for a Christmas promotion.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text]
<h2><strong>The Wins</strong></h2>
Social Media Solutions was brought in to provide a range of marketing services for Yempo including: social media management, content marketing, and video production.
<h3 style="text-align: left;"><strong>Content Marketing</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Corazon_Latino_Blogpost.png"><img class="alignnone wp-image-10433 size-large" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Corazon_Latino_Blogpost-1024x620.png" alt="corazon-latino-blogpost" width="940" height="569" /></a>

Content writing was an excellent tool for Corazon Latino to promote their products and increase organic traffic. Social Media Solutions focused on keywords with high monthly searches such as “bracelets” and “bangles” to help drive more leads to the website, but also focused on writing informational articles about basic care tips for silver jewelry, the history of silver jewellery, and more.
<h3 style="text-align: left;"><strong>Social Media Management</strong></h3>
The owner of Corazon Latino is a very busy individual because she has a full-time job aside from running the jewellery company. She knows the benefits of social media, and she was posting content on her platforms, but she just didn't have time to post on a regular basis. Social Media Solutions was able to post unique and engaging content across all of her social media channels regularly, which resulted in not only increase the number of followers on her accounts, but also freeing up valuable time for her in the process.
<h3 style="text-align: left;"><strong>Video Production</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Corazon_Latino_Video.png"><img class="alignnone wp-image-10435 size-full" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Corazon_Latino_Video.png" alt="corazon-latino-video" width="854" height="482" /></a>

Social Media Solutions also developed a video for Corazon Latino to be used for a Christmas promotion. The highest number of sales for Corazon comes around Christmas and they needed a medium that could be shared easily and easily showcase their best selling products in an entertaining fashion. The video received a lot of engagement and resulted in an increase of sales during Christmas.[/vc_column_text][/vc_column][/vc_row]";s:10:"post_title";s:14:"Corazon Latino";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:16:"corazon-latino-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2017-02-03 10:02:03";s:17:"post_modified_gmt";s:19:"2017-02-03 10:02:03";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:66:"http://socialmedia-solutions.com/?post_type=portfolio&#038;p=10430";s:10:"menu_order";i:0;s:9:"post_type";s:9:"portfolio";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}i:1;O:7:"WP_Post":24:{s:2:"ID";i:10428;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-07-08 01:11:03";s:13:"post_date_gmt";s:19:"2016-07-08 01:11:03";s:12:"post_content";s:3445:"[vc_row row_type="2" blox_image="9166" align_center="aligncenter" page_title="page-title-x"][vc_column][distance type="5"][vc_column_text]
<h1 style="text-align: center;"><strong>Eat Well Challenge</strong></h1>
<h5 style="text-align: center;">Social Media Management</h5>
[/vc_column_text][distance][button shape="rounded" btn_content="LAUNCH WEBSITE" url="http://www.eatwellchallenge.com/" size="medium"][distance type="5"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/3"][distance type="2"][vc_column_text]
<h2><strong>Milestones</strong></h2>
<ul>
 	<li>Established brand awareness</li>
 	<li>Boost in social media followers by more than 400% within 2 months</li>
 	<li>Sold over 250 meal packages within 2 months of launching the social media campaign</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][distance type="2"][vc_column_text]
<h2><strong>About Eat Well Challenge</strong></h2>
Eat Well Challenge is a one-of-a kind online nutrition program created by an Australian company that uses patented technology to provide tailored meal programs for individuals and families. Whether you are preparing for a marathon or simply want to lose weight, Eat Well Challenge can create the perfect meal plan for you.

The company signed up with a coupon site to boost the  umber of sales for their new product, but since they did not have an online  presence yet, they could not arrange this business deal. They had to build an audience of people whom love their brand.[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_column_text]
<h2></h2>
<h2><strong>The Wins </strong></h2>
Social Media Solutions was brought in to setup and optimize their social media accounts, produce valuable content on a regular basis, and to create brand trust and aweress.
<h3 style="text-align: left;"><strong>Social Media Marketing</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Eat_Well_Instagram.png"><img class="alignnone wp-image-10436 size-large" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Eat_Well_Instagram-1024x771.png" alt="eat-well-instagram" width="940" height="708" /></a>

One of the important elements of a successful social media campaign is producing highly engaging content on a regular basis. We optimized their Facebook and Instagram pages and filled them with interesting content such as tips about weight loss, motivational advice, and feel good stories.  The month of May produced almost 500% new followers on Facebook alone.

<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Eat_Well_MAS_Report_May_Facebook.png"><img class="alignnone wp-image-10437 size-large" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Eat_Well_MAS_Report_May_Facebook-1024x597.png" alt="eat-well-challenge-facebook" width="940" height="548" /></a>

Since Eat Well Challenge revolves around healthy living, Instagram was the perfect platform for them to expand their social reach. By sharing inspiring and interesting visual content, we increased their Instagram audience by 400% within two months.

Another big win during the two months of the social media campaign, was that Eat Well Challenge increased their online presence and was able to close the deal with the coupon site which resulted in selling more than 250 meal plans.[/vc_column_text][/vc_column][/vc_row]";s:10:"post_title";s:18:"Eat Well Challenge";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:20:"eat-well-challenge-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-07-14 08:19:37";s:17:"post_modified_gmt";s:19:"2016-07-14 08:19:37";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:66:"http://socialmedia-solutions.com/?post_type=portfolio&#038;p=10428";s:10:"menu_order";i:0;s:9:"post_type";s:9:"portfolio";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}i:2;O:7:"WP_Post":24:{s:2:"ID";i:10423;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-07-08 02:10:09";s:13:"post_date_gmt";s:19:"2016-07-08 02:10:09";s:12:"post_content";s:5171:"[vc_row row_type="2" blox_image="9166" align_center="aligncenter" page_title="page-title-x"][vc_column][distance type="5"][vc_column_text]
<h1 style="text-align: center;"><strong>LCHF NATION</strong></h1>
<h5 style="text-align: center;">Website Design, Brand Development, Email Marketing, Social Media Management, Video Production, Conversion Optimization</h5>
[/vc_column_text][distance][button shape="rounded" btn_content="LAUNCH WEBSITE" url="http://www.lchfnation.com/" size="medium"][distance type="5"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/3"][distance type="2"][vc_column_text]
<h2><strong>Milestones</strong></h2>
<ul>
 	<li>Rebranding package increased brand awareness</li>
 	<li>New optimized website and online store</li>
 	<li>Increased audience engagement across social media platforms</li>
 	<li>Increase in overall revenue for all products</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][distance type="2"][vc_column_text]
<h2><strong>About LCHF Nation</strong></h2>
Husband and wife founders, Elena and John, wanted to increase sales for their online business, LCHF Nation. Their business is an informational website that provides free advice to individuals who want to lose weight and those who have special health conditions. Their primary digital products include: cookbooks, meal plans, and personal weight loss coaching.

LCHF Nation faced several issues that prevented from increasing their sales. They had a poorly functioning website that was not optimized for SEO and an online store that had a complicated checkout process. They also had a brand that was not easily identifiable with, and needed a major upgrade. They were actively using social media, but they lacked the proper optimization and strategies that were needed to expand their reach.

[/vc_column_text][/vc_column_inner][/vc_row_inner][distance type="2"][vc_column_text]
<h2><strong>The Wins</strong></h2>
Social Media Solutions was brought in to provide a wide range of marketing services for LCHF Nation including: website design, brand development, email marketing, social media management, video production, and conversion optimization.
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_Shop.png"><img class="alignnone wp-image-10442" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_Shop.png" alt="lchf-shop" width="940" height="933" /></a>

&nbsp;
<h3 style="text-align: left;"><strong>Brand Development</strong></h3>
In order to attract new clients and drive sales, Social Media Solutions provided LCHF Nation a brand development package that redefined their entire color pallet, updated their logo, branded all of their products, and gave them the branding that they needed to stand out from their competitors.
<h3></h3>
<h3 style="text-align: left;"><strong>Website Design</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_Website.png"><img class="alignnone wp-image-10443" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_Website.png" alt="lchf-website" width="940" height="898" /></a>

LCHF Nation entire business that revolves around their online store. Their previous website wasn’t user-friendly and it took too long to load. Customers also found it difficult to purchase products since the checkout process had too many steps and was confusing to navigate. Social Media Solutions gave them a complete upgrade.

The new website features the company’s new branding, has a much faster loading time, and has an easily navigable interface. The online store was changed from woocommerce to Shopify to include new features and a better customer experience.
<h3 style="text-align: left;"><strong>Social Media Marketing</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_FB.png"><img class="alignnone wp-image-10445 size-full" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_FB.png" alt="lchf-facebook" width="744" height="881" /></a>

To increase brand awareness and generate new leads, LCHF Nation had to extend their reach using social media. Social Media Solutions created a marketing strategy that helped their brand reach a wider audience, greatly increased engagement, and promoted more referral traffic to the website than ever before.
<h3 style="text-align: left;"><strong>Video Production</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_Video_002.png"><img class="alignnone wp-image-10446 size-full" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/LCHF_Video_002.png" alt="lchf-video" width="854" height="552" /></a>

Social Media Solutions created an engaging video that summarizes what distinguishes LCHF's weight loss business from their competitors. The two-minute video features the benefits of their weight loss meal plans, promoted their new cookbook, and featured testimonials of clients who have seen amazing results by following their weight loss program.
<h3></h3>
[/vc_column_text][/vc_column][/vc_row]";s:10:"post_title";s:11:"LCHF Nation";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:11:"lchf-nation";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-07-14 08:21:51";s:17:"post_modified_gmt";s:19:"2016-07-14 08:21:51";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:66:"http://socialmedia-solutions.com/?post_type=portfolio&#038;p=10423";s:10:"menu_order";i:0;s:9:"post_type";s:9:"portfolio";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}i:3;O:7:"WP_Post":24:{s:2:"ID";i:10426;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-07-08 02:24:02";s:13:"post_date_gmt";s:19:"2016-07-08 02:24:02";s:12:"post_content";s:3825:"[vc_row row_type="2" blox_image="9166" align_center="aligncenter" page_title="page-title-x"][vc_column][distance type="5"][vc_column_text]
<h1 style="text-align: center;"><strong>Quro Health Studios</strong></h1>
<h5 style="text-align: center;">Social Media Management</h5>
[/vc_column_text][distance][button shape="rounded" btn_content="LAUNCH WEBSITE" url="http://qurome.com/" size="medium"][distance type="5"][/vc_column][/vc_row][vc_row row_type="2" blox_image="9166" align_center="aligncenter" page_title="page-title-x"][vc_column][vc_row_inner][vc_column_inner width="1/3"][distance type="2"][vc_column_text]
<h2 style="text-align: left;"><strong>Milestones</strong></h2>
<ul>
 	<li style="text-align: left;">Significant rise of engagement on social media</li>
 	<li style="text-align: left;">A 140% increase of Instagram followers within 2 months</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][distance type="2"][vc_column_text]
<h2 style="text-align: left;"><strong>About Quro</strong></h2>
<p style="text-align: left;">Quro Health Studios is the creation of Dean Haustead. With over 9 years experience in the health and well-being industry, he created his business to provide individuals an exercise system that delivers great results for men and women who want to tone and strengthen their bodies.Currently, the company offers a mixture of yoga, Pilates, and martial arts classes.</p>
<p style="text-align: left;">Quro wanted to increase their brand awareness and encourage more people to enroll in their classes; however, they faced the same issue as many medium sized businesses - they had neither the experience, nor the time to run a proper social media campaign.</p>
[/vc_column_text][/vc_column_inner][/vc_row_inner][distance type="2"][vc_column_text]
<h2></h2>
<h2 style="text-align: left;"><strong>The Wins</strong></h2>
<p style="text-align: left;">It was decided to focus on the three best social media platforms for Quro's industry - Facebook, Instagram, and Twitter. Content was posted on these platform 5 times a week and Social Media Solutions focused on improving organic engagement.</p>

<h3 style="text-align: left;"><strong>Social Media Management</strong></h3>
<p style="text-align: left;">By creating highly engaging content and focusing on building Quro's audience, we were able to deliver incredible organic results. Quro had an existing Facebook account that was optimized and Instagram was added to the social media mix to help drive a new audience to their website.</p>
<p style="text-align: left;"><a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Quro_Instagram.png"><img class="alignnone size-large wp-image-10455" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Quro_Instagram-1024x764.png" alt="quoro-instagram" width="940" height="701" /></a></p>
<p style="text-align: left;">With Quro Health Studios, we focused on content pertaining to healthy living, the benefits of exercise, but the bulk of the content was built around Yoga, Pilates, and Kung Fu, all of which are classes offered at their studio.</p>
<p style="text-align: left;"><a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Quro_Facebook_post-e1468371941208.png"><img class="alignnone size-full wp-image-10458" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Quro_Facebook_post-e1468371941208.png" alt="quoro-facebook-post" width="544" height="444" /></a></p>
<p style="text-align: left;">Within a span of two months, Quro Health Studio social media following on Instagram increased by 140 percent in which has lead to an increase of brand awareness and their followers continue to grow at an impressive rate.</p>
<p style="text-align: left;">[/vc_column_text][/vc_column][/vc_row]</p>";s:10:"post_title";s:19:"Quro Health Studios";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:21:"quro-health-studios-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-08-04 08:28:40";s:17:"post_modified_gmt";s:19:"2016-08-04 08:28:40";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:66:"http://socialmedia-solutions.com/?post_type=portfolio&#038;p=10426";s:10:"menu_order";i:0;s:9:"post_type";s:9:"portfolio";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}i:4;O:7:"WP_Post":24:{s:2:"ID";i:10427;s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2016-07-08 02:28:14";s:13:"post_date_gmt";s:19:"2016-07-08 02:28:14";s:12:"post_content";s:4850:"[vc_row row_type="2" blox_cover="false" align_center="aligncenter" page_title="page-title-x"][vc_column][distance type="5"][vc_column_text]
<h1 style="text-align: center;"><strong>Yempo</strong></h1>
<h5 style="text-align: center;">Website Design, Social Media Management, Content Marketing, Analytical Tracking, Video Production, and Branding</h5>
[/vc_column_text][distance][button shape="rounded" btn_content="LAUNCH WEBSITE" url="http://www.yempo-solutions.com/" size="medium"][distance type="5"][/vc_column][/vc_row][vc_row][vc_column][vc_row_inner][vc_column_inner width="1/3"][distance type="2"][vc_column_text]
<h2><strong>Milestones</strong></h2>
<ul>
 	<li>170% increase in organic traffic over a 6-month period</li>
 	<li>225% increase in leads that converted to sales</li>
 	<li>New website with a well-designed career portal</li>
 	<li>Enhancement of social media branding and color palette</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="2/3"][distance type="2"][vc_column_text]
<h2><strong>About Yempo</strong></h2>
Your Employees Offshore, or Yempo, is a Sydney-based offshoring company that provides flexible, low-cost staffing solutions to organizations around the world. The company has 4 offices in the Philippines, and they provide services around the world in locations like Australia, The US, Canada, the United Kingdom, and other European countries.

Yempo wanted to develop a strong online presence aimed at aiding the recruitment process for new employees, and increase the number of leads being generated from website traffic. However, their previous website, branding, and social media platforms were not fully optimized to achieve their goals.[/vc_column_text][/vc_column_inner][/vc_row_inner][distance type="2"][vc_column_text]
<h2><strong>The Wins</strong></h2>
Social Media Solutions was brought in to provide a wide range of marketing services for Yempo including: website design, social media management, content marketing, analytical tracking, video production, and branding.
<h3 style="text-align: left;"><strong>Website Design</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/website.png"><img class="alignnone wp-image-10470 size-large" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/website-1024x557.png" alt="website" width="940" height="511" /></a>

Social Media Solutions designed and built a completely new website that included a new career portal for recruitment, custom pages that provide information about outsourcing, an updated about us page, and more. The new website has a faster loading time, contains eye-catching graphics, incorporates engaging content, and is SEO optimized. In fact, the organic traffic grew over 170% during a 6-month period which finally gave Yempo the boost they needed to increase their online presence.
<h3 style="text-align: left;"><strong>Social Media Management</strong></h3>
The entire social media management strategy was updated for Yempo, and several campaigns were run to help increase the number of followers on their platforms, and also increase the amount of engagement as well. Each social media account was optimized and we published unique and engaging content across Facebook, Twitter, and Instagram. Throughout the campaigns, Yempo has greatly increased the number of followers and engagement on social media.
<h3 style="text-align: left;"><strong>Content Marketing</strong></h3>
Social Media Solutions conceptualized a content marketing plan that revolves around Yempo’s vision of providing world class staffing solutions for clients while creating an office culture that inspires their employees. The content produced provides unique insights about outsourcing and tips and trick about keeping your employees happy.
<h3 style="text-align: left;"><strong>Lead Generation </strong></h3>
Due to both the social media campaigns and the new content marketing strategy, Yempo started to see an increase of website traffic that lead to an increased of leads being generated. Organic traffic alone brought an increase of 225% of leads that converted into sales of a six month period.
<h3 style="text-align: left;"><strong>Video Production</strong></h3>
<a href="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Yempo_Video_002.png"><img class="alignnone wp-image-10473 size-full" src="http://socialmedia-solutions.com/wp-content/uploads/2016/07/Yempo_Video_002.png" alt="yempo-video" width="854" height="479" /></a>

Yempo wanted to focus on the fastest rising marketing service in the world today - video advertising. Social Media Solutions has developed numerous videos for Yempo including: internal recruitment videos, sales promotion videos, services briefing videos, and more.

[/vc_column_text][/vc_column][/vc_row]";s:10:"post_title";s:5:"Yempo";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:6:"closed";s:11:"ping_status";s:6:"closed";s:13:"post_password";s:0:"";s:9:"post_name";s:7:"yempo-2";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2016-07-18 03:11:18";s:17:"post_modified_gmt";s:19:"2016-07-18 03:11:18";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";i:0;s:4:"guid";s:66:"http://socialmedia-solutions.com/?post_type=portfolio&#038;p=10427";s:10:"menu_order";i:0;s:9:"post_type";s:9:"portfolio";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";s:6:"filter";s:3:"raw";}}s:10:"post_count";i:5;s:12:"current_post";i:-1;s:11:"in_the_loop";b:0;s:4:"post";r:156;s:13:"comment_count";i:0;s:15:"current_comment";i:-1;s:11:"found_posts";s:1:"5";s:13:"max_num_pages";d:1;s:21:"max_num_comment_pages";i:0;s:9:"is_single";b:0;s:10:"is_preview";b:0;s:7:"is_page";b:0;s:10:"is_archive";b:1;s:7:"is_date";b:0;s:7:"is_year";b:0;s:8:"is_month";b:0;s:6:"is_day";b:0;s:7:"is_time";b:0;s:9:"is_author";b:0;s:11:"is_category";b:0;s:6:"is_tag";b:0;s:6:"is_tax";b:1;s:9:"is_search";b:0;s:7:"is_feed";b:0;s:15:"is_comment_feed";b:0;s:12:"is_trackback";b:0;s:7:"is_home";b:0;s:6:"is_404";b:0;s:8:"is_embed";b:0;s:8:"is_paged";b:0;s:8:"is_admin";b:0;s:13:"is_attachment";b:0;s:11:"is_singular";b:0;s:9:"is_robots";b:0;s:13:"is_posts_page";b:0;s:20:"is_post_type_archive";b:0;s:25:" WP_Query query_vars_hash";s:32:"8c53fb17709c59bb43103b38519aae0c";s:28:" WP_Query query_vars_changed";b:0;s:17:"thumbnails_cached";b:0;s:19:" WP_Query stopwords";N;s:23:" WP_Query compat_fields";a:2:{i:0;s:15:"query_vars_hash";i:1;s:18:"query_vars_changed";}s:24:" WP_Query compat_methods";a:2:{i:0;s:16:"init_query_flags";i:1;s:15:"parse_tax_query";}}}