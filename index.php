<?php
// 1. Core configurations and Layout engine
require 'config.php';
include 'layout/layout.php';

// 2. Data Arrays (Explicitly defined for clean global scope access)
$countries = [
  [
    'id' => 1,
    'name' => 'Hungary',
  ],
  [
    'id' => 2,
    'name' => 'Ireland',
  ],
  [
    'id' => 3,
    'name' => 'Lithuania',
  ],
  [
    'id' => 4,
    'name' => 'Switzerland',
  ],
  [
    'id' => 5,
    'name' => 'United Kingdom',
  ]
];

$universities = [
  [
    'id' => 1,
    'country_id' => 1,
    'slug' => 'corvinus-university-of-budapest',
    'name' => 'Corvinus University of Budapest',
    'email' => 'https://www.uni-corvinus.hu/?lang=en',
    'state' => 'Budapest',
    'address' => 'Corvinus University of Budapest 1093 Budapest Fővám tér 8.',
    'img' =>  'img/university/CorvinusUniversity.jpg',
    'postcode' => '1093',
    'about' => 'Corvinus University of Budapest (for short: CORVINUS or Corvinus) is a medium-sized institution, when measured on a European scale, with a focus on economic and social sciences. The University is one of Hungary’s leading educational institutions in the field of economic and social sciences. Moreover, it is more than that: a community that is good and worthwhile to belong to.
                    Building on our over one hundred years of traditions, we are constantly developing. Together with our lecturers, researchers and colleagues, we work to make Corvinus one of the best universities in the world, and to educate the elite of societies and economies of the region here in Hungary. Our goal is that talented students do not have to choose a university abroad in order to acquire internationally recognized, competitive and marketable knowledge. Social and financial standing should not be an obstacle to learning: our best-performing students may study on the basis of excellence, free of charge.',

  ],
  [
    'id' => 2,
    'country_id' => 2,
    'slug' => 'ibat-college-dublin',
    'name' => 'IBAT College Dublin',
    'email' => 'https://www.ibat.ie/',
    'state' => 'Dublin',
    'address' => '16-19Wellington Quay, Dublin, Ireland',
    'img' =>  'img/university/IBATCollegeDublin.jpg',
    'postcode' => 'D02TX49',
    'about' => 'IBAT College Dublin is a further education institution located in Dublin, Ireland. It offers a wide range of courses at different levels, from Level 1 to Level 4, catering to the needs of local students and the community.'
  ],
  [
    'id' => 3,
    'country_id' => 2,
    'slug' => 'dublin-business-school',
    'name' => 'Dublin Business School',
    'email' => 'https://www.dbs.ie/',
    'state' => 'Dublin',
    'address' => 'Dublin Business School 13/14 Aungier Street Dublin 2, Ireland',
    'img' =>  'img/university/DublinBusinessSchool.jpg',
    'postcode' => 'D02 WC04',
    'about' => 'Dublin Business School (DBS) is a private college located in Dublin, Ireland. It offers a wide range of courses in business, law, arts, and social sciences. The college is known for its practical approach to education and its strong industry connections, providing students with opportunities for internships and real-world experience.'
  ],
  [
    'id' => 4,
    'country_id' => 3,
    'slug' => 'mykolas-romeris-university',
    'name' => 'Mykolas Romeris University',
    'email' => 'https://www.mruni.eu/',
    'state' => 'Vilnius',
    'address' => 'Vilnius',
    'img' =>  'img/university/MykolasRomerisUniversity.png',
    'postcode' => 'LT-08303',
    'about' => 'Mykolas Romeris University (MRU) is a public university located in Vilnius, Lithuania. It offers a wide range of programs in law, social sciences, public administration, and other fields. MRU is known for its focus on research and its commitment to providing high-quality education to both local and international students.'
  ],
  [
    'id' => 5,
    'country_id' => 4,
    'slug' => 'sumas-switzerland',
    'name' => 'SUMSAS Switzerland',
    'email' => 'https://sumas.ch/',
    'state' => 'Gland',
    'address' => 'Headquarters - Rue Mauverney, 28 Campus - Route de Suisse, 35 1196 Gland, Switzerland',
    'img' =>  'img/university/SUMSAS_Switzerland.png',
    'postcode' => '35 1196',
    'about' => 'SUMSAS Switzerland is a private university located in Gland, Switzerland. It offers a wide range of programs in various fields, including business, law, arts, and social sciences. The university is known for its practical approach to education and its strong industry connections, providing students with opportunities for internships and real-world experience.'
  ],
  [
    'id' => 6,
    'country_id' => 4,
    'slug' => 'school-of-hotel-management',
    'name' => 'School of Hotel Management',
    'email' => 'https://www.ihtti.com/',
    'state' => 'Caux Palace',
    'address' => 'Caux Palace, Switzerland',
    'img' =>  'img/university/SchoolOfHotelManagement.jpg',
    'postcode' => 'CH-1824',
    'about' => 'The School of Hotel Management is a specialized institution located in Gland, Switzerland. It offers comprehensive programs in hospitality and tourism management, preparing students for careers in the global hotel and resort industry.'
  ],
  [
    'id' => 7,
    'country_id' => 4,
    'slug' => 'hotel-institute-montreux',
    'name' => 'Hotel Institute Montreux',
    'email' => 'https://www.hotelinstitutemontreux.com/',
    'state' => '',
    'address' => 'Switzerland',
    'img' =>  'img/university/Hotel-Institute-Montreux.jpg',
    'postcode' => 'CH-1824',
    'about' => 'The Hotel Institute Montreux is a specialized institution located in Gland, Switzerland. It offers comprehensive programs in hospitality and tourism management, preparing students for careers in the global hotel and resort industry.'
  ],
  [
    'id' => 8,
    'country_id' => 4,
    'slug' => 'culinary-arts-academy-switzerland',
    'name' => 'Culinary Arts Academy Switzerland',
    'email' => 'Culinary Arts Academy Switzerland',
    'state' => 'Swiss canton of Valais',
    'address' => 'Le Bouveret Campus Route Cantonale 51 A, CH-1897 Le Bouveret',
    'img' =>  'img/university/Culinary-Arts-Academy-Switzerland.jpg',
    'postcode' => 'CH-1897',
    'about' => 'We are regarded as Switzerland’s  best culinary schools and one of the world’s finest thanks to our comprehensive curriculum that blends a top-rated culinary arts education with practical business theory. Nurture your talent, feed your curiosity, and build the strong foundations to succeed in the world of culinary arts.'
  ],
  [
    'id' => 9,
    'country_id' => 4,
    'slug' => 'cesar-ritz-colleges-switzerland',
    'name' => 'Cesar Ritz Colleges Switzerland',
    'email' => '',
    'state' => '',
    'address' => 'Route Cantonale 51, Switzerland',
    'img' =>  'img/university/Cesar-Ritz-Colleges-Switzerland.png',
    'postcode' => 'CH-1897',
    'about' => 'We are a leading hospitality business school with entrepreneurship and sustainability at our heart. Drawing from nearly 40 years of experience and the pioneering ethos of César Ritz, we provide students with a multi-campus learning experience. We foster a culture of entrepreneurship, sustainability, and leadership, in an inclusive learning environment that values independent, visionary thinking through the application of the latest research and technology.'
  ],
  [
    'id' => 10,
    'country_id' => 5,
    'slug' => 'south-essex-college',
    'name' => 'South Essex College',
    'email' => 'https://www.southessex.ac.uk/',
    'state' => 'Essex',
    'address' => 'High Street Grays Essex RM17 6TF United Kingdom',
    'img' =>  'img/university/SouthEssexCollegeLogo.png',
    'postcode' => 'RM17 6TF',
    'about' => 'The College was founded in 1899 as an art school and was renamed later as the Junior Day Technical School. It was then restructured to include commercial and industrial provision such as plumbing. The College became South East Essex College of Arts and Technology (SEECAT) in 1991.

In 2004, the College relocated to the campus in the centre of Southend.

On 1 January 2010, the College formally merged with Thurrock and Basildon College and was renamed South Essex College of Further and Higher Education.

In 2013, the Forum Southend-on-Sea opened which has an area dedicated to South Essex on the third floor. This area accommodates our Higher Education provision.

In 2014, our Thurrock campus relocated to a new building in the centre of Grays.

In 2019, the College opened a new campus in Stephenson Road, Southend, which specialises in engineering and construction.

In February 2019, the College merged with PROCAT, a specialist engineering and construction provider based in Basildon, Canvey Island and Ilford.

In 2020, the college formed a partnership with The National College Creative Industries (NCCI) Ltd and Access Creative College to provide a stronger offer for both young and adult students wishing to train for a career in the creative industries at The Backstage Centre in Purfleet-on-Thames, Essex.

In 2021, South Essex College opened their new Centre for Digital Technologies in Basildon town centre.'
  ],
  [
    'id' => 11,
    'country_id' => 5,
    'slug' => 'university-of-central-lancashire',
    'name' => 'University of Central Lancashire',
    'email' => 'https://www.uclan.ac.uk/',
    'state' => 'Lancashire',
    'address' => 'Preston, Lancashire, UK PR1 2HE',
    'img' =>  'img/university/University-of-Central-Lancashire.png',
    'postcode' => 'PR1 2HE',
    'about' => 'About This University:
The University of Central Lancashire is the international, multi-campus university tracing its roots back to 1828 and leading the way in modern learning today.

We’ve spent £200 million on transforming our Preston Campus to give it a world-class makeover. This includes a stunning brand-new Student Centre and University Square at the heart of campus, social spaces and a whole lot more.

Our new £60m Student Centre brings all the advice and support teams under one roof, providing second-to-none support. It’s a stunning space designed to support every step of the student journey. The University Square is an exciting hub of activity, a focal point for community events and an iconic gateway linking together the city and the University.

Whoever you are, wherever you are in life, there’s always a way.

Where opportunity creates success.'
  ],
  [
    'id' => 12,
    'country_id' => 5,
    'slug' => 'london-school-of-commerce',
    'name' => 'London School of Commerce',
    'email' => 'https://www.lsclondon.co.uk/',
    'state' => 'London',
    'address' => 'Chaucer House, White Hart Yard, London SE1 1NX, United Kingdom',
    'img' =>  'img/university/London-School-of-Commerce.webp',
    'postcode' => 'SE1 1NX',
    'about' => 'London School of Commerce has become one of the largest independent higher education providers in the UK, with a well-respected global reputation. Our students are able to immerse themselves into the inspiring historical and cultural legacy that London has to offer from LSC’s location at London Bridge, whilst acquiring advanced knowledge and skills in modern business management in the world’s financial centre.

LSC delivers a range of well-established business and management programmes with its University partners, including undergraduate programmes and postgraduate programmes leading to Masters and Doctoral degrees. Since LSC’s establishment in 1998, it has expanded on a global scale, which is underpinned with campuses in Valetta in Malta, Colombo in Sri Lanka, Kuala Lumpur in Malaysia and Dhaka in Bangladesh. LSC has achieved national, international and global success through the delivery of life-long learning, widening participation in education for innovation and entrepreneurship and seeking to develop a global mind-set in its learners.'
  ],
  [
    'id' => 13,
    'country_id' => 5,
    'slug' => 'university-of-west-london',
    'name' => 'Elizabeth School of London',
    'email' => 'https://www.elizabethschool.com/',
    'state' => 'London',
    'address' => 'Canary Wharf (London) Holborn (London) Birmingham Manchester Leeds Northampton Leicester',
    'img' =>  'img/university/elizabeth-school-of-london-v2.x554edcd1.jpg',
    'postcode' => '',
    'about' => 'Elizabeth School of London is a Higher Education (HE) provider committed to offering relevant, high-quality programmes in seven campuses across six cities in the UK located in London, Birmingham, Leeds, Leicester, Manchester and Northampton.

ESL MISSION
It is the mission of the Elizabeth School of London (ESL) to deliver a quality educational experience to students from diverse backgrounds who have academic competence, potential, and personal motivation for success. Collaborating with universities across the UK and beyond, ESL specialises in offering education to students from non-traditional backgrounds, recognising the transformative impact of education in providing opportunities for personal and professional growth.'
  ],
  [
    'id' => 14,
    'country_id' => 5,
    'slug' => 'lcca-london-college-of-contemporary-arts',
    'name' => 'LCCA London College of Contemporary Arts',
    'email' => 'https://www.lcca.org.uk/',
    'state' => 'London',
    'address' => 'Sceptre Court 40 Tower Hill London EC3N 4DX',
    'img' =>  'img/university/lcca-rgb-640x361-1.jpg',
    'postcode' => 'EC3N 4DX',
    'about' => 'For creative, innovative and artistic individuals LCCA is the best place to kickstart your career. We offer a range of practical and accredited programmes awarded by University for the Creative Arts (UCA) and the highest placed specialist creative university in The Guardian’s 2021 University League Table. Ranging from fashion to business to graphic design, our undergraduate and postgraduate programmes will help you get industry-ready.

What makes us unique? With a broad network of industry connections, aided by our association with UCA, such as Christian Louboutin, Calvin Klein Jeans and The Photographer’s Gallery, LCCA allows students to get a real feel for working in the creative industries. We provide networking opportunities as well as workshops to help you develop the skills you need to launch your dream creative career and to find opportunities that could lead to employment. You’ll also be able to take advantage of our student support services which include help with CVs, interviews and work placements.

We believe that you learn best by doing which is why our programmes involve a significant amount of practical work. You’ll also participate in lectures, but these will come with ample opportunity to discuss ideas and develop plans for your next project.'
  ],
  [
    'id' => 15,
    'country_id' => 5,
    'slug' => 'the-language-gallery',
    'name' => 'The Language Gallery',
    'email' => 'https://www.thelanguagegallery.com/',
    'state' => 'London',
    'address' => '1st Floor, Sceptre Court 40 Tower Hill London EC3N 4DX United Kingdom',
    'img' =>  'img/university/TheLanguageGallery.jpeg',
    'postcode' => 'EC3N 4DX',
    'about' => 'The Language Gallery in the UK is part of the thriving Global University Systems group, an international network of higher education institutions where 78,000 people are currently studying around the world in 42 international locations. Based in some of the world’s biggest cities, from London to Singapore, the group’s network is continually growing as we develop partnerships, establish new academic institutions and expand into new regions.

The Language Gallery is an English language courses and University Pathways provider with schools in London, Birmingham and Nottingham. We pride ourselves on our internationalism and our interactive approach to learning. All of our schools are located in the centres of these landmark cities. The strong sense of community at each school means you will have no problems settling in, whichever destination you choose.

Our Values
The Language Gallery values are to offer equal opportunities for all staff and students, celebrating multi-culturalism and tolerance, to achieve academic excellence. We aim to provide language skills, an experience, and a sense of community to all our students.'
  ],
  [
    'id' => 16,
    'country_id' => 5,
    'slug' => 'york-st-john-university-london-campus',
    'name' => 'York St John University LONDON campus',
    'email' => 'https://www.yorksj.ac.uk/london-campus/',
    'state' => 'Greater London',
    'address' => '20-25 Glasshouse Yard, Clerkenwell Road, London, United Kingdom',
    'img' =>  'img/university/York-St-John-University-LONDON-campus.png',
    'postcode' => 'EC1A 4JT',
    'about' => '',
  ],
  [
    'id' => 17,
    'country_id' => 5,
    'slug' => 'wrexham-glyndwr-university',
    'name' => 'Wrexham Glyndŵr University',
    'email' => 'https://www.glyndwr.ac.uk/en/',
    'state' => 'Wrexham',
    'address' => 'Wrexham Glyndwr University, Mold Road',
    'img' =>  'img/university/Wrexham-Glyndwr-University-1.jpg',
    'postcode' => 'LL11 2AW',
    'about' => '',
  ],
  [
    'id' => 18,
    'country_id' => 5,
    'slug' => 'vistula-university',
    'name' => 'Vistula University',
    'email' => 'https://www.vistula.edu.pl/en',
    'state' => 'Mazowieckie',
    'address' => 'Vistula University',
    'img' =>  'img/university/Vistula-University-scaled.jpg',
    'postcode' => '02-787',
    'about' => '',
  ],
  [
    'id' => 19,
    'country_id' => 5,
    'slug' => 'university-of-the-west-of-england',
    'name' => 'University of the West of England',
    'email' => 'https://www.uwe.ac.uk',
    'state' => 'Bristol',
    'address' => 'University of the West of England, Bristol',
    'img' =>  'img/university/University-of-the-West-of-England.png',
    'postcode' => 'BR1 4TT',
    'about' => '',
  ],
  [
    'id' => 20,
    'country_id' => 5,
    'slug' => 'the-university-of-east-london',
    'name' => 'The University of East London',
    'email' => 'uel.ac.uk',
    'state' => 'London',
    'address' => 'University Way, London',
    'img' =>  'img/university/The-University-of-East-London-1.png',
    'postcode' => 'E16 2RD',
    'about' => '',
  ],
  [
    'id' => 21,
    'country_id' => 5,
    'slug' => 'speak-up-london',
    'name' => 'Speak Up London',
    'email' => 'https://www.speakuplondon.com/',
    'state' => 'London',
    'address' => '139 Oxford Street London, UK',
    'img' =>  'img/university/Speak-Up-London-2048x1085.webp',
    'postcode' => 'W1D 2JA',
    'about' => '',
  ],
  [
    'id' => 22,
    'country_id' => 5,
    'slug' => 'south-city-college-birmingham',
    'name' => 'South & City College Birmingham',
    'email' => 'https://www.sccb.ac.uk/',
    'state' => 'Birmingham',
    'address' => 'South & City College Birmingham, Digbeth Campus, High Street Deritend, Digbeth',
    'img' =>  'img/university/South-City-College-Birmingham-2048x1448.png',
    'postcode' => 'B5 5SU',
    'about' => '',
  ],
  [
    'id' => 23,
    'country_id' => 5,
    'slug' => 'city-college-plymouth',
    'name' => 'City college Plymouth',
    'email' => 'https://www.plymouthcollege.com/',
    'state' => 'Plymouth',
    'address' => 'Plymouth College Preparatory School St Dunstans Abbey The Millfields Plymouth Devon',
    'img' =>  'img/university/Plymouth-College.png',
    'postcode' => 'PL1 3JL',
    'about' => '',
  ],
  [
    'id' => 24,
    'country_id' => 5,
    'slug' => 'city-college-sheffield',
    'name' => 'MetFilm School London',
    'email' => ' https://www.metfilmschool.ac.uk/',
    'state' => 'London',
    'address' => 'MetFilm School Ealing Studios Ealing Green',
    'img' =>  'img/university/MetFilm-School-London-1.png',
    'postcode' => 'W5 5EP',
    'about' => '',
  ],
  [
    'id' => 25,
    'country_id' => 5,
    'slug' => 'falmouth-university',
    'name' => 'FALMOUTH University',
    'email' => 'https://www.falmouth.ac.uk/',
    'state' => 'Penryn',
    'address' => 'Penryn Campus',
    'img' =>  'img/university/FALMOUTH-University.jpg',
    'postcode' => 'TR10 9FE',
    'about' => '',
  ],
  [
    'id' => 26,
    'country_id' => 5,
    'slug' => 'edinburgh-college',
    'name' => 'Edinburgh College',
    'email' => 'http://www.edinburghcollege.ac.uk/',
    'state' => 'Edinburgh',
    'address' => 'Sighthill Campus Bankhead Avenue Scotland',
    'img' =>  'img/university/Edinburgh-College.png',
    'postcode' => 'EH11 4DE',
    'about' => '',
  ],
  [
    'id' => 27,
    'country_id' => 5,
    'slug' => 'university-of-south-wales',
    'name' => 'De Montfort University Leicester',
    'email' => 'https://www.dmu.ac.uk',
    'state' => 'Essex',
    'address' => 'De Montfort University Leicester, The Gateway, Leicester, UK',
    'img' =>  'img/university/De-Montfort-University-Leicester.webp',
    'postcode' => 'IG11 7UD',
    'about' => '',
  ],
  [
    'id' => 28,
    'country_id' => 5,
    'slug' => 'cranfield-university',
    'name' => 'Cranfield University',
    'email' => 'https://www.cranfield.ac.uk/',
    'state' => 'Cranfield',
    'address' => 'College Road Cranfield MK43 0AL UK',
    'img' =>  'img/university/Cranfield-University.png',
    'postcode' => 'MK43 0ALCF37 1DL',
    'about' => 'Cranfield University is a truly international community where students from all over the world come together for their education. When you study with us you are not only choosing a UK specialist postgraduate university, you are choosing a university with an international community and truly global reputation.',
  ],
  [
    'id' => 29,
    'country_id' => 5,
    'slug' => 'coventry-university',
    'name' => 'Coventry University',
    'email' => 'https://www.coventry.ac.uk',
    'state' => 'Essex',
    'address' => 'Coventry University, Coventry, UK',
    'img' =>  'img/university/Coventry-University.webp',
    'postcode' => 'IG11 7UD',
    'about' => 'Coventry University is a dynamic university that delivers a quality experience to its students. The city-centre campus sits in the heart of Coventry, a lively city with lots to offer. Everything that students could need, including the university-owned halls of residence, is less than a 10-minute walk away. Coventry is one of the UK’s most multicultural cities with over 13,000 international students from over 150 countries.

Coventry University is a place where all students can achieve their ambitions. The university focuses on employability, practical learning and personalised support, aiming to help all of its students to get the knowledge and skills they need and support them to develop confidence in themselves and their abilities.',
  ],
  [
    'id' => 30,
    'country_id' => 5,
    'slug' => 'centre-of-english-studies',
    'name' => 'Centre of English Studies',
    'email' => ' https://www.ces-schools.com/',
    'state' => 'London',
    'address' => 'NELSON HOUSE, 271 KINGSTON ROAD, London, United Kingdom',
    'img' =>  'img/university/Centre-of-English-Studies.jpg',
    'postcode' => 'SW19 3NW',
    'about' => 'Founded in 1976, CES is a group of private English language schools committed to providing the highest quality English language training experience. For over 30 years, CES has specialized in teaching English to foreign students, professionals and visitors from all around the world and continues to significantly improve their English skills and prepare them for success, whether at an institution for higher learning, in a professional setting or for personal satisfaction. CES’s rigorous curriculum focuses on developing students’ fundamental English skills in the areas of: Grammar, Writing, Conversation, Pronunciation, Listening, Reading and Vocabulary.',
  ],
  [
    'id' => 31,
    'country_id' => 5,
    'slug' => 'cambridge-education',
    'name' => 'Cambridge Education',
    'email' => ' https://www.cambridgeeducationgroup.com/',
    'state' => 'Cambridge',
    'address' => ' 51-53 Hills Road Cambridge',
    'img' =>  'img/university/Cambridge-Education.jpg',
    'postcode' => 'CB2 1NT',
    'about' => 'Since 1952, Cambridge Education Group has delivered the highest quality academic, creative, and English Language programs, preparing thousands of students to progress onto the world’s leading universities. We offer a wide range of options across our portfolio of global centers, each with its own unique features and qualities, enabling us to meet our students’ demands as required. Whether students choose to study at one of our centers on campus or Castel or complete an online program through CEG digital or heed, Cambridge Education Group promises to help achieve more with expert tutors, innovative high-quality content, premium facilities,  and personal service our students deserve.',
  ],
  [
    'id' => 32,
    'country_id' => 5,
    'slug' => 'arden-university',
    'name' => 'Arden University',
    'email' => 'https://arden.ac.uk/',
    'state' => 'London',
    'address' => 'Ealing Study Centre Santon House, 53-55 Uxbridge Road, Ealing, London, W5 5SA',
    'img' =>  'img/university/Arden-Online-logo.png',
    'postcode' => 'W5 5SA',
    'about' => 'We are a dynamic and diverse group of people working together to provide the best, distance and blended learning platform and programs in the UK and Europe. We are a contemporary, entrepreneurial, fast-paced, commercial, for-profit university, with a head office in Coventry, plus study centers in London, Manchester, Birmingham & Berlin.  Our journey began in 1990, and over the last 30 years, we have continued to evolve. In 2014 we were awarded Taught Degree-Awarding Powers and in 2015 we officially became Arden University. We’re especially proud that we’re the only specialist Distance (online) Learning University to launch in the UK in the last 50 years. We have ambitious international growth plans but always with the learner at the heart of everything that we do. We believe that everyone, everywhere should be able to access education to help them progress in their career.',
  ],
  [
    'id' => 33,
    'country_id' => 5,
    'slug' => 'anglia-ruskin-university-london',
    'name' => 'Anglia Ruskin University London',
    'email' => 'https://london.aru.ac.uk/',
    'state' => 'London',
    'address' => ' Import and Export Buildings, 2 Clove Crescent, Poplar, London, E14 2BE.',
    'img' =>  'img/university/ARU-Logo.png',
    'postcode' => 'E14 2BE',
    'about' => 'Anglia Ruskin University (ARU) is a modern university in East Anglia, with campuses in Cambridge, Chelmsford and Peterborough. ARU offers a wide range of flexible undergraduate and postgraduate degree courses, delivering a progressive applied education which encourages students to develop themselves both academically and personally.

The university has excellent facilities, with over GBP 115 million of investment in recent years. ARU instils purpose in its graduates, who gain the knowledge and key skills they need for successful employment. Distance learning and degree apprenticeship courses are also available.',
  ]
];

