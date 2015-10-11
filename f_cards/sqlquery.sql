
--
-- Table structure for table `ajaxpage`
--

CREATE TABLE IF NOT EXISTS `infinitescroll` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ajaxpage`
--

INSERT INTO `ajaxpage` (`id`, `firstname`, `lastname`) VALUES
(1, 'sanjeev', 'shrivastava'),
(2, 'demo', 'demo'),
(3, 'jayant', 'jain'),
(4, 'sattu ', 'don'),
(5, 'ddd', 'ddddd'),
(6, 'fffff', 'ffffffff'),
(7, 'fffff', 'fffffffff'),
(8, 'ffffffffff', 'fffffffffffffff'),
(9, 'gfd', 'dfgdfgdfg'),
(10, 'gfhgdfg', 'dfgdfgdfgdfg'),
(11, 'dffds', 'fdssssssssssssssss'),
(12, 'sfdddddddddddd', 'dfssssssssssssssss'),
(13, 'fffff', 'fffffffff'),
(14, 'ffffffffff', 'fffffffffffffff'),
(15, 'gfd', 'dfgdfgdfg'),
(16, 'gfhgdfg', 'dfgdfgdfgdfg'),
(17, 'dffds', 'fdssssssssssssssss'),
(18, 'sfdddddddddddd', 'dfssssssssssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `ajaxtable`
--

CREATE TABLE IF NOT EXISTS `ajaxtable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ajaxtable`
--

INSERT INTO `ajaxtable` (`id`, `firstname`, `lastname`, `domain`, `email`) VALUES
(1, 'gbvb', 'hbjhbj', 'bnmnmnb', 'bnnn@fdf.vhbh'),
(2, 'hjghgh', 'vg', 'hjggj', 'sasa@sasa.vim');

-- --------------------------------------------------------

--
-- Table structure for table `demoajax`
--

CREATE TABLE IF NOT EXISTS `demoajax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `domain` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `demoajax`
--

INSERT INTO `demoajax` (`id`, `firstname`, `lastname`, `domain`, `email`) VALUES
(1, 'sanjeev', 'shrivastava', 'infotuts', 'sanjsseev00733@gmail.com'),
(2, 'InfoTuts', 'InfoTuts', 'InfoTuts.com', 'admin@infotuts.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
