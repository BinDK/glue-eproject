<div class="error">
  <p id="error">E<span>r</span>ror</p>
  <p id="code">4<span>0</span><span>4</span></p>
</div>
  <span class="warning"><i class="fas fa-hand-point-left" align="left"></i> click here to get out 404 page.</span>
<style>
	@font-face {
  font-family: 'Monoton';
  font-style: normal;
  font-weight: 400;
  src: local('assets/Monoton'), local('Monoton-Regular'), url(assets/Monoton.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
body{
	background-color: #230E44;
}
.warning{
	  font-size: 20px;
  text-align: center;
  text-transform: uppercase;
  color: #B388F9;
}
.error {
  padding: 40px;
  font-size: 75px;
  font-family: 'Monoton', cursive;
  text-align: center;
  text-transform: uppercase;
  text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
  color: red;
}
.error p { margin:0; }
#error:hover { text-shadow: 0 0 200px #ffffff,0 0 80px #008000,0 0 6px #0000ff; }
#code:hover { text-shadow: 0 0 100px red,0 0 40px FireBrick,0 0 8px DarkRed; }
#error {
  color: #e0ffff;
  text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
}
.warning {
  animation: upper 11s linear infinite;
}
#error span {
  animation: upper 11s linear infinite;
}
#code span:nth-of-type(2) {
  animation: lower 10s linear infinite;
}
#code span:nth-of-type(1) {
  text-shadow: none;
  opacity:.4;
}
@keyframes upper {
  0%,19.999%,22%,62.999%,64%, 64.999%,70%,100% {
    opacity:.99; text-shadow: 0 0 80px #ffffff,0 0 30px #008000,0 0 6px #0000ff;
  }
  20%,21.999%,63%,63.999%,65%,69.999% {
    opacity:0.4; text-shadow: none; 
  }
}
@keyframes lower {
  0%,12%,18.999%,23%,31.999%,37%,44.999%,46%,49.999%,51%,58.999%,61%,68.999%,71%,85.999%,96%,100% {
    opacity:0.99; text-shadow: 0 0 80px red,0 0 30px FireBrick,0 0 6px DarkRed;
  }
  19%,22.99%,32%,36.999%,45%,45.999%,50%,50.99%,59%,60.999%,69%,70.999%,86%,95.999% { 
    opacity:0.4; text-shadow: none; 
  }
}
</style>