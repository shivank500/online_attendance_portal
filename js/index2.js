$(document).ready(function(){
    $('#register').click(function() {
    $('#register1').toggle({direction:'right'},1000).html("<ul style='list-style: none; text-align:center;'><li><h2><a href='student_registration.php' target='_blank'>Registration for Students&nbsp;&nbsp;</a></h2></li>&nbsp;<li></li><li><h2><a href='staff_registration.php' target='_blank'>Registration for Staff</a></h2></li></ul>");
    });
 });