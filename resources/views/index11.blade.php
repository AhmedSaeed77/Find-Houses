<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FATHALLA</title>
  <link rel="stylesheet" href="{{ URL::asset('assets/css/index.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/solid.css"
    integrity="sha384-Tv5i09RULyHKMwX0E8wJUqSOaXlyu3SQxORObAI08iUwIalMmN5L6AvlPX2LMoSE" crossorigin="anonymous" />
    <link rel="shortcut icon" text ="x-icon"  href="/assets/logo.jpeg">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/fontawesome.css"
    integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color:#eee;">
  
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
    
    <div class="container-fluid mx-5">
      <a class="navbar-brand" href="#"><img src="logo1.png" alt="" width="72px"></a>
      <button  onclick="sider()" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something not here</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  <div class="container-fluid mt-5">
  <div class="row d-flex justify-content-center">
    <div class="col-8">
      
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card">
              <div class="overflow-hidden">
                <a href="#"><img src="111.webp" alt="..." width="100%"></a>
              </div>
              <div class="card-body shadow">
                <h5 class="card-title h3 text-center">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card" >
              <div class="overflow-hidden">
                <a href="#"><img src="111.webp" alt="..." width="100%"></a>
              </div>
              <div class="card-body shadow rounded-">
                <h5 class="card-title h3 text-center">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card" >
              <div class="overflow-hidden">
                <a href="#"><img src="111.webp" alt="..." width="100%"></a>
              </div>
              <div class="card-body shadow rounded-">
                <h5 class="card-title h3 text-center">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mb-4">
            <div class="card" >
              <div class="overflow-hidden">
                <a href=""><img src="111.webp" alt="..." width="100%"></a>
              </div>
              <div class="card-body shadow rounded-">
                <h5 class="card-title h3 text-center">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          
        </div>
      
    </div>
    <div class="position-fixed ">
      <div data-component="sidebar">
        <div class="sidebar">
          <ul id="menu" class="list-group flex-column d-inline-block first-menu shadow-sm">
            <li class="list-group-item pl-3 py-2 my-4">
              <a href="" class=" text-decoration-none d-flex flex-row-reverse"><i class="fa-sharp fa-solid fa-house ms-4"></i><span
                  class="ml-2 align-middle">Reporting</span></i></a>

              <ul class="list-group flex-column d-inline-block submenu">
                <li class="list-group-item pr-3">
                  <a href="#" class="">Dashboard</a>
                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Home</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">My Sites</a>
                    </li>
                  </ul>
                </li>

                <li class="list-group-item pr-3">
                  <a href="#">SEO</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:113px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Dashboard</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Titles & Metas</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Social</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">XML Sitemaps</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Advanced</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Tools</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Search Console</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Go Premium</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Manual</a>
                    </li>
                  </ul>

                </li>
              </ul> <!-- /.submenu -->
            </li> <!-- /.list-group-item -->

            <li class="list-group-item pl-3 py-2 mb-4">
              <a href="#" class=" text-decoration-none  d-flex flex-row-reverse"><i class="fa-solid fa-magnifying-glass ms-4"></i><span class="ml-2 align-middle">Content</span></i></a>
              <ul class="list-group flex-column d-inline-block submenu">
                <li class="list-group-item pr-3">
                  <a href="#" class="">Posts</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Posts</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Categories</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Tags</a>
                    </li>
                  </ul>
                </li> <!-- end Posts -->

                <li class="list-group-item pr-3">
                  <a href="#" class="">Blog Assist</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:114px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New Blog Post</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Feed Sources</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New Feed Source</a>
                    </li>
                  </ul>
                </li> <!-- end Blog Assist -->


                <li class="list-group-item pr-3">
                  <a href="#" class="">Pages</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:166px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Pages</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New</a>
                    </li>
                  </ul>
                </li> <!-- end Pages -->


                <li class="list-group-item pr-3">
                  <a href="#" class="">Area Content</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:220px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Cities</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New City</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">All Neighborhoods</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New Neighborhood</a>
                    </li>
                  </ul>
                </li> <!-- end Area Content -->


                <li class="list-group-item pr-3">
                  <a href="#" class="">Manual Listings</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:272px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">View All Listings</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New Listing</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Status</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Locations</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Property Types</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Import Listing</a>
                    </li>
                  </ul>
                </li> <!-- end Manual Listings -->

                <li class="list-group-item pr-3">
                  <a href="#" class="">Testimonials</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:323px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">View All</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Categories</a>
                    </li>
                  </ul>
                </li> <!-- end Testimonials -->

                <li class="list-group-item pr-3">
                  <a href="#" class="">Team Members</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:377px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Members</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New Member</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Designations</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Specialties</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Areas</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">All Locations</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New Location</a>
                    </li>
                  </ul>
                </li> <!-- end Team Members -->

              </ul> <!-- /.submenu -->
            </li> <!-- /.list-group-item -->

            <li class="list-group-item pl-3 py-2 mb-4">
              <a href="#" class=" text-decoration-none  d-flex flex-row-reverse">
                <i class="fa-solid fa-cart-plus ms-4"></i><span class="ml-2 align-middle">Engagement</span></i>
              </a>
              <ul class="list-group flex-column d-inline-block submenu">

                <li class="list-group-item pr-3">
                  <a href="#" class="">Comments</a>
                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Comments</a>
                    </li>
                  </ul>
                </li>

                <li class="list-group-item pr-3">
                  <a href="#" class="">Forms</a>
                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:114px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Forms</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">New Form</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">All Entries</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Gravity Forms</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Import/Export</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Gravity Forms Tutorials</a>
                    </li>
                  </ul>
                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Home Valuation</a>
                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:166px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">View All Leads</a>
                    </li>
                  </ul>
                </li>
              </ul> <!-- /.submenu -->
            </li> <!-- /.list-group-item -->


            <li class="list-group-item pl-3 py-2 mb-4">
              <a href="#" class=" text-decoration-none  d-flex flex-row-reverse"><i class="fa-solid fa-box-open ms-4"></i><span class="ml-2 align-middle">Image
                  Center</span></i></a>

              <ul class="list-group flex-column d-inline-block submenu">
                <li class="list-group-item pr-3">
                  <a href="#" class="">Media Library</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Media Library</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Soliloquy Slider</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:114px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Sliders</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New</a>
                    </li>
                  </ul>

                </li>
              </ul>
            </li>

            <li class="list-group-item pl-3 py-2 mb-4">
              <a href="#" class=" text-decoration-none  d-flex flex-row-reverse"><i class="fa-regular fa-rectangle-list ms-4"></i><span class="ml-2 align-middle">Settings</span></i></a>
              <ul class="list-group flex-column d-inline-block submenu">
                <li class="list-group-item pr-3">
                  <a href="#" class="">Users</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">All Users</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Add New</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Your Profile</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">AgentFire Settings</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:114px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Home Valuation</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Testimonials</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Team Members</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Area Content</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Manual Listings</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Grids Settings</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:166px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Ess. Grid Search Settings</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Ess. Grid Global Settings</a>
                    </li>
                  </ul>
                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Plugin Settings</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:220px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Soliloquy</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Flickr - Pick a Picture</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Google Analytics</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Google Maps</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">JackBox</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Media</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">No Page Comment</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Post Types Order</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Shortcode any widget</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">WP RSS Images</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">SNAP</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">WP Sitemap Page</a>
                    </li>
                  </ul>


                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">WordPress Settings</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:272px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">General</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Discussion</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Reading</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Re-Order</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:323px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Posts</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Pages</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Media Library</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Blog Assist</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Area Content</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Manual Listings</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Testimonials</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Team Members</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Flyouts</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Site Appearance</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:377px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Widgets</a>
                    </li>
                    <li class="list-group-item pr-3">
                      <a href="#">Menus</a>
                    </li>
                  </ul>

                </li>
              </ul>

            </li>

            <li class="list-group-item pl-3 py-2 mb-4">
              <a href="#" class=" text-decoration-none  d-flex flex-row-reverse"><i class="fa-solid fa-circle-user d-inline ms-4"></i><span class="ml-2 align-middle">Support</span></i></a>
              <ul class="list-group flex-column d-inline-block submenu">
                <li class="list-group-item pr-3">
                  <a href="#" class="">Training</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Video Tutorials</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Tutorials</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:114px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Help Desk</a>
                    </li>
                  </ul>

                </li>
                <li class="list-group-item pr-3">
                  <a href="#" class="">Ask a Question</a>

                  <ul class="list-group flex-column d-inline-block sub-submenu">
                    <span class="arrow" style="top:166px;"></span>
                    <li class="list-group-item pr-3">
                      <a href="#">Send Support Request</a>
                    </li>
                  </ul>

                </li>
              </ul>

            </li>

          </ul> <!-- /.first-menu -->
        </div> <!-- /.sidebar -->
      </div>
    </div>
  </div>
  </div>
  <footer class="text-center text-white w-100" style="background-color: #b3b3b3; position: fixed; bottom: 0;">
    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/solid.js"
    integrity="sha384-/BxOvRagtVDn9dJ+JGCtcofNXgQO/CCCVKdMfL115s3gOgQxWaX/tSq5V8dRgsbc"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/fontawesome.js"
    integrity="sha384-dPBGbj4Uoy1OOpM4+aRGfAOc0W37JkROT+3uynUgTHZCHZNMHfGXsmmvYTffZjYO"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      let btn=document.getElementById("btn");
      let menu=document.getElementById("menu");
      let submenu=document.getElementsByClassName("submenu");
      let subSubmenu=document.getElementsByClassName("sub-submenu");
      let i=1;
      function sider(){
        
        if(i){
        menu.style.top="250px";
        menu.style.height="100%"

        for (const sub of submenu) {
          sub.style.top="250px";
          sub.style.height="100hv"
        }
        for (const subSub of subSubmenu) {
          subSub.style.top="250px";
          subSub.style.height="100hv"
        }
        i--;
      }
      else{
        menu.style.top="85px"
        for (const sub of submenu) {
          sub.style.top="85px"
          sub.style.height="100hv"
        }
        for (const subSub of subSubmenu) {
          subSub.style.top="85px";
          subSub.style.height="100hv"
        }
        i++;
      }
      }
    </script>
  </body>

</html>