$courses = [
  [
    'id' => 1,
    'uni_id' => 10,
    'slug' => 'pearson-btec-level-4-higher-national-certificate-in-business',
    'name' => 'PEARSON BTEC LEVEL 4 HIGHER NATIONAL CERTIFICATE IN BUSINESS', 
    'intake' => 'February 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£3,500 / Year',
    'courseDuration' => '2 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Thurrock',
    'about' => 'The Pearson BTEC Level 4 Higher National Certificate (HNC) in Business is a comprehensive program designed to equip students with essential knowledge and skills for success in the
dynamic world of business. This course provides a solid foundation in key business concepts, enabling learners to develop a deep understanding of various aspects of the business environment.
Throughout the HNC in Business, students will explore fundamental topics such as marketing, finance, human resource management, entrepreneurship, and organisational behaviour. They will gain practical insights into business operations, decision-making processes, and effective communication strategies.The program combines theoretical learning with practical applications, ensuring students are well-prepared for the challenges of the business industry. Overall, the HNC in Business offers a comprehensive and practical education, equipping students with the skills and knowledge necessary to excel in the ever-evolving business landscape. There are several compelling reasons to consider pursuing the Pearson BTEC Level 4 Higher National Certificate
(HNC) in Business.',
    'entryRequirements' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV',
    'documentRequirement' => 'Level 3 qualification or equivalent or 1 years work experience',
    ],
  [
    'id' => 2,
    'uni_id' => 11,
    'slug' => 'mental-health-and-wellbeing-with-foundation-year',
    'name' => 'Mental Health and Wellbeing with Foundation Year', 
   'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime Classes',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'East India (London)',
    'about' => '',
    'entryRequirements' => 'Level 3 qualification or equivalent',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 3,
    'uni_id' => 11,
    'slug' => 'psychology-with-foundation-year',
    'name' => 'Psychology with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime Classes',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'East India (London)',
    'about' => 'On our Psychology (Foundation Entry) course you’ll gain an understanding of human behaviour, capabilities and characteristics as well as developing communication, presentation and time management skills.

It’s the start of a flexible four-year degree where you can go on to specialise in areas of psychology that include forensic, clinical health and neuropsychology. Or combine psychology with criminology, education, and psychotherapy & counselling.

Our academic staff are experts in their own field. Their research informs their teaching and ensures your learning is at the very cutting-edge.

Why study with us
You’ll be introduced to psychology, and the scientific and empirical aspects of it, and understand how these are applied in real world situations.
By the end of your first year you’ll have understood and learned about the major areas of psychology and the main methodologies.
We continuously engage with employers to make sure our curriculum gives you the skills and knowledge the industry needs.',
    'entryRequirements' => 'Level 3 qualification or equivalent',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 4,
    'uni_id' => 12,
    'slug' => 'fdsc-supporting-innovation-in-health-and-social-care',
    'name' => 'FdSc Supporting Innovation in Health and Social Care', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime Classes',
    'feeRange' => '£ 9,000 / Year',
    'courseDuration' => '2 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'East India (London)',
    'about' => 'This programme is continually being reinvented to reflect the dynamic nature of the business and management sector and will help you get your foot on the management ladder. Our lecturers have industry experience and an extensive range of industry links and contacts to enhance your learning experience and develop your commercial awareness.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV',
  ],
  [
    'id' => 5,
    'uni_id' => 12,
    'slug' => 'fda-business-and-management',
    'name' => 'FdA Business and Management', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime Classes',
    'feeRange' => '£ 9,000 / Year',
    'courseDuration' => '2 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'East India (London)',
    'about' => 'This programme is continually being reinvented to reflect the dynamic nature of the business and management sector and will help you get your foot on the management ladder. Our lecturers have industry experience and an extensive range of industry links and contacts to enhance your learning experience and develop your commercial awareness.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV',
  ],
  [
    'id' => 6,
    'uni_id' => 12,
    'slug' => 'business-studies-with-foundation-year',
    'name' => 'Business Studies with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime Classes',
    'feeRange' => '£ 9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'East India (London)',
    'about' => 'The BA (Hons) Business Studies with Foundation year programme covers a variety of subject areas to ensure graduates have the necessary skills and knowledge to gain employment in a number of business related sectors or to start up entrepreneurial businesses.

As a business studies student, you will gain a foundation in many aspects of business, before choosing a specialisation. There is a strong emphasis on the practical application of theory, through the use of case studies, problem solving tasks, as well as project and group work. You will develop a broad knowledge of business operations as well as gain targeted skills in your specific field of interest. You will also gain many valuable transferable skills, which will be valued by employers across the business sector or useful if you choose to take an alternative career path.

Teaching and learning is achieved through a combination of lectures, tutorials, workshops, group discussions, presentations, assignments and report writing. All lectures are conducted at our London campus located at London Bridge. You will receive full guidance and support throughout your course ensuring you achieve the best possible learning experience in preparation for your career.

The Foundation year will give you a more supportive environment, ensuring you get the most from your studies and are well prepared to succeed in the BA (Hons) Business Studies programme.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 7,
    'uni_id' => 13,
    'slug' => 'business-and-management-top-up',
    'name' => 'Business and Management (Top-Up)', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Canary Wharf (London), Holborn (London) , Birmingham, Manchester, Leeds, Northampton, Leicester',
    'about' => 'Enhance your business management skills through our accelerated one-year top-up course. Dive into the realms of finance, human resources, marketing, operations, and delve into the cultural, social, and ethical aspects of both macro and micro environments. Gain essential knowledge and competencies to excel in the dynamic world of business.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 8,
    'uni_id' => 13,
    'slug' => 'accounting-and-finance-with-foundation-year',
    'name' => 'Accounting and Finance with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Canary Wharf (London), Holborn (London) , Birmingham, Manchester, Leeds, Northampton, Leicester',
    'about' => 'The foundation year will help you to broaden your industry knowledge and enable you to progress to a related undergraduate degree. It aims to help you develop a strong foundation of business knowledge, alongside academic and transferable skills to ensure you get the most out of your degree-level studies. You’ll benefit from the Elizabeth School of London’s extensive links with industry. Guest speakers are regularly invited to share their knowledge with our students, and offered the chance to connect with businesses.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 9,
    'uni_id' => 13,
    'slug' => 'business-and-management-with-foundation-year',
    'name' => 'Business and Management with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Canary Wharf (London), Holborn (London) , Birmingham, Manchester, Leeds, Northampton, Leicester',
    'about' => 'Our Business and Management degree with an integrated foundation course will help you develop as a person to achieve your potential through teaching you about business and how it works. You’ll graduate with potential for employment in different businesses; this could be an organisation, the private or public sector, a charity or possibly your own business. We aim to give you the skills to apply your knowledge in a wide range of situations in any sector.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 10,
    'uni_id' => 14,
    'slug' => 'fashion-with-foundation-year',
    'name' => 'Fashion with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '3 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London)',
    'about' => 'Throughout the BA (Hons) in Fashion degree at LCCA, you’ll be encouraged to find your own fashion identity and to leave a noticeable imprint on all of the items you design.

From your first year, you’ll explore the cultural, economic, environmental and sustainable factors that underpin the world of fashion while learning practical techniques that you can utilise in many roles. These include drape, fabric manipulation, constructed textile, pattern cutting, garment manufacture and trailers. During this fashion course, you’ll learn how to take the concepts you design through drawing and illustration work and create marketable products. Additionally, you’ll study media, photography and styling, portfolio presentation and computer-aided design.

By the time you graduate from this fashion degree, you’ll have developed industry expertise through a work placement as well as a range of transferable skills that will make you a top candidate for a range of roles in the fashion industry.

Start working towards a career in a fast-paced industry today by enrolling on the BA (Hons) Fashion programme at LCCA, delivered in partnership with the University for the Creative Arts.',
'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 11,
    'uni_id' => 14,
    'slug' => 'graphic-design-with-foundation-year',
    'name' => 'Graphic Design with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '3 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London)',
    'about' => 'Why study Graphic Design with us

