{{ View::make('partials/header') }}
<!-- Title -->
<title>Leaf | Analyzer</title>
</head>
{{ View::make('partials/navbar') }}


<!-- ##### Breadcrumb Area Start ##### -->
<div class="breadcrumb-area">
    <!-- Top Breadcrumb Area -->
    <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center"
        style="background-image: url(img/bg-img/20.jpg);">
        <h2>ANALYZE</h2>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Analyzer</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcrumb Area End ##### -->

<!-- ##### Portfolio Area Start ##### -->
<div class="alazea-portfolio-area portfolio-page section-padding-0-100 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <br>
                <!-- Section Heading -->
                <div class="section-heading text-center">
                    <h2>Start Analysis</h2>
                    <p>This is where the real magic happens.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">

        <div class="col-lg-12" style="">
            <div class="card" style="width: 70%;">
                <div class="card-body">
                    <form>
                        <div class="form-group w-100">
                            <label for="exampleInputEmail1">Upload the leaf</label>
                            <input type="file" class="form-control" id="image" placeholder="Upload your file here">
                            <small id="emailHelp" class="form-text text-muted">Let the magic begin.</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-rounded" style="border-radius: 25px">Submit</button>
                    </form>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Upload image to get value</li>
                  <li class="list-group-item">Upload image to get value</li>
                  <li class="list-group-item">Upload image to get value</li>
                </ul>
              </div>
            
        </div>
    </div>
</div>
<!-- ##### Portfolio Area End ##### -->

{{ View::make('partials/footer') }}
