-- Adminer 4.8.1 MySQL 5.7.23-23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tbl_admin_sidebar`;
CREATE TABLE `tbl_admin_sidebar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `url` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_admin_sidebar` (`id`, `name`, `url`) VALUES
(1,	'Dashboard',	'home'),
(2,	'Team',	'#'),
(3,	'Slider Panel',	'#'),
(6,	'Banner Images',	'#'),
(7,	'Custom Order',	'#'),
(8,	'Corporate Order',	'#'),
(9,	'Category',	'category/view_category'),
(10,	'Sub-Category',	'subcategory/view_subcategory'),
(12,	'Products',	'products/view_products'),
(13,	'News letter',	'News_letter/view_newsletter'),
(15,	'Blogs',	'Blog/view_blog'),
(16,	'Users',	'users/view_users'),
(17,	'Promocode',	'coupancode/view_coupancode'),
(20,	'Best Sellers Slider',	'sellerslider/view_sellerslider'),
(21,	'Pincode',	'pincode/view_pincode'),
(22,	'Launches Slider',	'launchesslider/view_launchesslider'),
(23,	'Testimonal',	'Testimonal/view_testimonal'),
(24,	'Orders',	'#'),
(26,	'Abandon cart',	'Abandoncart/view_Abandon_cart'),
(27,	'Top Ten',	'Top_ten/view_top_ten_categories');

DROP TABLE IF EXISTS `tbl_admin_sidebar2`;
CREATE TABLE `tbl_admin_sidebar2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `main_id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `url` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_admin_sidebar2` (`id`, `main_id`, `name`, `url`) VALUES
(1,	2,	'View Team',	'system/view_team'),
(2,	2,	'Add Team',	'system/add_team'),
(3,	7,	'Orders',	'Custom_orders/view_custom_orders'),
(4,	7,	'Broachers',	'Custom_brochers/view_custom_brochers'),
(6,	8,	'Orders',	'Corporate_orders/view_corporate_orders'),
(7,	8,	'Broacher',	'Corporate_brochers/view_corporate_brochers'),
(9,	6,	'Images-I',	'bannerimages/view_bannerimages'),
(19,	6,	'Images-II',	'Bannerimages/view_Image_two'),
(20,	6,	'Banner Six',	'Banners/view_banners'),
(21,	24,	'New Orders',	'Orders/view_new_orders'),
(22,	24,	'Accepted Orders',	'Orders/view_accept_orders'),
(23,	24,	'Dispatched Orders',	'Orders/view_dispatched_orders'),
(24,	24,	'Delivered Orders',	'Orders/view_completed_orders'),
(25,	24,	'Rejected Orders',	'Orders/view_rejected_orders'),
(26,	7,	'Banner',	'Custom_orders/view_custom_banner'),
(27,	8,	'Banner',	'Corporate_orders/view_corporate_banner'),
(28,	3,	'Web Slider',	'Slider/view_slider'),
(29,	3,	'Mobile Slider',	'Mobile_slider/view_mobile_slider');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `tbl_bannerimages`;
CREATE TABLE `tbl_bannerimages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagename` varchar(1000) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `image4` varchar(100) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `link` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_bannerimages` (`id`, `imagename`, `image1`, `image2`, `image3`, `image4`, `ip`, `date`, `added_by`, `is_active`, `link`) VALUES
(8,	'Get the look',	'assets/uploads/bannerimages/bannerimages20211231031259.jpg',	'assets/uploads/bannerimages/bannerimages220220113040144.jpg',	'assets/uploads/bannerimages/bannerimages320211109101132.jpg',	'assets/uploads/bannerimages/bannerimages420211109101132.jpg',	'::1',	'2021-11-09 10:43:32',	19,	1,	'#');

DROP TABLE IF EXISTS `tbl_banners_six`;
CREATE TABLE `tbl_banners_six` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_banners_six` (`id`, `name`, `image`, `link`, `ip`, `is_active`, `added_by`, `date`) VALUES
(1,	'Sofas',	'assets/uploads/banner/team20211230031211.jpg',	'#',	'::1',	1,	'19',	'2021-12-30 20:17:11'),
(2,	'Seating',	'assets/uploads/banner/team20211230031258.jpg',	'#',	'::1',	1,	'19',	'2021-12-30 20:18:58'),
(3,	'Beds',	'assets/uploads/banner/team20211230031210.jpg',	'#',	'::1',	1,	'19',	'2021-12-30 20:27:10'),
(4,	'Outdoor',	'assets/uploads/banner/team20211230031206.jpg',	'#',	'::1',	1,	'19',	'2021-12-30 20:28:06'),
(5,	'Tables',	'assets/uploads/banner/team20211230031248.jpg',	'#',	'::1',	1,	'19',	'2021-12-30 20:28:48'),
(6,	'Trolleys',	'assets/uploads/banner/team20211230031231.jpg',	'#',	'::1',	1,	'19',	'2021-12-30 20:29:31');

DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE `tbl_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_date` varchar(100) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  `full_description` mediumtext,
  `image` varchar(100) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_blog` (`id`, `article_date`, `heading`, `description`, `full_description`, `image`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'INNOVATION 14 JAN, 2022',	'Most Helpful Tips for Sustainable Lighting',	' facebook twitter When planning your home’s interior design, lighting is esential. They are crucial for illuminating your home from darkness to perform various tasks at peace of mind. But some lights consume a lot of electricity, which is not good for mother earth. Therefore, if you are concerned about ecological well-being, it is time to switch to sustainable home decoration lights so that you can enjoy the luxury of electricity in your home without sacrificing the well-being of the environment.',	'<h2>Significance of Sustainable Lighting</h2>\r\n\r\n<p>Here are some reasons why sustainable lighting is becoming increasingly important and why you should make the switch -</p>\r\n\r\n<ul>\r\n	<li>Sustainable lighting fixtures like LED lights consume less energy and power. So, this causes a decrease in the emission of greenhouse gases and generates less stress on power plants.</li>\r\n	<li>Using lights containing chemicals can be harmful to the environment. Hence, switching to designer lights that prioritise the well-being of mother nature by eliminating the usage of toxic substances is recommended, as it produces less waste.</li>\r\n	<li>You can easily install sustainable LED lights in any space of your home, allowing you to attribute light to your home in an efficient manner.</li>\r\n</ul>\r\n\r\n<p>Thus, switching to sustainable lighting can help your light set-ups have enhanced durability, enabling you to use them for a longer time. Also, using eco-friendly lights is always better in all aspects.</p>\r\n\r\n<h2>5 Helpful Sustainable Lighting Tips</h2>\r\n\r\n<p>If you plan to live a more sustainable lifestyle, you should switch to sustainable lighting.</p>\r\n\r\n<p>Here are some handy tips you can follow to implement sustainable lighting in your home while promoting the betterment of the environment.</p>\r\n\r\n<p>Switch to Lamps</p>\r\n\r\n<p>Start using lamps more often. For example, instead of illuminating the entire room with a tube light, you can use a lamp to light up the specific corner you are working in. In this way, you can avoid the overuse of electricity and save a lot of energy.</p>\r\n\r\n<p>Thus, the&nbsp;<a href=\"https://www.orangetree.in/rhombus-table-lamp-black-ot0075t\">Rhombus Table Lamp Black</a>&nbsp;from Orange Tree is a good choice of&nbsp;<strong>home decor lamps</strong>&nbsp;to switch to sustainable lighting.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/rhombus-table-lamp-black-ot0075t\"><img alt=\"Rhombus Table Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2022/01/Rhombus-table-lamp-black.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Opt for Wall Lamps</p>\r\n\r\n<p>Wall lamps, like the&nbsp;<strong><a href=\"https://www.orangetree.in/calathus-wall-lamp-ot0070h\">Calathus Wall Lamp</a>&nbsp;</strong>by Orange Tree, are a great alternative to ceiling lights. Moreover, they can easily light up the spaces you often use so that you don&rsquo;t have to waste energy in illuminating other unused areas.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/calathus-wall-lamp-ot0070h\"><img alt=\"Calathus Wall Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2022/01/calathus-wall-lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>These lights not only help you produce less electric waste but also add an elegant and stylish touch to your room.</p>\r\n\r\n<p>Install Floor Lamps</p>\r\n\r\n<p>Fixing lights on your room&rsquo;s floor increase lighting efficiency to a great extent.&nbsp;<strong>Floor lamps</strong>&nbsp;look stylish and enhance light flow while consuming less energy.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/gatsby-floor-lamp-ot0057r\"><img alt=\"Gatsby Floor Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2022/01/gatsby-floor-lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Thus, installing lamps like the&nbsp;<strong><a href=\"https://www.orangetree.in/gatsby-floor-lamp-ot0057r\">Gatsby Floor Lamp</a>&nbsp;</strong>from Orange Tree can significantly add to your sustainable lighting plans.</p>\r\n\r\n<p>Use Lanterns</p>\r\n\r\n<p>Since time immemorial, lanterns have been a great way to illuminate your path. You can take it wherever you go and light up all the corners you use.</p>\r\n\r\n<p>These days, lanterns come in various styles and designs like the&nbsp;<strong><a href=\"https://www.orangetree.in/luxor-t-lite-holder-small-ot0055m-medium\">Luxor Tealight Holder Medium</a>&nbsp;</strong>by Orange Tree. Since it is portable, you can reserve illumination to specific areas and reduce unnecessary electricity consumption.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/luxor-t-lite-holder-small-ot0055m-medium\"><img alt=\"Luxor Tealight Holder\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2022/01/luxor-tealight-holder.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Choose Wise Wall Paint Colors</p>\r\n\r\n<p>Every interior designer will tell you that complementing your lighting with your wall colour is essential. It is so because the wall paint can make your interior appear spacious or cramped.</p>\r\n\r\n<p>Therefore, choose cool and light paint colours and small lighting that occupies lesser space, like the&nbsp;<strong><a href=\"https://www.orangetree.in/freedom-tall-green-hanging-lamp-ot0075l\">Freedom Tall Green Hanging Lamp</a></strong>&nbsp;by Orange Tree. Such&nbsp;<strong>home decoration lights&nbsp;</strong>will spread radiance around the room better.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/freedom-tall-green-hanging-lamp-ot0075l\"><img alt=\"Freedom Tall Green Hanging Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2022/01/freedom-tall-green-hanging-lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<h3>What are some energy-efficient options for switching to sustainable lighting?</h3>\r\n\r\n<p>Using wall lamps like the Louvre Wall Lamp Round by Orange Tree is a great option to incorporate sustainable lighting in your home. They use less electricity yet add a contemporary ambience to your interior decor.</p>\r\n\r\n<p>These lamps also allow you to easily throw light on areas you are currently using while adding a style quotient to your home. Hence, you get the best of both worlds by opting for wall lamps.</p>\r\n\r\n<h3>Which is better &ndash; floor lamps or hanging lights?</h3>\r\n\r\n<p>Floor lamps can allow you to have a better flow of light while hanging lights are suitable for throwing light on specific areas. Both these lights have their own functionality.</p>\r\n\r\n<p>So, when you want better attribution of light,&nbsp;<strong><a href=\"https://www.orangetree.in/lighting/floor-lamps\">floor lamps online</a></strong>&nbsp;like the Wave Floor Lamp<strong>&nbsp;</strong>from Orange Tree are better. On the contrary, hanging lights are more suitable for illuminating specific spaces and making your home interior look more stylish.</p>\r\n\r\n<h3>Final Thoughts</h3>\r\n\r\n<p>To wind up, switching to sustainable lighting is a great idea. It is a healthy choice for you and the environment. Using&nbsp;<strong>home decoration lights</strong>&nbsp;that consider the safety and welfare of nature is a great alternative and incredible innovation. And in this way, you can even do your bit for ensuring the planet&rsquo;s well-being.</p>\r\n',	'assets/uploads/blog/blog20220127060122.jpg',	'49.205.212.237',	'2022-01-27 18:14:22',	19,	1),
(2,	'SPACES & PLACES 28 DEC, 2021',	'Top 5 Modern Wall Mirrors that Make an Aesthetic Statement',	'Who doesn’t like a beautiful mirror hanging on the walls of a room? Decorative wall mirrors are an incredible home decor item that can add utmost elegance and a chic style to your room. These statement pieces can easily create the illusion of a larger space while glowing up the dark corners of your home and invigorating an aesthetic touch to your home decor range. Thus, utilizing a statement wall mirror is a good choice if you’re confused about what to do with a void dull space or corner.  Modern mirrors are whimsical and fun and can amplify the character and functionality of a space. It’s just a matter of discovering the right style and size of these mirrors that suit your space requirements well. So, for your convenience, here are the top 5 trending modern wall mirrors that can be an artistic statement for your home.',	'<p>Elegant Accent Circle Mirrors</p>\r\n\r\n<p>Circular accent mirrors can easily capture light and reflect it uniformly all around your room. Thoughtfully manufactured to serve as a functional home accessory and art piece, this decorative large wall mirror is ideal for any space.</p>\r\n\r\n<p>You can install them in your living room, study room, or hallway, wherever there is not enough radiance. So, if you want to amplify the glory of your rooms with&nbsp;<strong>designer mirrors for walls</strong>, opt for the&nbsp;<strong><a href=\"https://www.orangetree.in/maurya-mirror-ot0059f\">Maurya Wall Mirror</a>&nbsp;</strong>from Orange Tree. Inspired by Greek-style architecture, this wall mirror is a seamless amalgamation of antiquity and modernity that adds a contrasting flair to your space.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/maurya-mirror-ot0059f\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Maurya-Wall-Mirror.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Aesthetic Framed Mirrors</p>\r\n\r\n<p>Liven up your bathroom or bedroom with decorative framed wall mirrors. The embellishments present on the frames of these mirrors give your space an added aesthetic appeal. Also, being circumscribed with solid frames, these mirrors are studier and more durable. However, make sure that the frame doesn&rsquo;t block the reflective surface of the mirror.</p>\r\n\r\n<p>So, are you thinking of getting a sturdy decorative bedroom wall mirror? If yes, then nothing can be better than the&nbsp;<strong><a href=\"https://www.orangetree.in/ipiano-mirror-ot2251c\">Ipiano Mirror</a>&nbsp;</strong>from Orange Tree. Resembling the shape of piano keys, this sleek framed mirror comes with a royal antique finish, which serves as a classy highlight for your space.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/ipiano-mirror-ot2251c\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Ipiano-Wall-Mirror.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Cool Hexagonal Mirrors</p>\r\n\r\n<p>Geometrical-shaped decor items have been in the trend for quite a few years. If you like adorning your home with such geometric cut statement pieces, a hexagon mirror would be an excellent choice for you. They look incredible in contemporary interiors, including high-tech and Scandinavian styles.</p>\r\n\r\n<p>Usually, hexagon wall mirrors comprise a single large unit, such as the&nbsp;<strong><a href=\"https://www.orangetree.in/hexago-wall-mirror-ot0030f\">Hexago Wall Mirror</a>&nbsp;</strong>from Orange Tree. But at times, it can be a mirror, including many tiny hexagons associated with the primary unit. So, depending upon the space you have on your wall, opt for a suitable hexagonal&nbsp;<strong>decorative wall mirror</strong>&nbsp;that would perfectly radiate light in all directions without looking clumsy on the wall.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/hexago-wall-mirror-ot0030f\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Hexago-Wall-Mirror.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Classic Rectangular Mirrors</p>\r\n\r\n<p>Installing large rectangular mirrors above the bed is a popular practice in bedroom decor design. Owing to their large reflective surface area, these mirrors perfectly reflect the natural light throughout your entire bedroom. So, you can easily experience a clear reflection with these&nbsp;<strong>designer mirrors for walls</strong>.</p>\r\n\r\n<p>Though they are pretty mainstream, these rectangular wall mirrors look classy and are highly functional. So, if you are looking for a minimalist mirror,&nbsp;<strong><a href=\"https://www.orangetree.in/himba-rectangular-mirror-ot0065i\">Himba Rectangular Mirror</a></strong>&nbsp;from Orange Tree can be a bold statement piece for bold spaces.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/himba-rectangular-mirror-ot0065i\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Himba-Rectangular-Wall-Mirror.jpg\" style=\"height:640px; width:512px\" /></a></p>\r\n\r\n<p>Fancy Designer Mirrors</p>\r\n\r\n<p>Functional and pretty fancy mirrors are a great addition to any space. Not only do they accentuate your walls with contemporary beauty, but they also create an illusion of more space and depth that brightens up gloomy corners. So, whether you intend to amplify the panache of your living room or want to enliven a pale dull wall, fancy mirrors would be a great solution.</p>\r\n\r\n<p>If you prefer adding eco-friendly home decor items, opt for a fancy bedroom wall mirror made of natural and organic materials. In this regard, the&nbsp;<strong><a href=\"https://www.orangetree.in/zulu-leaf-weave-mirror-ot0064x\">Zulu Leaf Weave Mirror</a></strong>&nbsp;from Orange Tree must deserve special mention. Handcrafted using cane material, this decor option is a highly sustainable choice.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/zulu-leaf-weave-mirror-ot0064x\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Zulu-Leaf-Weave-Wall-Mirror.jpg\" style=\"height:640px; width:512px\" /></a></p>\r\n\r\n<p>Wrap up</p>\r\n\r\n<p>Contemporary statement mirrors are spectacular home decor items to generate the vision of a spacious, well-lit room. Whether you pick an oversized mirror, ideal for rendering a dramatic effect or combine an assortment of tinier designs, mirrors are an attractive way to equalize a scheme and draw the interest of your guests to the walls.</p>\r\n\r\n<p>So, you can opt for any of these modern&nbsp;<strong>decorative wall mirrors</strong>&nbsp;mentioned above to brighten up your space and invigorate an aesthetic accentuation to your home.</p>\r\n',	'assets/uploads/blog/blog20220127060143.jpg',	'49.205.212.237',	'2022-01-27 18:15:43',	19,	1),
(3,	'COLLECTIONS 23 DEC, 2021',	'How Can You Light a Room Without Overhead Lights?',	'Have you just shifted to your new apartment loaded with ample amenities? But wait, doesn’t your flat have overhead ceiling lights? Well, this can make your new home appear a bit dark and subdued. But don’t worry; you can still reinvent your room’s illuminance and aestheticism by implementing a few effective lighting ideas with various decorative lights.  So, do you want to explore these easy-to-install lighting options to brighten up your room having no overhead lights? Here are the top 4 alternative ways you can enhance the radiance of your dull and pale room.',	'<p>Adorn your room with bright floor lamps</p>\r\n\r\n<p>The most apparent solution for your space without a ceiling light is to install a floor lamp. Usually, any type and design of&nbsp;<strong><a href=\"https://www.orangetree.in/lighting/floor-lamps\">floor lamps</a>&nbsp;</strong>can improve the luminescence of your apartment. But always choose the right size of a lamp as per the dimensions of your room. For instance, large arc floor lamps serve as beautiful statement pieces in large spaces, maximising interior lighting.</p>\r\n\r\n<p>But if you do not have enough floor area, find a tall and sleek floor lamp that will radiate sufficient light to brighten maximum space. In this regard, the&nbsp;<strong><a href=\"https://www.orangetree.in/athens-floor-lamp-ot0071p\">Athens floor lamp</a>&nbsp;</strong>from Orange Tree would be a perfect addition to your living room. It flawlessly incorporates elements of modernity and antiquity, which not only lights up the entire room but also accentuates your home decor range.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/athens-floor-lamp-ot0071p\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Athens-Floor-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Besides, while choosing floor lamps for your room with no overhead lights, pick the ones having less colour and appear more adorning. You can opt for either bold lights or elegant and petite ones that amalgamate well into the background wall colour of your room.</p>\r\n\r\n<p>Get easy plug-in pendant lights to enhance the charm of your room</p>\r\n\r\n<p>Have you already installed sconces in your living room to enhance the beauty of your home? Well, then it&rsquo;s time to make a mount-and-plug selection that goes well with living space sconces, i.e., ceiling pendants. Plug-in pendant lights render a great modern essence to your room and cover a wide area. In addition, you&rsquo;ll require only one or two lights for bright interior lighting.</p>\r\n\r\n<p>Besides, the installation of these home decoration lights is too easy and hassle-free. All you need to do is plug in the cord of these pendant lights into the wall and experience a beautiful glowy room.</p>\r\n\r\n<p>You can also install a chandelier type pendant light to set a party mode.&nbsp;<strong><a href=\"https://www.orangetree.in/cupula-hanging-lamp-ot0022k\">Cupula Hanging Lamp</a></strong>&nbsp;from Orange Tree would be a perfect choice for adding such vibrance and illuminance to your room in the absence of overhead lights.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/cupula-hanging-lamp-ot0022k\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Cupula-Hanging-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Install table lamps to brighten inaccessible spaces</p>\r\n\r\n<p>Table lamps are another important source of lighting for rooms having no ceiling lights. The tiny pools of flash emitted from table lamps in preferred areas enable the light to reach those small corners where even pendant and floor lamps cannot.</p>\r\n\r\n<p>You can easily place them on the tables beside your couch or sofa and enjoy reading your favourite book or doing your office tasks on your laptop in a light, sombre, and relaxing set-up. Also, you can&nbsp;<a href=\"https://www.orangetree.in/lighting/table-lamp\">buy table lamps online</a>&nbsp;of various sizes and incorporate them at different corners of your room to amplify interior lighting and bring about a visual variation.</p>\r\n\r\n<p>Besides utilising a wide array of designer table lamps, you can easily control the light exposure, tone, and intensity. So,&nbsp;<strong><a href=\"https://www.orangetree.in/rhombus-table-lamp-black-ot0075t\">Rhombus Table Lamp Black</a>&nbsp;</strong>from Orange Tree is a perfect table lamp option to opt for your living room. It will not only radiate brightness in your cosy corners but also enhance the appearance of your living space.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/rhombus-table-lamp-black-ot0075t\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Rhombus-Table-Lamp-Black.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Try out clustered hanging lights</p>\r\n\r\n<p>Hanging lights never went out of trend. But clustered&nbsp;<strong>hanging lights for living room</strong>&nbsp;are even more trending nowadays. And they work as a great source of light for rooms having no ceiling lights. Clustered hanging lights are a great addition to your home decor range that can uplift the glamour of spaces above large furniture pieces, beds, and couches. You can also hang them near the window or doors of your room and accentuate the beauty of these elements.</p>\r\n\r\n<p>However, these clustered hanging lights are available in different colours and sizes at affordable prices. So, choose those that can blend well with your wall colour and interior decor, brightening up the entire room.</p>\r\n\r\n<p>If you have a large living room and want to give it a dreamy bohemian look, you must opt for a simple yet elegant clustered hanging light. The&nbsp;<strong><a href=\"https://www.orangetree.in/linx-hanging-lamp-cluster-ot0049w\">Linx Hanging Lamp Cluster</a></strong>&nbsp;from Orange Tree is a beautifully crafted sphere-shaped hanging light that can offer adequate interior lighting while rendering an aesthetic touch to your living space.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/linx-hanging-lamp-cluster-ot0049w\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Linx-Hanging-Lamp-Cluster.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Final words</p>\r\n\r\n<p>Lighting enables us to set the ambience and vibe of our room. Thus, if you are looking for effective lighting solutions for your living space with no overhead lights, it can be as simple as 1,2,3 with the above-mentioned ideas.</p>\r\n\r\n<p>So now, the challenge of brightening up your space with no ceiling lights shouldn&rsquo;t keep you from leasing your dream apartment. Instead, consider it as a golden opportunity to explore your creative skills in installing decorative lights in your room without the requirement of expensive add-ons and complex electrical wiring.</p>\r\n',	'assets/uploads/blog/blog20220127060100.jpg',	'49.205.212.237',	'2022-01-27 18:17:00',	19,	1),
(4,	'COLLECTIONS 18 DEC, 2021',	'Follow 5 Easy Steps to Make a Cosy Bedroom',	'There is nothing more important than having a comfortable bedroom in your home where you can feel warm and safe, isolated from all the chaos of the world. Bedrooms are like cocoons that offer quality hibernation and utmost relaxation, giving mental peace for a better living. So, it’s worth adding some wooden bedroom furniture pieces to make your inner sanctum a warm, cosy, and restful space to retreat.  Whether you are thinking of creating an area where you can watch TV, read books, get a better night’s sleep, or just snuggle up peacefully, no place is better to do these things than a warm and comfy bedroom. So, here are the 5 steps to follow if you want to find yourself in a cosy bedroom.',	'<p>Cosy up the bed to enhance your comfort level</p>\r\n\r\n<p>The bed is the best part of any bedroom. However, you must opt for the right-sized bed to complement it perfectly with your bedroom space. If you have a large room, it&rsquo;s suggested to go for king-size beds with storage. On the contrary, if your room dimensions are moderate, install a queen-sized bed like the&nbsp;<strong><a href=\"https://www.orangetree.in/paolo-queen-bed-ot2304i\">Paolo Queen Bed</a></strong>&nbsp;from Orange Tree.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/paolo-queen-bed-ot2304i\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Paolo-Bed.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Now, to keep yourself warmer and enhance your comfortability, you can place soft mushy blankets underneath the bed&rsquo;s comforter. Moreover, you can add pillows and fuzzy throw blankets for a pleasant feel and cosy look of the bed you would love to sink into. In case you want extra warmth, consider utilizing a heated mattress pad or flannel sheets.</p>\r\n\r\n<p>Add a woody touch to your bedroom to infuse warmth</p>\r\n\r\n<p>Whether your bedroom is oversize or tiny, adding a touch of wood to the room&rsquo;s walls would be an ideal way to invigorate a natural sense of warmth and classic beauty. It can be as intrinsic as limited oak panelling or as simple as a board cladding.</p>\r\n\r\n<p>Besides, you can also incorporate wood accents and furnishings to the space to generate that sense of cosiness. So, in this case, you can opt for the&nbsp;<strong><a href=\"https://www.orangetree.in/bicasso-chest-of-drawer-ot2002e\">Bicasso Chest of Drawer</a></strong>&nbsp;from Orange Tree made of Sheesham wood with an American walnut finish. Such wooden cabinet drawers will not only enhance the look of your room but also organize the bedroom space optimally.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/bicasso-chest-of-drawer-ot2002e\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Bicasso-Chest-of-Drawer.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Invigorate aestheticism with a reading nook or second seating area</p>\r\n\r\n<p>Do you have a large bedroom? If yes, then even after equipping a primary seating arrangement, there must be an unusual corner left unfilled, right! But worry no more! By buying bedroom furniture online and giving extra effort into this unused space, you can transform it into a secondary seating area and make it your favourite hangout place. So, are you wondering how?</p>\r\n\r\n<p>If you are a novel lover, equip a single fabulous armchair and form a mini-library with floor-to-ceiling shelves. On the other hand, if you want to make it a small gossiping area, set up a window chair, along with a pair of slipper seats and a small coffee table. For the latter case,&nbsp;<a href=\"https://www.orangetree.in/paolo-chair-ot2356b\"><strong>Paolo</strong>&nbsp;<strong>Chair</strong></a><strong>&nbsp;</strong>from Orange Tree would be a perfect inclusion to opt for.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/paolo-chair-ot2356b\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Paolo-Chair.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Incorporate bedside tables to make your bedroom look more ornamental</p>\r\n\r\n<p>Bedside tables have lately developed as a functional furniture piece with redefined purpose and identity going beyond a mere home decor item to bring forth an aesthetic ambience. It serves to be a landing pad for your early morning and night-time necessities. Right from the alarm clock to your mobile phone, from a water bottle to medicines, from the table lamp to indoor plants, a wooden bedside table is capable of holding all items, oozing with a unique personality.</p>\r\n\r\n<p>So, get a bedroom side table today if you want to make the best use of its functionality while adding a charm to your entire room. The&nbsp;<strong><a href=\"https://www.orangetree.in/ipiano-bedside-table-ot2051c\">Ipiano Bedside Table</a></strong>&nbsp;from Orange Tree will be an exquisite choice for your bedroom.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/ipiano-bedside-table-ot2051c\"><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Ipiano-Bedside-Table.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Embellish your bedroom with a dresser to flaunt your beauty</p>\r\n\r\n<p>Last but not least, your bedroom will remain incomplete without a makeup dresser table. To add a vintage touch to your bedroom and make it cosier, it is essential to incorporate a stylish dresser that flawlessly complements the decor range. You can easily place them next to your bed as a nightstand substitute.</p>\r\n\r\n<p>Nevertheless, dressers are very versatile and multi-functional. Most of them come with a mirror, a broader tabletop area, and in-built drawers for easy space organization and multi-faceted uses. So, accentuate the extraordinary delight of your cosy bedroom with a simple yet functional dressing table like the&nbsp;<strong><a href=\"https://www.orangetree.in/metric-dresser-ot2002u\">Metric Dresser</a></strong>&nbsp;from Orange Tree.</p>\r\n\r\n<p><img alt=\"\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/12/Metric-Dresser.jpg\" style=\"height:320px; width:512px\" /></p>\r\n\r\n<p><a href=\"https://www.orangetree.in/metric-dresser-ot2002u\">https://www.orangetree.in/metric-dresser-ot2002u</a></p>\r\n\r\n<p>Final thoughts</p>\r\n\r\n<p>Well, when it comes to being cosy at home, preferences vary. Thus, you must invest more time and effort while planning to make a comfy bedroom.</p>\r\n\r\n<p>However, you can easily follow these 5 basic steps to start with renovating your bedroom and transforming it into a cosier one. Henceforth, based on your choices, you can keep adding more wooden bedroom furniture sets into the room, leveraging the overall beauty and glamour of your home.</p>\r\n',	'assets/uploads/blog/blog20220127060134.jpg',	'49.205.212.237',	'2022-01-27 18:18:34',	19,	1),
(5,	'SPACES & PLACES 29 NOV, 2021',	'5 Ways to Light Up Your Mood and Escalate Your Well-Being at Home',	'Well, our moods and actions are highly influenced by the lighting around us. While a gloomy set-up can ruin your mood at its worst, bright and jovial lighting can shine your days and let you kick off all the blues. The lighting arrangement at your home can have an effective impact on your mind and well-being.  The adequate luminosity of decorative lights has an inspiring effect on your mood and productivity, which you must not ignore while designing your rooms’ interior. Thus, your home, the abode of peace, must have an effective lighting arrangement that will accentuate the entire rapture of your nest. Here is how you can create a pleasant set-up with designer lights in the 5 most beautiful ways to uplift your mood and maintain your well-being.',	'<h3>Choose lustrous accent lighting for in-depth styling</h3>\r\n\r\n<p>Do you believe in the supremacy of showcasing positive photos, fixtures, or showpieces at your home? Do you get a morale boost and mental recharge after looking at a vibrant and positive painting? Well, then adding a bit of luminosity to it with an extensive array of home decor lamps can gracefully help you.</p>\r\n\r\n<p>Accent lighting aims to accentuate particular features at your home and bolster a visual interest in a specific area or on an object. Considering featured lighting for an important area can instil a positive and soulful vibe to your home&rsquo;s elegance, charging up your mood any time. So, for this purpose, the&nbsp;<strong><a href=\"https://www.orangetree.in/klimt-wall-lamp-ot0066l\">Klimt Wall Lamp</a></strong>&nbsp;from Orange Tree can be a gorgeous addition.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/klimt-wall-lamp-ot0066l\"><img alt=\"Klimt Wall Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Klimt-Wall-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Klimt Wall Lamp</p>\r\n\r\n<h3>Opt for surface lighting to kick off the gloominess away&nbsp;</h3>\r\n\r\n<p>Did you know that your bedroom can have a significant impact on alleviating your mind? Hence, this place must be equipped with soothing&nbsp;<strong>decorative lamps&nbsp;</strong>to give your mind and body a healing and relaxing effect every time you seek some solace after a long day.</p>\r\n\r\n<p>To improve the ecstasy of your bedroom, it is always a good idea to opt for surface lighting that will give your ambience an extensive charm. But, along with it, you can also place a classy table lamp on your bedside table to facilitate a cosy and soothing light setup. And, the&nbsp;<strong><a href=\"https://www.orangetree.in/spindle-table-lamp-ot0016l\">Spindle Table Lamp</a></strong>&nbsp;from Orange Tree can extraordinarily create this beauty.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/spindle-table-lamp-ot0016l\"><img alt=\"Spindle Table Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Spindle-Table-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Spindle Table Lamp</p>\r\n\r\n<h3>Create adequate brightness in your living room with ambient lighting</h3>\r\n\r\n<p>Your emotions are better felt under bright lighting. Also, bright&nbsp;<strong>home decor lamps</strong>&nbsp;in your living room can kick off the monotony of darkness and dullness, which is highly effective to give your mood a soulful escalation.</p>\r\n\r\n<p>To give your living room an extra addition of aristocracy and create a cheerful beauty, you must choose a lighting arrangement that prioritizes natural daylight yet creates a lasting effect. Thus, the&nbsp;<strong><a href=\"https://www.orangetree.in/bud-floor-lamp-black-ot0069y\">Bud Floor Lamp Black</a></strong>&nbsp;manufactured by Orange Tree can help you create ambient lighting in your room in a worthwhile manner.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/bud-floor-lamp-black-ot0069y\"><img alt=\"Bud Floor Lamp Black\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Bud-Floor-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Bud Floor Lamp Black</p>\r\n\r\n<h3>Go for some ornamentation</h3>\r\n\r\n<p>The more you add to your lighting set-up, the more it will help you cheer up your mood and health. So, if you add some extra ornamentations with pendant lamps or&nbsp;<strong><a href=\"https://www.orangetree.in/lighting/hanging-lamps\">hanging lights for living room</a></strong>, it will look more alluring.</p>\r\n\r\n<p>Pendant lights hanging down the ceiling with a chain or cord from certain areas of your home like the sofa corner in the living room, above the dining table in the dining area, above the kitchen island in your cooking area, etc., can create brilliant ornamentation to your home that looks flamboyant. Hence, the&nbsp;<strong><a href=\"https://www.orangetree.in/zulu-triangle-weave-hanging-lamp-ot0064s\">Zulu Triangle Weave Hanging Lamp</a></strong>&nbsp;by Orange Tree can be a spectacular way to add some accentuation to every corner of your room.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/zulu-triangle-weave-hanging-lamp-ot0064s\"><img alt=\"Zulu Triangle Weave Hanging Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Zulu-Triangle-Weave-Hanging-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Zulu Triangle Weave Hanging Lamp</p>\r\n\r\n<h3>Make a layer lighting addition with floor lighting</h3>\r\n\r\n<p>To facilitate a positive atmosphere in your home, you can go on with the layer lighting style. Apart from incorporating hanging and ceiling lights in your home, you can create an in-depth accentuation with floor lighting.</p>\r\n\r\n<p><strong><a href=\"https://www.orangetree.in/lighting/floor-lamps\">Floor lamps</a></strong>&nbsp;are the best ways to escalate brightness at the base area of your room. It adds an extensive flamboyance to your space that looks unique and spectacular in every aspect. The&nbsp;<strong><a href=\"https://www.orangetree.in/maurya-floor-ot0059e\">Maurya Floor Lamp</a></strong>&nbsp;from Orange Tree can add extravagant glamour to enhance the overall luminosity of your home.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/maurya-floor-ot0059e\"><img alt=\"Maurya Floor Lamp\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Maurya-Floor-Lamp.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Maurya Floor Lamp</p>\r\n\r\n<h3>End Thoughts</h3>\r\n\r\n<p>Invigorating positivity and luminosity in your home is a no-brainer when you know how to add&nbsp;<strong><a href=\"https://www.orangetree.in/lighting\">designer lights</a></strong>&nbsp;smartly. Adding effective lighting to various corners in an aesthetic way lets you create your realm of beauty and cheerfulness, which further help you stay light-minded and joyous all the time.</p>\r\n',	'assets/uploads/blog/blog20220127060144.jpg',	'49.205.212.237',	'2022-01-27 18:19:44',	19,	1),
(6,	'INNOVATION 21 NOV, 2021',	'How Do You Pick the Right Coffee Table for Your Living Room?',	'Coffee tables in living rooms hold a special place in everyone’s heart. Endless stories and gossips build up there while sipping a cup of coffee. From morning relaxation with your newspaper over a cup of tea to evening leisure and chitchats over a cup of coffee, anything is incomplete without this omnipresent living room furniture online.  So, are you looking for one? Well, furnishing your living room luxuriously will give an added upliftment of elegance to your interior, making it look more compact. So, let us share some effective tips on choosing the best centre tables for living room. Here, have a look.',	'<h3>Consider the height that ushers compatibility&nbsp;</h3>\r\n\r\n<p>While focusing on your living room decoration, you must keep one thing in mind that the height of your coffee table must go with your other furnishings. The best appeal is created when you pick a coffee table of a height lower than your sofa seat.</p>\r\n\r\n<p>The rule of thumb is to opt for such&nbsp;<strong>centre tables for living room</strong>&nbsp;that are 1-2-inches lower than your sofa seat. The proper height coordination lets you bolster a perfect harmony over your interior decoration. A nice heightened coffee table like the&nbsp;<strong><a href=\"https://www.orangetree.in/metric-coffee-table-ot2151i\">Metric Coffee Table</a></strong>&nbsp;by Orange Tree can go brilliantly with your sofa set.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/metric-coffee-table-ot2151i\"><img alt=\"Metric Coffee Table\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Metric-Coffee-Table.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Metric Coffee Table</p>\r\n\r\n<h3>Balance it up to escalate the overall appeal</h3>\r\n\r\n<p>While you pick a coffee table, you must keep the appearance and style of your sofa in mind. A coffee table completes the puzzle of an incomplete living room decor.</p>\r\n\r\n<p>A nice coffee table works more like an accentuation to the rapture of your comfy sofa by creating the right balance in styling. Thus, try to make inbound coordination of colour, style, and material between your coffee table and sofa set.</p>\r\n\r\n<p>For instance, if your living room decor flaunts a wooden sofa, you can add a splendiferous cohesiveness by choosing a wooden coffee table. So, picking the&nbsp;<strong><a href=\"https://www.orangetree.in/yoho-coffee-table-ot2152r\">Yoho Coffee Table</a></strong>&nbsp;from Orange Tree can help you create such a warm and cosy appeal effortlessly.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/yoho-coffee-table-ot2152r\"><img alt=\"Yoho Coffee Table\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Yoho-Coffee-Table.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Yoho Coffee Table</p>\r\n\r\n<h3>Choose the right material</h3>\r\n\r\n<p>The material of your&nbsp;<a href=\"https://www.orangetree.in/living/coffee-tables\">coffee table online India</a>&nbsp;not only has an impeccable power to invigorate an alluring appeal to your home decor, but it also renders to the durability and longevity of your furniture. Thus, you need to be very specific while choosing the material for your coffee table.</p>\r\n\r\n<p>If you want to flaunt a minimalistic yet catchy design, a chic glass table can look mesmerizing. So, to create such an alluring appearance, you can easily go for the&nbsp;<strong><a href=\"https://www.orangetree.in/paolo-coffee-table-ot2152v\">Paolo Coffee Table</a></strong>&nbsp;by Orange Tree that looks gorgeous. But, on the other hand, if you want to create a trendy metallic and millennial design, a metallic table will add an explicit aura to your room.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/paolo-coffee-table-ot2152v\"><img alt=\"Paolo Coffee Table\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Paolo-Coffee-Table.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Paolo Coffee Table</p>\r\n\r\n<p>Similarly, for a classic and sober charm, a wooden appeal would be the best. Wooden tables render a solid and compact outlook by adding completeness to your home decor, which looks fantastic in every bit.</p>\r\n\r\n<h3>Let the style reign over</h3>\r\n\r\n<p>Are you feeling that something is missing out in your living room decor? If yes, then the answer is a stylish&nbsp;<strong>wooden centre table for living room</strong>. Incorporating a coffee table in your decor range will add a quick glamour that will uplift the overall charm of your room instantaneously.</p>\r\n\r\n<p>However, while selecting the style, make sure it syncs well with your rooms&rsquo; decoration.&nbsp; From the colour of your walls to the furniture pieces that complement your room&rsquo;s charm, everything should come under consideration to create a spell-binding look in your interior. A classy, clean style like the&nbsp;<strong><a href=\"https://www.orangetree.in/throne-coffee-teble-set-of-2-ot2151m\">Throne Coffee Table</a></strong>&nbsp;from Orange Tree can add bolstering elegance to your home.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/throne-coffee-teble-set-of-2-ot2151m\"><img alt=\"Throne Coffee Table\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Throne-Coffee-Table.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Throne Coffee Table</p>\r\n\r\n<h3>Pick colours that brighten up</h3>\r\n\r\n<p>The look and feel of your living room are highly influenced by the colour of your furnishing elements. Hence, colour should always fall in your consideration list whenever you think of getting yourself a stunning coffee table.</p>\r\n\r\n<p>Whether you want to incorporate a pop-coloured table to increase the brightness of your room or add a classy wooden shade to render a lustrous elegance, either of them will do well to bring about a soigne charm to your interior. So, a creatively designed dark-shaded table like the&nbsp;<strong><a href=\"https://www.orangetree.in/barcelona-coffee-table-ot2151e\">Barcelona Coffee Table</a></strong>&nbsp;from Orange Tree will look absolutely attractive in your living room corner.</p>\r\n\r\n<p><a href=\"https://www.orangetree.in/barcelona-coffee-table-ot2151e\"><img alt=\"Barcelona Coffee Table\" src=\"https://www.orangetree.in/blog/wp-content/uploads/2021/11/Barcelona-Coffee-Table.jpg\" style=\"height:320px; width:512px\" /></a></p>\r\n\r\n<p>Barcelona Coffee Table</p>\r\n\r\n<h3>Conclusion</h3>\r\n\r\n<p>The appearance of your living room can be enhanced to a higher level of excellency by adding an astonishing range of furniture pieces. And coffee tables are one such type of furniture that are explicitly made to complete the look of your living room. So, when you buy&nbsp;<a href=\"https://www.orangetree.in/living/coffee-tables\">coffee tables online</a>, make sure to consider the tips mentioned above to create a breath-taking and appealing look in your interior.</p>\r\n',	'assets/uploads/blog/blog20220127060105.jpg',	'49.205.212.237',	'2022-01-27 18:21:05',	19,	1);

DROP TABLE IF EXISTS `tbl_cart`;
CREATE TABLE `tbl_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `abandon` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_cart` (`id`, `user_id`, `product_id`, `quantity`, `ip`, `date`, `abandon`) VALUES
(14,	NULL,	1,	'1',	'223.190.5.247',	'2022-01-29 12:36:59',	0),
(15,	3,	12,	'4',	'49.205.213.10',	'2022-02-02 16:52:09',	0),
(17,	3,	9,	'1',	'49.205.213.10',	'2022-02-02 18:37:54',	0),
(23,	4,	3,	'1',	'49.204.165.21',	'2022-06-02 16:07:08',	0);

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryname` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `is_active` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_category` (`id`, `categoryname`, `image`, `image2`, `url`, `date`, `is_active`, `added_by`) VALUES
(32,	'New',	'assets/uploads/category/category120211230031225.jpg',	'assets/uploads/category/category120211230031234.jpg',	'New',	'2021-10-07 11:46:50',	1,	19),
(33,	'Lighting',	'assets/uploads/category/category20220127050158.jpg',	'assets/uploads/category/category120220127050158.jpg',	'Lighting',	'2021-10-07 11:49:24',	1,	19),
(34,	'Decor',	'assets/uploads/category/category20220127050111.jpg',	'assets/uploads/category/category120220127050111.jpg',	'Decor',	'2021-10-07 15:09:05',	1,	19),
(37,	'Living',	'assets/uploads/category/category20220127050136.jpg',	'assets/uploads/category/category120220127050136.jpg',	'Living',	'2021-11-09 10:51:38',	1,	19),
(38,	'Dining',	'assets/uploads/category/category20220125090138.jpeg',	'assets/uploads/category/category120220125090138.jpeg',	'Dining',	'2022-01-25 15:26:38',	1,	19),
(39,	'Bedroom',	'assets/uploads/category/category20220127050107.jpg',	'assets/uploads/category/category120220127050107.jpg',	'Bedroom',	'2022-01-25 15:28:53',	1,	19),
(40,	'Sale',	'assets/uploads/category/category20220125090134.jpeg',	'assets/uploads/category/category120220125090134.jpeg',	'Sale',	'2022-01-25 15:29:34',	1,	19);

DROP TABLE IF EXISTS `tbl_corporate_banner`;
CREATE TABLE `tbl_corporate_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_corporate_banner` (`id`, `image`, `is_active`, `date`, `ip`, `added_by`) VALUES
(1,	'assets/uploads/corporate_banner/corporate20220131100139.jpg',	1,	'2022-01-31 10:52:39',	'49.205.212.71',	'19');

DROP TABLE IF EXISTS `tbl_corporate_brochers`;
CREATE TABLE `tbl_corporate_brochers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_corporate_brochers` (`id`, `title`, `file`, `image`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	NULL,	'assets/uploads/corporate_brochers/corporate_brochers20220131100138.pdf',	'assets/uploads/corporate_brochers/corporate_brochers20220131100138.jpg',	'49.205.212.71',	'2022-01-31 10:57:38',	19,	1),
(2,	NULL,	'assets/uploads/corporate_brochers/corporate_brochers20220131100153.pdf',	'assets/uploads/corporate_brochers/corporate_brochers20220131100153.jpg',	'49.205.212.71',	'2022-01-31 10:57:53',	19,	1);

DROP TABLE IF EXISTS `tbl_corporate_orders`;
CREATE TABLE `tbl_corporate_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_corporate_orders` (`id`, `name`, `email`, `c_name`, `phone`, `message`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `ip`, `date`) VALUES
(1,	'prakash',	'deep@gmail.com',	'file testing',	'1231231231',	'testing that corporate order shows or not',	'assets/uploads/corporate_orders/image120220128100154.jpg',	'assets/uploads/corporate_orders/image220220128100154.jpg',	'',	'',	'',	'',	'49.205.212.237',	'2022-01-28 10:52:54');

DROP TABLE IF EXISTS `tbl_coupancode`;
CREATE TABLE `tbl_coupancode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `expdate` varchar(100) DEFAULT NULL,
  `minorder` varchar(100) DEFAULT NULL,
  `giftpercent` varchar(100) DEFAULT NULL,
  `maxorder` varchar(100) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_coupancode` (`id`, `name`, `expdate`, `minorder`, `giftpercent`, `maxorder`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'FINE350',	'2021-10-20',	'100',	'5',	'10',	'::1',	'2021-10-05 11:08:54',	19,	1),
(6,	'HELLO',	'2022-12-30',	'1200',	'10',	'1000',	'::1',	'2021-12-24 13:40:13',	19,	1);

DROP TABLE IF EXISTS `tbl_custom_banner`;
CREATE TABLE `tbl_custom_banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_custom_banner` (`id`, `image`, `is_active`, `date`, `ip`, `added_by`) VALUES
(1,	'assets/uploads/custom_banner/custom20220131100147.jpg',	1,	'2022-01-31 10:55:47',	'49.205.212.71',	'19');

DROP TABLE IF EXISTS `tbl_custom_brochers`;
CREATE TABLE `tbl_custom_brochers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_custom_brochers` (`id`, `title`, `file`, `image`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	NULL,	'assets/uploads/custom_brochers/custom_brochers20220131100121.pdf',	'assets/uploads/custom_brochers/custom_brochers20220131100120.jpg',	'49.205.212.71',	'2022-01-31 10:52:21',	19,	1),
(2,	NULL,	'assets/uploads/custom_brochers/custom_brochers20220131100142.pdf',	'assets/uploads/custom_brochers/custom_brochers20220131100142.jpg',	'49.205.212.71',	'2022-01-31 10:56:42',	19,	1);

DROP TABLE IF EXISTS `tbl_custom_orders`;
CREATE TABLE `tbl_custom_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `c_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_custom_orders` (`id`, `name`, `email`, `c_name`, `phone`, `message`, `ip`, `date`) VALUES
(1,	'deep',	'prakash@gmail.com',	'tedsting',	'6367373287',	'testing thats custom order show or not',	'49.205.212.237',	'2022-01-28 10:54:09');

