

--
-- Database: `IRR`
--

-- --------------------------------------------------------

--
-- Table structure for table `As_classification`
--

CREATE TABLE IF NOT EXISTS `As_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `FFs_classification`
--

CREATE TABLE IF NOT EXISTS `FFs_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `FF_classification`
--

CREATE TABLE IF NOT EXISTS `FF_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `Fs_classification`
--

CREATE TABLE IF NOT EXISTS `Fs_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `FUN_classification`
--

CREATE TABLE IF NOT EXISTS `FUN_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `F_classification`
--

CREATE TABLE IF NOT EXISTS `F_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `INC_classification`
--

CREATE TABLE IF NOT EXISTS `INC_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `OO_classification`
--

CREATE TABLE IF NOT EXISTS `OO_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `PFs_classification`
--

CREATE TABLE IF NOT EXISTS `PFs_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `PF_classification`
--

CREATE TABLE IF NOT EXISTS `PF_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE IF NOT EXISTS `responses` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `age` int(11) NOT NULL,
  `agr` int(11) NOT NULL,
  `ext` int(11) NOT NULL,
  `con` int(11) NOT NULL,
  `es` int(11) NOT NULL,
  `oe` int(11) NOT NULL,
  `rating` int(255) NOT NULL,
  `response` text NOT NULL,
  `jpclass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `strategies`
--

CREATE TABLE IF NOT EXISTS `strategies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `SUP_classification`
--

CREATE TABLE IF NOT EXISTS `SUP_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `TNO_classification`
--

CREATE TABLE IF NOT EXISTS `TNO_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_classification`
--

CREATE TABLE IF NOT EXISTS `user_classification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `classification0` varchar(255) NOT NULL,
  `classification1` varchar(255) NOT NULL,
  `classification2` varchar(255) NOT NULL,
  `classification3` varchar(255) NOT NULL,
  `classification4` varchar(255) NOT NULL,
  `classification5` varchar(255) NOT NULL,
  `classification6` varchar(255) NOT NULL,
  `classification7` varchar(255) NOT NULL,
  `classification8` varchar(255) NOT NULL,
  `classification9` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
