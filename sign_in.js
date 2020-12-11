function formValidasi() {
	var usr= document.forms["signIn_form"]["usr_name"].value;
	var eml= document.signIn_form.email.value;
	var pass= document.signIn_form.psw.value;
	var pass_rpt= document.signIn_form.psw_repeat.value;

		if (usr==null || usr=="") {
			alert("Username TIDAK boleh kosong!");
			return false;
		} else if (eml==null || eml=="") {
			alert("Email TIDAK boleh kosong!");
			return false;
		} else if (pass==null || pass=="") {
			alert("Password TIDAK boleh kosong!");
			return false;
		} else if (pass_rpt==null || pass_rpt=="") {
			alert("Mohon untuk menulis ULANG password anda!");
			return false;
		} else if (pass_rpt!=pass) {
			alert("Password HARUS sama!");
			return false;
		}
}
