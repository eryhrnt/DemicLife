function formValidasi() {
	var usr= document.login_form.username.value;
	var pass= document.login_form.password.value;
		if (usr==null || usr=="") {
			alert("Username TIDAK boleh kosong!");
			return false;
		} else if (pass==null || pass=="") {
			alert("Password TIDAK boleh kosong!");
			return false;
		}
}
