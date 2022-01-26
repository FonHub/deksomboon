$(function () {
  $('.zoom').zoom();
  $('.thumb').on('click', 'a', function (e) {
    e.preventDefault();
    var thumb = $(e.delegateTarget);
    if (!thumb.hasClass('active')) {
      thumb.addClass('active').siblings().removeClass('active');
      $('.zoom')
        .zoom({
          url: this.href
        })
        .find('img').attr('src', this.href);
    }
  });
});