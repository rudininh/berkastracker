<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Berkas Tracker by Rudini</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">                      
    <div class="row text-center justify-content-center mb-5">
        <div class="col-xl-6 col-lg-8">
            <h2 class="font-weight-bold">A Document Tracker</h2>
            <p class="text-muted">Cara mudah mengawasi berkas yang berjalan padahal tidak punya kaki.</p>
            <img src="bg.png" alt="" style="height:300px;width:500px">
        </div>
    </div>

    <div class="row row-padded">
        <div class="col">
            <div class="text-center">
            <h4 class="font-weight-bold">SK Tim Pemeriksa a.n Yuli</h3>
            </div>
            <div class="timeline-steps aos-init aos-animate" data-aos="fade-up">
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2003">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">Senin, 22 Agustus 2022 </p>
                        <p class="h6 text-muted mb-0 mb-lg-0">BKD, Diklat</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2004">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">Selasa, 23 Agustus 2022</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Sekretariat Daerah</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2005">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">Rabu, 24 Agustus 2022</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Wali Kota</p>
                    </div>
                </div>
                <div class="timeline-step">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2010">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">Kamis,24 Agustus 2022</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Inspektorat</p>
                    </div>
                </div>
                <div class="timeline-step mb-0">
                    <div class="timeline-content" data-toggle="popover" data-trigger="hover" data-placement="top" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="2020">
                        <div class="inner-circle"></div>
                        <p class="h6 mt-3 mb-1">Jumat, 25 Agustus 2022</p>
                        <p class="h6 text-muted mb-0 mb-lg-0">Selesai, terarsipkan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/07afc061fe.js" crossorigin="anonymous"></script>

<div id="modal-write" class="modal">
  <a href="#" class="modal-close"></a>
  <div class="modal-content">
    <a href="#" class="modal-close"></a>
    <div class="modal-header">New Post</div>
    <div class="modal-body">
      <label for="modal-write-title">Post Title</label>
      <input type="text" name="title" id="modal-write-title" placeholder=" Give your post a name..." required>
      <label for="modal-write-body">Post Body</label>
      <textarea name="body" cols="30" rows="10" id="modal-write-body" placeholder="What would you like to say?" required></textarea>
      <div class="modal-actions">
        <a href="#">Cancel</a>
        <button class="write">Post</button>
      </div>
    </div>
  </div>
</div>
<div id="modal-archive" class="modal">
  <a href="#" class="modal-close"></a>
  <div class="modal-content">
    <a href="#" class="modal-close"></a>
    <div class="modal-header">Archive Post</div>
    <div class="modal-body">
      <p>Would you like to archive your post?</p>
      <div class="modal-actions">
        <a href="#">Cancel</a>
        <button class="archive">Archive</button>
      </div>
    </div>
  </div>
</div>
<div id="modal-delete" class="modal">
  <a href="#" class="modal-close"></a>
  <div class="modal-content">
    <a href="#" class="modal-close"></a>
    <div class="modal-header">Delete Post</div>
    <div class="modal-body">
      <p>Are you sure you want to delete your post?</p>
      <p class="warning"><i class="far fa-exclamation-circle"></i>This cannot be undone.</p>
      <div class="modal-actions">
        <a href="#">Cancel</a>
        <button class="delete">Delete</button>
      </div>
    </div>
  </div>
</div>
<div id="mega-button">
  <div class="tooltip">Hover me!</div>
  <a class="sub-button" id="buttons--write" href="#modal-write"></a>
  <a class="sub-button" id="buttons--archive" href="#modal-archive"></a>
  <a class="sub-button" id="buttons--delete" href="#modal-delete"></a>
</div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
    
</div>

<style type="text/css">

