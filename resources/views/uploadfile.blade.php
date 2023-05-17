<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js">
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Dropzone PDF Upload in Laravel</h1><br>
                <form action="{{ route('pdf.store')}}" method="post" name="file" files="true"
                enctype="multipart/form-data" class="dropzone" id="pdf-upload">
                @csrf
            </form>
                <button type="button" id="button" class="btn btn-primary">Upload</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone('#pdf-upload', 
            maxFilesize: 1,
            acceptedFiles: ".pdf",
            addRemoveLinks: true,
            autoProcessQueue: false,
            init: function () {
            
                //Aksi ketika button upload di klik
                $("#button").click(function (e)) {
                    e.preventDefault();
                    myDropzone.processQueue();
    
                });
                this.on('sending', function(file, xhr, formData) {
                    var data = $('#pdf-uploud').serializeArray();
                    $.each(data, function(key, eL) {
                        formData.append(el.name, el.value);
                        
                    });
                
                });
            
         </script>
</body>
</html>