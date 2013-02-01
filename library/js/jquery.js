(function (e) {
    "use strict";
    var showSkills = function (e) {

        $(".skills ol:visible").hide();
        $(this).parent().next().show();
        event.preventDefault()
    };

    $(function () {
        $(".skills ol").not(":first").hide();
        $(".skills a").on("click", showSkills);
        $("#contactForm").validate({rules:{prenom:{required:true, minlength:2}, name:{required:true, minlength:2}, email:{required:true, email:true, minlength:8}, commentaire:"required"}, messages:{prenom:{required:"Entrez votre prénom", minlength:"Votre prénom doit avoir minimum 2 lettres"}, name:{required:"Entrez votre nom", minlength:"Votre prénom doit avoir minimum 2 lettres"}, email:{required:"Votre adresse email est necessaire pour vous contacter", email:"Votre adresse email doit être dans ce format nom@domain.com", minlength:jQuery.format("Votre email doit avoir minimum 8 caractères")}, commentaire:"N'oubliez pas votre message =)"}, submitHandler:function (e) {
            console.log("message envoyé")
            $("#contactForm").find("legend").text("Merci, votre message a été envoyé. Après traitement de votre demande par mes deux chats Berlioz et Choupette, je vous répond. Promis ça ira vite!")
        }})
    })
})(jQuery)