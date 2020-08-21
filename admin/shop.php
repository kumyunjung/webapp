<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>맛방</title>

    <!-- 이메일 선택 스크립트 -->
    <script>
        function checkemail() {
            if(frm.email_select.value == '1') {
                frm.email2.readOnly = false;
                frm.email2.value = '';
                frm.email2.focus();
            }else {
                frm.email2.readOnly = true;
                frm.email2.value = frm.email_select.value;
            }
        }
    </script>
</head>
<body>
    <form action="shop_ok.php" method="post" name="frm">
        <!-- 헤더 -->
        <header>
            <div>
                <?php include("inc/logo.php"); ?>   
                <!-- include_once() : 같은 파일 한번만 포함   -->
            </div>
        </header>

        <!-- 메뉴 -->
        <?php include("inc/menu.php"); ?>

        <div class="container">
            <!-- 본문 -->
            <section>
                <h3>가게 정보입력</h3>
                <p><span>*</span>필수입력 항목</p>
                
                    <ul>
                        <li>분류<span>*</span></li>
                        <li>
                            <select name="s_opt">
                                <option value="">선택</option>
                                <option value="카페">카페</option>
                                <option value="술집">술집</option>
                                <option value="식당">식당</option>
                            </select>                        
                        </li>
                    </ul>

                    <ul>
                        <li>상호명<span>*</span></li>
                        <li>
                            <input type="text" name="s_name" id="s_name" placeholder="상호명">   
                        </li>
                    </ul>

                    <ul>
                        <li>전화번호<span>*</span></li>
                        <li>
                            <input type="text" name="phone1">   
                            <input type="text" name="phone2">   
                            <input type="text" name="phone3">   
                        </li>
                    </ul>

                    <ul>
                        <li>지역<span>*</span></li>
                        <li>
                            <select name="s_zone">
                                <option value="">--선택--</option>
                                <option value="서울">서울</option>
                                <option value="부산">부산</option>
                                <option value="대구">대구</option>                            
                            </select>
                        </li>
                    </ul>   

                    <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>

<script>

    function DaumPostcode() {

        new daum.Postcode({

            oncomplete: function(data) {

                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 도로명 주소의 노출 규칙에 따라 주소를 조합한다.

                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.

                var fullRoadAddr = data.roadAddress; // 도로명 주소 변수

                var extraRoadAddr = ''; // 도로명 조합형 주소 변수

                // 법정동명이 있을 경우 추가한다. (법정리는 제외)

                // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.

                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){

                    extraRoadAddr += data.bname;

                }

                // 건물명이 있고, 공동주택일 경우 추가한다.

                if(data.buildingName !== '' && data.apartment === 'Y'){

                   extraRoadAddr += (extraRoadAddr !== '' ? ', ' + data.buildingName : data.buildingName);

                }

                // 도로명, 지번 조합형 주소가 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.

                if(extraRoadAddr !== ''){

                    extraRoadAddr = ' (' + extraRoadAddr + ')';

                }

                // 도로명, 지번 주소의 유무에 따라 해당 조합형 주소를 추가한다.

                if(fullRoadAddr !== ''){

                    fullRoadAddr += extraRoadAddr;

                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.

                document.getElementById('input_address').value = data.zonecode; //5자리 새우편번호 사용

                document.getElementById('input_address3').value = fullRoadAddr;

                document.getElementById('input_address4').value = data.jibunAddress;

                // 사용자가 '선택 안함'을 클릭한 경우, 예상 주소라는 표시를 해준다.

                if(data.autoRoadAddress) {

                    //예상되는 도로명 주소에 조합형 주소를 추가한다.

                    var expRoadAddr = data.autoRoadAddress + extraRoadAddr;

                    document.getElementById('input_address3').innerHTML = '(예상 도로명 주소 : ' + expRoadAddr + ')';

                } else if(data.autoJibunAddress) {

                    var expJibunAddr = data.autoJibunAddress;

                    document.getElementById('input_address4').innerHTML = '(예상 지번 주소 : ' + expJibunAddr + ')';

  

                }

            }

        }).open();

    }

</script>

                    <ul>
                        <li>우편번호</li>
                        <li>
                            <input type="text" name="input_address" id="input_address" readOnly>
                            <input type="button" value="우편번호찾기" onClick="DaumPostcode()">
                        </li>
                    </ul>

                    <ul>
                        <li>주소</li>
                        <li><input type="text" name="input_address3" id="input_address3"></li>
                        <li><input type="hidden" name="input_address4" id="input_addres4"></li>
                        <li><input type="text" name="input_address5" id="input_address5"></li>
                    </ul>

                    <ul>
                        <li>이메일</li>
                        <li>
                            <input type="text" name="email1">@<input type="text" name="email2">
                            <select name="email_select" id="email" onChange="checkemail();">
                                <option value="">--선택--</option>
                                <option value="naver.com">네이버</option>
                                <option value="daum.net">다음</option>
                                <option value="gmail.com">구글</option>
                                <option value="nate.com">네이트</option>
                                <option value="1">직접입력</option>
                            </select>
                        </li>
                    </ul>

                    <ul>
                        <li>서비스</li>
                        <li>
                            <input type="checkbox" name="s_service" value="주차">주차
                            <input type="checkbox" name="s_service" value="놀이방">놀이방
                            <input type="checkbox" name="s_service" value="와이파이">와이파이                    
                        </li>
                    </ul>                
            </section>

            <footer>
                <div>
                    <input type="submit" value="글등록">
                </div>                
            </footer>
        </div>
    </form>
</body>
</html>