<?php
/* Template Name: About Us Page */

/**
 * home-page.php
 *
 * the Home Page template
 *
 *
 *
 * @package glera
 *
 */
?>
<?php get_header() ?>

<section class="glera-story">
    <svg class="position-absolute glera-story__bg-big" width="783" height="1014" viewBox="0 0 783 1014" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <ellipse cx="737" cy="333.5" rx="737" ry="680.5" fill="#FFECA8"/>
        <path opacity="0.3"
              d="M1450 341C1450 696.523 1137.65 985 752 985C366.351 985 54 696.523 54 341C54 -14.5232 366.351 -303 752 -303C1137.65 -303 1450 -14.5232 1450 341Z"
              stroke="white" stroke-width="4"/>
        <ellipse id="ellipse-violet" cx="749" cy="340.5" rx="654" ry="603.5" style="transform-origin: right top"
                 fill="#C2B3FB"/>
        <rect opacity="0.2" x="674.528" y="559.89" width="19.7093" height="19.7093" rx="6"
              transform="rotate(-29.6591 674.528 559.89)" fill="#FAFBF9"/>
        <rect opacity="0.2" x="174" y="254.402" width="19" height="19" rx="6" transform="rotate(-29.6591 174 254.402)"
              fill="#F8FAF8"/>
    </svg>
    <div class="container">
        <img class="position-absolute glera-story__energy-pic"
             src="/wp-content/themes/glera/assets/images/about/icon_energy.svg" alt="">
        <div class="glera-story__grid">
            <div class="glera-story__title">
                <h1 class="position-relative">GLERA <span>STORY</span>
                    <div class="glera-story__bg-things position-absolute"></div>
                </h1>
                <div class="glera-story__cloud position-relative">
                    <img class="position-absolute"
                         src="/wp-content/themes/glera/assets/images/about/cloud-under-title.svg" alt="">
                    GLERA GAMES – международная компания-разработчик, в которой сегодня работают более <span
                            class="text-red">200</span> сотрудников из
                    разных стран. Мы делаем крутые игры: яркие, увлекательные, с впечатляющей графикой, необычным
                    геймплеем
                    и невероятными историями.
                    <div class="glera-story__text-red text-red">Игры, в которые играют миллионы!</div>
                </div>

            </div>
            <div class="glera-story__video-wrap">
                <div class="glera-story__video position-relative">
                    <video autoplay loop muted preload="/wp-content/themes/glera/assets/images/poster-video.jpg">
                        <source src="/wp-content/themes/glera/assets/video/img-9070_6mfqcyLx_origin (1).mp4"
                                type="video/mp4">
                        <!--                        <source src="/wp-content/themes/glera/assets/video/img-9070_6mfqcyLx_1.webm" type='video/webm'>-->
                    </video>
                    <img class="position-absolute glera-story__video-pic"
                         src="/wp-content/themes/glera/assets/images/about/top-video-pic.svg" alt="">
                    <img class="position-absolute glera-story__video-things"
                         src="/wp-content/themes/glera/assets/images/about/video-thing.svg" alt="">
                    <img class="position-absolute glera-story__video-circle"
                         src="/wp-content/themes/glera/assets/images/about/circle-video.svg" alt="">
                </div>
            </div>
        </div>
        <svg class="position-relative arrow-down" width="105" height="139" viewBox="0 0 105 139" fill="none"
             xmlns="http://www.w3.org/2000/svg">
            <path d="M33.4749 74.1567C34.3098 76.3676 35.7851 78.1227 37.1813 79.9717C43.2794 87.8636 51.1877 93.2996 60.1521 97.4425C66.143 100.238 72.2908 102.428 78.5749 104.379C79.1305 104.558 79.7364 104.715 80.1774 105.182C80.6402 105.7 80.7856 106.175 79.8485 106.221C79.6252 106.258 79.293 106.042 79.3663 106.489C79.5288 107.974 78.4188 108.034 77.4531 108.152C75.6443 108.395 73.8769 107.902 72.1529 107.51C67.2915 106.499 62.415 105.316 57.8182 103.533C53.5101 101.865 49.4816 99.5975 45.5607 97.1642C43.0406 95.621 40.5206 94.0778 38.6834 91.7614C37.4899 90.2435 35.8221 89.2892 34.5999 87.8434C32.2999 85.0093 30 82.1751 28.4126 78.9137C27.0645 76.2067 26.4874 73.3463 26.8256 70.3898C26.931 69.3875 26.655 68.6097 25.954 67.9555C24.111 66.1798 22.347 64.3102 20.6049 62.491C17.7493 59.4781 15.4116 56.0024 13.2469 52.5119C9.75005 46.9055 6.88671 40.9658 5.45647 34.4671C4.63887 30.6342 4.06641 26.815 5.58451 22.9903C5.98552 21.98 6.52397 21.1495 7.58246 20.6925C8.03609 20.4967 8.45424 20.4956 8.80129 20.884C9.22052 21.301 8.88945 21.5037 8.64542 21.908C7.04494 24.5724 7.87404 27.324 8.45804 30.0618C10.028 37.5765 13.6427 44.1485 17.7615 50.503C20.9319 55.3534 24.541 59.8349 28.6898 63.904C29.0151 64.242 29.2327 64.7461 29.8582 64.1172C31.9283 61.8481 34.6364 60.9181 37.5987 60.7156C42.1395 60.4296 46.3664 61.3555 49.4258 65.1176C51.0603 67.1029 50.9788 68.9919 49.6292 71.1293C46.1189 76.7111 39.9709 77.1528 35.0477 74.6139C34.5929 74.3917 34.1886 74.1476 33.7339 73.9254C33.7052 73.9975 33.5757 74.1132 33.4749 74.1567ZM45.0013 71.2137C46.3118 70.6479 45.8124 69.9067 45.3634 69.1438C43.8286 66.6968 41.225 66.2063 38.7152 65.7949C36.9122 65.4969 34.9511 65.3868 33.1147 66.1198C32.4091 66.4244 31.9703 66.7933 32.8157 67.5047C35.2211 69.3365 37.7698 70.8076 40.7629 71.3692C42.22 71.6969 43.6473 71.6786 45.0013 71.2137ZM38.2876 83.9192C36.0953 80.9189 33.7736 78.0343 31.9124 74.8313C33.1332 78.4902 35.6566 81.2877 38.2876 83.9192ZM28.4263 65.0942C26.2213 62.7572 23.9946 60.3698 21.7897 58.0328C23.628 60.7673 25.833 63.1043 28.4263 65.0942Z"
                  fill="#B9DCF2"></path>
            <path d="M85.2748 115.099C88.1696 113.909 91.1812 113.266 94.1493 112.523C94.5743 112.4 95.1585 112.506 95.3441 111.828C95.4793 111.172 94.9524 110.921 94.548 110.677C92.5332 109.334 91.0144 107.478 89.2871 105.832C88.1886 104.811 86.9103 103.928 85.8187 102.785C84.1704 101.044 82.3423 99.4417 80.5864 97.8676C79.6975 97.0554 79.1753 95.8457 77.9485 95.3587C76.7217 94.8718 76.5602 93.8054 77.565 92.1158C78.0817 91.2349 78.9523 90.6198 80.0497 91.2224C80.9305 91.7391 81.8332 92.3063 82.6063 92.989C87.8375 97.4879 93.0183 102.008 98.2278 106.457C99.3766 107.456 100.626 108.411 101.854 109.316C104.094 111.041 104.154 112.151 102.358 114.361C101.007 116.081 99.2648 116.893 97.0883 117.115C92.9369 117.472 88.7787 117.951 84.7303 119.101C83.9308 119.327 83.1243 119.675 82.3465 119.951C81.3957 120.242 81.02 119.926 81.1976 118.952C81.6171 116.738 81.955 116.412 85.2748 115.099ZM94.1717 104.68C96.1819 106.981 98.4291 109.001 101.122 110.529C98.7957 108.604 96.4981 106.606 94.1717 104.68Z"
                  fill="#B9DCF2"></path>
        </svg>
    </div>
        <!---->
        <!--        <script src="http://esotericsoftware.com/files/spine-player/3.7/spine-player.js"></script>-->
        <!--        <link rel="stylesheet" href="http://esotericsoftware.com/files/spine-player/3.7/spine-player.css">-->
        <!---->
        <!--        <div id="player-container1" style="width: 400px; height: 400px;"></div>-->
        <!--        <div id="player-container2" style="width: 400px; height: 400px;"></div>-->
        <!---->
        <!--        <script>-->
        <!---->
        <!--            new spine.SpinePlayer("player-container1", {-->
        <!--                // jsonUrl: "/wp-content/themes/glera/assets/animations/robot_postman/robot_postman.json",-->
        <!--                // atlasUrl: "/wp-content/themes/glera/assets/animations/robot_postman/robot_postman.atlas"-->
        <!--                jsonUrl: "/wp-content/themes/glera/assets/animations/WindMill/windmill.json",-->
        <!--                atlasUrl: "/wp-content/themes/glera/assets/animations/WindMill/windmill.atlas",-->
        <!--                // jsonUrl: "http://esotericsoftware.com/filert/s/examples/4.0/spineboy/export/spineboy-pro.json",-->
        <!--                //                // atlasUrl: "http://esotericsoftware.com/files/examples/4.0/spineboy/expospineboy.atlas",-->
        <!--                showControls: false,-->
        <!--                // animation: "bubble_norm",-->
        <!--                alpha: true, // Enable player translucency-->
        <!--                backgroundColor: "#00000000"-->
        <!--            });-->
        <!---->
        <!--            new spine.SpinePlayer("player-container2", {-->
        <!--                jsonUrl: "/wp-content/themes/glera/assets/animations/robot_postman/robot_postman.json",-->
        <!--                atlasUrl: "/wp-content/themes/glera/assets/animations/robot_postman/robot_postman.atlas",-->
        <!--                // jsonUrl: "/wp-content/themes/glera/assets/animations/WindMill/windmill.json",-->
        <!--                // atlasUrl: "/wp-content/themes/glera/assets/animations/WindMill/windmill.atlas",-->
        <!--                // jsonUrl: "http://esotericsoftware.com/filert/s/examples/4.0/spineboy/export/spineboy-pro.json",-->
        <!--                //                // atlasUrl: "http://esotericsoftware.com/files/examples/4.0/spineboy/expospineboy.atlas",-->
        <!--                showControls: false,-->
        <!--                // animation: "bubble_norm",-->
        <!--                alpha: true, // Enable player translucency-->
        <!--                backgroundColor: "#00000000"-->
        <!--            });-->
        <!--        </script>-->

