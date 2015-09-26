--
-- Table structure for table `klochat`
--

CREATE TABLE IF NOT EXISTS `klochat` (
  `id` int(10) NOT NULL,
  `timestamp` int(10) NOT NULL DEFAULT '0',
  `user` varchar(80) NOT NULL DEFAULT '',
  `msg` text NOT NULL,
  `colorname` varchar(6) NOT NULL DEFAULT '',
  `colormsg` varchar(6) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klochat`
--
ALTER TABLE `klochat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klochat`
--
ALTER TABLE `klochat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
