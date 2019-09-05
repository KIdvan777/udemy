(function($){
    wp.customize('ju_header_show_search_setting', function(value){
        value.bind(function(new_val){
            if(new_val){
                $('#top-search').show();
            }else{
                $('#top-search').hide();
            }
        });
    });
})(jQuery);
