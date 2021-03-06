<!DOCTYPE html>
<html>

<head>
    <title>Tourism System</title>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: skyblue;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 15px;
            text-decoration: none;
            font-family: "Arial";
            font-size: 20px;
        }

        li a:hover {
            background-color: #4A71AB;
        }

        h1 {
            color: steelblue;
            text-align: center;
            font-family: "Arial";

        }

        h3 {
            color: darkgrey;
            text-align: center;
            font-family: "Arial";

        }


        .button {
            background-color: deepskyblue;
            border: none;
            color: white;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #555;
        }

        .footer-distributed {
            background-color: #292c2f;
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: normal 16px sans-serif;
            padding: 50px;
            margin-top: 80px;
        }

        .footer-distributed .footer-left p {
            color: #8f9296;
            font-size: 14px;
            margin: 0;
        }

        /* Footer links */

        .footer-distributed p.footer-links {
            font-size: 18px;
            font-weight: bold;
            color: #ffffff;
            margin: 0 0 10px;
            padding: 0;
        }

        .footer-distributed p.footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }

        .footer-distributed .footer-right {
            float: right;
            margin-top: 6px;
            max-width: 180px;
        }

        .footer-distributed .footer-right a {
            display: inline-block;
            width: 35px;
            height: 35px;
            background-color: #33383b;
            border-radius: 2px;

            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;

            margin-left: 3px;
        }

        @media (max-width: 600px) {

            .footer-distributed .footer-left,
            .footer-distributed .footer-right {
                text-align: center;
            }

            .footer-distributed .footer-right {
                float: none;
                margin: 0 auto 20px;
            }

            .footer-distributed .footer-left p.footer-links {
                line-height: 1.8;
            }
        }

       

        input[type=text],
        select {
            width: 70%;

            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 200px;

            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;

        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        

        @keyframes slidy {
            0% {
                left: 0%;
            }
            20% {
                left: 0%;
            }
            25% {
                left: -100%;
            }
            45% {
                left: -100%;
            }
            50% {
                left: -200%;
            }
            70% {
                left: -200%;
            }
            75% {
                left: -300%;
            }
            95% {
                left: -300%;
            }
            100% {
                left: -400%;
            }
        }

        body {
            margin: 0;
        }

        div#slider {
            overflow: hidden;
        }

        div#slider figure img {
            width: 10%;
            float: left;
        }

        div#slider figure {
            position: relative;
            width: 500%;
            margin: 0;
            left: 0;
            text-align: left;
            font-size: 0;
            animation: 7s slidy infinite;
        }

        div.gallery {
    margin: 5px;
    border: 1px solid white;
    float: left;
    width: 417px;
            
}

div.gallery:hover {
    border: 1px solid white;
}

div.gallery img {
    width: 100%;
    height: 350px;
}

div.desc {
    padding: 5px;
    text-align: center;
}
        .ic {
	border:0;
	float:right;
	background:#fff;
	color:#f00;
	width:50%;
	line-height:10px;
	font-size:10px;
	margin:-220% 0 0 0;
	overflow:hidden;
	padding:0
}
        .container_12{ position: relative; width: 960px; margin: 0 auto; padding: 0; }
	.grid_1,
	.grid_2,
	.grid_3,
	.grid_4,
	.grid_5,
	.grid_6,
	.grid_7,
	.grid_8,
	.grid_9,
	.grid_10,
	.grid_11,
	.grid_12
	{ float: left; display: inline; margin-left: 10px; margin-right: 10px; }

    /* Nested Column Classes */
     .container_12 .alpha               { margin-left: 0; }
     .container_12 .omega               { margin-right: 0; }

    /* Base Grid */
    .container_12 .grid_1			{ width: 60px;  }
    .container_12 .grid_2			{ width: 140px; }
    .container_12 .grid_3			{ width: 220px; }
    .container_12 .grid_4			{ width: 300px; }
    .container_12 .grid_5			{ width: 380px; }
    .container_12 .grid_6			{ width: 460px; }
    .container_12 .grid_7			{ width: 540px; }
    .container_12 .grid_8			{ width: 620px; }
    .container_12 .grid_9			{ width: 700px; }
    .container_12 .grid_10			{ width: 780px; }
    .container_12 .grid_11			{ width: 860px; }
    .container_12 .grid_12			{ width: 940px; }
	/* Prefix Extra Space >> 12 Columns */
	.container_12 .prefix_1 		{padding-left:80px;}
	.container_12 .prefix_2 		{padding-left:160px;}
	.container_12 .prefix_3 		{padding-left:240px;}
	.container_12 .prefix_4 		{padding-left:320px;}
	.container_12 .prefix_5 		{padding-left:400px;}
	.container_12 .prefix_6 		{padding-left:480px;}
	.container_12 .prefix_7 		{padding-left:560px;}
	.container_12 .prefix_8 		{padding-left:640px;}
	.container_12 .prefix_9 		{padding-left:720px;}
	.container_12 .prefix_10 		{padding-left:800px;}
	.container_12 .prefix_11 		{padding-left:880px;}
	/* Suffix Extra Space >> 12 Columns */
	.container_12 .suffix_1 		{padding-right:80px;}
	.container_12 .suffix_2 		{padding-right:160px;}
	.container_12 .suffix_3 		{padding-right:240px;}
	.container_12 .suffix_4 		{padding-right:320px;}
	.container_12 .suffix_5 		{padding-right:400px;}
	.container_12 .suffix_6 		{padding-right:480px;}
	.container_12 .suffix_7 		{padding-right:560px;}
	.container_12 .suffix_8 		{padding-right:640px;}
	.container_12 .suffix_9 		{padding-right:720px;}
	.container_12 .suffix_10 		{padding-right:800px;}
	.container_12 .suffix_11 		{padding-right:880px;}

