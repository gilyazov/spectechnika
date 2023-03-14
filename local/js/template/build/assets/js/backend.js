document.addEventListener("DOMContentLoaded", (event) => {
    // добавление товара к сравнению
    const comparisonBtns = document.querySelectorAll('.js-comparison-btn');
    function comparisonAdd(){
        comparisonBtns.forEach(element => {
            const comparisonBtn = element;
            comparisonBtn.addEventListener('click', event => {
                event.preventDefault();

                let id = comparisonBtn.dataset.id;
                let url = '/compare/?action=ADD_TO_COMPARE_LIST&ajax_action=Y&id=' + id;
                let deleteUrl = '/compare/?action=DELETE_FROM_COMPARE_LIST&ajax_action=Y&id=' + id;

                $.get(url, function (data) {
                    alert('tst');
                    /*if (data.COUNT > 3){
                        $.get(deleteUrl, function (data) {
                            BX.onCustomEvent('onCatalogDeleteCompare', data);
                        });
                    }
                    else if (data.COUNT > 0){
                        BX.onCustomEvent('OnCompareChange', data);
                    }*/
                });
            });
        });
        BX.addCustomEvent('OnCompareChange', function(event) {
            let count = event.data.COUNT;
            $('.js-header-comparison-count').text(count);
        });
        BX.addCustomEvent('onCatalogDeleteCompare', function(event) {
            let count = event.data.COUNT;
            $('.js-header-comparison-count').text(count);

            if (typeof window.openModal === 'function') {
                window.openModal('#callback-modal-comparison');
            }
        });
    }

    if (comparisonBtns.length) {
        comparisonAdd();
    }


    // печать кп
    const printBtn = document.querySelectorAll('.js-print');
    printBtn.forEach(btn => {
        btn.addEventListener('click', function (event) {
            event.preventDefault();

            BX.ajax.runComponentAction('spectechnika:print.kp', 'makeZip', {
                mode: 'class',
                signedParameters: btn.getAttribute('data-items'),
            }).then(function (response) {
                if (response.status === 'success') {
                    location.href = "/tmp.zip";
                }
            });
        });
    });
});
