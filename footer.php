
   <footer class="container-fluid text-center text-white footer" style="background-color: brown; padding-top: 15px;padding-bottom: 15px;">
   	    Copyright &copy 2020. All rights &reg reserved by CAR Insurance
     </footer>
  <script src="Bootstrap/js/Bootstrap.bundle.min.js"></script>

  <script>
 // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
  </script>
