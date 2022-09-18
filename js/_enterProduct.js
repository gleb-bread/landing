document.addEventListener("DOMContentLoaded", function () {
    let btn = $('.shop__product__get');
    let idProducts = $('.shop__product__counter__value');
    for (let i = 0; i < btn.length; i++) {
        btn[i].onclick = () => {
            let dataJSON = {
                'id': idProducts[i].dataset.id,
                'value': idProducts[i].value
            };
            let dataStr = JSON.stringify(dataJSON);
            $.ajax({
                type: "post",
                url: "../server/addProduct.php",
                dataType: "html",
                data: dataStr,
                success: function () {
                    console.log(1);
                },
                error: function (jqXHR, exception) {
                    if (jqXHR.status === 0) {
                        console.log('Not connect. Verify Network.');
                    } else if (jqXHR.status == 404) {
                        console.log('Requested page not found (404).');
                    } else if (jqXHR.status == 500) {
                        console.log('Internal Server Error (500).');
                    } else if (exception === 'parsererror') {
                        console.log('Requested JSON parse failed.');
                    } else if (exception === 'timeout') {
                        console.log('Time out error.');
                    } else if (exception === 'abort') {
                        console.log('Ajax request aborted.');
                    } else {
                        console.log('Uncaught Error. ' + jqXHR.responseText);
                    }
                }
            });
        }
    }
});