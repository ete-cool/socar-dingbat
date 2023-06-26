<?php snippet('header') ?>
<style>
  .top {width:100%;height:100vh;}
  .video {width:100%;height:100%;background-position: center;background-image:url('../assets/css/source/main.png')}
  .page-title {position:sticky;bottom:0}
  .sticky { text-shadow: 1px 1px #e6e6d8, 1px 1px #c6a39a;position: fixed !important;top: 0;bottom:auto !important;width: 100%;}
  .tryit-top {display:flex;justify-content:space-between;font-family: 'Oswald';font-size:5rem;align-items:flex-start}
  .tryit-right {display:flex;margin-top:1.5rem;}
  .tryit-right a { display:flex;align-items:flex-start }
  .tryit-right img {padding-left:0.5rem;}
</style>

<section class="bgm">
  <div class="bgm-icon">
    <a href="">
      <img src="../assets/css/source/bgm.png">
    </a>
  </div>
</section>

<section class="side-film" id="hide-film">
  <iframe src="https://www.youtube.com/embed/1I2OsMi1Rdo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</section>

<section class="top">
  <div class="video"></div>
  <div class="page-title" id="myHeader">
    <a href="#down">DINGBAT FONT</a>
  </div>
</section>

<main class="page-main">
  <section class="page-play">
    <section class="play" id="draggable01">
      <div class="cardfan">
        <img src="../assets/css/source/play-card-01.png" id="roma">
        <img src="../assets/css/source/play-card-01.png" id="roma">
        <img src="../assets/css/source/play-card-01.png" id="roma">
      </div>
    </section> 

    <section class="empty"></section>
    
    <section class="film" id="click-film">
        <img src="../assets/css/source/film.png">
    </section>   

    <section class="tape" id="draggable03">
      <div class="drawing-tape">
        <div class="cassette">
          <div class="top-tape">
            <div class="arrow-mark-container">
              <div class="arrow-mark">🡁</div>
            </div>
          </div>
          <div class="medium-tape">
            <div class="label-container">
              <div class="label">
                <div class="top-label">
                  <div class="predefined-text">INDEX</div>
                  <div class="top-text">
                    <div>socar</div>
                    <div>drawing-tape</div>
                  </div>
                </div>
                <div class="medium-label">
                  <div class="side-name">A</div>
                  <div class="gap-container">
                    <div class="gap">
                      <div class="left tapereel">
                        <div class="notch notch-1"></div>
                        <div class="notch notch-2"></div>
                        <div class="notch notch-3"></div>
                      </div>
                      <div class="central-gap">
                        <div class="left innertape"></div>
                        <div class="right innertape"></div>
                      </div>
                      <div class="right tapereel">
                        <div class="notch notch-1"></div>
                        <div class="notch notch-2"></div>
                        <div class="notch notch-3"></div>
                      </div>
                    </div>
                  </div>
                  <div class="noise-reduction">
                    NOISE REDUCTION
                    <div class="box">
                      <div>ON</div>
                      <div>OFF</div>
                    </div>
                  </div>
                </div>
                <div class="bottom-label">
                  <div class="brand-text">
                    <div class="maintext"></div>
                    <div class="subtext">TYPE I (NORMAL) POSITION</div>
                  </div>
                  <div class="arrow-text"><span>🡆</span></div>
                  <div class="model-text"><span>AHF</span>46</div>
                </div>
              </div>
            </div>
          </div>
          <div class="bottom-tape">
            <div class="magnetic-shield-container">
              <div class="magnetic-shield">
                <div class="left-hole-container">
                  <div class="hole hole-1"></div>
                  <div class="hole hole-2"></div>
                </div>
                <div class="screw-container">
                  <div class="screw"></div>
                </div>
                <div class="right-hole-container">
                  <div class="hole hole-3"></div>
                  <div class="hole hole-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="screw screw-1">
            <div class="dot"></div>
          </div>
          <div class="screw screw-2">
            <div class="dot"></div>
          </div>
          <div class="screw screw-3">
            <div class="dot"></div>
          </div>
          <div class="screw screw-4">
            <div class="dot"></div>
          </div>
        </div>
      </div>

      </div>
    </section>

    <section class="cat" id="draggable04">
      <a href="">
        <img src="../assets/css/source/cat.png">
      </a>
    </section>

    <section class="tulip" id="draggable05">
      <a href="">
        <img src="../assets/css/source/tulip.png">
      </a>
    </section>

    <section class="download" id="draggable06">
      <div class="flip-card">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="../assets/css/source/banner_download.png">
          </div>
          <div class="flip-card-back">
            <img src="../assets/css/source/back-download.png">
          </div>
        </div>
      </div>
    </section>

    <section class="glyphs" id="draggable07">
      <a href="">
        <img src="../assets/css/source/banner_glyphs.png">
      </a>
    </section>

    <section class="tryit" id="try">
      <div class="tryit-top">
        <div class="tryit-left">TRY IT</div>
        <div class="tryit-right">
            <img src="../assets/css/source/btn_full.png">
            <img src="../assets/css/source/btn_exit.png" id="tryit-close">
        </div>
      </div>     
      <section class="options">
          <textarea class="output">123</textarea>
          <input type="range" name="typesize" min=0 max=30 value=7>
      </section>
    </section>

    <section class="side-tryit" id="draggable09">
      <img src="../assets/css/source/glyphs_color.png">
    </section>

    <section class="stick" id="draggable10">
      <a href="">
        <img src="../assets/css/source/stick.png">
      </a>
    </section>

  </section>

  <footer id="down">
    <div class="footer-child">
      <a href="">CONTACT US</a><br>
      <a href="">BRAND-DESIGN</a>
      <a href="">@SOCAR.KR</a>
    </div>
    <div class="footer-child">
      <a href="">FOLLOW US</a><br>
      <a href="">INSTAGRAM</a>
      <a href="">SHARE</a>
    </div>
    <div class="footer-child">
      <br><br>
      <a href="">SOCAR</a>
      <a href="">ALL RIGHTS RESERVED</a>
    </div>
    <div class="footer-child">
      <br><br><br>
      <a href="">Ⓒ 2023</a>
    </div>

  </footer>
</main>

<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<?php snippet('footer') ?>
