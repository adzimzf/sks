
// var form = $('.form');
// var btn = $('#submit');
// var topbar = $('.topbar');
// var input = $('#password');
// var form_register = $('#form-register');
// var form_login = $('#form-login');
// var regUsername = $('#register-username');
// var regPass = $('#register-password');
// var regPassUlangi = $('#register-password-ulangi');
// var tries = 0;
// var h = input.height();
// regPassUlangi.keyup(function(event) {
//   if(regPass.val()!=regPassUlangi.val()){
//     topbar.addClass('error');
//   }else{
//     topbar.removeClass('error');
//   }
// });
// $('.spanColor').height(h+23);
// $('#findpass').on('click',function(){
//   $(this).addClass('hide');
//   $('#register').removeClass('hide');
//   $('#register').addClass('show');
// });
// $('#register').click(function(event) {
//   form_register.removeClass('hide');
//   form_register.addClass('show');
//   form_login.addClass('hide');
// });
// input.on('focus',function(){
//   topbar.removeClass('error success');
//   input.text('');
// });
// btn.on('click',function(){
//   if(tries<=2){
//     var pass = $('#password').val();
//     console.log(pass);
//     if(pass==='this-is-soo-cool'){
//     setTimeout(function(){
//       btn.text('Success!');
//     },250);
//     topbar.addClass('success');
//     form.addClass('goAway');
//     article.addClass('active');
//     tries=0;
//   }
//     else{
//       topbar.addClass('error');
//       tries++;
//       switch(tries){
//         case 0:
//           btn.text('Login');
//           break;
//         case 1:
//           setTimeout(function(){
//           btn.text('2 Kesempatan Tersisa');
//           },300);
//           break;
//         case 2:
//           setTimeout(function(){
//           btn.text('Sekali lagi');
//           },300);
//           break;
//         case 3:
//           setTimeout(function(){
//           btn.text('Cadangkang Password');
//           },300);
//           input.prop('disabled',true);
//           topbar.removeClass('error');
//           input.addClass('disabled');
//           btn.addClass('recover');
//           break;
//          defaut:
//           btn.text('Login');
//           break;
//       }
//     } 
//   }
//   else{
//     topbar.addClass('disabled');
//   }
  
// });

// $('.form').keypress(function(e){
//    if(e.keyCode==13)
//    submit.click();
// });
// input.keypress(function(){
//   topbar.removeClass('success error');
// });