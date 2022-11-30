function check_input(){
    if(!document.board.subject.value) {
      alert("제목을 입력하세요!");
      document.board.subject.focus();
      return;
    }
    if(!document.board.content.value) {
      alert("내용을 입력하세요!");
      document.board.subject.focus();
      return;
    }
    document.board.submit();
  }