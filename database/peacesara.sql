-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2016 at 08:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peacesara`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ArticleID` int(11) NOT NULL,
  `Title` varchar(5000) NOT NULL,
  `Author` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Source` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ArticleID`, `Title`, `Author`, `Date`, `Image`, `Description`, `Source`) VALUES
(1, 'Twelve Secrets to Living Without Stress and Anxiety', 'Remez Sasson', '2016-09-24', 'img/1.png', 'Everyone would agree that life can be happier and healthier, without stress and anxiety. Your attitude, your expectations, and the way you think, have much to do with whether you get stressed and anxious easily, or can stay calm and positive. Below you will find a few secrets and tips that can help you.\r\nPlease remember that everything you read can only help, if you think about what you read and put it into practice.\r\n <br><br>\r\n1. Anxieties, fears and worries feed on your attention. The more attention you give them, the stronger they grow. The less attention you give them, the weaker they get. <br><br>\r\n\r\n2. Learn to let go. Don''t hold on to unpleasant memories and oppressing thoughts. <br><br>\r\n\r\n3. Don''t depend for your self esteem on what people say or think about you. <br><br>\r\n\r\n4. Don''t always seek the approval of other people.<br><br>\r\n\r\n5. Don''t promise more than you can deliver.<br><br>\r\n\r\n6. Plan carefully your time in respect to tasks, chores or goal.<br><br>\r\n\r\n7. Develop the habit of emotional and mental detachment.<br><br>\r\n\r\n8. Leave early wherever you go, and you will avoid the stress and anxiety of not arriving on time.<br><br>\r\n\r\n9. You can choose to let thoughts of fear and anxiety build up in your mind, and you can choose to refuse admitting such thoughts into your mind.<br><br>\r\n\r\n10. You can choose to be upset by circumstances, and you can choose to keep calm and in control of yourself. This is a matter of choice, attitude and training.<br><br>\r\n\r\n11. Too much attachment is a sign of fear. Let go of fear and attachment.<br><br>\r\n\r\n12. A positive attitude reduces stress and anxiety.<br><br>\r\n\r\nDid you like the article? Please tell your friends about it.\r\n', 'http://www.successconsciousness.com/without-stress-anxiety.htm'),
(2, 'Five steps to manage and resolve conflict in the workplace', 'Pamela Wigglesworth', '2010-11-02', 'img/2.jpg', 'Conflict is no stranger to any of us. We experience it in our daily lives – with our families, friends and increasingly in our professional lives. Conflict in the workplace causes many of us a great degree of discomfort, anger, frustration, sadness, and even pain.  It is a normal aspect of life. <br>\n\nToday we live in a flat world as one big global village.  There is an increase in work force diversity where organizations have teams of employees from different geographic locations, with diverse cultural and cognitive backgrounds and various outlooks. In the workplace where individuals have different perspectives toward the same issues, sooner or later there are bound to be disagreements.<br>\n\nConflict can happen when different views or opinions come to light. When conflict occurs the idea is not to try to prevent disagreements, rather to resolve and manage conflicts effectively. When individuals or teams are able to use appropriate resolution tools to address an issue, they are able keep their differences from escalating into problems. If the issues can be viewed constructively as nothing more that different points of views, it sets the stage for a positive outcomes.<br>\n\nEstablishing some type of conflict management process within an organization is far better than allowing avoidance, denial, passive-aggressive indirectness, or plotting how to get even to take place amongst the employees. In the conflict resolution process, both individuals and teams are able to explore and understand their differences and use the information to interact in a more positive and productive manner.<br>\n\nBelow are five basic steps to follow in resolving a conflict.<br>\n\n1. Identify a safe place and time to talk.\nIn order to allow for a constructive conversation, individuals generally need to feel that they are in a ‘safe place’ – one that allows them to take the risk involved for honest communication about the issues at hand. This means finding a private and neutral room; a location that isn’t the office of one person or the other.<br>\n\nEnsure the amount of time for a meeting is acceptable and appropriate for all parties. Complex disagreements can not be resolved in fifteen minutes or less. If time is limited, determine the criteria for the discussion and then fix a time and date for immediate follow up.<br><br>\n\n2. Clarify individual perceptions involved in the conflict.\nIt is important that each party involved in the conflict has an opportunity to express his or her perception or understanding of the conflict.  An issue can’t be solved if you are unclear what the problem is about.<br>\n\nStart by sorting out the parts of the conflict. Get straight to the heart of the matter and avoid any unrelated issues not pertaining to the conflict at hand.  Identify issues clearly and concisely and remove the emotion from the situation.<br>\n\nIt is important that each person recognize that everyone needs to be involved to be the most effective.<br><br>\n\n3. Practice taking an active and empathetic listening stance.\nTo obtain a positive outcome in negotiating solutions to workplace conflict, it is vital that we resist the desire force our ideas onto others and instead make a concerted effort to listen to what is being conveyed.<br>\n\nBy advocating empathy, team members are able to identify the thoughts or feelings of the other person and have the capacity to understand the other person’s point of view. When teams take a listening stance into the negotiation process, they set the scene for the opportunity to share their concerns about the conflict.<br><br>\n\n4. Generate options with the vision of a win-win outcome.\nIn conflict resolution a win-win strategy is a process that aims to accommodate all parties and arises out of sense of fairness. Explore and be creative in searching for alternatives <br>\n\nBegin by taking one concern at a time, starting with an issue that the parties agree is worthy of discussion. Generate several possible solutions to the problem by collectively brainstorming ideas.  Write down the various ideas on a flip chart. Defer any judgments or evaluations at this stage until all ideas have been presented to the group.<br>\n\nClarify the criteria that the individuals or team will use for evaluating options. This ensures everyone is on the same page and, with mutually acceptable criteria, good solutions to problems become easier to formulate.<br><br>\n\n5. Develop an agreement that works for all. \nAt the conclusion of the negotiation process and the team has reached an agreement regarding solutions to each of the problems, summarize the ideas and put them in writing. Restate them back to each other to ensure everyone agrees with both the intent of the solution and how it is to be carried out.\nAs the conversation comes to a close, leave the session with a commitment to implement the plans that you have just created.<br>\n\nSo next time an issue or concern arises at the workplace, don’t avoid it by acting like an ostrich with his head in the sand; employ your conflict resolutions skills and face the issue head on before it escalates into a conflict requiring intervention.<br><br>', 'http://experiential.sg/five-steps-to-manage-resolve-conflict-in-the-workplace/'),
(3, '10 tips and tactics for dealing with conflict', 'John McKee', '2009-09-03', 'img/3.jpg', 'A little common sense and preemptive action can defuse conflicts before they get out of hand. These tips will help you manage and resolve touchy situations.\n\n\nOne of the most important skills you can learn and develop is how to deal successfully with conflict. Successful individuals seem to have an inherent understanding of what causes conflicts and how to resolve them quickly. For others, however, it''s much harder.\n\nDuring my 30 years in executive suites and boardrooms, I''ve worked with people at all levels, in a wide swath of industries and across many countries. During those periods, I''ve learned that the best conflict managers often employ a few common approaches to prevent or overcome potential issues before they become major obstacles.\n\nUse the following tips and tactics in your professional as well as your personal life. It could help you to become one those great "conflict resolution experts" that others may call on for help.\n\nNote: This article is also available as a PDF download.\n\n1: Ask questions\nConflict can arise due to poor communication — someone didn''t say what they meant to say or perhaps misstated what was intended. Before you allow an escalation, ask questions. It won''t cause any loss of face, and may result in a quick resolution.\n\n2: Analyze expectations\nOften, conflicts develop as a result of unmet expectations on one side. If the other party — expected something they didn''t get or something that didn''t happen, the whole conversation can become negative and closed. If a conversation seems to be getting rocky, take a step back and review together with the other person to try to uncover what just occurred.\n\n3: Recognize differing perspectives\nKeep in mind that conflict may arise due to people having different perceptions. You, or the other person, saw things differently. This happens most frequently when one is dealing with someone from another organization, background, or culture. It''s easy to believe that we all see things the same way and then get derailed unexpectedly.\n\n4. Identify mistakes\nHonest and unintended mistakes frequently result in conflict. Before you let temperatures rise, do a reality check of your understanding with the other person(s). Mistakes, even small ones, can erode one''s credibility — someone made a mistake.\n\n5: Watch out for emotional triggers\nBeware of emotions. Fear of someone or somebody, loss of face, whether real or perceived, anger, and surprisingly even excitement can all result in unintended conflict, which may cause your interaction to go downhill.\n\n6: Focus on preventing escalation\nConflict resolutions always start with one or both parties making an honest attempt at avoiding further escalation. This recognition, even if only by one of those involved, often causes a more objective review to occur.\n\n7: Take action to control the situation\nEscalation-avoidance tactics may involve one of more key steps including separating the parties, changing the location of the discussion, signaling empathy to the other involved.\n\n8: Commit to working it out\nTake charge of the process by committing to reach a resolution. A powerful impact occurs when one person makes this statement. It can turn down the temperature immediately.\n\n9: De-escalate the conflict\nDe-escalation is next: This can be accomplished with a joint statement of the facts at hand, always eliminating exaggerations, embellishments or personalities, which may inadvertently apply judgments and re-created the cycle of escalation.\n\n10: Stay calm\nCooler heads prevail in even the most difficult conflicts. Whether you''re in a business or personal situation, you can take control of it by keeping cool. And when you''re maintaining your calm, it will be easier for others involved to get back to the task at hand.', 'http://www.techrepublic.com/blog/10-things/10-tips-and-tactics-for-dealing-with-conflict/'),
(4, 'Peace of Mind Tips and Advice', 'Remez Sasson', '2016-09-24', 'img/4.jpg', 'What Is Peace of Mind?<br>\r\n\r\nPeace of mind is a state of mental and emotional calmness, with no worries, fears or stress. In this state, the mind is quiet, and you experience a sense of happiness and freedom.<br>\r\n\r\nSuch peaceful moments are not so rare. You have experienced them in the past, at times when you were engaged in some kind of an absorbing or interesting activity. Here are a few examples:<br>\r\n\r\nWatching an entertaining movie or TV program.\r\nBeing in the company of someone you love.\r\nBeing absorbed in reading a book.\r\nLying on the sand at the beach.\r\nOn vacation, when you experience some sort of mental numbness, forgetting your work and day-to-day-life.\r\nIn deep asleep, when you are not aware of anything.\r\nSuch activities, and similar ones, take away the mind from its usual thoughts and worries, replacing them with an experience of inner peace.\r\n\r\nThe question is, how to bring more peace of mind into our life, and more importantly, how to experience it in times of difficulties and ordeals.\r\n\r\nYou might also ask, whether it is possible to turn it into a habit, and enjoy it always and under all circumstances. Actually, there are a few things you can do to enjoy more peace in your life.\r\n\r\nTips and Advice for Peace of Mind\r\n\r\nMinimize the time you spend on reading newspapers or watching the news on TV. Since most of the news are negative news, and you cannot do anything about them, why should you think about them and feel stressed and anxious?\r\nStay away from negative conversations and from negative people. You don''t want their thoughts and words to sink into your subconscious mind and affect your moods and state of mind.\r\nDon''t hold grudges. Learn to forget and forgive. Nurturing ill feelings and grievances hurts you and causes lack of sleep.\r\nDon''t be jealous of others. Jealousy means that you have low self-esteem, and therefore, consider yourself inferior to others. Jealousy and low self esteem, often, lead to lack of peace of mind.\r\nAccept what cannot be changed. This saves a lot of time, energy and worries. Every day, we face numerous inconveniences, irritations and situations that are beyond our control. If we can change them, that''s fine, but this is not always possible. We must learn to put up with such things and accept them cheerfully.\r\nDon''t dwell on the past. The past is not here anymore, so why think about it? Let bygones be gone. Forget the past and focus on the present moment. There is no need to evoke unpleasant memories and get immersed in them.\r\nLearn to be more patient and tolerant with family, friends, co-workers, employees, and everyone else.\r\nDon''t take everything too personally. A certain degree of emotional and mental detachment is very helpful. On many occasions, it would be useful to inject a certain measure of detachment and non involvement. This would bring into your life more peace, harmony and common sense.\r\nLearn to focus your mind. When you can focus your mind, you can more easily reject worries and anxieties, refuse to think negative thoughts, and reduce the constant chatter of your mind.\r\nMeditation is not everyone''s cup of tea, but if you have the time, and are willing to try it, even just a few minutes a day will make a difference in your life. You will become more peaceful, relaxed and happy.\r\nInner peace eventually, leads to external peace. By creating peace in your inner world, in your mind, you bring it into your external world, and into other people''s lives.', 'http://www.positivityblog.com/index.php/2009/05/15/5-simple-ways-to-increase-your-peace-of-mind/'),
(5, '5 Conflict Management Strategies', 'Eric Dontigney', '2016-09-24', 'img/5.jpg', 'In any situation involving more than one person, conflict can arise. The causes of conflict range from philosophical differences and divergent goals to power imbalances. Unmanaged or poorly managed conflicts generate a breakdown in trust and lost productivity. For small businesses, where success often hinges on the cohesion of a few people, loss of trust and productivity can signal the death of the business. With a basic understanding of the five conflict management strategies, small business owners can better deal with conflicts before they escalate beyond repair.<br><br>\r\n\r\nAccommodating<br>\r\nThe accommodating strategy essentially entails giving the opposing side what it wants. The use of accommodation often occurs when one of the parties wishes to keep the peace or perceives the issue as minor. For example, a business that requires formal dress may institute a "casual Friday" policy as a low-stakes means of keeping the peace with the rank and file. Employees who use accommodation as a primary conflict management strategy, however, may keep track and develop resentment.<br><br>\r\n\r\nAvoiding<br>\r\nThe avoidance strategy seeks to put off conflict indefinitely. By delaying or ignoring the conflict, the avoider hopes the problem resolves itself without a confrontation. Those who actively avoid conflict frequently have low esteem or hold a position of low power. In some circumstances, avoiding can serve as a profitable conflict management strategy, such as after the dismissal of a popular but unproductive employee. The hiring of a more productive replacement for the position soothes much of the conflict.<br><br>\r\n\r\nCollaborating<br>\r\nCollaboration works by integrating ideas set out by multiple people. The object is to find a creative solution acceptable to everyone. Collaboration, though useful, calls for a significant time commitment not appropriate to all conflicts. For example, a business owner should work collaboratively with the manager to establish policies, but collaborative decision-making regarding office supplies wastes time better spent on other activities..<br><br>\r\n\r\nCompromising<br>\r\nThe compromising strategy typically calls for both sides of a conflict to give up elements of their position in order to establish an acceptable, if not agreeable, solution. This strategy prevails most often in conflicts where the parties hold approximately equivalent power. Business owners frequently employ compromise during contract negotiations with other businesses when each party stands to lose something valuable, such as a customer or necessary service.\r\n<br><br>\r\nCompeting<br>\r\n\r\nCompetition operates as a zero-sum game, in which one side wins and other loses. Highly assertive personalities often fall back on competition as a conflict management strategy. The competitive strategy works best in a limited number of conflicts, such as emergency situations. In general, business owners benefit from holding the competitive strategy in reserve for crisis situations and decisions that generate ill-will, such as pay cuts or layoffs.<br><br>', 'http://smallbusiness.chron.com/5-conflict-management-strategies-16131.html');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `DiscussionID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ComTypeID` int(11) NOT NULL,
  `Comment` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comtype`
--

CREATE TABLE `comtype` (
  `ComTypeID` int(11) NOT NULL,
  `ComTypeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `DiscussionID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(10000) NOT NULL,
  `Image` blob NOT NULL,
  `Video` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `DonationID` int(11) NOT NULL,
  `DonationTitle` varchar(5000) NOT NULL,
  `DonationURL` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `EventID` int(11) NOT NULL,
  `EventTitle` varchar(500) NOT NULL,
  `EventDate` varchar(200) NOT NULL,
  `EventPlace` varchar(500) NOT NULL,
  `EventDesc` varchar(500) NOT NULL,
  `EventURL` varchar(500) NOT NULL,
  `EventImage` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`EventID`, `EventTitle`, `EventDate`, `EventPlace`, `EventDesc`, `EventURL`, `EventImage`) VALUES
(1, 'No War 2016: Real Security Without Terrorism', 'September 25, 2016', 'Washington, DC, USA', 'The US based group World Beyond War are planning a major peace conference in Washington DC', 'http://worldbeyondwar.org', 'img/peacehack/event1.jpg'),
(1, 'Abolition 2000 Annual Meeting', 'September 29, 2016', 'Technische Universitat Berlin, Germany', 'Join nuclear disarmament activists from around the world to share campaign reports, discuss nuclear disarmament strategy, highlight opportunities for action and plan further campaigns.', 'https://www.facebook.com/events/1101237089915196/', 'img/peacehack/event2.jpg'),
(3, 'IPB World Conference on Disarmament for Development', 'September 30, 2016', 'Technische Universitat Berlin, Germany', 'IPB is planning a World Congress under the title Disarm! For a Climate of Peace. We expect that it will attract global attention and a large number of participants.', 'https://www.ipb2016.berlin/', 'img/peacehack/event3.jpg'),
(4, 'Independent and Peaceful Australia Network National Conference', 'September 30, 2016', 'Alice Spring, Australia', 'IPAN Conference during a week of protest activity at Alice Spring to mark the ongoing use of Pine Gap in US led wars and mass surveillance.', 'http://www.ipan.org.au/#/2016events', 'img/peacehack/event4.jpg'),
(5, 'International Anti-War Conference', 'October 8, 2016', 'Great Russell Street London, England', 'This international conference organised by Stop the War will discuss how we can address the present dangers and prevent catastrophes that lie ahead.', 'http://stopwar.org.uk/index.php/events/national-events/2082-08-october-london-15-years-on-time-to-stop-the-war', 'img/peacehack/event5.jpg'),
(6, 'International Week of Action against the Militarisation of Youth', 'November 14, 2016', 'Geneva, Switzerland', 'War Resisters'' International is organising the 3rd International Week of Action Against the Militarisation of Youth from 14 to 20 November this year. The week is a concerted effort of antimilitarist actions across the world to raise awareness of, and challenge, the ways young people are militarised, and to give voice to alternatives.', 'http://www.wri-irg.org/node/25159', 'img/peacehack/event6.jpg'),
(7, 'IPRA Conference Sierra Leone', 'November 27, 2016', 'Freetown, Sierra Leone', 'War Resisters'' International is organising the 3rd International Week of Action Against the Militarisation of Youth from 14 to 20 November this year. The week is a concerted effort of antimilitarist actions across the world to raise awareness of, and challenge, the ways young people are militarised, and to give voice to alternatives.', 'http://www.wri-irg.org/node/25159', 'img/peacehack/event7.jpg'),
(8, 'The 6th Prague Agenda Conference', 'December 1, 2016', 'Prague, Czech Republic', 'Since President Obama’s 2009 announcement of his long-term nuclear disarmament vision in Prague and the following signing of the 2010 US-Russia START Treaty, Prague has established itself as a venue for discussion and taking stock of issues related to nuclear arms control, nuclear security, disarmament and non-proliferation.', 'http://pragueagenda.iir.cz/', 'img/peacehack/event8.jpg'),
(9, '6th International Conference on Gender Studies; “Gender, Conflict, War and Peace”', 'March 23, 2017', 'Famagusta, North Cyprus, Turkey.  ', 'The Eastern Mediterranean University - Center for Women Studies, is organising its 6th International Conference on Gender Studies and the theme for 2017 is: Gender, Conflict, War and Peace. The date of the conference is March 23-25, 2017.', 'http://gwp17.emu.edu.tr/en', 'img/peacehack/event9.jpg'),
(10, 'Triennial Conference of the International Network of Museums for Peace', 'April 10, 2017', 'Belfast', '25th anniversary of the founding of International Network of Museums for Peace. The conference theme, “Cities as Living Museums for Peace,” will highlight Belfast’s social and political transformation – from a divided, troubled city to a one which models peace consciousness through post-conflict healing and reconciliation.', 'http://www.museumsforpeace.org/', 'img/peacehack/event10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `TypeID` int(11) NOT NULL,
  `TypeName` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Image` varchar(500) DEFAULT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `TypeID` int(11) NOT NULL,
  `DateRegistered` date DEFAULT NULL,
  `DateModified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Image`, `Username`, `Email`, `Contact`, `Password`, `Address`, `TypeID`, `DateRegistered`, `DateModified`) VALUES
(1, 'Renche', 'Dalida', '', 'rencheadams', 'renche.adams.16@gmail.com', 'Renche Adams Dalida', 'renche16', 'Blk 1 Lot 11 Everlasting St.', 2, '2016-09-22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ArticleID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`);

--
-- Indexes for table `comtype`
--
ALTER TABLE `comtype`
  ADD PRIMARY KEY (`ComTypeID`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`DiscussionID`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`DonationID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`TypeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comtype`
--
ALTER TABLE `comtype`
  MODIFY `ComTypeID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `DiscussionID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `DonationID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `TypeID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
