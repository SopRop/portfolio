$(document).ready(function(){
  $('.type-it').typeIt({
       lifeLike: true,
       speed: 90,
       autoStart: false,
       cursor: true,
       breakLines: true,
       deleteSpeed: 80
  })
  .tiType('Sophie ROPERT')
  .tiBreak()
  .tiType('29')
  .tiDelete(2)
  .tiType('30yo / LYON, FR')
  .tiBreak()
  .tiType('Geniu')
  .tiDelete(5)
  .tiType('Web developer')
});
