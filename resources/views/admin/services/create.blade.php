@include('layouts.sidebar')

@section('title', "Add Services")

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Add Services</h1>

    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header">Serices Details</div>
                <div class="card-body">
                    <form action="{{ route('service.store') }}" method="POST" id="addService" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 ">
                                    <div class="card-header">Service Picture</div>
                                    <div class="card-body text-center">
                                        <img class="img-account-profile rounded-circle mb-2" src="{{ asset('admin/img/undraw_profile_1.svg') }}" alt="" width="300px" height="300px">
                                        <input type="file" id="fileInput" accept=".png, .jpg, .jpeg" hidden name="image" onchange="checkFileSize(this)">
                                        <button class="btn btn-primary" type="button" onclick="document.getElementById('fileInput').click()">Upload new image</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row gx-3 mb-3">
                                    <div class="col-sm-4">
                                        <label class="small mb-1" for="inputServiceName">Service Name <span class="text-danger">*</span></label>
                                        <input class="form-control" id="inputServiceName" name="name" type="text" placeholder="Enter services name" value="">
                                    </div>

                                <div class="row mb-3">
                                    <div class="col-sm-6">
                                        <label class="small mb-1" for="inputServiceCategory">Category <span class="text-danger">*</span></label>
                                        <input class="form-control" id="inputServiceCategory" type="text" name="category" placeholder="Enter service category" value="">
                                    </div>
                                </div>
                                <div class="row gx-3 mb-3">
                                    <div class="col-sm-6">
                                        <label class="small mb-1" for="inputPrice">Price <span class="text-danger">*</span></label>
                                        <input class="form-control" id="inputPrice" type="number" name="price" placeholder="Enter service price" value="">
                                    </div>
                                </div>
                
                        <div class="text-right">
                            <a href="{{ route('services.index') }}" class="btn btn-secondary" type="button">Cancel</a>
                            <button class="btn btn-primary" type="submit">Save alumni</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@stop

@push('scripts')

{!! JsValidator::formRequest('App\Http\Requests\StoreServiceRequest', '#addServices') !!}

<script>
    function checkFileSize(input) {
        var maxSizeInBytes = 300000; // 300KB
        var fileSize = input.files[0].size;

        if (fileSize > maxSizeInBytes) {
            alert("Error: Image size should be less than 300KB.");
            // Clear the file input
            input.value = "";
            return false;
        }

        return true;
    }

    document.getElementById('addService').addEventListener('submit', function (e) {
        var fileInput = document.getElementById('fileInput');

        if (!checkFileSize(fileInput)) {
            e.preventDefault(); 
        }
    });
</script>

<script>
    document.getElementById('fileInput').addEventListener('change', function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.querySelector('.img-account-profile').src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>

<script>
    // $(document).ready(function() {

    //     var programsData = <?php echo json_encode($programs); ?>;

    //     $('#department_id').on('change', function() {
    //         var departmentId = $(this).val();

    //         $('#program_id').empty();

    //         $('#program_id').append('<option value="" selected disabled>Select program</option>');

    //         if (departmentId) {
    //             var filteredPrograms = programsData.filter(function(program) {
    //                 return program.department_id == departmentId;
    //             });

    //             filteredPrograms.forEach(function(program) {
    //                 $('#program_id').append('<option value="' + program.id + '">' + program.program_name + '</option>');
    //             });

    //             $('#program_id').trigger('change');
    //         }
    //     });

    // });

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.edit-js-example-basic-single').select2();
    });
</script>
@endpush