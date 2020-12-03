
--
-- Database: `weselldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(50) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `second_name` varchar(20) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `first_name`, `second_name`, `phone`, `password`) VALUES
('neeluchawla841@gmail.com', 'Chawla', 'Chawla', '5146515850', 'f56a24c4bb9079ef7223f4e41d210061'),
('neeluchawla84@gmail.com', 'Chawla', '', '5146515850', 'Test123$');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);
COMMIT;
