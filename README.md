# portfolio-nguyenleanhkhoa.com

portfolio-nguyenleanhkhoa.com là một dự án giới thiệu cá nhân các thông tin dự án đã tham gia, CV online chia sẽ bài viết ...

## Tính năng

- Quản lý dự án, sản phẩm, bài vết, license...
- Giới thiệu cá nhân, sản phẩm, dự án cá nhân
- CV online
- Phân quyền

## Cài đặt

Để cài đặt dự án, bạn cần thực hiện các bước sau:

1. Clone repository:

   ```bash
   git clone https://github.com/khoait03/portfolio-nguyenleanhkhoa.com.git

2. Cài đặt các phụ thuộc:

   ```bash
   cd portfolio-nguyenleanhkhoa.com
   
3. Cài đặt các phụ thuộc:
   ```bash
   composer install

4. Tạo file .env:
   ```bash
   cp .env.example .env

5. Cấu hình file .env:
   Mở file .env và cấu hình các thông số kết nối cơ sở dữ liệu, ứng dụng, và các thông tin khác cần thiết cho dự án.


6. Tạo khóa ứng dụng:
   ```bash
   php artisan key:generate

7. Chạy migration:
   ```bash
   php artisan migrate
   
8. Chạy seeder:
   ```bash
   php artisan db:seed
   
9. Run project:
   ```bash
   php artisan serve



10. Truy cập vào địa chỉ: http://127.0.0.1:8000 để xem ứng dụng:
 
    


Đóng góp
Nếu bạn muốn đóng góp cho dự án, vui lòng tạo pull request và tuân thủ các quy tắc đóng góp.

Giấy phép
Dự án này được cấp phép theo MIT License.
