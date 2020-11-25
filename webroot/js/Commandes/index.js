
// Update the commandes data list
function getCommandes() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (data) {
                    var commandeTable = $('#commandeData');
                    commandeTable.empty();
                    $.each(data.commandes, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="btn btn-warning" rowID="' +
                                    value.id + 
                                    '" data-type="edit" data-toggle="modal" data-target="#modalCommandeAddEdit">' + 
                                    'edit</a>' +
                                '<a href="javascript:void(0);" class="btn btn-danger"' +
                                    'onclick="return confirm(\'Are you sure to delete data?\') ?' + 
                                    'commandeAction(\'delete\', \'' + 
                                    value.id + 
                                    '\') : false;">delete</a>' +
                                '</td></tr>';
                        commandeTable.append('<tr><td>' + value.id + '</td><td>' + value.name + '</td><td>' + value.code + editDeleteButtons);
 
                    });

                }

    });
}

 /* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}


function commandeAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var commandeData = '';
    var ajaxUrl = urlToRestApi;
    frmElement = $("#modalCommandeAddEdit");
    if (type == 'add') {
        requestType = 'POST';
        commandeData = convertFormToJSON(frmElement.find('form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        ajaxUrl = ajaxUrl + "/" + id;
        commandeData = convertFormToJSON(frmElement.find('form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    frmElement.find('.statusMsg').html('');
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(commandeData),
        success: function (msg) {
            if (msg) {
                frmElement.find('.statusMsg').html('<p class="alert alert-success">Commande data has been ' + statusArr[type] + ' successfully.</p>');
                getCommandes();
                if (type == 'add') {
                    frmElement.find('form')[0].reset();
                }
            } else {
                frmElement.find('.statusMsg').html('<p class="alert alert-danger">Some problem occurred, please try again.</p>');
            }
        }
    });
}

// Fill the commande's data in the edit form
function editCommande(id) {
    $.ajax({
        type: 'GET',
        url: urlToRestApi + "/" + id,
        dataType: 'JSON',
        success: function (data) {
            $('#id').val(data.commande.id);
            $('#name').val(data.commande.name);
            $('#code').val(data.commande.code);
        }
    });
}

// Actions on modal show and hidden events
$(function () {
    $('#modalCommandeAddEdit').on('show.bs.modal', function (e) {
        var type = $(e.relatedTarget).attr('data-type');
        var commandeFunc = "commandeAction('add');";
        $('.modal-title').html('Add new commande (commande)');
        if (type == 'edit') {
            var rowId = $(e.relatedTarget).attr('rowID');
            commandeFunc = "commandeAction('edit'," + rowId + ");";
            $('.modal-title').html('Edit commande (commande)');
            editCommande(rowId);
        }
        $('#commandeSubmit').attr("onclick", commandeFunc);
    });

    $('#modalCommandeAddEdit').on('hidden.bs.modal', function () {
        $('#commandeSubmit').attr("onclick", "");
        $(this).find('form')[0].reset();
        $(this).find('.statusMsg').html('');
    });
});



