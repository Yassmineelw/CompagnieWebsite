$(document).ready(function () {
    // The path to action from CakePHP is in urlToLinkedListFilter 
    $('#commande-id').change(function () {
        var commandeId = $(this).val();
        if (commandeId) {
            $.ajax({
                url: urlToLinkedListFilter,
                data: 'commande_id=' + commandeId,
                success: function (villes) {
                    $select = $('#ville-id');
                    $select.find('option').remove();
                    $.each(villes, function (key, value)
                    {
                        $.each(value, function (childKey, childValue) {
                            $select.append('<option value=' + childValue.id + '>' + childValue.name + '</option>');
                        });
                    });
                }
            });
        } else {
            $('#ville-id').html('<option value="">Select commande first</option>');
        }
    }).change();
});


