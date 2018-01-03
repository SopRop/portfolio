$(document).ready(function(){
  $('.type-it').typeIt({
       lifeLike: true,
       speed: 95,
       autoStart: false,
       cursor: true,
       breakLines: true,
       deleteSpeed: 90
  })
  .tiType('Sophie ROPERT')
  .tiBreak()
  .tiType('29 a')
  .tiDelete(4)
  .tiType('30 ans / LYON, FR')
  .tiBreak()
  .tiType('Développeur Web')
});
