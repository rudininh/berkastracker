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
    <div class="modal-header">Buat Berkas Baru ssss</div>
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
  <a class="sub-button" id="buttons--write" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"></a>
  <a class="sub-button" id="buttons--archive" href="#modal-archive"></a>
  <a class="sub-button" id="buttons--delete" href="#modal-delete"></a>
</div>


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