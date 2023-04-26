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
        <h3 class="page-title">Basic Tables</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page"> Basic tables </li>
          </ol>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Basic Table</h4>
              <p class="card-description"> Add class <code>.table</code>
              </p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Profile</th>
                      <th>VatNo.</th>
                      <th>Created</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jacob</td>
                      <td>53275531</td>
                      <td>12 May 2017</td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                    </tr>
                    <tr>
                      <td>Messsy</td>
                      <td>53275532</td>
                      <td>15 May 2017</td>
                      <td>
                        <label class="badge badge-warning">In progress</label>
                      </td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>53275533</td>
                      <td>14 May 2017</td>
                      <td>
                        <label class="badge badge-info">Fixed</label>
                      </td>
                    </tr>
                    <tr>
                      <td>Peter</td>
                      <td>53275534</td>
                      <td>16 May 2017</td>
                      <td>
                        <label class="badge badge-success">Completed</label>
                      </td>
                    </tr>
                    <tr>
                      <td>Dave</td>
                      <td>53275535</td>
                      <td>20 May 2017</td>
                      <td>
                        <label class="badge badge-warning">In progress</label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Hoverable Table</h4>
              <p class="card-description"> Add class <code>.table-hover</code>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>Product</th>
                      <th>Sale</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jacob</td>
                      <td>Photoshop</td>
                      <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        <label class="badge badge-danger">Pending</label>
                      </td>
                    </tr>
                    <tr>
                      <td>Messsy</td>
                      <td>Flash</td>
                      <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        <label class="badge badge-warning">In progress</label>
                      </td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>Premier</td>
                      <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i>
                      </td>
                      <td>
                        <label class="badge badge-info">Fixed</label>
                      </td>
                    </tr>
                    <tr>
                      <td>Peter</td>
                      <td>After effects</td>
                      <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i>
                      </td>
                      <td>
                        <label class="badge badge-success">Completed</label>
                      </td>
                    </tr>
                    <tr>
                      <td>Dave</td>
                      <td>53275535</td>
                      <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i>
                      </td>
                      <td>
                        <label class="badge badge-warning">In progress</label>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Striped Table</h4>
              <p class="card-description"> Add class <code>.table-striped</code>
              </p>
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>First name</th>
                      <th>Progress</th>
                      <th>Amount</th>
                      <th>Deadline</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-1.png" alt="image" />
                      </td>
                      <td>Herman Beck</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-2.png" alt="image" />
                      </td>
                      <td>Messsy Adam</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$245.30</td>
                      <td>July 1, 2015</td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-3.png" alt="image" />
                      </td>
                      <td>John Richards</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$138.00</td>
                      <td>Apr 12, 2015</td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-4.png" alt="image" />
                      </td>
                      <td>Peter Meggik</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-1.png" alt="image" />
                      </td>
                      <td>Edward</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 160.25</td>
                      <td>May 03, 2015</td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-2.png" alt="image" />
                      </td>
                      <td>John Doe</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 123.21</td>
                      <td>April 05, 2015</td>
                    </tr>
                    <tr>
                      <td class="py-1">
                        <img src="view/images/faces-clipart/pic-3.png" alt="image" />
                      </td>
                      <td>Henry Tom</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 150.00</td>
                      <td>June 16, 2015</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description"> Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First name</th>
                      <th>Progress</th>
                      <th>Amount</th>
                      <th>Deadline</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Herman Beck</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Messsy Adam</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$245.30</td>
                      <td>July 1, 2015</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>John Richards</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 90%;" aria-valuenow="90"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$138.00</td>
                      <td>Apr 12, 2015</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Peter Meggik</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-primary" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Edward</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-danger" role="progressbar" style="width: 35%;" aria-valuenow="35"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 160.25</td>
                      <td>May 03, 2015</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>John Doe</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-info" role="progressbar" style="width: 65%;" aria-valuenow="65"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 123.21</td>
                      <td>April 05, 2015</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Henry Tom</td>
                      <td>
                        <div class="progress">
                          <div class="progress-bar bg-warning" role="progressbar" style="width: 20%;" aria-valuenow="20"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td>$ 150.00</td>
                      <td>June 16, 2015</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Inverse table</h4>
              <p class="card-description"> Add class <code>.table-dark</code>
              </p>
              <div class="table-responsive">
                <table class="table table-dark">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First name</th>
                      <th>Amount</th>
                      <th>Deadline</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Herman Beck</td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Messsy Adam</td>
                      <td>$245.30</td>
                      <td>July 1, 2015</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>John Richards</td>
                      <td>$138.00</td>
                      <td>Apr 12, 2015</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Peter Meggik</td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Edward</td>
                      <td>$ 160.25</td>
                      <td>May 03, 2015</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>John Doe</td>
                      <td>$ 123.21</td>
                      <td>April 05, 2015</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>Henry Tom</td>
                      <td>$ 150.00</td>
                      <td>June 16, 2015</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Table with contextual classes</h4>
              <p class="card-description"> Add class <code>.table-{color}</code>
              </p>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First name</th>
                      <th>Product</th>
                      <th>Amount</th>
                      <th>Deadline</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="table-info">
                      <td>1</td>
                      <td>Herman Beck</td>
                      <td>Photoshop</td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr class="table-warning">
                      <td>2</td>
                      <td>Messsy Adam</td>
                      <td>Flash</td>
                      <td>$245.30</td>
                      <td>July 1, 2015</td>
                    </tr>
                    <tr class="table-danger">
                      <td>3</td>
                      <td>John Richards</td>
                      <td>Premeire</td>
                      <td>$138.00</td>
                      <td>Apr 12, 2015</td>
                    </tr>
                    <tr class="table-success">
                      <td>4</td>
                      <td>Peter Meggik</td>
                      <td>After effects</td>
                      <td>$ 77.99</td>
                      <td>May 15, 2015</td>
                    </tr>
                    <tr class="table-primary">
                      <td>5</td>
                      <td>Edward</td>
                      <td>Illustrator</td>
                      <td>$ 160.25</td>
                      <td>May 03, 2015</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>