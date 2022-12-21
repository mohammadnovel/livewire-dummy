<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="d-flex align-items-start">
                <img class="rounded float-start img-thumbnail"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxwjjgqL0vLByyI1sXSGF3Q08PXEmPTUbL6w&usqp=CAU" alt="">
                <div class="px-4 py-4">
                  <h2>Steven</h2>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente harum nisi itaque vitae velit excepturi minima distinctio ratione quam dolor. Aliquam quos ipsum totam mollitia sapiente vel natus exercitationem maiores.</p>
                </div>
              </div>
              
              
              @livewire('posts')

                {{-- <div class="card">
                    <div class="card-header">
                        <h2>Laravel Livewire </h2>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @livewire('posts')
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>