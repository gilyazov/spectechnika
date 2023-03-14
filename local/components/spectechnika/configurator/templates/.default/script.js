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
    let btn = document.querySelector(".js-result");
    $(btn).on('click', function (event) {
        event.preventDefault();
        let wait = BX.showWait(btn);

        $.ajax({
            data: {
                set_filter: "Y",
                body_type: document.querySelector('[name = "body-type"]:checked').value,
                wheel_formula: document.querySelector('[name = "wheel-formula"]:checked').value,
                cmu: document.querySelector('[name = "cmu"]:checked').value,
                carrying: document.querySelector('[name = "carrying"]:checked').value,
                volume: document.querySelector('[name = "volume"]:checked').value
            },
            type: 'POST',
            cache: false,
            dataType: "html",
            success: function(dataHtml){

                $('#ajaxContainer').html(dataHtml);
                BX.closeWait(btn, wait);
            }
        });
    });
});