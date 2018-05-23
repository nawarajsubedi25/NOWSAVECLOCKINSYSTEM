
$(function() {

    var start = moment().subtract(-1, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
    
});

// Recent Activites show function
function favoriteEmployee() {
   document.getElementById('favoriteEmployee').style.display = "block";
    document.getElementById('favorite').style.background = "Red";
    document.getElementById('recentActivites').style.display = "none";
       document.getElementById('activites').style.background = "none";
     document.getElementById('searchResult').style.display = "none";
        document.getElementById('result').style.background = "none";
         document.getElementById('addEmployee').style.display = "none";
}
function recentActivites() {
   document.getElementById('recentActivites').style.display = "block";
     document.getElementById('activites').style.background = "Red";
    document.getElementById('searchResult').style.display = "none";
       document.getElementById('result').style.background = "none";
     document.getElementById('favoriteEmployee').style.display = "none";
        document.getElementById('favorite').style.background = "none";
         document.getElementById('addEmployee').style.display = "none";
}
function searchResult() {
   document.getElementById('searchResult').style.display = "block";
     document.getElementById('result').style.background = "Red";
    document.getElementById('recentActivites').style.display = "none";
       document.getElementById('activites').style.background = "none";
     document.getElementById('favoriteEmployee').style.display = "none";
        document.getElementById('favorite').style.background = "none";
         document.getElementById('addEmployee').style.display = "none";
}
function addEmployee(){
    document.getElementById('addEmployee').style.display = "block";
     document.getElementById('searchResult').style.display = "none";
      document.getElementById('recentActivites').style.display = "none";
       document.getElementById('favoriteEmployee').style.display = "none";
}

 // Popover for user 
$(function(){
    $('[rel="popover"]').popover({
        container: 'body',
        html: true,
        content: function () {
            var clone = $($(this).data('popover-content')).clone(true).removeClass('hide');
            return clone;
        }
    }).click(function(e) {
        e.preventDefault();
    });
$('body').on('click', function (e) {
    $('[rel="popover"]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
            $(this).popover('hide');
        }
    });
});
});

// Pagenation and Search in table 
 $(document).ready(function() {
      $('#information').DataTable({
    
     language: {
      oPaginate: {
          sNext: '<i class="fa fa-forward"></i>',
          sPrevious: '<i class="fa fa-backward"></i>',
          sFirst: '<i class="fa fa-step-backward"></i>',
          sLast: '<i class="fa fa-step-forward"></i>' 
      }
      
   } ,
   pagingType: 'full_numbers',
   pageLength: 6,
    "lengthMenu": [[6, 18, 36, -1], [6, 18, 36, "All"]]
});
        } 
        );
 