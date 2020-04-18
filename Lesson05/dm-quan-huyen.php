<!DOCTYPE html>
<html lang="en">
<?php
	$dMQH =[
		[1,"Q.BADINH","Quận Ba Đình","",1,"03/27/2020","Admin","03/27/2020","DEVERP",0,FALSE],
		[2,"Q.HOANKIEM","Quận Hoàn Kiếm","",1,"03/27/2020","Admin","03/27/2020","DEVERP",0,FALSE],
		[3,"Q.TAYHO","Quận Tây Hồ","",1,"03/27/2020","Admin","03/27/2020","DEVERP",0,FALSE],
		[4,"Q.LONGBIEN","Quận Long Biên","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[5,"Q.CAUGIAY","Quận Cầu Giấy","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[6,"Q.DONGDA","Quận Đống Đa","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[7,"Q.HAIBATRUNG","Quận Hai Bà Trưng","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[8,"Q.HOANGMAI","Quận Hoàng Mai","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[9,"Q.THANHXUAN","Quận Thanh Xuân","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[16,"H.SOCSON","Huyện Sóc Sơn","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[17,"H.DONGANH","Huyện Đông Anh","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[18,"H.GIALAM","Huyện Gia Lâm","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[19,"Q.NAMTULIEM","Quận Nam Từ Liêm","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[20,"H.THANHTRI","Huyện Thanh Trì","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[21,"Q.BACTULIEM","Quận Bắc Từ Liêm","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[24,"TP.HAGIANG","Thành phố Hà Giang","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[26,"H.DONGVAN","Huyện Đồng Văn","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[27,"H.MEOVAC","Huyện Mèo Vạc","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[28,"H.YENMINH","Huyện Yên Minh","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[29,"H.QUANBA","Huyện Quản Bạ","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[30,"H.VIXUYEN","Huyện Vị Xuyên","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[31,"H.BACME","Huyện Bắc Mê","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[32,"H.HOANGSUPHI","Huyện Hoàng Su Phì","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[33,"H.XINMAN","Huyện Xín Mần","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[34,"H.BACQUANG","Huyện Bắc Quang","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[35,"H.QUANGBINH","Huyện Quang Bình","",2,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[40,"TP.CAOBANG","Thành phố Cao Bằng","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[42,"H.BAOLAM","Huyện Bảo Lâm","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[43,"H.BAOLAC","Huyện Bảo Lạc","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[44,"H.THONGNONG","Huyện Thông Nông","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[45,"H.HAQUANG","Huyện Hà Quảng","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[46,"H.TRALINH","Huyện Trà Lĩnh","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[47,"H.TRUNGKHANH","Huyện Trùng Khánh","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[48,"H.HALANG","Huyện Hạ Lang","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[49,"H.QUANGUYEN","Huyện Quảng Uyên","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[50,"H.PHUCHOA","Huyện Phục Hoà","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[51,"H.HOAAN","Huyện Hoà An","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[52,"H.NGUYENBINH","Huyện Nguyên Bình","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[53,"H.THACHAN","Huyện Thạch An","",4,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[58,"TP.BACKAN","Thành Phố Bắc Kạn","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[60,"H.PACNAM","Huyện Pác Nặm","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[61,"H.BABE","Huyện Ba Bể","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[62,"H.NGANSON","Huyện Ngân Sơn","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[63,"H.BACHTHONG","Huyện Bạch Thông","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[64,"H.CHODON","Huyện Chợ Đồn","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[65,"H.CHOMOI","Huyện Chợ Mới","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[66,"H.NARI","Huyện Na Rì","",6,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[70,"TP.TUYENQUANG","Thành phố Tuyên Quang","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[71,"H.LAMBINH","Huyện Lâm Bình","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[72,"H.NAHANG","Huyện Nà Hang","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[73,"H.CHIEMHOA","Huyện Chiêm Hóa","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[74,"H.HAMYEN","Huyện Hàm Yên","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[75,"H.YENSON","Huyện Yên Sơn","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[76,"H.SONDUONG","Huyện Sơn Dương","",8,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[80,"TP.LAOCAI","Thành phố Lào Cai","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[82,"H.BATXAT","Huyện Bát Xát","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[83,"H.MUONGKHUONG","Huyện Mường Khương","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[84,"H.SIMACAI","Huyện Si Ma Cai","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[85,"H.BACHA","Huyện Bắc Hà","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[86,"H.BAOTHANG","Huyện Bảo Thắng","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[87,"H.BAOYEN","Huyện Bảo Yên","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[88,"H.SAPA","Huyện Sa Pa","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[89,"H.VANBAN","Huyện Văn Bàn","",10,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[94,"TP.DIENBIENPHU","Thành phố Điện Biên Phủ","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[95,"NULL","Thị Xã Mường Lay","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[96,"H.MUONGNHE","Huyện Mường Nhé","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[97,"H.MUONGCHA","Huyện Mường Chà","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[98,"H.TUACHUA","Huyện Tủa Chùa","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[99,"H.TUANGIAO","Huyện Tuần Giáo","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[100,"H.DIENBIEN","Huyện Điện Biên","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[101,"H.DIENBIENDONG","Huyện Điện Biên Đông","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[102,"H.MUONGANG","Huyện Mường Ảng","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[103,"H.NAMPO","Huyện Nậm Pồ","",11,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[105,"TP.LAICHAU","Thành phố Lai Châu","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[106,"H.TAMDUONG","Huyện Tam Đường","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[107,"H.MUONGTE","Huyện Mường Tè","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[108,"H.SINHO","Huyện Sìn Hồ","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[109,"H.PHONGTHO","Huyện Phong Thổ","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[110,"H.THANUYEN","Huyện Than Uyên","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[111,"H.TANUYEN","Huyện Tân Uyên","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[112,"H.NAMNHUN","Huyện Nậm Nhùn","",12,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[116,"TP.SONLA","Thành phố Sơn La","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[118,"H.QUYNHNHAI","Huyện Quỳnh Nhai","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[119,"H.THUANCHAU","Huyện Thuận Châu","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[120,"H.MUONGLA","Huyện Mường La","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[121,"H.BACYEN","Huyện Bắc Yên","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[122,"H.PHUYEN","Huyện Phù Yên","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[123,"H.MOCCHAU","Huyện Mộc Châu","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[124,"H.YENCHAU","Huyện Yên Châu","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[125,"H.MAISON","Huyện Mai Sơn","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[126,"H.SONGMA","Huyện Sông Mã","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[127,"H.SOPCOP","Huyện Sốp Cộp","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[128,"H.VANHO","Huyện Vân Hồ","",14,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[132,"TP.YENBAI","Thành phố Yên Bái","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[133,"NULL","Thị xã Nghĩa Lộ","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[135,"H.LUCYEN","Huyện Lục Yên","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[136,"H.VANYEN","Huyện Văn Yên","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[137,"H.MUCANGCHAI","Huyện Mù Căng Chải","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[138,"H.TRANYEN","Huyện Trấn Yên","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[139,"H.TRAMTAU","Huyện Trạm Tấu","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[140,"H.VANCHAN","Huyện Văn Chấn","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[141,"H.YENBINH","Huyện Yên Bình","",15,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[148,"TP.HOABINH","Thành phố Hòa Bình","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[150,"H.DABAC","Huyện Đà Bắc","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[151,"H.KYSON","Huyện Kỳ Sơn","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[152,"H.LUONGSON","Huyện Lương Sơn","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[153,"H.KIMBOI","Huyện Kim Bôi","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[154,"H.CAOPHONG","Huyện Cao Phong","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[155,"H.TANLAC","Huyện Tân Lạc","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[156,"H.MAICHAU","Huyện Mai Châu","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[157,"H.LACSON","Huyện Lạc Sơn","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[158,"H.YENTHUY","Huyện Yên Thủy","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[159,"H.LACTHUY","Huyện Lạc Thủy","",17,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[164,"TP.THAINGUYEN","Thành phố Thái Nguyên","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[165,"TP.SONGCONG","Thành phố Sông Công","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[167,"H.DINHHOA","Huyện Định Hóa","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[168,"H.PHULUONG","Huyện Phú Lương","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[169,"H.DONGHY","Huyện Đồng Hỷ","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[170,"H.VONHAI","Huyện Võ Nhai","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[171,"H.DAITU","Huyện Đại Từ","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[172,"NULL","Thị xã Phổ Yên","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[173,"H.PHUBINH","Huyện Phú Bình","",19,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[178,"TP.LANGSON","Thành phố Lạng Sơn","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[180,"H.TRANGDINH","Huyện Tràng Định","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[181,"H.BINHGIA","Huyện Bình Gia","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[182,"H.VANLANG","Huyện Văn Lãng","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[183,"H.CAOLOC","Huyện Cao Lộc","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[184,"H.VANQUAN","Huyện Văn Quan","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[185,"H.BACSON","Huyện Bắc Sơn","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[186,"H.HUULUNG","Huyện Hữu Lũng","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[187,"H.CHILANG","Huyện Chi Lăng","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[188,"H.LOCBINH","Huyện Lộc Bình","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[189,"H.DINHLAP","Huyện Đình Lập","",20,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[193,"TP.HALONG","Thành phố Hạ Long","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[194,"TP.MONGCAI","Thành phố Móng Cái","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[195,"TP.CAMPHA","Thành phố Cẩm Phả","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[196,"TP.UONGBI","Thành phố Uông Bí","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[198,"H.BINHLIEU","Huyện Bình Liêu","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[199,"H.TIENYEN","Huyện Tiên Yên","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[200,"H.DAMHA","Huyện Đầm Hà","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[201,"H.HAIHA","Huyện Hải Hà","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[202,"H.BACHE","Huyện Ba Chẽ","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[203,"H.VANDON","Huyện Vân Đồn","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[204,"H.HOANHBO","Huyện Hoành Bồ","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[205,"NULL","Thị xã Đông Triều","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[206,"NULL","Thị xã Quảng Yên","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[207,"H.COTO","Huyện Cô Tô","",22,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[213,"TP.BACGIANG","Thành phố Bắc Giang","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[215,"H.YENTHE","Huyện Yên Thế","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[216,"H.TANYEN","Huyện Tân Yên","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[217,"H.LANGGIANG","Huyện Lạng Giang","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[218,"H.LUCNAM","Huyện Lục Nam","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[219,"H.LUCNGAN","Huyện Lục Ngạn","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[220,"H.SONDONG","Huyện Sơn Động","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[221,"H.YENDUNG","Huyện Yên Dũng","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[222,"H.VIETYEN","Huyện Việt Yên","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[223,"H.HIEPHOA","Huyện Hiệp Hòa","",24,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[227,"TP.VIETTRI","Thành phố Việt Trì","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[228,"NULL","Thị xã Phú Thọ","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[230,"H.DOANHUNG","Huyện Đoan Hùng","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[231,"H.HAHOA","Huyện Hạ Hoà","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[232,"H.THANHBA","Huyện Thanh Ba","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[233,"H.PHUNINH","Huyện Phù Ninh","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[234,"H.YENLAP","Huyện Yên Lập","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[235,"H.CAMKHE","Huyện Cẩm Khê","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[236,"H.TAMNONG","Huyện Tam Nông","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
		[237,"H.LAMTHAO","Huyện Lâm Thao","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[238,"H.THANHSON","Huyện Thanh Sơn","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[239,"H.THANHTHUY","Huyện Thanh Thuỷ","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[240,"H.TANSON","Huyện Tân Sơn","",25,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[243,"TP.VINHYEN","Thành phố Vĩnh Yên","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[244,"NULL","Thị xã Phúc Yên","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[246,"H.LAPTHACH","Huyện Lập Thạch","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[247,"H.TAMDUONG","Huyện Tam Dương","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[248,"H.TAMDAO","Huyện Tam Đảo","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[249,"H.BINHXUYEN","Huyện Bình Xuyên","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[250,"H.MELINH","Huyện Mê Linh","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[251,"H.YENLAC","Huyện Yên Lạc","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[252,"H.VINHTUONG","Huyện Vĩnh Tường","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[253,"H.SONGLO","Huyện Sông Lô","",26,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[256,"TP.BACNINH","Thành phố Bắc Ninh","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[258,"H.YENPHONG","Huyện Yên Phong","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[259,"H.QUEVO","Huyện Quế Võ","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[260,"H.TIENDU","Huyện Tiên Du","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[261,"NULL","Thị xã Từ Sơn","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[262,"H.THUANTHANH","Huyện Thuận Thành","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[263,"H.GIABINH","Huyện Gia Bình","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[264,"H.LUONGTAI","Huyện Lương Tài","",27,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[268,"Q.HADONG","Quận Hà Đông","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[269,"NULL","Thị xã Sơn Tây","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[271,"H.BAVI","Huyện Ba Vì","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[272,"H.PHUCTHO","Huyện Phúc Thọ","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[273,"H.DANPHUONG","Huyện Đan Phượng","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[274,"H.HOAIDUC","Huyện Hoài Đức","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[275,"H.QUOCOAI","Huyện Quốc Oai","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[276,"H.THACHTHAT","Huyện Thạch Thất","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[277,"H.CHUONGMY","Huyện Chương Mỹ","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[278,"H.THANHOAI","Huyện Thanh Oai","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[279,"H.THUONGTIN","Huyện Thường Tín","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],
[280,"H.PHUXUYEN","Huyện Phú Xuyên","",1,"03/13/2020","Admin","03/13/2020","DEVERP",0,FALSE],

];
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Danh mục quận huyện</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
	<h1>Danh mục quận huyện</h1>
	<table class="table table-bordered table-strip">
		<thead>
			<tr>
				<th>ID</th>

				<th>Mã</th>

				<th>Tên</th>

				<th>Ghi chú</th>

				<th>Mã tỉnh</th>

				<th>Ngày tạo</th>

				<th>Người tạo</th>

				<th>Ngày sửa</th>

				<th>Người sửa</th>

				<th>Trạng thái</th>

				<th>Đã xóa</th>
			</tr>
		</thead>
		<tbody>
			<?php
				for($h=0; $h<sizeof($dMQH); $h++){
					echo "<tr>";
					for($c =0; $c<sizeof($dMQH[$h]); $c++){
						echo "<td> ". $dMQH[$h][$c]." </td>";
					}
					echo "</tr>";
				}
			?>
		</tbody>
	</table>




	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>