
<div class="container my-4">
    <footer class="text-center footerMorph-inner-up">
      <!-- Grid container -->
      <div class="container">
        <!-- Section: Links -->
        <section class="mt-4">
          <!-- Grid row-->
          <div class="row text-center d-flex justify-content-center pt-4">
            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('aboutUs')}}" class="text-black footerLinks fw-semibold">{{__('ui.Chi_siamo')}}</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('article.index')}}" class="text-black footerLinks fw-semibold">{{__('ui.annunci')}}</a>
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            {{-- <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-black footerLinks fw-semibold">Recensioni</a>
              </h6>
            </div> --}}
            <!-- Grid column -->

            <!-- Grid column -->
            {{-- <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="#!" class="text-black footerLinks fw-semibold">Aiuto</a>
              </h6>
            </div> --}}
            <!-- Grid column -->

            <!-- Grid column -->
            @if(Auth::check() && !Auth::user()->is_revisor) 
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('formRevisor')}}" class="text-black footerLinks fw-semibold">{{__('ui.Lavora_con_noi')}}</a>
              </h6>
            </div>
            @elseif(Auth::check() && Auth::user()->is_revisor)
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('revisor.index')}}" class="text-black footerLinks fw-semibold">{{__('ui.Revisor_dash')}}</a>
              </h6>
            </div>
            @elseif(!Auth::check())
            <div class="col-md-2">
              <h6 class="text-uppercase font-weight-bold">
                <a href="{{route('login')}}" class="text-black footerLinks fw-semibold">{{__('ui.Revisore')}}</a>
              </h6>
            </div>
            @endif
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </section>
        <!-- Section: Links -->

        <hr class="my-4" />

        <!-- Section: Text -->
        <section class="mb-2">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <p>
                {{__('ui.Footer_paragrafo')}}
              </p>
            </div>
            <h5 class="fw-semibold">
              {{__('ui.Segui_social')}}
            </h5>
          </div>
        </section>
        <!-- Section: Text -->

        <!-- Section: Social -->
        <section class="text-center mb-4">
          <a href="https://www.facebook.com/" target=" _blank" class="me-4 text-decoration-none text-black fs-4">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://x.com/" target=" _blank" class="me-4 text-decoration-none text-black fs-4">
            <i class="bi bi-twitter-x"></i>
          </a>
          <a href="https://www.instagram.com/" target=" _blank" class="me-4 text-decoration-none text-black fs-4">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.linkedin.com/" target=" _blank" class="me-4 text-decoration-none text-black fs-4">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://github.com/" target=" _blank" class="me-4 text-decoration-none text-black fs-4">
            <i class="bi bi-github"></i>
          </a>
        </section>
        <!-- Section: Social -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3 footerMorph-inner-down fw-semibold">
        © 2024 Copyright: Presto.it - {{__('ui.P_iva')}} 0101010101
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </div>
  <!-- End of .container -->
