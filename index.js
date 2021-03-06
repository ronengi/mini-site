
$(document).ready(indexStart);

function indexStart() {
    $('#loginButton').button();			  // decorate buttons
    $('#welcomeButton').button();
    $('#createButton').button();
    $('#resetButton').button();
    $('#mailButton').button();
    $('#passwordButton').button();
    $('#deleteButton').button();


    $('#loginButton').click(clickLogin);          // point click locations (actions)
    $('#welcomeButton').click(clickWelcome);
    $('#createButton').click(clickCreate);
    $('#resetButton').click(clickReset);
    $('#mailButton').click(clickMail);
    $('#passwordButton').click(clickPassword);
    $('#deleteButton').click(clickDelete);



    $('#createLink').click(prepareCreate);	  // point click locations (dialogs)
    $('#resetLink').click(prepareReset);

    $('#mailLink').click(prepareMail);
    $('#passwordLink').click(preparePassword);
    $('#deleteLink').click(prepareDelete);



    $('#loginError').hide();		  // hide error labels
    $('#createError').hide();
    $('#resetError').hide();
    $('#mailError').hide();
    $('#passwordError').hide();
    $('#deleteError').hide();


    prepareLogin();
}







function validateEmail($email) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if(!emailReg.test($email))
	return false;
    return true;
}



function rep3() {
    $.getJSON("request-logged-users.php", function(loggedusers) {
	$('#welcomeTable').find("tr:gt(0)").remove(); // clear all rows except first
	$.each(loggedusers, function(key, val) {
	    var useritem = '<tr align="center" id="' + key + '"><td>' + val.uip + '</td><td>' + val.uupdate + '</td><td>' + val.utime + '</td><td>' + val.uname + '</td></tr>';
	    $('#welcomeTable').append(useritem);
	});
    });

    tout3 = setTimeout(rep3, 3000);

    //$('#t_username').val($.now());
    // var myDate = new Date();
    // var displayDate = (myDate.getHours() + ':' + myDate.getMinutes() + ':' + myDate.getSeconds() + ' ' + myDate.getDate() + '/' + (myDate.getMonth()+1) + '/' + myDate.getFullYear());
    //timelogin: myDate.getHours() + ':' + myDate.getMinutes() + ':' + myDate.getSeconds() + ' ' + myDate.getDate() + '/' + (myDate.getMonth()+1) + '/' + myDate.getFullYear(),
    // $('#loggeduser').text(displayDate);


} // rep3
