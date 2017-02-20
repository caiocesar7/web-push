<!DOCTYPE html>
<html lang="pt-BR">
<head>
<title>Push Notification</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//online-fonts -->
 <script type="text/javascript">
            function trigger_notification()
            {
                //check if browser supports notification API
                if("Notification" in window)
                {
                    if(Notification.permission == "granted")
                    {
                        var notification = new Notification("Olá..", {"body":"Nada novo por enquanto!", "icon":"http://alapakisoft.com/web-push/logo7.png"});
                    }
                    else
                    {
                        Notification.requestPermission(function (permission) {
                            if (permission === "granted") 
                            {
                                var notification = new Notification("Olá..", {"body":"Pronto, sempre atualizado!", "icon":"http://alapakisoft.com/web-push/logo7.png"});
                            }
                        });
                    }
                }   
                else
                {
                    alert("Your browser doesn't support notfication API");
                }       
            }
        </script>
</head>
<body>
<div class="header">
    <h1>A melhor opção para seu site</h1>
</div>
<div class="w3-main">
    <div class="agile-info">
        
        <p>Quer ficar atualizado?</p>
            
            
        <a href="#" onclick="trigger_notification();">Clique aqui!</a>
    </div>
</div>
<div class="footer-w3l">
    <p>&copy; 2017 Caio</p>
</div>

</body>
</html>