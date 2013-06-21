<html lang="he">
  <head>
    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
    <title>login mini-site</title>
    <link href="Alef-Webfont/stylesheet.css" rel="stylesheet">
    <link href="mini-site.css" rel="stylesheet">
    <link href="jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
    <script src="jquery-ui-1.10.3.custom/js/jquery-1.9.1.js"></script>
    <script src="jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.js"></script>
    <script src="welcome.js"></script>
  </head>

  <body>

    <br><br><br>
    <h1 class="c_center" id="welcomeH1">mini-site ברוכים הבאים ל</h1>


    <div class="c_center" id="loginDiv">
      <form id="loginForm" >
	<fieldset id="loginFieldSet" class="c_center">
	  <legend>התחבר למערכת</legend>
	  <div class="c_center c_left c_small_font" id="createAccountDiv"><a href="#">צור חשבון</a></div>
	  <div class="c_center" id="usernameDiv">
	    <span class="c_left"><input id="usernameText" size=10></span>
	    <span class="c_right"><label for="usernameText">שם משתמש:</label></span>
	  </div>
	  <div class="c_center" id="passwordDiv">
	    <span class="c_left"><input type="password" id="passwordText" size=10></span>
	    <span class="c_right"><label for="passwordText">סיסמה:</label></span>
	  </div>
	  <div class="c_center c_left c_small_font" id="forgotPasswordDiv"><a href="#">שכחתי סיסמה</a></div>
	  <div class="c_center c_small_font" id="buttonDiv"><button id="loginButton">התחבר</button></div>
	  <div class="c_center" id="errorDiv"><label id="errorLabel"></label></div>
	</fieldset>
      </form>
    </div>


    <div class="c_center" id="welcomeDiv">
      <div class="c_center" id="welcomeDivFrame">
	<div class="c_center" id="usernameDiv">ברוך הבא <label id="loggeduser"></label></div>
	<div class="c_center" id="actionsDiv">
	  <span class="c_left c_small_font" id="disconnectLink"><button id="logoutButton">התנתק</button></span>
	  <span class="c_right c_small_font"><a href="#">עדכן מייל</a><br><a href="#">שנה סיסמה</a></span>
	</div>
      <div class="c_center"></div>
      </div>


      <table class="c_center" id="loggedUsersTable">
	<tr>
	  <th>IP כתובת</th>
	  <th>זמן עדכון אחרון</th>
	  <th>זמן התחברות</th>
	  <th>שם משתמש</th>
	</tr>

      </table>
    </div>

  </body>
</html>
