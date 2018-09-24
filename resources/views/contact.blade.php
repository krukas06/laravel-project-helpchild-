@extends('layouts.app')

@section('contact')

<!-- Section: Contact v.3 -->
<section class="contact-section my-5">

  <!-- Form with header -->
  <div class="card">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fa fa-envelope pr-2"></i>Write to us:</h3>

          <!-- Grid row -->
          <div class="row">
     <form action="{{route('contact')}}" method="post">
            <!-- Grid column -->

            {{csrf_field()}}
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" name="name" class="form-control">
                <label for="form-contact-name" class="">Your name</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" name="email" class="form-control">
                <label for="form-contact-email" class="">Your email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" name="phone" class="form-control">
                <label for="form-contact-phone" class="">Your phone</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" name="company" class="form-control">
                <label for="form-contact-company" class="">Your company</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea type="text" name="text" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Your message</label>
                <a class="btn-floating btn-lg blue">
                  <i class="fa fa-send-o"></i>
                </a>
                <a href="#"><button type="submit" class="btn btn-success" >Отправить</button></a>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->  
    </form>
      <!-- Grid column -->

      @foreach($contacts as $contact)
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text">

          <h3 class="my-4 pb-2">Contact information</h3>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fa fa-map-marker pr-2"></i>{{$contact->adress}}</p>
            </li>
            <li>
              <p><i class="fa fa-phone pr-2"></i>{{$contact->number}}</p>
            </li>
            <li>
              <p><i class="fa fa-envelope pr-2"></i>{{$contact->email}}</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-lg tw-ic">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg li-ic">
                <i class="fa fa-linkedin"> </i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-lg ins-ic">
                <i class="fa fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      @endforeach
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->
@endsection