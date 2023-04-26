<div class="container-fluid page-body-wrapper">
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close mdi mdi-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-default-theme">
      <div class="img-ss rounded-circle bg-light border mr-3"></div> Default
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-dark border mr-3"></div> Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles light"></div>
      <div class="tiles dark"></div>
    </div>
  </div>
  <nav class="navbar col-lg-12 col-12 p-lg-0 fixed-top d-flex flex-row">
    <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
      <a class="navbar-brand brand-logo-mini align-self-center d-lg-none" href="../../index.html"><img
          src="view/images/logo-mini.svg" alt="logo" /></a>
      <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
        <i class="mdi mdi-menu"></i>
      </button>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell-outline"></i>
            <span class="count count-varient1">7</span>
          </a>
          <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list"
            aria-labelledby="notificationDropdown">
            <h6 class="p-3 mb-0">Notifications</h6>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="view/images/faces/face4.jpg" alt="" class="profile-pic" />
              </div>
              <div class="preview-item-content">
                <p class="mb-0"> Dany Miles <span class="text-small text-muted">commented on your photo</span>
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="view/images/faces/face3.jpg" alt="" class="profile-pic" />
              </div>
              <div class="preview-item-content">
                <p class="mb-0"> James <span class="text-small text-muted">posted a photo on your wall</span>
                </p>
              </div>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <img src="view/images/faces/face2.jpg" alt="" class="profile-pic" />
              </div>
              <div class="preview-item-content">
                <p class="mb-0"> Alex <span class="text-small text-muted">just mentioned you in his post</span>
                </p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <p class="p-3 mb-0">View all activities</p>
          </div>
        </li>
        <li class="nav-item dropdown d-none d-sm-flex">
          <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-email-outline"></i>
            <span class="count count-varient2">5</span>
          </a>
          <div class="dropdown-menu navbar-dropdown navbar-dropdown-large preview-list"
            aria-labelledby="messageDropdown">
            <h6 class="p-3 mb-0">Messages</h6>
            <a class="dropdown-item preview-item">
              <div class="preview-item-content flex-grow">
                <span class="badge badge-pill badge-success">Request</span>
                <p class="text-small text-muted ellipsis mb-0"> Suport needed for user123 </p>
              </div>
              <p class="text-small text-muted align-self-start"> 4:10 PM </p>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-item-content flex-grow">
                <span class="badge badge-pill badge-warning">Invoices</span>
                <p class="text-small text-muted ellipsis mb-0"> Invoice for order is mailed </p>
              </div>
              <p class="text-small text-muted align-self-start"> 4:10 PM </p>
            </a>
            <a class="dropdown-item preview-item">
              <div class="preview-item-content flex-grow">
                <span class="badge badge-pill badge-danger">Projects</span>
                <p class="text-small text-muted ellipsis mb-0"> New project will start tomorrow </p>
              </div>
              <p class="text-small text-muted align-self-start"> 4:10 PM </p>
            </a>
            <h6 class="p-3 mb-0">See all activity</h6>
          </div>
        </li>
        <li class="nav-item nav-search border-0 ml-1 ml-md-3 ml-lg-5 d-none d-md-flex">
          <form class="nav-link form-inline mt-2 mt-md-0">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search" />
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-magnify"></i>
                </span>
              </div>
            </div>
          </form>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right ml-lg-auto">
        <li class="nav-item dropdown d-none d-xl-flex border-0">
          <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-earth"></i> English </a>
          <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
            <a class="dropdown-item" href="#"> French </a>
            <a class="dropdown-item" href="#"> Spain </a>
            <a class="dropdown-item" href="#"> Latin </a>
            <a class="dropdown-item" href="#"> Japanese </a>
          </div>
        </li>
        <li class="nav-item nav-profile dropdown border-0">
          <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown">
            <img class="nav-profile-img mr-2" alt="" src="view/images/faces/face1.jpg" />
            <span class="profile-name">Henry Klein</span>
          </a>
          <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-cached mr-2 text-success"></i> Activity Log </a>
            <a class="dropdown-item" href="#">
              <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
          </div>
        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
        data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Typography</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">UI Elements</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Typography </li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Headings</h4>
              <p class="card-description"> Add tags <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> or class
                <code>.h1</code> to <code>.h6</code>
              </p>
              <div class="template-demo">
                <h1>h1. Heading</h1>
                <h2>h2. Heading</h2>
                <h3>h3. Heading</h3>
                <h4>h4. Heading</h4>
                <h5>h5. Heading</h5>
                <h6>h6. Heading</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Headings with secondary text</h4>
              <p class="card-description"> Add faded secondary text to headings </p>
              <div class="template-demo">
                <h1> h1. Heading <small class="text-muted"> Secondary text </small>
                </h1>
                <h2> h2. Heading <small class="text-muted"> Secondary text </small>
                </h2>
                <h3> h3. Heading <small class="text-muted"> Secondary text </small>
                </h3>
                <h4> h4. Heading <small class="text-muted"> Secondary text </small>
                </h4>
                <h5> h5. Heading <small class="text-muted"> Secondary text </small>
                </h5>
                <h6> h6. Heading <small class="text-muted"> Secondary text </small>
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Display headings</h4>
              <p class="card-description"> Add class <code>.display1</code> to <code>.display-4</code>
              </p>
              <div class="template-demo">
                <h1 class="display-1">Display 1</h1>
                <h1 class="display-2">Display 2</h1>
                <h1 class="display-3">Display 3</h1>
                <h1 class="display-4">Display 4</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Paragraph</h4>
                  <p class="card-description"> Write text in <code>&lt;p&gt;</code> tag </p>
                  <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley not
                    only five centuries, </p>
                </div>
              </div>
            </div>
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Icon size</h4>
                  <p class="card-description"> Add class <code>.icon-lg</code>, <code>.icon-md</code>,
                    <code>.icon-sm</code>
                  </p>
                  <div class="row">
                    <div class="col-md-4 d-flex align-items-center">
                      <div class="d-flex flex-row align-items-center">
                        <i class="mdi mdi-compass icon-lg text-warning"></i>
                        <p class="mb-0 ml-1">Icon-lg</p>
                      </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                      <div class="d-flex flex-row align-items-center">
                        <i class="mdi mdi-compass icon-md text-success"></i>
                        <p class="mb-0 ml-1">Icon-md</p>
                      </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center">
                      <div class="d-flex flex-row align-items-center">
                        <i class="mdi mdi-compass icon-sm text-danger"></i>
                        <p class="mb-0 ml-1">Icon-sm</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Blockquotes</h4>
              <p class="card-description"> Wrap content inside<code>&lt;blockquote class="blockquote"&gt;</code>
              </p>
              <blockquote class="blockquote">
                <p class="mb-0"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p>
              </blockquote>
            </div>
            <div class="card-body">
              <blockquote class="blockquote blockquote-primary">
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>