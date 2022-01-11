<style type="text/css">

html{
	scroll-behavior: smooth;
}
	
*{ margin: 0; padding: 0; box-sizing: border-box;font-family: 'muli', sans-serif; }

#navbarSupportedContent{font-size:20px;
	}

#messagesec{
	color:#1FE53A;
}


.colorchange{
	animation:  colorchangethapa 1s infinite;
	font-size:20px;
}

@keyframes colorchangethapa{
	0%{color: red;}
	25%{color:#bf55ec; ;}
	50%{ color: white; }
	100%{ color:#bf55ec;  }
}


table {
    border: 1px solid #ccc;
    width: 100%;
    margin:0;
    padding:0;
    border-collapse: collapse;
    border-spacing: 0;
  }

  table tr {
    border: 1px solid #ddd;
    padding: 5px;
		background: #fff;

  }

  table th, table tbval{
    padding: 10px;
    text-align: center;

  }

  table th {
    text-transform: uppercase;
    letter-spacing: 1px;
  } 

@media only screen and (max-width: 800px) {
	
	#flip-scroll .cf:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
	#flip-scroll * html .cf { zoom: 1; }
	#flip-scroll *:first-child+html .cf { zoom: 1; }
	
	#flip-scroll table { width: 100%; border-collapse: collapse; border-spacing: 0; }
 
	#flip-scroll th,
	#flip-scroll tbval { margin: 0; vertical-align: top; }
	#flip-scroll th { text-align: left; }
	
	#flip-scroll table { display: block; position: relative; width: 100%; }
	#flip-scroll thead { display: block; float: left;}
	#flip-scroll tbody { display: block; width: auto; position: relative; overflow-x: auto; white-space: nowrap; }
	#flip-scroll thead tr { display: block; }
	#flip-scroll th { display: block; text-align: right; }
	#flip-scroll tbody tr { display: inline-block; vertical-align: top; }
	#flip-scroll tbval{ display: block;  text-align: left; }
 
}
.btn{
	display: inline-block;
	padding: 5px 20px;
	font-weight: lighter;
	text-decoration: none;
	text-transform: uppercase;
	border-radius: 200px;
	transition: background-color 0.2s, border 0.2s, color 0.2;
}

.btn-full{
	background-color: transparent;
	color: #bf55ec;
	font-size:20px;
	margin-right: 15px;
	margin-top:5px;
	border: 1px solid #bf55ec;
}

.btn-full:hover{
	background-color: #fb2056;
	color:white;
}

.btn-nav{
	background-color: #fb2056;
	font-size:20px;
	color: #fff;
	margin-left: 15px;
	margin-top:5px;
	border: 1px solid #fff;
}

.btn-nav:hover{
	background-color: #bf55ec;
	color:white;
}


.btn-sub{
	background-color: white;
	font-size:20px;
	color: #fb2056;
	margin-left: 15px;
	margin-top:5px;
	border: 1px solid #fb2056;
}

.btn-sub:hover{
	background-color: #bf55ec;
	color:white;
}


.row{ margin-left: 0!important; margin-right: 0!important; }

.nav_style{
	background-color:#1FE53A!important;
}

.nav_style a{ color: white; }

/*////////////// main header \\\\\\\\\\\\\\*/

.main_header{
	height: 450px;
	width: 100%;
}



.rightside h1{
	font-size: 3rem;
}

.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0% { transform: rotate(0); }
	100% { transform: rotate(360deg); }
}

.leftside img{ animation: heartbeat 5s linear infinite; }

@keyframes heartbeat
{
  0%
  {
    transform: scale( .75 );
  }
  20%
  {
    transform: scale( 1 );
  }
  40%
  {
    transform: scale( .75 );
  }
  60%
  {
    transform: scale( 1 );
  }
  80%
  {
    transform: scale( .75 );
  }
  100%
  {
    transform: scale( .75 );
  }
}



/************** corona update *************/

.corona_update{
	margin: 0 0 30px 0;
}

.corona_update h3{ color: red; }

.corona_update h1{ font-size: 2rem; text-align: center; }


/*////////////// about section //////////////*/

.sub_section{
	background-color: #fbfafd;

}

/*//////////////// footer //////////*/

.footer_style p{
	margin-bottom: 0!important;
}

.footer_style{
	background-color: #1FE53A!important;
	font-size:20px;
}



/***************** top scroll **************/
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 30px; /* Place the button at the bottom of the page */
  right: 40px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #00A8FF; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 10px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
}

#myBtn:hover {
  background:  #606060 ; /* Add a dark-grey background on hover */
}


/*//////////// responsive //////////////*/


@media(max-width:768px){
	.main_header{ height: 700px; text-align: center; }

	.main_header h1{     
	text-align: center;
    padding: 0;
    width: 100%;
    font-size: 30px; }


    .count_style{
    	display: inline!important;
    }

    .count_style p{ text-align: center; }

    .about_res{ margin-left: 0!important;}
		
	.preventation_res{text-align: center;}
	
	.btn-full{
		margin-left: 15px;
		margin-top:15px;
	}
}


</style>