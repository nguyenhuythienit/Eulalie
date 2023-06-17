-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 10:29 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eulalie`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethd`
--

CREATE TABLE `chitiethd` (
  `idcthd` int(11) NOT NULL,
  `idhd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `giaban` double(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `idhd` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `hoten` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` date NOT NULL,
  `trangthai` bit(1) NOT NULL DEFAULT b'0',
  `gcuser` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gcadmin` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `idloai` int(11) NOT NULL COMMENT 'Mã Loại',
  `tenloai` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên Loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`idloai`, `tenloai`) VALUES
(3, 'nh01'),
(4, 'nh02'),
(5, 'nh03'),
(12, '  anhba2 '),
(13, 'nuochoanam'),
(14, 'nuochoanu'),
(15, 'anh3');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `idloai` int(11) NOT NULL,
  `tensp` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` double(10,3) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `tintuc` text COLLATE utf8_unicode_ci NOT NULL,
  `binhluan` text COLLATE utf8_unicode_ci NOT NULL,
  `anhien` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `idloai`, `tensp`, `img`, `dongia`, `soluotxem`, `tintuc`, `binhluan`, `anhien`) VALUES
(6, 3, 'Channel Coco Noir EDP 100ml', '2.jpg', 3980000.000, 1, 'COCO NOIR là hiện thân của sắc đen huyền bí khơi gợi vẻ đẹp nữ tính quyến rũ. Những xúc cảm mãnh liệt được lột tả hoàn hảo trong một mùi hương hổ phách hiện đại với những nốt hương bừng sáng rạng ngời. Một sáng tạo nguyên bản.', 'Sản phẩm tuyệt vời', 0),
(7, 3, 'Gucci Bloom For Women EDP 100ml', '3.jpg', 3490000.000, 1, 'Thương hiệu thời trang nổi tiếng Gucci vừa cho ra mắt sản phẩm nước hoa mới Gucci Bloom For Women EDP 100ml vào tháng 8/2017. Hương nước hoa đầu tiên dưới bàn tay của nhà sáng tạo Alesxandro Michele. Đây chính là hương nước hoa được yêu thích bậc nhất bởi sự quyến rũ mà nó mang lại.', '', 0),
(8, 3, 'Calvin Klein Defy For Men', '4.jpg', 2400000.000, 1, 'Thương hiệu Calvin Klein vừa cho ra mắt  hoa dành cho nam giới DEFY trong năm 2021 với sự sáng tạo của 3 nhà chế tác nước hoa nổi tiếng gồm Anne Flipo, Loc Dong và Pascal Gaurin. Sự đặc biệt trong mùi hương này đó một sự thách thức như chính tên gọi, một nhiệm vụ làm sống lại các nốt hương kinh điển nhưng mang một sắc thái mới hiện đại và phá cách hơn.', '', 0),
(10, 3, 'Chanel Coco Mademoiselle EDP 100ml', '1.jpg', 4030000.000, 0, 'Sau Coco, Coco Mademoiselle là một phiên bản bổ sung cho nét tính cách đầy tương phản của Gabrielle Chanel. Đó là biểu hiện cho nét nữ tính, một hương thơm sinh động, tươi mát và phức cảm dành cho những phụ nữ thanh lịch và quý phái và kiêu sa.\n\n', '', 0),
(11, 3, 'Gucci Flora By Gucci Gorgeous Gardenia 100ml', '6.jpg', 2890000.000, 0, 'Flora by Gucci Gorgeous Gardenia là một trong năm phiên bản nước hoa mới ra đời vào tháng 5 – 2012 của dòng nước hoa Gucci. Mỗi loại có một mùi hương đặc trưng riêng có và rất phù hợp cho mùa hè này.', '', 0),
(13, 4, 'Gucci Guilty Pour Homme EDP 90ml', 'moi1.jpg', 2890000.000, 1, 'Guilty Pour Homme phiên bản EDP mới toanh vừa được thương hiệu Gucci cho ra mắt năm 2020. Guilty Pour Homme EDP nối tiếp cho việc tôn vinh sự tự do qua tuyên bố #ForeverGuilty, với hương thơm cay nồng của ớt hòa cùng hoa hồng tạo nên sự khiêu khích mãnh liệt và say đắm.', '', 0),
(14, 4, 'Dior Sauvage EDP 100ml', 'moi2.jpg', 3490000.000, 0, 'Vào năm 2018, Dior giới thiệu phiên bản mới của Dior Sauvage đã ra mắt vào năm 2015 với nồng độ Eau De Parfum. Các thành phần với hơi hướng phương Đông và vani. Tạo nên mùi hương ngọt ngào, bí ẩn và gợi cảm.', '', 0),
(16, 4, 'Dior Sauvage Parfum 60ml', 'moi3.jpg', 2990000.000, 0, 'Dior Sauvage Eau De Toilette ra mắt từ năm 2015 đã làm “bấn loạn” giới yêu nước hoa bởi hương thơm vừa quyến rũ, vừa hoang dại. Và 2018 này hãng tung ra phiên bản Dior Sauvage Eau De Parfum tăng cường độ lưu hương để thỏa mãn các tín đồ nước hoa.', '', 0),
(17, 4, 'Calvin Klein CK Be 100ml', 'moi4.jpg', 1290000.000, 0, 'Nước hoa CK Be được thương hiệu Calvin Klein cho ra mắt vào năm 1996 bởi nhà sáng lập Ann Gottlieb đến nay vẫn luôn nhận được sự yêu thích của nhiều người, bất kể tuổi tác hay giới tính.', '', 0),
(19, 4, 'Chanel Chance Eau Tendre EDP 100ml', 'moi5.jpg', 3740000.000, 22, 'Một sự đổi mới trong những nốt hương tạo nên nét tươi mới cho dòng sản phẩm nước hoa của Chanel. Chance Eau Tendre đã đem đến sự đột phá với phong cách tao nhã, dường như biến mọi cô gái trở nên nàng thơ với vẻ đẹp thuần khiết lấp lánh điệu dáng tươi vui.', '', 0),
(20, 5, 'Chanel Coco Mademoiselle Intense EDP 100ml', 'yt1.jpg', 4790000.000, 0, 'Trong tất cả các loại nước hoa CHANEL hiện đại, nước hoa nữ Chanel Coco Mademoiselle Intense EDP được xem như là biểu tượng nhất. Nó là No5 cho thời hiện đại và kể từ khi ra mắt vào năm 2001 Coco Chanel đã là mùi thơm được lựa chọn của tất cả thế hệ phụ nữ. Cha đẻ của Coco Chanel là Oliver Polge, và Chanel cho ra mắt vào năm 2018 này.', '', 0),
(21, 5, 'Dior Miss Dior EDP 2021 100ml', 'yt2.jpg', 3890000.000, 0, 'Phiên bản 2021 của dòng nước hoa huyền thoại Miss Dior chính thức được giới thiệu đến công chúng với sắc hồng tím ngọt lịm và chiếc nơ truyền thống trên cổ chai đã được thay đổi bằng chiếc nơ vải ánh bạc điệu đà, nữ tính. ', '', 0),
(22, 5, 'Channel Coco Noir EDP 100ml', 'yt3.jpg', 3870000.000, 1, 'COCO NOIR là hiện thân của sắc đen huyền bí khơi gợi vẻ đẹp nữ tính quyến rũ. Những xúc cảm mãnh liệt được lột tả hoàn hảo trong một mùi hương hổ phách hiện đại với những nốt hương bừng sáng rạng ngời. Một sáng tạo nguyên bản.', '', 0),
(23, 5, 'Dior Sauvage Parfum 60ml', 'yt4.jpg', 2990000.000, 0, 'Dior Sauvage Eau De Toilette ra mắt từ năm 2015 đã làm “bấn loạn” giới yêu nước hoa bởi hương thơm vừa quyến rũ, vừa hoang dại. Và 2018 này hãng tung ra phiên bản Dior Sauvage Eau De Parfum tăng cường độ lưu hương để thỏa mãn các tín đồ nước hoa.', '', 0),
(24, 5, 'Calvin Klein CK Be 100ml', 'yt5.jpg', 1290000.000, 222, 'Nước hoa CK Be được thương hiệu Calvin Klein cho ra mắt vào năm 1996 bởi nhà sáng lập Ann Gottlieb đến nay vẫn luôn nhận được sự yêu thích của nhiều người, bất kể tuổi tác hay giới tính.', '', 0),
(127, 13, 'Gucci Guilty Pour Homme EDP 90ml', 'moi1.jpg', 2890000.000, 1, 'Guilty Pour Homme phiên bản EDP mới toanh vừa được thương hiệu Gucci cho ra mắt năm 2020. Guilty Pour Homme EDP nối tiếp cho việc tôn vinh sự tự do qua tuyên bố #ForeverGuilty, với hương thơm cay nồng của ớt hòa cùng hoa hồng tạo nên sự khiêu khích mãnh liệt và say đắm.', '', 0),
(129, 13, 'Calvin Klein Defy For Men', '4.jpg', 2400000.000, 2, 'Thương hiệu Calvin Klein vừa cho ra mắt  hoa dành cho nam giới DEFY trong năm 2021 với sự sáng tạo của 3 nhà chế tác nước hoa nổi tiếng gồm Anne Flipo, Loc Dong và Pascal Gaurin. Sự đặc biệt trong mùi hương này đó một sự thách thức như chính tên gọi, một nhiệm vụ làm sống lại các nốt hương kinh điển nhưng mang một sắc thái mới hiện đại và phá cách hơn.', '', 0),
(130, 14, 'Chanel Coco Mademoiselle EDP 100ml', '1.jpg', 4030000.000, 4, 'Sau Coco, Coco Mademoiselle là một phiên bản bổ sung cho nét tính cách đầy tương phản của Gabrielle Chanel. Đó là biểu hiện cho nét nữ tính, một hương thơm sinh động, tươi mát và phức cảm dành cho những phụ nữ thanh lịch và quý phái và kiêu sa.', '', 0),
(131, 14, 'Gucci Bloom For Women EDP 100ml', '3.jpg', 3490000.000, 6, 'Thương hiệu thời trang nổi tiếng Gucci vừa cho ra mắt sản phẩm nước hoa mới Gucci Bloom For Women EDP 100ml vào tháng 8/2017. Hương nước hoa đầu tiên dưới bàn tay của nhà sáng tạo Alesxandro Michele. Đây chính là hương nước hoa được yêu thích bậc nhất bởi sự quyến rũ mà nó mang lại.', '', 0),
(132, 14, 'Channel Coco Noir EDP 100ml', '2.jpg', 3980000.000, 8, 'COCO NOIR là hiện thân của sắc đen huyền bí khơi gợi vẻ đẹp nữ tính quyến rũ. Những xúc cảm mãnh liệt được lột tả hoàn hảo trong một mùi hương hổ phách hiện đại với những nốt hương bừng sáng rạng ngời. Một sáng tạo nguyên bản.', '', 0),
(133, 14, 'Gucci Flora By Gucci Gorgeous Gardenia 100ml', '6.jpg', 2890000.000, 9, 'Flora by Gucci Gorgeous Gardenia là một trong năm phiên bản nước hoa mới ra đời vào tháng 5 – 2012 của dòng nước hoa Gucci. Mỗi loại có một mùi hương đặc trưng riêng có và rất phù hợp cho mùa hè này.', '', 0),
(134, 13, 'Dior Sauvage EDP 100ml', 'moi2.jpg', 2800000.000, 3, 'Vào năm 2018, Dior giới thiệu phiên bản mới của Dior Sauvage đã ra mắt vào năm 2015 với nồng độ Eau De Parfum. Các thành phần với hơi hướng phương Đông và vani. Tạo nên mùi hương ngọt ngào, bí ẩn và gợi cảm.', '', 0),
(135, 13, 'Dior Sauvage Parfum 60ml', 'moi3.jpg', 2990000.000, 4, 'Dior Sauvage Eau De Toilette ra mắt từ năm 2015 đã làm “bấn loạn” giới yêu nước hoa bởi hương thơm vừa quyến rũ, vừa hoang dại. Và 2018 này hãng tung ra phiên bản Dior Sauvage Eau De Parfum tăng cường độ lưu hương để thỏa mãn các tín đồ nước hoa.', '', 0),
(137, 13, 'Calvin Klein CK Be 100ml', 'moi4.jpg', 1290000.000, 4, 'Nước hoa CK Be được thương hiệu Calvin Klein cho ra mắt vào năm 1996 bởi nhà sáng lập Ann Gottlieb đến nay vẫn luôn nhận được sự yêu thích của nhiều người, bất kể tuổi tác hay giới tính.', '', 0),
(138, 14, 'Chanel Chance Eau Tendre EDP 100ml', 'moi5.jpg', 3740000.000, 7, 'Một sự đổi mới trong những nốt hương tạo nên nét tươi mới cho dòng sản phẩm nước hoa của Chanel. Chance Eau Tendre đã đem đến sự đột phá với phong cách tao nhã, dường như biến mọi cô gái trở nên nàng thơ với vẻ đẹp thuần khiết lấp lánh điệu dáng tươi vui.', '', 0),
(139, 14, 'Dior Miss Dior EDP 2021 100ml', 'yt2.jpg', 2890000.000, 0, 'Phiên bản 2021 của dòng nước hoa huyền thoại Miss Dior chính thức được giới thiệu đến công chúng với sắc hồng tím ngọt lịm và chiếc nơ truyền thống trên cổ chai đã được thay đổi bằng chiếc nơ vải ánh bạc điệu đà, nữ tính. ', '', 0),
(141, 14, 'Chanel Coco Mademoiselle Intense EDP 100ml', 'yt1.jpg', 4790000.000, 3, 'Trong tất cả các loại nước hoa CHANEL hiện đại, nước hoa nữ Chanel Coco Mademoiselle Intense EDP được xem như là biểu tượng nhất. Nó là No5 cho thời hiện đại và kể từ khi ra mắt vào năm 2001 Coco Chanel đã là mùi thơm được lựa chọn của tất cả thế hệ phụ nữ. Cha đẻ của Coco Chanel là Oliver Polge, và Chanel cho ra mắt vào năm 2018 này.', '', 0),
(142, 13, 'Nước Hoa Nam Versace Eros Man EDT 100ml', 'n1.jpg', 2700000.000, 0, 'Nước Hoa Nam Versace Eros Man EDT 100ml là trai nước hoa nam lấy nguồn cảm hứng từ vị thần tình yêu hy lạp. Versace Eros là biểu tượng cho thần tình yêu Hy Lạp , là đại diện của tình yêu , là trung tập của các hương thơm.', '', 0),
(143, 13, 'Nước Hoa Nam Armaf Club De Nuit Intense For Man, 105ml', 'n2.jpg', 1800000.000, 5, 'Nước hoa Armaf Club De Nuit Intense For Man 105ml là chai nước hoa dành cho nam  huyền bí đầy mạnh mẽ cá tính từ hãng Armaf Ả Rập .Armaf Club De Nuit Intense biến một chàng trai trở nên cuốn hút bằng sự tươi mới, trẻ trung và gần gũi kể cả ngay lần gặp đầu tiên bằng hương vị trái cây thuần khiết, dân giã.', '', 0),
(144, 13, 'Chanel Bleu De Chanel EDP 5-ml', 'n3.jpg', 3135000.000, 6, 'Không chỉ nổi tiếng bậc nhất thế giới dòng nước hoa dành cho nữ giới mà Chanel còn khẳng định đẳng cấp của mình trong vai trò làm đẹp cho các đấng mày râu. Được cho ra mắt năm 2014, nước hoa nam Chanel Bleu De Chanel EDP phá vỡ mọi qui ước, mọi khuôn khổ, khiến nhiều người phải trầm trồ với hương thơm mới mẻ này.', '', 0),
(145, 14, 'Chanel Chance EDP', 'nu1.jpg', 3990000.000, 6, 'Chance trong tiếng Pháp có nghĩa là “May mắn”, may mắn đến với bạn khi bạn không mong đợi nó xảy ra nhất. Cũng như thế, nước hoa Chanel Chance đến với bạn một cách bất ngờ đầy thú vị trong một hương thơm với sắc màu óng ánh, bên trong chai được thiết kế hình tròn, biểu tượng cho vòng tròn may mắn.', '', 0),
(149, 12, '    thảo    ', '  ', 3.000, 3, '       3       ', '       3       ', 3),
(151, 15, ' huy  ', '  ', 0.000, 0, '  ', '  ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idtintuc` int(11) NOT NULL,
  `tieude` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` date NOT NULL,
  `hinhanh` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anhien` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `hoten` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chucvu` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `hoten`, `sdt`, `email`, `diachi`, `matkhau`, `hinhanh`, `chucvu`) VALUES
(1, 'thien', '0323537457', 'è', 's dfqef', '123', 'dqsd', b'1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD PRIMARY KEY (`idcthd`),
  ADD KEY `fk_chitiethd_sanpham` (`idsp`),
  ADD KEY `fk_chitiethd_hoadon` (`idhd`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhd`),
  ADD KEY `fk_hoadon_user` (`iduser`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idloai`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `fk_sanpham_loai` (`idloai`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtintuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethd`
--
ALTER TABLE `chitiethd`
  MODIFY `idcthd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã Loại', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethd`
--
ALTER TABLE `chitiethd`
  ADD CONSTRAINT `fk_chitiethd_hoadon` FOREIGN KEY (`idhd`) REFERENCES `hoadon` (`idhd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_chitiethd_sanpham` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_user` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_loai` FOREIGN KEY (`idloai`) REFERENCES `loai` (`idloai`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
