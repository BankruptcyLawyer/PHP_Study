function send_form(form_id) {
    var form = $("#"+order-form);
    var msg = form.serialize();
    $.ajax({
        type: 'POST',
        url: '../burger.php', // Обработчик собственно
        data: msg,
        success: function(data) {
            alert('Отправлено');
        },
        error:  function(){
            alert('Ошибка!');
        }
    });
    return false;
}