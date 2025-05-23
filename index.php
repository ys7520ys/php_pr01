<?php
  // PHP 데이터 처리
  $data = json_decode(file_get_contents('json/data.json'), true);
  $sections = $data['sections']; // json에 저장된 데이터의 값을 전달하는 버스이다. 여기에 모든 데이터가 담겨서 들어온다.

  // 데이터 확인용 함수
  function getTextData($value, $defaultMessage = "해당 데이터가 존재하지 않음.") {
    return !empty($value) ? $value : $defaultMessage;
  }

  // for first_section
  $first_section = $sections[0];
  $first_sections_boxes = $first_section["boxes"];// boxes배열을 지닌다.
  // for second_section
  $second_section = $sections[1];
  $lists = $second_section["lists"];
  // for third_section
  $third_section = $sections[2];
  $third_cards = $third_section["cards"];
  // for fourth_section
  $fourth_section = $sections[3];
  $fourth_cards = $fourth_section["cards"];
?>

<?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/start.html" ?>

  <div class="container">

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/header.html" ?>

    <!-- main start -->
    <main>

      <!-- swiper_slide start -->
      <!-- !!데스크탑에서서 등장할 swiper -->
      <section class="swiper mySwiper section desktop-content">
        <h2 class="sr-only">스와이퍼 영역</h2>
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="image/slides/slide01.jpg" alt="비닐은 잠시의 편안함을 주지만, 500년 동안 지구에 머무는 현실을 알아보아요."> 
          </div>
          <div class="swiper-slide">
            <img src="image/slides/slide02.jpg" alt="매분 2400그루의 나무가 사라지고 있습니다. 미래의 숲을 지키기 위해서  지구를 보호합시다."> 
          </div>
          <div class="swiper-slide">
            <img src="image/slides/slide03.jpg" alt="우리들을 품어주는 바다를 위해서 사소한 행동들을 조금씩 줄여보아요."> 
          </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation Buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section>
      <!-- swiper_slide end -->

      <!-- first_section start -->
      <section class="firstSection section" id="part1" aria-labelledby="우리의이야기-title">
        <h2 class="sr-only" id="우리의이야기-title">지구 온난화로 인한 피해를 알아보기</h2> 
        <h2 class="section-title">
         <?php echo getTextData($first_section['section-title'] ?? null) ?>
        </h2>
        <h3 class="section-subtitle">
          <?php echo getTextData($first_section["section-subtitle"] ?? null) ?>
        </h3>
        <!-- 모바일의 값에서는 등장하지 않는다. -->
        <!-- !!데스크탑에서 등장할 header -->
        <div class="parent_box desktop-content">
          <div class="img_box">
            <img src="image/sections/wave.jpg" alt="검은색으로 물든 바다 이미지">
            <div class="text_box">
              <h2 class="card-title">
                <?php echo getTextData($first_sections_boxes[0]["card-title"] ?? null) ?>
              </h2>
              <p class="card-subtitle">
                <?php echo getTextData($first_sections_boxes[0]["card-subtitle"] ?? null) ?>
              </p>
              <a href="subPage.php" aria-label="자세히 보기">자세히 보기</a>
            </div>
          </div>
          <div class="img_box">
            <img src="image/sections/space.jpg" alt="정적인 상태의 검은 우주 이미지">
            <div class="text_box">
              <h2 class="card-title">
                <?php echo getTextData($first_sections_boxes[1]["card-title"] ?? null) ?>
              </h2>
              <p class="card-subtitle">
                <?php echo getTextData($first_sections_boxes[1]["card-subtitle"] ?? null) ?>
              </p>
              <a href="subPage.php" aria-label="자세히 보기">자세히 보기</a>
            </div>
          </div>
        </div>




        <!-- !!모바일에서 등장할 header -->
        <div class="firstSection_mobile desktop-content">
          <div class="speech_bubble_mobile">
            <div class="top_box">
              슬라이드로<br>넘겨보아요!
            </div>
            <div class="triangle_box"></div>
          </div>
          <div class="swiper_mobile">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="subPage.php">
                  <div class="img_box">
                    <img src="image/sections/wave.jpg" alt="검은색으로 물든 바다 이미지">
                    <div class="text_box">
                      <h2 class="card-title">
                        <?php echo getTextData($first_sections_boxes[0]["card-title"] ?? null) ?>
                      </h2>
                      <p class="card-subtitle">
                        <?php echo getTextData($first_sections_boxes[0]["card-subtitle"] ?? null) ?>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="subPage.php">
                  <div class="img_box">
                    <img src="image/sections/space.jpg" alt="정적인 상태의 검은 우주 이미지">
                    <div class="text_box">
                      <h2 class="card-title">
                        <?php echo getTextData($first_sections_boxes[1]["card-title"] ?? null) ?>
                      </h2>
                      <p class="card-subtitle">
                        <?php echo getTextData($first_sections_boxes[1]["card-subtitle"] ?? null) ?>
                      </p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation buttons -->
          </div>
          
        </div>
      </section>
      <!-- first_section end -->

      <!-- second_section start -->
      <section class="secondSection section" id="part2" aria-labelledby="현재의상황-title">     
        <h2 class="sr-only" id="현재의상황-title">지구가 걸어온 길에 대해 알아보기</h2>
        <div class="parent_box">
          <div class="text_box">
            <h2 class="section-title">
              <?php echo getTextData($second_section["section-title"] ?? null) ?>
            </h2>
            <h3 class="section-subtitle">
              <?php echo getTextData($second_section["section-subtitle"] ?? null) ?>
            </h3>
            <ul>

              <?php 
                  $i = 1;
                  while ($i <= 7) {
                    echo "<li><a href='subPage.php'>".$lists["list".$i]."</a></li>";
                    $i++;
                  }
              ?>
            </ul>
          </div>
          <!-- !!모바일에서 등장할 img area -->
          <div class="img_box desktop-content">
            <div>
              <img src="image/sections/oil_1.jpg" alt="기름의 역사와 시간의 변화를 나타내는 포스터 이미지">
              <a href="subPage.php">기름의 역사 알아보기</a>
            </div>
            <div>
              <img src="image/sections/oil_2.jpg" alt="바다와 사람의 공생관계를 의미하는 포스터 이미지">
              <a href="subPage.php">바다의 기원 알아보러가기</a>
            </div>
          </div>
          <div class="speech_bubble_mobile">
            <div class="top_box">
              터치를 통해<br>알아보아요!
            </div>
            <div class="triangle_box"></div>
          </div>
        </div>
      </section>
      <!-- second_section end -->

      <!-- third_section start -->
      <section class="thirdSection section" id="part3" aria-labelledby="상황알아보기-title">
        <h2 class="sr-only" id="상황알아보기-title">지구온난화로 인한 피해 알아보기기</h2> 
        <h2 class="section-title">
          <?php echo getTextData($third_section["section-title"] ?? null) ?> 
        </h2>
        <h3 class="section-subtitle">
          <?php echo getTextData($third_section["section-subtitle"] ?? null) ?>
        </h3>
        <!-- !!데스크탑에서 등장할 header -->
        <div class="card_box desktop-content">
          <?php
            $i = -1;
            foreach ($third_cards as $card): 
            ++$i
          ?>
            <div class="deco_">
              <div class="img_box">
                <img src="image/sections/card<?php echo $i+1; ?>.jpg" alt="">
              </div>
              <div class="text_box">
                <h2 class="card-title">
                  <?php echo getTextData($third_cards[$i]["card-title"] ?? null) ?>
                </h2>
                <p class="card-subtitle">
                  <?php echo getTextData($third_cards[$i]["card-subtitle"] ?? null) ?>
                </p>
                <a href="subPage.php">자세히 보러가기</a>
              </div>
            </div>
          <?php endforeach; ?>
        </div>




        <!-- !!모바일에서 등장할 card swiper -->
        <div class="thirdSection_mobile mobile-content">
          <div class="speech_bubble_mobile">
            <div class="top_box">
              슬라이드로<br>넘겨보아요!
            </div>
            <div class="triangle_box"></div>
          </div>
          <div class="swiper_mobile">
            <div class="swiper-wrapper">
              <?php 
                $i = -1;
                foreach ($third_cards as $card) :
                ++ $i
              ?>
                <div class="swiper-slide">
                  <a href="subPage.php">
                    <div class="deco_">
                      <div class="img_box">
                        <img src="image/sections/card<?php echo $i+1; ?>.jpg" alt="플라스틱 비닐의 무분별한 사용을 나타내는 이미지">
                      </div>
                      <div class="text_box">
                        <h2 class="card-title">
                          <?php echo getTextData($third_cards[$i]["card-title"] ?? null) ?>
                        </h2>
                        <p class="card-subtitle">
                          <?php echo getTextData($third_cards[$i]["card-subtitle"] ?? null) ?>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation buttons -->
          </div>
        </div>
      </section>
      <!-- third_section end -->



      <!-- fourth_section start-->
      <section class="fourthSection section" id="part4" aria-labelledby="캠페인-title">
        <h2 class="sr-only" id="캠페인-title">자연환경보호 캠페인 카드 영역</h2>
        <h2 class="section-title">사회를 환기할<span class="line-break"> </span>여러 가지 생각들</h2>
        <h3 class="section-subtitle">함께 만들어 갈 가치관들을<span class="line-break"></span>알아보아요</h3>
        <!-- !!데스크탑탑서 등장할 section area -->
        <div class="card_box desktop-content">
        <?php
        $i = -1;
        foreach ($fourth_cards as $card):
        ++$i
        ?>
          <div class="card">
            <img class="img_box" src="image/sections/icons/card_icon<?php echo $i+1 ?>.jpg" alt=""> 
            <div class="text_box">
              <h2 class="card-title">
                <?php echo getTextData($fourth_cards[$i]["card-title"] ?? null) ?>
              </h2>
              <p class="card-subtitle">
                <?php echo getTextData($fourth_cards[$i]["card-subtitle"] ?? null) ?> 
              </p>
              <a href="subPage.php">더보기</a>
            </div>
          </div>
        <?php endforeach; ?>
        </div>

        <!-- !!모바일에서 등장할 card swiper -->
        <div class="fourthSection_mobile mobile-content">
          <div class="speech_bubble_mobile">
            <div class="top_box">
              슬라이드로<br>넘겨보아요!
            </div>
            <div class="triangle_box"></div>
          </div>
          <div class="swiper_mobile">
            <div class="swiper-wrapper">
              <?php
                $i = -1;
                foreach ($fourth_cards as $card):
                ++$i
              ?>
                <div class="swiper-slide">
                  <a href="subPage.php">
                    <div class="card">
                      <img class="img_box" src="image/sections/icons/card_icon<?php echo $i+1 ?>.jpg" alt=""> 
                      <div class="text_box">
                        <h2 class="card-title">
                          <?php echo getTextData($fourth_cards[$i]["card-title"] ?? null) ?>
                        </h2>
                        <p class="card-subtitle">
                          <?php echo getTextData($fourth_cards[$i]["card-subtitle"] ?? null) ?> 
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
              <?php endforeach?>

            </div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Navigation buttons -->
          </div>
        </div>
      </section>
      <!-- fourth_section end -->
    
      <!-- banner start -->
      <!-- !!데스크탑에서 등장할 header -->
      <section class="bannerSection desktop-content" aria-labelledby="배너-title">
        <h2 class="sr-only" id="배너-title">사람들이 지구온난화에 대해서 좀 더 생각하길 바라는 배너</h2>
        <img src="image/sections/banner/banner_change.jpg" alt="지구 온난화를 생각하자는 이미지">
      </section>
      <!-- banner end -->

    </main>
    <!-- main end -->

    <?php include_once $_SERVER["DOCUMENT_ROOT"]."/inc/footer.html" ?>

  </div>
  <!-- container end -->
</body>
</html>














