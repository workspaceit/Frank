<style>
.graph_cont{
width:430px;
height:297px;
margin:10px auto;
position:relative;
border:1px solid #111111;
border-radius:7px;
background: #2B639F; /* Old browsers */
background: -moz-linear-gradient(top,  #1e5799 0%, #207cca 0%, #2077bc 0%, #4889c8 0%, #4889c8 3%, #689dd4 6%, #80b0df 15%, #71a5d8 29%, #5892ce 42%, #4788c7 55%, #3c82c4 65%, #227abf 78%, #1b73ba 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#1e5799), color-stop(0%,#207cca), color-stop(0%,#2077bc), color-stop(0%,#4889c8), color-stop(3%,#4889c8), color-stop(6%,#689dd4), color-stop(15%,#80b0df), color-stop(29%,#71a5d8), color-stop(42%,#5892ce), color-stop(55%,#4788c7), color-stop(65%,#3c82c4), color-stop(78%,#227abf), color-stop(100%,#1b73ba)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #1e5799 0%,#207cca 0%,#2077bc 0%,#4889c8 0%,#4889c8 3%,#689dd4 6%,#80b0df 15%,#71a5d8 29%,#5892ce 42%,#4788c7 55%,#3c82c4 65%,#227abf 78%,#1b73ba 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #1e5799 0%,#207cca 0%,#2077bc 0%,#4889c8 0%,#4889c8 3%,#689dd4 6%,#80b0df 15%,#71a5d8 29%,#5892ce 42%,#4788c7 55%,#3c82c4 65%,#227abf 78%,#1b73ba 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #1e5799 0%,#207cca 0%,#2077bc 0%,#4889c8 0%,#4889c8 3%,#689dd4 6%,#80b0df 15%,#71a5d8 29%,#5892ce 42%,#4788c7 55%,#3c82c4 65%,#227abf 78%,#1b73ba 100%); /* IE10+ */
background: linear-gradient(to bottom,  #1e5799 0%,#207cca 0%,#2077bc 0%,#4889c8 0%,#4889c8 3%,#689dd4 6%,#80b0df 15%,#71a5d8 29%,#5892ce 42%,#4788c7 55%,#3c82c4 65%,#227abf 78%,#1b73ba 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e5799', endColorstr='#1b73ba',GradientType=0 ); /* IE6-9 */
-webkit-box-shadow: 5px 5px 3px #606367,0 0 3px #000;
-moz-box-shadow: 5px 5px 3px #606367 ,0 0 3px #000;
box-shadow: 5px 5px 3px #606367 ,0 0 3px #000;
overflow:hidden;
}

.graph_cont h1{
width:100%;
height:42px;
float:left;
text-indent:32px;
font-size:16px;
color:#fff;
line-height:42px;
-webkit-margin-before: 0px;
-webkit-margin-after: 0px;
-webkit-margin-start: 0px;
-webkit-margin-end: 0px;
font-weight:bold;
}

.graph{
width:369px;
height:190px;
background:#fff;
position:relative;
float:left;
margin-left:16px;
border:1px solid #000;
}

.y_axis{
width:42px;
height:210px;
position:relative;
float:left;
font-size:15px;
font-weight:bold;
color:#fff;
margin-top:-10px;
text-indent:3px;
}

.y_axis div{
float:left;
width:100%;
height:20px;
line-height:20px;
}

.y_axis div:nth-child(2){
margin-top:75px;
}

.y_axis div:nth-child(3){
margin-top:75px;
}

.x_axis{
width:390px;
height:22px;
position:relative;
float:left;
margin-left:8px;
font-size:9px;
color:#fff;
text-align:center;
}

.g1 div{
width:18px;
float:left;
}

.g2 div{
width:30px;
float:left;
}
</style>

<div class="graph_cont">
<h1>Distribution of score</h1>
<div class="graph">
<canvas id="g1" width="370" height="190" style="width:100%; height:100%; float:left; position:absolute;top:0;left:0;"></canvas>
</div>
<div class="y_axis">
<div>100%</div>
<div>50%</div>
<div>0%</div>
</div>
<div class="x_axis g1">
<div>-100</div>
<div>-90</div>
<div>-80</div>
<div>-70</div>
<div style="margin-right:1px;">-60</div>
<div style="margin-right:1px;">-50</div>
<div>-40</div>
<div style="margin-right:1px;">-30</div>
<div>-20</div>
<div style="margin-right:1px;">-10</div>
<div>0</div>
<div>10</div>
<div>20</div>
<div>30</div>
<div style="margin-right:1px;">40</div>
<div style="margin-right:1px;">50</div>
<div style="margin-right:1px;">60</div>
<div>70</div>
<div>80</div>
<div style="margin-right:2px;">90</div>
<div>100</div>
</div>
</div>

<div class="graph_cont">
<h1>Distribution of score</h1>
<div class="graph">
<canvas id="g2" width="370" height="190"  style="width:100%; height:100%; float:left; position:relative;"></canvas>
</div>
<div class="y_axis">
<div>100</div>
<div>0</div>
<div>-100</div>
</div>
<div class="x_axis g2">
<div style="margin-left:10px;">12/10</div>
<div>1/11</div>
<div style="margin-left:1px;">2/11</div>
<div style="margin-left:1px;">3/11</div>
<div style="margin-left:1px;">4/11</div>
<div style="margin-left:1px;">5/11</div>
<div style="margin-left:1px;">6/11</div>
<div style="margin-left:1px;">7/11</div>
<div style="margin-left:1px;">8/11</div>
<div>9/11</div>
<div style="margin-left:1px;">10/11</div>
<div>11/11</div>
</div>
</div>

<script>
	
	var c=document.getElementById("g1");

   	if(c){
	var ctx=c.getContext("2d");
	ctx.beginPath();
	ctx.moveTo(0,190);
	var y;
	
	
	for(var i=0;i<200;i++){
	y = Math.floor(Math.random()*190);
	y = 190-y;
	ctx.lineTo(i*1.85,y);
        console.log(i*1.85);
        if(i==10)
            break;
	}
	
	//console.log(a);
	ctx.lineTo(370,190);
	
	// add linear gradient
      var grd = ctx.createLinearGradient(370, 0, 370, 190);
      // light blue
      grd.addColorStop(0, '#8ED6FF');   
      // dark blue
      grd.addColorStop(1, '#004CB3');
      ctx.fillStyle = grd;
	
	ctx.lineJoin = 'round';
	ctx.lineWidth = 1;
    //ctx.fillStyle = '#3972C1';
    
    ctx.shadowColor = '#999';
    ctx.shadowBlur = 0;
    ctx.shadowOffsetX = 2;
    ctx.shadowOffsetY = 2;
    ctx.fill();
    
    
    
    var x = 18.5;
    
    for(var j = 0 ; j<20; j++){
    ctx.beginPath();
    ctx.moveTo(x,0);
    ctx.lineTo(x,190);
    ctx.shadowBlur = 0; 
    ctx.shadowColor= '#fff'; 
    ctx.strokeStyle = '#000000';
    ctx.shadowColor = '#333';
    ctx.shadowBlur = 0;
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    if(j==8){
    x +=17.5;
    ctx.lineWidth = 1;
    ctx.stroke();
    }
    else if(j==9){
    x +=18.5;
    ctx.lineWidth = 3;
    ctx.stroke();
    }
    else{
    x +=18.5;
    ctx.lineWidth = 1;
    ctx.stroke();
    }
    
    }
    
    
   
    
	}
     
     
     var c=document.getElementById("g2");
	var arr1 = new Array();
	var arr2 = new Array();
   	if(c){
	var ctx=c.getContext("2d");

	//////////
	ctx.beginPath();
	ctx.moveTo(0,95);
	var y;

	for(var i=0;i<370;){
	y = Math.floor(Math.random()*95);
	arr1.push(y);
	y = (95-y);
	ctx.lineTo(i,y);
	i = i+10;
	}
	
	ctx.lineTo(370,95);
	
	// add linear gradient
      var grd = ctx.createLinearGradient(370, 0, 370, 95);
      // light blue
      grd.addColorStop(0, '#8ED6FF');   
      // dark blue
      grd.addColorStop(1, '#004CB3');
      ctx.fillStyle = grd;
	
	ctx.lineJoin = 'round';
	ctx.lineWidth = 1;
    //ctx.fillStyle = '#3972C1';
    ctx.shadowColor = '#999';
    ctx.shadowBlur = 0;
    ctx.shadowOffsetX = 2;
    ctx.shadowOffsetY = 2;
    ctx.fill();
    
    
    /////////////////
    ctx.beginPath();
	ctx.moveTo(0,95);
	var y;

	for(var i=0;i<370;){
	y = Math.floor(Math.random()*95);
	
	arr2.push(y);
	y = 95+y;
	ctx.lineTo(i,y);
	i = i+10;
	}
	
	
	
	ctx.lineTo(370,95);
	
	// add linear gradient
      var grd = ctx.createLinearGradient(370, 95, 370, 190);
      // light blue
      grd.addColorStop(1, '#8ED6FF');   
      // dark blue
      grd.addColorStop(0, '#004CB3');
      ctx.fillStyle = grd;
	
	ctx.lineJoin = 'round';
	ctx.lineWidth = 1;
    //ctx.fillStyle = '#3972C1';
    ctx.shadowColor = '#999';
    ctx.shadowBlur = 0;
    ctx.shadowOffsetX = 2;
    ctx.shadowOffsetY = 2;
    ctx.fill();
    
    
    
    ctx.beginPath();
	ctx.moveTo(0,95);
	
	// console.log(arr1.length);
	arr1.reverse();
	arr2.reverse();
	
    for(var i=0; i< 370;){
    var p1 = arr1.pop();
    var p2 = arr2.pop();
    var yy = p1 - p2;
    if(yy < 0){
    yy =  (95 + Math.abs(yy));
    }
    else{
    yy =  95-yy;
    }
    
   // console.log(p1+':'+p2+':'+yy);
    ctx.lineTo(i,yy);
    i = i+10;
    }
    ctx.lineTo(370,95);
	ctx.lineWidth = 2;
	ctx.strokeStyle = '#222';
	ctx.shadowColor = '#222';
    ctx.shadowBlur = 0;
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    ctx.stroke();
	
	/////////////
	ctx.beginPath();
	ctx.moveTo(0,95);
	ctx.lineTo(370,95);
	ctx.lineWidth = 2;
	ctx.strokeStyle = '#000000';
	ctx.shadowColor = '#333';
        ctx.shadowBlur = 0;
        ctx.shadowOffsetX = 0;
        ctx.shadowOffsetY = 0;
        ctx.stroke();
    
    
    ///////////
    var x = 30.83;
    
    for(var j = 0 ; j<20; j++){
    ctx.beginPath();
    ctx.moveTo(x,0);
    ctx.lineTo(x,190);
    ctx.shadowBlur = 0; 
    ctx.shadowColor= '#fff'; 
    ctx.strokeStyle = '#000000';
    ctx.shadowColor = '#333';
    ctx.shadowBlur = 0;
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = 0;
    x +=30.83;
    ctx.lineWidth = 1;
    ctx.stroke();
   
    
    }
    
	}
	
	
      
</script>