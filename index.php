<style>
.dailoger{
  display:none;
}
.hidden{
  display:none;
}
.dailog{
  width:50%;
  height:50%;
  margin:0 auto;
  min-width:300px;
  min-height:300px;
  border:1px solid grey;
  padding-right:20px;
  z-index:2 !important;
  background:white;
}
.overlay-dailog{
  background:rgba(255,255,255,0.3);
  width:100%;
  height:100%;
  top:0;
  left:0;
  position:absolute;
  z-index:1 !important;
}
.relative{
  z-index:2;
  left:30%;
  position:absolute;
  margin:0 auto;
  width:40%;
   z-index:2 !important;

}
.pawner ul{
  display:inline-flex;
  text-align:center;
  align-item:center;
  list-style:none;
}
.pawner li{
  width:80px;
  height:80px;
  border:1px solid grey;
}
.noborder{
  border:0px none !important;
}
.heading{
  text-align:center;
  padding:10px;
  font-size:20px;
}
.heading:before,.heading:after{
  content:"--------";
}
.pawner .hoverable:hover{
  background:grey;
  cursor:pointer;
}
.board{
  margin:0 auto;
  width:750px;
  background:white;
  border:1px solid lightgrey;
  text-align: center;
  align-items: center;
  align-self: center;
  vertical-align: center;
  position:relative;
}
*[class*='marker_']{
  background:rgba(0,0,255,0.7) !important;
  transition: 90ms;
}
.range{
  background:rgba(255,0,0,0.7) !important;
  transition: 90ms;
}
.range:hover{
  background: rgba(255,255,0,0.7) !important;
  transition: 90ms;
}
.selected{
  background:rgba(0,255,0,0.7) !important;
}
.logs{
  position: absolute;
  top:0;
  left:0;
  box-shadow: 0px 0px 5px 0px grey;
  padding:20px;
}
.line{
  float:left;
  padding:0px;
  margin:0px;
}
.block img{
    transition: 3s;
}
.block{
  cursor: pointer;
  transition: 500ms;
}
.block:hover{
  transition: 500ms;
  background:rgba(0,0,122,0.1);
}
.line:nth-child(odd) .block:nth-child(even){
  float:left;
  background:grey;
  width:80px;
  height:80px;
  padding:5px;
  border:1px solid grey;
  margin:0px auto;
  text-align: center;
  align-items: center;
  align-self: center;
}
.line:nth-child(odd) .block:nth-child(odd){
  float:left;
  background:white;
  width:80px;
  height:80px;
  padding:5px;
  border:1px solid grey;
  margin:auto;
  text-align: center;
  align-items: center;
  align-self: center;
}
.line:nth-child(even) .block:nth-child(odd){
  float:left;
  background:grey;
  width:80px;
  height:80px;
  padding:5px;
  border:1px solid grey;
  margin:auto;
  text-align: center;
  align-items: center;
  align-self: center;
}
.line:nth-child(even) .block:nth-child(even){
  float:left;
  background:white;
  width:80px;
  height:80px;
  padding:5px;
  border:1px solid grey;
  margin:auto;
  text-align: center;
  align-items: center;
  align-self: center;
}
.status{
  height: 700px;
  width:auto;
  overflow: auto;
  padding:10px;
}
.bottom-scaler{
  list-style: none;
  float:left;
  position: absolute;
  left:-100px;
}
.bottom-scaler li{
  padding:7px;
  width:10px;
  height:80px;
}
.left-scaler{
  list-style: none;
  display:inline-flex;
  width:100%;
  position: absolute;
  left:-35px;
  bottom:-800px;
}
.left-scaler li{
  padding:7px;
  width:80px;
  height:10px;

}

</style>

