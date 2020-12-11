function validasiForm(){
	var title = document.forms["forumBahas"]["judul"].value;
	var isi = document.forms["forumBahas"]["bahas"].value;

	if (title == "") {
    	alert("Judul masih kosong");
    	return false;
	}
	else if (isi == "") {
		alert("Kotak pembahasan masih kosong");
		return false;
	} else{
		alert("Anda sudah membuka bahasan baru");
		return true;
	}
}