DROP TABLE IF EXISTS `tbl_discount_percentage`;
CREATE TABLE `tbl_discount_percentage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage` varchar(255) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `added_by` varchar(255) DEFAULT NULL,
  `is_active` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_discount_percentage` (`id`, `percentage`, `ip`, `added_by`, `is_active`, `date`) VALUES
(1,	'10',	'::1',	'19',	'1',	'2022-01-03 16:51:41');

DROP TABLE IF EXISTS `tbl_forgot_pass`;
CREATE TABLE `tbl_forgot_pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `txn_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_forgot_pass` (`id`, `user_id`, `txn_id`, `status`, `ip`, `date`) VALUES
(1,	4,	'D6VH8v',	0,	'49.204.165.21',	'2022-06-02 15:59:41');

DROP TABLE IF EXISTS `tbl_image_two`;
CREATE TABLE `tbl_image_two` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_first` varchar(100) DEFAULT NULL,
  `heading_first` varchar(1000) DEFAULT NULL,
  `image_two` varchar(100) DEFAULT NULL,
  `heading_two` varchar(1000) DEFAULT NULL,
  `link_first` varchar(100) DEFAULT NULL,
  `link_second` varchar(100) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `ip` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_image_two` (`id`, `image_first`, `heading_first`, `image_two`, `heading_two`, `link_first`, `link_second`, `is_active`, `added_by`, `date`, `ip`) VALUES
