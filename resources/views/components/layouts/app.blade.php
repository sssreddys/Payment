<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/payments.png') }}">

    <title>Payments</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="path/to/your.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    <script src="{{ asset('livewire/livewire.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2" style="background-color: black; color: white; position: fixed; top: 0; left: 0; height: 100%; width: 17%;">
                <!-- Sidebar content -->
            </div>
            <div class="col-md-10" style="margin-left: 17%;">
                <div class="row" style="background-color: blue; height: 50px; position: fixed; top: 0; left: 0; width: 85%;margin-left:17%">
                    <!-- Top header content -->
                    <!-- Your top header content goes here -->
                </div>
                <div class="row" style="background-color: brown; margin-top: 50px;">
                    <div class="overflow-auto" style="height: 2000px;">
                        <!-- Main content -->
                        <!-- Your content that should scroll goes here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>