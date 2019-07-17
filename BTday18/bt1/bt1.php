<!DOCTYPE>
<html>
<head>
    <meta charset="utf8"/>
    <title>BT1</title>
</head>
<body>
<h3>a/Tạo bảng quanlynhansu: </h3>
<pre>CREATE DATABASE QUANLYNHANSU CHARACTER SET utf8 COLLATE utf8_general_ci;</pre>
<h3>b/ Tạo các bảng: </h3>
<b>NHANVIEN:</b>
<pre>
    CREATE TABLE NHANVIEN (
    HONV VARCHAR(100) NOT NULL,
    TENLOT VARCHAR(100) NOT NULL,
    TENNV VARCHAR(100) NOT NULL,
    PHAI VARCHAR(20) NOT NULL,
    LUONG INT(11) NOT NULL,
    MANV INT(11) PRIMARY KEY NOT NULL,
    NGSINH DATE NOT NULL,
    DIACHI VARCHAR(255) NOT NULL,
    PHG INT(11) NOT NULL
    );
</pre>
<br/>
<b>DEAN</b>
<pre>
    CREATE TABLE DEAN (
    TENDA VARCHAR(255) NOT NULL,
    MADA INT(11) PRIMARY KEY NOT NULL,
    DDIEM_DA VARCHAR(255) NOT NULL,
    PHG INT(11) NOT NULL
    );
</pre>
<br/>
<b>PHONGBAN</b>
<pre>
    CREATE TABLE PHONGBAN (
    PHG INT(11) PRIMARY KEY NOT NULL,
    TENPHG VARCHAR(255) NOT NULL
    );
</pre>
<br/>
<b>PHANCONG</b>
<pre>
    CREATE TABLE PHANCONG (
    MANV INT(11) NOT NULL,
    MADA INT(11) NOT NULL,
    SOGIO FLOAT NOT NULL
    );
</pre>
<h3>c/Insert dữ liệu cho các bảng</h3>
<b>NHANVIEN</b> <br/>
<pre>
    INSERT INTO NHANVIEN VALUES('Đinh', 'Lê', 'Tiên', 'Nam', 4000, 123456789, '1965-09-01', 'Nguyễn Trãi, Q5', 1);
    INSERT INTO NHANVIEN VALUES('Nguyễn', 'Thị', 'Loan', 'Nữ', 2500, 333445555, '1955-08-12', 'Nguyễn Huệ, Q1', 5);
    INSERT INTO NHANVIEN VALUES('Nguyễn', 'Lan', 'Anh', 'Nữ', 4300, 666884444, '1962-09-15', 'Lê Lợi, Q1', 5);
    INSERT INTO NHANVIEN VALUES('Trần', 'Thanh', 'Tâm', 'Nam', 3800, 453453453, '1972-07-31', 'Trần Não, Q2', 2);
</pre>
<br/>

<b>DOAN</b> <br/>
<pre>
    INSERT INTO DEAN VALUES ('Sản phẩm X', 1, 'Quy Nhơn', 5);
    INSERT INTO DEAN VALUES ('Sản phẩm Y', 2, 'Nha Trang', 5);
    INSERT INTO DEAN VALUES ('Sản phẩmZ', 3, 'TP HCM', 5);
    INSERT INTO DEAN VALUES ('Tin học hóa', 10, 'Bình Dương', 4);
</pre>

<b>PHONGBAN</b> <br/>
<pre>
    INSERT INTO PHONGBAN VALUES(1, 'Nhân sự');
    INSERT INTO PHONGBAN VALUES(2, 'Kế hoạch');
    INSERT INTO PHONGBAN VALUES(3, 'Kinh doanh');
    INSERT INTO PHONGBAN VALUES(4, 'Marketing');
    INSERT INTO PHONGBAN VALUES(5, 'Kế toán');
</pre>
<b>PHANCONG</b> <br/>
<pre>
    INSERT INTO PHANCONG VALUES(123456789, 1, 32.0);
    INSERT INTO PHANCONG VALUES(123456789, 2, 8.0);
    INSERT INTO PHANCONG VALUES(666884444, 3, 40.0);
    INSERT INTO PHANCONG VALUES(453453453, 1, 20.0);
</pre>

<h3>d/ Viết các câu truy vấn: </h3>
<p>
    <b>- Lấy ra tất cả thông tin của toàn bộ nhân viên công ty</b><br/>
