<style>

body{
	background-color: #dedede;
	color: black;
	font-family: 'calibri';
	font-size: 13px;
}

.sidebar{
	position:fixed;
	width: 20%;
	height: 100%;
	margin-left:0px;
	margin-top:0px;
	background-color: #0099cc;
	border-right:2px solid grey;
	color: black;
	padding: 18px 15px;
}
.sidebar-school-id{
	font-size: 20px;
	color: maroon;
}
.sidebar-school-name{
	font-size: 15px;
	color: white;
}
.sidebar-school-address{
	font-size: 12px;
	color: white;
}
.nav-top{
	position:fixed;
	width: 80%;
	height: 45px;
	margin-left:20%;
	margin-top:0px;
	background-color: maroon;
	border-bottom:2px solid grey;
	color: white;
	z-index:1;
	}
.nav-top-left{
	position: absolute;
	height:100%;
	width: 50%;
	line-height:45px;
	padding:0px 7px;
	font-size: 15px;
	font-weight: bold;
	background-color: transparent;
	color: white;
}
.nav-top-right{
	position: absolute;
	height:100%;
	width: 50%;
	margin-left:50%;
	background-color: transparent;
	line-height:45px;
	color: white;
}

.page-wrapper{
	position: absolute;
	z-index: 0;
	margin-top: 20px;
	margin-left:20%;
	padding:10px 14px;
	}
.page-content{
	position: relative;
	background-color: transparent;
	width:1050px;
	margin-top:5px;
	padding-bottom:45px;
	}

.page-content-body{
	position: absolute;
	background-color: white;
	width:800px	;
	padding:10px 0px;
	margin-top:20px;
	margin-bottom:45px;
	margin-left:250px;
	padding-bottom:45px;
	}
.page-content-body-whole{
	position: absolute;
	background-color: white;
	width:1050px	;
	padding:5px 14px;
	margin-top:65px;
	margin-bottom:65px;
	}
.page-content-body-box{
	font-size: 13px;
	color: black;
	background-color:  transparent;
	padding:0px 5px;
	margin-top:10px;
}
.page-content-menu-tab{
	position: absolute;
	background-color: #0099cc;
	width:100%;
	margin-top:0px;
	margin-left:0px;
	padding: 5px;
	padding-top:17px;
	}

.content-title{
	font-size: 20px;
	color: white;
	background-color:  #0099cc;
	padding:5px 15px;
	}
.content-sub-title{
	font-size: 17px;
	color: white;
	background-color:  maroon;
	padding:5px 15px;	
	font-weight:bold;
	}
.logo-sm{
	width:100px;
	height: 100px;
	border-radius:50%;
	text-align: center;
	box-shadow: 0px 2px 5px rgba(0,0,0,0.7);
	}
.logo-lg{
	width:130px;
	height: 130px;
	border-radius:50%;
	text-align: center;
	box-shadow: 0px 2px 5px rgba(0,0,0,0.7);
	}




.h1{
	border-bottom: 2px solid rgba(127,127,127,0.5);
	}
.btn{
	border-radius: 0px;
	}
.btn-nav{
	background-color: transparent;
	border:none;
	border-bottom:1px solid white;
	color: #222;
	font-size:13px;
	font-weight: bold;
	margin-top:-1px;
	padding: 8px 10px;
	text-align:left;
	width: 100%;
}
.btn-nav .fa{
	color: maroon;
	}

.btn-nav:hover{
	background-color: lightgrey;
	}
.btn-nav:active{
}
	
.nav-top .btn-nav .fa{
	color: white;
	}
.nav-top .btn-nav{
	background-color: transparent;
	border:none;
	color: #fff;
	font-size:13px;
	font-weight: bold;
	margin-top:2px;
	margin-bottom:2px;
	padding: 8px 10px;
	text-align:left;
	float:left;
	width:auto;
}

.nav-top .btn-nav:hover{
	border-left:2px solid white;
	border-bottom:1px solid white;
	color: #0099cc;
}
.nav-top .btn-nav:focus{
	border-left:2px solid white;
	border-bottom:1px solid white;
	outline:none;
	color: #0099cc;;
}
.btn-search {
	line-height:25px;
	padding:4px 6px;
	border: none;
	margin-left:-3px;
	border-radius:0px 3px 3px 0px;
	background-color: transparent;
	border:1px solid white;
	font-weight: bold;
	}
.btn-search:click{
	}
.btn-report{
	width: 120px;
	margin: 5px;
	margin-left: 5px;
	background-color: transparent;
	border: none;
	
}
.btn-report:hover{
	color: maroon;
}
.btn-report:focus,
.btn-report:active:focus,
.btn-report.active:focus,
.btn-report.focus,
.btn-report:active.focus,
.btn-report.active.focus {
	outline: none;
}
.btn-report .fa{
	font-size: 75px;
	color: yellow;
	transform: rotate(-60deg);
	transform-origin: 45% 45%;
	text-shadow:-2px 2px 2px black;
}
.btn-report .fa:hover{
	color: maroon;
}
.no-br {
	border-radius: 0px;
}
	
.input-line{
	background-color: transparent;
	border: none;
	border-bottom: 2px solid lightgrey;
	width: 100%;
	padding-top:5px;
	padding-left:2px;
	padding-bottom: 0px;
	}
.input-line-mg{
	background-color: transparent;
	border: none;
	border-bottom: 2px solid lightgrey;
	width: 85%;
	margin-left:15%;
	padding-top:5px;
	padding-left:2px;
	padding-bottom: 0px;
	}
.input-search{
	line-height:25px;
	width:400px;
	padding:5px;
	border:none;
	border-radius:3px 0px 0px 3px;
	}
.input-search:focus, .input-line:focus, .input-line-mg:focus{
	outline: none;
	}
.msg{
	font-size: 13px;
	font-family: 'Calibri';
	text-align:left;
	}
.msg p{
	text-indent: 35px;
}
.msg-error{
	color: red;
	}
.msg-warning{
	color: orange;
}
.msg-success{
	color: green;
}
.ctr{
	text-align: center;
	}
.no-pd{
	padding:0px;
	}
.pd-5{
	padding:5px;
	}
.pd-left-5{
	padding-left:5px;
	}
	
th{
	text-align: center;
	vertical-align: middle;
	padding: 3px 10px;
}
td{
	padding: 3px 0px;
}
@media print{
	.sidebar,.hide-on-print, .nav-top{
		display:none;
	}
	.page-content-body,.page-wrapper{
		margin-left:0px;
		width:100%;
	}
}
</style>