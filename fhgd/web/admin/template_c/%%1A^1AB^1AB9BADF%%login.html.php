<?php /* Smarty version 2.6.25, created on 2017-09-01 15:15:25
         compiled from login.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>运营管理后台</title>
    <link href="../../web/admin/static/css/login_styles.css" type="text/css" media="screen" rel="stylesheet" />
    <meta id="viewport" name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0" />
    <script src="../../web/admin/static/js/jquery-1.6.2.min.js"></script>
</head>

<body id="login">
    <div id="wrapper">
        <div id="content">
            <div id="header">
                <h1>
                    <div id='logo'>
                        <img src="../../web/admin/static/images/gd_logo.png" alt="logo">
                    </div>
                </h1>
            </div>
            <div id="darkbanner" class="banner320">
                <h2 >运营管理后台 </h2>
            </div>
            <div id="darkbannerwrap"  >
            </div>

            <form name="form1" method="post" action="login.php">
                <input type="hidden" name="action" value="login" />
            <fieldset class="form">
                <p>
                    <label style="margin-left: 3.5cm;"><font color="red" > <?php echo $this->_tpl_vars['errorMsg']; ?>
</font></label>
                </p>
                <p>
                    <label class="loginlabel" for="user_name">
                         <?php echo $this->_tpl_vars['_lang']['login']['user_name']; ?>
:</label>
                    <input class="logininput ui-keyboard-input ui-widget-content ui-corner-all" name="username"
                        id="user_name" type="text" value="<?php echo $this->_tpl_vars['username']; ?>
" />
                </p>
                <p>
                    <label class="loginlabel" for="user_password">
                        <?php echo $this->_tpl_vars['_lang']['login']['pass_word']; ?>
：</label>
                    <span>
                        <input class="logininput"   name="password" id="user_password" type="password" value="<?php echo $this->_tpl_vars['password']; ?>
"  /></span>
                </p>
                <p>
                    <label class="loginlabel" for="validation">
                        <img src="image.php" ></label><span>
                    <input class="logininput ui-keyboard-input ui-widget-content ui-corner-all" name="validation"
                        id="validation" type="text" value="" /></span>
                </p>
                <p>
                <button id="loginbtn" type="submit" class="positive" name="Submit">
                    <img src="../admin/static/images/key.png" alt="Announcement" /><?php echo $this->_tpl_vars['_lang']['login']['login']; ?>
</button>
                <button id="loginbtn" type="reset"  class="positive" name="Reset">
                    <img src="../admin/static/images/key.png" alt="Announcement" /><?php echo $this->_tpl_vars['_lang']['login']['clear']; ?>
</button>
                </p>
            </fieldset>
                <!-- <p  class="loginchk" style="margin-top:20px;">
                    <div style=" font-weight: bold;"><input type="checkbox" id="setcookie" name="chkcookie" <?php if ($this->_tpl_vars['checked'] == 1): ?> checked <?php endif; ?>  value="1" /><?php echo $this->_tpl_vars['_lang']['login']['save_pwd']; ?>
</div>
                </p> -->
            </form>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".logininput").blur(function() {
                if ($(this).val() == "") {
                    $(this).css("border-color", "red");
                }
                else {
                    $(this).css("border-color", "#D9D6C4");
                }
            })
        });
  
        //语言包  start
    	$(document).ready(function () {
            $('#switchlang').change(function() {
                var txt=$("#switchlang").val();
                $.post("../../web/admin/login.php", {LANG:txt}, function(result){
                    window.location.reload();
                });
            });
        });
        //语言包  and
    </script>

</body>

</html>