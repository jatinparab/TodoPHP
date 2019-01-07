$(".todo").hover(
    function() {
        $( this ).find( ".nb" ).hide().fadeIn(800);
    }, function() {
      $( this ).find( ".nb" ).fadeOut(400);
      reload();
    }
  );

function edit(id){
    $('#content'+id).hide();
    $('#input'+id).show();
    //put cursor at the end
    $("#input"+id).focus(function(){
        if (this.setSelectionRange)
        {
        var len = $(this).val().length;
        this.setSelectionRange(len, len);
        }
        else
        {
        $(this).val($(this).val());
        }
   
    });
    $('#input'+id).focus();
    $('#editbtn'+id).hide();
    $('#deletebtn'+id).hide();
    $('#donebtn'+id).hide();
    $('#doneeditbtn'+id).show();
    $('#canceleditbtn'+id).show();
}

function addtodo(){
    content = $('#todocontent').val();
    $.ajax({
        type: "POST",
        url: "backend/addtodo_ajax.php",
        data: {
            //data goes here
            content
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function dbclear(){
   
    $.ajax({
        type: "POST",
        url: "backend/dbclear_ajax.php",
        data: {
            //data goes here
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function doneclear(){
   
    $.ajax({
        type: "POST",
        url: "backend/doneclear_ajax.php",
        data: {
            //data goes here
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function undo(id){
   
    $.ajax({
        type: "POST",
        url: "backend/undo_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function deletetodo(id){
    $.ajax({
        type: "POST",
        url: "backend/deletetodo_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function donetodo(id){
    $.ajax({
        type: "POST",
        url: "backend/donetodo_ajax.php",
        data: {
            //data goes here
            id
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}


function doneedit(id){
    content = $('#input'+id).val();
    $.ajax({
        type: "POST",
        url: "backend/doneedit_ajax.php",
        data: {
            //data goes here
            id,
            content
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               reload();
               $('#head').click();
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function reload(){
    $('body').load("index.php");
}