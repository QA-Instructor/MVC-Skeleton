
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>


body{
	padding: 0;
	margin: 0;
	
}
h1{
	text-align: center;
	font-size: 36px;
}
h3{
	text-align: center;
	font-size: 30px;
	padding: 20px;
	font-weight: 400;
	letter-spacing: 1px;

}
input[type=text] {
    
    padding: 12px 20px;
    margin: 9px 0;
    box-sizing: border-box;
    border-radius: 10px;
    outline: none;
    width: 40%;
    height:20%;
    boredr:1px solid #7c7b7b;
}
input[type=text]:hover {
	border:1px solid #000;
	transition: 6s;
}
::placeholder { 
    color: #000;
    opacity: 1;
    font-weight: 400;
    font-size: 20px;
    text-align: center;


}
button{
	height: 50px;
	padding: 0;
	margin: 0;
	
}
.btn{
	border-radius: 30px;
	width: 14%;
	margin-left: 5px;
	font-size: 20px;

}
footer{
	background: #000;
	text-align: center;
	padding: 10px;

}
footer p{
	color: #fff;
	padding: 10px;
	margin: 0;
	font-weight: 700;
	font-size: 20px;
}
@media(max-width: 992px){
	.btn{
		width: 20%
	}
	input[type=text]{
		width: 50%;
	}
}
@media(max-width: 768px){
	.btn{
		width: 40%
	}
	input[type=text]{
		width: 90%;
	}
}
@media(max-width: 440px){
	.btn{
		width: 50%;
		font-size: 18px;
	}
	input[type=text]{
		width: 100%;
	}
	h3{
		font-size: 22px;
	}
}
@media(max-width: 373px){
	h3{
		font-size: 20px;
		font-weight: 600;
	}
	h1{
		font-size: 28px;
		font-weight: 400;
	}


}  
</style>
</head> 


<body>
    
<div class="container">
		
		
	</div>
	<section class="bg-dark text-center p-5 mt-4">
		<div class="container p-3">
			<h3 class="text-white">SUBSCRIBE NOW</h3>
			<form action="#" method="Post">
				<input type="text" name="email" placeholder="Enter Your Email">
				<button type="submit" class="btn btn-default">Subscribe<i class="fa fa-envelope"></i></button>
			</form>
		</div>
	</section>
	
    
</body>