<x-layout>
    <div class="rounded-3 border shadow-lg bg-white text-center mt-100">
        <img class="mt-5" src="{{ asset('img/wedly.svg') }}" alt="wedly.love icon" width="400">

        <h1 class="fw-bold mt-5">Unforgettable Weddings Begin Here</h1>

        <p class="col-lg-8 mx-auto lead mb-5 mt-3">
            Welcome to Your Ultimate Wedding Planning Hub! Seamlessly orchestrate your special day from 'Yes' to 'I do' with our comprehensive online platform. Manage RSVPs with ease, coordinate dietary preferences flawlessly, and keep a watchful eye on your budget – all in one convenient place. Let us transform your wedding dreams into a stress-free reality, ensuring that every detail is as perfect as your love story. Your journey to a picture-perfect wedding starts here.
        </p>
    </div>

    <div class="rounded-3 border shadow-lg bg-white mt-100">
        <div class="row align-items-center m-0 mt-5">
            <div class="col-lg-7">
                <h1 class="fw-bold ms-5">Border hero with cropped image and shadows</h1>
                <p class="lead mt-3 ms-5">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            </div>

            <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg me-0" style="border-bottom-right-radius: 0.5em !important;">
                <img src="{{ asset('img/wedly.love-preview.png') }}" alt="wedly.love website preview" width="700">
            </div>
        </div>
    </div>

    <div class="rounded-3 border shadow-lg bg-white mt-100" style="margin-bottom: 150px !important">
        <div class="row align-items-center m-0 my-5">
            <div class="col-md-10 mx-auto col-lg-5">
                <form class="p-4 p-md-5" method="POST" action="{{ route('register.execute') }}">
                    @csrf

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" placeholder="Jane Doe">
                        <label for="name">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary btn-wedly" type="submit">Sign up</button>
                </form>
            </div>

            <div class="col-lg-7 text-center text-lg-start">
                <h1 class="fw-bold">Sign up now</h1>
                <p class="col-lg-10 lead mt-3">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
            </div>
        </div>
    </div>
</x-layout>