The BA (Hons) Graphic Design programme offered at LCCA will enable you to transform your ideas into visual creations. You’ll consider typography, colour, shapes and shading and how combining these elements in a striking way can convey a strong message.

To ensure you’re equipped with the skills and knowledge to find the perfect role once you graduate, this bachelor’s graphic design degree reflects the graphic design industry. While other graphic design degrees teach you the theory, our programme ensures you practice it.

Get your Graphic Designer qualifications with our course

Using top-of-the-range software, our extensive industry connections and studio spaces, you’ll build a powerful skillset that will prepare you to convey your ideas and to operate in a business-like fashion within the creative industries. Throughout the BA Graphic Design course, you’ll also engage with a series of workshops on typography, printmaking, photography, motion design and much more.

By the time you graduate, you’ll be a knowledgeable graphic designer capable of communicating the theory behind your ideas, the history of the industry and creating work that captures your audience.

Get the support you need

Awarded by the University for Creative Arts, you’ll be fully prepared to undertake a number of different roles including art director, graphic designer, marketing manager and illustrator.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 12,
    'uni_id' => 14,
    'slug' => 'hospitality-management-and-leadership-with-foundation-year',
    'name' => 'Hospitality Management and Leadership with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '3 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London)',
    'about' => 'The BA (Hons) Hospitality Management and Leadership programme is designed for students with an interest in both hospitality and events management. The modules provide a broad range of knowledge and skills that are required by professionals within these sectors.

