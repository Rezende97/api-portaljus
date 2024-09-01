$(document).ready(() => {
    const token = sessionStorage.getItem('token');

    if (token == ''){

        Swal.fire("Portal Jurídico", "Tempo de acesso esgotado", "warning");

        setTimeout(() => {
            window.location.href = 'http://127.0.0.1:8000/'
        }, 1000);
    }

    $('.close-app').click((e) =>{
        e.preventDefault()

        window.location.href = 'http://127.0.0.1:8000/'
        sessionStorage.removeItem('token');
        sessionStorage.clear();

    })
})
