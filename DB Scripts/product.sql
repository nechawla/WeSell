
--
-- Database: `weselldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(3) NOT NULL,
  `productName` varchar(20) DEFAULT NULL,
  `productDescription` varchar(50) NOT NULL,
  `unitPrice` int(5) DEFAULT NULL,
  `imageName` varchar(50) NOT NULL,
  `quantity` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productDescription`, `unitPrice`, `imageName`, `quantity`) VALUES
(1, 'iphone 10', 'iphone 10 is 10 generation iphone', 600, 'iphone10.jpg', 10),
(2, 'Samsung S10', 'samsung galaxy 10 generation', 700, 'samsungS10.jpg', 20),
(3, 'iphone 12 pro max', 'When measured as a standard rectangular shape, the', 1500, 'iphone12promax.jpg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`),
  ADD UNIQUE KEY `productName` (`productName`);
COMMIT;

