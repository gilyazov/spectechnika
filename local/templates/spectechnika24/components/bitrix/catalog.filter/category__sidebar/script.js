function ajaxFilter(myForm, data) {
    let wait = BX.showWait(myForm);  // показываем прелоадер в правом верхнем углу контейнер
    if (myForm !== null) {
        let ulr = location.pathname;

        $.ajax({
            url: ulr,
            data: data,
            type: 'POST',
            cache: false,
            dataType: "html",
            success: function(dataHtml){

                $('#ajaxContainer').html(dataHtml);

                if (data.del_filter){
                    BX.ajax.history.put(null, ulr);
                }
                else{
                    BX.ajax.history.put(null, ulr + '?' + data + '&ajax=N');
                }

                BX.closeWait(myForm, wait);
            }
        });
    }
}

BX.ready(function(){
    let myForm = document.querySelector("[name = arrFilter_form]");
    $(myForm).on('change', function (event) {
        event.preventDefault();
        let str = $(myForm).serialize();

        ajaxFilter($(myForm), str);
    });
});