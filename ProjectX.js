/*alert("Welcome \nTry the buttons out.")*/
/*var Arr = ["header", ".header2"];
var xx = for (i=0; i<Arr.length; i++){
		Arr[i];
		}*/

/*$(function(){
		$("#input").click(function(){
				$("header").toggleClass("header1");
				$("header2").toggleClass("header1");
				$("body").toggleClass("body1");
				});
		});*/
								

$(function(){
		$(".menu").mouseover(function(){
				$(".menu").css("color", "white");
				});
		$(".menu").mouseleave(function(){
				$(".menu").css("color", "red");
				});
		});
								
								
function opennav(){
		var z = document.getElementById("nav");
		z.style.width="70%";
		}



function closenav(){
		var z1 = document.getElementById("nav");
		z1.style.width="0";
		}
		
		
/*window.onclick = function(event) {
		var z = document.getElementById("nav");
		var menu = document.querySelector(".menu");
    if (event.target != z.innerHTML && event.target != menu){
        closenav();
      }
		}*/
		


//THE DASHBOARD SECTION 
		
$(function(){
    $("#username").keydown(function(){
    		$(".button3").click(function(){
    				let x = $("#username").val();
    				if(x !== ""){
    						$(".name").html(x);
    						$("#contain").css("display", "none");
								$(".welcome").css({"display": "block", "transition": "3s"});
								}
						else if(x == ""){
								alert("Empty box, please fill in your Username");
								}
    				});
    		 });
  		});
  		
  		
$(function(){
 		$("#male").click(function(){
 				$(".gender").text("Mr");
 				$(".sirma").text("sir");
 				});
 		});
 		
$(function(){
 		$("#female").click(function(){
 				$(".gender").text("Mrs");
 				$(".sirma").text("ma");
 				});
 		});



$(function(){
		$("#username").focus(function(){
				$(".welcome").css("display", "none");
				});
		});


function printTime(){
  var d = new Date();
  let hours = d.getHours();
  let mins = d.getMinutes();
  let secs = d.getSeconds();
  let x = hours+":"+mins+":"+secs;
  document.write("<span class=\"val\">"+x+"</span>");
}

function printDate(){
		var d = new Date();
		let date = d.getDate();
		let month = d.getMonth();
		let year = d.getFullYear();
		let x = date+"/"+month+"/"+year;
		document.write("<span class=\"val\">"+x+"</span>");
		}


function passCode(){
		var math = Math.ceil(Math.random()*10000);
		document.write("<span class=\"val\">"+math+"</span>");
		}

$(function(){
		let x = $("#site").attr("href");
		$("#site").text(x);
		});


$(function(){
		$("#intro").dblclick(function(){
				$("#intro").css({"background":"#7eacc7", "color":"white", "transition":"2s"});
				});
				/*$("#intro").off("dblclick");*/
		});
		
		
		
$(function(){
		$(".button5").click(function(){
				let answer= confirm("Are you sure you want to edit?");
				if(answer == true){
						$("#contain").css("display", "block");
						$(".welcome").css("display", "none");
						$("#username").val("");
						$("#male").val("");
						$("#female").val("");
						preventDefault();
						}
				});
		});


//THE ABOUT US SECTION

$(function(){
		$("#pull_up").css("height", "20%");
		});

$(function(){
		$("#pull_up_top").click(function(){
				$("#pull_up").css({"height":"0", "transition-delay":"0.5s"});
				});
		});
		
		
function contact_form(){
		let y = document.querySelector("#form_align");
		y.style.display = "flex";
		}

function contact_close(){
		let x = document.querySelector("#form_align");
		x.style.display = "none";
		}
		
		
//THE SIGNUP SECTION

function validate(){
  var p1 = document.getElementById("p1");
  var p2 = document.getElementById("p2");
  var e1 = document.getElementById("e1");
  var e2 = document.getElementById("e2");
  
  function s1(){
  		if(p1.value != "" && p2.value != ""){
  				if(p1.value == p2.value){
  						return true;
  						}
  				}
  		};
  function s2(){
  		if(e1.value != "" && e2.value != ""){
  				if(e1.value == e2.value){
  						return true;
  						}
   				 }
   			};
  
  if(s1() == true && s2() == true){
  		return true;
  		$(".button2").click(function(){
				alert("Profile Completed!!!\n\nSaved Successfully!!!");
				});
  		};
 	alert("The values should be equal and not blank");
  		return false;
}



function printYear(){
		var d = new Date();
		let year = d.getFullYear();
		document.write(year);
		}



//THE QUESTION SECTION