(2,	'assets/uploads/image_first/image_first20220129060129.jpg',	'Latest in furniture',	'assets/uploads/image_two/image_two20211230021207.jpg',	'new testing 21',	'#',	'#',	1,	19,	'2021-12-23 12:38:16',	'::1');

DROP TABLE IF EXISTS `tbl_mobile_slider`;
CREATE TABLE `tbl_mobile_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_mobile_slider` (`id`, `image`, `link`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'assets/uploads/mobile_slider/mobile_slider20220130040100.jpg',	'#',	'::1',	'2022-01-30 16:06:00',	19,	1),
(2,	'assets/uploads/mobile_slider/mobile_slider20220130040112.jpg',	'#',	'::1',	'2022-01-30 16:06:12',	19,	1),
(3,	'assets/uploads/mobile_slider/mobile_slider20220130040122.jpg',	'#',	'::1',	'2022-01-30 16:06:22',	19,	1);

DROP TABLE IF EXISTS `tbl_newsletter`;
CREATE TABLE `tbl_newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_newsletter` (`id`, `email`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'vikas@gmail.com',	'::1',	'2021-12-24 15:17:25',	NULL,	1),
(2,	'vikas@gmail.com',	'::1',	'2021-12-24 15:18:46',	NULL,	1),
(3,	'viaks@gmail.com',	'::1',	'2021-12-24 15:22:59',	NULL,	1),
(4,	'ghgghfh@fhhfh.djdj',	'49.205.212.237',	'2022-01-27 12:09:48',	NULL,	1),
(5,	'gest@gaks.cjx',	'49.205.212.237',	'2022-01-27 15:22:30',	NULL,	1),
(6,	'newsletter@gmail.com',	'49.205.212.237',	'2022-01-27 15:23:24',	NULL,	1),
(7,	'bharat@fineoutput.website',	'49.205.212.71',	'2022-01-31 11:00:20',	19,	1),
(8,	'jatnarendra2019jpr@gmail.com',	'49.204.165.171',	'2022-06-02 10:48:59',	NULL,	1);

