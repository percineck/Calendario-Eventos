<?php

require_once '../../../wp-load.php';
header("Content-Type: text/css");
//require_once '../../../../wp-includes/functions.php';
?>
:root {
		
		--cor-1:#333333; /* = Cinza Escuro */
		--cor-2:#e2e1e0; /* = Cinza */
		--cor-3:#eeeeee; /* = Cinza claro */
		--cor-4:#ffffff; /* = Branco */
		--cor-5:#01913a; /* = Verde */
		--cor-6:#e00b1c; /* = Vermelho */
		--cor-7:#fdea14; /* = Amarelo */
		--cor-8:#3399cc; /* = Azul (TI) */
	
		--sombra-box: 0 3px 4px 0px rgba(50, 50, 50, 0.5);
		--sombra-hover: 0 6px 10px 0px rgba(50, 50, 50, 0.75)
	}
	
	@charset "utf-8";
	/* CSS Document */
	
	@font-face { font-family: Panton-SemiBold; src:url("./fonts/Panton-SemiBold.otf");}
	@font-face { font-family: Panton-SemiBold-Italic; src:url("./fonts/Panton-SemiBold-Italic.otf");}
	@font-face { font-family: Panton-Bold; src:url("./fonts/Panton-Bold.otf");}
	@font-face { font-family: Panton-ExtraBold; src:url("./fonts/Panton-ExtraBold.otf");}
	@font-face { font-family: Panton-Black; src:url("./fonts/Panton-Black.otf");}
	
	
	
	body {font-family: Panton-SemiBold; color: #333333;background-color: white;}
	
	a, p{font-family: Panton-SemiBold;}
	
	h1, h2{font-family: Panton-Black;}
	
	h3, h4{font-family: Panton-ExtraBold;}
	
	h5, h6{font-family: Panton-Bold;}
	
<?php //---------------------------------                WPADMIN                   -----------------------------------------------------------------------------------------?>

#login h1 a, .login h1 a {
	background-image: url('./images/2-03.png');
	height:200px;
	width:200px;
	margin: 0;
	background-size: 200px;
	background-repeat: no-repeat;
	display:none!important;
}


#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	background-image: url('./images/logo.png') !important ;
	background-size: 20px 20px;
	background-repeat: no-repeat;
	background-position: 0 0;
	color:rgba(0, 0, 0, 0);
}
#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: 0 0;
}
.edit-post-header .edit-post-fullscreen-mode-close svg {
    display:none!important;
}

.edit-post-header a.edit-post-fullscreen-mode-close {
    background-image: url('./images/logo.png')!important;
    background-size:40px 40px; background-repeat:no-repeat!important;
    background-position: center;
    background-color:white;
    display:block;
}
.components-site-card svg{
	display:none!important;
}

<?php //---------------------------------                WPADMIN                   -----------------------------------------------------------------------------------------?>

<?php //---------------------------------                login                   -----------------------------------------------------------------------------------------?>

.global-container{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #333333;
}

.login-form{
	padding-top: 10px;
    font-size: 14px;
    margin-top: 30px;
    background-color: #eeeeee;
    width: 500px;
    height: 330px;
    margin: 5px;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2), 0 6px 5px rgba(0, 0, 0, 0.10);
}

.card-title{
    font-weight: 900;
    padding-top: 20px;
}

.btn{
    margin-bottom: 15px;
    background: #333333;
    font-size: 14px;
    border: none;
    border-radius: 10px;
}

.signup{
    text-align: center;
    padding-top: 25px;
}

