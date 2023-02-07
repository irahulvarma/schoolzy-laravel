$(function() {
    $('.admin-search').select2(
        {
            width : '100%',
            ajax: {
                url: '/',
                dataType: 'json'
                
            }
        },
        
    );
});