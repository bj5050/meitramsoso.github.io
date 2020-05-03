<style type="text/css">

	

	html{
		scroll-behavior: smooth;
	}

*{margin: 0;  padding: 0;box-sizing: border-box;font-family: 'Muli', sans-serif;}

.nav_style {

	background-color: purple;
}
.nav_style a{ color: white; }
/*main header*/
.main_header{

	height: 450px;
	width: 100%;

}
.rightside h1{
font-size: 3rem;
}
.corona_rotate img{
	animation: corona 3s linear infinite;
}
@keyframes corona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}
.leftside img{ animation:heartbeat 5s linear infinite; }

@keyframes heartbeat{
	0% { transform: scale(.75); }
	20% { transform: scale(1); }
	40% { transform: scale(.75); }
	60% { transform: scale(1); }
	80% { transform: scale(.75); }
	100% { transform: scale(1); }
}
/************* corona update ***************/
.corona_update{

	margin: 0 0 30px 0;
}
.corona_update h3{

	color: red;
}
.corona_update h1{

	font-size: 2rem;text-align: center;
}
/*///////////////// about section////////////////////*/
.sub_section{
	background-color: #FF6347;
}
.sub_section { color: white; }



/*//////////////////footer//////////////////////*/

.footer_style{
	background-color: purple !important;
}

.footer_style {
	color: white;
}

.footer_style p{
	margin-bottom: 0!important;
}
/*///////////////////////responsive////////////////////////////*/

@media(max-width: 768px){

.main_header{height: 700px;text-align: center;}

.main_header h1{

	text-align: center;
	padding: 0;
	width: 100%;
	font-size: 30px;
}


}

</style>