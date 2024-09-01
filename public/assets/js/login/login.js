$(document).ready(() => {
    // Swal.fire({
    //     title: "Good job!",
    //     text: "You clicked the button!",
    //     icon: "success"
    //   });

    $('.enter-btn').click((e) => {

        e.preventDefault();

        const cpf_login = $(".cpf_login").val()
        const password_login = $(".password_login").val()

        if (cpf_login == '' || password_login == '') return Swal.fire("Portal Jurídico", "Obrigatório preencher todos os campos", "warning");
        if (cpf_login.length != 11) return Swal.fire("Portal Jurídico", "CPF ou Senha Inválido", "error");
        if (password_login.length < 8) return Swal.fire("Portal Jurídico", "CPF ou Senha Inválido", "error");

        $.ajax({
            url: "http://127.0.0.1:8000/api/authentication",
            type: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json"
            },
            data: JSON.stringify({
                "cpf": cpf_login,
                "password": password_login
            }),
            beforeSend: function() {
                $("#loading").show();
            },
            success: function(data){

                $("#loading").hide();

                console.log(data.status)

                if (!data.status) return Swal.fire("Portal Jurídico", data.message, "error");

                Swal.fire("Portal Jurídico", data.message, "success");

                sessionStorage.setItem('token', data.token);

                setTimeout(() => {
                    window.location.href = $('.path-dash').val()
                }, 1000);
            },
            error: function(xhr, status, error){
                $("#loading").hide();
            }
        })
    })
})
