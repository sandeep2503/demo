<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #04AA6D;
}
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-confirm {		
		color: #636363;
		width: 325px;
	}
	.modal-confirm .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-confirm .modal-header {
		border-bottom: none;   
        position: relative;
	}
	.modal-confirm h4 {
		text-align: center;
		font-size: 26px;
		margin: 30px 0 -15px;
	}
	.modal-confirm .form-control, .modal-confirm .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-confirm .close {
        position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-confirm .modal-footer {
		border: none;
		text-align: center;
		border-radius: 5px;
		font-size: 13px;
	}	
	.modal-confirm .icon-box {
		color: #fff;		
		position: absolute;
		margin: 0 auto;
		left: 0;
		right: 0;
		top: -70px;
		width: 95px;
		height: 95px;
		border-radius: 50%;
		z-index: 9;
		background: #82ce34;
		padding: 15px;
		text-align: center;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.modal-confirm .icon-box i {
		font-size: 58px;
		position: relative;
		top: 3px;
	}
	.modal-confirm.modal-dialog {
		margin-top: 80px;
	}
    .modal-confirm .btn {
        color: #fff;
        border-radius: 4px;
		background: #82ce34;
		text-decoration: none;
		transition: all 0.4s;
        line-height: normal;
        border: none;
    }
	.modal-confirm .btn:hover, .modal-confirm .btn:focus {
		background: #6fb32b;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
</style>

<body>





<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons"></i>
				</div>				
				<h4 class="modal-title">Completed!</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">Rs: 60/- will be credited!.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-dismiss="modal">OK</button>
			</div>
		</div>
	</div>
</div>     


<br><br>
<center><h4><b><u>Video & Reels Ads -  YouTube</u></b></h4></center>
<center><img style="" src="logo.jpeg" height="150" width="240"><img></center>

<br>
<br>

<button onclick=""><b>STEP-1:▶️</b> Watch Video Ads & Complete The Questions In The Video</button> <br><br>
<b><center>(Only 25 Minutes Task)</center></b><br>
<b><center><a href="PlayM1_20.html">Open Video Ad (1)</a> ---- <a href="ANS_1_20.html">Questions</a></center></b>
<b><center><a href="PlayM2_20.html">Open Video Ad (2)</a> ---- <a href="ANS_2_20.html">Questions</a></center></b>
<b><center><a href="PlayM3_20.html">Open Video Ad (3)</a> ---- <a href="ANS_3_20.html">Questions</a></center></b>


<br><br>


<button onclick=""><b>STEP-2:🖼️</b> Watch Reels Ads & Complete The Questions In The Reels</button> <br><br>
<b><center>(Only 5 Minutes Task)</center></b><br>
<b><center><a href="Reels.html">Start Reels Ads (All 5)</a></center></b>


<br><br>


<center><button  onclick="myFunction2()"><b>STEP-3:</b>✅ Click On Complete Today's Task Button Here</button><button><a style="color:white;" href="#myModal" data-toggle="modal">-</a></button></center>

<br>


<br>









<script>

function myFunction() {
  alert("Good Job! - Rs: 60/- will be credited!");
}

function myFunction2() {
  alert("Video & Photo Ads Watching Not Completed");
}
</script>

</body>
</html>
