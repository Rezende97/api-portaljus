$(document).ready(() => {
    readyDataTable()
})

function readyDataTable() {
    var tabela = $('#datatable-buttons1').DataTable({
        lengthChange: false,
        "language": {
          "searchPlaceholder": "Ex: (Reclamada)",
          "sEmptyTable":     "Nenhum registro encontrado",
          "sInfoEmpty":      "Mostrando 0 até 0 de 0 registros",
          "sSearch":         "Pesquisar: ",

        },
        "columns": [
          { "data": "id" },
          { "data": "reclamada" },
          { "data": "acoes" }
        ],
        "columnDefs": [{
          "targets": [1,2],
          "className": "text-center",
          "createdCell": function (td, cellData, rowData, row, col) {
            $(td).css('align-items', 'center');
          }
        },
        {
            "targets": [0],
            "visible": false,
            "searchable": false
        }],
        "ajax": {
          url: "http://127.0.0.1:8000/api/processo/listReclamada",
          type: 'GET',
          "headers": {
          "Accept": "application/json",
          "Content-Type": "application/json",
          "Authorization": "Bearer "+sessionStorage.getItem('token')},
          "dataSrc": function(response) {
            console.log(response)
            return $.map(response, function(item) {
              return {
                'id': item.id,
                'reclamada': item.reclamada,
                'acoes': `<i class='mdi mdi-border-color mdi-24px' style="cursor: pointer;" > <i class='mdi mdi-close-outline mdi-24px' style="cursor: pointer" >`
              };
            });
          }
        },
        "order": [
          [ 0, "asc" ],
          [ 1, "asc" ],
          [ 2, "asc" ],
        ]
    });
}

function openModalReclamada()
{
    $('#modalReclamada').modal('show')
}

function closeModal() {
    $('#modalReclamada').modal('hide')
}
