<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Form ứng tuyển</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <style>
        .formdk {
            margin-bottom: 18px;
        }

        .formdk input, .formdk select, .formdk textarea {
            width: 100%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }
    </style>
</head>


<body>

<!-- HEADER -->
<?php include "../header.php"; ?>

<div class="container bg-content" style = 'color: #004a99'>
    <h1>Nộp hồ sơ của bạn tại đây</h1>
</div>
<section class="container" style="padding: 40px 0;">

    <div class="job-card" style="max-width: 700px; margin: auto; padding: 40px;">

        </h1>

        <form action="camon.html" method="post" enctype="multipart/form-data">

            <div class="formdk">
                <label>Họ và tên</label>
                <input type="text" name="hoten" placeholder="Nhập họ và tên" required>
            </div>

            <div class="formdk">
                <label>Email</label>
                <input type="email" name="email" placeholder="Nhập địa chỉ email" required>
            </div>

            <div class="formdk">
                <label>Số điện thoại</label>
                <input type="tel" name="sdt" placeholder="Nhập số điện thoại" required>
            </div>

            <div class="formdk">
                <label>Vị trí ứng tuyển</label>
                <input type="tel" name="sdt" placeholder="Nhập vị trí ứng tuyển" required>
            </div>

            <div class="formdk">
                <label>Kinh nghiệm làm việc</label>
                <select name="experience" required>
                    <option value="">Chọn...</option>
                    <option>Fresher (0 năm)</option>
                    <option>Junior (1-2 năm)</option>
                    <option>Senior (3+ năm)</option>
                </select>
            </div>

            <div class="formdk">
                <label>Gửi link CV</label>
                <input type="file" name="cvfile" accept=".pdf,.doc,.docx" required><br><br>
            </div>

            <div style="display:flex; justify-content:space-between; margin-top:30px;">
                <a href="../index.php" class="btn-primary">Quay lại</a>
                <a href="camon.php" class="btn-primary">Gửi đơn ứng tuyển</a>
            </div>

        </form>

    </div>

</section>

</body>
</html>
