-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2026 at 11:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayurveda_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `disease_name` varchar(100) NOT NULL,
  `causes` text NOT NULL,
  `symptoms` text NOT NULL,
  `allopathy_medicine` text NOT NULL,
  `allopathy_image` varchar(255) NOT NULL,
  `traditional_medicine` text NOT NULL,
  `traditional_image` varchar(255) NOT NULL,
  `preparation_usage` text NOT NULL,
  `why_traditional` text NOT NULL,
  `side_effects` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease_name`, `causes`, `symptoms`, `allopathy_medicine`, `allopathy_image`, `traditional_medicine`, `traditional_image`, `preparation_usage`, `why_traditional`, `side_effects`) VALUES
(1, 'Asthma', 'Genetic predisposition and Exposure to allergens such as dust miles, pollen, pet dander, and smoke. Air pollution, respiratory infections, cold air, and occupational chemical exposure also trigger airway inflammation and leads to asthma.', 'Shortness of breath\r\n\r\nwheezing(means a whistling sound during breathing)\r\n\r\nchest tightness \r\n\r\npersistent coughing. ', 'Salbutamol – a bronchodilator that relaxes airway muscles and provides quick relief from asthma attacks. \r\n\r\nBudesonide – a corticosteroid inhaler that reduces airway inflammation. \r\n\r\nMontelukast – an anti-allergic medicine that prevents asthma sympt', 'Asthama_allopathy.jpeg', 'Common Name: Malabar Nut\r\nSanskrit Name: Vasaka \r\nScientific Name: Adhatoda vasica \r\n', 'Asthama_trad_medicinal.jpeg', 'The leaves of vasaka are used in ayurvedic medicine. Fresh leaves are washed and boiled in water to prepare a herbal decoction. The decoction is filtered and consumed once or twice daily. ', 'Traditional medicines use natural plant compounds that supports long term respiratory health. \r\nThey help strengthen lung function, improves immunity and reduces inflammation without chemicals. ', 'Allopathy medicine may cause side effects like trembling, nervousness, increased heart rate, headache, dizziness due to receptor stimultion. Frequent use may lead to throat irritation, hoarseness, fatigue.\r\n\r\nExcessive amount of ayurvedic medicine causes mild stomach irritation.'),
(2, 'Ear Pain ', 'Ear pain occurs due to inflammation or infection in the ear.bacterial or viral infection that leads to otitis media.Ear pain also causes due to accumulation of earwax in the ear canal,sinus infections increase pressure in the ear or injury to the ear canal or eardrum. ', 'Sharp or dull pain inside the ear\r\n\r\nDifficulty hearing\r\n\r\nFever\r\n\r\nHeadache\r\n\r\nFeeling pressure in the ear.', 'Ibuprofen – an anti-inflammatory medicine used to relieve pain. \r\n\r\nAntibiotic ear drops ', 'earpain_allopathy.jpeg', 'Common Name: Tulasi\r\nSanskrit name: Vrndavani\r\nScientific name: Ocimum sanctum\r\n', 'earpain_traditional.jpeg', 'Fresh leaves are crushed to extract juice, which is slightly warmed and two or three drops are placed in the affected ear. The antibacterial and anti-inflammatory properties of tulsi helps reduce infection and relieve pain.', 'Herbal remedies like tulsi are natural, affordable and less side effects compared to allopathy medicine. They fight with infection and improve immunity without excessive use of synthetic chemicals. ', 'Allopathy medicine(Ciprofloxacin) may cause mild burning or stinging right after application, along with itching inside the ear. They can also lead to ear discomfort, irritation, temporary dizziness.\r\n\r\nExcess use of ayurvedic medicine causes mild stomach irritation.'),
(3, 'Diabetes', 'Diabetes is a metabolic disorder caused by high blood pressure glucose levels due to insufficient insulin production or insulin resistance. There are two types of diabetes they are: \r\nType-1 diabetes: \r\nCauses: \r\nType -1 diabetes occurs when the immune system destroys the insulin means producing beta \r\ncells in the pancreas. Pancreas stops producing insulin. Without insulin glucose cannot enters \r\ninto the body cells and accumulates in the bloodstream. \r\nType-2 diabetes: \r\nCauses: \r\nType-2 diabetes occurs due to insulin resistance, where body cells do not respond properly to insulin. The pancreas produces insulin but the body cannot use it effectively. major factors \r\nleads to type-2 diabetes includes: excessive body weight(obesity), lack of physical activity, unhealthy diet, increasing age which reduces the efficiency of insulin usage in the body. \r\n', 'Frequent urination\r\n\r\nExcessive thirst\r\n\r\nFatigue\r\n\r\nBlurred vision\r\n\r\nSlow wound healing\r\n\r\nUnexplained weight loss\r\n\r\nLong term uncontrolled diabetes can damage nerves, kidney eyes and blood vessels. ', 'Metformin-reduces glucose production int the liver.\r\n\r\nGlimepiride-stimulates insulin release from the pancreas.\r\n \r\nInsulin injections-used when the body cannot produce enough insulin.', 'diabetes_allopathy.jpeg', 'Common name: Jamun/ Black plum\r\nSanskrit name: Jambuh \r\nScientific name: Syzygium Cumini\r\n ', 'diabetes_traditional.jpeg', 'Jamun seeds are widely used in ayurveda to manage diabetes. The seeds are collected from ripe fruits, dried in sunlight, and ground into a fine powder. One teaspoon of the powder is mixed with water and consumed daily.', 'Herbal remedies support natural blood sugar regulation, improves digestion and strengthen metabolism. ', 'Allopathy medicine causes nausea, diarrhea, abdominal discomfort, Loss of appetite.\r\n\r\nExcess intake of Traditional medicine causes low blood sugar and dizziness.'),
(4, 'Thyroid ', 'Thyroid disorders occur due to abnormal production of thyroid hormones by the thyroid gland and produces insufficient hormones due to autoimmune destruction of thyroid tissue. \r\nIodine deficiency also affects thyroid hormone production. ', 'Weight changes\r\n\r\nFatigue\r\n\r\nHair loss\r\n\r\nIrregular heartbeat\r\n\r\nDifficulty concentrating\r\n\r\nAffects metabolism and body temperature regulation. ', 'Levothyroxine-a (synthetic thyroid hormone used to treat hypothyroidism). ', 'Thyroid_allopathy.jpeg', 'Common name: Carum Carvi\r\nSanskrit name: Krishna Jiraka \r\nScientific name: Nigella sativa', 'Thyroid_medicinal.jpeg', 'The seeds of nigella sativa are consumed to support metabolic and hormonal balance. The seeds are powdered and mixed with honey or warm water. One teaspoon is taken daily. ', 'Traditional medicine supports natural hormone balance and improves overall metabolism. \r\nAlso provides antioxidants that protect body cells.', 'Allopathy medicine causes increased heart rate, nervousness or anxiety due to increased metabolism, excessive sweating, heat intolerance, difficulty in sleeping.\r\n\r\nExcessive intake of traditional medicine causes digestive discomfort.'),
(5, 'Diarrhea ', 'Diarrhea occurs due to infection or irritation in the gastrointestinal tract, bacterial, viral, or parasitic infection through contaminated food or water. These infections increase intestinal secretion and decrease water absorption. \r\n', 'Frequent watery stools\r\n\r\nAbdominal cramps\r\n\r\nDehydration\r\n\r\nNausea\r\n\r\nWeakness\r\n\r\nLoss of appetite.', 'Oral Rehydration Salts (ORS): prevents dehydration by replacing lost fluids and electrolytes.\r\n \r\nLoperamide: reduces intestinal movement and controls diarrhea.', 'diarrhea_allopathy.jpeg', 'Common Name: Bhandi\r\nSanskrit name: Bhandira \r\nScientific name: Clerodendrum Infortunatum ', 'diarrhea_traditional.jpeg', 'Leaves of Clerodendrum infortunatum  are used in traditional medicine for digestive \r\ndisorders. The leaves are boiled in water to prepare a herbal decoction, which is consumed in small quantities twice daily. ', 'Traditional medicines help restore digestive balance naturally and improves gut health without chemical drugs. ', 'Allopathy medicine may cause constipation, dizziness, abdominal cramps, dry mouth, fatigue.\r\n\r\nExcess consumption of traditional medicine causes mild stomach irritation. \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `medicinal_plants`
--

CREATE TABLE `medicinal_plants` (
  `id` int(11) NOT NULL,
  `plant_name` varchar(100) NOT NULL,
  `sanskrit_name` varchar(100) DEFAULT NULL,
  `scientific_name` varchar(150) DEFAULT NULL,
  `other_names` varchar(200) DEFAULT NULL,
  `benefits` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicinal_plants`