@charset "UTF-8";
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");
.modal .modal-content .modal-body {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.modal .modal-content .modal-body::-webkit-scrollbar {
  display: none;
}
body {
  margin: 0;
  background-color: #eceff1;
  font-family: "Poppins", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.warning {
  display: block !important;
  padding: 12px 15px !important;
  background-color: rgba(244, 67, 54, 0.25) !important;
  border-radius: 8px !important;
  font-weight: 500 !important;
  color: #e53935 !important;
  text-align: left !important;
}
.warning > i {
  position: relative;
  top: 1px;
  margin-right: 8px;
  transform: scale(1.25);
}
#mega-button {
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed;
  bottom: 15px;
  left: 15px;
  width: 50px;
  height: 50px;
  cursor: default;
  transition: all 0.15s ease-out;
  z-index: 1;
  will-change: width;
}
#mega-button > .tooltip {
  padding: 5px 10px;
  position: absolute;
  left: 10px;
  top: -9px;
  transform: translateY(-100%);
  white-space: nowrap;
  background-color: #fff;
  border-radius: 8px;
  filter: drop-shadow(0 2px 2px rgba(120, 144, 156, 0.5));
  box-shadow: inset 0 0 0 1px rgba(120, 144, 156, 0.1);
  font-weight: 500;
  color: #1e4989;
  -webkit-animation: tooltip-hover;
          animation: tooltip-hover;
  /* @keyframes duration | easing-function | delay |
  iteration-count | direction | fill-mode | play-state | name */
  -webkit-animation: 1s ease-in-out 0s infinite alternate both tooltip-hover;
          animation: 1s ease-in-out 0s infinite alternate both tooltip-hover;
  transition: all 0.15s ease-out;
  pointer-events: none;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  will-change: opacity;
}
#mega-button > .tooltip::before {
  content: "";
  display: block;
  position: absolute;
  bottom: 1px;
  left: 8px;
  width: 12px;
  height: 6px;
  background-color: inherit;
  -webkit-clip-path: polygon(0 0, 100% 0, 50% 100%);
          clip-path: polygon(0 0, 100% 0, 50% 100%);
  transform: translateY(100%);
}
#mega-button::before {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  left: 0;
  top: 0;
  width: 50px;
  height: 50px;
  padding-top: 4px;
  background: 100% 100%/250% 100% #fff linear-gradient(135deg, transparent 33%, #2c92c8 66%, #892cc8) no-repeat;
  border-radius: 50%;
  content: "";
  font-family: "Font Awesome 5 Pro";
  font-size: 32px;
  font-weight: 400;
  color: #fff;
  transition: inherit;
  box-sizing: border-box;
  cursor: inherit;
  box-shadow: 0 10px 20px -10px #1a237e;
  backdrop-filter: blur(4px);
  -webkit-backdrop-filter: blur(4px);
  will-change: transform, background-color, box-shadow;
}
#mega-button > .sub-button {
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: 50%;
  left: 25px;
  width: 36px;
  height: 36px;
  background: #2c92c8;
  border-radius: 50%;
  text-decoration: none !important;
  box-shadow: 0 10px 20px -10px #1a237e;
  transform: translate(-50%, -50%) scale(0.75);
  transition: inherit;
  z-index: -1;
  will-change: transform, transition-duration;
}
#mega-button > .sub-button::before {
  font-family: "Font Awesome 5 Pro";
  color: #fff;
  font-size: 20px;
  font-weight: 400;
  transform: rotate(-90deg);
  transition: inherit;
  will-change: transform;
}
#mega-button > .sub-button#buttons--write::before {
  content: "";
}
#mega-button > .sub-button#buttons--archive::before {
  content: "";
}
#mega-button > .sub-button#buttons--delete::before {
  content: "";
}
#mega-button:hover {
  width: calc(50px + 2px + 123px);
}
#mega-button:hover::before {
  transform: rotate(45deg) scale(0.675);
  padding-right: 2px;
  box-shadow: 7.5px 7.5px 20px -10px rgba(55, 71, 79, 0);
  background: -100% 100%/250% 100% rgba(144, 164, 174, 0.625) linear-gradient(135deg, transparent 33%, #2c92c8 66%, #892cc8) no-repeat;
}
#mega-button:hover::after {
  width: 200px;
}
#mega-button:hover > .sub-button::before {
  transform: rotate(0deg);
}
#mega-button:hover > .sub-button:nth-of-type(1) {
  transform: translate(calc(-50% + 50px + 0% + 0px + 2px), -50%) scale(1);
  transition-delay: 0.1s;
}
#mega-button:hover > .sub-button:nth-of-type(1):hover {
  transform: translate(calc(-50% + 50px + 0% + 0px + 2px), -50%) scale(1.18);
  transition-duration: 0.15s;
}
#mega-button:hover > .sub-button:nth-of-type(2) {
  transform: translate(calc(-50% + 50px + 100% + 5px + 2px), -50%) scale(1);
  transition-delay: 0.05s;
}
#mega-button:hover > .sub-button:nth-of-type(2):hover {
  transform: translate(calc(-50% + 50px + 100% + 5px + 2px), -50%) scale(1.18);
  transition-duration: 0.15s;
}
#mega-button:hover > .sub-button:nth-of-type(3) {
  transform: translate(calc(-50% + 50px + 200% + 10px + 2px), -50%) scale(1);
  transition-delay: 0s;
}
#mega-button:hover > .sub-button:nth-of-type(3):hover {
  transform: translate(calc(-50% + 50px + 200% + 10px + 2px), -50%) scale(1.18);
  transition-duration: 0.15s;
}
#mega-button:hover > .sub-button:hover {
  background-color: #3949ab;
}
#mega-button:hover > .sub-button:hover::before {
  transform: scale(0.85);
}
#mega-button:hover .tooltip, .modal:target ~ #mega-button .tooltip {
  opacity: 0;
}
.modal {
  display: none;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: transparent;
  z-index: 2;
}
.modal > .modal-close::before {
  content: "";
  display: block;
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  background-color: rgba(38, 50, 56, 0.5);
}
.modal .modal-content {
  display: flex;
  flex-direction: column;
  position: fixed;
  left: 50%;
  top: 50%;
  width: 90%;
  max-width: 600px;
  max-height: 90%;
  overflow: visible;
  transform: translate(-50%, -50%);
}
.modal .modal-content > div:first-of-type {
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
}
.modal .modal-content > div:last-of-type {
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
}
.modal .modal-content > .modal-close::after {
  content: "";
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  right: 0;
  top: 0;
  width: 28px;
  height: 28px;
  z-index: -1;
  background-color: #546e7a;
  border-radius: 50%;
  font-family: "Font Awesome 5 Pro";
  font-size: 18px;
  font-weight: 400;
  color: #fff;
  transform: translate(37.5%, -37.5%);
  transition: all 0.15s ease-out;
  z-index: 1;
}
.modal .modal-content > .modal-close ~ div:first-of-type {
  border-top-right-radius: 0;
}
.modal .modal-content > .modal-close:hover::after {
  background-color: #263238;
}
.modal .modal-content .modal-header {
  padding: 10px 5px;
  background-color: #37474f;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
}
.modal .modal-content .modal-body {
  flex: 1;
  display: flex;
  flex-direction: column;
  padding: 15px;
  overflow-y: auto;
  background-color: #eceff1;
}
.modal .modal-content .modal-body p {
  color: #455a64;
  text-align: center;
}
.modal .modal-content .modal-body p + p, .modal .modal-content .modal-body p + .modal-actions {
  margin-top: 0;
}
.modal .modal-content .modal-body > :first-child {
  margin-top: 0;
}
.modal .modal-content .modal-body label {
  margin-bottom: 4px;
  font-weight: 500;
  color: #78909c;
}
.modal .modal-content .modal-body label:not(:first-of-type) {
  margin-top: 10px;
}
.modal .modal-content .modal-body input, .modal .modal-content .modal-body textarea {
  font-family: inherit;
}
.modal .modal-content .modal-body input:focus, .modal .modal-content .modal-body textarea:focus {
  outline: 0 !important;
}
.modal .modal-content .modal-body input {
  display: block;
  width: 235px;
  padding: 4px 10px;
  align-self: flex-start;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  background-color: #303f9f;
  border: none;
  border-radius: 10px;
  font-size: 16px;
  font-weight: 400;
  line-height: 26px;
  color: #455a64;
  box-sizing: border-box;
  cursor: pointer;
  transition: all 0.15s ease-out;
  will-change: width, padding, background-color, border-radius, font-size, font-weight;
}
.modal .modal-content .modal-body input::-webkit-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -webkit-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input:-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -moz-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input::-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -moz-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input:-ms-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-size: inherit;
  font-weight: 500;
  color: #fff;
  -ms-transition: inherit;
  transition: inherit;
  will-change: font-size, font-weight, color;
}
.modal .modal-content .modal-body input:focus, .modal .modal-content .modal-body input:valid {
  width: 100%;
  padding: 4px 0;
  background-color: transparent;
  border-radius: 0;
  cursor: text;
}
.modal .modal-content .modal-body input:focus::-webkit-input-placeholder, .modal .modal-content .modal-body input:valid::-webkit-input-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:focus:-moz-placeholder, .modal .modal-content .modal-body input:valid:-moz-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:focus::-moz-placeholder, .modal .modal-content .modal-body input:valid::-moz-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:focus:-ms-input-placeholder, .modal .modal-content .modal-body input:valid:-ms-input-placeholder {
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body input:valid:not(:focus) {
  font-size: 20px;
  font-weight: 500;
}
.modal .modal-content .modal-body textarea {
  display: block;
  min-height: 150px;
  padding: 8px 10px;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  resize: vertical;
  background-color: #fff;
  border: none;
  border-radius: 10px;
  box-shadow: 0 5px 10px -5px #37474f;
  font-size: 16px;
  font-weight: 400;
  line-height: 18px;
  color: #455a64;
  box-sizing: border-box;
}
.modal .modal-content .modal-body textarea::-webkit-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body textarea:-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body textarea::-moz-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body textarea:-ms-input-placeholder {
  font-family: "Font Awesome 5 Pro", "Poppins", sans-serif;
  font-weight: inherit;
  color: #78909c;
}
.modal .modal-content .modal-body .modal-actions {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 20px;
}
.modal .modal-content .modal-body .modal-actions a, .modal .modal-content .modal-body .modal-actions button {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  height: 40px;
  padding: 0 15px;
  background-color: #607d8b;
  border: none;
  border-radius: 20px;
  box-shadow: 0 5px 10px -15px #455a64;
  font-family: inherit;
  font-size: 16px;
  font-weight: 500;
  color: #fff;
  text-decoration: none !important;
  transition: box-shadow 0.15s ease-out;
  will-change: box-shadow;
  cursor: pointer;
}
.modal .modal-content .modal-body .modal-actions a.write, .modal .modal-content .modal-body .modal-actions button.write {
  background-color: #2196f3;
}
.modal .modal-content .modal-body .modal-actions a.archive, .modal .modal-content .modal-body .modal-actions button.archive {
  background-color: #ef6c00;
}
.modal .modal-content .modal-body .modal-actions a.delete, .modal .modal-content .modal-body .modal-actions button.delete {
  background-color: #f44336;
}
.modal .modal-content .modal-body .modal-actions a.write, .modal .modal-content .modal-body .modal-actions button.write {
  box-shadow: 0 5px 10px -15px #0d47a1;
}
.modal .modal-content .modal-body .modal-actions a.archive, .modal .modal-content .modal-body .modal-actions button.archive {
  box-shadow: 0 5px 10px -15px #bf360c;
}
.modal .modal-content .modal-body .modal-actions a.delete, .modal .modal-content .modal-body .modal-actions button.delete {
  box-shadow: 0 5px 10px -15px #b71c1c;
}
.modal .modal-content .modal-body .modal-actions a:hover, .modal .modal-content .modal-body .modal-actions button:hover {
  box-shadow: 0 5px 10px -5px #455a64;
}
.modal .modal-content .modal-body .modal-actions a:hover.write, .modal .modal-content .modal-body .modal-actions button:hover.write {
  box-shadow: 0 5px 10px -5px #0d47a1;
}
.modal .modal-content .modal-body .modal-actions a:hover.archive, .modal .modal-content .modal-body .modal-actions button:hover.archive {
  box-shadow: 0 5px 10px -5px #bf360c;
}
.modal .modal-content .modal-body .modal-actions a:hover.delete, .modal .modal-content .modal-body .modal-actions button:hover.delete {
  box-shadow: 0 5px 10px -5px #b71c1c;
}
.modal .modal-content .modal-body .modal-actions a + a, .modal .modal-content .modal-body .modal-actions a + button, .modal .modal-content .modal-body .modal-actions button + a, .modal .modal-content .modal-body .modal-actions button + button {
  margin-left: 4px;
}
.modal:target {
  display: block;
}
@-webkit-keyframes tooltip-hover {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(calc(-100% - 5px));
  }
}
@keyframes tooltip-hover {
  from {
    transform: translateY(-100%);
  }
  to {
    transform: translateY(calc(-100% - 5px));
  }
}

