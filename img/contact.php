<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="./img/favicon (2).ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
     

    <noscript>

        <h1>Javascript is disabled</h1>
      </noscript>
        <nav class="navbar navbar-expand-lg " id="nav1" >
            <div class="container-fluid" >
              <img class="img-fluid" id="photo1" src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.15752-9/356571580_1556564328214360_8484287370675820080_n.png?_nc_cat=102&ccb=1-7&_nc_sid=aee45a&_nc_ohc=jhZaCr-K6AEAX8tbgPI&_nc_ht=scontent.fktm8-1.fna&oh=03_AdSu1E7urd39FtgSv97z0hVI9xseoGIiWL0RNJvOobe0Xw&oe=64CF4EEB" alt="">
              <button id="don" class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span  class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse  mehe " id="navbarSupportedContent" >
                <ul class="navbar-nav me-auto mb-2 mb-lg-0"  id="yg" >
                  <li class="nav-item" >
                    <a class="nav-link " id="nav2"  href="./index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="nav2"  href="#">About</a>
                  </li>
                
                  <li class="nav-item ">
                    <a class="nav-link " id="nav2"  href="#">
                     Portfolio
                    </a>
                   
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="nav2"  href="./contact.html">Contact me</a>
                  </li>
                  
                  <li class="nav-item">
                    <img class="img-fluid" id="photo2" src="./img/moon.png" alt="">
                  </li>

                  
    
               
               
                
                  <button id="mouse" class="btn" type="button">Lets Connect</button>
                </ul>
              </div>
            </div>
          </nav>

         <div id="formrow" class="container">
          <div  class="row justify-content-center align-items-center g-2">
            <div id="form" class="col-md-6">
              <h2 id="knowme">Wanna Know more about me!</h2>
              <p id="detail">If you have any work from me or any type of quries related to my development, you can send me message from here. It's my pleasure to help you.</p>

              <form id="formi" action="">
                <label for="name">Name</label> <br>
                <input type="text" id="name" class="name" placeholder="Enter your name"><br>
                <span id="namespan"></span>
                <label for="name">Email</label> <br>
                <input type="text" id="email" class="email" placeholder="Enter your email"><br>
                <span id="namespan"></span>
                <label for="name">Password</label> <br>
                <input type="password" id="password" class="password" placeholder="Enter your password"><br> 
                <span id="namespan"></span>
                <label for="name">Message</label> <br>
                <textarea id="message" name="message" rows="4" cols="50" placeholder="Write a message" ></textarea> <br>
                <span id="messagespan"></span>
              
                  
                <button id="button" type="submit">Submit</button> 
              </form>
            </div>
            <div  class="col-md-6">
                 <img class="img-fluid"  id="contact2"  src="pexels-ink-drop-15387699.jpg"  alt="">
            </div>
          </div>
         </div>

   



 
    <script src="./js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>






