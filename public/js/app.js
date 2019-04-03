$(document).ready(function(){

    $(".deleteComment").click(function(e){
        e.preventDefault();
        $(".messageComment").html("<p>Le commentaire à était supprimé</p>");



    });

});

function formContact(data, textStatus, xhr) {

};