DROP TABLE IF EXISTS `tbl_order1`;
CREATE TABLE `tbl_order1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `guest_mode` int(11) NOT NULL DEFAULT '0',
  `promocode_id` varchar(255) DEFAULT NULL,
  `p_discount` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `final_amount` int(11) DEFAULT NULL,
  `payment_type` int(11) DEFAULT NULL COMMENT '1 for COD , 2 for online payment',
  `payment_status` int(11) DEFAULT NULL COMMENT '0 for pending , 1 for succeed',
  `order_status` int(11) DEFAULT NULL COMMENT '1 for orderPlaced , 2 for orderConfirmed , 3 for orderDispatched , 4 for orderDelivered , 5 for cancel',
  `delivery_charge` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `remarks` varchar(500) DEFAULT NULL,
  `tracking_url` varchar(500) DEFAULT NULL,
  `tracking_no` varchar(500) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_order1` (`id`, `user_id`, `guest_mode`, `promocode_id`, `p_discount`, `total_amount`, `final_amount`, `payment_type`, `payment_status`, `order_status`, `delivery_charge`, `name`, `phone`, `pincode`, `email`, `address`, `txnid`, `remarks`, `tracking_url`, `tracking_no`, `ip`, `date`) VALUES
(1,	3,	0,	'',	'',	'3200',	4250,	NULL,	0,	0,	'50',	'piyush joshi',	'8619538167',	'302019',	'hr.fineoutput@gmail.com',	'302019',	NULL,	NULL,	NULL,	NULL,	'49.205.213.10',	'2022-02-02 16:55:21'),
(2,	NULL,	0,	NULL,	NULL,	'92000',	92050,	NULL,	0,	0,	'50',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'157.38.71.121',	'2022-02-06 01:17:10'),
(3,	1,	0,	NULL,	NULL,	'286000',	286050,	NULL,	0,	0,	'50',	'test',	'9999999999',	'302022',	'test@gmail.com',	'302022',	NULL,	NULL,	NULL,	NULL,	'49.205.213.162',	'2022-02-18 15:29:49'),
(4,	1,	0,	NULL,	NULL,	'311000',	311050,	NULL,	0,	0,	'50',	'test',	'9999999999',	'302022',	'test@gmail.com',	'302022',	NULL,	NULL,	NULL,	NULL,	'49.205.213.162',	'2022-02-19 12:01:21'),
(5,	1,	0,	NULL,	NULL,	'25050',	25100,	NULL,	0,	0,	'50',	'test',	'9999999999',	'302022',	'test@gmail.com',	'302022',	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-23 11:15:19'),
(6,	1,	0,	NULL,	NULL,	'25850',	25850,	NULL,	0,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-23 18:41:31'),
(7,	1,	0,	NULL,	NULL,	'50',	100,	NULL,	1,	5,	'50',	'test',	'9999999999',	'302022',	'test@gmail.com',	'302022',	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-23 18:43:13'),
(8,	1,	0,	NULL,	NULL,	'50',	100,	NULL,	1,	1,	'50',	'test',	'9999999999',	'302019',	'test@gmail.com',	'302019',	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-24 10:18:20'),
(9,	1,	0,	NULL,	NULL,	'125000',	125000,	NULL,	0,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-24 10:31:00'),
(10,	1,	0,	NULL,	NULL,	'263000',	263000,	NULL,	1,	1,	'0',	'test',	'9999999999',	'302019',	'test@gmail.com',	'302019',	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-24 14:50:50'),
(11,	NULL,	1,	'6',	'1000',	'10000',	9000,	NULL,	1,	1,	'0',	'Nitesh',	'1232323424',	'302022',	'xyz@gmail.com',	'302022',	NULL,	NULL,	NULL,	NULL,	'49.205.213.122',	'2022-02-25 12:44:26'),
(12,	4,	0,	NULL,	NULL,	'1800',	1800,	NULL,	1,	5,	'0',	'piyush',	'9999999999',	'232213',	'office.fineoutput@gmail.com',	'232213',	NULL,	NULL,	NULL,	NULL,	'49.204.165.171',	'2022-06-02 11:01:38'),
(13,	4,	0,	NULL,	NULL,	'30000',	30000,	NULL,	0,	0,	'0',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'49.204.165.171',	'2022-06-02 11:20:39'),
(14,	4,	0,	NULL,	NULL,	'20050',	20050,	NULL,	1,	1,	'0',	'piyush',	'9999999999',	'232213',	'office.fineoutput@gmail.com',	'232213',	NULL,	NULL,	NULL,	NULL,	'49.204.165.21',	'2022-06-02 16:03:58'),
(15,	1,	0,	NULL,	NULL,	'10000',	10000,	NULL,	1,	1,	'0',	'nmm,bnm',	'7976362088',	'302019',	'pawan@gmail.com',	'302019',	NULL,	NULL,	NULL,	NULL,	'49.204.165.21',	'2022-06-02 17:07:54');

DROP TABLE IF EXISTS `tbl_order2`;
CREATE TABLE `tbl_order2` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `main_id` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `mrp` varchar(255) DEFAULT NULL,
  `selling_price` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `tbl_order2` (`id`, `main_id`, `product_id`, `quantity`, `mrp`, `selling_price`, `total_amount`, `date`) VALUES
(1,	'1',	12,	'4',	'1000',	'800',	'3200',	'2022-02-02 16:53:51'),
(2,	'2',	11,	'2',	'50000',	'46000',	'92000',	'2022-02-06 01:17:10'),
(3,	'3',	5,	'1',	'15000',	'10000',	'10000',	'2022-02-18 15:29:19'),
(4,	'3',	11,	'6',	'50000',	'46000',	'276000',	'2022-02-18 15:29:19'),
(5,	'4',	5,	'1',	'15000',	'10000',	'10000',	'2022-02-19 12:01:12'),
(6,	'4',	11,	'6',	'50000',	'46000',	'276000',	'2022-02-19 12:01:12'),
(7,	'4',	10,	'1',	'27000',	'25000',	'25000',	'2022-02-19 12:01:12'),
(8,	'5',	10,	'1',	'27000',	'25000',	'25000',	'2022-02-23 11:15:13'),
(9,	'5',	3,	'1',	'100',	'50',	'50',	'2022-02-23 11:15:13'),
(10,	'6',	10,	'1',	'27000',	'25000',	'25000',	'2022-02-23 18:41:31'),
(11,	'6',	3,	'1',	'100',	'50',	'50',	'2022-02-23 18:41:31'),
(12,	'6',	12,	'1',	'1000',	'800',	'800',	'2022-02-23 18:41:31'),
(13,	'7',	3,	'1',	'100',	'50',	'50',	'2022-02-23 18:42:26'),
(14,	'8',	3,	'1',	'100',	'50',	'50',	'2022-02-24 10:18:04'),
(15,	'9',	10,	'5',	'27000',	'25000',	'125000',	'2022-02-24 10:31:00'),
(16,	'10',	10,	'5',	'27000',	'25000',	'125000',	'2022-02-24 14:50:45'),
(17,	'10',	11,	'3',	'50000',	'46000',	'138000',	'2022-02-24 14:50:45'),
(18,	'11',	7,	'1',	'654656',	'10000',	'10000',	'2022-02-25 12:43:44'),
(19,	'12',	8,	'2',	'750',	'900',	'1800',	'2022-06-02 11:01:16'),
(20,	'13',	5,	'3',	'15000',	'10000',	'30000',	'2022-06-02 11:20:39'),
(21,	'14',	5,	'1',	'15000',	'10000',	'10000',	'2022-06-02 16:03:47'),
(22,	'14',	3,	'1',	'100',	'50',	'50',	'2022-06-02 16:03:47'),
(23,	'14',	7,	'1',	'654656',	'10000',	'10000',	'2022-06-02 16:03:47'),
(24,	'15',	7,	'1',	'654656',	'10000',	'10000',	'2022-06-02 17:07:21');

DROP TABLE IF EXISTS `tbl_pincode`;
CREATE TABLE `tbl_pincode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pincode` varchar(100) DEFAULT NULL,
  `shippingcharge` varchar(100) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_pincode` (`id`, `pincode`, `shippingcharge`, `ip`, `date`, `added_by`, `is_active`) VALUES
(31,	'302016,302017,302019,302022',	'50',	'49.205.212.71',	'2022-01-25 17:18:51',	19,	1),
(32,	'LIG141,LCC171',	'20',	'49.205.212.71',	'2022-01-25 18:01:55',	19,	1),
(33,	'301001,302002,303003,304004,305005',	'150',	'49.205.212.71',	'2022-01-27 11:34:50',	19,	1);

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(250) NOT NULL,
  `is_category` int(11) DEFAULT NULL COMMENT '0 for subcategory, 1for category',
  `category` varchar(255) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `image1` varchar(100) DEFAULT NULL,
  `image2` varchar(100) DEFAULT NULL,
  `image3` varchar(100) DEFAULT NULL,
  `mrp` varchar(100) DEFAULT NULL,
  `selling_price` int(255) DEFAULT NULL,
  `s_description` varchar(3000) DEFAULT NULL,
  `productdescription` varchar(3000) DEFAULT NULL,
  `modelno` varchar(100) DEFAULT NULL,
  `inventory` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `feature` varchar(3000) DEFAULT NULL,
  `careinstruction` varchar(3000) DEFAULT NULL,
  `bestsellerproduct` int(11) DEFAULT NULL,
  `top_ten` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_products` (`id`, `productname`, `is_category`, `category`, `subcategory`, `image`, `image1`, `image2`, `image3`, `mrp`, `selling_price`, `s_description`, `productdescription`, `modelno`, `inventory`, `url`, `ip`, `date`, `added_by`, `is_active`, `feature`, `careinstruction`, `bestsellerproduct`, `top_ten`) VALUES
(1,	'cat',	1,	'[\"34\"]',	' ',	'assets/uploads/products/products20220127110155.jpg',	'assets/uploads/products/products120220129120128.jpg',	'',	'',	'1200',	790,	'<p>trhtry hyyr</p>\r\n',	'<p>dvsds</p>\r\n',	'bdfbdfb',	'97',	'cat',	'::1',	'2021-12-30 15:33:23',	19,	1,	'<p>vsvdsvdv</p>',	'<p>fvbdfbdfbd</p>',	0,	NULL),
(3,	'Paolo Study Table',	0,	'[\"37\",\"33\"]',	'[\"5\",\"6\"]',	'assets/uploads/products/products20220127110120.png',	'assets/uploads/products/products120220127030105.jpg',	'assets/uploads/products/products220220127030105.jpg',	'assets/uploads/products/products320220127030105.jpg',	'100',	50,	'<p>hgyvfghv&nbsp;</p>\r\n',	'<p>dfv</p>\r\n',	'dgd',	'10',	'Paolo-Study-Table',	'::1',	'2021-12-30 15:36:30',	19,	1,	'<p>dgvdg</p>',	'<p>gbfg</p>',	1,	NULL),
(4,	'new1',	0,	'[\"37\"]',	'[\"7\"]',	'assets/uploads/products/products20220127110139.jpg',	'',	'',	'',	'8000',	7000,	'<p>j jhyghy&nbsp;</p>\r\n',	'<p>zxczvzxv</p>\r\n',	'xxcvbxcvvbx',	'99',	'new1',	'::1',	'2021-12-31 15:31:20',	19,	1,	'<p>x xcvxcvx</p>',	'<p>bxcbxcvvbxcvb</p>',	1,	NULL),
(5,	'new2',	0,	'[\"33\",\"37\"]',	'[\"6\",\"7\"]',	'assets/uploads/products/products20220127030150.jpg',	'',	'',	'',	'15000',	10000,	'<p>ref ergf erf re</p>\r\n',	'<p>vxcxcxbx</p>\r\n',	'xbxcvxcvx',	'100',	'new2',	'::1',	'2021-12-31 15:31:53',	19,	1,	'<p>bxcvvbvxcbbvxcvb</p>',	'<p>xbvbxcvbxcvvb</p>',	1,	NULL),
(6,	'test3',	0,	'[\"37\"]',	'[\"7\"]',	'assets/uploads/products/products20220127030108.jpg',	'',	'',	'',	'1000',	900,	'<p>bgff gfbf fdg</p>\r\n',	'<p>gh</p>\r\n',	'gs',	'15',	'test3',	'::1',	'2021-12-31 15:45:51',	19,	1,	'<p>sv</p>',	'<p>sg</p>',	1,	NULL),
(7,	'test4',	0,	'[\"37\",\"33\",\"37\"]',	'[\"5\",\"6\",\"7\"]',	'assets/uploads/products/products20211231031223.jpg',	'',	'',	'',	'654656',	10000,	'<p>&nbsp;fgf fg gfh gf</p>\r\n',	'<p>cs</p>\r\n',	'vbfdb',	'52',	'test4',	'::1',	'2021-12-31 15:48:24',	19,	1,	'<p>cssc</p>',	'<p>cscs</p>',	1,	NULL),
(8,	'test5',	0,	'[\"37\"]',	'[\"5\",\"7\"]',	'assets/uploads/products/products20220127110134.jpg',	'assets/uploads/products/products120220127110134.png',	'',	'',	'750',	900,	'<p>jt yth h t yyth tyh tyh yhtyh tyh thyt th trhg trhgrt gferfwrfwer werkjh gj gjm ggnm g gr,tjggf erfgjpoerfkerk gfjkkgt,glkgfr ,trfkjog .tghjgt h ytrgyhrtm,kgftlmmkl;g;lkgfh g;lg glmjgrt tn&nbsp;</p>\r\n',	'<p>hth</p>\r\n',	'fbdffbdf',	'155',	'test5',	'::1',	'2021-12-31 15:51:08',	19,	1,	'<p>vdfvd</p>',	'<p>dfvbddf</p>',	1,	NULL),
(9,	'Paris hydraulic storage',	0,	'[\"38\"]',	'[\"8\"]',	'assets/uploads/products/products20220125030128.jpeg',	'assets/uploads/products/products120220125030128.jpeg',	'',	'',	'490',	490,	'<p>tertertr 5rt&nbsp; drt</p>\r\n',	'<p>Paolo Venini, one of the leading figures in the production of Murano glass and an important contr',	'SKU - B04',	'10000',	'Paris-hydraulic-storage',	'49.205.212.71',	'2022-01-25 15:36:28',	19,	1,	'<ul style=\"list-style-type:circle\">\r\n	<li>All our products are manufactured using solid wood.</li>\r\n	<li>All the wood used in our furniture is legally sourced.</li>\r\n	<li>Our wood is properly chemically treated and seasoned to avoid any borer issues.</li>\r\n	<li>We maintain moisture content of 8-12% in our wood.</li>\r\n	<li>We always use Hettich and Ebco hardware in our furniture.</li>\r\n	<li>We do not use hard and harmful /Glossy chemical material on woods.</li>\r\n	<li>We use NC lacquer and water-based sealer.</li>\r\n</ul>',	'<ul style=\"list-style-type:circle\">\r\n	<li>METAL CARE: Avoid using harsh chemical cleaners or polishes on your new item, to keep it clean just quick dust with a soft cotton towel or cloth will do the trick and avoid damaging the finish or scratching the surface. Smudges or smears can be removed by using a window cleaner or soft paper towel. Products are made for indoor use only.</li>\r\n	<li>CARE FOR YOUR WOOD: Each piece in our collection is crafted from solid hardwood harvested from responsibly managed forests. Natural variations in the wood grain and coloring are to be expected. In order to keep your product looking at its best follow the following care instructions and avoid direct sunlight.</li>\r\n	<li>CLEANING: Clean with a damp soft cloth only, avoid using harsh chemicals or abrasives as these may damage the surface. Wipe up any spills quickly Use coasters on the dining and coffee tables and avoid direct contact of hot and cold items on the surface.</li>\r\n	<li>MAINTENANCE: Stains ma',	0,	NULL),
(10,	'king size ',	0,	'[\"33\"]',	'[\"6\"]',	'assets/uploads/products/products20220127110113.jpg',	'',	'',	'',	'27000',	25000,	'<p>very good bed</p>\r\n',	'<h2>Things to Consider Before Buying Beds Online</h2>\r\n\r\n<p>With so many bed designs available onlin',	'sku 12',	'9993',	'king-size-',	'49.205.212.237',	'2022-01-27 11:54:13',	19,	1,	'<ul>\r\n	<li><strong>Wood:</strong>&nbsp;You can choose from different types of wood, depending on your needs. The options include particleboard, Sheesham, teak, acacia, mango, rubber, solid, and engineered wood. Be it traditional, transitional, or mid-century decor, wooden beds never fail to add a charm to your bedroom.</li>\r\n	<li><strong>Metal:</strong>&nbsp;Strong, sturdy, and full of patterns, beds made from metal are perfect for adding a touch of elegance to your bedroom. Whether transitional or modern, steel beds or iron beds that feature rod detailing or design are always a go-to option for beautiful bedroom decor.</li>\r\n	<li><strong>Fabric:&nbsp;</strong>Upholstered leatherette or fabric beds secretly shout &quot;luxurious&quot; about your personality. Indeed a true amalgamation of style and comfort, these beds are suitable for contemporary or modern decor.</li>\r\n</ul>',	'<h2>What Is A Queen Size Bed?</h2>\r\n\r\n<p>A bed that is smaller than a king-size but larger than a double bed is a queen-size bed. Queen size beds are ideal for comfortable sleeping of two people.</p>\r\n\r\n<h2>Which Wood Is Best For Bed?</h2>\r\n\r\n<p>Any hardwood such as birch, cherry, ebony, mahogany, maple, teak, oak, and rosewood is best for making beds.</p>',	1,	2),
(11,	'Pink Panther',	0,	'[\"33\"]',	'[\"6\",\"10\"]',	'assets/uploads/products/products20220127110131.jpg',	'assets/uploads/products/products120220127120139.jpg',	'',	'',	'50000',	46000,	'<p>One of our most famous beds is known for the mixture of a traditional look with contemporary feel.</p>\r\n\r\n<p>We all love a little bit of luxury but it need not dig a hole in the pocket.</p>\r\n',	'<p>During the 16th century, beds became more decorative, with much carved work on the bedhead and be',	'sku 02',	'99997',	'Pink-Panther',	'49.205.212.237',	'2022-01-27 11:58:31',	19,	1,	'<p>In any humble bed can come dreams of nobility, of bravery and heart. In any night can be born a knight, a hero of chivalry.</p>',	'<p>When selecting a bed, the nurse should consider the patient&#39;s mobility, overall medical condition, and risk for&nbsp;<strong>pressure ulcer</strong>&nbsp;development. Safety factors should also be considered. Unless a patient is accompanied by a health care professional or other caregiver, the bed should always be placed in its lowest position to reduce the risk of injury from a possible fall.</p>',	1,	3),
(12,	'Bed',	0,	'[\"33\"]',	'[\"6\"]',	'assets/uploads/products/products20220129120156.jpeg',	'',	'',	'',	'1000',	800,	'<p>Trial</p>\r\n',	'<p>Trial</p>\r\n',	'SK-B10',	'100',	'Bed',	'223.190.5.247',	'2022-01-29 12:52:56',	19,	1,	'<p>Trial</p>',	'<p>Trial</p>',	0,	1),
(13,	'bead',	1,	'[\"34\"]',	' ',	'assets/uploads/products/products20220131110139.jpg',	'',	'',	'',	'40000',	35000,	'<p>Taking inspiration from Art Deco, in Prerit Floor Lamp each rounded concentric lines is meticulously hand woven in thin golden wires by extremely skilled artisans of our village. The relative simplicity, planarity, meditative symmetry and unvaried repetition of elements come together to create this piece. The layers within allows light to filter through, creating bright and diffuse illumination highlighting the modern organic shade</p>\r\n',	'<p>Our products are coated with high gloss powder coating, electrophoretic lacquer, and plating. The',	'sl12',	'100',	'bead',	'49.205.212.71',	'2022-01-31 11:02:39',	19,	1,	'<p>Our products are coated with high gloss powder coating, electrophoretic lacquer, and plating. There is pre-treatment done on products to make them rust and dust-free. We are using lead-free and non-hazardous coating on our products. All our electrical fittings are CE approved which are certified by testing labs. Before packing every component of the product is checked and tested as per the end-user. Lamps are meant for indoor use.</p>',	'<p>Avoid using harsh chemical cleaners or polishes on your new item, to keep it clean just quick dust with a soft cotton towel or cloth will do the trick and will avoid damaging the finish or scratching the surface.</p>',	1,	NULL),
(14,	'sale',	1,	'[\"40\"]',	' ',	'assets/uploads/products/products20220202050213.jpg',	'assets/uploads/products/products120220202050213.jpg',	'',	'',	'20000',	15000,	'<p>there&rsquo;s nothing like a good night&rsquo;s sleep, and it&rsquo;s not just your bed that plays a role in the quality of your sleep. The general degree of cleanliness and order are both equally important. What if you could have a bed that also helps you keep your surroundings tidy and well-organised</p>\r\n',	'<p>With our easy pull-up, easy pull-down hydraulic mechanism, you can use ALL the space under the be',	'sk 17u',	'100',	'sale',	'49.205.213.10',	'2022-02-02 17:00:13',	19,	1,	'<p>We use high-strength clamps and joinery techniques specially designed for engineered wood beds. Ergo, no irksome creaks - and you can sleep like a baby, well into adulthood!</p>',	'<p>We use high-strength clamps and joinery techniques specially designed for engineered wood beds. Ergo, no irksome creaks - and you can sleep like a baby, well into adulthood!</p>',	1,	NULL),
(15,	'testing of the product long name what happen ',	1,	'[\"40\"]',	' ',	'assets/uploads/products/products20220202060236.jpg',	'assets/uploads/products/products120220202060236.jpg',	'',	'',	'50000',	25000,	'<p>A bed is&nbsp;<strong>a piece of furniture which is used as a place to sleep, rest, and relax</strong>. Most modern beds consist of a soft, cushioned mattress on a bed frame. The mattress rests either on a solid base, often wood slats, or a sprung base.</p>\r\n',	'<p>dvdvdvd_&amp;home</p>\r\n',	'13434',	'2',	'testing-of-the-product-long-name-what-happen-',	'49.205.213.10',	'2022-02-02 18:56:36',	19,	1,	'<p>The&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ancient_Egypt\">Egyptians</a>&nbsp;had high bedsteads which were ascended by steps, with bolsters or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Pillow\">pillows</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Curtain\">curtains</a>&nbsp;to hang around. The elite of Egyptian society such as its pharaohs and queens even had beds made of wood, sometimes gilded. Often there was a head-rest as well, semi-cylindrical and made of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Rock_(geology)\">stone</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Wood\">wood</a>, or&nbsp;<a href=\"https://en.wikipedia.org/wiki/Metal\">metal</a>. Ancient Assyrians,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Medes\">Medes</a>, and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Persian_people\">Persians</a>&nbsp;had beds of a similar kind, and frequently decorated their furniture with inlays or appliques of metal,&nbsp;</p>',	'<p>n the 12th century, luxury increased and bedsteads were made of wood much decorated with inlaid, carved, and painted ornamentation. They also used folding beds, which served as couches by day and had cushions covered with silk laid upon&nbsp;<a href=\"https://en.wikipedia.org/wiki/Leather\">leather</a>. At night a linen sheet was spread and pillows placed, while silk-covered skins served as coverlets. The&nbsp;<a href=\"https://en.wikipedia.org/wiki/Carolingian\">Carolingian</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Manuscripts\">manuscripts</a>&nbsp;show metal bedsteads much higher at the head than at the feet, and this shape continued in use until the 13th century in France, many cushions being added to raise the body to a sloping position. In 12th-century manuscripts, the bedsteads appear much richer, with inlays, carving, and painting, and with embroidered coverlets and mattresses in harmony. Curtains were hung above the bed and a small hanging&nbsp;</p>',	0,	NULL),
(16,	'Pukim Wall Decor Set Of 3 Pukim Pukim Pukim Pukim ',	1,	'[\"40\"]',	' ',	'assets/uploads/products/products20220202070252.jpg',	'assets/uploads/products/products120220202070252.jpg',	'',	'',	'40000',	20000,	'<p>For all home decor enthusiasts, the Pukim wall decor set of three charming artefacts is worthy of attention. Its copper shine and a traditional floral structure gives it a sophisticated look that will add to the aesthetics of your living room. These iron-made structures have a charming contemporary appeal.</p>\r\n',	'<p>n the 12th century, luxury increased and bedsteads were made of wood much decorated with inlaid, ',	'3699',	'100',	'Pukim-Wall-Decor-Set-Of-3-Pukim-Pukim-Pukim-Pukim-',	'49.205.213.10',	'2022-02-02 19:04:52',	19,	1,	'<p>Our products are coated with high glass powder coating, electrophoretic lacquer and plating. There is pre-treatment done on products to make them rust and dust free. We are using lead free and non-hazardous coating on our products. All our electrical fittings are CE approved which are certified by testing labs. Before packing every component of the product is checked and tested as per end user. Lamps are meant for indoor use.</p>',	'<p>n the 12th century, luxury increased and bedsteads were made of wood much decorated with inlaid, carved, and painted ornamentation. They also used folding beds, which served as couches by day and had cushions covered with silk laid upon&nbsp;<a href=\"https://en.wikipedia.org/wiki/Leather\">leather</a>. At night a linen sheet was spread and pillows placed, while silk-covered skins served as coverlets. The&nbsp;<a href=\"https://en.wikipedia.org/wiki/Carolingian\">Carolingian</a>&nbsp;<a href=\"https://en.wikipedia.org/wiki/Manuscripts\">manuscripts</a>&nbsp;show metal bedsteads much higher at the head than at the feet, and this shape continued in use until the 13th century in France, many cushions being added to raise the body to a sloping position. In 12th-century manuscripts, the bedsteads appear much richer, with inlays, carving, and painting, and with embroidered coverlets and mattresses in harmony. Curtains were hung above the bed and a small hanging&nbsp;</p>',	0,	NULL);

DROP TABLE IF EXISTS `tbl_slider`;
CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_slider` (`id`, `image`, `link`, `ip`, `date`, `added_by`, `is_active`) VALUES
(2,	'assets/uploads/Slider/Slider20220125110130.jpeg',	'https://www.google.com',	'::1',	'2021-12-21 18:14:59',	19,	1),
(4,	'assets/uploads/Slider/Slider20220125110130.jpeg',	'#',	'::1',	'2021-12-21 18:15:19',	19,	1),
(5,	'assets/uploads/Slider/Slider20220125110110.jpeg',	'#',	'49.205.212.71',	'2022-01-25 11:12:10',	19,	1);

DROP TABLE IF EXISTS `tbl_subcategory`;
CREATE TABLE `tbl_subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` varchar(100) DEFAULT NULL,
  `subcategory` varchar(100) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `new_launches` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_subcategory` (`id`, `category_id`, `subcategory`, `description`, `image`, `new_launches`, `url`, `ip`, `date`, `added_by`, `is_active`) VALUES
(5,	'37',	'Chair',	'Paolo Venini, one of the leading figures in the production of Murano glass and an important contributor to twentieth-century design inspired our Paolo collection. His designs were strikingly simple, with the purity of outline set off against unusual combi',	'assets/uploads/subcategory/subcategory20220127030123.jpg',	1,	'Chair',	'::1',	'2021-11-09 14:37:35',	19,	1),
(6,	'33',	'Bed',	'In a word of excess subtley in nature can be hard to see, even though we are surrounded by it. Orangetree ventures into the forest and aims to capture its rawness, the order in the chaos. YOHO collection inspired by the Yoho National park is the culminati',	'assets/uploads/subcategory/subcategory20220127030101.jpg',	1,	'Bed',	'::1',	'2021-12-22 11:14:22',	19,	1),
(7,	'37',	'Table',	'His life is an art. These words envelop the grandiose life of Salvador Dali, who is the seed of thought behind the inception of the DALI collection. His work is a surrealist meditation bending time and space, the natural order. This essence is reflected i',	'assets/uploads/subcategory/team20211231061203.jpg',	1,	'Table',	'::1',	'2021-12-31 13:34:59',	19,	1),
(8,	'38',	'Paolo',	'Paolo Venini, one of the leading figures in the production of Murano glass and an important contributor to twentieth-century design inspired our Paolo collection. His designs were strikingly simple, with the purity of outline set off against unusual combi',	'assets/uploads/subcategory/subcategory20220125030103.jpeg',	1,	'Paolo',	'49.205.212.71',	'2022-01-25 15:32:03',	19,	1),
(9,	'33',	'Minoo',	'For those who wish they could live in The Great Gatsby, Minoo brings the opulence, elegance and glamour of the the Roaring ’20s to a 21st-century home. Minoo in Farsi means \'behesht\' which, when translated in English stands for \'Paradise\' or \'Heaven\'. Inspired by the rich colors, bold geometry, and decadent detail work of the Art Deco movement, Minoo symbolises playfulness, positivity and optimism for the future.',	'assets/uploads/subcategory/subcategory20220127110115.jpg',	0,	'Minoo',	'49.205.212.237',	'2022-01-27 11:30:15',	19,	1),
(10,	'33',	'Santorini',	'We all lust after a life and home style that radiates and speaks of simplicity and a relaxed way of living, a slower pace that is more in tune with nature.  Through Satorini collection we bring the classic mediterranean style right to yourr home for you all to enjoy. Design combines boldness, simplicity and convenience in light and warm color scheme, with extensive use of natural materials such as ceramics, wood, iron, cane, glass and cotton.',	'assets/uploads/subcategory/subcategory20220127110146.jpg',	0,	'Santorini',	'49.205.212.237',	'2022-01-27 11:31:46',	19,	1),
(11,	'33',	'Tribe',	'Our newest showcase is inspired by the traditional art and craft found in some of the oldest tribes in the world. Dotted with thousands of tribes across the vast landmass, Africa is not only the birthplace of the first humans but also some of the oldest arts and crafts. African Tribal art traditionally consists of woodcarvings, metalwork, and heavy use of textures. The native African Tribes preferred visual abstraction over naturalistic representation and taking a leaf from that we have extended the techniques, sustainable ethos, and striking visuals and seamlessly applied them to the Tribe Collection.',	'assets/uploads/subcategory/subcategory20220127110137.jpg',	0,	'Tribe',	'49.205.212.237',	'2022-01-27 11:32:37',	19,	1),
(12,	'33',	'Alchemy',	'When any base material comes in the hand of Indian craftsmen it turns into gold with intricate emotions and feelings expressing love and devotion creating designs that live in harmony with beauty, quality, charm and nature.',	'assets/uploads/subcategory/subcategory20220127110125.jpeg',	0,	'Alchemy',	'49.205.212.237',	'2022-01-27 11:33:25',	19,	1),
(13,	'33',	'Architainment',	'Taking inspiration from most contemporary architecture around the world we have created lighting forms that pay tribute to their inspiration in the most amazing way. Studying in depth the concept, the idea behind the creation and then redefining/interpreting them in a totally new context, space and functionality yet retaining the essence of the inspiration helped us create this new collection.',	'assets/uploads/subcategory/subcategory20220127110124.jpg',	0,	'Architainment',	'49.205.212.237',	'2022-01-27 11:34:24',	19,	1);

DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE `tbl_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `address` varchar(2000) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `power` int(11) NOT NULL,
  `services` varchar(1000) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `added_by` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_team` (`id`, `name`, `email`, `password`, `phone`, `address`, `image`, `power`, `services`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'Anay Pareek',	'anaypareek@rocketmail.com',	'9ffd3dfaf18c6c0dededaba5d7db9375',	'9799655891',	'19 kalyanpuri new sanganer road sodala',	'',	1,	'[\"999\"]',	'1000000',	'16-05-2018',	1,	1),
(19,	'Demo',	'demo@gmail.com',	'f702c1502be8e55f4208d69419f50d0a',	'9999999999',	'jaipur',	NULL,	1,	'[\"999\"]',	'::1',	'2020-01-04 18:12:55',	1,	1),
(29,	'Animesh Sharma',	'animesh.skyline@gmail.com',	'8bda6fe26dad2b31f9cb9180ec3823e8',	'8441849182',	'pratap nagar sitapura jaipur',	'',	2,	'[\"999\"]',	'::1',	'2020-01-06 14:47:11',	1,	1);

DROP TABLE IF EXISTS `tbl_testimonal`;
CREATE TABLE `tbl_testimonal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `tbl_testimonal` (`id`, `image`, `name`, `message`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'assets/uploads/testimonal/testimonal20211230071246.jpg',	'Tina Kakkad Dhanak, Luxury & Fashion Influencer',	'These Klimt Mirrors are beautiful and so well made, thanks Orange Tree! ',	'::1',	'2021-12-30 19:21:46',	19,	1),
(2,	'assets/uploads/testimonal/testimonal20211230071221.jpg',	'Sara Arfeen Khan, Influencer',	'Very happy with this unique floor lamp, this has become my favourite space in the house now! ',	'::1',	'2021-12-30 19:22:21',	19,	1),
(3,	'assets/uploads/testimonal/testimonal20211230071235.jpg',	'Mohit Rai, Stylist',	'The lamps I got from Orangetree are exactly the pieces I was looking for in my home. They are beauti',	'::1',	'2021-12-30 19:22:46',	19,	1),
(4,	'assets/uploads/testimonal/testimonal20211230071213.jpg',	'Huma Qureshi, Actress',	'I simply loved the green lamp- it sits perfectly in my corner setting. ',	'::1',	'2021-12-30 19:23:13',	19,	1);

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `is_google` int(11) DEFAULT '0',
  `is_facebook` int(11) DEFAULT '0',
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_users` (`id`, `fname`, `lname`, `phone`, `email`, `password`, `profile_picture`, `gender`, `is_google`, `is_facebook`, `ip`, `date`, `added_by`, `is_active`) VALUES
(1,	'nitesh',	'shah',	'0000000',	'demo@gmail.com',	'202cb962ac59075b964b07152d234b70',	NULL,	NULL,	0,	0,	'::1',	'2021-12-24 17:53:03',	NULL,	1),
(2,	'Kushal',	'Begani',	'9999999999',	'kushalbengani95@gmail.com',	'b2426f0142fc970c243d7b6fbcbe78e8',	NULL,	NULL,	0,	0,	'223.190.5.247',	'2022-01-29 12:36:59',	19,	1),
(3,	'piyush',	'joshi',	'8619538167',	'hr.fineoutput@gmail.com',	'6444c32f70aa6a93d80dc6e60c250770',	NULL,	NULL,	0,	0,	'49.205.213.10',	'2022-02-02 16:49:55',	19,	1),
(4,	'narendra',	'jat',	'9649230623',	'jatnarendra2019jpr@gmail.com',	'd80cadbc905cbecc04abffb6e76a8ebb',	NULL,	NULL,	0,	0,	'49.204.165.171',	'2022-06-02 10:52:36',	NULL,	1),
(5,	'piyush',	'joshi',	'4454445645',	'piyush123@gmail.com',	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL,	0,	0,	'49.204.165.21',	'2022-06-02 15:44:13',	NULL,	1),
(6,	'piyush',	'joshui',	'9878974654',	'piyush123456@gmail.com',	'e10adc3949ba59abbe56e057f20f883e',	NULL,	NULL,	0,	0,	'49.204.165.21',	'2022-06-02 15:45:26',	NULL,	1);

DROP TABLE IF EXISTS `tbl_wishlist`;
CREATE TABLE `tbl_wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tbl_wishlist` (`id`, `user_id`, `product_id`, `ip`, `date`) VALUES
(6,	1,	7,	'49.205.213.12',	'2022-02-26 11:07:27'),
(8,	4,	9,	'49.204.165.171',	'2022-06-02 10:54:11'),
(9,	4,	8,	'49.204.165.171',	'2022-06-02 10:57:13');

-- 2022-06-16 09:42:27
