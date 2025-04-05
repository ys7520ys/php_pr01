document.addEventListener("DOMContentLoaded",()=>{
  const btn_login = document.querySelector(".loginSubmit")
  btn_login.addEventListener("click",()=>{
    const f_id = document.querySelector('#username')
    if(f_id.value == '') { /* id 란에 들어간 입력 값이 비어있는지 판별한다. */
      alert("아이디를 입력해주세요!!!!")
      f_id.focus() /* id 란으로 focus를 이동시킨다.(사용자가 입력하도록 유도) */
      return false /* form 제출을 막고 다음 동작으로 넘어가는 것을 멈춘다. */
    }
    const f_pw = document.querySelector('#password')
    if(f_pw.value == '') {
      alert("비밀번호를 입력해주세요!!!!")
      f_pw.focus()
      return false
    }
    // Ajax
    const xhr = new XMLHttpRequest()
    xhr.open("POST","./pg/login_process.php", "true")

    const f1 = new FormData()
    f1.append("id",f_id.value)
    f1.append("pw",f_pw.value)

    xhr.send(f1)

    xhr.onload = () => {
      alert(xhr.status)
    }

  })
})