<div class="board" align="center">
  <ul class="left-scaler">
    <li>A</li>
    <li>B</li>
    <li>C</li>
    <li>D</li>
    <li>E</li>
    <li>F</li>
    <li>G</li>
    <li>H</li>
  </ul>
  <ul class="bottom-scaler">
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
  </ul>
  <div class="line" data-row="1" data-type="container" data-starting="white">
    <div class="block" data-child="1" data-id="1" data-type="block" data-dir="down">
      <img src="./image/rookw.png" data-type="rook" data-unique="a1" data-color="white" data-dir="down" data-id="opponent">
    </div>
    <div class="block" data-child="2" data-id="1" data-color="white" data-dir="down" data-type="block">
      <img src="./image/knightw.png" data-type="knight" data-unique="b1" data-color="white" data-dir="down" data-id="opponent">
    </div>
    <div class="block" data-child="3" data-id="1" data-color="white" data-dir="down" data-type="block">
      <img src="./image/bishopw.png" data-type="bishop" data-unique="c1" data-color="white" data-dir="down" width="90%" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="4" data-id="1" data-type="block">
      <img src="./image/queenw.png" data-type="queen" data-unique="d1" data-color="white" data-dir="down"  width="95%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="5" data-id="1" data-type="block">
      <img src="./image/kingw.png" data-type="king" data-unique="e1" data-color="white" data-dir="down" width="90%" align="center"  data-id="opponent">
    </div>
    <div class="block" data-child="6" data-id="1" data-type="block">
      <img src="./image/bishopw.png" data-type="bishop" data-unique="f1" data-color="white" data-dir="down" width="90%" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="7" data-id="1" data-type="block">
      <img src="./image/knightw.png" data-type="knight" data-unique="g1" data-color="white" data-dir="down" data-id="opponent">
    </div>
    <div class="block" data-child="8" data-id="1" data-type="block">
      <img src="./image/rookw.png" data-type="rook" data-unique="h1" data-color="white" data-dir="down" data-id="opponent">
    </div>
  </div>
  <div class="line" data-row="2" data-type="container" data-starting="white">
    <div class="block" data-child="1" data-id="2" data-type="block" data-dir="down">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="a2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="2" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="b2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="3" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="c2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="4" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="d2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="5" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="e2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="6" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="f2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="7" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="g2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="8" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" data-unique="h2" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
  </div>
  <div class="line" data-row="3" data-type="container" data-breakdown="opponent" data-id="opponent">
      <div class="block" data-child="1" data-id="3" data-type="block"></div>
      <div class="block" data-child="2" data-id="3" data-type="block"></div>
      <div class="block" data-child="3" data-id="3" data-type="block"></div>
      <div class="block" data-child="4" data-id="3" data-type="block"></div>
      <div class="block" data-child="5" data-id="3" data-type="block"></div>
      <div class="block" data-child="6" data-id="3" data-type="block"></div>
      <div class="block" data-child="7" data-id="3" data-type="block"></div>
      <div class="block" data-child="8" data-id="3" data-type="block"></div>
  </div>
  <div class="line" data-row="4" data-type="container">
      <div class="block" data-child="1" data-id="4" data-type="block"></div>
      <div class="block" data-child="2" data-id="4" data-type="block"></div>
      <div class="block" data-child="3" data-id="4" data-type="block"></div>
      <div class="block" data-child="4" data-id="4" data-type="block"></div>
      <div class="block" data-child="5" data-id="4" data-type="block"></div>
      <div class="block" data-child="6" data-id="4" data-type="block"></div>
      <div class="block" data-child="7" data-id="4" data-type="block"></div>
      <div class="block" data-child="8" data-id="4" data-type="block"></div>
  </div>
  <div class="line" data-row="5" data-type="container">
      <div class="block" data-child="1" data-id="5" data-type="block"></div>
      <div class="block" data-child="2" data-id="5" data-type="block"></div>
      <div class="block" data-child="3" data-id="5" data-type="block"></div>
      <div class="block" data-child="4" data-id="5" data-type="block"></div>
      <div class="block" data-child="5" data-id="5" data-type="block"></div>
      <div class="block" data-child="6" data-id="5" data-type="block"></div>
      <div class="block" data-child="7" data-id="5" data-type="block"></div>
      <div class="block" data-child="8" data-id="5" data-type="block"></div>
  </div>
  <div class="line" data-row="6" data-type="container" data-breakdown="self" data-id="self">
      <div class="block" data-child="1" data-id="6" data-type="block"></div>
      <div class="block" data-child="2" data-id="6" data-type="block"></div>
      <div class="block" data-child="3" data-id="6" data-type="block"></div>
      <div class="block" data-child="4" data-id="6" data-type="block"></div>
      <div class="block" data-child="5" data-id="6" data-type="block"></div>
      <div class="block" data-child="6" data-id="6" data-type="block"></div>
      <div class="block" data-child="7" data-id="6" data-type="block"></div>
      <div class="block" data-child="8" data-id="6" data-type="block"></div>
  </div>
  <div class="line" data-row="7" data-type="container" data-starting="black" data-dir="up">
    <div class="block" data-child="1" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="a7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="2" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="b7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="3" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="c7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="4" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="d7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="5" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="e7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="6" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="f7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="7" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="g7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="8" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" data-unique="h7" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
  </div>
  <div class="line" data-row="8" data-type="container" data-starting="black">
    <div class="block" data-child="1" data-id="8" data-type="block">
      <img src="./image/rookb.png" data-type="rook" data-color="black" data-dir="up" data-unique="a8" data-id="self">
    </div>
    <div class="block" data-child="2" data-id="8" data-type="block">
      <img src="./image/knightb.png" data-type="knight" data-color="black" data-dir="up" data-unique="b8" data-id="self">
    </div>
    <div class="block" data-child="3" data-id="8" data-type="block">
      <img src="./image/bishopb.png" data-type="bishop" data-color="black" data-dir="up" data-unique="c8" width="90%" align="center" data-id="self">
    </div>
    <div class="block" data-child="4" data-id="8" data-type="block">
      <img src="./image/queenb.png" data-type="queen" data-color="black" data-dir="up" data-unique="d8"  width="95%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="5" data-id="8" data-type="block">
      <img src="./image/kingb.png" data-type="king" data-color="black" data-dir="up" data-unique="e8" width="90%" align="center"  data-id="self">
    </div>
    <div class="block" data-child="6" data-id="8" data-type="block">
      <img src="./image/bishopb.png" data-type="bishop" data-color="black" data-dir="up" data-unique="f8" width="90%" align="center" data-id="self">
    </div>
    <div class="block" data-child="7" data-id="8" data-type="block">
      <img src="./image/knightb.png" data-type="knight" data-color="black" data-unique="g8" data-dir="up" data-id="self">
    </div>
    <div class="block" data-child="8" data-id="8" data-type="block">
      <img src="./image/rookb.png" data-type="rook" data-color="black" data-unique="h8" data-dir="up" data-id="self">
    </div>
  </div>
</div>
<div class="relative dailoger">
<div class="dailog">
  <div class="heading">
    Choose your pawn
  </div>
  <div class="pawner">
    <ul>
      <li class="noborder"></li>
      <li class="hoverable queen"></li>
    </ul>
    <ul>
      <li class="hoverable rook"></li>
      <li class="hoverable bishop"></li>
      <li class="hoverable knight"></li>
    </ul>
  </div>
</div>
</div>
<div class="overlay-dailog dailoger">
 </div>
<div class="logs hidden">
  Turn the log <a href="javascript:void(0);" class="toggleLogs">Off</a><br>
  <a href="javascript:void(0);" class="ClearLog">Clear Log</a><br>
  Free Move Mode is <a href="javascript:void(0);" class="FreeMoveMode">Off</a><br>
  Marker is <a href="javascript:void(0);" class="MarkerControl">Off</a><br>
</div>
<div class="status hidden"></div>
<div class="rendered"></div>
<script src="./jquery.js"></script>
<script src="app.js"></script>