.row-padded {
  padding: 35px;
  background-color: #F7F7F7;
  border: 1px solid #DDD;
}

.row-padded .span4 {
  background-color: #bbb;
  width: 30%;
}


body{margin-top:20px;}
.timeline-steps {
    display: flex;
    justify-content: center;
    flex-wrap: wrap
}

.timeline-steps .timeline-step {
    align-items: center;
    display: flex;
    flex-direction: column;
    position: relative;
    margin: 1rem
}

@media (min-width:768px) {
    .timeline-steps .timeline-step:not(:last-child):after {
        content: "";
        display: block;
        border-top: .25rem dotted #3b82f6;
        width: 3.46rem;
        position: absolute;
        left: 7.5rem;
        top: .3125rem
    }
    .timeline-steps .timeline-step:not(:first-child):before {
        content: "";
        display: block;
        border-top: .25rem dotted #3b82f6;
        width: 3.8125rem;
        position: absolute;
        right: 7.5rem;
        top: .3125rem
    }
}

.timeline-steps .timeline-content {
    width: 10rem;
    text-align: center
}

.timeline-steps .timeline-content .inner-circle {
    border-radius: 1.5rem;
    height: 1rem;
    width: 1rem;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #3b82f6
}

.timeline-steps .timeline-content .inner-circle:before {
    content: "";
    background-color: #3b82f6;
    display: inline-block;
    height: 3rem;
    width: 3rem;
    min-width: 3rem;
    border-radius: 6.25rem;
    opacity: .5
}
</style>

<script type="text/javascript">

</script>
</body>
</html>