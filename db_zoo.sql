-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2020 at 09:08 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_animal`
--

CREATE TABLE `db_animal` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_animal`
--

INSERT INTO `db_animal` (`id`, `name`, `description`, `avatar`, `category_id`) VALUES
(0, 'corgi 1', 'pop', 'bird1.jpg', 1),
(1, 'corgi 2', 'pop', 'bird2.jpg', 1),
(2, 'corgi 2', 'pop', 'bird3.jpg', 1),
(3, 'corgi 2', 'pop', 'horse1.jpg', 2),
(4, 'horse', 'pop', 'horse2.jpg', 2),
(5, 'corgi 3', 'pop', 'deer.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `db_category`
--

CREATE TABLE `db_category` (
  `id` int(11) NOT NULL,
  `species_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_category`
--

INSERT INTO `db_category` (`id`, `species_name`, `description`) VALUES
(1, 'Birds', ''),
(2, 'Horse', ''),
(3, 'Deer', '');

-- --------------------------------------------------------

--
-- Table structure for table `db_event`
--

CREATE TABLE `db_event` (
  `id` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `event_photo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_event`
--

INSERT INTO `db_event` (`id`, `title`, `detail`, `date`, `event_photo`, `description`) VALUES
(1, 'Halloween', '$50 Gift Vouchers To Be Won\r\nCome dressed in your most terrifying outfit on Halloween Horror nights. Get spotted by us and you win a $50 Wildlife Reserves Singapore gift voucher!  \r\nThere’ll be one winner on each of the 11 nights. Plus, all winners will enter a final round of judging where the grand winner will win attractive prizes\r\nEvent Highlights\r\n– Train of Terror *more scares!\r\n– Haunted Forest Giant’s Trail *new bat cave!\r\n– Singapore Zoo Haunted Village *new!\r\n– Ghostly F&B Delights\r\n– Scare Actors Galore', '2020-10-31', 'halloween.jpg', 'Dress To Scare!'),
(2, 'New Year Event', 'Take your family adventure to these beautiful reserves and wildlife parks. Featuring one of the world’s largest rainforest exhibits, the Singapore Zoo is home to exotic animals from around the world – from Asia to the frozen Tundra – that roam free in open, natural habitats. See lions, cheetahs, zebras roam the savannahs of Wild Africa and observe them nocturnally in the Night Safari. Enjoy fun animal feedings and shows, ride on a giant elephant and meet the giant pandas. If you are feeling aquatically adventurous take a ride on the River Safari where you can explore the Congo, Nile or Ganges including their colourful and exotic arrays of fish. Jurong Bird Park, Asia’s largest bird park, is a haven for close to 3,500 birds across 400 species, famed for its large and immersive walk-in aviaries such as Lory Loft, Jungle Jewels and the Waterfall Aviary.\r\nWhat are the most popular attractions?\r\nThese reserves offer some of the most incredible wildlife experiences on the planet. Not only can you see animals roam free in this beautiful park, the Singapore Zoo features the largest rainforest and the first safari park for nocturnal animals.', '2021-01-01', 'newyear.jpg', 'Come and Join us this special Event!'),
(3, 'Christmas', 'Head on over to The Singapore Zoo for their inaugural Christmas Fair! Indulge in festive food and drinks, and do some last-minute Christmas gift shopping at pop-ups from local artisans – shop everything from potted plants and home decor to wine and fashion! Plus for every pair of Sci-sational Christmas Show tickets and $10 spent at the Christmas Fair, you’ll receive one entry into the lucky draw to win prizes worth up to $200 – there will be 5 lucky winners!', '2020-12-24', 'noel.jpg', 'The Christmas Fair Event');

-- --------------------------------------------------------

--
-- Table structure for table `db_feedback`
--

CREATE TABLE `db_feedback` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_gallary`
--

CREATE TABLE `db_gallary` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `fileAddress` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_gallary`
--

INSERT INTO `db_gallary` (`id`, `name`, `description`, `fileAddress`, `shortDescription`, `date`) VALUES
(1, 'Singapore Zoo', 'Located on the north-western side of the island, the Singapore Zoo is a haven for wondrous wildlife and a must-visit for animal lovers.\r\n\r\nThis beloved establishment first opened its gates to the public in 1973, and has since become one of the best rainforest zoos in the world.\r\n\r\nBesides being home to over 2,800 animals from 300 species—including crocodiles, Malayan tapirs and white tigers—the zoo has won a trove of international and local awards.\r\n\r\nThese include plaudits from Forbes Traveler as one of the best zoos in the world, the Asian Attraction Awards for Most Popular Attraction in the Wildlife Park category and the STB 22nd Tourism Award for Best Leisure Attraction Experience of the Year. It was ranked as one of the top 3 zoos in the world by the TripAdvisor Travellers’ Choice Award in 2018.\r\n\r\nTake a walk on the wild side with us and discover what the Singapore Zoo has to offer.\r\n\r\nWondrous wildlife\r\n\r\nAs you stroll through the Singapore Zoo’s 11 zones, you’re bound to find myriad opportunities for unforgettable encounters with its inhabitants. The amazing creatures you’ll find here make their homes in open enclosures, designed to resemble their natural habitats.\r\n\r\nBefriend the grey kangaroos and wallabies at the Australasia exhibit, get up close to the adorable lemurs and sloths of Fragile Forest and marvel at the majestic lions and zebras of Wild Africa.\r\n\r\nVarious opportunities for up-close encounters abound at the zoo, including behind-the-scenes insights on the Wild Discoverer Tour, breakfast with wildlife and feeding sessions with animals like giraffes and elephants.\r\n\r\nIf you’re looking to nurture a love for nature in your children, sign up for the Junior Zoo Keeper camp, a full-day session that’ll give your child the satisfaction of nurturing wildlife.\r\n\r\nOther immersive experiences include multi-day family camps that’ll have you learning about animals by day and sleeping under the stars by night.\r\n\r\nSpectacular shows\r\n\r\nAll the zoo’s a stage, and the animals are the star performers. Spectacular shows abound at the Singapore Zoo that’re bound to enchant and educate in equal measure.\r\n\r\nWatch Californian sea lions showing off their agility at the Splash Safari, learn amazing facts about our domesticated companions at Animal Friends and befriend the gentle giants of the Elephant Presentation.\r\n\r\nIf your family’s planning an all-day visit, be sure to drop by Rainforest Lumina, a stunning display of light, sound and spectacle that’s bound to make an impression on your little ones. Join the adorable mascots of the Creature Crew, as they fight to save the rainforest in a multimedia night walk that takes places across 10 interactive zones.\r\n\r\nSee and Do\r\n\r\nKidzworld\r\n\r\nGo on an animal-themed romp with your entire family at Kidzworld, which features myriad activities like a water playground, rope course and pony rides.\r\n\r\nAh Meng Kitchen\r\n\r\nFeeling peckish? Drop by Ah Meng Kitchen for a taste of authentic local dishes like nasi lemak (rice dish cooked in coconut milk, served with an array of side dishes) and laksa (spicy coconut milk-based noodle soup).\r\n\r\nKeepers’ Chit Chat\r\n\r\nTo step into the shoes of a zookeeper, sign up for the Keepers’ Chit Chat—where you’ll hear charming anecdotes about the quirks and habits of the zoo’s animals.\r\n\r\nSingapore Zoo Gift Shop\r\n\r\nThe adorable plush toys and nature-themed mementos at the zoo’s gift shops make great souvenirs to bring home.\r\n\r\nhttps://www.visitsingapore.com/en_ph/see-do-singapore/nature-wildlife/fun-with-animals/singapore-zoo/', '2010110134121.1.jpg-2010110134121.2.jpg-2010110134121.3.jpg', 'Get up close with animals of all stripes, and walk on the wild side when you visit the Singapore Zoo', '201011013412'),
(2, 'Jurong Bird Park', 'For an up-close encounter with some of our prettiest and rarest feathered friends, step into Jurong Bird Park.\r\n\r\nSpread across 20.2 hectares in a western corner of Singapore, this sprawling park is Asia’s largest, with a collection of over 5,000 birds from 400 species.\r\n\r\nYou’ll meet the many feathered residents during daily feeding sessions, even glimpsing elusive birds like the crested guinea fowl, iridescent starling and turaco.\r\n\r\nColourful attractions\r\n\r\nDon’t miss the Waterfall Aviary, one of the world’s largest walk-in aviaries, home to more than 600 birds and a 30-metre-high waterfall.\r\n\r\nThere are other star attractions at this sprawling park, including the world’s largest walk-in lory flight aviary at over nine stories high, where you’ll get close to 15 colourful lory species, and the impressive Penguin Coast where you’ll find many species of these flightless birds.\r\n\r\nThere is also Flamingo Lake with hundreds of these strutting birds, and nearby Pelican Cove, with the world’s most complete collection of pelicans.\r\n\r\nWinged wonders\r\nBe entertained by majestic creatures of flight. Witness the heat of the hunt as mighty eagles, falcons and hawks show off their moves during the Kings of the Skies Show, or be part of the flock at the High Flyers Show.\r\n\r\nFamilies hoping to instill a love of nature in their little ones should encourage their children to make some feathered friends at Lunch With Parrots. Alternatively, drop by Birdz of Play, the bird-themed water playground, for a soaking good time under the giant tipping bucket, zipping across the Flying Fox and even arcade games.\r\n\r\nhttps://www.visitsingapore.com/en_ph/see-do-singapore/nature-wildlife/fun-with-animals/jurong-bird-park/', '2010110133152.1.jpg-2010110133152.2.jpg', 'Jurong Bird Park has almost every species to impress avian lovers, along with fun exhibits', '201011013315'),
(3, 'Jurong Lake Gardens', 'Nestled in the west of Singapore just a five minutes walk away from Lakeside MRT Station—and a twenty-minute drive from Singapore’s city centre—Jurong Lake Gardens is a must-visit for nature lovers of all stripes.\r\n\r\nThis lush, 90-hectare space is the third and newest of Singapore’s national gardens. Its first zone—Lakeside Garden—opened in April 2019, with the remaining two zones of Chinese Garden and Japanese Garden opening progressively from 2021 onwards.\r\n\r\nNature walks to remember\r\n\r\nAs you explore the grounds of this beautiful garden, you’ll find yourself surrounded by nature in all its verdant glory. Jurong Lake Gardens is home to thriving plant life, fauna and a whole host of memorable green spaces.\r\n\r\nExplore the golden fields of The Grasslands—the perfect location for an Instagram snap— or be enchanted by the beauty of Alstonia Island, a flooded island that shares traits with a freshwater swamp forest.\r\n\r\nIf you’re looking for a quiet stroll, you can spend time taking it slow on the Rasau Walk—a meandering boardwalk along the water’s edge—or head off the beaten path along Neram Streams, a series of naturalised streams surrounded by aquatic plants and dragonflies.\r\n\r\nAs you stroll through the reserve, keep your eyes peeled for the squirrels, long tail macaques and smooth-coated otters that have made the gardens their home. The gardens are also home to a wide variety of butterfly species, from Plain Tiger butterflies to Chestnut Bobs.\r\n\r\nFun for the entire family\r\nA family having fun at the Forest Ramble nature-themed play space in Jurong Lake Gardens\r\nBesides being a haven for nature lovers, Jurong Lake Gardens is the ideal retreat for families.\r\n\r\nThe 2.3-hectare Forest Ramble is the largest nature-themed play space in the heartlands, and boasts 13 distinct installations for children. These range from slides and swings to suspended bridges and miniature trampolines in the shape of lily pads.\r\n\r\nOther attractions include Clusia Cove—a charming play area that’s been built to simulate a coastal shore, with low sandy dunes and shallow water for little ones to romp in.\r\n\r\nhttps://www.visitsingapore.com/en_ph/see-do-singapore/nature-wildlife/parks-gardens/jurong-lake-gardens/', '2010110135503.1.jpg-2010110135503.2.jpg', 'Discover a paradise of greenery for families and nature lovers alike at Jurong Lake Gardens.', '201011013550'),
(4, 'Hiking trails in Singapore', 'For trails with a view\r\nMacRitchie Reservoir Park TreeTop Walk\r\nMacRitchie Reservoir Park\r\n\r\nPanoramic views of the forest and the thrill of walking at 25 metres above ground are all part of the experience when you traverse the TreeTop Walk, a 250-metre-long freestanding suspension bridge. \r\n\r\nSee first-hand the layers of the rainforest, from the ground all the way to the canopy and the emergent layer of trees, when you take on this scenic seven-kilometre-long roundtrip to the bridge. From the carpark at Venus Drive, it’s a three- to four-hour hike—do note that the TreeTop Walk only allows access from one direction.\r\n\r\nBird-watchers, take the path that leads to the seven-storey-tall Jelutong Tower when you reach the fork at Sime Track. From atop this tower, look out for the chestnut-bellied malkoha or the orange-bellied flowerpecker, among the wide variety of birds that reside in the MacRitchie area. The tower also offers a breathtaking view of MacRitchie Reservoir.\r\n\r\nMacRitchie Reservoir Park. Along Lornie Road, Singapore 298735.\r\nDaily 7am-7pm.\r\n\r\nTreeTop Walk. 601 Island Club Road, Singapore 578775.\r\nTue-Fri 9am-5pm; Sat & Sun 8.30am-5pm.\r\n\r\nAerial View of Southern Ridges Singapore\r\nThe Southern Ridges\r\n\r\nKeep your camera on hand when you hike the photogenic ten-kilometre-long network of trails known as the Southern Ridges. The route starts at HarbourFront Mass Rapid Transit (MRT) station and takes three to five hours, stretching through Mount Faber Park, Telok Blangah Hill and HortPark before ending at Kent Ridge Park.\r\n\r\nSoak in the scenic views of our skyline and the Southern Islands at the peak of Mount Faber Park, which is also where you can take photos with the Merlion sculpture—one of seven that dot the island.\r\n\r\nFor Instagram-worthy pictures, we definitely recommend Henderson Waves, the highest pedestrian bridge in Singapore. This soaring wood and steel structure is also an ideal venue for a romantic night stroll, as it’s majestically illuminated by glowing LED lights from 7pm to 7am.\r\n\r\nLong walkways that offer a bird\'s-eye view of the forest canopy await at the Forest Walk at Telok Blangah Hill Park, as you continue along the trail. \r\n\r\nInstagrammers, here’s why it’s worth it to trek further and cross Alexandra Road into HortPark: terraced and themed gardens filled with blooms and lush greenery that’ll be your backdrops for selfies. End your trek here if you’re feeling tired, or continue onward to HortPark and Kent Ridge Park, where the Canopy Walk will take you through the trees of a secondary forest.\r\n\r\nThe Southern Ridges. Henderson Road, Mount Faber Park, Telok Blangah Hill Park, Singapore 099203.\r\nDaily 24hrs.\r\n\r\nUp close with wildlife\r\nTrail along the Sungei Buloh Wetland Reserve\r\nSungei Buloh Wetland Reserve\r\n\r\nEnjoy an up-close look at mud lobsters, tree-climbing crabs and monitor lizards when you stroll along the 500-metre-long boardwalk of the mangrove swamps in Sungei Buloh Wetland Reserve, which runs parallel to the Wetland Centre. \r\n\r\nTurn your views to the sky when you head to the Migratory Bird Trail just a short walk away. From behind the five observation hides, two platforms and the 18-metre-tall Aerie Tower featured along the trail, you can quietly observe migratory birds such as the Common Redshank and Pacific Golden Plover, which make this reserve their sanctuary from September to March.\r\n\r\nKingfishers, herons and egrets also visit the reserve regularly. But don’t just read the signboards that are placed around the reserve, hear about the wildlife from certified nature guides during the free guided walks, held every Saturday at 9.30am (except on Public Holidays and the eve of Public Holidays).\r\n\r\nSungei Buloh Wetland Reserve. 301 Neo Tiew Crescent, Singapore 718925. +65 6794 1401.\r\nDaily 7am-7pm.\r\n\r\nTwo hikers along along Chek Jawa Wetlands trail\r\nChek Jawa Wetlands\r\n\r\nA breezy boat ride to Pulau Ubin, Singapore’s most famous offshore island, will soothe your senses before you start your hike. From Ubin Jetty, it’s a 40-minute walk to Chek Jawa. Alternatively, rent a van or bicycle from the main village for a quicker journey.\r\n\r\nFor a chance to catch a glimpse of the wild boars or long-tailed macaques that occasionally roam the area, your best bet is at the gate to Chek Jawa. \r\n\r\nThe 1.1-kilometre boardwalk starts from the coastal forest—try to spot fruits such as durian and mangosteen hanging from the trees—before transitioning to the mangrove path. Put in that extra effort and climb up the 21-metre-tall Jejawi Tower, located at the entrance of the mangrove forest, for a panoramic view of Pulau Ubin. \r\n\r\nBe prepared to work up a sweat as you walk along the section of unsheltered boardwalk that extends out into shallow water. There, aim your cameras at the coast where mudskippers, fiddler crabs, various anemones and corals can be seen when the sea recedes during low tide (0.5m and below).\r\n\r\nChek Jawa Wetlands. Pulau Ubin, Singapore.\r\nDaily 8.30am-6.00pm.\r\nFor tide timings to plan your visit, click here.\r\n\r\nHike through history\r\nHiker climbing a trail at Bukit Timah Nature Reserve\r\nPhoto by NParks\r\nBukit Timah Nature Reserve\r\n\r\nTake the path less travelled when you venture into the dense vegetation of Bukit Timah Nature Reserve, where remnants of a once teeming kampong (Malay for \'village\') are hidden. \r\n\r\nStarting from a path off Hindhede Drive, a few minutes from the Visitor Centre, walk past fragments of antiquated structures that were commonplace in early 20th century kampongs. \r\n\r\nThe artefacts include a stone well, an outhouse and parts of a yesteryear kitchen, which are gradually being overtaken by creepers. You’ll also chance upon a stream that was once used by the villagers for bathing and washing laundry.\r\n\r\nBukit Timah Nature Reserve. Hindhede Drive, Singapore 589318.\r\nDaily 7am-7pm.\r\n\r\nhttps://www.visitsingapore.com/en_ph/editorials/hiking-trails-in-singapore/', '2010110139094.1.jpg-2010110139094.2.jpg-2010110139094.3.jpg-2010110139094.4.jpg-2010110139094.5.jpg-2010110139094.6.jpg', 'Away from the Lion City’s skyscrapers and shopping malls, there is a jungle.', '201011013909'),
(5, 'Walk on the wild side in Singapore', 'Known as a city in a garden, our nation’s natural landscape intertwines seamlessly with our modern spaces and futuristic architecture.\r\n\r\nBeautiful parks, secluded island sanctuaries and thriving mangroves are just some of natural splendor you’ll find in Singapore. Take a walk on the wild side, and discover nature unbound in the Lion City.\r\n\r\nAerial view of the Singapore Botanic Gardens learning forest in the evening\r\nPulau Ubin\r\nQuarry lake at Pulau Ubin\r\nAn island sanctuary that’s home to diverse ecosystems and wildlife, Pulau Ubin makes for a perfect getaway.\r\n\r\nTake a bumboat from Changi Point Ferry Terminal and make your way to this island off Singapore’s Southern Coast. You’ll be able to spend the day cycling (bicycles are available for rent near the jetty), hiking and exploring off the island’s beaten paths.\r\n\r\nIf you’re looking to snap a photo, birds eye views can be found a short hike up Puaka Hill, or atop Jejawi Tower.\r\n\r\nBe sure to check out the jewel of the island—the Chek Jawa Wetlands, along the southeastern hook of the island. This miniature marvel of an ecosystem is home to seagrass lagoons, rocky beaches and verdant mangroves. Keep an eye out for squids, fiddler crabs and mantis shrimps as you explore its six habitats.\r\n\r\nHow to get there: Take a 10min bumboat from Changi Point Ferry Terminal (S$3 for a one-way trip)\r\n\r\nChangi Point Ferry Terminal. 51 Lorong Bekukong, Singapore 499172. +65 6542 7944.\r\n\r\nSungei Buloh Wetland Reserve\r\nShot of the observation pod and coastal trail at Sungei Buloh Wetland Reserve\r\nAn ecological wonderland filled with fascinating fauna, this vast mangrove forest is a must-visit for animal lovers.\r\n\r\nSingapore’s first ASEAN Heritage Park is home to mudskippers, crabs and shellfish, as well as otters and even crocodiles.\r\n\r\nKeep your cameras and binocular trained on the tree line, and you may be in for a feathery surprise. Sungei Buloh Wetland Reserve is a stopover point for rare migratory birds like the Mongolian Plover and the Asian Dowitcher.\r\n\r\nSungei Buloh Wetland Reserve. 301 Neo Tiew Crescent, Singapore 718925. +65 6794 1401.\r\nDaily 7am-7pm.\r\n\r\nLabrador Nature Reserve\r\nA family of four sightseeing on the Labrador Coastal Walk\r\nHistory and nature intertwine at Labrador Nature Reserve, a natural habitat that was once the site of a fort dating to World War II.\r\n\r\nLocated along the 10-kilometre stretch of greenery known as the Southern Ridges, this idyllic site overlooks a picturesque, cliff-side view of the sea.\r\n\r\nAs you explore this tranquil space, you’ll come across the remnants of World War II armaments, like a machine gun post and various artillery pieces.\r\n\r\nThe pink Berlayer Beacon— which was used to navigate boats in the past—can be found on the southernmost end of the park, and makes for a great photo at dusk.\r\n\r\nNature trails like the Coastal Path & Nature Path are ideal for explorers looking to work up a sweat, and the Bukit Chermin Boardwalk makes for a great view of the coastline.\r\n\r\nLabrador Nature Reserve. Labrador Villa Road, Singapore 119187.\r\nDaily 7am-7pm.\r\n\r\nSingapore Botanic Gardens\r\nThe Bandstand at the Singapore Botanic Gardens\r\nPhoto by Singapore Botanic Gardens\r\nOne of our island’s most beloved green spaces, the Singapore Botanic Gardens is a UNESCO World Heritage Site is a floral fantasy for nature lovers.\r\n\r\nThis pristine 60-acre space was first established in 1859, and is a popular haunt of local families, nature lovers and joggers looking to unwind outdoors.\r\n\r\nYou’ll be able to spot swans and terrapins while relaxing in the pavilions at the Swan Lake, relax amidst the jade green ponds of the Sundial Garden and admire the 60,000 orchid plants of the National Orchid Gardens.\r\n\r\nIf you’re lucky, you’ll even be able to catch a live music performance at the Shaw Symphony Stage, which occasionally hosts performances by the Singapore Symphony Orchestra.\r\n\r\nSingapore Botanic Gardens. 1 Cluny Road, Singapore 259569. 1800 471 7300.\r\nDaily 5am-midnight.\r\n\r\nCentral Catchment Nature Reserve\r\nMacRitchie Reservoir is nature’s playground for those who love the great outdoors.\r\nLocated in the heart of our city, the Central Catchment Nature Reserve spans 2,000 hectares of dense forest, and a 20-kilometre network of trails and boardwalks winding through lush greenery.\r\n\r\nVarious species of animals make their homes in this magnificent green space, and if you’re lucky, you may be able to spot a lesser mousedeer, the large-eyed slow loris or even the rare banded leaf monkey.\r\n\r\nOne of the key attractions here—the Macritchie Treeptop Walk—is a soaring suspension bridge that boasts a panoramic view of the forest canopy.\r\n\r\nFeel the wind in your hair and warm sunlight on your face as you stroll along this 250-metre span of bridge, connecting Bukit Pierce to Bukit Kalang.\r\n\r\nIf you’re an avid birdwatcher, you may want to climb to the top of Jelutong Tower, a seven-deck observation point that will give you an unimpeded view of the forest canopy.\r\n\r\nHow to get to the Macritchie Treetop Walk: Take the bus (52, 132, 163) and alight outside the ESSO station at Venus Drive. The entrance is there—just follow the Petaling Trail for a 6km round trip.\r\n\r\nTreeTop Walk. 601 Island Club Road, Singapore 578775. Tue-Fri 9am-5pm; Sat & Sun 8.30am-5pm.\r\n\r\nhttps://www.visitsingapore.com/en_ph/editorials/walk-on-the-wild-side/', '2010110142435.1.jpg-2010110142435.2.jpg-2010110142435.3.jpg', 'Despite its soaring skyscrapers and bustling cityscape, Singapore is more than just a concrete jungl', '201011014243'),
(6, 'The Southern Ridges', 'For those who want to get away from—and above—the city and a little closer to nature, the Southern Ridges is a great place to explore. As a bonus, you will also get one of the best panoramic views of the city, harbour and the Southern Islands.\r\n\r\nThe Southern Ridges is a ten-kilometre stretch of green open spaces spanning the hills of some of Singapore’s most popular parks and gardens, connected by picturesque ridges and pathways.\r\n\r\nImagine walking across a bridge 36-metres above the road connecting two hilltops. You can perform this exhilarating high-wire act at Henderson Waves, a distinctive wave-like structure consisting of a series of undulating curved \'ribs\', also Singapore’s highest pedestrian bridge.\r\n\r\nThe Southern Ridges is made up of Mount Faber Park, Telok Blangah Hill Park, HortPark, Kent Ridge Park and Labrador Nature Reserve.\r\n\r\nBird-watching enthusiasts will be able to catch their favourite creatures in their natural habitat along these trails, while photographers will never run out of picture opportunities of the beautiful flora and fauna found here.\r\n\r\nvisitsingapore.com/en_ph/see-do-singapore/nature-wildlife/parks-gardens/the-southern-ridges/', '2010110143516.1.jpg', 'Walk amongst the trees at this ten-kilometre stretch of connecting trails, home to diverse flora and', '201011014351'),
(7, 'A 2-day guide for nature lovers', 'DAY 1: ISLAND LIFE\r\n\r\n1 MacRitchie Nature Trail & Reservoir Park\r\nIn the morning, head over to MacRitchie Reservoir Park, a water catchment area in the heart of Singapore that’s home to lush rainforests. “Rainforests are synonymous to the equator, and the oldest rainforest in this region is here,” Subaraj says with pride.\r\n\r\n“The diversity is amazing. A lot of visitors to Singapore from the West do not have access to rainforests so they may be seeing it for the first time,” says Subaraj. If you’re lucky, you’ll cross paths with long tailed macaque monkeys and flying lemurs.\r\n\r\n\r\n2 Sungei Buloh Wetland Reserve\r\nSpend your afternoon with the birds: Subaraj recommends bird watching at Sungei Buloh Wetland Reserve. We recommend that you spend at least half a day at this ASEAN Heritage site, home to diverse inhabitants such as watersnakes, herons and otters. The wetland reserve is also a stopover point for migratory birds travelling from Siberia to Australia. If you’re visiting in September to March, you might spot the rare Blacktailed Godwit migrating.\r\n\r\n“Sungei Buloh is the last feeding ground on these birds’ migratory route,” Subaraj shares. “Some of these birds travel over twelve thousand kilometres to move between their winter and summer grounds.”\r\n\r\n\r\n3 Singapore Botanic Gardens\r\nSpend your evening relaxing at the Singapore Botanic Gardens. Home to a diverse variety of flora and birds, this UNESCO World Heritage site is located in the heart of Singapore is easily accessible to the public, and its colonial buildings now house top-notch restaurants. Make it a point to visit the Learning Forest, a lush habitat that’s home to some of the tallest tree species in Southeast Asia—Subaraj helped develop this area.\r\n\r\n\r\nDAY 2: A BOAT RIDE AWAY\r\n\r\n4 Pulau Ubin\r\nSubaraj and Pulau Ubin go way back: the eco-conservationist is one of the many nature and heritage enthusiasts that helped save this island—located just off the northeast of Singapore—from being turned into industrial and housing estates. “Pulau Ubin is [like a time capsule] of good old Singapore, as it was 40 years ago,” Subaraj shares. “Nature co-exists with humans here. You’ll find wildlife in the fruit orchards, hornbills in the villages, and grey herons in its quarries.”\r\n\r\nStart off in the wee hours of the morning, as the sun rises. If you’d like to have a quick breakfast, have a plate of nasi lemak (fragrant rice dish cooked in coconut milk and pandan leaf, accompanied by an array of side dishes like omelette, fried fish and anchovies) on the mainland, at Changi Village Food Centre. Once satisfied, hop on a bumboat to this idyllic island that’s synonymous with shrines, swamps, and a variety of flora and fauna. Cycling is a great way to explore the island at your own pace, and bicycle rental is available at the kiosks around the jetty.\r\n\r\n\r\n5 Chek Jawa\r\nOn Pulau Ubin, make your way to its southeastern hook, which is home to the Chek Jawa Wetlands. A confluence of six natural habitats, ranging from rocky beaches to seagrass lagoons, Chek Jawa is a miniature marvel of contrasting ecosystems that’s definitely worth exploring. Subaraj was one of several individuals who highlighted this unique location, but he ultimately credits the public for its preservation. “Lawmakers went to Chek Jawa and saw 700 people watching nature, so they couldn’t deny [its importance],” he recalls.\r\n\r\nTo this day, Chek Jawa remains a favourite spot for student groups, nature lovers and photographers looking to escape the city bustle.', '2010110146047.1.jpg-2010110146047.2.jpg-2010110146047.3.jpg-2010110146047.4.jpg-2010110146047.5.jpg', 'Subaraj Rajathurai takes us into the untamed areas of Singapore, to experience the ecosystems that h', '201011014604'),
(8, 'Singapore\'s iconic green spaces', 'Nature lovers and outdoor enthusiasts, escape from the city and explore Singapore’s green spaces for some tranquillity.\r\n\r\nThere’s a park or garden to explore no matter where you are in the country, so we’ve made things easy by sectioning this guide into the four main areas for you to get your fix of fresh air and lush greenery.\r\n\r\nSwan Lake at Singapore Botanic Gardens.\r\nCentral Region\r\nReplete with rare flowers, vertical gardens (aka Supertrees), and intriguing sculptures from around the world, Gardens by the Bay is a stunning park consisting of three waterfront gardens.\r\n\r\nGet a bird’s-eye view of the city from the 22-metre-high aerial walkway that links two Supertrees together, visit the world’s largest glass greenhouse or marvel at a 35-metre-tall indoor waterfall. For an unforgettable view of the Marina Bay district, be sure to check out the Supertree Observatory, located atop the tallest structure of the Supertree Grove.\r\n\r\nFrom one iconic spot to another, the Singapore Botanic Gardens is a must-visit. Recognised as a UNESCO World Heritage Site in 2015, this green space, which is more than 150 years old, features highlights such as National Orchid Garden, a gorgeous swan lake and heaps of tropical trees to please every plant enthusiast out there.\r\n\r\nTravelling with the little ones? Take them to the Jacob Ballas Children\'s Garden, which houses a farm, orchard and grove with its own streams and ponds.\r\n\r\nSuperTrees at the Gardens by the Bay. \r\nPhoto by Afur Wong\r\nHeliconia flowers at the Singapore Botanic Gardens. \r\nUp for a hike? Visit the MacRitchie Nature Trail & Reservoir Park. Complete the 11-kilometre-long nature trail and don’t miss the Treetop Walk, a 250-metre high suspension bridge that connects two of the park\'s highest points.\r\n\r\nHistory buffs, make a beeline for Fort Canning Park. Conveniently located in the heart of town, this site is home to numerous historical landmarks, such as Fort Gate, a remnant of a fortress that was built in the 19th century, and other highlights like the Spice Garden.\r\n\r\nJust a little outside of the central area are venues like Bukit Timah Nature Reserve. Take on the challenge and hike the Summit Trail to climb Singapore\'s tallest hill (it\'s 164-metres high) in this lush ASEAN Heritage Park.\r\n\r\nSouthern Region\r\nA wall with different greenery at HortPark. \r\nFurther south of Singapore, there’s Mount Faber and HortPark. These two green spots are part of a 10-kilometre-long trail called the Southern Ridges, which features structures like the Henderson Waves, the highest pedestrian bridge in Singapore, and bridges such as the Forest Walk and Canopy Walk. \r\n\r\nNorth Eastern Region\r\nSeletar Reservoir is split into two areas: Lower Seletar Reservoir Park and Upper Seletar Reservoir Park.\r\n\r\nLower Seletar Reservoir Park has highlights like the Family Bay, which consists of a performance stage, a Heritage Bridge, a bioswale rain garden, and a water play area for the young ones. There\'s also a fishing jetty that\'s usually packed with anglers hoping to catch a tilapia or two.\r\n\r\nPopular with runners, Upper Seletar Reservoir Park features several trails and landmarks such as the rocket-shaped tower, which you can climb to the top of and take in breathtaking views of the park.\r\n\r\nAerial view of the coastal walkway in Punggol Waterway. \r\nThere\'s something for everyone at Punggol Waterway, which is segmented into four zones: Nature Cove, Recreation Zone, Heritage Zone, and Green Gallery. Rent a bicycle and cycle around the park, let the kids have fun at the water playground, look out for unique birds along the waterway, or simply snap landscape photos in the evening to capture the beauty of this green heartland destination.\r\n\r\nWestern Region\r\nThe Observation Pod at Sungei Buloh Wetland Reserve. \r\nPhoto by Vincent Chong\r\nThe 87-hectare Sungei Buloh Wetland Reserve is bound to impress nature lovers with its incredible biodiversity. First discovered by a group of birdwatchers from the Malayan Nature Society in 1986, this site is home to migratory birds, crabs, mud lobsters and even crocodiles and otters.\r\n\r\nTake a stroll along the boardwalk to look at the mangroves at low tide or park yourself at one of the many observation posts found throughout the reserve to watch familiar critters in their natural habitats.\r\n\r\nTo immerse yourself in nature, pay a visit to Jurong Lake Gardens, a 90-hectare green sanctuary that comprises Lakeside Garden, the Chinese Garden, Japanese Garden and Promenade. \r\n\r\nThe latter three spaces are slated to open in 2021, but nature lovers and their families can still enjoy the great outdoors at Lakeside Garden. This verdant space is filled with play spaces like Crab Play and Heron Play, which take inspiration from various animal species.  Tidal and sand play areas are bound to keep your little ones occupied, while couples looking for a quiet stroll can take a meander along into lalang (a species of grass traditionally used to thatch roofs in Southeast Asia) fields, or along scenic waterside boardwalks.\r\n\r\nhttps://www.visitsingapore.com/en_ph/editorials/singapores-iconic-green-spaces/', '2010110148188.1.jpg-2010110148188.2.jpg-2010110148188.3.jpg-2010110148188.4.jpg-2010110148188.5.jpg', 'Nature lovers and outdoor enthusiasts, escape from the city and explore Singapore’s green spaces for', '201011014818');

-- --------------------------------------------------------

--
-- Table structure for table `db_photo_animal`
--

CREATE TABLE `db_photo_animal` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `animal_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_photo_gallary`
--

CREATE TABLE `db_photo_gallary` (
  `id` int(11) NOT NULL,
  `photo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gallary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `db_ticket`
--

CREATE TABLE `db_ticket` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_ticket`
--

INSERT INTO `db_ticket` (`id`, `name`, `type`, `price`) VALUES
(1, 'Adult', 'Adult', 120),
(2, 'Kid', 'Kid', 90);

-- --------------------------------------------------------

--
-- Table structure for table `db_user`
--

CREATE TABLE `db_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `db_user`
--

INSERT INTO `db_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_animal`
--
ALTER TABLE `db_animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `db_category`
--
ALTER TABLE `db_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_event`
--
ALTER TABLE `db_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_feedback`
--
ALTER TABLE `db_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_gallary`
--
ALTER TABLE `db_gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_photo_animal`
--
ALTER TABLE `db_photo_animal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animal_id` (`animal_id`);

--
-- Indexes for table `db_photo_gallary`
--
ALTER TABLE `db_photo_gallary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallary_id` (`gallary_id`);

--
-- Indexes for table `db_ticket`
--
ALTER TABLE `db_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_user`
--
ALTER TABLE `db_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_animal`
--
ALTER TABLE `db_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `db_category`
--
ALTER TABLE `db_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_event`
--
ALTER TABLE `db_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_feedback`
--
ALTER TABLE `db_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_gallary`
--
ALTER TABLE `db_gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `db_photo_animal`
--
ALTER TABLE `db_photo_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_photo_gallary`
--
ALTER TABLE `db_photo_gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `db_ticket`
--
ALTER TABLE `db_ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_user`
--
ALTER TABLE `db_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `db_animal`
--
ALTER TABLE `db_animal`
  ADD CONSTRAINT `db_animal_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `db_category` (`id`);

--
-- Constraints for table `db_photo_animal`
--
ALTER TABLE `db_photo_animal`
  ADD CONSTRAINT `db_photo_animal_ibfk_1` FOREIGN KEY (`animal_id`) REFERENCES `db_animal` (`id`);

--
-- Constraints for table `db_photo_gallary`
--
ALTER TABLE `db_photo_gallary`
  ADD CONSTRAINT `db_photo_gallary_ibfk_1` FOREIGN KEY (`id`) REFERENCES `db_gallary` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
