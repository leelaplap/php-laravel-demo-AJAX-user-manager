$(document).ready(function () {
    $('#search-customer').on('keyup', function () {
        let value = $(this).val();
        console.log(value);
        $.ajax({
            url: 'http://127.0.0.1:8000/search',
            type: 'GET',
            dataType: 'json',
            data: {keyword: value},
            success: function (result) {
                let html = '';
                $.each(result, function (index, item) {
                    html += `
                    <tr>
                    <td>${index + 1}</td>
                    <td>${item.name}</td>
                    <td>${item.phone}</td>
                    <td>${item.address}</td>
                    <td>
                     <button class="btn btn-danger">Delete</button>
                     <button class="btn btn-secondary">Edit</button>
                    </td>
                    </tr>
                    `
                });
                $('#list-customer').html(html);
            },

            errors: function () {

            }
        })
    })
});
