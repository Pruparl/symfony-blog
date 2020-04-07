$(function () { // DOM ready
    // interception du clic
    $('.btn-content').click(function (event) {
        // éviter d'aller sur la page du lien
        event.preventDefault();

        // objet Jquery sur le lien
        var $btn = $(this);

        // Appel ajax en get
        $.get(
            $btn.attr('href'),
            function (response) {
                var $modal = $('#modal-content');

                $modal.find('.modal-body').html(response);

                $modal.modal('show');

            }
        );
    });

});
