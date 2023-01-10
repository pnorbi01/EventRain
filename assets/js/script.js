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

    $('body').on('click', '.deleteEvent', function() {
        var id = $(this).data('id');
        let name = $(this).data('name');
        let answer = confirm('Do you want to DELETE event with name '+name+'?');
        if(answer) {
            $.post('assets/ajax/deleteEvent.php', { id: id}, function (data) {
                window.location.href = data;
            });
        }
    })

    $('#manageGifts').DataTable({
        ajax: 'assets/ajax/getGifts.php',
    });

    $('body').on('click', '.deleteGift', function() {
        var id = $(this).data('id');
        let name = $(this).data('name');
        let answer = confirm('Do you want to DELETE gift with name '+name+'?');
        if(answer) {
            $.post('assets/ajax/deleteGift.php', { id: id}, function (data) {
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
            '                <button type="button" class="btn btn-danger removeName">\n' +
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

function searchFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("invitedPeopleTable");
    tr = table.getElementsByTagName("tr");
  
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }