@extends('layouts.app')

@section('title','Welcome')

@section('main-section')

    {{-- Jumbo  --}}
    <div class="my_jumbo d-flex align-items-center ps-5">
        <div class="j-txt-box">
            <h5 class="text-uppercase">
                Welcome to Comics 
            </h5>
            <h2>
                Best Online Template for Laravel
            </h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam distinctio fugit illo, odio at laborum rem nesciunt. Molestiae delectus incidunt saepe tempora, ullam provident numquam nemo neque nesciunt voluptatum soluta.</p>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-light">Light</button>
        </div> 
    </div>

    <div class="my_container d-flex m-5 my_line">
        <img class="img-" src="https://images.pexels.com/photos/13096925/pexels-photo-13096925.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2s" alt="">

        <div>
            <h5>
                Impara qualcosa
            </h5>
            <h1>
                I Benefit di avere un buon Template
            </h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius mollitia unde tempora deleniti temporibus, atque sequi ullam ipsa delectus ad quia necessitatibus ducimus veritatis minima est repudiandae earum quaerat sapiente!</p>
            <div>
                {{-- <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/2021_Facebook_icon.svg/2048px-2021_Facebook_icon.svg.png" alt=""> --}}
            </div>
        </div>
    </div>
@endsection