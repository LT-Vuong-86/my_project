-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th9 13, 2023 lúc 08:33 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctdonhang`
--

CREATE TABLE `ctdonhang` (
  `id_donhang` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `loai_sp` varchar(50) NOT NULL,
  `soluongsp` int(10) DEFAULT NULL,
  `ngaydat` varchar(20) DEFAULT NULL,
  `ghichu` varchar(255) DEFAULT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `danhmuc` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soluong` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `danhmuc`, `soluong`) VALUES
(1, 'áo nữ', 233),
(2, 'Quần nữ', 1000),
(3, 'Váy đầm nữ', 122),
(4, 'Áo nam', 456),
(5, 'Quần nam', 122),
(6, 'Vest nam', 122),
(7, 'Áo trẻ em', 122),
(8, 'Quần trẻ em', 122),
(9, 'Bộ quần áo trẻ em', 122);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id_donhang` int(11) NOT NULL,
  `id_kh` int(11) DEFAULT NULL,
  `tong` int(20) DEFAULT NULL,
  `id_tinhtrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_taikhoan` int(11) DEFAULT NULL,
  `id_sanpham` int(11) DEFAULT NULL,
  `loai_sp` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_taikhoan`, `id_sanpham`, `loai_sp`, `size`, `soluong`, `tong`) VALUES
