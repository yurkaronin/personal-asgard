var linkNav = document.querySelectorAll('[href^="#"]'); //выбираем все ссылки к якорю на странице
var tagHtml = document.getElementsByTagName('html')[0];


  V = 0.3; // скорость, может иметь дробное значение через точку (чем меньше значение - тем больше скорость)

for (var i = 0; i < linkNav.length; i++) {
  linkNav[i].addEventListener('click', function (e) { //по клику на ссылку
    e.preventDefault(); //отменяем стандартное поведение

    tagHtml.classList.remove('show-main-nav'); // 

    var w = window.pageYOffset, // производим прокрутку
      hash = this.href.replace(/[^#]*(.*)/, '$1'); // к id элемента, к которому нужно перейти
    t = document.querySelector(hash).getBoundingClientRect().top, // отступ от окна браузера до id
      start = null;
    requestAnimationFrame(step); // подробнее про функцию анимации [developer.mozilla.org]
    function step(time) {
      if (start === null) start = time;
      var progress = time - start,
        r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));
      window.scrollTo(0, r);
      if (r != w + t) {
        requestAnimationFrame(step)
      } else {
        location.hash = hash // URL с хэшем
      }
    }
  }, false);
};



document.querySelector('.header__menu-button').onclick = function() {
  document.querySelector('html').classList.toggle('show-main-nav');
}

// document.querySelector('#callback__window-call').onclick = function() {
//   document.querySelector('html').classList.toggle('show-callback');
// }

// document.querySelector('button[type="submit"]').onclick = async e => {
//   e.preventDefault(); //отменяем стандартное поведение
//   var form = e.target.closest('form');

//   let response = await fetch('/ajax/mail.php', {
//     method: 'POST',
//     body: new FormData(form)
//   });

//   let result = await response.json();

//   if ( result.status != 'error' ) {
//     console.log(result);
//   }

// }



$(function(){
  $(".phone").mask("9 (999) 999-9999");

  $('button[type="submit"]').on('click', function(){

    var form = $(this).closest('form');

    if ( form.valid() ) {
      var msg = form.serializeArray();

      $.ajax({
        dataType: 'json',
        url: '/ajax/mail.php',
        type:'post',
        data: $.param(msg),
        success: function(data){
          if ( data.status != 'error' ) {
            resetForm();
            window.location.href = "/thanks.php";
          }

          closeModal();
        },
        error: function(jqXHR, textStatus, errorThrown) {
        }
      });

    }

    return false;
  });


  $('#callback__window-call').on('click', function(){
    showModal('#callback-modal');
    return false;
  });

  $('.ask-price__window-call').on('click', function(){

    var modal = $('#ask-price-modal');
    modal.find('input[name="product"]').val('');

    var catalogCard = $(this).closest('.catalog-card');
    modal.find('input[name="product"]').val( catalogCard.find('.catalog-card__title').text() );

    showModal('#ask-price-modal');
    return false;
  });


  $('.modal').on('click', function( event ){
    if (  $(event.target).closest('.modal__container').length == 0) {
      closeModal();
    }
  });

});


function showModal(selector) {
  $('html').addClass('html-fixed');
  $(selector).css('display', 'flex');
  return false;
}

function closeModal() {
  $('.modal').hide();
  $('.html-fixed').removeClass('html-fixed');
  resetForm();
  return false;
}

function resetForm() {
  console.log('resetForm');
  // чистим все формы после закрытия модалки
  $('form').each(function(){
    $(this)[0].reset();
  });
}