( function( $ ) {
    $(document).ready(function () {// chargement du script une fois la page entiérement chargée
        //fonction de modification des class css
        //selector= class ou id a cibler
        //transitionClass=css contenant l'animation 
        //cover= position de defilement
        function animateSection(selector, transitionClass,cover,hide) {
            var windowHeight = $(window).height();
            var scroll = $(window).scrollTop();
            
            $(selector).each(function() {
                var elementTop = $(this).offset().top;

                if (scroll > elementTop - windowHeight * cover) {
                    $(this).addClass(transitionClass);
                    $(this).removeClass(hide);
                } else {
                    $(this).removeClass(transitionClass);
                    $(this).addClass(hide);
                }
            });
        };

        //animation des titres
        function animate_titles() {
            animateSection('.title_appear', 'title_transition',0.8,'section-hidden');
        };

        //animation header
        function animate_header() {
            animateSection('.banner', 'section-transition-header',0.2,'section-hidden');
        };

        //animation header_img
        function animate_logo() {
            animateSection('.banner_img', 'logo-transition-up', 0.5);
            setTimeout(function () {//retardement de l'animation du logo aprés son animation de transition
                $('.banner_img').removeClass('logo-transition-up').addClass('logo-animation');
            }, 2000);
        };

        //animations des sections
        function animate_story() {
            animateSection('.story', 'section-transition-up',0.7,'section-hidden');
        };
        function animate_character() {
            animateSection('#characters', 'section-transition-left',0.7,'section-hidden');
        };
        function animate_place() {
            animateSection('#place', 'section-transition-right',0.7,'section-hidden');
        };
        function animate_studio() {
            animateSection('#studio', 'section-transition-header',0.7,'section-hidden');
        };
        function animate_nomination() {
            animateSection('#nomination', 'section-transition-left',0.7,'section-hidden');
        };
        function animate_colophon() {
            animateSection('#colophon', 'section-transition-up',1,'section-hidden');
        };

        //ecoute de la page
        $(window).scroll(function() {
            animate_header();
            animate_logo();
            animate_story();
            animate_character();
            animate_place();
            animate_studio();
            animate_nomination();
            animate_colophon()
            animate_titles();

        });


    });
} )( jQuery );