This Hospitality Management and Leadership course seeks to encourage more self-managed learning through research and management reports, which will add value to your CV. The modules are typically more class based in that they require students to use theory and critically examine certain issues and topics. A combination of teaching approaches are employed including lectures, guest lectures, residential and day field trips, group and individual project work and student led seminars. The LCCA virtual learning environment, CANVAS, will be used to provide supportive material and communicate with students via announcements.

Additionally, this course encourages students to develop the skills and competences relevant to their roles as future managers in order to enhance employability, including interpersonal and transferable skills. To achieve this, the course is designed to enable students to identify and analyse appropriate techniques that are applicable in making management decisions at a strategic level as well as at tactical and operational levels. The course emphasises the requirements and challenges faced by business leaders and managers, taking into account the complex, dynamic and integrated nature of various factors which impinge upon management decisions. This Hospitality Management and Leadership degree covers wide range of modules including managing customer experience, event management, digital marketing, food culture and society, hospitality operations, marketing strategy and planning, entrepreneurship and creativity.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 13,
    'uni_id' => 14,
    'slug' => 'business-management-and-entrepreneurship-with-foundation-year',
    'name' => 'Business Management and Entrepreneurship with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '3 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London)',
    'about' => 'The Business Management and Entrepreneurship course will build on the widening participation agenda but be responsive to the changes within the emerging environment, equipping you with digital and strategic tools to help mould you into a creative entrepreneur. Working on projects with social, economic, and environmental significance, you will develop a clear understanding of contemporary business theory and practice to apply to current world problems.

