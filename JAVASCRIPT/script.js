function _(id) {
  return document.getElementById(id);
}
 var li1 = _("menuCat1");
 var li2 = _("menuCat2");
 var li3 = _("menuCat3");
 var li4 = _("menuCat4");
 var m1 =  _("discover-menu-content-1");
 var m2 =  _("discover-menu-content-2");
 var m3 =  _("discover-menu-content-3");
 var m4 = _("discover-menu-content-4");

function menuFunctionOne(){
	li1.classList.add("menu-selected");
	li2.classList.remove("menu-selected");
	li3.classList.remove("menu-selected");
	li4.classList.remove("menu-selected");
	m1.style.display = "block";
	m2.style.display = "none";
	m3.style.display = "none";
	m4.style.display = "none";
}

function menuFunctionTwo(){
	li1.classList.remove("menu-selected");
	li2.classList.add("menu-selected");
	li3.classList.remove("menu-selected");
	li4.classList.remove("menu-selected");
	m1.style.display = "none";
	m2.style.display = "block";
	m3.style.display = "none";
	m4.style.display = "none";
}

function menuFunctionThree(){
	li1.classList.remove("menu-selected");
	li2.classList.remove("menu-selected");
	li3.classList.add("menu-selected");
	li4.classList.remove("menu-selected");
	m1.style.display = "none";
	m2.style.display = "none";
	m3.style.display = "block";
	m4.style.display = "none";
}

function menuFunctionFour(){
	li1.classList.remove("menu-selected");
	li2.classList.remove("menu-selected");
	li3.classList.remove("menu-selected");
	li4.classList.add("menu-selected");
	m1.style.display = "none";
	m2.style.display = "none";
	m3.style.display = "none";
	m4.style.display = "block";
}


function openLightBox(){
	_("light-box-container").style.display="block";
	_("main-wrapper").styl.display="none";
}
function closeLightBox(){
	_("light-box-container").style.display="none";
	_("main-wrapper").styl.display="block";
}
