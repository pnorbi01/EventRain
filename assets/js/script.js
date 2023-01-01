$(document).ready(function(){

    $('#manageUsers').DataTable({
        ajax: 'assets/ajax/getUsers.php',
    });

    $('body').on('click', '.banUser', function() {
        var id = $(this).data('id');
        let name = $(this).data('name');
        let answer = confirm('Do you want to BAN user with name '+name+'?');
        if(answer) {
            $.post('assets/ajax/banUsers.php', { id: id}, function (data) {
                window.location.href = data;
            });
        }
    })
    
    $('body').on('click', '.unbanUser', function() {
        var id = $(this).data('id');
        let name = $(this).data('name');
        let answer = confirm('Do you want to UNBAN user with name '+name+'?');
        if(answer) {
            $.post('assets/ajax/unbanUsers.php', { id: id}, function (data) {
                window.location.href = data;
            });
        }
    })

    $('#manageEvents').DataTable({
        ajax: 'assets/ajax/getEvents.php',
    });

    $('body').on('click', '.setInactive', function() {
        var id = $(this).data('id');
        let name = $(this).data('name');
        let answer = confirm('Do you want to DISABLE event with name '+name+'?');
        if(answer) {
            $.post('assets/ajax/setInactive.php', { id: id}, function (data) {
                window.location.href = data;
            });
        }
    })
    
    $('body').on('click', '.setActive', function() {
        var id = $(this).data('id');
        let name = $(this).data('name');
        let answer = confirm('Do you want to ENABLE event with name '+name+'?');
        if(answer) {
            $.post('assets/ajax/setActive.php', { id: id}, function (data) {
                window.location.href = data;
            });
        }
    })


    $('body').on('click', '.addName', function () {
        let html = ' ' +
            '        <div class="row pt-3 gifts">\n' +
            '            <div class="col-md-5 ">\n' +
            '                <label for="name" class="form-label">Gift name</label>\n' +
            '                <input type="text" class="form-control" id="name" name="giftName[]">\n' +
            '            </div>\n' +
            '            <div class="col-md-5 mt-5">\n' +
            '                <button type="button" class="btn btn-primary removeName">\n' +
            '                    <i class="bi bi-dash"></i>\n' +
            '                </button>\n' +
            '            </div>\n' +
            '        </div>';

        $('.gifts').last().after(html);
    });

    $('body').on('click', '.removeName', function () {
        $(this).closest('.gifts').remove();
    });


}); 