Emphasis on imagination and creativity will help develop your intellectual powers and your ability to communicate with rigour in the process. This will stimulate the development of an enquiring, analytical and creative approach, and develop entrepreneurial capabilities.

Through opportunities for engagement with industry experts, collaborative projects and experiential activities, you will be equipped with a post pandemic skillset to thrive in the entrepreneurship journey as well as your professional career as an innovative thinking manager. The course will prepare you to take on complex challenges that have emerged after COVID-19 and prepare you to think out of the box to establish yourself as a contemporary entrepreneur.

You will learn to scan and observe new trends and opportunities arising in the dynamic business world and be creative in tackling these to be a successful entrepreneur. The course aims to make you an industry ready socially responsible and ethical manager and entrepreneurs. Sustainability, creativity and innovation is central to this course.

It has been proven that soft skills are key to any managerial success in today’s dynamic and diverse workplace. Necessary soft skills such as emotional quotient, empathy towards colleagues and sub-ordinates and ability to relate and connect with team members during challenging times have proven to be a key mantra for business success. Agility, sustainability, flexibility and creativity will be at the heart of this programme, being proven as critical success factors during the pandemic.

You will study on campus for one day, or two evenings a week (depending on your choice of study mode) with a second day online blended learning.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 14,
    'uni_id' => 15,
    'slug' => 'certhe-business-and-management',
    'name' => 'CertHE Business & Management', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '1-2 Year',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London), Ealing (London)',
    'about' => 'This course is designed to introduce students to the essentials of business and management and key business concepts. This can be useful as a first step towards a business-related degree or as a beneficial stand-alone qualification. For students wishing to continue studying at university on a business and/or management degree, this certificate enables them to progress directly to second-year studies (or third year in Scotland).',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 15,
    'uni_id' => 32,
    'slug' => 'psychology-with-foundation-year',
    'name' => 'Psychology with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London), Holborn (London), Ealing (London), Birmingham, Manchester, Nottingham, Leeds',
    'about' => 'Arden’s foundation year modules have been designed to give you a tailored and fully supportive introduction to university study. This first year of study will prepare you for success in higher education by introducing you to the academic skills and subject-specific knowledge required to excel in your chosen degree subject.

