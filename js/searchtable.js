           
    // Write on keyup event of keyword input element
    $("#search input").keyup(function(){
        _this = this;
        // Show only matching TR, hide rest of them
        $("#table tr").hide();
        $("#table tbody").find("tr:nth-child(odd)").each( function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) != -1) {
                $(this).show();
                $(this).next().show();
            }
        });
    }); 