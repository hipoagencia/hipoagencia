$('.zip_code_search').blur(function () {

    function emptyForm() {
        $(".street").val("");
        $(".neighborhood").val("");
        $(".city").val("");
        $(".state").val("");
    }

    var zip_code = $(this).val().replace(/\D/g, '');
    var validate_zip_code = /^[0-9]{8}$/;

    if (zip_code != "" && validate_zip_code.test(zip_code)) {

        $(".street").val("");
        $(".neighborhood").val("");
        $(".city").val("");
        $(".state").val("");

        $.getJSON("https://viacep.com.br/ws/" + zip_code + "/json/?callback=?", function (data) {

            if (!("erro" in data)) {
                $(".street").val(data.logradouro);
                $(".neighborhood").val(data.bairro);
                $(".city").val(data.localidade);
                $(".state").val(data.uf);
            } else {
                emptyForm();
                alert("CEP não encontrado.");
            }
        });
    } else {
        emptyForm();
        alert("Formato de CEP inválido.");
    }
});


//NÃO ESQUECER DE ATUALIZAR O PATH_ABSOLUTE ABAIXO

var editor_config = {
    path_absolute : '/',
    selector: 'textarea.my-editor',
    relative_urls: false,
    min_height: 700,
    autoresize_on_init: false,
    plugins: [
        "advlist autolink autoresize lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
        } else {
            cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.openUrl({
            url : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no",
            onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
};

tinymce.init(editor_config);