On the course you’ll study a variety of interesting and stimulating subject modules that have been designed to engage you in fascinating topics within psychology, enabling you to develop sought after and career focused skills. Your studies will culminate with choosing an area of psychology on which to focus and produce your own research project at the end of your final year. By the time you graduate, you’ll have the confidence and ability to apply your knowledge of psychology to a range of exciting career paths and further learning opportunities.

Throughout the course you’ll have one-to-one support from your lecturers and academic skills tutors, as well as frequent invitations to online coffee mornings with your fellow students and staff and personal academic tutor support sessions. Above all, our academic team, who come from a range of professional and cultural backgrounds, will help you learn through real-world context, helping you understand how your new',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 16,
    'uni_id' => 32,
    'slug' => 'computing-with-foundation-year',
    'name' => 'Computing with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London), Holborn (London), Ealing (London), Birmingham, Manchester, Nottingham, Leeds',
    'about' => 'Our award-winning curriculum has been designed to give you the modern skill set needed to start your career on the right footing. Your course modules have been freshly updated by our experienced computing faculty members, ensuring you gain the expertise to excel in a wide range of rewarding roles.

Your modules take a hands-on approach to provide you with transferable real-world skills for your future. You’ll have the opportunity to master coding, database and web document creation, data analysis, cloud computing, IT project management, systems analysis soft skills, and more.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 17,
    'uni_id' => 32,
    'slug' => 'health-and-care-management-with-foundation-year',
    'name' => 'Health and Care Management with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London), Holborn (London), Ealing (London), Birmingham, Manchester, Nottingham, Leeds',
    'about' => 'Arden’s foundation year modules have been designed to give you a tailored and fully supportive introduction to university study. This first year of study will prepare you for success in higher education by introducing you to the academic skills and subject-specific knowledge required to excel in your chosen degree subject.

