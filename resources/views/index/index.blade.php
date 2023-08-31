<x-layout>
    <div class="rounded-3 border shadow-lg bg-white text-center mt-100">
        <img class="mt-5" src="{{ asset('img/wedly.svg') }}" alt="wedly.love icon" width="400">

        <h1 class="fw-bold mt-5">Unforgettable Weddings Begin Here</h1>

        <p class="col-lg-8 mx-auto lead my-5">
            Welcome to Your Ultimate Wedding Planning Hub! Seamlessly orchestrate your special day from 'Yes' to 'I do' with our comprehensive online platform. Manage RSVPs with ease, coordinate dietary preferences flawlessly, and keep a watchful eye on your budget – all in one convenient place. Let us transform your wedding dreams into a stress-free reality, ensuring that every detail is as perfect as your love story. Your journey to a picture-perfect wedding starts here.
        </p>
    </div>

    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white my-5 mt-100">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Border hero with cropped image and shadows</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>

        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="{{ asset('img/wedly.love-preview.png') }}" alt="" width="720">
        </div>
    </div>

    <div class="row align-items-center g-lg-5 rounded-3 border shadow-lg bg-white my-5 mt-100" style="margin-bottom: 150px !important">
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
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
                <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color: var(--main-pink)">Sign up</button>
                <hr class="my-4">
                <small class="text-body-secondary">By clicking Sign up, you agree to our <a href="#" target="_blank">terms of use</a>.</small>
            </form>
        </div>
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Sign up now</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
    </div>
</x-layout>