(22, 84, 'Loại 2', 'xxl', 4, 1972000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id_kh` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `diachi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id_kh`, `username`, `sdt`, `email`, `diachi`) VALUES
(1, 'Trần Văn Cảm ', '0396465352', 'nguyenhien@gmail.com', 'Quán Ăn 678 ,Nhơn Nghĩa, Phong Điền, Cần Thơ, Việt Nam'),
(2, 'Le vo luong', '0985362367', 'quadh12@gmail.com', '23letungmau th?nh ph? H? N?i'),
(3, 'Hồ Văn Cam', '0985363457', 'dvdv93@@gmail.com', '28l?c quan th?nh ph? B?nh D??ng'),
(4, 'Trần Đinh Võ', '0396457294', 'ycdv23@gmail.com', 'lê trọng tạ, bình dương, Hà nội'),
(12, 'Phan Tất Trí', '0369525138', 'trissphan982004@gmail.com', 'Dương xá, Gia lâm, hà nội'),
(13, 'Phan Tất Trí', '0369525138', 'trissphan982004@gmail.com', 'Hà n?i'),
(14, 'Phan Tất Trí', '0369525138', 'trissphan982004@gmail.com', 'Hà n?i'),
(15, 'Lý Nhất Bạn', '0123423823', 'phantris982004@gmail.com', 'Dương xá, Gia lâm, hà nội'),
(16, 'TríPhan', '0123812364', 'trissphan982004@gmail.com', 'TP HCM'),
(17, 'balala', '0369525138', 'phantattri123@gmail.com', 'Hà Nội'),
(32, 'balala asda sá ', '0123812342', 'phantattri123@gmail.com', 'Hà N?i');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_sanpham` int(11) DEFAULT NULL,
  `anh_phu` varchar(50) NOT NULL,
  `type_name` varchar(50) DEFAULT NULL,
  `s` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `xl` int(11) NOT NULL,
  `xxl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id_sanpham`, `anh_phu`, `type_name`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(59, 'quan_nu (22).jpg', 'Loại 1', 112, 32, 42, 344, 23),
(59, 'quan_nu (23).jpg', 'Loại 2', 22, 33, 43, 225, 12),
(59, 'quan_nu (24).jpg', 'Loại 3', 123, 11, 334, 234, 467),
(72, 'vaybo_nu (35).jpg', 'Trắng', 123, 541, 234, -11, 151),
(72, 'vaybo_nu (36).jpg', 'Xanh biển nhạt', 222, 432, 123, -11, 121),
(72, 'vaybo_nu (33).jpg', 'Xanh ', 124, 45, 457, -11, 231),
(73, 'ao_nu (23).jpg', 'Đen', 123, 123, -5, 142, -4),
(73, 'ao_nu (22).jpg', 'Trắng', 11, 123, -5, 167, -4),
(73, 'ao_nu (21).jpg', 'Xanh than', 112, 134, -5, 452, -4),
(73, 'ao_nu (20).jpg', 'Nâu nhạt', 100, 111, -5, 134, -4),
(73, 'ao_nu (19).jpg', 'Vàng', 213, 142, -5, 123, -4),
(76, 'ao_nu (14).jpg', 'Trắng', 112, 432, 52, 14, 465),
(76, 'ao_nu (12).jpg', 'Trắng', 123, 443, 212, 468, 345),
(77, 'ao_nu (24).jpg', 'Vest 1', 123, 432, 222, 234, 655),
(77, 'ao_nu (26).jpg', 'Vest 2', 1213, 2122, 123, 443, 654),
(78, 'ao_nu (3).jpeg', 'Đen', 111, 111, 111, 111, 111),
(78, 'ao_nu (1).jpeg', 'Màu khói xám', 111, 222, 111, 111, 111),
(78, 'ao_nu (2).jpeg', 'Màu vàng nhạt', 111, 111, 111, 111, 111),
(78, 'ao_nu (3).jpeg', 'Trắng', 111, 111, 111, 111, 111),
(79, 'ao_nu (7).jpg', 'Trắng', 111, 111, 111, -10, 111),
(79, 'ao_nu (8).jpg', 'Nâu sữa', 111, 111, 111, -10, 111),
(79, 'ao_nu (9).jpg', 'Xanh ngọc lục bảo', 111, 111, 111, -10, 111),
(79, 'ao_nu (10).jpg', 'Đen', 111, 111, 111, -10, 111),
(79, 'ao_nu (33).jpg', 'Hồng', 111, 111, 111, -10, 111),
(79, 'ao_nu (34).jpg', 'Xanh rêu', 111, 111, 111, -10, 111),
(80, 'vaybo_nu (1).jpg', 'Xám', 111, 111, 1111, 111, 1111),
(80, 'vaybo_nu (2).jpg', 'Đỏ', 111, 1111, 111, 111, 111),
(80, 'vaybo_nu (3).jpg', 'Trắng', 111, 111, 111, 111, 111),
(80, 'vaybo_nu (4).jpg', 'Đen', 1111, 111, 1111, 113, 1111),
(80, 'vaybo_nu (5).jpg', 'Hồng đào', 111, 111, 111, 111, 111),
(80, 'vaybo_nu (47).jpg', 'Vàng', 111, 111, 1111, 111, 111),
(81, 'vaybo_nu (12).jpg', 'Trắng', 111, 111, 111, 1111, 111),
(81, 'vaybo_nu (8).jpg', 'Đen', 1111, 1111, 111, 1111, 111),
(81, 'vaybo_nu (7).jpg', 'Xanh ', 111, 1111, 111, 111, 1111),
(82, 'vaybo_nu (41).jpg', 'Trắng', 111, 111, 111, 111, 111),
(82, 'vaybo_nu (40).jpg', 'Màu da', 111, 111, 111, 111, 111),
(82, 'vaybo_nu (39).jpg', 'Hồng đào', 111, 1111, 111, 1111, 111),
(82, 'vaybo_nu (38).jpg', 'Đen', 111, 111, 111, 111, 111),
(83, 'vaybo_nu (45).jpg', 'Đen', 111, 111, 111, 1111, 111),
(83, 'vaybo_nu (44).jpg', 'Trắng', 1111, 1111, 1111, 111, 111),
(83, 'vaybo_nu (43).jpg', 'Nâu sáng', 111, 111, 1111, 1111, 111),
(84, 'ao_nu (4).jpg', 'Loại 1', 1111, 1111, 111, 111, 1111),
(84, 'ao_nu (6).jpg', 'Loại 2', 111, 1111, 111, 1111, 111),
(84, 'ao_nu (5).jpg', 'Loại 3', 111, 111, 111, 111, 111),
(85, 'ao_nu (30).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(85, 'ao_nu (32).jpg', 'Loại 2', 111, 111, 111, 111, 111),
(85, 'ao_nu (31).jpg', 'Loại 3', 111, 111, 111, 111, 111),
(86, 'vaybo_nu (30).jpg', 'Loại 1', 1111, 111, 1111, 1111, 1111),
(86, 'vaybo_nu (29).jpg', 'Loại 2', 1111, 111, 111, 1111, 111),
(87, 'vaybo_nu (25).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(87, 'vaybo_nu (26).jpg', 'Loại 2', 1111, 111, 111, 111, 11),
(87, 'vaybo_nu (27).jpg', 'Loại 3', 1111, 111, 111, 111, 111),
(88, 'vaybo_nu (21).jpg', 'Loại 1', 111, 111, -7, 111, 111),
(88, 'vaybo_nu (22).jpg', 'Loại 2', 111, 111, -7, 111, 111),
(89, 'vaybo_nu (17).jpg', 'Loại 1', 1111, 111, 111, 1111, 111),
(89, 'vaybo_nu (16).jpg', 'Loại 2', 111, 1111, 111, 111, 1111),
(89, 'vaybo_nu (20).jpg', 'Loại 3', 111, 1111, 111, 1111, 111),
(90, 'vaybo_nu (50).jpg', 'Loại 1', 111, 11, 111, 1111, 11),
(90, 'vaybo_nu (51).jpg', 'Loại 2', 111, 11, 1111, 111, 111),
(90, 'vaybo_nu (12).jpg', 'Loại 3', 111, 111, 111, 1111, 111),
(90, 'vaybo_nu (49).jpg', 'Loại 4', 111, 111, 111, 1111, 111),
(91, 'quan_nu (11).jpg', 'Loại 1', 111, 1111, 111, -5, 111),
(91, 'quan_nu (10).jpg', 'Loại 2', 111, 111, 1111, -5, 111),
(91, 'quan_nu (9).jpg', 'Loại 3', 111, 1111, 1111, -5, 11),
(92, 'quan_nu (3).jpeg', 'Loại 1', 111, 111, 11, 1111, 111),
(92, 'quan_nu (2).jpeg', 'Loại 2', 111, 111, 111, 111, 111),
(93, 'quan_nu (13).jpg', 'Loại 1', 111, 111, 1111, 1111, 111),
(93, 'quan_nu (14).jpg', 'Loại 2', 111, 1111, 111, 111, 11),
(94, 'vest_nam (13).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(94, 'vest_nam (12).jpg', 'Loại 2', 111, 1111, 111, 111, 111),
(94, 'vest_nam (21).jpg', 'Loại 3', 1111, 111, 1111, 111, 111),
(95, 'vest_nam (22).jpg', 'Loại 1', 1111, 111, 1111, 1111, 1111),
(95, 'vest_nam (20).jpg', 'Loại 2', 111, 111, 111, 111, 111),
(95, 'vest_nam (17).jpg', 'Loại 3', 111, 111, 111, 111, 111),
(96, 'vest_nam (2).jpg', 'Loại 1', 111, 11, 111, 11, 1111),
(96, 'vest_nam (3).jpg', 'Loại 2', 111, 111, 111, 111, 111),
(96, 'vest_nam (7).jpg', 'Loại 3', 111, 111, 111, 11, 111),
(96, 'vest_nam (11).jpg', 'Loại 4', 1111, 111, 111, 111, 111),
(97, 'vest_nam (6).jpg', 'Loại 1', 111, 111, 111, -4, 111),
(97, 'vest_nam (9).jpg', 'Loại 2', 111, 111, 111, -4, 111),
(97, 'vest_nam (19).jpg', 'Loại 3', 111, 111, 111, -4, 111),
(97, 'vest_nam (5).jpg', 'Loại 4', 111, 111, 111, -4, 111),
(111, 'bo_kid (14).jpg', 'Loại 1', 111, 111, 111, 111, 111),
(111, 'bo_kid (1).jpg', 'Loại 2', 111, 111, 1111, 111, 1111),
(112, 'ao_nam (4).png', 'Màu da', 111, 111, 111, 111, 111),
(112, 'ao_nam (5).png', 'Trắng', 111, 111, 111, 111, 111),
(112, 'ao_nam (3).png', 'Xanh than', 111, 111, 111, 111, 111),
(113, 'ao_nam (6).png', 'Trắng', 111, 111, 111, 111, 111),
(113, 'ao_nam (2).png', 'Xanh biển ', 111, 111, 111, 1111, 111),
(113, 'ao_nam (7).png', 'Đen', 111, 111, 111, 111, 111),
(114, 'ao_nam (37).png', 'Xanh công sở', 111, 111, 111, 1111, 1111),
(114, 'ao_nam (38).png', 'Xanh than huyền bí', 111, 111, 111, 111, 111),
(114, 'ao_nam (40).png', 'Trắng thuần khiết', 1111, 111, 1111, 111, 111),
(115, 'ao_nam (29).png', 'Đen', 111, 111, 111, 111, 111),
(115, 'ao_nam (32).png', 'Tím nhạt', 1111, 111, 111, 111, 111),
(115, 'ao_nam (42).png', 'Trắng', 1111, 1111, 111, 1111, 111),
(116, 'ao_nam.png', 'Trắng', 111, 1111, 111, 1111, 1111),
(116, 'ao_nam (44).png', 'Xanh đậm', 111, 111, 111, 1111, 111),
(116, 'ao_nam (19).png', 'Đen', 1111, 111, 1111, 111, 111),
(117, 'quan_nam (33).png', 'Loại 1', 111, 111, 111, 111, 1111),
(117, 'quan_nam (34).png', 'Loại 2', 111, 111, 111, 111, 111),
(118, 'quan_nam (25).png', 'Trắng', 111, 111, 111, 111, 111),
(118, 'quan_nam (26).png', 'Xanh đậm', 111, 111, 111, 1111, 111),
(118, 'quan_nam (27).png', 'Nâu cam', 1111, 111, 111, 11111, 1111),
(119, 'quan_nam (39).png', 'Đen', 111, 111, 111, 111, 111),
(119, 'quan_nam (38).png', 'Xanh ngọc', 111, 111, 1111, 111, 111),
(119, 'quan_nam (36).png', 'Xanh than', 111, 111, 111, 1111, 111),
(119, 'quan_nam (35).png', 'Trắng', 111, 111, 1111, 111, 111),
(120, 'quan_nam (10).png', 'Xanh rêu', 111, 111, 111, 1111, 111),
(120, 'quan_nam (9).png', 'Nâu đất', 111, 111, 111, 111, 1111),
(120, 'quan_nam (8).png', 'Trắng sữa', 111, 111, 111, 111, 111),
(121, 'bo_kid (22).jpg', 'Loại 1', 111, 111, 1111, 1111, 111),
(121, 'bo_kid (34).jpg', 'Loại 2', 111, 1111, 111, 111, 111),
(121, 'bo_kid (21).jpg', 'Loại 3', 111, 111, 111, 111, 111);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate_sp`
--

CREATE TABLE `rate_sp` (
  `id_sanpham` int(11) DEFAULT NULL,
  `rate_rating` decimal(3,2) DEFAULT NULL,
  `rate_content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_taikhoan` int(11) NOT NULL,
  `date_rate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `rate_sp`
--

INSERT INTO `rate_sp` (`id_sanpham`, `rate_rating`, `rate_content`, `id_taikhoan`, `date_rate`) VALUES
(81, 5.00, 'Hàng quá tuyệt vời', 17, '13/09/23'),
(87, 1.00, 'Hàng lỗi', 17, '13/09/23'),
(59, 5.00, 'Quá ổn', 17, '13/09/23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh_chinh` varchar(80) DEFAULT NULL,
  `gia` decimal(15,0) DEFAULT NULL,
  `tonkho` int(11) DEFAULT NULL,
  `xuatxu` varchar(25) DEFAULT NULL,
  `id_danhmuc` int(11) DEFAULT NULL,
  `nd_sp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `ngaytao` varchar(50) DEFAULT NULL,
  `nguoitao` varchar(50) DEFAULT NULL,
  `daban` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `anh_chinh`, `gia`, `tonkho`, `xuatxu`, `id_danhmuc`, `nd_sp`, `ngaytao`, `nguoitao`, `daban`) VALUES
(59, 'Quần ống loe xẻ gấu', 'quan_nu (25).jpg', 349000, 1495, 'Hàn Qu?c', 2, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/08', 'TrisPhan123', 0),
(72, 'Đầm Body Cánh Tiên', 'vaybo_nu (33).jpg', 369000, 2605, 'Philippin', 3, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/08', 'TrisPhan123', 0),
(73, 'Áo 2 dây nữ cổ tim dọc gân trơn', 'ao_nu (19).jpg', 179000, 3484, 'Hàn Qu?c', 1, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/08', 'TrisPhan123', 0),
(76, 'Áo ren trắng tay ngắn dáng rộng', 'ao_nu (13).jpg', 211300, 1591, 'Hàn Qu?c', 1, 'SHOP CAM KẾT\r\n- Đổi/ trả nếu  sản phẩm không đúng với hình ảnh và video đã đăng\r\n- Đổi/trả nếu sản phẩm bị lỗi, hỏng do bât cứ lý do gi trước khi đến tay khách hàng ( kể cả lỗi do đơn vị vận chuyển)\r\n- Tất cả các đơn hàng của shop đều được kiể tra cả về số lượng và chất lượng trước khi gửi đi.\r\n\r\nLƯU Ý QUAN TRỌNG: Quý khách hàng hãy quay video khi bóc hàng để làm căn cứ giải quyết khiếu nại nếu hàng bị thiếu, hỏng đặc biệt với các gói hàng bị rách, móp méo.\r\n\r\nQUYỀN LỢI CỦA KHÁCH HÀNG \r\n- Chính sách bao đổi trả hàng miễn phí khi sản phẩm kém chất lượng và không giống hình, nhầm số lượng và loại hàng. \r\n\r\nMÔ TẢ SẢN PHẨM\r\n- Quần jean nữ được làm bằng chất liệu bò jeans co dãn 4 chiều đàn hồi cực tốt mặc cực kỳ dễ chịu \r\n- Quần ống loe có 3 màu đen, xanh đậm, xanh nhạt\r\n- Quần bò nữ có 4 size S < 44kg, M < 48kg, L < 53kg\r\n- Quần ống loe lưng cao được thiết kế form dài rách gấu mặc siêu hách dáng\r\n- Quần jean hàng chuẩn đẹp, co giãn tốt, đàn hồi cao, không bai nhão, cắn chỉ, xùi vải. \r\nTên và địa chỉ của tổ chức, cá nhân chịu trách nhiệm về hàng hóa : thoitrangthoanguyen81\r\nXuất xứ hàng hóa: Tại Việt Nam\r\nĐịa chỉ: Dân Hoà, Thanh Oai, Hà Nội', '23/09/10', 'TrisPhan123', 0),
(77, 'Áo vest vải tuýt cổ tròn', 'ao_nu (25).jpg', 1618000, 4542, 'Hàn Qu?c', 1, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(78, 'Áo 2 dây lụa cổ tim trắng', 'ao_nu (3).jpeg', 120000, 1775, 'Pháp', 1, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(79, 'Áo thun rút eo', 'ao_nu (11).jpg', 249000, 34567, 'Hàn Qu?c', 1, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(80, 'Đàm Body Nơ Lưng', 'vaybo_nu (6).jpg', 489000, 7777, 'Pháp', 3, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(81, 'Đầm xoè tay phong cách cổ điển', 'vaybo_nu (10).jpg', 469000, 6100, 'Hàn Qu?c', 3, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(82, 'Đầm xoè nhún ngực', 'vaybo_nu (42).jpg', 625000, 3665, 'Philippin', 3, '1. Thông tin sản phẩm: Quần jean ống loe cạp cao cắt gấu co dãn hàng cao cấp\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean Co giãn\r\nKho buôn: Thanh Oai Hà Nội    ĐT/Zalo: 036.8604.968\r\n2. Thông số sản phẩm: Quần jean bò baggy nữ cạp cao\r\n-	Size S: Vòng eo 58-63cm, Vòng mông 86 - 90 cm, Cân nặng 40 - 45 kg, Chiều cao 150 - 160cm.\r\n-	Size M: Vòng eo 63-68cm, Vòng mông 90 - 94 cm, Cân nặng 45-50kg, Chiều cao 156 - 165 cm. \r\n-	Size L: Vòng eo 68-72cm, Vòng mông 94 - 98 cm. Cân nặng 50-54kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 72-76 cm. Vòng mông 96-100cm. Cân nặng 55-58kg Chiều cao 1m55-165cm.\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(83, 'Đầm 2 dây dáng xoè', 'vaybo_nu (46).jpg', 590000, 6107, 'Hàn Qu?c', 3, '1. Thông tin sản phẩm: Quần jean bò ống đứng nữ cạp cao\r\n- Size: S-M-L-XL\r\n- Chất liệu: Jean co giãn 4 chiều\r\n2. Thông số sản phẩm: Quần jean bò ống đứng nữ cạp cao\r\n- Size S: Vòng eo 56-61cm, Vòng mông 83 - 87 cm, Cân nặng 38 - 43 kg, Chiều cao 150 - 160cm.\r\n- Size M: Vòng eo 62-66cm, Vòng mông 87 - 91 cm, Cân nặng 43-48kg, Chiều cao 156 - 165 cm. \r\n- Size L: Vòng eo 66-70cm, Vòng mông 91 - 95 cm. Cân nặng 50-53kg, Chiều cao 155- 165cm.\r\n- Size Xl: Vòng eo 70-74 cm. Vòng mông 95-97cm. Cân nặng 53-56kg. Chiều cao 1m55-165cm\r\n3. Hướng dẫn sử dụng quần jean\r\n Sử dụng đi học, đi làm, đi chơi,... \r\n-- Giặt tay hoặc giặt máy ở nhiệt độ thường \r\n-- Không ngâm chung với chất tẩy rửa \r\n-- Lật mặt trái của quần khi phơi để tránh tình trạng phai, bạc màu\r\nLưu ý: \r\nKích thước sản phẩm có thể sai lệch - + 2cm. Sản phẩm khi chụp dưới điều kiện sáng/ tối , xem bằng các loại màn hình khác nhau hay lô hàng khác nhau màu sắc có thể đậm nhạt một chút là bình thường các bạn nhé!\r\nCác bạn vui lòng xem kỹ thông tin sản phẩm ở hình ảnh để chọn size cho phù hợp. Nếu bạn thấy khó khăn trong việc chọn size hay có câu hỏi bất kỳ, hãy liên hệ cho chúng tôi qua công cụ chat\r\n4. Chế độ hỗ trợ khách hàng\r\n- Cam kết 100% đổi Size nếu sản phẩm khách đặt không vừa (hỗ trợ đổi size trong vòng 7 ngày)\r\n- Shop hỗ trợ đổi sang sản phẩm khác cùng giá hoặc cao hơn nếu khách có nhu cầu đổi mẫu khác.\r\n- Nếu có bất kì khiếu nại cần Shop hỗ trợ về sản phẩm, khi mở sản phẩm các Chị vui lòng quay lại video quá trình mở sản phẩm để được đảm bảo 100% đổi lại sản phẩm mới nếu Shop giao bị lỗi.\r\n- Các Chị nhận được sản phẩm, vui lòng đánh giá giúp Shop để hưởng thêm nhiều ưu đãi hơn nhé.', '23/09/10', 'TrisPhan123', 0),
(84, 'Áo lụa phối line trắng', 'ao_nu (5).jpg', 493000, 345678, 'Hàn Qu?c', 1, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(85, 'Áo croptop màu đen trẻ trung', 'ao_nu (30).jpg', 1870000, 1110, 'Pháp', 1, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(86, 'Đầm xoè đính đá', 'vaybo_nu (32).jpg', 549000, 2555, 'Hàn ', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(87, 'Áo Peplum tay phồng', 'vaybo_nu (27).jpg', 439000, 3008, 'Hàn Qu?c', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(88, 'Đầm dáng ôm tay ngắn', 'vaybo_nu (24).jpg', 449000, 555, 'Hàn Qu?c', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(89, 'Đầm cổ yến dập ly', 'vaybo_nu (20).jpg', 499000, 5099, 'Pháp', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(90, 'Đầm xoè a xếp ly', 'vaybo_nu (48).jpg', 419000, 4561, 'Hàn Qu?c', 3, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(91, 'Set bộ quần gym nữ giá rẻ', 'quan_nu (12).jpg', 199000, -28, 'Singapore', 2, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(92, 'Quần jean lưng cao nữ co giãn', 'quan_nu (4).jpeg', 295000, 555, 'Hàn Qu?c', 2, 'Quần jeans nữ ống đứng cạp cao túi nhọn 2 màu đậm nhạt co giãn kiểu dáng Hàn Quốc\r\n- Đã Kèm Ảnh thật và Video Thật ở Cuối\r\n HƯỚNG DẪN BẢO QUẢN VÀ SỬ DỤNG \r\n- Giặt riêng sản phẩm với lần giặt đầu tiên. \r\n- Không sử dụng bột giặt có chất tẩy nồng độ cao. \r\n- Khi phơi các bạn nên lộn ngược lại để màu của sản phẩm được bền lâu.\r\n\r\n CHÍNH SÁCH ĐỔI TRẢ: \r\n- Đổi trả trong vòng 3 ngày sau khi nhận hàng \r\n- Sản phẩm đổi trả phải còn nguyên tem, nhãn, bao bì, chưa qua sử dụng giặt tẩy. Nguyên vẹn như ban đầu shop giao\r\n- Đổi trả miễn phí 100% nếu có lỗi từ nhà sản xuất hoặc do shop gửi nhầm size, nhầm mẫu\r\n- Hỗ trợ đổi size (nếu chật)\r\n', '23/09/10', 'TrisPhan123', 0),
(93, 'Quần jean nữ thun lửng ', 'quan_nu (15).jpg', 309000, 1455, 'Philippin', 2, '', '23/09/10', 'TrisPhan123', 0),
(94, 'Vest Nam 2 hàng nút kẻ sọc', 'vest_nam (21).jpg', 1240000, 4108, 'Pháp', 6, '', '10/09/23', 'NguyenC', 0),
(95, 'Vest trơn 2 hàng nút sang xịn', 'vest_nam (17).jpg', 1360000, 1104, 'Pháp', 6, '', '10/09/23', 'NguyenC', 0),
(96, 'Vest cổ điển mê ly', 'vest_nam (11).jpg', 1200000, 2554, 'Hàn Qu?c', 6, '', '10/09/23', 'NguyenC', 0),
(97, 'Vest nam cổ điển quyến rũ', 'vest_nam (5).jpg', 1500000, -8, 'Hàn Qu?c', 6, '', '10/09/23', 'NguyenC', 0),
(111, 'Bộ quần áo trẻ em siêu dễ thương', 'bo_kid (1).jpg', 69000, 2552, 'Pháp', 9, '', '12/09/23', 'NguyenC', 0),
(112, 'Áo sơ mi nam cotton cổ tàu tay dài dáng suông', 'ao_nam (3).png', 295000, 1110, 'Hàn Qu?c', 4, '', '12/09/23', 'NguyenC', 0),
(113, 'Áo ba lỗ nam active có in chữ', 'ao_nam (7).png', 209300, 2110, 'Hàn Qu?c', 4, '', '12/09/23', 'NguyenC', 0),
(114, 'Áo sơ mi nam cổ bẻ dài tay dáng suông', 'ao_nam (39).png', 499000, 3107, 'Hàn Qu?c', 4, '', '12/09/23', 'NguyenC', 0),
(115, 'Áo phông nam cotton có hình in Mickey dáng rộng', 'ao_nam (29).png', 174000, 5099, 'Singapore', 4, '', '12/09/23', 'NguyenC', 0),
(116, 'Áo phông nam cotton hình in Captain America dáng rộng', 'ao_nam (43).png', 244300, 4110, 'Nh?t B?n', 4, '', '12/09/23', 'NguyenC', 0),
(117, 'Quần soóc nam cotton jeans dáng suông', 'quan_nam (32).png', 384300, 545, 'Hàn Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(118, 'Quần soóc nam chất nỉ cạp chun', 'quan_nam (24).png', 111111, 15110, 'Hàn Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(119, 'Quần soóc nam cạp chun moi giả', 'quan_nam (37).png', 174000, 4651, 'Hàn Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(120, 'Quần soóc nam có túi hai bên', 'quan_nam (11).png', 549000, 2110, 'Hàn Qu?c', 5, '', '12/09/23', 'NguyenC', 0),
(121, 'Bộ quần áo bé trai dễ thương', 'bo_kid (21).jpg', 99000, 2110, 'Hàn Qu?c', 9, '', '12/09/23', 'NguyenC', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sdt` varchar(15) DEFAULT NULL,
  `vaitro` varchar(100) DEFAULT NULL,
  `ngaytao` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `full_name`, `username`, `pass`, `email`, `sdt`, `vaitro`, `ngaytao`, `diachi`) VALUES
(11, 'Người Dùng Hai', 'Nguoidung2', 'fcea920f7412b5da7be0cf42b8c93759', 'phantris982004@gmail.com', '0123423823', 'user', NULL, 'S? nhà 20, khu t?p th? Nh?t Quán'),
(17, 'balala asda sá ', 'dfiasddfjd', 'e10adc3949ba59abbe56e057f20f883e', 'phantattri123@gmail.com', '0123812342', 'user', '2013-09-23', 'Hà N?i'),
(18, 'admin', 'admin11', 'e10adc3949ba59abbe56e057f20f883e', 'trissphan982004@gmail.com', '0123456789', 'admin', '13/09/23', 'Hà N?i'),
(20, 'Người Dùng Một', 'Nguoidung1', 'e10adc3949ba59abbe56e057f20f883e', 'trissphan982004@gmail.com', '0123456789', 'manager', NULL, 'Hà N?i'),
(22, 'Nguyễn Hiền Vương', 'toitenvuong', 'e10adc3949ba59abbe56e057f20f883e', '', '039473234333', 'user', NULL, 'li?u châu phú châu ba vì hà  n?i');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang_dh`
--

CREATE TABLE `tinhtrang_dh` (
  `id_tinhtrang` int(11) NOT NULL,
  `tinhtrang` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang_dh`
--

INSERT INTO `tinhtrang_dh` (`id_tinhtrang`, `tinhtrang`) VALUES
(1, 'Chờ xác nhận'),
(2, 'Hàng đang giao'),
(3, 'Giao thành công'),
(4, 'Hàng đã bị hủy'),
(5, 'Đã mua');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD KEY `donhang_ctdonhang` (`id_donhang`),
  ADD KEY `sanpham_ctdonhang` (`id_sanpham`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id_donhang`),
  ADD KEY `donhang_khachhang` (`id_kh`),
  ADD KEY `donhang_tinhtrang_dh` (`id_tinhtrang`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id_kh`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD KEY `fk_loaisp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `rate_sp`
--
ALTER TABLE `rate_sp`
  ADD KEY `fk_rate_sp` (`id_sanpham`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tinhtrang_dh`
--
ALTER TABLE `tinhtrang_dh`
  ADD PRIMARY KEY (`id_tinhtrang`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id_donhang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id_kh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tinhtrang_dh`
--
ALTER TABLE `tinhtrang_dh`
  MODIFY `id_tinhtrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ctdonhang`
--
ALTER TABLE `ctdonhang`
  ADD CONSTRAINT `donhang_ctdonhang` FOREIGN KEY (`id_donhang`) REFERENCES `donhang` (`id_donhang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ctdonhang` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_khachhang` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id_kh`),
  ADD CONSTRAINT `donhang_tinhtrang_dh` FOREIGN KEY (`id_tinhtrang`) REFERENCES `tinhtrang_dh` (`id_tinhtrang`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD CONSTRAINT `fk_loaisp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `rate_sp`
--
ALTER TABLE `rate_sp`
  ADD CONSTRAINT `fk_rate_sp` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id_sanpham`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_danhmuc`) REFERENCES `danhmuc` (`id_danhmuc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
