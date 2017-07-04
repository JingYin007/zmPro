$(function() { 
$(window).scroll(function() { 
var top = $(window).scrollTop()+300; 
var left= $(window).scrollLeft()+55; 
$("#editInfo").css({ left:left + "px", top: top + "px" }); 
}); 
}); 
$(function() { 
$(window).scroll(function() { 
var top = $(window).scrollTop()+300; 
var left= $(window).scrollLeft()+1060; 
$("#editInfos").css({ left:left + "px", top: top + "px" }); 
}); 
}); 