An innovative approach to health and care management is the only answer to the extensive changes the sector has experienced in the last years. The course has been developed in correspondence with the ever-growing needs of the health and social care sector, highlighting the emerging digital and leadership competencies required of today’s professionals and managers.

So, if you’re looking for a quality health and social care-oriented degree that will help you take on the sector’s most pressing workplace matters with confidence, look no further than our BSc (Hons) Health and Care Management with Foundation Year.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 18,
    'uni_id' => 32,
    'slug' => 'business-management-with-foundation-year',
    'name' => 'Business Management with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime / Evening / Weekend',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Tower Hill (London), Holborn (London), Ealing (London), Birmingham, Manchester, Nottingham, Leeds',
    'about' => 'Arden’s foundation year modules have been designed to give you a tailored and fully supportive introduction to university study. This first year of study will prepare you for success in higher education by introducing you to the academic skills and subject-specific knowledge required to excel in your chosen degree subject.

By providing you with the knowledge of the fundamentals of business – and teaching you exactly how an organisation works – we’ll prepare you to become a skilled and informed business practitioner, leader, or entrepreneur.

During your studies you’ll gain a wider understanding of business functions, operations, and cutting edge technologies in a range of exciting industries. You’ll also develop your personal and management attributes in dedicated skills-related modules to help build your soft skills and leadership abilities.

Using our business simulation software, you’ll be able to access a virtual business and run it as your own enterprise – managing activities such as marketing, sales, finances, people, product development, operations, and your supply chain. This will give you the chance to practice making critical decisions within a safe environment, helping you develop your ability to interpret commercial information and apply your learnings to generate a profit for your enterprise. On top of this, you’ll have access to our Digital Enterprise Hub throughout your course, which provides you with additional software and resources as well as real-world mentors and industry experts to draw knowledge from.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [ 
    'id' => 19,
    'uni_id' => 33,
    'slug' => 'law-with-foundation-year',
    'name' => 'Law with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Farringdon (London), East India (London)',
    'about' => 'A law degree teaches you to comprehend, critically evaluate and apply the regulations and frameworks that society sets up to ensure justice and stability.

Our law degree develops your legal knowledge, makes you learn from professionals and gain practical experience. It provides the seven core foundations of legal knowledge and meets the requirements of the Solicitors Regulation Authority and the Bar Standards Board for a career as a solicitor or barrister in the UK, as well as giving you discounted access to BARBRI SQE preparation courses.

Study in Cambridge, Chelmsford or Peterborough, work with qualified solicitors in our law clinics, and practise your craft in mock court rooms.

If you hope to use your legal skills in other areas – such as business, finance, policy making or public service – our law course will give you the transferable skills you need.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 20,
    'uni_id' => 33,
    'slug' => 'health-and-social-care-with-foundation-year',
    'name' => 'Health and Social Care with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Farringdon (London), East India (London)',
    'about' => 'Want to contribute to the health and wellbeing of a nation? Our full-time Health and Social Care degree in London is tailored for you.
Develop the attitudes, abilities and competencies needed to work in a health and social care environment, in the UK or internationally.

As a student at ARU London, you’ll learn from lecturers who have significant industry experience. We’ve involved employers from the healthcare sector in the design of our course, exploring the skill sets that employers are most interested in and ensuring they’re embedded within your learning.

London, which offers world-class private and public healthcare, boasts more than 90 NHS hospitals and a host of private hospitals and social care organisations, offering you unrivalled opportunities in the sector.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [ 
    'id' => 21,
    'uni_id' => 33,
    'slug' => 'finance-and-accounting-with-foundation-year',
    'name' => 'Finance and Accounting with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Farringdon (London), East India (London)',
    'about' => 'Refine your knowledge of accounting and finance through practical learning from professional accountants, in modules developed by real-world experts.
A degree in accounting and finance has long been viewed as an excellent grounding for a career in business, whether you intend to become a professionally qualified accountant or follow another different path.

If you’re considering undertaking a professional accounting qualification, our BSc (Hons) Finance and Accounting degree has been structured to provide the maximum possible number of exemptions (nine foundations papers in total) from the professional examinations of the Association of Chartered Certified Accountants (ACCA), the global body for professional accountants.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ],
  [
    'id' => 22,
    'uni_id' => 33,
    'slug' => 'business-and-human-resource-management-with-foundation-year',
    'name' => 'Business and Human Resource Management with Foundation Year', 
    'intake' => 'January 2024',
    'modeOfStudy' => 'Daytime',
    'feeRange' => '£9,250 / Year',
    'courseDuration' => '4 Years',
    'studyLevel' => 'Undergraduate Programs',
    'location' => 'Farringdon (London), East India (London)',
    'about' => 'Learn how to effectively manage the most important factor of any business – people –with our BSc (Hons) Business and Human Resource Management degree in London.
The ability to recruit, motivate and manage employees effectively is considered one of the keys to success in business. And ensuring that those employees develop professionally is essential for achieving competitive advantage.

By studying Business and Human Resource Management at ARU London, you’ll focus on the contributions of people in a successful business. You’ll learn to understand the importance of the people behind the business and how they help it to prosper.',
    'entryRequirements' => 'Level 3 qualification or equivalent or 1 years work experience',
    'documentRequirement' => 'Passport, Share code (EU only), Level 3 Qualification, Proof of Address (within last 3 months), and CV. Additionally, Work Reference Letter (if applicable)',
  ]
];



