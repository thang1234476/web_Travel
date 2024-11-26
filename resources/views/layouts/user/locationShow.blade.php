@extends('layouts.user.main')
@section('contain')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        color: #333;
        line-height: 1.6;
    }

    /* Main location section */
    .main-location {
        position: relative;
        height: 600px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
    }

    .main-location img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .location-content h2 {
        font-size: 36px;
        font-weight: bold;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px 20px;
        border-radius: 5px;
    }

    /* Content container */
    .content-container {
        max-width: 800px;
        margin: 20px auto;
        padding: 0 20px;
    }

    /* Description section */
    .description {
        margin: 20px 0;
    }

    .description h3 {
        font-size: 24px;
        font-weight: bold;
        color: #ff6600;
        margin-bottom: 15px;
    }

    .description h4 {
        font-size: 15px;
        font-weight: bold;
        color: #ff6600;
        margin-bottom: 15px;
    }

    .description p {
        font-size: 16px;
        margin-bottom: 15px;
        text-align: justify;
    }

    /* Image Gallery */
    .image-gallery {
        display: flex;
        gap: 20px;
        margin: 20px 0;
        justify-content: center;
    }

    .small-image {
        position: relative;
        flex: 1;
        max-width: 48%;
    }

    .small-image img {
        width: 100%;
        height: 100%;
        border-radius: 5px;
    }

    .image-caption {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        padding: 5px 10px;
        font-size: 14px;
        border-radius: 3px;
        text-align: center;
        width: calc(100% - 20px);
    }
</style>

<!-- Main Content -->
@yield('main-location')

@endsection

</html>