--

INSERT INTO `medicinal_plants` (`id`, `plant_name`, `sanskrit_name`, `scientific_name`, `other_names`, `benefits`, `image`) VALUES
(1, 'Snakeroot', 'Śālapaṣpā', 'Rauvolfia serpentina', 'Devil pepper, Serpentine wood, Sarpagandha, Chandrika, and snakewood', 'Widely used for balancing Vāta disorders such as:\r\nFemale reproductive disorders,\r\nGeneral body weakness and fatigue,\r\nVāta-related diseases like joint pain.\r\nIt balances Vāta and Pitta, used for \r\nStrengthening (Balya), and also\r\nAnti-inflammatory.\r\nIt is important because it is a key ingredient in many classical Ayurvedic formulations for rejuvenation and strength.', 'Rauvolfia_serpentina.jpg\r\n'),
(2, 'Sweet Flag', 'Vacā', 'Acorus calamus', NULL, 'It is a powerful herb used in neurological and digestive disorders. It is used to \r\nImproves speech and memory,Mental disorders (Unmāda), Digestive stimulant.\r\nIt also enhances brain function,Removes toxins (Āma), Stimulates digestion.\r\nIt is widely used in children for speech development and cognitive improvement.', 'Acorus_calamus.jpg'),
(3, 'Common juniper', 'Hapuṣā', 'Juniperus communis', 'Juniperberry,Juniper', 'Hapuṣā is an aromatic plant known for its strong digestive and urinary benefits.It is used for Urinary disorders, Digestive problems, Gas and bloating.It is also\r\nDiuretic (increases urine flow), Carminative, Detoxifying. It\r\nhelps cleanse the urinary system and improves metabolism.', 'Juniperus_communis_fruits.jpg'),
(4, 'False black pepper', 'Kṛmihā / Viḍaṅga ', 'Embelia ribes', 'White-flowered Embelia, Vidanga, Vavding, Nainidang', 'It is used for removing intestinal worms,\r\ncuring skin diseases, digestive cleansing,\r\nStrong anthelmintic (kills worms),\r\nDetoxifying, Improves digestion\r\nIt is very effective in children and adults for parasite infections.', 'Embelia_ribes.jpg'),
(5, 'Indrayava', 'Kutaja tree', 'Holarrhena pubescens ', 'Kalinga, Vatsaka, Indrabīja, Holarrhena antidysenterica (Latin name)', ' It is highly effective for chronic digestive disorders. It is also used for \r\nChronic diarrhea ,Fever with loose motions, Digestive issues.It has Cooling, Anti-diarrheal, Strengthens intestines properties. it is also used when diarrhea becomes long-term or severe.', 'Holarrhena_pubescens.jpg'),
(6, 'Hingu', 'Hingu', 'Ferula asafoetida', 'The other names for hingu include:\r\nFerula narthex, Asafoetida, Devil\'s dung, Food of the God, Hing.', 'Hiṅgu (asafoetida) is a powerful spice and medicine widely used in Indian households.\r\nIt is also used for Severe gas, Abdominal pain, Colic disorders. It has properties like Strong carminative, Vāta-Kapha pacifier, Antispasmodic. It is one of the best remedies for digestive disorders and gas problems.', 'Ferula_assa-foetida.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `alternate_email` varchar(100) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `alternate_email`, `profile_pic`) VALUES
(33, 'Ananya', 'ananya.b@gmail.com', '$2y$10$oxlY.eqW1mZ.1qLUu62QBe4TKhiMnGcq9xZFkReaePShP6GsJN5B.', NULL, NULL),
(34, 'Ananya', 'ananya.b@gmail.com', '$2y$10$N6ogKxkCs3k1wgAcsrFGtOvQAvphl28zGF0YzBawVQ9/EzpfpOq0e', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicinal_plants`
--
ALTER TABLE `medicinal_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medicinal_plants`
--
ALTER TABLE `medicinal_plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