</section>

<section class="glera-values position-relative">
    <svg class="position-absolute all-bg" width="2159" height="1538" viewBox="0 0 2159 1538" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.3" cx="334.5" cy="334.5" r="332.5" stroke="#D5D9D8" stroke-width="4"/>
        <ellipse opacity="0.4" cx="335" cy="334.5" rx="251" ry="250.5" fill="#FBEADF"/>
        <path opacity="0.3"
              d="M141 1536C210 1451.33 397.2 1297.2 594 1358C840 1434 984 1553 1221 1445C1458 1337 1471.82 1149 1699 1149C1923 1149 1883 1484 2063 1477"
              stroke="url(#paint0_linear)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"
              stroke-dasharray="8.8 8.8"/>
        <circle opacity="0.1" cx="1976" cy="964" r="141" fill="#917AEB"/>
        <rect x="1473" y="1114.4" width="19" height="19" rx="6" transform="rotate(-29.6591 1473 1114.4)"
              fill="#FFC0D0"/>
        <circle cx="674" cy="89" r="18.5" stroke="#FFECA8" stroke-width="5"/>
        <path opacity="0.2"
              d="M2158.5 633.539C1843.5 614.039 1746 522.43 1801 490.984C1856 459.539 1976.5 618.489 1516 817.489C1156.97 972.638 718.5 893.155 546 817.489"
              stroke="url(#paint1_linear)" stroke-width="4"/>
        <circle cx="1049" cy="1050" r="11" fill="#F2F4F2"/>
        <defs>
            <linearGradient id="paint0_linear" x1="1807.28" y1="1243.93" x2="244.583" y2="1215.68"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#FF6331"/>
                <stop offset="0.316058" stop-color="#FF6331" stop-opacity="0"/>
                <stop offset="0.506202" stop-color="#FF6331" stop-opacity="0"/>
                <stop offset="1" stop-color="#FF6331"/>
            </linearGradient>
            <linearGradient id="paint1_linear" x1="2197.5" y1="628.039" x2="621.5" y2="888"
                            gradientUnits="userSpaceOnUse">
                <stop stop-color="#C58764" stop-opacity="0"/>
                <stop offset="0.167571" stop-color="#C58764"/>
                <stop offset="0.400327" stop-color="#C58764" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>
    <div class="container">
        <div class="glera-values__grid">
            <div class="glera-values__first position-relative">
                <h2><span class="bg-text">GLERA</span> VALUES</h2>
                <img class="position-relative" src="/wp-content/themes/glera/assets/images/about/glera-values.svg"
                     alt="">
            </div>
            <div class="glera-values__descriptin position-relative icon-1">
                <h3><span class="text-orange">КАЧЕСТВО</span> И РЕЗУЛЬТАТ</h3>
                <p>Продукты Glera Games отличает качество, соответствие стандартам рынка и требованиям игроков. Мы
                    ставим перед собой амбициозные цели, постоянно повышаем планку и окружаем себя людьми, которые
                    готовы делать крутые вещи, даже когда на них никто не смотрит. </p>
            </div>
            <div class="glera-values__descriptin position-relative icon-2">
                <h3><span class="text-blue">Команда</span> Мечты</h3>
                <p>Дружная команда профессионалов, люди – это фундамент, на котором базируются успех Glera Games,
                    эффективность процессов и атмосфера. Мы поддерживаем друг друга, обучаем, делимся опытом и вместе
                    радуемся успехам. </p>
            </div>
            <div class="glera-values__descriptin position-relative icon-3">
                <h3><span class="text-green">СВОБОДА</span> И ОТВЕТСТВЕННОСТЬ</h3>
                <p>Мы даем сотрудникам возможность работать в комфортных для них условиях – в разных часовых поясах, в
                    офисах и удаленно. В процессе разработки игр мы всегда открыты для предложений, мы не руководим, а
                    направляем и позволяем совершать ошибки. </p>
            </div>
            <div class="glera-values__descriptin position-relative icon-4">
                <h3><span class="text-orange-light">ДВИЖЕНИЕ</span> ВВЕРХ</h3>
                <p>Мы стремимся развиваться профессионально, следим за трендами и инновациями, участвуем в конференциях,
                    прокачиваем скиллы и обмениваемся опытом. Не менее важен личностный рост, который позволяет
                    расширить кругозор, глубже понять себя и стать счастливее. </p>
            </div>
            <div class="glera-values__descriptin position-relative icon-5">
                <h3>СОХРАНЕНИЕ <span class="text-violet">БАЛАНСА</span></h3>
                <p>Мы понимаем, насколько важно не только работать вместе, но и отдыхать, сохраняя душевные силы,
                    вдохновляясь и наполняясь новыми идеями. Мы поощряем творческие начинания, финансово поддерживаем
                    занятия спортом и отказ от вредных привычек, организовываем совместные мероприятия. </p>
            </div>
        </div>
    </div>
