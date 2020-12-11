(function() {
    const form    = document.getElementById('calc-form');
    const results = document.getElementById('results');
    const errors  = document.getElementById('form-error');
    
    function errorMessage(msg) {
        errors.innerHTML = msg;
        errors.style.display = '';
        return false;
    }

    function showResults(calories) {
        results.innerHTML = `<p>Total Basal metabolic rate (BMR) milik mu adalah: <strong>${(calories).toFixed(2)} </strong> kalori per hari.</p><a href="#" id="rs">Mencoba ulang?</a>`;
      results.style.display = ''
      form.style.display = 'none'
      errors.style.display = 'none'
    }

    function resetForm(e) {
      if(e.target.id = 'rs') {
        e.preventDefault();
        results.style.display = 'none';
        form.style.display = '';
        form.reset()
      }
    }

    function submitHandler(e) {
        e.preventDefault();

        let Umur = parseFloat(form.Umur.value);
        if(isNaN(Umur) || Umur < 0) {
            return errorMessage('Harap masukkan umur anda dengan benar');
        }
   
        let TinggiCM = parseFloat(form.Tinggi_cm.value);
        if(isNaN(TinggiCM) || TinggiCM < 0) {
            
          let tinggiFeet = parseFloat(form.Tinggi_ft.value);
          if(isNaN(tinggiFeet) || tinggiFeet < 0) {
              return errorMessage('Harap memasukkan satuan tinggi anda dengan benar menggunakan satuan feet/ inch/ centimeter');
          }      
         let tinggiInch = parseFloat(form.Tinggi_in.value);
          if(isNaN(tinggiInch) || TinggiInch < 0) {
              tinggiInch=0;
          }   
          TinggiCM = (2.54 * tinggiInch) + (30.4 * tinggiFeet)
          
        }   

          let beratBadan = parseFloat(form.beratBadan.value);
          if(isNaN(beratBadan) || beratBadan < 0) {
              return errorMessage('Harap memasukkan berat badan anda dengan benar');
          }   
      
        if(form.beratBadan_unit.value == 'lb') {
            beratBadan = 0.453592 * beratBadan;
        }
      
       let calories = 0;
       if(form.Kelamin.value == 'Perempuan') {
         calories = 655.09 + (9.56 * beratBadan) + (1.84 * TinggiCM) - (4.67 * Umur);
        }  else {
         calories = 66.47 + (13.75 * beratBadan) + (5 * TinggiCM) - (6.75 * Umur);
        }
 
       showResults(calories);
    }

    form.addEventListener('submit', submitHandler);
    results.addEventListener('click', resetForm, true);

})();