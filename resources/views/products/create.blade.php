<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple laravel 11 Crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark py-3 bg-blue-600 text-center">
        <h3 class="text-white">Simple laravel 11 Crud</h3>
    </div>
    <!-- container -->
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Create Product</h3>
                    </div>
                    <!-- Form -->
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="name" class="form-label h5">Name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Name" name="name">
                            </div>
                            <!-- SKU -->
                            <div class="mb-3">
                                <label for="Sku" class="form-label h5">Sku</label>
                                <input type="text" class="form-control form-control-lg" placeholder="sku" name="Sku">
                            </div>
                            <!-- Price -->
                            <div class="mb-3">
                                <label for="Price" class="form-label h5">Price</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Price" name="Price">
                            </div>
                            <!--Description  -->
                            <div class="mb-3">
                                <label for="Price" class="form-label h5">Description</label>
                                <textarea class="form-control form-control-lg" placeholder="Description" name="Description"
                                    rows="10" cols="30"></textarea>
                            </div>
                            <!-- Image -->
                            <div class="mb-3">
                                <label for="Image" class="form-label h5">Image</label>
                                <input type="file" class="form-control form-control-lg" placeholder="Image" name="Image">
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-lg btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</body>

</html>