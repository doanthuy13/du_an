### Cấu trúc thư mục

1. commons // File dùng chung cả dự án
2. uploads // Folder lưu trữ file upload

3. controllers // Xử lý logic
4. models // Thao tác cơ sở dữ liệu
5. views // Hiển thị
6. index.php // Điều hướng


- Cấu hình DB trong file commons/env.php


<!-- Đề thi thử  -->

Tạo database có tên masv_examphp1 và bảng sau: 
- users (id, name, image, email, phone, address)

* Yêu cầu:
- id tự động tăng
- image để mặc định là null
- Nhập trước ít nhất 2 bản ghi
- Sinh viên được sử dụng cấu trúc MVC OOP cơ bản ở trên lớp.

1. (1.0 điểm) Thực hiện kết nối CSDL thành công.

2. (3 điểm) Hiển thị danh sách User
+ Hiển thị tất cả các cột dữ liệu bao gồm: id, name, image, email, phone, address (2.5đ)
+ Hiển thị thêm cột hành động: Trên mỗi bản ghi người dùng trong danh sách, hiển thị 2 nút Sửa và Xóa (0.5đ)

3. (2.5 điểm) Thực hiên chức năng thêm user.
+ Thêm được thông tin User không có image (2đ)
+ Có upload được image (0.5đ)

4. (2.5 điểm) Thực hiên chức năng cập nhật user.
+ Thêm được thông tin User không có image (2đ)
+ Có upload được image (0.5đ)

5. (1.0 điểm) Thực hiện chức năng xóa dữ liệu user. Xóa thành công chuyển hướng về trang danh sách.