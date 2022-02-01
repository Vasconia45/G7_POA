$("document").ready(inicio);

function inicio(){
    let text = $('#search-input');
    text.on('keyup', search);
}

function search(){
    let text = $('#search-input').val().toLowerCase();
    let users = $('.dbUsers');
    users.each(function(){
        let first = $(this).children().eq(0).text().toLowerCase();
        if(first.startsWith(text) && text != ""){
            $(this).css('background', '#81C92C');
        }
        else if(first.startsWith(text) == false || text.length == 0 ){
            $(this).css('background', '');
        }
    })
}