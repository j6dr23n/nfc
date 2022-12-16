$((function(){"use strict";var a=document.getElementById("chartBar1").getContext("2d");new Chart(a,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{label:"# of Votes",data:[12,39,20,10,25,18],backgroundColor:"#38cab3"}]},options:{maintainAspectRatio:!1,responsive:!0,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{barPercentage:.6,ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var e=document.getElementById("chartBar2").getContext("2d");new Chart(e,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{label:"# of Votes",data:[12,39,20,10,25,18],backgroundColor:"rgba(254, 78, 140, .5)"}]},options:{maintainAspectRatio:!1,responsive:!0,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{barPercentage:.6,ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var r=document.getElementById("chartBar3").getContext("2d"),o=r.createLinearGradient(0,0,0,250);o.addColorStop(0,"#6d26be"),o.addColorStop(1,"#38cab3"),new Chart(r,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{label:"# of Votes",data:[12,39,20,10,25,18],backgroundColor:o,hoverBackgroundColor:o}]},options:{maintainAspectRatio:!1,responsive:!0,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{barPercentage:.6,ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var t=document.getElementById("chartBar4").getContext("2d");new Chart(t,{type:"horizontalBar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{label:"# of Votes",data:[12,39,20,10,25,18],backgroundColor:["#6d26be","#ffbd5a","#38cab3","#673ab7","#ffc107","#1a9c86"]}]},options:{maintainAspectRatio:!1,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{ticks:{beginAtZero:!0,fontSize:11,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var d=document.getElementById("chartBar5").getContext("2d");new Chart(d,{type:"horizontalBar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{data:[12,39,20,10,25,18],backgroundColor:["#6d26be","#ffbd5a","#673ab7","#ffc107","#1a9c86","#7571f9"]},{data:[22,30,25,30,20,40],backgroundColor:"rgba(0,123,255,.5)"}]},options:{maintainAspectRatio:!1,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{ticks:{beginAtZero:!0,fontSize:11,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var n=document.getElementById("chartStacked1");new Chart(n,{type:"bar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{data:[10,24,20,25,35,50],backgroundColor:"#f74f75",borderWidth:1,fill:!0},{data:[10,24,20,25,35,50],backgroundColor:"#d462f9",borderWidth:1,fill:!0},{data:[20,30,28,33,45,65],backgroundColor:"#e5bcf3",borderWidth:1,fill:!0}]},options:{maintainAspectRatio:!1,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{stacked:!0,ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{barPercentage:.5,stacked:!0,ticks:{fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var i=document.getElementById("chartStacked2");new Chart(i,{type:"horizontalBar",data:{labels:["Jan","Feb","Mar","Apr","May","Jun"],datasets:[{data:[10,24,20,25,35,50],backgroundColor:"#f74f75",borderWidth:1,fill:!0},{data:[10,24,20,25,35,50],backgroundColor:"#d462f9",borderWidth:1,fill:!0},{data:[20,30,28,33,45,65],backgroundColor:"#e5bcf3",borderWidth:1,fill:!0}]},options:{maintainAspectRatio:!1,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{stacked:!0,ticks:{beginAtZero:!0,fontSize:10,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{stacked:!0,ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgb(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var l=document.getElementById("chartLine1");new Chart(l,{type:"line",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Dec"],datasets:[{data:[12,15,18,40,35,38,32,20,25,15,25,30],borderColor:"#38cab3 ",borderWidth:1,fill:!1},{data:[10,20,25,55,50,45,35,30,45,35,55,40],borderColor:"#f74f75",borderWidth:1,fill:!1}]},options:{maintainAspectRatio:!1,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var s=document.getElementById("chartArea1"),b=r.createLinearGradient(0,350,0,0);b.addColorStop(0,"rgba(254, 78, 140, .0)"),b.addColorStop(1,"rgba(254, 78, 140, .5)");var c=r.createLinearGradient(0,280,0,0);c.addColorStop(0,"rgba(0,123,255,0)"),c.addColorStop(1,"rgba(135, 88, 218, 0.5)"),new Chart(s,{type:"line",data:{labels:["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Dec"],datasets:[{data:[12,15,18,40,35,38,32,20,25,15,25,30],borderColor:"#f74f75",borderWidth:1,backgroundColor:b},{data:[10,20,25,55,50,45,35,37,45,35,55,40],borderColor:"#38cab3",borderWidth:1,backgroundColor:c}]},options:{maintainAspectRatio:!1,legend:{display:!1,labels:{display:!1}},scales:{yAxes:[{ticks:{beginAtZero:!0,fontSize:10,max:80,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}],xAxes:[{ticks:{beginAtZero:!0,fontSize:11,fontColor:"rgba(171, 167, 167,0.9)"},gridLines:{display:!0,color:"rgba(171, 167, 167,0.2)",drawBorder:!1}}]}}});var g={labels:["Jan","Feb","Mar","Apr","May"],datasets:[{data:[20,20,30,5,25],backgroundColor:["#6d26be","#ffbd5a","#4ec2f0","#1a9c86","#f74f75"]}]},p={maintainAspectRatio:!1,responsive:!0,legend:{display:!1},animation:{animateScale:!0,animateRotate:!0}};n=document.getElementById("chartPie"),new Chart(n,{type:"doughnut",data:g,options:p}),i=document.getElementById("chartDonut"),new Chart(i,{type:"pie",data:g,options:p})}));