.principal{
	box-shadow: 2px 2px 2px rgba(0,0,0,0.2), 0 6px 5px rgba(0, 0, 0, 0.10);
	background-color: #333333; 
	text-align:left!important;
	color: white; 
	padding: 20px; 
	font-size: 40px;
	padding-left: 5%;
}
#login{
	padding-top:0px;
	margin:0 0 0 0;
	width:100%
}
#login_error,
#login p.message,
#login #nav, 
#login  #backtoblog{
	width:480px;
	margin-left:auto!important;
	margin-right:auto!important;
}
#loginform,#lostpasswordform{ 
	background-color:#eeeeee;
	width:480px;

	height:auto;
	margin-left:auto!important;
	margin-right:auto!important;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2), 0 6px 5px rgba(0, 0, 0, 0.10);
}
#user_pass,#user_login{
	outline: none;
    border: 0.1px solid #333333;
    
    border-radius: 10px;
    margin-bottom: 25px;
} 
#user_pass:focus{ 
	background-color:#AED6F1;
}
#user_login:focus{ 
	background-color:#AED6F1;
}
#loginform p input[type="submit"]{ 
	background-color:#212529;
}
#loginform p input[type="submit"]:hover{ 
	background-color:#0d6efd;
}
#loginform p input[type="submit"]:hover{ 
	background-color:#0d6efd;
}
div.menssagerestrict{
    padding: 10px;
	font-family: Panton-Black;
    font-size: 20px;
    text-align: center;
    background-color: #3399cc;
    max-width: 500px; 
    color: white;
    margin: auto;
    border-radius: 10px;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2), 0 6px 5px rgba(0, 0, 0, 0.10);
}
div.loginbluebar{      
	background-color: #3399cc;
	height:17px;
	background: #3399cc; 
	background: -moz-linear-gradient(top,  #2f97cb 0%, #2989d8 66%, #0f2f40 100%);
	background: -webkit-linear-gradient(top,  #2f97cb 0%,#2989d8 66%,#0f2f40 100%); 
	background: linear-gradient(to bottom,  #2f97cb 0%,#2989d8 66%,#0f2f40 100%); 
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2f97cb', endColorstr='#0f2f40',GradientType=0 );
    width: 100%!important;
    margin-top: 50px;
    margin-bottom: 50px;
    margin-left: 0px!important;
    margin-right: 0px!important;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2), 0 6px 5px rgba(0, 0, 0, 0.10);
}

div.helpme{
    background-color: #eeeeee; 
    max-width: 300px;margin: auto; 
    margin-top: 30px; margin-bottom: 0; 
    border-radius: 10px; 
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2), 0 6px 5px rgba(0, 0, 0, 0.10); color: #333333;
}
<?php //---------------------------------                login                   -----------------------------------------------------------------------------------------?>

/*################################################################################################################################################################*/


/* Linha Horizontal Padrão */
.separator-green{
	margin: 5px auto 5px auto;
	width: 100%;
	height: 5px;
	background-color: #01913a;
	color: inherit;
	border: 0px;
  	opacity: 100;
	 
	padding: 1px;
}
/* Fim Linha Horizontal Padrão */

/* Tabela */

table.table-link-file-upload-box thead{
	border: #333333;
	background-color: #333333;
	color: white;
}

table.table-link-file-upload-box tr{
	margin: 0px;
	padding: 0px;
	vertical-align: middle;
	text-align:center;
}
table.table-link-file-upload-box tr td{
	padding: 8px;
	vertical-align: middle;
	text-align:center;
}
table.table-link-file-upload-box tr td input{
	width:100%;
	height:25px;
	border:0px;
	background-color:transparent;
	color:inherit;
	text-align:center;
}
table.table-link-file-upload-box  tr td.btn-exibir{
	width:41px;
}
table.table-link-file-upload-box  caption{
	margin-top: 20px;
	border-radius: 8px 8px 0 0; 
	background-color: #01913e; 
	color: white; text-align: center; 
	margin-bottom: 0;
	height:40px;
	caption-side: top;
}
table.table-link-file-upload-box  caption label{
	background-color: #01913e; 
	color: white; text-align: center; 
	/* Firefox */
	width: -moz-calc(100% - 50px);
	/* WebKit */
	width: -webkit-calc(100% - 50px);
	/* Opera */
	width: -o-calc(100% - 50px);
	/* Standard */
	width: calc(100% - 50px)
}
table.table-link-file-upload-box  caption input{
	width:100%;
	border:0px;
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-file-upload-box  caption input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-file-upload-box  caption input::-moz-placeholder { /* Firefox 19+ */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-file-upload-box  caption input:-ms-input-placeholder { /* IE 10+ */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-file-upload-box  caption input:-moz-placeholder { /* Firefox 18- */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-file-upload-box  button{
	font-family: panton-bold;
	border: 0;
	margin: 0px;
	padding: 0px;
	height: 30px;
	width: 30px;
	box-shadow: 0 3px 4px 0px rgba(50, 50, 50, 0.5);
}

table.table-link-box thead{
	border: #333333;
	background-color: #333333;
	color: white;
}

table.table-link-box tr{
	margin: 0px;
	padding: 0px;
	vertical-align: middle;
	text-align:center;
}
table.table-link-box tr td{
	padding: 8px;
	vertical-align: middle;
	text-align:center;
}
table.table-link-box tr td input{
	width:100%;
	height:25px;
	border:0px;
	background-color:transparent;
	color:inherit;
}
table.table-link-box tr td.btn-exibir{
	min-width:41px;
	width:50px;
}
table.table-link-box  caption{
	margin-top: 20px;
	border-radius: 8px 8px 0 0; 
	background-color: #01913e; 
	color: white; text-align: center; 
	margin-bottom: 0;
	height:40px;
	caption-side: top;
}
table.table-link-box  caption label{
	background-color: #01913e; 
	color: white; text-align: center; 
	/* Firefox */
	width: -moz-calc(100% - 50px);
	/* WebKit */
	width: -webkit-calc(100% - 50px);
	/* Opera */
	width: -o-calc(100% - 50px);
	/* Standard */
	width: calc(100% - 50px)
}

table.table-link-box caption input{
	width:100%;
	border:0px;
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-box  caption input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-box  caption input::-moz-placeholder { /* Firefox 19+ */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-box  caption input:-ms-input-placeholder { /* IE 10+ */
	background-color:transparent!important;
	color:white;
	text-align:center;
}
table.table-link-box  caption input:-moz-placeholder { /* Firefox 18- */
	background-color:transparent!important;
	color:white;
	text-align:center;
}

table.table-link-box button{
	font-family: panton-bold;
	border: 0;
	margin: 0px;
	padding: 0px;
	height: 30px;
	width: 30px;
	box-shadow: 0 3px 4px 0px rgba(50, 50, 50, 0.5);
}
.mime-types *{
	margin: 8px;
	height:16px;
	width:16px;
	display:block;
}
.mime-types .jpg,.png{
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/image-x-generic.png');
}
.mime-types .pdf{
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/application-pdf.png');
}
.mime-types .xls, .xlsx, .ods  {
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/application-vnd.ms-excel.png');
}

.mime-types .ppt, .pptx, .odp {
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/application-vnd.ms-powerpoint.png');
}

.mime-types .doc, .docx, .odt {
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/application-msword.png');
}
.mime-types .zip, .rar {
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/application-zip.png');
}
.mime-types .avi, .mp4, .m4v, .mpeg, .mpg, .swf, .wmv, .asf,{
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/audio-vn.rn-realmedia.png');
}
.mime-types .exe, .msi, .bat, .sh, .bin {
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/application-x-executable.png');
}
.mime-types .mp3, .wma, .ogg, .aac, .wav, .aiff, .pcm, .flac,{
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/audio-x-wav.png');
}
.mime-types .mp3, .wma, .ogg, .aac, .wav, .aiff, .pcm, .flac,{
	background-image:url('./images/oxygen-icons-master/16x16/mimetypes/audio-x-wav.png');
}

/* Fim Tabela */

/* Botões  grande */
.wp-block-buttons{
	height:auto;
	background-color:#eeeeee;
	padding:10px 10px 10px 10px!important;
	border-style: none;
	border-radius: 10px;
	border-color: none;
	margin-top:15px;
	display: flex;
	align-items: center;
}
.wp-block-buttons .wp-block-button{
	 
	height:80px;           
	
	/* Firefox */ 
	min-width: -moz-calc(20% - 7px); 
	/* WebKit */
	width: -webkit-calc(20% - 7px);
	/* Opera */
	min-width: -o-calc(20% - 7px);
	/* Standard */
	min-width: calc(20% - 7px);
	width:auto;
	padding:0 0 0 0!important;
	margin:0 0 0 0!important;
}
.wp-block-buttons .wp-block-button .wp-block-button__link{
	
	display: flex; 
	align-items: center;
	justify-content: center;
	color:#333333!important;
	text-align: center; 
	background-color:white!important ;
	height:80px;
	width: 100%;
	padding: 0 0 0 0!important;
	margin-top: 50!important;
	margin-bottom: 0!important;
	margin-left: 0!important;
	margin-right: 0!important;
	border-radius: 5px;
}

.wp-block-buttons .wp-block-button  .wp-block-button__link:hover{
	color:white !important;
	background-color:#01913a!important;
}
.wp-block-buttons .wp-block-button  .wp-block-button__link:focus{
	color:#333333;
	background-color:white ;
}


/* Botões fim  grande*/


/* menu destaque inicio*/

/* menu destaque */

.menu_destaque{
	text-align: center;
	background-color: #EEEEEE;
	padding: 10px 0px 10px 0px;
	box-shadow: 0px 5px 5px 0px #333333;
}

.menu_destaque_btn{
	background-color: #fff;
	color: #333333;
	border-radius: 8px;
	padding: 5px;
	margin: 5px;
	width: 150px;
	height: 150px;
	max-width: 150px;
	box-shadow: 0px 3px 6px -2px #333333;
}

.menu_destaque_btn:hover{
	background-color: #01913a;
	color: #fff;
	box-shadow: 0px 6px 6px -2px #333333;
	fill: #ffffff;
}

.menu_destaque_btn .cor-1{
	fill: ;
}
.menu_destaque_btn .cor-2{
	fill: ;
}

.menu_destaque_btn:hover .cor-1{
	fill: #fff;
}
.menu_destaque_btn:hover .cor-2{
	fill: #333333;
}

.menu_destaque_btn img, svg{
	max-width: 100%;
	height: 80px;
}

.menu_destaque_btn:hover svg:hover, path:hover{
		fill: #ffffff;
}

.menu_destaque_btn .txt{
	padding: 2px;
	margin: 5px;
	max-height: 80px;
	max-width: 150px;
	text-decoration: none;
	text-align: center;
	justify-content: center;
	line-height: 1;
	
	
}


/* menu destaque fim*/
button.tooButton{
	font-family: panton-bold;
	border: 0;
	margin: 0px;
	padding: 0px;
	height: 30px;
	width: 30px;
	box-shadow: 0 3px 4px 0px rgba(50, 50, 50, 0.5);
}

button.tooButton:hover{
	font-family: panton-bold;
	box-shadow: 0 6px 10px 0px rgba(50, 50, 50, 0.75);
}

/* Botões da NavBar */

.btn-social{
	margin: 3px;
	background: #eee;
	color: #333333;
	border-style: none;
	border-radius: 5px;
	border-color: none;
}

.btn-social:hover{	
	background: #01913A;
	color: #fff;
}

.btn-social-text{
	margin: 0px;
	padding: 10px;
	width: auto;
	font-size: 10px;
}

.btn-social-text:hover{
	background: #01913A;
	color: #fff;
}

.btn-social-op{
	width: 50px;
	background: #01913A;
	color: #fff;
}

.btn-social-op:hover{
	background: #fff;
	color: #01913A;
}

/* Bloco de Botões */

.block{
	background-color: #EEEEEE;
	border-radius: 12px;
	padding: 10px;
	margin: auto;
}

.btn-tab{
	padding: 0;
	margin: 3px;
	background: #fff;
	color: #333333;
	border-style: none;
	border-radius: 5px;
	border-color: none;
}

.btn-tab:hover{
	background: #01913a;
	color: #fff;
}

.btn-btn{
	padding: 0;
	margin: 3px;
	background: #fff;
	color: #333333;
	border-style: none;
	border-radius: 5px;
	border-color: none;
	height: auto;
	width: auto;
}

.btn-btn:hover{
	background: #01913a;
	color: #fff;
}
.bloco-full{
	width: 100%;
	padding-right: 0.75rem;
	padding-left: 0.75rem;
	margin-right: auto;
	margin-left: auto;
}

/* Itens da Navbar (header) */

.cortema-1, .cortema-2:hover{
	background-color: #eeeeee !important;
	color: #333333 !important;
}

.cortema-2, .cortema-1:hover{
	background-color: #01913A !important;
	color: #ffffff  !important;
}

.navbar{
	padding-top: 0!important;
  	padding-bottom: 0 !important;
	background-color: #333333 !important;
	box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 5px 0 rgba(0, 0, 0, 0.19);
}

.topnav{
	background-color: red;
}

.nav-item{
	padding: 11px;
	margin: 0;
	font-size: 15px;
}

.nav-item:hover{
	background-color: #01913A;
}

.navbar-brand{
	padding: 11px;
	margin: 0;
	font-size: 15px;
}


.dropdown:hover .dropdown-menu {
    display: block;
    position: absolute;
    transform: translate3d(0px, 38px, 100px); /* distancia entre menu e btn */
    top: 0px;
    left: 0px;
	will-change: transform;
	
}

.navbar-full .dropdown-menu {
    position: absolute ;
    left: 0 !important;
    right: 0 !important;

}

.navbar-full .dropdown, .navbar-full .navbar-nav .nav-item.dropdown {
    position: static !important;
	padding: 11px !important;
}

.subnvabar {
	background-color: #01913A;
	box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 6px 5px 0 rgba(0, 0, 0, 0.19);
	padding: 9px;
	margin: 0px;

}

.dropdown-menu {
  position: absolute;
  z-index: 1000;
  display: none;
  min-width: 0rem;
  padding: 0rem 0;
  margin: 0;
  font-size: 0rem;
  color: #333333;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 0px solid rgba(0, 0, 0, 0.15);
  border-radius: 0rem;
}

.navbar-item{
	color: #fff;
	padding: 11px;
	margin: 0;
	font-size: 15px;
	text-decoration: none;
  	white-space: nowrap;
}

.navbar-item:hover{
	background-color: #FFFFFF;
	color: #333333;
}

.input-form{
	text-align: center;
	border-color: white;
	border-radius: 8px;
}

.input-group-text{
	text-align: center;
	border-radius: 8px;
	box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2), 0 6px 5px 0 rgba(0, 0, 0, 0.10);
}

.align-vertical{
	margin: auto;
}




/* Bloco de Título*/

.titulo a{
	color: #333333;
	font-size: 70px;	
}


/* Bloco de Imagem*/

.image_description{
	text-align: start;
	font-size: 12px;
}
.image_counter{
	margin: 10px 0px 0px 0px;
	text-align: end;
}

/* Bloco de texto*/



.text_block{
	text-align: start;
	color: #333333;
}

.text_block{
	margin: 0 50px 0 50px;
	text-align: start;
	color: #333333;
}

.text_block h3, h4{
	color: #01913a;
	margin: 0 0 0 40px;
	text-transform: uppercase;
	margin-top: 5px;
}

.text_block div p{
	text-align: justify;
	text-indent: 1.5cm;
	word-spacing: 1px;
	margin-top: 0px; 
	margin-left: 3px;
	margin-bottom: 5px;
	margin-right: 2px;
	line-height: 150%;
} /*plugin pronto*/

/* .home_news .img_news .text_news */
.news{
	align-content: center;
	margin-left: 150px;
	margin-right: 150px; 
	height: 600px;
	background-color: none;
}
.news .space{
	height: 5%;
}
.news .bloco-1{
	max-height: 600px;
	width: 100%;
	background-color: #fff;
	position: relative;
	align-items: center;
	justify-content: center;
	display: flex;
	background-size: cover;
	
}
.news .bloco-2{
	margin-bottom:20px;
	height: 290px;
	width: 100%;
	background-color: #fff;
	position: relative;
	align-items: center;
	justify-content: center;
	display: flex;
	background-size: cover;
}

.news .bloco-3{
	
	height: 290px;
	width: 100%;
	background-color: #fff;
	position: relative;
	align-items: center;
	justify-content: center;
	display: flex;
	background-size: cover;
}

.news img{
	max-width: 100%;
	width: 100%;
	height: 100%;
	object-fit: cover;
	object-position: bottom;
	
}
.news .shadow{
	background-image: linear-gradient(to top, #333333 20%, transparent 60%);
	width: 100%;
	height: 100%;
	opacity: 0.7;
	position: absolute;
}

.news .text{
	position: absolute;
	max-width: 500px;
	color: #FFFFFF;
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
	line-height: 1.4;
}

.news .title-1 {
	font-size: 30px;
	margin-top: 190px ;
	text-shadow: 1px 2px 3px #333333;
	font-family: panton-bold;
	-webkit-line-clamp: 4;
	text-transform: uppercase;

}

.news .cat-1{
	margin-top: -285px ;
	font-size: 16px;
	text-shadow: 1px 2px 3px #333333;
	font-family: Panton-SemiBold;
}

.news .date-1{
	margin-top: -267px ;
	font-size: 10px;
	text-shadow: 1px 2px 3px #333333;
	font-family: Panton-SemiBold;
}

.news .title-2 {
	font-size: 20px;
	margin-top: 90px ;
	text-shadow: 1px 2px 3px #333333;
	font-family: panton-bold;
	text-transform: uppercase;

}

.news .cat-2{
	margin-top: -130px ;
	font-size: 16px;
	text-shadow: 1px 2px 3px #333333;
	font-family: Panton-SemiBold;
}

.news .date-2{
	margin-top: -113px ;
	font-size: 10px;
	text-shadow: 1px 2px 3px #333333;
	font-family: Panton-SemiBold;
}

.home_img{
	height: auto;
	width: 100%;
	background-color: #DC1216;
	position: relative;
	align-items: center;
	justify-content: center;
	display: flex;
	background-size: cover;
}
/* .home_news .img_news .text_news */


/* card inicio */
.tooCard {
      box-shadow: 0 1px 10px 0.1px #999999;
      position: relative;
      border-radius: 10px;
      margin: 15px;
      float: left;
      object-fit: cover;
      max-width: 100%;
      max-height: 100%;
    }

    .tooCard:hover {
      box-shadow: 0 4px 12px 0.75px #666666;
      cursor: pointer;
      transition: 0.5s;
    }

    .tooCardImg {
      position: relative;
      padding: 0;
      max-width: 100%;
      max-height: 100%;
      width: 450px;
      height: 250px;
      object-fit: cover;
      object-position: bottom right;
    }

    .tooCardImg img {
      border-radius: 10px 10px 0 0;
      max-width: 100%;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: bottom;
    }

    .tooCardTxt {
      display: block;
      padding: 10px;
    }

    .tooCardTxt h2 {
      margin-top: 10%;
      margin-bottom: 5%;
      text-align: center;
    }

    .tooCard :hover {
      color: #01913a;
    }


    .tooCardTxt h6 {
      float: left;
      text-align: left;
      width: 50%;
    }

    .tooCardTxt h5 {
      float: right;
      text-align: right;
      width: 50%;
    }

    .tooCardTxt h5:hover {
      color: #333333;
    }

/* card fim */
/* roda-pé - footer */

.footer h4{
	color: #01913a;
	font-size: 20px;
	margin: 5px;
	padding: 0px;
}

.footer a, p{
	color: #333333;
	font-size: 14px;
	margin: 0px;
	padding: 0px;
	text-decoration: none;
}

.linha-horizontal{
	align-content: flex-end;
	margin: 5px auto 5px auto;
	width: 80%;
	height: 30px;
	background-color: #01913a;
	color: inherit;
	border: 0px;
  	opacity: 100;
	max-width: 2%; 
	padding: 2px;
	margin-top: 30px;
	margin-bottom: 20px;
}

.hr-vertical{
	border-right: 1px solid;
	border-color: #01913a;
}

/* Tabela */




/* Notícia */

.noticia-r{
     background-color: #e2e1e0; 
     border-radius: 10px; 
     padding: 10px;
     margin: 10px 0px 10px 0px; 
}

.not-category{
	font-size: 12px;
	text-align: left;
	color: #01913a;
}

.not-date{
	font-size: 12px;
	text-align: right;
	color: #333333;
}

.not-title{
	font-size: 20px;
	max-width: 500px;
	text-align: center;
	color: #333333;
	margin-top: 10px;
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
	line-height: 1.4;
}

@media only screen and (max-width: 767px) {

h1{
	text-align: center;
}
	
.line-1{
	margin: auto;
	max-width: 80%;
	float: left;
}
	
.teste-1{
	max-width: 100%;
}
	
.not-date, .not-category, .not-title, .noticia-r{
	text-align: center;
	max-width: 200px;
	font-size: 12px;

}