<pre>
SELECT * FROM nhanvien;
</pre>
</p>
<p>
    <b>- Lấy ra tất cả thông tin của các nhân viên ở phòng ban số 5</b><br/>
<pre>
SELECT * FROM nhanvien WHERE PHG = 5
</pre>
</p>
<p>
    <b>- Lấy ra Mã nhân viên, họ nhân viên, tên lót, tên nhân viên của những nhân viên ở phòng ban số kế toán</b><br/>
<pre>
 SELECT nhanvien.MANV, nhanvien.HONV, nhanvien.TENLOT, nhanvien.TENNV FROM nhanvien
 INNER JOIN phongban
 ON nhanvien.PHG = phongban.PHG
 WHERE phongban.PHG = 5
</pre>
</p>
<p>
    <b>- Lấy ra thông tin của nhân viên có lương cao nhất</b><br/>
<pre>
 SELECT * FROM nhanvien ORDER BY LUONG DESC LIMIT 1
</pre>
</p>
<p>
    <b>- Lấy ra thông tin của nhân viên có lương thấp nhất</b><br/>
<pre>
 SELECT * FROM nhanvien ORDER BY LUONG ASC LIMIT 1
</pre>
</p>
<p>
    <b>- Tính mức lương trung bình của toàn bộ nhân viên trong công ty</b><br/>
<pre>
 SELECT AVG(LUONG) AS luong_trung_binh FROM nhanvien
</pre>
</p>
<p>
    <b>- Tính tổng lương  của toàn bộ nhân viên</b><br/>
<pre>
 SELECT SUM(LUONG) AS tong_luong FROM nhanvien
</pre>
</p>
<p>
    <b>- Lấy ra thông tin của các nhân viên có mức lương trong khoảng 2600 đến 4400</b><br/>
<pre>
 SELECT * FROM nhanvien WHERE LUONG BETWEEN 2600 AND 4400
</pre>
</p>
<p>
    <b>- Lấy ra Mã nhân viên, họ nhân viên, tên lót, tên nhân viên của những nhân viên ở phòng ban số 5 mà có lương >= 3000</b><br/>
<pre>
 SELECT MANV, HONV, TENLOT, TENNV FROM nhanvien WHERE PHG = 5 AND LUONG >= 3000
</pre>
</p>
<p>
    <b>- Lấy ra tất cả thông tin của các nhân viên mà địa chỉ của họ có chứa từ Nguyễn</b><br/>
<pre>
 SELECT * FROM nhanvien WHERE DIACHI LIKE '%Nguyễn%';
</pre>
</p>
<p>
    <b>- Lấy ra tổng số lượng nhân viên hiện có trong công ty</b><br/>
<pre>
 SELECt COUNT(*) AS tong_so_nhan_vien FROM nhanvien
</pre>
</p>
<p>
    <b>- Lấy ra số lượng nhân viên tương ứng với từng phòng ban</b><br/>
<pre>
 SELECT phongban.TENPHG, COUNT(nhanvien.MANV) AS so_luong_nhan_vien FROM phongban
 LEFT JOIN nhanvien
 ON phongban.PHG = nhanvien.PHG
 GROUP BY phongban.PHG
</pre>
</p>
<p>
    <b>- Lấy ra thông tin các nhân viên đang được phân công vào các dự án có tên dự án là Sản phẩm  X</b><br/>
<pre>
SELECT * FROM nhanvien
INNER JOIN dean
ON nhanvien.PHG = dean.PHG
WHERE dean.TENDA = 'Sản phẩm X'
</pre>
</p>
<p>
    <b>- Lấy ra tổng số giờ làm của các phòng ban mà có nhân viên đc phân công làm dự án</b><br/>
<pre>
SELECT phongban.TENPHG, IFNULL(SUM(phancong.SOGIO), 0) as tong_so_gio FROM phongban
LEFT JOIN nhanvien ON nhanvien.PHG = phongban.PHG
LEFT JOIN phancong ON nhanvien.MANV = phancong.MANV
GROUP BY phongban.TENPHG
</pre>
</p>
<p>
    <b>- Cập nhật lại tên nhân viên mới = New name của các nhân viên đang làm tại phòng Nhân sự</b><br/>
<pre>
 UPDATE nhanvien
 INNER JOIN phongban
 ON nhanvien.PHG = phongban.PHG
 SET nhanvien.TENNV = 'New name'
 WHERE phongban.TENPHG = 'Nhân sự'
</pre>
</p>
</body>
</html>