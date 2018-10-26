import $ from 'jquery'
import 'datatables.net'
import 'datatables.net-bs'

//Base Url
const dataUrl =  `${document.URL}/datatables`;

// Tables
const postsTable = $('#posts');

//Datatables
postsTable.DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: dataUrl,

    },
    columns: [
        { data: 'id' },
        { data: 'title' },
        { data: 'name' },
        {
            data: 'id',
            render: function (data, type, row, meta) {
                return `<a href="posts/${data}/show" class="btn btn-primary btn-sm">Detalhes</a> <a href="posts/${data}/edit" class="btn btn-warning btn-sm">Editar</a> <a href="posts/${data}/delete" class="btn btn-danger btn-sm">Remover</a>`;
           
            }
        },
    ]
});
