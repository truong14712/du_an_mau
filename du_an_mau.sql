-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2022 lúc 02:41 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_mau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL COMMENT 'mã bình luận',
  `noi_dung` text NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `ma_kh` varchar(255) NOT NULL,
  `ngay_bl` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'ngày bình luận'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `noi_dung`, `ma_hh`, `ma_kh`, `ngay_bl`) VALUES
(107, '1', 246, 'admin123', '2022-10-07 21:27:35'),
(109, 'Sản phẩm đẹp', 239, 'admin123', '2022-10-30 09:37:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL COMMENT 'mã hàng hóa',
  `ten_hh` varchar(255) NOT NULL COMMENT 'tên hàng hóa',
  `don_gia` int(11) NOT NULL DEFAULT 0 COMMENT 'đơn giá',
  `giam_gia` int(11) NOT NULL DEFAULT 0 COMMENT 'giảm giá đơn giá',
  `hinh` varchar(255) NOT NULL COMMENT 'ảnh',
  `ngay_nhap` date NOT NULL COMMENT 'ngày nhập',
  `mo_ta` text NOT NULL COMMENT 'mô tả hàng hóa',
  `dac_biet` bit(1) NOT NULL COMMENT 'trạng thái đặc biệt',
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `ma_loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ngay_nhap`, `mo_ta`, `dac_biet`, `so_luot_xem`, `ma_loai`) VALUES
(239, 'Laptop Apple MacBook Pro 16 M1 Max 2021', 83190000, 10, '../../content/./images/./product/vi-vn-apple-macbook-pro-16-m1-max-2021-1.jpg', '2022-10-04', 'Thật ấn tượng với Apple MacBook Pro 16 M1 Max 2021 mang trên mình \"bộ áo mới\" độc đáo, cuốn hút mọi ánh nhìn cùng màn hình tai thỏ lần đầu tiên xuất hiện ở dòng Mac và ẩn bên trong là bộ cấu hình mạnh mẽ tuyệt vời đến từ con chip M1 Max tân tiến', b'1', 126, 398),
(240, 'Laptop Dell Vostro 3510 i5 1135G7', 19890000, 5, '../../content/./images/./product/vi-vn-dell-vostro-3510-i5-p112f002bbl-1.jpg', '2022-10-04', 'Laptop Dell Vostro 3510 i5 (P112F002BBL) sở hữu cấu hình mạnh mẽ, đa nhiệm mượt mà trên sức mạnh của bộ vi xử lý Intel thế hệ 11, cùng một thiết kế đơn giản mà sang đẹp, sẽ là lựa chọn đắt giá đáp ứng nhu cầu học tập, làm việc hay giải trí của bạn.', b'1', 16, 401),
(241, 'Laptop Dell XPS 13 9310 i5 1135G7', 39990000, 8, '../../content/./images/./product/vi-vn-dell-xps-13-9310-i5-70273578-1.jpg', '2022-10-04', 'Laptop Dell XPS 13 9310 i5 1135G7 (70273578) sở hữu thiết kế hiện đại với màu bạc thời thượng cùng hiệu năng mạnh mẽ, xứng danh bạn đồng hành đắc lực trên mọi mặt trận.', b'1', 2, 401),
(242, 'Laptop Lenovo Yoga Slim 7 14IAL7 i5 1240P', 29990000, 5, '../../content/./images/./product/vi-vn-lenovo-yoga-slim-7-14itl05-i7-82a300dqvn-1.jpg', '2022-10-04', 'Một chiếc laptop cao cấp phục vụ tốt cho công việc thường xuyên phải di chuyển đòi hỏi thiết kế mỏng nhẹ cùng hiệu năng mạnh mẽ, laptop Lenovo Yoga Slim 7 14IAL7 i5 1240P (82QE000RVN) là sự lựa chọn hoàn hảo dành cho người dùng cần đáp ứng công việc mọi lúc mọi nơi.', b'1', 3, 400),
(243, 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 ', 33990000, 5, '../../content/./images/./product/vi-vn-lenovo-yoga-duet-7-13itl6-i7-82ma003uvn-1.jpg', '2022-10-04', 'Laptop Lenovo Yoga Duet 7 13ITL6 i7 (82MA003UVN) là sự kết hợp hoàn hảo giữa một chiếc máy tính Windows và Tablet từ đó mang đến một siêu phẩm có thiết kế cơ động, nhỏ gọn cùng hiệu năng mạnh mẽ, phù hợp cho mọi tác vụ giải trí, sáng tạo nội dung với bút cảm ứng Digital Pen tặng kèm.', b'1', 2, 400),
(244, 'Laptop Apple MacBook Pro 13 inch M2 2022', 39690000, 5, '../../content/./images/./product/vi-vn-apple-macbook-pro-13-inch-m2-2022-01.jpg', '2022-10-04', 'Sự xuất hiện của chip M2 cùng ngoại hình đẳng cấp, thời thượng đã giúp chiếc MacBook Pro 13 inch M2 2022 trở thành một trong những siêu phẩm lần nữa khẳng định vị thế của Apple trong phân khúc laptop cao cấp - sang trọng tính đến thời điểm 2022. ', b'1', 2, 398),
(245, 'Laptop Asus Zenbook 14 OLED UX3402ZA i5', 24990000, 5, '../../content/./images/./product/asus-zenbook-ux3402za-i5-km218w637935785946892246.jpg', '2022-10-07', 'Laptop Asus Zenbook 14 OLED UX3402ZA i5 (KM218W) sẽ chinh phục mọi người dùng từ sinh viên, dân văn phòng cho đến những doanh nhân kỹ tính. Một chiếc laptop cao cấp - sang trọng đầy mạnh mẽ, sẵn sàng cùng bạn đương đầu mọi khó khăn. ', b'1', 1, 399),
(246, 'Laptop Asus VivoBook S433EA i5', 17790000, 0, '../../content/./images/./product/vi-vn-asus-vivobook-s433ea-i5-am2307w-1.jpg', '2022-10-07', 'Bạn cần tìm chiếc laptop học tập - văn phòng có cấu hình ổn định, vẻ ngoài sang trọng, giải quyết tốt các tác vụ cơ bản, laptop Asus VivoBook S433EA (AM2307W) sẽ là sự lựa chọn phù hợp dành cho bạn.', b'1', 71, 399),
(247, 'Laptop MSI Gaming Pulse GL66 11UDK i7', 28090000, 5, '../../content/./images/./product/vi-vn-msi-gaming-pulse-gl66-11udk-i7-816vn-1.jpg', '2022-10-07', 'Laptop MSI Gaming Pulse GL66 11UDK i7 (816VN) xuất hiện với một diện mạo ấn tượng cùng những thông số cấu hình mạnh mẽ sẽ giúp bạn chinh phục các tựa game hấp dẫn hay đạt hiệu suất cao hơn trong công việc.', b'1', 0, 402),
(248, 'Laptop MSI Gaming Vector GP66 12UGS i7', 52990000, 10, '../../content/./images/./product/vi-vn-msi-gaming-vector-gp66-12ugs-i7-432vn-1.jpg', '2022-10-07', 'Laptop MSI Gaming Vector GP66 12UGS i7 12700H (432VN) là thế hệ laptop gaming mới nhất được nhà MSI cho ra mắt với những đột phá về thiết kế cũng như hiệu năng, xứng danh trợ thủ đắc lực cho mọi game thủ, người dùng sáng tạo đồ hoạ - kỹ thuật.', b'0', 0, 402),
(249, 'Laptop MSI Gaming Leopard GP76 11UG i7', 49990000, 8, '../../content/./images/./product/vi-vn-msi-gaming-leopard-gp76-11ug-i7-823vn-01.jpg', '2022-10-07', 'Vượt qua khỏi sự phức tạp của các thuật toán kỹ thuật, mô phỏng cơ khí hay thiết kế đồ họa chuyên nghiệp, laptop MSI Gaming Leopard GP76 11UG i7 (823VN) sở hữu phần cứng được tối ưu đến mức tối đa, dễ dàng đáp ứng mọi nhu cầu từ bạn.', b'0', 0, 402),
(250, 'Laptop HP VICTUS 16 d0292TX i5', 25590000, 15, '../../content/./images/./product/vi-vn-hp-victus-16-d0292tx-i5-5z9r3pa-1.jpg', '2022-10-30', 'Laptop HP VICTUS 16 d0292TX i5 (5Z9R3PA) sẽ là một người bạn đồng hành đắc lực trên mọi chiến trường ảo của game thủ nhờ ngoại hình sang trọng, hiện đại cùng những thông số kỹ thuật mạnh mẽ. ', b'1', 0, 415),
(251, 'Laptop Acer Nitro 5 Tiger AN515 58 773Y i7', 31990000, 10, '../../content/./images/./product/vi-vn-acer-nitro-5-tiger-an515-58-773y-i7-nhqfksv001-1.jpg', '2022-10-30', 'Đánh bật nhiều đối thủ trong cùng phân khúc laptop gaming với sự xuất hiện của con chip Intel Gen 12 đầy mạnh mẽ, laptop Acer Nitro 5 Tiger AN515 58 773Y i7 (NH.QFKSV.001) hứa hẹn sẽ là cánh tay phải đắc lực cho các game thủ oanh tạc trên mọi chiến trường.', b'1', 0, 417),
(252, 'Laptop Acer Nitro 5 Gaming AN515 45 R86D R7', 27490000, 5, '../../content/./images/./product/vi-vn-acer-nitro-5-gaming-an515-45-r86d-r7-nhqbcsv005-1.jpg', '2022-10-30', 'Thiết kế góc cạnh đầy nổi bật của chiếc laptop Acer Nitro 5 Gaming AN515 45 R86D R7 (NH.QBCSV.005) cùng hiệu năng mạnh mẽ vượt trội, hứa hẹn là người cộng sự đắc lực trên mọi phương diện, cùng bạn tạo nên thành công.', b'0', 0, 417),
(253, 'Laptop Asus TUF Gaming FX506HM i7', 28490000, 15, '../../content/./images/./product/vi-vn-asus-tuf-gaming-fx506hm-i7-hn366w-ab-1.jpg', '2022-10-30', 'Laptop Asus TUF Gaming FX506HM i7 (HN366W) là một trong những laptop gaming đáng sắm nhất, sự kết hợp giữa sức mạnh bộc phá đến từ bộ vi xử lý Intel Gen 12 và card rời NVIDIA xứng danh trợ thủ đắc lực cho mọi game thủ, người dùng sáng tạo đồ hoạ - kỹ thuật.', b'1', 0, 399);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(255) NOT NULL COMMENT 'mã khách hàng',
  `mat_khau` varchar(255) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `kich_hoat` bit(1) NOT NULL,
  `hinh` varchar(255) NOT NULL COMMENT 'tên hình ảnh',
  `email` varchar(255) NOT NULL,
  `vai_tro` bit(1) NOT NULL COMMENT 'vai trò, true là nhân viên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `kich_hoat`, `hinh`, `email`, `vai_tro`) VALUES
('admin123', '123456', 'Lê Minh Trường', b'1', '../../content/./images/./users/313208640_1405114303347013_1156637208351674729_n.jpg', 'letruong147123@gmail.com', b'1'),
('admin133', '123456', 'Lê Minh Vũ', b'1', '../../content/./images/./product/234194465_1113523415839438_2401265830247144587_n.jpg', 'levu147123@gmail.com', b'1'),
('haianh441', '123456', 'Vũ Hải Anh', b'1', '../../content/./images/./users/pexels-eberhard-grossgasteiger-443446.jpg', 'haianh441@gmail.com', b'0'),
('minh12341', '123456', 'Nguyễn Văn Minh', b'1', '../../content/./images/./users/38cea7423170f92ea061.png', 'minh14745@gmail.com', b'0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL COMMENT 'mã loại',
  `ten_loai` varchar(255) NOT NULL COMMENT 'tên loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(398, 'Macbook'),
(399, 'Asus'),
(400, 'Lenovo'),
(401, 'Dell'),
(402, 'MSI'),
(415, 'HP'),
(417, 'Acer');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `lk_hanghoa` (`ma_hh`),
  ADD KEY `lk_khachhang` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `lk_loaihang_hanghoa` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã bình luận', AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã hàng hóa', AUTO_INCREMENT=254;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'mã loại', AUTO_INCREMENT=418;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `lk_hanghoa` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`),
  ADD CONSTRAINT `lk_khachhang` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`);

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `lk_loaihang_hanghoa` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
