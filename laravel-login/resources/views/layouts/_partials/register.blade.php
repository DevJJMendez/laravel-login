@extends("layouts._partials.bootstrap")
<section
  class="vh-100"
  style="background-color: #eee;">
  <div
    class="h-100 container">
    <div
      class="row d-flex justify-content-center align-items-center h-100">
      <div
        class="col-lg-12 col-xl-11">
        <div
          class="card text-black"
          style="border-radius: 25px;">
          <div
            class="card-body p-md-5">
            <div
              class="row justify-content-center">
              <div
                class="col-md-10 col-lg-6 col-xl-5 order-lg-1 order-2">
                <p
                  class="h1 fw-bold mx-md-4 mx-1 mb-5 mt-4 text-center">
                  Sign
                  up
                </p>
                <form
                  action="{{ route("registerVerify") }}"
                  class="mx-md-4 mx-1"
                  method="POST">
                  @csrf
                  <div
                    class="d-flex align-items-center mb-4 flex-row">
                    <i
                      class="fas fa-user fa-lg fa-fw me-3"></i>
                    <div
                      class="form-outline flex-fill mb-0">
                      <input
                        class="form-control"
                        id="form3Example1c"
                        name="name"
                        type="text"
                        value="{{ old("name") }}" />
                      <label
                        class="form-label"
                        for="form3Example1c">
                        Your
                        Name</label>
                      @error("name")
                        <div
                          class="alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div
                    class="d-flex align-items-center mb-4 flex-row">
                    <i
                      class="fas fa-envelope fa-lg fa-fw me-3"></i>
                    <div
                      class="form-outline flex-fill mb-0">
                      <input
                        class="form-control"
                        id="form3Example3c"
                        name="email"
                        type="email"
                        value="{{ old("email") }}" />
                      <label
                        class="form-label"
                        for="form3Example3c">Your
                        Email</label>
                      @error("email")
                        <div
                          class="alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div
                    class="d-flex align-items-center mb-4 flex-row">
                    <i
                      class="fas fa-lock fa-lg fa-fw me-3"></i>
                    <div
                      class="form-outline flex-fill mb-0">
                      <input
                        class="form-control"
                        id="form3Example4c"
                        name="password"
                        type="password" />
                      <label
                        class="form-label"
                        for="form3Example4c">Password</label>
                      @error("password")
                        <div
                          class="alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div
                    class="d-flex align-items-center mb-4 flex-row">
                    <i
                      class="fas fa-key fa-lg fa-fw me-3"></i>
                    <div
                      class="form-outline flex-fill mb-0">
                      <input
                        class="form-control"
                        id="form3Example4cd"
                        name="password_confirmation"
                        type="password" />
                      <label
                        class="form-label"
                        for="form3Example4cd">Repeat
                        your
                        password</label>
                      @error("password_confirmation")
                        <div
                          class="alert alert-danger">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div
                    class="d-flex justify-content-center mb-lg-4 mx-4 mb-3">
                    <button
                      class="btn btn-primary btn-lg"
                      type="submit">Register</button>
                  </div>
                  <p class="pb-lg-2 mb-5"
                    style="color: #393f81;">
                    Already
                    have
                    a
                    acount?
                    <a href="{{ route("login") }}"
                      style="color: #393f81;">Login
                      here</a>
                  </p>

                </form>

              </div>
              <div
                class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-lg-2 order-1">

                <img
                  alt="Sample image"
                  class="img-fluid"
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
