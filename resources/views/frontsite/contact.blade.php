@extends('frontsite.layouts.master'); 

@section('page title')
    Contact Page   
@endsection

@section('content')
  <div class="tm-main">

      <div class="container">

        <div class="row tm-mt-big tm-about-row tm-mb-medium">
          <div class="col-xl-12 col-lg-12 col-md-12 col-xs-12 tm-contact-col">
            <div class="tm-contact-left tm-bg-pink-light-2 tm-text-white text-right p-md-5 p-4">
              <i class="fas fa-3x fa-comments mb-4"></i>
              <h2 class="tm-media-2-header">Contact Us</h2>
            </div>
            <div class="tm-bg-gray tm-contact-middle">
              <form action="#" method="post">
                <div class="form-group mb-4">
                  <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Full Name" required/>
                </div>
                <div class="form-group mb-4">
                  <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required/>
                </div>
                <div class="form-group mb-4">
                  <select name="position" class="tm-select" id="position" required>
                    <option value="">Your Position</option>
                    <option value="staff">- Staff</option>
                    <option value="manager">- Manager</option>
                    <option value="director">- Director</option>
                    <option value="owner">- Owner</option>
                  </select>
                </div>
                <div class="form-group mb-4 tm-select-group">
                  <label class="tm-radio-label mb-0"><input type="radio" name="dept" value="support" class="mr-1" required> Support</label>
                  <label class="tm-radio-label"><input type="radio" name="dept" value="sales" class="mr-1" required> Sales Dept.</label>
                </div>
                <div class="form-group mb-4">
                  <textarea rows="8" id="contact_message" name="contact_message" class="form-control" placeholder="Your Message" required></textarea>
                </div>
                <div class="form-group mb-0">
                  <button type="submit" class="btn btn-secondary">Submit</button>
                </div>
              </form>
            </div>
            <div class="tm-bg-gray tm-contact-right">
              <!-- GOOGLE MAP -->
               <div id="google-map" class="text-center mb-5">
               <!-- How to change your own map point
                      1. Go to Google Maps
                      2. Click on your location point
                      3. Click "Share" and choose "Embed map" tab
                      4. Copy only URL and paste it within the src="" field below
                -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" width="360" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>

               <div>
                 <h2 class="tm-media-2-header tm-text-pink-dark mb-3">Our Location</h2>
                 <address class="mb-4">
                   990 Maecenas lobortis dolor,<br>
                   Euismod leo, scelerisque <br>
                   10550 finibus
                 </address>
                  <p class="mb-0">Tel: <a href="tel:+0100200980" class="tm-link-gray">010-020-0980</a></p>
                  <p class="mb-0">Fax: <a href="tel:+0900800770" class="tm-link-gray">090-080-0770</a></p>
               </div>
            </div>
          </div>
        </div>
      </div> <!-- .container -->

  </div>
@endsection


