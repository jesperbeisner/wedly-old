<x-layout>
    <div class="px-4 py-5 my-5 text-center rounded-3 border shadow-lg bg-white" style="margin-top: 100px !important">
        <img class="d-block mx-auto mb-4" src="{{ asset('img/wedly.svg') }}" alt="" width="400" height="100">
        <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
            </div>
        </div>
    </div>

    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg bg-white my-5" style="margin-top: 100px !important">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Border hero with cropped image and shadows</h1>
            <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
        <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
            <img class="rounded-lg-3" src="{{ asset('img/bootstrap-docs.png') }}" alt="" width="720">
        </div>
    </div>

    <div class="row align-items-center g-lg-5 rounded-3 border shadow-lg bg-white my-5" style="margin-top: 100px !important; margin-bottom: 150px !important;">
        <div class="col-md-10 mx-auto col-lg-5">
            <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
                <hr class="my-4">
                <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
            </form>
        </div>
        <div class="col-lg-7 text-center text-lg-start">
            <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Vertically centered hero sign-up form</h1>
            <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
    </div>
</x-layout>
