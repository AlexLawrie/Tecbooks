-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2018 at 12:22 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tecbooks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `gateway` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `surname`, `admin_email`, `admin_password`, `gateway`) VALUES
(1, 'admin', 'admin', 'admin-gateway', 'admin', 'YES'),
(2, 'Alex', 'Lawrie', 'alex@tecbooks.com', 'admin', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` varchar(255) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_date_posted` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_name`, `banner_image`, `banner_date_posted`, `active`) VALUES
('1', 'sale on past papers', 'bannerone.png', '01/03/2018', 'active'),
('2', 'sale on java books', 'bannertwo.png', '01/03/2018', ''),
('3', 'triple book sale', 'bannerthree.png', '01/03/2018', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(255) NOT NULL,
  `user_ip_address` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `front_page`
--

CREATE TABLE `front_page` (
  `book_id` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_price` varchar(255) NOT NULL,
  `book_image` varchar(255) NOT NULL,
  `book_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `front_page`
--

INSERT INTO `front_page` (`book_id`, `book_title`, `book_price`, `book_image`, `book_description`) VALUES
('1', 'Python Crash Course', '£10.00', 'python crash course.jpg', 'A crash course on python.  Learn python in a few days!  Learn every basic step from creating variables to creating functions.'),
('2', 'Laptops for Dummies for Seniors ', '£10.00', 'how to use a laptop.PNG', 'New to the world of computing?  Over 65?  This book is for you.  Learn to use the basic functions of a laptop, browsing the web, emailing friends, typing documents and basic troubleshooting.');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `product_was_price` decimal(10,2) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_qty` int(255) NOT NULL,
  `average_review` varchar(255) NOT NULL,
  `product_posted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_title`, `product_price`, `product_was_price`, `product_image`, `product_description`, `product_category`, `product_qty`, `average_review`, `product_posted`) VALUES
