<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device=width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>App Book Store</title>
</head>

<body>
    <div class="position-relative">
        <div class="nav-top position-relative">
            <a href="#Support">ติดต่อเรา</a>
            <a href="#Languague">ภาษาไทย / English</a>
        </div>

        <div class="logo-top">logo</div>

        <div class="login_btn_lb">
            <form action="check_login.php" method="post" id="login_lirbra">
                <input type="hidden" value="LirBra" name="login_lirbra">
                <button class="login_lb" type="sumbit" form="login_lirbra">ล็อกอินด้วย LirBra</button>
            </form>
            
        </div>
        
        <div class="login_btn_lb">
            <form action="check_login.php" method="post" id="login_facebook">
                <input type="hidden" value="Facebook" name="login_facebook">
                <button class="login_fa" type="sumbit" form="login_facebook">ล็อกอินด้วย Facebook</button>
            </form>
        </div>
        
        <div class="login_btn_line">
            <form action="check_login.php" method="post" id="login_line">
                <input type="hidden" value="Line" name="login_line">
                <button class="login_line" type="sumbit" form="login_line">ล็อกอินด้วย Line</button>
            </form>
        </div>
        
        <div class="login_btn_apple">
            <form action="check_login.php" method="post" id="login_apple">
                <input type="hidden" value="Apple" name="login_apple">
                <button class="login_apple" type="sumbit" form="login_apple">ล็อกอินด้วย Apple</button>
            </form>
        </div>
        
        <div class="text_or">หรือ</div>

        <div class="not_login">
            <form action="check_login.php" method="post" id="not_login">
                <input type="hidden" value="not_login" name="not_login">
                <button type="submit" form="not_login">ไม่ระบุตัวตน</button>
            </form>
        </div>
    </div>
    

</body>
</html>