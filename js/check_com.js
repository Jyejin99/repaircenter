function check_input() {
    if(!document.member-com.email.value) {
        alert("이메일을 입력하세요!");
        document.member-com.email.focus();
        return;
    }
    if(!document.member-com.pass.value){
        alert("비밀번호를 입력하세요!");
        document.member-com.pass.focus();
        return;
    }

    if(!document.member-com.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요!");
        document.member-com.pass_confirm.focus();
        return;
    }
    if(document.member-com.pass.value != document.member-com.pass_confirm.value) {
        alert("비밀번호가 일치하지 않습니다.");
        document.member-com.pass.focus();
        document.member-com.pass.select();
        return;
    }
    if(!document.member-com.business_number.value){
        alert("사업자 등록 번호를 입력하세요!");
        document.member-com.business_number.focus();
        return;
    }
    if(!document.member-com.business_name.value){
        alert("사업자명을 입력하세요!");
        document.member-com.business_name.focus();
        return;
    }
    if(!document.member-com.phone_number.value){
        alert("휴대폰 번호를 입력하세요!");
        document.member-com.phone_number.focus();
        return;
    }
    document.member-com.submit();
}