(1, 'Teach Yourself Java in 24 Hours', '5.00', '0.00', 'java.jpg', 'In arenas ranging from enterprise development to Android app programming to game development, Java remains one of the worlds most popular programming languages. Sams Teach Yourself Java in 24 Hours helps Java beginners gain true mastery over the new Java 9.\r\n\r\nIn this book\'s straightforward, step by step approach, each lesson builds on everything thats come before, helping readers learn Javas core features and techniques from the ground up. Friendly, accessible, and conversational, this book offers a practical grounding in the language, without ever becoming overwhelming or intimidating.\r\n\r\nCoverage includes: learning programming basics; working with data and objects; programming graphical user interfaces; creating interactive web programs; handling errors; writing Internet and mobile apps; and much more.', '1', 9, '', '13/03/2018'),
(2, 'Java All-in-One for Dummies', '5.00', '0.00', 'java-all-in-one.jpg', 'If youve always wanted to program with Java but didnt know where to start, this will be the java stained reference youll turn to again and again. Fully updated for the JDK 9, this deep reference on the worlds most popular programming language is the perfect starting point for building things with Java and an invaluable ongoing reference as you continue to deepen your knowledge.\r\n\r\nClocking in at over 900 pages, Java All in One For Dummies takes the intimidation out of learning Java and offers clear, step by step guidance on how to download and install Java tools work with variables, numbers, expressions, statements, loops, methods, and exceptions create applets, servlets, and JavaServer pages handle and organize data and so much more.\r\n\r\nFocuses on the vital information that enables you to get up and running quickly with Java\r\n\r\nProvides details on the new features of JDK 9\r\n\r\nShows you how to create simple Swing programs\r\n\r\nIncludes design tips on layout, buttons, and labels\r\n\r\nEverything you need to know to program with Java is included in this practical, easy–to–use guide!', '1', 10, '', '13/03/2018'),
(4, 'Java a Beginners Guide', '10.00', '0.00', 'java-a-beginners-guide.jpg', 'Fully updated for Java Platform, Standard Edition 9 (Java SE 9), Java A Beginners Guide, Seventh Edition, gets you started programming in Java right away. Bestselling programming author Herb Schildt begins with the basics, such as how to create, compile, and run a Java program. He then moves on to the keywords, syntax, and constructs that form the core of the Java language. The book also covers some of Java\'s more advanced features, including multithreaded programming, generics, lambda expressions, Swing, and JavaFX. This practical Oracle Press guide features details on Java SE 9s innovative new module system, and, as an added bonus, it includes an introduction to JShell, Javas new interactive programming tool.\r\n\r\nDesigned for Easy Learning\r\n\r\nKey Skills and ConceptsChapter-opening lists of specific skills covered in the chapter.\r\n\r\nAsk the Expert Q&A sections filled with bonus information and helpful tips.\r\n\r\nTry This Hands on exercises that show you how to apply your skills\r\nSelf Tests End of chapter quizzes to reinforce your skills.\r\n\r\nAnnotated Syntax Example code with commentary that describes the programming techniques being illustrated.', '1', 10, '', '13/03/2018'),
(5, 'Bash Pocket Reference', '10.00', '0.00', 'bash-pocket-reference.jpg', 'It\'s simple: you need to know how to work with the bash shell if you want to get to the heart of Mac OS X, Linux, and other Unix systems. Updated for the most recent version of bash, this concise little book puts all of the essential information about bash at your fingertips. Youll quickly find answers to annoying questions that always come up when you\'re writing shell scripts.\r\n\r\nWhat characters do you need to quote? How do you get variable substitution to do exactly what you want? How do you use arrays? If you\'re a user or programmer of any Unix variant, or if youre using bash on Windows, you\'ll find answers to these questions and much more with this indispensable pocket reference.', '1', 10, '', '13/03/2018'),
(6, 'Linux All-in-One for Dummies', '10.00', '0.00', 'linux-for-dummies.jpg', 'Linux All in One For Dummies explains everything you need to get up and running with the popular Linux operating system. Written in the friendly and accessible For Dummies style, the book ideal for new and intermediate Linux users, as well as anyone studying for level–1 Linux certification. The eight minibooks inside cover the basics of Linux, interacting with it, networking issues, Internet services, administration, security, scripting, and level–1 certification.', '1', 10, '', '13/03/2018'),
(7, 'Python Playground', '10.00', '0.00', 'python-playground-geeky-projects.jpg', 'Python is a powerful programming language thats easy to learn and fun to play with. But once youve gotten a handle on the basics, what do you do next?\r\n\r\nPython Playground is a collection of imaginative programming projects that will inspire you to use Python to make art and music, build simulations of real world phenomena, and interact with hardware like the Arduino and Raspberry Pi. You\'ll learn to use common Python tools and libraries like numpy, matplotlib, and pygame to do things like:\r\n\r\nGenerate Spirograph-like patterns using parametric equations and the turtle module.\r\n\r\nCreate music on your computer by simulating frequency overtones\r\nTranslate graphical images into ASCII art.\r\n\r\nWrite an autostereogram program that produces 3D images hidden beneath random patterns.\r\n\r\nMake realistic animations with OpenGL shaders by exploring particle systems, transparency, and billboarding techniques.\r\n\r\nConstruct 3D visualizations using data from CT and MRI scans.\r\n\r\nBuild a laser show that responds to music by hooking up your computer to an Arduino.\r\n\r\nProgramming shouldnt be a chore. Have some solid, geeky fun with Python Playground.', '1', 10, '', '13/03/2018'),
(9, 'Learn File Maker Pro', '10.00', '0.00', 'learn-file-maker-pro.JPG', 'Extend FileMaker\'s built-in functionality and totally customize your data management environment with specialized functions and menus to super-charge the results and create a truly unique and focused experience. This book includes everything a beginner needs to get started building databases with FileMaker and contains advanced tips and techniques that the most seasoned professionals will appreciate. Written by a long time FileMaker developer, this book contains material for developers of every skill level. ', '1', 10, '', '13/03/2018'),
(10, 'GCSE AQA Computer Science - The Revision Guide', '10.00', '0.00', 'GCSE-AQA-Computer-Science.jpg', 'This brilliant CGP Revision Guide is the perfect companion to the Grade 9-1 AQA GCSE Computer Science course. Every topic has study notes in plain English, plus diagrams and plenty of helpful examples (including coding throughout the programming topic). There are also revision questions, along with plenty of exam tips explaining how to reach the top grades. For even more Computer Science exam preparation, a matching CGP Exam Practice Workbook is also available (9781782949329).  For the Grade9 through 1 Courses', '2', 10, '', '14/03/2018'),
(11, 'Revise BTEC National Computing Revision Guide', '10.00', '0.00', 'computing-revision-guide.jpg', 'The Revision Guide is accompanied by an ActiveBook (eBook) so that learners have the choice and flexibility to access materials anytime or anywhere.\r\n\r\nThe visually engaging format breaks the content down into easily-digestible sections for students and provides hassle-free instant-access revision for learners.\r\n\r\nClear specification fit, with revision activities and annotated sample responses for each unit to show students how to tackle the assessed tasks.\r\nWritten with students in mind - in an informal voice that talks directly to them.\r\n\r\nDesigned to be used alongside the Workbook with clear unit-by-unit correspondence to make it easy to use the books together.', '2', 10, '', '14/03/2018'),
(12, 'GCSE Computer Science OCR Practice Papers - for the Grade 9-1 Course', '5.00', '0.00', 'computer-science-practice-exam-papers.jpg', 'Closely matched to the Grade 9-1 GCSE OCR Computer Science specification, these CGP Practice Papers are the most realistic way for students to prepare for the exams. This pack contains two complete sets of exam-style tests (that’s four papers in total). We’ve also included a detailed answer booklet with full mark scheme to make marking easy.', '2', 10, '', '14/03/2018'),
(13, 'Bright Red Revision: Higher Computing', '10.00', '0.00', 'bright-red-revision-higher-computing.jpg', 'Bright Red Revision: Higher Computing covers all the important examinable concepts from both compulsory units: Computer Systems and Software Development, and also contains detailed coverage of all three optional units: Artificial Intelligence, Computer Networking and Multimedia. The book contains an indispensable overview of the course, and an introduction to what to expect from the exam, addressing the most frequently asked questions in a way that is most useful and manageable for the student. This book also addresses the coursework task in some detail, in a dedicated chapter, and contains an easy reference glossary containing clear descriptions of all the most important terms. The Bright Red Revision range of books are full colour, attractive and engaging, displaying a clean and completely modern design. All the essential material from the course is addressed, and arranged in easily digestible topics, running in a logical order, and contained in double page spreads, to make revision manageable.', '2', 10, '', '14/03/2018'),
(14, 'Modelling and Verification of Secure Exams (Information Security and Cryptography)', '10.00', '0.00', 'modelling-and-verification-of-secure-exams.jpg', 'In this book the author introduces a novel approach to securing exam systems. He provides an in-depth understanding, useful for studying the security of exams and similar systems, such as public tenders, personnel selections, project reviews, and conference management systems.', '2', 10, '', '14/03/2018'),
(15, 'National 5 Computing Science 2017-18 SQA Specimen and Past Papers with Answers', '5.00', '0.00', 'computing-science-past-papers.jpg', 'Past papers for national 5s for computer science (SQA, 2017-18).', '2', 10, '', '14/03/2018'),
(16, 'SQA 2014 Past Paper National 5 Computing Science', '5.00', '0.00', 'nation5-computing-science-past-papers.JPG', 'Past papers for SQA\'s 2014 computer science national 5 exams.', '2', 10, '', '14/03/2018'),
(17, 'Clean Code: A Handbook of Agile Software Craftsmanship', '10.00', '0.00', 'clean-code.jpg', 'Even bad code can function. But if code isnt clean, it can bring a development organization to its knees. Every year, countless hours and significant resources are lost because of poorly written code. But it doesn’t have to be that way. Noted software expert Robert C. Martin presents a revolutionary paradigm with Clean Code: A Handbook of Agile Software Craftsmanship . Martin has teamed up with his colleagues from Object Mentor to distill their best agile practice of cleaning code “on the fly” into a book that will instill within you the values of a software craftsman and make you a better programmer—but only if you work at it. What kind of work will you be doing? You’ll be reading code—lots of code. And you will be challenged to think about what’s right about that code, and what’s wrong with it. More importantly, you will be challenged to reassess your professional values and your commitment to your craft. Clean Code is divided into three parts. The first describes the principles, patterns, and practices of writing clean code. The second part consists of several case studies of increasing complexity. Each case study is an exercise in cleaning up code—of transforming a code base that has some problems into one that is sound and efficient. The third part is the payoff: a single chapter containing a list of heuristics and “smells” gathered while creating the case studies. The result is a knowledge base that describes the way we think when we write, read, and clean code. Readers will come away from this book understanding How to tell the difference between good and bad code How to write good code and how to transform bad code into good code How to create good names, good functions, good objects, and good classes How to format code for maximum readability How to implement complete error handling without obscuring code logic How to unit test and practice test-driven development This book is a must for any developer, software engineer, project manager, team lead, or systems analyst with an interest in producing better code.', '2', 10, '', '14/03/2018'),
(18, 'Working with Coders: A Guide to Software Development for the Perplexed Non-Techie', '10.00', '0.00', 'working-with-coders.jpg', 'Get introduced to the fascinating world inhabited by the professional software developer. Aimed at a non-technical audience, this book aims to de-obfuscate the jargon, explain the various activities that coders undertake, and analyze the specific pressures, priorities, and preoccupations that developers are prone to. In each case it offers pragmatic advice on how to use this knowledge to make effective business decisions and work productively with software teams.\r\n\r\nSoftware projects are, all too often, utter nightmares for everyone involved. Depending on which study you read, between 60 and 90 percent of all software projects are completed late, run over budget, or deliver an inferior quality end product. This blight affects everyone from large organizations trying to roll out business change to tiny startups desperately trying to launch their MVP before the money runs out. While there has been much attention devoted to understanding these failings, leading to the development of entire­ management methodologies aimed at reducing the failure rate,  such new processes have had, at best, limited success in delivering better results. \r\n\r\nBased on a decade spent exploring the world of software, Patrick Gleeson argues that the underlying reason for the high failure rate of software projects is that software development, being a deeply arcane and idiosyncratic process, tends to be thoroughly and disastrously misunderstood by managers and leaders. So long as the people tasked with making decisions about software projects are unaware of these idiosyncrasies and their ramifications, software projects will be delivered late, software products will be unfit for purpose, and relations between software developers and their non-technical colleagues will be strained. Even the most potent modern management tools are ineffective when wielded blindly.\r\n\r\nTo anyone who employs, contracts, manages, or works with software developers, Working with Coders: A Guide to Software Development for the Perplexed Non-Techie delivers the understanding necessary to reduce friction and inefficiencies at the intersection between software development teams and their non-technical colleagues.\r\n\r\nWhat You\'ll Learn\r\n\r\nDiscover why software projects are so commonly delivered late and with an abysmal end product\r\nExamine why the relationship between coders and their non-technical colleagues is often strained\r\nUnderstand how the software development process works and how to support it effectively\r\nDecipher and use the jargon of software development\r\nKeep a team of coders happy and improve the odds of successful software project delivery\r\n', '2', 10, '', '14/03/2018'),
(19, 'Introduction to Networking: How the Internet Works', '10.00', '0.00', 'introduction-to-networking.jpg', 'This book demystifies the amazing architecture and protocols of computers as they communicate over the Internet.  While very complex, the Internet operates on a few relatively simple concepts that anyone can understand. Networks and networked applications are embedded in our lives. Understanding how these technologies work is invaluable.  This book was written for everyone - no technical knowledge is required! While this book is not specifically about the Network+ or CCNA certifications, it as a way to give students interested in these certifications a starting point.', '3', 10, '', '15/03/2018'),
(20, 'Networking All-In-One for Dummies, 6th Edition', '10.00', '0.00', 'networking-for-dummies.jpg', 'Are you ready to build a network but arent sure where to start? Networking All In One For Dummies, 6th Edition walks you through the basics. With nine self–contained minibooks that feature the latest updates on networking trends including revised content for Windows 10 and Windows Server 2016 as well as updated coverage of broadband technologies storage and back–up this fully updated text will become your go to guide for network development. This easy to understand guide gives you everything you need to dive into the network development game.\r\n\r\nNetworking entails the connection of two or more computers allowing them to share resources and exchange data. This is essential in the workplace and has become highly popular in home settings as more and more people are connecting their home computers. Whether youre a network administrator or someone who wants to create a home–based network, understanding how to build your network effectively is critical to your success.\r\n\r\nLearn networking basics including what a network is and how to build one\r\n\r\nUnderstand how to effectively carry out network administration while maintaining high levels of security\r\n\r\nExplore different types of networking, including wireless and mobile\r\n\r\nLeverage the most up to date information that covers the latest networking trends and practices\r\n\r\nNetworking All In One For Dummies 6th Edition is the best–selling resource you need to catch up on the latest networking tools and trends.', '3', 10, '', '15/03/2018'),
(21, 'Computer Networking: Beginners guide for Mastering Computer Networking and the OSI Model', '10.00', '0.00', 'computer-networking.jpg', 'Learn Computer Networking by understanding the Basics of Routers, Switches and how they interconnect devices in order to make computer networks and the Internet work. Were also going to talk about the OSI Model, why it matters in todays world and how it managed to create computer networking as we know it today. Youre about to discover how computer networking (and the Internet) works. Here Is A Preview Of What Youll Learn... How the Internet works How end-devices (such as our smart phones, laptops, tablets) communicate in the Internet How does our networks work and of how many types are they What is a Router, a Switch, an IP address or a MAC Address What\'s the OSI Model and how it helps us A breakdown of the 7 layers of the OSI Model How can you apply this knowledge in a practical scenario with Cisco devices Much, much more! Download your copy today!', '3', 10, '', '15/03/2018'),
(22, 'A Gentle Introduction to Agile Software Development', '10.00', '0.00', 'introduction-to-software-development.jpg', 'Discover what is involved with Agile Software Development, Scrum, and Extreme Programming\r\n\r\nLearning new software development processes can be difficult, but switching to Agile doesnt need to be complicated. Explore the theories behind Agile Software Development, and learn how to make it work for you. In a Gentle Introduction to Agile Software Development, author Stephen Haunts will guide you to a fuller understanding of Agile, Scrum, Extreme Programming and Agile Project Management. You will learn about the advantages and disadvantages, and how to get the most out of it.\r\nIn this book you will learn...\r\n\r\nIntroduction\r\n\r\nWaterfall Development and its Problems\r\n\r\nWhat is Agile?\r\n\r\nCommon Agile Misconceptions and Mistakes\r\n\r\nAdvantages and Disadvantages\r\n\r\nExtreme Programming (XP)\r\n\r\nScrum\r\n\r\nClosing Summary', '3', 10, '', '15/03/2018'),
(23, 'Linux All-in-One for Dummies', '10.00', '0.00', 'linux-for-dummies.jpg', 'Linux All in One For Dummies explains everything you need to get up and running with the popular Linux operating system. Written in the friendly and accessible For Dummies style, the book ideal for new and intermediate Linux users, as well as anyone studying for level–1 Linux certification. The eight minibooks inside cover the basics of Linux, interacting with it, networking issues, Internet services, administration, security, scripting, and level–1 certification.', '3', 10, '', '13/03/2018'),
(24, 'Learn File Maker Pro', '10.00', '0.00', 'learn-file-maker-pro.JPG', 'Extend FileMaker\'s built-in functionality and totally customize your data management environment with specialized functions and menus to super-charge the results and create a truly unique and focused experience. This book includes everything a beginner needs to get started building databases with FileMaker and contains advanced tips and techniques that the most seasoned professionals will appreciate. Written by a long time FileMaker developer, this book contains material for developers of every skill level. ', '3', 10, '', '13/03/2018'),
(25, 'Teach Yourself Java in 24 Hours', '5.00', '0.00', 'java.jpg', 'In arenas ranging from enterprise development to Android app programming to game development, Java remains one of the world\'s most popular programming languages. Sams Teach Yourself Java in 24 Hours helps Java beginners gain true mastery over the new Java 9.\r\n\r\nIn this books straightforward, step by step approach, each lesson builds on everything thats come before, helping readers learn Java\'s core features and techniques from the ground up. Friendly, accessible, and conversational, this book offers a practical grounding in the language, without ever becoming overwhelming or intimidating.\r\n\r\nCoverage includes: learning programming basics; working with data and objects; programming graphical user interfaces; creating interactive web programs; handling errors; writing Internet and mobile apps; and much more.', '4', 10, '', '15/03/2018'),
(26, 'Java All-in-One for Dummies', '5.00', '0.00', 'java-all-in-one.jpg', 'If youve always wanted to program with Java but didnt know where to start, this will be the java stained reference youll turn to again and again. Fully updated for the JDK 9, this deep reference on the worlds most popular programming language is the perfect starting point for building things with Java and an invaluable ongoing reference as you continue to deepen your knowledge.\r\n\r\nClocking in at over 900 pages, Java All in One For Dummies takes the intimidation out of learning Java and offers clear, step by step guidance on how to download and install Java tools work with variables, numbers, expressions, statements, loops, methods, and exceptions create applets, servlets, and JavaServer pages handle and organize data and so much more.\r\n\r\nFocuses on the vital information that enables you to get up and running quickly with Java\r\n\r\nProvides details on the new features of JDK 9\r\n\r\nShows you how to create simple Swing programs\r\n\r\nIncludes design tips on layout, buttons, and labels\r\n\r\nEverything you need to know to program with Java is included in this practical, easy–to–use guide!', '4', 10, '', '15/03/2018'),
(27, 'Java in Easy Steps - 5th Edition', '5.00', '0.00', 'java-in-easy-steps.jpg\r\n', 'Java in easy steps instructs you how to easily create your own exciting Java programs. Now, updated for Java 8, it contains separate chapters on the major features of the Java language. Complete example programs with colorized code illustrate each important aspect of Java programming all in easy steps.\r\n\r\nNow, in its fifth edition, Java in easy steps begins by explaining how to download and install the free Java Development Kit (JDK) for the Java SE (Standard Edition) platform. This allows you to quickly begin creating your own executable programs by copying the examples.\r\n\r\nThis book assumes no previous knowledge of any programming language so its ideal for the newcomer to computer programming. Each chapter builds your knowledge of Java. By the end of this book you will have gained a sound understanding of the Java language and be able to write your own Java programs and compile them into executable files that can be run on any Java-enabled computer.', '4', 10, '', '15/03/2018'),
(28, 'Java a Beginners Guide', '10.00', '0.00', 'java-a-beginners-guide.jpg', 'Fully updated for Java Platform, Standard Edition 9 (Java SE 9), Java A Beginners Guide, Seventh Edition, gets you started programming in Java right away. Bestselling programming author Herb Schildt begins with the basics, such as how to create, compile, and run a Java program. He then moves on to the keywords, syntax, and constructs that form the core of the Java language. The book also covers some of Java\'s more advanced features, including multithreaded programming, generics, lambda expressions, Swing, and JavaFX. This practical Oracle Press guide features details on Java SE 9s innovative new module system, and, as an added bonus, it includes an introduction to JShell, Javas new interactive programming tool.\r\n\r\nDesigned for Easy Learning.\r\n\r\nKey Skills and ConceptsChapter opening lists of specific skills covered in the chapter.\r\n\r\nAsk the Expert Q&A sections filled with bonus information and helpful tips.\r\n\r\nTry This Hands on exercises that show you how to apply your skills\r\nSelf Tests End of chapter quizzes to reinforce your skills.\r\n\r\nAnnotated Syntax Example code with commentary that describes the programming techniques being illustrated.', '4', 10, '', '15/03/2018'),
(29, 'Bash Pocket Reference', '10.00', '0.00', 'bash-pocket-reference.jpg', 'It\'s simple: you need to know how to work with the bash shell if you want to get to the heart of Mac OS X, Linux, and other Unix systems. Updated for the most recent version of bash, this concise little book puts all of the essential information about bash at your fingertips. Youll quickly find answers to annoying questions that always come up when you\'re writing shell scripts.\r\n\r\nWhat characters do you need to quote? How do you get variable substitution to do exactly what you want? How do you use arrays? If you\'re a user or programmer of any Unix variant, or if youre using bash on Windows, you\'ll find answers to these questions and much more with this indispensable pocket reference.', '4', 10, '', '15/03/2018'),
(30, 'Python Playground', '10.00', '0.00', 'python-playground-geeky-projects.jpg', 'Python is a powerful programming language thats easy to learn and fun to play with. But once youve gotten a handle on the basics, what do you do next?\r\n\r\nPython Playground is a collection of imaginative programming projects that will inspire you to use Python to make art and music, build simulations of real world phenomena, and interact with hardware like the Arduino and Raspberry Pi. You\'ll learn to use common Python tools and libraries like numpy, matplotlib, and pygame to do things like:\r\n\r\nGenerate Spirograph-like patterns using parametric equations and the turtle module.\r\n\r\nCreate music on your computer by simulating frequency overtones\r\nTranslate graphical images into ASCII art.\r\n\r\nWrite an autostereogram program that produces 3D images hidden beneath random patterns.\r\n\r\nMake realistic animations with OpenGL shaders by exploring particle systems, transparency, and billboarding techniques.\r\n\r\nConstruct 3D visualizations using data from CT and MRI scans.\r\n\r\nBuild a laser show that responds to music by hooking up your computer to an Arduino.\r\n\r\nProgramming shouldnt be a chore. Have some solid, geeky fun with Python Playground.', '4', 10, '', '15/03/2018'),
(31, 'GCSE Computer Science OCR Practice Papers - for the Grade 9-1 Course', '5.00', '10.00', 'computer-science-practice-exam-papers.jpg', 'Closely matched to the Grade 9-1 GCSE OCR Computer Science specification, these CGP Practice Papers are the most realistic way for students to prepare for the exams. This pack contains two complete sets of exam-style tests (that’s four papers in total). We’ve also included a detailed answer booklet with full mark scheme to make marking easy.', '5', 10, '', '15/03/2018'),
(32, 'National 5 Computing Science 2017-18 SQA Specimen and Past Papers with Answers', '5.00', '10.00', 'computing-science-past-papers.jpg', 'Past papers for national 5s for computer science (SQA, 2017-18).', '5', 10, '', '15/03/2018'),
(33, 'SQA 2014 Past Paper National 5 Computing Science', '5.00', '10.00', 'nation5-computing-science-past-papers.jpg', 'Past papers for national 5s for computer science (SQA, 2017-18).', '5', 10, '', '15/03/2018'),
(34, 'Teach Yourself Java in 24 Hours', '5.00', '10.00', 'java.jpg', 'In arenas ranging from enterprise development to Android app programming to game development, Java remains one of the worlds most popular programming languages. Sams Teach Yourself Java in 24 Hours helps Java beginners gain true mastery over the new Java 9.\r\n\r\nIn this book\'s straightforward, step by step approach, each lesson builds on everything thats come before, helping readers learn Javas core features and techniques from the ground up. Friendly, accessible, and conversational, this book offers a practical grounding in the language, without ever becoming overwhelming or intimidating.\r\n\r\nCoverage includes: learning programming basics; working with data and objects; programming graphical user interfaces; creating interactive web programs; handling errors; writing Internet and mobile apps; and much more.', '5', 10, '', '15/03/2018'),
(35, 'Java All-in-One for Dummies', '5.00', '10.00', 'java-all-in-one.jpg', 'If youve always wanted to program with Java but didnt know where to start, this will be the java stained reference youll turn to again and again. Fully updated for the JDK 9, this deep reference on the worlds most popular programming language is the perfect starting point for building things with Java and an invaluable ongoing reference as you continue to deepen your knowledge.\r\n\r\nClocking in at over 900 pages, Java All in One For Dummies takes the intimidation out of learning Java and offers clear, step by step guidance on how to download and install Java tools work with variables, numbers, expressions, statements, loops, methods, and exceptions create applets, servlets, and JavaServer pages handle and organize data and so much more.\r\n\r\nFocuses on the vital information that enables you to get up and running quickly with Java\r\n\r\nProvides details on the new features of JDK 9\r\n\r\nShows you how to create simple Swing programs\r\n\r\nIncludes design tips on layout, buttons, and labels\r\n\r\nEverything you need to know to program with Java is included in this practical, easy–to–use guide!', '5', 10, '', '15/03/2018'),
(36, 'Java in Easy Steps - 5th Edition', '5.00', '10.00', 'java-in-easy-steps.jpg', 'Java in easy steps instructs you how to easily create your own exciting Java programs. Now, updated for Java 8, it contains separate chapters on the major features of the Java language. Complete example programs with colorized code illustrate each important aspect of Java programming all in easy steps.\r\n\r\nNow, in its fifth edition, Java in easy steps begins by explaining how to download and install the free Java Development Kit (JDK) for the Java SE (Standard Edition) platform. This allows you to quickly begin creating your own executable programs by copying the examples.\r\n\r\nThis book assumes no previous knowledge of any programming language so its ideal for the newcomer to computer programming. Each chapter builds your knowledge of Java. By the end of this book you will have gained a sound understanding of the Java language and be able to write your own Java programs and compile them into executable files that can be run on any Java-enabled computer.', '5', 10, '', '15/03/2018');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(255) NOT NULL,
  `id` int(255) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_text` text NOT NULL,
  `review_score` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `id`, `review_name`, `review_text`, `review_score`) VALUES
(2, 31, 'Alex Lawrie', 'This book is great', 5),
(4, 31, 'Dave Dave', 'This is a terrible book!', 1),
(5, 32, 'Jim Bean', 'Its okay', 4),
(6, 13, 'bookworm123', 'This is the best book I have ever read! Highly recommend!', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `str` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `surname`, `email`, `password`, `str`, `ip_address`, `street_address`, `postcode`, `city`, `country`) VALUES
(6, 'Alex', 'Lawrie', 'alexlawrie123@gmail.com', 'YWMa0M4qOenQ6', 'YWxleA==', '127.0.0.1', '37/5 Gilmerton Place', 'eh17 8tp', 'Edinburgh', 'United Kingdom'),
(7, 'dave', 'dave', 'dave@dave.dave', 'YWosMXdYmG3XM', 'YWxleA==', '127.0.0.1', 'dave', 'dave', 'dave', 'dave');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_page`
--
ALTER TABLE `front_page`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
