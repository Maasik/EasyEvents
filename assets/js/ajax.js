// Load Functions

var ajax_load = "<tr class='odd gradeX'><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td><td class='cell-center'><img src='/assets/images/loading.gif'/></td></tr>";

function loadData () {
    $("#events").html(ajax_load).load('/includes/edit.php');
}

function loadAlert(c) {
    if(c == "200") {
        $(".alertarea").load("/assets/elements/success.html").show().delay(3000).fadeOut('slow');
        loadData();
    } else if (c == "400") {
       $(".alertarea").load("/assets/elements/failure.html").show().delay(3000).fadeOut('slow');
    } else {
       $(".alertarea").load("/assets/elements/warning.html").show().delay(3000).fadeOut('slow');
    }
}

function publishData() {
    $.get('/includes/geojson.php', function(data) {
                loadAlert(data);
    });
    return false;
}

// Submit/Click Functions

$("#newevent").submit(function(e) {

    var url = "/includes/insert.php";
    
    $.ajax({
           type: "POST",
           url: url,
           data: $("#newevent").serialize(),
           success: function(data)
           {
               loadAlert(data);
                $('#newevent')[0].reset();
           }
         });
        
    e.preventDefault();
});

$("#refresh-btn").click(function() {
  loadData();
});

$("#publish-btn").click(function() {
  publishData();
});

// Onload

$(document).ready(function() { 
    $('#enterSubmit').click(function() {
        $('#newevent').submit();
    });
});

$(function () {
    $('.datepicker').datetimepicker({
        format: 'YYYY-MM-DD',
        showClose: true
    });
    $('.timepicker').datetimepicker({
        format: 'h:mm:00',
        showClose: true
    });
});

loadData();

