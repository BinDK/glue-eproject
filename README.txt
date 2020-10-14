File này để UPDATE workflow và ghi nhớ cách dùng GIT:

*TO-DO: - Giao diện + hình ảnh
		- file Document/Report
		


**UPDATE:
14/10: Xong!!! Maybe




11/10: Các đầu mục đã đổ dữ liệu vô xong.
10/10: feedback(chưa có alert) + header có bootstrap, header.php đổi navbar thêm carousel 3 hình thú.
7/10:Mấy anh ai clone về thì css sai sai thì chuyển qua style1.css xài thử nhé nhé. Máy em hay bị conflic chổ 
css bên style.css
6/10: Event: thêm ngày gần nhất, limit 3 event trên index
		index: sửa lại background, footer
4/10: -Admin thì mỏi phần việc thêm breadcrumb, dọn lại index
		- Trang index.php của USER thì require đến các trang của mọi người
		- footer, conatact, ticket Binh làm
		_ event anh Thành là 
		_ gallery anh Hưng làm 
		- Animal, category anh Điện làm 
30/9: 
		- Bình: Xong login/logout/changepass, chưa xong trả lời user feedback + ticket
		- Anh Hưng: _ Trang người dùng xong + chưa đổ dữ liệu vào(photo+description)
				_Đã đưa GeoLocation API vào trang user 
		- Điện _ Sửa href trong index.php: dien.php --> index.php?page=dien
			Xong file thêm xóa sửa Admin_animals.


*** Ctrl/command + shift + m trên windows/mac để coi responsive chrome + mozilla
****DÙNG GIT
1)
viết xong 
 git add `file vừa vừa` hoặc ./ để add file tất cả vào

 git commit -m "Vừa add/edit/del những gì trong file"

	1a)tạo hoặc không tạo branch 
		git branch để xem hiện tại máy local có bao nhiêu branch
		git branch xxx để tạo branch test  
 "git push -U origin master" là push vào branch master 
 git push -U origin xxx là push vào branch xxx

 2)
 git pull để kéo file đã chỉnh sữa bởi mọi người về từ repo 
 MAC/Linux: bị permission denied thì thêm sudo trước git pull
