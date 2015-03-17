function signinCallback(authResult) {
	if (authResult['status']['signed_in']) {
		document.getElementById('signinButton').setAttribute('style', 'display: none');
		gapi.client.load('plus', 'v1', apiClientLoaded);
		window.alert("potato!");
		if (on_index) {
			document.location.href = "html/main.php";
		}
	} else {
		// document.getElementById('signinButton').setAttribute('style', 'display: none');
		// Update the app to reflect a signed out user
		// Possible error values:
		//   "user_signed_out" - User is signed-out
		//   "access_denied" - User denied access to your app
		//   "immediate_failed" - Could not automatically log in the user
		if (authResult.error === "user_signed_out") {
			if (typeof on_index === 'undefined') {
				document.location.href = "/index.php";
			}
		}
	}
}

function apiClientLoaded() {
	gapi.client.plus.people.get({userId: 'me'}).execute(handleEmailResponse);
	window.alert("hi!");
}

function handleEmailResponse(authResult) {
	window.alert("poopoo");
	var primaryEmail;
	for (var i=0; i < authResult.emails.length; i++) {
		if (authResult.emails[i].type === 'account') primaryEmail = authResult.emails[i].value;
	}
	document.getElementById('responseContainer').value = 'Primary email: ' +
		primaryEmail + '\n\nFull Response:\n' + JSON.stringify(resp);
}
