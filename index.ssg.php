<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>site publishing</title>
</head>

<body>

  <!-- 폰트어썸 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- 테일윈드 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.2/tailwind.min.css">
  <!-- 제이쿼리 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <!-- 스크롤 트리거 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <!-- Swiper JS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/index.css">
  <script src="./js/index.js" defer></script>
  <!-- 스크롤 트리거 -->

  <!-- 상단바 -->
  <header class="top-bar w-full h-24 flex justify-between absolute z-50 pt-3">
    <div class="top-bar__logo h-full flex items-center ml-2 p-3">
      <a class="h-full" href="#"><img class="top-bar__logo-1"
          src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fblog.kakaocdn.net%2Fdn%2FdQf0gp%2Fbtq7U1ReJ3g%2F7Bz0mFUYf1g8mg9sqfGYD0%2Fimg.png"
          alt="">
      </a>
      <a class="h-full" href="#"><img class="top-bar__logo-2"
          src="https://i.postimg.cc/R0FG1P4R/58bb44851d5033c4acb737f56b4ef032-28461.png" alt=""></a>
    </div>
    <nav class="pb-3">
      <ul class="flex h-full items-end text-white font-bold whitespace-nowrap">
        <li><a href="#">TWS 무선이어버드</a></li>
        <li class="ml-6"><a href="#">와이어 타입</a></li>
        <li class="ml-6"><a href="#">넥밴드 타입</a></li>
        <li class="ml-6"><a href="#">고객센터</a></li>
        <li class="ml-6"><a href="#">블루콤</a></li>
      </ul>
    </nav>
    <div class="top-bar__langage">
      <ul class="flex items-baseline text-white font-bold h-full">
        <li><a href="#">LOGIN</a></li>
        <li class="ml-4"><a href="#">JOIN</a></li>
        <li class="ml-4"><a href="#">SEARCH</a></li>
        <li class="ml-4"><a href="#"><img
              src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fblog.kakaocdn.net%2Fdn%2FcGG1Xu%2Fbtq7UOEBUmj%2FC3TILAWtf1SqPolzjRLkek%2Fimg.png"
              alt=""></a></li>
        <li class="ml-4"><a href="#"><img
              src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fblog.kakaocdn.net%2Fdn%2FztyWB%2Fbtq7TLaxy2G%2FIt9F7iujeWKXy89fAsAkD1%2Fimg.png"
              alt=""></a></li>
      </ul>
    </div>
  </header>

  <!-- 메인배너슬라이드 -->
  <section class="section-1 overflow-hidden">
    <!-- Swiper -->
    <div class="swiper-container mySwiper1">
      <div class="swiper-wrapper whitespace-nowrap">
        <div class="swiper-slide relative">
          <div class="text-1 absolute">
            <ul>
              <li class="text-6xl font-bold">TWS BCS T90 화이트</li>
              <li class="text-base mt-3">블루콤 DECIBEL 무선이어버드</li>
              <li class="mt-4">
                <a href="#">MORE +</a>
              </li>
            </ul>
          </div>
          <img class="" src="https://i.postimg.cc/pXPnZdwk/b9bf545bdeac78fd67278aef49957471-61537.jpg" alt="">
        </div>
        <div class="swiper-slide relative">
          <div class="text-1 absolute">
            <ul>
              <li class="text-6xl font-bold">TWS BCS T90</li>
              <li class="text-base mt-3">블루콤 DECIBEL 무선이어버드</li>
              <li class="mt-4">
                <a href="#">MORE +</a>
              </li>
            </ul>
          </div>
          <img src="https://i.postimg.cc/hvVCLG7V/877fbf92e8ac0354f49197743c651f77-92280.jpg" alt="">
        </div>
        <div class="swiper-slide relative">
          <div class="text-1 absolute">
            <ul>
              <li class="text-6xl font-bold">WIRE TYPE BCS-A10</li>
              <li class="text-base mt-3">블루콤 데시벨 와이어형 블루투스 이어폰</li>
              <li class="mt-4">
                <a href="#">MORE +</a>
              </li>
            </ul>
          </div>
          <img src="https://i.postimg.cc/dQnZ1Yff/a9b2045d843bcb11ee9d766aab7159e1-77782.jpg" alt=""> 3
        </div>
        <div class="swiper-slide relative">
          <div class="text-1 absolute">
            <ul>
              <li class="text-6xl font-bold">NECKBAND TYPE BCS-700</li>
              <li class="text-base mt-3">블루콤 데시벨 자동줄감기 블루투스 이어폰</li>
              <li class="mt-4">
                <a href="#">MORE +</a>
              </li>
            </ul>
          </div>
          <img src="https://i.postimg.cc/ryb0WJ8G/7ce99b412cf5e283bb666fedd9b453c3-18814.jpg" alt="">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>

  </section>

  <!-- 2번째 배너 -->
  <section class="section-2 relative mb-16">
    <div class="section-2__text font-bold text-5xl p-16 text-center">NEW ITEM</div>
    <div class="logo-area absolute">
      <img
        src="https://img1.daumcdn.net/thumb/R1280x0/?scode=mtistory2&fname=https%3A%2F%2Fblog.kakaocdn.net%2Fdn%2FbqElUv%2Fbtq7P8cKUgB%2FPnXym7VxUy3iDkbb5Ix4mk%2Fimg.png"
        class="infinite_rotating_logo">
    </div>
    <div class="section-2__slider overflow-x-hidden">
      <div class="swiper-container2 mySwiper relative">
        <div class="swiper-wrapper">
          <div class="swiper-slide flex flex-col">
            <a class="self-center" href="#">
              <img src="https://i.postimg.cc/kXyx2nC6/7f531c9c5cde21096492f62e34f34407-21816.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-T90 화이트</div>
              <div class="text-gray-300 text-sm line-through">114,000원</div>
              <div class="font-bold">88,900원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/W13JtgSC/51de8835cc8fb208614d30309443134f-93730.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-T90</div>
              <div class="text-gray-300 text-sm line-through">102,000원</div>
              <div class="font-bold">88,900원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/mgJhDqP1/6a3e3669117c928a5adb163bbbd680fe-38344.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-700</div>
              <div class="text-gray-300 text-sm line-through">99,000원</div>
              <div class="font-bold">67,000원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/dVMzVjqt/2e4fa18b975520ea5676d455cfbe6770-66323.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-A10</div>
              <div class="text-gray-300 text-sm line-through">59,000원</div>
              <div class="font-bold">39,900원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/QxNqkB0k/dec0fd7d82312d1fc80d1fa6a1df3d98-96122.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-S1000</div>
              <div class="text-gray-300 text-sm line-through">179,000원</div>
              <div class="font-bold">128,130원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/mgtNJvxP/d57cc8a5ee2f9edd58249487a1b0a3d3-60560.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-A1</div>
              <div class="text-gray-300 text-sm line-through">89,000원</div>
              <div class="font-bold">79,000원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/P5gZcNz7/cec211309a9dc53d8d2ba9ca2fce9e88-10276.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-100</div>
              <div class="text-gray-300 text-sm line-through">69,000원</div>
              <div class="font-bold">35,400원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
          <div class="swiper-slide flex flex-col">
            <a href="#">
              <img src="https://i.postimg.cc/RV8n6q80/5742be4ab51dbcd4c2ffc9173a27e83e-48169.jpg" alt="">
            </a>
            <div class="slide-text my-4 flex flex-col self-center">
              <div class="text-xl font-bold p-2">BCS-200</div>
              <div class="text-gray-300 text-sm line-through">59,000원</div>
              <div class="font-bold">45,000원</div>
              <div class="p-2 font-bold">
                <a href="#">[상품정보]</a>
                <a class="ml-2" href="#">[구매하기]</a>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-button-next absolute" style="color:gray;"></div>
        <div class="swiper-button-prev absolute" style="color:gray;"></div>
      </div>
    </div>
  </section>

  <!-- 3번째 배너 -->
  <section class="section-3 flex w-full bg-red-200 justify-between">
    <div class="section-3__bn1 relative w-2/4 text-white">
      <a href="#" class="">
        <div class="bg"></div>
        <div class="section-3__bn1-text absolute">
          <div class="text-5xl mb-3 font-bold">TWS BCS-T90<br>WIRELESS BUDS
          </div>
          <div class="text-xs">초 고해상도 사운드, 고음질 칩셋/코덱 aptX 지원<br>4가지 이퀄라이저 모드,더블 듀플렉스 방식<br>듀얼 MEME 마이크 적용,블루투스 5.0 버전 적용
          </div>
        </div>
        <img class="w-full flex justify-start" src="https://i.postimg.cc/wTFQNVdk/6c5a1434f90138623b3218f54860886f-39377.jpg" alt="">
      </a>
    </div>
    <div class="section-3__bn2 h-full w-2/4">
      <div class="flex w-full h-full">
        <a href="#" class="relative">
          <img class="" src="https://i.postimg.cc/y8c9PXM5/ef81613b6879c89880662f2ec5c4a249-72717.jpg" alt="">
        </a>
        <a href="#" class="relative">
          <img class="w-full" src="https://i.postimg.cc/SN0czv58/5214f04b1d45bb31f2d9fe966e9f5eef-95935.jpg" alt="">
        </a>
      </div>
      <div class="flex">
        <a href="#" class="relative">
          <img class="w-full" src="https://i.postimg.cc/4d7BXh7T/3e585d1acc0113c64414d5f8111aa432-75327.jpg" alt="">
        </a>
        <a href="#" class="relative">
          <img class="w-full" src="https://i.postimg.cc/xjN42BMb/70f44efec504b31cb5d41eab317d720d-34891.jpg" alt="">
        </a>
      </div>
    </div>
  </section>

  <!-- 4번째 배너 -->
  <section class="section-4 mt-12">
    <div class="w-full p-12">
      <span class="flex justify-center font-bold text-5xl">BEST REVIEW</span>
    </div>
    <div class="section-4__img-box flex justify-between">
      <div class="section-4__img-box-bn">
        <a href="#" class="section-4__img-box-bn1 h-auto overflow-hidden">
          <img src="https://i.postimg.cc/ZRzNz71p/9fc69527ab396efca3223d6f6392b8fa-91817.jpg" alt="">
          <div class="section-4-img-box__text flex flex-col text-white whitespace-nowrap">
            <div class="text-6xl font-bold">
              TRUE WIRELESS<br>STEREO<br>BCS-T90
            </div>
            <div class="mt-2 text-base whitesacpe-nowrap">IPx4 방수등급, 땀을 흘려도 걱정없이<br>운동, 레저, 캠핑 등 어디에나 적합한 모델입니다.
            </div>
          </div>
          <!--         <div class="w-full bg-red-500"></div> -->
        </a>
      </div>

      <!--     <div class="flex-grow"></div> -->
      <div class="section-4__comunity">
        <div class="flex justify-around">
          <a href="#">
            <img src="https://i.postimg.cc/25TKytDR/2021-07-06-151108.jpg" alt="">
            <div class="text-center mt-4">
              <span class="text-base font-bold text-center">고음질 코드리스 블루투스 이어폰 블루콤 데시벨 BCS-T90</span>
            </div>
            <div class="text-center text-sm mt-3 leading-relaxed">
              <span class="text-gray-400">&nbsp 제품 패키지의 모습입니다. 블루투스 5.0 인터페이스를 <br> 기반으로 퀄컴apt-X 고음질 코덱을 탑재했습니다. 재생시간은
                <br> 일반적인 코드리스 제품군의 3~5시간을 두 배 이상 ...</span>
            </div>
            <div class="section-4__comunity-item">
              <img src="https://i.postimg.cc/DfDZN5J6/1000000000-main-077.jpg" alt="">
              <div class="mt-5 font-bold">데시벨 TWS BCS-T90 블랙 <br> ₩ 88,900</div>
            </div>
          </a>
          <a href="#" class="ml-5">
            <img src="https://i.postimg.cc/6qKchLwL/2021-07-06-151450.jpg" alt="">
            <div class="text-center mt-4 ">
              <span class="text-base font-bold text-center">넥밴드 블루투스이어폰 블루콤 DECIBEL BCS-1000...</span>
            </div>
            <div class="text-center text-sm mt-3 leading-relaxed">
              <span class="text-gray-400">&nbsp 안녕하세요 소라윙즈입니다.2018년 9월 17일 카카오메이커스를<br> 통해 처음 선을 보인 넥밴드 블루투스 이어폰 블루콤
                <br> 데시벨 BCS-S1000 을 출시보다 조금 앞서 사용을 해보았습...</span>
            </div>
            <div class="section-4__comunity-item">
              <img src="https://i.postimg.cc/xC6RQBDc/1000000006-main-044.jpg" alt="">
              <div class="mt-5 font-bold">데시벨 넥밴드 타입 BCS-S1000 <br> ₩ 128,130</div>
            </div>
          </a>
        </div>
        <div class="flex justify-around mt-10">
          <a href="#">
            <img src="https://i.postimg.cc/3wxgCXNm/2021-07-06-170908.jpg" alt="">
            <div class="text-center mt-4">
              <span class="text-base font-bold text-center">블루투스 이어폰,초경량 고음질의 넥밴드형 블루콤 데시..</span>
            </div>
            <div class="text-center text-sm mt-3 leading-relaxed">
              <span class="text-gray-400"> 요즘 많이 사용하고 있는 넥밴드형 블루투스 이어폰입니다. <br>출퇴근길이나 이동시에 음악을 듣기위해 서왔던
                제품이에요.<br>블루투스이어폰보다 넥밴드형이라 용이하고목에 걸고 ...</span>
            </div>
            <div class="section-4__comunity-item">
              <img src="https://i.postimg.cc/bvBxFkQt/1000000005-main-080.jpg" alt="">
              <div class="mt-5 font-bold">데시벨 넥밴드 타입 BCS-100 <br> ₩ 35,400</div>
            </div>
          </a>
          <a href="#" class="ml-5">
            <img src="https://i.postimg.cc/0ycSQznQ/2021-07-06-170941.jpg" alt="">
            <div class="text-center mt-4">
              <span class="text-base font-bold text-center">편안한 넥밴드이어폰 데시벨 블루투스 이어폰 BCS-A1...</span>
            </div>
            <div class="text-center text-sm mt-3 leading-relaxed">
              <span class="text-gray-400">날이 춥다보니 출근할 때 전화 받으면 손이 너무 시리더라구요! <br>이럴 땐 이어폰 필수!하지만 옷이 두꺼워지니 두꺼운 옷 위로<br>
                이어폰 줄이 걸리적거려뛰어도 목에서 흘러내리지 않는...</span>
            </div>
            <div class="section-4__comunity-item">
              <img src="https://i.postimg.cc/zf6hk5rw/1000000008-main-055.jpg" alt="">
              <div class="mt-5 font-bold">데시벨 와이어 타입 BCS-A1 <br> ₩ 79,000</div>
            </div>
          </a>
        </div>
        <div class="flex justify-around mt-10">
          <a href="#">
            <img src="https://i.postimg.cc/cCDJ1MXx/2021-07-08-134039.jpg" alt="">
            <div class="text-center mt-4">
              <span class="text-base font-bold text-center">블루콤 데시벨 한국브랜드라 더 반갑다~!</span>
            </div>
            <div class="text-center text-sm mt-3 leading-relaxed">
              <span class="text-gray-400"> 블루콤 데시벨 한국 브랜드라 더 반갑다!저가의 중국산 이어폰 시장 <br>을 선점하고 있는 요즘 국산 이어폰 소식은 거의 들을 수가
                <br>없습니다. 또한 철저한 시장 경제의 ...</span>
            </div>
            <div class="section-4__comunity-item">
              <img src="https://i.postimg.cc/DfDZN5J6/1000000000-main-077.jpg" alt="">
              <div class="mt-5 font-bold">데시벨 TWS BCS-T90 블랙 <br> ₩ 88,900</div>
            </div>
          </a>
          <a href="#" class="ml-5">
            <img src="https://i.postimg.cc/0jH815yr/2021-07-08-134059.jpg" alt="">
            <div class="text-center mt-4">
              <span class="text-base font-bold text-center">블루콤 데시벨 BCS-T90 코드리스 이어폰 사용후기.</span>
            </div>
            <div class="text-center text-sm mt-3 leading-relaxed">
              <span class="text-gray-400">지금처럼 코드리스 이어폰이 유행하기 전에 가장 인기있던 블루투스 <br>이어폰의 종류는 넥밴드형 제품이었습니다. 목에 메인유닛을 걸고
                <br> 다니면 어디수납할 필요가 없었고, 대체로 재생시간...</span>
            </div>
            <div class="section-4__comunity-item">
              <img src="https://i.postimg.cc/DfDZN5J6/1000000000-main-077.jpg" alt="">
              <div class="mt-5 font-bold">데시벨 TWS BCS-T90 블랙 <br> ₩ 88,900</div>
            </div>
          </a>
        </div>
        <div class="section-4__more flex justify-center mt-14">
          <a href="#">MORE VIEW+</a></div>
      </div>
    </div>
  </section>

  <!-- 움직이는 텍스트 -->
  <section class="move-section">
    <MARQUEE class="h-full whitespace-nowrap" scrollamount="30">

      <span>EXFIT</span>
      BLUECOM
      <span>DECIBEL</span>
      EXFIT
      <span>BLUECOM</span>
      DECIBEL
      <span>EXFIT</span>
      BLUECOM
      <span>DECIBEL</span>
      EXFIT
      <span>BLUECOM</span>
      DECIBEL
      <span>EXFIT</span>
      BLUECOM
      <span>DECIBEL</span>
      EXFIT
      <span>BLUECOM</span>
      DECIBEL
      <span>EXFIT</span>
      BLUECOM
      <span>DECIBEL</span>
      EXFIT
      <span>BLUECOM</span>
      DECIBEL
      <span>EXFIT</span>
      BLUECOM
      <span>DECIBEL</span>
      EXFIT
      <span>BLUECOM</span>
      DECIBEL

    </MARQUEE>

  </section>


  <!-- 영상배너 -->
  <section class="section-play h-screen">

    <div class="box-1 container mx-auto h-full">

      <div class="box-1__main flex self-end">
        <ul class="w-full h-full">
          <li class="active w-full h-full">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/LpJuGSuSa60"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </li>
          <li class="w-full h-full">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/geQG-HEY_Z4"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </li>
          <li class="w-full h-full">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/AxpkrF5eYxw"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen></iframe>
          </li>
        </ul>
      </div>

      <div class="flex-grow"></div>

      <div class="box-1__head flex self-end">
        <ul class="flex flex-col justify-between">
          <li class="active">
            <a class="block font-bold cursor-pointer relative w-full">
              <div class="box-1__head-bg w-full h-full absolute">
                <div><i class="fas fa-play text-white"></i></div>
              </div>
              <img src="https://i.postimg.cc/QxQPbN3W/93d1d755fc649c8f94879b5cbecc3884-76941.jpg" alt="">
              <div class="movie-text flex flex-col absolute">
                <span class="text-3xl"># 02</span>
                <span class="whitespace-nowrap">블루콤 회사소개 영상</span>
              </div>
            </a>
          </li>
          <li>
            <a class="block font-bold cursor-pointer relative w-full">
              <div class="box-1__head-bg w-full h-full absolute">
                <div><i class="fas fa-play text-white"></i></div>
              </div>
              <img src="https://i.postimg.cc/pybZjjT1/bd49be3798dce8daac27cfb0e2810a6a-84374.jpg" alt="">
              <div class="movie-text flex flex-col absolute">
                <span class="text-3xl"># 01</span>
                <span class="whitespace-nowrap">끊김없는 완벽한 무선통신</span>
              </div>
            </a>
          </li>
          <li>
            <a class="block font-bold cursor-pointer relative w-full relative">
              <div class="box-1__head-bg w-full h-full absolute">
                <div><i class="fas fa-play text-white"></i></div>
              </div>
              <img src="https://i.postimg.cc/zvSjnBgz/eab35105a668c0616b7846f3b6d7a7c3-15817.jpg" alt="">
              <div class="movie-text flex flex-col absolute">
                <span class="text-3xl"># 03</span>
                <span class="whitespace-nowrap">TWS BCS T-90 언박싱</span>
              </div>
            </a>
          </li>
        </ul>
      </div>

    </div>

  </section>

  <!-- 5번째 배너 -->
  <section class="section-5 flex w-full mt-32">

    <a href="#" class="w-6/12 h-full relative justify-center flex">
      <img src="https://i.postimg.cc/d3wYcG8C/63bbf9eb364733bbeba5e1d864333b39-25733.jpg" alt="">
      <div class="section-5__text text-white absolute flex flex-col items-center whitespace-nowrap font-bold">
        <div class="text-3xl">DECIBEL BCS-A10</div>
        <div class="text-4xl mt-5">와이어형 자동줄감기 블루투스 이어폰</div>
        <div class="text-lg mt-2">어떤 옷과도 어울리고 가벼운 무선 블루투스 이어폰</div>
      </div>
    </a>

    <a href="#" class="w-6/12 h-full relative justify-center flex">
      <img src="https://i.postimg.cc/05ngJMYt/a2e800eb9919d9f976b9818e82cdbaea-13205.jpg" alt="">
      <div class="section-5__text text-white absolute flex flex-col items-center whitespace-nowrap font-bold">
        <div class="text-3xl">TWS BCS-T90</div>
        <div class="text-4xl mt-5">선으로부터 완벽하게 자유로운</div>
        <div class="text-lg mt-2">24시간 연속재생, 초고속 충전(10분 충전시 3시간 사용)</div>
      </div>
    </a>

  </section>

  <!-- 6번째배너 -->
  <section class="section-6 flex flex-col items-center">

    <div class="mt-28 font-bold text-6xl">
      MEMBERSHIP
    </div>

    <div class="section-6__box container mt-10 flex justify-center">
      <a href="#"
        class="h-full w-1/3 flex flex-col items-center justify-center border-r-2 border-black whitespace-nowrap">
        <div><img src="https://i.postimg.cc/1tWnY0nW/membership-icon01.png" alt=""></div>
        <div class="text-2xl font-bold mt-5">FAQ</div>
        <div class="text-center mt-5">고객센터에 전화하시기 전에 잠깐!<br>
          자주 문의하시는 질문만 모아놨습니다.
        </div>
      </a>

      <a href="#"
        class="h-full w-1/3 flex flex-col items-center justify-center border-r-2 border-black whitespace-nowrap">
        <div><img src="https://i.postimg.cc/RhK3CkpY/membership-icon02.png" alt=""></div>
        <div class="text-2xl font-bold mt-5">1:1 문의</div>
        <div class="text-center mt-5">찾으시는 질문이 없다면?<br>
          [1:1문의]에 남겨주세요. 담당자가 답변을 드립니다.
        </div>
      </a>

      <a href="#" class="h-full w-1/3 flex flex-col items-center justify-center whitespace-nowrap">
        <div><img src="https://i.postimg.cc/fLW59KQ5/membership-icon03.png" alt=""></div>
        <div class="text-2xl font-bold mt-5">A/S 접수</div>
        <div class="text-center mt-5">전화연결이 되지 않을경우!<br>
          A/S접수 게시판에 남겨주세요.
        </div>
      </a>

    </div>

  </section>

  <!-- 푸터 -->
  <footer class="w-full bg-black text-white">

    <div class="flex justify-around">
      <div class="mt-24">
        <div class="font-bold text-xl">Customer center</div>
        <div class="flex flex-col mt-8">
          <span class="font-bold text-4xl">032-810-0666</span>
          <span class="text-gray-400">
            월~금 09:00~17:00<br>
            주말/공휴일 휴무<br>
            점심시간: 12:30~13:30
          </span>
        </div>
      </div>

      <div class="mt-24">
        <div class="font-bold text-xl">Returns & Exchange</div>
        <div class="flex flex-col mt-8 text-gray-400">
          <span>
            반품주소<br>
            인천광역시 연수구 벤처로 116
          </span>
          <a href="#">
            배송조회 >
          </a>
        </div>
      </div>

      <div class="mt-24">
        <div class="font-bold text-xl">Cooperation</div>
        <div class="flex flex-col mt-8">
          <a href="#" class="hover:text-gray-400">구매/제휴/체험단 문의</a>
        </div>
      </div>

      <div class="mt-24">
        <div class="font-bold text-xl">About</div>
        <div class="flex flex-col mt-8">
          <a href="#" class="hover:text-gray-400">회사소개</a>
          <a href="#" class="hover:text-gray-400">본사 홈페이지</a>
          <a href="#" class="hover:text-gray-400">이용약관</a>
          <a href="#" class="hover:text-gray-400">개인정보처리방침</a>
        </div>
      </div>
    </div>

    <div class="flex flex-col mt-20 ml-40">
      <div class="flex">
        <a href="#">
          <img src="https://i.postimg.cc/XqXv5P8V/f-facebook-icon.png" alt="">
        </a>
        <a href="#" class="ml-5">
          <img src="https://i.postimg.cc/4N639pvH/f-instagram-icon.png" alt="">
        </a>

      </div>
      <div class="mt-4 text-sm whitespace-nowrap">상호명 : (주)블루콤 대표 : 김종규 주소 : 인천광역시 연수구 벤처로 116 블루콤 사업자등록번호 :
        112-81-29823 [사업자정보확인]<br>
        통신판매업신고 : 2012-인천연수구-0182 개인정보보호책임자 : 배정호 E-MAIL : help@bluec.co.kr 대표번호 : 032-810-0500
      </div>
      <div class="text-sm mt-2 text-gray-400">(c) 2019 (주)블루콤. Hosting by godo. Design by Designwib.
      </div>
    </div>
  </footer>

  <!-- 탑버튼 만들기 -->
  <a id="topBtn" href="#"><i class="fas fa-chevron-circle-up"></i></a>

</body>

</html>