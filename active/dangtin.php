<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng tin tuyển dụng - NextJob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

<!-- HEADER -->
<?php include "../header.php"; ?>

<section class="container" style="padding:40px 0;">

    <div class="job-card" style="max-width:800px; margin:auto; padding:40px;">

        <h1 style="text-align:center; margin-bottom:30px;">
            Đăng tin tuyển dụng
        </h1>

        <form action="thanhcong.html" method="post">

            <!-- Thông tin công ty -->
            <h3>Thông tin doanh nghiệp</h3>

            <div class="formdk">
                <label>Tên công ty</label>
                <input type="text" name="company" required>
            </div>

            <div class="formdk">
                <label>Email liên hệ</label>
                <input type="email" name="email" required>
            </div>

            <div class="formdk">
                <label>Số điện thoại</label>
                <input type="tel" name="phone" required>
            </div>

            <!-- Thông tin công việc -->
            <h3 style="margin-top:30px;">Thông tin công việc</h3>

            <div class="formdk">
                <label>Vị trí tuyển dụng</label>
                <input type="text" name="position" required>
            </div>

            <div class="formdk">
                <label>Ngành nghề</label>
                <select name="category" required>
                    <option value="">Chọn khối ngành nghề</option>
                    <option>Công nghệ thông tin</option>
                    <option>Marketing</option>
                    <option>Tài chính - Ngân hàng</option>
                    <option>Kinh doanh</option>
                </select>
            </div>

            <div class="formdk">
                <label>Khu vực làm việc</label>
                <select name="location" required>
                    <option>An Giang</option>
                    <option>Bắc Giang</option>
                    <option>Bắc Ninh</option>
                    <option>Bình Dương</option>
                    <option>Bình Định</option>
                    <option>Cà Mau</option>
                    <option>Cần Thơ</option>
                    <option>Cao Bằng</option>
                    <option>Đà Nẵng</option>
                    <option>Đắk Lắk</option>
                    <option>Đồng Nai</option>
                    <option>Đồng Tháp</option>
                    <option>Gia Lai</option>
                    <option>Hà Giang</option>
                    <option>Hà Nội</option>
                    <option>Hà Tĩnh</option>
                    <option>Hải Phòng</option>
                    <option>Hưng Yên</option>
                    <option>Khánh Hòa</option>
                    <option>Lai Châu</option>
                    <option>Lâm Đồng</option>
                    <option>Lạng Sơn</option>
                    <option>Lào Cai</option>
                    <option>Nghệ An</option>
                    <option>Ninh Bình</option>
                    <option>Phú Thọ</option>
                    <option>Quảng Ninh</option>
                    <option>Quảng Ngãi</option>
                    <option>Quảng Trị</option>
                    <option>Sóc Trăng</option>
                    <option>Tây Ninh</option>
                    <option>Thái Nguyên</option>
                    <option>Thanh Hoá</option>
                    <option>TP. Hồ Chí Minh</option>

                </select>

            </div>

            <div class="formdk">
                <label>Mức lương</label>
                <select name="salary" required>
                    <option value="">Chọn mức lương</option>
                    <option>5 - 10 triệu</option>
                    <option>10 - 20 triệu</option>
                    <option>20 - 35 triệu</option>
                    <option>Thỏa thuận</option>
                </select>
            </div>

            <div class="formdk">
                <label>Mô tả công việc</label>
                <input type="file" name="jobdetail" accept=".pdf,.doc,.docx" required><br><br>
            </div>

            <div class="formdk">
                <label>Yêu cầu ứng viên</label>
                <input type="file" name="demand" accept=".pdf,.doc,.docx" required><br><br>
            </div>

            <div style="display:flex; justify-content:space-between; margin-top:30px;">
                <a href="../index.php" class="btn-primary">Quay lại</a>
                <a href= "tbdangtin.php" class="btn-primary">Đăng tin</a>
            </div>

        </form>

    </div>

</section>

</body>
</html>
