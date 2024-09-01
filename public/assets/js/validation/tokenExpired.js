$(document).ajaxError(function(event, xhr, settings, error) {

    if (xhr.status == 401 && xhr.responseJSON.message == "Token has expired") {

        Swal.fire("Portal Jurídico", "Tempo de acesso esgotado", "warning");

        setTimeout(() => {
            window.location.href = 'http://127.0.0.1:8000/'
        }, 1000);

        return false;
    }
});
