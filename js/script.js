function showAlert(variable) {
    var data = JSON.parse(localStorage.getItem('data'));
    if (data.message !== '') {
        $(variable).html("<div class='alert alert-" + data.status + "' role='alert'>" + data.message + "</div>");
    }
}

function disabledSubmit(variable) {
    var data = JSON.parse(localStorage.getItem('data'));
    if (data.status === 'success') {
        $(variable).attr("disabled", "disabled");
    }
}