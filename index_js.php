<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Antonio:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles_js.css">
  <title>Саркисова Варвара 211-362</title>
  <script src="main_js.js" defer></script>
  
</head>
<body>
    
<header class="header" id="top">
    <div class="wrapper">
      <div class="header__wrapper">
        <div class="logo">CALCULATOR</div>
        <nav class="nav">
          <ul class="menu">
            <li class="menu__item"><a href="">Главная</a></li>
            <li class="menu__item"><a href="#footer">Контакты</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>	
	<div class="elements">
        <div class="calc-pic">
            <img src="calc.jpg" height="536px">
        </div>
        <div class="calc-container" id="calc-container">
            <div class="screen" id="screen">
                <textarea id="out_screen" rows="5" cols="33" wrap="soft" onclick="paste()" disabled></textarea>
                <span></span>
            </div>
            <div class="buttons" id="buttons">
                <div class="digits" id="digits">
                    <button class="key_digit" id="d_1" value="1">1</button>
                    <button class="key_digit" id="d_2" value="2">2</button>
                    <button class="key_digit" id="d_3" value="3">3</button>
                    <button class="key_digit" id="d_4" value="4">4</button>
                    <button class="key_digit" id="d_5" value="5">5</button>
                    <button class="key_digit" id="d_6" value="6">6</button>
                    <button class="key_digit" id="d_7" value="7">7</button>
                    <button class="key_digit" id="d_8" value="8">8</button>
                    <button class="key_digit" id="d_9" value="9">9</button>
                    <button class="key_digit" id="d_c" value=".">.</button>
                    <button class="key_digit" id="d_0" value="0">0</button>
                    <button class="key" style="visibility: hidden;" id="b_hidden" value=""></button>
                </div>
                <div class="other" id="other" >
                    <button class="key_operation" id="o_a" value="+">+</button>
                    <button class="key_clear_1" id="b_c_all" value="C">C</button>
                    <button class="key_bracket" id="b_l" value="(">(</button>
                    <button class="key_bracket" id="b_r" value=")">)</button>
                    <button class="key_operation" id="o_d" value="/">/</button>
                    <button class="key_operation" id="o_m" value="*">*</button>
                    <button class="key_operation" id="o_s" value="-">-</button>
                    <button class="key_result" id="bt_r" value="=">=</button>
                    <button class="key_clear_2" id="b_c_one" value="CE">CE</button>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer class="footer" id="footer">
    <div class="wrapper">
      <div class="footer__wrapper">
        <div class="footer-info">
          <ul>
            <li class="footer-info__item">Саркисова Варвара</li>
            <li class="footer-info__item">
              211-362
            </li>
            <li class="footer-info__item" style="color: rgb(127, 111, 111)">
              + 7 (915) 041-91-27
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>