</section>

<section class="our-office">
    <div class="our-office__bottom position-relative">
        <img class="position-absolute our-office__bottom-blue"
             src="/wp-content/themes/glera/assets/images/about/popugai.svg" alt="">
        <div class="position-absolute our-office__bg-white w-100"></div>
        <div class="our-office__explorer-top position-absolute">
            <div class="our-office__cloud-wrap-top position-absolute">
                <!--            <img class="position-absolute" src="/wp-content/themes/glera/assets/images/cloud.svg" alt="">-->
                <p class="text-center position-relative"><span class="text-red d-block">Все изменяется: продукты, процессы…</span>
                    Но мы стремимся, чтобы работа приносила радость, чтобы глаза сотрудников горели, а понедельник был
                    если не лучшим, то уж точно не худшим днем недели!</p>
                <img class="position-absolute cloud-road"
                     src="/wp-content/themes/glera/assets/images/about/glera-value-cloud-road.svg" alt="">
            </div>
        </div>
        <div class="our-office__wrap-line position-relative">
            <img src="/wp-content/themes/glera/assets/images/about/glera-value-bg-bottom.svg" alt="">
        </div>
    </div>
    <svg class="position-absolute our-office__bg-things" width="1303" height="2107" viewBox="0 0 1303 2107" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0)">
            <path d="M60.8639 35.8708C86.3394 20.6062 119.484 28.9135 134.749 54.389C140.02 63.186 143.219 73.962 144.257 86.4169C145.08 96.2929 144.554 107.25 142.693 118.982C139.535 138.901 133.705 153.961 133.459 154.592C133.289 155.026 132.984 155.375 132.605 155.602C132.226 155.829 131.774 155.934 131.312 155.879C130.639 155.799 114.609 153.836 95.5559 147.226C84.3326 143.333 74.4229 138.629 66.1027 133.246C55.6096 126.456 47.6163 118.553 42.3452 109.756C27.0806 84.2804 35.3879 51.1356 60.8639 35.8708Z" fill="#FFE571"/>
            <path d="M60.8736 35.867C62.5954 34.8353 64.3534 33.9148 66.1374 33.0966C44.5749 49.4743 38.3119 79.8928 52.5447 103.646C57.8158 112.443 65.8091 120.347 76.3022 127.136C84.6225 132.52 94.532 137.224 105.755 141.117C118.013 145.369 129.018 147.698 135.489 148.84C134.355 152.302 133.557 154.363 133.469 154.588C133.299 155.022 132.994 155.372 132.615 155.598C132.236 155.825 131.784 155.93 131.322 155.875C130.648 155.795 114.619 153.832 95.5658 147.223C84.3425 143.329 74.4328 138.625 66.1126 133.242C55.6195 126.452 47.6262 118.549 42.3551 109.752C27.0903 84.2766 35.3976 51.1318 60.8736 35.867Z" fill="#FFC238"/>
            <path d="M69.3027 49.9475C87.0172 39.3332 110.065 45.1094 120.679 62.8243C131.294 80.5388 125.517 103.586 107.802 114.201C90.0874 124.815 67.0405 119.039 56.4261 101.324C45.8115 83.6094 51.5878 60.562 69.3027 49.9475Z" fill="#FFC238"/>
            <path d="M65.9954 91.4879C64.3729 91.1031 63.1329 89.8543 62.7599 88.2288C62.3869 86.6033 62.9577 84.9389 64.2503 83.885L73.8162 76.0837C73.8822 76.0299 73.9174 75.9471 73.9106 75.8625L72.9074 63.5599C72.7719 61.8976 73.5764 60.3325 75.0066 59.4755C76.4371 58.6184 78.1966 58.6472 79.5986 59.5507L89.9733 66.2377C90.0451 66.2839 90.1348 66.2919 90.2137 66.2592L101.604 61.5034C103.143 60.8607 104.88 61.1424 106.137 62.238C107.395 63.3336 107.911 65.0159 107.485 66.6281L104.331 78.5619C104.31 78.6446 104.33 78.7322 104.385 78.7967L112.428 88.1599C113.515 89.4251 113.784 91.1642 113.13 92.6984C112.477 94.2331 111.036 95.2437 109.371 95.3366L97.0469 96.0249C96.9617 96.0295 96.8844 96.0761 96.8402 96.1487L90.4203 106.691C90.0429 107.311 89.5331 107.811 88.9403 108.166C88.17 108.628 87.26 108.845 86.3217 108.762C84.6605 108.614 83.2537 107.557 82.6506 106.002L78.1875 94.4942C78.1566 94.4145 78.0888 94.3554 78.0057 94.3356L65.9954 91.4879Z" fill="#F75147"/>
        </g>
        <circle cx="750" cy="936" r="24.5" stroke="#8FD4B8" stroke-width="5"/>
        <path d="M435.655 1527.46C434.419 1516.33 421.319 1487.7 435.655 1486.46C453.575 1484.91 485.954 1508.96 490.279 1486.46C494.605 1463.95 481.279 1428.46 522.279 1451.46" stroke="#FEC960" stroke-width="4"/>
        <rect x="1277" y="1650.4" width="19" height="19" rx="6" transform="rotate(-29.6591 1277 1650.4)" fill="#8FD4B8"/>
        <rect x="371" y="74.4019" width="19" height="19" rx="6" transform="rotate(-29.6591 371 74.4019)" fill="#FFA654"/>
        <rect x="330" y="2090.4" width="19" height="19" rx="6" transform="rotate(-29.6591 330 2090.4)" fill="#B9DCF2"/>
        <g filter="url(#filter0_d)">
            <path d="M1172.27 405.101L1179.36 400.439L1184.88 402.77L1193.55 395L1202.21 399.662L1210.09 398.885L1210.88 405.878L1214.82 403.547L1221.91 399.662L1225.06 404.324L1229.79 405.878L1229 410.54L1225.85 414.424L1229.79 418.309L1227.42 424.525L1232.94 427.633L1236.09 439.288L1242.39 440.065L1241.61 450.166L1250.27 447.835V452.496L1255 456.381L1247.91 464.151L1235.3 462.597L1236.09 476.583H1239.24V486.684L1228.21 487.46L1223.48 492.899L1222.7 503L1217.18 496.784L1210.88 499.892L1206.15 499.115L1204.58 493.676L1199.06 499.892L1191.97 492.122L1186.45 498.338C1186.45 498.338 1179.36 489.014 1173.85 489.014C1168.33 489.014 1148.64 486.683 1146.27 487.46C1143.91 488.237 1131.3 498.338 1131.3 498.338L1130.52 485.13L1125 481.245L1128.94 475.029C1128.94 475.029 1135.24 469.59 1135.24 468.036C1136.03 466.482 1132.09 454.827 1131.3 453.273C1130.52 451.719 1130.52 443.95 1130.52 443.95C1130.52 443.95 1139.18 444.727 1142.33 443.173C1146.27 441.619 1156.52 438.511 1156.52 436.18C1156.52 433.849 1158.88 422.194 1158.88 422.194L1171.49 414.424L1169.12 411.317L1172.27 405.101Z" fill="#F74C47"/>
        </g>
        <path d="M1191 401C1176.96 401 1165.53 412.598 1165.53 426.854C1165.53 431.776 1166.85 437.003 1169.46 442.387C1171.53 446.657 1174.4 451.038 1178.01 455.41C1184.13 462.833 1190.15 467.595 1190.41 467.795C1190.58 467.931 1190.79 468 1191 468C1191.21 468 1191.42 467.931 1191.59 467.795C1191.85 467.596 1197.87 462.833 1203.99 455.41C1207.6 451.038 1210.47 446.657 1212.54 442.387C1215.15 437.003 1216.47 431.776 1216.47 426.854C1216.47 412.598 1205.04 401 1191 401Z" fill="#FFE571"/>
        <path d="M1191 401C1190.05 401 1189.11 401.055 1188.19 401.158C1200.91 402.582 1210.85 413.561 1210.85 426.854C1210.85 431.776 1209.53 437.003 1206.92 442.387C1204.85 446.657 1201.98 451.038 1198.37 455.41C1194.43 460.185 1190.54 463.859 1188.19 465.926C1189.49 467.072 1190.31 467.724 1190.4 467.795C1190.58 467.931 1190.79 468 1191 468C1191.21 468 1191.41 467.931 1191.59 467.795C1191.84 467.596 1197.87 462.833 1203.99 455.41C1207.59 451.038 1210.47 446.657 1212.54 442.387C1215.14 437.003 1216.46 431.776 1216.46 426.854C1216.46 412.598 1205.04 401 1191 401Z" fill="#FFC238"/>
        <path d="M1191 408.877C1181.23 408.877 1173.29 416.942 1173.29 426.855C1173.29 436.768 1181.23 444.832 1191 444.832C1200.76 444.832 1208.71 436.768 1208.71 426.855C1208.71 416.942 1200.76 408.877 1191 408.877Z" fill="#FFC238"/>
        <path d="M1202.43 425.167C1203 424.608 1203.2 423.788 1202.96 423.027C1202.71 422.265 1202.08 421.721 1201.29 421.606L1195.52 420.754C1195.48 420.748 1195.44 420.722 1195.43 420.686L1192.84 415.373C1192.49 414.655 1191.79 414.209 1191 414.209C1190.21 414.209 1189.5 414.655 1189.16 415.373L1186.57 420.686C1186.55 420.723 1186.52 420.748 1186.48 420.754L1180.7 421.606C1179.92 421.721 1179.29 422.265 1179.04 423.027C1178.8 423.788 1179 424.608 1179.56 425.167L1183.74 429.303C1183.77 429.331 1183.79 429.372 1183.78 429.413L1182.79 435.252C1182.66 436.041 1182.97 436.824 1183.61 437.294C1184.25 437.765 1185.08 437.826 1185.78 437.453L1190.94 434.696C1190.98 434.677 1191.02 434.677 1191.06 434.696L1196.22 437.453C1196.53 437.615 1196.85 437.695 1197.18 437.695C1197.61 437.695 1198.03 437.56 1198.39 437.294C1199.03 436.824 1199.34 436.041 1199.21 435.252L1198.22 429.413C1198.21 429.372 1198.23 429.331 1198.26 429.303L1202.43 425.167Z" fill="#F75147"/>
        <defs>
            <filter id="filter0_d" x="1125" y="395" width="130" height="115" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="7"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.667611 0 0 0 0 0.171003 0 0 0 0 0.156482 0 0 0 1 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
            </filter>
            <clipPath id="clip0">
                <rect width="139.58" height="139.58" fill="white" transform="matrix(-0.857801 0.513982 0.513982 0.857801 120.73 0)"/>
            </clipPath>
        </defs>
    </svg>
    <div class="container our-office__container position-relative">
        <h2 class="text-center"><span class="text-violet"></span>Наши Офисы</h2>
        <p class="text-center our-office__caption">Офисы Glera Games открыты в <span class="text-red">Минске, Иваново и Вильнюсе.</span><br>
            Каждый из них уникален – своей атмосферой, невероятным дизайном и набором печенек.</p>

        <div class="our-office__grid-sliders">
            <div class="wrap-slider">
                <div id="our-office_slider1" class="our-office__slider">
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk1.jpg" alt=""></div>
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk1.jpg" alt=""></div>
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk1.jpg" alt=""></div>
                </div>
                <div id="our-office_slider-controls1" class="controls-news position-absolute"></div>
            </div>
            <div class="our-office_text">
                <h4>Минский офис</h4>
                <p>Самый многочисленный офис Glera Games расположен в Минске. Мы недавно переехали и пока активно
                    обживаемся, обустраивая комфортное пространство с классной рабочей обстановкой и настроением. А
                    в перерывах – любуемся потрясающими видами на город.</p>
            </div>
            <div class="our-office_text">
                <h4>Офис в Вильнюсе</h4>
                <p>Еще один офис компании расположен в Вильнюсе в инновационном бизнес-центре Park Town, в уютном
                    районе, утопающем в зелени. Во дворике комплекса есть японский сад для прогулок и релаксации. Но
                    главное отличие офиса – наличие музыкальной комнаты, где ребята пишут музыку и собираются для
                    репетиций.</p>
            </div>
            <div class="wrap-slider">
                <div id="our-office_slider2" class="our-office__slider">
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk1.jpg" alt=""></div>
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk2.jpg" alt=""></div>
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk3.jpg" alt=""></div>
                </div>
                <div id="our-office_slider-controls2" class="controls-news position-absolute"></div>
            </div>
            <div class="wrap-slider">
                <div id="our-office_slider3" class="our-office__slider">
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk1.jpg" alt=""></div>
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk2.jpg" alt=""></div>
                    <div><img src="/wp-content/themes/glera/assets/images/about/minsk3.jpg" alt=""></div>
                </div>
                <div id="our-office_slider-controls3" class="controls-news position-absolute"></div>
            </div>
            <div class="our-office_text">
                <h4>Офис в Иваново</h4>
                <p>Третий офис Glera Games несколько лет назад открылся в городе Иваново, в России. Он рассчитан на
                    25 человек и находится в самом центре города. Мы долго планировали ремонт и делали его по
                    собственному дизайн-проекту, адаптируя под запросы сотрудников. Получилось невероятно! </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
