<style>
.board{
  margin:0 auto;
  width:53%;
  background:white;
  border:1px solid lightgrey;
  text-align: center;
  align-items: center;
  align-self: center;
  vertical-align: center;
}
.marker{
  border:1px dashed grey;
  background: rgba(0,0,255,0.5) !important;
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
</style>

<div class="board" align="center">
  <div class="line" data-row="1" data-type="container" data-starting="white">
    <div class="block" data-child="1" data-id="1" data-type="block" data-dir="down">
      <img src="./image/rookw.png" data-type="rook" data-color="white" data-dir="down" data-id="opponent">
    </div>
    <div class="block" data-child="2" data-id="1" data-color="white" data-dir="down" data-type="block">
      <img src="./image/knightw.png" data-type="knight" data-color="white" data-dir="down" data-id="opponent">
    </div>
    <div class="block" data-child="3" data-id="1" data-color="white" data-dir="down" data-type="block">
      <img src="./image/bishopw.png" data-type="bishop" data-color="white" data-dir="down" width="90%" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="4" data-id="1" data-type="block">
      <img src="./image/queenw.png" data-type="queen" data-color="white" data-dir="down"  width="95%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="5" data-id="1" data-type="block">
      <img src="./image/kingw.png" data-type="king" data-color="white" data-dir="down" width="90%" align="center"  data-id="opponent">
    </div>
    <div class="block" data-child="6" data-id="1" data-type="block">
      <img src="./image/bishopw.png" data-type="bishop" data-color="white" data-dir="down" width="90%" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="7" data-id="1" data-type="block">
      <img src="./image/knightw.png" data-type="knight" data-color="white" data-dir="down" data-id="opponent">
    </div>
    <div class="block" data-child="8" data-id="1" data-type="block">
      <img src="./image/rookw.png" data-type="rook" data-color="white" data-dir="down" data-id="opponent">
    </div>
  </div>
  <div class="line" data-row="2" data-type="container" data-starting="white">
    <div class="block" data-child="1" data-id="2" data-type="block" data-dir="down">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="2" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="3" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="4" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="5" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="6" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="7" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
    </div>
    <div class="block" data-child="8" data-id="2" data-type="block">
      <img src="./image/pawnw.png" data-type="pawn" data-color="white" data-dir="down" width="60%" style="margin-top:10px" align="center" data-id="opponent">
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
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="2" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="3" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="4" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="5" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="6" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="7" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="8" data-id="7" data-type="block">
      <img src="./image/pawnb.png" data-type="pawn" data-color="black" data-dir="up" width="60%" style="margin-top:10px" align="center" data-id="self">
    </div>
  </div>
  <div class="line" data-row="8" data-type="container" data-starting="black">
    <div class="block" data-child="1" data-id="8" data-type="block">
      <img src="./image/rookb.png" data-type="rook" data-color="black" data-dir="up" data-id="self">
    </div>
    <div class="block" data-child="2" data-id="8" data-type="block">
      <img src="./image/knightb.png" data-type="knight" data-color="black" data-dir="up" data-id="self">
    </div>
    <div class="block" data-child="3" data-id="8" data-type="block">
      <img src="./image/bishopb.png" data-type="bishop" data-color="black" data-dir="up" width="90%" align="center" data-id="self">
    </div>
    <div class="block" data-child="4" data-id="8" data-type="block">
      <img src="./image/queenb.png" data-type="queen" data-color="black" data-dir="up"  width="95%" style="margin-top:10px" align="center" data-id="self">
    </div>
    <div class="block" data-child="5" data-id="8" data-type="block">
      <img src="./image/kingb.png" data-type="king" data-color="black" data-dir="up" width="90%" align="center"  data-id="self">
    </div>
    <div class="block" data-child="6" data-id="8" data-type="block">
      <img src="./image/bishopb.png" data-type="bishop" data-color="black" data-dir="up" width="90%" align="center" data-id="self">
    </div>
    <div class="block" data-child="7" data-id="8" data-type="block">
      <img src="./image/knightb.png" data-type="knight" data-color="black" data-dir="up" data-id="self">
    </div>
    <div class="block" data-child="8" data-id="8" data-type="block">
      <img src="./image/rookb.png" data-type="rook" data-color="black" data-dir="up" data-id="self">
    </div>
  </div>
</div>
<div class="logs">
  Turn the log <a href="javascript:void(0);" class="toggleLogs">Off</a><br>
  <a href="javascript:void(0);" class="ClearLog">Clear Log</a><br>
  Free Move Mode is <a href="javascript:void(0);" class="FreeMoveMode">Off</a><br>
</div>
<div class="status"></div>
<div class="rendered"></div>
<script src="./jquery.js"></script>
<script src="app.js"></script>
