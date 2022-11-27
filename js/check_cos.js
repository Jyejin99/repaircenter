function check_input() {
    if(!document.member.email.value) {
        alert("이메일을 입력하세요!");
        document.member.email.focus();
        return;
    }
    if(!document.member.nickname.value){
        alert("닉네임을 입력하세요!");
        document.member.nickname.focus();
        return;
    }
    if(!document.member.pass.value){
        alert("비밀번호를 입력하세요!");
        document.member.pass.focus();
        return;
    }

    if(!document.member.pass_confirm.value){
        alert("비밀번호 확인을 입력하세요!");
        document.member.pass_confirm.focus();
        return;
    }
    if(document.member.pass.value != document.member.pass_confirm.value) {
        alert("비밀번호가 일치하지 않습니다.");
        document.member.pass.focus();
        document.member.pass.select();
        return;
    }
    if(!document.member.phone_number.value){
        alert("전화번호를 입력하세요!");
        document.member.phone_number.focus();
        return;
    }
    document.member.submit();
}