/* #Tablet (Portrait)
================================================== */

    /* Note: Design for a width of 768px */

    @media only screen and (min-width: 768px) and (max-width: 995px) {
        .container_12                                  { width: 768px; }
        .grid_1,
		.grid_2,
		.grid_3,
		.grid_4,
		.grid_5,
		.grid_6,
		.grid_7,
		.grid_8,
		.grid_9,
		.grid_10,
		.grid_11,
		.grid_12
		{ margin-left: 10px; margin-right: 10px;  }
         .container_12 .alpha               { margin-left: 0;}
         .container_12 .omega               { margin-right: 0;}

        .container_12 .grid_1 			{ width: 44px; }
        .container_12 .grid_2  			{ width: 108px; }
        .container_12 .grid_3    		{ width: 172px; }
        .container_12 .grid_4 			{ width: 236px; }
        .container_12 .grid_5    		{ width: 300px; }
        .container_12 .grid_6   		{ width: 364px; }
        .container_12 .grid_7 			{ width: 428px; }
        .container_12 .grid_8  			{ width: 492px; }
        .container_12 .grid_9 			{ width: 556px; }
        .container_12 .grid_10			{ width: 620px; }
        .container_12 .grid_11			{ width: 684px; }
        .container_12 .grid_12			{ width: 748px; }
		/* Prefix Extra Space >> 12 Columns */
		.container_12 .prefix_1 		{padding-left:64px;}
		.container_12 .prefix_2 		{padding-left:128px;}
		.container_12 .prefix_3 		{padding-left:192px;}
		.container_12 .prefix_4 		{padding-left:256px;}
		.container_12 .prefix_5 		{padding-left:320px;}
		.container_12 .prefix_6 		{padding-left:384px;}
		.container_12 .prefix_7 		{padding-left:448px;}
		.container_12 .prefix_8 		{padding-left:512px;}
		.container_12 .prefix_9 		{padding-left:576px;}
		.container_12 .prefix_10 		{padding-left:640px;}
		.container_12 .prefix_11 		{padding-left:768px;}
		/* Suffix Extra Space >> 12 Columns */
		.container_12 .suffix_1 		{padding-right:64px;}
		.container_12 .suffix_2 		{padding-right:128px;}
		.container_12 .suffix_3 		{padding-right:192px;}
		.container_12 .suffix_4 		{padding-right:256px;}
		.container_12 .suffix_5 		{padding-right:320px;}
		.container_12 .suffix_6 		{padding-right:384px;}
		.container_12 .suffix_7 		{padding-right:448px;}
		.container_12 .suffix_8 		{padding-right:512px;}
		.container_12 .suffix_9 		{padding-right:576px;}
		.container_12 .suffix_10 		{padding-right:640px;}
		.container_12 .suffix_11 		{padding-right:768px;}
    }


