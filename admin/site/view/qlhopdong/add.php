<?php 
require "template/components/header.php";
require "template/components/siderbar.php";
?>
<!-- Page Content  -->
<div class="addcontract">
	<div class="hopdong">
		<div class="headerleft">
			<p><b>HỌC VIỆN NÔNG NGHIỆP VIỆT NAM</b>
		</p>
		<p>
			PHÒNG CTCT HSSV
		</p>
		</div>
		<div class="headerright">
			<p>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM
		</p>
		<p>
			Độc lập- Tự do- Hạnh phúc
			<hr>
		</p>
		</div>
		<h3 class="text-center"><strong>HỢP ĐỒNG THUÊ CHỖ Ở NỘI TRÚ</strong></h3>
		<div class="content-hopdong">
			<p>Hôm nay, ngày <input type="" name="" value="<?php echo date("d") ?>"> tháng <input type="" name="" value="<?php echo date("m") ?>"> năm <input type="" name="" value="<?php echo date("Y") ?>">; tại Trường ............................................</p>
			<p>Hai bên gồm:</p>
			<strong>BÊN CHO THUÊ (Bên A): HỌC VIỆN NÔNG NGHIỆP VIỆT NAM</strong>
			<p>Đại diện: ĐẶNG QUỐC THẮNG     <span style="padding-left: 182px">Đơn vị công tác: HỌC VIỆN NÔNG NGHIỆP VIỆT NAM</span></p>     
			<p>Chức vụ: Quản lí KTX          <span style="padding-left: 265px">Số điện thoại: 0984923450</span></p>   
			<strong>BÊN THUÊ CHỖ Ở (Bên B):</strong>
			<p>Họ và tên sinh viên:<input type="text">  <span>Giới tính:
				<select name="" id="">
				<option value="">Nam</option>
				<option value="">Nữ</option>
			</select></span></p>
			
			<p>Năm sinh: <input type="number" class="input-number"> <span>Mã SV: <input type="text" class="input-masv"></span></p>
			<p>Lớp: <input type="text" class="input-lop">  <span>Khoa: <input type="text" class="input-khoa"></span>  <span>Khóa: <input type="number" class="input-number"></span></p>
			<p>Số điện thoại: <input type="text" class="input-sdt"> <span> Email: <input type="text"></span></p>
			<p>Hộ khẩu thường trú: <input type="text"></p>
			<p>Bên A được sự ủy quyền của Giám đốc Học viện Nông nghiệp Việt Nam, cùng Bên B, thống nhất ký kết Hợp đồng cho thuê chỗ ở nội trú tại Ký túc xá Trường Học viện Nông nghiệp Việt Nam với các điều khoản sau:</p>
			<strong style="text-decoration: underline;">Điều 1:</strong>
			<p>Bên A đồng ý cho Bên B thuê 01 chỗ ở nội trú tại phòng số: <input type="number" class="input-number">Tầng <input type="number" class="input-number">Nhà: <select name="" id="">
				<option value="">A2</option>
				<option value="">B2</option>
				<option value="">B3</option>
				<option value="">B4</option>
				<option value="">C2</option>
				<option value="">C3</option>
				<option value="">C4</option>
				<option value="">C5</option>
			</select>  
		Ký túc xá Trường Học viện Nông nghiệp Việt Nam. Bên B được phép sử dụng các tài sản do nhà trường trang bị tại phòng ở cũng như các phòng sinh hoạt tập thể thuộc khuôn viên Ký túc xá theo Quy chế tổ chức & hoạt động, các quy định và nội quy của Ký túc xá.</p>
			<strong style="text-decoration: underline;">Điều 2: Giá cả, thời gian và phương thức thanh toán.</strong>
			<p>2.1. Đơn giá cho thuê: <input type="number" class="input-dongia
				"> tháng.</p>
			<p>2.2. Thời gian cho thuê: 01 học kỳ 05 tháng tính từ <input type="date"> đến <input type="date"></p>
			<p>Ngoài ra Bên B phải đóng thêm tiền điện, nếu sử dụng vượt mức tiêu thụ điện là: 200/tháng/1người, theo quy định chung của Ký túc xá.</p>
			<p>2.3. Phương thức thanh toán: Bên B thanh toán cho Bên A tiền thuê chỗ ở nội trú bằng tiền mặt 1 lần tại phòng Quản lý Ký túc xá của nhà trường trong vòng 01 ngày sau khi hợp đồng được ký kết .</p>
			<strong style="text-decoration: underline;">Điều 3:</strong> <strong>Hợp đồng hết hiệu lực và bên A không có trách nhiệm hoàn trả tiền cho bên B khi:</strong>
			<ul>
				<li>Thời hạn ghi trong hợp đồng kết thúc.</li>
				<li>Bên B đề nghị chấm dứt hợp đồng trước thời hạn.
				</li>
				<li>Bên B hiện không còn là sinh viên của trường: đã tốt nghiệp, bị đình chỉ học tập, bị đuổi học hoặc tự ý bỏ học.
				</li>
				<li>Bên B không đảm bảo về sức khỏe, mắc các chứng bệnh về lây nhiễm theo kết luận của cơ quan y tế cấp quận (huyện) trở lên.
				</li>
				<li>Bên B vi phạm Nội quy Ký túc xá, bị xử lý kỷ luật theo Khung kỷ luật ban hành mức chấm dứt hợp đồngng, cho ra khỏi Ký túc xá.
				</li>
			</ul>
			<strong style="text-decoration: underline;">Điều 4:</strong><strong> Trách nhiệm của bên B.</strong>
			<ul>
				<li>Ở đúng nơi đã được Ban quản trị Ký túc xá sắp xếp (vị trí phòng ở và giường ở).
				</li>
				<li>Chấp hành sự điều chuyển chỗ ở của Ban quản trị Ký túc xá trong trường hợp cần thiết và có lý do chính đáng: (Ký túc xá sửa chữa nâng cấp, lý do về an ninh trật tự và một số lý do khác).
				</li>
				<li>Không được cho thuê lại chỗ ở cũng như tự ý chuyển nhượng lại hợp đồng cho người khác.
				</li>
				<li>Không được đun nấu trong phòng ở và xung quanh khu nội trú.
				</li>
				<li>Chấp hành nghiêm chỉnh các quy định của Nhà nước, của Trường, Nội quy Ký túc xá
				</li>
				<li>Tự bảo quản tài sản và đồ dùng cá nhân, tự chịu trách nhiệm về việc bảo vệ an toàn cho mình đối với việc sử dụng các dụng cụ, thiết bị cũng như các hoạt động khác.
				</li>
				<li>Có ý thức tự giác trong việc bảo quản tài sản công, triệt để tiết kiệm, chống lãng phí, thực hiện nghĩa vụ đầy đủ về trật tự vệ sinh Ký túc xá. Cam kết giữ nghiêm, có tinh thần trách nhiệm và ý thức tập thể.
				</li>
				<li>Bồi thường các mất mát hư hỏng tài sản công do mình gây ra theo quy định chung của nhà trường.
				</li>
				<li>Tự thanh toán các chi phí dịch vụ cá nhân khác như dịch vụ ăn uống, gửi xe...
				</li>
				<li>Thanh toán đầy đủ các khoản phí đúng hạn, lưu giữ phiếu thu để đối chiếu khi cần thiết.
				</li>
				<li>Cam kết giữ nghiêm kỷ luật nội trú, có tinh thần trách nhiệm và ý thức tập thể.
				</li>
				<li>Phải trả phòng và ra khỏi ký túc xá vào ngày hợp đồng hết hiệu lực
				</li>
			</ul>
			<strong style="text-decoration: underline;">Điều 5:</strong><strong>Trách nhiệm của Bên A.</strong>
			<ul>
				<li>Sắp xếp chỗ ở cho Bên B ngay sau khi Bên B đã hoàn thành các thủ tục đăng ký chỗ ở theo quy định và thời gian trong hợp đồng.
				</li>
				<li>Đảm bảo các điều kiện về việc sinh hoạt và học tập cho Bên B theo quy định chung.
				</li>
				<li>Hướng dẫn Bên B sử dụng các trang thiết bị trong phòng ở.
				</li>
				<li>Lưu hoá đơn (phiếu thu) các khoản tiền do Bên B đóng.
				</li>
			</ul>
			<strong style="text-decoration: underline;">Điều 6:</strong><strong> Điều khoản chung.</strong>
			<ul>
				<li>Bên nào muốn chấm dứt hợp đồng trước thời hạn phải có văn bản báo cho bên thứ hai biết trước ít nhất là 15 ngày (trừ trường hợp SV bị xử lý kỷ luật vì các lý do khác, hay bị kỷ luật vì vi phạm quy định KTX).</li>
				<li>Quy chế tổ chức & hoạt động Ký túc xá, Nội quy Ký túc xá, Phiếu đăng ký ở nội trú, Bản cam kết đã ký là bộ phận chung của hợp đồng này.</li>
				<li>Hai bên cam kết thực hiện theo đúng các điều khoản của hợp đồng và Bản cam kết.</li>
				<li>Hợp đồng được lập thành 02 bản có giá trị ngang nhau, Bên A giữ 01 bản và Bên B giữ 01 bản.</li>
				<li>Bên B phải bàn giao trang thiết bị phòng ở cho bên A khi nghỉ hè (Tết), thực tập và trước khi kết thúc hợp đồng.</li>
			</ul>
		</div>
		<div class="end-hopdong">
			<div class="end-hopdong-left">
				<strong>
					Bên A
				</strong><br>	
					<i>(Ký, ghi rõ họ tên)</i>
				
			</div>
			<div class="end-hopdong-right">
				<strong>
					Bên B
				</strong><br>
					<i>(Ký, ghi rõ họ tên)</i>
				
			</div>	
		</div>
	</div>
</div>
<div class="printf-hopdong">
		<button class="text-center inhopdong"><i class="fas fa-print"></i> In hợp đồng  </button>
</div>
<!-- END Content  -->
<?php 
require "template/components/footer.php";
?>