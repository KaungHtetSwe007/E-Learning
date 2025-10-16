const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

$(document).ready(function(){
    $('#togglePassword').click(function(){
      var passwordField = $('#password');
      var passwordFieldType = passwordField.attr('type');
      
      // Toggle password visibility
      if(passwordFieldType === 'password') {
        passwordField.attr('type', 'text');
        $(this).removeClass('fa-eye').addClass('fa-eye-slash'); // Change eye icon to eye-slash
      } else {
        passwordField.attr('type', 'password');
        $(this).removeClass('fa-eye-slash').addClass('fa-eye'); // Change eye-slash icon to eye
      }
    });
  });
$(document).ready(function(){
    $('#togglePasswordSignup').click(function(){
      var passwordField = $('#singuppass'); // Ensure the correct ID is used
      var passwordFieldType = passwordField.attr('type');
      
      // Toggle password visibility
      if(passwordFieldType === 'password') {
        passwordField.attr('type', 'text');
        $(this).removeClass('fa-eye').addClass('fa-eye-slash'); // Change eye icon to eye-slash
      } else {
        passwordField.attr('type', 'password');
        $(this).removeClass('fa-eye-slash').addClass('fa-eye'); // Change eye-slash icon to eye
      }
    });
    
    $('#toggleCPasswordSignup').click(function(){
      var passwordField = $('#signupcpass'); // Ensure the correct ID is used
      var passwordFieldType = passwordField.attr('type');
      
      // Toggle password visibility
      if(passwordFieldType === 'password') {
        passwordField.attr('type', 'text');
        $(this).removeClass('fa-eye').addClass('fa-eye-slash'); // Change eye icon to eye-slash
      } else {
        passwordField.attr('type', 'password');
        $(this).removeClass('fa-eye-slash').addClass('fa-eye'); // Change eye-slash icon to eye
      }
    });
});