// 3. ROUTING PARSING ENGINE
$requestUrl = isset($_GET['url']) ? trim($_GET['url'], '/') : '';
$segments = explode('/', $requestUrl);

// 4. ROUTER MATCHES
if (empty($requestUrl)) {
  // Matches: http://localhost/lpkeducation/
  layout('pages/home.php', ['title' => 'Home']);
}


// B1. UNIVERSITIES DETAILS ROUTE (e.g., /universities/corvinus-university-of-budapest)
elseif ($segments[0] === 'universities' && isset($segments[1]) && !empty($segments[1])) {
  $slug = $segments[1];
  $currentUni = null;
  $currentCourses = [];

  // Find the matching university
  foreach ($universities as $uni) {
    if ($uni['slug'] === $slug) {
      $currentUni = $uni;

      // Collect all courses belonging to this university
      foreach ($courses as $course) {
        if ($course['uni_id'] === $uni['id']) {
          $currentCourses[] = $course;
        }
      }
      break;
    }
  }

  if ($currentUni) {
    layout('pages/university_details.php', [
      'title'      => $currentUni['name'],
      'university' => $currentUni,
      'courses'    => $currentCourses,
    ]);
  } else {
    http_response_code(404);
    layout('pages/404.php', ['title' => '404 - Not Found']);
  }
}


// A. UNIVERSITIES MAIN ROUTE (e.g., /universities)

elseif ($segments[0] === 'universities') {
  $data = [];

  foreach ($countries as $index => $country) {
    // Initialize the country details and an empty universities subarray
    $data[$index] = [
      'country'      => $country['name'],
      'universities' => []
    ];

    // Loop through universities and append them inside their respective country
    foreach ($universities as $university) {
      if ($country['id'] == $university['country_id']) {
        $data[$index]['universities'][] = $university;
      }
    }
  }

  layout('pages/universities.php', [
    'title' => 'Find A University',
    'data'  => $data,
  ]);
}


// B2. COURSES ROUTE (e.g., /courses/pearson-btec-level-4-higher-national-certificate-in-business)
elseif ($segments[0] === 'courses' && isset($segments[1]) && !empty($segments[1])) {
  $slug = $segments[1];
  $currentCourse = null;
  $currentUniversity = null;

  foreach ($courses as $course) {
    if ($course['slug'] === $slug) {
      $currentCourse = $course;
      foreach($universities as $university) {
        if ($university['id'] === $course['uni_id']) {
          $currentUniversity = $university;
        }
      }
      break;
    }
  }

  if ($currentCourse) {

    layout('pages/course-details.php', [
      'title'   => $currentCourse['name'],
      'course'  => $currentCourse,
      'university' => $currentUniversity,
    ]);
  } else {
    http_response_code(404);
    layout('pages/404.php', ['title' => '404 - Not Found']);
  }
} elseif($segments[0] === 'top-ranked-in-uk' && empty($segments[1])){
  $updatedUniversities = null;

  foreach ($universities as $index => $university) {
    $updatedUniversities[$index] = $university;
    foreach ($countries as $country) {
      if ($university['country_id'] === $country['id']) {
        $updatedUniversities['country'][$index] = $country;
      }
    }

  }

  layout('pages/top-ranked-in-uk.php', [
    'title'   => 'Top Ranked Universities In Uk',
    'universities' => $updatedUniversities,
  ]);
}

// C. DYNAMIC CATCH-ALL FOR STANDALONE PAGES (e.g., /contactUs, /branches)
else {
  // Map exceptions where file names don't perfectly match the URL paths
  $customTitles = [
    'contactUs'        => 'Contact Us',
    'find_university'  => 'Find University',
    'branches'         => 'Our Branches',
    'top-ranked-in-uk' => 'Top Ranked Universities In UK'
  ];

  $pageSlug = $segments[0];
  $pageFile = 'pages/' . $pageSlug . '.php';

  if (file_exists($pageFile)) {
    // Use mapped title or dynamically fallback to an auto-spaced formatting string
    if (array_key_exists($pageSlug, $customTitles)) {
      $title = $customTitles[$pageSlug];
    } else {
      $title = ucwords(str_replace('-', ' ', $pageSlug));
    }

    layout($pageFile, ['title' => $title]);
  } else {
    http_response_code(404);
    layout('pages/404.php', ['title' => '404 - Not Found']);
  }
}
