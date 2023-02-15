-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2021 at 08:56 PM
-- Server version: 5.7.33-0ubuntu0.18.04.1
-- PHP Version: 7.2.34-18+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bagpackar_storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_about_us`
--

CREATE TABLE `bgpkr_about_us` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'About us'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_about_us`
--

INSERT INTO `bgpkr_about_us` (`id`, `body`) VALUES
(1, '<p>It is requested all travelers to go through all the COVID-19 travel advisories and information.qwe</p>\n\n<h2>WHO advisory:</h2>\n\n<p><a href=\"https://www.who.int/emergencies/diseases/novel-coronavirus-2019\" target=\"_blank\">https://www.who.int/emergencies/diseases/novel-coronavirus-2019</a></p>\n\n<h2>USA:</h2>\n\n<p><a href=\"https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.cdc.gov/coronavirus/2019-nCoV/\" target=\"_blank\">https://www.cdc.gov/coronavirus/2019-nCoV/</a></p>\n\n<h2>India:</h2>\n\n<p><a href=\"https://www.mea.gov.in/travel-advisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.mohfw.gov.in/\" target=\"_blank\">https://www.mohfw.gov.in/</a></p>\n\n<h1>COVID-19 Guidelines</h1>\n\n<p>We have gathered health and cleanliness guidelines to support you on your journey by keeping your property safe and also to keep both the host and guest healthy and protected. Bagpackar is not responsible if you are tested positive COVID-19. Guests are required to follow all safety measures. We are making every effort to make your stay safe and healthy.</p>\n\n<h2>Guidelines for Hosts for health safety:</h2>\n\n<p>Hosts who provide services to guests, host plays important role in maintaining cleanliness, safety and mitigating health risks by continuously practicing cleaning and safety protocols. These guidelines are important to maintaining hygiene and taking cleanliness to utmost levels due to the ongoing COVID-19 situation. We are in this together and we will soon be out of this situation but between these times we need to work together for our guest safety. We believe it is vital especially when working in the hospitality industry during these times.</p>\n\n<h2>Requirements:</h2>\n\n<p>Bagpackar provides support to both guests and hosts in many areas, but it is recommended to follow local authorities and governments guidelines for more details and safety measures. Based on the countries, hosts are required to follow their respective countries guidelines, rules and laws to maintain hygiene and cleanliness. You can find more information in COVID-19 TRAVEL INFORMATION AND ADVISORY section. So it is very important for you to review those respective guidelines.</p>\n\n<p>Please note that it is mandatory for hosts to check your government websites and apps to track the COVID-19 cases in your area. If your neighborhood has COVID-19 patients then you are required to make your listing available for at least 14 days.</p>\n\n<p>Bagpackar is taking care of collecting information on daily basis for any possible travel restrictions in different region. If your local government has imposed a travel restriction then all hosts are required to mark their listing as unavailable for current and future dates. Hosts are required to strictly follow local government rules and laws.</p>\n\n<h2>Communications:</h2>\n\n<p>Hosts are required to maintain social distancing (6 Feet apart) with guests all the time while communicating. Bagpackar encourage to use tools like smart lock, remote lock, keypad locks, etc to minimize contact with guests arriving at your property.</p>\n\n<p>Hosts are responsible for maintaining cleanliness and sanitizing their property to ensure the safety of your guests and staff on a regular basis.</p>\n\n<p>Any maintenance work required for your property should be completed 24 hours before arrival of guests and property are cleaned and sanitized after the work is completed. Hosts should maintain their upto date information about their listing on Bagpackar.</p>\n\n<h2>Host and Staff:</h2>\n\n<p>Hosts and their working staff/peers who are making sure about amazing guest experience are required to follow these guidelines for guest safety. Host and their peers should do their best to maintain professionalism and hospitality along with safety measures.</p>\n\n<p>Hosts should monitor their own as well as their staff&rsquo;s health and need to make sure they are not at any risk and do not present a risk for guests. Due to the ongoing COVID-19 situation, all the housekeepers are required to clean the property only after the guest&#39;s departure. Staff working at the property are required to take all measures to understand, respect and reinforce social distancing guidelines provided by your local authorities. Staff, housekeepers and your peers are always required to use appropriate protective equipment like masks and gloves when they are at the property.</p>\n\n<p>Hosts are required to maintain and provide extra basic amenities at the property for guests along with sanitizers and disinfectant wipes which should be always available.</p>\n\n<p>Following are common area where you to take special care to maintain hygiene and cleanliness:</p>\n\n<ul>\n	<li>Cleaning is the act of removing debris and dirt from a surface. Sanitizing kills bacteria on a surface. The general rule of thumb is to clean high-touch areas first then sanitize afterward.</li>\n	<li>Place transparent screens at front desk areas between reception staff and guests.</li>\n	<li>Use products that have been approved by health professionals in combating the spread of harmful organisms and viruses. Click here to read guidance issued by the World Health Organization.</li>\n	<li>Apply disinfectants during routine cleanings of guest rooms and public spaces, such as fitness areas and meeting rooms.</li>\n	<li>Add disinfectant when doing laundry and wash bedspreads more frequently.</li>\n	<li>Provide disposable disinfectant wipes to front-desk staff to disinfect surfaces that are also used by or exposed to guests. Make alcohol-based hand gel easily accessible and clearly marked for guests and staff in all public areas.</li>\n	<li>Clean and disinfect hampers or other carts for transporting laundry after they&rsquo;re used.</li>\n	<li>Clean and disinfect electronics such as tablets, touch screens, keyboards, remote controls, Ensure the sanitization and disinfection of publicly accessible toilets.</li>\n	<li>Maintain and disinfect your swimming pools, spas, and similar recreational facilities.</li>\n	<li>Install air purifiers in common areas and regularly change their filters.</li>\n	<li>Offer cashless payment as an option, if possible and agreed contractually.</li>\n	<li>Stay informed of the latest news from the World Health Organization.</li>\n	<li>Wherever possible, show guests what measures you have in place and understand why they matter.</li>\n</ul>\n\n<h2>Guests Responsibility:</h2>\n\n<p>We are all in this situation together, guests can also do numerous things to ensure safety and healthy measure. Guests are equally responsible for following all the rules, laws and guidelines provided by Bagpackar and Government. Guests should read local government guidelines for the area you are travelling to or have made reservations.</p>\n\n<p>It is mandatory for all the guests to monitor their health before arriving at the property. If a guest shows any minor symptoms or health risk, they are required to contact the Bagpackar support team to cancel their booking. Guests are required to cancel or postpone their bookings and travel plans if someone found COVID-19 positive in their locality.</p>\n\n<p>&nbsp;</p>\n\n<p>Guests need to read all the guidelines and travel restrictions about their travelling city or area provided by respective local government authorities. There are still travel restrictions in some states and more information can be found in COVID-19 TRAVEL INFORMATION AND ADVISORY section. According to government guidelines, arriving in listed states, travellers are required to isolate themselves for at least two weeks. Please read carefully about these guidelines before making any reservations.</p>\n\n<p>In situation like Guests develops or identifies virus symptoms before check-in or during the stay, guest should isolate themselves and inform the property as well as Bagpackar.com</p>\n\n<p>Guests are required to wear masks before arriving at the property and needed to maintain social distancing with property owners, staff and housekeepers.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_admin`
--

CREATE TABLE `bgpkr_admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `device_type` enum('web') NOT NULL,
  `device_token` varchar(300) NOT NULL,
  `forgot_token` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_admin`
--

INSERT INTO `bgpkr_admin` (`admin_id`, `name`, `email`, `password`, `device_type`, `device_token`, `forgot_token`) VALUES
(1, 'Bagpackar', 'admin@techugo.com', 'e10adc3949ba59abbe56e057f20f883e', 'web', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_all_amenities`
--

CREATE TABLE `bgpkr_all_amenities` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_all_amenities`
--

INSERT INTO `bgpkr_all_amenities` (`id`, `category`, `name`, `image`, `added_on`) VALUES
(1, 'Basic', 'Wifi', 'wifi.png', '2020-05-27 19:06:35'),
(2, 'Basic', 'TV', 'tv.png', '2020-05-27 19:06:38'),
(3, 'Basic', 'Computer Desk', 'computer.png', '2020-05-27 19:06:38'),
(4, 'Basic', 'AC', 'ac.png', '2020-05-27 19:06:38'),
(5, 'Basic', 'Heater', 'heater.png', '2020-05-27 19:06:39'),
(6, 'Basic', 'Iron', 'iron.png', '2020-05-27 19:06:39'),
(7, 'Basic', 'Fireplace', 'fire_place.png', '2020-05-27 19:06:39'),
(8, 'Basic', 'Washing Machine', 'washingmachine.png', '2020-05-27 19:06:39'),
(9, 'Basic', 'Dryer', 'dryer.png', '2020-05-27 19:06:39'),
(10, 'Basic', 'Towels', 'towel.png', '2020-05-27 19:06:39'),
(11, 'Basic', 'Bedsheet', 'bedsheet.png', '2020-05-27 19:06:39'),
(12, 'Basic', 'Soap', 'soap.png', '2020-05-27 19:06:39'),
(13, 'Basic', 'Toilet Papers', 'toiletpaper.png', '2020-05-27 19:06:39'),
(14, 'Basic', 'First aid', 'firstaid.png', '2020-05-27 19:06:39'),
(15, 'Kitchen/Dining', 'Microwave Oven', 'microwave_oven.png', '2020-05-27 19:11:19'),
(16, 'Kitchen/Dining', 'Toaster', 'toaster.png', '2020-05-27 19:11:20'),
(17, 'Kitchen/Dining', 'Blender', 'blender.png', '2020-05-27 19:11:20'),
(18, 'Kitchen/Dining', 'Coffee Maker', 'coffee_pot.png', '2020-05-27 19:11:20'),
(19, 'Kitchen/Dining', 'Fridge', 'fridge.png', '2020-05-27 19:11:20'),
(20, 'Kitchen/Dining', 'Stove', 'stove.png', '2020-05-27 19:11:20'),
(21, 'Kitchen/Dining', ' Dishes', 'dishes.png', '2020-05-27 19:11:20'),
(22, 'Kitchen/Dining', 'Utensils', 'utensils.png', '2020-05-27 19:11:20'),
(23, 'Kitchen/Dining', 'Tea', 'coffee.png', '2020-05-27 19:11:20'),
(24, 'Kitchen/Dining', 'Spices', 'spices.png', '2020-05-27 19:11:20'),
(25, 'Kitchen/Dining', 'Oil', 'oil.png', '2020-05-27 19:11:20'),
(26, 'Kitchen/Dining', 'Pan', 'pan.png', '2020-05-27 19:11:20'),
(27, 'Bed_Baths', 'Bath Tub', 'bath.png', '2020-05-27 19:13:59'),
(28, 'Bed_Baths', 'Jacuzzi', 'jacuzzi.png', '2020-05-27 19:13:59'),
(30, 'Bed_Baths', 'Shampoo', 'shampoo.png', '2020-05-27 19:14:00'),
(31, 'Bed_Baths', 'Hair Dryer', 'dryer.png', '2020-05-27 19:14:00'),
(32, 'Bed_Baths', 'Linens', 'linen.png', '2020-05-27 19:14:00'),
(33, 'Bed_Baths', 'Closet', 'closet.png', '2020-05-27 19:14:00'),
(34, 'Bed_Baths', ' Cupboard', 'cupboard.png', '2020-05-27 19:14:00'),
(35, 'Bed_Baths', 'Extra Pillow', 'pillow.png', '2020-05-27 19:14:00'),
(36, 'Bed_Baths', 'Blankets', 'bedsheet.png', '2020-05-27 19:14:00'),
(37, 'Entertainment', 'Television', 'tv.png', '2020-05-27 19:20:00'),
(38, 'Entertainment', 'Satellite', 'satellite.png', '2020-05-27 19:20:03'),
(39, 'Entertainment', 'Cable', 'sensor.png', '2020-05-27 19:20:04'),
(40, 'Entertainment', 'Stereo', 'stereo.png', '2020-05-27 19:20:04'),
(41, 'Entertainment', 'DVD Player', 'dvd.png', '2020-05-27 19:20:04'),
(42, 'Entertainment', 'Books', 'book.png', '2020-05-27 19:20:04'),
(43, 'Entertainment', 'Board Games', 'chess.png', '2020-05-27 19:20:04'),
(44, 'Entertainment', ' Music', 'music.png', '2020-05-27 19:20:04'),
(45, 'Entertainment', 'Playstation', 'playstation.png', '2020-05-27 19:20:04'),
(46, 'Entertainment', 'XBOX', 'xbox.png', '2020-05-27 19:21:11'),
(47, 'Outside', 'BBQ Grill', 'bbq.png', '2020-05-27 19:23:12'),
(48, 'Outside', 'Frontyard', 'f_byard.png', '2020-05-27 19:23:14'),
(49, 'Outside', 'Backyard', 'backyard.png', '2020-05-27 19:23:15'),
(50, 'Outside', 'Patio', 'patiodeck.png', '2020-05-27 19:23:15'),
(51, 'Outside', 'Balcony', 'balcony.png', '2020-05-27 19:23:15'),
(52, 'Outside', 'Deck', 'outsidechair.png', '2020-05-27 19:23:15'),
(53, 'Outside', 'Outdoor Pool', 'pool.png', '2020-05-27 19:23:15'),
(54, 'Outside', 'Private Pool', 'pool.png', '2020-05-27 19:23:15'),
(56, 'Outside', 'Outside Chair', 'outsidechair.png', '2020-05-27 19:23:15'),
(57, 'Safety', 'Smoke detector', 'smokedetector.png', '2020-07-29 10:35:02'),
(58, 'Safety', 'Carbon monoxide detector', 'monoxide.png', '2020-07-29 10:35:02'),
(59, 'Safety', 'First Aid Kit', 'firstaid.png', '2020-07-29 10:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_all_placetypes`
--

CREATE TABLE `bgpkr_all_placetypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `place_type` varchar(20) NOT NULL,
  `property_type` varchar(20) NOT NULL,
  `property_text` varchar(355) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_all_placetypes`
--

INSERT INTO `bgpkr_all_placetypes` (`id`, `place_type`, `property_type`, `property_text`, `added_on`) VALUES
(1, 'Apartment', 'Flat', 'Tip:Flat is an individual home in a multi floor residential building, typically with a set of rooms, on one floor including kitchen, number of bedrooms, living hall, etc.', '2020-06-01 14:19:33'),
(2, 'Apartment', 'Apartment', 'Tip:Apartment is designed as a residency with multiple rooms or suites of rooms located in a multi-unit building managed by more than one household.', '2020-06-01 14:19:33'),
(3, 'Apartment', 'Condominium', 'Tip:A condominium or condo is an individual owned (act as a landlord) private residence in a building or community.', '2020-06-01 14:19:33'),
(4, 'Apartment', 'Serviced Apartment', 'Tip:A service apartment is a fully furnished room or suite of rooms designed as a residence providing hotel-like amenities such as room service and housekeeping and generally available for short-term or long-term stay. We review these listings.', '2020-06-01 14:19:33'),
(5, 'House', 'Townhouse', 'Tip:A townhouse or row house is a private unit and owned by an individual person. Townhouses are attached units and may share one or more walls.', '2020-06-01 14:26:01'),
(6, 'House', 'Farmhouse', 'Tip:A farmhouse is a dwell generally located in a farm area or rural area and usually managed by farmers. Suitable for guests who want to experience rural life and might be able to interact with nearby farms and animals.', '2020-06-01 14:26:01'),
(7, 'House', 'Bungalow', 'Tip:Bungalow houses are tall stand-alone one to one-and-a-half story homes with inviting front porch, roof and/or backyard.', '2020-06-01 14:26:01'),
(8, 'House', 'House', 'Tip:Houses are stand-alone structures with single or multi-story buildings usually sharing walls with other houses.', '2020-06-01 14:26:01'),
(9, 'House', 'Villa', 'Tip:Villas are large and private luxurious homes with possibly a front yard, backyard and pools. Villas generally provide hotel-like services.', '2020-06-01 14:26:01'),
(10, 'Unique Spaces', 'Barn', 'Tip:Barn houses are originally structured to keep livestock, food grain or agricultural equipment but converted/remodeled into living spaces.', '2020-06-01 14:47:49'),
(11, 'Unique Spaces', 'Boat houses', 'Tip:Boat houses are houses converted into living spaces and may include luxury yachts. These houses sometimes are temporary or permanent. These are floating homes and located on open water.', '2020-06-01 14:47:49'),
(12, 'Unique Spaces', 'Bus House', 'Tip:Bus houses are old or new bus-like vehicles converted into spacious and innovative living spaces.', '2020-06-01 14:47:49'),
(13, 'Unique Spaces', 'Camper', 'Tip:Camper/Camping houses are living spaces in a campsite for nature loving travellers. These houses are generally tents or constructed of woods.', '2020-06-01 14:47:49'),
(14, 'Unique Spaces', 'RV', 'Tip:RV is a vehicle or trailer with all the facilities for living. These living spaces are generally located near campsites.', '2020-06-01 14:47:49'),
(15, 'Unique Spaces', 'Campsite', 'Tip:Campsite is a camping area where travellers can stay using their own tents, RV/Caravans or tiny mobile houses. Host needs to tell guests about the size of the particular camping area and what thing they need to take care of.', '2020-06-01 14:47:49'),
(16, 'Unique Spaces', 'Castle', 'Tip:Castles are historical structures built for living during middle ages by royal families.', '2020-06-01 14:47:49'),
(17, 'Unique Spaces', 'Cave', 'Tip:Cave homes are natural caves that are converted into living spaces for guests to obtain natural experiences.', '2020-06-01 14:47:49'),
(18, 'Unique Spaces', 'Dome', 'Tip:A dome house is like any other house with doors and windows but its roof is in the dome/sphere or rounded shape.', '2020-06-01 14:47:49'),
(19, 'Unique Spaces', 'Igloo', 'Tip:Igloo is living spaces that are built from snow and ice in a dome shape. Igloos are generally found in cold weather.', '2020-06-01 14:47:49'),
(20, 'Unique Spaces', 'Plane', 'Tip:A plane/airplane houses are living spaces that are customised and innovated for living from a retired or scrapped aircraft.', '2020-06-01 14:47:49'),
(21, 'Unique Spaces', 'Tent', 'Tip:Tent homes are living spaces constructed from fabrics and supporting bars. Tent may be temporary or permanent shelters.', '2020-06-01 14:47:49'),
(22, 'Unique Spaces', 'Train', 'Tip:Train houses are train-like structures converted into spacious and innovative living spaces.', '2020-06-01 14:47:49'),
(23, 'Unique Spaces', 'Tree', 'Tip:A tree house that is constructed on tree branches or trunks of one or more mature trees that are above the ground levels. Guests can enjoy scenic views.', '2020-06-01 14:47:50'),
(24, 'Unique Spaces', 'Windmill', 'Tip:Windmill houses are converted from non functioning windmill into beautiful living spaces. Some windmills might be working and converted for temporary living space.', '2020-06-01 14:47:50'),
(25, 'Unique Spaces', 'Yurt', 'Tip:Yurts are circular dwellings and are constructed from woods and bamboo for walls. Yurts are a resilient and reliable type of tent.', '2020-06-01 14:47:50'),
(26, 'Unique Spaces', 'Hut', 'Tip:Huts are living spaces constructed from various materials including mud, grass, stone, wood, etc. Huts are generally located in rural areas.', '2020-06-01 14:47:50'),
(27, 'Hotel', 'Boutique hotel', 'Tip:Boutique hotels are hotels but they are more, customized and personalized. They have distinctive themes and provide unique experiences and they generally are not part of any hotel chains.', '2020-06-01 14:54:48'),
(28, 'Hotel', 'Aparthotel', 'Tip:Aparthotel is an apartment hotel which are basically apartments but operate more like a hotel.', '2020-06-01 14:54:48'),
(29, 'Hotel', 'Hostel', 'Tip:Hostel is affordable from a hotel where guests can rent a bed in a room or dorms.', '2020-06-01 14:54:48'),
(30, 'Hotel', 'Hotel', 'Tip:Hotels are hospitality businesses which provide private rooms for guests accommodations. They also provide almost all kinds of facilities and amenities.', '2020-06-01 14:54:48'),
(31, 'Hotel', 'Lodge', 'Tip:Lodges are more like hotels but less or no amenities, they just provide accommodation and there is no provision for food.', '2020-06-01 14:54:48'),
(32, 'Hotel', 'Resort', 'Tip:Resorts are hotels which provide accommodations with all luxury facilities, services and amenities. Resorts also have facilities for business conferences.', '2020-06-01 14:54:48'),
(33, 'Events/Parties/Lawns', 'Lawn', 'Tip:Lawn or a wedding lawn is a place especially built for gathering events like weddings, birthdays, reception, social gathering events, etc. Host can add other feature that are provided in the Lawn for the Guest like decoration, food, staying rooms, bathrooms, etc. in further sections.', '2020-06-08 08:09:31'),
(35, 'Events/Parties/Lawns', 'Ground', 'Tip:Ground or an open ground is a place in society, community or residential area which can be used or rented for social gathering which includes Birthday Party, Small Wedding and other events.', '2020-06-08 08:12:12'),
(36, 'Events/Parties/Lawns', 'Front yard/Back yard', 'Tip:Front yard or Back yard is open space in resident building which can rented for small events.', '2020-06-08 08:13:39'),
(37, 'Events/Parties/Lawns', 'Banquet Hall', 'Tip:Banquet hall is also called as function hall or reception hall which holds an events. A Banquet hall is a room, space or a building provided for the purpose of banquet, wedding, birthday celebration, hosting a party, reception or social gathering events. Banquet halls are generally located in clubs, restaurants or hotels.', '2020-06-08 08:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_booking`
--

CREATE TABLE `bgpkr_booking` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `guest_id` int(10) UNSIGNED NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  `total_days` float NOT NULL COMMENT 'Total Days',
  `total_guest` tinyint(4) NOT NULL,
  `total_infant` tinyint(4) NOT NULL,
  `paid_currency` varchar(20) NOT NULL,
  `paid_amount` float NOT NULL,
  `payment_status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0=Payment failed ,1= payment sucess,2=Refund',
  `confirm_status` enum('0','1','2') NOT NULL COMMENT '0 for pending 1 for accept 2 for decline ',
  `host_paid_status` enum('0','1') NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_booking`
--

INSERT INTO `bgpkr_booking` (`booking_id`, `host_id`, `user_id`, `guest_id`, `guest_email`, `from_date`, `to_date`, `total_days`, `total_guest`, `total_infant`, `paid_currency`, `paid_amount`, `payment_status`, `confirm_status`, `host_paid_status`, `created_on`) VALUES
(1, 1, 1, 7, 'dchitkara94@gmail.com', '2020-09-18 01:00:00', '2020-09-19 23:30:00', 1, 3, 0, 'USD', 8889, '1', '1', '1', '2020-08-21 05:04:15'),
(2, 22, 17, 18, 'naveen@techugo.com', '2020-09-27 00:00:00', '2020-09-29 23:30:00', 2, 2, 0, 'INR', 2300, '1', '1', '0', '2020-08-28 08:48:51'),
(3, 1, 1, 18, 'naveen@techugo.com', '2020-09-13 00:00:00', '2020-09-15 09:00:00', 2, 1, 0, 'INR', 8889, '1', '0', '0', '2020-08-30 18:40:25'),
(4, 22, 17, 2, 'shubhamtyagi9643@gmail.com', '2020-09-18 08:00:00', '2020-09-18 18:00:00', 0.5, 1, 0, 'USD', 675, '1', '0', '0', '2020-09-12 12:23:57'),
(5, 1, 1, 25, 'dchitkara94@gmail.com', '2020-09-16 08:00:00', '2020-09-16 18:00:00', 0.5, 1, 0, 'INR', 2972.25, '1', '0', '0', '2020-09-15 04:57:02'),
(6, 1, 1, 25, 'dchitkara94@gmail.com', '2020-09-17 12:00:00', '2020-09-18 11:59:00', 1, 4, 0, 'INR', 4944.5, '1', '0', '0', '2020-09-16 10:10:19'),
(7, 58, 18, 4, 'mohdshahnazar518@gmail.com', '2020-10-21 18:30:00', '2020-10-28 18:30:00', 7, 1, 0, 'INR', 209997, '1', '1', '0', '2020-09-23 18:57:44'),
(8, 58, 18, 4, 'mohdshahnazar518@gmail.com', '2020-10-29 03:30:00', '2020-10-30 04:00:00', 1, 1, 0, 'USD', 23212, '1', '1', '0', '2020-09-23 19:03:59'),
(9, 37, 18, 4, 'mohdshahnazar518@gmail.com', '2020-10-12 03:30:00', '2020-10-15 04:00:00', 0, 1, 0, 'USD', 8004.95, '2', '2', '0', '2020-09-23 19:19:17'),
(11, 1, 2, 1, 'devesh1@techugo.com', '2020-10-16 08:00:00', '2020-10-16 18:00:00', 0.5, 1, 0, 'INR', 2972.25, '1', '1', '0', '2020-10-16 11:41:52'),
(12, 174, 32, 31, 'amit@yopmail.com', '2020-11-14 00:00:00', '2020-11-19 02:00:00', 5, 4, 5, 'USD', 5850, '1', '1', '0', '2020-11-13 09:53:56'),
(13, 182, 36, 35, 'abhay@yopmail.com', '2020-12-01 00:00:00', '2020-12-04 02:00:00', 3, 3, 1, 'USD', 3550, '1', '1', '0', '2020-11-27 09:28:00'),
(14, 183, 36, 35, 'abhay@yopmail.com', '2020-12-04 00:00:00', '2020-12-08 01:30:00', 4, 1, 0, 'INR', 4420, '1', '0', '0', '2020-12-03 09:47:30'),
(15, 182, 36, 3, 'amolkaroo@gmail.com', '2021-02-16 00:00:00', '2021-02-18 02:00:00', 2, 1, 0, 'USD', 2400, '1', '0', '0', '2021-02-14 09:13:04'),
(16, 109, 3, 6, 'amolkaroo@gmail.com', '2021-02-19 12:00:00', '2021-02-20 11:59:00', 1, 3, 0, 'USD', 350, '1', '2', '0', '2021-02-14 09:25:30'),
(17, 109, 3, 6, 'amolkaroo@gmail.com', '2021-02-26 12:00:00', '2021-02-27 11:59:00', 1, 1, 0, 'USD', 350, '1', '2', '0', '2021-02-14 09:28:53'),
(18, 109, 3, 6, 'amolkaroo@gmail.com', '2021-03-17 13:00:00', '2021-03-19 13:00:00', 2, 1, 0, 'USD', 680, '1', '2', '0', '2021-03-15 07:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_business_travel`
--

CREATE TABLE `bgpkr_business_travel` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'Business Travel'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_business_travel`
--

INSERT INTO `bgpkr_business_travel` (`id`, `body`) VALUES
(1, '<p>It is requested all travelers to go through all the COVID-19 travel advisories and information.11</p>\n\n<h2>WHO advisory:</h2>\n\n<p><a href=\"https://www.who.int/emergencies/diseases/novel-coronavirus-2019\" target=\"_blank\">https://www.who.int/emergencies/diseases/novel-coronavirus-2019</a></p>\n\n<h2>USA:</h2>\n\n<p><a href=\"https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.cdc.gov/coronavirus/2019-nCoV/\" target=\"_blank\">https://www.cdc.gov/coronavirus/2019-nCoV/</a></p>\n\n<h2>India:</h2>\n\n<p><a href=\"https://www.mea.gov.in/travel-advisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.mohfw.gov.in/\" target=\"_blank\">https://www.mohfw.gov.in/</a></p>\n\n<h1>COVID-19 Guidelines</h1>\n\n<p>We have gathered health and cleanliness guidelines to support you on your journey by keeping your property safe and also to keep both the host and guest healthy and protected. Bagpackar is not responsible if you are tested positive COVID-19. Guests are required to follow all safety measures. We are making every effort to make your stay safe and healthy.</p>\n\n<h2>Guidelines for Hosts for health safety:</h2>\n\n<p>Hosts who provide services to guests, host plays important role in maintaining cleanliness, safety and mitigating health risks by continuously practicing cleaning and safety protocols. These guidelines are important to maintaining hygiene and taking cleanliness to utmost levels due to the ongoing COVID-19 situation. We are in this together and we will soon be out of this situation but between these times we need to work together for our guest safety. We believe it is vital especially when working in the hospitality industry during these times.</p>\n\n<h2>Requirements:</h2>\n\n<p>Bagpackar provides support to both guests and hosts in many areas, but it is recommended to follow local authorities and governments guidelines for more details and safety measures. Based on the countries, hosts are required to follow their respective countries guidelines, rules and laws to maintain hygiene and cleanliness. You can find more information in COVID-19 TRAVEL INFORMATION AND ADVISORY section. So it is very important for you to review those respective guidelines.</p>\n\n<p>Please note that it is mandatory for hosts to check your government websites and apps to track the COVID-19 cases in your area. If your neighborhood has COVID-19 patients then you are required to make your listing available for at least 14 days.</p>\n\n<p>Bagpackar is taking care of collecting information on daily basis for any possible travel restrictions in different region. If your local government has imposed a travel restriction then all hosts are required to mark their listing as unavailable for current and future dates. Hosts are required to strictly follow local government rules and laws.</p>\n\n<h2>Communications:</h2>\n\n<p>Hosts are required to maintain social distancing (6 Feet apart) with guests all the time while communicating. Bagpackar encourage to use tools like smart lock, remote lock, keypad locks, etc to minimize contact with guests arriving at your property.</p>\n\n<p>Hosts are responsible for maintaining cleanliness and sanitizing their property to ensure the safety of your guests and staff on a regular basis.</p>\n\n<p>Any maintenance work required for your property should be completed 24 hours before arrival of guests and property are cleaned and sanitized after the work is completed. Hosts should maintain their upto date information about their listing on Bagpackar.</p>\n\n<h2>Host and Staff:</h2>\n\n<p>Hosts and their working staff/peers who are making sure about amazing guest experience are required to follow these guidelines for guest safety. Host and their peers should do their best to maintain professionalism and hospitality along with safety measures.</p>\n\n<p>Hosts should monitor their own as well as their staff&rsquo;s health and need to make sure they are not at any risk and do not present a risk for guests. Due to the ongoing COVID-19 situation, all the housekeepers are required to clean the property only after the guest&#39;s departure. Staff working at the property are required to take all measures to understand, respect and reinforce social distancing guidelines provided by your local authorities. Staff, housekeepers and your peers are always required to use appropriate protective equipment like masks and gloves when they are at the property.</p>\n\n<p>Hosts are required to maintain and provide extra basic amenities at the property for guests along with sanitizers and disinfectant wipes which should be always available.</p>\n\n<p>Following are common area where you to take special care to maintain hygiene and cleanliness:</p>\n\n<ul>\n	<li>Cleaning is the act of removing debris and dirt from a surface. Sanitizing kills bacteria on a surface. The general rule of thumb is to clean high-touch areas first then sanitize afterward.</li>\n	<li>Place transparent screens at front desk areas between reception staff and guests.</li>\n	<li>Use products that have been approved by health professionals in combating the spread of harmful organisms and viruses. Click here to read guidance issued by the World Health Organization.</li>\n	<li>Apply disinfectants during routine cleanings of guest rooms and public spaces, such as fitness areas and meeting rooms.</li>\n	<li>Add disinfectant when doing laundry and wash bedspreads more frequently.</li>\n	<li>Provide disposable disinfectant wipes to front-desk staff to disinfect surfaces that are also used by or exposed to guests. Make alcohol-based hand gel easily accessible and clearly marked for guests and staff in all public areas.</li>\n	<li>Clean and disinfect hampers or other carts for transporting laundry after they&rsquo;re used.</li>\n	<li>Clean and disinfect electronics such as tablets, touch screens, keyboards, remote controls, Ensure the sanitization and disinfection of publicly accessible toilets.</li>\n	<li>Maintain and disinfect your swimming pools, spas, and similar recreational facilities.</li>\n	<li>Install air purifiers in common areas and regularly change their filters.</li>\n	<li>Offer cashless payment as an option, if possible and agreed contractually.</li>\n	<li>Stay informed of the latest news from the World Health Organization.</li>\n	<li>Wherever possible, show guests what measures you have in place and understand why they matter.</li>\n</ul>\n\n<h2>Guests Responsibility:</h2>\n\n<p>We are all in this situation together, guests can also do numerous things to ensure safety and healthy measure. Guests are equally responsible for following all the rules, laws and guidelines provided by Bagpackar and Government. Guests should read local government guidelines for the area you are travelling to or have made reservations.</p>\n\n<p>It is mandatory for all the guests to monitor their health before arriving at the property. If a guest shows any minor symptoms or health risk, they are required to contact the Bagpackar support team to cancel their booking. Guests are required to cancel or postpone their bookings and travel plans if someone found COVID-19 positive in their locality.</p>\n\n<p>&nbsp;</p>\n\n<p>Guests need to read all the guidelines and travel restrictions about their travelling city or area provided by respective local government authorities. There are still travel restrictions in some states and more information can be found in COVID-19 TRAVEL INFORMATION AND ADVISORY section. According to government guidelines, arriving in listed states, travellers are required to isolate themselves for at least two weeks. Please read carefully about these guidelines before making any reservations.</p>\n\n<p>In situation like Guests develops or identifies virus symptoms before check-in or during the stay, guest should isolate themselves and inform the property as well as Bagpackar.com</p>\n\n<p>Guests are required to wear masks before arriving at the property and needed to maintain social distancing with property owners, staff and housekeepers.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_cancel_refund`
--

CREATE TABLE `bgpkr_cancel_refund` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'cancel and refund policy text'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_cancel_refund`
--

INSERT INTO `bgpkr_cancel_refund` (`id`, `body`) VALUES
(1, '<p>For any cancellation or refund please contact Bagpackar support or email us. </p>\n         <p>Bagpackar cancellation policy does not charge a processing fee for cancellations unless specified. Bagpackar may offer, and you may accept, a Bagpackar Gift Card in place of a refund, if Guest agrees.</p>\n         <p>Bagpackar is committed to providing you with a simple and efficient refund process. Refund will be processed within 15 days from the date cancellation is made. </p>\n         <p>Cancellation refund amount will be based on following terms:</p>\n         <ul>\n            <li>Cancellation for the reservation before the 7 days of the check in date, full refund of the price paid for the reservation will be provided.</li>\n            <li>Cancellation within 7 days to 48 hours before check in time, half amount of the price paid for the reservation will be processed.</li>\n            <li>Cancellation from 48 hours to check in time, only cleaning fees will be refunded. If there are no cleaning fees for the reservation, no amount will be refunded.</li>\n            <li>Failure to arrive at your stay, will be treated as late cancellation and no amount will be refunded including no cleaning fees refund.</li>\n            <li>Guests arriving late at your stay, guests should inform the host about their arrival time, in order for Host to make your arrival accordingly. </li>\n            <li>All the changes for your reservation must be made through Bagpackar. If changes made in person or without Bagpackar platform, Bagpackar will no longer be responsible for the booking on either side for Guest or Host.</li>\n            <li>Shortening your stay of your reservation, no amount will be refunded for the remaining nights/days including cleaning fees.</li>\n         </ul>');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_career`
--

CREATE TABLE `bgpkr_career` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'Carriers'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_career`
--

INSERT INTO `bgpkr_career` (`id`, `body`) VALUES
(1, '<p>It is requested all travelers to go through all the COVID-19 travel advisories and information.111111111</p>\n\n<h2>WHO advisory:</h2>\n\n<p><a href=\"https://www.who.int/emergencies/diseases/novel-coronavirus-2019\" target=\"_blank\">https://www.who.int/emergencies/diseases/novel-coronavirus-2019</a></p>\n\n<h2>USA:</h2>\n\n<p><a href=\"https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.cdc.gov/coronavirus/2019-nCoV/\" target=\"_blank\">https://www.cdc.gov/coronavirus/2019-nCoV/</a></p>\n\n<h2>India:</h2>\n\n<p><a href=\"https://www.mea.gov.in/travel-advisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.mohfw.gov.in/\" target=\"_blank\">https://www.mohfw.gov.in/</a></p>\n\n<h1>COVID-19 Guidelines</h1>\n\n<p>We have gathered health and cleanliness guidelines to support you on your journey by keeping your property safe and also to keep both the host and guest healthy and protected. Bagpackar is not responsible if you are tested positive COVID-19. Guests are required to follow all safety measures. We are making every effort to make your stay safe and healthy.</p>\n\n<h2>Guidelines for Hosts for health safety:</h2>\n\n<p>Hosts who provide services to guests, host plays important role in maintaining cleanliness, safety and mitigating health risks by continuously practicing cleaning and safety protocols. These guidelines are important to maintaining hygiene and taking cleanliness to utmost levels due to the ongoing COVID-19 situation. We are in this together and we will soon be out of this situation but between these times we need to work together for our guest safety. We believe it is vital especially when working in the hospitality industry during these times.</p>\n\n<h2>Requirements:</h2>\n\n<p>Bagpackar provides support to both guests and hosts in many areas, but it is recommended to follow local authorities and governments guidelines for more details and safety measures. Based on the countries, hosts are required to follow their respective countries guidelines, rules and laws to maintain hygiene and cleanliness. You can find more information in COVID-19 TRAVEL INFORMATION AND ADVISORY section. So it is very important for you to review those respective guidelines.</p>\n\n<p>Please note that it is mandatory for hosts to check your government websites and apps to track the COVID-19 cases in your area. If your neighborhood has COVID-19 patients then you are required to make your listing available for at least 14 days.</p>\n\n<p>Bagpackar is taking care of collecting information on daily basis for any possible travel restrictions in different region. If your local government has imposed a travel restriction then all hosts are required to mark their listing as unavailable for current and future dates. Hosts are required to strictly follow local government rules and laws.</p>\n\n<h2>Communications:</h2>\n\n<p>Hosts are required to maintain social distancing (6 Feet apart) with guests all the time while communicating. Bagpackar encourage to use tools like smart lock, remote lock, keypad locks, etc to minimize contact with guests arriving at your property.</p>\n\n<p>Hosts are responsible for maintaining cleanliness and sanitizing their property to ensure the safety of your guests and staff on a regular basis.</p>\n\n<p>Any maintenance work required for your property should be completed 24 hours before arrival of guests and property are cleaned and sanitized after the work is completed. Hosts should maintain their upto date information about their listing on Bagpackar.</p>\n\n<h2>Host and Staff:</h2>\n\n<p>Hosts and their working staff/peers who are making sure about amazing guest experience are required to follow these guidelines for guest safety. Host and their peers should do their best to maintain professionalism and hospitality along with safety measures.</p>\n\n<p>Hosts should monitor their own as well as their staff&rsquo;s health and need to make sure they are not at any risk and do not present a risk for guests. Due to the ongoing COVID-19 situation, all the housekeepers are required to clean the property only after the guest&#39;s departure. Staff working at the property are required to take all measures to understand, respect and reinforce social distancing guidelines provided by your local authorities. Staff, housekeepers and your peers are always required to use appropriate protective equipment like masks and gloves when they are at the property.</p>\n\n<p>Hosts are required to maintain and provide extra basic amenities at the property for guests along with sanitizers and disinfectant wipes which should be always available.</p>\n\n<p>Following are common area where you to take special care to maintain hygiene and cleanliness:</p>\n\n<ul>\n	<li>Cleaning is the act of removing debris and dirt from a surface. Sanitizing kills bacteria on a surface. The general rule of thumb is to clean high-touch areas first then sanitize afterward.</li>\n	<li>Place transparent screens at front desk areas between reception staff and guests.</li>\n	<li>Use products that have been approved by health professionals in combating the spread of harmful organisms and viruses. Click here to read guidance issued by the World Health Organization.</li>\n	<li>Apply disinfectants during routine cleanings of guest rooms and public spaces, such as fitness areas and meeting rooms.</li>\n	<li>Add disinfectant when doing laundry and wash bedspreads more frequently.</li>\n	<li>Provide disposable disinfectant wipes to front-desk staff to disinfect surfaces that are also used by or exposed to guests. Make alcohol-based hand gel easily accessible and clearly marked for guests and staff in all public areas.</li>\n	<li>Clean and disinfect hampers or other carts for transporting laundry after they&rsquo;re used.</li>\n	<li>Clean and disinfect electronics such as tablets, touch screens, keyboards, remote controls, Ensure the sanitization and disinfection of publicly accessible toilets.</li>\n	<li>Maintain and disinfect your swimming pools, spas, and similar recreational facilities.</li>\n	<li>Install air purifiers in common areas and regularly change their filters.</li>\n	<li>Offer cashless payment as an option, if possible and agreed contractually.</li>\n	<li>Stay informed of the latest news from the World Health Organization.</li>\n	<li>Wherever possible, show guests what measures you have in place and understand why they matter.</li>\n</ul>\n\n<h2>Guests Responsibility:</h2>\n\n<p>We are all in this situation together, guests can also do numerous things to ensure safety and healthy measure. Guests are equally responsible for following all the rules, laws and guidelines provided by Bagpackar and Government. Guests should read local government guidelines for the area you are travelling to or have made reservations.</p>\n\n<p>It is mandatory for all the guests to monitor their health before arriving at the property. If a guest shows any minor symptoms or health risk, they are required to contact the Bagpackar support team to cancel their booking. Guests are required to cancel or postpone their bookings and travel plans if someone found COVID-19 positive in their locality.</p>\n\n<p>&nbsp;</p>\n\n<p>Guests need to read all the guidelines and travel restrictions about their travelling city or area provided by respective local government authorities. There are still travel restrictions in some states and more information can be found in COVID-19 TRAVEL INFORMATION AND ADVISORY section. According to government guidelines, arriving in listed states, travellers are required to isolate themselves for at least two weeks. Please read carefully about these guidelines before making any reservations.</p>\n\n<p>In situation like Guests develops or identifies virus symptoms before check-in or during the stay, guest should isolate themselves and inform the property as well as Bagpackar.com</p>\n\n<p>Guests are required to wear masks before arriving at the property and needed to maintain social distancing with property owners, staff and housekeepers.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_chat`
--

CREATE TABLE `bgpkr_chat` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `msg` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `action` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `sender_type` enum('guest','host') COLLATE utf8mb4_bin NOT NULL,
  `reciver_type` enum('guest','host') COLLATE utf8mb4_bin NOT NULL,
  `thumb_url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `msg_type` enum('text') CHARACTER SET latin1 NOT NULL DEFAULT 'text',
  `chat_type` enum('normal') CHARACTER SET latin1 NOT NULL,
  `read_status` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `chat_status` enum('active','inactive') CHARACTER SET latin1 DEFAULT NULL,
  `delete_for_everyone` enum('0','1') CHARACTER SET latin1 NOT NULL,
  `deleted_by` varchar(30) CHARACTER SET latin1 NOT NULL,
  `date_added` datetime NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `host_id` varchar(10) COLLATE utf8mb4_bin NOT NULL COMMENT 'Host ID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `bgpkr_chat`
--

INSERT INTO `bgpkr_chat` (`id`, `s_id`, `r_id`, `msg`, `action`, `url`, `sender_type`, `reciver_type`, `thumb_url`, `msg_type`, `chat_type`, `read_status`, `chat_status`, `delete_for_everyone`, `deleted_by`, `date_added`, `type`, `host_id`) VALUES
(1, 38, 34, 'hhh', '', '', 'guest', 'host', '', 'text', 'normal', '34', NULL, '0', '', '2021-04-13 13:54:43', 'simple', '176');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_chat_block_users`
--

CREATE TABLE `bgpkr_chat_block_users` (
  `b_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `block_status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_country_list`
--

CREATE TABLE `bgpkr_country_list` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bgpkr_country_list`
--

INSERT INTO `bgpkr_country_list` (`id`, `country_name`) VALUES
(1, 'Netherlands'),
(2, 'Aland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'AmericanSamoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia, Plurinational State of'),
(28, 'Bosnia and Herzegovina'),
(29, 'Botswana'),
(30, 'Brazil'),
(31, 'British Indian Ocean Territory'),
(32, 'Brunei Darussalam'),
(33, 'Bulgaria'),
(34, 'Burkina Faso'),
(35, 'Burundi'),
(36, 'Cambodia'),
(37, 'Cameroon'),
(38, 'Canada'),
(39, 'Cape Verde'),
(40, 'Cayman Islands'),
(41, 'Central African Republic'),
(42, 'Chad'),
(43, 'Chile'),
(44, 'China'),
(45, 'Christmas Island'),
(46, 'Cocos (Keeling) Islands'),
(47, 'Colombia'),
(48, 'Comoros'),
(49, 'Congo'),
(50, 'Congo, The Democratic Republic of the Congo'),
(51, 'Cook Islands'),
(52, 'Costa Rica'),
(53, 'Cote d\'Ivoire'),
(54, 'Croatia'),
(55, 'Cuba'),
(56, 'Cyprus'),
(57, 'Czech Republic'),
(58, 'Denmark'),
(59, 'Djibouti'),
(60, 'Dominica'),
(61, 'Dominican Republic'),
(62, 'Ecuador'),
(63, 'Egypt'),
(64, 'El Salvador'),
(65, 'Equatorial Guinea'),
(66, 'Eritrea'),
(67, 'Estonia'),
(68, 'Ethiopia'),
(69, 'Falkland Islands (Malvinas)'),
(70, 'Faroe Islands'),
(71, 'Fiji'),
(72, 'Finland'),
(73, 'France'),
(74, 'French Guiana'),
(75, 'French Polynesia'),
(76, 'Gabon'),
(77, 'Gambia'),
(78, 'Georgia'),
(79, 'Germany'),
(80, 'Ghana'),
(81, 'Gibraltar'),
(82, 'Greece'),
(83, 'Greenland'),
(84, 'Grenada'),
(85, 'Guadeloupe'),
(86, 'Guam'),
(87, 'Guatemala'),
(88, 'Guernsey'),
(89, 'Guinea'),
(90, 'Guinea-Bissau'),
(91, 'Guyana'),
(92, 'Haiti'),
(93, 'Holy See (Vatican City State)'),
(94, 'Honduras'),
(95, 'Hong Kong'),
(96, 'Hungary'),
(97, 'Iceland'),
(98, 'India'),
(99, 'Indonesia'),
(100, 'Iran, Islamic Republic of Persian Gulf'),
(101, 'Iraq'),
(102, 'Ireland'),
(103, 'Isle of Man'),
(104, 'Israel'),
(105, 'Italy'),
(106, 'Jamaica'),
(107, 'Japan'),
(108, 'Jersey'),
(109, 'Jordan'),
(110, 'Kazakhstan'),
(111, 'Kenya'),
(112, 'Kiribati'),
(113, 'Korea, Democratic People\'s Republic of Korea'),
(114, 'Korea, Republic of South Korea'),
(115, 'Kuwait'),
(116, 'Kyrgyzstan'),
(117, 'Laos'),
(118, 'Latvia'),
(119, 'Lebanon'),
(120, 'Lesotho'),
(121, 'Liberia'),
(122, 'Libyan Arab Jamahiriya'),
(123, 'Liechtenstein'),
(124, 'Lithuania'),
(125, 'Luxembourg'),
(126, 'Macao'),
(127, 'Macedonia'),
(128, 'Madagascar'),
(129, 'Malawi'),
(130, 'Malaysia'),
(131, 'Maldives'),
(132, 'Mali'),
(133, 'Malta'),
(134, 'Marshall Islands'),
(135, 'Martinique'),
(136, 'Mauritania'),
(137, 'Mauritius'),
(138, 'Mayotte'),
(139, 'Mexico'),
(140, 'Micronesia, Federated States of Micronesia'),
(141, 'Moldova'),
(142, 'Monaco'),
(143, 'Mongolia'),
(144, 'Montenegro'),
(145, 'Montserrat'),
(146, 'Morocco'),
(147, 'Mozambique'),
(148, 'Myanmar'),
(149, 'Namibia'),
(150, 'Nauru'),
(151, 'Nepal'),
(152, 'Afghanistan'),
(153, 'Netherlands Antilles'),
(154, 'New Caledonia'),
(155, 'New Zealand'),
(156, 'Nicaragua'),
(157, 'Niger'),
(158, 'Nigeria'),
(159, 'Niue'),
(160, 'Norfolk Island'),
(161, 'Northern Mariana Islands'),
(162, 'Norway'),
(163, 'Oman'),
(164, 'Pakistan'),
(165, 'Palau'),
(166, 'Palestinian Territory, Occupied'),
(167, 'Panama'),
(168, 'Papua New Guinea'),
(169, 'Paraguay'),
(170, 'Peru'),
(171, 'Philippines'),
(172, 'Pitcairn'),
(173, 'Poland'),
(174, 'Portugal'),
(175, 'Puerto Rico'),
(176, 'Qatar'),
(177, 'Romania'),
(178, 'Russia'),
(179, 'Rwanda'),
(180, 'Reunion'),
(181, 'Saint Barthelemy'),
(182, 'Saint Helena, Ascension and Tristan Da Cunha'),
(183, 'Saint Kitts and Nevis'),
(184, 'Saint Lucia'),
(185, 'Saint Martin'),
(186, 'Saint Pierre and Miquelon'),
(187, 'Saint Vincent and the Grenadines'),
(188, 'Samoa'),
(189, 'San Marino'),
(190, 'Sao Tome and Principe'),
(191, 'Saudi Arabia'),
(192, 'Senegal'),
(193, 'Serbia'),
(194, 'Seychelles'),
(195, 'Sierra Leone'),
(196, 'Singapore'),
(197, 'Slovakia'),
(198, 'Slovenia'),
(199, 'Solomon Islands'),
(200, 'Somalia'),
(201, 'South Africa'),
(202, 'South Sudan'),
(203, 'South Georgia and the South Sandwich Islands'),
(204, 'Spain'),
(205, 'Sri Lanka'),
(206, 'Sudan'),
(207, 'Suriname'),
(208, 'Svalbard and Jan Mayen'),
(209, 'Swaziland'),
(210, 'Sweden'),
(211, 'Switzerland'),
(212, 'Syrian Arab Republic'),
(213, 'Taiwan'),
(214, 'Tajikistan'),
(215, 'Tanzania, United Republic of Tanzania'),
(216, 'Thailand'),
(217, 'Timor-Leste'),
(218, 'Togo'),
(219, 'Tokelau'),
(220, 'Tonga'),
(221, 'Trinidad and Tobago'),
(222, 'Tunisia'),
(223, 'Turkey'),
(224, 'Turkmenistan'),
(225, 'Turks and Caicos Islands'),
(226, 'Tuvalu'),
(227, 'Uganda'),
(228, 'Ukraine'),
(229, 'United Arab Emirates'),
(230, 'United Kingdom'),
(231, 'United States'),
(232, 'Uruguay'),
(233, 'Uzbekistan'),
(234, 'Vanuatu'),
(235, 'Venezuela, Bolivarian Republic of Venezuela'),
(236, 'Vietnam'),
(237, 'Virgin Islands, British'),
(238, 'Virgin Islands, U.S.'),
(239, 'Wallis and Futuna'),
(240, 'Yemen'),
(241, 'Zambia'),
(242, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_covid19_guidelines`
--

CREATE TABLE `bgpkr_covid19_guidelines` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'covid-19 guidelines text'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_covid19_guidelines`
--

INSERT INTO `bgpkr_covid19_guidelines` (`id`, `body`) VALUES
(1, '<p>It is requested all travelers to go through all the COVID-19 travel advisories and information. </p>\n     <h2>WHO advisory:</h2>\n     <p><a href=\"https://www.who.int/emergencies/diseases/novel-coronavirus-2019\" target=\"_blank\">https://www.who.int/emergencies/diseases/novel-coronavirus-2019</a>\n         </p>\n     <h2>USA:</h2>\n     <p><a href=\"https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a>\n         </p>\n     <p><a href=\"https://www.cdc.gov/coronavirus/2019-nCoV/\" target=\"_blank\">https://www.cdc.gov/coronavirus/2019-nCoV/</a>\n         </p>\n     <h2>India:</h2>\n      <p><a href=\"https://www.mea.gov.in/travel-advisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a>\n         </p>\n     <p><a href=\"https://www.mohfw.gov.in/\" target=\"_blank\">https://www.mohfw.gov.in/</a>\n         </p>\n     <h1 class=\"text-center\">COVID-19 Guidelines</h1>\n     <p>We have gathered health and cleanliness guidelines to support you on your journey by keeping your property safe and also to keep both the host and guest healthy and protected.\nBagpackar is not responsible if you are tested positive COVID-19. Guests are required to follow all safety measures. We are making every effort to make your stay safe and healthy.</p>\n\n<h2>Guidelines for Hosts for health safety:</h2>\n\n<p>Hosts who provide services to guests, host plays important role in maintaining cleanliness, safety and mitigating health risks by continuously practicing cleaning and safety protocols. These guidelines are important to maintaining hygiene and taking cleanliness to utmost levels due to the ongoing COVID-19 situation. We are in this together and we will soon be out of this situation but between these times we need to work together for our guest safety. We believe it is vital especially when working in the hospitality industry during these times. </p>\n\n<h2>Requirements: </h2>\n\n<p>Bagpackar provides support to both guests and hosts in many areas, but it is recommended to follow local authorities and governments guidelines for more details and safety measures. Based on the countries, hosts are required to follow their respective countries guidelines, rules and laws to maintain hygiene and cleanliness. You can find more information in COVID-19 TRAVEL INFORMATION AND ADVISORY section. So it is very important for you to review those respective guidelines. </p>\n\n<p>Please note that it is mandatory for hosts to check your government websites and apps to track the COVID-19 cases in your area. If your neighborhood has COVID-19 patients then you are required to make your listing available for at least 14 days. </p>\n\n<p>Bagpackar is taking care of collecting information on daily basis for any possible travel restrictions in different region. If your local government has imposed a travel restriction then all hosts are required to mark their listing as unavailable for current and future dates. Hosts are required to strictly follow local government rules and laws. </p>\n\n<h2>Communications: </h2>\n\n<p>Hosts are required to maintain social distancing (6 Feet apart) with guests all the time while communicating. Bagpackar encourage to use tools like smart lock, remote lock, keypad locks, etc to minimize contact with guests arriving at your property. </p>\n\n<p>Hosts are responsible for maintaining cleanliness and sanitizing their property to ensure the safety of your guests and staff on a regular basis. </p>\n\n<p>Any maintenance work required for your property should be completed 24 hours before arrival of guests and property are cleaned and sanitized after the work is completed. Hosts should maintain their upto date information about their listing on Bagpackar. </p>\n\n<h2>Host and Staff: </h2>\n\n<p>Hosts and their working staff/peers who are making sure about amazing guest experience are required to follow these guidelines for guest safety. Host and their peers should do their best to maintain professionalism and hospitality along with safety measures. </p>\n\n<p>Hosts should monitor their own as well as their staff’s health and need to make sure they are not at any risk and do not present a risk for guests. Due to the ongoing COVID-19 situation, all the housekeepers are required to clean the property only after the guest\'s departure. Staff working at the property are required to take all measures to understand, respect and reinforce social distancing guidelines provided by your local authorities. Staff, housekeepers and your peers are always required to use appropriate protective equipment like masks and gloves when they are at the property. </p>\n\n<p>Hosts are required to maintain and provide extra basic amenities at the property for guests along with sanitizers and disinfectant wipes which should be always available. </p>\n\n<p>Following are common area where you to take special care to maintain hygiene and cleanliness:</p>\n <ul>\n<li>Cleaning is the act of removing debris and dirt from a surface. Sanitizing kills bacteria on a surface. The general rule of thumb is to clean high-touch areas first then sanitize afterward.</li>\n<li>Place transparent screens at front desk areas between reception staff and guests.</li>\n<li>Use products that have been approved by health professionals in combating the spread of harmful organisms and viruses. Click here to read guidance issued by the World Health Organization.</li>\n<li>Apply disinfectants during routine cleanings of guest rooms and public spaces, such as fitness areas and meeting rooms.</li>\n<li>Add disinfectant when doing laundry and wash bedspreads more frequently.</li>\n<li>Provide disposable disinfectant wipes to front-desk staff to disinfect surfaces that are also used by or exposed to guests. Make alcohol-based hand gel easily accessible and clearly marked for guests and staff in all public areas.</li>\n<li>Clean and disinfect hampers or other carts for transporting laundry after they’re used.</li>\n<li>Clean and disinfect electronics such as tablets, touch screens, keyboards, remote controls, Ensure the sanitization and disinfection of publicly accessible toilets.</li>\n<li>Maintain and disinfect your swimming pools, spas, and similar recreational facilities.</li>\n<li>Install air purifiers in common areas and regularly change their filters.</li>\n<li>Offer cashless payment as an option, if possible and agreed contractually.</li>\n<li>Stay informed of the latest news from the World Health Organization.</li>\n<li>Wherever possible, show guests what measures you have in place and understand why they matter.</li>\n</ul>\n\n<h2>Guests Responsibility:</h2>\n\n<p>We are all in this situation together, guests can also do numerous things to ensure safety and healthy measure. Guests are equally responsible for following all the rules, laws and guidelines provided by Bagpackar and Government. Guests should read local government guidelines for the area you are travelling to or have made reservations.</p>\n<p>It is mandatory for all the guests to monitor their health before arriving at the property. If a guest shows any minor symptoms or health risk, they are required to contact the Bagpackar support team to cancel their booking. Guests are required to cancel or postpone their bookings and travel plans if someone found COVID-19 positive in their locality.</p> \n<p>Guests need to read all the guidelines and travel restrictions about their travelling city or area provided by respective local government authorities. There are still travel restrictions in some states and more information can be found in COVID-19 TRAVEL INFORMATION AND ADVISORY section. According to government guidelines, arriving in listed states, travellers are required to isolate themselves for at least two weeks. Please read carefully about these guidelines before making any reservations.</p>\n\n<p>In situation like Guests develops or identifies virus symptoms before check-in or during the stay, guest should isolate themselves and inform the property as well as Bagpackar.com</p>\n\n<p>Guests are required to wear masks before arriving at the property and needed to maintain social distancing with property owners, staff and housekeepers.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_discover`
--

CREATE TABLE `bgpkr_discover` (
  `d_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `added_on` date NOT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_discover`
--

INSERT INTO `bgpkr_discover` (`d_id`, `image`, `address`, `country`, `city`, `latitude`, `longitude`, `added_on`, `updated_on`) VALUES
(1, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/628-UdJHKOC5C2.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(2, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/936-giv7T6zWkJ.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(3, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/453-0vptpee6YH.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(4, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/311-UUASoocNox.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(5, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/845-3iGdJy0hqU.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(6, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/990-i9UdIDShSV.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(7, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/559-6fygTa6S4C.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(8, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/417-JoTaDWmHhk.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(9, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/440-noTG0GeU2y.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(10, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/949-6h9Lrq5nmN.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(11, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/985-Y5XyKaokae.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(12, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/432-tZJD4OPutj.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(13, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/349-WZO4oJ1giv.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(14, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-0eBTNHQULp.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(15, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/105-55830gxWLO.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873', '2020-07-07', NULL),
(16, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/175-S0rTNUJiIl.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(17, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-i5T7fJzMaX.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(18, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/180-OQWs8offdo.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(19, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/385-UCTi6rBVW7.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(20, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/689-6BOf9c5sxA.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(21, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/553-G9xdPYy9LO.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(22, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/284-hguYLc96U1.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(23, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/109-Ign9v3g7TB.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(24, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/316-BtUAdNaLgo.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(25, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/536-vOJmRHAAjf.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(26, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/518-toItT5wVaP.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(27, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/703-eUo8S3PkdY.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(28, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/980-b4XAAdtuiT.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(29, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/977-qatjed7lb2.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(30, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/652-t4S9qeyZto.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(31, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/866-TnyWohwo9S.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(32, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/329-YvCG7dCatc.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(33, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/416-iogNf1EeaX.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(34, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/439-IrW0allWCa.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(35, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-U5DufqTenP.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(36, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/191-ALDMF12asU.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(37, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/710-DYUOcyT95j.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(38, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/934-VVmntcitsW.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(39, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/257-JW6uQX7Xlt.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(40, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/867-syJMtaBgco.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(41, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/212-WZ3tLWCiSa.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(42, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/490-RAXlTxmwFy.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(43, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/682-nX4PnKBwas.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(44, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/368-xkPXLcoXAP.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(45, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/254-ZbG0TE2aso.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(46, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/634-ZC4FDPth83.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(47, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/642-05TAlwaIn6.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(48, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/988-T4lwymT1Am.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(49, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/846-uQgeiZnxUQ.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(50, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/588-asAf1wDrx1.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(51, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/878-oWPlaU6nga.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(52, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/543-dcnX9Ob4uY.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(53, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/971-7nTvKzTKOT.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(54, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/275-J5MLlrEkkP.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(55, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/369-FSRooQxwkC.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(56, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/754-KFebLbWctR.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(57, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/569-xtGoyNpmJl.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(58, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/522-KdUrz1bXir.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(59, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-yKSeT9psXZ.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_help_support`
--

CREATE TABLE `bgpkr_help_support` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'help and support text'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_help_support`
--

INSERT INTO `bgpkr_help_support` (`id`, `body`) VALUES
(1, '<p><b>Do guests get a refund of the cleaning fee? </b></p>\n<p>The cleaning fee is refunded if the guest cancels before check-in. </p>\n\n<p><b>Can Guest will get a refund if the listing/stay is not what is mentioned in the picture or not what was expected ? </b></p>\n<p>Bagpackar support team will help guest to find new stays at the nearby location or we will issue a full refund if the listing is not accessible, unsafe or not clean or legit problems with the property that host did not mentioned in the listing. But a refund can’t be issued is the issue is reported after 2 hours to check in time. </p>\n\n<p><b>What if there is an issue with the property that the host can’t or won’t fix, can the guest get a full refund ? </b> </p>\n<p>Guests need to contact our support team within 4 hours of the stay. In legit cases, guests might get reservations or will try to find new stays in the area. </p>\n\n<p><b>Can guests get a refund of the cancellation of the booking due to emergency ? </b></p>\n<p>Guests might be able to get a refund in case of emergency before the check in date. But given guests have to provide proof of emergency. </p>\n\n<p><b>How long does it take to get a refund? </b> </p>\n<p>Refunds usually show up within 15 days but in India it might take upto 2 months. </p>\n\n<p><b>Can I make changes to my booking ? </b></p>\n<p>For any kind of changes, you will have to cancel the current booking which will impose cancellation charges based on the cancellation policy and you will have to make new bookings. </p>\n\n<p><b>Can I adjust/bring one or two extra people in my booking if they are not mentioned while booking ? </b> </p>\n<p>Bagpackar is not recommending to add extra people on your trip after the booking since host can reject this request. It completely depend on host if they want to adjust extra people on their listing. </p>\n\n<p><b>Can I make changes or cancel my booking due to COVID-19? </b></p>\n<p>Any changes you wish to make to your booking is dependent on the policies of your booking. Due to the ongoing impact of COVID-19, certain destinations continue to impose and modify restrictions on travel. Please check to see whether your destination has any travel restrictions prior to booking with Bagpackar. </p>\n\n<p><b>How to create an account ? </b></p>\n\n<p>To create your account in Bagpackar, go to Sign up option and fill all the necessary details in the fields. Please make sure you enter all the details correctly including Name, email and phone number since the host can ask for your Gov. ID for verification and confirm booking. </p>\n\n<p>After completing all the details in your profile’s account page, you can continue browsing for stays and bookings. </p>\n\n<p><b>How do I change my password ? </b> </p>\n\n<p>Tip: Your password is case sensitive. So you might be entering your password correctly but some words are case mismatched. </p>\n\n<p>If you are having trouble login into your Bagpackar’s account, then go forget password in Login Page. You will be able to change your password by entering your email address, you will receive an email from Bagpackar which will include a link to reset the password. </p>\n\n<p>If you know your current password and want to change it. To do so, login into your account then go to your profile and then click settings. Once you are at your account’s setting, go to “Reset Password” to change your password. </p>\n\n<p>How do I book a place in Bagpackar and things to know during your stay ? </p>\n\n<p>You can book the property you like in Bagpackar platform amongst the thousands of properties listed across the country. Based on your preference you can filter the search result on Bagpackar to find the stay you like to visit. </p>\n\n<h2>Finding your Unique stay:</h2>\n<p>You can look at your preferred stays by entering the location that you want to visit and book a stay. We have covered most of the favorite locations across the country. </p>\n\n<p>While searching for a stay, please make sure you enter dates and number of guests travelling for your accommodation to get the most precise search results. You can even filter out your search result based on your preference and requirements. </p>\n\n<h2>Things to check before booking: </h2>\n\n<p>If you find your preferred stay, then make sure you check reviews, house rules, offered amenities, things to take care, things guests should know and read about the host and about the neighborhood. If you find any discrepancies that could interfere with your happy stay then find a new stay. </p>\n\n<h2>Booking your stay: </h2>\n\n<p>Please make sure you check out our cancellation policy before proceeding. Once you find your perfect place, you can make your booking. You will be receiving confirmation email for your booking. </p>\n\n<h2>Arriving at your stay: </h2>\n\n<p>Please make sure you carry your ID with you, sometimes the host can ask for your ID to confirm authorization of your bookings. In a country like India, you might be required to submit your government ID to host and ID will be returned during your check out. </p>\n\n<h2>Guest responsibility during stay: </h2>\n\n<p>We love you to feel like you are at home miles apart and enjoy being a local. As a guest, you are responsible to keep the accomodation clean or make it less messy. You will be responsible to cover for any damages at the property or physical injuries that are caused by you or by accident during your stay. Bagpackar is not responsible for any damages or injuries that are incurred during your stay. </p>\n\n<p><b>What is Instant Booking ? </b></p>\n\n<p>Guests who make last minute booking for their stay, hosts do not get approval requests for their property. Guests can book their property directly. \n\n<p><b>What is a Booking request ? </b></p>\n\n<p>For every booking a Guest makes, the Host/Property owner gets the booking request. Host can either accept or reject your booking. Most of the time the host accepts your booking but in very rare conditions the host may reject your bookings. Your booking is confirmed only when the host accepts your booking. </p>\n\n<p><b>Why am I being asked to add account details? </b> </p>\n\n<p>You are required to provide more information about your account details. We can ask following information which are required while hosting a property. </p>\n\n<p>It is mandatory for all hosts to provide your legal name which appears on a government ID or official document. </p>\n<p>You are required to provide a date of birth for account verification. So it requested for all hosts to add your date of birth correctly while creating the account. </p>\n<p>Also your physical address where you currently live. This is different from your listed property address. </p>\nAnd also we ask to provide a government ID for identity verification. </p>\n\n<p><b>How to host a home ? </b> </p>\n\n<p>If you are looking for hosting your property and making an extra income. You can list your property for free on Bagpackar platform. Bagpackar charges very less service fees as compared to competitors. You can expect more return on your listings through Bagpackar. </p>\n\n<p>To host a property in Bagpackar, go to “Host a Home” on Bagpackar and fill all the required details to successfully list your property. You are required to fill all the necessary details accurately in order to get your listing approved on Bagpackar. </p>\n\n<p>Based on the type of property you have for listing, the host needs to make a selection from the property type. </p>\n\n<p><b>What are the Bagpackar fees ? </b> </p>\n\n<p>There are no charges for hosts to list their apartment in Bagpackar. Bagpackar charges service fees based on the amount of listing to run Bagpackar as a platform. </p>');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_host_complete_status`
--

CREATE TABLE `bgpkr_host_complete_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL,
  `form_1` enum('0','1') NOT NULL,
  `form_2` enum('0','1') NOT NULL COMMENT '''0'' for incomplete ''1'' for complete',
  `form_3` enum('0','1') NOT NULL,
  `form_4` enum('0','1') NOT NULL,
  `form_5` enum('0','1') NOT NULL,
  `form_6` enum('0','1') NOT NULL,
  `form_7` enum('0','1') NOT NULL,
  `form_8` enum('0','1') NOT NULL,
  `form_9` enum('0','1') NOT NULL,
  `form_10` enum('0','1') NOT NULL,
  `form_11` enum('0','1') NOT NULL,
  `form_12` enum('0','1') NOT NULL,
  `form_13` enum('0','1') NOT NULL,
  `form_14` enum('0','1') NOT NULL,
  `form_15` enum('0','1') NOT NULL,
  `form_16` enum('0','1') NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Complete Form Status of Properties Details ';

--
-- Dumping data for table `bgpkr_host_complete_status`
--

INSERT INTO `bgpkr_host_complete_status` (`id`, `host_id`, `form_1`, `form_2`, `form_3`, `form_4`, `form_5`, `form_6`, `form_7`, `form_8`, `form_9`, `form_10`, `form_11`, `form_12`, `form_13`, `form_14`, `form_15`, `form_16`, `added_on`) VALUES
(1, 1, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-08-20 07:37:21'),
(4, 4, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 11:55:40'),
(5, 5, '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '2020-08-20 11:58:11'),
(6, 6, '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 12:13:27'),
(7, 7, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 12:14:40'),
(8, 8, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 12:17:24'),
(9, 9, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 12:31:36'),
(10, 10, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 12:32:25'),
(11, 11, '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '1', '1', '1', '0', '0', '2020-08-20 12:50:39'),
(12, 12, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 12:58:24'),
(13, 13, '1', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 13:03:46'),
(14, 14, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-20 13:34:27'),
(15, 15, '1', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-21 22:29:39'),
(18, 18, '1', '1', '0', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-24 08:16:25'),
(19, 19, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-24 20:27:07'),
(22, 22, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-08-26 09:00:05'),
(23, 23, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:00:33'),
(24, 24, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:06:30'),
(25, 25, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:07:52'),
(26, 26, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:18:01'),
(27, 27, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:20:53'),
(28, 28, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:22:08'),
(29, 29, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-26 11:24:07'),
(34, 34, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-08-27 08:08:52'),
(35, 35, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-08-27 09:48:53'),
(36, 36, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-08-27 12:19:13'),
(37, 37, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-08-27 12:39:29'),
(39, 39, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-01 12:28:10'),
(43, 43, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-02 07:06:56'),
(45, 45, '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-09-03 11:00:32'),
(46, 46, '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '0', '0', '0', '0', '2020-09-04 05:15:22'),
(47, 47, '1', '1', '0', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '2020-09-04 11:30:09'),
(50, 50, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-05 12:49:19'),
(52, 52, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-08 09:06:26'),
(58, 58, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-10 09:48:41'),
(60, 60, '1', '1', '0', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '2020-09-11 09:20:47'),
(93, 93, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 13:00:02'),
(94, 94, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 13:10:56'),
(95, 95, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 13:17:39'),
(97, 97, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 13:50:11'),
(98, 98, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 14:12:05'),
(99, 99, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 15:01:52'),
(103, 103, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 19:26:08'),
(104, 104, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 19:33:33'),
(105, 105, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 19:44:49'),
(106, 106, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 19:53:53'),
(108, 108, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-17 20:48:12'),
(109, 109, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-20 20:16:31'),
(111, 111, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-21 11:48:16'),
(112, 112, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-21 12:03:07'),
(137, 137, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-22 21:07:56'),
(138, 138, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-22 21:18:42'),
(139, 139, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-22 21:34:29'),
(145, 145, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-23 05:45:56'),
(150, 150, '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '2020-09-24 12:38:13'),
(154, 154, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-10-14 10:57:28'),
(156, 156, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-10-14 19:52:05'),
(157, 157, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-10-15 10:27:03'),
(158, 158, '1', '1', '0', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '2020-10-19 11:36:07'),
(159, 159, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '2020-11-02 13:07:46'),
(160, 160, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-03 12:09:16'),
(165, 165, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-04 07:09:12'),
(168, 168, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-04 12:06:45'),
(169, 169, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-11-05 06:40:04'),
(170, 170, '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '0', '0', '2020-11-05 06:40:46'),
(171, 171, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-05 06:45:14'),
(172, 172, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-05 20:43:02'),
(174, 174, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-13 07:45:26'),
(175, 175, '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2020-11-17 14:44:55'),
(176, 176, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-17 15:43:16'),
(177, 177, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-22 19:09:17'),
(182, 182, '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2020-11-27 08:24:50'),
(183, 183, '1', '1', '0', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '2020-11-27 08:50:31'),
(189, 189, '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '0', '0', '0', '0', '0', '0', '2020-11-27 22:40:34'),
(190, 190, '1', '1', '0', '1', '1', '1', '1', '0', '1', '0', '1', '1', '1', '1', '1', '1', '2020-12-03 09:17:48'),
(191, 191, '1', '1', '0', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '2020-12-03 11:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_host_government_id`
--

CREATE TABLE `bgpkr_host_government_id` (
  `id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL COMMENT 'property id',
  `govid_url` varchar(130) NOT NULL COMMENT 'image url',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Host Government Id Images';

--
-- Dumping data for table `bgpkr_host_government_id`
--

INSERT INTO `bgpkr_host_government_id` (`id`, `host_id`, `govid_url`, `added_on`) VALUES
(5, 5, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/723-wiWQBjzokk.png', '2020-08-20 12:05:46'),
(6, 5, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/420-S7ioNG5yPt.jpeg', '2020-08-20 12:05:46'),
(7, 11, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/311-dr6sgHUnoQ.png', '2020-08-20 12:51:53'),
(8, 11, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/149-fhF4aSlQPC.png', '2020-08-20 12:51:53'),
(17, 1, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/283-wkaTydwjPE.jfif', '2020-08-21 17:00:34'),
(18, 1, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/559-nOltrG6SFW.jfif', '2020-08-21 17:00:34'),
(41, 37, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/484-iobdeIucTO.jpeg', '2020-08-27 12:45:45'),
(42, 37, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/246-rbwoWgZatw.jpg', '2020-08-27 12:45:45'),
(45, 36, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/705-vQT3XG6LZC.jfif', '2020-08-27 12:48:20'),
(46, 36, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/343-TgD6Oj0lXk.jfif', '2020-08-27 12:48:20'),
(49, 43, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/781-A4ggcBT0y7.png', '2020-09-02 07:15:04'),
(50, 43, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/960-ahFWiZDCa8.png', '2020-09-02 07:15:04'),
(51, 46, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/799-aNtpow7Hc3.jfif', '2020-09-04 05:17:33'),
(52, 46, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/657-CzVfDHUnjX.jfif', '2020-09-04 05:17:33'),
(55, 34, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/463-TiucWpouou.jpeg', '2020-09-05 01:51:19'),
(56, 34, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/406-iTC0LTi3a7.png', '2020-09-05 01:51:19'),
(63, 52, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/230-LuUhvFYJYk.png', '2020-09-08 09:15:18'),
(64, 52, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/130-Ea3yvU2HpU.jpg', '2020-09-08 09:15:18'),
(65, 22, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/948-huhuW2lUW5.jpg', '2020-09-08 18:07:36'),
(66, 22, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/179-AiIMocJOtd.png', '2020-09-08 18:07:36'),
(69, 39, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/637-Fdveg8stU4.jpeg', '2020-09-09 17:08:09'),
(70, 39, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/131-PDAMrYkAMM.jpeg', '2020-09-09 17:08:09'),
(71, 58, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/707-UHulb7qveq.jpg', '2020-09-10 09:53:21'),
(72, 58, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/375-noXerqnee8.jpg', '2020-09-10 09:53:21'),
(87, 93, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/852-aaonRJTYRd.jpeg', '2020-09-17 13:06:26'),
(88, 93, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/138-eOtOOrWUtv.jpeg', '2020-09-17 13:06:26'),
(89, 94, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/469-I0UkUczYW5.jpeg', '2020-09-17 13:13:36'),
(90, 94, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/105-axOFh7Djgc.jpeg', '2020-09-17 13:13:36'),
(91, 95, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/888-xcQuHEtthD.jpeg', '2020-09-17 13:22:18'),
(92, 95, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/441-4STdoXva1c.jpeg', '2020-09-17 13:22:18'),
(93, 97, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/416-YdobHecnTT.jpeg', '2020-09-17 13:55:06'),
(94, 97, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/947-NDiIDu89or.jpeg', '2020-09-17 13:55:06'),
(95, 98, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/160-ls4gl9druy.jpeg', '2020-09-17 14:15:55'),
(96, 98, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/743-qy7tIGWLPc.jpeg', '2020-09-17 14:15:55'),
(97, 99, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/162-aTL4m7WYtc.jpeg', '2020-09-17 15:06:04'),
(98, 99, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/338-QhWKUJ2RkR.jpeg', '2020-09-17 15:06:04'),
(99, 103, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/957-gJn5NFIcyD.jpeg', '2020-09-17 19:30:21'),
(100, 103, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/448-T9AWQyfyte.jpeg', '2020-09-17 19:30:21'),
(101, 104, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/221-oTc4KwxSGa.jpeg', '2020-09-17 19:36:01'),
(102, 104, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/299-7KdonS4I4o.jpeg', '2020-09-17 19:36:01'),
(103, 105, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/779-pw6etA3PEe.jpeg', '2020-09-17 19:48:54'),
(104, 105, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/790-i3TGMCZwSP.jpeg', '2020-09-17 19:48:54'),
(105, 106, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/756-y2ObfTlbWg.jpeg', '2020-09-17 19:56:20'),
(106, 106, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/881-Ob8eysTZTC.jpeg', '2020-09-17 19:56:20'),
(109, 108, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/101-PXVyWbTXm2.jpeg', '2020-09-17 20:52:36'),
(110, 108, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/115-L0dKScltRJ.jpeg', '2020-09-17 20:52:36'),
(119, 111, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/466-tiBu9ajLtt.jpeg', '2020-09-21 11:51:35'),
(120, 111, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/823-tv7PSYrzpc.jpeg', '2020-09-21 11:51:35'),
(121, 112, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/837-bhkYn5kSjj.jpeg', '2020-09-21 12:06:06'),
(122, 112, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/443-ggjct9ipg3.jpeg', '2020-09-21 12:06:06'),
(123, 137, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/905-toco2ywVLg.jpeg', '2020-09-22 21:12:05'),
(124, 137, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/405-LIePXOyISi.jpeg', '2020-09-22 21:12:05'),
(125, 138, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/901-n3tBWVgi5r.jpeg', '2020-09-22 21:22:31'),
(126, 138, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/357-t5FjSTLcly.jpeg', '2020-09-22 21:22:31'),
(127, 139, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/722-f1NuHCWJnE.jpeg', '2020-09-22 21:38:02'),
(128, 139, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/423-UaeVN7tnas.jpeg', '2020-09-22 21:38:02'),
(129, 145, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/243-Wb3oAWcVtT.png', '2020-09-23 05:49:50'),
(130, 145, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/232-nTLaYlcj59.png', '2020-09-23 05:49:50'),
(145, 150, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/242-Txygxtd04E.jpeg', '2020-09-25 06:13:53'),
(146, 150, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/949-hyy6JTjxeI.jpeg', '2020-09-25 06:13:54'),
(147, 109, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/489-W2VdqNeIua.png', '2020-10-10 07:47:39'),
(148, 109, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/634-lYtiodNTnq.png', '2020-10-10 07:47:39'),
(153, 157, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/864-4ibQnROrYe.jfif', '2020-10-15 10:45:19'),
(154, 157, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/340-oOmaCTH9YJ.jfif', '2020-10-15 10:45:19'),
(155, 154, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/498-kU4a7oTpau.jpeg', '2020-10-19 16:46:40'),
(156, 154, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/943-npDAMV3JKc.jpeg', '2020-10-19 16:46:40'),
(163, 159, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/396-eyaamjcYPV.jpg', '2020-11-02 13:13:18'),
(164, 159, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/109-8eDiTXZX1a.jpg', '2020-11-02 13:13:19'),
(165, 160, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/954-NiuEop0qfi.png', '2020-11-03 13:31:24'),
(166, 160, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/422-ueU9oZiRrL.jpg', '2020-11-03 13:31:24'),
(171, 168, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/403-y2faExzBg8.jpg', '2020-11-04 13:14:00'),
(172, 168, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/212-UVoQrITsSC.jpg', '2020-11-04 13:14:00'),
(173, 156, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/563-y2WVvWXnna.png', '2020-11-05 06:38:10'),
(174, 156, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/729-Ixha4KNyAb.png', '2020-11-05 06:38:10'),
(175, 170, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/124-WsA1oqHaut.png', '2020-11-05 06:43:03'),
(176, 170, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/465-T3h2HtTO8W.png', '2020-11-05 06:43:03'),
(177, 171, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/309-4c1iMb8c7a.png', '2020-11-05 06:54:03'),
(178, 171, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/564-WiYDdEo8Lh.PNG', '2020-11-05 06:54:03'),
(179, 172, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/208-ITyoga3UTr.jpeg', '2020-11-05 20:45:44'),
(180, 172, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/806-GUFoBykpFu.png', '2020-11-05 20:45:44'),
(181, 174, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/428-2KhicyjyL0.jpg', '2020-11-13 08:13:12'),
(182, 174, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/435-uhMhjpjj7n.jpg', '2020-11-13 08:13:12'),
(183, 176, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/637-ToCR72Yngv.jpg', '2020-11-17 15:51:46'),
(184, 176, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/563-SpcghluVk6.jpg', '2020-11-17 15:51:46'),
(185, 177, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/872-ZouTi6HnnT.jpeg', '2020-11-22 19:15:12'),
(186, 177, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/647-e4VcpkmEvV.jpg', '2020-11-22 19:15:12');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_host_monthly_payment`
--

CREATE TABLE `bgpkr_host_monthly_payment` (
  `h_m_id` int(11) NOT NULL COMMENT 'Monthly Payment ID',
  `host_id` int(11) NOT NULL COMMENT 'Host ID',
  `payment_month` varchar(20) NOT NULL COMMENT 'Payment Month',
  `payment_year` varchar(10) NOT NULL COMMENT 'Payment Year',
  `total_amount` float NOT NULL COMMENT 'Total Amount',
  `last_updated` datetime NOT NULL COMMENT 'Last Updated'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_host_monthly_payment`
--

INSERT INTO `bgpkr_host_monthly_payment` (`h_m_id`, `host_id`, `payment_month`, `payment_year`, `total_amount`, `last_updated`) VALUES
(1, 1, 'August', '2020', 4430, '2020-09-30 06:02:10'),
(2, 20, 'August', '2020', 0, '2020-09-30 05:27:56'),
(3, 22, 'August', '2020', 2100, '2020-09-30 06:02:10'),
(4, 33, 'August', '2020', 0, '2020-09-30 05:27:56'),
(5, 34, 'August', '2020', 0, '2020-09-30 05:27:56'),
(6, 36, 'August', '2020', 0, '2020-09-30 05:27:56'),
(7, 37, 'August', '2020', 0, '2020-09-30 05:27:56'),
(8, 43, 'August', '2020', 0, '2020-09-30 05:27:56'),
(9, 52, 'August', '2020', 0, '2020-09-30 05:27:56'),
(10, 58, 'August', '2020', 0, '2020-09-30 05:27:56'),
(11, 1, 'September', '2020', 0, '2020-09-30 05:27:56'),
(12, 20, 'September', '2020', 0, '2020-09-30 05:27:56'),
(13, 22, 'September', '2020', 0, '2020-09-30 05:27:56'),
(14, 33, 'September', '2020', 0, '2020-09-30 05:27:56'),
(15, 34, 'September', '2020', 0, '2020-09-30 05:27:56'),
(16, 36, 'September', '2020', 0, '2020-09-30 05:27:56'),
(17, 37, 'September', '2020', 0, '2020-09-30 05:27:56'),
(18, 43, 'September', '2020', 0, '2020-09-30 05:27:56'),
(19, 52, 'September', '2020', 0, '2020-09-30 05:27:56'),
(20, 58, 'September', '2020', 231968, '2020-10-19 06:00:17'),
(21, 20, 'August', '2020', 0, '2020-09-30 05:28:27'),
(22, 33, 'August', '2020', 0, '2020-09-30 05:28:27'),
(23, 34, 'August', '2020', 0, '2020-09-30 05:28:27'),
(24, 36, 'August', '2020', 0, '2020-09-30 05:28:27'),
(25, 37, 'August', '2020', 0, '2020-09-30 05:28:27'),
(26, 43, 'August', '2020', 0, '2020-09-30 05:28:27'),
(27, 52, 'August', '2020', 0, '2020-09-30 05:28:27'),
(28, 58, 'August', '2020', 0, '2020-09-30 05:28:27'),
(29, 1, 'September', '2020', 0, '2020-09-30 05:28:27'),
(30, 20, 'September', '2020', 0, '2020-09-30 05:28:27'),
(31, 22, 'September', '2020', 0, '2020-09-30 05:28:27'),
(32, 33, 'September', '2020', 0, '2020-09-30 05:28:27'),
(33, 34, 'September', '2020', 0, '2020-09-30 05:28:27'),
(34, 36, 'September', '2020', 0, '2020-09-30 05:28:27'),
(35, 37, 'September', '2020', 0, '2020-09-30 05:28:27'),
(36, 43, 'September', '2020', 0, '2020-09-30 05:28:27'),
(37, 52, 'September', '2020', 0, '2020-09-30 05:28:27'),
(38, 20, 'August', '2020', 0, '2020-09-30 05:28:42'),
(39, 33, 'August', '2020', 0, '2020-09-30 05:28:42'),
(40, 34, 'August', '2020', 0, '2020-09-30 05:28:42'),
(41, 36, 'August', '2020', 0, '2020-09-30 05:28:42'),
(42, 37, 'August', '2020', 0, '2020-09-30 05:28:42'),
(43, 43, 'August', '2020', 0, '2020-09-30 05:28:42'),
(44, 52, 'August', '2020', 0, '2020-09-30 05:28:42'),
(45, 58, 'August', '2020', 0, '2020-09-30 05:28:42'),
(46, 1, 'September', '2020', 0, '2020-09-30 05:28:42'),
(47, 20, 'September', '2020', 0, '2020-09-30 05:28:43'),
(48, 22, 'September', '2020', 0, '2020-09-30 05:28:43'),
(49, 33, 'September', '2020', 0, '2020-09-30 05:28:43'),
(50, 34, 'September', '2020', 0, '2020-09-30 05:28:43'),
(51, 36, 'September', '2020', 0, '2020-09-30 05:28:43'),
(52, 37, 'September', '2020', 0, '2020-09-30 05:28:43'),
(53, 43, 'September', '2020', 0, '2020-09-30 05:28:43'),
(54, 52, 'September', '2020', 0, '2020-09-30 05:28:43'),
(55, 20, 'August', '2020', 0, '2020-09-30 05:28:49'),
(56, 33, 'August', '2020', 0, '2020-09-30 05:28:49'),
(57, 34, 'August', '2020', 0, '2020-09-30 05:28:49'),
(58, 36, 'August', '2020', 0, '2020-09-30 05:28:49'),
(59, 37, 'August', '2020', 0, '2020-09-30 05:28:49'),
(60, 43, 'August', '2020', 0, '2020-09-30 05:28:49'),
(61, 52, 'August', '2020', 0, '2020-09-30 05:28:49'),
(62, 58, 'August', '2020', 0, '2020-09-30 05:28:49'),
(63, 1, 'September', '2020', 0, '2020-09-30 05:28:49'),
(64, 20, 'September', '2020', 0, '2020-09-30 05:28:49'),
(65, 22, 'September', '2020', 0, '2020-09-30 05:28:49'),
(66, 33, 'September', '2020', 0, '2020-09-30 05:28:49'),
(67, 34, 'September', '2020', 0, '2020-09-30 05:28:49'),
(68, 36, 'September', '2020', 0, '2020-09-30 05:28:49'),
(69, 37, 'September', '2020', 0, '2020-09-30 05:28:49'),
(70, 43, 'September', '2020', 0, '2020-09-30 05:28:50'),
(71, 52, 'September', '2020', 0, '2020-09-30 05:28:50'),
(72, 20, 'August', '2020', 0, '2020-09-30 05:28:52'),
(73, 33, 'August', '2020', 0, '2020-09-30 05:28:52'),
(74, 34, 'August', '2020', 0, '2020-09-30 05:28:52'),
(75, 36, 'August', '2020', 0, '2020-09-30 05:28:52'),
(76, 37, 'August', '2020', 0, '2020-09-30 05:28:52'),
(77, 43, 'August', '2020', 0, '2020-09-30 05:28:52'),
(78, 52, 'August', '2020', 0, '2020-09-30 05:28:52'),
(79, 58, 'August', '2020', 0, '2020-09-30 05:28:52'),
(80, 1, 'September', '2020', 0, '2020-09-30 05:28:52'),
(81, 20, 'September', '2020', 0, '2020-09-30 05:28:52'),
(82, 22, 'September', '2020', 0, '2020-09-30 05:28:52'),
(83, 33, 'September', '2020', 0, '2020-09-30 05:28:52'),
(84, 34, 'September', '2020', 0, '2020-09-30 05:28:52'),
(85, 36, 'September', '2020', 0, '2020-09-30 05:28:52'),
(86, 37, 'September', '2020', 0, '2020-09-30 05:28:52'),
(87, 43, 'September', '2020', 0, '2020-09-30 05:28:52'),
(88, 52, 'September', '2020', 0, '2020-09-30 05:28:52'),
(89, 20, 'August', '2020', 0, '2020-09-30 05:29:03'),
(90, 33, 'August', '2020', 0, '2020-09-30 05:29:03'),
(91, 34, 'August', '2020', 0, '2020-09-30 05:29:03'),
(92, 36, 'August', '2020', 0, '2020-09-30 05:29:03'),
(93, 37, 'August', '2020', 0, '2020-09-30 05:29:03'),
(94, 43, 'August', '2020', 0, '2020-09-30 05:29:03'),
(95, 52, 'August', '2020', 0, '2020-09-30 05:29:03'),
(96, 58, 'August', '2020', 0, '2020-09-30 05:29:03'),
(97, 1, 'September', '2020', 0, '2020-09-30 05:29:03'),
(98, 20, 'September', '2020', 0, '2020-09-30 05:29:03'),
(99, 22, 'September', '2020', 0, '2020-09-30 05:29:03'),
(100, 33, 'September', '2020', 0, '2020-09-30 05:29:03'),
(101, 34, 'September', '2020', 0, '2020-09-30 05:29:03'),
(102, 36, 'September', '2020', 0, '2020-09-30 05:29:03'),
(103, 37, 'September', '2020', 0, '2020-09-30 05:29:03'),
(104, 43, 'September', '2020', 0, '2020-09-30 05:29:03'),
(105, 52, 'September', '2020', 0, '2020-09-30 05:29:03'),
(106, 20, 'August', '2020', 0, '2020-09-30 05:29:10'),
(107, 33, 'August', '2020', 0, '2020-09-30 05:29:10'),
(108, 34, 'August', '2020', 0, '2020-09-30 05:29:10'),
(109, 36, 'August', '2020', 0, '2020-09-30 05:29:10'),
(110, 37, 'August', '2020', 0, '2020-09-30 05:29:10'),
(111, 43, 'August', '2020', 0, '2020-09-30 05:29:10'),
(112, 52, 'August', '2020', 0, '2020-09-30 05:29:10'),
(113, 58, 'August', '2020', 0, '2020-09-30 05:29:10'),
(114, 1, 'September', '2020', 0, '2020-09-30 05:29:10'),
(115, 20, 'September', '2020', 0, '2020-09-30 05:29:10'),
(116, 22, 'September', '2020', 0, '2020-09-30 05:29:10'),
(117, 33, 'September', '2020', 0, '2020-09-30 05:29:10'),
(118, 34, 'September', '2020', 0, '2020-09-30 05:29:10'),
(119, 36, 'September', '2020', 0, '2020-09-30 05:29:10'),
(120, 37, 'September', '2020', 0, '2020-09-30 05:29:10'),
(121, 43, 'September', '2020', 0, '2020-09-30 05:29:10'),
(122, 52, 'September', '2020', 0, '2020-09-30 05:29:10'),
(123, 20, 'August', '2020', 0, '2020-09-30 05:32:42'),
(124, 33, 'August', '2020', 0, '2020-09-30 05:32:42'),
(125, 34, 'August', '2020', 0, '2020-09-30 05:32:42'),
(126, 36, 'August', '2020', 0, '2020-09-30 05:32:42'),
(127, 37, 'August', '2020', 0, '2020-09-30 05:32:42'),
(128, 43, 'August', '2020', 0, '2020-09-30 05:32:42'),
(129, 52, 'August', '2020', 0, '2020-09-30 05:32:42'),
(130, 58, 'August', '2020', 0, '2020-09-30 05:32:42'),
(131, 1, 'September', '2020', 0, '2020-09-30 05:32:42'),
(132, 20, 'September', '2020', 0, '2020-09-30 05:32:42'),
(133, 22, 'September', '2020', 0, '2020-09-30 05:32:42'),
(134, 33, 'September', '2020', 0, '2020-09-30 05:32:42'),
(135, 34, 'September', '2020', 0, '2020-09-30 05:32:42'),
(136, 36, 'September', '2020', 0, '2020-09-30 05:32:42'),
(137, 37, 'September', '2020', 0, '2020-09-30 05:32:42'),
(138, 43, 'September', '2020', 0, '2020-09-30 05:32:42'),
(139, 52, 'September', '2020', 0, '2020-09-30 05:32:42'),
(140, 20, 'August', '2020', 0, '2020-09-30 05:48:17'),
(141, 33, 'August', '2020', 0, '2020-09-30 05:48:17'),
(142, 34, 'August', '2020', 0, '2020-09-30 05:48:17'),
(143, 36, 'August', '2020', 0, '2020-09-30 05:48:17'),
(144, 37, 'August', '2020', 0, '2020-09-30 05:48:17'),
(145, 43, 'August', '2020', 0, '2020-09-30 05:48:17'),
(146, 52, 'August', '2020', 0, '2020-09-30 05:48:17'),
(147, 58, 'August', '2020', 0, '2020-09-30 05:48:17'),
(148, 20, 'August', '2020', 0, '2020-09-30 05:51:06'),
(149, 33, 'August', '2020', 0, '2020-09-30 05:51:06'),
(150, 34, 'August', '2020', 0, '2020-09-30 05:51:06'),
(151, 36, 'August', '2020', 0, '2020-09-30 05:51:06'),
(152, 37, 'August', '2020', 0, '2020-09-30 05:51:06'),
(153, 43, 'August', '2020', 0, '2020-09-30 05:51:06'),
(154, 52, 'August', '2020', 0, '2020-09-30 05:51:06'),
(155, 58, 'August', '2020', 0, '2020-09-30 05:51:06'),
(156, 20, 'August', '2020', 0, '2020-09-30 05:51:06'),
(157, 33, 'August', '2020', 0, '2020-09-30 05:51:06'),
(158, 34, 'August', '2020', 0, '2020-09-30 05:51:06'),
(159, 36, 'August', '2020', 0, '2020-09-30 05:51:06'),
(160, 37, 'August', '2020', 0, '2020-09-30 05:51:06'),
(161, 43, 'August', '2020', 0, '2020-09-30 05:51:06'),
(162, 52, 'August', '2020', 0, '2020-09-30 05:51:06'),
(163, 58, 'August', '2020', 0, '2020-09-30 05:51:06'),
(164, 20, 'August', '2020', 0, '2020-09-30 05:51:48'),
(165, 33, 'August', '2020', 0, '2020-09-30 05:51:48'),
(166, 34, 'August', '2020', 0, '2020-09-30 05:51:48'),
(167, 36, 'August', '2020', 0, '2020-09-30 05:51:48'),
(168, 37, 'August', '2020', 0, '2020-09-30 05:51:48'),
(169, 43, 'August', '2020', 0, '2020-09-30 05:51:48'),
(170, 52, 'August', '2020', 0, '2020-09-30 05:51:48'),
(171, 58, 'August', '2020', 0, '2020-09-30 05:51:48'),
(172, 20, 'August', '2020', 0, '2020-09-30 05:57:08'),
(173, 33, 'August', '2020', 0, '2020-09-30 05:57:08'),
(174, 34, 'August', '2020', 0, '2020-09-30 05:57:08'),
(175, 36, 'August', '2020', 0, '2020-09-30 05:57:08'),
(176, 37, 'August', '2020', 0, '2020-09-30 05:57:08'),
(177, 43, 'August', '2020', 0, '2020-09-30 05:57:08'),
(178, 52, 'August', '2020', 0, '2020-09-30 05:57:08'),
(179, 58, 'August', '2020', 0, '2020-09-30 05:57:08'),
(180, 20, 'August', '2020', 0, '2020-09-30 05:58:19'),
(181, 33, 'August', '2020', 0, '2020-09-30 05:58:19'),
(182, 34, 'August', '2020', 0, '2020-09-30 05:58:19'),
(183, 36, 'August', '2020', 0, '2020-09-30 05:58:19'),
(184, 37, 'August', '2020', 0, '2020-09-30 05:58:19'),
(185, 43, 'August', '2020', 0, '2020-09-30 05:58:19'),
(186, 52, 'August', '2020', 0, '2020-09-30 05:58:20'),
(187, 58, 'August', '2020', 0, '2020-09-30 05:58:20'),
(188, 20, 'August', '2020', 0, '2020-09-30 06:00:52'),
(189, 33, 'August', '2020', 0, '2020-09-30 06:00:52'),
(190, 34, 'August', '2020', 0, '2020-09-30 06:00:52'),
(191, 36, 'August', '2020', 0, '2020-09-30 06:00:52'),
(192, 37, 'August', '2020', 0, '2020-09-30 06:00:52'),
(193, 43, 'August', '2020', 0, '2020-09-30 06:00:52'),
(194, 52, 'August', '2020', 0, '2020-09-30 06:00:52'),
(195, 58, 'August', '2020', 0, '2020-09-30 06:00:52'),
(196, 1, 'September', '2020', 0, '2020-09-30 06:00:52'),
(197, 20, 'September', '2020', 0, '2020-09-30 06:00:52'),
(198, 22, 'September', '2020', 0, '2020-09-30 06:00:52'),
(199, 33, 'September', '2020', 0, '2020-09-30 06:00:52'),
(200, 34, 'September', '2020', 0, '2020-09-30 06:00:52'),
(201, 36, 'September', '2020', 0, '2020-09-30 06:00:52'),
(202, 37, 'September', '2020', 0, '2020-09-30 06:00:52'),
(203, 43, 'September', '2020', 0, '2020-09-30 06:00:52'),
(204, 52, 'September', '2020', 0, '2020-09-30 06:00:52'),
(205, 20, 'August', '2020', 0, '2020-09-30 06:01:00'),
(206, 33, 'August', '2020', 0, '2020-09-30 06:01:00'),
(207, 34, 'August', '2020', 0, '2020-09-30 06:01:00'),
(208, 36, 'August', '2020', 0, '2020-09-30 06:01:00'),
(209, 37, 'August', '2020', 0, '2020-09-30 06:01:00'),
(210, 43, 'August', '2020', 0, '2020-09-30 06:01:00'),
(211, 52, 'August', '2020', 0, '2020-09-30 06:01:00'),
(212, 58, 'August', '2020', 0, '2020-09-30 06:01:00'),
(213, 1, 'September', '2020', 0, '2020-09-30 06:01:00'),
(214, 20, 'September', '2020', 0, '2020-09-30 06:01:00'),
(215, 22, 'September', '2020', 0, '2020-09-30 06:01:00'),
(216, 33, 'September', '2020', 0, '2020-09-30 06:01:00'),
(217, 34, 'September', '2020', 0, '2020-09-30 06:01:00'),
(218, 36, 'September', '2020', 0, '2020-09-30 06:01:00'),
(219, 37, 'September', '2020', 0, '2020-09-30 06:01:00'),
(220, 43, 'September', '2020', 0, '2020-09-30 06:01:00'),
(221, 52, 'September', '2020', 0, '2020-09-30 06:01:00'),
(222, 20, 'August', '2020', 0, '2020-09-30 06:02:10'),
(223, 33, 'August', '2020', 0, '2020-09-30 06:02:10'),
(224, 34, 'August', '2020', 0, '2020-09-30 06:02:10'),
(225, 36, 'August', '2020', 0, '2020-09-30 06:02:10'),
(226, 37, 'August', '2020', 0, '2020-09-30 06:02:10'),
(227, 43, 'August', '2020', 0, '2020-09-30 06:02:10'),
(228, 52, 'August', '2020', 0, '2020-09-30 06:02:10'),
(229, 58, 'August', '2020', 0, '2020-09-30 06:02:10'),
(230, 1, 'September', '2020', 0, '2020-09-30 06:02:10'),
(231, 20, 'September', '2020', 0, '2020-09-30 06:02:10'),
(232, 22, 'September', '2020', 0, '2020-09-30 06:02:10'),
(233, 33, 'September', '2020', 0, '2020-09-30 06:02:10'),
(234, 34, 'September', '2020', 0, '2020-09-30 06:02:10'),
(235, 36, 'September', '2020', 0, '2020-09-30 06:02:10'),
(236, 37, 'September', '2020', 0, '2020-09-30 06:02:10'),
(237, 43, 'September', '2020', 0, '2020-09-30 06:02:10'),
(238, 52, 'September', '2020', 0, '2020-09-30 06:02:10'),
(239, 1, 'September', '2020', 0, '2020-10-10 07:50:03'),
(240, 20, 'September', '2020', 0, '2020-10-10 07:50:03'),
(241, 22, 'September', '2020', 0, '2020-10-10 07:50:03'),
(242, 33, 'September', '2020', 0, '2020-10-10 07:50:03'),
(243, 34, 'September', '2020', 0, '2020-10-10 07:50:03'),
(244, 36, 'September', '2020', 0, '2020-10-10 07:50:03'),
(245, 37, 'September', '2020', 0, '2020-10-10 07:50:03'),
(246, 43, 'September', '2020', 0, '2020-10-10 07:50:03'),
(247, 52, 'September', '2020', 0, '2020-10-10 07:50:03'),
(248, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(249, 20, 'October', '2020', 0, '2020-10-10 07:50:03'),
(250, 22, 'October', '2020', 0, '2020-10-10 07:50:03'),
(251, 33, 'October', '2020', 0, '2020-10-10 07:50:03'),
(252, 34, 'October', '2020', 0, '2020-10-10 07:50:03'),
(253, 36, 'October', '2020', 0, '2020-10-10 07:50:03'),
(254, 37, 'October', '2020', 0, '2020-10-10 07:50:03'),
(255, 43, 'October', '2020', 0, '2020-10-10 07:50:03'),
(256, 52, 'October', '2020', 0, '2020-10-10 07:50:03'),
(257, 58, 'October', '2020', 0, '2020-10-10 07:50:03'),
(258, 1, 'September', '2020', 0, '2020-10-15 12:29:24'),
(259, 20, 'September', '2020', 0, '2020-10-15 12:29:24'),
(260, 22, 'September', '2020', 0, '2020-10-15 12:29:24'),
(261, 33, 'September', '2020', 0, '2020-10-15 12:29:24'),
(262, 34, 'September', '2020', 0, '2020-10-15 12:29:24'),
(263, 36, 'September', '2020', 0, '2020-10-15 12:29:24'),
(264, 37, 'September', '2020', 0, '2020-10-15 12:29:24'),
(265, 43, 'September', '2020', 0, '2020-10-15 12:29:24'),
(266, 52, 'September', '2020', 0, '2020-10-15 12:29:24'),
(267, 109, 'September', '2020', 0, '2020-10-15 12:29:24'),
(268, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(269, 20, 'October', '2020', 0, '2020-10-15 12:29:24'),
(270, 22, 'October', '2020', 0, '2020-10-15 12:29:24'),
(271, 33, 'October', '2020', 0, '2020-10-15 12:29:24'),
(272, 34, 'October', '2020', 0, '2020-10-15 12:29:24'),
(273, 36, 'October', '2020', 0, '2020-10-15 12:29:24'),
(274, 37, 'October', '2020', 0, '2020-10-15 12:29:24'),
(275, 43, 'October', '2020', 0, '2020-10-15 12:29:24'),
(276, 52, 'October', '2020', 0, '2020-10-15 12:29:24'),
(277, 58, 'October', '2020', 0, '2020-10-15 12:29:24'),
(278, 109, 'October', '2020', 0, '2020-10-15 12:29:24'),
(279, 1, 'September', '2020', 0, '2020-10-15 12:30:17'),
(280, 20, 'September', '2020', 0, '2020-10-15 12:30:17'),
(281, 22, 'September', '2020', 0, '2020-10-15 12:30:17'),
(282, 33, 'September', '2020', 0, '2020-10-15 12:30:17'),
(283, 34, 'September', '2020', 0, '2020-10-15 12:30:17'),
(284, 36, 'September', '2020', 0, '2020-10-15 12:30:17'),
(285, 37, 'September', '2020', 0, '2020-10-15 12:30:17'),
(286, 43, 'September', '2020', 0, '2020-10-15 12:30:17'),
(287, 52, 'September', '2020', 0, '2020-10-15 12:30:17'),
(288, 109, 'September', '2020', 0, '2020-10-15 12:30:17'),
(289, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(290, 20, 'October', '2020', 0, '2020-10-15 12:30:17'),
(291, 22, 'October', '2020', 0, '2020-10-15 12:30:17'),
(292, 33, 'October', '2020', 0, '2020-10-15 12:30:17'),
(293, 34, 'October', '2020', 0, '2020-10-15 12:30:17'),
(294, 36, 'October', '2020', 0, '2020-10-15 12:30:17'),
(295, 37, 'October', '2020', 0, '2020-10-15 12:30:17'),
(296, 43, 'October', '2020', 0, '2020-10-15 12:30:17'),
(297, 52, 'October', '2020', 0, '2020-10-15 12:30:17'),
(298, 58, 'October', '2020', 0, '2020-10-15 12:30:17'),
(299, 109, 'October', '2020', 0, '2020-10-15 12:30:17'),
(300, 1, 'September', '2020', 0, '2020-10-16 07:26:18'),
(301, 20, 'September', '2020', 0, '2020-10-16 07:26:19'),
(302, 22, 'September', '2020', 0, '2020-10-16 07:26:19'),
(303, 33, 'September', '2020', 0, '2020-10-16 07:26:19'),
(304, 34, 'September', '2020', 0, '2020-10-16 07:26:19'),
(305, 36, 'September', '2020', 0, '2020-10-16 07:26:19'),
(306, 37, 'September', '2020', 0, '2020-10-16 07:26:19'),
(307, 43, 'September', '2020', 0, '2020-10-16 07:26:19'),
(308, 52, 'September', '2020', 0, '2020-10-16 07:26:19'),
(309, 109, 'September', '2020', 0, '2020-10-16 07:26:19'),
(310, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(311, 20, 'October', '2020', 0, '2020-10-16 07:26:19'),
(312, 22, 'October', '2020', 0, '2020-10-16 07:26:19'),
(313, 33, 'October', '2020', 0, '2020-10-16 07:26:19'),
(314, 34, 'October', '2020', 0, '2020-10-16 07:26:19'),
(315, 36, 'October', '2020', 0, '2020-10-16 07:26:19'),
(316, 37, 'October', '2020', 0, '2020-10-16 07:26:19'),
(317, 43, 'October', '2020', 0, '2020-10-16 07:26:19'),
(318, 52, 'October', '2020', 0, '2020-10-16 07:26:19'),
(319, 58, 'October', '2020', 0, '2020-10-16 07:26:19'),
(320, 109, 'October', '2020', 0, '2020-10-16 07:26:19'),
(321, 1, 'September', '2020', 0, '2020-10-16 07:30:50'),
(322, 20, 'September', '2020', 0, '2020-10-16 07:30:50'),
(323, 22, 'September', '2020', 0, '2020-10-16 07:30:50'),
(324, 33, 'September', '2020', 0, '2020-10-16 07:30:50'),
(325, 34, 'September', '2020', 0, '2020-10-16 07:30:50'),
(326, 36, 'September', '2020', 0, '2020-10-16 07:30:50'),
(327, 37, 'September', '2020', 0, '2020-10-16 07:30:50'),
(328, 43, 'September', '2020', 0, '2020-10-16 07:30:50'),
(329, 52, 'September', '2020', 0, '2020-10-16 07:30:50'),
(330, 109, 'September', '2020', 0, '2020-10-16 07:30:50'),
(331, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(332, 20, 'October', '2020', 0, '2020-10-16 07:30:50'),
(333, 22, 'October', '2020', 0, '2020-10-16 07:30:50'),
(334, 33, 'October', '2020', 0, '2020-10-16 07:30:50'),
(335, 34, 'October', '2020', 0, '2020-10-16 07:30:50'),
(336, 36, 'October', '2020', 0, '2020-10-16 07:30:50'),
(337, 37, 'October', '2020', 0, '2020-10-16 07:30:50'),
(338, 43, 'October', '2020', 0, '2020-10-16 07:30:50'),
(339, 52, 'October', '2020', 0, '2020-10-16 07:30:50'),
(340, 58, 'October', '2020', 0, '2020-10-16 07:30:50'),
(341, 109, 'October', '2020', 0, '2020-10-16 07:30:50'),
(342, 1, 'September', '2020', 0, '2020-10-16 07:43:12'),
(343, 20, 'September', '2020', 0, '2020-10-16 07:43:12'),
(344, 22, 'September', '2020', 0, '2020-10-16 07:43:12'),
(345, 33, 'September', '2020', 0, '2020-10-16 07:43:12'),
(346, 34, 'September', '2020', 0, '2020-10-16 07:43:12'),
(347, 36, 'September', '2020', 0, '2020-10-16 07:43:12'),
(348, 37, 'September', '2020', 0, '2020-10-16 07:43:12'),
(349, 43, 'September', '2020', 0, '2020-10-16 07:43:12'),
(350, 52, 'September', '2020', 0, '2020-10-16 07:43:12'),
(351, 109, 'September', '2020', 0, '2020-10-16 07:43:12'),
(352, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(353, 20, 'October', '2020', 0, '2020-10-16 07:43:12'),
(354, 22, 'October', '2020', 0, '2020-10-16 07:43:12'),
(355, 33, 'October', '2020', 0, '2020-10-16 07:43:12'),
(356, 34, 'October', '2020', 0, '2020-10-16 07:43:12'),
(357, 36, 'October', '2020', 0, '2020-10-16 07:43:12'),
(358, 37, 'October', '2020', 0, '2020-10-16 07:43:12'),
(359, 43, 'October', '2020', 0, '2020-10-16 07:43:12'),
(360, 52, 'October', '2020', 0, '2020-10-16 07:43:12'),
(361, 58, 'October', '2020', 0, '2020-10-16 07:43:12'),
(362, 109, 'October', '2020', 0, '2020-10-16 07:43:12'),
(363, 1, 'September', '2020', 0, '2020-10-16 08:07:24'),
(364, 20, 'September', '2020', 0, '2020-10-16 08:07:24'),
(365, 22, 'September', '2020', 0, '2020-10-16 08:07:24'),
(366, 33, 'September', '2020', 0, '2020-10-16 08:07:24'),
(367, 34, 'September', '2020', 0, '2020-10-16 08:07:24'),
(368, 36, 'September', '2020', 0, '2020-10-16 08:07:24'),
(369, 37, 'September', '2020', 0, '2020-10-16 08:07:24'),
(370, 43, 'September', '2020', 0, '2020-10-16 08:07:24'),
(371, 52, 'September', '2020', 0, '2020-10-16 08:07:24'),
(372, 109, 'September', '2020', 0, '2020-10-16 08:07:24'),
(373, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(374, 20, 'October', '2020', 0, '2020-10-16 08:07:24'),
(375, 22, 'October', '2020', 0, '2020-10-16 08:07:24'),
(376, 33, 'October', '2020', 0, '2020-10-16 08:07:24'),
(377, 34, 'October', '2020', 0, '2020-10-16 08:07:24'),
(378, 36, 'October', '2020', 0, '2020-10-16 08:07:24'),
(379, 37, 'October', '2020', 0, '2020-10-16 08:07:24'),
(380, 43, 'October', '2020', 0, '2020-10-16 08:07:24'),
(381, 52, 'October', '2020', 0, '2020-10-16 08:07:24'),
(382, 58, 'October', '2020', 0, '2020-10-16 08:07:24'),
(383, 109, 'October', '2020', 0, '2020-10-16 08:07:24'),
(384, 1, 'September', '2020', 0, '2020-10-16 08:15:41'),
(385, 20, 'September', '2020', 0, '2020-10-16 08:15:41'),
(386, 22, 'September', '2020', 0, '2020-10-16 08:15:41'),
(387, 33, 'September', '2020', 0, '2020-10-16 08:15:41'),
(388, 34, 'September', '2020', 0, '2020-10-16 08:15:41'),
(389, 36, 'September', '2020', 0, '2020-10-16 08:15:41'),
(390, 37, 'September', '2020', 0, '2020-10-16 08:15:41'),
(391, 43, 'September', '2020', 0, '2020-10-16 08:15:41'),
(392, 52, 'September', '2020', 0, '2020-10-16 08:15:41'),
(393, 109, 'September', '2020', 0, '2020-10-16 08:15:41'),
(394, 1, 'October', '2020', 2715, '2020-11-27 08:44:42'),
(395, 20, 'October', '2020', 0, '2020-10-16 08:15:41'),
(396, 22, 'October', '2020', 0, '2020-10-16 08:15:41'),
(397, 33, 'October', '2020', 0, '2020-10-16 08:15:41'),
(398, 34, 'October', '2020', 0, '2020-10-16 08:15:41'),
(399, 36, 'October', '2020', 0, '2020-10-16 08:15:41'),
(400, 37, 'October', '2020', 0, '2020-10-16 08:15:41'),
(401, 43, 'October', '2020', 0, '2020-10-16 08:15:41'),
(402, 52, 'October', '2020', 0, '2020-10-16 08:15:41'),
(403, 58, 'October', '2020', 0, '2020-10-16 08:15:41'),
(404, 109, 'October', '2020', 0, '2020-10-16 08:15:41'),
(405, 1, 'September', '2020', 0, '2020-10-19 05:02:04'),
(406, 20, 'September', '2020', 0, '2020-10-19 05:02:04'),
(407, 22, 'September', '2020', 0, '2020-10-19 05:02:04'),
(408, 33, 'September', '2020', 0, '2020-10-19 05:02:04'),
(409, 34, 'September', '2020', 0, '2020-10-19 05:02:04'),
(410, 36, 'September', '2020', 0, '2020-10-19 05:02:04'),
(411, 37, 'September', '2020', 0, '2020-10-19 05:02:04'),
(412, 43, 'September', '2020', 0, '2020-10-19 05:02:04'),
(413, 52, 'September', '2020', 0, '2020-10-19 05:02:04'),
(414, 109, 'September', '2020', 0, '2020-10-19 05:02:04'),
(415, 20, 'October', '2020', 0, '2020-10-19 05:02:04'),
(416, 22, 'October', '2020', 0, '2020-10-19 05:02:04'),
(417, 33, 'October', '2020', 0, '2020-10-19 05:02:04'),
(418, 34, 'October', '2020', 0, '2020-10-19 05:02:04'),
(419, 36, 'October', '2020', 0, '2020-10-19 05:02:04'),
(420, 37, 'October', '2020', 0, '2020-10-19 05:02:04'),
(421, 43, 'October', '2020', 0, '2020-10-19 05:02:04'),
(422, 52, 'October', '2020', 0, '2020-10-19 05:02:04'),
(423, 58, 'October', '2020', 0, '2020-10-19 05:02:04'),
(424, 109, 'October', '2020', 0, '2020-10-19 05:02:04'),
(425, 1, 'September', '2020', 0, '2020-10-19 06:00:17'),
(426, 20, 'September', '2020', 0, '2020-10-19 06:00:17'),
(427, 22, 'September', '2020', 0, '2020-10-19 06:00:17'),
(428, 33, 'September', '2020', 0, '2020-10-19 06:00:17'),
(429, 34, 'September', '2020', 0, '2020-10-19 06:00:17'),
(430, 36, 'September', '2020', 0, '2020-10-19 06:00:17'),
(431, 37, 'September', '2020', 0, '2020-10-19 06:00:17'),
(432, 43, 'September', '2020', 0, '2020-10-19 06:00:17'),
(433, 52, 'September', '2020', 0, '2020-10-19 06:00:17'),
(434, 109, 'September', '2020', 0, '2020-10-19 06:00:17'),
(435, 20, 'October', '2020', 0, '2020-10-19 06:00:17'),
(436, 22, 'October', '2020', 0, '2020-10-19 06:00:17'),
(437, 33, 'October', '2020', 0, '2020-10-19 06:00:17'),
(438, 34, 'October', '2020', 0, '2020-10-19 06:00:17'),
(439, 36, 'October', '2020', 0, '2020-10-19 06:00:17'),
(440, 37, 'October', '2020', 0, '2020-10-19 06:00:17'),
(441, 43, 'October', '2020', 0, '2020-10-19 06:00:17'),
(442, 52, 'October', '2020', 0, '2020-10-19 06:00:17'),
(443, 58, 'October', '2020', 0, '2020-10-19 06:00:17'),
(444, 109, 'October', '2020', 0, '2020-10-19 06:00:17'),
(445, 20, 'October', '2020', 0, '2020-11-13 07:10:28'),
(446, 22, 'October', '2020', 0, '2020-11-13 07:10:28'),
(447, 33, 'October', '2020', 0, '2020-11-13 07:10:28'),
(448, 34, 'October', '2020', 0, '2020-11-13 07:10:28'),
(449, 36, 'October', '2020', 0, '2020-11-13 07:10:28'),
(450, 37, 'October', '2020', 0, '2020-11-13 07:10:28'),
(451, 43, 'October', '2020', 0, '2020-11-13 07:10:28'),
(452, 52, 'October', '2020', 0, '2020-11-13 07:10:28'),
(453, 58, 'October', '2020', 0, '2020-11-13 07:10:28'),
(454, 109, 'October', '2020', 0, '2020-11-13 07:10:28'),
(455, 1, 'November', '2020', 0, '2020-11-13 07:10:28'),
(456, 20, 'November', '2020', 0, '2020-11-13 07:10:28'),
(457, 22, 'November', '2020', 0, '2020-11-13 07:10:28'),
(458, 33, 'November', '2020', 0, '2020-11-13 07:10:28'),
(459, 34, 'November', '2020', 0, '2020-11-13 07:10:28'),
(460, 36, 'November', '2020', 0, '2020-11-13 07:10:28'),
(461, 37, 'November', '2020', 0, '2020-11-13 07:10:28'),
(462, 43, 'November', '2020', 0, '2020-11-13 07:10:28'),
(463, 52, 'November', '2020', 0, '2020-11-13 07:10:28'),
(464, 58, 'November', '2020', 0, '2020-11-13 07:10:28'),
(465, 109, 'November', '2020', 0, '2020-11-13 07:10:28'),
(466, 20, 'October', '2020', 0, '2020-11-13 10:45:46'),
(467, 22, 'October', '2020', 0, '2020-11-13 10:45:46'),
(468, 33, 'October', '2020', 0, '2020-11-13 10:45:46'),
(469, 34, 'October', '2020', 0, '2020-11-13 10:45:46'),
(470, 36, 'October', '2020', 0, '2020-11-13 10:45:46'),
(471, 37, 'October', '2020', 0, '2020-11-13 10:45:46'),
(472, 43, 'October', '2020', 0, '2020-11-13 10:45:46'),
(473, 52, 'October', '2020', 0, '2020-11-13 10:45:46'),
(474, 58, 'October', '2020', 0, '2020-11-13 10:45:46'),
(475, 109, 'October', '2020', 0, '2020-11-13 10:45:46'),
(476, 174, 'October', '2020', 0, '2020-11-13 10:45:46'),
(477, 1, 'November', '2020', 0, '2020-11-13 10:45:46'),
(478, 20, 'November', '2020', 0, '2020-11-13 10:45:46'),
(479, 22, 'November', '2020', 0, '2020-11-13 10:45:46'),
(480, 33, 'November', '2020', 0, '2020-11-13 10:45:46'),
(481, 34, 'November', '2020', 0, '2020-11-13 10:45:46'),
(482, 36, 'November', '2020', 0, '2020-11-13 10:45:46'),
(483, 37, 'November', '2020', 0, '2020-11-13 10:45:46'),
(484, 43, 'November', '2020', 0, '2020-11-13 10:45:46'),
(485, 52, 'November', '2020', 0, '2020-11-13 10:45:46'),
(486, 58, 'November', '2020', 0, '2020-11-13 10:45:46'),
(487, 109, 'November', '2020', 0, '2020-11-13 10:45:46'),
(488, 174, 'November', '2020', 5100, '2020-12-09 18:18:53'),
(489, 20, 'October', '2020', 0, '2020-11-16 06:28:26'),
(490, 22, 'October', '2020', 0, '2020-11-16 06:28:26'),
(491, 33, 'October', '2020', 0, '2020-11-16 06:28:26'),
(492, 34, 'October', '2020', 0, '2020-11-16 06:28:26'),
(493, 36, 'October', '2020', 0, '2020-11-16 06:28:26'),
(494, 37, 'October', '2020', 0, '2020-11-16 06:28:26'),
(495, 43, 'October', '2020', 0, '2020-11-16 06:28:26'),
(496, 52, 'October', '2020', 0, '2020-11-16 06:28:26'),
(497, 58, 'October', '2020', 0, '2020-11-16 06:28:27'),
(498, 109, 'October', '2020', 0, '2020-11-16 06:28:27'),
(499, 174, 'October', '2020', 0, '2020-11-16 06:28:27'),
(500, 1, 'November', '2020', 0, '2020-11-16 06:28:27'),
(501, 20, 'November', '2020', 0, '2020-11-16 06:28:27'),
(502, 22, 'November', '2020', 0, '2020-11-16 06:28:27'),
(503, 33, 'November', '2020', 0, '2020-11-16 06:28:27'),
(504, 34, 'November', '2020', 0, '2020-11-16 06:28:27'),
(505, 36, 'November', '2020', 0, '2020-11-16 06:28:27'),
(506, 37, 'November', '2020', 0, '2020-11-16 06:28:27'),
(507, 43, 'November', '2020', 0, '2020-11-16 06:28:27'),
(508, 52, 'November', '2020', 0, '2020-11-16 06:28:27'),
(509, 58, 'November', '2020', 0, '2020-11-16 06:28:27'),
(510, 109, 'November', '2020', 0, '2020-11-16 06:28:27'),
(511, 20, 'October', '2020', 0, '2020-11-16 10:05:38'),
(512, 22, 'October', '2020', 0, '2020-11-16 10:05:38'),
(513, 33, 'October', '2020', 0, '2020-11-16 10:05:38'),
(514, 34, 'October', '2020', 0, '2020-11-16 10:05:38'),
(515, 36, 'October', '2020', 0, '2020-11-16 10:05:38'),
(516, 37, 'October', '2020', 0, '2020-11-16 10:05:38'),
(517, 43, 'October', '2020', 0, '2020-11-16 10:05:38'),
(518, 52, 'October', '2020', 0, '2020-11-16 10:05:38'),
(519, 58, 'October', '2020', 0, '2020-11-16 10:05:38'),
(520, 109, 'October', '2020', 0, '2020-11-16 10:05:38'),
(521, 174, 'October', '2020', 0, '2020-11-16 10:05:38'),
(522, 1, 'November', '2020', 0, '2020-11-16 10:05:38'),
(523, 20, 'November', '2020', 0, '2020-11-16 10:05:38'),
(524, 22, 'November', '2020', 0, '2020-11-16 10:05:38'),
(525, 33, 'November', '2020', 0, '2020-11-16 10:05:38'),
(526, 34, 'November', '2020', 0, '2020-11-16 10:05:38'),
(527, 36, 'November', '2020', 0, '2020-11-16 10:05:38'),
(528, 37, 'November', '2020', 0, '2020-11-16 10:05:38'),
(529, 43, 'November', '2020', 0, '2020-11-16 10:05:38'),
(530, 52, 'November', '2020', 0, '2020-11-16 10:05:38'),
(531, 58, 'November', '2020', 0, '2020-11-16 10:05:38'),
(532, 109, 'November', '2020', 0, '2020-11-16 10:05:38'),
(533, 20, 'October', '2020', 0, '2020-11-16 10:06:30'),
(534, 22, 'October', '2020', 0, '2020-11-16 10:06:30'),
(535, 33, 'October', '2020', 0, '2020-11-16 10:06:30'),
(536, 34, 'October', '2020', 0, '2020-11-16 10:06:30'),
(537, 36, 'October', '2020', 0, '2020-11-16 10:06:30'),
(538, 37, 'October', '2020', 0, '2020-11-16 10:06:30'),
(539, 43, 'October', '2020', 0, '2020-11-16 10:06:30'),
(540, 52, 'October', '2020', 0, '2020-11-16 10:06:30'),
(541, 58, 'October', '2020', 0, '2020-11-16 10:06:30'),
(542, 109, 'October', '2020', 0, '2020-11-16 10:06:30'),
(543, 174, 'October', '2020', 0, '2020-11-16 10:06:30'),
(544, 1, 'November', '2020', 0, '2020-11-16 10:06:30'),
(545, 20, 'November', '2020', 0, '2020-11-16 10:06:30'),
(546, 22, 'November', '2020', 0, '2020-11-16 10:06:30'),
(547, 33, 'November', '2020', 0, '2020-11-16 10:06:30'),
(548, 34, 'November', '2020', 0, '2020-11-16 10:06:30'),
(549, 36, 'November', '2020', 0, '2020-11-16 10:06:30'),
(550, 37, 'November', '2020', 0, '2020-11-16 10:06:30'),
(551, 43, 'November', '2020', 0, '2020-11-16 10:06:30'),
(552, 52, 'November', '2020', 0, '2020-11-16 10:06:30'),
(553, 58, 'November', '2020', 0, '2020-11-16 10:06:30'),
(554, 109, 'November', '2020', 0, '2020-11-16 10:06:30'),
(555, 20, 'October', '2020', 0, '2020-11-16 10:06:35'),
(556, 22, 'October', '2020', 0, '2020-11-16 10:06:35'),
(557, 33, 'October', '2020', 0, '2020-11-16 10:06:35'),
(558, 34, 'October', '2020', 0, '2020-11-16 10:06:35'),
(559, 36, 'October', '2020', 0, '2020-11-16 10:06:35'),
(560, 37, 'October', '2020', 0, '2020-11-16 10:06:35'),
(561, 43, 'October', '2020', 0, '2020-11-16 10:06:35'),
(562, 52, 'October', '2020', 0, '2020-11-16 10:06:35'),
(563, 58, 'October', '2020', 0, '2020-11-16 10:06:35'),
(564, 109, 'October', '2020', 0, '2020-11-16 10:06:35'),
(565, 174, 'October', '2020', 0, '2020-11-16 10:06:35'),
(566, 1, 'November', '2020', 0, '2020-11-16 10:06:35'),
(567, 20, 'November', '2020', 0, '2020-11-16 10:06:35'),
(568, 22, 'November', '2020', 0, '2020-11-16 10:06:35'),
(569, 33, 'November', '2020', 0, '2020-11-16 10:06:35'),
(570, 34, 'November', '2020', 0, '2020-11-16 10:06:35'),
(571, 36, 'November', '2020', 0, '2020-11-16 10:06:35'),
(572, 37, 'November', '2020', 0, '2020-11-16 10:06:35'),
(573, 43, 'November', '2020', 0, '2020-11-16 10:06:35'),
(574, 52, 'November', '2020', 0, '2020-11-16 10:06:35'),
(575, 58, 'November', '2020', 0, '2020-11-16 10:06:35'),
(576, 109, 'November', '2020', 0, '2020-11-16 10:06:35'),
(577, 20, 'October', '2020', 0, '2020-11-16 10:06:43'),
(578, 22, 'October', '2020', 0, '2020-11-16 10:06:43'),
(579, 33, 'October', '2020', 0, '2020-11-16 10:06:43'),
(580, 34, 'October', '2020', 0, '2020-11-16 10:06:43'),
(581, 36, 'October', '2020', 0, '2020-11-16 10:06:43'),
(582, 37, 'October', '2020', 0, '2020-11-16 10:06:43'),
(583, 43, 'October', '2020', 0, '2020-11-16 10:06:43'),
(584, 52, 'October', '2020', 0, '2020-11-16 10:06:43'),
(585, 58, 'October', '2020', 0, '2020-11-16 10:06:43'),
(586, 109, 'October', '2020', 0, '2020-11-16 10:06:43'),
(587, 174, 'October', '2020', 0, '2020-11-16 10:06:43'),
(588, 1, 'November', '2020', 0, '2020-11-16 10:06:43'),
(589, 20, 'November', '2020', 0, '2020-11-16 10:06:43'),
(590, 22, 'November', '2020', 0, '2020-11-16 10:06:43'),
(591, 33, 'November', '2020', 0, '2020-11-16 10:06:43'),
(592, 34, 'November', '2020', 0, '2020-11-16 10:06:43'),
(593, 36, 'November', '2020', 0, '2020-11-16 10:06:43'),
(594, 37, 'November', '2020', 0, '2020-11-16 10:06:43'),
(595, 43, 'November', '2020', 0, '2020-11-16 10:06:43'),
(596, 52, 'November', '2020', 0, '2020-11-16 10:06:43'),
(597, 58, 'November', '2020', 0, '2020-11-16 10:06:43'),
(598, 109, 'November', '2020', 0, '2020-11-16 10:06:43'),
(599, 20, 'October', '2020', 0, '2020-11-16 10:07:18'),
(600, 22, 'October', '2020', 0, '2020-11-16 10:07:18'),
(601, 33, 'October', '2020', 0, '2020-11-16 10:07:18'),
(602, 34, 'October', '2020', 0, '2020-11-16 10:07:18'),
(603, 36, 'October', '2020', 0, '2020-11-16 10:07:18'),
(604, 37, 'October', '2020', 0, '2020-11-16 10:07:18'),
(605, 43, 'October', '2020', 0, '2020-11-16 10:07:18'),
(606, 52, 'October', '2020', 0, '2020-11-16 10:07:18'),
(607, 58, 'October', '2020', 0, '2020-11-16 10:07:18'),
(608, 109, 'October', '2020', 0, '2020-11-16 10:07:18'),
(609, 174, 'October', '2020', 0, '2020-11-16 10:07:18'),
(610, 1, 'November', '2020', 0, '2020-11-16 10:07:18'),
(611, 20, 'November', '2020', 0, '2020-11-16 10:07:18'),
(612, 22, 'November', '2020', 0, '2020-11-16 10:07:18'),
(613, 33, 'November', '2020', 0, '2020-11-16 10:07:18'),
(614, 34, 'November', '2020', 0, '2020-11-16 10:07:18'),
(615, 36, 'November', '2020', 0, '2020-11-16 10:07:18'),
(616, 37, 'November', '2020', 0, '2020-11-16 10:07:18'),
(617, 43, 'November', '2020', 0, '2020-11-16 10:07:18'),
(618, 52, 'November', '2020', 0, '2020-11-16 10:07:19'),
(619, 58, 'November', '2020', 0, '2020-11-16 10:07:19'),
(620, 109, 'November', '2020', 0, '2020-11-16 10:07:19'),
(621, 20, 'October', '2020', 0, '2020-11-16 10:07:21'),
(622, 22, 'October', '2020', 0, '2020-11-16 10:07:21'),
(623, 33, 'October', '2020', 0, '2020-11-16 10:07:21'),
(624, 34, 'October', '2020', 0, '2020-11-16 10:07:21'),
(625, 36, 'October', '2020', 0, '2020-11-16 10:07:21'),
(626, 37, 'October', '2020', 0, '2020-11-16 10:07:21'),
(627, 43, 'October', '2020', 0, '2020-11-16 10:07:21'),
(628, 52, 'October', '2020', 0, '2020-11-16 10:07:21'),
(629, 58, 'October', '2020', 0, '2020-11-16 10:07:21'),
(630, 109, 'October', '2020', 0, '2020-11-16 10:07:21'),
(631, 174, 'October', '2020', 0, '2020-11-16 10:07:21'),
(632, 1, 'November', '2020', 0, '2020-11-16 10:07:21'),
(633, 20, 'November', '2020', 0, '2020-11-16 10:07:21'),
(634, 22, 'November', '2020', 0, '2020-11-16 10:07:21'),
(635, 33, 'November', '2020', 0, '2020-11-16 10:07:21'),
(636, 34, 'November', '2020', 0, '2020-11-16 10:07:21'),
(637, 36, 'November', '2020', 0, '2020-11-16 10:07:21'),
(638, 37, 'November', '2020', 0, '2020-11-16 10:07:21'),
(639, 43, 'November', '2020', 0, '2020-11-16 10:07:21'),
(640, 52, 'November', '2020', 0, '2020-11-16 10:07:21'),
(641, 58, 'November', '2020', 0, '2020-11-16 10:07:21'),
(642, 109, 'November', '2020', 0, '2020-11-16 10:07:21'),
(643, 20, 'October', '2020', 0, '2020-11-16 10:07:35'),
(644, 22, 'October', '2020', 0, '2020-11-16 10:07:35'),
(645, 33, 'October', '2020', 0, '2020-11-16 10:07:35'),
(646, 34, 'October', '2020', 0, '2020-11-16 10:07:35'),
(647, 36, 'October', '2020', 0, '2020-11-16 10:07:35'),
(648, 37, 'October', '2020', 0, '2020-11-16 10:07:35'),
(649, 43, 'October', '2020', 0, '2020-11-16 10:07:35'),
(650, 52, 'October', '2020', 0, '2020-11-16 10:07:35'),
(651, 58, 'October', '2020', 0, '2020-11-16 10:07:35'),
(652, 109, 'October', '2020', 0, '2020-11-16 10:07:35'),
(653, 174, 'October', '2020', 0, '2020-11-16 10:07:35'),
(654, 1, 'November', '2020', 0, '2020-11-16 10:07:35'),
(655, 20, 'November', '2020', 0, '2020-11-16 10:07:35'),
(656, 22, 'November', '2020', 0, '2020-11-16 10:07:35'),
(657, 33, 'November', '2020', 0, '2020-11-16 10:07:35'),
(658, 34, 'November', '2020', 0, '2020-11-16 10:07:35'),
(659, 36, 'November', '2020', 0, '2020-11-16 10:07:35'),
(660, 37, 'November', '2020', 0, '2020-11-16 10:07:35'),
(661, 43, 'November', '2020', 0, '2020-11-16 10:07:35'),
(662, 52, 'November', '2020', 0, '2020-11-16 10:07:35'),
(663, 58, 'November', '2020', 0, '2020-11-16 10:07:35'),
(664, 109, 'November', '2020', 0, '2020-11-16 10:07:35'),
(665, 20, 'October', '2020', 0, '2020-11-16 11:44:32'),
(666, 22, 'October', '2020', 0, '2020-11-16 11:44:32'),
(667, 33, 'October', '2020', 0, '2020-11-16 11:44:32'),
(668, 34, 'October', '2020', 0, '2020-11-16 11:44:32'),
(669, 36, 'October', '2020', 0, '2020-11-16 11:44:32'),
(670, 37, 'October', '2020', 0, '2020-11-16 11:44:32'),
(671, 43, 'October', '2020', 0, '2020-11-16 11:44:32'),
(672, 52, 'October', '2020', 0, '2020-11-16 11:44:32'),
(673, 58, 'October', '2020', 0, '2020-11-16 11:44:32'),
(674, 109, 'October', '2020', 0, '2020-11-16 11:44:32'),
(675, 174, 'October', '2020', 0, '2020-11-16 11:44:32'),
(676, 1, 'November', '2020', 0, '2020-11-16 11:44:32'),
(677, 20, 'November', '2020', 0, '2020-11-16 11:44:32'),
(678, 22, 'November', '2020', 0, '2020-11-16 11:44:32'),
(679, 33, 'November', '2020', 0, '2020-11-16 11:44:32'),
(680, 34, 'November', '2020', 0, '2020-11-16 11:44:32'),
(681, 36, 'November', '2020', 0, '2020-11-16 11:44:32'),
(682, 37, 'November', '2020', 0, '2020-11-16 11:44:32'),
(683, 43, 'November', '2020', 0, '2020-11-16 11:44:32'),
(684, 52, 'November', '2020', 0, '2020-11-16 11:44:32'),
(685, 58, 'November', '2020', 0, '2020-11-16 11:44:32'),
(686, 109, 'November', '2020', 0, '2020-11-16 11:44:32'),
(687, 20, 'October', '2020', 0, '2020-11-16 15:49:39'),
(688, 22, 'October', '2020', 0, '2020-11-16 15:49:39'),
(689, 33, 'October', '2020', 0, '2020-11-16 15:49:39'),
(690, 34, 'October', '2020', 0, '2020-11-16 15:49:39'),
(691, 36, 'October', '2020', 0, '2020-11-16 15:49:39'),
(692, 37, 'October', '2020', 0, '2020-11-16 15:49:39'),
(693, 43, 'October', '2020', 0, '2020-11-16 15:49:39'),
(694, 52, 'October', '2020', 0, '2020-11-16 15:49:39'),
(695, 58, 'October', '2020', 0, '2020-11-16 15:49:39'),
(696, 109, 'October', '2020', 0, '2020-11-16 15:49:39'),
(697, 174, 'October', '2020', 0, '2020-11-16 15:49:39'),
(698, 1, 'November', '2020', 0, '2020-11-16 15:49:39'),
(699, 20, 'November', '2020', 0, '2020-11-16 15:49:39'),
(700, 22, 'November', '2020', 0, '2020-11-16 15:49:39'),
(701, 33, 'November', '2020', 0, '2020-11-16 15:49:39'),
(702, 34, 'November', '2020', 0, '2020-11-16 15:49:39'),
(703, 36, 'November', '2020', 0, '2020-11-16 15:49:39'),
(704, 37, 'November', '2020', 0, '2020-11-16 15:49:39'),
(705, 43, 'November', '2020', 0, '2020-11-16 15:49:39'),
(706, 52, 'November', '2020', 0, '2020-11-16 15:49:39'),
(707, 58, 'November', '2020', 0, '2020-11-16 15:49:39'),
(708, 109, 'November', '2020', 0, '2020-11-16 15:49:39'),
(709, 20, 'October', '2020', 0, '2020-11-17 15:39:26'),
(710, 22, 'October', '2020', 0, '2020-11-17 15:39:26'),
(711, 33, 'October', '2020', 0, '2020-11-17 15:39:26'),
(712, 34, 'October', '2020', 0, '2020-11-17 15:39:26'),
(713, 36, 'October', '2020', 0, '2020-11-17 15:39:26'),
(714, 37, 'October', '2020', 0, '2020-11-17 15:39:26'),
(715, 43, 'October', '2020', 0, '2020-11-17 15:39:26'),
(716, 52, 'October', '2020', 0, '2020-11-17 15:39:26'),
(717, 58, 'October', '2020', 0, '2020-11-17 15:39:26'),
(718, 109, 'October', '2020', 0, '2020-11-17 15:39:26'),
(719, 174, 'October', '2020', 0, '2020-11-17 15:39:26'),
(720, 1, 'November', '2020', 0, '2020-11-17 15:39:26'),
(721, 20, 'November', '2020', 0, '2020-11-17 15:39:26'),
(722, 22, 'November', '2020', 0, '2020-11-17 15:39:26'),
(723, 33, 'November', '2020', 0, '2020-11-17 15:39:26'),
(724, 34, 'November', '2020', 0, '2020-11-17 15:39:26'),
(725, 36, 'November', '2020', 0, '2020-11-17 15:39:26'),
(726, 37, 'November', '2020', 0, '2020-11-17 15:39:26'),
(727, 43, 'November', '2020', 0, '2020-11-17 15:39:26'),
(728, 52, 'November', '2020', 0, '2020-11-17 15:39:26'),
(729, 58, 'November', '2020', 0, '2020-11-17 15:39:26'),
(730, 109, 'November', '2020', 0, '2020-11-17 15:39:26'),
(731, 20, 'October', '2020', 0, '2020-11-20 11:41:57'),
(732, 22, 'October', '2020', 0, '2020-11-20 11:41:57'),
(733, 33, 'October', '2020', 0, '2020-11-20 11:41:57'),
(734, 34, 'October', '2020', 0, '2020-11-20 11:41:57'),
(735, 36, 'October', '2020', 0, '2020-11-20 11:41:57'),
(736, 37, 'October', '2020', 0, '2020-11-20 11:41:57'),
(737, 43, 'October', '2020', 0, '2020-11-20 11:41:57'),
(738, 52, 'October', '2020', 0, '2020-11-20 11:41:57'),
(739, 58, 'October', '2020', 0, '2020-11-20 11:41:57'),
(740, 109, 'October', '2020', 0, '2020-11-20 11:41:57'),
(741, 174, 'October', '2020', 0, '2020-11-20 11:41:57'),
(742, 1, 'November', '2020', 0, '2020-11-20 11:41:57'),
(743, 20, 'November', '2020', 0, '2020-11-20 11:41:57'),
(744, 22, 'November', '2020', 0, '2020-11-20 11:41:57'),
(745, 33, 'November', '2020', 0, '2020-11-20 11:41:57'),
(746, 34, 'November', '2020', 0, '2020-11-20 11:41:57'),
(747, 36, 'November', '2020', 0, '2020-11-20 11:41:57'),
(748, 37, 'November', '2020', 0, '2020-11-20 11:41:57'),
(749, 43, 'November', '2020', 0, '2020-11-20 11:41:57'),
(750, 52, 'November', '2020', 0, '2020-11-20 11:41:58'),
(751, 58, 'November', '2020', 0, '2020-11-20 11:41:58'),
(752, 109, 'November', '2020', 0, '2020-11-20 11:41:58'),
(753, 20, 'October', '2020', 0, '2020-11-20 11:56:08'),
(754, 22, 'October', '2020', 0, '2020-11-20 11:56:08'),
(755, 33, 'October', '2020', 0, '2020-11-20 11:56:08'),
(756, 34, 'October', '2020', 0, '2020-11-20 11:56:08'),
(757, 36, 'October', '2020', 0, '2020-11-20 11:56:08'),
(758, 37, 'October', '2020', 0, '2020-11-20 11:56:08'),
(759, 43, 'October', '2020', 0, '2020-11-20 11:56:08'),
(760, 52, 'October', '2020', 0, '2020-11-20 11:56:08'),
(761, 58, 'October', '2020', 0, '2020-11-20 11:56:08'),
(762, 109, 'October', '2020', 0, '2020-11-20 11:56:08'),
(763, 174, 'October', '2020', 0, '2020-11-20 11:56:08'),
(764, 1, 'November', '2020', 0, '2020-11-20 11:56:08'),
(765, 20, 'November', '2020', 0, '2020-11-20 11:56:08'),
(766, 22, 'November', '2020', 0, '2020-11-20 11:56:08'),
(767, 33, 'November', '2020', 0, '2020-11-20 11:56:08'),
(768, 34, 'November', '2020', 0, '2020-11-20 11:56:08'),
(769, 36, 'November', '2020', 0, '2020-11-20 11:56:08'),
(770, 37, 'November', '2020', 0, '2020-11-20 11:56:08'),
(771, 43, 'November', '2020', 0, '2020-11-20 11:56:08'),
(772, 52, 'November', '2020', 0, '2020-11-20 11:56:08'),
(773, 58, 'November', '2020', 0, '2020-11-20 11:56:08'),
(774, 109, 'November', '2020', 0, '2020-11-20 11:56:08'),
(775, 20, 'October', '2020', 0, '2020-11-21 20:12:05'),
(776, 22, 'October', '2020', 0, '2020-11-21 20:12:05'),
(777, 33, 'October', '2020', 0, '2020-11-21 20:12:05'),
(778, 34, 'October', '2020', 0, '2020-11-21 20:12:05'),
(779, 36, 'October', '2020', 0, '2020-11-21 20:12:05'),
(780, 37, 'October', '2020', 0, '2020-11-21 20:12:05'),
(781, 43, 'October', '2020', 0, '2020-11-21 20:12:05'),
(782, 52, 'October', '2020', 0, '2020-11-21 20:12:05'),
(783, 58, 'October', '2020', 0, '2020-11-21 20:12:06'),
(784, 109, 'October', '2020', 0, '2020-11-21 20:12:06'),
(785, 174, 'October', '2020', 0, '2020-11-21 20:12:06'),
(786, 1, 'November', '2020', 0, '2020-11-21 20:12:06'),
(787, 20, 'November', '2020', 0, '2020-11-21 20:12:06'),
(788, 22, 'November', '2020', 0, '2020-11-21 20:12:06'),
(789, 33, 'November', '2020', 0, '2020-11-21 20:12:06'),
(790, 34, 'November', '2020', 0, '2020-11-21 20:12:06'),
(791, 36, 'November', '2020', 0, '2020-11-21 20:12:06'),
(792, 37, 'November', '2020', 0, '2020-11-21 20:12:06'),
(793, 43, 'November', '2020', 0, '2020-11-21 20:12:06'),
(794, 52, 'November', '2020', 0, '2020-11-21 20:12:06'),
(795, 58, 'November', '2020', 0, '2020-11-21 20:12:06'),
(796, 109, 'November', '2020', 0, '2020-11-21 20:12:06'),
(797, 20, 'October', '2020', 0, '2020-11-22 10:34:42'),
(798, 22, 'October', '2020', 0, '2020-11-22 10:34:42'),
(799, 33, 'October', '2020', 0, '2020-11-22 10:34:42'),
(800, 34, 'October', '2020', 0, '2020-11-22 10:34:42'),
(801, 36, 'October', '2020', 0, '2020-11-22 10:34:42'),
(802, 37, 'October', '2020', 0, '2020-11-22 10:34:42'),
(803, 43, 'October', '2020', 0, '2020-11-22 10:34:42'),
(804, 52, 'October', '2020', 0, '2020-11-22 10:34:42'),
(805, 58, 'October', '2020', 0, '2020-11-22 10:34:42'),
(806, 109, 'October', '2020', 0, '2020-11-22 10:34:42'),
(807, 174, 'October', '2020', 0, '2020-11-22 10:34:42'),
(808, 1, 'November', '2020', 0, '2020-11-22 10:34:42'),
(809, 20, 'November', '2020', 0, '2020-11-22 10:34:42'),
(810, 22, 'November', '2020', 0, '2020-11-22 10:34:42'),
(811, 33, 'November', '2020', 0, '2020-11-22 10:34:42'),
(812, 34, 'November', '2020', 0, '2020-11-22 10:34:42'),
(813, 36, 'November', '2020', 0, '2020-11-22 10:34:43'),
(814, 37, 'November', '2020', 0, '2020-11-22 10:34:43'),
(815, 43, 'November', '2020', 0, '2020-11-22 10:34:43'),
(816, 52, 'November', '2020', 0, '2020-11-22 10:34:43'),
(817, 58, 'November', '2020', 0, '2020-11-22 10:34:43'),
(818, 109, 'November', '2020', 0, '2020-11-22 10:34:43'),
(819, 20, 'October', '2020', 0, '2020-11-24 12:58:09'),
(820, 22, 'October', '2020', 0, '2020-11-24 12:58:09'),
(821, 33, 'October', '2020', 0, '2020-11-24 12:58:09'),
(822, 34, 'October', '2020', 0, '2020-11-24 12:58:09'),
(823, 36, 'October', '2020', 0, '2020-11-24 12:58:09'),
(824, 37, 'October', '2020', 0, '2020-11-24 12:58:09'),
(825, 43, 'October', '2020', 0, '2020-11-24 12:58:09'),
(826, 52, 'October', '2020', 0, '2020-11-24 12:58:09'),
(827, 58, 'October', '2020', 0, '2020-11-24 12:58:09'),
(828, 109, 'October', '2020', 0, '2020-11-24 12:58:09'),
(829, 174, 'October', '2020', 0, '2020-11-24 12:58:09'),
(830, 1, 'November', '2020', 0, '2020-11-24 12:58:09'),
(831, 20, 'November', '2020', 0, '2020-11-24 12:58:09'),
(832, 22, 'November', '2020', 0, '2020-11-24 12:58:09'),
(833, 33, 'November', '2020', 0, '2020-11-24 12:58:09'),
(834, 34, 'November', '2020', 0, '2020-11-24 12:58:09'),
(835, 36, 'November', '2020', 0, '2020-11-24 12:58:09'),
(836, 37, 'November', '2020', 0, '2020-11-24 12:58:09'),
(837, 43, 'November', '2020', 0, '2020-11-24 12:58:09'),
(838, 52, 'November', '2020', 0, '2020-11-24 12:58:09'),
(839, 58, 'November', '2020', 0, '2020-11-24 12:58:09'),
(840, 109, 'November', '2020', 0, '2020-11-24 12:58:09'),
(841, 20, 'October', '2020', 0, '2020-11-27 08:04:06'),
(842, 22, 'October', '2020', 0, '2020-11-27 08:04:06'),
(843, 33, 'October', '2020', 0, '2020-11-27 08:04:06'),
(844, 34, 'October', '2020', 0, '2020-11-27 08:04:06'),
(845, 36, 'October', '2020', 0, '2020-11-27 08:04:06'),
(846, 37, 'October', '2020', 0, '2020-11-27 08:04:06'),
(847, 43, 'October', '2020', 0, '2020-11-27 08:04:06'),
(848, 52, 'October', '2020', 0, '2020-11-27 08:04:07'),
(849, 58, 'October', '2020', 0, '2020-11-27 08:04:07'),
(850, 109, 'October', '2020', 0, '2020-11-27 08:04:07'),
(851, 174, 'October', '2020', 0, '2020-11-27 08:04:07'),
(852, 1, 'November', '2020', 0, '2020-11-27 08:04:07'),
(853, 20, 'November', '2020', 0, '2020-11-27 08:04:07'),
(854, 22, 'November', '2020', 0, '2020-11-27 08:04:07'),
(855, 33, 'November', '2020', 0, '2020-11-27 08:04:07'),
(856, 34, 'November', '2020', 0, '2020-11-27 08:04:07'),
(857, 36, 'November', '2020', 0, '2020-11-27 08:04:07'),
(858, 37, 'November', '2020', 0, '2020-11-27 08:04:07'),
(859, 43, 'November', '2020', 0, '2020-11-27 08:04:07'),
(860, 52, 'November', '2020', 0, '2020-11-27 08:04:07'),
(861, 58, 'November', '2020', 0, '2020-11-27 08:04:07'),
(862, 109, 'November', '2020', 0, '2020-11-27 08:04:07'),
(863, 20, 'October', '2020', 0, '2020-11-27 08:44:42'),
(864, 22, 'October', '2020', 0, '2020-11-27 08:44:42'),
(865, 33, 'October', '2020', 0, '2020-11-27 08:44:42'),
(866, 34, 'October', '2020', 0, '2020-11-27 08:44:42'),
(867, 36, 'October', '2020', 0, '2020-11-27 08:44:42'),
(868, 37, 'October', '2020', 0, '2020-11-27 08:44:42'),
(869, 43, 'October', '2020', 0, '2020-11-27 08:44:42'),
(870, 52, 'October', '2020', 0, '2020-11-27 08:44:42'),
(871, 58, 'October', '2020', 0, '2020-11-27 08:44:42'),
(872, 109, 'October', '2020', 0, '2020-11-27 08:44:42'),
(873, 174, 'October', '2020', 0, '2020-11-27 08:44:42'),
(874, 1, 'November', '2020', 0, '2020-11-27 08:44:42'),
(875, 20, 'November', '2020', 0, '2020-11-27 08:44:42'),
(876, 22, 'November', '2020', 0, '2020-11-27 08:44:42'),
(877, 33, 'November', '2020', 0, '2020-11-27 08:44:42'),
(878, 34, 'November', '2020', 0, '2020-11-27 08:44:42'),
(879, 36, 'November', '2020', 0, '2020-11-27 08:44:42'),
(880, 37, 'November', '2020', 0, '2020-11-27 08:44:42'),
(881, 43, 'November', '2020', 0, '2020-11-27 08:44:42'),
(882, 52, 'November', '2020', 0, '2020-11-27 08:44:42'),
(883, 58, 'November', '2020', 0, '2020-11-27 08:44:42'),
(884, 109, 'November', '2020', 0, '2020-11-27 08:44:42'),
(885, 1, 'November', '2020', 0, '2020-12-03 06:38:55'),
(886, 20, 'November', '2020', 0, '2020-12-03 06:38:55'),
(887, 22, 'November', '2020', 0, '2020-12-03 06:38:55'),
(888, 33, 'November', '2020', 0, '2020-12-03 06:38:55'),
(889, 34, 'November', '2020', 0, '2020-12-03 06:38:55'),
(890, 36, 'November', '2020', 0, '2020-12-03 06:38:55'),
(891, 37, 'November', '2020', 0, '2020-12-03 06:38:55'),
(892, 43, 'November', '2020', 0, '2020-12-03 06:38:55'),
(893, 52, 'November', '2020', 0, '2020-12-03 06:38:55'),
(894, 58, 'November', '2020', 0, '2020-12-03 06:38:55'),
(895, 109, 'November', '2020', 0, '2020-12-03 06:38:55'),
(896, 182, 'November', '2020', 3100, '2020-12-09 18:18:53'),
(897, 1, 'December', '2020', 0, '2020-12-03 06:38:55'),
(898, 20, 'December', '2020', 0, '2020-12-03 06:38:55'),
(899, 22, 'December', '2020', 0, '2020-12-03 06:38:55'),
(900, 33, 'December', '2020', 0, '2020-12-03 06:38:55'),
(901, 34, 'December', '2020', 0, '2020-12-03 06:38:55'),
(902, 36, 'December', '2020', 0, '2020-12-03 06:38:55'),
(903, 37, 'December', '2020', 0, '2020-12-03 06:38:55'),
(904, 43, 'December', '2020', 0, '2020-12-03 06:38:55'),
(905, 52, 'December', '2020', 0, '2020-12-03 06:38:55'),
(906, 58, 'December', '2020', 0, '2020-12-03 06:38:55'),
(907, 109, 'December', '2020', 0, '2020-12-03 06:38:55'),
(908, 174, 'December', '2020', 0, '2020-12-03 06:38:55'),
(909, 182, 'December', '2020', 0, '2020-12-03 06:38:55'),
(910, 1, 'November', '2020', 0, '2020-12-03 09:39:18'),
(911, 20, 'November', '2020', 0, '2020-12-03 09:39:18'),
(912, 22, 'November', '2020', 0, '2020-12-03 09:39:18'),
(913, 33, 'November', '2020', 0, '2020-12-03 09:39:18'),
(914, 34, 'November', '2020', 0, '2020-12-03 09:39:18');
INSERT INTO `bgpkr_host_monthly_payment` (`h_m_id`, `host_id`, `payment_month`, `payment_year`, `total_amount`, `last_updated`) VALUES
(915, 36, 'November', '2020', 0, '2020-12-03 09:39:18'),
(916, 37, 'November', '2020', 0, '2020-12-03 09:39:18'),
(917, 43, 'November', '2020', 0, '2020-12-03 09:39:18'),
(918, 52, 'November', '2020', 0, '2020-12-03 09:39:18'),
(919, 58, 'November', '2020', 0, '2020-12-03 09:39:18'),
(920, 109, 'November', '2020', 0, '2020-12-03 09:39:18'),
(921, 1, 'December', '2020', 0, '2020-12-03 09:39:18'),
(922, 20, 'December', '2020', 0, '2020-12-03 09:39:18'),
(923, 22, 'December', '2020', 0, '2020-12-03 09:39:18'),
(924, 33, 'December', '2020', 0, '2020-12-03 09:39:18'),
(925, 34, 'December', '2020', 0, '2020-12-03 09:39:18'),
(926, 36, 'December', '2020', 0, '2020-12-03 09:39:18'),
(927, 37, 'December', '2020', 0, '2020-12-03 09:39:18'),
(928, 43, 'December', '2020', 0, '2020-12-03 09:39:18'),
(929, 52, 'December', '2020', 0, '2020-12-03 09:39:18'),
(930, 58, 'December', '2020', 0, '2020-12-03 09:39:18'),
(931, 109, 'December', '2020', 0, '2020-12-03 09:39:18'),
(932, 174, 'December', '2020', 0, '2020-12-03 09:39:18'),
(933, 182, 'December', '2020', 0, '2020-12-03 09:39:18'),
(934, 1, 'November', '2020', 0, '2020-12-03 15:48:14'),
(935, 20, 'November', '2020', 0, '2020-12-03 15:48:14'),
(936, 22, 'November', '2020', 0, '2020-12-03 15:48:14'),
(937, 33, 'November', '2020', 0, '2020-12-03 15:48:14'),
(938, 34, 'November', '2020', 0, '2020-12-03 15:48:14'),
(939, 36, 'November', '2020', 0, '2020-12-03 15:48:14'),
(940, 37, 'November', '2020', 0, '2020-12-03 15:48:14'),
(941, 43, 'November', '2020', 0, '2020-12-03 15:48:14'),
(942, 52, 'November', '2020', 0, '2020-12-03 15:48:14'),
(943, 58, 'November', '2020', 0, '2020-12-03 15:48:14'),
(944, 109, 'November', '2020', 0, '2020-12-03 15:48:14'),
(945, 183, 'November', '2020', 0, '2020-12-03 15:48:14'),
(946, 1, 'December', '2020', 0, '2020-12-03 15:48:14'),
(947, 20, 'December', '2020', 0, '2020-12-03 15:48:14'),
(948, 22, 'December', '2020', 0, '2020-12-03 15:48:14'),
(949, 33, 'December', '2020', 0, '2020-12-03 15:48:14'),
(950, 34, 'December', '2020', 0, '2020-12-03 15:48:14'),
(951, 36, 'December', '2020', 0, '2020-12-03 15:48:14'),
(952, 37, 'December', '2020', 0, '2020-12-03 15:48:14'),
(953, 43, 'December', '2020', 0, '2020-12-03 15:48:14'),
(954, 52, 'December', '2020', 0, '2020-12-03 15:48:14'),
(955, 58, 'December', '2020', 0, '2020-12-03 15:48:14'),
(956, 109, 'December', '2020', 0, '2020-12-03 15:48:14'),
(957, 174, 'December', '2020', 0, '2020-12-03 15:48:14'),
(958, 182, 'December', '2020', 0, '2020-12-03 15:48:14'),
(959, 183, 'December', '2020', 0, '2020-12-03 15:48:14'),
(960, 1, 'November', '2020', 0, '2020-12-09 18:17:12'),
(961, 20, 'November', '2020', 0, '2020-12-09 18:17:12'),
(962, 22, 'November', '2020', 0, '2020-12-09 18:17:12'),
(963, 33, 'November', '2020', 0, '2020-12-09 18:17:12'),
(964, 34, 'November', '2020', 0, '2020-12-09 18:17:12'),
(965, 36, 'November', '2020', 0, '2020-12-09 18:17:12'),
(966, 37, 'November', '2020', 0, '2020-12-09 18:17:12'),
(967, 43, 'November', '2020', 0, '2020-12-09 18:17:12'),
(968, 52, 'November', '2020', 0, '2020-12-09 18:17:12'),
(969, 58, 'November', '2020', 0, '2020-12-09 18:17:12'),
(970, 109, 'November', '2020', 0, '2020-12-09 18:17:12'),
(971, 183, 'November', '2020', 0, '2020-12-09 18:17:12'),
(972, 1, 'December', '2020', 0, '2020-12-09 18:17:12'),
(973, 20, 'December', '2020', 0, '2020-12-09 18:17:12'),
(974, 22, 'December', '2020', 0, '2020-12-09 18:17:12'),
(975, 33, 'December', '2020', 0, '2020-12-09 18:17:12'),
(976, 34, 'December', '2020', 0, '2020-12-09 18:17:12'),
(977, 36, 'December', '2020', 0, '2020-12-09 18:17:12'),
(978, 37, 'December', '2020', 0, '2020-12-09 18:17:12'),
(979, 43, 'December', '2020', 0, '2020-12-09 18:17:12'),
(980, 52, 'December', '2020', 0, '2020-12-09 18:17:12'),
(981, 58, 'December', '2020', 0, '2020-12-09 18:17:12'),
(982, 109, 'December', '2020', 0, '2020-12-09 18:17:12'),
(983, 174, 'December', '2020', 0, '2020-12-09 18:17:12'),
(984, 182, 'December', '2020', 0, '2020-12-09 18:17:12'),
(985, 183, 'December', '2020', 0, '2020-12-09 18:17:12'),
(986, 1, 'November', '2020', 0, '2020-12-09 18:18:47'),
(987, 20, 'November', '2020', 0, '2020-12-09 18:18:47'),
(988, 22, 'November', '2020', 0, '2020-12-09 18:18:47'),
(989, 33, 'November', '2020', 0, '2020-12-09 18:18:47'),
(990, 34, 'November', '2020', 0, '2020-12-09 18:18:47'),
(991, 36, 'November', '2020', 0, '2020-12-09 18:18:47'),
(992, 37, 'November', '2020', 0, '2020-12-09 18:18:47'),
(993, 43, 'November', '2020', 0, '2020-12-09 18:18:47'),
(994, 52, 'November', '2020', 0, '2020-12-09 18:18:47'),
(995, 58, 'November', '2020', 0, '2020-12-09 18:18:47'),
(996, 109, 'November', '2020', 0, '2020-12-09 18:18:47'),
(997, 183, 'November', '2020', 0, '2020-12-09 18:18:47'),
(998, 1, 'December', '2020', 0, '2020-12-09 18:18:47'),
(999, 20, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1000, 22, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1001, 33, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1002, 34, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1003, 36, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1004, 37, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1005, 43, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1006, 52, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1007, 58, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1008, 109, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1009, 174, 'December', '2020', 0, '2020-12-09 18:18:47'),
(1010, 182, 'December', '2020', 0, '2020-12-09 18:18:48'),
(1011, 183, 'December', '2020', 0, '2020-12-09 18:18:48'),
(1012, 1, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1013, 20, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1014, 22, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1015, 33, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1016, 34, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1017, 36, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1018, 37, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1019, 43, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1020, 52, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1021, 58, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1022, 109, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1023, 183, 'November', '2020', 0, '2020-12-09 18:18:53'),
(1024, 1, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1025, 20, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1026, 22, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1027, 33, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1028, 34, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1029, 36, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1030, 37, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1031, 43, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1032, 52, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1033, 58, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1034, 109, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1035, 174, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1036, 182, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1037, 183, 'December', '2020', 0, '2020-12-09 18:18:53'),
(1038, 1, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1039, 20, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1040, 22, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1041, 33, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1042, 34, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1043, 36, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1044, 37, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1045, 43, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1046, 52, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1047, 58, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1048, 109, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1049, 174, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1050, 182, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1051, 183, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1052, 1, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1053, 20, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1054, 22, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1055, 33, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1056, 34, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1057, 36, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1058, 37, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1059, 43, 'December', '2020', 0, '2020-12-31 06:01:41'),
(1060, 52, 'December', '2020', 0, '2020-12-31 06:01:42'),
(1061, 58, 'December', '2020', 0, '2020-12-31 06:01:42'),
(1062, 109, 'December', '2020', 0, '2020-12-31 06:01:42'),
(1063, 174, 'December', '2020', 0, '2020-12-31 06:01:42'),
(1064, 182, 'December', '2020', 0, '2020-12-31 06:01:42'),
(1065, 183, 'December', '2020', 0, '2020-12-31 06:01:42'),
(1066, 1, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1067, 20, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1068, 22, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1069, 33, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1070, 34, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1071, 36, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1072, 37, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1073, 43, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1074, 52, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1075, 58, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1076, 109, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1077, 174, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1078, 182, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1079, 183, 'December', '2020', 0, '2021-01-03 19:44:09'),
(1080, 1, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1081, 20, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1082, 22, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1083, 33, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1084, 34, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1085, 36, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1086, 37, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1087, 43, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1088, 52, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1089, 58, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1090, 109, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1091, 174, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1092, 182, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1093, 183, 'January', '2021', 0, '2021-01-03 19:44:09'),
(1094, 1, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1095, 22, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1096, 34, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1097, 36, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1098, 37, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1099, 43, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1100, 52, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1101, 58, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1102, 109, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1103, 174, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1104, 182, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1105, 183, 'December', '2020', 0, '2021-01-21 03:56:46'),
(1106, 1, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1107, 22, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1108, 34, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1109, 36, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1110, 37, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1111, 43, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1112, 52, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1113, 58, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1114, 109, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1115, 174, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1116, 182, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1117, 183, 'January', '2021', 0, '2021-01-21 03:56:46'),
(1118, 1, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1119, 22, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1120, 34, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1121, 36, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1122, 37, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1123, 43, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1124, 52, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1125, 58, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1126, 109, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1127, 174, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1128, 182, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1129, 183, 'December', '2020', 0, '2021-01-21 04:10:18'),
(1130, 1, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1131, 22, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1132, 34, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1133, 36, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1134, 37, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1135, 43, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1136, 52, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1137, 58, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1138, 109, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1139, 174, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1140, 182, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1141, 183, 'January', '2021', 0, '2021-01-21 04:10:18'),
(1142, 1, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1143, 22, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1144, 34, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1145, 36, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1146, 37, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1147, 43, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1148, 52, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1149, 58, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1150, 109, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1151, 174, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1152, 182, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1153, 183, 'December', '2020', 0, '2021-01-21 12:36:11'),
(1154, 1, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1155, 22, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1156, 34, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1157, 36, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1158, 37, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1159, 43, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1160, 52, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1161, 58, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1162, 109, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1163, 174, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1164, 182, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1165, 183, 'January', '2021', 0, '2021-01-21 12:36:11'),
(1166, 1, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1167, 22, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1168, 34, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1169, 36, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1170, 37, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1171, 43, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1172, 52, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1173, 58, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1174, 109, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1175, 174, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1176, 182, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1177, 183, 'December', '2020', 0, '2021-01-21 12:43:07'),
(1178, 1, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1179, 22, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1180, 34, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1181, 36, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1182, 37, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1183, 43, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1184, 52, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1185, 58, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1186, 109, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1187, 174, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1188, 182, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1189, 183, 'January', '2021', 0, '2021-01-21 12:43:07'),
(1190, 1, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1191, 22, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1192, 34, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1193, 36, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1194, 37, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1195, 43, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1196, 52, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1197, 58, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1198, 109, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1199, 174, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1200, 182, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1201, 183, 'December', '2020', 0, '2021-01-21 12:44:31'),
(1202, 1, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1203, 22, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1204, 34, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1205, 36, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1206, 37, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1207, 43, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1208, 52, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1209, 58, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1210, 109, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1211, 174, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1212, 182, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1213, 183, 'January', '2021', 0, '2021-01-21 12:44:31'),
(1214, 1, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1215, 22, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1216, 34, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1217, 36, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1218, 37, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1219, 43, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1220, 52, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1221, 58, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1222, 109, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1223, 174, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1224, 182, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1225, 183, 'December', '2020', 0, '2021-01-21 13:05:35'),
(1226, 1, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1227, 22, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1228, 34, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1229, 36, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1230, 37, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1231, 43, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1232, 52, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1233, 58, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1234, 109, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1235, 174, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1236, 182, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1237, 183, 'January', '2021', 0, '2021-01-21 13:05:35'),
(1238, 1, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1239, 22, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1240, 34, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1241, 36, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1242, 37, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1243, 43, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1244, 52, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1245, 58, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1246, 109, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1247, 174, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1248, 182, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1249, 183, 'December', '2020', 0, '2021-01-21 13:27:39'),
(1250, 1, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1251, 22, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1252, 34, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1253, 36, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1254, 37, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1255, 43, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1256, 52, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1257, 58, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1258, 109, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1259, 174, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1260, 182, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1261, 183, 'January', '2021', 0, '2021-01-21 13:27:39'),
(1262, 1, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1263, 22, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1264, 34, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1265, 36, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1266, 37, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1267, 43, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1268, 52, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1269, 58, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1270, 109, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1271, 174, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1272, 182, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1273, 183, 'December', '2020', 0, '2021-01-21 13:27:55'),
(1274, 1, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1275, 22, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1276, 34, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1277, 36, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1278, 37, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1279, 43, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1280, 52, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1281, 58, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1282, 109, 'January', '2021', 0, '2021-01-21 13:27:55'),
(1283, 174, 'January', '2021', 0, '2021-01-21 13:27:56'),
(1284, 182, 'January', '2021', 0, '2021-01-21 13:27:56'),
(1285, 183, 'January', '2021', 0, '2021-01-21 13:27:56'),
(1286, 1, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1287, 22, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1288, 34, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1289, 36, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1290, 37, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1291, 43, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1292, 52, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1293, 58, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1294, 109, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1295, 174, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1296, 182, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1297, 183, 'January', '2021', 0, '2021-02-14 09:19:07'),
(1298, 1, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1299, 22, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1300, 34, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1301, 36, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1302, 37, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1303, 43, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1304, 52, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1305, 58, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1306, 109, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1307, 174, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1308, 182, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1309, 183, 'February', '2021', 0, '2021-02-14 09:19:07'),
(1310, 1, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1311, 22, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1312, 34, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1313, 36, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1314, 37, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1315, 43, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1316, 52, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1317, 58, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1318, 109, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1319, 174, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1320, 182, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1321, 183, 'January', '2021', 0, '2021-02-17 16:22:04'),
(1322, 1, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1323, 22, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1324, 34, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1325, 36, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1326, 37, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1327, 43, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1328, 52, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1329, 58, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1330, 109, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1331, 174, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1332, 182, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1333, 183, 'February', '2021', 0, '2021-02-17 16:22:04'),
(1334, 1, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1335, 22, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1336, 34, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1337, 36, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1338, 37, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1339, 43, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1340, 52, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1341, 58, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1342, 109, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1343, 174, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1344, 182, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1345, 183, 'January', '2021', 0, '2021-02-28 18:43:02'),
(1346, 1, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1347, 22, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1348, 34, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1349, 36, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1350, 37, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1351, 43, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1352, 52, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1353, 58, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1354, 109, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1355, 174, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1356, 182, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1357, 183, 'February', '2021', 0, '2021-02-28 18:43:02'),
(1358, 1, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1359, 22, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1360, 34, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1361, 36, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1362, 37, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1363, 43, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1364, 52, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1365, 58, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1366, 109, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1367, 174, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1368, 182, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1369, 183, 'February', '2021', 0, '2021-03-18 18:57:53'),
(1370, 1, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1371, 22, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1372, 34, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1373, 36, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1374, 37, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1375, 43, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1376, 52, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1377, 58, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1378, 109, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1379, 174, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1380, 182, 'March', '2021', 0, '2021-03-18 18:57:53'),
(1381, 183, 'March', '2021', 0, '2021-03-18 18:57:54'),
(1382, 1, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1383, 22, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1384, 34, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1385, 36, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1386, 37, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1387, 43, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1388, 52, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1389, 58, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1390, 109, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1391, 174, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1392, 182, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1393, 183, 'February', '2021', 0, '2021-03-19 10:24:07'),
(1394, 1, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1395, 22, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1396, 34, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1397, 36, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1398, 37, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1399, 43, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1400, 52, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1401, 58, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1402, 109, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1403, 174, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1404, 182, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1405, 183, 'March', '2021', 0, '2021-03-19 10:24:07'),
(1406, 1, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1407, 22, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1408, 34, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1409, 36, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1410, 37, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1411, 43, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1412, 52, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1413, 58, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1414, 109, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1415, 174, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1416, 182, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1417, 183, 'February', '2021', 0, '2021-03-23 16:58:22'),
(1418, 1, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1419, 22, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1420, 34, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1421, 36, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1422, 37, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1423, 43, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1424, 52, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1425, 58, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1426, 109, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1427, 174, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1428, 182, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1429, 183, 'March', '2021', 0, '2021-03-23 16:58:22'),
(1430, 1, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1431, 22, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1432, 34, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1433, 36, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1434, 37, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1435, 43, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1436, 52, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1437, 58, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1438, 109, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1439, 174, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1440, 182, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1441, 183, 'March', '2021', 0, '2021-04-13 06:06:41'),
(1442, 1, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1443, 22, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1444, 34, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1445, 36, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1446, 37, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1447, 43, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1448, 52, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1449, 58, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1450, 109, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1451, 174, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1452, 182, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1453, 183, 'April', '2021', 0, '2021-04-13 06:06:41'),
(1454, 1, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1455, 22, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1456, 34, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1457, 36, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1458, 37, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1459, 43, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1460, 52, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1461, 58, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1462, 109, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1463, 174, 'March', '2021', 0, '2021-04-13 06:06:58'),
(1464, 182, 'March', '2021', 0, '2021-04-13 06:06:59'),
(1465, 183, 'March', '2021', 0, '2021-04-13 06:06:59'),
(1466, 1, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1467, 22, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1468, 34, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1469, 36, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1470, 37, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1471, 43, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1472, 52, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1473, 58, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1474, 109, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1475, 174, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1476, 182, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1477, 183, 'April', '2021', 0, '2021-04-13 06:06:59'),
(1478, 1, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1479, 22, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1480, 34, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1481, 36, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1482, 37, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1483, 43, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1484, 52, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1485, 58, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1486, 109, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1487, 174, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1488, 182, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1489, 183, 'March', '2021', 0, '2021-04-13 06:07:40'),
(1490, 1, 'April', '2021', 0, '2021-04-13 06:07:40'),
(1491, 22, 'April', '2021', 0, '2021-04-13 06:07:40'),
(1492, 34, 'April', '2021', 0, '2021-04-13 06:07:40'),
(1493, 36, 'April', '2021', 0, '2021-04-13 06:07:40'),
(1494, 37, 'April', '2021', 0, '2021-04-13 06:07:40'),
(1495, 43, 'April', '2021', 0, '2021-04-13 06:07:40'),
(1496, 52, 'April', '2021', 0, '2021-04-13 06:07:41'),
(1497, 58, 'April', '2021', 0, '2021-04-13 06:07:41'),
(1498, 109, 'April', '2021', 0, '2021-04-13 06:07:41'),
(1499, 174, 'April', '2021', 0, '2021-04-13 06:07:41'),
(1500, 182, 'April', '2021', 0, '2021-04-13 06:07:41'),
(1501, 183, 'April', '2021', 0, '2021-04-13 06:07:41'),
(1502, 1, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1503, 22, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1504, 34, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1505, 36, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1506, 37, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1507, 43, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1508, 52, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1509, 58, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1510, 109, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1511, 174, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1512, 182, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1513, 183, 'March', '2021', 0, '2021-04-13 13:36:20'),
(1514, 1, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1515, 22, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1516, 34, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1517, 36, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1518, 37, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1519, 43, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1520, 52, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1521, 58, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1522, 109, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1523, 174, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1524, 182, 'April', '2021', 0, '2021-04-13 13:36:20'),
(1525, 183, 'April', '2021', 0, '2021-04-13 13:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_host_placetype`
--

CREATE TABLE `bgpkr_host_placetype` (
  `host_id` int(10) UNSIGNED NOT NULL COMMENT 'property id',
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'user id',
  `place_type` varchar(50) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `dedicated_for` varchar(50) NOT NULL,
  `parking_type` varchar(50) NOT NULL,
  `total_guest` char(3) NOT NULL,
  `total_bedrooms` char(3) NOT NULL,
  `guest_bed` char(2) NOT NULL,
  `doublebeds` varchar(355) NOT NULL,
  `queenbeds` varchar(355) NOT NULL,
  `singlebeds` varchar(355) NOT NULL,
  `sofabeds` varchar(355) NOT NULL,
  `kingbeds` varchar(355) NOT NULL,
  `twinbeds` varchar(355) NOT NULL,
  `floor_mattress` varchar(355) NOT NULL,
  `airbeds` varchar(355) NOT NULL,
  `couch` varchar(355) NOT NULL,
  `total_sofa` char(3) NOT NULL,
  `total_couch` char(3) NOT NULL,
  `total_floor_mattress` char(3) NOT NULL,
  `total_kingbed` char(3) NOT NULL,
  `total_queenbed` char(3) NOT NULL,
  `total_doublebed` char(3) NOT NULL,
  `total_twinbed` char(3) NOT NULL,
  `total_airbed` char(3) NOT NULL,
  `total_bathrooms` char(4) NOT NULL,
  `location` varchar(255) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `apt` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `basic_amenities` varchar(50) NOT NULL,
  `kitchen_dining` varchar(100) NOT NULL,
  `bed_baths` varchar(100) NOT NULL,
  `entertainment` varchar(100) NOT NULL,
  `outside_amenities` varchar(100) NOT NULL,
  `safty_amenities` varchar(100) NOT NULL,
  `other_amenities` varchar(200) NOT NULL,
  `place_rules` text NOT NULL,
  `other_space` varchar(150) NOT NULL,
  `name_listing` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `about_neighborhood` varchar(1000) NOT NULL,
  `host_name` varchar(50) NOT NULL,
  `profile_img` varchar(140) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `lang_code` varchar(10) NOT NULL,
  `lang_code_other` varchar(10) NOT NULL,
  `primary_phone` bigint(20) NOT NULL,
  `other_phone_code` varchar(10) NOT NULL,
  `other_phone` bigint(20) NOT NULL,
  `introduction` text NOT NULL,
  `suitable_child` enum('','0','1') NOT NULL,
  `suitable_infants` enum('','0','1') NOT NULL,
  `suitable_pets` enum('','0','1') NOT NULL,
  `allow_smoking` enum('','0','1') NOT NULL,
  `allow_parties` enum('','0','1') NOT NULL,
  `add_more` text NOT NULL,
  `noise_potential` enum('','0','1') NOT NULL,
  `pet_live` enum('','0','1') NOT NULL,
  `have_weapon` enum('','0','1') NOT NULL,
  `media_device` enum('','0','1') NOT NULL,
  `other_animal` enum('','0','1') NOT NULL,
  `if_any` text NOT NULL,
  `day_before_arrives` varchar(15) NOT NULL,
  `apt_booking_before` varchar(20) NOT NULL,
  `stay_min_night` char(3) NOT NULL,
  `stay_max_night` char(3) NOT NULL,
  `checkin_from` varchar(15) NOT NULL,
  `checkin_to` varchar(15) NOT NULL,
  `checkout_from` varchar(15) NOT NULL,
  `checkout_to` varchar(15) NOT NULL,
  `booking_start_time` varchar(15) NOT NULL,
  `booking_end_time` varchar(15) NOT NULL,
  `half_day_booking` enum('','0','1') NOT NULL,
  `currency` varchar(20) NOT NULL,
  `base_price` float NOT NULL,
  `half_day_price` float NOT NULL COMMENT 'Half Day Price',
  `min_price` float NOT NULL,
  `max_price` float NOT NULL,
  `cleaning_fee` float NOT NULL,
  `is_insurance` enum('','0','1') NOT NULL,
  `is_approve` enum('0','1','2') NOT NULL COMMENT '''0'' for pending, ''1'' for approve,2=reject',
  `is_complete` enum('0','1') NOT NULL COMMENT '''0'' for incomplete ''1'' for complete',
  `is_delete` enum('0','1') NOT NULL COMMENT '0 for active, 1 for delete',
  `updated_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Properties Deatail';

--
-- Dumping data for table `bgpkr_host_placetype`
--

INSERT INTO `bgpkr_host_placetype` (`host_id`, `user_id`, `place_type`, `property_type`, `room_type`, `dedicated_for`, `parking_type`, `total_guest`, `total_bedrooms`, `guest_bed`, `doublebeds`, `queenbeds`, `singlebeds`, `sofabeds`, `kingbeds`, `twinbeds`, `floor_mattress`, `airbeds`, `couch`, `total_sofa`, `total_couch`, `total_floor_mattress`, `total_kingbed`, `total_queenbed`, `total_doublebed`, `total_twinbed`, `total_airbed`, `total_bathrooms`, `location`, `country`, `state`, `city`, `lat`, `lng`, `apt`, `zipcode`, `basic_amenities`, `kitchen_dining`, `bed_baths`, `entertainment`, `outside_amenities`, `safty_amenities`, `other_amenities`, `place_rules`, `other_space`, `name_listing`, `description`, `about_neighborhood`, `host_name`, `profile_img`, `country_code`, `lang_code`, `lang_code_other`, `primary_phone`, `other_phone_code`, `other_phone`, `introduction`, `suitable_child`, `suitable_infants`, `suitable_pets`, `allow_smoking`, `allow_parties`, `add_more`, `noise_potential`, `pet_live`, `have_weapon`, `media_device`, `other_animal`, `if_any`, `day_before_arrives`, `apt_booking_before`, `stay_min_night`, `stay_max_night`, `checkin_from`, `checkin_to`, `checkout_from`, `checkout_to`, `booking_start_time`, `booking_end_time`, `half_day_booking`, `currency`, `base_price`, `half_day_price`, `min_price`, `max_price`, `cleaning_fee`, `is_insurance`, `is_approve`, `is_complete`, `is_delete`, `updated_on`, `added_on`) VALUES
(1, 2, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '1', '1', '1', '1', '0', '1', '1', '1', '0', '0', '1', '1', '1', '0', '0', '0', '0', '1', '3', 'B437, Gali No 1, Bhola Nath Nagar, Block B, Shahdara, Delhi, 110032, India', 'India', 'Delhi', 'Delhi', 28.669710899999995, 77.28808099999999, '', '110032', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,17,18,19,20,21,22,23,24,25,26', '27,28,30,31,32,33,34,35,36', '37,38,39,40,41,42,43,44,45,46', '47,48,49,50,51,52,53,54,56', '57,59,58', 'Testing 2,Testing', 'qgywefhb\r\nwerwejr \r\n we wer w', 'Kitchen,Washingmachine,Dryer,Parking,Gym,Pool,Hot,Tub', 'Testing Property upload', 'To all our readers,\r\nIt might be awkward, but please don\'t scroll past this. This Thursday we humbly ask you to defend Wikipedia\'s independence. 98% of our readers don\'t give; they simply look the other way. If you are an exceptional reader who has already donated, we sincerely thank you. If you donate just ? 150, Wikipedia could keep thriving for years. Most people donate because Wikipedia is useful. If Wikipedia has given you ? 150 worth of knowledge this year, take a minute to donate. Show the volunteers who bring you reliable, neutral information that their work matters. Thank you.\r\nTo all our readers,\r\nIt might be awkward, but please don\'t scroll past this. This Thursday we humbly ask you to defend Wikipedia\'s independence. 98% of our readers don\'t give; they simply look the other way. If you are an exceptional reader who has already donated, we sincerely thank you. If you donate just ? 150, Wikipedia could keep thriving for years. Most people donate because Wikipedia is useful. If Wikipedia has given you ? 150 worth of knowledge this year, take a minute to donate. Show the volunteers who bring you reliable, neutral information that their work matters. Thank you.\r\n', '', 'Devesh', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/144ryi4in6xRd.jfif', '+91', 'in', 'us', 8700308240, '', 0, '98% of our readers don\'t give; they simply look the other way. If you are an exceptional reader who has already donated, we sincerely thank you. If you donate just ? 150, Wikipedia could keep thriving for years. Most people donate because Wikipedia is useful. If Wikipedia has given you ? 150 worth of knowledge this year, take a minute to donate. Show th', '1', '1', '1', '1', '1', 'Testing Rules', '1', '1', '1', '1', '1', 'Testing things to know', 'Same day', 'anytime', '1', '3', '12:00 AM', '01:00 AM', '08:30 AM', '09:00 AM', '12:00 AM', '12:00 AM', '1', 'Rupees', 3430, 250, 2915.5, 3944.5, 1000, '1', '1', '1', '0', '2020-11-04 08:34:16', '2020-08-20 07:37:21'),
(4, 4, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '2', '0', '1', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 11:55:40'),
(5, 4, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '1', '1', '2', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.728296699999998, 77.47308869999999, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,17,19', '28,31,33,35', '37,38,39', '50,52', '57,58,59', 'sdvsvs sdvsv,vsd', 'svsdvs', 'Kitchen,Washingmachine,Dryer', 'avdfsva da  ', 'dbbdafb dfvbaf', '', 'cvsdvsv', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/186caio6troFb.jpeg', '+91', 'in', 'us', 8006112812, '', 0, 'bmknk', '1', '1', '1', '1', '1', 'hbhbh', '1', '1', '1', '1', '1', 'bhhbhj', '10', '1-2', '5', '9', '08:30 AM', '09:30 AM', '07:30 AM', '11:00 AM', '', '', '', 'Rupees', 345324, 0, 293525, 397123, 3242, '1', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 11:58:11'),
(6, 4, 'Apartment', 'Flat', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:13:27'),
(7, 4, 'Apartment', 'Condominium', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:14:40'),
(8, 4, 'Apartment', 'Apartment', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:17:24'),
(9, 4, 'Apartment', 'Flat', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:31:36'),
(10, 4, 'Apartment', 'Apartment', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:32:25'),
(11, 4, 'Apartment', 'Condominium', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', 'vcsvsfdv', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/595bWa3JHtdch.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'xvfgdfg', '1', '1', '1', '1', '1', 'dvdfvfdv', '1', '1', '1', '1', '1', 'seefweef', '10', '1-2', '8', '9', '08:00 AM', '10:30 AM', '12:30 AM', '05:00 AM', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:50:39'),
(12, 4, 'Apartment', 'Condominium', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 12:58:24'),
(13, 4, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Front door parking', '1', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.7283419, 77.47304129999999, '', '201003', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 09:13:30', '2020-08-20 13:03:46'),
(14, 4, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '1', '1', '3', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '57,58,59', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 16:48:58', '2020-08-20 13:34:27'),
(15, 4, 'Apartment', 'Condominium', 'Single room', 'Host Belongings', 'Front door parking', '1', '1', '1', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Sadar Bazaar, New Delhi, Delhi, India', 'India', 'Delhi', 'New Delhi', 28.658435957044773, 77.21330028770568, 'svdsdc', '110001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-21 22:31:12', '2020-08-21 22:29:39'),
(18, 4, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Garage', '4', '1', '2', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.728580872569772, 77.47222902339375, 'fdgdfg', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18,20', '28,31', '38,40', '48,50,51', '57,59', 'xcvsdv', '', 'Kitchen,Washingmachine,Dryer', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-24 08:17:26', '2020-08-24 08:16:25'),
(19, 4, 'Apartment', 'Apartment', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-24 20:27:07', '2020-08-24 20:27:07'),
(22, 1, 'House', 'Villa', 'Whole apartment', 'Guest Entirely', 'Dedicated parking area', '4', '2', '2', '0,0', '1,1', '0,0', '0,0', '1,1', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '1', '1', '0', '3.5', 'Rashtrapati Bhavan, Rashtrapati Bhawan, President\'s Estate, New Delhi, Delhi, India', 'India', 'Delhi', 'New Delhi', 28.61438547378933, 77.19851804893493, 'rer34re', '110004', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18,19', '28,30', '38,39', '51,52', '57,59', '', '', 'Kitchen,Dryer,Parking', 'My home', 'Home', 'good\r\n', 'Amit kumar karn', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/684oeDh66IISa.jpg', '+91', 'in', 'in', 7840033848, '+91', 7840033848, 'qwertyuasdfgh', '1', '0', '1', '0', '0', '', '1', '0', '1', '1', '0', '', '1', 'anytime', '1', '10', '12:00 AM', '11:30 PM', '12:00 AM', '11:30 PM', '', '', '1', 'Dollar', 1000, 250, 850, 1150, 100, '1', '1', '1', '0', '2020-11-03 14:09:23', '2020-08-26 09:00:05'),
(23, 5, 'Apartment', 'Flat', 'Whole apartment', 'Guest Entirely', 'Dedicated parking area', '4', '1', '2', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:00:53', '2020-08-26 11:00:33'),
(24, 5, 'Apartment', 'Condominium', 'Whole apartment', 'Guest Entirely', 'Front door parking', '4', '1', '2', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:06:45', '2020-08-26 11:06:30'),
(25, 5, 'Apartment', 'Condominium', 'Single room', 'Host Belongings', 'Dedicated parking area', '4', '2', '2', '0,0', '0,1', '0,0', '0,0', '2,0', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:08:10', '2020-08-26 11:07:52'),
(26, 5, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Front door parking', '4', '1', '5', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:18:39', '2020-08-26 11:18:01'),
(27, 5, 'Apartment', 'Condominium', 'Single room', 'Host Belongings', 'Front door parking', '4', '1', '4', '0', '0', '0', '0', '3', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:21:18', '2020-08-26 11:20:53'),
(28, 5, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Front door parking', '4', '1', '1', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:22:22', '2020-08-26 11:22:08'),
(29, 5, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Front door parking', '6', '1', '3', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-26 11:24:23', '2020-08-26 11:24:07'),
(34, 3, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '1', '2', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '9995 East Harvard Avenue, Denver, CO, USA', 'United States', 'Colorado', 'Denver', 39.67336046661534, -104.87304513862306, '', '80231', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '26', '28', '46', '48', '57', '', '', 'Kitchen', 'r', 'r', '', 'r', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/745Uozunbu3mT.jpeg', '+1', 'us', 'in', 3236129883, '', 0, 'Incidentals', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '2', '3 days', '2', '4', '12:00 AM', '12:30 AM', '09:00 PM', '09:30 PM', '', '', '', 'Rupees', 100, 0, 95, 105, 90, '1', '1', '1', '0', '2020-09-05 03:26:48', '2020-08-27 08:08:52'),
(35, 5, 'Apartment', 'Flat', 'Single room', 'Host Belongings', 'Front door parking', '4', '2', '3', '0,0', '0,1', '0,0', '0,0', '1,0', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '2', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-08-27 09:49:15', '2020-08-27 09:48:53'),
(36, 8, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'B434, Bholanath Nagar Marg, Bhola Nath Nagar, Block B, Shahdara, Delhi, 110032, India', 'India', 'Delhi', 'Delhi', 28.670134281043524, 77.28823007605742, '', '110032', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20', '33', '42', '54', '57', '', '', 'Washingmachine,Dryer', 'Devesh Testing', 'Testing everything', '', 'Shubham Tyagi', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/625aw4GuuTnac.jfif', '+91', 'in', 'in', 8700308240, '', 0, 'Tetsuhuer', '0', '1', '0', '1', '0', '', '1', '0', '1', '1', '1', '', 'Same day', '3 days', '2', '5', '12:00 AM', '01:00 AM', '08:00 AM', '09:00 AM', '12:30 AM', '12:30 AM', '', 'Dollar', 3434, 0, 2918.9, 3949.1, 100, '1', '1', '1', '0', '2020-09-05 07:47:53', '2020-08-27 12:19:13'),
(37, 18, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '3', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '226, Block 74, Sector C, Gole Market, New Delhi, Delhi 110001, India', 'India', 'Delhi', 'New Delhi', 28.635955199999998, 77.2046848, '', '110001', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18', '33,35', '38,40', '52', '57', '', '', 'Kitchen,Washingmachine', 'ASss', 'asdfasd', '', 'dsfsdf', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/504meowVid4pL.png', '+91', 'in', 'in', 8006112812, '', 0, 'czasfasfda', '1', '1', '1', '0', '0', '', '1', '1', '1', '1', '1', 'vzscfasdf', '10', '3 days', '2', '4', '03:30 AM', '06:00 AM', '01:00 AM', '04:00 AM', '', '', '', 'Dollar', 2311, 0, 1964.35, 2657.65, 32, '1', '1', '1', '0', '2020-09-05 07:48:04', '2020-08-27 12:39:29'),
(39, 18, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Dedicated parking area', '4', '2', '2', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', '9, Gali Number 7, Block 9, Dev Nagar, Karol Bagh, Delhi, 110005, India', 'India', 'Delhi', 'Delhi', 28.655616, 77.185024, 'xcsdc', '110005', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20,26', '28,31,33', '42,44', '48', '58', '', 'szx cv vsd', 'Kitchen,Washingmachine', 'Sheenu Villa', 'A neighbourhood or neighborhood is a geographically localised community within a larger city, town, suburb or rural area. Neighbourhoods are often social communities with considerable face-to-face interaction among members', 'A neighborhood or neighborhood is a geographically localized community within a larger city, town, suburb, or rural area. Neighborhoods are often social communities with considerable face-to-face interaction among members', 'Sheenu Saifi', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/500EHKs4huR9u.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'A neighborhood or neighborhood is a geographically localized community within a larger city, town, suburb, or rural area. Neighborhoods are often social communities with considerable face-to-face interaction among members', '1', '1', '1', '1', '1', 'A neighbourhood or neighborhood is a geographically localised community within a larger city, town, suburb or rural area. Neighbourhoods are often social communities with considerable face-to-face interaction among members', '1', '1', '1', '1', '1', 'A neighbourhood or neighborhood is a geographically localised community within a larger city, town, suburb or rural area. Neighbourhoods are often social communities with considerable face-to-face interaction among members', '6', '15 days', '3', '4', '07:00 PM', '08:00 PM', '06:30 PM', '07:00 PM', '', '', '1', 'Rupees', 321231, 250, 273046, 369416, 3423, '1', '0', '1', '1', '2020-10-16 11:53:03', '2020-09-01 12:28:10'),
(43, 24, 'Apartment', 'Apartment', 'Whole apartment', 'Guest Entirely', 'Dedicated parking area', '4', '2', '2', '0,0', '1,1', '0,0', '0,0', '0,0', '0,0', '0,0', '0,0', '0,0', '1', '0', '0', '0', '0', '0', '0', '0', '1.5', 'Kamla Nehru School, Ram Mandir Road, Sanjay Nagar Bengali Colony, Kamptee, Maharashtra, India', 'India', 'Maharashtra', 'Kamptee', 21.2159621, 79.20326284484406, '', '441001', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,18,19,20,21,22,24', '30,32,35', '38,44', '51', '57,59', '', '', 'Kitchen,Washingmachine,Dryer,Parking,Gym,Pool,Hot', 'My Lovely Apartment', 'Home Sweet Home', '', 'Sana Sheikh', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/516yJctPS9oTy.png', '+1', 'us', 'us', 3233423079, '', 0, 'Hi There!', '1', '1', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '4', '3 days', '1', '2', '12:30 AM', '02:00 PM', '01:30 AM', '02:30 AM', '', '', '', 'Dollar', 750, 0, 637.5, 862.5, 200, '1', '1', '1', '0', '2020-09-05 03:26:55', '2020-09-02 07:06:56'),
(45, 1, 'Events/Parties/Lawns', 'Front yard/Back yard', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-09-03 11:00:32', '2020-09-03 11:00:32'),
(46, 1, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Roadside parking', '4', '1', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0.5', 'B438, Gali No 1, Bhola Nath Nagar, Block B, Shahdara, Delhi, 110032, India', 'India', 'Delhi', 'Delhi', 28.669787499999998, 77.2880589, '', '110032', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '26', '28', '46', '48', '57,59,58', '', '', 'Dryer,Parking', 'Devesh testug', 'Tebfbef wefwf', '', 'Devesh Chitkara', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/249triWHe2oSY.jfif', '+91', 'in', 'in', 8700308240, '', 0, 'Tetsungn', '0', '0', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-09-04 05:17:50', '2020-09-04 05:15:22'),
(47, 2, 'Events/Parties/Lawns', 'Banquet Hall', 'Whole apartment', 'Guest Entirely', 'Front door parking', '6', '3', '4', '0,0,0', '1,1,0', '0,0,0', '0,0,0', '1,1,1', '0,0,0', '0,0,0', '0,0,0', '0,0,0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'Duhai, Ghaziabad, Uttar Pradesh, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.7304168, 77.4758542, '', '201206', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15', '27,28', '46', '47', '57,59,58', 'ddd', 'ssssss', 'Washingmachine,Dryer', 'sssssss', 'ssssssss', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-09-04 11:31:32', '2020-09-04 11:30:09'),
(50, 1, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Roadside parking', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'B437, Gali No 1, Bhola Nath Nagar, Block B, Shahdara, Delhi, 110032, India', 'India', 'Delhi', 'Delhi', 28.670432648937762, 77.28717907777097, '', '110032', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20', '33', '46', '48', '57,59,58', '', '', 'Washingmachine,Dryer,Parking', 'Testing Property with changes', 'erwerwrw\r\nerwerwerw', 'werwerwe\r\nwer\r\nwerwe\r\nrwe\r\nrwe\r\nr\r\nwe', 'Joker', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/185vjoWc2JKma.jpg', '+91', 'in', 'in', 8700308240, '', 0, 'Tetsuioj  uhuif uinui iojriof', '0', '0', '0', '1', '1', '', '1', '1', '1', '1', '1', '', '1', 'anytime', '1', '5', '12:00 PM', '02:00 PM', '11:00 AM', '12:00 PM', '', '', '0', 'Rupees', 1000, 0, 850, 1150, 100, '1', '0', '1', '0', '2020-09-05 12:59:19', '2020-09-05 12:49:19'),
(52, 3, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '1', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0.5', '9959 East Peakview Avenue, Englewood, CO, USA', 'United States', 'Colorado', 'Englewood', 39.59963100982575, -104.87399853757324, '', '80111', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16', '28', '38', '48', '57', '', '', 'Kitchen', 'Carriage House', 'Fabulous newly constructed carriage house in the middle of the city!\r\nThis one bed, one bath town home has radiant floor heat and air conditioning and it includes a full kitchen with dishes, utensils, pots and pans. You are able to walk to the capital', 'The carriage house is located in the middle of the city but it is very quiet. You can walk to bars, restaurants, clubs, coffee shops, the capitol, 16th street mall, convention center (1.1 miles away). You really don\'t need a car, especially if you us', 'Amol', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/158drT1Ykiiz0.jpg', '+1', 'us', 'us', 3236129883, '', 0, 'I am a top real estate agent in Denver. I live in Denver, I run in Denver, and I sell DENVER! I wanted to get involved with vacation rentals to help people experience ALL this great city has to offer!', '1', '1', '0', '1', '1', 'Pets not allowed.', '1', '1', '0', '1', '1', 'Swimming pool is closed.', 'Same day', '3 months', '2', '4', '12:00 PM', '02:00 PM', '11:00 AM', '12:00 PM', '12:00 AM', '12:00 AM', '0', 'Dollar', 100, 0, 95, 105, 20, '1', '1', '1', '0', '2020-09-08 09:22:19', '2020-09-08 09:06:26'),
(58, 18, 'Apartment', 'Flat', 'Whole area', 'Guest Entirely', 'Dedicated parking area', '4', '2', '2', '0,0', '0,2', '0,0', '0,0', '2,0', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', 'Maharaja Ranjeet Singh Marg, Gandhi Market Area, Barakhamba, New Delhi, Delhi 110006, India', 'India', 'Delhi', 'New Delhi', 28.635955199999998, 77.2308992, '', '110006', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,18', '28,31,33', '38,40,42', '48,50', '57', 'dfds', 'sddfsdfd sdsdfs', 'Kitchen,Washingmachine,Dryer', 'Shahnazar Saifi', 'Shahhahahhahahahh  fakfdjf asdfdfasdfda asdsfasf asfasf  asdfasf asfasf asffasfa asffasf asfasfa adsfasf asfsasfasf asfasf asasfasf asfasf assfasf\r\ndfgdsfs\r\nSheenu Saifi\r\nShahnazar', 'asdfas asfsasfasf adsdsfasfsd asdafsdasf assfas asffasfasf fasfas', 'Sheenu Saifi', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/325JdUT6BwCHj.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'svsdvsd sdvsdvv sddvsdv', '1', '1', '1', '1', '1', 'cbcx dfbdfb dfbdfbd', '1', '1', '1', '1', '1', 'cx c sdvsdv sdvsdv', '9', '7 days', '7', '7', '06:30 PM', '07:00 PM', '05:00 PM', '06:30 PM', '', '', '1', 'Rupees', 23213, 250, 19731.1, 26694.9, 23132, '1', '1', '1', '0', '2020-10-16 11:53:03', '2020-09-10 09:48:41'),
(60, 29, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '2', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'sfsd', 'Austria', 'British Columbia', 'sdsd', 0, 0, 'sdfsd', '123456', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15', '27', '37', '47', '57', '', '', 'Kitchen', 'fsd', 'ddfsdsdfsdfsd', 'sdfsdfdf', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-09-11 09:22:07', '2020-09-11 09:20:47'),
(93, 18, 'Apartment', 'Apartment', 'Shared room', 'Host Belongings', 'Front door parking', '4', '2', '3', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '2.5', '91, Amba Enclave, Sector 9, Rohini, Delhi, 110085, India', 'India', 'Delhi', 'Delhi', 28.6130176, 77.2308992, ' xc xc ', '110085', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,17,19,25', '30,32', '37,38', '47,49,51', '57', 'dvsdvs', 'sdcvsdvsd sdvsdv sdvs', 'Kitchen,Washingmachine,Dryer', 'fdbgdfgd', 'fgdgfdfgd', 'fbgfdgbf ffb', 'gbfdbf', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/103wigehyEmkQ.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'sdfgfsdfg sdfgwsdfg', '1', '1', '1', '1', '1', 'dsfsdfsd', '1', '1', '1', '1', '1', 'jghhghhjhj', '11', '3 days', '4', '5', '07:00 PM', '08:00 PM', '06:00 PM', '07:00 PM', '', '', '1', 'Rupees', 3413240, 250, 2901260, 3925230, 212, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 13:00:02'),
(94, 18, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Front door parking', '4', '2', '2', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '91, Amba Enclave, Sector 9, Rohini, Delhi, 110085, India', 'India', 'Delhi', 'Delhi', 28.6130176, 77.2308992, '', '110085', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18,20', '33,35', '44,46', '48,50', '57', 'csddsc', 'dfsfsd', 'Kitchen,Washingmachine,Dryer', 'dsfsd', 'dfwsdfasdf', 'sdfvsdfvsdfv', 'sddfcsdfs', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/139icFEiu8nua.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'cfxvdfd dffvdfvd', '1', '1', '1', '1', '1', 'gsdfg sdgdsegsd', '1', '1', '1', '1', '1', 'sdfsfsf', '10', '7 days', '6', '8', '09:00 PM', '10:00 PM', '08:00 PM', '09:00 PM', '', '', '1', 'Rupees', 31231, 250, 26546.3, 35915.6, 32, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 13:10:56'),
(95, 18, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Front door parking', '4', '3', '1', '1,0,0', '1,0,1', '0,0,0', '0,0,0', '1,1,1', '0,0,0', '0,0,0', '0,0,0', '0,0,0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', 'Jansath, Uttar Pradesh, India', 'India', 'Uttar Pradesh', 'Jansath', 29.32695869999999, 77.8335336, '', '251314', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20,22', '28,31,33', '38,40', '48,49', '57,59,58', 'fvdfv', 'dfvdfvdfv', 'Kitchen,Washingmachine,Dryer', 'sdfsdfs', 'dfvdfvdf dffvdfv', 'fvdfvdfv', 'jghj', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/715QUF7XuITvn.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'hghjhjhjjhk', '1', '1', '1', '1', '1', 'fvdvfdfv', '1', '1', '1', '1', '1', 'fvdfvd dffv df', '6', '15 days', '3', '5', '08:30 PM', '09:30 PM', '06:30 PM', '08:30 PM', '', '', '1', 'Rupees', 121, 250, 108.9, 133.1, 21, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 13:17:38'),
(97, 18, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Front door parking', '4', '2', '3', '0,0', '1,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', '91, Amba Enclave, Sector 9, Rohini, Delhi, 110085, India', 'India', 'Delhi', 'Delhi', 28.6130176, 77.2308992, 'xscsdc', '110085', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '24,25,26', '28,31,33', '37,38,39,43,45', '47,48,52,54', '57,59,58', 'sdfvsd', 'dffvdfv', 'Kitchen,Washingmachine,Dryer,Parking', 'dscfsd', 'scsdc sddcsdc', 'scvsdv sdv', 'ujuhhjjjjjjjjjj', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/471sOnXhJwcsL.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'khjjkjj', '1', '1', '1', '1', '1', 'hkjjjhhj', '1', '1', '1', '1', '1', 'dffgdf dfbdfbd', '11', '7 days', '3', '6', '10:00 PM', '11:30 PM', '09:00 PM', '10:00 PM', '', '', '1', 'Rupees', 3123, 250, 2654.55, 3591.45, 21, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 13:50:11'),
(98, 18, 'Apartment', 'Condominium', 'Single room', 'Host Belongings', 'Dedicated parking area', '4', '2', '2', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '91, Amba Enclave, Sector 9, Rohini, Delhi, 110085, India', 'India', 'Delhi', 'Delhi', 28.6130176, 77.2308992, '', '110085', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,17,18,19', '27,28', '37,38,39', '48,50', '57,59,58', 'dscc sc ', 'cx xcx', 'Kitchen,Dryer,Parking', 'cvdf', 'sdfsdfsdf', 'dfvdfvdfv', 'dcsvcsdvd ', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/143tGyyZLloJD.jpeg', '+91', 'in', 'in', 6396031312, '', 0, 'cvdsv', '1', '1', '1', '1', '1', 'hgkjhkjhkj', '1', '1', '1', '1', '1', 'ghhjjk', '7', '3 days', '4', '5', '09:30 PM', '10:00 PM', '08:30 PM', '09:30 PM', '', '', '1', 'Rupees', 67, 250, 63.65, 70.35, 55, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 14:12:05'),
(99, 18, 'Apartment', 'Condominium', 'Whole apartment', 'Host Belongings', 'Front door parking', '4', '2', '3', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', '91, Amba Enclave, Sector 9, Rohini, Delhi, 110085, India', 'India', 'Delhi', 'Delhi', 28.6130176, 77.2308992, '', '110085', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18', '27', '37', '56', '57', 'vdvs', 'vd', 'Kitchen,Washingmachine', 'ewvfwev', 'vgeverver', 'vbebvebv', 'rgerge', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/492oasjuqahvR.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'gfbfgbf', '1', '1', '1', '1', '1', 'dsfsdfs', '1', '1', '1', '1', '1', 'csdvfsdv', '7', '7 days', '3', '4', '11:00 PM', '11:30 PM', '10:30 PM', '11:00 PM', '', '', '1', 'Rupees', 1211, 250, 1029.35, 1392.65, 3132, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 15:01:52'),
(103, 18, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Front door parking', '4', '2', '2', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.7283351, 77.4730361, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18,22', '27,28', '37,38,39,40', '47,48', '57', 'jknk', 'jjnnj', 'Washingmachine,Dryer', 'vvsdvs', 'svsvsdvs', 'fsdvsvs dvsd', 'vdvwv', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/8958ZwE3onflb.jpeg', '+91', 'in', 'in', 6396031312, '', 0, 'wefwef', '1', '1', '1', '1', '1', 'vsdvsdcfs', '1', '1', '1', '1', '1', 'sacasdca', '13', '3 days', '3', '6', '07:00 PM', '08:00 PM', '06:30 PM', '07:00 PM', '', '', '1', 'Rupees', 213, 250, 191.7, 234.3, 33, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 19:26:08'),
(104, 18, 'Apartment', 'Flat', 'Whole apartment', 'Guest Entirely', 'Dedicated parking area', '4', '1', '3', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.7283351, 77.4730361, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,17', '31,35', '37,39', '56', '57,59', '432423', '', 'Kitchen,Washingmachine', 'dsvs', 'sdvsd', 'sdvsdvs', 'vdsdvs', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/584UdjvmnnaeG.jpeg', '+91', 'in', 'in', 8006112812, '', 0, ' dbdfbdfb', '1', '1', '1', '1', '1', ' z<z<', '1', '1', '1', '1', '1', 'xhj hzx hz', '8', '3 days', '2', '3', '10:30 PM', '11:30 PM', '09:00 PM', '10:30 PM', '', '', '1', 'Rupees', 211, 250, 189.9, 232.1, 32, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 19:33:33'),
(105, 18, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '2', '2', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.7283351, 77.4730361, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18', '31,33', '38,40', '47,48', '57,59', 'xzxzvcsdzvc', 'xc zxc z', 'Kitchen,Washingmachine,Dryer', 'gfsdfg', 'dssdfsd', 'vdsfvsd', 'fdvdfv', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/368VjRJkeqoiG.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'vddfvdv', '1', '1', '1', '1', '1', 'dsfdgsdfs', '1', '1', '1', '1', '1', 'vsdvsdvs', '9', '3 days', '2', '4', '06:00 PM', '07:30 PM', '05:30 PM', '06:00 PM', '', '', '1', 'Rupees', 13213, 250, 11231, 15195, 322, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 19:44:49'),
(106, 18, 'Apartment', 'Condominium', 'Shared room', 'Host Belongings', 'Dedicated parking area', '4', '1', '3', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.7283351, 77.4730361, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18', '28', '38', '54', '57', '', '', 'Kitchen,Washingmachine', 'dsvfds', 'dsssdv', 'vsdvsdvsdv', 'vsdvsdv', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/268SsQJe5drUj.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'sdvsdfgvsdf', '1', '1', '1', '1', '1', 'vsdvsvs', '1', '1', '1', '1', '1', 'sdvsdv', '11', '15 days', '3', '4', '08:30 PM', '09:00 PM', '07:30 PM', '08:30 PM', '', '', '1', 'Rupees', 312312, 250, 265465, 359159, 3223, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 19:53:53'),
(108, 18, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '2', '1', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.7282978, 77.47307529999999, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18,20', '27,28', '37,38,39', '50,51,52,53', '57,59', 'fbdb', 'fddf', 'Kitchen,Washingmachine', 'fdbdfb', 'dfddfbdfb', 'dfbdfbdfbd fdbdb', 'dsfsdfsd', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/731BwnoeU2t4Z.jpeg', '+91', 'in', 'in', 6396031312, '', 0, 'fvdfvd dfvdfvd', '1', '1', '1', '1', '1', 'scsdcsd', '1', '1', '1', '1', '1', 'sdvsdvs sd s', '6', '3 days', '3', '3', '06:30 PM', '08:00 PM', '05:30 PM', '06:30 PM', '', '', '1', 'Rupees', 3223, 250, 2739.55, 3706.45, 32, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-17 20:48:12'),
(109, 3, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '1', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '9959 East Peakview Avenue, Englewood, CO, USA', 'United States', 'Colorado', 'Englewood', 39.59961034293696, -104.87399853757324, 'Apt. J203', '80111', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16', '28', '38', '48', '57', '', 'Please use crockery carefully.', 'Kitchen,Washingmachine,Dryer,Parking,Gym,Pool,Hot', 'Art House', 'Pack your bags for a revitalizing retreat to Joshua Tree when you book this fabulous 2-bedroom, 1-bathroom vacation rental house that comfortably sleeps 5! Featuring a fenced-in backyard with a breezy patio overlooking the beautiful desert and a desirable location right around the corner from the Joshua Tree Visitor Center and downtown, this Joshua Tree home promises an unforgettable getaway!\r\n\r\n-- THE PROPERTY --\r\n\r\nMaster Bedroom: Queen Bed | Bedroom 2: Full Bed | Living Room: 2 Sleeper Sofas (more suitable for kids)\r\n\r\nUpon arrival, you\'ll be greeted by lovely trees, rock formations, and tasteful landscaping leading to the front door. Inside, the home boasts 984 square feet of meticulously appointed living space, featuring comfortable furniture, vibrant vintage colors, and many windows that invite you into every room.\r\n\r\n------The Interior------\r\n\r\nUpon arrival, you\'ll be greeted by lovely trees, rock formations, and tasteful landscaping leading to the front door. Inside, the home boasts 984 square feet of meticulously appointed living space, featuring comfortable furniture, vibrant vintage colors, and many windows that invite you into every room.', 'While the home provides prime space for relaxation, nothing can beat its amazing location! Joshua Tree Visitor Center is truly right around the corner, so you can easily plan your schedule to explore everything in the area with the center\'s extensive.\r\n\r\n---The View---\r\n\r\nWhile the home provides prime space for relaxation, nothing can beat its amazing location! Joshua Tree Visitor Center is truly right around the corner, so you can easily plan your schedule to explore everything in the area with the center\'s extensive.', 'Amol Karoo', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/959Dx7nwfOZTU.png', '+1', 'us', 'us', 3236129883, '', 0, ' I live in Los Angeles and am an artist, engineer, designer and an art director for the entertainment industry. I love yoga, travel, scuba diving, hiking and skiing!\r\nDuring your stay\r\nI will be available by text or phone. In \"Describe your place to guest.\r\nI will be available by text or phone. In \"Describe your place to guest.I will be available by text or phone. In \"Describe your place to guest.I will be available by text or phone. In \"Describe your place to guest.', '1', '1', '1', '0', '0', 'This property is not allowed for party and strictly no smoking policy.\r\nIn \"Describe your place to guest\" section, please provide one more text block stating \"About Neighborhood and Description, About hosts, Things to take care.\r\n\r\nIn \"Describe your place to guest\" section, please provide one more text block stating \"About Neighborhood and Description, About hosts, Things to take care.\r\n\r\nIn \"Describe your place to guest\" section, please provide one more text block stating \"About Neighborhood and Description, About hosts, Things to take care.\r\n\r\nIn \"Describe your place to guest\" section, please provide one more text block stating \"About Neighborhood and Description, About hosts, Things to take care.', '0', '0', '0', '1', '0', 'This is a desert area so mostly Viper snakes are spotted at the property. Please take extra precautions.In \"Describe your place to guest\" section, please provide one more text block stating \"About Neighborhood and Description, About hosts.\r\nIn \"Describe your place to guest\" section, please provide one more text block stating \"About Neighborhood and Description, About hosts.', 'Same day', 'anytime', '1', '10', '01:00 PM', '03:00 PM', '11:00 AM', '01:00 PM', '10:30 AM', '10:30 AM', '1', 'Dollar', 300, 250, 270, 330, 20, '1', '1', '1', '0', '2020-10-16 11:53:03', '2020-09-20 20:16:31'),
(111, 18, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '1', '3', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'Ghaziabad, Uttar Pradesh, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.6691565, 77.45375779999999, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '22,24,26', '31,33', '37,38', '47,48,49,51', '57', 'fdvdfvd', 'fvdfvdv', 'Kitchen,Washingmachine', 'fdfvdb', 'dfdfbdfb', 'fvdfvdfvbdf', 'fdfbdfd', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/562vbtmp1TSVh.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'gergerge', '1', '1', '1', '1', '1', 'vdsdvsdv dcfdv', '1', '1', '1', '1', '1', 'vsdvsdv vcsdvads', '12', 'anytime', '7', '12', '02:30 AM', '03:30 AM', '02:00 AM', '02:30 AM', '', '', '1', 'Rupees', 3223, 250, 2739.55, 3706.45, 2332, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-21 11:48:16'),
(112, 18, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Dedicated parking area', '4', '2', '1', '0,0', '0,0', '0,0', '0,0', '2,2', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Ludhiana, Punjab, India', 'India', 'Punjab', 'Ludhiana', 30.900965, 75.8572758, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,17', '27,28', '37,38,39,40', '47,49,51', '57', 'fdfvd', 'dfvdfvd dfv vdf', 'Kitchen,Washingmachine,Dryer', 'fvdfvdf dfvd', 'dfvdfvdfv', 'dfvdfvd dfvdfvd', 'dfdfvd', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/300DUjqlgZEEw.jpeg', '+91', 'in', 'in', 6396031312, '', 0, 'dfvbdfvd dfvvdfvd', '1', '1', '1', '1', '1', 'vwefgwerg', '1', '1', '1', '1', '1', 'dvsdv dvws', '7', '1 month', '3', '6', '04:00 AM', '04:30 AM', '03:00 AM', '04:00 AM', '', '', '1', 'Rupees', 32332, 250, 27482.2, 37181.8, 221, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-21 12:03:07'),
(137, 18, 'Apartment', 'Apartment', 'Shared room', 'Host Belongings', 'Front door parking', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Indian Summer, Cheema Chowk, Transport Nagar, Industrial Area- A, Ludhiana, Punjab, India', 'India', 'Punjab', 'Ludhiana', 30.8967511, 75.8748406, 'dssdv', '141003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,20', '28,31,33', '39,42', '47,48', '57,59', 'cwec wecw', 'cwcvcw', 'Washingmachine,Dryer', 'dsbdfv', 'dfvdfbd', 'fvbdfbdf', 'dfvbfdb', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/134idIFknno6a.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'fvdfvbd fvdf', '1', '1', '1', '1', '1', 'dgvdfvd', '1', '1', '1', '1', '1', 'dsvfgsdfv', '4', '2 months', '3', '5', '03:30 AM', '05:30 AM', '02:00 AM', '03:30 AM', '', '', '1', 'Rupees', 221, 250, 198.9, 243.1, 212, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-22 21:07:56'),
(138, 18, 'Apartment', 'Condominium', 'Single room', 'Host Belongings', 'Front door parking', '4', '1', '3', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Ludhiana Punjab Roadways, Bhagat Singh Park, Siraspur, Delhi, India', 'India', 'Delhi', 'Delhi', 28.7609954, 77.1465765, 'dascas', '110042', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18,20,22', '28,31', '37,38', '47,48', '57,59', 'sfsd', 'dsds', 'Kitchen,Washingmachine', 'dssvsd', 'dssdfcsdfs sdvsd', 'vsdvs sdvsdvs', 'Sheenu', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/6459etO2GHIVd.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'sdavsdv sdvsdvs', '1', '1', '1', '1', '1', 'vsdvsvs', '1', '1', '1', '1', '1', 'sdvsdvs sdvsdv', '10', '2 months', '3', '3', '04:00 AM', '04:30 AM', '03:30 AM', '04:00 AM', '', '', '1', 'Rupees', 322, 250, 273.7, 370.3, 32313, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-22 21:18:42'),
(139, 18, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Garage', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'dehradun airport taxi service, near jolly grant airport, Kanharwala, Dehradun, Uttarakhand, India', 'India', 'Uttarakhand', 'Dehradun', 30.18626, 78.1493253, '', '248140', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20,22', '27,28,30', '37,38,39,40,41,45', '51,52', '57', 'sdsfdgsdf', 'vdfvdfv', 'Kitchen,Washingmachine', 'dsfgdsf', 'sdfsdfsdf', 'dfvgdfvdfvd ', 'vdfvdf', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/743agTRuaCxO0.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'sdvsf sdfs', '1', '1', '1', '1', '1', 'vsdvsdv', '1', '1', '1', '1', '1', 'dsvsdvsdv sdvsd', '10', '2 months', '4', '10', '12:30 AM', '01:00 AM', '12:00 AM', '12:30 AM', '', '', '1', 'Rupees', 211, 250, 189.9, 232.1, 12, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-22 21:34:29'),
(145, 18, 'Apartment', 'Apartment', 'Whole apartment', 'Guest Entirely', 'Front door parking', '4', '1', '2', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'John Deere Agency, NH 58, Morta, Basantpur Saitli, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Basantpur Saitli', 28.7283027, 77.4730045, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18', '33,35', '38,42', '52,54', '57,59,58', 'ssfs', 'sdfsfs', 'Kitchen,Washingmachine,Dryer', 'bfsbf', 'Provider of property management and insurance services intended for people who are looking to rent their properties on a short time basis. \r\nThe company\'s services include photography and listing creation, guest liaison, guest screening, inventory management, insurance and cleaning services, enabling property owners to attract more guests and allow them to enjoy their holiday without thinking or worrying much about their property.\r\n\r\nProvider of property management and insurance services intendisting creation, guest liaison, guest screening, inventory management, insurance and cleaning services, enabling property owners to attract more guests and allow them to enjoy their holiday without thinking or worrying much about their property.', 'Provider of property management and insurance services intended for people who are looking to rent their properties on a short time basis. \r\n\r\nThe company\'s services include photography and listing creation, guest liaison, guest screening, inventory mana', 'fdgvdfgd', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/364MaoUhtXy1p.jpeg', '+91', 'in', 'in', 8006112812, '', 0, 'bfgdg fg fg ', '1', '1', '1', '1', '1', 'fbgf fgbfgbfg', '1', '1', '1', '1', '1', 'dfdffg fgdf', '7', '3 months', '3', '4', '01:00 AM', '01:30 AM', '12:30 AM', '01:00 AM', '', '', '1', 'Rupees', 211, 250, 189.9, 232.1, 221, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-09-23 05:45:56');
INSERT INTO `bgpkr_host_placetype` (`host_id`, `user_id`, `place_type`, `property_type`, `room_type`, `dedicated_for`, `parking_type`, `total_guest`, `total_bedrooms`, `guest_bed`, `doublebeds`, `queenbeds`, `singlebeds`, `sofabeds`, `kingbeds`, `twinbeds`, `floor_mattress`, `airbeds`, `couch`, `total_sofa`, `total_couch`, `total_floor_mattress`, `total_kingbed`, `total_queenbed`, `total_doublebed`, `total_twinbed`, `total_airbed`, `total_bathrooms`, `location`, `country`, `state`, `city`, `lat`, `lng`, `apt`, `zipcode`, `basic_amenities`, `kitchen_dining`, `bed_baths`, `entertainment`, `outside_amenities`, `safty_amenities`, `other_amenities`, `place_rules`, `other_space`, `name_listing`, `description`, `about_neighborhood`, `host_name`, `profile_img`, `country_code`, `lang_code`, `lang_code_other`, `primary_phone`, `other_phone_code`, `other_phone`, `introduction`, `suitable_child`, `suitable_infants`, `suitable_pets`, `allow_smoking`, `allow_parties`, `add_more`, `noise_potential`, `pet_live`, `have_weapon`, `media_device`, `other_animal`, `if_any`, `day_before_arrives`, `apt_booking_before`, `stay_min_night`, `stay_max_night`, `checkin_from`, `checkin_to`, `checkout_from`, `checkout_to`, `booking_start_time`, `booking_end_time`, `half_day_booking`, `currency`, `base_price`, `half_day_price`, `min_price`, `max_price`, `cleaning_fee`, `is_insurance`, `is_approve`, `is_complete`, `is_delete`, `updated_on`, `added_on`) VALUES
(150, 25, 'Events/Parties/Lawns', 'Lawn', 'Single room', 'Guest Entirely', 'Roadside parking', '1', '1', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'B438, Gali No 1, Bhola Nath Nagar, Block B, Shahdara, Delhi, 110032, India', 'India', 'Delhi', 'Delhi', 28.669729485466632, 77.28803237116392, '', '110032', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '24', '33', '46', '54', '57,59,58', '', '', 'Washingmachine,Dryer', 'wetttere', 'werrwerwerterve ', 'ertt r ertwet \r\nwt t\r\nw\r\ntwet\r\nwe\r\ntw\r\nt\r\ntwerterter', 'Devesh', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/524WvfTgc2nGU.jpeg', '+91', 'in', 'in', 8700308240, '', 0, 'werwer wer wer wr werwe\r\nrwe\r\n \r\ne rwe\r\n we\r\ntwtet\r\n', '1', '1', '1', '1', '1', '', '0', '1', '1', '1', '0', '', 'Same day', 'anytime', '1', '89', '01:30 AM', '02:00 AM', '12:00 AM', '01:30 AM', '05:30 AM', '05:30 AM', '0', 'Dollar', 34, 0, 32.3, 35.7, 5, '1', '0', '0', '0', '2020-09-25 06:16:45', '2020-09-24 12:38:13'),
(154, 18, 'Apartment', 'Apartment', 'Shared room', 'Host Belongings', 'Dedicated parking area', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.728230800000002, 77.4730021, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,17', '28,31', '38,40', '52,54', '59', 'dwvwe', '', 'Washingmachine,Dryer', 'Sheenu JofField', 'Testing ', 'Testing', 'Sheenu Saifi', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/310VZ5TTeaExX.jpg', '+91', 'in', 'us', 8006112812, '', 0, 'Saifi ', '1', '1', '1', '1', '1', 'Nothing more', '1', '1', '1', '1', '1', 'Nothing momre', '6', '5 months', '3', '3', '01:00 AM', '01:30 AM', '12:30 AM', '01:00 AM', '', '', '1', 'Dollar', 2312, 2323, 1965.2, 2658.8, 322, '1', '0', '1', '0', '2020-10-19 16:56:52', '2020-10-14 10:57:28'),
(156, 3, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Front door parking', '4', '1', '2', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '9959 East Peakview Avenue, Englewood, CO, USA', 'United States', 'Colorado', 'Greenwood Village', 39.5996310098258, -104.87401999524536, '', '80111', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '22', '28', '38', '48', '57', '', 'No pets', 'Washingmachine,Dryer', 'Beautiful Apartment.', 'Nice and Cozy', 'Nice and Cozy', 'Amol Karoo', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/543h6h5dlwATV.png', '+1', 'us', 'us', 3236129883, '', 0, 'Nice and Cozy', '1', '1', '1', '0', '1', 'Nice and Cozy', '1', '1', '1', '1', '1', 'Nice and Cozy', '1', '2 months', '1', '3', '03:00 PM', '03:30 PM', '12:30 PM', '01:00 PM', '', '', '1', 'Dollar', 100, 250, 95, 105, 50, '1', '0', '1', '0', '2020-11-05 06:38:38', '2020-10-14 19:52:05'),
(157, 25, 'Events/Parties/Lawns', 'Front yard/Back yard', 'Shared room', 'Host Belongings', 'Front door parking', '10', '1', '1', '1', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2.5', 'B437, Gali No 1, Bhola Nath Nagar, Block B, Shahdara, Delhi, 110032, India', 'India', 'Delhi', 'Delhi', 28.669989137727057, 77.28853012645874, '', '110032', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '26', '28', '38', '48', '57,59', 'Testing 2,htty,tyrty', '', 'Kitchen,Dryer,Parking,Gym,Hot', 'Testing Property again', 'werwr\r\newr\r\nerewr\r\ner\r\n\r\nerw', 'wer\r\n\r\nr\r\ner\r\nwer\r\nwer\r\nwer\r\nwer\r\n', 'Devesh', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/314Coqi7qITZm.jfif', '+91', 'in', 'in', 8700308240, '', 0, 'Teysiouiot\r\n\'et\r\nt\r\net\r\n\r\n\r\ntertertert\r\n\r\nertert', '1', '0', '1', '0', '1', '', '0', '1', '0', '1', '0', '', '1', 'anytime', '1', '18', '08:00 AM', '10:00 AM', '06:00 AM', '08:00 AM', '', '', '1', 'Rupees', 34343, 250, 29191.6, 39494.4, 100, '1', '0', '1', '0', '2020-10-16 11:53:03', '2020-10-15 10:27:03'),
(158, 30, 'Apartment', 'Apartment', 'Single room', 'Host Belongings', 'Garage', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'WZ-143A, Sadh Nagar II, Palam, New Delhi, Delhi 110045, India', 'India', 'Delhi', 'New Delhi', 28.591787115701393, 77.09608044798752, '', '110045', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '17', '34', '43', '50', '57,58', '', '', 'Dryer', 'Demo 1', 'Testing the version of registration', 'Testing the version of registration ', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-10-19 11:38:06', '2020-10-19 11:36:07'),
(159, 30, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '8', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Mansarovar Apartment, 3, Sector 5, Dwarka, Delhi, 110078, India', 'India', 'Delhi', 'Delhi', 28.5990462, 77.05191529999999, '', '110078', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '19,20,21,22', '28,31', '44,45', '47,49', '59', '', '', 'Washingmachine', 'Nitin Test', 'Testing description', 'Testing neighbourhood.', 'Nitin', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/426Mh8VWecdVX.jpg', '+91', 'in', 'in', 8802710765, '', 0, 'Lorem Ipsum', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-11-02 13:13:51', '2020-11-02 13:07:46'),
(160, 18, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Garage', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1.5', '16, Sansad Marg, Police Colony, Connaught Place, New Delhi, Delhi 110001, India', 'India', 'Delhi', 'New Delhi', 28.629401599999998, 77.217792, 'hhjj', '110001', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18', '27,28', '37,41,46', '48,50', '57', 'jhhj hhj', 'BBB hjh', 'Kitchen,Washingmachine,Dryer', 'kjjkkj', 'nkjjkj', 'jknjkjk', 'sfdfd', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/806xoOdSOj1dv.png', '+91', 'in', 'us', 6396031312, '', 0, 'jfjghf', '1', '1', '0', '1', '1', 'ffhdfh\r\nfghgfhfg ccghfg', '1', '1', '1', '1', '1', 'fgdfg fhfdhf cfhdffh', '4', '2 months', '4', '7', '02:30 AM', '03:30 AM', '02:00 AM', '02:30 AM', '', '', '1', 'Dollar', 898, 89, 763.3, 1032.7, 7667, '1', '0', '1', '0', '2020-11-03 14:01:35', '2020-11-03 12:09:16'),
(165, 18, 'Apartment', 'Apartment', 'Whole apartment', 'Guest Entirely', 'Dedicated parking area', '4', '1', '4', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.728162100000002, 77.472977, 'hbhhj', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '22,24', '33', '38,40', '48,50', '57', 'sdxsa', 'hjhjas', 'Kitchen,Washingmachine', 'jnkj', 'kjnjkjnj', 'hjjhjhk', 'hjhj', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/291vKbr6cUbYu.png', '+91', 'in', 'us', 6396031312, '', 0, 'kjjjjj', '1', '1', '1', '1', '1', 'jbj', '1', '1', '1', '1', '1', 'jkkhkjk', '4', '3 months', '3', '6', '05:00 AM', '06:00 AM', '02:00 AM', '03:00 AM', '', '', '1', 'Dollar', 223, 22, 200.7, 245.3, 232332, '1', '0', '1', '0', '2020-11-04 11:36:27', '2020-11-04 07:09:12'),
(168, 18, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '1', '4', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.728173599999995, 77.4729768, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18,20', '28,31', '42,44,46', '48,50', '57,59', 'xvdsv', 'fdvsdvsd', 'Kitchen,Dryer', 'dsffsdf', 'sddcfsdfcsd', 'sdvcsdvsd', 'xcv csxc', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/567hV95gh6zWu.jpg', '+91', 'in', 'us', 8006112812, '', 0, 'dfvsdvs', '1', '1', '1', '1', '1', 'dsffsfg sdsfds', '1', '1', '1', '0', '0', 'vfsdvsdv', '9', '2 months', '2', '14', '05:00 AM', '06:30 AM', '04:30 AM', '06:30 AM', '', '', '1', 'Dollar', 23332, 223, 19832.2, 26831.8, 3223, '1', '0', '1', '0', '2020-11-04 13:18:47', '2020-11-04 12:06:45'),
(169, 3, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '1', '1', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-11-05 06:40:16', '2020-11-05 06:40:04'),
(170, 3, 'Apartment', 'Condominium', 'Single room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '2', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '9959 E Peakview Ave Apt. J203', 'India', 'CO', 'Englewood', 0, 0, '', '80111', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '24', '28', '38', '52', '57', '', '', 'Washingmachine', 'r', 'f', 'f', 'r', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/531N9r2rZVLnU.png', '+1', 'us', 'us', 3236129883, '', 0, 'f', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '1', '1 month', '2', '3', '02:00 PM', '02:30 PM', '10:00 AM', '10:30 AM', '', '', '0', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-11-05 06:43:53', '2020-11-05 06:40:46'),
(171, 30, 'Hotel', 'Hotel', 'Shared room', 'Guest Entirely', 'Front door parking', '4', '2', '4', '0,0', '0,0', '0,0', '0,0', '2,1', '0,0', '0,0', '0,0', '0,0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Dwarka Sector 12 / Ashoka Apartment, Sector 4, Dwarka, Delhi, India', 'India', 'Delhi', 'Delhi', 28.5990464, 77.0472827, '', '110077', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '18,20,22', '31,33', '40,42', '50,52', '58', '', '', 'Kitchen,Parking,Gym', 'Nitin Home', 'Testing', 'Testing', 'Nitin Sharma', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/938UXwUnyqlvX.jpg', '+1', 'us', 'us', 3236129883, '', 0, 'test', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '3', '1 month', '5', '10', '09:00 AM', '10:00 AM', '12:00 PM', '01:00 PM', '', '', '1', 'Dollar', 450, 200, 382.5, 517.5, 50, '1', '0', '1', '0', '2020-11-05 06:55:53', '2020-11-05 06:45:14'),
(172, 18, 'Apartment', 'Condominium', 'Shared room', 'Guest Entirely', 'Garage', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.7281358, 77.47296229999999, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18', '33,35', '46', '48', '57', 'cxvs', 'sdvvfsdvds', 'Washingmachine,Dryer', 'sadfcasdf', 'sdvsdvs', 'sdvsdvsd', 'cdsdvsv', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/669t7aiaiHTai.png', '+91', 'in', 'us', 6396031312, '', 0, 'sdvsdvsdv', '1', '1', '1', '1', '1', 'dg', '1', '1', '1', '1', '1', 'zxvsdz', '7', '6 months', '2', '10', '05:30 AM', '06:00 AM', '06:00 AM', '06:30 AM', '', '', '1', 'Dollar', 2312, 213313, 1965.2, 2658.8, 23, '1', '0', '1', '0', '2020-11-05 20:47:07', '2020-11-05 20:43:02'),
(174, 32, 'House', 'Farmhouse', 'Whole apartment', 'Host Belongings', 'Garage', '4', '3', '2', '1,1,0', '1,2,0', '1,0,0', '0,0,1', '0,0,0', '0,0,0', '0,0,1', '0,0,1', '0,0,1', '2', '1', '0', '0', '0', '0', '0', '1', '5', 'Boston, MA, USA', 'United States', 'Massachusetts', 'Boston', 42.3600825, -71.0588801, '', '02210', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,19,20', '27,28,31,32', '37,38,40,41,42,43,44,45,46', '47,48,49,50,54', '57,59,58', 'Other amenites,,Other amenites3,Other amenites2', '', 'Kitchen,Washingmachine,Dryer,Hot', 'Amit house', 'Best you get, the best you want.', 'Good neighborhood. Silent neighborhood.', 'Sumit kumar', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/4580auE3OtORe.png', '+91', 'in', 'us', 7840033848, '', 0, 'I am working as a professional business man in Sydney. Own 4 houses and guest house.', '1', '1', '0', '0', '1', '', '1', '0', '0', '1', '1', '', 'Same day', 'anytime', '1', '6', '12:00 AM', '02:00 AM', '12:00 AM', '02:00 AM', '12:00 AM', '12:00 AM', '1', 'Dollar', 1000, 700, 850, 1150, 100, '1', '1', '1', '0', '2020-11-13 09:38:46', '2020-11-13 07:45:26'),
(175, 33, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '3', '2', '3', '0,1', '0,0', '0,0', '0,0', '1,0', '0,0', '1,1', '0,0', '0,0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-11-17 14:45:52', '2020-11-17 14:44:55'),
(176, 34, 'Hotel', 'Hotel', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '2', '1', '1,1', '1,1', '1,0', '1,0', '1,1', '1,0', '1,0', '1,0', '1,0', '0', '0', '0', '0', '0', '0', '0', '0', '1', 'Duhai, Ghaziabad, Uttar Pradesh, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.7304168, 77.4758542, '', '201206', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,17,18', '27,28,30,31', '37,38', '47,48', '57,59,58', '', 'Latest Testing property', 'Kitchen,Washingmachine,Dryer,Parking,Gym,Pool,Hot', 'Mama Claus Holiday Joy', 'Join Mama Claus for an Online visit to the North Pole! The goal is to have everyone leave with a heart warming experience; an experience that delights all age groups bringing to life online what has traditionally been done in person. The life as we know it has suddenly changed but Mama Claus will continue to make this Holiday Season fulfilling and joyous.', 'Join Mama Claus for an Online visit to the North Pole! The goal is to have everyone leave with a heart warming experience; an experience that delights all age groups bringing to life online what has traditionally been done in person. The life as we know it has suddenly changed but Mama Claus will continue to make this Holiday Season fulfilling and joyous.', 'Shubham Tyagi', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/939eo6aqLqTNe.png', '+91', 'in', 'in', 9716429352, '+91', 9643640486, 'I am a mother of five adult children and a new grandmother. I have been an avid story teller, especially during the winter Holidays. Our annual ritual included the classic books along with sleigh bells, etc. Although this experience does not require textbook knowledge it does require passion and an unending love for the magic of the holidays and the love of family, both of which I have.', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '', '2', 'anytime', '3', '4', '12:00 PM', '02:00 PM', '07:00 AM', '07:30 AM', '', '', '1', 'Rupees', 2000, 800, 1700, 2300, 200, '1', '1', '1', '0', '2021-04-13 13:40:24', '2020-11-17 15:43:16'),
(177, 18, 'Apartment', 'Apartment', 'Single room', 'Host Belongings', 'Front door parking', '4', '1', '2', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', '226, Block 74, Sector C, Gole Market, New Delhi, Delhi 110001, India', 'India', 'Delhi', 'New Delhi', 28.635955199999998, 77.2046848, '', '110001', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '16,18,20', '28,31', '38,40,42', '48,50', '57,59,58', 'vdscvsd', 'dscsdvc', 'Kitchen,Washingmachine,Dryer,Parking,Gym', 'Shah', 'Sheenu', 'Sheenu Saifi', 'sdf', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/450gooda1JB7E.png', '+91', 'in', 'in', 8006112812, '', 0, 'shahnazar', '1', '1', '1', '1', '1', 'fdgdfg', '1', '1', '1', '1', '1', 'dfgdfg', '8', '1 month', '1', '8', '01:00 AM', '02:00 AM', '05:30 AM', '07:00 AM', '', '', '1', 'Rupees', 2344, 344, 1992.4, 2695.6, 12, '1', '0', '1', '0', '2020-11-22 19:18:36', '2020-11-22 19:09:17'),
(182, 36, 'House', 'Townhouse', 'Whole apartment', 'Guest Entirely', 'Garage', '8', '3', '4', '0,0,1', '0,0,0', '1,0,1', '0,0,0', '1,1,0', '0,1,1', '1,0,0', '0,1,0', '0,1,0', '0', '0', '1', '0', '1', '0', '1', '0', '2.5', 'Boston, MA, USA', 'United States', 'Massachusetts', 'Boston', 42.3600825, -71.0588801, '', '02116', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16,18,19,21,22', '27,28,30,35', '37,38,39,40,41,42', '48,49,53,54', '57,59,58', '', '', 'Kitchen,Washingmachine,Dryer,Parking,Gym,Pool,Hot', 'Amit place', 'Good to live', 'Neighbourhood is safe.', 'Abhay', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/603UFHIMMHWgn.jpg', '+91', 'in', 'us', 7840033848, '', 0, 'Abhay narayan, professor, usa', '1', '0', '1', '0', '1', '', '0', '1', '0', '1', '0', '', '2', '2 months', '1', '8', '12:00 AM', '01:30 AM', '12:00 AM', '02:00 AM', '', '', '1', 'Dollar', 1000, 700, 850, 1150, 100, '1', '1', '1', '0', '2020-11-27 09:03:09', '2020-11-27 08:24:50'),
(183, 36, 'Events/Parties/Lawns', 'Lawn', 'Single room', 'Guest Entirely', 'Front door parking', '4', '1', '2', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '0', '0', '1', 'New York, NY, USA', 'United States', 'New York', 'New York', 40.7127753, -74.0059728, '', '10001', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '21,22', '27,28', '39,40', '47,48', '57,59', '', '', 'Kitchen,Washingmachine', 'White hill', 'Best in town', 'No neighbourhood', 'Nilima', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/356Z1WXQHsJWl.jpg', '+91', 'in', 'us', 7840033848, '', 0, 'qwerty', '1', '1', '1', '0', '0', '', '0', '0', '0', '0', '0', '', 'Same day', 'anytime', '1', '10', '12:00 AM', '01:30 AM', '12:00 AM', '01:30 AM', '12:00 AM', '12:00 AM', '1', 'Rupees', 1000, 700, 850, 1150, 20, '1', '1', '1', '0', '2020-12-03 09:40:17', '2020-11-27 08:50:31'),
(189, 18, 'Apartment', 'Apartment', 'Single room', 'Guest Entirely', 'Front door parking', '4', '1', '1', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'Maharaja Ranjeet Singh Marg, Gandhi Market Area, Barakhamba, New Delhi, Delhi 110006, India', 'India', 'Delhi', 'New Delhi', 28.635955199999998, 77.2308992, '', '110006', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20,22', '28,31', '38,40', '48,50', '57,59', 'ccc', 'scxscsaa', 'Kitchen,Washingmachine,Dryer', 'ca<szc', 'sca<cs', 'cxzxczxc', 'asdasd', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/945tmLdUOibpp.png', '+91', 'in', 'in', 6396031312, '', 0, 'xc sx ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '0', '0', '0', '2020-11-27 22:45:11', '2020-11-27 22:40:34'),
(190, 36, 'Unique Spaces', 'Castle', 'Whole apartment', 'Guest Entirely', 'Dedicated parking area', '4', '1', '2', '0', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '1', '1', '0', '1', 'Boston, MA, USA', 'United States', 'Massachusetts', 'Boston', 42.3600825, -71.0588801, '', '02101', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '15,16', '27,28', '37,38', '47,48', '57', '', '', 'Kitchen,Gym', 'hill house', 'qwer', 'qwe', 'Abhay', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/943ackxYgymeh.png', '+91', 'in', 'us', 7840033848, '', 0, 'qwer', '1', '1', '0', '0', '0', '', '0', '0', '0', '0', '0', '', '1', 'anytime', '1', '10', '12:00 AM', '01:30 AM', '12:00 AM', '01:30 AM', '', '', '1', 'Rupees', 1200, 800, 1020, 1380, 50, '1', '0', '0', '0', '2020-12-03 09:30:40', '2020-12-03 09:17:48'),
(191, 18, 'Apartment', 'Apartment', 'Shared room', 'Guest Entirely', 'Dedicated parking area', '4', '1', '1', '0', '0', '0', '0', '2', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0.5', 'NH34, Duhai, Ghaziabad, Uttar Pradesh 201003, India', 'India', 'Uttar Pradesh', 'Ghaziabad', 28.727633399999995, 77.4740795, '', '201003', '1,2,3,4,5,6,7,8,9,10,11,12,13,14', '20,22', '28,31', '38,42', '48,50', '57,59', 'sdfsd', 'safasdfa', 'Kitchen,Washingmachine', 'vdsvds', 'sdvsdvs', 'sdvsdv', 'Sheenu Saifi', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostImage/104JoIXrhTM30.png', '+91', 'in', 'in', 6396031312, '', 0, 'cvsdvs', '1', '1', '1', '1', '1', 'vsdvsdv', '1', '1', '1', '1', '1', 'vsdvs', '1', '3 months', '6', '11', '06:00 AM', '07:00 AM', '07:00 AM', '07:30 AM', '', '', '1', 'Rupees', 32, 33, 30.4, 33.6, 231, '1', '0', '0', '0', '2020-12-03 11:50:36', '2020-12-03 11:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_host_place_images`
--

CREATE TABLE `bgpkr_host_place_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL COMMENT 'property id',
  `image_type` varchar(10) NOT NULL COMMENT 'type of image',
  `image` varchar(130) NOT NULL COMMENT 'image url',
  `is_cover` enum('0','1') NOT NULL COMMENT '1 for cover image ',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Properties Images';

--
-- Dumping data for table `bgpkr_host_place_images`
--

INSERT INTO `bgpkr_host_place_images` (`id`, `host_id`, `image_type`, `image`, `is_cover`, `added_on`) VALUES
(1, 1, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/188-chziWjgz5X.jfif', '1', '2020-08-20 07:40:15'),
(2, 1, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/982-eERnyJf5pG.jfif', '1', '2020-08-20 07:40:15'),
(3, 1, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/319-JlFC0aI7jT.jpg', '1', '2020-08-20 07:40:15'),
(4, 1, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/889-UxJREXZzTc.jfif', '1', '2020-08-20 07:40:15'),
(5, 22, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/542-W3LoSEyyhW.jpg', '1', '2020-08-26 11:16:36'),
(6, 22, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/941-iPtIZLTZgz.jpg', '1', '2020-08-26 11:16:36'),
(7, 22, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/422-PaWTeUlHz0.jpg', '1', '2020-08-26 11:16:36'),
(8, 22, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/992-eRv5LX6jFT.jpg', '1', '2020-08-26 11:16:36'),
(35, 36, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/595-GEzgp9Eup7.jfif', '0', '2020-08-27 12:34:54'),
(36, 36, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/809-ecVadZgN0c.jfif', '0', '2020-08-27 12:34:54'),
(37, 36, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/867-SCgs3IFRNk.jfif', '1', '2020-08-27 12:34:54'),
(38, 36, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/591-ZyT7jN488W.jfif', '1', '2020-08-27 12:34:54'),
(39, 36, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/987-atFsUU4fYe.jpg', '1', '2020-08-27 12:34:54'),
(40, 36, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/945-Sj1ouEcawN.jfif', '1', '2020-08-27 12:34:54'),
(41, 37, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/127-dJyZtoZQTy.png', '1', '2020-08-27 12:41:35'),
(42, 37, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/800-g823Koac8G.jpeg', '0', '2020-08-27 12:41:35'),
(43, 37, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/106-wPzybzH19p.jpg', '1', '2020-08-27 12:41:35'),
(44, 37, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/378-CNmlyd3yzu.jpg', '1', '2020-08-27 12:41:35'),
(45, 37, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/552-cTZGlcBurA.jpg', '1', '2020-08-27 12:41:35'),
(49, 39, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/363-Zn4f6oPGaH.jpeg', '1', '2020-09-01 12:29:26'),
(52, 39, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/494-CBWE3iBvos.jpeg', '0', '2020-09-01 12:32:27'),
(53, 39, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/747-j1iJdchnAU.jpeg', '1', '2020-09-01 12:32:27'),
(54, 39, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/914-2NBiZJofmz.jpeg', '0', '2020-09-01 12:32:27'),
(55, 39, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/418-21LhVRJX0W.jpeg', '1', '2020-09-01 12:32:27'),
(56, 43, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/714-utBvGTMzoF.png', '1', '2020-09-02 07:13:37'),
(57, 43, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/916-wr5KQXhZXx.png', '1', '2020-09-02 07:13:37'),
(58, 43, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/349-he6yLdYnYD.png', '1', '2020-09-02 07:13:37'),
(59, 43, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/698-egYegU6NSM.png', '1', '2020-09-02 07:13:37'),
(66, 34, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/173-aMQXl23IYz.webp', '1', '2020-09-05 01:51:08'),
(67, 34, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/626-l4jFLhahJR.webp', '1', '2020-09-05 01:51:08'),
(68, 34, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/211-KHPQhVETrO.webp', '0', '2020-09-05 01:51:08'),
(69, 34, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/185-NVTUWYzGie.webp', '1', '2020-09-05 01:51:08'),
(70, 34, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/784-gTmmUixng4.webp', '1', '2020-09-05 01:51:08'),
(71, 50, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/865-hD3UVg4yt0.jfif', '0', '2020-09-05 12:50:49'),
(72, 50, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/579-uLsdaUaJaU.jfif', '1', '2020-09-05 12:50:49'),
(73, 50, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/243-dyGxB4bhuh.jfif', '1', '2020-09-05 12:50:49'),
(74, 50, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/825-oQnIutV7Sy.jpg', '1', '2020-09-05 12:50:49'),
(75, 50, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/190-Ulv1LEmg1U.jfif', '1', '2020-09-05 12:50:49'),
(82, 52, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/227-iygKcoMh2U.jpeg', '1', '2020-09-08 09:11:36'),
(83, 52, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/774-hJyfi4WcHT.jpeg', '1', '2020-09-08 09:11:36'),
(84, 52, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/610-9OINotXuBu.jpeg', '1', '2020-09-08 09:11:37'),
(85, 52, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/465-V0KXgofaRW.jpeg', '1', '2020-09-08 09:11:37'),
(92, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/465-eYWU514ftA.jpeg', '0', '2020-09-09 17:23:59'),
(93, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/376-OX4HP0t2XU.jpeg', '0', '2020-09-09 17:23:59'),
(94, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/725-HgppEgGePs.jpeg', '0', '2020-09-09 17:23:59'),
(95, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/270-AsIpWDHVu4.jpeg', '0', '2020-09-09 17:23:59'),
(96, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/914-wBObaqGij5.jpeg', '0', '2020-09-09 17:23:59'),
(97, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/388-HIc74ZJUIX.jpeg', '0', '2020-09-09 17:23:59'),
(98, 39, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/963-iryP9UpWdr.jpeg', '1', '2020-09-09 17:23:59'),
(126, 58, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/164-wTaqVrVzLn.jpeg', '1', '2020-09-10 09:50:47'),
(127, 58, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/295-xddGQnaYDb.jpeg', '0', '2020-09-10 09:50:47'),
(128, 58, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/937-nLURrd7aEs.jpg', '0', '2020-09-10 09:50:47'),
(129, 58, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/486-MkzynHMAZ9.jpeg', '1', '2020-09-10 09:50:47'),
(130, 58, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/357-Pc3aece62S.jpeg', '0', '2020-09-10 09:50:47'),
(131, 58, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/792-zloaYTTlPH.jpeg', '1', '2020-09-10 09:50:47'),
(132, 58, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/934-3sANjwpN5I.jpeg', '1', '2020-09-10 09:50:47'),
(171, 93, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/439-yhKnwwodRe.jpeg', '1', '2020-09-17 13:03:31'),
(172, 93, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/988-WrgkuynbNS.jpeg', '1', '2020-09-17 13:03:31'),
(173, 93, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/639-oHvivXdhpv.jpeg', '1', '2020-09-17 13:03:31'),
(174, 93, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/777-zeWyhT3KwB.jpeg', '1', '2020-09-17 13:03:31'),
(175, 94, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/614-yptQsnDfoK.jpeg', '1', '2020-09-17 13:12:19'),
(176, 94, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/678-pBdxXjazjx.jpeg', '1', '2020-09-17 13:12:19'),
(177, 94, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/224-8TtFGvtmp9.jpeg', '1', '2020-09-17 13:12:20'),
(178, 94, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/321-U2yo2MDWLK.jpeg', '1', '2020-09-17 13:12:20'),
(179, 95, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/625-byu6H802rM.jpeg', '1', '2020-09-17 13:20:39'),
(180, 95, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/731-Yalnpru1Wp.jpeg', '0', '2020-09-17 13:20:39'),
(181, 95, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/260-RYgJ7d8BhV.jpeg', '1', '2020-09-17 13:20:39'),
(182, 95, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/114-len6gNeKsW.jpg', '1', '2020-09-17 13:20:39'),
(183, 95, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/180-Wiet7ELdWy.jpeg', '1', '2020-09-17 13:20:39'),
(184, 97, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/790-kA1F7RHmTa.jpeg', '1', '2020-09-17 13:52:03'),
(185, 97, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/445-eqgszgFHsj.jpeg', '1', '2020-09-17 13:52:03'),
(186, 97, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/520-hHlnahhY8T.jpeg', '1', '2020-09-17 13:52:03'),
(187, 97, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/681-heaNLQpTUC.jpeg', '1', '2020-09-17 13:52:03'),
(188, 98, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/251-1zFpUSW2RP.jpeg', '1', '2020-09-17 14:13:30'),
(189, 98, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/507-IOSHeLutzT.jpeg', '1', '2020-09-17 14:13:30'),
(190, 98, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/126-yqhg5dedTX.jpeg', '1', '2020-09-17 14:13:30'),
(191, 98, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/595-hqaWaI4WV7.jpeg', '1', '2020-09-17 14:13:30'),
(192, 99, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/847-iT8VuTTtaF.jpeg', '1', '2020-09-17 15:03:28'),
(193, 99, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/267-9igYXiPxF9.jpeg', '1', '2020-09-17 15:03:28'),
(194, 99, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/739-C6gggaAntm.jpeg', '1', '2020-09-17 15:03:28'),
(195, 99, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/398-9HFbDcMUop.jpeg', '1', '2020-09-17 15:03:28'),
(196, 103, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/970-hzceUucsFT.jpeg', '1', '2020-09-17 19:28:10'),
(197, 103, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/827-K2BuBHgmax.jpeg', '1', '2020-09-17 19:28:10'),
(198, 103, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/919-ujsuhspUIp.jpeg', '1', '2020-09-17 19:28:10'),
(199, 103, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/638-TZGOPvwjTU.jpeg', '1', '2020-09-17 19:28:10'),
(200, 104, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/259-BPdN5ThUop.jpeg', '1', '2020-09-17 19:34:49'),
(201, 104, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/124-VWU60S5HVL.jpeg', '1', '2020-09-17 19:34:49'),
(202, 104, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/466-8M6tD0g8nt.jpeg', '1', '2020-09-17 19:34:49'),
(203, 104, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/134-WowQrM3VSa.jpeg', '1', '2020-09-17 19:34:49'),
(204, 105, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/726-o7owTBXso7.jpeg', '1', '2020-09-17 19:47:34'),
(205, 105, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/507-hogWzGeMth.jpeg', '1', '2020-09-17 19:47:34'),
(206, 105, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/151-oNojixTZi1.jpeg', '1', '2020-09-17 19:47:34'),
(207, 105, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/469-CMyu2ovgLT.jpeg', '1', '2020-09-17 19:47:34'),
(208, 106, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/757-zMan3NxhCd.jpeg', '1', '2020-09-17 19:55:08'),
(209, 106, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/154-h0cYectm1h.jpeg', '0', '2020-09-17 19:55:08'),
(210, 106, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/690-zTAfa0dtAy.jpeg', '1', '2020-09-17 19:55:08'),
(211, 106, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/370-iTlf8AMchn.jpeg', '1', '2020-09-17 19:55:08'),
(212, 106, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/316-35MeNouzMy.jpeg', '1', '2020-09-17 19:55:08'),
(217, 108, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/487-06AhO2vxI8.jpeg', '1', '2020-09-17 20:49:42'),
(218, 108, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/553-BUUftAJquY.jpeg', '1', '2020-09-17 20:49:42'),
(219, 108, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/979-D2rmMNzC5Q.jpeg', '1', '2020-09-17 20:49:42'),
(220, 108, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/168-2IUan6uoXX.jpeg', '1', '2020-09-17 20:49:42'),
(221, 109, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/385-RjuePvU0Dw.jpg', '1', '2020-09-20 20:24:25'),
(222, 109, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/192-BmRzcFaWfo.jpg', '0', '2020-09-20 20:24:25'),
(223, 109, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/567-UoUsAH5aBu.jpg', '1', '2020-09-20 20:24:25'),
(224, 109, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/279-f3n9ZRpthG.jpg', '0', '2020-09-20 20:24:25'),
(225, 109, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/553-tEoZi1Famw.jpg', '1', '2020-09-20 20:24:25'),
(226, 109, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/601-g1zV8jPTwp.jpg', '0', '2020-09-20 20:24:25'),
(227, 109, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/884-UtgZWdhoSF.jpg', '0', '2020-09-20 20:24:25'),
(228, 109, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/818-r4Bjwv3los.jpg', '0', '2020-09-20 20:24:25'),
(229, 109, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/228-hs0aGRoFcj.jpg', '1', '2020-09-20 20:24:25'),
(230, 111, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/161-yTAdQLChnG.jpeg', '1', '2020-09-21 11:50:23'),
(231, 111, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/131-VKgxVIqKva.jpeg', '1', '2020-09-21 11:50:23'),
(232, 111, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/116-PzrWk92pkJ.jpeg', '1', '2020-09-21 11:50:23'),
(233, 111, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/613-u4g3HDck1c.jpeg', '1', '2020-09-21 11:50:23'),
(234, 112, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/375-fMqmOHoF4T.jpeg', '1', '2020-09-21 12:04:44'),
(235, 112, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/308-o23UOPUgtB.jpeg', '1', '2020-09-21 12:04:44'),
(236, 112, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/781-RncuTzabDC.jpeg', '1', '2020-09-21 12:04:44'),
(237, 112, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/119-ncqoekXdvQ.jpeg', '1', '2020-09-21 12:04:44'),
(238, 137, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/234-bnrXoiHWll.jpeg', '0', '2020-09-22 21:10:23'),
(239, 137, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/959-VdzyipmguA.jpeg', '1', '2020-09-22 21:10:23'),
(240, 137, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/723-J2gpnioa7a.jpeg', '1', '2020-09-22 21:10:23'),
(241, 137, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/656-iZo6nJUoQT.jpeg', '1', '2020-09-22 21:10:23'),
(242, 137, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/286-ubUSW9U6w5.jpeg', '1', '2020-09-22 21:10:23'),
(243, 138, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/767-8VP23cG8Ky.jpeg', '1', '2020-09-22 21:20:51'),
(244, 138, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/241-piLu2sgacG.jpeg', '0', '2020-09-22 21:20:51'),
(245, 138, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/420-lcEQbReeq2.jpeg', '1', '2020-09-22 21:20:51'),
(246, 138, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/940-kWaHkoTjJX.jpg', '1', '2020-09-22 21:20:51'),
(247, 138, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/891-0aq2KnV2pH.jpeg', '1', '2020-09-22 21:20:51'),
(248, 139, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/661-fu0zxuKWiO.jpeg', '1', '2020-09-22 21:36:41'),
(249, 139, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/924-YaxeymnjTd.jpeg', '1', '2020-09-22 21:36:41'),
(250, 139, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/466-usFXti82na.jpeg', '1', '2020-09-22 21:36:41'),
(251, 139, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/321-frLhwakt3h.jpeg', '1', '2020-09-22 21:36:41'),
(252, 145, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/316-Wi4T0CPBg7.jpeg', '1', '2020-09-23 05:48:13'),
(253, 145, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/306-SWTFZVPa0d.jpeg', '1', '2020-09-23 05:48:13'),
(254, 145, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/199-gfezohocDE.jpeg', '1', '2020-09-23 05:48:13'),
(255, 145, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/577-qcLUiejKfF.jpeg', '1', '2020-09-23 05:48:13'),
(260, 156, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/861-HKoTtYajLr.jpg', '1', '2020-10-14 19:59:21'),
(261, 156, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/453-vo5JFNdAoq.jpg', '1', '2020-10-14 19:59:21'),
(262, 156, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/862-BzjiiLkLVT.jpg', '1', '2020-10-14 19:59:21'),
(263, 156, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/261-H2Qf2WCHgW.jpg', '1', '2020-10-14 19:59:21'),
(264, 157, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/988-vwBBn80uTt.jfif', '1', '2020-10-15 10:45:02'),
(265, 157, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/381-qMdwUEkkZv.jfif', '1', '2020-10-15 10:45:02'),
(266, 157, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/517-aTgiSdwadw.jfif', '1', '2020-10-15 10:45:02'),
(267, 157, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/659-W8RzSeZRse.jfif', '1', '2020-10-15 10:45:02'),
(268, 154, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/943-RkngTden7G.jpg', '1', '2020-10-19 16:43:31'),
(269, 154, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/971-txUEWyUuPs.jpg', '1', '2020-10-19 16:43:31'),
(270, 154, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/848-4U5SC18Voo.jpeg', '1', '2020-10-19 16:43:31'),
(271, 154, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/568-OdT3dKyrgo.jpeg', '1', '2020-10-19 16:43:31'),
(272, 159, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/892-DyG1RDETQr.png', '1', '2020-11-02 13:11:13'),
(273, 159, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/907-b11ooXZKhp.png', '1', '2020-11-02 13:11:13'),
(274, 159, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/117-ahK4eTCIDx.png', '1', '2020-11-02 13:11:13'),
(275, 160, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/621-n6sueJwMo8.jpg', '1', '2020-11-03 12:29:46'),
(276, 160, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/277-8ZBHe9Y7Th.jpeg', '1', '2020-11-03 12:29:46'),
(277, 160, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/607-Ph26pZTEBu.jpg', '1', '2020-11-03 12:29:46'),
(278, 160, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/319-iXtrg6kKku.jpg', '1', '2020-11-03 12:29:46'),
(285, 165, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/226-WxmOozcQdW.jpg', '0', '2020-11-04 11:14:43'),
(286, 165, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/651-jasNaAGDjd.png', '1', '2020-11-04 11:14:43'),
(299, 165, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/385-bsQgzVa0hu.jpg', '1', '2020-11-04 11:38:51'),
(300, 165, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/986-8nWJRQXhtF.jpeg', '0', '2020-11-04 11:38:51'),
(301, 165, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/221-WTSWvehBJl.jpeg', '0', '2020-11-04 11:38:51'),
(302, 165, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/609-tKTsTgAtn9.png', '0', '2020-11-04 11:38:51'),
(303, 165, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/297-bcBWrNY82h.jpeg', '1', '2020-11-04 11:38:51'),
(304, 165, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/450-ufdeKDWgWH.png', '0', '2020-11-04 11:38:51'),
(308, 168, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/998-uijDPjtg5O.png', '1', '2020-11-04 12:08:12'),
(309, 168, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/610-beNhYRLDWw.jpg', '0', '2020-11-04 12:08:12'),
(310, 168, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/763-ZeumvLLtao.png', '1', '2020-11-04 12:08:12'),
(311, 168, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/342-vxTaijhioa.png', '1', '2020-11-04 12:09:02'),
(312, 168, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/213-jp9YMlfSyH.jpg', '0', '2020-11-04 12:09:02'),
(313, 168, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/606-Nat3aPeWs6.jpg', '0', '2020-11-04 12:14:28'),
(314, 168, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/633-yrWYIP9nwT.jpg', '1', '2020-11-04 12:14:28'),
(315, 171, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/589-ThuWUKd7oE.PNG', '1', '2020-11-05 06:50:33'),
(316, 171, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/540-MuCYf3W6pC.png', '0', '2020-11-05 06:50:33'),
(317, 171, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/231-DTa7FgWDMy.png', '1', '2020-11-05 06:50:33'),
(318, 171, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/523-9ztIafge6L.png', '0', '2020-11-05 06:50:33'),
(319, 171, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/906-cdAv8Ouxsu.png', '1', '2020-11-05 06:50:33'),
(320, 172, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/832-Vn07moMnt3.jpg', '1', '2020-11-05 20:44:06'),
(321, 172, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/871-dDdVHJKcte.png', '1', '2020-11-05 20:44:06'),
(322, 172, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/109-VFKHuYlXji.jpg', '1', '2020-11-05 20:44:06'),
(323, 174, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/509-BaePdquovP.jpg', '1', '2020-11-13 08:07:45'),
(324, 174, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/584-lL8Bc9Kuot.jpg', '0', '2020-11-13 08:07:45'),
(325, 174, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/428-OKrwRZTEgE.jpg', '0', '2020-11-13 08:07:45'),
(326, 174, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/175-XAhorU49aU.jpg', '1', '2020-11-13 08:07:45'),
(327, 174, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/615-848auhF46h.jpg', '0', '2020-11-13 08:07:45'),
(328, 174, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/921-JTa6ydktwd.jpg', '1', '2020-11-13 08:07:45'),
(329, 174, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/256-eeO9JeQyNe.jpeg', '0', '2020-11-13 08:07:45'),
(330, 174, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/688-t69D7knUCd.jpeg', '1', '2020-11-13 08:07:45'),
(331, 174, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/533-VVfekX9ij5.jpg', '0', '2020-11-13 08:07:45'),
(332, 176, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/782-TlaFA5oOdh.jpg', '1', '2020-11-17 15:49:09'),
(333, 176, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/531-9FsCaMoUqT.png', '0', '2020-11-17 15:49:09'),
(334, 176, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/715-57shwaoPSy.jpg', '1', '2020-11-17 15:49:09'),
(335, 176, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/171-dak8cStqrP.jpg', '1', '2020-11-17 15:49:09'),
(336, 176, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/736-jmyQsct3Zx.png', '1', '2020-11-17 15:49:09'),
(337, 177, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/720-7WTUuToQah.jpg', '1', '2020-11-22 19:10:22'),
(338, 177, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/570-QfiI8w22MH.png', '1', '2020-11-22 19:10:22'),
(339, 177, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/372-f1McGLrxZp.png', '1', '2020-11-22 19:10:22'),
(340, 177, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/500-lpp2aiu24j.jpeg', '1', '2020-11-22 19:10:22'),
(341, 182, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/170-QGeAaun0tO.jpg', '1', '2020-11-27 08:31:56'),
(342, 182, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/367-3mTodoT4Di.jpg', '1', '2020-11-27 08:31:56'),
(343, 182, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/228-nkecMYbyna.jpeg', '1', '2020-11-27 08:31:56'),
(344, 182, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/398-WFxSFi7WTQ.jpeg', '1', '2020-11-27 08:31:56'),
(345, 183, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/938-ZrFtn5vard.jpg', '1', '2020-11-27 08:53:50'),
(346, 183, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/766-ac4aevG5bK.jpg', '1', '2020-11-27 08:53:50'),
(347, 183, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/956-ytf6HkGitc.jpg', '1', '2020-11-27 08:53:50'),
(348, 183, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/791-WojT4hcOgH.jpeg', '1', '2020-11-27 08:53:50'),
(349, 191, 'bedroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bedroomImages/925-qtkanOavhE.png', '1', '2020-12-03 20:50:26'),
(350, 191, 'bathroom', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/bathsroomImages/390-8yLTc32p3g.jpg', '1', '2020-12-03 20:50:26'),
(351, 191, 'kitchen', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/kitchenImages/804-BggAWIdVoB.jpg', '1', '2020-12-03 20:50:26'),
(352, 191, 'other', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/otherImages/289-KHoeLtw7c5.png', '1', '2020-12-03 20:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_host_unavailable_date`
--

CREATE TABLE `bgpkr_host_unavailable_date` (
  `id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL COMMENT 'property id',
  `unavailable_date` date NOT NULL COMMENT 'unavailable date',
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Properties unavailable Dates';

--
-- Dumping data for table `bgpkr_host_unavailable_date`
--

INSERT INTO `bgpkr_host_unavailable_date` (`id`, `host_id`, `unavailable_date`, `added_on`) VALUES
(27, 5, '2020-08-06', '2020-08-20 12:09:17'),
(28, 5, '2020-08-14', '2020-08-20 12:09:17'),
(29, 5, '2020-08-20', '2020-08-20 12:09:17'),
(30, 11, '2020-08-11', '2020-08-20 12:52:51'),
(31, 11, '2020-08-19', '2020-08-20 12:52:51'),
(32, 11, '2020-08-20', '2020-08-20 12:52:51'),
(42, 1, '2020-08-11', '2020-08-21 16:52:28'),
(43, 1, '2020-08-13', '2020-08-21 16:52:28'),
(44, 1, '2020-08-14', '2020-08-21 16:52:28'),
(110, 36, '1970-01-01', '2020-08-27 12:49:40'),
(159, 43, '2020-09-14', '2020-09-02 07:20:18'),
(160, 43, '2020-09-15', '2020-09-02 07:20:18'),
(211, 50, '2020-09-15', '2020-09-05 12:59:00'),
(212, 50, '2020-09-16', '2020-09-05 12:59:00'),
(213, 50, '2020-09-10', '2020-09-05 12:59:00'),
(214, 50, '2020-09-17', '2020-09-05 12:59:00'),
(251, 34, '2020-07-28', '2020-09-08 09:19:50'),
(252, 34, '2020-07-30', '2020-09-08 09:19:50'),
(253, 34, '2020-07-31', '2020-09-08 09:19:50'),
(254, 34, '2020-07-29', '2020-09-08 09:19:50'),
(255, 34, '2020-08-13', '2020-09-08 09:19:50'),
(256, 34, '2020-08-07', '2020-09-08 09:19:50'),
(257, 34, '2020-08-15', '2020-09-08 09:19:50'),
(296, 37, '2022-06-01', '2020-09-09 13:49:09'),
(307, 39, '2020-09-09', '2020-09-09 17:10:15'),
(308, 39, '2020-09-10', '2020-09-09 17:10:15'),
(309, 39, '2020-10-09', '2020-09-09 17:10:15'),
(310, 39, '2020-10-15', '2020-09-09 17:10:15'),
(311, 39, '2020-10-23', '2020-09-09 17:10:15'),
(312, 52, '1970-01-01', '2020-09-10 06:48:19'),
(313, 22, '2020-09-17', '2020-09-10 08:22:53'),
(314, 22, '2020-09-22', '2020-09-10 08:22:53'),
(502, 93, '2020-09-17', '2020-09-17 13:08:18'),
(503, 93, '2020-09-18', '2020-09-17 13:08:18'),
(504, 94, '2020-09-17', '2020-09-17 13:14:38'),
(505, 94, '2020-09-24', '2020-09-17 13:14:38'),
(506, 94, '2020-09-25', '2020-09-17 13:14:38'),
(507, 95, '2020-09-18', '2020-09-17 13:23:28'),
(508, 95, '2020-09-25', '2020-09-17 13:23:28'),
(509, 95, '2020-09-24', '2020-09-17 13:23:28'),
(510, 97, '2020-09-18', '2020-09-17 13:56:48'),
(511, 97, '2020-09-19', '2020-09-17 13:56:48'),
(512, 97, '2020-09-26', '2020-09-17 13:56:48'),
(513, 98, '2020-09-18', '2020-09-17 14:18:47'),
(514, 98, '2020-09-25', '2020-09-17 14:18:47'),
(515, 99, '2020-09-23', '2020-09-17 15:07:06'),
(516, 99, '2020-09-24', '2020-09-17 15:07:06'),
(517, 99, '2020-09-25', '2020-09-17 15:07:06'),
(518, 103, '2020-09-24', '2020-09-17 19:31:29'),
(519, 103, '2020-09-23', '2020-09-17 19:31:29'),
(520, 104, '2020-09-23', '2020-09-17 19:37:11'),
(521, 104, '2020-09-24', '2020-09-17 19:37:11'),
(522, 104, '2020-09-25', '2020-09-17 19:37:11'),
(523, 104, '2020-09-26', '2020-09-17 19:37:11'),
(524, 105, '2020-09-25', '2020-09-17 19:49:57'),
(525, 105, '2020-09-24', '2020-09-17 19:49:57'),
(526, 105, '2020-09-23', '2020-09-17 19:49:57'),
(531, 106, '2020-09-18', '2020-09-18 06:41:10'),
(532, 106, '2020-09-24', '2020-09-18 06:41:10'),
(543, 111, '2020-09-21', '2020-09-21 11:59:31'),
(544, 111, '2020-09-22', '2020-09-21 11:59:31'),
(545, 111, '2020-09-23', '2020-09-21 11:59:31'),
(546, 111, '2020-09-24', '2020-09-21 11:59:31'),
(555, 112, '2020-09-22', '2020-09-21 15:54:50'),
(556, 112, '2020-09-23', '2020-09-21 15:54:50'),
(557, 112, '2020-09-30', '2020-09-21 15:54:50'),
(616, 137, '2020-09-24', '2020-09-22 21:14:40'),
(617, 137, '2020-09-25', '2020-09-22 21:14:40'),
(618, 138, '2020-09-26', '2020-09-22 21:23:45'),
(627, 108, '2020-09-24', '2020-09-23 05:33:13'),
(628, 108, '2020-09-25', '2020-09-23 05:33:13'),
(654, 150, '2020-09-25', '2020-09-25 06:15:34'),
(664, 145, '1970-01-01', '2020-09-26 19:40:43'),
(665, 139, '1970-01-01', '2020-09-28 04:50:25'),
(716, 157, '2020-10-29', '2020-10-15 10:46:18'),
(717, 157, '2020-10-31', '2020-10-15 10:46:18'),
(718, 157, '2020-10-30', '2020-10-15 10:46:18'),
(719, 157, '2020-10-28', '2020-10-15 10:46:18'),
(720, 157, '2020-10-22', '2020-10-15 10:46:18'),
(721, 157, '2020-10-23', '2020-10-15 10:46:18'),
(727, 154, '2020-10-19', '2020-10-19 16:57:05'),
(738, 160, '2020-11-26', '2020-11-04 11:16:52'),
(739, 160, '2020-11-27', '2020-11-04 11:16:52'),
(752, 165, '2020-11-04', '2020-11-04 13:11:44'),
(753, 165, '2020-11-13', '2020-11-04 13:11:44'),
(771, 156, '2020-11-09', '2020-11-05 06:39:23'),
(772, 156, '2020-11-10', '2020-11-05 06:39:23'),
(774, 170, '1970-01-01', '2020-11-05 06:43:55'),
(776, 171, '1970-01-01', '2020-11-05 06:56:10'),
(797, 174, '2020-11-13', '2020-11-13 11:13:22'),
(798, 174, '2020-11-18', '2020-11-13 11:13:23'),
(799, 174, '2020-11-30', '2020-11-13 11:13:23'),
(806, 176, '2020-11-17', '2020-11-17 15:58:53'),
(807, 176, '2020-11-26', '2020-11-17 15:58:53'),
(810, 168, '1970-01-01', '2020-11-17 21:55:28'),
(821, 177, '2020-11-25', '2020-11-22 20:16:31'),
(822, 177, '2020-11-26', '2020-11-22 20:16:31'),
(823, 172, '2020-11-27', '2020-11-24 04:06:48'),
(824, 172, '2020-11-28', '2020-11-24 04:06:48'),
(845, 58, '1970-01-01', '2020-11-27 10:54:44'),
(846, 182, '2020-12-10', '2020-12-03 09:11:23'),
(847, 182, '2020-12-30', '2020-12-03 09:11:23'),
(848, 182, '2020-12-16', '2020-12-03 09:11:23'),
(849, 190, '2020-12-23', '2020-12-03 09:29:08'),
(850, 190, '2020-12-21', '2020-12-03 09:29:08'),
(851, 190, '2020-12-12', '2020-12-03 09:29:08'),
(852, 183, '2020-12-03', '2020-12-03 09:38:24'),
(853, 183, '2020-12-22', '2020-12-03 09:38:24'),
(854, 183, '2020-12-25', '2020-12-03 09:38:24'),
(855, 191, '2020-12-11', '2020-12-03 11:50:22'),
(856, 191, '2020-12-18', '2020-12-03 11:50:22'),
(857, 191, '2020-12-24', '2020-12-03 11:50:22'),
(865, 109, '1970-01-01', '2021-03-15 07:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_most_popular`
--

CREATE TABLE `bgpkr_most_popular` (
  `mp_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `added_on` date NOT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_most_popular`
--

INSERT INTO `bgpkr_most_popular` (`mp_id`, `image`, `address`, `country`, `city`, `latitude`, `longitude`, `title`, `body`, `added_on`, `updated_on`) VALUES
(1, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/628-UdJHKOC5C2.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', 'Delhi', 'Delhi officially known as the National Capital Territory of Delhi, is a city and a union territory of India containing New Delhi, the capital of India. \nTourist around the world comes to see the spellbinding mosques, forts, and monuments left over from the Mughal rulers that once occupied the city which includes - The Red Fort, Qutub Minar, India Gate, Humayun\'s Tomb, Jama Masjid.', '2020-07-07', NULL),
(18, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/180-OQWs8offdo.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', 'Kochi', 'Kochi also known as Cochin, is among the most visited tourist destinations in India. \nKochi was ranked seventh among the top 10 cities in the world to visit in 2020. Some of the most visited places in Kochi includes - Backwaters of Kochi, Marine Drive, Fort Kochi, Hill Palace, Willingdon Island, St. Francis Church.', '2020-07-07', NULL),
(20, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/689-6BOf9c5sxA.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', 'Mumbai', 'Mumbai also known as Bombay, is the capital city of the Indian state of Maharashtra. It is also known as Bollywood city in India. Famous for Bollywood, people around the world comes to visit Mumbai just to get the glimpse of Celebrity houses, most of which is located near Bandra.\nSome great mesmerizing sites to visit in Mumbai are Marine Drive, Gateway of India, Colaba Causeway Market, Juhu Beach, Haji Ali, Worli Seaface and many more.', '2020-07-07', NULL),
(26, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/518-toItT5wVaP.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', 'Mumbai', 'Mumbai also known as Bombay, is the capital city of the Indian state of Maharashtra. It is also known as Bollywood city in India. Famous for Bollywood, people around the world comes to visit Mumbai just to get the glimpse of Celebrity houses, most of which is located near Bandra.\nSome great mesmerizing sites to visit in Mumbai are Marine Drive, Gateway of India, Colaba Causeway Market, Juhu Beach, Haji Ali, Worli Seaface and many more.', '2020-07-07', NULL),
(31, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/866-TnyWohwo9S.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', 'Los Angeles', 'Los Angeles abbreviate as L.A. (Also known as the ‘City of Angels’) is the largest city in California. Los Angeles is known for its Mediterranean climate, ethnic diversity, Hollywood entertainment industry.\n The city of angels has been attracting various tourists from all around the world for years. Apart from luxurious Hollywood life, Los Angeles is famous for various beaches like Malibu, Venice, Santa Monica, Zuma County Park and Westward Beach and Manhattan Beach.', '2020-07-07', NULL),
(44, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/368-xkPXLcoXAP.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', 'San Francisco', 'San Francisco, officially the City and County of San Francisco, is a cultural, commercial, and financial center of Northern California.\nSan Francisco is a popular destination for many tourists, known for its cool summers, foggy weather, awesome hills, and landmarks. Golden Gate Bridge, \"the California icon\" is found Near San Francisco bay. It is the most photographed site in the city.\nSome of the great tourist attraction in SF includes Golden Gate bridge, Alcatraz Island, Pier 39, Golden gate part.', '2020-07-07', NULL),
(60, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/213-wiagbRmLgj.png', 'Manali', 'India', 'Manali', '32.2431872', '77.1891761', 'Manali', 'Manali has been named as the favorite destination to visit in India. It is one of the most popular hill stations in India. With jaw-dropping views, lush green forests, Manali has been blessed with extraordinary scenic beauty. Solang Valley is one of the topmost visited places in Manali. The drive to Solang is pleasure to eyes and a site to capture pictures and the scenic beauty along the ride. Top tourist attracting places in Manali adds - Solang Valley, Rohtang Pass, Hidimba temple, Hampta Pass Trek. Kullu, Naggar.', '2021-02-28', '2021-03-19'),
(61, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/170-dwZA3Fh3za.png', 'Joshua Tree', 'USA', 'Joshua Tree', '34.13392960000001', '-116.3155887', 'Joshua Tree', 'Joshua Tree National Park is located in southeastern California to the east of Los Angeles and San Bernardino, near Palm Springs. The hills in Joshua are most famous for rock climbing and scrambling enthusiasts. It\'s the best place to visit\r\nduring spring and fall. Some famous tourist attraction at Joshua tree includes (Hidden Valley Nature Trail & Day Use Area, Keys View, Barker Dam Nature Trail,\r\nSkull Rock, etc.)', '2021-02-28', '2021-03-23'),
(62, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/894-c6mpXTcxDT.png', 'Santa Barbara', 'USA', 'Santa Barbara', '34.4208305', '-119.6981901', 'Santa Barbara', 'Santa Barbara is a coastal city in Santa Barbara County, California.  It is one of the popular tourists and resort destination in California, famous for its Elegant Spanish-style architecture and eye grasping palm-lined waterfront. \r\nSanta Barbara is mostly famous for outdoor activities which includes Bikes rentals, Free movies at the West Wind Drive-in, picnic at Summerland\'s Lookout Park. Some top-rated tourist attraction places in Santa Barbara includes Stearns Wharf, Santa Barbara Beaches (Leadbetter Beach, Butterfly Beach), Santa Barbara Zoo, Whale Watching Tours and many.', '2021-02-28', '2021-03-23');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_newsletter`
--

CREATE TABLE `bgpkr_newsletter` (
  `news_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `added_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_newsletter`
--

INSERT INTO `bgpkr_newsletter` (`news_id`, `email`, `added_on`) VALUES
(1, 'shubhamtyagi9643@gmail.com', '2020-08-21'),
(2, 'dchitkara94@gmail.com', '2020-08-21'),
(3, 'devesh@techugo.com', '2020-09-02'),
(4, 'sumit@yopmail.com', '2020-11-13'),
(5, 'amolkaroo@gmail.com', '2021-01-27'),
(6, 'Nettie.Koss15@hotmail.com', '2021-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_notification`
--

CREATE TABLE `bgpkr_notification` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED NOT NULL,
  `receiver_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `message` varchar(255) NOT NULL,
  `type` enum('Customized','Booking Status','Host Booking','Property Request') NOT NULL,
  `read_status` enum('0','1') NOT NULL,
  `icon_status` enum('0','1') NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_notification`
--

INSERT INTO `bgpkr_notification` (`id`, `sender_id`, `receiver_id`, `title`, `message`, `type`, `read_status`, `icon_status`, `added_on`) VALUES
(1, 1, 8, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2020-08-21 05:07:14'),
(2, 0, 6, 'Bagpackar', 'Hi hello', 'Customized', '0', '1', '2020-08-23 05:01:49'),
(3, 0, 4, 'Bagpackar', 'sdcasdcasc', 'Customized', '0', '1', '2020-08-24 14:54:17'),
(4, 18, 17, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 3 days.', 'Host Booking', '0', '1', '2020-08-28 08:48:51'),
(5, 17, 18, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2020-08-28 08:52:22'),
(6, 18, 1, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 3 days.', 'Host Booking', '0', '1', '2020-08-30 18:40:25'),
(7, 0, 18, 'Bagpackar', 'hi sheenu how r u ?', 'Customized', '0', '1', '2020-08-30 19:08:03'),
(8, 0, 18, 'Bagpackar', 'csdvsdv', 'Customized', '0', '1', '2020-08-30 19:13:45'),
(9, 0, 2, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(10, 0, 3, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(11, 0, 4, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(12, 0, 5, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(13, 0, 6, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(14, 0, 7, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(15, 0, 8, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(16, 0, 9, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(17, 0, 11, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(18, 0, 16, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(19, 0, 17, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(20, 0, 18, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(21, 0, 21, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(22, 0, 23, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(23, 0, 24, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:26'),
(24, 0, 25, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(25, 0, 26, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:26'),
(26, 0, 27, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:27'),
(27, 0, 28, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '1', '2020-09-12 07:25:27'),
(28, 0, 29, 'Bagpackar', 'Welcome to Bagpackar. Check account for free $50.', 'Customized', '0', '0', '2020-09-12 07:25:27'),
(29, 2, 17, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 0 days.', 'Host Booking', '0', '1', '2020-09-12 12:23:57'),
(30, 25, 1, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 0 days.', 'Host Booking', '0', '1', '2020-09-15 04:57:02'),
(31, 25, 1, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 1 days.', 'Host Booking', '0', '1', '2020-09-16 10:10:19'),
(32, 4, 18, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 7 days.', 'Host Booking', '0', '1', '2020-09-23 18:57:45'),
(33, 18, 4, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2020-09-23 18:59:58'),
(34, 4, 18, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 3 days.', 'Host Booking', '0', '1', '2020-09-23 19:04:00'),
(35, 18, 4, 'Booking Rejected', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2020-09-23 19:13:48'),
(36, 4, 18, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 3 days.', 'Host Booking', '0', '1', '2020-09-23 19:19:18'),
(37, 18, 4, 'Booking Rejected', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '0', '2020-09-23 19:20:00'),
(39, 1, 2, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 1/2 days.', 'Host Booking', '0', '1', '2020-10-16 11:41:53'),
(40, 31, 32, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 5 days.', 'Host Booking', '0', '1', '2020-11-13 09:53:57'),
(41, 32, 31, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2020-11-13 09:59:31'),
(42, 0, 32, 'Bagpackar', 'hiii', 'Customized', '0', '1', '2020-11-13 11:11:27'),
(43, 35, 36, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 3 days.', 'Host Booking', '0', '1', '2020-11-27 09:28:01'),
(44, 36, 35, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2020-11-27 09:29:44'),
(45, 35, 36, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 4 days.', 'Host Booking', '0', '0', '2020-12-03 09:47:31'),
(46, 3, 36, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 2 days.', 'Host Booking', '0', '0', '2021-02-14 09:13:04'),
(47, 6, 3, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 1 days.', 'Host Booking', '0', '1', '2021-02-14 09:25:31'),
(48, 6, 3, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 1 days.', 'Host Booking', '0', '1', '2021-02-14 09:28:54'),
(49, 3, 6, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2021-02-14 09:29:59'),
(50, 3, 6, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2021-02-14 09:30:05'),
(51, 6, 3, 'New Booking Request', 'Someone requested to book your house/villa/Apartment for 2 days.', 'Host Booking', '0', '1', '2021-03-15 07:12:32'),
(52, 3, 6, 'Booking Accepted', 'Host accepted your request to book the house/vila/apartment', 'Booking Status', '0', '1', '2021-03-15 07:14:16');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_payment`
--

CREATE TABLE `bgpkr_payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `guest_id` int(10) UNSIGNED NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `paid_amount` float NOT NULL,
  `paid_amount_currency` varchar(10) NOT NULL,
  `charge_id` varchar(255) NOT NULL COMMENT 'Charge ID',
  `txn_id` varchar(200) NOT NULL,
  `payment_status` enum('0','1','2') NOT NULL COMMENT '0=payment_failed,1=succeeded,2=Refund',
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_payment`
--

INSERT INTO `bgpkr_payment` (`payment_id`, `booking_id`, `host_id`, `user_id`, `guest_id`, `guest_email`, `paid_amount`, `paid_amount_currency`, `charge_id`, `txn_id`, `payment_status`, `created_on`) VALUES
(1, 1, 1, 1, 8, 'dchitkara94@gmail.com', 8889, 'usd', '', 'txn_1HISQFDEiJO8fdUY9nLpo5WL', '1', '2020-08-21 05:04:15'),
(2, 2, 22, 17, 18, 'naveen@techugo.com', 2300, 'inr', '', 'txn_1HL3GRDEiJO8fdUYNmaOXoCT', '1', '2020-08-28 08:48:51'),
(3, 3, 1, 1, 18, 'naveen@techugo.com', 8889, 'inr', '', 'txn_1HLvS0DEiJO8fdUYTZkYc9Qz', '1', '2020-08-30 18:40:25'),
(4, 4, 22, 17, 2, 'shubhamtyagi9643@gmail.com', 675, 'usd', '', 'txn_1HQXloDEiJO8fdUYBdYGGRfl', '1', '2020-09-12 12:23:57'),
(5, 5, 1, 1, 25, 'dchitkara94@gmail.com', 2972.25, 'inr', '', 'txn_1HRWDyDEiJO8fdUYrQufGLyp', '1', '2020-09-15 04:57:02'),
(6, 6, 1, 1, 25, 'dchitkara94@gmail.com', 4944.5, 'inr', 'ch_1HRxahDEiJO8fdUY1lhGfjwZ', 'txn_1HRxahDEiJO8fdUYOFOKsVsH', '1', '2020-09-16 10:10:19'),
(7, 7, 58, 18, 4, 'mohdshahnazar518@gmail.com', 209997, 'inr', 'ch_1HUd9wDEiJO8fdUYA89esEgD', 'txn_1HUd9wDEiJO8fdUY2zfeRqMz', '1', '2020-09-23 18:57:44'),
(8, 8, 37, 18, 4, 'mohdshahnazar518@gmail.com', 8004.95, 'usd', 'ch_1HUdFyDEiJO8fdUYzrcXCHdT', 'txn_1HUdFzDEiJO8fdUYWb0Miyvt', '2', '2020-09-23 19:03:59'),
(9, 9, 37, 18, 4, 'mohdshahnazar518@gmail.com', 8004.95, 'usd', 'ch_1HUdUmDEiJO8fdUY27NK4X5A', 'txn_1HUdUnDEiJO8fdUYf00nhag2', '2', '2020-09-23 19:19:17'),
(11, 11, 1, 2, 1, 'devesh1@techugo.com', 2972.25, 'inr', 'ch_1HcrJkDEiJO8fdUYjvwZsYs9', 'txn_1HcrJkDEiJO8fdUYpZIE1KNm', '1', '2020-10-16 11:41:52'),
(12, 12, 174, 32, 31, 'amit@yopmail.com', 5850, 'usd', 'ch_1HmyydDEiJO8fdUYoTyYdyJQ', 'txn_1HmyyeDEiJO8fdUYCrtwMRfT', '1', '2020-11-13 09:53:56'),
(13, 13, 182, 36, 35, 'abhay@yopmail.com', 3550, 'usd', 'ch_1Hs3FDDEiJO8fdUYwPk61ect', 'txn_1Hs3FEDEiJO8fdUYNQRTirVT', '1', '2020-11-27 09:28:00'),
(14, 14, 183, 36, 35, 'abhay@yopmail.com', 4420, 'inr', 'ch_1HuEPNDEiJO8fdUYpPZEHFv8', 'txn_1HuEPODEiJO8fdUYlhlGQGaQ', '1', '2020-12-03 09:47:30'),
(15, 15, 182, 36, 3, 'amolkaroo@gmail.com', 2400, 'usd', 'ch_1IKgf5DEiJO8fdUYyF69Dkzt', 'txn_1IKgf5DEiJO8fdUYxdfIBYqO', '1', '2021-02-14 09:13:04'),
(16, 16, 109, 3, 6, 'amolkaroo@gmail.com', 350, 'usd', 'ch_1IKgr7DEiJO8fdUYhYxJuHpc', 'txn_1IKgr8DEiJO8fdUYetPH3emC', '1', '2021-02-14 09:25:30'),
(17, 17, 109, 3, 6, 'amolkaroo@gmail.com', 350, 'usd', 'ch_1IKguPDEiJO8fdUY2qtKCXXA', 'txn_1IKguPDEiJO8fdUYS15HwQ6S', '1', '2021-02-14 09:28:53'),
(18, 18, 109, 3, 6, 'amolkaroo@gmail.com', 680, 'usd', 'ch_1IVAbLDEiJO8fdUYGWMtDqFU', 'txn_1IVAbLDEiJO8fdUYUp8Hic61', '1', '2021-03-15 07:12:31');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_popular_destination`
--

CREATE TABLE `bgpkr_popular_destination` (
  `pd_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `added_on` date NOT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_popular_destination`
--

INSERT INTO `bgpkr_popular_destination` (`pd_id`, `image`, `address`, `country`, `city`, `latitude`, `longitude`, `added_on`, `updated_on`) VALUES
(1, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/628-UdJHKOC5C2.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(2, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/936-giv7T6zWkJ.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(3, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/453-0vptpee6YH.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(4, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/311-UUASoocNox.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(5, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/845-3iGdJy0hqU.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(6, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/990-i9UdIDShSV.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(7, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/559-6fygTa6S4C.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(8, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/417-JoTaDWmHhk.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(9, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/440-noTG0GeU2y.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(10, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/949-6h9Lrq5nmN.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(11, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/985-Y5XyKaokae.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(12, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/432-tZJD4OPutj.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(13, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/349-WZO4oJ1giv.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(14, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-0eBTNHQULp.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(15, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/105-55830gxWLO.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873', '2020-07-07', NULL),
(16, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/175-S0rTNUJiIl.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(17, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-i5T7fJzMaX.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(18, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/180-OQWs8offdo.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(19, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/385-UCTi6rBVW7.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(20, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/689-6BOf9c5sxA.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(21, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/553-G9xdPYy9LO.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(22, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/284-hguYLc96U1.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(23, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/109-Ign9v3g7TB.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(24, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/316-BtUAdNaLgo.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(25, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/536-vOJmRHAAjf.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(26, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/518-toItT5wVaP.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(27, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/703-eUo8S3PkdY.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(28, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/980-b4XAAdtuiT.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(29, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/977-qatjed7lb2.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(30, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/652-t4S9qeyZto.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(31, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/866-TnyWohwo9S.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(32, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/329-YvCG7dCatc.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(33, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/416-iogNf1EeaX.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(34, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/439-IrW0allWCa.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(35, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-U5DufqTenP.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(36, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/191-ALDMF12asU.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(37, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/710-DYUOcyT95j.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(38, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/934-VVmntcitsW.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(39, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/257-JW6uQX7Xlt.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(40, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/867-syJMtaBgco.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(41, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/212-WZ3tLWCiSa.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(42, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/490-RAXlTxmwFy.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(43, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/682-nX4PnKBwas.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(44, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/368-xkPXLcoXAP.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(45, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/254-ZbG0TE2aso.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(46, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/634-ZC4FDPth83.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(47, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/642-05TAlwaIn6.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(48, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/988-T4lwymT1Am.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(49, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/846-uQgeiZnxUQ.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(50, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/588-asAf1wDrx1.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(51, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/878-oWPlaU6nga.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(52, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/543-dcnX9Ob4uY.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(53, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/971-7nTvKzTKOT.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(54, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/275-J5MLlrEkkP.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(55, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/369-FSRooQxwkC.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(56, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/754-KFebLbWctR.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(57, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/569-xtGoyNpmJl.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(58, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/522-KdUrz1bXir.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(59, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-yKSeT9psXZ.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_privacy_policy`
--

CREATE TABLE `bgpkr_privacy_policy` (
  `privacy_id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_privacy_policy`
--

INSERT INTO `bgpkr_privacy_policy` (`privacy_id`, `body`) VALUES
(1, '<h2>Reservation Guarantee</h2>\n\n<p>Bagpackar provides assurance on all of your reservations. If a Guest\'s confirmed reservation is not available or cannot be entertained by the host or property owner then immediately contact our 24/7 Customer Service at the contact number(s) listed in your confirmation email or at Bagpackar’s support page. Our Bagpackar Customer Support Team will search for alternative accommodation at a convenient and comparable property, for your approval.</p>\n\n<p>If a guest does not approve any recommended or alternate accommodation provided by Bagpackar Support Team, then Bagpackar will provide a full refund of the payment made for the original reservation. </p>\n\n<h2>Secure Policy</h2>\n\n<p>The Bagpackar payment system ensures confidentiality of your personal data and safe use of your credit card for travel transactions. You can supply your credit card details by any one of the following secure methods: </p>\n\n<p>By using our secure (SSL) online Cardholder Information Form\nOr by telephone, directly to our Bagpackar Support Center</p>\n\n<h2>Miscellaneous</h2>\n\n<p>If you intend to use your phone number to sign up or log-in to your Bagpackar.com user account, you must provide an SMS-capable phone number to receive one-time password (“OTP”) codes from Bagpackar. You’ll use these codes to verify your identity. </p>\n\n<p>Carrier charges may apply for receiving the text messages that provide OTP codes. Please contact your mobile carrier for further information. </p>\n\n<p>Sign up for a Bagpackar account using a phone number</p>\n<ol>\n<li>Provide an SMS-capable phone number. </li>\n<li>Enter the OTP sent to your phone via SMS. </li>\n<li>Create your account password, and you’re all set.</li>\n</ol>\n\n\n<p>Log in to your Bagpackar account using a phone number</p>\n<ol>\n\n<li>You can use your verified phone number and password combination to log in to your Bagpackar account. </li>\n<li>If you forget your password, you can reset it either by your email (a link will be sent to your inbox) or by your phone number (an OTP will be sent to your phone via SMS). </li>\n</ol>\n\n<h2>Disclaimer</h2>\n<ol>\n\n<li>Bagpackar makes every effort to ensure that any materials or rates displayed on this website are accurate as at the date of issue. Changes in market conditions or circumstances may occur after the issue date which may make information displayed on this website no longer accurate or no longer reflect the current position. </li>\n\n<li>Bagpackar hereby expressly disclaims any representation, warranty or undertaking in relation to the accuracy, completeness, quality or adequacy of any contents of this website. </li>\n\n<li>While Bagpackar makes every effort to work with Hosts to provide an acceptable standard of service and accommodation for the price paid, we hereby expressly disclaim any representation, warranty or undertaking in relation to the quality or adequacy of any hotel or property listed on our website. </li>\n\n<li>In case of any discrepancies between the English language content/version of this website including its policies and a translated version, the English language version will prevail. </li>\n</ol>\n');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_referral`
--

CREATE TABLE `bgpkr_referral` (
  `r_id` int(11) NOT NULL COMMENT 'R Id',
  `user_id` int(11) UNSIGNED NOT NULL COMMENT 'User Id',
  `refer_user_id` int(10) UNSIGNED NOT NULL COMMENT 'Refer User Id',
  `currency` varchar(20) NOT NULL COMMENT 'Currency'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_referral_amount`
--

CREATE TABLE `bgpkr_referral_amount` (
  `rf_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL COMMENT 'Discount user Id',
  `amount` float NOT NULL COMMENT 'Discount amount'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_referral_program`
--

CREATE TABLE `bgpkr_referral_program` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'referral program text'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_referral_program`
--

INSERT INTO `bgpkr_referral_program` (`id`, `body`) VALUES
(1, '<h2><u>Referral Program</u></h2>\n         <h2>Overview </h2>\n         <p>The Bagpackar Referral Program provides an opportunity to earn rewards using Coupon by referring Guest or Host to make bookings and hosting property on Bagpackar platform.\n            The Bagpackar Referral Program provides an opportunity to earn rewards using Coupon by referring Guest or Host to make bookings and hosting property on Bagpackar platform.\n            Using our referral program will declare that you have accepted Bagpackar’s Terms of Use, Privacy Policy and our Terms and Conditions and you are bound by them under a contract with Bagpackar. \n         </p>\n         <p>The Referrer (Host or Guest) shares the referral link as provided in the invitation to participate in the Bagpackar Host and Guest Referral Program (the “Referral Link”). Anyone active member can refer to Hosts or Guests. </p>\n         <p>Bagpackar referral program is only for personal use and non-commercial purposes. Our program cannot be merged with any other program. \n            The Program cannot be combined with any other stimulus or promotion provided by Bagpackar or any other company. Referring guests or hosts in our platform through link or coupon code, you can earn a certain amount or cash that can be used only in Bagpackar platform. Bagpackar as a platform reserved a right to decline referral program if the referrer found violating our Terms and Policies. \n         </p>\n         <p>Bagpackar may suspend or end the Program or end the Campaign Period at any time by posting a message on the platform or by sending a message to the email address associated with your Bagpackar account.\n            Bagpackar does not guarantee that the Link will operate error-free, without interruption, or that it is compatible with all systems and networks. \n         </p>\n         <p>You will indemnify Bagpackar for all damages, costs, and losses (including reasonable lawyer and professional service fees) that arise from your actions, including negligence and intentional misconduct, with respect to your participation in the Program. </p>\n         <p>Bagpackar will not be liable under these Terms for any indirect or punitive damages, even if we are informed in advance of the possibility of the damages.\n            Bagpackar’s total aggregate liability to you under these Terms will not exceed $10 USD. \n         </p>\n         <h2>Referral Reward:</h2>\n         <p>Referred Host or Guest shares a referral link which will be provided by a Member (could be host or guest). Referral programs must accompany the following conditions:</p>\n         <ul>\n            <li>Referred person must be a new user and must not have made any reservations.</li>\n            <li>Referrer must now have an outstanding balance on the Bagpackar platform.</li>\n            <li>Referrer and Referee must not be the same person.</li>\n         </ul>\n         <p>Referral Rewards are earned only after making the booking using the referred link provided by the referrer. </p>\n         <p>After eligible refer using link, Referee will get $30 immediately towards their future booking but the Referrer will get $30 only after booking is made successfully and the referee completes the stay. If the Referee cancels the booking, then no rewards will be provided to the Referrer. Referral bonus or rewards can only be usable in Bagpackar platform and cannot be converted, modified, transferred into cash or sold at any circumstances. Referral reward cannot be transferred from one user account to another. </p>\n         <p>Referred bonuses are available immediately in the Referrer\'s Bagpackar account or in some cases within 6 weeks. Refer bonus or rewards will be available to use within 8 weeks from the time booking is made successfully and the referee completes the stay. </p>\n         <p>Maximum referred rewards that can be earned is $1200. </p>\n         <p>Rewards earned by Host referring to another Host or Guest can be used as a coupon to get a certain amount discount while booking the stays. </p>\n         <p>Maximum $30 can be used as a coupon or discount on one particular booking and booking should be more than or equal to $100 excluding taxes or maximum $60 can be used as a coupon on a single booking for stays costing more than $200 excluding taxes. </p>\n         <h2>Member’s Qualifications: </h2>\n         <p>Members or participants in the Program must have an active account on Bagpackar platform by invitation, optional, and subject to eligibility criteria determined by Bagpackar.\n            To participate in the Program, you must be a natural person or have an active Bagpackar. \n         </p>\n         <p>Bagpackar might ask members for additional or further information and documentation to prove that Members consent to the Program’s qualification requirements. </p>\n         <p>Bagpackar hold rights to wave or end your involvement in the Program immediately without notice if we found any of our Terms violating or encourage illegal affairs. </p>\n         <h2>Referred Person Quantifications: </h2>\n         <p>Referred person in the Program must be a new user without an account on Bagpackar. Referred person should be accepted Bagpackar’s Terms of Use, Privacy Policy and our Terms and Conditions. Referred person must be a natural person (not a computer/robot) and should not have any other account in Bagpackar platform in any other name which will violate our policy and the person will be suspended. Referred person cannot be self, or any family member living with the referrer.  </p>\n         <h2>Eligible Bookings:</h2>\n         <p>Following all Policies and Terms on Bagpackar, if Booking is successful, Host and Guest may earn up to $35 towards their current/future booking. </p>\n         <p>You may only send the Link to people with whom you have an existing relationship, and whom you reasonably believe will be interested in booking accommodations with Bagpackar during the Campaign Period. </p>\n         <p>You must not publish or distribute the Link publicly, post it in forums or on sites that you do not operate directly, nor use it in or for paid promotions or advertisements. </p>\n         When you refer a person, you must inform them that you are participating in the Program and may receive rewards from Bagpackar for the referral. </p>\n         <p>You must not use Bagpackar’s name or logo without Bagpackar’s prior written permission.\n            You are responsible for knowing which laws and regulations apply to your participation in the Program, including privacy and data protection laws, and for complying with them.\n         </p>');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_review_rating`
--

CREATE TABLE `bgpkr_review_rating` (
  `id` int(10) UNSIGNED NOT NULL,
  `guest_id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL,
  `rating` char(3) NOT NULL,
  `review` text NOT NULL,
  `added_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_review_rating`
--

INSERT INTO `bgpkr_review_rating` (`id`, `guest_id`, `host_id`, `rating`, `review`, `added_on`) VALUES
(1, 2, 1, '4', 'Test', '2020-09-12 09:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_stay_home`
--

CREATE TABLE `bgpkr_stay_home` (
  `sh_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `added_on` date NOT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_stay_home`
--

INSERT INTO `bgpkr_stay_home` (`sh_id`, `image`, `address`, `country`, `city`, `latitude`, `longitude`, `added_on`, `updated_on`) VALUES
(1, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/628-UdJHKOC5C2.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(2, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/936-giv7T6zWkJ.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(3, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/453-0vptpee6YH.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(4, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/311-UUASoocNox.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(5, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/845-3iGdJy0hqU.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(6, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/990-i9UdIDShSV.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(7, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/559-6fygTa6S4C.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(8, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/417-JoTaDWmHhk.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(9, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/440-noTG0GeU2y.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(10, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/949-6h9Lrq5nmN.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(11, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/985-Y5XyKaokae.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(12, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/432-tZJD4OPutj.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(13, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/349-WZO4oJ1giv.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(14, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-0eBTNHQULp.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(15, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/105-55830gxWLO.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873', '2020-07-07', NULL),
(16, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/175-S0rTNUJiIl.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(17, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-i5T7fJzMaX.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(18, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/180-OQWs8offdo.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(19, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/385-UCTi6rBVW7.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(20, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/689-6BOf9c5sxA.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(21, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/553-G9xdPYy9LO.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(22, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/284-hguYLc96U1.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(23, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/109-Ign9v3g7TB.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(24, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/316-BtUAdNaLgo.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(25, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/536-vOJmRHAAjf.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(26, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/518-toItT5wVaP.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(27, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/703-eUo8S3PkdY.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(28, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/980-b4XAAdtuiT.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(29, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/977-qatjed7lb2.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(30, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/652-t4S9qeyZto.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(31, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/866-TnyWohwo9S.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(32, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/329-YvCG7dCatc.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(33, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/416-iogNf1EeaX.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(34, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/439-IrW0allWCa.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(35, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-U5DufqTenP.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(36, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/191-ALDMF12asU.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(37, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/710-DYUOcyT95j.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(38, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/934-VVmntcitsW.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(39, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/257-JW6uQX7Xlt.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(40, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/867-syJMtaBgco.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(41, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/212-WZ3tLWCiSa.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(42, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/490-RAXlTxmwFy.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(43, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/682-nX4PnKBwas.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(44, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/368-xkPXLcoXAP.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(45, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/254-ZbG0TE2aso.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(46, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/634-ZC4FDPth83.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(47, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/642-05TAlwaIn6.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(48, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/988-T4lwymT1Am.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(49, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/846-uQgeiZnxUQ.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(50, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/588-asAf1wDrx1.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(51, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/878-oWPlaU6nga.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(52, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/543-dcnX9Ob4uY.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(53, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/971-7nTvKzTKOT.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(54, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/275-J5MLlrEkkP.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(55, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/369-FSRooQxwkC.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(56, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/754-KFebLbWctR.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(57, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/569-xtGoyNpmJl.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(58, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/522-KdUrz1bXir.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(59, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-yKSeT9psXZ.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_terms_condition`
--

CREATE TABLE `bgpkr_terms_condition` (
  `terms_id` int(11) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_terms_condition`
--

INSERT INTO `bgpkr_terms_condition` (`terms_id`, `body`) VALUES
(1, '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\n	   . Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled when an unknown printer took a galley of type and scrambled</p>\n	  	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\n	   . Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled when an unknown printer took a galley of type and scrambled</p>\n	   	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\n	   . Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled when an unknown printer took a galley of type and scrambled</p>\n	   	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\n	   . Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled when an unknown printer took a galley of type and scrambled</p>	   <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled\n	   . Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled when an unknown printer took a galley of type and scrambled</p>');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_top_rated`
--

CREATE TABLE `bgpkr_top_rated` (
  `tr_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `added_on` date NOT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_top_rated`
--

INSERT INTO `bgpkr_top_rated` (`tr_id`, `image`, `address`, `country`, `city`, `latitude`, `longitude`, `added_on`, `updated_on`) VALUES
(1, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/628-UdJHKOC5C2.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(2, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/936-giv7T6zWkJ.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(3, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/453-0vptpee6YH.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(4, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/311-UUASoocNox.jpg', 'Delhi', 'India', 'Delhi', '28.7041', '77.1025', '2020-07-07', NULL),
(5, ' https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/845-3iGdJy0hqU.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(6, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/990-i9UdIDShSV.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(7, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/559-6fygTa6S4C.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(8, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/417-JoTaDWmHhk.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(9, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/440-noTG0GeU2y.jpg', 'Goa', 'India', 'Goa', '15.2993', '74.1240', '2020-07-07', NULL),
(10, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/949-6h9Lrq5nmN.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(11, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/985-Y5XyKaokae.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(12, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/432-tZJD4OPutj.jpg', 'Hyderabad', 'India', 'hyderabad', '17.3850', '78.4867', '2020-07-07', NULL),
(13, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/349-WZO4oJ1giv.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(14, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-0eBTNHQULp.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873	', '2020-07-07', NULL),
(15, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/105-55830gxWLO.jpg', 'Jaipur', 'India', 'Jaipur', '26.9124', '75.7873', '2020-07-07', NULL),
(16, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/175-S0rTNUJiIl.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(17, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-i5T7fJzMaX.jpg', 'Kerala', 'India', 'Kerala', '10.8505', '76.2711', '2020-07-07', NULL),
(18, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/180-OQWs8offdo.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(19, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/385-UCTi6rBVW7.jpg', 'Kochi', 'India', 'Kochi', '9.9312', '76.2673', '2020-07-07', NULL),
(20, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/689-6BOf9c5sxA.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(21, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/553-G9xdPYy9LO.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(22, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/284-hguYLc96U1.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(23, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/109-Ign9v3g7TB.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(24, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/316-BtUAdNaLgo.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(25, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/536-vOJmRHAAjf.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(26, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/518-toItT5wVaP.jpg', 'Mumbai', 'India', 'Mumbai', '19.0760', '72.8777', '2020-07-07', NULL),
(27, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/703-eUo8S3PkdY.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(28, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/980-b4XAAdtuiT.jpg', 'Shimla', 'India', 'Shimla', '31.1048', '77.1734', '2020-07-07', NULL),
(29, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/977-qatjed7lb2.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(30, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/652-t4S9qeyZto.jpg', 'Arizona', 'USA', 'Arizona', '34.0489', '111.0937', '2020-07-07', NULL),
(31, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/866-TnyWohwo9S.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(32, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/329-YvCG7dCatc.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(33, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/416-iogNf1EeaX.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(34, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/439-IrW0allWCa.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL),
(35, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/410-U5DufqTenP.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(36, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/191-ALDMF12asU.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(37, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/710-DYUOcyT95j.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(38, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/934-VVmntcitsW.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(39, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/257-JW6uQX7Xlt.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(40, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/867-syJMtaBgco.jpg', 'Miami', 'USA', 'Miami', '25.7617', '80.1918', '2020-07-07', NULL),
(41, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/212-WZ3tLWCiSa.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(42, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/490-RAXlTxmwFy.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(43, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/682-nX4PnKBwas.jpg', 'New York', 'USA', 'New York', '40.7128', '74.0060', '2020-07-07', NULL),
(44, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/368-xkPXLcoXAP.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(45, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/254-ZbG0TE2aso.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(46, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/634-ZC4FDPth83.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(47, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/642-05TAlwaIn6.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(48, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/988-T4lwymT1Am.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(49, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/846-uQgeiZnxUQ.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(50, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/588-asAf1wDrx1.jpg', 'San Francisco', 'USA', 'San Francisco', '37.7749', '122.4194', '2020-07-07', NULL),
(51, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/878-oWPlaU6nga.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(52, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/543-dcnX9Ob4uY.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(53, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/971-7nTvKzTKOT.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(54, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/275-J5MLlrEkkP.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(55, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/369-FSRooQxwkC.jpg', 'Seattle', 'USA', 'Seattle', '47.6062', '122.3321', '2020-07-07', NULL),
(56, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/754-KFebLbWctR.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(57, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/569-xtGoyNpmJl.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(58, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/522-KdUrz1bXir.jpg', 'Las Vegas', 'USA', 'Las Vegas', '36.1699', '115.1398', '2020-07-07', NULL),
(59, 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/AllHomeImages/617-yKSeT9psXZ.jpg', 'Los Angeles', 'USA', 'Los Angeles', '34.0522', '118.2437', '2020-07-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_users`
--

CREATE TABLE `bgpkr_users` (
  `user_id` int(11) NOT NULL COMMENT 'User ID',
  `name` varchar(100) NOT NULL,
  `user_image` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `country_lang_code` varchar(10) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `acc_type` enum('normal','google','fb') NOT NULL,
  `google_id` varchar(100) NOT NULL,
  `fb_id` varchar(100) NOT NULL,
  `forgot_token` varchar(20) NOT NULL COMMENT 'Forgot Token',
  `socket_id` varchar(255) NOT NULL,
  `chat_with` mediumint(9) NOT NULL,
  `device_type` enum('web') NOT NULL,
  `device_token` varchar(400) NOT NULL,
  `user_status` enum('0','1') NOT NULL DEFAULT '1',
  `delete_status` enum('0','1') DEFAULT '0' COMMENT '0=Active,1=Deleted',
  `user_code` varchar(255) NOT NULL,
  `government_id1` varchar(130) NOT NULL COMMENT 'user government id 1st',
  `government_id2` varchar(130) NOT NULL COMMENT 'user government id 2nd',
  `added_on` datetime DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_users`
--

INSERT INTO `bgpkr_users` (`user_id`, `name`, `user_image`, `email`, `password`, `country_code`, `country_lang_code`, `phone`, `dob`, `acc_type`, `google_id`, `fb_id`, `forgot_token`, `socket_id`, `chat_with`, `device_type`, `device_token`, `user_status`, `delete_status`, `user_code`, `government_id1`, `government_id2`, `added_on`, `updated_on`) VALUES
(1, 'Shanazar Saifi', 'https://lh3.googleusercontent.com/-pXhPvp3YKoE/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucno5qzN2iaN874n1bUYfgPjt_tQDw/photo.jpg', 'mohdshahnazar518@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '', '', '', '', 'google', '101334571397161045617', '', '', '', 0, 'web', '', '1', '1', 'Devesh1', '', '', '2020-08-20 07:32:27', NULL),
(2, 'Shubham Tyagi', 'https://lh3.googleusercontent.com/a-/AOh14GhsmqgpIqsl_L2dL7MwaHbW7bseO3ZJDeccnMx0CQ', 'nittinsharma913@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '', '', '', '', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Shubham2', '', '', '2020-08-20 07:39:46', NULL),
(3, 'Amol Karoo', 'https://lh3.googleusercontent.com/a-/AOh14GjIz0CL3cMESN3yV60D2B_geJqx86HIbw2IWqqHWw', 'amolkaroo@gmail.com', '', '', '', '', '', 'google', '107537911065941104245', '', '', '', 0, 'web', '', '1', '0', 'Amol3', '', '', '2020-08-20 08:26:17', NULL),
(4, 'Mohd Shahnazar', 'https://lh3.googleusercontent.com/a-/AOh14GiyYZO85e991p6gHX_qbuV3bBdiM6VRKvhEol_rIg', 'mohdshahnazar518@gmail.com', '', '', '', '', '', 'google', '108208562599120979883', '', '', '', 0, 'web', 'foQrCRp5HD0:APA91bGugRjkw5s3kdN1wXSi5ByGxjd3-OWr633EjYyOro09wOlLkfQGOA_52QDb4l5vRZerdIPOKRcYFiJ0wu8C4UEjmdWyQlbEfQnseP52akirIWmWFxPkWbJqL8XEvAQrS8cVp--2', '1', '0', 'Mohd4', '', '', '2020-08-20 11:52:03', NULL),
(5, 'naveen shahi', 'https://lh4.googleusercontent.com/-_U6iKtDtBqc/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnoua6Hv4BE61Z7yM6AVi1URSUdbA/photo.jpg', 'naveenshahi0007@gmail.com', '', '', '', '', '', 'google', '116606525611983862772', '', '', '', 0, 'web', '', '1', '0', 'naveen5', '', '', '2020-08-20 13:03:11', NULL),
(6, 'Amol Karoo', 'https://lh5.googleusercontent.com/-YDqA6YH-_LU/AAAAAAAAAAI/AAAAAAAAAAA/AMZuuclteLWYC6kxT8UrcKU5S9w9ba9FJg/photo.jpg', 'amolkaroo@gmail.com', '', '+1', 'US', '3236129883', '', 'google', '115675093008336837799', '', '', '', 0, 'web', '', '1', '0', 'Amol6', '', '', '2020-08-21 03:42:49', '2020-08-21'),
(7, 'Shuuuu', '', 'ssss@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '9716429351', '', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Shuuuu7', '', '', '2020-08-21 03:43:21', NULL),
(8, 'Devesh Chitkara', '', 'shubhamtyagi96413@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '8703248240', '08-08-2002', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Devesh8', '', '', '2020-08-21 11:23:07', '2020-08-27'),
(9, 'Bagpackar Bagpackar', '', 'bagpackar1@gmail.com', '', '', '', '', '', 'fb', '', '122276286108267', '', '', 0, 'web', '', '1', '0', 'Bagpackar9', '', '', '2020-08-21 11:22:42', NULL),
(11, 'Amol Karoo', '', '', '', '', '', '', '', 'fb', '', '3282231531833098', '', '', 0, 'web', '', '1', '0', 'Amol11', '', '', '2020-08-23 05:14:27', NULL),
(16, 'Lucky Tester', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=1248161425524532&height=50&width=50&ext=1600864001&hash=AeQQGnDWX2zc-SKT', '', '', '', '', '', '', 'fb', '', '1248161425524532', '', '', 0, 'web', '', '1', '0', 'Lucky16', '', '', '2020-08-24 12:26:42', NULL),
(18, 'Sdfsdf', '', 'naveen@techugo.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '6396031312', '12-08-1993', 'normal', '', '', '7BThwciudf', '', 0, 'web', 'dDXosZXJsho:APA91bFVzZuN0Ugfd1C2UmJsI9IFhpvRmwspW72nhRCi8wxJURE95b5zvYNlRyM7M-EcjfxQlF8NbRtAycCwnTHXVQCSseQSyU868bb7KFHB3Cvyb5gHqAX_XrpYNFFoRlx71nyuNpUy', '1', '0', 'Sdfsdf18', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/970-pOgXcdPGmE.jpg', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/438-WaTLbviKE8.jpg', '2020-08-25 08:34:22', '2020-11-27'),
(21, 'Dhruv Tyagi', '', 'shinu@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '9759827257', '01-08-2002', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Dhruv21', '', '', '2020-08-27 05:51:22', NULL),
(23, 'Dhruv Tyagi', '', 'dhruv@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '9560629796', '01-09-2002', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Dhruv23', '', '', '2020-09-01 18:40:26', NULL),
(24, 'Sana Gulam Kalim Sheikh', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/users/888-dMjHLWW6OK.png', 'sanasheikh125@gmail.com', '76fd9f22d21af3c2055ab2013814ae45', '+1', 'US', '3233423079', '12-05-1993', 'fb', '', '[object HTMLInputElement]', '', '', 0, 'web', 'eQd59TvYbX4:APA91bFi3KpNPuqSeqQR78tSE4ke9ipoVtIoSyf7FFvMaeuZ9-GPONmAcnop9jS24V0gYb_O9MxTLl_TDDzItAPKV6h8_9nGjTbDKL5WWyjifg9jrNIAcNvFvwLQoEr9vcVtsgebgKmI', '1', '0', 'Sana24', '', '', '2020-09-02 06:59:00', '2020-09-02'),
(25, 'Devesh Chitkara', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/users/421-ehrB9OK3Ma.jfif', 'dchitkara94@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '8700308240', '01-09-2000', 'fb', '', '[object HTMLInputElement]', '', '', 0, 'web', '', '1', '0', 'Devesh25', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/991-iX9Ia2iRsd.jpeg', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/191-YL6QLTee2y.jpeg', '2020-09-02 07:45:46', '2020-10-15'),
(26, 'Junaid sheikh', 'https://lh3.googleusercontent.com/a-/AOh14Gisd-9IYy70s90kkoStgk6SW3OOjgafzOoZc1b_fCE', 'junaidsheikh22@gmail.com', '16c8436012c1c1b84eef96ba2958b5e2', '+1', 'US', '8185793499', '22-11-1996', 'google', '115021297816985735402', '', '', '', 0, 'web', 'cEvmis_cGCQ:APA91bFiotVKzkLMUcoMjvss07JM53-vOf3EAh9hkXZm5xI6RELwsd_6rWdvXhUPYEvvMwL87wNaPnNrpCX9rExzqA8inwbxuYU2249u0uAEejIrw7wyEn1fXMZ0e9I2Hw9LK5YVKP6M', '1', '0', 'Junaid26', '', '', '2020-09-02 19:54:03', NULL),
(27, 'Preethi Bozza', '', 'preethireddy0916@gmail.com', '888be7a969e50b6fcb561f21430a9420', '+1', 'US', '9378536936', '16-09-1996', 'normal', '', '', '', '', 0, 'web', 'ctf6hUfILOg:APA91bGd_jUrnMsh44zeuIaZ0BHkntgvlshwwjWzIoo3kqPH5DokO6dMi_eeqp4GA1NwcltfaTF1mtGPaUzvghi7jCLWtMD64dUQ2mUmiWBitW9U0n1-Mj1AkmmJEleUt1Moz2REJzQS', '1', '0', 'Preethi27', '', '', '2020-09-03 19:14:37', '2020-09-03'),
(29, 'Alok', '', 'alok@techugo.com', '4e5d9714ae1d40e34aaf524c00b4811a', '+91', 'IN', '8700406888', '09-09-1992', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Alok29', '', '', '2020-09-11 09:18:35', NULL),
(30, 'Nitin Sharma', 'https://lh3.googleusercontent.com/a-/AOh14GhmFDfAe2likxfL8vXGO7-cjLwirKwPO-zxHRR7MA=s96-c', 'nittinsharma93@gmail.com', '08580fc6d72894f8849d910ea4e51d1d', '+91', 'IN', '8802710765', '15-10-1992', 'google', '107636226817022210524', '', '', '', 0, 'web', 'cJ1-Lck3g6k:APA91bE3lDdqsogPNOxwIsLhVXnrNCE35jFeuEVQPChhT4mzfF8GkQXfxT6JyEoa8ilpPGptI_pJE-2Otp2Ar53uacl6uMpA7DTPWk1OPX-UtlgLYibFynkXUJqZ1AFR3z0ktZg2KARo', '1', '0', 'Nitin30', '', '', '2020-10-19 11:35:21', NULL),
(31, 'Amit kumar', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/users/651-jWXQo266nQ.png', 'amit@yopmail.com', '6ab64131c195b89799a579b3039579ac', '+1', 'US', '3369300064', '05-11-1998', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Amit31', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/358-oi7zRBowVr.jpg', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/209-VxdDpZbi3g.jpg', '2020-11-13 07:23:28', '2020-11-13'),
(32, 'Sumit kumar', '', 'sumit@yopmail.com', '6ab64131c195b89799a579b3039579ac', '+1', 'US', '5029002031', '07-11-2002', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Sumit32', '', '', '2020-11-13 07:26:52', '2020-11-13'),
(33, 'Somesh Mendiratta', '', 'somesh@techugo.com', '0a01e62f9d790a4d235b9c0a3e252bbb', '+91', 'IN', '9138197433', '19-06-1995', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Somesh33', '', '', '2020-11-17 12:57:22', NULL),
(34, 'Shubham Tyagi', 'https://lh3.googleusercontent.com/a-/AOh14GhsmqgpIqsl_L2dL7MwaHbW7bseO3ZJDeccnMx0CQ=s96-c', 'shubhamtyagi9643@gmail.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '9716429354', '16-01-1996', 'google', '106724054237681844498', '', '', '', 0, 'web', '', '1', '0', 'Shubham34', '', '', '2020-11-17 15:42:57', '2021-02-17'),
(35, 'Abhay Narayan', '', 'abhay@yopmail.com', '6ab64131c195b89799a579b3039579ac', '+1', 'US', '7317771143', '05-11-2002', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Abhay35', '', '', '2020-11-27 08:17:17', '2020-11-27'),
(36, 'Amit singhania', '', 'amits@yopmail.com', '6ab64131c195b89799a579b3039579ac', '+1', 'US', '9707252119', '08-05-2002', 'normal', '', '', '', '', 0, 'web', '', '1', '0', 'Amit36', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/215-aXL3Ihwqhc.jpg', 'https://bagpackaer-s3.s3.us-west-2.amazonaws.com/hostgovId/983-iMl5gvCiSC.jpg', '2020-11-27 08:21:20', '2020-11-27'),
(38, 'Shubham Tyagi', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=2492795730866331&height=50&width=50&ext=1620908944&hash=AeRCV5T3k4uzhaIAnNI', 'shubham.tyagi@techugo.com', 'c5d1ed3cafb757739edd29a1660d5e7b', '+91', 'IN', '9716429352', '02-04-2003', 'fb', '', '2492795730866331', '', '', 0, 'web', 'd2-SabOHNtE:APA91bHgZiYa-BqZyX5X6PGRJf3k4MKJMo_gCAmEjRWt7vXwGQFXnMuTZMhhQzVHLv14oV9rHbwP51a1ruftVgwUyLRVevFADE5gRBqUj48oaus-vs1l4i8IwZfAJsVJOYTZgksUJ_Ra', '1', '0', 'Shubham38', '', '', '2021-04-13 12:30:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_why_host`
--

CREATE TABLE `bgpkr_why_host` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text NOT NULL COMMENT 'Why Host'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_why_host`
--

INSERT INTO `bgpkr_why_host` (`id`, `body`) VALUES
(1, '<p>It is requested all travelers to go through all the COVID-19 travel advisories and information.111q</p>\n\n<h2>WHO advisory:</h2>\n\n<p><a href=\"https://www.who.int/emergencies/diseases/novel-coronavirus-2019\" target=\"_blank\">https://www.who.int/emergencies/diseases/novel-coronavirus-2019</a></p>\n\n<h2>USA:</h2>\n\n<p><a href=\"https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.cdc.gov/coronavirus/2019-nCoV/\" target=\"_blank\">https://www.cdc.gov/coronavirus/2019-nCoV/</a></p>\n\n<h2>India:</h2>\n\n<p><a href=\"https://www.mea.gov.in/travel-advisories.html/\" target=\"_blank\">https://travel.state.gov/content/travel/en/traveladvisories/traveladvisories.html/</a></p>\n\n<p><a href=\"https://www.mohfw.gov.in/\" target=\"_blank\">https://www.mohfw.gov.in/</a></p>\n\n<h1>COVID-19 Guidelines</h1>\n\n<p>We have gathered health and cleanliness guidelines to support you on your journey by keeping your property safe and also to keep both the host and guest healthy and protected. Bagpackar is not responsible if you are tested positive COVID-19. Guests are required to follow all safety measures. We are making every effort to make your stay safe and healthy.</p>\n\n<h2>Guidelines for Hosts for health safety:</h2>\n\n<p>Hosts who provide services to guests, host plays important role in maintaining cleanliness, safety and mitigating health risks by continuously practicing cleaning and safety protocols. These guidelines are important to maintaining hygiene and taking cleanliness to utmost levels due to the ongoing COVID-19 situation. We are in this together and we will soon be out of this situation but between these times we need to work together for our guest safety. We believe it is vital especially when working in the hospitality industry during these times.</p>\n\n<h2>Requirements:</h2>\n\n<p>Bagpackar provides support to both guests and hosts in many areas, but it is recommended to follow local authorities and governments guidelines for more details and safety measures. Based on the countries, hosts are required to follow their respective countries guidelines, rules and laws to maintain hygiene and cleanliness. You can find more information in COVID-19 TRAVEL INFORMATION AND ADVISORY section. So it is very important for you to review those respective guidelines.</p>\n\n<p>Please note that it is mandatory for hosts to check your government websites and apps to track the COVID-19 cases in your area. If your neighborhood has COVID-19 patients then you are required to make your listing available for at least 14 days.</p>\n\n<p>Bagpackar is taking care of collecting information on daily basis for any possible travel restrictions in different region. If your local government has imposed a travel restriction then all hosts are required to mark their listing as unavailable for current and future dates. Hosts are required to strictly follow local government rules and laws.</p>\n\n<h2>Communications:</h2>\n\n<p>Hosts are required to maintain social distancing (6 Feet apart) with guests all the time while communicating. Bagpackar encourage to use tools like smart lock, remote lock, keypad locks, etc to minimize contact with guests arriving at your property.</p>\n\n<p>Hosts are responsible for maintaining cleanliness and sanitizing their property to ensure the safety of your guests and staff on a regular basis.</p>\n\n<p>Any maintenance work required for your property should be completed 24 hours before arrival of guests and property are cleaned and sanitized after the work is completed. Hosts should maintain their upto date information about their listing on Bagpackar.</p>\n\n<h2>Host and Staff:</h2>\n\n<p>Hosts and their working staff/peers who are making sure about amazing guest experience are required to follow these guidelines for guest safety. Host and their peers should do their best to maintain professionalism and hospitality along with safety measures.</p>\n\n<p>Hosts should monitor their own as well as their staff&rsquo;s health and need to make sure they are not at any risk and do not present a risk for guests. Due to the ongoing COVID-19 situation, all the housekeepers are required to clean the property only after the guest&#39;s departure. Staff working at the property are required to take all measures to understand, respect and reinforce social distancing guidelines provided by your local authorities. Staff, housekeepers and your peers are always required to use appropriate protective equipment like masks and gloves when they are at the property.</p>\n\n<p>Hosts are required to maintain and provide extra basic amenities at the property for guests along with sanitizers and disinfectant wipes which should be always available.</p>\n\n<p>Following are common area where you to take special care to maintain hygiene and cleanliness:</p>\n\n<ul>\n	<li>Cleaning is the act of removing debris and dirt from a surface. Sanitizing kills bacteria on a surface. The general rule of thumb is to clean high-touch areas first then sanitize afterward.</li>\n	<li>Place transparent screens at front desk areas between reception staff and guests.</li>\n	<li>Use products that have been approved by health professionals in combating the spread of harmful organisms and viruses. Click here to read guidance issued by the World Health Organization.</li>\n	<li>Apply disinfectants during routine cleanings of guest rooms and public spaces, such as fitness areas and meeting rooms.</li>\n	<li>Add disinfectant when doing laundry and wash bedspreads more frequently.</li>\n	<li>Provide disposable disinfectant wipes to front-desk staff to disinfect surfaces that are also used by or exposed to guests. Make alcohol-based hand gel easily accessible and clearly marked for guests and staff in all public areas.</li>\n	<li>Clean and disinfect hampers or other carts for transporting laundry after they&rsquo;re used.</li>\n	<li>Clean and disinfect electronics such as tablets, touch screens, keyboards, remote controls, Ensure the sanitization and disinfection of publicly accessible toilets.</li>\n	<li>Maintain and disinfect your swimming pools, spas, and similar recreational facilities.</li>\n	<li>Install air purifiers in common areas and regularly change their filters.</li>\n	<li>Offer cashless payment as an option, if possible and agreed contractually.</li>\n	<li>Stay informed of the latest news from the World Health Organization.</li>\n	<li>Wherever possible, show guests what measures you have in place and understand why they matter.</li>\n</ul>\n\n<h2>Guests Responsibility:</h2>\n\n<p>We are all in this situation together, guests can also do numerous things to ensure safety and healthy measure. Guests are equally responsible for following all the rules, laws and guidelines provided by Bagpackar and Government. Guests should read local government guidelines for the area you are travelling to or have made reservations.</p>\n\n<p>It is mandatory for all the guests to monitor their health before arriving at the property. If a guest shows any minor symptoms or health risk, they are required to contact the Bagpackar support team to cancel their booking. Guests are required to cancel or postpone their bookings and travel plans if someone found COVID-19 positive in their locality.</p>\n\n<p>&nbsp;</p>\n\n<p>Guests need to read all the guidelines and travel restrictions about their travelling city or area provided by respective local government authorities. There are still travel restrictions in some states and more information can be found in COVID-19 TRAVEL INFORMATION AND ADVISORY section. According to government guidelines, arriving in listed states, travellers are required to isolate themselves for at least two weeks. Please read carefully about these guidelines before making any reservations.</p>\n\n<p>In situation like Guests develops or identifies virus symptoms before check-in or during the stay, guest should isolate themselves and inform the property as well as Bagpackar.com</p>\n\n<p>Guests are required to wear masks before arriving at the property and needed to maintain social distancing with property owners, staff and housekeepers.</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `bgpkr_wishlist`
--

CREATE TABLE `bgpkr_wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `host_id` int(10) UNSIGNED NOT NULL,
  `status` enum('1','0') NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bgpkr_wishlist`
--

INSERT INTO `bgpkr_wishlist` (`id`, `user_id`, `host_id`, `status`, `added_on`) VALUES
(1, 6, 1, '1', '2020-08-21 03:42:53'),
(2, 8, 1, '1', '2020-08-27 10:12:40'),
(3, 8, 22, '1', '2020-08-31 12:58:32'),
(4, 24, 0, '0', '2020-09-02 07:28:36'),
(5, 18, 37, '0', '2020-09-08 19:29:58'),
(6, 18, 22, '0', '2020-09-08 20:03:19'),
(7, 18, 1, '1', '2020-09-09 03:36:14'),
(8, 25, 1, '1', '2020-09-09 17:51:24'),
(9, 25, 36, '1', '2020-09-09 17:51:27'),
(10, 3, 52, '0', '2020-09-12 07:31:05'),
(11, 4, 58, '1', '2020-09-23 18:58:04'),
(12, 3, 109, '0', '2020-10-10 08:44:34'),
(13, 18, 43, '0', '2020-10-13 19:57:22'),
(14, 18, 34, '1', '2020-10-13 20:01:15'),
(15, 31, 174, '1', '2020-11-13 09:55:13'),
(16, 35, 182, '1', '2020-11-27 09:28:11'),
(17, 3, 183, '1', '2021-02-12 05:58:02'),
(18, 34, 36, '1', '2021-02-17 16:23:13'),
(19, 30, 109, '1', '2021-04-13 05:50:53'),
(20, 30, 183, '1', '2021-04-13 05:51:00'),
(21, 3, 174, '1', '2021-04-13 05:51:33'),
(22, 6, 109, '1', '2021-04-13 05:56:24'),
(23, 6, 183, '1', '2021-04-13 05:56:25'),
(24, 6, 174, '1', '2021-04-13 05:56:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgpkr_about_us`
--
ALTER TABLE `bgpkr_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_admin`
--
ALTER TABLE `bgpkr_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bgpkr_all_amenities`
--
ALTER TABLE `bgpkr_all_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_all_placetypes`
--
ALTER TABLE `bgpkr_all_placetypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_booking`
--
ALTER TABLE `bgpkr_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bgpkr_business_travel`
--
ALTER TABLE `bgpkr_business_travel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_cancel_refund`
--
ALTER TABLE `bgpkr_cancel_refund`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_career`
--
ALTER TABLE `bgpkr_career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_chat`
--
ALTER TABLE `bgpkr_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_chat_block_users`
--
ALTER TABLE `bgpkr_chat_block_users`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `bgpkr_country_list`
--
ALTER TABLE `bgpkr_country_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_covid19_guidelines`
--
ALTER TABLE `bgpkr_covid19_guidelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_discover`
--
ALTER TABLE `bgpkr_discover`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `bgpkr_help_support`
--
ALTER TABLE `bgpkr_help_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_host_complete_status`
--
ALTER TABLE `bgpkr_host_complete_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`);

--
-- Indexes for table `bgpkr_host_government_id`
--
ALTER TABLE `bgpkr_host_government_id`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`);

--
-- Indexes for table `bgpkr_host_monthly_payment`
--
ALTER TABLE `bgpkr_host_monthly_payment`
  ADD PRIMARY KEY (`h_m_id`);

--
-- Indexes for table `bgpkr_host_placetype`
--
ALTER TABLE `bgpkr_host_placetype`
  ADD PRIMARY KEY (`host_id`);

--
-- Indexes for table `bgpkr_host_place_images`
--
ALTER TABLE `bgpkr_host_place_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`);

--
-- Indexes for table `bgpkr_host_unavailable_date`
--
ALTER TABLE `bgpkr_host_unavailable_date`
  ADD PRIMARY KEY (`id`),
  ADD KEY `host_id` (`host_id`);

--
-- Indexes for table `bgpkr_most_popular`
--
ALTER TABLE `bgpkr_most_popular`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `bgpkr_newsletter`
--
ALTER TABLE `bgpkr_newsletter`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `bgpkr_notification`
--
ALTER TABLE `bgpkr_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_payment`
--
ALTER TABLE `bgpkr_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `bgpkr_popular_destination`
--
ALTER TABLE `bgpkr_popular_destination`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `bgpkr_privacy_policy`
--
ALTER TABLE `bgpkr_privacy_policy`
  ADD PRIMARY KEY (`privacy_id`);

--
-- Indexes for table `bgpkr_referral`
--
ALTER TABLE `bgpkr_referral`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `bgpkr_referral_amount`
--
ALTER TABLE `bgpkr_referral_amount`
  ADD PRIMARY KEY (`rf_id`);

--
-- Indexes for table `bgpkr_referral_program`
--
ALTER TABLE `bgpkr_referral_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_review_rating`
--
ALTER TABLE `bgpkr_review_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_stay_home`
--
ALTER TABLE `bgpkr_stay_home`
  ADD PRIMARY KEY (`sh_id`);

--
-- Indexes for table `bgpkr_terms_condition`
--
ALTER TABLE `bgpkr_terms_condition`
  ADD PRIMARY KEY (`terms_id`);

--
-- Indexes for table `bgpkr_top_rated`
--
ALTER TABLE `bgpkr_top_rated`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `bgpkr_users`
--
ALTER TABLE `bgpkr_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `bgpkr_why_host`
--
ALTER TABLE `bgpkr_why_host`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bgpkr_wishlist`
--
ALTER TABLE `bgpkr_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bgpkr_about_us`
--
ALTER TABLE `bgpkr_about_us`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_admin`
--
ALTER TABLE `bgpkr_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_all_amenities`
--
ALTER TABLE `bgpkr_all_amenities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `bgpkr_all_placetypes`
--
ALTER TABLE `bgpkr_all_placetypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `bgpkr_booking`
--
ALTER TABLE `bgpkr_booking`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `bgpkr_business_travel`
--
ALTER TABLE `bgpkr_business_travel`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_cancel_refund`
--
ALTER TABLE `bgpkr_cancel_refund`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_career`
--
ALTER TABLE `bgpkr_career`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_chat`
--
ALTER TABLE `bgpkr_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_chat_block_users`
--
ALTER TABLE `bgpkr_chat_block_users`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bgpkr_country_list`
--
ALTER TABLE `bgpkr_country_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;
--
-- AUTO_INCREMENT for table `bgpkr_covid19_guidelines`
--
ALTER TABLE `bgpkr_covid19_guidelines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_discover`
--
ALTER TABLE `bgpkr_discover`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `bgpkr_host_complete_status`
--
ALTER TABLE `bgpkr_host_complete_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `bgpkr_host_government_id`
--
ALTER TABLE `bgpkr_host_government_id`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=187;
--
-- AUTO_INCREMENT for table `bgpkr_host_monthly_payment`
--
ALTER TABLE `bgpkr_host_monthly_payment`
  MODIFY `h_m_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Monthly Payment ID', AUTO_INCREMENT=1526;
--
-- AUTO_INCREMENT for table `bgpkr_host_placetype`
--
ALTER TABLE `bgpkr_host_placetype`
  MODIFY `host_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'property id', AUTO_INCREMENT=192;
--
-- AUTO_INCREMENT for table `bgpkr_host_place_images`
--
ALTER TABLE `bgpkr_host_place_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;
--
-- AUTO_INCREMENT for table `bgpkr_host_unavailable_date`
--
ALTER TABLE `bgpkr_host_unavailable_date`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=866;
--
-- AUTO_INCREMENT for table `bgpkr_most_popular`
--
ALTER TABLE `bgpkr_most_popular`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `bgpkr_newsletter`
--
ALTER TABLE `bgpkr_newsletter`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `bgpkr_notification`
--
ALTER TABLE `bgpkr_notification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `bgpkr_payment`
--
ALTER TABLE `bgpkr_payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `bgpkr_popular_destination`
--
ALTER TABLE `bgpkr_popular_destination`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `bgpkr_privacy_policy`
--
ALTER TABLE `bgpkr_privacy_policy`
  MODIFY `privacy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_referral`
--
ALTER TABLE `bgpkr_referral`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'R Id';
--
-- AUTO_INCREMENT for table `bgpkr_referral_amount`
--
ALTER TABLE `bgpkr_referral_amount`
  MODIFY `rf_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bgpkr_referral_program`
--
ALTER TABLE `bgpkr_referral_program`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_review_rating`
--
ALTER TABLE `bgpkr_review_rating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_stay_home`
--
ALTER TABLE `bgpkr_stay_home`
  MODIFY `sh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `bgpkr_terms_condition`
--
ALTER TABLE `bgpkr_terms_condition`
  MODIFY `terms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_top_rated`
--
ALTER TABLE `bgpkr_top_rated`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `bgpkr_users`
--
ALTER TABLE `bgpkr_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `bgpkr_why_host`
--
ALTER TABLE `bgpkr_why_host`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bgpkr_wishlist`
--
ALTER TABLE `bgpkr_wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bgpkr_host_complete_status`
--
ALTER TABLE `bgpkr_host_complete_status`
  ADD CONSTRAINT `bgpkr_host_complete_status_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `bgpkr_host_placetype` (`host_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bgpkr_host_government_id`
--
ALTER TABLE `bgpkr_host_government_id`
  ADD CONSTRAINT `bgpkr_host_government_id_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `bgpkr_host_placetype` (`host_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bgpkr_host_place_images`
--
ALTER TABLE `bgpkr_host_place_images`
  ADD CONSTRAINT `bgpkr_host_place_images_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `bgpkr_host_placetype` (`host_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bgpkr_host_unavailable_date`
--
ALTER TABLE `bgpkr_host_unavailable_date`
  ADD CONSTRAINT `bgpkr_host_unavailable_date_ibfk_1` FOREIGN KEY (`host_id`) REFERENCES `bgpkr_host_placetype` (`host_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
