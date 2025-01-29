<?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/start.html" ?>
  <!-- container start-->
  <div class="container">
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.html" ?>
    <main>
      <!-- header end -->
      <section class="loginArea">
        <form action="login.php" method="POST"></form>
          <div class="loginBox">
            <div class="id">
              <label for="username">
                <h2>아이디</h2>
              </label>
              <input type="text" id="username" placeholder="아이디를 입력하세요" required>
              <!--required를 통해서 만약에 데이터를 입력하지 않으면 전송하지 않음-->
            </div>
            <div class="password">
              <label for="password">
                <h2>비밀번호</h2>
              </label>
              <input type="password" id="password" name="password" placeholder="비밀번호를 입력하세요" required>
              <!--required를 통해서 만약에 데이터를 입력하지 않으면 전송하지 않음-->
            </div>
            <div>
              <button type="submit" class="loginSubmit">로그인</button>
              <button type="button" class="signup">회원가입</button>
            </div>
          </div>
        </form>
      </section>
    </main>
    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.html" ?>
  </div>
</body>
</html>