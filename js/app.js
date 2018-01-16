var app = {
  init: function() {
    $('.item-edit').on('click', app.showEditForm);
  },

  showEditForm: function() {
    var $form = $(this).parent().prev();
    var $taskLabel = $form.prev().hide();
    $form.fadeIn();
    $form.find('.item-form-text').val($taskLabel.text());
  }
}

$(app.init);