/*  #Mobile (Portrait)
================================================== */

    /* Note: Design for a width of 320px */

    @media only screen and (max-width: 767px) {
        .container_12{width: 300px;}
        .grid_1,
		.grid_2,
		.grid_3,
		.grid_4,
		.grid_5,
		.grid_6,
		.grid_7,
		.grid_8,
		.grid_9,
		.grid_10,
		.grid_11,
		.grid_12{margin: 0;}

        .container_12 .grid_1,
        .container_12 .grid_2,
        .container_12 .grid_3,
        .container_12 .grid_4,
        .container_12 .grid_5,
        .container_12 .grid_6,
        .container_12 .grid_7,
        .container_12 .grid_8,
        .container_12 .grid_9,
        .container_12 .grid_10,
        .container_12 .grid_11,
        .container_12 .grid_12{width: 300px;}
		/* Prefix Extra Space >> 12 Columns */
		.container_12 .prefix_1,
		.container_12 .prefix_2,
		.container_12 .prefix_3,
		.container_12 .prefix_4,
		.container_12 .prefix_5,
		.container_12 .prefix_6,
		.container_12 .prefix_7,
		.container_12 .prefix_8,
		.container_12 .prefix_9,
		.container_12 .prefix_10,
		.container_12 .prefix_11{padding-left:0;}
		/* Suffix Extra Space >> 12 Columns */
		.container_12 .suffix_1,
		.container_12 .suffix_2,
		.container_12 .suffix_3,
		.container_12 .suffix_4,
		.container_12 .suffix_5,
		.container_12 .suffix_6,
		.container_12 .suffix_7,
		.container_12 .suffix_8,
		.container_12 .suffix_9,
		.container_12 .suffix_10,
		.container_12 .suffix_11{padding-right:0;}
    }


/* #Mobile (Landscape)
================================================== */

    /* Note: Design for a width of 480px */

    @media only screen and (min-width: 480px) and (max-width: 767px) {
        .container_12 { width: 420px; }
        .grid_1,
		.grid_2,
		.grid_3,
		.grid_4,
		.grid_5,
		.grid_6,
		.grid_7,
		.grid_8,
		.grid_9,
		.grid_10,
		.grid_11,
		.grid_12{margin: 0;}

        .container_12 .grid_1,
        .container_12 .grid_2,
        .container_12 .grid_3,
        .container_12 .grid_4,
        .container_12 .grid_5,
        .container_12 .grid_6,
        .container_12 .grid_7,
        .container_12 .grid_8,
        .container_12 .grid_9,
        .container_12 .grid_10,
        .container_12 .grid_11,
        .container_12 .grid_12{width: 420px;}
		/* Prefix Extra Space >> 12 Columns */
		.container_12 .prefix_1,
		.container_12 .prefix_2,
		.container_12 .prefix_3,
		.container_12 .prefix_4,
		.container_12 .prefix_5,
		.container_12 .prefix_6,
		.container_12 .prefix_7,
		.container_12 .prefix_8,
		.container_12 .prefix_9,
		.container_12 .prefix_10,
		.container_12 .prefix_11{padding-left:0;}
		/* Suffix Extra Space >> 12 Columns */
		.container_12 .suffix_1,
		.container_12 .suffix_2,
		.container_12 .suffix_3,
		.container_12 .suffix_4,
		.container_12 .suffix_5,
		.container_12 .suffix_6,
		.container_12 .suffix_7,
		.container_12 .suffix_8,
		.container_12 .suffix_9,
		.container_12 .suffix_10,
		.container_12 .suffix_11{padding-right:0;}
    }
.banner {
    top: -45px;
    position: relative;
}

.banner .label {
    color: #fff;
    position: absolute;
    text-align: center;
    left: 0;
    top: 50%;
    margin-top: -38px;
    right: 0;
    text-transform: uppercase;
}


.banner .label .title {
    font-size: 30px;
    margin-bottom: 14px;
    text-transform: uppercase;
}

.banner .label .price span {
    display: block;
    font-size: 24px;
    padding-top: 3px;
}

.banner a {
    font-size: 14px;
    line-height: 20px;
    color: #c73430;
    text-transform: uppercase;
    display: inline-block;
    background-color: #e5e5e5;
    padding: 5px 18px 4px;
    margin-top: 25px;
    border-radius: 13px;
}

.banner a:hover {
    background-color: #c73430;
    color: #fff;
}
        .banners {
    overflow: hidden;
    padding-top: 100px;
}

.banners .banner {
    top: 0;
    margin-top: 20px;
}
        .banner img {
    width: 100%;
           
}


.banner {
    margin-bottom: 25px;
} 

    </style>

</head>

<body>
    <div section id="home_section">
        <ul>

            <li><a href="/logout">Log Out</a></li>
            <li><a href="/contact_us">Contact Us</a></li>
            <li><a href="/bookinghistory">Booking History</a></li>
            <li><a href="/hotel">Hotel</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/places">Top visited places</a></li>
            <li><a href="/home">Home</a></li>

        </ul>
    </div>
        
    
			<div class="container_12">
				<div class="banners">
                      <h1>Lawachara</h1>
                      
    
                    
					<div class="grid_4">
						<div class="banner">
							<img src="images/law1.jpg" alt="">
							<div >
								
								
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/law2.jpg" alt="">
							<div >
								
							</div>
						</div>
					</div>
					<div class="grid_4">
						<div class="banner">
							<img src="images/law3.jpg" alt="">
							<div >
								
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		
    <br>
</body>

</html>
